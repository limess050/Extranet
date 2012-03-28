<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Page_model extends CI_Model
{	
	/**
	 * Create the page
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert page data into the database
	 * 
	 * @access	public
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	int		parent page id
	 * @param	string	url_index
	 * @param	array	page sections 
	 * 	array(
	 * 		sort_number=>array('title'=>string, 'sub_title'=>string, 'content'=>string, 'image_url'=>string, 'image_alt'=>string, 'image_align'=>string, 	
	 * 			'image_link'=>string, 'image_border'=>int, 'pdf_url'=>string, 'hidden'=>int),
	 * 		sort_number=>array(...)
	 * 	)
	 * @param	array	search engine optimzation data - 
	 * 	array('brand_id'=>int, 'wine_id'=>int, 'vintage_id'=>int, 'program_id'=>int, 'type'=>string, 'title'=>string, 'description'=>string)
	 * 
	 * @return	int		page id on success or 0 on failure
	 **/
	 public function create_page($brand_id, $wine_id, $vintage_id, $program_id, $parent_page, $url_index, $page_sections, $seo = false)
	{
		//$this->insert_page();
		//loop next function
		//$this->insert_page_section();
		//$this->insert_seo();
	}
	
	/**
	 * Insert the page to the cms_pages table
	 * 
	 * @access	public
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	int		parent page id
	 * @param	string	url_index
	 * @return	int		asset id on success or 0 on failure
	 **/
	public function insert_page($brand_id, $wine_id, $vintage_id, $program_id, $parent_page, $url_index)
	{
		
	}
	
	/**
	 * Insert the page to the cms_pages table
	 * 
	 * @access	public
	 * @param	int		page id
	 * @param	int		sort number
	 * @param	array	page data
	 * 	array('title'=>string, 'sub_title'=>string, 'content'=>string, 'image_url'=>string, 'image_alt'=>string, 'image_align'=>string, 	
	 * 			'image_link'=>string, 'image_border'=>int, 'pdf_url'=>string, 'hidden'=>int)
	 * @return	bool		success or failure
	 **/
	public function insert_page_section($page_id, $sort_number, $page_data)
	{
		
	}
	
	/**
	 * Insert the page to the cms_pages table
	 * 
	 * @access	public
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	string	title
	 * @param	string	description
	 * @return	bool		success or failure
	 **/	 
	public function insert_seo($brand_id, $wine_id, $vintage_id, $program_id, $title, $description)
	{
		
	}
	/**
	 * Modify the page
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify page data into the database
	 * 
	 * @access	public
	 * @param	int		page id
	 * @param	int		new associated brand id
	 * @param	int		new associated wine id
	 * @param	int		new associated vintage id
	 * @param	int		new associated program id
	 * @param	int		new parent page id
	 * @param	string	new url_index
	 * @param	array	page sections 
	 * 	array(
	 * 		sort_number=>array('title'=>string, 'sub_title'=>string, 'content'=>string, 'image_url'=>string, 'image_alt'=>string, 'image_align'=>string, 	
	 * 			'image_link'=>string, 'image_border'=>int, 'pdf_url'=>string, 'hidden'=>int),
	 * 		sort_number=>array(...)
	 * 	)
	 * @param	array	new search engine optimzation data
	 * 	array('brand_id'=>int, 'wine_id'=>int, 'vintage_id'=>int, 'program_id'=>int, 'type'=>string, 'title'=>string, 'description'=>string)
	 * 
	 * @return	bool		asset id on success or 0 on failure
	 **/	 
	public function modify_page($page_id, $brand_id, $wine_id, $vintage_id, $program_id, $parent_page, $url_index, $page_sections, $seo = false)
	{
		//$this->update_page();
		//$this->delete_page_sections();
		//loop next function
		//$this->insert_page_section();
		
		//$this->get_seo();
		//$this->insert_seo();
		//or
		//$this->update_seo();
	}
	
	/**
	 * Delete all page sections associated with a page
	 * 
	 * @access	public
	 * @param	int		page_id
	 * @return	bool		success or failure
	 **/
	public function delete_page_sections($page_id)
	{
		
	}
	
	/**
	 * Insert the page to the cms_pages table
	 * 
	 * @access	public
	 * @param	int		page id
	 * @param	int		new associated brand id
	 * @param	int		new associated wine id
	 * @param	int		new associated vintage id
	 * @param	int		new associated program id
	 * @param	int		new parent page id
	 * @param	string	new url_index
	 * @return	bool		success or failure
	 **/
	public function update_page($page_id, $brand_id, $wine_id, $vintage_id, $program_id, $parent_page, $url_index)
	{
		
	}
	
	/**
	 * Insert the page to the cms_pages table
	 * 
	 * @access	public
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @param	string	title
	 * @param	string	description
	 * @return	bool		success or failure
	 **/
	public function update_seo($brand_id, $wine_id, $vintage_id, $program_id, $title, $description)
	{
		
	}
	
	/**
	 * General control method for getting all properties of a page
	 * 
	 * @access	public
	 * @param	int		url index to search by
	 * @return	array	all page details
	 **/
	public function get_page($url_index)
	{
		//$this->select_page();
		//$this->select_page_sections();
		//$this->select_seo();		
	}
	
	/**
	 * Get the seo of the page based on the brand, wine, vintage, and program id
	 * 
	 * @access	public
	 * @param	int		page id
	 * @return	array	page details or FALSE if none exist
	 **/
	public function select_page($page_id)
	{
		
	}
	
	/**
	 * Get the seo of the page based on the brand, wine, vintage, and program id
	 * 
	 * @access	public
	 * @param	int		page id
	 * @return	array	all page sections details or FALSE if none exist
	 **/
	public function select_page_sections($page_id)
	{
		
	}
	
	/**
	 * Get the seo of the page based on the brand, wine, vintage, and program id
	 * 
	 * @access	public
	 * @param	int		associated brand id
	 * @param	int		associated wine id
	 * @param	int		associated vintage id
	 * @param	int		associated program id
	 * @return	array	seo details or FALSE if none exist
	 **/
	public function select_seo($brand_id, $wine_id, $vintage_id, $program_id)
	{
		
	}
}
