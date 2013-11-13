<?php

/**
 * Write spacesFile to file
 * @param string $filename
 * @param array $array_data
 * @return null
 */
function writeSpacesToFile($filename, $array_data, $config)
{
	//Recorrer el array
	foreach($array_data as $key => $value)
	{
		//Si es un array dividir por pipes
		if (is_array($value))
			$value = implode('|',$value);
			
		//Escibir en un array temporal
		$out[]=$value;
	}
	//Añadir foto
	$out[]=$filename;
	//Convertir el array temporal en un string
	$data = implode(',', $out);
		
	//Escribir en el fichero usuarios.txt
	$filename= $_SERVER['DOCUMENT_ROOT'].$config['spaces_data'];
	file_put_contents($filename, $data."\n", FILE_APPEND);
	
	return;
}

/**
 * Update a space to a file. 
 * Is delete TRUE, delete space from file
 * 
 * @param int $line
 * @param array $array_space
 * @param string $filename
 * @param boolean $delete
 * @return null
 */
function updateSpaceTofile($line, $array_space, $filename, $config, $delete=null)
{
	$spaces=readSpacesFromFile($config);
	$array_space[]=$filename;	
	
	
	if($delete)
	{
		$dir = $_SERVER['DOCUMENT_ROOT'].$config['upload_dir'];
		unlink($dir."/".$filename);
		unset($spaces[$line]);
	}
	else
		$spaces[$line]=$array_space;
	
	//Recorrer el array
	foreach($spaces as $key => $space)
	{
		//Si es un array dividir por pipes
		$outspace=array();
		foreach($space as $value)
		{
			if (is_array($value))
				$outspace[] = implode('|',$value);
			else
				$outspace[] = $value;			
		}
		$outspace=implode(',',$outspace);
		//Escibir en un array temporal
		$outspaces[]=$outspace;
	}
	$spaces=implode("\n", $outspaces);
	
	//Escribir en el fichero usuarios.txt
	$filename= $_SERVER['DOCUMENT_ROOT'].$config['spaces_data'];
	file_put_contents($filename, $spaces);
}


/**
 * Read spacesFile from file
 * @return array spacesFile
 */
function readSpacesFromFile($config)
{
	$spaces=array();
	$space=array();
	//Leer los datos del archivo de texto en un string
	$filename= $_SERVER['DOCUMENT_ROOT'].$config['spaces_data'];
	$data=file_get_contents($filename);
	//Separar el string por lineas en un array (filas)
	$filas = explode("\n", $data);
	//Recorrar el array (filas)
	foreach($filas as $key => $value)
	{
		//Dividir el string de fila en un array (columnas)
		$space = explode(',', $value);
		$spaceout=array();
		foreach($space as $numcolumna => $columna)			
		{
			if(strpos($columna,"|")!==false)
				$spaceout[]=explode('|',$columna);
			else if($numcolumna==8 || $numcolumna==10)
				$spaceout[]=array($columna);
			else 
				$spaceout[]=$columna;
		}
		$spaces[]=$spaceout;		
	}
	return $spaces;
}

/**
 * Read space from file
 * @param int $line
 * @return array space
 */
function readSpaceFromFile($line, $config)
{
	$spaces=readSpacesFromFile($config);
	return $spaces[$line];
}


/**
 * Get the space picture filename
 * @param int $line
 * @return string filename
 */
function getSpaceFilename($line, $config)
{
	$space=readSpaceFromFile($line, $config);
	$filename=$space[sizeof($space)-1];
	return $filename;
}






