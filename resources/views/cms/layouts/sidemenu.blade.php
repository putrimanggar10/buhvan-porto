  <nav class="side-nav side-nav--simple">
      <ul>
          <li>
              <a href="/dashboard" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : '' }}">
                  <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                  <div class="side-menu__title"> Dashboard </div>
              </a>
          </li>
          <li class="side-nav__devider my-6"></li>
          <li>
              <a href="/dashboard/users"
                  class="side-menu {{ Request::is('dashboard/users') ? 'side-menu--active' : '' }}">
                  <div class="side-menu__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-users-icon lucide-users">
                          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                          <path d="M16 3.128a4 4 0 0 1 0 7.744" />
                          <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                          <circle cx="9" cy="7" r="4" />
                      </svg>
                  </div>
                  <div class="side-menu__title"> Users </div>
              </a>
          </li>
          <!-- Category -->
          <li>
              <a href="/dashboard/category"
                  class="side-menu {{ Request::is('dashboard/category*') ? 'side-menu--active' : '' }}">
                  <div class="side-menu__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round" class="lucide lucide-chart-bar-stacked-icon lucide-chart-bar-stacked">
                          <path d="M11 13v4" />
                          <path d="M15 5v4" />
                          <path d="M3 3v16a2 2 0 0 0 2 2h16" />
                          <rect x="7" y="13" width="9" height="4" rx="1" />
                          <rect x="7" y="5" width="12" height="4" rx="1" />
                      </svg>
                  </div>
                  <div class="side-menu__title"> Category </div>
              </a>
          </li>
          <li>
              <a href="/dashboard/projects"
                  class="side-menu {{ Request::is('dashboard/projects*') ? 'side-menu--active' : '' }}">
                  <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                  <div class="side-menu__title"> Projects </div>
              </a>
          </li>

      </ul>
  </nav>
