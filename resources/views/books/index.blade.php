@extends('layout.master')

@section('title', 'Daftar Buku')

@section('content')

<style>
    div.dataTables_wrapper div.dataTables_filter {
        margin-bottom: 15px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 3px 8px;
        font-size: 0.875rem;
    }

    .dataTables_wrapper {
        margin-bottom: 30px;
    }

    .dataTables_length select {
        padding: 4px 6px;
        font-size: 0.875rem;
    }
</style>

<div class="main-content">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Buku</h2>
        <a href="{{ route('books.create') }}" class="btn btn-primary">+ Tambah Buku</a>
    </div>

    <div class="table-responsive mb-4">
        <table class="table table-bordered table-striped" id="booksTable">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $book->id }}">Hapus</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data buku.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#booksTable').DataTable({
            responsive: true,
            language: {
                search: "Cari Buku:",
                lengthMenu: "Tampilkan _MENU_ entri per halaman",
                info: "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                infoEmpty: "Tidak ada data tersedia",
                infoFiltered: "(disaring dari _MAX_ total entri)"
            }
        });

        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                let id = this.getAttribute("data-id");
                let deleteUrl = "{{ route('books.destroy', ':id') }}".replace(':id', id);

                Swal.fire({
                    title: "Yakin ingin menghapus buku ini?",
                    text: "Data yang dihapus tidak bisa dikembalikan.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = deleteUrl;
                    }
                });
            });
        });
    });
</script>
@endpush

@endsection
