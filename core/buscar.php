<?php 

include 'base.php';

$consultaBusqueda = $_POST['valorBusqueda'];

/Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";

  if (isset($consultaBusqueda)) {

	$result_array = array();
        $result = $this->db->query('select * from patients WHERE patient_name LIKE '%$consultaBusqueda%' ');

        return parent::result_array($result);


	//Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
	if ($result === 0) {
		$mensaje = "<p>No hay ningún usuario con ese nombre y/o apellido</p>";
	} else {
		//Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
		echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

		//La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
		while($resultresult = mysqli_fetch_array($consulta)) {
			$nombre = $result['patient_name'];
			$telefono = $result['patient_phone'];
			$edad = $result['patient_age'];

			//Output
			$mensaje .= '
			<p>
			<strong>Nombre:</strong> ' . $nombre . '<br>
			<strong>Apellido:</strong> ' . $telefono . '<br>
			<strong>Edad:</strong> ' . $edad . '<br>
			</p>';

		};//Fin while $resultados

	}; //Fin else $filas
	
	};
};





?>