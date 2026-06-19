  <header class="topbar">
      <div class="d-flex align-items-center gap-2" style="min-width:0">
          <button class="side-toggle" onclick="sideToggle()" title="Menu"><i class="bi bi-list"></i></button>
          <div class="greet">
              <span class="hi" id="greetText">Selamat datang 👋</span>
              <span class="sub" id="clockText">—</span>
          </div>
      </div>
      <div class="topbar__right">
          <button class="icon-btn green" id="fsBtn" onclick="toggleFullscreen()" title="Layar penuh"><i
                  class="bi bi-arrows-fullscreen"></i></button>
          <div class="dropdown">
              <button class="user-chip" data-bs-toggle="dropdown">
                  <span class="avatar">RA</span>
                  <span class="u-meta text-start"><span class="u-name d-block">Rafi A.</span><span
                          class="u-role">Karyawan</span></span>
                  <i class="bi bi-chevron-down" style="font-size:12px;color:var(--ink-muted)"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profil Saya</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-key me-2"></i>Ubah Kata Sandi</a></li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-danger" href="#"><i
                              class="bi bi-box-arrow-right me-2"></i>Keluar</a></li>
              </ul>
          </div>
      </div>
  </header>
