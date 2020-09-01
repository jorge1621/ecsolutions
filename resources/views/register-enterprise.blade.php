<html>
    <head>
    	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="img/sa1.png" />
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <style>
            @media only screen and (min-width: 1024px) {
                .left{
                background-color: blue;
                padding-left: 50px;
                height: auto;
                width: 50%;
            }
                .right{
                    padding-left: 50px;
                    background-color: blue;
                    height: auto;
                    width: 50%;
                }
            
            }

              @media only screen and (max-width: 900px) {
                .left{
                background-color: blue;
                height: auto;
                width: 100%;
                margin: auto;
            }
                .right{
                    padding-right: 20px;
                    background-color: blue;
                    height: auto;
                    width: 100%;
                    padding-left: 5%;
                    padding-right: 5%;
                }
            
            }
        	
        	


        	body{
        		background-color: #DCDBDA;
        	}
        	form{
        		width: 80%;
        		margin-left: 5%;
        	}
        	label{
        		color: white;
        	}
        	span{
        		color: red;
        	}
            nav{
                margin-left: 1px;
            }
        </style>
    </head>
    <body>
    	<nav class="navbar navbar navbar-dark bg-primary">
  			<a class="navbar-brand" href="#">
    			<img src="img/sa1.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    			<strong><font face="Lucida Calligraphy">ECSOLUTIONS</font></strong>
  			</a>
		</nav>
        
        <div class="row">
        	<div class="right">
        		<br>
        		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				        <img src="img/cont1.jpg" class="d-block w-100" alt="..." height="400"><br>
				        <label for=""><h3><strong><font color="white" face="Lucida Calligraphy">Contabilidad.</font></strong></h3></label>
				    </div>
				    <div class="carousel-item">
				      <img src="img/inv1.jpg" class="d-block w-100" alt="..." height="400"><br>
				      <label for=""><h3><strong><font color="white" face="Lucida Calligraphy">Inventarios.</font></strong></h3></label>
				    </div>
				    <div class="carousel-item">
				      <img src="img/tpv1.jpg" class="d-block w-100" alt="..." height="400"><br>
				      <label for=""><h3><strong><font color="white" face="Lucida Calligraphy">Terminal punto de venta.</font></strong></h3></label>
				    </div>
				  </div>
				</div>
        	</div>

            <div class="left">
                <form enctype="multipart/form-data" action="http://localhost/ecsolutions/public/save-register" method="post" class="form">
                    <label for=""><strong>Nombre o razón social. <span>*</span></strong></label>
                    <input type="text" class="form-control" name="enterprise" required="required">
                    
                    <label for=""><strong>Cedula o Rif. <span>*</span></strong></label>
                    <input type="text" class="form-control" name="rif" required="required">
                    
                    <label for=""><strong>Dirección. <span>*</span></strong></label>
                    <input type="text" class="form-control" name="address" required="required">

                    <label for=""><strong>Teléfono. <span>*</span></strong></label>
                    <input type="text" class="form-control" name="phone" required="required">

                    <label for=""><strong>Email. <span>*</span></strong></label>
                    <input type="text" class="form-control" name="email" required="required">

                    <label for=""><strong>Logo de la empresa</strong></label>
                    <br>
                    <div class="input-group mb-3">
  
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                        <label class="custom-file-label" for="inputGroupFile01">Selecione</label>
                      </div>

                    </div>
                    
                    
                    <label for=""><strong>Tipo de afiliación</strong></label>
                    <br>
                    <input type="checkbox"  name="plan0" value="plan0"><strong> Prueba </strong></input>
                    <input type="checkbox"  name="plan3" value="plan3"><strong> Trimestre</strong></input>
                    <input type="checkbox"  name="plan6" value="plan6"><strong> Semestre</strong></input>
                    <input type="checkbox"  name="plan12" value="plan12"><strong> Año</strong></input>
                    <br><br>
                    <button class="btn btn-primary" type="submit">Guardar</button>

                </form>
            </div>
        	
        </div>

         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>