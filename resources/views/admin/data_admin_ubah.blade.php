@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Edit Admin</h3>
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

<div class="mt-4">

</div>

<form action="{{ action('AdminController@edit_admin', $user->id_user) }}" method="POST" class=" flex justify-center">
    @method('PUT')
    @csrf
    <div class="card flex-col max-w-md">
        <div>
            <label for="nama_user" class="text-gray-700">Nama</label>
            <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="nama_user" id="nama_user" value="{{ $user->nama_user }}" placeholder="Masukkan nama">
        </div>
        <div class="mt-2">
            <label for="email" class="text-gray-700">E-mail</label>
            <input type="text" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="email" id="email" value="{{ $user->email }}" placeholder="Masukkan e-mail">
        </div>
        <div class="mt-2">
            <label for="password_new" class="text-gray-700">Password baru</label>
            <input type="password" class="form-input mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="password_new" id="password_new" value="" placeholder="**********">
        </div>
        <button class="mt-4 w-full bg-green-500 hover:bg-green-600 focus:ring-2 focus:ring-green-100 px-3 py-2 text-white rounded-md" type="submit">Simpan</button>
    </div>
</form>
@endsection
