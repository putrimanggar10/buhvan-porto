<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Category::query();

        // Filter berdasarkan pencarian
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }
        $category = $query->paginate(50);

        return view('cms.category.category', [
            'title' => 'Category',
            'categories' => $category->appends([
                'search' => $request->input('search'),
            ]),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    'unique:categories,name',
                ],
            ],
            [
                'name.required' => 'Nama kategori wajib diisi.',
                'name.string' => 'Nama kategori harus berupa teks.',
                'name.max' => 'Nama kategori maksimal 255 karakter.',
                'name.unique' => 'Nama kategori sudah digunakan.',
            ]
        );

        try {
            Category::create($validatedData);

            return redirect('/dashboard/category')
                ->with('success', 'Category berhasil ditambahkan.');
        } catch (\Throwable $e) {
            Log::error('Gagal menambahkan category', [
                'message' => $e->getMessage(),
                'data' => $validatedData,
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal menambahkan category. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate(
            [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                    Rule::unique('categories', 'name')->ignore($id),
                ],
            ],
            [
                'name.required' => 'Nama kategori wajib diisi.',
                'name.string' => 'Nama kategori harus berupa teks.',
                'name.max' => 'Nama kategori maksimal 255 karakter.',
                'name.unique' => 'Nama kategori sudah digunakan.',
            ]
        );

        try {
            $category = Category::findOrFail($id);

            $category->update($validatedData);

            return redirect('/dashboard/category')
                ->with('success', 'Category berhasil diupdate.');
        } catch (\Throwable $e) {
            Log::error('Gagal mengupdate category', [
                'category_id' => $id,
                'message' => $e->getMessage(),
                'data' => $validatedData,
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Gagal mengupdate category. Silakan coba lagi.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);

            $category->delete();

            return redirect('/dashboard/category')
                ->with('success', 'Category berhasil dihapus.');
        } catch (\Throwable $e) {
            Log::error('Gagal menghapus category', [
                'category_id' => $id,
                'message' => $e->getMessage(),
            ]);

            return redirect('/dashboard/category')
                ->with('error', 'Gagal menghapus category. Silakan coba lagi.');
        }
    }
}
