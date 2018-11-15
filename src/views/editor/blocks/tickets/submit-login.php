<?php
/**
 * This template renders the RSVP ticket form login link
 *
 * @version TBD
 *
 */
?>
<a href="<?php echo esc_url( Tribe__Tickets__Tickets::get_login_url() ); ?>">
	<?php esc_html_e( 'Log in to purchase', 'events-gutenberg' ); ?>
</a>