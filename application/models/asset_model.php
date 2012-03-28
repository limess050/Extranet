<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Asset_model extends CI_Model
{	
	/**
	 * Create the asset
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert asset data into the database
	 * 
	 * @access	public
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	string	type
	 * @param	string	title
	 * @param	string	description
	 * @param	array	filetypes  key/value: (jpg=>int, tif=>int, pdf=>int, eps=>int)
	 * @param	int		sort number
	 * @param	string	display
	 * @return	int		asset id on success or 0 on failure
	 **/
	public function create_asset($brand_id, $wine_id, $vintage_id, $prgoram_id, $type, $title, $description, $filetypes, $sort_number, $display)
	{
		//$this->insert_asset();
		//$this->insert_asset_permissions();
	}
	
	/**
	 * Insert the asset
	 * 
	 * This will insert the asset information to the cms_assets table
	 * 
	 * @access	private
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	string	type
	 * @param	string	title
	 * @param	string	description
	 * @param	array	filetypes  key/value: (jpg=>int, tif=>int, pdf=>int, eps=>int)
	 * @return	int		this will return a 0 on failure, or the asset id on success
	 **/
	private function insert_asset($brand_id, $wine_id, $vintage_id, $prgoram_id, $type, $title, $description, $filetypes)
	{
		
	}
	
	/**
	 * Insert the asset cms permissions
	 * 
	 * This method will create the starting asset permissions for within the cms system
	 * 
	 * @access	private
	 * @param	int	asset id
	 * @param	int	the sorting number of this asset
	 * @param	string	the display permissions of this asset
	 * @return	bool		success or failure
	 **/
	private function insert_asset_permissions($asset_id, $sort_number, $display)
	{
		
	}
	
	/**
	 * Modify the asset
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify asset data in the database
	 * 
	 * @access	public
	 * @param	int		asset id
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	string	type
	 * @param	string	title
	 * @param	string	description
	 * @param	array	filetypes  key/value: (jpg=>int, tif=>int, pdf=>int, eps=>int)
	 * @param	int		sort number
	 * @param	string	display
	 * @return	int		asset id on success or 0 on failure
	 **/
	public function modify_asset($asset_id, $brand_id, $wine_id, $vintage_id, $prgoram_id, $type, $title, $description, $filetypes, $sort_number, $display)
	{
		//$this->update_asset();
		//$this->update_cms_asset_permissions();
	}
	
	/**
	 * Update the asset
	 * 
	 * This will update the asset information in the core_asset table
	 * 
	 * @access	private
	 * @param	int		asset id
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	string	type
	 * @param	string	title
	 * @param	string	description
	 * @param	array	filetypes  key/value: (jpg=>int, tif=>int, pdf=>int, eps=>int)
	 * @return	bool		success or failure
	 **/
	private function update_asset($asset_id, $brand_id, $wine_id, $vintage_id, $prgoram_id, $type, $title, $description, $filetypes)
	{
		
	}
	
	/**
	 * Update the asset permissions in the cms system
	 * 
	 * This will update the asset persmissions inside of the cms system. These determine
	 * the level of visibility of these assets throughout the system.
	 * 
	 * @access	private
	 * @param	int		asset id
	 * @param	int		new sort number
	 * @param	string	new display status
	 * @return	bool		success or failure
	 **/
	private function update_cms_asset_permissions($asset_id, $sort_number, $display)
	{
		
	}
	
	/**
	 * Get the asset
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the asset. It will optionally join the asset permissions table.
	 * 
	 * @access	public
	 * @param	int	asset id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	asset data.
	 **/
	public function get_asset($asset_id, $join_permissions = FALSE)
	{
		
	}
	
	/**
	 * Get all assets under given parameters
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the asset. It will optionally join the asset permissions table.
	 * 
	 * @access	public
	 * @param	int	brand id. If 0 don't search by brand_id
	 * @param	int	program id. If 0 don't search by program_id
	 * @param	int	wine id. If 0 don't search by wine_id
	 * @param	int	vintage id. If 0 don't search by vintage_id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	asset data.
	 **/
	public function get_all_assets($brand_id = 0, $program_id = 0, $wine_id = 0, $vintage = 0,  $join_permissions = FALSE)
	{
		
	}
}
