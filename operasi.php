<?php
include 'koneksi.php';

$daunValue = $_POST['daun'];
$batangValue = $_POST['batang'];
$kelopakValue = $_POST['kelopak'];
$hamaValue = $_POST['hama'];

$aa = array(); //untuk array nomor pertanyaan yang valid(tidak kembar)
$bb = array(); //untuk array yang digunakan untuk melakukan pengecekan
//////////////////////////////////daun///////////////
for ($id_alter=1; $id_alter <4 ; $id_alter++) {
  if ($daunValue==$id_alter) {
    $sql = "UPDATE nilai SET nilai=3 WHERE id_alternatif=$id_alter AND id_kriteria=3";
    $result = $con->query($sql);
    for ($i=1;$i<4;$i++)
    {
      if ($i == $id_alter){
      continue;
      }
      $nomor = rand(1,2); //nomor hasil random antara 1-60
      while(in_array($nomor,$bb)) //fungsi in_array = cek apakah $nomor ada dalam array $bb
      {
        $nomor = rand(1,2); //diulang sampai tidak sama
      }
    $bb[$i] = $nomor; //simpan nomor yang valid dalam array $bb ke-i
    $aa[$i] = $nomor;
    $sql2 = "UPDATE nilai SET nilai=$nomor WHERE id_alternatif=$i AND id_kriteria=3";
    $result2 = $con->query($sql2);
    }
  }
}

///////////////////////////////////////////////////batang///////////
$aaa = array(); //untuk array nomor pertanyaan yang valid(tidak kembar)
$bbb = array(); //untuk array yang digunakan untuk melakukan pengecekan

for ($id_alter=1; $id_alter <4 ; $id_alter++) {
  if ($batangValue==$id_alter) {
    $sql = "UPDATE nilai SET nilai=3 WHERE id_alternatif=$id_alter AND id_kriteria=4";
    $result = $con->query($sql);
    for ($i=1;$i<4;$i++)
    {
      if ($i == $id_alter){
      continue;
      }
      $nomor = rand(1,2); //nomor hasil random antara 1-2
      while(in_array($nomor,$bbb)) //fungsi in_array = cek apakah $nomor ada dalam array $bb
      {
        $nomor = rand(1,2); //diulang sampai tidak sama
      }
    $bbb[$i] = $nomor; //simpan nomor yang valid dalam array $bb ke-i
    $aaa[$i] = $nomor;
    $sql2 = "UPDATE nilai SET nilai=$nomor WHERE id_alternatif=$i AND id_kriteria=4";
    $result2 = $con->query($sql2);
    }
  }
}
// // ///////////////////////////////kelopak/////////////////////////
$aaaa = array(); //untuk array nomor pertanyaan yang valid(tidak kembar)
$bbbb = array(); //untuk array yang digunakan untuk melakukan pengecekan
for ($id_alter=1; $id_alter <4 ; $id_alter++) {
  if ($kelopakValue==$id_alter) {
    $sql = "UPDATE nilai SET nilai=3 WHERE id_alternatif=$id_alter AND id_kriteria=5";
    $result = $con->query($sql);
    for ($i=1;$i<4;$i++)
    {
      if ($i == $id_alter){
      continue;
      }
      $nomor = rand(1,2); //nomor hasil random antara 1-2
      while(in_array($nomor,$bbbb)) //fungsi in_array = cek apakah $nomor ada dalam array $bb
      {
        $nomor = rand(1,2); //diulang sampai tidak sama
      }
    $bbbb[$i] = $nomor; //simpan nomor yang valid dalam array $bb ke-i
    $aaaa[$i] = $nomor;
    $sql2 = "UPDATE nilai SET nilai=$nomor WHERE id_alternatif=$i AND id_kriteria=5";
    $result2 = $con->query($sql2);
    }
  }
}
// //
// // ///////////////////////////////hama///////////////////////////
$aaaaa = array(); //untuk array nomor pertanyaan yang valid(tidak kembar)
$bbbbb = array(); //untuk array yang digunakan untuk melakukan pengecekan
for ($id_alter=1; $id_alter <4 ; $id_alter++) {
  if ($hamaValue==$id_alter) {
    $sql = "UPDATE nilai SET nilai=3 WHERE id_alternatif=$id_alter AND id_kriteria=6";
    $result = $con->query($sql);
    for ($i=1;$i<4;$i++)
    {
      if ($i == $id_alter){
      continue;
      }
      $nomor = rand(1,2); //nomor hasil random antara 1-2
      while(in_array($nomor,$bbbbb)) //fungsi in_array = cek apakah $nomor ada dalam array $bb
      {
        $nomor = rand(1,2); //diulang sampai tidak sama
      }
    $bbbbb[$i] = $nomor; //simpan nomor yang valid dalam array $bb ke-i
    $aaaaa[$i] = $nomor;
    $sql2 = "UPDATE nilai SET nilai=$nomor WHERE id_alternatif=$i AND id_kriteria=6";
    $result2 = $con->query($sql2);
    }
  }
}
/////////////////////////////////////////////

// echo $daunValue."<br>" ;
// echo $batangValue."<br>";
// echo $kelopakValue."<br>";
// echo $hamaValue."<br>";

