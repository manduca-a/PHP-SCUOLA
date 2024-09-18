<html>
<head>
	<style type="text/css">
		
		h1{
			background-color: blue;
		}

		p{ 
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>  </h1>

<br><br><br>
<p>Ciao <?php echo $_POST["nome"]; ?>
<?php echo "  " .$_POST["cognome"]; ?><br><br>
L'email è: <i><?php echo $_POST["email"]; ?></i><br><br>
<?php echo date("h:i:sa"); ?></p>
<br><br><br>
<h1>  </h1>

</body>
</html>