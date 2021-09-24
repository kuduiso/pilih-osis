<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border: 1px solid black;
                border-collapse: collapse;
                margin-top: 5px;
                width: 100%;
            }

            tr, th, td {
                border: 1px solid black;
                padding: 5px;
            }

            .block-grey {
                background-color: #575555;
                font-weight: bold;
                padding: 3px;
                text-align: center;
                font-size: 18px;
                color: #ffffff;
            }

            h1 {
                line-height: 0.8;
            }
            p {
                line-height: 0.5;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td  style="text-align: center; border: 1px solid white; width: 20%;">
                    <img src="{{ public_path('storage/logo-evoting.png') }}" alt="Logo E-voting" style="width: 125px;">
                </td>
                <td style="text-align: center; border: 1px solid white; width: 80%;">
                    <h1>PEMILIHAN KETUA OSIS</h1>
                    <p>Jln. Sultan Agung Tirtayasa Kec. Tirtayasa Kab. Serang Banten</p>
                    <p>www.smptirtayasa.sch.id, E-mail: mail@tirtayasa.com, Telp:(0351) 5115099</p>
                </td>
            </tr>
            <tr>
                <td colspan="6" class="block-grey" style="border: 1px solid white">
                    <p>ABSENSI PEMILIHAN KETUA OSIS</p>
                </td>
            </tr>
        </table>

        <table>
            <thead style="color: white">
                <tr style="background-color: #606160;">
                    <th style="width: 75px">NO</th>
                    <th>NIS</th>
                    <th>NAMA</th>
                    <th>KELAS</th>
                    <th colspan="2">TTD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemilih as $p)
                <tr>
                    <td style="text-align: center">{{ ++$loop->index }}</td>
                    <td>{{ $p->nis_pemilih }}</td>
                    <td>{{ $p->nama_pemilih }}</td>
                    <td>{{ $p->kelas_pemilih }}</td>
                    <td>{{ ($loop->index)%2 === 1 ? $loop->index : '' }}</td>
                    <td>{{ ($loop->index)%2 === 0 ? $loop->index : '' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
