<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package underscores
 */

?>

<!---->
<div id="pagination">
    <?php previous_posts_link('Articles précédents'); ?>
    <?php next_posts_link('Articles suivants'); ?>
</div>
<!---->
<main id="main" class="site-main" role="main"><!--test-->


    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><!--pag d'articles pilar-->




        <header class="entry-header">
        <?php
            if ( is_single() ) :
                the_title( '<h1 class="entry-title">', ' &raquo;' , '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',  ' &raquo;' , '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php underscores_posted_on(); ?>
            </div><!-- .entry-meta -->
            <?php
            endif; ?>
        </header><!-- .entry-header -->



        <div class="entry-content">


<!--ATTENTION VERIFIAR CE CODE-->
                <!--<p><?php /*the_excerpt(); */?></p>
                <a href="<?php /*the_permalink();*/?>" class='more'> Lire la suite</a>
                <p><?php /*comments_popup_link('Aucun commentaire', '1 commentaire', '%commentaire'); */?></p>-->

            <!--ATTENTION VERIFIAR CE CODE-->
                <!--      cod_a moi pour afficher des images -->
            <?php if (has_post_thumbnail()) { ?>
                <p> <?php the_post_thumbnail('thumbnail');?></p>
            <?php } ?>

            <!--      cod_a moi  -->



            <?php
                the_content( sprintf(
                    /* translators: %s: Name of current post. */
                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'underscores' ), array( 'span' => array( 'class' => array() ) ) ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'underscores' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->


        <footer class="entry-footer">
            <?php underscores_entry_footer(); ?>
        </footer><!-- .entry-footer -->

        <hr>



    </article><!-- #post-## -->



</main><!-- #main pilar-->
