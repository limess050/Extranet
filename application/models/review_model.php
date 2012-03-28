<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Review_model extends CI_Model
{	
	/**
	 * Create the review
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert review data into the database
	 * 
	 * @access	public
	 * @param	int	associated brand id
	 * @param	int	associated wine id
	 * @param	int	associated vintage id
	 * @param	array	review text data key/value:(rating=>string, review=>string, source=>string)
	 * @param	array	review permission data key/value:(sort_number=>int, display=>string, medal=>bool, wine_necker=>bool, shelf_talker=>bool, review_sheet=>bool, featured=>bool, stg=>bool)
	 * @return	int	vintage id on success or 0 on failure
	 **/
	public function create_review($brand_id, $wine_id, $vintage_id, $text_data, $permission_data)
	{
		//$this->insert_review();
		//$this->insert_review_permissions();
	}
	
	/**
	 * Insert the review
	 * 
	 * This will insert the review information to the core_review table
	 * 
	 * @access	private
	 * @param	int	associated brand id
	 * @param	int	associated wine id
	 * @param	int	associated vintage id
	 * @param	array	review text data (rating=>string, review=>string, source=>string)
	 * @return	int	review id on success or 0 on failure
	 **/
	private function insert_review($brand_id, $wine_id, $vintage_id, $text_data)
	{
		
	}
	
	/**
	 * Insert the review cms permissions
	 * 
	 * This method will create the starting review permissions for within the cms system
	 * 
	 * @access	private
	 * @param	int	permission id
	 * @param	array	review permission data key/value:(sort_number=>int, display=>string, medal=>bool, wine_necker=>bool, shelf_talker=>bool, review_sheet=>bool, featured=>bool, stg=>bool)
	 * @return	bool		success or failure
	 **/
	private function insert_review_permissions($permission_id, $permission_data)
	{
	}
	
	/**
	 * Modify the revie
	 * 
	 * This method is a general control function that uses other internal functions
	 * to modify review data in the database
	 * 
	 * @access	public
	 * @param	int	review id
	 * @param	int	new associated brand id
	 * @param	int	new associated wine id
	 * @param	int	new associated vintage id
	 * @param	array	review text data key/value:(rating=>string, review=>string, source=>string)
	 * @param	array	review permission data key/value:(sort_number=>int, display=>string, medal=>bool, wine_necker=>bool, shelf_talker=>bool, review_sheet=>bool, featured=>bool, stg=>bool)
	 * @return	int	review id on success or 0 on failure
	 **/
	public function modify_review($review_id, $brand_id, $wine_id, $vintage_id, $text_data, $permission_data)
	{
		//$this->update_review();
		//$this->update_cms_review_permissions();
	}
	
	/**
	 * Update the review
	 * 
	 * This will update the review information in the core_reviews table
	 * 
	 * @access	private
	 * @param int	review id
	 * @param int	new associated brand id
	 * @param int	new associated wine id
	 * @param int	new associated vintage id
	 * @param	array	new vintage text fields (description, tasting_notes, winemaking, region_vineyards, food_pairings, analysis)
	 * @return	bool	success or failure
	 **/
	private function update_review($review_id, $brand_id, $wine_id, $vintage_id, $text_data)
	{
		
	}
	
	/**
	 * Update the review permissions in the cms system
	 * 
	 * This will update the review persmissions inside of the cms system. These determine
	 * the level of visibility of these wines throughout the system.
	 * 
	 * @access	private
	 * @param	int	review id
	 * @param	array	review permission data key/value:(sort_number=>int, display=>string, medal=>bool, wine_necker=>bool, shelf_talker=>bool, review_sheet=>bool, featured=>bool, stg=>bool)
	 * @return	bool	success or failure
	 **/
	private function update_cms_review_permissions($review_id, $permission_data)
	{
		
	}
	
	/**
	 * Get the review
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the review. It will optionally join the review permissions table.
	 * 
	 * @access	public
	 * @param	int	review id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	review data.
	 **/
	public function get_review($review_id, $join_permissions = FALSE)
	{
		
	}
	
	/**
	 * Get all reviews under given parameters
	 * 
	 * This method is a general control function that uses other internal functions
	 * to acquire information about the review. It will optionally join the review permissions table.
	 * 
	 * @access	public
	 * @param	int	brand id. If 0 don't search by brand_id
	 * @param	int	wine id. If 0 don't search by wine_id
	 * @param	int	vintage id. If 0 don't search by vintage_id
	 * @param	bool	whether to join the permissions table or not
	 * @return	array	vintage data.
	 **/
	public function get_all_reviews($brand_id = 0, $wine_id = 0, $vintage_id = 0, $join_permissions = FALSE)
	{
		
	}
}
