@extends('cms.layouts.app')

@section('content')
  <section class="view is-active" id="view-list">
    <div class="page-head">
      <div>
        <h1>Lorem Ipsum</h1>
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

    <div class="type-legend">
      <div class="tl-head"><i class="bi bi-info-circle-fill"></i> Keterangan Tipe</div>
      <div class="tl-item"><span class="type-tag at">AT</span><div class="tl-txt"><b>Status Kehadiran</b> - tetap masuk/hadir dengan kondisi tertentu (telat, WFH, dinas luar, dll).</div></div>
      <div class="tl-item"><span class="type-tag ab">AB</span><div class="tl-txt"><b>Status Ketidakhadiran</b> - tidak masuk kerja (sakit, cuti, izin, dll).</div></div>
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
            <span class="df-sep">-</span>
            <input type="date" id="dfTo" class="df-input" onchange="renderTable()">
            <button class="df-clear" id="dfClear" onclick="clearDateFilter()" title="Reset periode"><i class="bi bi-x-lg"></i></button>
          </div>
        </div>
        <div class="search-box"><i class="bi bi-search"></i><input type="text" id="searchInput" placeholder="Cari status..." oninput="renderTable()"></div>
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
          <tbody id="tableBody">
            <tr class="row-main status-row" data-type="AB" data-status="annual leave (personal leave) ab" data-from="2026-05-29" data-to="2026-05-29">
              <td><div class="no-cell"><button class="toggle" id="tg-0" onclick="toggleDetail(0)"><i class="bi bi-plus"></i></button> <span class="row-number">1</span></div></td>
              <td><span class="type-tag ab" title="Status Ketidakhadiran">AB</span></td>
              <td>Annual Leave (Personal Leave)</td>
              <td>2026-05-29</td>
              <td>2026-05-29</td>
            </tr>
            <tr class="detail-row" id="detail-row-0"><td colspan="5"><div class="detail-wrap" id="dw-0"><div class="detail-inner">
              <div class="detail-line"><span class="k">Catatan</span><span class="v">Cuti 1 hari, sudah mengajukan form cuti dan disetujui oleh Lead & HR</span></div>
              <div class="detail-line"><span class="k">Status Persetujuan</span><span class="v"><span class="badge-status pending"><i class="bi bi-hourglass-split"></i> Menunggu</span></span></div>
              <div class="detail-line"><span class="k">Tanggal Dibuat</span><span class="v">2026-06-03</span></div>
              <div class="detail-line"><span class="k">Tanggal Disetujui</span><span class="v">- belum disetujui</span></div>
              <div class="detail-actions"><button class="btn-edit" onclick="askEdit(0)"><i class="bi bi-pencil-square"></i> Edit</button><button class="btn-del" onclick="askDelete(0)"><i class="bi bi-trash3"></i> Hapus</button></div>
            </div></div></td></tr>

            <tr class="row-main status-row" data-type="AT" data-status="wfh at" data-from="2026-04-29" data-to="2026-04-29">
              <td><div class="no-cell"><button class="toggle" id="tg-1" onclick="toggleDetail(1)"><i class="bi bi-plus"></i></button> <span class="row-number">2</span></div></td>
              <td><span class="type-tag at" title="Status Kehadiran">AT</span></td>
              <td>WFH</td>
              <td>2026-04-29</td>
              <td>2026-04-29</td>
            </tr>
            <tr class="detail-row" id="detail-row-1"><td colspan="5"><div class="detail-wrap" id="dw-1"><div class="detail-inner">
              <div class="detail-line"><span class="k">Catatan</span><span class="v">Izin WFH karena mengalami musibah, sudah berkomunikasi dengan lead dan diizinkan, sudah dibantu konfirmasi kepada HR.</span></div>
              <div class="detail-line"><span class="k">Status Persetujuan</span><span class="v"><span class="badge-status approved"><i class="bi bi-check-circle-fill"></i> Disetujui</span></span></div>
              <div class="detail-line"><span class="k">Tanggal Dibuat</span><span class="v">2026-05-12</span></div>
              <div class="detail-line"><span class="k">Tanggal Disetujui</span><span class="v">2026-05-20</span></div>
              <div class="detail-actions"><button class="btn-edit" onclick="askEdit(1)"><i class="bi bi-pencil-square"></i> Edit</button><button class="btn-del" onclick="askDelete(1)"><i class="bi bi-trash3"></i> Hapus</button></div>
            </div></div></td></tr>

            <tr class="row-main status-row" data-type="AB" data-status="annual leave (personal leave) ab" data-from="2026-04-27" data-to="2026-04-27">
              <td><div class="no-cell"><button class="toggle" id="tg-2" onclick="toggleDetail(2)"><i class="bi bi-plus"></i></button> <span class="row-number">3</span></div></td>
              <td><span class="type-tag ab" title="Status Ketidakhadiran">AB</span></td>
              <td>Annual Leave (Personal Leave)</td>
              <td>2026-04-27</td>
              <td>2026-04-27</td>
            </tr>
            <tr class="detail-row" id="detail-row-2"><td colspan="5"><div class="detail-wrap" id="dw-2"><div class="detail-inner">
              <div class="detail-line"><span class="k">Catatan</span><span class="v">Cuti tahunan keperluan keluarga.</span></div>
              <div class="detail-line"><span class="k">Status Persetujuan</span><span class="v"><span class="badge-status rejected"><i class="bi bi-x-circle-fill"></i> Ditolak</span></span></div>
              <div class="detail-line"><span class="k">Tanggal Dibuat</span><span class="v">2026-04-20</span></div>
              <div class="detail-line"><span class="k">Tanggal Disetujui</span><span class="v">- belum disetujui</span></div>
              <div class="detail-actions"><button class="btn-edit" onclick="askEdit(2)"><i class="bi bi-pencil-square"></i> Edit</button><button class="btn-del" onclick="askDelete(2)"><i class="bi bi-trash3"></i> Hapus</button></div>
            </div></div></td></tr>

            <tr class="row-main status-row" data-type="AT" data-status="lateness with approval at" data-from="2026-04-17" data-to="2026-04-17">
              <td><div class="no-cell"><button class="toggle" id="tg-3" onclick="toggleDetail(3)"><i class="bi bi-plus"></i></button> <span class="row-number">4</span></div></td>
              <td><span class="type-tag at" title="Status Kehadiran">AT</span></td>
              <td>Lateness with Approval</td>
              <td>2026-04-17</td>
              <td>2026-04-17</td>
            </tr>
            <tr class="detail-row" id="detail-row-3"><td colspan="5"><div class="detail-wrap" id="dw-3"><div class="detail-inner">
              <div class="detail-line"><span class="k">Catatan</span><span class="v">Terlambat karena macet, sudah info ke lead.</span></div>
              <div class="detail-line"><span class="k">Status Persetujuan</span><span class="v"><span class="badge-status approved"><i class="bi bi-check-circle-fill"></i> Disetujui</span></span></div>
              <div class="detail-line"><span class="k">Tanggal Dibuat</span><span class="v">2026-04-17</span></div>
              <div class="detail-line"><span class="k">Tanggal Disetujui</span><span class="v">2026-04-18</span></div>
              <div class="detail-actions"><button class="btn-edit" onclick="askEdit(3)"><i class="bi bi-pencil-square"></i> Edit</button><button class="btn-del" onclick="askDelete(3)"><i class="bi bi-trash3"></i> Hapus</button></div>
            </div></div></td></tr>

            <tr class="row-main status-row" data-type="AT" data-status="lateness with approval at" data-from="2026-04-02" data-to="2026-04-02">
              <td><div class="no-cell"><button class="toggle" id="tg-4" onclick="toggleDetail(4)"><i class="bi bi-plus"></i></button> <span class="row-number">5</span></div></td>
              <td><span class="type-tag at" title="Status Kehadiran">AT</span></td>
              <td>Lateness with Approval</td>
              <td>2026-04-02</td>
              <td>2026-04-02</td>
            </tr>
            <tr class="detail-row" id="detail-row-4"><td colspan="5"><div class="detail-wrap" id="dw-4"><div class="detail-inner">
              <div class="detail-line"><span class="k">Catatan</span><span class="v">Antar keluarga ke RS terlebih dahulu.</span></div>
              <div class="detail-line"><span class="k">Status Persetujuan</span><span class="v"><span class="badge-status approved"><i class="bi bi-check-circle-fill"></i> Disetujui</span></span></div>
              <div class="detail-line"><span class="k">Tanggal Dibuat</span><span class="v">2026-04-02</span></div>
              <div class="detail-line"><span class="k">Tanggal Disetujui</span><span class="v">2026-04-03</span></div>
              <div class="detail-actions"><button class="btn-edit" onclick="askEdit(4)"><i class="bi bi-pencil-square"></i> Edit</button><button class="btn-del" onclick="askDelete(4)"><i class="bi bi-trash3"></i> Hapus</button></div>
            </div></div></td></tr>

            <tr class="row-main status-row" data-type="AT" data-status="lateness with approval at" data-from="2026-03-13" data-to="2026-03-13">
              <td><div class="no-cell"><button class="toggle" id="tg-5" onclick="toggleDetail(5)"><i class="bi bi-plus"></i></button> <span class="row-number">6</span></div></td>
              <td><span class="type-tag at" title="Status Kehadiran">AT</span></td>
              <td>Lateness with Approval</td>
              <td>2026-03-13</td>
              <td>2026-03-13</td>
            </tr>
            <tr class="detail-row" id="detail-row-5"><td colspan="5"><div class="detail-wrap" id="dw-5"><div class="detail-inner">
              <div class="detail-line"><span class="k">Catatan</span><span class="v">Ban motor bocor di jalan.</span></div>
              <div class="detail-line"><span class="k">Status Persetujuan</span><span class="v"><span class="badge-status pending"><i class="bi bi-hourglass-split"></i> Menunggu</span></span></div>
              <div class="detail-line"><span class="k">Tanggal Dibuat</span><span class="v">2026-03-13</span></div>
              <div class="detail-line"><span class="k">Tanggal Disetujui</span><span class="v">- belum disetujui</span></div>
              <div class="detail-actions"><button class="btn-edit" onclick="askEdit(5)"><i class="bi bi-pencil-square"></i> Edit</button><button class="btn-del" onclick="askDelete(5)"><i class="bi bi-trash3"></i> Hapus</button></div>
            </div></div></td></tr>
            <tr id="emptyRow" style="display:none"><td colspan="5"><div class="empty-state"><i class="bi bi-inbox"></i>Status tidak ditemukan.</div></td></tr>
          </tbody>
        </table>
      </div>
      <div class="table-foot">
        <div class="info" id="entriesInfo"></div>
        <div class="pager"><button disabled><i class="bi bi-chevron-left"></i></button><button class="is-active">1</button><button disabled><i class="bi bi-chevron-right"></i></button></div>
      </div>
    </div>
  </section>

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
          <div class="help"><span id="noteCount">0</span>/160 - opsional, tapi bantu HR menyetujui lebih cepat.</div>
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
  </div></div></div>

  <div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-4">
        <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
          <div>
            <h5 class="display-font fw-bold mb-1" style="color:var(--ink)">Edit status</h5>
            <p class="mb-0" style="color:var(--ink-soft)">Ubah data pengajuan dummy dari baris yang dipilih.</p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="row g-3">
          <div class="col-md-4">
            <label class="lbl mb-1 d-block">Tipe</label>
            <select class="form-select" id="editType">
              <option>AT</option>
              <option>AB</option>
            </select>
          </div>
          <div class="col-md-8">
            <label class="lbl mb-1 d-block">Status</label>
            <input type="text" class="form-control" id="editStatus">
          </div>
          <div class="col-md-6">
            <label class="lbl mb-1 d-block">Dari</label>
            <input type="date" class="form-control" id="editFrom">
          </div>
          <div class="col-md-6">
            <label class="lbl mb-1 d-block">Sampai</label>
            <input type="date" class="form-control" id="editTo">
          </div>
          <div class="col-12">
            <label class="lbl mb-1 d-block">Catatan</label>
            <input type="text" class="form-control" id="editNote">
          </div>
        </div>
        <div class="d-flex justify-content-end gap-2 mt-4">
          <button class="btn-ghost" data-bs-dismiss="modal">Batal</button>
          <button class="btn-submit" id="saveEdit">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <button class="fab" onclick="showView('add')" title="Tambah Status"><i class="bi bi-plus-lg"></i></button>
  <div class="toast-stack" id="toastStack"></div>
