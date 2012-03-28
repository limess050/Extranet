<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model
{		
	/**
	 * Insert the user
	 * 
	 * This will insert the user information to the core_users table
	 * 
	 * @access	public
	 * @param	string		email address
	 * @param	string	password to be encoded
	 * @param	array	user permissions array('admin','general','etc')
	 * @return	int		user id on success or 0 on failure
	 **/
	public function insert_user($email, $password, $permissions)
	{
	}
	
	/**
	 * Insert the user permission
	 * 
	 *  This method will insert a user permission
	 * 
	 * @access	public
	 * @param	int		user id
	 * @param	string	permission type
	 * @return	int		user permission id
	 **/
	public function insert_user_permission($user_id, $permission_type)
	{
	}
	
	/**
	 * Create the user
	 * 
	 * This method is a general control function that uses other internal functions
	 * to insert program data into the database
	 * 
	 * @access	public
	 * @param	int		user id
	 * @param	string	email address
	 * @param	string	password
	 * @return	bool		success or failure
	 **/
	public function update_user($user_id, $email, $password)
	{
	}
	
	
}
