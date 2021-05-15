<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/navbar.css?v=<?php echo time(); ?>">

    <title>Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
    
                <div class="heading text-center my-5">
                  <h1>CREST BANK WELCOMES YOU!!!</h1>
                  <p class="para">"Your diet is a bank account. Good food choices are good investments."</p>
                  <img src="img/bank-logo.jpg" class="img">
                </div>
             
                
             

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/users.jpg" class="img-fluid">
                    <br>
                    <p>New to Website? Click to create new Account.</p>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    
                    <img src="img/transcation.jpg" class="img-fluid">
                    <br>
                    <p>Want to send money? Click to Transfer</p>
                    <a href="transfermoney.php"><button>Transfer Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/moneyhistory.png" class="img-fluid">
                    <br>
                    <p>Press below button to see Transaction History. </p>
                    <a href="transactionhistory.php"><button>Transaction History</button></a>
                  </div>
            </div>
      </div>
   
      <footer class="text-center mt-5 py-2">
        <p>Copyright &copy 2020 <br>created by <b>Akansha Umeshrao Bodhe</b> <br> The Sparks Foundation(TSF)</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>