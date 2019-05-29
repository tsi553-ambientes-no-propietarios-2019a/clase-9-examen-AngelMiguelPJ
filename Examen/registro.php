<?php
// llamamos a la conexion de la base de datos


include('conexiones/utils.php');
?>

<!------------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css">
    <!------------------------------------------------------->
</head>
<body>

<!---------------------------------------------------------->
<center>
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid"> 
            <legend class="text-center header">Registro de usuarios</legend>
            <hr noshade="noshade" size="2" width="100%" />   
            <legend class="text-center header" style="padding-bottom:10px"><img src="img/team.png" alt=""></legend>
        
                <form action="php/process_registration.php" class="form-inline" method="POST">
                    <fieldset>
                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Nombre</span>
                                    </div>
                                    <div class="col">
                                    <input type="text" name="name" placeholder="Nombre">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Rol</span>
                                    </div>
                                    <div class="col">
									<select name="type" required="required">
										<option value="">Seleccione su role---</option>
										<option value="Alimento">Administrador</option>
										<option value="Vestimenta">Cliente</option>
										
									</select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Nombre de usuario</span>
                                    </div>
                                    <div class="col">
                                    <input type="text" name="username" placeholder="Usuario">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Contraseña</span>
                                    </div>
                                    <div class="col">
                                    <input type="password" name="password" placeholder="Clave">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: left">
                                    <span>Confirmar contraseña</span>
                                    </div>
                                    <div class="col">
                                    <input type="password" name="password" placeholder="Confirmar clave">
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div class="form-group" style = "padding-bottom:20px"> 
                                <div class = "container">
                                        <div class="row">
                                        <div class="col-sm-3">
                                    </div>
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-primary btn-xl btn-md">Registrar</button>
                                            </div>
                                        </div>
                                    </div>    
                        </div> 
                        
                        
                    </fieldset>
                </form>            
        </div>
    </div>
</div>
</center>
<!---------------------------------------------------------->

<!----------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!----------------------------------------------------------->   
</body>
</html>