<?php


// * DO_Planningtool - dopt.posttypes-taxonomies.php
// * ----------------------------------------------------------------------------------
// * Definition and registration of Custom Post Types and Custom Taxonomies
// * ----------------------------------------------------------------------------------
// * @author  Paul van Buuren
// * @license GPL-2.0+
// * @package do-planning-tool
// * version: 1.2.2
// * @desc.   Styling voor Data-agenda toegevoegd en wat extra toegankelijkheidssaus toegevoegd.
// * @link    https://github.com/ICTU/Digitale-Overheid---WordPress-plugin-Planning-Tool/


if ( ! defined( 'ABSPATH' ) ) {
    exit; // disable direct access
}


//========================================================================================================

/**
 * Register post type
 */
function do_pt_init_register_post_type() {

  $typeUC_single = _x( "Actielijn", "labels", "do-planning-tool" );
  $typeUC_plural = _x( "Actielijnen", "labels", "do-planning-tool" );
  
  $typeLC_single = _x( "actielijn", "labels", "do-planning-tool" );
  $typeLC_plural = _x( "actielijnen", "labels", "do-planning-tool" );

	$labels = array(
		"name"                  => sprintf( '%s', $typeUC_single ),
		"singular_name"         => sprintf( '%s', $typeUC_single ),
		"menu_name"             => sprintf( '%s', $typeUC_single ),
		"all_items"             => sprintf( _x( 'All %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new"               => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new_item"          => sprintf( _x( 'Add new %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"edit"                  => _x( "Edit?", "labels", "do-planning-tool" ),
		"edit_item"             => sprintf( _x( 'Edit %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"new_item"              => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"view"                  => _x( "Show", "labels", "do-planning-tool" ),
		"view_item"             => sprintf( _x( 'View %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"search_items"          => sprintf( _x( 'Search %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found"             => sprintf( _x( 'No %s available', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found_in_trash"    => sprintf( _x( 'No %s in trash', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"parent"                => _x( "Parent", "labels", "do-planning-tool" ),
		
	);

	$args = array(
    "label"                 => $typeUC_plural,
    "labels"                => $labels,
    "description"           => "",
    "public"                => true,
    "publicly_queryable"    => true,
    "show_ui"               => true,
    "show_in_rest"          => false,
    "rest_base"             => "",
    "has_archive"           => false,
    "menu_icon"             => "dashicons-calendar",          
    "show_in_menu"          => true,
    "exclude_from_search"   => false,
    "capability_type"       => "post",
    "map_meta_cap"          => true,
    "hierarchical"          => false,
    "rewrite"               => array( "slug" => DOPT__ACTIELIJN_CPT, "with_front" => true ),
    "query_var"             => true,
		"supports"              => array( "title", "editor" ),					
	);
		
	register_post_type( DOPT__ACTIELIJN_CPT, $args );

  $typeUC_single = _x( "Gebeurtenis", "labels", "do-planning-tool" );
  $typeUC_plural = _x( "Gebeurtenissen", "labels", "do-planning-tool" );
  
  $typeLC_single = _x( "gebeurtenis", "labels", "do-planning-tool" );
  $typeLC_plural = _x( "gebeurtenissen", "labels", "do-planning-tool" );

	$labels = array(
		"name"                  => sprintf( '%s', $typeUC_single ),
		"singular_name"         => sprintf( '%s', $typeUC_single ),
		"menu_name"             => sprintf( '%s', $typeUC_single ),
		"all_items"             => sprintf( _x( 'All %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new"               => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new_item"          => sprintf( _x( 'Add new %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"edit"                  => _x( "Edit?", "labels", "do-planning-tool" ),
		"edit_item"             => sprintf( _x( 'Edit %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"new_item"              => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"view"                  => _x( "Show", "labels", "do-planning-tool" ),
		"view_item"             => sprintf( _x( 'View %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"search_items"          => sprintf( _x( 'Search %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found"             => sprintf( _x( 'No %s available', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found_in_trash"    => sprintf( _x( 'No %s in trash', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"parent"                => _x( "Parent", "labels", "do-planning-tool" ),
		
	);



	$args = array(
    "label"                 => $typeUC_plural,
    "labels"                => $labels,
    "description"           => "",
    "public"                => true,
    "publicly_queryable"    => true,
    "show_ui"               => true,
    "show_in_rest"          => false,
    "rest_base"             => "",
    "has_archive"           => false,
    "menu_icon"             => "dashicons-calendar",          
    "show_in_menu"          => true,
    "exclude_from_search"   => false,
    "capability_type"       => "post",
    "map_meta_cap"          => true,
    "hierarchical"          => false,
    "rewrite"               => array( "slug" => DOPT__GEBEURTENIS_CPT, "with_front" => true ),
    "query_var"             => true,
		"supports"              => array( "title", "editor" ),					
	);
		
	register_post_type( DOPT__GEBEURTENIS_CPT, $args );
  
        	
	
	


  $typeUC_single = _x( "Planning label", "labels", "do-planning-tool" );
  $typeUC_plural = _x( "Planning labels", "labels", "do-planning-tool" );
  
  $typeLC_single = _x( "planning label", "labels", "do-planning-tool" );
  $typeLC_plural = _x( "planning labels", "labels", "do-planning-tool" );

  // organisation types
	$labels = array(

		"name"                  => sprintf( '%s', $typeUC_plural ),
		"singular_name"         => sprintf( '%s', $typeUC_single ),
		"menu_name"             => sprintf( '%s', $typeUC_plural ),
		"all_items"             => sprintf( _x( 'All %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new"               => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new_item"          => sprintf( _x( 'Add new %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"edit"                  => _x( "Edit?", "labels", "do-planning-tool" ),
		"edit_item"             => sprintf( _x( 'Edit %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"new_item"              => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"view"                  => _x( "Show", "labels", "do-planning-tool" ),
		"view_item"             => sprintf( _x( 'View %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"search_items"          => sprintf( _x( 'Search %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found"             => sprintf( _x( 'No %s available', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found_in_trash"    => sprintf( _x( 'No %s in trash', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"parent"                => _x( "Parent", "labels", "do-planning-tool" ),
		"archives"              => _x( "Edit?", "labels", "do-planning-tool" ),

	);

	$args = array(
		"label"               => $typeUC_plural,
		"labels"              => $labels,
		"public"              => false,
		"hierarchical"        => true,
		"label"               => $typeUC_plural,
		"show_ui"             => true,
		"show_in_menu"        => true,
		"show_in_nav_menus"   => true,
		"query_var"           => true,
		"rewrite"             => array( 'slug' => DOPT_CT_PLANNINGLABEL, 'with_front' => true, ),
		"show_admin_column"   => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"show_in_quick_edit"  => false,
	);

	register_taxonomy( DOPT_CT_PLANNINGLABEL, array( DOPT__ACTIELIJN_CPT ), $args );
	


  $typeUC_single = _x( "Trekker", "labels", "do-planning-tool" );
  $typeUC_plural = _x( "Trekkers", "labels", "do-planning-tool" );
  
  $typeLC_single = strtolower( $typeUC_single );
  $typeLC_plural = strtolower( $typeUC_plural );

  // organisation types
	$labels = array(

		"name"                  => sprintf( '%s', $typeUC_plural ),
		"singular_name"         => sprintf( '%s', $typeUC_single ),
		"menu_name"             => sprintf( '%s', $typeUC_plural ),
		"all_items"             => sprintf( _x( 'All %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new"               => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new_item"          => sprintf( _x( 'Add new %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"edit"                  => _x( "Edit?", "labels", "do-planning-tool" ),
		"edit_item"             => sprintf( _x( 'Edit %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"new_item"              => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"view"                  => _x( "Show", "labels", "do-planning-tool" ),
		"view_item"             => sprintf( _x( 'View %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"search_items"          => sprintf( _x( 'Search %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found"             => sprintf( _x( 'No %s available', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found_in_trash"    => sprintf( _x( 'No %s in trash', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"parent"                => _x( "Parent", "labels", "do-planning-tool" ),
		"archives"              => _x( "Edit?", "labels", "do-planning-tool" ),

	);

	$args = array(
		"label"               => $typeUC_plural,
		"labels"              => $labels,
		"public"              => false,
		"hierarchical"        => true,
		"label"               => $typeUC_plural,
		"show_ui"             => true,
		"show_in_menu"        => true,
		"show_in_nav_menus"   => true,
		"query_var"           => true,
		"rewrite"             => array( 'slug' => DOPT_CT_TREKKER, 'with_front' => true, ),
		"show_admin_column"   => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"show_in_quick_edit"  => true,
	);

	register_taxonomy( DOPT_CT_TREKKER, array( DOPT__ACTIELIJN_CPT ), $args );
	


  $typeUC_single = _x( "Beleidsonderwerp", "labels", "do-planning-tool" );
  $typeUC_plural = _x( "Beleidsonderwerpen", "labels", "do-planning-tool" );
  
  $typeLC_single = strtolower( $typeUC_single );
  $typeLC_plural = strtolower( $typeUC_plural );

  // organisation types
	$labels = array(

		"name"                  => sprintf( '%s', $typeUC_plural ),
		"singular_name"         => sprintf( '%s', $typeUC_single ),
		"menu_name"             => sprintf( '%s', $typeUC_plural ),
		"all_items"             => sprintf( _x( 'All %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new"               => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"add_new_item"          => sprintf( _x( 'Add new %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"edit"                  => _x( "Edit?", "labels", "do-planning-tool" ),
		"edit_item"             => sprintf( _x( 'Edit %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"new_item"              => sprintf( _x( 'Add %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"view"                  => _x( "Show", "labels", "do-planning-tool" ),
		"view_item"             => sprintf( _x( 'View %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"search_items"          => sprintf( _x( 'Search %s', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found"             => sprintf( _x( 'No %s available', 'labels', "do-planning-tool" ), $typeLC_single ),
		"not_found_in_trash"    => sprintf( _x( 'No %s in trash', 'labels', "do-planning-tool" ), $typeLC_plural ),
		"parent"                => _x( "Parent", "labels", "do-planning-tool" ),
		"archives"              => _x( "Edit?", "labels", "do-planning-tool" ),

	);

	$args = array(
		"label"               => $typeUC_plural,
		"labels"              => $labels,
		"public"              => false,
		"hierarchical"        => true,
		"label"               => $typeUC_plural,
		"show_ui"             => true,
		"show_in_menu"        => true,
		"show_in_nav_menus"   => true,
		"query_var"           => true,
		"rewrite"             => array( 'slug' => DOPT_CT_ONDERWERP, 'with_front' => true, ),
		"show_admin_column"   => true,
		"show_in_rest"        => false,
		"rest_base"           => "",
		"show_in_quick_edit"  => true,
	);
	

	register_taxonomy( DOPT_CT_ONDERWERP, array( DOPT__ACTIELIJN_CPT ), $args );
  
  // default waarde toevoegen (je kunt deze verwijderen, maar komt altijd weer terug)  
  $term = term_exists( DOPT_CT_ONDERWERP_DEFAULT, DOPT_CT_ONDERWERP );
  
  if ( 0 !== $term && null !== $term ) {
  }
  else {
  
    wp_insert_term(
      DOPT_CT_ONDERWERP_DEFAULT,  // the term : 'NL Digibeter'
      DOPT_CT_ONDERWERP,          // the taxonomy
      array(
        'slug'        => sanitize_title( DOPT_CT_ONDERWERP_DEFAULT )
      )
    );  
      
  }

  if ( 22 == 33 ) { // mag bij meerdere dossiers horen?
    
    if ( class_exists( 'Taxonomy_Single_Term' ) ) {
      
      
      $custom_tax_mb = new Taxonomy_Single_Term( DOPT_CT_ONDERWERP, array( DOPT__ACTIELIJN_CPT ) );
      
      // Custom title for this metabox
      $custom_tax_mb->set( 'metabox_title', 'Hoort bij beleidsonderwerp:' );
      
      // Will keep radio elements from indenting for child-terms.
      $custom_tax_mb->set( 'indented', false );
  
      // Kiezen is geen keuze
      $custom_tax_mb->set( 'force_selection', false );    
      
      // Allows adding of new terms from the metabox
      $custom_tax_mb->set( 'allow_new_terms', false );
      
      // Priority of the metabox placement.
      $custom_tax_mb->set( 'priority', 'high' );
    
    }
  
  }	


//      	flush_rewrite_rules();

}
  
//========================================================================================================

