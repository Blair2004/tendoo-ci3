<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/**
	 * Admin controller
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/admin
	 *	- or -
	 * 		http://example.com/index.php/admin/index
	 *	- or -
	 * this controller is in other words admin dashboard.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library( 'gui' );	
		$this->load->library( 'menu' );	
		$this->events->add_action( 'before_admin_menu' , array( $this , 'set_admin_menu' ) );
	}
	
	/**
	 * Define default menu for tendoo dashboard
	**/
	
	public function set_admin_menu()
	{
		$this->menu->add_admin_menu_core( 'dashboard' , array(
			'href'			=>		site_url('admin'),
			'icon'			=>		'fa fa-dashboard',
			'title'			=>		__( 'Dashboard' )
		) );
		
		$this->menu->add_admin_menu_core( 'media' , array(
			'title'			=>		__( 'Media Library' ),
			'icon'			=>		'fa fa-image',
			'href'			=>		site_url('admin/media')
		) );
		
		$this->menu->add_admin_menu_core( 'installer' , array(
			'title'			=>		__( 'Install Apps' ),
			'icon'			=>		'fa fa-flask',
			'href'			=>		site_url('admin/installer')
		) );
		
		$this->menu->add_admin_menu_core( 'modules' , array(
			'title'			=>		__( 'Modules' ),
			'icon'			=>		'fa fa-puzzle-piece',
			'href'			=>		site_url('admin/modules')
		) );
		
		$this->menu->add_admin_menu_core( 'themes' , array(
			'title'			=>		__( 'Themes' ),
			'icon'			=>		'fa fa-columns',
			'href'			=>		site_url('admin/themes')
		) );
		
		$this->menu->add_admin_menu_core( 'themes' , array(
			'href'			=>		site_url('admin/controllers'),
			'icon'			=>		'fa fa-bookmark',
			'title'			=>		__( 'Menus' )
		) );
		//
		
		$this->menu->add_admin_menu_core( 'users' , array(
			'title'			=>		__( 'Manage Users' ),
			'icon'			=>		'fa fa-users',
			'href'			=>		site_url('admin/users')
		) );
		
		$this->menu->add_admin_menu_core( 'users' , array(
			'title'			=>		__( 'Create a new User' ),
			'icon'			=>		'fa fa-users',
			'href'			=>		site_url('admin/users/create')
		) );
		// Self settings
		$this->menu->add_admin_menu_core( 'users' , array(
			'title'			=>		__( 'My Profile' ) , // current_user( 'PSEUDO' ),
			'icon'			=>		'fa fa-users',
			'href'			=>		site_url('admin/profile')
		) );
			
		$this->menu->add_admin_menu_core( 'roles' , array(
			'title'			=>		__( 'Roles' ),
			'icon'			=>		'fa fa-shield',
			'href'			=>		site_url('admin/roles')
		) );
		
		$this->menu->add_admin_menu_core( 'roles' , array(
			'title'			=>		__( 'Create new role' ),
			'icon'			=>		'fa fa-shield',
			'href'			=>		site_url('admin/roles/create')
		) );
		$this->menu->add_admin_menu_core( 'roles' , array(
			'title'			=>		__( 'Roles permissions' ),
			'icon'			=>		'fa fa-shield',
			'href'			=>		site_url('admin/roles/permissions')
		) );
		
		$this->menu->add_admin_menu_core( 'settings' , array(
			'title'			=>		__( 'Settings' ),
			'icon'			=>		'fa fa-cogs',
			'href'			=>		site_url('admin/settings')
		) );
		
		/** $this->menu->add_admin_menu_core( 'frontend' , array(
			'title'			=>		sprintf( __( 'Visit %s' ) , riake( 'site_name' , $this->options ) ) ,
			'icon'			=>		'fa fa-eye',
			'href'			=>		site_url('index')
		) );
		**/
		
		$notices_nbr		=		0;
		// $notices_nbr		+=		( get_user_meta( 'tendoo_status' ) == false ) ? 1 : 0;
		
		$this->menu->add_admin_menu_core( 'about' , array(
			'title'			=>		__( 'About' ) ,
			'icon'			=>		'fa fa-rocket',
			'href'			=>		site_url('admin/about'),
			'notices_nbr'	=>		 $notices_nbr
		) );	
	}
	public function index() // main dashboard page
	{
		// var_dump( $this->benchmark );
		$this->load->view( 'admin/index/body' );
	}
	public function media()
	{
		$this->load->view( 'admin/media/body' );
	}
	public function installer()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function modules()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function themes()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function users()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function roles()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function settings()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function about()
	{
		$this->load->view( 'admin/install/body' );
	}
	public function posttype()
	{
		$this->load->view( 'admin/install/body' );
	}
	
}
