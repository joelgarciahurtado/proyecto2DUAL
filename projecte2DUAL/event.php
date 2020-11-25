
 <!DOCTYPE html>
<html lang="ca">
<head>
	<title>PHP</title>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/styles2.css">

</head>
<body>
  <?php

  include_once __DIR__."/header.php";

  ?>



<div class="container">
    <div class="row">
      
      <div class="col-xl-9" id="bodyevent">
        <section>
          <article>
            <h4>TITULO DEL EVENTO</h4>
            <img src="" alt="imagen del evento">
            <p>definición del evento</p>
          </article>
        </section>
      </div>

      <div class="col-xl-3" id="divaside">
        <aside>
            <h4>Fitxa</h4>
            <p>aqui va el nombre del evento, la fecha y hora, el lugar donde se celebra y el precio</p>
            <form>
              <p>
                <p id="selecciona"><label for="reserves">Selecciona:</label></p>
                <select name="reservesselect" id="reservesselect">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </p>
              <p><input type="email" name="email" placeholder="adreça de correu electrónic"></p>
              <p><input type="password" name="password" placeholder="contrasenya"></p>
              <input type="submit" value="Enviar">
            </form>
            <p>No recordes la teva contrasenya? <a href="recuperacio.php">clica aqui</a></p>
            <p>registra't per obtenir un compte <a href="registre.php">clica aqui</a></p>
          </aside>
      </div>

    </div>
</div>

  <?php

  include_once __DIR__."/footer.php";

  ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> 
</body>
</html>