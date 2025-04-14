@if (session('success'))
<script>
    Swal.fire({
        toast: true,
        icon: 'success',
        title: '{{ session('success') }}',
        position: 'top-end',
        showConfirmButton: false,
        timer: 3500
    });
</script>
@endif

@if (session('info'))
<script>
    Swal.fire({
        icon: 'info',
        title: 'Informasi',
        title: '{{ session('info') }}',
        text:' Ini adalah pesan penting. Harap dibaca dengan seksama.',
        showConfirmButton: true,
        confirmButtonText: 'Mengerti',
        confirmButtonColor: '#3085d6',
    });
</script>
@endif


@if (session('error'))
<script>
    Swal.fire({
        toast: true,
        icon: 'error',
        title: '{{ session('error') }}',
        position: 'top-end',
        showConfirmButton: false,
        timer: 3500
    });
</script>
@endif