// $result_explode= explode('|', $daunValue);
// echo "daun\n";
// echo "value: ". $result_explode[0]."<br />";
// echo "id_kriteria: ". $result_explode[1]."kr<br />";
//
//  echo "batang\n";
//  $result_explode1= explode('|', $batangValue);
//  echo "value: ". $result_explode1[0]."<br />";
//  echo "id_kriteria: ". $result_explode1[1]."kr<br />";
//
// echo "kelopak\n";
//  $result_explode2= explode('|', $kelopakValue);
//  echo "value: ". $result_explode2[0]."<br />";
//  echo "id_kriteria: ". $result_explode2[1]."kr<br />";
//
// echo "hama\n";
//  $result_explode3= explode('|', $hamaValue);
//  echo "value: ". $result_explode3[0]."<br />";
//  echo "id_kriteria: ". $result_explode3[1]."kr<br />";

//
//  $sql = " INSERT INTO nilai(id_alternatif,id_kriteria)
//   VALUES
// (1, 3),
// (1, 4),
// (1, 5),
// (1, 6),
// (2, 3),
// (2, 4),
// (2, 5),
// (2, 6),
// (3, 3),
// (3, 4),
// (3, 5),
// (3, 6)";
//  $result = $con->query($sql);


    // function insert($id_alternatif, $id_kriteria, $nilai)
    // {
    //     $min = 1;
    //     $max = 4;
    //
    //     $rand = rand($min,$max);
    //
    //     $sql = "INSERT INTO nilai (id_alternatif, id_kriteria, nilai)
    //               values ($id_alternatif, $id_kriteria, $nilai)";
    //
    //     $result = $con->query($sql);
    //     return $result;
    // }
    //
    //  function delete()
    // {
    //     $sql = "TRUNCATE TABLE nilai";
    //
    //     $result = $con->query($sql);
    //     return $result;
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="index.php">SI Pertanian</a>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

    </ul>
  </nav>

  <div class = 'container'>
    <table class = 'table mt-1'>
      <caption>
        Tabel Kriteria C<sub>i</sub>
      </caption>
      <thead class = "thead-dark">
        <tr>
          <th>No</th>
          <th>Simbol</th>
          <th>Kriteria</th>
          <th>Atribut</th>
        </tr>
      </thead>
      <?php
      $sql='SELECT kriteria, sifat, bobot FROM kriteria';
      $result=$con->query($sql);
      $i=0;
      while($row=$result->fetch_object()){
        echo "<tr>
            <td class='right'>".(++$i)."</td>
            <td class='center'>C{$i}</td>
            <td>{$row->kriteria}</td>
            <td>{$row->sifat}</td>
          </tr>\n";
      }
      $result->free();
    ?>
    </table>

<br>

    <table class = 'table mt-1'>
      <caption>
        Pembobotan Kriteria (w)
      </caption>
      <thead class = "thead-dark">
        <tr>
          <th>No</th>
          <th>Kriteria</th>
          <th>Bobot</th>
        </tr>
      </thead>  
        <?php
        $sql="SELECT bobot FROM kriteria ORDER BY id_kriteria";
        $result=$con->query($sql);
        $i=0;
        $W=array();
        while($row=$result->fetch_object()){
          $W[]=$row->bobot;
          echo "<tr class='center'>
                  <td>".(++$i)."</td>
                  <td>C{$i}</td>
                  <td>{$row->bobot}</td>
                </tr>";
        }$result->free();
      ?>
    </table>

    <table class = 'table mt-1'>
      <caption>
        Rating Kecocokan Alternatif utk setiap Kriteria
      </caption>
      <thead class = "thead-dark">
      <tr>
        <th rowspan='2'>Alternatif</th>
        <th colspan='5'>Kriteria</th>
      </tr>
      <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
      </tr>
      </thead>
      <?php
      $sql="SELECT
              a.id_alternatif,
              b.alternatif,
              SUM(IF(a.id_kriteria=3,a.nilai,0)) AS C1,
              SUM(IF(a.id_kriteria=4,a.nilai,0)) AS C2,
              SUM(IF(a.id_kriteria=5,a.nilai,0)) AS C3,
              SUM(IF(a.id_kriteria=6,a.nilai,0)) AS C4
            FROM
              nilai a
              JOIN alternatif b USING(id_alternatif)
            GROUP BY a.id_alternatif
            ORDER BY a.id_alternatif";
      $result=$con->query($sql);
      while($row=$result->fetch_object())
      {
        echo "<tr class='center'>
                <th>A<sub>{$row->id_alternatif}</sub> {$row->alternatif}</th>
                <td>".round($row->C1,1)."</td>
                <td>".round($row->C2,1)."</td>
                <td>".round($row->C3,1)."</td>
                <td>".round($row->C4,1)."</td>
              </tr>\n";
      }
      $result->free();
    ?>
    </table>

