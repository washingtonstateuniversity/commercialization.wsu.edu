<footer class="site-footer">

	<header>
		<span class="site-footer-sup-header"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></span>
		<span class="site-footer-sub-header"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
	</header>

	<div>

		<nav class="site-footer-nav">
			<?php
			$spine_site_args = array(
				'theme_location' => 'footer',
				'container' => false,
				'container_class' => false,
				'container_id' => false,
				'fallback_cb' => false,
				'menu_class' => null,
				'menu_id' => null,
				'items_wrap' => '<ul>%3$s</ul>',
				'depth' => 1,
			);

			wp_nav_menu( $spine_site_args );
			?>
		</nav>

		<div class="site-footer-social">

			<?php $social_channels = spine_social_options(); ?>

			<?php if ( isset( $social_channels['facebook'] ) ) { ?>
			<a href="<?php echo esc_url( $social_channels['facebook'] ); ?>">
				<svg class="social-icon" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
					<title>Facebook icon</title>
					<g id="facebook" stroke="none" stroke-width="1">
						<path d="M0 15C0 6.716 6.716 0 15 0c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15zm16.063 8.32v-8.161h2.253l.299-2.812h-2.552l.004-1.408c0-.733.07-1.126 1.123-1.126H18.6V7h-2.253c-2.707 0-3.66 1.364-3.66 3.658v1.689H11v2.812h1.687v8.16h3.376z"/>
					</g>
				</svg>
			</a>
			<?php } ?>

			<?php if ( isset( $social_channels['youtube'] ) ) { ?>
			<a href="<?php echo esc_url( $social_channels['youtube'] ); ?>">
				<svg class="social-icon" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
					<title>YouTube icon</title>
					<g id="youtube" stroke="none" stroke-width="1">
						<path d="M0 15C0 6.716 6.615 0 14.775 0s14.776 6.716 14.776 15c0 8.284-6.615 15-14.776 15C6.615 30 0 23.284 0 15zm22.466-3.02s-.154-1.126-.626-1.622c-.599-.652-1.27-.655-1.577-.692-2.202-.166-5.505-.166-5.505-.166h-.007s-3.304 0-5.506.166c-.308.037-.978.04-1.577.692-.472.496-.625 1.623-.625 1.623s-.158 1.323-.158 2.646v1.24c0 1.324.158 2.647.158 2.647s.153 1.126.625 1.622c.599.652 1.385.632 1.735.7 1.26.125 5.351.164 5.351.164s3.307-.005 5.51-.17c.307-.039.977-.042 1.576-.694.472-.496.626-1.622.626-1.622s.157-1.323.157-2.647v-1.24c0-1.323-.157-2.646-.157-2.646z"/>
						<path d="M13.13 17.37l-.001-4.593 4.252 2.305z"/>
					</g>
				</svg>
			</a>
			<?php } ?>

			<?php if ( isset( $social_channels['twitter'] ) ) { ?>
			<a href="<?php echo esc_url( $social_channels['twitter'] ); ?>">
				<svg class="social-icon" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
					<g id="twitter" stroke="none" stroke-width="1">
						<title>Twitter icon</title>
						<path d="M0 15C0 6.716 6.716 0 15 0c8.284 0 15 6.716 15 15 0 8.284-6.716 15-15 15-8.284 0-15-6.716-15-15zm14.55-2.808l.032.52-.524-.064c-1.91-.244-3.578-1.07-4.995-2.458l-.692-.688-.179.508c-.377 1.134-.136 2.33.651 3.136.42.444.325.508-.399.243-.252-.085-.472-.148-.493-.116-.073.074.179 1.038.378 1.419.273.53.829 1.049 1.437 1.356l.514.243-.608.011c-.588 0-.609.01-.546.233.21.689 1.039 1.42 1.962 1.737l.65.223-.566.339a5.907 5.907 0 0 1-2.812.784c-.472.01-.86.053-.86.084 0 .106 1.28.7 2.025.932 2.235.689 4.89.392 6.883-.783 1.416-.837 2.833-2.5 3.494-4.11.357-.858.713-2.426.713-3.178 0-.487.032-.55.62-1.133.346-.34.67-.71.734-.816.105-.201.094-.201-.44-.021-.893.317-1.019.275-.578-.202.325-.339.713-.953.713-1.133 0-.032-.157.021-.335.117-.19.106-.609.264-.924.36l-.566.18-.514-.35c-.284-.19-.682-.402-.892-.466-.535-.148-1.354-.127-1.836.043-1.312.476-2.14 1.705-2.046 3.05z"/>
					</g>
				</svg>
			</a>
			<?php } ?>

		</div>

	</div>

</footer>
