@extends('cms.layouts.app')

@section('content')
   

    <section class="view is-active">
        <div class="page-head">
            <div>
                <h1>Tambah Project</h1>
                <div class="lead">Lengkapi informasi project baru untuk ditampilkan di portfolio.</div>
            </div>
            <div class="breadcrumb-mini">
                <a href="/dashboard/projects" class="lnk text-decoration-none">List Project</a>
                <span class="sep">/</span>Tambah Project
            </div>
        </div>

        <form action="{{ route('cms.projects.store') }}" method="post" enctype="multipart/form-data"
            class="card-surface project-form-card">
            @csrf

            <div class="field-grid">
                <label class="lbl" for="title">Project Name <span class="required-pill">Required</span></label>
                <div>
                    <input id="title" name="title" type="text" class="form-control" placeholder="Masukkan nama project"
                        required
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="slug">Slug <span class="required-pill">Required</span></label>
                <div>
                    <input id="slug" name="slug" type="text" class="form-control" value="{{ old('slug') }}" readonly>
                    @error('slug')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="category_id">Category <span class="required-pill">Required</span></label>
                <div>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="">Pilih Category</option>
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="techInput">Technology <span class="required-pill">Required</span></label>
                <div>
                    <div class="tag-editor" id="techEditor">
                        <input id="techInput" type="text" placeholder="Ketik teknologi lalu tekan Enter">
                    </div>
                    <div class="help">Contoh: Laravel, Bootstrap, MySQL.</div>
                    @error('tech')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="input">Project Photos <span class="required-pill">Required</span></label>
                <div>
                    <div class="upload-zone">
                        <div class="preview-grid" id="preview-container0"></div>
                        <div class="upload-empty">
                            <i class="bi bi-image"></i>
                            <span>Upload project photos atau drag and drop</span>
                        </div>
                        <input id="input" type="file" name="gambar[]" multiple accept="image/*" required
                            onchange="previewImage(event)">
                    </div>
                    @error('gambar')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                    @error('gambar.*')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="thumbnail">Thumbnail <span class="required-pill">Required</span></label>
                <div>
                    <div class="upload-zone">
                        <div class="preview-grid" id="preview-thumbnail"></div>
                        <div class="upload-empty">
                            <i class="bi bi-card-image"></i>
                            <span>Upload thumbnail project</span>
                        </div>
                        <input id="thumbnail" type="file" name="thumbnail" accept="image/*" required
                            onchange="previewImagethumbnail(event)">
                    </div>
                    @error('thumbnail')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="desc">Description</label>
                <div>
                    <textarea name="desc" id="desc" rows="5" class="form-control" placeholder="Tulis deskripsi project">{{ old('desc') }}</textarea>
                    @error('desc')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="preview">Preview</label>
                <div>
                    <input id="preview" name="preview" type="url" class="form-control"
                        placeholder="https://example.com" value="{{ old('preview') }}">
                    @error('preview')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="code">Code</label>
                <div>
                    <input id="code" name="code" type="url" class="form-control"
                        placeholder="https://github.com/username/project" value="{{ old('code') }}">
                    @error('code')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="year">Date <span class="required-pill">Required</span></label>
                <div>
                    <input id="year" name="year" type="date" class="form-control" value="{{ old('year') }}" required>
                    @error('year')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="field-grid">
                <label class="lbl" for="status">Project Status</label>
                <div>
                    <div class="switch-row">
                        <input id="status" name="status" class="form-check-input" type="checkbox"
                            {{ old('status') == 'on' ? 'checked' : '' }}>
                        <label for="status">Active</label>
                    </div>
                    <div class="help">Jika aktif, project dapat ditampilkan sebagai project aktif.</div>
                </div>
            </div>

            <div class="field-grid">
                <span></span>
                <div class="form-actions">
                    <button type="submit" name="action" value="save" class="btn-submit">Simpan</button>
                    <button type="submit" name="action" value="save_add" class="btn-ghost">Simpan & Tambah</button>
                    <a href="/dashboard/projects" class="btn-ghost text-decoration-none">Batal</a>
                </div>
            </div>
        </form>
    </section>
@endsection

@push('scripts')
    <script>
        const form = document.querySelector('.project-form-card');
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');
        const techEditor = document.querySelector('#techEditor');
        const techInput = document.querySelector('#techInput');
        const oldTech = @json(old('tech', []));
        let timeout = null;
        let techValues = [];

        function syncSlug() {
            clearTimeout(timeout);

            if (title.value.trim() === '') {
                slug.value = '';
                return;
            }

            timeout = setTimeout(() => {
                fetch('/dashboard/project/checkslug?title=' + encodeURIComponent(title.value))
                    .then(response => response.json())
                    .then(data => slug.value = data.slug)
                    .catch(error => console.error('Error fetching slug:', error));
            }, 300);
        }

        function renderTechTags() {
            techEditor.querySelectorAll('.tag-item, input[type="hidden"]').forEach((item) => item.remove());

            techValues.forEach((value, index) => {
                const tag = document.createElement('span');
                tag.className = 'tag-item';
                tag.innerHTML = `${value}<button type="button" aria-label="Hapus ${value}" onclick="removeTech(${index})"><i class="bi bi-x"></i></button>`;

                const hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = 'tech[]';
                hidden.value = value;

                techEditor.insertBefore(tag, techInput);
                techEditor.insertBefore(hidden, techInput);
            });
        }

        function addTech(value) {
            const cleanValue = value.trim();
            if (!cleanValue || techValues.includes(cleanValue)) {
                return;
            }

            techValues.push(cleanValue);
            techInput.value = '';
            renderTechTags();
        }

        function removeTech(index) {
            techValues.splice(index, 1);
            renderTechTags();
        }

        function previewImage(event) {
            const previewContainer = document.getElementById('preview-container0');
            previewContainer.innerHTML = '';

            Array.from(event.target.files).forEach((file) => {
                if (!file) {
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    const imagePreview = document.createElement('div');
                    imagePreview.className = 'preview-item';
                    imagePreview.innerHTML = `<img alt="Preview Image" src="${e.target.result}">`;
                    previewContainer.appendChild(imagePreview);
                };
                reader.readAsDataURL(file);
            });
        }

        function previewImagethumbnail(event) {
            const previewContainer = document.getElementById('preview-thumbnail');
            previewContainer.innerHTML = '';

            const file = event.target.files[0];
            if (!file) {
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const imagePreview = document.createElement('div');
                imagePreview.className = 'preview-item';
                imagePreview.innerHTML = `
                    <button type="button" class="preview-remove" onclick="removePreviewthumbnail()">
                        <i class="bi bi-x"></i>
                    </button>
                    <img alt="Preview Thumbnail" src="${e.target.result}">
                `;
                previewContainer.appendChild(imagePreview);
            };
            reader.readAsDataURL(file);
        }

        function removePreviewthumbnail() {
            document.getElementById('preview-thumbnail').innerHTML = '';
            document.getElementById('thumbnail').value = '';
        }

        title.addEventListener('input', syncSlug);
        techInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.key === ',') {
                event.preventDefault();
                addTech(techInput.value.replace(',', ''));
            }
        });
        form.addEventListener('submit', function() {
            addTech(techInput.value.replace(',', ''));
        });

        oldTech.forEach(addTech);
    </script>
@endpush
