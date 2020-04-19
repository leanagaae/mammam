<?php
// On inclut le header de la page
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="sass/responsive.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<!-- BANNIÈRE -->
<section id="ban1">
  <h1> Bienvenue sur le blog Mam-Mam !</h1>
</section>

<section id="corps1" class="container">
  <h1> Les dernières actus ! </h1>

  <!-- La dernière recette -->
  <div class="row">

  <figure id="fig1" class="col-md-6">
      <img src="image/image1.png" alt="">
    </figure>

    <article class="col-md-6">
      <h1>
      La dernière recette est arrivée !
      </h1>

      <p>
      Phasellus eu nulla interdum, gravida nibh at, vehicula purus. Cras pulvinar elit eget nulla mattis, eget interdum enim faucibus. Vivamus orci quam, ultrices ut vulputate mollis, imper
      </p>

      <button type="button" class="btn" >Découvrir</button>

      <div id="trait_dessus"></div>
    </article>
  </div>

<!-- MASQUE -->
<div id="masque" class="row">

  <article class="col-md-6">
    <h1>        Masque fait-maison ! </h1>

    <p>
    Phasellus eu nulla interdum, gravida nibh at, vehicula purus. Cras pulvinar elit eget nulla mattis, eget interdum enim faucibus. Vivamus orci quam, ultrices ut vulputate mollis, imper
    </p>

    <button type="button" class="btn" >Découvrir</button>

    <div id="trait_dessus"></div>
  </article>


  <figure id="fig1" class="col-md-6">
    <img src="image/masque.png" alt="">
  </figure>

</div>

  <!-- PEINTURE -->
  <div id="peinture" class="row">

  <figure id="fig1" class="col-md-6">
      <img src="image/peinture1.png" alt="">
    </figure>

    <article class="col-md-6">
      <h1>
     Peinture de la semaine !
      </h1>

      <p>
      Phasellus eu nulla interdum, gravida nibh at, vehicula purus. Cras pulvinar elit eget nulla mattis, eget interdum enim faucibus. Vivamus orci quam, ultrices ut vulputate mollis, imper
      </p>

      <button type="button" class="btn" >Découvrir</button>

      <div id="trait_dessus"></div>
    </article>
  </div>

</section>

<!-- CAROUSSEL -->
<section id="caroussel" class="container">

<div class="top-content">
    <div class="container-fluid">
        <div id="carousel-example" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="image/lea.png" class="img-fluid mx-auto d-block" alt="img1">
                  <h5> Léa </h5>
                  </div>



                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="image/maman.png" class="img-fluid mx-auto d-block" alt="img2">
                    <h5> Christelle</h5>
                </div>


                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="image/papa.png" class="img-fluid mx-auto d-block" alt="img3">
                    <h5> William</h5>
                </div>


                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="image/lea.png" class="img-fluid mx-auto d-block" alt="img4">
                    <h5> Marie</h5>
                </div>


                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="image/lea.png" class="img-fluid mx-auto d-block" alt="img5">
                    <h5> Lisa</h5>
                </div>


                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="image/lea.png" class="img-fluid mx-auto d-block" alt="img6">
                    <h5> Lévana</h5>
                </div>


            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</section>




<?php
// On inclut le footer de la page
include('footer.php');
?>

<script src="app.js"></script>

</html>
