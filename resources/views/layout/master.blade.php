<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Perpustakaan')</title>
    
    <!-- Link untuk Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Digunakan untuk styling dasar dan komponen responsif dari Bootstrap -->

    <!-- Link untuk MDB UI Kit CSS (Material Design Bootstrap) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
    <!-- Digunakan untuk tampilan Material Design dengan komponen tambahan dari Bootstrap -->

    <!-- Link untuk SweetAlert2 (untuk pop-up notifikasi) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Library JavaScript untuk membuat pop-up notifikasi modern dan interaktif -->

    <!-- Link untuk jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- Library JavaScript yang sering digunakan untuk manipulasi DOM dan AJAX -->

    <!-- Link untuk Material Icons (ikon Material Design) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font ikon dari Google yang digunakan untuk ikon-ikon seperti home, logout, dll -->

    <!-- Link untuk DataTables CSS -->
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Digunakan untuk membuat tabel interaktif yang mendukung pencarian, penyaringan, dan paginasi -->

    <!-- Link untuk file CSS custom jika ada -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!-- Digunakan untuk styling tambahan sesuai dengan kebutuhan aplikasi -->
</head>

<body>

    @include('components.alert')

    <div class="d-flex">
        @include('components.sidebar')

        <div class="content p-4" style="flex-grow: 1;">
            @yield('content')
        </div>
    </div>

    <!-- Script untuk Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript untuk komponen Bootstrap seperti modal, dropdown, dan toast -->

    <!-- Script untuk MDB UI Kit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <!-- JavaScript tambahan dari MDB untuk efek Material Design -->

    <!-- jQuery versi 3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Library JavaScript jQuery yang lebih umum digunakan untuk manipulasi DOM -->

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Digunakan untuk membuat tabel interaktif dengan fitur pencarian dan paginasi -->

    <!-- Stack untuk tambahan JS script lainnya (misalnya untuk halaman tertentu) -->
    @stack('scripts')
    <!-- Digunakan untuk menambahkan skrip tambahan pada halaman tertentu -->
</body>

</html>
