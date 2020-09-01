@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style type="text/css">
      

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/ecsolutions/public/registerUser"><font color="black">Registrar usuarios</font></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><font color="black">Dropdown</font></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><font color="black">Action</font></a>
                  <a class="dropdown-item" href="#"><font color="black">Another action</font></a>
                  <a class="dropdown-item" href="#"><font color="black">Something else here</font></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"><font color="black">Separated link</font></a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><font color="black">Link</font></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"><font color="black">Disabled</font></a>
              </li>
            </ul>
        </div>
        <br>
        <div class="row">
            <br>
            <? 
                use App\User;
                $consult = User::all();
                ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Fecha de corte</th>
                        </thead>
                        <tbody>
                <?
                foreach ($consult as $value) { ?>
                        
                            <tr>
                                <td><? echo $value['name'] ?></td>
                                <td><? echo $value['email'] ?></td>
                                <td><? echo $value['type'] ?></td>
                                <td><? echo $value['status'] ?></td>
                                <td><? echo $value['cut'] ?></td>
                                <td><a href="" class="btn btn-success">Modificar</a></td>
                                <td><a href="" class="btn btn-danger">Eliminar</a></td>
                            </tr>

                            
                           
                        
            <?    }
            ?>
                        </tbody> 
                </table> 
        </div>  
        
    </div>
</body>
</html>
@endsection