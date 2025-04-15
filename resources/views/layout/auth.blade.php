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
</head>

<body>

    @include('components.alert')

    @yield('content')

    <!-- Script untuk Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript untuk komponen Bootstrap seperti modal, dropdown, dan toast -->

    <!-- Script untuk MDB UI Kit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <!-- JavaScript tambahan dari MDB untuk efek Material Design -->

</body>

</html>
