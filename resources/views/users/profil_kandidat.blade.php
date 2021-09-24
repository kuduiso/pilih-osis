@extends('template.template-vote')

@section('title', $title)

@section('main-content')
<?php
    // var_dump($kandidat->no_kandidat);
    // exit();
?>
<div class="flex flex-col justify-center mt-14">
    <div>
        <h1 class="text-center font-extrabold text-2xl">PROFIL KETUA OSIS</h1>
    </div>
</div>
<div class="flex justify-center my-4">
    <div class="card w-full md:w-3/4 m-3">
        <div class="mb-5 text-center">
            <span class="bg-green-500 p-3 text-white font-bold rounded-full">{{ $kandidat->no_kandidat }}</span>
        </div>
        <div class="flex justify-center">
            <img src="{{ url('storage/foto_kandidat/'.$kandidat->foto) }}" alt="foto_kandidat_{{ $kandidat->id_kandidat }}" class="w-1/2">
        </div>
        <div class="mt-5 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Nama Kandidat</p>
            <p class="text-md">{{ $kandidat->nama_kandidat }}</p>
        </div>
        <div class="mt-2 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Kelas Kandidat</p>
            <p class="text-md">{{ $kandidat->kelas_kandidat }}</p>
        </div>
        <div class="mt-2 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Jenis Kelamin</p>
            <p class="text-md">{!! $kandidat->jk_kandidat == 'l' ? 'Laki-laki' : 'Perempuan' !!}</p>
        </div>
        <div class="mt-2 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Tempat, Tanggal Lahir</p>
            <p class="text-md">{{ $kandidat->tempat_lahir.', '.$kandidat->tanggal_lahir }}</p>
        </div>
        <div class="mt-2 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Visi</p>
            <p class="text-md">{{ $kandidat->visi }}</p>
        </div>
        <div class="mt-2 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Misi</p>
            <p class="text-md">{{ $kandidat->misi }}</p>
        </div>
        <div class="mt-2 bg-gray-100 p-3 text-left rounded-md">
            <p class="text-lg font-bold">Pengalaman Organisasi</p>
            <p class="text-md">{{ $kandidat->pengalaman_kandidat }}</p>
        </div>
        <div class="mt-2">
            <a href="{{ url('/voting') }}" class="flex justify-center flex-row p-3 hover:bg-red-500 focus:ring-2 ring-red-300 bg-red-400 text-lg text-white rounded-md">
                <svg class="self-center h-5 w-5 mr-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                </svg>
                <span class="self-center">Kembali</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    $(document).ready( function () {
        const table = $('#tbl-data-kandidat').DataTable();
    });
    function on_delete(id, no_urut, nama) {
        Swal.fire({
            title: 'Apakah Anda ingin menghapus data \''+nama+'\', nomor urut '+no_urut+'?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: `Tidak`,
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector(`#vote${id}`).submit();
            }
        })
    }

    function alert_gagal(message) {
        Swal.fire(
            'Gagal!',
            message,
            'error'
        )
    }

    function alert_sukses(message) {
        Swal.fire(
            'Berhasil',
            message,
            'success'
        )
    }

    document.addEventListener('DOMContentLoaded', function(event) {
        @if (session('alert_sukses'));
        alert_sukses("{{ session('alert_sukses') }}")
        @elseif (session('alert_gagal'));
        alert_gagal("{{ session('alert_gagal') }}")
        @endif
    });
</script>
@endsection
