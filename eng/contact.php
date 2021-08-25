<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Contact - Tesla Medical Devices</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	
	<? include 'include/header.php'; ?>
  


	  <div class="parallax-container valign-wrapper">
        <div class="row left titulos4">

			<h1 class="header left white-text text-lighten-2 ">CONTACT</h1>

        </div>
    <div class="parallax"><img src="../images/banners/contacto.jpg" alt=""></div>
  </div>


	 <div class="container">

	<div class="row">
	  <div class="col m4 offset-m1 s12">

		  <p>
			  <h5>Central Office</h5>

Angel Carranza 2344, Ciudad Autónoma de Buenos Aires, Argentina - C1425FXF<br><br>
		  <h5>Branch Office</h5>

Jujuy 684, Partido de 3 de Febrero, Provincia de Buenos Aires, Argentina - B1657CJB



<h5>Communication Lines</h5>

<strong>Phone:</strong>  +54-11-4739-1090
		  +54-11-4841-3114</p></div>

	  <div class="col m6 s12 justify-align">
		  <form class="col s12" name="form1" method="get" action="procesador.php">
      <div class="row">
        <div class="input-field col s12 m12">
           <i class="material-icons prefix amber-text lighten-2">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="nombre">
          <label for="icon_prefix">Name</label>
        </div>
        <div class="input-field col s12 m12">
         <i class="material-icons prefix amber-text lighten-2">business</i>
          <input id="icon_business" type="text" class="validate" name="empresa">
          <label for="icon_business">Company</label>
        </div>
		   <div class="input-field col s12 m12">
			    <i class="material-icons prefix amber-text lighten-2">email</i>
          <input id="icon_email" type="email" class="validate" name="correo" required>
          <label for="icon_email">Email</label>
        </div>

		  <div class="input-field col s12 m12">
            <i class="material-icons prefix amber-text lighten-2">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea" name="consulta" required></textarea>
          <label for="icon_prefix2">Enquiry</label>
          </div>
		  <div class="right-align">
		  <button class="btn waves-effect waves-light amber lighten-2 black-text" type="submit" name="enviar" value="Enviar">Send
  </button></div>
    </div>
    </form>

	  </div>
		 </div>

	</div>

	<div class="row center-align"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.061421794006!2d-58.43475378497908!3d-34.57731236360796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb59133142d7b%3A0x2dff94e6c3f4bfba!2s%C3%81ngel%20Justiniano%20Carranza%202344%2C%20Buenos%20Aires!5e0!3m2!1sen!2sar!4v1613341216900!5m2!1sen!2sar" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>

  <? include 'include/footer.php'; ?>


  <!--  Scripts-->
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>
