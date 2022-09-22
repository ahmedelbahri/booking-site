<?php

	function	ft_theme_support()
	{
		add_theme_support('title-tag');
		add_theme_support('custom-logo');
		add_theme_support('post-thumbnails');
	}

	add_action('after_setup_theme', 'ft_theme_support');

	function	ft_register_style()
	{
		$version = wp_get_theme()->get('Version');
		wp_enqueue_style('ahmed-style', get_template_directory_uri() . "/assets/css/mighty-ahmed.css", array(), $version, 'all');
		wp_enqueue_style('ahmed-themify-icons', get_template_directory_uri() . "/assets/vendors/themify-icons/css/themify-icons.css", array(), '1.0', 'all');
	}

	add_action('wp_enqueue_scripts', 'ft_register_style');

	function	ft_register_script()
	{
		wp_enqueue_script('ahmed-jquerry-script', get_template_directory_uri() . "/assets/vendors/jquery/jquery-3.4.1.js", array(), '3.4.1', true);
		wp_enqueue_script('ahmed-bootstrap_bundle-script', get_template_directory_uri() . "/assets/vendors/bootstrap/bootstrap.bundle.js", array(), '4.3.1', true);
		wp_enqueue_script('ahmed-bootstrap_affix-script', get_template_directory_uri() . "/assets/vendors/bootstrap/bootstrap.affix.js", array(), '3.3.6', true);
		wp_enqueue_script('ahmed-js-script', get_template_directory_uri() . "/assets/js/mighty-ahmed.js", array(), '1.0', true);
	}
	
	add_action('wp_enqueue_scripts', 'ft_register_script');

?>
