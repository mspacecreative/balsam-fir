<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="balsam-footer">
				<div class="footer-inner">
					<?php if( get_field('company_address', 'options') ): ?>
						<p>
							<?php the_field('company_address', 'options'); ?><br />
							<?php if( get_field('company_phone_number', 'options') ):
							echo _e('T: '); the_field('company_phone_number', 'options'); ?><br />
							<?php endif; ?>
							<?php if( get_field('company_fax_number', 'options') ):
							echo _e('F: '); the_field('company_fax_number', 'options'); ?>
							<?php endif; ?>
						</p>
					<?php endif; ?>
					<?php 
					$email = get_field('company_email_address', 'options');
					if( $email ) { ?>
					<p><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
					<?php } ?>
				</div>
				<div class="tree-icon-container">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tree-icon-transparent.png" class="tree-icon" />
					<h4>Born &amp; Raised in Nova Scotia</h4>
				</div>
			</footer>
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
</html>