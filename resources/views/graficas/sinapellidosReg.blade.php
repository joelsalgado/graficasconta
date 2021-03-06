<!-- index.blade.php -->

<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escenario B Regiones</title>

    <!-- Fonts -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
</head>
<body>
<div class="row">
    <div class="col-md-11 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Gráfica por Regiones sin Apellidos</b></div>
            <div class="panel-body">
                <canvas id="canvas" height="1000" width="1800"></canvas>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
    var url = "{{ route('sinapellidosReg') }}";
    var regiones = new Array();
    var total = new Array();
    $(document).ready(function(){
        $.get(url, function(response){
            response.forEach(function(data){
                regiones.push(data.region);
                total.push(data.total);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels:regiones,
                    datasets: [{
                        label: 'Beneficiarios por Regiones',
                        //data: Prices,
                        data: total,
                        backgroundColor: '#a03275',
                        borderColor: '#aaa619',
                        borderWidth: 2,
                        hoverBorderWidth: 0
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        });
    });
</script>
</body>
</html>
