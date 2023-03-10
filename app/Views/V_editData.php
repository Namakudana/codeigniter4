<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Edit Data</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    </li>
                </ul>
            </div> -->
        </div>
    </nav>

    <?php
    foreach ($data as $row)
    ?>
    <div class="container-md">
        <h1 class="display-5">Edit Data Mahasiswa</h1>

        <div class="p-3 mb-2 bg-light text-dark">
            <form action="<?php echo base_url('data/saveeditData/' . $row->nim . '') ?>" method="post">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" value="<?php echo $row->nim; ?>" class="form-control" type="text" placeholder="Masukkan Nim Anda" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $row->nama; ?>" class="form-control" type="text" placeholder="Masukkan Nama Anda" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td><input type="text" name="fakultas" value="<?php echo $row->fakultas; ?>" class="form-control" type="text" placeholder="Masukkan Fakultas Anda" aria-label="default input example"></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" cols="30" rows="10" class="form-control" type="text" placeholder="Masukkan Alamat Anda" aria-label="default input example">
            <?php echo $row->alamat; ?>
            </textarea></td>
                    <tr>
                        <td><input type="submit" values="submit" name="submit" class="btn btn-success" type="submit"></td>
                        <td><input type="reset" values="reset" name="reset" class="btn btn-danger" type="reset"></td>
                    </tr>

                </table>
            </form>
        </div>
    </div>

    <div class="container">
        <div class="fixed-bottom">
            <footer class="bg-light text-center text-lg-start">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2023 Copyright:
                    <a class="text-dark" href="https://github.com/Namakudana">Mardana<span>&#10084;</span></a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>
    </div>

</body>

</html>