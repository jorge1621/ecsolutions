@extends('layouts.app')
<?
    $store = "";
    $production = "";
    $restaurant = "";
    $betting_center = "";
    $seller = "";
    if ($user->finished == 'active') {
        $store = "http://localhost/ecsolutions/public/store";
    }
?>
@section('content')
<html>
    <head>
        <style>
           .btn{
            margin-left: 10% !important;
           }
        </style>
    </head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de acceso a las aplicaciones</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Bienvenido {{ $user->name }}
                    <br><br>
                    
                    <center>
                        <a href="<? echo $store ?>" class="btn btn-success">Tiendas</a>
                    
                        <a href="<? echo $production ?>" class="btn btn-info">Producción</a>

                        <a href="<? echo $restaurant ?>" class="btn btn-warning">Restaurantes</a>

                        <br><br>
                        
                        <a href="<? echo $betting_center ?>" class="btn btn-danger">Centros hipicos</a>

                        <a href="<? echo $seller ?>" class="btn btn-default">Vendedor</a>
                    </center>
                    
                        
                    <h3>Nota:</h3>
                    <br>
                    <p>Si alguno de los botones no lo lleva a la aplicacion que desea acceder puede que se deba a problemas con su licencia de uso, en este caso debe ponerse en contacto con nosotros para resolver el problema.</p>
                    
    
                </div>
                
            </div>
        </div>
    </div>
    
</div>
</body>
</html>
@endsection
