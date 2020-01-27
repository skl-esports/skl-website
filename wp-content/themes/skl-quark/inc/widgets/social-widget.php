<?php
add_action('widgets_init', 'pro_social_Media__load_widgets');

function pro_social_Media__load_widgets()
{
	register_widget('Pro_Social_Featured_Media_Widget');
}

class Pro_Social_Featured_Media_Widget extends WP_Widget {
	
	function Pro_Social_Featured_Media_Widget()
	{
		$widget_ops = array('classname' => 'pyre_social_media-feat', 'description' => 'Add your social icons');

		$control_ops = array('id_base' => 'pyre_social_media-widget-feat');
		
		
		parent::__construct('pyre_social_media-widget-feat', 'Pro: Social Icons', $widget_ops, $control_ops);
	}
	
	

	
	
	function widget($args, $instance)
	{
		global $post;
		
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		
		$agent_name = $instance['agent_name'];
		$link_text = $instance['link_text'];
		$link_link = $instance['link_link'];
		$office_text = $instance['office_text'];
		$cell_text = $instance['cell_text'];
		$extra_text = $instance['extra_text'];
		$image_url_pro = $instance['image_url_pro'];
		$image_url_pro_link = $instance['image_url_pro_link'];
		
		$iphone_share_pro = $instance['iphone_share_pro'];
		$android_share_pro = $instance['android_share_pro'];
		$apple_share_pro = $instance['apple_share_pro'];
		$linux_share_pro = $instance['linux_share_pro'];
		$windows_share_pro = $instance['windows_share_pro'];
		
		$fb_share_pro = $instance['fb_share_pro'];
		$twttr_share_pro = $instance['twttr_share_pro'];
		$goog_share_pro = $instance['goog_share_pro'];
		$lnkedin_share_pro = $instance['lnkedin_share_pro'];
		$pintrst_share_pro = $instance['pintrst_share_pro'];
		$utube_share_pro = $instance['utube_share_pro'];
		

		$widget_bg = $instance['widget_bg'];
		
		echo $before_widget;
		
		if($title) {
			echo  $before_title.$title.$after_title;
		}
		
	 ?>

		<div class="social-icons-widget-pro">
			<?php if($agent_name): ?><div class="social-summary-pro"><?php echo force_balance_tags( $agent_name ); ?></div><?php endif; ?>
			
			
			<ul class="social-ico">
				<?php if($iphone_share_pro): ?><li><a href="<?php echo esc_attr( $iphone_share_pro ); ?>" target="_blank"><i class="fa fa-mobile"></i></a></li><?php endif; ?>
				<?php if($android_share_pro): ?><li><a href="<?php echo esc_attr( $android_share_pro ); ?>" target="_blank"><i class="fa fa-android"></i></a></li><?php endif; ?>
				<?php if($apple_share_pro): ?><li><a href="<?php echo esc_attr( $apple_share_pro ); ?>" target="_blank"><i class="fa fa-apple"></i></a></li><?php endif; ?>
				<?php if($linux_share_pro): ?><li><a href="<?php echo esc_attr( $linux_share_pro ); ?>" target="_blank"><i class="fa fa-linux"></i></a></li><?php endif; ?>
				<?php if($windows_share_pro): ?><li><a href="<?php echo esc_attr( $windows_share_pro ); ?>" target="_blank"><i class="fa fa-windows"></i></a></li><?php endif; ?>
					
				<?php if($fb_share_pro): ?><li><a href="<?php echo esc_attr( $fb_share_pro ); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php endif; ?>
				<?php if($twttr_share_pro): ?><li><a href="<?php echo esc_attr( $twttr_share_pro ); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php endif; ?>
				<?php if($goog_share_pro): ?><li><a href="<?php echo esc_attr( $goog_share_pro ); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li><?php endif; ?>
				<?php if($lnkedin_share_pro): ?><li><a href="<?php echo esc_attr( $lnkedin_share_pro ); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li><?php endif; ?>
				<?php if($office_text): ?><li><a href="<?php echo esc_attr( $office_text ); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li><?php endif; ?>
				<?php if($cell_text): ?><li><a href="<?php echo esc_attr( $cell_text ); ?>" target="_blank"><i class="fa fa-tumblr"></i></a></li><?php endif; ?>
				<?php if($pintrst_share_pro): ?><li><a href="<?php echo esc_attr( $pintrst_share_pro ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li><?php endif; ?>
				<?php if($utube_share_pro): ?><li><a href="<?php echo esc_attr( $utube_share_pro ); ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li><?php endif; ?>
				<?php if($link_link): ?><li><a href="<?php echo esc_attr( $link_link ); ?>" target="_blank"><i class="fa fa-envelope"></i></a></li><?php endif; ?>
			</ul><!-- close .social-ico -->
			
			<?php if($image_url_pro): ?><a href="<?php echo esc_attr( $image_url_pro_link ); ?>" class="progression-button" <?php if($widget_bg): ?>style="background-color:<?php echo esc_attr( $widget_bg ); ?>;"<?php endif; ?>><?php echo esc_attr( $image_url_pro ); ?></a><?php endif; ?>
			
			
		</div><!-- close .social-icons-widget-pro -->

		
		<?php
		echo $after_widget;
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		
		$instance['title'] = $new_instance['title'];
		$instance['image_url_pro'] = $new_instance['image_url_pro'];
		$instance['image_url_pro_link'] = $new_instance['image_url_pro_link'];
		$instance['agent_name'] = $new_instance['agent_name'];
		$instance['link_text'] = $new_instance['link_text'];
		$instance['link_link'] = $new_instance['link_link'];
		$instance['office_text'] = $new_instance['office_text'];
		$instance['cell_text'] = $new_instance['cell_text'];
		$instance['extra_text'] = $new_instance['extra_text'];
		
		
		$instance['iphone_share_pro'] = $new_instance['iphone_share_pro'];
		$instance['android_share_pro'] = $new_instance['android_share_pro'];
		$instance['apple_share_pro'] = $new_instance['apple_share_pro'];
		$instance['linux_share_pro'] = $new_instance['linux_share_pro'];
		$instance['windows_share_pro'] = $new_instance['windows_share_pro'];
		
		$instance['fb_share_pro'] = $new_instance['fb_share_pro'];
		$instance['twttr_share_pro'] = $new_instance['twttr_share_pro'];
		$instance['goog_share_pro'] = $new_instance['goog_share_pro'];
		$instance['lnkedin_share_pro'] = $new_instance['lnkedin_share_pro'];
		
		$instance['pintrst_share_pro'] = $new_instance['pintrst_share_pro'];
		$instance['utube_share_pro'] = $new_instance['utube_share_pro'];
		
		$instance['widget_bg'] = $new_instance['widget_bg'];
		
		return $instance;
	}

