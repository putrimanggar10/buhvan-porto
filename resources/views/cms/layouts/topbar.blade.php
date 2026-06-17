  <header class="topbar">
      <div class="d-flex align-items-center gap-2" style="min-width:0">
        <button class="side-toggle" onclick="sideToggle()" title="Menu"><i class="bi bi-list"></i></button>
        <div class="greet">
          <span class="hi" id="greetText">Selamat datang 👋</span>
          <span class="sub" id="clockText">—</span>
        </div>
      </div>
      <div class="topbar__right">
        <div class="dropdown">
          <button class="icon-btn" data-bs-toggle="dropdown" data-bs-auto-close="outside" title="Notifikasi"><i class="bi bi-bell"></i><span class="dot-badge" id="notifBadge">0</span></button>
          <div class="dropdown-menu dropdown-menu-end notif-menu">
            <div class="notif-head"><b>Notifikasi</b><span class="badge-status pending" id="notifPending"></span></div>
            <div class="notif-item"><div class="notif-ic ok"><i class="bi bi-check-circle-fill"></i></div><div><div class="nt">Pengajuan WFH disetujui</div><div class="nm">Disetujui oleh HR · 2026-05-20</div></div></div>
            <div class="notif-item"><div class="notif-ic no"><i class="bi bi-x-circle-fill"></i></div><div><div class="nt">Annual Leave ditolak</div><div class="nm">Cek catatannya ya · 2026-04-20</div></div></div>
            <div class="notif-item"><div class="notif-ic wait"><i class="bi bi-hourglass-split"></i></div><div><div class="nt">2 pengajuan menunggu persetujuan</div><div class="nm">HR akan segera meninjau</div></div></div>
          </div>
        </div>
        <button class="icon-btn green" id="fsBtn" onclick="toggleFullscreen()" title="Layar penuh"><i class="bi bi-arrows-fullscreen"></i></button>
        <div class="dropdown">
          <button class="user-chip" data-bs-toggle="dropdown">
            <span class="avatar">RA</span>
            <span class="u-meta text-start"><span class="u-name d-block">Rafi A.</span><span class="u-role">Karyawan</span></span>
            <i class="bi bi-chevron-down" style="font-size:12px;color:var(--ink-muted)"></i>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profil Saya</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Ubah Kata Sandi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>Keluar</a></li>
          </ul>
        </div>
      </div>
    </header>