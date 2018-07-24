<?php
/* comprobamos que el usuario tenga un valor y que sea entero */
if(isset($_REQUEST['enviar'])) {
		// echo "entro";
        /*asignamos a una nueva varible y si no asignamos a 10*/
        // $number_of_posts = isset($_GET['num']) ? intval($_GET['num']) : 10; //10 es por defecto
        /*convertimos a letras minusculas y asignamos xml por defecto*/
        $format = $_REQUEST['formato']; //xml es por defecto
        /* creamos el array con los datos que nos devolvio la query*/
        //echo "tengo: $format";
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
}
?>