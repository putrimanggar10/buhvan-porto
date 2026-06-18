@extends('cms.layouts.app')

@section('content')
  

    <section class="view is-active" id="view-list">
        <div class="page-head">
            <div>
                <h1>Project Management</h1>
            </div>
            <div class="breadcrumb-mini">Dashboard <span class="sep">/</span>Project Management</div>
        </div>

        <div class="action-row">
            <div class="filter-bar" id="filterBar">
                <button class="fpill active" type="button" data-filter="all">
                    Semua <span class="cnt">{{ $project->total() }}</span>
                </button>
                <button class="fpill at" type="button" data-filter="active">
                    Active
                </button>
                <button class="fpill ab" type="button" data-filter="inactive">
                    Inactive
                </button>
            </div>
            <a href="/dashboard/projects/create" class="btn-add">
                <i class="bi bi-plus-lg"></i> Tambah Project
            </a>
        </div>

        <div class="card-surface">
            <div class="table-toolbar">
                <div class="tt-left">
                    <div class="entries">Tampilkan
                        <select id="entriesSel" onchange="renderProjectTable()">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <form action="{{ url()->current() }}" method="get" class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" name="search" id="searchInput" placeholder="Cari project..."
                        value="{{ old('search', request('search')) }}" oninput="renderProjectTable()">
                </form>
            </div>

            <div class="table-responsive">
                <table class="wt-table">
                    <thead>
                        <tr>
                            <th>No <i class="bi bi-arrow-down-up sort"></i></th>
                            <th>Project <i class="bi bi-arrow-down-up sort"></i></th>
                            <th>Images</th>
                            <th>Thumbnail</th>
                            <th>Slug</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        @forelse ($project as $index => $item)
                            @php
                                $images = json_decode($item->gambar ?? '[]', true) ?: [];
                                $techs = json_decode($item->tech ?? '[]', true) ?: [];
                                $statusClass = strtolower($item->status) === 'active' ? 'approved' : 'rejected';
                            @endphp
                            <tr class="row-main project-row"
                                data-search="{{ strtolower($item->title . ' ' . ($item->category->name ?? '') . ' ' . $item->slug . ' ' . $item->status) }}"
                                data-status="{{ strtolower($item->status) }}">
                                <td>
                                    <div class="no-cell">
                                        <button class="toggle" id="tg-{{ $index }}" type="button"
                                            onclick="toggleProjectDetail({{ $index }})">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                        <span class="row-number">{{ $project->firstItem() + $index }}</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="/dashboard/projects/{{ $item->id }}/edit" class="project-title">
                                        {{ $item->title }}
                                    </a>
                                    <div class="project-meta">{{ $item->category->name ?? 'Tanpa kategori' }}</div>
                                </td>
                                <td>
                                    <div class="project-stack">
                                        @forelse ($images as $gambar)
                                            <img src="{{ asset('/assets/images/project/' . $gambar) }}"
                                                alt="{{ $item->title }}">
                                        @empty
                                            <span class="project-meta">Belum ada</span>
                                        @endforelse
                                    </div>
                                </td>
                                <td>
                                    @if ($item->thumbnail)
                                        <img src="{{ asset('/assets/images/project/' . $item->thumbnail) }}"
                                            alt="{{ $item->title }}" class="project-cover">
                                    @else
                                        <span class="project-meta">Belum ada</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="project-link" href="/projects/{{ $item->slug }}" target="_blank">
                                        <i class="bi bi-box-arrow-up-right"></i>
                                        /project/{{ $item->slug }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge-status {{ $statusClass }}">
                                        <i
                                            class="bi {{ $statusClass === 'approved' ? 'bi-check-circle' : 'bi-x-circle' }}"></i>
                                        {{ $item->status }}
                                    </span>
                                </td>
                            </tr>

                            <tr class="detail-row project-detail-row" id="detail-row-{{ $index }}">
                                <td colspan="6">
                                    <div class="detail-wrap" id="dw-{{ $index }}">
                                        <div class="detail-inner">
                                            <div class="detail-line">
                                                <div class="k">Tahun</div>
                                                <div class="v">{{ $item->year ?? '-' }}</div>
                                            </div>
                                            <div class="detail-line">
                                                <div class="k">Tech Stack</div>
                                                <div class="v">{{ count($techs) ? implode(', ', $techs) : '-' }}</div>
                                            </div>
                                            <div class="detail-line">
                                                <div class="k">Update Terakhir</div>
                                                <div class="v">{{ $item->updated_at?->format('d F Y') ?? '-' }}</div>
                                            </div>
                                            <div class="detail-actions">
                                                <a class="btn-edit" href="/dashboard/projects/{{ $item->id }}/edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                    Edit
                                                </a>
                                                <button class="btn-del" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal-{{ $item->id }}">
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
                                <td colspan="6">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox"></i>
                                        Project tidak ditemukan.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="table-foot">
                <div class="info" id="entriesInfo">
                    Showing {{ $project->firstItem() ?? 0 }} to {{ $project->lastItem() ?? 0 }} of
                    {{ $project->total() }} entries
                </div>
                <div class="pager">
                    @if ($project->onFirstPage())
                        <span class="is-disabled"><i class="bi bi-chevron-left"></i></span>
                    @else
                        <a href="{{ $project->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a>
                    @endif

                    @for ($i = 1; $i <= $project->lastPage(); $i++)
                        <a class="{{ $i == $project->currentPage() ? 'is-active' : '' }}"
                            href="{{ $project->url($i) }}">{{ $i }}</a>
                    @endfor

                    @if ($project->hasMorePages())
                        <a href="{{ $project->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a>
                    @else
                        <span class="is-disabled"><i class="bi bi-chevron-right"></i></span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @foreach ($project as $item)
        <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-4">
                    <div class="modal-icon"><i class="bi bi-trash3"></i></div>
                    <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Hapus ini?</h5>
                    <p class="mb-4" style="color:var(--ink-soft)">Project akan dihapus permanen.</p>
                    <form action="{{ route('cms.projects.destroy', $item->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <div class="d-flex gap-2 justify-content-center">
                            <button type="button" class="btn-ghost" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn-del">
                                <i class="bi bi-trash3"></i>
                                Ya, hapus
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <a class="fab" href="/dashboard/projects/create" title="Tambah Project">
        <i class="bi bi-plus-lg"></i>
    </a>
@endsection

@push('scripts')
    <script>
        function toggleProjectDetail(index) {
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

        let currentProjectStatus = 'all';

        function renderProjectTable() {
            const query = document.getElementById('searchInput').value.trim().toLowerCase();
            const limit = parseInt(document.getElementById('entriesSel').value, 10);
            const rows = Array.from(document.querySelectorAll('.project-row'));
            let visible = 0;

            rows.forEach((row) => {
                const detail = row.nextElementSibling;
                const matchSearch = row.dataset.search.includes(query);
                const matchStatus = currentProjectStatus === 'all' || row.dataset.status === currentProjectStatus;
                const show = matchSearch && matchStatus && visible < limit;

                row.style.display = show ? '' : 'none';
                detail.style.display = show ? '' : 'none';

                if (show) {
                    visible++;
                }
            });

            const info = document.getElementById('entriesInfo');
            if (info) {
                info.textContent = `Menampilkan ${visible} project pada halaman ini`;
            }
        }

        document.querySelectorAll('#filterBar .fpill').forEach((button) => {
            button.addEventListener('click', () => {
                document.querySelectorAll('#filterBar .fpill').forEach((item) => item.classList.remove(
                    'active'));
                button.classList.add('active');

                currentProjectStatus = button.dataset.filter;
                renderProjectTable();
            });
        });

        renderProjectTable();
    </script>
@endpush
