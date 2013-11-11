<?php
$request=$layoutparams['request'];
$config=$layoutparams['config'];

switch ($request['action'])
{
	case 'index':
		getView('index', 'index', array(), $config);
	break;
	case 'about':
		getView('about', 'index', array(), $config);
	break;
	case 'contact':
		getView('contact', 'index', array(), $config);
	break;
}