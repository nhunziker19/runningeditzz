<!doctype html>
<!-- CART PAGE-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </head>

  <body class="bg-light">

    <?php include('../layouts/nav.php'); ?>
    <div class="container">
      <div class="py-5 text-center">
        <style>
            h2
            {
                margin-top:50px;
            }
        </style>
        <h2>Checkout form</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <?php if($_GET['type'] == "basic") { ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Basic Plan</h6>
                <small class="text-muted">Normal Edit</small>
              </div>
              <span class="text-muted">$5</span>
            </li>
            <?php } ?>
            
            <?php if($_GET['type'] == "specialty") { ?>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Specialty Plan</h6>
                <small class="text-muted">Spiced up Edit</small>
              </div>
              <span class="text-muted">$7</span>
            </li>
            <?php } ?>
            
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form id="payment-form" class="needs-validation" novalidate method="POST" action="process.php">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name = "lname" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Instagram Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name = "username"id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name = "email" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Current High School</label>
              <input type="text" class="form-control" name = "highschool" id = "highschool" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">College Comitted to <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" name = "college" id = "college">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">
            
            <input type="hidden" name="type" value="<?php echo $_GET['type']; ?>"/>

            <h4 class="mb-3">Payment</h4>
            <div class="row">
              <div class="col-md-12">
                <!-- Payment information -->
                <div class="form-group">
                  <label class="form-control-label">Credit Card Details</label>
                  <div class="card">
                    <div class="card-body" style="width: 100%;" id="card-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>
                  </div>
                </div>

                <script src="https://js.stripe.com/v3/"></script>

                            <script type="text/javascript">
                                var stripe = Stripe('pk_test_odjP4u8EX2geg7MSmsh2Vjy300RhO07uPV');
                                var elements = stripe.elements();
                                var card = elements.create('card', {
                                  style: {
                                    base: {
                                      iconColor: '#000000',
                                      color: '#31325F',
                                      lineHeight: '40px',
                                      fontWeight: 300,
                                      fontFamily: '"Nunito", Helvetica, sans-serif',
                                      fontSize: '15px',
                                      '::placeholder': {
                                        color: '#CFD7E0',
                                      },
                                    },
                                  }
                                });
                                card.mount('#card-element');
                                card.addEventListener('change', function(event) {
                                  var displayError = document.getElementById('card-errors');
                                  if (event.error) {
                                    displayError.textContent = event.error.message;
                                  } else {
                                    displayError.textContent = '';
                                  }
                                });
                                // Create a token or display an error when the form is submitted.
                                var form = document.getElementById('payment-form');
                                form.addEventListener('submit', function(event) {
                                  event.preventDefault();
                                  stripe.createToken(card).then(function(result) {
                                    if (result.error) {
                                      // Inform the customer that there was an error.
                                      var errorElement = document.getElementById('card-errors');
                                      errorElement.textContent = result.error.message;
                                    } else {
                                      // Send the token to your server.
                                      stripeTokenHandler(result.token);
                                    }
                                  });
                                });
                                function stripeTokenHandler(token) {
                                  // Insert the token ID into the form so it gets submitted to the server
                                  var form = document.getElementById('payment-form');
                                  var hiddenInput = document.createElement('input');
                                  hiddenInput.setAttribute('type', 'hidden');
                                  hiddenInput.setAttribute('name', 'stripeToken');
                                  hiddenInput.setAttribute('value', token.id);
                                  form.appendChild(hiddenInput);
                                  // Submit the form
                                  form.submit();
                                }
                            </script>

              </div>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
