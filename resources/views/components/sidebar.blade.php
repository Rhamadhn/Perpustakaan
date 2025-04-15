<div class="d-flex">
  <!-- Sidebar -->
  <div class="sidebar">
      <div class="sidebar-header">
          <h3>Perpustakaan</h3>
      </div>
      <ul class="nav flex-column w-100">
          <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">
                  <span class="material-icons">home</span>
                  <span class="ms-2">Dashboard</span>
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('books.index') }}">
                  <span class="material-icons">menu_book</span>
                  <span class="ms-2">Daftar Buku</span>
              </a>
          </li>
          <li class="nav-item logout mt-auto">
              <a class="nav-link" href="{{ route('logout') }}">
                  <span class="material-icons">exit_to_app</span>
                  <span class="ms-2">Keluar</span>
              </a>
          </li>
      </ul>
  </div>
