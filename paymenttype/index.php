<!DOCTYPE html>
<!-- PAYMENT TYPE PAGE-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <?php include('../layouts/nav.php'); 
    
    if(empty($_GET['type']))
    {
        echo "Error";
        header("Location: https://ide.c9.io/hunzi7/my-final-project/shop/index.php");
        exit;
    }
    
    ?>
    
    
    <style>
    
    .lvenmo .img-responsive 
    {
        margin-left: 250 auto;
    }
        /*
        .venmo0{
            margin-top: 350px;
            margin-left:450px;
        }
        
        .ccc{
            margin-top: 350px;
            margin-left:982px;
        }
        */
    </style>
    
    <div class="jumbotron">
        <h1>Please select your payment type.</h1>
        <p>We support Venmo payments <b>OR</b> credit cards.</p>
    </div>
    
    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <a href = "/checkoutv/index.php?type=<?php echo $_GET['type'];?>"><img src="/images/venmo.png" class="rounded center" alt="..."></a>
        </div>
        <div class="col-md-6">
                <a href = "/checkout/index.php?type=<?php echo $_GET['type'];?>"><img src="/images/cc.jpeg" class="rounded center" alt="..."></a>
        </div>
    </div>
    </div>
</body>
</html>