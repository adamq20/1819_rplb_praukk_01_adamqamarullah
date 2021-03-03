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
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Bruce</td>
                    <td>Admin</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Howdy</td>
                    <td>Petugas</td>
                    <td class="d-flex justify-content-between">
                        <a href="#"><i class="fas fa-plus"></i></a>
                        <a href="#"><i class="fas fa-pen"></i></a>
                        <a href="#"><i class="fas fa-minus"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Hellen</td>
                    <td>Petugas</td>
                    <td class="d-flex justify-content-between">
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
