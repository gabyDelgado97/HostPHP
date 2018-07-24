<?php
        $posts = Array(Array(
        				"Ingeniería del software","Ian Sommerville","Pearson Educación"),
        				Array(
        				"Lógica matemática para Ingeniería de Sistemas y Computación","Sergio Augusto Cardona Torres","ELIZCOM S.A.S"),
        				Array(
        				"Vida artificial: ciencia e ingenieria de sistemas complejos","Gómez Cruz, Nelson Alfonso","Editorial Universidad del Rosario"),
	        			Array(
	        			"Teoria General de Sistemas: Un Enfoque Hacia La Ingenieria de Sistemas 2ed","Dougglas Hurtado Carmona","Lulu.com"),
		        		Array(
	        				"Problemas de ingeniería de sistemas","José Ramón Llata García","Marcombo")
		        	);
        echo json_encode(array('posts'=>$posts));
?>