<br>

    <table class = 'table mt-1'>
      <caption>
        Matrik Keputusan(X)
      </caption>
      <thead class = "thead-dark">
      <tr>
        <th rowspan='2'>Alternatif</th>
        <th colspan='5'>Kriteria</th>
      </tr>
      <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
      </thead>
      </tr>
      <?php
      $sql="SELECT
              a.id_alternatif,
              b.alternatif,
              SUM(IF(a.id_kriteria=3,a.nilai,0)) AS C1,
              SUM(IF(a.id_kriteria=4,a.nilai,0)) AS C2,
              SUM(IF(a.id_kriteria=5,a.nilai,0)) AS C3,
              SUM(IF(a.id_kriteria=6,a.nilai,0)) AS C4

            FROM
              nilai a
              JOIN alternatif b USING(id_alternatif)
            GROUP BY a.id_alternatif
            ORDER BY a.id_alternatif";
      $result=$con->query($sql);
      $X=array(1=>array(),2=>array(),3=>array(),4=>array());
      while($row=$result->fetch_object()){
        array_push($X[1],round($row->C1,2));
        array_push($X[2],round($row->C2,2));
        array_push($X[3],round($row->C3,2));
        array_push($X[4],round($row->C4,2));

        echo "<tr class='center'>
                <th>A<sub>{$row->id_alternatif}</sub> {$row->alternatif}</th>
                <td>".round($row->C1,2)."</td>
                <td>".round($row->C2,2)."</td>
                <td>".round($row->C3,2)."</td>
                <td>".round($row->C4,2)."</td>

              </tr>\n";
      }
      $result->free();
    ?>
    </table>

3.3.5. Penghitungan Normalisasi (R)
    <table class = 'table mt-1'>
      <caption>
          Matrik Ternormalisasi (R)
      </caption>
      <thead class = "thead-dark">
      <tr>
        <th rowspan='2'>Alternatif</th>
        <th colspan='5'>Kriteria</th>
      </tr>
      <tr>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
      </tr>
      </thead>
      <?php
      $sql="SELECT
              a.id_alternatif,
              SUM(
                IF(
                  a.id_kriteria=3,
                  IF(
                    b.sifat='B',
                    a.nilai/".max($X[1]).",
                    ".min($X[1])."/a.nilai)
                  ,0)
                  ) AS C1,
              SUM(
                IF(
                  a.id_kriteria=4,
                  IF(
                    b.sifat='B',
                    a.nilai/".max($X[2]).",
                    ".min($X[2])."/a.nilai)
                  ,0)
                ) AS C2,
              SUM(
                IF(
                  a.id_kriteria=5,
                  IF(
                    b.sifat='B',
                    a.nilai/".max($X[3]).",
                    ".min($X[3])."/a.nilai)
                  ,0)
                ) AS C3,
              SUM(
                IF(
                  a.id_kriteria=6,
                  IF(
                    b.sifat='C',
                    a.nilai/".max($X[4]).",
                    ".min($X[4])."/a.nilai)
                  ,0)
                ) AS C4
            FROM
              nilai a
              JOIN kriteria b USING(id_kriteria)
            GROUP BY a.id_alternatif
            ORDER BY a.id_alternatif
          ";
      $result=$con->query($sql);
      $R=array();
      while($row=$result->fetch_object()){
        $R[$row->id_alternatif]=array($row->C1,$row->C2,$row->C3,$row->C4);
        echo "<tr class='center'>
                <th>A{$row->id_alternatif}</th>
                <td>".round($row->C1,2)."</td>
                <td>".round($row->C2,2)."</td>
                <td>".round($row->C3,2)."</td>
                <td>".round($row->C4,2)."</td>

              </tr>\n";
      }$result->free();
    ?>
    </table>

<br>

    <table class = 'table mt-1'>
      <caption>
        Nilai Preferensi (P)
      </caption>
      <thead class = "thead-dark">
      <tr>
        <th>No</th>
        <th>Alternatif</th>
        <th>Hasil</th>
      </tr>
      </thead>
      <?php
      $P=array();
      $m=count($W);
      $no=0;
      foreach($R as $i=>$r){
        for($j=0;$j<$m;$j++){
          $P[$i]=(isset($P[$i])?$P[$i]:0)+$r[$j]*$W[$j];
        }
        echo "<tr class='center'>
                <td>".(++$no)."</td>
                <td>A{$i}</td>
                <td>{$P[$i]}</td>
              </tr>";
      }
    ?>
    </table>

<br>

    
      <?php
      arsort($P);
      $no=0;
      foreach($P as $i=>$p){
       
            
    ?>
    </table>

</div>
  <div class = "container">
    <button type = "button" class = "btn btn-info mr-2"  data-toggle="modal" data-target="#myModal">Info</button>
    
    <a href="index.php"> <button type = "button" class = "btn btn-info">Back</button></a>
  </div>

  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Info</h4>
      </div>
      <div class="modal-body">
        <?php
      //    echo "<tr class='center'>
      //    <td>".(++$no)."</td>
      //    <td>A{$i}</td>
      //    <td>{$p}</td>
      //  </tr>";

       if ($i == 1) {
         echo "tanaman anda sangat bagus";
       }else if ($i == 2) {
         echo "tanaman anda kurang sehat";
       }else{
         echo "tanaman anda jelek";
       }
      }
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
