<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			background-color: darkgreen;
		}

		h1 {
			text-align: center;
			font-family: Lucida Handwriting;
			color: White;
		}

		p {
			color: darkblue;
			font-family: papyrus;
		}

		div{
			position: fixed;
			left:350px;
		}
	</style>
</head>
<body>

<h1>Probabilità con PHP</h1>

<?php

    $cp=6;
    $cf=3;
    $P=$cf/$cp;
    $o="50%";

    echo '<p>La probabilità che lanciando un dado esca un numero pari è: <mark>' . $P . '</mark><br>   quindi il <mark>' . $o . '</mark><br>perchè su 6 casi possibili, ovvero il numero delle facce del dado, 3 casi sono favorevoli, cioè i numeri pari.</p>';
    
?>

<div>
	<img src="d.gif">
</div>

</body>
</html>
