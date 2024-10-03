<div class="social">
	<?php if ( $tiktok = get_field( 'tiktok', 'options' ) ) : ?>
		<a href="<?php echo esc_html( $tiktok ); ?>" title="TikTok" target="_blank" rel="noopener noreferrer nofollow" class="img contain">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tiktok.svg" alt="Tiktok icon" width="19" height="23" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/tiktok-dark.svg" alt="Tiktok icon" width="19" height="23" loading="lazy">
		</a>
	<?php endif; ?>

	<?php if ( $facebook = get_field( 'facebook', 'options' ) ) : ?>
		<a href="<?php echo esc_html( $facebook ); ?>" title="Facebook" target="_blank" rel="noopener noreferrer nofollow" class="img contain">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt="Facebook icon" width="13" height="23" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/fb-dark.svg" alt="Facebook icon" width="13" height="23" loading="lazy">
		</a>	
	<?php endif; ?>

	<?php if ( $instagram = get_field( 'instagram', 'options' ) ) : ?>
		<a href="<?php echo esc_html( $instagram ); ?>" title="Instagram" target="_blank" rel="noopener noreferrer nofollow" class="img contain">
			<img src="<?php echo get_template_directory_uri(); ?>/img/instagram.svg" alt="Facebook icon" width="23" height="23" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/instagram-dark.svg" alt="Instagram icon" width="23" height="23" loading="lazy">
		</a>
	<?php endif; ?>

	<?php if ( $youtube = get_field( 'youtube', 'options' ) ) : ?>
		<a href="<?php echo esc_html( $youtube ); ?>" title="Youtube" target="_blank" rel="noopener noreferrer nofollow" class="img contain">
			<img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt="Youtube icon" width="30" height="21" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/youtube-dark.svg" alt="Youtube icon" width="30" height="21" loading="lazy">
		</a>	
	<?php endif; ?>
</div>