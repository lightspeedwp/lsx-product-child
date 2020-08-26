<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lsx
 */

?>

			</div><!-- .content -->
		</div><!-- .wrap -->

		<?php lsx_footer_before(); ?>

		<footer id="colophon" class="content-info" role="contentinfo">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php lsx_footer_top(); ?>

						<p class="credit <?php if ( has_nav_menu( 'social' ) || has_nav_menu( 'footer' ) ) echo 'credit-float'; ?>">
							<?php
								printf(
									/* Translators: 1: current year, 2: blog name */
									esc_html__( '&#169; %1$s %2$s All Rights Reserved', 'lsx' ),
									esc_html( date_i18n( 'Y' ) ),
									esc_html( get_bloginfo( 'name' ) )
								);
								?>

							<?php if ( apply_filters( 'lsx_credit_link', true ) ) : ?>
								<?php
									printf(
										/* Translators: 1: theme name, 2: author name and link */
										esc_html__( ' | Developed by %2$s.', 'lsx' ),
										'LSX',
										'<a href="https://www.lsdev.biz/" rel="nofollow noreferrer noopener" title="LightSpeed WordPress Development - Unlocking the full value of your business, online" rel="author nofollow noopener noreferrer" >LightSpeed</a>'
									);
								?>
							<?php endif; ?>
						</p>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'social',
											'depth' => 1,
										)
									);
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'footer' ) ) : ?>
							<nav id="footer-navigation" class="footer-navigation">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'footer',
											'depth' => 1,
										)
									);
								?>
							</nav><!-- .footer-navigation -->
						<?php endif; ?>

						<?php lsx_footer_bottom(); ?>
					</div>
				</div>
			</div>
		</footer>
        <div class="footer-open-source">
        <h4>Open Source Commitment</h4>
        <p>LightSpeed's products are open-source and published under the GNU General Public Licence V3. To ensure the continuous improvement of our software we use the following awesome tools.</p>
        <div class="tools">
        <a href="https://github.com/lightspeeddevelopment" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Github.png" alt="Github" /></a>
        <a href="https://travis-ci.org/github/lightspeeddevelopment" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Travis.png" alt="Travis CI" /></a>
        <a href="https://www.browserstack.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Browserstack.png" alt="BrowerStack" /></a>
        </div>
        </div>

		<?php lsx_footer_after(); ?>
		<?php lsx_body_bottom(); ?>
		<?php wp_footer(); ?>
	</body>
</html>
