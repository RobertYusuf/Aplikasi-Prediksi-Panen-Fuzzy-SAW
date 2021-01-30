<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SI Pertanian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<a class="navbar-brand" href="#">SI Pertanian</a>
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>

  </ul>
</nav>

<div class="container-fluid ">
  <div class = "badan">
  <h3>Input Data</h3>
  <form action = 'operasi.php' method = 'POST'>
        <div class="row">
          <div class="col">
             <label for="usr">Nama Tanaman:</label>
              <select  name = "tanaman" class="form-control " id="sel1">
                <?php
                $sql = "SELECT * FROM tanaman";
                $result = $con->query($sql);

                    // output data of each row
                    while($row = $result->fetch_array()) {
                        var_dump($row)
                     ?>
                        <option name = "tanaman" value="<?= $row['nama_tanaman'];?>"> <?= $row["nama_tanaman"]; ?></option>
                    <?php
                    }

                ?>
              </select>
          </div>

          <div class="col">
             <label for="daun" >Warna Daun:</label>
            <select name = "daun" class="form-control" id="daun">
                <?php
                $sql = "SELECT * FROM subkriteria where id_kriteria =3";
                $result = $con->query($sql);

                    // output data of each row
                    while($row = $result->fetch_array()) {
                      $a=$row['value'];
                      // $b=$row['id_kriteria'];
                    ?>

                      <option value="<?=$a?>">
                        <?= $row["subkriteria"]; ?></option>

                     <!-- <option value="oke|oya"</option> -->
                    <?php
                    }

                ?>

            </select>
          </div>

          <div class="col">
          <label for="tebal" c>Tebal Batang</label>
          <select name = "batang" class="form-control " id="tebal">
            <?php
            $sql = "SELECT * FROM subkriteria where id_kriteria =4";
            $result = $con->query($sql);

                // output data of each row
                while($row = $result->fetch_array()) {
                  $a=$row['value'];
                  // $b=$row['id_kriteria'];
                ?>

                  <option value="<?=$a?>">
                    <?= $row["subkriteria"]; ?></option>

                 <!-- <option value="oke|oya"</option> -->
                <?php
                }
            ?>
          </select>
          </div>
        </div>

        <div class="row">
            <div class="col">
            <label for="kelopak" >Kondisi Kelopak</label>
            <select name = "kelopak" class="form-control " id="kelopak">
              <?php
              $sql = "SELECT * FROM subkriteria where id_kriteria =5";
              $result = $con->query($sql);

                  // output data of each row
                  while($row = $result->fetch_array()) {
                    $a=$row['value'];
                    // $b=$row['id_kriteria'];
                  ?>
                    <option value="<?=$a?>">
                      <?= $row["subkriteria"]; ?></option>

                   <!-- <option value="oke|oya"</option> -->
                  <?php
                  }
              ?>
            </select>

            </div>

            <div class="col">
            <label for="hama" >Serangan Hama</label>
                <select name = "hama" class="form-control " id="hama">
                  <?php
                  $sql = "SELECT * FROM subkriteria where id_kriteria =6";
                  $result = $con->query($sql);

                      // output data of each row
                      while($row = $result->fetch_array()) {
                        $a=$row['value'];
                        // $b=$row['id_kriteria'];
                      ?>

                        <option value="<?=$a?>">
                          <?= $row["subkriteria"]; ?></option>

                       <!-- <option value="oke|oya"</option> -->
                      <?php
                      }
                  ?>
                </select>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" >Input Data</button>
    </form>

    <br>
    <h3>Tabel Kriteria</h3>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Kriteria</th>
            <th>Bobot</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM kriteria ";
          $result = $con->query($sql);

              // output data of each row
              while($row = $result->fetch_array()) {
               ?>
                  <tr>
                    <td> <?= $row["kriteria"];?></td>
                    <td> <?= $row["bobot"];?></td>
              <?php
              }
          ?>

                  </tr>
        </tbody>
    </table>
  </div>
</div>
 
</body>
</html>
