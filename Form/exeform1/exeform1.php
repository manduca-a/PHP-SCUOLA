<!DOCTYPE html>
<html>
<head>
	<title>Pagina che passa i valori a se stessa</title>

	<style>
 		div.intestazione {
	background-color: White;
	text-align: center;
	margin-bottom: 0px;
	
	border-top-right-radius: 10px; 
	border-top-left-radius: 10px; 
}

div.c {
	background-color: green;
	margin: 0px; 
	border-radius: 50px;
}

div.contenuto {
	border: 0px;
	border-radius: 10px;
	padding: 20px 250px;
	background-color: transparent;
	margin: 80px 300px 0px 400px;
}

div.ph{
	position: absolute;
	top: 360px;
	right: 140px;
}

label{
	font-weight: bold;
}

#l {
  text-align: center;
  color: #F0FFFF;
  text-shadow: 4px 4px 4px black;
}

#b {
	background-color: blue;
	color: white;
}

 	</style>


</head>
<body>
	<div class="intestazione">
 		<h1>Registrazione</h1>
	</div>

	<div class="c">
		<br><br>
   		<h2 id="l">Inserisci i tuoi dati e Registrati</h2>
    	<div class="contenuto">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<fieldset>
		    		<legend>I tuoi dati:</legend>
					<label> Inserisci il tuo nome </label><br><input type="text" name="nome" autofocus required><br><br>
					<label> Inserisci il tuo cognome </label><br><input type="text" name="cognome" required><br><br>
					<label> Inserisci il tuo indirizzo email </label><br><input type="email" name="email" required><br><br>
					<label> Inserisci la tua password </label><br><input type="password" name="password" required><br><br>
					<label> Ripeti la password </label><br><input type="password" name="ppassword" required><br><br><br>
					<input type="submit" id="b" value="Invia i dati"><br><br>
				</fieldset>
				<br><br><br><br><br><br>
			</form>
		</div>
	</div>

	<div class="ph">
		<?php 
			if ($_SERVER["REQUEST_METHOD"] == "POST") 
				{
				  $nome = $_POST['nome'];
				  echo "<label> Nome: </label> " . $nome . "<br><br>";
				}

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
				{
				  $cognome = $_POST['cognome'];
				  echo "<label> Cognome: </label>" . $cognome . "<br><br>";
				}

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
				{
				  $email = $_POST['email'];
				  echo "<label>Email: </label>" . $email . "<br><br>";
				}

			if ($_SERVER["REQUEST_METHOD"] == "POST") 
				{
					$password = $_POST['password'];

					$ppassword = $_POST['ppassword'];
  					if ($ppassword != $password ) {
    					echo "!!!DEVI INSERIRE LA STESSA PASSWORD!!!";
  					}  
				}
		?>
	</div>

</body>
</html>