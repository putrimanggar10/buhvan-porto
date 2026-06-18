    <div class="modal fade" id="createUserModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content p-4">
                <div class="d-flex align-items-start justify-content-between gap-3 mb-4">
                    <div>
                        <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Tambah User</h5>
                    </div>

                </div>

                <form action="{{ route('cms.users.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan nama user">
                        </div>

                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email user">
                        </div>

                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                        </div>

                        <div class="col-md-6">
                            <label class="lbl mb-1 d-block">Konfirmasi Password</label>
                            <input type="password" class="form-control" placeholder="Ulangi password">
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
