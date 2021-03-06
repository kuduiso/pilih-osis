@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Absensi</h3>
<hr class="border border-opacity-60 rounded-md mt-4 border-blue-400 ">

<div class="flex justify-center mt-3">
    @if (session('alert_gagal'))
    <div class="max-w-md w-full bg-red-100 mb-3 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('alert_gagal') }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="h-6 w-6 fill-current-red-700" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
            </svg>
        </span>
    </div>
    @endif
</div>

<div class="mt-4 text-center">
    <p class="text-xl mb-2">Klik tombol di bawah untuk download absensi:</p>
    <form action="{{ action('AdminController@proses_absensi_kegiatan') }}" method="POST" class="flex w-full">
        @csrf
        <button type="submit" class="bg-green-500 hover:bg-green-600 focus:ring-2 ring-green-300 focus:bg-green-600 p-3 font-bold text-white text-xl rounded-md w-full">Download Absensi</button>
    </form>
</div>

@endsection

@section('javascript')
<script>
// function on_reset() {
//     Swal.fire({
//         title: 'Apakah Anda yakin ingin melakukan reset data ?',
//         icon: 'warning',
//         showDenyButton: true,
//         confirmButtonText: 'Iya',
//         denyButtonText: `Tidak`,
//     }).then((result) => {
//         if (result.isConfirmed) {
//             Swal.fire(
//                 'Berhasil!',
//                 'Reset data berhasil dilakukan',
//                 'success'
//                 );
//             document.querySelector('#reset_data').submit();
//         }
//     })
// }
</script>
@endsection
