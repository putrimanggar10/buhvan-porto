    <div class="modal fade" id="createUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="d-flex align-items-start justify-content-between gap-3 mb-4">
                    <div>
                        <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Tambah User</h5>
                    </div>

                </div>

                <form action="{{ route('cms.category.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <label class="lbl mb-1 d-block">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Masukkan nama user" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-text d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn-ghost" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn-submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const modal = new bootstrap.Modal(
                    document.getElementById('createUserModal')
                );

                modal.show();
            });
        </script>
    @endif
