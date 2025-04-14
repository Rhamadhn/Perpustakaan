<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-header">
        <h3>Perpustakaan</h3>
      </div>
      <ul class="nav flex-column w-100">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard')}}">
            <span class="material-icons">home</span> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('books.index')}}">
            <span class="material-icons">menu_book</span> Daftar Buku
          </a>
        </li>
        <li class="nav-item logout">
          <a class="nav-link" href="{{ route('logout')}}">
            <span class="material-icons">exit_to_app</span> Keluar
          </a>
        </li>
      </ul>
    </div>