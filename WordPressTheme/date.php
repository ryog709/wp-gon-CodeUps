<?php get_header(); ?>
<main>
	<!-- sub-mv -->
	<section class="sub-mv">
		<div class="sub-mv__inner">
			<picture class="sub-mv__picture">
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.webp" alt="海中を漂う熱帯魚" />
			</picture>
			<h1 class="sub-mv__title">blog</h1>
		</div>
	</section>

	<!-- breadcrumbs -->
	<?php get_template_part('parts/breadcrumbs') ?>

	<!-- blogセクション -->
	<section class="blog layout-blog">
		<div class="blog__inner inner">
			<div class="blog__menu-wrap blog-wrap">
				<article class="blog__main-menu blog-main-menu">
					<ul class="blog-main-menu__list blog-cards blog-cards--column">
						<?php
						// URLから年と月を取得
						$year = get_query_var('year'); // 現在の年を取得
						$monthnum = get_query_var('monthnum'); // 現在の月を取得
						// WP_Queryに渡す引数を設定
						$args = array(
							'post_type'      => 'post', // 投稿タイプを'post'に指定
							'posts_per_page' => 10,     // 1ページあたりの投稿数を10に指定
							'year'           => $year,  // 取得した年を指定
							'monthnum'       => $monthnum, // 取得した月を指定
						);
						// 新しいWP_Queryを作成し、結果を$the_queryに格納
						$the_query = new WP_Query($args);

						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
							<li class="blog-main-menu__list-card blog-card">
								<a href="<?php the_permalink(); ?>">
									<figure class="blog-card__img">
										<?php if (has_post_thumbnail()) : ?>
											<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="301" height="201" loading="lazy" />
										<?php else : ?>
											<img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="301" height="201" loading="lazy" />
										<?php endif; ?>
										<figcaption class="blog-card__body">
											<time class="blog-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
											<p class="blog-card__title"><?php the_title(); ?></p>
											<p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 80, '…'); ?></p>
										</figcaption>
									</figure>
								</a>
							</li>
						<?php
							endwhile;
						else :
							echo '<p>該当する投稿がありません。</p>';
						endif;
						wp_reset_postdata();
						?>
					</ul>

					<!-- wp-pagenavi -->
					<div class="blog__wp-pagenavi wp-pagenavi">
						<?php wp_pagenavi(); ?>
					</div>
				</article>

				<!-- サイドバー -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>