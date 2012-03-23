<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Brand_model extends CI_Model
{	
	/**
	 * Create the brand
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert brand data
	 * 
	 * @access	public
	 * @param	string	brand name
	 * @param	string	brand description
	 * @param	array	urls of the brand. array format is ('database_field' => 'url')
	 * @return	int	brand_id on success or 0 on failure
	 **/
	public function create_brand($name, $description, $urls)
	{
		//$this->insert_brand();
		//$this->insert_brand_urls();
	}
	
	/**
	 * Insert the brand
	 * 
	 * This will insert the brand information to the core_brands table
	 * 
	 * @access	private
	 * @param	string	brand name
	 * @param	string	brand description
	 * @return	int		this will return a 0 on failure, or the brand id on success
	 **/
	private function insert_brand($name, $description)
	{
		
	}
	
	/**
	 * Insert the brand urls
	 * 
	 * This will insert the brands url information to the core_brands_url table. The url data 
	 * are the various urls online where the brand has an active presence. Examples include
	 * facebook, twitter, and their own website.
	 * 
	 * @access	private
	 * @param	int	brand id
	 * @param	array	brand urls. array format is ('database_field' => 'url')
	 * @return	bool		success or failure
	 **/
	private function insert_brand_urls($brand_id, $urls)
	{
		
	}
	
	/**
	 * Modify the brand
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify brand data in the database
	 * 
	 * @access	public
	 * @param int	id of the brand
	 * @param	string	new brand name
	 * @param	string	new brand description
	 * @param	array	new urls of the brand. array format is ('database_field' => 'url')
	 * @return	bool		success or failure
	 **/
	public function modify_brand($brand_id, $name, $description, $urls)
	{
		//$this->update_brand();
		//$this->update_brand_urls();
	}
	
	/**
	 * Update the brand
	 * 
	 * This will update the brand information in the core_brands table
	 * 
	 * @access	private
	 * @param int	id of the brand
	 * @param	string	new brand name
	 * @param	string	new brand description
	 * @return	bool	success or failure
	 **/
	private function update_brand($brand_id, $name, $description)
	{
		
	}
	
	/**
	 * Update the brand urls
	 * 
	 * This will update the brand urls in the core_brands_url table. The url data 
	 * are the various urls online where the brand has an active presence. Examples include
	 * facebook, twitter, and their own website.
	 * 
	 * @access	private
	 * @param	int	id of the brand
	 * @param	array	urls of the brand. array format is ('database_field' => 'url')
	 * @return	bool		success or failure
	 **/
	private function update_brand_urls($brand_id, $urls)
	{
		
	}
	
	/**
	 * Get the brand
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the brand. It will optionally join the url table.
	 * 
	 * @access	public
	 * @param	int	id of the brand
	 * @param	array	whether to join the url table with the brand table
	 * @return	array	brand data.
	 **/
	public function get_brand($brand_id, $join_urls = FALSE)
	{
		
	}
	
	/**
	 * Get all brands
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the brand. It will optionally join the url table.
	 * 
	 * @access	public
	 * @param	array	whether to join the url table with the brand table
	 * @return	array	brand data.
	 **/
	public function get_all_brands($join_urls = FALSE)
	{
		
	}
}
