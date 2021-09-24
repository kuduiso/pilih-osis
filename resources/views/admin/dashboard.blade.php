@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Dashboard</h3>
<hr class="border border-opacity-60 rounded-md mt-4 border-blue-400 ">

<div class="mt-4">
    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-4 my-2">
        <div class="bg-white border-l-4 border-blue-700 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-blue-700 text-xs font-bold">TOTAL KANDIDAT</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">{{ $kandidat->total_kandidat }}</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-10" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white border-l-4 border-green-500 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-green-500 text-xs font-bold">TOTAL PEMILIH</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">{{ $pemilih->total_pemilih }}</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-10" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white border-l-4 border-blue-400 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-blue-400 text-xs font-bold">SUDAH MEMILIH</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">{{ $pemilih->total_sudah_pilih }}</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-12" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white border-l-4 border-yellow-500 rounded-md py-4 px-4">
            <div class="flex justify-between flex-row">
                <div class="flex flex-col">
                    <span class="block text-yellow-500 text-xs font-bold">BELUM MEMILIH</span>
                    <span class="block mt-1 text-gray-700 text-2xl font-bold">{{ $pemilih->total_pemilih - $pemilih->total_sudah_pilih }}</span>
                </div>
                <div class="ml-2">
                    <svg class="text-gray-300 h-12" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-8">

</div>
@endsection
