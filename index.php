<?php
include_once "./config/database.php";


$student = mysqli_query($con, "SELECT * FROM student");




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Presense-app</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
        <div class="container">
            <a class="navbar-brand" href="#">Presense-App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
           </li>
                
            </ul>
            </div>
        </div>
        </nav>


        <div class="container">
            <table class="table table-striped table-hover table-bordered">
                 <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Hadir</th>
                     <th>Sakit</th>
                     <th>Izin</th>
                 </tr>
                 <?php
                    $no = 1;
                    
                    while ($row = mysqli_fetch_assoc($student)):
                     
                 ?>
                 <tr>
                     <td><?=$no++  ?></td>
                     <td><?= ucwords($row['name']) ?></td>
                     <td><input type="radio" name="presense_status_<?= $no ?>" value="hadir"  id="hadir_<?= $no ?>" <?= $row['presense_status'] === 'hadir' ? 'checked' : '' ?> >
                        <label for="hadir_<?= $no ?>">Hadir</label>
                        </td>
                     <td><input type="radio" name="presense_status_<?= $no ?>" value="sakit"  id="sakit_<?= $no ?>"  <?= $row['presense_status'] === 'sakit' ? 'checked' : '' ?> >
                     <label for="sakit_<?= $no ?>">Sakit </label>
                        </td>
                     <td><input type="radio" name="presense_status_<?= $no ?>" value="izin"  id="izin_<?= $no ?>"  <?= $row['presense_status'] === 'izin' ? 'checked' : '' ?> >
                     <label for="izin_<?= $no ?>">Izin</label>
                        </td>
                 </tr>
                 <?php
                 endwhile;
                 ?>
            </table>
            <button class="btn btn-primary">Kirim</button>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>