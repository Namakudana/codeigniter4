<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Data Mahasiswa</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" input type="image" src="img_submit.gif" alt="Submit" width="48" height="48" href="#">Input Data</a>
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

  <div class="container-md">
    <h1 class="display-5" .text-ali>Data Mahasiswa</h1>

    <div class="p-3 mb-2 bg-light text-dark">
      <a href="data/insertData/" class="btn btn-primary" type="submit">Tambah Data </a>

      <table id="example" class="table table-striped" style="width:100%">
        <thead>
          <tr>
            <td>Nim</td>
            <td>Nama</td>
            <td>Fakultas</td>
            <td>Alamat</td>
          </tr>
        </thead>

        <tbody>
          <?php
          foreach ($hasil as $row) {



          ?>
            <tr>
              <td><?php echo $row->nim; ?></td>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->fakultas; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td>
                <a href="data/editData/<?php echo $row->nim; ?>" class="btn btn-warning" type="submit">Sunting</a>
                <a href="data/hapusData/<?php echo $row->nim; ?>" class="btn btn-danger" type="delete">Hapus</a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>


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