@foreach ($users as $user)
    <div class="modal fade" id="editModal-{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="d-flex align-items-start justify-content-between gap-3 mb-4">
                    <div>
                        <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Edit User</h5>
                    </div>

                </div>

                <form action="{{ route('cms.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="form_type" value="edit">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Nama</label>
                            <input type="text" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                placeholder="Masukkan nama user"
                                value="{{ old('user_id') == $user->id ? old('name') : $user->name }}">

                            @if (old('user_id') == $user->id)
                                @error('name')
                                    <div class="invalid-text d-block">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Masukkan email user"
                                value="{{ old('user_id') == $user->id ? old('email') : $user->email }}">

                            @if (old('user_id') == $user->id)
                                @error('email')
                                    <div class="invalid-text d-block">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Password Baru</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Kosongkan jika tidak diganti">

                            @if (old('user_id') == $user->id)
                                @error('password')
                                    <div class="invalid-text d-block">{{ $message }}</div>
                                @enderror
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Ulangi password baru">
                        </div>
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
            const modalId = 'editModal-{{ old('user_id') }}';
            const modalElement = document.getElementById(modalId);

            if (modalElement) {
                const modal = new bootstrap.Modal(modalElement);
                modal.show();
            }
        });
    </script>
@endif
