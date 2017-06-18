<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post() ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				
				
				</header><!-- .entry-header -->
                    
				<div class="entry-content">
					<?php the_content(); ?>
					<div class="fundo_xis" img src="http://localhost:8888/wordpress/wp-content/uploads/2017/06/fundo_xis.png" alt="logotipo">
           
            <div class="ola">
               <h1>Olá.<br> O meu nome é Pedro Vilela e sou Designer de Comunicação.</h1>
                   <div class="info_bio">
                       <h2>
                       <span class="bar_text">\</span>Residente na Póvoa de Varzim.
                       <span class="bar_text">\</span>Lincenciado em Design de Comunicação em 2006.
                       <span class="bar_text">\</span>Webdesigner.
                       <span class="bar_text">\</span>Designer Gráfico.
                       </h2>
                   </div>
            </div>
        </div>
            <div class="maps">
       <div class="overlay" onClick="style.pointerEvents='none'"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2986.512025014604!2d-8.630106585007317!3d41.53650967925078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2453cb20c42a05%3A0xf840740c7c32e88!2sInstituto+Polit%C3%A9cnico+do+C%C3%A1vado+e+do+Ave!5e0!3m2!1spt-PT!2spt!4v1483139796533" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contact_form">
            <form action="action_page.php">
    <label for="fname"><h5_2>First Name</h5_2></label>
    <input type="text" id="fname" name="firstname">

    <label for="lname"> <h5_2>Last Name</h5_2></label>
    <input type="text" id="lname" name="lastname">
  
    <input type="Submit" value="Send">
  </form>
        </div>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
