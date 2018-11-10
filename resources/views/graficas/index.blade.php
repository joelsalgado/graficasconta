<!-- index.blade.php -->

<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Beneficiarios por Región</title>
</head>
<body>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Gráficas</b></div>
                <div class="panel-body">
                    <a href="{{route('apMun')}}">Escenario A - por Regiones</a><br>
                    <a href="{{route('apReg')}}">Escenario A - por Municipios</a><br>
                    <a href="{{route('sapMun')}}">Escenario B - por Regiones</a><br>
                    <a href="{{route('sapReg')}}">Escenario B - por Municipios</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
