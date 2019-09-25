<!doctype html>
<!-- SHOP PAGE -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pricing example · Bootstrap</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="shop.css" rel="stylesheet">
  </head>
  <body>
    
    <?php include('../layouts/nav.php'); ?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Below is a list of the different orders that can be purchased.</p>
</div>


<?php
  
?>


<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Grapic Arts/Desgin</h4>
      </div>
      <div class="card-body">
        <!--<h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>-->
        <ul class="list-unstyled mt-3 mb-4">
          <!--
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
          -->
          <li><h1>Coming Soon.</h1></li>
          <!--<li><a href = "graphic.php">Example</a></li>-->
        </ul>
        <!--<button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>-->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Basic Commitment Edit</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$5 <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li></li>
          <li>Some detail</li>
          <li>Priority email support</li>
          <li>Must tag account @runningeditzz</li>
          <li><a href = "basicEditEx.php">Example</a></li>
        </ul>
        <button type="button" class="  btn btn-lg btn-block btn-primary" width = "50%" onclick = "location.href = '/paymenttype/index.php?type=basic'">Proceed to Checkout</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Specialty Edit</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$7</h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Photos *MUST* be high quality.</li>
          <li>Looks cooler</li>
          <li>Must tag account @runningeditzz</li>
          <li><a href = "specialtyEditEx.php">Example</a></li>
        </ul>
        <button type="button" class="  btn btn-lg btn-block btn-primary" width = "50%" onclick = "location.href = '/paymenttype/index.php?type=specialty'">Proceed to Checkout</button>
      </div>
    </div>
  </div>

  <!--
  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy;2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
  -->
</div>
</body>
</html>