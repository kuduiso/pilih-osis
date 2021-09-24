@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Pemilih</h3>
<hr class="border border-opacity-60 rounded-md mt-4 border-blue-400 ">

<div class="mt-3">
    <a href="{{ url('/admin/data-pemilih/tambah') }}" class="px-2 py-2 bg-blue-600 rounded-md text-white text-center focus:ring-2 focus:ring-blue-300 hover:bg-blue-700 shadow-lg flex w-40">
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
        </svg>
        <span class="ml-2">Input Pemilih</span>
    </a>
</div>

<div class="mt-8">

</div>

<div class="flex flex-col mt-8">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div
            class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 bg-white p-2">
            <table id="tbl-data-kandidat" class="display min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            No</th>
                        <th
                            class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            NIS</th>
                        <th
                            class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            NAMA</th>
                        <th
                            class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            KELAS</th>
                        <th class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            JENIS KELAMIN</th>
                        <th class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            STATUS</th>
                        <th class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            NO. TOKEN</th>
                        <th class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            AKSI</th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($data_pemilih as $dtp)
                    <tr>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $loop->index+1 }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $dtp->nis_pemilih }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $dtp->nama_pemilih }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $dtp->kelas_pemilih }}
                        </td>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            {{ strtoupper($dtp->jk_pemilih) }}
                        </td>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            @if ($dtp->status)
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Sudah Pilih </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Belum Pilih </span>
                            @endif
                        </td>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            {{ $dtp->no_token }}
                        </td>
                        <td
                            class="px-3 py-4 whitespace-nowrap text-right text-sm leading-5 font-medium flex items-center">
                            <a href="{{ action('PemilihController@view_edit_pemilih', $dtp->id_pemilih) }}" class="mr-2">
                                <div class="flex items-center p-2 bg-yellow-500 hover:bg-yellow-600 rounded-md text-white">
                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                            </a>

                            <button type="button" onclick="on_delete('{{ $dtp->id_pemilih }}', '{{ $dtp->nama_pemilih }}')">
                                <div class="flex items-center p-2 bg-red-600 hover:bg-red-700 rounded-md text-white">
                                    <svg class="h-6 w-6 fill-current-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    <form action="{{ action('PemilihController@delete_pemilih',$dtp->id_pemilih) }}" id="delete{{ $dtp->id_pemilih }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script>
    $(document).ready( function () {
        const table = $('#tbl-data-kandidat').DataTable();
    });
    function on_delete(id, nama) {
        Swal.fire({
            title: 'Apakah Anda ingin menghapus data \''+nama+'\'?',
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Iya',
            denyButtonText: `Tidak`,
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector(`#delete${id}`).submit();
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
