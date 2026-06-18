@extends('cms.layouts.app')

@section('content')
    <section class="view is-active" id="view-list">
        <div class="page-head">
            <div>
                <h1>User Managements</h1>
            </div>
            <div class="breadcrumb-mini">Dashboard <span class="sep">/</span>User Managements</div>
        </div>

        <div class="action-row">
            <div class="filter-bar" id="filterBar">
            </div>
            <button class="btn-add" data-bs-toggle="modal" data-bs-target="#createUserModal">
                <i class="bi bi-plus-lg"></i> Tambah Users
            </button>
        </div>


        <div class="card-surface">
            <div class="table-toolbar">
                <div class="tt-left">
                    <div class="entries">Tampilkan
                        <select id="entriesSel" onchange="renderTable()">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <div class="search-box"><i class="bi bi-search"></i><input type="text" id="searchInput"
                        placeholder="Cari status..." oninput="renderTable()"></div>
            </div>
            <div class="table-responsive">
                <table class="wt-table">
                    <thead>
                        <tr>
                            <th>No <i class="bi bi-arrow-down-up sort"></i></th>
                            <th>Name <i class="bi bi-arrow-down-up sort"></i></th>
                            <th>Email <i class="bi bi-arrow-down-up sort"></i></th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @forelse($users as $index => $user)
                            <tr class="row-main status-row" data-type="USER"
                                data-status="{{ strtolower($user->name . ' ' . $user->email) }}"
                                data-from="{{ $user->created_at?->format('Y-m-d') }}"
                                data-to="{{ $user->updated_at?->format('Y-m-d') }}">
                                <td>
                                    <div class="no-cell">
                                        <button class="toggle" id="tg-{{ $index }}"
                                            onclick="toggleDetail({{ $index }})">
                                            <i class="bi bi-plus"></i>
                                        </button>

                                        <span class="row-number">
                                            {{ $users->firstItem() + $index }}
                                        </span>
                                    </div>
                                </td>


                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>

                            <tr class="detail-row" id="detail-row-{{ $index }}">
                                <td colspan="5">
                                    <div class="detail-wrap" id="dw-{{ $index }}">
                                        <div class="detail-inner">
                                            <div class="detail-actions">
                                                <button class="btn-edit" data-bs-toggle="modal"
                                                    data-bs-target="#editModal-{{ $user->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                    Edit
                                                </button>

                                                <button class="btn-del" data-bs-toggle="modal"
                                                    data-bs-target="#deletemodal-{{ $user->id }}">
                                                    <i class="bi bi-trash3"></i>
                                                    Hapus
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr id="emptyRow">
                                <td colspan="5">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox"></i>
                                        User tidak ditemukan.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="table-foot">
                <div class="info" id="entriesInfo"></div>
                <div class="pager"><button disabled><i class="bi bi-chevron-left"></i></button><button
                        class="is-active">1</button><button disabled><i class="bi bi-chevron-right"></i></button></div>
            </div>
        </div>
    </section>

    <section class="view" id="view-add">
        <div class="page-head">
            <div>
                <h1>Tambah Status</h1>
                <div class="lead">Ajukan pengajuan kehadiran atau ketidakhadiran baru untuk disetujui HR.</div>
            </div>
            <div class="breadcrumb-mini"><span class="lnk" onclick="showView('list')">List Status</span><span
                    class="sep">/</span>Tambah Status</div>
        </div>
        <div class="card-surface form-card">
            <div class="form-row">
                <label class="lbl">Tipe</label>
                <div class="segment" id="typeSeg">
                    <button class="on" data-type="AT" onclick="setType('AT',this)"><span class="ring"></span>
                        Status Kehadiran (AT)</button>
                    <button data-type="AB" onclick="setType('AB',this)"><span class="ring"></span> Status
                        Ketidakhadiran (AB)</button>
                </div>
            </div>
            <div class="form-row" id="selectGroup">
                <label class="lbl">Pilih</label>
                <div>
                    <select class="form-select status-select" data-type="AT">
                        <option value="">Pilih</option>
                        <option>Lateness with Approval</option>
                        <option>Personal Leave (0,5 day)</option>
                        <option>Support Customer</option>
                        <option>Meeting with Customer</option>
                        <option>Early Departure with Approval</option>
                        <option>WFH</option>
                        <option>DIKLAT</option>
                        <option>DINAS LUAR KOTA</option>
                        <option>Paid Leave</option>
                    </select>
                    <select class="form-select status-select d-none" data-type="AB">
                        <option value="">Pilih</option>
                        <option>Sick</option>
                        <option>Unpaid Leave</option>
                        <option>Marriage Leave</option>
                        <option>Maternity Leave</option>
                        <option>CUTI KHUSUS</option>
                        <option>Annual Leave (Personal Leave)</option>
                    </select>
                    <div class="invalid-text"><i class="bi bi-exclamation-circle"></i> Pilih status dulu sebelum mengirim.
                    </div>
                </div>
            </div>
            <div class="form-row" id="periodeGroup">
                <label class="lbl">Periode</label>
                <div>
                    <div class="periode">
                        <input type="date" class="form-control" id="dateFrom" value="2026-06-08"
                            onchange="syncPeriode()">
                        <span class="sd">s/d</span>
                        <input type="date" class="form-control" id="dateTo" value="2026-06-08" min="2026-06-08"
                            onchange="syncPeriode()">
                    </div>
                    <div class="invalid-text"><i class="bi bi-exclamation-circle"></i> Tanggal akhir harus sama atau
                        setelah tanggal awal.</div>
                </div>
            </div>
            <div class="form-row">
                <label class="lbl">Catatan</label>
                <div>
                    <input type="text" class="form-control" id="noteInput" maxlength="160"
                        placeholder="Tulis catatan status"
                        oninput="document.getElementById('noteCount').textContent=this.value.length">
                    <div class="help"><span id="noteCount">0</span>/160 - opsional, tapi bantu HR menyetujui lebih
                        cepat.</div>
                </div>
            </div>
            <div class="form-row">
                <span></span>
                <div class="form-actions"><button class="btn-submit" onclick="submitStatus()">Kirim</button><button
                        class="btn-ghost" onclick="showView('list')">Batal</button></div>
            </div>
        </div>
    </section>

    @foreach ($users as $user)
        <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4">
                    <div class="modal-icon"><i class="bi bi-trash3"></i></div>
                    <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Hapus ini?</h5>
                    <p class="mb-4" style="color:var(--ink-soft)">Users akan dihapus permanen.</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <form action="{{ route('cms.users.destroy', $user->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn-ghost" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn-del" id="confirmDelete">
                                <i class="bi bi-trash3"></i>
                                Ya, hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <button class="fab" data-bs-toggle="modal" data-bs-target="#createUserModal" title="Tambah Status"><i
            class="bi bi-plus-lg"></i></button>
    <div class="toast-stack" id="toastStack"></div>
@endsection
@include('cms.users.create')
@include('cms.users.edit')


@push('scripts')
    <script>
        function toggleDetail(index) {
            const wrap = document.getElementById('dw-' + index);
            const button = document.getElementById('tg-' + index);
            const open = wrap.style.maxHeight && wrap.style.maxHeight !== '0px';
            if (open) {
                wrap.style.maxHeight = '0px';
                button.classList.remove('is-open');
                button.innerHTML = '<i class="bi bi-plus"></i>';
            } else {
                wrap.style.maxHeight = wrap.scrollHeight + 'px';
                button.classList.add('is-open');
                button.innerHTML = '<i class="bi bi-dash"></i>';
            }
        }

        function closeDetail(row) {
            const button = row.querySelector('.toggle');
            const wrap = detailRow(row).querySelector('.detail-wrap');
            wrap.style.maxHeight = '0px';
            button.classList.remove('is-open');
            button.innerHTML = '<i class="bi bi-plus"></i>';
        }
    </script>
@endpush
