<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
                text-align: center;
                font-size: 18px;
                color: #ffffff;
            }
/*
            h1 {
                line-height: 0.5;
            }
            p {
                line-height: 0.5;
            } */
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td  style="text-align: center; border: 1px solid white; width: 20%;">
                    <img src="{{ public_path('storage/logo-evoting.png') }}" alt="Logo E-voting" style="width: 125px;">
                </td>
                <td style="text-align: left; border: 1px solid white; width: 80%;">
                    <h2>
                        BERITA ACARA<br/>
                        PEMILIHAN KETUA OSIS SMP TIRTAYASA<br/>
                        PERIODE {{ date('Y') }}-{{ date('Y', strtotime('+2 years')) }}</h2>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="block-grey" style="border: 1px solid white; line-height: 0.5;">
                    <p>Hasil Suara</p>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="border: 1px solid white;">
                    <p>
                        Pada Hari ini ..................... Tanggal ............ Bulan Agustus Tahun Dua Ribu Dua Satu bertempat di Aula SMP Tirtayasa telah dilaksanakan pemilihan ketua OSIS untuk masa bakti 2021/2022 dengan hasil perolehan suara sebagai berikut:
                    </p>
                </td>
            </tr>
        </table>

        <table>
            <thead style="color: white">
                <tr style="background-color: #606160;">
                    <th style="width: 75px">NO</th>
                    <th>NAMA KANDIDAT</th>
                    <th>TOTAL SUARA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($voting as $v)
                <tr>
                    <td style="text-align: center">{{ ++$loop->index }}</td>
                    <td>{{ $v->nama_kandidat }}</td>
                    <td style="text-align: center">{{ $v->total_suara }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div>
            <p>Catatan lain selama pemilihan berlangsung:</p>
            <table style="border: 0px solid white">
                <tr>
                    <td style="padding: 12px; border: 0px solid white; border-bottom: 1px  dotted black" ></td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 0px solid white; border-bottom: 1px  dotted black"></td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 0px solid white; border-bottom: 1px  dotted black"></td>
                </tr>
                <tr>
                    <td style="padding: 12px; border: 0px solid white; border-bottom: 1px  dotted black"></td>
                </tr>
            </table>
            <p>Demikian berita acara ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p>
            <p style="text-align: right">{{ $tempat }}, {{ $tanggal }}</p>
            <table style="border: 0px solid white;">
                @foreach ($voting as $v)
                <tr style="vertical-align: bottom;">
                    <td style="vertical-align: bottom; width: 5%; height: 60px;  border: 0px solid white;">
                        {{ ++$loop->index }}.</td>
                    <td style="vertical-align: bottom; width: 45%; height: 60px;  border: 0px solid white;">
                        {{ $v->nama_kandidat }}</td>
                    <td style="vertical-align: bottom; width: 50%; height: 60px;  border: 0px solid white;">
                        (..............................)</td>
                </tr>
                @endforeach
            </table>
            <div style="text-align: center; line-height: 0.8px; margin-top: 35px">
                <p>Panitia Pemilihan Ketua OSIS</p>
                <p>Ketua</p>
                <p style="margin-top: 100px">{{ $ketua }}</p>
            </div>
        </div>
    </body>
</html>
