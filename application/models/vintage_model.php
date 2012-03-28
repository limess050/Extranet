<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Vintage_model extends CI_Model
{	
	/**
	 * Create the vintage
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert vintage data into the database
	 * 
	 * @access	public
	 * @param	int	associated brand id
	 * @param	int	associated wine id
	 * @param	string	vintage name
	 * @param	array	vintage text fields key/value:(description=>string, tasting_notes=>string, winemaking=>string, region_vineyards=>string, food_pairings=>string, analysis=>string)
	 * @param	array	vintage permission fields key/value: (sort_number=>int, display=>string, stg=>int)
	 * @return	int	vintage id on success or 0 on failure
	 **/
	public function create_vintage($brand_id, $wine_id, $name, $text_data, $permission_data)
	{
		//$this->insert_vintage();
		//$this->insert_vintage_permissions();
	}
	
	/**
	 * Insert the vintage
	 * 
	 * This will insert the vintage information to the core_vintage table
	 * 
	 * @access	private
	 * @param	int	brand id
	 * @param	int	wine id
	 * @param	string	vintage name
	 * @param	array	vintage text fields key/value:(description=>string, tasting_notes=>string, winemaking=>string, region_vineyards=>string, food_pairings=>string, analysis=>string)
	 * @return	int		this will return a 0 on failure, or the vintage id on success
	 **/
	private function insert_vintage($brand_id, $wine_id, $name, $text_data)
	{
		
	}
	
	/**
	 * Insert the vintage cms permissions
	 * 
	 * This method will create the starting vintage permissions for within the cms system
	 * 
	 * @access	private
	 * @param	int	vintage id
	 * @param	int	the sorting number of this vintage
	 * @param	string	the display permissions of this vintage
	 * @param	bool		if the vintage is usable in the sales tool generator
	 * @return	bool		success or failure
	 **/
	private function insert_wine_permissions($vintage_id, $sort_number, $display, $stg)
	{
		
	}
	
	/**
	 * Modify the vintage
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify vintage data in the database
	 * 
	 * @access	public
	 * @param int	vintage id
	 * @param int	new associated wine id
	 * @param int	new associated brand id
	 * @param	string	new vintage name
	 * @param	array	vintage text fields key/value:(description=>string, tasting_notes=>string, winemaking=>string, region_vineyards=>string, food_pairings=>string, analysis=>string)
	 * @param	array	vintage permission fields key/value: (sort_number=>int, display=>string, stg=>int)
	 * @return	bool	success or failure
	 **/
	public function modify_vintage($vintage_id, $wine_id, $brand_id, $name, $text_data, $permission_data)
	{
		//$this->update_vintage();
		//$this->update_cms_vintage_permissions();
	}
	
	/**
	 * Update the vintage
	 * 
	 * This will update the vintage information in the core_wine table
	 * 
	 * @access	private
	 * @param int	vintage id
	 * @param int	new associated wine id
	 * @param	string	new associated brand id
	 * @param	string	new wine name
	 * @param	array	vintage text fields key/value:(description=>string, tasting_notes=>string, winemaking=>string, region_vineyards=>string, food_pairings=>string, analysis=>string)
	 * @return	bool	success or failure
	 **/
	private function update_vintage($vintage_id, $wine_id, $brand_id, $name, $text_data)
	{
		
	}
	
	/**
	 * Update the vintage permissions in the cms system
	 * 
	 * This will update the vintage persmissions inside of the cms system. These determine
	 * the level of visibility of these wines throughout the system.
	 * 
	 * @access	private
	 * @param	int	vintage id
	 * @param	int	new sort number
	 * @param	string	new display status
	 * @param	int	new stg status
	 * @return	bool	success or failure
	 **/
	private function update_cms_vintage_permissions($vintage_id, $sort_number, $display, $stg)
	{
		
	}
	
	/**
	 * Get the vintage
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the vintage. It will optionally join the wine permissions table.
	 * 
	 * @access	public
	 * @param	int	vintage id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	vintage data.
	 **/
	public function get_vintage($vintage_id, $join_permissions = FALSE)
	{
		
	}
	
	/**
	 * Get all vintages under given parameters
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the vintage. It will optionally join the vintage permissions table.
	 * 
	 * @access	public
	 * @param	int	brand id. If 0 don't search by brand_id
	 * @param	int	wine id. If 0 don't search by brand_id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	vintage data.
	 **/
	public function get_all_vintages($brand_id = 0, $wine_id = 0, $join_permissions = FALSE)
	{
		
	}
}
