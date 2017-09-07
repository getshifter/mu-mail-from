<?php
/*
Plugin Name: Shifter Mail From.
Plugin URI:
Description:
Version: 0.1.0
Author: DigitalCube
Author URI:
License: GPLv2 or later
*/

<?php
function shifter_mail_from( $email_address ) {
  return 'wordpress@app.getshifter.io';
}
add_filter( 'wp_mail_from', 'shifter_mail_from' )
?>
