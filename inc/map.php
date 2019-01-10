<?php 

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyBG0dYdyo64BioGmYs9HZ1ZTE5ZopQ8e48');
}

add_action('acf/init', 'my_acf_init');