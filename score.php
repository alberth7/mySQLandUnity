<?php

	$servidor="localhost";

	$usuario="id3733490_db_ecorecicla";

	$pass="abril2017";

	$baseDatos="id3733490_db_ecorecicla";



	$conexion=new mysqli($servidor,$usuario,$pass,$baseDatos);



	$user =  $_GET['user'];

	$nScore =  $_GET['nScore'];



	if(!$conexion){

		//echo " error";

		echo "400";

	}else{

		//echo "conectado abril esto ya esta funcionando!";



		$sql = "select * from usuarios where usuario like '$user'";



		$resultado = mysqli_query($conexion,$sql);



		if(mysqli_num_rows($resultado)>0){

			//echo "el usuario si exsite";

			$sql="UPDATE usuarios SET score='$nScore' WHERE usuario like '$user'";

			$resultado = mysqli_query($conexion,$sql);

			echo "202";



		}else{

			//no se encuentran los datos del usuario

			echo "201";

			

		}

	}





?>