@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Edit Pemilih</h3>
<hr class="border border-opacity-60 rounded-md mt-4 border-blue-400 ">

<div class="flex justify-start mt-3">
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

<div class="mt-4">

</div>

<form action="{{ action('PemilihController@edit_pemilih', $pemilih->id_pemilih) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="card">
        <div class="flex flex-col md:flex-row ">
            <div class="mx-2 flex-grow">
                <label for="nis_pemilih" class="text-gray-700">NIS</label>
                <input type="number" min="0" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="nis_pemilih" id="nis_pemilih" value="{{ $pemilih->nis_pemilih }}"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('nis_pemilih')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="nama_pemilih" class="text-gray-700">Nama</label>
                <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="nama_pemilih" id="nama_pemilih" value="{{ $pemilih->nama_pemilih }}" placeholder="Masukkan nama"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('nama_pemilih')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="kelas_pemilih" class="text-gray-700">Kelas</label>
                <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="kelas_pemilih" id="kelas_pemilih" value="{{ $pemilih->kelas_pemilih }}" placeholder="Masukkan kelas"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('kelas_pemilih')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="jk_pemilih" class="text-gray-700">Jenis Kelamin:</label><br>
                <input type="radio" id="laki" name="jk_pemilih" value="l" {!! $pemilih->jk_pemilih === 'l' ? 'checked' : '' !!}>
                <label for="laki">Laki-Laki</label><br>
                <input type="radio" id="perempuan" name="jk_pemilih" value="p" {!! $pemilih->jk_pemilih === 'p' ? 'checked' : '' !!} required>
                <label for="perempuan">Perempuan</label><br>
                @error('jk_pemilih')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-shrink">
                <button class="mt-4 w-full bg-green-500 hover:bg-green-600 focus:ring-2 focus:ring-green-100 px-4 py-2 text-white rounded-md" type="submit">Simpan</button>
            </div>
        </div>
    </div>
</form>
@endsection