	function form($instance)
	{
		
		$defaults = array('title' => 'Get started today.', 'image_url_pro' => 'PURCHASE QUARK', 'image_url_pro_link' => '#!', 'agent_name' => 'Available for iOS, Android, Mac, Linux, and Windows', 'iphone_share_pro' => '#!', 'android_share_pro' => '#!', 'apple_share_pro' => '#!', 'linux_share_pro' => '#!', 'windows_share_pro' => '#!', 'fb_share_pro' => '', 'twttr_share_pro' => '', 'goog_share_pro' => '', 'lnkedin_share_pro' => '', 'office_text' => '', 'cell_text' => '', 'pintrst_share_pro' => '', 'utube_share_pro' => '', 'link_link' => '', 'widget_bg' => '#18bfde');
		$instance = wp_parse_args((array) $instance, $defaults); ?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e( 'Title:', 'quark-progression' ); ?></label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		
		
		
		<script type='text/javascript'>
		            jQuery(document).ready(function($) {
		                $('.my-color-picker-portfolio').wpColorPicker();
		            });
		        </script>
		
		<p>
			<label for="<?php echo $this->get_field_id('agent_name'); ?>"><?php esc_html_e( 'Text Field', 'quark-progression' ); ?>:</label>			
			<textarea class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('agent_name'); ?>" name="<?php echo $this->get_field_name('agent_name'); ?>"><?php echo $instance['agent_name']; ?></textarea>
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id('image_url_pro'); ?>"><?php esc_html_e( 'Button Text', 'quark-progression' ); ?>:</label>			
			<input class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('image_url_pro'); ?>" name="<?php echo $this->get_field_name('image_url_pro'); ?>" value="<?php echo $instance['image_url_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('image_url_pro_link'); ?>"><?php esc_html_e( 'Button Link', 'quark-progression' ); ?>:</label>			
			<input class="widefat" rows="10" cols="20" id="<?php echo $this->get_field_id('image_url_pro_link'); ?>" name="<?php echo $this->get_field_name('image_url_pro_link'); ?>" value="<?php echo $instance['image_url_pro_link']; ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id('widget_bg'); ?>"><?php _e( 'Button Background Color', 'quark-progression' ); ?>:</label>
			<br>
			<input class="my-color-picker-portfolio"  id="<?php echo $this->get_field_id('widget_bg'); ?>" name="<?php echo $this->get_field_name('widget_bg'); ?>" value="<?php echo $instance['widget_bg']; ?>" />
		</p>
		
		
		
		<p>
			<label for="<?php echo $this->get_field_id('iphone_share_pro'); ?>">Phone <?php esc_html_e( 'Icon Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('iphone_share_pro'); ?>" name="<?php echo $this->get_field_name('iphone_share_pro'); ?>" value="<?php echo $instance['iphone_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('android_share_pro'); ?>">Android <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('android_share_pro'); ?>" name="<?php echo $this->get_field_name('android_share_pro'); ?>" value="<?php echo $instance['android_share_pro']; ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id('apple_share_pro'); ?>">Apple <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('apple_share_pro'); ?>" name="<?php echo $this->get_field_name('apple_share_pro'); ?>" value="<?php echo $instance['apple_share_pro']; ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id('linux_share_pro'); ?>">Linux <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('linux_share_pro'); ?>" name="<?php echo $this->get_field_name('linux_share_pro'); ?>" value="<?php echo $instance['linux_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('windows_share_pro'); ?>">Windows <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('windows_share_pro'); ?>" name="<?php echo $this->get_field_name('windows_share_pro'); ?>" value="<?php echo $instance['windows_share_pro']; ?>" />
		</p>
		
		
		<p>
			<label for="<?php echo $this->get_field_id('fb_share_pro'); ?>">Facebook <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('fb_share_pro'); ?>" name="<?php echo $this->get_field_name('fb_share_pro'); ?>" value="<?php echo $instance['fb_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('twttr_share_pro'); ?>">Twitter <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('twttr_share_pro'); ?>" name="<?php echo $this->get_field_name('twttr_share_pro'); ?>" value="<?php echo $instance['twttr_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('goog_share_pro'); ?>">Google+ <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('goog_share_pro'); ?>" name="<?php echo $this->get_field_name('goog_share_pro'); ?>" value="<?php echo $instance['goog_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('lnkedin_share_pro'); ?>">LinkedIn <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('lnkedin_share_pro'); ?>" name="<?php echo $this->get_field_name('lnkedin_share_pro'); ?>" value="<?php echo $instance['lnkedin_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('office_text'); ?>">Instagram <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('office_text'); ?>" name="<?php echo $this->get_field_name('office_text'); ?>" value="<?php echo $instance['office_text']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('cell_text'); ?>">Tumblr <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('cell_text'); ?>" name="<?php echo $this->get_field_name('cell_text'); ?>" value="<?php echo $instance['cell_text']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('pintrst_share_pro'); ?>">Pinterest <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('pintrst_share_pro'); ?>" name="<?php echo $this->get_field_name('pintrst_share_pro'); ?>" value="<?php echo $instance['pintrst_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('utube_share_pro'); ?>">Youtube <?php esc_html_e( 'Link', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('utube_share_pro'); ?>" name="<?php echo $this->get_field_name('utube_share_pro'); ?>" value="<?php echo $instance['utube_share_pro']; ?>" />
		</p>
		
		<p>
			<label for="<?php echo $this->get_field_id('link_link'); ?>"><?php esc_html_e( 'E-mail Address', 'quark-progression' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('link_link'); ?>" name="<?php echo $this->get_field_name('link_link'); ?>" value="<?php echo $instance['link_link']; ?>" />
		</p>
		
		
	<?php }
}
?>