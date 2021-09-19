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

            <div class="flex justify-center">
                <img src="{{ asset('storage/logo-evoting.png') }}" alt="Logo E-voting" class="mb-10 mt-5 sm:mt-14 max-w-125px">
            </div>

            <div class="flex justify-center">
                <div class="card mb-4 md:w-1/3 w-auto">
                    @if (session('status'))
                    <div class="bg-red-100 mb-3 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('status') }}</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="h-6 w-6 fill-current-red-700" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>
                    @endif
                    <form action="{{ action('LoginController@check_login_admin') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input class="shadow focus:outline-none focus:ring-2 focus:ring-blue-100 appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" name="email" type="text" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-xs text-red-600">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-1">
                            <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input class="shadow focus:outline-none focus:ring-2 focus:ring-blue-100 appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" name="password" type="password" placeholder="******************" value="">
                            @error('password')
                                <span class="text-xs text-red-600">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-2 flex items-center">
                            <input class="h-4 w-4 mr-2 focus:ring-2 focus:ring-blue-50" type="checkbox" name="remember_me" id="remember_me" value=true>
                            <label for="remember_me">Remember me</label>
                        </div>
                        <div class="flex">
                            <button class="bg-gray-500 flex-grow py-2 px-4 mt-3 text-white font-bold rounded-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50" type="submit">LOG IN</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>
