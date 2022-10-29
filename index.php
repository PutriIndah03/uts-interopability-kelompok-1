<!-- KELOMPOK 1
PUTRI INDAH LESTARI
DENTA PRAYOGI
SITI MARIYATUL KIPTIYAH
AUFA NANDA BIMA AHADA
FATURROHMAN PRAMANA PUTRA
RAYHAN RAHMANA ADYATAMA-->

<?php 
$sumber = 'https://berita-indo-api.vercel.app/v1/cnn-news/';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>kelompok 1</title>
  </head>
  <body>
    <h1 class="text-center mt-3">Berita News</h1>

    <div class="container">
      <div class="row">
        <?php 
        $i = 0;
        foreach ($data ['data'] as $key => $row) if ($i < 30) { ?>
          
        <div class="col-3 mt-3">
        <div class="card shadow-lg" style="width: 18rem, margin= 2px;">
        <?php foreach ($row['image'] as $item) { ?>
            <img src="<?= $item ?>" class="card-img-top" alt="...">
                        <?php }
                        ?>
          <div class="card-body">
            <h5><?php echo $row ['title']?></h5>
            <hr>
        <p class="card-text"><?php echo $row ['contentSnippet']?></p>
        <a href="<?= $row['link'] ?>" class="btn btn-primary">Selengkapnya</a>
  </div>
</div>
        </div>
        <?php $i += 1; } ?>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
