<?php


class Controllers_Spaces extends Abstract_Controller
{
	
	protected $id_space;
	protected $space;

	public function __construct()
	{
		$this->space= new Model_Spaces();
	}
	
	/**
	 * Insert a new space
	 * @param Model_Space $space
	 * @return int id_space
	 */
	public function saveSpaceAction($space)
	{
	
	}
	
	/**
	 * Delete a space
	 * @param int $id_space
	 */
	public function deleteSpaceAction($id_space) {
	
	}
	
	public function updateSpaceAction($space)
	{
	
	}
	
	public function selectSpaceAction($id_space)
	{
	
	}
	
	public function selectAllSpacesAction()
	{
	
	}
	
	// COMMENTS
	public function addCommentsAction()
	{
		
	}
	
	public function deleteCommentsAction(){
		
	}
	
	// TYPE SPACES?
	
	
	
	
	// GETTERS && SETTERS
	/**
	 * @return the $id_space
	 */
	public function getId_space() {
		return $this->id_space;
	}

	/**
	 * @return the $space
	 */
	public function getSpace() {
		return $this->space;
	}

	/**
	 * @param field_type $id_space
	 */
	public function setId_space($id_space) {
		$this->id_space = $id_space;
	}

	/**
	 * @param field_type $space
	 */
	public function setSpace($space) {
		$this->space = $space;
	}

	
	
	
	
}