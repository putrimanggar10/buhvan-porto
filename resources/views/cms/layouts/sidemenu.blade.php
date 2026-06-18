  <aside class="sidebar" id="sidebar">
      <div class="sidebar__brand">
          <span class="brand-mark" onclick="expandSidebar()" title="Buka menu">BV</span>
          <span class="brand-word">CMS</span>
      </div>
      <div class="sidebar__label">Menu</div>
      <nav class="nav-side">
          <a href="/dashboard" class="nav-side__item {{ Request::is('dashboard') ? 'is-active' : '' }}"
              data-label="Dashboard">
              <i class="bi bi-house-door lead-ic"></i>
              <span class="nav-label">Dashboard</span>
          </a>
          <a href="/dashboard/users" class="nav-side__item {{ Request::is('dashboard/users') ? 'is-active' : '' }}"
              data-label="List Status" onclick="showView('list')">
              <i class="bi bi-clipboard-check lead-ic"></i>
              <span class="nav-label">Users</span>
          </a>
          <a href="/dashboard/category"
              class="nav-side__item {{ Request::is('dashboard/category') ? 'is-active' : '' }}" data-label="Laporan"
              aria-expanded="false" onclick="toggleSub(this)">
              <i class="bi bi-bar-chart-line lead-ic"></i>
              <span class="nav-label">Kategori</span>
              <i class="bi bi-chevron-down chev"></i>
          </a>
          <div class="nav-side__sub" id="reportSub" hidden>
              <a href="#"><i class="bi bi-person-circle"></i> Lorem Ipsum</a>
              <a href="#"><i class="bi bi-person-check"></i> Lorem Ipsum</a>
              <a href="#"><i class="bi bi-phone"></i> Lorem Ipsum </a>
          </div>
          <button class="nav-side__item" data-label="Ubah Kata Sandi"><i class="bi bi-key lead-ic"></i><span
                  class="nav-label">Lorem Ipsum</span></button>
          <button class="nav-side__item" data-label="Keluar"><i class="bi bi-box-arrow-right lead-ic"></i><span
                  class="nav-label">Keluar</span></button>
      </nav>
  </aside>
