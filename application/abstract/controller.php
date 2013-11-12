<?php


abstract class Abstract_Controller
{
	protected $layout = 'frontend';
	
	/**
	 * @return the $layout
	 */
	public function getLayout() {
		return $this->layout;
	}

	/**
	 * @param string $layout
	 */
	public function setLayout($layout) {
		$this->layout = $layout;
	}

	
	
}