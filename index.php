  <!DOCTYPE html>
  <html>
    <head>
	<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

	<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <div class="container">
		<nav>
			<div class="nav-wrapper grey darken-2">
				<div class="container">
				  <a href="/home" class="brand-logo">PHP Calculator</a>
				  <ul id="nav-mobile" class="right hide-on-med-and-down">
				    <li><a href="#">Sobre</a></li>
				    <li><a href="#">Sobre</a></li>
				    <li><a href="#">Sobre</a></li>
				  </ul>
				</div>
			</div>
		</nav>
  	<main>	
	   	<br><br>
	   	<form action="api.php" method="get">
	   		<div class="container">
		    <table class="responsive-table">
		        <tbody>
		          <tr>
		            <td>
		            	<div class="input-field col s6">
		          			<input placeholder="informe um valor" type="text" class="validate" name="x">
		          			<label for="first_name">Número 1</label>
		        		</div>
		        	</td>
		            <td>
						 <div class="input-field">
						    <select name="sinal">
						   	  <option value="" selected></option>	
						      <option value="1">+</option>
						      <option value="2">-</option>
						      <option value="3">x</option>
						      <option value="4">&divide;</option>
						    </select>
						    <label>Operação</label>
						  </div>
		        	</td>
		        	<td>
		                <div class="input-field col s6">
		          			<input placeholder="informe um valor" id="first_name" type="text" class="validate" name="y">
		          			<label for="first_name">Número 2</label>
		        		</div>
		        	</td>
		            <td>
		            	<button class="btn waves-effect waves-light" type="submit" name="action">Calcular
		    				<i class="material-icons right">send</i>
		  				</button>
		            </td>
		          </tr>
		        </tbody>
		     </table>
		    </div>
	   	</form>
   	<br><br>	
	</main>
   <footer class="page-footer grey darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
				<table>
					<tr>
						<td><img src="image/php.png" width=75></td>
						<td><img src="image/mysql.png" width=75></td>
						<td><img src="image/laravel.png" width=75></td>

					</tr>
				</table>

              </div>
              <div class="col l4 offset-l2 s12">
                <ul>
                  <li>
					<!-- Posicione esta tag onde você deseja que o widget apareça. -->
					<div class="g-follow" data-annotation="bubble" data-height="24" data-href="//plus.google.com/u/0/111758958926570649974" data-rel="author"></div>
                  </li>
                  <li>
					<!-- Place this tag where you want the button to render. -->
					<a class="github-button" href="https://github.com/thiago670" data-size="large" aria-label="Follow @thiago670 on GitHub">Follow @thiago670</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">MIT License<br>Copyright (c) 2017 Thiago R. Assis
            </div>
          </div>
        </footer>
    </div>
      <!--Import jQuery before materialize.js-->
      	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	  <!-- Compiled and minified JavaScript -->
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

	  <!-- Inicialização do jQuery -->
	  	<script type="text/javascript">
			window.onload=function()
			{
				$(document).ready(function() 
				{
			    	$('select').material_select();
				});
			}
		</script>

 	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
	<script src="https://apis.google.com/js/platform.js" async defer>
	  {lang: 'pt-BR'}
	</script>

    </body>
  </html>