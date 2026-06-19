@extends('cms.layouts.app')

@section('content')
    <section class="view is-active" id="view-list">
        <div class="page-head">
            <div>
                <h1>Category Managements</h1>
            </div>
            <div class="breadcrumb-mini">Dashboard <span class="sep">/</span>Category Managements</div>
        </div>

        <div class="action-row">
            <div class="filter-bar" id="filterBar">
            </div>
            <button class="btn-add" data-bs-toggle="modal" data-bs-target="#createUserModal">
                <i class="bi bi-plus-lg"></i> Tambah Category
            </button>
        </div>


        <div class="card-surface">
            <div class="table-toolbar">
                <div class="tt-left">
                    <div class="entries">
                        Tampilkan
                        <select id="entriesSel" onchange="renderTable()">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                    </div>
                </div>
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" id="searchInput" placeholder="Search...">

                </div>
            </div>
            <div class="table-responsive">
                <table class="wt-table align-middle">
                    <thead>
                        <tr>
                            <th class="text-nowrap" style="width: 80px;">
                                No <i class="bi bi-arrow-down-up sort"></i>
                            </th>

                            <th>
                                Name <i class="bi bi-arrow-down-up sort"></i>
                            </th>

                            <th class="text-center text-nowrap" style="width: 230px;">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody id="tableBody">
                        @forelse ($categories as $index => $category)
                            <tr class="row-main status-row" data-status="{{ strtolower($category->name) }}">
                                <td class="align-middle">
                                    <div class="no-cell">
                                        <span class="row-number">
                                            {{ $categories->firstItem() + $index }}
                                        </span>
                                    </div>
                                </td>

                                <td class="align-middle">
                                    {{ $category->name }}
                                </td>

                                <td class="align-middle text-end">
                                    <div class="d-flex justify-content-end align-items-center flex-nowrap gap-2">
                                        <button type="button" class="btn-edit text-nowrap" data-bs-toggle="modal"
                                            data-bs-target="#editModal-{{ $category->id }}">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </button>

                                        <button type="button" class="btn-del text-nowrap" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal-{{ $category->id }}">
                                            <i class="bi bi-trash3"></i>
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr id="emptyRow">
                                <td colspan="3">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox"></i>
                                        Category tidak ditemukan.
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

    @foreach ($categories as $category)
        <div class="modal fade" id="deleteModal-{{ $category->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4">
                    <div class="modal-icon"><i class="bi bi-trash3"></i></div>
                    <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Hapus ini?</h5>
                    <p class="mb-4" style="color:var(--ink-soft)">Category akan dihapus permanen.</p>
                    <div class="d-flex gap-2 justify-content-center">
                        <form action="{{ route('cms.category.destroy', $category->id) }}" method="post">
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
@include('cms.category.create')
@include('cms.category.edit')


@push('scripts')
    <script>
        function detailRow(row) {
            return row.nextElementSibling;
        }

        function closeDetail(row) {
            const button = row.querySelector('.toggle');
            const wrap = detailRow(row)?.querySelector('.detail-wrap');

            if (!button || !wrap) return;

            wrap.style.maxHeight = '0px';
            button.classList.remove('is-open');
            button.innerHTML = '<i class="bi bi-plus"></i>';
        }

        function toggleDetail(index) {
            const wrap = document.getElementById('dw-' + index);
            const button = document.getElementById('tg-' + index);

            if (!wrap || !button) return;

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

        function renderTable() {
            const query = (document.getElementById('searchInput').value || '').toLowerCase();
            const limit = parseInt(document.getElementById('entriesSel').value, 10);
            const rows = Array.from(document.querySelectorAll('.status-row'));
            const entriesInfo = document.getElementById('entriesInfo');

            let shown = 0;
            let matched = 0;

            rows.forEach(row => {
                const detail = detailRow(row);
                const rowText = row.dataset.status || row.textContent.toLowerCase();

                const matchSearch = rowText.includes(query);

                if (matchSearch) {
                    matched++;
                }

                const visible = matchSearch && shown < limit;

                row.style.display = visible ? '' : 'none';

                if (detail) {
                    detail.style.display = visible ? '' : 'none';
                }

                if (visible) {
                    shown++;

                    const rowNumber = row.querySelector('.row-number');
                    if (rowNumber) {
                        rowNumber.textContent = shown;
                    }
                } else {
                    closeDetail(row);
                }
            });

            const emptyRow = document.getElementById('emptyRow');

            if (emptyRow) {
                emptyRow.style.display = shown ? 'none' : '';
            }

            if (entriesInfo) {
                entriesInfo.textContent = shown ?
                    `Menampilkan ${shown} dari ${matched} data` :
                    'Menampilkan 0 data';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('searchInput').addEventListener('input', renderTable);
            document.getElementById('entriesSel').addEventListener('change', renderTable);

            renderTable();
        });
    </script>
@endpush
