<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Payment details</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
  <link href="l2.css" rel="stylesheet">
  </head>

  <body class="text-center" style="background-image: url(bg.jpg); background-image: cover;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand -->
      <a class="navbar-brand" href="#">Logo</a>

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Shop</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Earrings</a>
            <a class="dropdown-item" href="#">Bracelets</a>
            <a class="dropdown-item" href="#">Rings</a>
          </div>
        </li>
      </ul>
    </nav> <br><br>



    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main role="main" class="inner cover" style="font-color: white;">
        <h1 class="cover-heading">WELCOME TO MARA BER DIMES</h1>
        <p class="lead"></p><br><br>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong><?=$this->session->flashdata('feedback')?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="container" style="align-items: center;">

          <form style="align-items: center;" method="post" action="<?= base_url()?>index.php/Hello/savedata">
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="text" name="email" class="form-control" style="width: 150px; align-items: center;" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Phone number</label>
            <input type="text" name="phone" class="form-control" style="width: 150px; align-items: center;" id="exampleFormControlInput2" placeholder="+254700000000">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Mpesa Code</label>
            <input type="text" name="code" class="form-control" style="width: 150px; align-items: center;" id="exampleFormControlInput3" placeholder="NXH354676">
          </div>
          <p class="lead">
            <button name="confirm" class="btn btn-lg btn-secondary">Confirm payment</button>
          </p>
          </form>

          
        </div>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p class="flow-text"> MaraBerDimes &copy; 2019</p>
        </div>
      </footer>
    </div>
  </body>
</html>
