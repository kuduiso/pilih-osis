@extends('../template.template-admin')

@section('title', $title )

@section('main-content')
<h3 class="text-blue-500 text-4xl font-medium">Hasil Suara</h3>
<hr class="border border-opacity-60 rounded-md mt-4 border-blue-400 ">

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
                            Foto</th>
                        <th
                            class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            No. Urut</th>
                        <th
                            class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            NIS Kandidat</th>
                        <th class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            Nama Kandidat</th>
                        <th class="px-3 py-3 border-b border-gray-200 bg-blue-500 text-center text-xs leading-4 font-medium text-white uppercase tracking-wider">
                            Hasil Suara</th>
                    </tr>
                </thead>

                <tbody class="bg-white">
                    @foreach ($voting as $vot)
                    <tr>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            {{ $loop->index+1 }}
                        </td>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            <img src="{{ url('storage/foto_kandidat/'.$vot->foto) }}" class="max-w-xs" alt="foto_kandidat">
                        </td>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            {{ $vot->no_kandidat }}
                        </td>
                        <td class="px-3 py-4 text-center whitespace-nowrap">
                            {{ $vot->nis_kandidat }}
                        </td>
                        <td class="px-3 py-4 whitespace-nowrap">
                            {{ $vot->nama_kandidat }}
                        </td>
                        <td
                            class="px-3 py-4 text-center whitespace-nowrap">
                            {{ $vot->total_suara }}
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
    function on_delete(id, no_urut, nama) {
        Swal.fire({
            title: 'Apakah Anda ingin menghapus data \''+nama+'\', nomor urut '+no_urut+'?',
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
