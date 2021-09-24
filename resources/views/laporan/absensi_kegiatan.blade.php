<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="m-3">
            <div class="flex flex-row">
                <div>
                    <img src="{{ url('storage/logo-evoting.png') }}" alt="Logo E-voting" class="max-w-125px">
                </div>
                <div class="text-center flex-auto self-center">
                    <h1 class="font-bold text-xl">PEMILIHAN KETUA OSIS</h1>
                    <p>Jln. Sultan Agung Tirtayasa Kec. Tirtayasa Kab. Serang Banten</p>
                    <p>www.smptirtayasa.sch.id, E-mail: mail@tirtayasa.com, Telp:(0351) 5115099</p>
                </div>
            </div>

            <div class="bg-gray-500 my-3 p-3 font-bold text-center text-white">
                <p>ABSENSI PEMILIHAN KETUA OSIS</p>
            </div>

            <table class="table-auto w-full border-collapse border border-gray-900">
                <thead>
                    <tr>
                        <th class="border border-gray-900">NO</th>
                        <th class="border border-gray-900">NIS</th>
                        <th class="border border-gray-900">NAMA</th>
                        <th class="border border-gray-900">KELAS</th>
                        <th class="border border-gray-900">TTD</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-900">as</td>
                        <td class="border border-gray-900">asd</td>
                        <td class="border border-gray-900">{{ $nama }}</td>
                        <td class="border border-gray-900">asd</td>
                        <td class="border border-gray-900">asd</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
