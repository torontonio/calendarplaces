<?php



/**
 * Read config file to array
 * @param string $filename
 * @return array config
 */
function readConfig($filename, $section)
{
	//Obtener en un array el config.ini
	$config=parse_ini_file($filename, true);
	//Recorrer el array
	foreach($config as $key => $value)
	{
		$array_key=explode(":", $key);
		if($array_key[0]==$section)
		{	
			$config_1=$config[$key];
			if(isset($array_key[1]))
				$config_2=$config[$array_key[1]];
			else
				$config_2=$config_1;	
			break;
		}	
	}
	$config = array_merge($config_2, $config_1);
	
	return $config;
	
}





function getView($action = 'index', $controller = 'index', $viewParams, $config)
{
	if(isset($viewParams['data']))
		$data=$viewParams['data'];
	//include_once ("../views/radioForm.php");
	include_once($_SERVER['DOCUMENT_ROOT'].$config['views']."/".
				$controller."/".$action.".phtml");
}





function getRequest()
{
	$url=explode('/',$_SERVER['REQUEST_URI']);
	
	foreach ($url as $key => $value)
	{
		if(!isset($url[1]) OR $url[1]=='')
			return array('controller'=>'index',
						 'action'=>'index');
		
		$controller=$url[1];
		
		if(!isset($url[2]) || $url[2]=='')
			$action='index';
		else
			$action=$url[2];
		
		if((sizeof($url)%2)==1)
		if($key%2==1 AND $key>2)
			$params[$value]=$url[$key+1];
	}
	
	if(isset($params))
		return array('controller'=>$controller,
			'action'=>$action,
			'params'=>$params);
	else
		return array('controller'=>$controller,
				'action'=>$action);
}



function setLayout($layout, $layoutparams)
{
	$content=$layoutparams['content'];
	include_once("views/layouts/".$layout.".phtml");
}


function renderLayout($layout, $controller, $layoutparams)
{
	ob_start();
		include_once ("controllers/".$controller.".php");
		$content=ob_get_flush();
	ob_end_clean();
	
	$layoutparams=array("content"=>$content);
	
	ob_start();
		setLayout($layout, $layoutparams);
		$layout=ob_get_contents();
	ob_end_clean();
	
	return $layout;
}





















