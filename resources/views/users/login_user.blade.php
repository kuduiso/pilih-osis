<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> E-Voting | {{ $title }} </title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="{{ asset('favicon.png')  }}" sizes="48x48" type="image/png">
    </head>
    <body class="bg-pattern-a">
        <div class="container">
            <div class="flex justify-center mt-20">
                <div class="card mb-4 w-4/5 md:w-2/5">
                    @if (session('alert_gagal'))
                    <div class="bg-red-100 mb-3 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('alert_gagal') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="h-6 w-6 fill-current-red-700" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                    @endif


                    <div class="flex flex-col">
                        <div class="flex justify-center">
                            <img src="{{ asset('storage/komisi_pemilihan_osis.png') }}" alt="Logo Pemilihan OSIS" class="my-3 max-w-125px">
                        </div>
                        <h3 class="font-bold md:font-extrabold text-lg text-center mb-3">SMP NEGERI 5 TIRTAYASA</h3>
                    </div>
                    <form action="{{ action('LoginController@check_login_voting') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="nis_pemilih">
                                NIS
                            </label>
                            <input class="shadow focus:outline-none focus:ring-2 focus:ring-blue-300 appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="nis_pemilih" name="nis_pemilih" type="text" placeholder="NIS" value="{{ old('nis_pemilih') }}">
                            @error('nis_pemilih')
                                <span class="text-xs text-red-600">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="no_token">
                                Nomor Token
                            </label>
                            <input class="shadow focus:outline-none focus:ring-2 focus:ring-blue-300 appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="no_token" name="no_token" type="text" placeholder="NO. TOKEN" value="">
                            @error('no_token')
                                <span class="text-xs text-red-600">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex">
                            <button class="bg-blue-500 flex-grow py-2 px-4 mt-3 text-white font-bold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50" type="submit">LOG IN</button>
                        </div>
                    </form>
                </div>
            </div>
       </div>
    </body>
</html>
