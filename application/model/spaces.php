<?php

class Model_Spaces
{



function readSpace($id, $config)
{
	switch ($config['adapter'])
	{
		case 'txt':
			include_once('spacesFile.php');
			$space=readSpaceFromFile($id, $config);
			return $spaces;
			break;
		case 'mysql':
			include_once('spaces/spacesMysql.php');
			$spaces = select($id,$config);
			return $spaces;
			break;
		case 'googledocs':
			include_once('spacesGoogledocs.php');
			$spaces = selectAll($config);
			return $spaces;
			break;
	
	}
}

function update($space, $id, $config)
{
	switch ($config['adapter'])
	{
		case 'txt':
			include_once('spacesFile.php');
			updateSpaceTofile($id, $space, $space['filename'], $config);
			return;
			break;
		case 'mysql':
			include_once('spaces/spacesMysql.php');
			$spaces = updateSpace($id, $space, $config);
			return $spaces;
			break;
		case 'googledocs':
			include_once('spacesGoogledocs.php');
			$spaces = selectAll($config);
			return $spaces;
			break;
	
	}
}

// function select($id, $config)

function readSpaces($config)
{
	switch ($config['adapter'])
	{
		case 'txt':
			include_once('spacesFile.php');
			$spaces=readSpacesFromFile($config);
			return $spaces;
		break;
		case 'mysql':
			include_once('spaces/spacesMysql.php');
			$spaces = selectAll($config);
			return $spaces;
		break;
		case 'googledocs':
			include_once('spacesGoogledocs.php');
			$spaces = selectAll($config);
			return $spaces;
		break;
	
	}
}

}










