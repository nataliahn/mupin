<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	
	<div class="single-page">
		<div class="box-header">
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
			<div class="img-bg" style="background-image: url('<?php echo $thumb['0'];?>')"></div>
			<div class="mask-layer">
				<div class="main-container">
					<div class="categoria"><?php echo get_the_category_list(); ?></div>
					<p><?php the_field('epigrafe'); ?></p>
					<h1 class="title"><?php the_title(); ?></h1>
					<p class="bajada"><?php the_field('bajada'); ?></p>
					<div class="metadatos">
						<p class="fecha"><?php the_time('m/d/Y'); ?> |</p>
						<p class="autor"><span>Escrito por: </span><?php the_author(); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="box-content">
			<div class="main-container">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</div>
		</div>
		</div>
		<div class="box-footer">
			<div class="main-container">
				<div class="tags">
					<ul><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?></ul>
				</div>
				<?php endwhile; ?>
				<?php else : ?>
					<article class="error">
						<h5 class="404">Nothing has been posted like that yet</h1>
					</article>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
