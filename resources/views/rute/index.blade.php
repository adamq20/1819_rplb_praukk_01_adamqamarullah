<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
</head>

<body>
    @include('layouts.app')

    <br>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Kota Awal</th>
                    <th scope="col">Kota Akhir</th>
                    <th scope="col">Rute Awal</th>
                    <th scope="col">Rute Akhir</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Kereta Ekonomi</td>
                    <td>Jakarta</td>
                    <td>Bandung</td>
                    <td>Stasiun Gambir</td>
                    <td>Stasiun Bandung</td>
                    <td>80000</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kereta Bisnis</td>
                    <td>Jakarta</td>
                    <td>Bandung</td>
                    <td>Stasiun Gambir</td>
                    <td>Stasiun Bandung</td>
                    <td>120000</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Pesawat Ekonomi</td>
                    <td>Jakarta</td>
                    <td>Surabaya</td>
                    <td>Bandara Soekarno Hatta</td>
                    <td>Bandara Juanda</td>
                    <td>700000</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Pesawat Bisnis</td>
                    <td>Jakarta</td>
                    <td>Surabaya</td>
                    <td>Bandara Soekarno Hatta</td>
                    <td>Bandara Juanda</td>
                    <td>1600000</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-eye"></i></a>
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
