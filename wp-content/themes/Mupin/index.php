<?php get_header(); ?>
  <div class="main-container">
    <div id="portada">
      <?php $query = new WP_Query( 'cat=10&showposts=1' ); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <article class="post">
        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div class="show-element1" style="background-image: url('<?php echo $thumb['0'];?>')">
          <a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
            <h1><?php the_title();?></h1>
          </a>
          <div class="post-meta">
          <div class="card-category"><?php echo get_the_category_list(); ?></div>
            <?php the_time('m/d/Y');  ?> | <p class="autor"><span>Escrito por: </span><?php the_author_posts_link() ?></p>
          </div>
          <?php the_excerpt('Leer más...');?>
          <?php wp_link_pages(); ?>
        </div>
      </article>

      <?php endwhile; 
      wp_reset_postdata();
      else : ?>
      <p><?php esc_html_e( 'Aún no hay post en esta categoría. Vuelve en unos días!' ); ?></p>
      <?php endif; ?>
    </div>
  
    <div class="container-fluid" id="infografia">
      <div class="row">
        <div class="col-lg-6 no-padding">
          <?php $query = new WP_Query( 'cat=2&showposts=1' ); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <article class="post">
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div class="container-box show-element1" style="background-image: url('<?php echo $thumb['0'];?>')">
              <div class="post-meta">
                <div class="card-category"><?php echo get_the_category_list(); ?></div>
                  <?php the_time('m/d/Y');  ?> | <p class="autor"><span>Escrito por: </span><?php the_author_posts_link() ?></p>
              </div>
              <p><strong><?php the_field('bajada'); ?></strong>
              <a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                <h1><?php the_title();?></h1>
              </a>
            </div>
          </article>
          <?php endwhile; 
          wp_reset_postdata();
          else : ?>
          <p><?php esc_html_e( 'Aún no hay post en esta categoría. Vuelve en unos días!' ); ?></p>
          <?php endif; ?>
        </div>

        <div class="col-lg-6 no-padding">
          <?php $query = new WP_Query( 'cat=7&showposts=1' ); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <article class="post">
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div class="container-box show-element2" style="background-image: url('<?php echo $thumb['0'];?>')">
              <h3 class="title">
                  <p><?php the_field('epigrafe'); ?></p>
                  <a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                    <h1><?php the_title();?></h1>
                  </a>
                  <p><?php the_field('bajada'); ?></p>
              </h3>
              <div class="post-meta">
                <div class="card-category"><?php echo get_the_category_list(); ?></div>
                <?php the_time('m/d/Y');  ?> | <p class="autor"><span>Escrito por: </span><?php the_author_posts_link() ?></p>
              </div>
              <?php the_excerpt('Leer más...');?>
              <?php wp_link_pages(); ?>
            </div>
          </article>

          <?php endwhile; 
          wp_reset_postdata();
          else : ?>
          <p><?php esc_html_e( 'Aún no hay post en esta categoría. Vuelve en unos días!' ); ?></p>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <div class="container-fluid" id="memoriaviva">
      <div class="row">
          <?php $query = new WP_Query( 'showposts=3' ); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-lg-4 no-padding">
            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
            <div class="content-post" style="background-image: url('<?php echo $thumb['0'];?>')">
                  <a class="card-title_md" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">  
                    <h1><?php the_title();?></h1>
                  </a>
                  <p><strong><?php the_field('bajada'); ?></strong></p>
                  <div class="card-category"><?php echo get_the_category_list(); ?></div>
                  <?php the_time('m/d/Y');  ?> | <p class="autor"><span>Escrito por: </span><?php the_author_posts_link() ?></p>
            </div>
          </div>
          <?php endwhile; 
          wp_reset_postdata();
          else : ?>
          <p><?php esc_html_e( 'Aún no hay post en esta categoría. Vuelve en unos días!' ); ?></p>
          <?php endif; ?>
      </div>
    </div>
  </div> 

<?php get_footer(); ?>