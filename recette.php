<?php
// On inclut le header de la page
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="stylerecette.css">

<!-- BANNIÈRE -->
<section id="ban2">
  <h1> LES RECETTES </h1>
</section>


<section id="corps1" class="container">
<!-- LES BOISSONS-->
<div class="row">

<figure id="fig1" class="col-md-6">
    <img src="image/r1.png" alt="">
    <button type="button" class="btn" >Les boissons</button>
  </figure>

  <article class="col-md-6">
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

  <p>
  Phasellus eu nulla interdum, gravida nibh at, vehicula purus. Cras pulvinar elit eget nulla mattis, eget interdum enim faucibus. Vivamus orci quam, ultrices ut vulputate mollis, imper
  </p>

  <button type="button" class="btn" >Découvrir</button>

  <div id="trait_dessus"></div>
</article>


<figure id="fig1" class="col-md-6">
  <img src="image/r2.png" alt="">
  <button type="button" class="btn" >LE SALÉ</button>

</figure>

</div>

<!-- PEINTURE -->
<div id="peinture" class="row">

<figure id="fig1" class="col-md-6">
    <img src="image/r3.png" alt="">
    <button type="button" class="btn" >LE SUCRÉ</button>

  </figure>

  <article class="col-md-6">
    <p>
    Phasellus eu nulla interdum, gravida nibh at, vehicula purus. Cras pulvinar elit eget nulla mattis, eget interdum enim faucibus. Vivamus orci quam, ultrices ut vulputate mollis, imper
    </p>

    <button type="button" class="btn" >Découvrirr</button>

    <div id="trait_dessus"></div>
  </article>
</div>

</section>




</html>




<?php
// On inclut le footer de la page
include('footer.php');
?>
