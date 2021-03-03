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
                    <th scope="col">Kode</th>
                    <th scope="col">Jumlah Kursi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Kereta Ekonomi</td>
                    <td>KRT001</td>
                    <td>200</td>
                    <td>Kereta kelas ekonomi</td>
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
                    <td>KRT002</td>
                    <td>100</td>
                    <td>Kereta kelas bisnis</td>
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
                    <td>PSW001</td>
                    <td>500</td>
                    <td>Pesawat kelas Ekonomi</td>
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
                    <td>PSW002</td>
                    <td>300</td>
                    <td>Pesawat kelas Bisnis</td>
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
