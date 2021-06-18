
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">


#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
    </head>

    <body>
      <?php include('header.php'); ?>
       <div class="container" style="margin-top: 40px; background-image: url(vbg.jpg);background-size: 100%;">  
        <div class="row">
          <div class="col m6 l12">
            <div class="card" style="text-align: center;">
              <div class="card-content">
      <div id="chartContainer" style="height: 100%; width: 100%;">
      <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var vote = [];

                    for (var i in data) {
                        name.push(data[i].pname);
                        vote.push(data[i].partyvotecount);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Live Result',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: vote
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
      </div>
       </div>
            </div>
          </div>
      </div>
    </div>

  



      <?php include('footer.php'); ?>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  
  </html>