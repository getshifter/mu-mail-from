<?php
/*
Plugin Name: Shifter - Mail From Helper.
Plugin URI: https://github.com/getshifter/shifter-mail-from-helper
Description: Fixes the hostname for mail from.
Version: 0.2.1
Author: Shifter Team
Author URI: https://github.com/getshifter
License: GPLv2 or later
*/

function shifter_mail_from( $email_address ) {
  return 'wordpress@app.getshifter.io';
}
add_filter( 'wp_mail_from', 'shifter_mail_from' );
