<!DOCTYPE html>

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
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    background-color: #ccc !important;
  }
  .leftBanner > p:nth-child(1) {
    font-weight: 700;
    margin-bottom: 2vh;
    color: white;
  }
  .leftBanner > p:nth-child(2) {
    font-weight: 700;
    margin-bottom: 5px;
    color: white;
    margin-bottom: 5vh;
    margin-left: 2vh;
    font-size: 1.4rem !important;
  }
  canvas{
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
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
            <a href="index.php" class="list-ovrd list-group-item active"><i class="fa fa-circle" aria-hidden="true"></i>Account</a>
            <a href="makechanges.php" class="list-ovrd list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>Make changes</a>
            <a href="givefeedback.php" class="list-ovrd list-group-item"><i class="fa fa-circle" aria-hidden="true"></i>Give feedback</a>
          </div>
        <!-- /.col-lg-3 -->
        <div class="col-sm-9" style="margin-top:10vh; text-align:center">
          <h4> Welcome back, Søren. </h4>
          <h4> Here is an overview of your accounts <h4>
          <div display="flex ">
            <ul class="nav userOption nav-tabs">
              <li onclick="randomizeData()"><a href="#fred" data-toggle="tab">Frederick</a></li>
              <li onclick="randomizeData()" class="active">
                <a href="#lisa" data-toggle="tab">Lisa</a>
              </li>
            </ul>
             <div class="tab-content">
               <div id="fred" class="tab-pane">
               </div>
               <div id="lisa" class="tab-pane active">
               </div>
            </div>
          </div>
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <br/><br/><br/>
      <div class="row" >

        <div class="col-sm-3" style="background:#003755; padding:10px">
          <div> 
          <div class="leftBanner">
            <p> YOU NOW HAVE </p>
            <p id="dkkAmount"> 41821 DKK </p>
          </div>
          <div class="leftBanner">
            <p> PAYOUT AGE </p>
            <p id="payoutage"> 18 </p>
          </div>
          <div class="leftBanner">
            <p> MONEY AT DISPOSAL </p>
            <p id="moneyDisposal"> 01.12.2027 </p>
          </div>
          <div class="leftBanner">
            <p> RISK PROFILE </p>
            <p id="riskProfile"> MEDIUM </p>
          </div>
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-sm-9" style="margin-top:0vh;">
          <div style="width:100%;">
              <canvas id="canvas"></canvas>
          </div>
          <br/><br/>
          <div class="leftBanner" style="text-align: left;padding-left:5vw;">
            <!--<p style="color:black"> RETURN OVER  LAST THREE MONTHS </p>-->
            <!--<p id="returnLastMonth"> 3251 DKK </p>-->
          </div>
        </div>
        <!-- /.col-lg-9 -->

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
                    label: "All",
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
                    label: "Quarter",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    hidden:true,
                    borderColor: window.chartColors.blue,
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
                    label: "Month",
                    fill: false,
                    backgroundColor: window.chartColors.yellow,
                    hidden:true,
                    borderColor: window.chartColors.yellow,
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor()
                    ],
                }]
            },
            options: {
               elements: {
                  line: {
                 tension: 0.000000001
                  }
                },
                responsive: true,
                title:{
                    display:true,
                    text:'Development This Year',
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

        function randomizeData() {
            config.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });

            });
            window.myLine.update();
            if(!$('#lisa').hasClass('active')) {
            	$('#dkkAmount').text("41821 DKK");
            	$('#payoutage').text("18") ;
            	$('#moneyDisposal').text("01.12.2027");
            	$('#riskProfile').text("MEDIUM");     
            	//$('#returnLastMonth').text("3251 DKK");      	
            } else {
            	$('#dkkAmount').text("37411 DKK");
            	$('#payoutage').text("21");
            	$('#moneyDisposal').text("01.12.2029") ;
            	$('#riskProfile').text("HIGH");  
            	//$('#returnLastMonth').text("3451 DKK");       
            }
        }

    </script>
    <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>
