<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Perpustakaan')</title>
    
    <!-- Link untuk Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Link untuk MDB UI Kit CSS (Material Design Bootstrap) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
    
    <!-- Link untuk SweetAlert2 (untuk pop-up notifikasi) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Link untuk jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <!-- Link untuk Material Icons (ikon Material Design) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    
    <!-- Link untuk file CSS custom jika ada -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
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

    <!-- Script untuk MDB UI Kit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <!-- Stack untuk tambahan JS script lainnya (misalnya untuk halaman tertentu) -->
    @stack('scripts')


</body>

</html>
