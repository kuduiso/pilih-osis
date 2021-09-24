@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Tambah Kandidat</h3>
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

<form action="{{ action('KandidatController@tambah_kandidat') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="card">
        <div class="flex flex-col md:flex-row ">
            <div class="mx-2">
                <label for="no_kandidat" class="text-gray-700">No. Kandidat</label>
                <input type="number" min="0" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="no_kandidat" id="no_kandidat" value="{{ old('no_kandidat') }}"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('no_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
            <div class="mx-2 flex-grow">
                <label for="nis_kandidat" class="text-gray-700">NIS</label>
                <input type="number" min="0" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="nis_kandidat" id="nis_kandidat" value="{{ old('nis_kandidat') }}"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('nis_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="nama_kandidat" class="text-gray-700">Nama</label>
                <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="nama_kandidat" id="nama_kandidat" value="{{ old('nama_kandidat') }}"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('nama_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 w-1/2">
                <label for="tempat_lahir" class="text-gray-700">Tempat Lahir</label>
                <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukkan tempat lahir"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('tempat_lahir')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
            <div class="mx-2 w-1/2">
                <label for="tanggal_lahir" class="text-gray-700">Tanggal Lahir</label>
                <input type="date" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('tanggal_lahir')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="kelas_kandidat" class="text-gray-700">Kelas</label>
                <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="kelas_kandidat" id="kelas_kandidat" value="{{ old('kelas_kandidat') }}" placeholder="Masukkan kelas"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('kelas_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="jk_kandidat" class="text-gray-700">Jenis Kelamin:</label><br>
                <input type="radio" id="laki" name="jk_kandidat" value="l" {!! old('jk_kandidat') === 'l' ? 'checked' : '' !!}>
                <label for="laki">Laki-Laki</label><br>
                <input type="radio" id="perempuan" name="jk_kandidat" value="p" {!! old('jk_kandidat') === 'p' ? 'checked' : '' !!} required>
                <label for="perempuan">Perempuan</label><br>
                @error('jk_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="telp_kandidat" class="text-gray-700">No. Handphone/WA</label>
                <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="telp_kandidat" id="telp_kandidat" value="{{ old('telp_kandidat') }}" pattern="\+?([ -]?\d+)+|\(\d+\)([ -]\d+)"
                title="Masukkan nomor HP/WA" placeholder="contoh: 08123123123" required>
                @error('telp_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="alamat_kandidat" class="text-gray-700">Alamat</label>
                <textarea class="form-textarea mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="alamat_kandidat" id="alamat_kandidat" cols="3"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>{{ old('alamat_kandidat') }}</textarea>
                @error('alamat_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="pengalaman_kandidat" class="text-gray-700">Pengalaman Berorganisasi</label>
                <textarea class="form-textarea mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="pengalaman_kandidat" id="pengalaman_kandidat" cols="3">{{ old('pengalaman_kandidat') }}</textarea>
                @error('pengalaman_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="visi_kandidat" class="text-gray-700">Visi</label>
                <textarea class="form-textarea mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="visi_kandidat" id="visi_kandidat" cols="3"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>{{ old('visi_kandidat') }}</textarea>
                @error('visi_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="misi_kandidat" class="text-gray-700">Misi</label>
                <textarea class="form-textarea mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="misi_kandidat" id="misi_kandidat" cols="3"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>{{ old('misi_kandidat') }}</textarea>
                @error('misi_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-grow">
                <label for="foto_kandidat" class="text-gray-700">Masukkan Foto</label>
                <input type="file" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="foto_kandidat" id="foto_kandidat"  oninvalid="this.setCustomValidity('Wajib diisi')" oninput="this.setCustomValidity('')" required>
                @error('foto_kandidat')
                    <span class="text-xs text-red-600">*{{ $message }}</span>
                @enderror
                <ul class="list-disc ml-4 text-sm text-gray-600">
                    <li class="">Tipe foto .jpg .jpeg .png</li>
                    <li class="">Ukuran foto maksimal 2MB</li>
                </ul>
            </div>
        </div>
        <div class="flex flex-row mt-2">
            <div class="mx-2 flex-shrink">
                <button class="mt-4 w-full bg-green-500 hover:bg-green-600 focus:ring-2 focus:ring-green-100 px-4 py-2 text-white rounded-md" type="submit">Tambah</button>
            </div>
        </div>
    </div>
</form>
@endsection