@endsection

@push('scripts')
  <script>
    let currentFilter='all', currentType='AT', pendingDelete=null, pendingEdit=null;
    const deleteModalEl=document.getElementById('deleteModal');
    const deleteModal=deleteModalEl ? new bootstrap.Modal(deleteModalEl) : null;
    const editModalEl=document.getElementById('editModal');
    const editModal=editModalEl ? new bootstrap.Modal(editModalEl) : null;

    function statusRows(){return Array.from(document.querySelectorAll('.status-row'));}
    function detailRow(row){return row.nextElementSibling;}
    function rowMatchesDate(row, from, to){
      const rowFrom=row.dataset.from, rowTo=row.dataset.to || rowFrom;
      if(from && rowTo < from)return false;
      if(to && rowFrom > to)return false;
      return true;
    }
    function closeDetail(row){
      const button=row.querySelector('.toggle');
      const wrap=detailRow(row).querySelector('.detail-wrap');
      wrap.style.maxHeight='0px';
      button.classList.remove('is-open');
      button.innerHTML='<i class="bi bi-plus"></i>';
    }
    function updateCounts(){
      const rows=statusRows();
      const counts={all:rows.length,AT:0,AB:0};
      rows.forEach(row=>{counts[row.dataset.type]=(counts[row.dataset.type]||0)+1;});
      Object.keys(counts).forEach(key=>{const target=document.getElementById('c-'+key);if(target)target.textContent=counts[key];});
      const notifBadge=document.getElementById('notifBadge');
      const notifPending=document.getElementById('notifPending');
      if(notifBadge)notifBadge.textContent=rows.length;
      if(notifPending)notifPending.textContent=rows.length+' data';
    }
    function renderTable(){
      updateCounts();
      const query=(document.getElementById('searchInput').value||'').toLowerCase();
      const limit=parseInt(document.getElementById('entriesSel').value,10);
      const from=document.getElementById('dfFrom').value;
      const to=document.getElementById('dfTo').value;
      const rows=statusRows();
      let shown=0;
      document.getElementById('dfClear').classList.toggle('show', !!(from||to));
      rows.forEach(row=>{
        const matchesFilter=currentFilter==='all'||row.dataset.type===currentFilter;
        const matchesSearch=row.dataset.status.includes(query);
        const matchesDate=rowMatchesDate(row,from,to);
        const visible=matchesFilter&&matchesSearch&&matchesDate&&shown<limit;
        row.style.display=visible?'':'none';
        detailRow(row).style.display=visible?'':'none';
        if(visible){
          shown++;
          row.querySelector('.row-number').textContent=shown;
        }else{
          closeDetail(row);
        }
      });
      document.getElementById('emptyRow').style.display=shown?'none':'';
      document.getElementById('entriesInfo').textContent=shown ? `Menampilkan ${shown} dari ${rows.length} data` : 'Menampilkan 0 data';
    }
    function setFilter(filter,element){
      currentFilter=filter;
      document.querySelectorAll('.fpill').forEach(item=>item.classList.remove('active'));
      element.classList.add('active');
      element.scrollIntoView({inline:'center',block:'nearest',behavior:'smooth'});
      renderTable();
    }
    function clearDateFilter(){
      document.getElementById('dfFrom').value='';
      document.getElementById('dfTo').value='';
      renderTable();
    }
    function syncPeriode(){
      const from=document.getElementById('dateFrom'), to=document.getElementById('dateTo');
      to.min=from.value||'';
      if(from.value&&to.value&&to.value<from.value)to.value=from.value;
      document.getElementById('periodeGroup').classList.remove('is-error');
    }
    function toggleDetail(index){
      const wrap=document.getElementById('dw-'+index);
      const button=document.getElementById('tg-'+index);
      const open=wrap.style.maxHeight&&wrap.style.maxHeight!=='0px';
      if(open){
        wrap.style.maxHeight='0px';
        button.classList.remove('is-open');
        button.innerHTML='<i class="bi bi-plus"></i>';
      }else{
        wrap.style.maxHeight=wrap.scrollHeight+'px';
        button.classList.add('is-open');
        button.innerHTML='<i class="bi bi-dash"></i>';
      }
    }
    function askDelete(index){pendingDelete=index;if(deleteModal)deleteModal.show();}
    function askEdit(index){
      const row=document.getElementById('tg-'+index)?.closest('.status-row');
      if(!row)return;
      const detail=detailRow(row);
      pendingEdit=index;
      document.getElementById('editType').value=row.dataset.type;
      document.getElementById('editStatus').value=row.children[2].textContent.trim();
      document.getElementById('editFrom').value=row.dataset.from;
      document.getElementById('editTo').value=row.dataset.to;
      document.getElementById('editNote').value=detail.querySelector('.detail-line .v').textContent.trim();
      if(editModal)editModal.show();
    }
    function setType(type,element){
      currentType=type;
      document.querySelectorAll('#typeSeg button').forEach(button=>button.classList.remove('on'));
      element.classList.add('on');
      document.querySelectorAll('.status-select').forEach(select=>{
        const active=select.dataset.type===type;
        select.classList.toggle('d-none',!active);
        if(!active)select.value='';
      });
      document.getElementById('selectGroup').classList.remove('is-error');
    }
    function submitStatus(){
      let ok=true;
      const selectGroup=document.getElementById('selectGroup');
      const periodeGroup=document.getElementById('periodeGroup');
      const activeSelect=document.querySelector(`.status-select[data-type="${currentType}"]`);
      const from=document.getElementById('dateFrom').value;
      const to=document.getElementById('dateTo').value;
      selectGroup.classList.remove('is-error');
      periodeGroup.classList.remove('is-error');
      if(!activeSelect.value){selectGroup.classList.add('is-error');ok=false;}
      if(from&&to&&to<from){periodeGroup.classList.add('is-error');ok=false;}
      if(!ok)return;
      showView('list');
      toast('Status siap dikirim','Data form sudah valid. Sambungkan ke endpoint untuk menyimpan.');
    }
    function toast(title,msg,type){
      const toastEl=document.createElement('div');
      toastEl.className='wt-toast'+(type==='danger'?' danger':'');
      toastEl.innerHTML=`<i class="bi bi-${type==='danger'?'trash3':'check-circle-fill'}"></i><div><div class="t-title">${title}</div><div class="t-msg">${msg}</div></div>`;
      document.getElementById('toastStack').appendChild(toastEl);
      setTimeout(()=>{toastEl.classList.add('is-out');setTimeout(()=>toastEl.remove(),250);},3200);
    }
    function showView(name){
      document.querySelectorAll('.view').forEach(view=>view.classList.remove('is-active'));
      document.getElementById('view-'+name).classList.add('is-active');
      document.body.classList.toggle('view-add-active',name==='add');
      window.scrollTo({top:0,behavior:'smooth'});
      closeSidebar();
    }

    const confirmDelete=document.getElementById('confirmDelete');
    if(confirmDelete){
      confirmDelete.addEventListener('click',()=>{
        const row=document.getElementById('tg-'+pendingDelete)?.closest('.status-row');
        if(row){
          detailRow(row).remove();
          row.remove();
          renderTable();
        }
        pendingDelete=null;
        if(deleteModal)deleteModal.hide();
        toast('Status dihapus','Pengajuan berhasil dihapus.','danger');
      });
    }
    const saveEdit=document.getElementById('saveEdit');
    if(saveEdit){
      saveEdit.addEventListener('click',()=>{
        const row=document.getElementById('tg-'+pendingEdit)?.closest('.status-row');
        if(!row)return;
        const type=document.getElementById('editType').value;
        const status=document.getElementById('editStatus').value.trim();
        const from=document.getElementById('editFrom').value;
        const to=document.getElementById('editTo').value;
        const note=document.getElementById('editNote').value.trim() || '-';
        const typeInfo=type==='AT' ? 'Status Kehadiran' : 'Status Ketidakhadiran';

        row.dataset.type=type;
        row.dataset.status=(status+' '+type).toLowerCase();
        row.dataset.from=from;
        row.dataset.to=to;
        row.children[1].innerHTML=`<span class="type-tag ${type.toLowerCase()}" title="${typeInfo}">${type}</span>`;
        row.children[2].textContent=status;
        row.children[3].textContent=from;
        row.children[4].textContent=to;
        detailRow(row).querySelector('.detail-line .v').textContent=note;

        renderTable();
        if(editModal)editModal.hide();
        toast('Status diperbarui','Perubahan dummy berhasil diterapkan.');
      });
    }

    renderTable();
  </script>
@endpush
