<?php 
	if($_POST['wfwidget_hidden'] == 'Y') {

		function is_whole_number($var){
  			return (is_numeric($var)&&(intval($var)==floatval($var)));
		}
		
		//Form data sent
		$sponsor_id = $_POST['wfwidget_sponsor_id'];
		if (is_whole_number($sponsor_id)) update_option('wfwidget_sponsor_id', $sponsor_id);
			
?>
		<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
<?php
	} else {
		//Normal page display
		$sponsor_id = get_option('wfwidget_sponsor_id');
	}
	
	
?>

<div class="wrap">
<?php    echo "<h2>" . __( 'Promotions Widget Display Options', 'wfwidget_trdom' ) . "</h2>"; ?>

<form name="wfwidget_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="wfwidget_hidden" value="Y">
	<?php    echo "<h4>" . __( 'Wildfireapp Sponsor Settings', 'wfwidget_trdom' ) . "</h4>"; ?>
	<p><?php _e("Wildfireapp Sponsor ID: " ); ?><input type="text" name="wfwidget_sponsor_id" value="<?php echo $sponsor_id; ?>" size="20"><?php _e(" Tutorial: <a href='http://wildfireapp.zendesk.com/entries/384438-how-do-i-find-my-sponsor-id' target='_blank'>How to find your Wildfire Sponsor ID</a>?" ); ?></p>
	<hr />	

	<p class="submit">
	<input type="submit" name="Submit" value="<?php _e('Update Settings', 'wfwidget_trdom' ) ?>" />
	</p>
</form>
</div>