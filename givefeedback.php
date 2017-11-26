<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Muhammed Jobe">

    <title>DANSKE GAVE PLUS</title>
<link href="https://danskebank.dk/css/styles1.min.css?v=SsWOGrKjRm1Kfp7-b4tLP8CSAyLzLBwa_w63j6JzjLg1" rel="stylesheet">
<link href="https://danskebank.dk/css/styles2.min.css?v=JYJVQN9aoS4qUwSvHAeyVauQfCDSlQNaMa1Puj0pBqI1" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="https://danskebank.dk/-/media/files/forms/book-a-meeting-form-style.css">
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://www.chartjs.org/samples/latest/utils.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>

  </head>
  <style>

  .userOption {
    width: max-content !important;
    text-align: center !important;
    display: block !important;
    margin: auto !important;
  }
  .makeChangesOption {
    width: 100%;
    text-align: center !important;
    display: block !important;
    margin: auto !important;
  }
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    background-color: #ccc !important;
  }
  #confirmChange {
    position: relative;
    width: 20vw;
    height: 5vh;
    max-width: 100%;
    margin-top: .5rem;
    margin-bottom: .5rem;
    text-decoration: none!important;
    padding: 0 0 .0625rem;
    color: #fff;
    transition: box-shadow .1s;
    border-radius: 1000px;
    border: none;
    background-image: linear-gradient(0deg,#049ed6,#00a8e6);
    background-color: #009edd;
    text-align: center; margin: auto;display: block;
  }
  body {
    padding-top: 0px !important;
  }
  </style>
  <body>
      <?php 
        require("header.php")
      ?>
    <!-- Page Content -->
    <div class="container" style="min-height: 75vh">

      <div class="row" style="display: flex">

          <div class="list-group" style="float:left">
            <a href="index.php" class="list-ovrd list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>Account</a>
            <a href="makechanges.php" class="list-ovrd list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>Make changes</a>
            <a href="givefeedback.php" class="list-ovrd list-group-item active"><i class="fa fa-circle" aria-hidden="true"></i>Give feedback</a>
          </div>
        <!-- /.col-lg-3 -->
        <div class="col-sm-9" style="margin-top:10vh; text-align:center">
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <br/><br/><br/>
      <div class="row">

        <div class="col-sm-12">
          <h4 style="text-align: center;margin-bottom: 20px"> GIVE FEEDBACK </h4>
          <div class="" style="padding:40px; background-color:#F6F1FA">
            <p style="margin-bottom: 20px"> We would like to offer you the best solution and experience with DGP. We can do this in the best manner when we receive feedback from you. That is why you should not refrain from giving us feedback, whether big or small things you are concerned about when you are trying DGP </p>

            <textarea class="form-control" rows="5" placeholder="Add Comment" id="comment"></textarea>
            <br/><br/>
            <button id="confirmChange" class="btn btn-large" style=""> SEND NOW </button>
          </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>


    </div>
    <!-- /.container -->
    <hr/>

    <br/>
    <br/>

  
    <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>
