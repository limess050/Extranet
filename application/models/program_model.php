<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Program_model extends CI_Model
{	
	/**
	 * Create the program
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert program data into the database
	 * 
	 * @access	public
	 * @param	int	associated brand id
	 * @param	string	program name
	 * @param	array	vintage permission  key/value: (sort_number=>int, display=>string, stg=>int)
	 * @return	int	program id on success or 0 on failure
	 **/
	public function create_program($brand_id, $name, $permission_data)
	{
		//$this->insert_program();
		//$this->insert_program_permissions();
	}
	
	/**
	 * Insert the program
	 * 
	 * This will insert the program information to the core_programs table
	 * 
	 * @access	private
	 * @param	int	brand id
	 * @param	string	program name
	 * @return	int		this will return a 0 on failure, or the program id on success
	 **/
	private function insert_program($brand_id, $name)
	{
		
	}
	
	/**
	 * Insert the program cms permissions
	 * 
	 * This method will create the starting program permissions for within the cms system
	 * 
	 * @access	private
	 * @param	int	program id
	 * @param	int	the sorting number of this program
	 * @param	string	the display permissions of this program
	 * @param	bool		if the program is usable in the sales tool generator
	 * @return	bool		success or failure
	 **/
	private function insert_program_permissions($program_id, $sort_number, $display, $stg)
	{
		
	}
	
	/**
	 * Modify the program
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify program data in the database
	 * 
	 * @access	public
	 * @param int	program id
	 * @param int	new associated brand id
	 * @param	string	new program name
	 * @param	int	new sort number
	 * @param	string	new display status
	 * @param	bool	new stg status
	 * @return	bool	success or failure
	 **/
	public function modify_program($program_id, $brand_id, $name, $sort_number, $display, $stg)
	{
		//$this->update_program();
		//$this->update_cms_program_permissions();
	}
	
	/**
	 * Update the program
	 * 
	 * This will update the program information in the core_program table
	 * 
	 * @access	private
	 * @param int	program id
	 * @param	string	new associated brand id
	 * @param	string	new program name
	 * @return	bool	success or failure
	 **/
	private function update_program($program_id, $brand_id, $name)
	{
		
	}
	
	/**
	 * Update the program permissions in the cms system
	 * 
	 * This will update the program persmissions inside of the cms system. These determine
	 * the level of visibility of these programs throughout the system.
	 * 
	 * @access	private
	 * @param	int	program id
	 * @param	int	new sort number
	 * @param	string	new display status
	 * @param	int	new stg status
	 * @return	bool	success or failure
	 **/
	private function update_cms_program_permissions($program_id, $sort_number, $display, $stg)
	{
		
	}
	
	/**
	 * Get the program
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the program. It will optionally join the program permissions table.
	 * 
	 * @access	public
	 * @param	int	program id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	program data.
	 **/
	public function get_program($program_id, $join_permissions = FALSE)
	{
		
	}
	
	/**
	 * Get all programs under given parameters
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the program. It will optionally join the program permissions table.
	 * 
	 * @access	public
	 * @param	int	brand id. If 0 don't search by brand_id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	program data.
	 **/
	public function get_all_programs($brand_id = 0, $join_permissions = FALSE)
	{
		
	}
}
