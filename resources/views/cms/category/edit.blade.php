@foreach ($categories as $category)
    <div class="modal fade" id="editModal-{{ $category->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="d-flex align-items-start justify-content-between gap-3 mb-4">
                    <div>
                        <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Edit Category</h5>
                    </div>

                </div>

                <form action="{{ route('cms.category.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="form_type" value="edit">
                    <input type="hidden" name="category_id" value="{{ $category->id }}">

                    <div class="row g-3">
                        <label class="lbl mb-1 d-block">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Masukkan nama user"
                            value="{{ old('category_id') == $category->id ? old('name') : $category->name }}">

                        @if (old('category_id') == $category->id)
                            @error('name')
                                <div class="invalid-text d-block">{{ $message }}</div>
                            @enderror
                        @endif
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn-ghost" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn-submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

@if ($errors->any() && old('form_type') === 'edit')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalId = 'editModal-{{ old('category_id') }}';
            const modalElement = document.getElementById(modalId);

            if (modalElement) {
                const modal = new bootstrap.Modal(modalElement);
                modal.show();
            }
        });
    </script>
@endif
