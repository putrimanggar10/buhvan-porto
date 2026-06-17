<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }
        $users = $query->paginate(10);

        return view('cms.users.users', [
            'title' => 'User Profil',
            'users' => $users->appends([
                'search' => $request->input('search')
            ]),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password' => 'required|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/dashboard/users')->with('success', 'Data User Berhasil di Tambahkan');
    }

    public function update(Request $request,  $id)
    {
        $validator = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'nullable|min:2'
        ]);
        if ($request->filled('password')) {
            $validator['password'] = Hash::make($validator['password']);
        } else {
            // Jika password tidak diisi, hapus password dari array validator
            unset($validator['password']);
        }

        try {
            $user = User::findOrFail($id);
            $user->update($validator);

            return redirect('/dashboard/users')->with('success', 'Data User Berhasil di Update');
        } catch (\Exception $e) {
            return redirect('/dashboard/users')->with('error', 'Gagal MengUpdate User. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        try {
            User::destroy($user->id);
            return redirect('/dashboard/users')->with('success', 'Data User Berhasil di Hapus');
        } catch (\Exception $e) {
            return redirect('/dashboard/users')->with('error', 'Gagal menghapus User. Silakan coba lagi.');
        }
    }
}
