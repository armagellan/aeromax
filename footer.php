<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer>
			<div class="container container-footer">
				<div class="row">
				    <div class="col-lg-3 col-md-3 col-sm-6 footer-logo-center">
                                                 <a href="http://aeromax2014.com"><img id="footer-logo" src="/wp-content/uploads/2017/08/logo_white.png"></a>
						<!--<?php if( is_front_page() ) { ?>
						    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" 
							 title="Aeromax" alt="Aeromax" width="270" height="99">
					    <?php } else { ?>
					        <a href="http://aeromax2014.com">
					            <img id="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" 
							        title="Aeromax" alt="Aeromax" width="270" height="99">
					        </a>
					    <?php } ?>-->
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 ">
                                            <div class="footer-ul ">
						<h3>AEROMAX</h3>
						<ul>
	      			                    <li><a href="/o-nas/">O nas</a></li>
	      			                   <li><a href="/nashi-proekty/">Galeria</a></li>
                                                   <li><a  href="/uslugi-2/">Usługi</a></li>
                                                   <li><a href="/prizvoditeli/">Producenci</a></li>
	      			                   <li><a href="/kontakty/">Kontakt</a></li>
	      			                </ul>
                                            </div>
					</div>
                                         <div class="col-lg-2 hidden-md-down "></div>
					<div class="col-lg-3 col-md-3 col-sm-6 ">
                                             <div class="footer-ul ">
						<h3>ADRES</h3>
						<ul>
	      			                   <li>Polska</li>
	      			                   <li>Lublin, Str. W.Witosa 3</li>
	      			                   <li>aeromax2014@wp.pl</li>
	      			                </ul>
                                             </div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 ">
                                             <div class="footer-ul ">
						<h3>TELEFONY</h3>
						<ul>
	      			                   <li>‎+48 889 962 940</li>
	      			                   <li>‎+48 817 480 832</li>
                                                  
	      			               </ul>
                                             </div>
					</div>
				</div>
			</div>

			<div class="line-footer">
				<div class="container">
					<a id="site" 
					   href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">© <?php bloginfo( 'name' ); ?>, 2017
					</a>
					<div id="dev">Developed by <a href="http://arus.org.ua">ARUS</a></div>
				</div>
			</div>
				
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/sidebar-dropdown.js"></script>
    <script src='<?php echo get_template_directory_uri(); ?>/js/filter.js'></script>

</body>
</html>
