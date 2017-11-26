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
  .leftBanner > p:nth-child(1) {
    font-weight: 700;
    margin-bottom: 2vh;
  }
  .leftBanner > p:nth-child(2) {
    font-weight: 700;
    margin-bottom: 5px;
    color: purple;
    margin-bottom: 5vh;
    margin-left: 2vh;
  }
  canvas{
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
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
  }
  body {
    padding-top: 0px !important
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
            <a href="makechanges.php" class="list-ovrd list-group-item active"><i class="fa fa-circle" aria-hidden="true"></i>Make changes</a>
            <a href="givefeedback.php" class="list-ovrd list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>Give feedback</a>
          </div>
        <!-- /.col-lg-3 -->
        <div class="col-sm-9" style="margin-top:10vh; text-align:center">
          <h4> Change your account settings here <h4>
          <div display="flex ">
            <ul class="nav userOption nav-tabs">
              <li onclick="randomizeData()"><a href="#fred" data-toggle="tab">Frederick</a></li>
              <li onclick="randomizeData()" class="active">
                <a href="#lisa" data-toggle="tab">Lisa</a>
              </li>
            </ul>
             <div class="tab-content">
               <div id="fred" class="tab-pane ">
               </div>
               <div id="lisa" class="tab-pane active">
               </div>
            </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <br/><br/><br/>
      <div class="row">

        <div class="col-sm-5">
          <label> PAYOUT AGE </label>
          <div display="flex ">

            <ul class="nav makeChangesOption nav-tabs">
              <li onclick="randomizeData()"><a href="#18" data-toggle="tab">18</a></li>
              <li onclick="randomizeData()" class="active">
                <a href="#21" data-toggle="tab">21</a>
              </li>
              <li onclick="randomizeData()"><a href="#25" data-toggle="tab">25</a></li>
            </ul>
             <div class="tab-content">
               <div id="18" class="tab-pane ">
               </div>
               <div id="21" class="tab-pane active">
               </div>
               <div id="25" class="tab-pane">
               </div>
            </div>

          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-sm-7" style="margin-top:0vh;">
          <label> RISK PROFILE </label>
          <div display="flex ">
            <ul class="nav makeChangesOption nav-tabs">
              <li onclick="randomizeData()"><a href="#low" data-toggle="tab">Low</a></li>
              <li onclick="randomizeData()"><a href="#lower" data-toggle="tab">Lower</a></li>

              <li onclick="randomizeData()" class="active">
                <a href="#medium" data-toggle="tab">Medium</a>
              </li>
              <li onclick="randomizeData()"><a href="#higher" data-toggle="tab">Higher</a></li>
              <li onclick="randomizeData()"><a href="#low" data-toggle="tab">Highest</a></li>

            </ul>
             <div class="tab-content">
               <div id="low" class="tab-pane">
               </div>
               <div id="lower" class="tab-pane">
               </div>
               <div id="medium" class="tab-pane active">
               </div>
               <div id="higher" class="tab-pane">
               </div>
               <div id="highest" class="tab-pane">
               </div>
            </div>

          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <br/><br/>
      <div class="row">
        <div style="width:100%;">
              <canvas id="canvas"></canvas>
          </div>
          <br/><br/>
          <div style="text-align: center;">
            <button id="confirmChange" class="btn btn-large btn-default"> CONFIRM CHANGE </button>
        </div>
      </div>


    </div>
    <!-- /.container -->
    <hr/>

    <br/>
    <br/>

    <script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "Highest Expected Return",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                    fill: false,
                }, {
                    label: "Expected return",
                    fill: '-1',
                    backgroundColor: window.chartColors.purple,
                    borderColor: window.chartColors.purple,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ]
                }, 
                {
                    label: "Lowest Expected Return",
                    fill: false,
                    backgroundColor: window.chartColors.green,
                    borderColor: window.chartColors.green,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }, 
                {
                    label: "Aggregated deposit",
                    fill: false,
                    backgroundColor: window.chartColors.yellow,
                    borderColor: window.chartColors.grey,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                    borderDash: [5, 5]

                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Expected Development',
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Development'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };

        function randomizeData(that) {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });

            }); 

            window.myLine.update();
        }

    </script>
    <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>
