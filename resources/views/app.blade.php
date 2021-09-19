<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-orange-500">
        <!-- component -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
    <div class="mb-4">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username">
    </div>
    <div class="mb-6">
      <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************">
      <p class="text-red text-xs italic">Please choose a password.</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded" type="button">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
        Forgot Password?
      </a>
    </div>
</div>
        {{-- <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
            <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="/img/erin-lindford.jpg" alt="Woman's Face">
            <div class="text-center space-y-2 sm:text-left">
              <div class="space-y-0.5">
                <p class="text-lg text-black font-semibold">
                  Erin Lindford
                </p>
                <p class="text-gray-500 font-medium">
                  Product Engineer
                </p>
              </div>
              <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
            </div>
        </div>
        <button class="py-2 px-4 font-semibold rounded-lg shadow-md text-white bg-green-500 hover:bg-green-700">
            Click me
          </button> --}}
    </body>
</html>
