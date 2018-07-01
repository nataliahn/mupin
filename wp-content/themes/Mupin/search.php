<?php
get_header();
global $wp_query;
?>
<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">
      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
      
        <h1 class="search-title">
          <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
        </h1>
        <?php get_search_form( true ); ?>

        <?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>
                
                
               <li>
                
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                Publicado el <?php the_time('d/m/Y'); ?> en <?php the_category('&');?>
                 por <?php the_author_posts_link() ?>

                 <?php  the_post_thumbnail('medium') ?>
                 <?php echo substr(get_the_excerpt(), 0,500); ?>
                 
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>">Leer más</a></div>
               </li>

            <?php } ?>

            </ul>

           <?php echo paginate_links(); ?>

        <?php } ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>