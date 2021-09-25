<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>E-Voting | @yield('title')</title>
        @section('assets-head')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.min.css') }}">
        <link rel="icon" href="{{ asset('favicon.png')  }}" sizes="48x48" type="image/png">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/alpine.min.js') }}" defer></script>
        <script src="{{ asset('js/sweetalert2.all.min.js') }}" defer></script>
        @show
    </head>
</html>
<body>
    <div>
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 lg:-translate-x-full ease-out' : '-translate-x-full lg:translate-x-0 lg:static lg:inset-0 ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gradient-to-bl from-blue-custom-a to-blue-500 overflow-y-auto translate-x-0">
                <div class="flex items-center justify-center mt-8">
                    <div class="flex items-center">
                        <svg class="fill-current text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-white text-2xl mx-2 font-semibold">E-VOTING</span>
                    </div>
                </div>

                <nav class="mt-10">
                    <a class="flex items-center mt-4 py-2 px-6 {{ Request::segment(2) === 'dashboard' ? 'bg-gray-700 bg-opacity-25' : null }} text-gray-100" href="{{ url('/admin/dashboard') }}">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                        </svg>

                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 {{ Request::segment(2) === 'data-kandidat' ? 'bg-gray-700 bg-opacity-25' : null }} text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ url('/admin/data-kandidat') }}">
                        <svg class="fill-current text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>

                        <span class="mx-3">Kandidat</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 {{ Request::segment(2) === 'data-pemilih' ? 'bg-gray-700 bg-opacity-25' : null }} text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ url('/admin/data-pemilih') }}">
                        <svg class="text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                        </svg>

                        <span class="mx-3">Pemilih</span>
                    </a>

                    <a class="flex items-center mt-4 py-2 px-6 {{ Request::segment(2) === 'data-hasil-suara' ? 'bg-gray-700 bg-opacity-25' : null }} text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ url('/admin/data-hasil-suara') }}">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>

                        <span class="mx-3">Hasil Suara</span>
                    </a>

                    <ul x-data="{ laporanOpen: false }" class="flex flex-col mt-4">
                        <li class="flex items-center py-2 px-6 {{ (Request::segment(2) === 'absensi-kegiatan') || (Request::segment(2) === 'berita-acara') ? 'bg-gray-700 bg-opacity-25' : null }} text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
                            <svg class="text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>

                            <span class="mx-3 flex-grow">Laporan</span>

                            <button @click="laporanOpen = ! laporanOpen" class="bg-white bg-opacity-25 p-1 rounded-md focus:ring-2 focus:ring-blue-500 focus:ring-opacity-40 transform hover:scale-75 transition ease-in-out duration-75" type="button">
                                <svg :class="laporanOpen ? 'transform rotate-90' : 'transform rotate-0'" class="text-white-500 h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </li>
                        <div :class="laporanOpen ? 'block' : 'hidden'" class="ml-4">
                            <li>
                                <a href="{{ url('admin/absensi-kegiatan') }}" class="flex items-center hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 text-white py-2 px-6">
                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                    </svg>
                                    Absensi
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('admin/berita-acara') }}" class="flex items-center hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100 text-white py-2 px-6">
                                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                                    </svg>
                                    Berita Acara
                                </a>
                            </li>
                        </div>
                    </ul>

                    <a class="flex items-center mt-4 py-2 px-6 {{ Request::segment(2) === 'data-admin' ? 'bg-gray-700 bg-opacity-25' : null }} text-gray-100 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                        href="{{ url('/admin/data-admin') }}">
                        <svg class="fill-current text-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>

                        <span class="mx-3">Admin</span>
                    </a>
                </nav>
            </div>

            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-gray-100">
                    <div class="flex items-center">
                        <button @click="sidebarOpen = ! sidebarOpen" class="text-gray-500 focus:outline-none">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>

                    <div class="flex items-center">
                        <div class="flex mx-4 text-gray-500">
                            {{ ucwords(strtolower(Auth::user()->nama_user))  }}
                        </div>

                        <div x-data="{ dropdownOpen: false }" class="relative">
                            <button @click="dropdownOpen = ! dropdownOpen"
                                class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                                <svg class="fill-current text-gray-500 h-full w-full" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                </svg>
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                                style="display: none;"></div>

                            <div x-show="dropdownOpen"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                                style="display: none;">
                                <a href="{{ action('AdminController@view_edit_admin', Auth::id()) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                                <a href="/admin/reset-data"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Reset</a>
                                <a href="/logout-admin"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Logout</a>
                            </div>
                        </div>
                    </div>
                </header>

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                    <div class="container mx-auto px-6 py-8">

                        @yield('main-content')

                    </div>
                </main>
            </div>
        </div>
    </div>

    {{-- JAVASCRIPT --}}
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    @yield('javascript')
</body>
