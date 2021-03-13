<?php
/**
 * Plugin Name: Gravity Forms Sync
 * Author: John Bell
 * Description: Save Gravity Forms to a file so they can be added to source control
 */

/**
 * Run after creating or updating a form and save the export code to a file
 *
 * @param $data
 */
function gformsync_after_save_form( $form, $is_new ) {
  file_put_contents(gformsync_path($form), json_encode($form));
}
add_action('gform_after_save_form', 'gformsync_after_save_form', 10, 2);

/**
 * Get the forms sync path
 *
 * @return string
 */
function gformsync_file_path( $form ) {
    $directory = gformsync_directory();
    return $directory . '/' . $form['title'] . '.json';
}

/**
 * Get the directory path to save the files to
 *
 * @filter gformsync.dir
 * @return string
 */
function gformsync_directory() {
    $defaultDir = get_template_directory() . '/gform-sync';
    if(!is_dir($defaultDir)) {
        mkdir($defaultDir, 0775, true);
    }
    return apply_filters('gformsync.dir', $defaultDir);
}

function gformsync_sync_form( $form ) {
  global $wpdb;
  
  if ( ! $form ) {
    return new WP_Error( 'invalid', __( 'Invalid form object', 'gravityforms' ) );
  }  
  
  $form_table_name = GFFormsModel::get_form_table_name();  
  
  $form_exists = false;
  $forms = RGFormsModel::get_forms( null, 'title' );

  $is_active = rgar( $form, 'is_active' ) ? '1' : '0';
  $result = $wpdb->query( $wpdb->prepare( "UPDATE {$form_table_name} SET title=%s, is_active=%s WHERE id=%d", $form['title'], $is_active, $form['id'] ) );
  if ( false === $result ) {
    return new WP_Error( 'error_updating_title', __( 'Error updating title', 'gravityforms' ), $wpdb->last_error );
  }

  return true;

  if ( $form_exists != true ) {
    $result = GFAPI::add_form( $new_form );
  } else {
    $new_form['date_updated'] = date('Y-m-d H:i:s');
		$result    = $wpdb->query( $wpdb->prepare( "UPDATE {$form_table_name} SET title=%s, is_active=%s WHERE id=%d", $form['title'], $is_active, $form['id'] ) );
		if ( false === $result ) {
			return new WP_Error( 'error_updating_title', __( 'Error updating title', 'gravityforms' ), $wpdb->last_error );
		}    
    //print_r($new_form);
    $result = GFAPI::update_form( $new_form );
    //echo "Updated!";
  }
  
}

function gform_sync_get_sync_objects() {
  foreach( new FilesystemIterator(gformsync_directory()) as $file ) {
    $new_form = json_decode(file_get_contents($file->getPathname()), true);
    $new_form['is_active'] = 1;
    if ( count( $forms ) > 0 ) {
      foreach ( $forms as $form ) {     
        if ( $form->title == $new_form['title'] ) {
          $form_exists = true;
        }
      }
    }
  }
}

//add_action('init', 'gformsync_sync_forms');