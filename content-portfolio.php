<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
 
        <div class="entry-meta">
            <?php erumasan_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->
    <div class="divider"></div>
    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'erumasan' ), 'after' => '</div>' ) ); ?>
    </div><!-- .entry-content -->
 
    <footer class="entry-meta">
        <?php echo get_the_term_list( $post->ID, 'feature', '<div class="arconix-portfolio-tax-list"><span class="arconix-portfolio-tax-title">Features: </span>', ', ', '</div>' ); ?>
        <?php edit_post_link( __( 'Edit', 'erumasan' ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->