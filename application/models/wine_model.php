<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Wine_model extends CI_Model
{	
	/**
	 * Create the wine
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert wine data into the database
	 * 
	 * @access	public
	 * @param	int	associated brand id
	 * @param	string	wine name
	 * @param	array	wine permission  key/value: (sort_number=>int, display=>string, stg=>int)
	 * @return	int	wine id on success or 0 on failure
	 **/
	public function create_wine($brand_id, $name, $permission_data)
	{
		//$this->insert_wine();
		//$this->insert_wine_permissions();
	}
	
	/**
	 * Insert the wine
	 * 
	 * This will insert the wine information to the core_wines table
	 * 
	 * @access	private
	 * @param	int	brand id
	 * @param	string	wine name
	 * @return	int		this will return a 0 on failure, or the wine id on success
	 **/
	private function insert_wine($brand_id, $name)
	{
		
	}
	
	/**
	 * Insert the wine cms permissions
	 * 
	 * This method will create the starting wine permissions for within the cms system
	 * 
	 * @access	private
	 * @param	int	wine id
	 * @param	int	the sorting number of this wine
	 * @param	string	the display permissions of this wine
	 * @param	bool		if the wine is usable in the sales tool generator
	 * @return	bool		success or failure
	 **/
	private function insert_wine_permissions($wine_id, $sort_number, $display, $stg)
	{
		
	}
	
	/**
	 * Modify the wine
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify wine data in the database
	 * 
	 * @access	public
	 * @param int	wine id
	 * @param int	new associated brand id
	 * @param	string	new wine name
	 * @param	int	new sort number
	 * @param	string	new display status
	 * @param	bool	new stg status
	 * @return	bool	success or failure
	 **/
	public function modify_wine($wine_id, $brand_id, $name, $sort_number, $display, $stg)
	{
		//$this->update_wine();
		//$this->update_cms_wine_permissions();
	}
	
	/**
	 * Update the wine
	 * 
	 * This will update the wine information in the core_wine table
	 * 
	 * @access	private
	 * @param int	wine id
	 * @param	string	new associated brand id
	 * @param	string	new wine name
	 * @return	bool	success or failure
	 **/
	private function update_wine($wine_id, $brand_id, $name)
	{
		
	}
	
	/**
	 * Update the wine permissions in the cms system
	 * 
	 * This will update the wine persmissions inside of the cms system. These determine
	 * the level of visibility of these wines throughout the system.
	 * 
	 * @access	private
	 * @param	int	wine id
	 * @param	int	new sort number
	 * @param	string	new display status
	 * @param	int	new stg status
	 * @return	bool	success or failure
	 **/
	private function update_cms_wine_permissions($wine_id, $sort_number, $display, $stg)
	{
		
	}
	
	/**
	 * Get the wine
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the wine. It will optionally join the wine permissions table.
	 * 
	 * @access	public
	 * @param	int	wine id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	wine data.
	 **/
	public function get_wine($wine_id, $join_permissions = FALSE)
	{
		
	}
	
	/**
	 * Get all wines under given parameters
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the wine. It will optionally join the wine permissions table.
	 * 
	 * @access	public
	 * @param	int	brand id. If 0 don't search by brand_id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	wine data.
	 **/
	public function get_all_wines($brand_id = 0, $join_permissions = FALSE)
	{
		
	}
}
