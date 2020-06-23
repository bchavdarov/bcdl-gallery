<?php
/**
 * Plugin Name:       BCDLab Gallery
 * Plugin URI:        https://bchavdarov.github.io/bcdlab/
 * Description:       BCDL Gallery based on Bootstrap
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Boncho Chavdarov
 * Author URI:        https://bchavdarov.github.io/bcdlab/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bcdl-gallery
 * Domain Path:       /languages
 */

defined( 'ABSPATH' ) or die( 'Please!' );

function bcdlg_main() {
	//$content = '<p class="h1 font-weight-bold">Test of plugin bcdl-gallery</p>';
	$content = '<div class="bcdl-gallery card" style="width: 18rem;">
		  <img src="..." class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Card title</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
		    <a href="#" class="btn btn-primary">Go somewhere</a>
		  </div>
		</div>';
	return $content;
};

add_shortcode( 'bcdlgallery', 'bcdlg_main' );