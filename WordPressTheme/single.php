<?php get_header(); ?>

<main>
	<!-- sub-mv -->
	<section class="sub-mv">
		<div class="sub-mv__inner">
			<picture class="sub-mv__picture">
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
				<img src="<?php echo get_theme_file_uri(); ?><?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.webp" alt="海中を漂う熱帯魚" />
			</picture>
			<h1 class="sub-mv__title">blog</h1>
		</div>
	</section>

	<!-- breadcrumbs -->
	<div class="breadcrumbs layout-breadcrumbs">
		<div class="breadcrumbs__inner inner">
			<!-- Breadcrumb NavXT 7.1.0 -->
			<span>
				<a href="./"><span>TOP</span></a>
			</span>
			<span>
				<a href="blog.html"><span>ブログ一覧</span></a>
			</span>
			<span>
				<span>ブログ詳細</span>
			</span>
		</div>
	</div>

	<!-- blog-detail -->
	<section class="blog-detail layout-blog-detail">
		<div class="blog-detail__inner inner">
			<div class="blog-detail__wrap">
				<article class="blog-detail-main">
					<time class="blog-detail-main__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
					<h2 class="blog-detail-main__title"><?php the_title(); ?></h2>
					<div class="blog-detail-main__content">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php if (has_post_thumbnail()) : ?>
									<figure>
										<?php the_post_thumbnail('full', ['class' => 'blog-detail-main__image', 'alt' => get_the_title(), 'width' => '345', 'height' => '231']); ?>
									<?php else : ?>
										<img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="301" height="201" loading="lazy" />
										<figcaption><?php the_excerpt(); ?></figcaption>
									</figure>
								<?php endif; ?>
								<?php the_content(); ?>
						<?php endwhile;
						endif; ?>
					</div>
					<!-- pagenavi -->
					<div class="blog-detail-main__pagenavi pagenavi">
						<?php
						$prev_post = get_previous_post();
						$next_post = get_next_post();

						if (!empty($prev_post)) {
							$prev_post_url = get_permalink($prev_post->ID);
							echo '<a rel="prev" href="' . esc_url($prev_post_url) . '" aria-label="前のページへ"></a>';
						}

						if (!empty($next_post)) {
							$next_post_url = get_permalink($next_post->ID);
							echo '<a rel="next" href="' . esc_url($next_post_url) . '" aria-label="次のページへ"></a>';
						}
						?>
					</div>
				</article>

				<!-- blog-side-menu -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>