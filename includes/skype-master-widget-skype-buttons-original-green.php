<?php
//Hook Widget
add_action( 'widgets_init', 'skype_master_widget_original_green' );
//Register Widget
function skype_master_widget_original_green() {
register_widget( 'skype_master_widget_original_green' );
}

class skype_master_widget_original_green extends WP_Widget {
	function __construct(){
	$widget_ops = array( 'classname' => 'Skype Master Original Green Buttons', 'description' => __('The perfect widget to display Original Green Skype Action Buttons in your Wordpress Website and let users or customers contact you in a professional way. ', 'skype_master') );
	$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'skype_master_widget_original_green' );
	parent::__construct( 'skype_master_widget_original_green', __('Skype Master Original Green Buttons', 'skype_master'), $widget_ops, $control_ops );
	}

	function widget( $args, $instance ) {
		extract( $args );
		//Our variables from the widget settings.
		$skype_title = isset( $instance['skype_title'] ) ? $instance['skype_title'] :false;
		$skype_title_new = isset( $instance['skype_title_new'] ) ? $instance['skype_title_new'] :false;
		$skype_username = $instance['skype_username'];
		$skype_lang = $instance['skype_lang'];
		$show_skype_vertical = isset( $instance['show_skype_vertical'] ) ? $instance['show_skype_vertical'] :false;
		$show_skype_call = isset( $instance['show_skype_call'] ) ? $instance['show_skype_call'] :false;
		$show_skype_chat = isset( $instance['show_skype_chat'] ) ? $instance['show_skype_chat'] :false;
		$show_skype_add = isset( $instance['show_skype_add'] ) ? $instance['show_skype_add'] :false;
		$show_skype_view = isset( $instance['show_skype_view'] ) ? $instance['show_skype_view'] :false;
		$show_skype_voicemail = isset( $instance['show_skype_voicemail'] ) ? $instance['show_skype_voicemail'] :false;
		$show_skype_file = isset( $instance['show_skype_file'] ) ? $instance['show_skype_file'] :false;
		echo $before_widget;
		
// Display the widget title
	if ( $skype_title ){
		if (empty ($skype_title_new)){
			$skype_title_new = constant('SKYPE_MASTER_NAME');
			echo $before_title . $skype_title_new . $after_title;
		}
		else{
			echo $before_title . $skype_title_new . $after_title;
		}
	}
	else{
	}
	//prepare lang
	if(empty($skype_lang)){
		$skype_lang = 'en';
	}
//Display Buttons
	if ( $show_skype_vertical ){
		if ($show_skype_call){
		echo '<a href="skype:'.$skype_username.'?call"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-call.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a><br>';
		}
		else {
		}
		if ($show_skype_chat){
		echo '<a href="skype:'.$skype_username.'?chat"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-chat.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a><br>';
		}
		else {
		}
		if ($show_skype_add){
		echo '<a href="skype:'.$skype_username.'?add"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-add.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a><br>';
		}
		else {
		}
		if ($show_skype_view){
		echo '<a href="skype:'.$skype_username.'?userinfo"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-profile.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a><br>';
		}
		else {
		}
		if ($show_skype_voicemail){
		echo '<a href="skype:'.$skype_username.'?voicemail"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-voice.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a><br>';
		}
		else {
		}
		if ($show_skype_file){
		echo '<a href="skype:'.$skype_username.'?sendfile"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-file.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
	}
	else {
		if ($show_skype_call){
		echo '<a href="skype:'.$skype_username.'?call"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-call.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
		if ($show_skype_chat){
		echo '<a href="skype:'.$skype_username.'?chat"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-chat.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
		if ($show_skype_add){
		echo '<a href="skype:'.$skype_username.'?add"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-add.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
		if ($show_skype_view){
		echo '<a href="skype:'.$skype_username.'?userinfo"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-profile.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
		if ($show_skype_voicemail){
		echo '<a href="skype:'.$skype_username.'?voicemail"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-voice.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
		if ($show_skype_file){
		echo '<a href="skype:'.$skype_username.'?sendfile"><img src="'.plugins_url('images/'.$skype_lang.'/green/techgasp-skype-file.png', dirname(__FILE__)).'" style="border: none;" alt="Skype" /></a>';
		}
		else {
		}
	}
	echo $after_widget;
}
	//Update the widget
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags from title and name to remove HTML
		$instance['skype_title'] = strip_tags( $new_instance['skype_title'] );
		$instance['skype_title_new'] = $new_instance['skype_title_new'];
		$instance['skype_username'] = $new_instance['skype_username'];
		$instance['skype_lang'] = $new_instance['skype_lang'];
		$instance['show_skype_vertical'] = $new_instance['show_skype_vertical'];
		$instance['show_skype_call'] = $new_instance['show_skype_call'];
		$instance['show_skype_chat'] = $new_instance['show_skype_chat'];
		$instance['show_skype_add'] = $new_instance['show_skype_add'];
		$instance['show_skype_view'] = $new_instance['show_skype_view'];
		$instance['show_skype_voicemail'] = $new_instance['show_skype_voicemail'];
		$instance['show_skype_file'] = $new_instance['show_skype_file'];
		return $instance;
	}
	function form( $instance ) {
	$plugin_master_name = constant('SKYPE_MASTER_NAME');
	//Set up some default widget settings.
	$defaults = array( 'skype_title_new' => __('Skype Master', 'skype_master'), 'skype_title' => true, 'skype_title_new' => false, 'skype_username' => false, 'skype_lang' => false, 'show_skype_vertical' => true, 'show_skype_call' => false, 'show_skype_chat' => false, 'show_skype_add' => false, 'show_skype_view' => false, 'show_skype_voicemail' => false, 'show_skype_file' => false );
	$instance = wp_parse_args( (array) $instance, $defaults );
	?>
		<br>
		<b>Check the buttons to be displayed:</b>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['skype_title'], true ); ?> id="<?php echo $this->get_field_id( 'skype_title' ); ?>" name="<?php echo $this->get_field_name( 'skype_title' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'skype_title' ); ?>"><b><?php _e('Display Widget Title', 'skype_master'); ?></b></label><br>
	</p>
	<p>
	<label for="<?php echo $this->get_field_id( 'skype_title_new' ); ?>"><?php _e('Change Title:', 'skype_master'); ?></label>
	<br>
	<input id="<?php echo $this->get_field_id( 'skype_title_new' ); ?>" name="<?php echo $this->get_field_name( 'skype_title_new' ); ?>" value="<?php echo $instance['skype_title_new']; ?>" style="width:auto;" />
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<label for="<?php echo $this->get_field_id( 'skype_username' ); ?>"><b><?php _e('Skype Username:', 'skype_master'); ?></label></b><br>
	<input id="<?php echo $this->get_field_id( 'skype_username' ); ?>" name="<?php echo $this->get_field_name( 'skype_username' ); ?>" value="<?php echo $instance['skype_username']; ?>" style="width:auto;" />
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<label for="<?php echo $this->get_field_id( 'skype_lang' ); ?>"><b><?php _e('Skype Language:', 'skype_master'); ?></label></b><br>
	<input id="<?php echo $this->get_field_id( 'skype_lang' ); ?>" name="<?php echo $this->get_field_name( 'skype_lang' ); ?>" value="<?php echo $instance['skype_lang']; ?>" style="width:auto;" />
	<div class="description">Leave empty for English. Available: English <b>en</b>, French <b>fr</b>, Portuguese <b>pt</b>. Override inserting lang code, example <b>fr</b>.</div>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_vertical'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_vertical' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_vertical' ); ?>"><b><?php _e('Display Vertical Buttons', 'skype_master'); ?></b></label><br>
	</p>
	<div class="description">Skype Buttons Display, <b>OFF</b> Horizontal and <b>ON</b> Vertical.</div>
	<p>
	<div class="description">More about these settings, <a href="http://wordpress.techgasp.com/skype-master-documentation/" target="_blank" title="<?php echo $plugin_master_name; ?> Documentation">documentation</a>.</div>
	<br>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_call'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_call' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_call' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_call' ); ?>"><b><?php _e('Display Skype Call Me Button', 'skype_master'); ?></b></label><br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_chat'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_chat' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_chat' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_chat' ); ?>"><b><?php _e('Display Skype Chat with Button', 'skype_master'); ?></b></label><br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_add'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_add' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_add' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_add' ); ?>"><b><?php _e('Display Skype Add Me Button', 'skype_master'); ?></b></label><br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_view'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_view' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_view' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_view' ); ?>"><b><?php _e('Display Skype View My Profile Button', 'skype_master'); ?></b></label><br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_voicemail'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_voicemail' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_voicemail' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_voicemail' ); ?>"><b><?php _e('Display Skype Voice Mail Button', 'skype_master'); ?></b></label><br>
	</p>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" />
	&nbsp;
	<input type="checkbox" <?php checked( (bool) $instance['show_skype_file'], true ); ?> id="<?php echo $this->get_field_id( 'show_skype_file' ); ?>" name="<?php echo $this->get_field_name( 'show_skype_file' ); ?>" />
	<label for="<?php echo $this->get_field_id( 'show_skype_file' ); ?>"><b><?php _e('Display Skype Send Me a File Button', 'skype_master'); ?></b></label><br>
	</p>
<div style="background: url(<?php echo plugins_url('images/techgasp-hr.png', dirname(__FILE__)); ?>) repeat-x; height: 10px"></div>
	<p>
	<img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; width:18px; vertical-align:middle;" />
	&nbsp;
	<b><?php echo $plugin_master_name; ?> Website</b>
	</p>
	<p><a class="button-secondary" href="https://wordpress.techgasp.com/skype-master/" target="_blank" title="<?php echo $plugin_master_name; ?> Info Page">Info Page</a> <a class="button-secondary" href="https://wordpress.techgasp.com/skype-master-documentation/" target="_blank" title="<?php echo $plugin_master_name; ?> Documentation">Documentation</a> <a class="button-primary" href="https://wordpress.techgasp.com/skype-master/" target="_blank" title="Visit Website">Get Add-ons</a></p>
	<?php
	}
 }
?>
