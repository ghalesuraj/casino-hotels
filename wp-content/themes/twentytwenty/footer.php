<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
	$hero_lg = get_field('hero_logo');
?>
			<footer class="footer">

			    <div class="footer-top">
			      <div class="container">
			        <div class="row">
			          <div class="footer-brand"><img class="hero-lg" alt="" src="<?php echo $hero_lg; ?>" /></div>
			          
			          <nav class="nav navbar-expand-md">
			            

			              <div class="navbar" id="navbarNav">
			                <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			              </div>
			            
			          </nav>

			        </div>
			      </div>
			    </div>

			    <div class="container py-4">
			      <div class="brand">
			        <img src="http://localhost/casino-hotels/wp-content/uploads/2023/05/footer-brand.png" />
			      </div>
			      <p class="copyright">&copy; 2022 Top 10 Casinos Worldwide. All rights reserved.</p>
			    </div>
			  </div>
		  </footer><!-- End Footer --><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
