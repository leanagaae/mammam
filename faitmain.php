<?php
// On inclut le header de la page
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="faitmain.css">



<!-- BANNIÈRE -->
<section id="ban2">
  <h1> LES FAIT-MAIN </h1>
</section>


<section id="corps1" class="container">

  <!-- La dernière recette -->
  <div class="row">

  <figure id="fig1" class="col-md-6">
      <img src="image/fm1.png" alt="">
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
    <img src="image/fm2.png" alt="">
  </figure>

</div>

  <!-- PEINTURE -->
  <div id="peinture" class="row">

  <figure id="fig1" class="col-md-6">
      <img src="image/fm3.png" alt="">
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




</html>




<?php
// On inclut le footer de la page
include('footer.php');
?>
