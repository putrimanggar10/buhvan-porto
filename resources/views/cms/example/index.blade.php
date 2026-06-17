  @extends('cms.layouts.app')

  @section('content')
  <section class="view is-active" id="view-list">
        <div class="page-head">
          <div>
            <h1>Lorem Ipsum </h1>
            <div class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
          </div>
          <div class="breadcrumb-mini">Dashboard <span class="sep">/</span>Lorem Ipsum</div>
        </div>

        <div class="action-row">
          <div class="filter-bar" id="filterBar">
            <button class="fpill active" data-f="all" onclick="setFilter('all',this)">Semua <span class="cnt" id="c-all">0</span></button>
            <button class="fpill at" data-f="AT" onclick="setFilter('AT',this)"><i class="bi bi-person-check"></i> AT <span class="cnt" id="c-AT">0</span></button>
            <button class="fpill ab" data-f="AB" onclick="setFilter('AB',this)"><i class="bi bi-person-dash"></i> AB <span class="cnt" id="c-AB">0</span></button>
          </div>
          <button class="btn-add" onclick="showView('add')"><i class="bi bi-plus-lg"></i> Tambah Status</button>
        </div>

        <!-- (6) Info AT vs AB -->
        <div class="type-legend">
          <div class="tl-head"><i class="bi bi-info-circle-fill"></i> Keterangan Tipe</div>
          <div class="tl-item"><span class="type-tag at">AT</span><div class="tl-txt"><b>Status Kehadiran</b> — tetap masuk/hadir dengan kondisi tertentu (telat, WFH, dinas luar, dll).</div></div>
          <div class="tl-item"><span class="type-tag ab">AB</span><div class="tl-txt"><b>Status Ketidakhadiran</b> — tidak masuk kerja (sakit, cuti, izin, dll).</div></div>
        </div>

        <div class="card-surface">
          <div class="table-toolbar">
            <div class="tt-left">
              <div class="entries">Tampilkan
                <select id="entriesSel" onchange="renderTable()"><option>10</option><option>25</option><option>50</option></select> data
              </div>
              <div class="date-filter">
                <span class="df-lbl"><i class="bi bi-calendar3"></i> Periode</span>
                <input type="date" id="dfFrom" class="df-input" onchange="renderTable()">
                <span class="df-sep">–</span>
                <input type="date" id="dfTo" class="df-input" onchange="renderTable()">
                <button class="df-clear" id="dfClear" onclick="clearDateFilter()" title="Reset periode"><i class="bi bi-x-lg"></i></button>
              </div>
            </div>
            <div class="search-box"><i class="bi bi-search"></i><input type="text" id="searchInput" placeholder="Cari status…" oninput="renderTable()"></div>
          </div>
          <div class="table-responsive">
            <table class="wt-table">
              <thead><tr>
                <th>No <i class="bi bi-arrow-down-up sort"></i></th>
                <th>Tipe <i class="bi bi-arrow-down-up sort"></i></th>
                <th>Status <i class="bi bi-arrow-down-up sort"></i></th>
                <th>Dari <i class="bi bi-arrow-down-up sort"></i></th>
                <th>Sampai <i class="bi bi-arrow-down-up sort"></i></th>
              </tr></thead>
              <tbody id="tableBody"></tbody>
            </table>
          </div>
          <div class="table-foot">
            <div class="info" id="entriesInfo"></div>
            <div class="pager"><button disabled><i class="bi bi-chevron-left"></i></button><button class="is-active">1</button><button disabled><i class="bi bi-chevron-right"></i></button></div>
          </div>
        </div>
      </section>

      <!-- VIEW: ADD -->
      <section class="view" id="view-add">
        <div class="page-head">
          <div><h1>Tambah Status</h1><div class="lead">Ajukan pengajuan kehadiran atau ketidakhadiran baru untuk disetujui HR.</div></div>
          <div class="breadcrumb-mini"><span class="lnk" onclick="showView('list')">List Status</span><span class="sep">/</span>Tambah Status</div>
        </div>
        <div class="card-surface form-card">
          <div class="form-row">
            <label class="lbl">Tipe</label>
            <div class="segment" id="typeSeg">
              <button class="on" data-type="AT" onclick="setType('AT',this)"><span class="ring"></span> Status Kehadiran (AT)</button>
              <button data-type="AB" onclick="setType('AB',this)"><span class="ring"></span> Status Ketidakhadiran (AB)</button>
            </div>
          </div>
          <div class="form-row" id="selectGroup">
            <label class="lbl">Pilih</label>
            <div>
              <select class="form-select" id="statusSelect"><option value="">Pilih</option></select>
              <div class="invalid-text"><i class="bi bi-exclamation-circle"></i> Pilih status dulu sebelum mengirim.</div>
            </div>
          </div>
          <div class="form-row" id="periodeGroup">
            <label class="lbl">Periode</label>
            <div>
              <div class="periode">
                <input type="date" class="form-control" id="dateFrom" value="2026-06-08" onchange="syncPeriode()">
                <span class="sd">s/d</span>
                <input type="date" class="form-control" id="dateTo" value="2026-06-08" min="2026-06-08" onchange="syncPeriode()">
              </div>
              <div class="invalid-text"><i class="bi bi-exclamation-circle"></i> Tanggal akhir harus sama atau setelah tanggal awal.</div>
            </div>
          </div>
          <div class="form-row">
            <label class="lbl">Catatan</label>
            <div>
              <input type="text" class="form-control" id="noteInput" maxlength="160" placeholder="Tulis catatan status" oninput="document.getElementById('noteCount').textContent=this.value.length">
              <div class="help"><span id="noteCount">0</span>/160 — opsional, tapi bantu HR menyetujui lebih cepat.</div>
            </div>
          </div>
          <div class="form-row">
            <span></span>
            <div class="form-actions"><button class="btn-submit" onclick="submitStatus()">Kirim</button><button class="btn-ghost" onclick="showView('list')">Batal</button></div>
          </div>
        </div>
      </section>

      <div class="modal fade" id="deleteModal" tabindex="-1"><div class="modal-dialog modal-dialog-centered"><div class="modal-content text-center p-4">
  <div class="modal-icon"><i class="bi bi-trash3"></i></div>
  <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Hapus status ini?</h5>
  <p class="mb-4" style="color:var(--ink-soft)">Pengajuan akan dihapus permanen dan tidak akan terlihat oleh HR lagi.</p>
  <div class="d-flex gap-2 justify-content-center"><button class="btn-ghost" data-bs-dismiss="modal">Batal</button><button class="btn-del" id="confirmDelete"><i class="bi bi-trash3"></i> Ya, hapus</button></div>
</div>
</div>
</div>
  @endsection
