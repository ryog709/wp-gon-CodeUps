<!-- blog-side-menu -->
<aside class="blog__side-menu blog-side-menu">
	<div class="blog-side-menu__inner">
		<!-- 人気記事セクション -->
		<div class="blog-side-menu__wrap blog-side-menu-popular">
			<h3 class="blog-side-menu-popular__title side-">人気記事</h3>
			<?php
			$popular_posts = new WP_Query(array(
				'posts_per_page' => 3, // 表示したい記事の数
				'orderby' => 'comment_count', // コメント数で並び替え
				'order' => 'DESC' // 降順
			));

			if ($popular_posts->have_posts()) :
				while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
					<figure class="blog-side-menu-popular__link popular-link">
						<a href="<?php the_permalink(); ?>">
							<div class="popular-link__image">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail('thumbnail', array('class' => 'img-responsive', 'width' => '121', 'height' => '90'));
								} ?>
							</div>
							<div class="popular-link__content">
								<time class="popular-link__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
								<p class="popular-link__text"><?php the_title(); ?></p>
							</div>
						</a>
					</figure>
			<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</div>


		<!-- blog-side-menu-review -->
		<div class="blog-side-menu__wrap blog-side-menu-review">
			<h3 class="blog-side-menu-review__title">口コミ</h3>
			<figure class="blog-side-menu-review__image">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-side-menu01.webp" alt="30代(カップル)" width="294" height="218" loading="lazy" />
				<figcaption class="blog-side-menu-review__content">
					<p class="blog-side-menu-review__sub-head">30代(カップル)</p>
					<p class="blog-side-menu-review__text">ここにタイトルが入ります。ここにタイトル</p>
				</figcaption>
			</figure>
			<div class="blog-side-menu-review__button">
				<a href="voice.html" class="button">View more<span></span></a>
			</div>
		</div>

		<!-- blog-side-menu-campaign -->
		<div class="blog-side-menu__wrap blog-side-menu-campaign">
			<h3 class="blog-side-menu-campaign__title side-">キャンペーン</h3>
			<figure class="blog-side-menu-campaign__card campaign-card campaign-card--space">
				<div class="campaign-card__image">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-card01.webp" alt="熱帯魚の群れの写真" width="280" height="188" loading="lazy" />
				</div>
				<figcaption class="campaign-card__body campaign-card__body--space">
					<p class="campaign-card__title campaign-card__title-center">ライセンス取得</p>
					<p class="campaign-card__text campaign-card__text--space">全部コミコミ(お一人様)</p>
					<div class="campaign-card__price-wrap campaign-card__price-wrap--space">
						<div class="campaign-card__price-sub campaign-card__price-sub--small"><span>¥56,000</span></div>
						<div class="campaign-card__price-main campaign-card__price-main--small">¥46,000</div>
					</div>
				</figcaption>
			</figure>
			<figure class="blog-side-menu-campaign__card campaign-card campaign-card--space">
				<div class="campaign-card__image">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-card02.webp" alt="透き通った浅瀬の海と船の風景" width="280" height="188" loading="lazy" />
				</div>
				<figcaption class="campaign-card__body campaign-card__body--space">
					<p class="campaign-card__title campaign-card__title-center">貸切体験ダイビング</p>
					<p class="campaign-card__text campaign-card__text--space">全部コミコミ(お一人様)</p>
					<div class="campaign-card__price-wrap campaign-card__price-wrap--space">
						<div class="campaign-card__price-sub campaign-card__price-sub--small"><span>¥24,000</span></div>
						<div class="campaign-card__price-main campaign-card__price-main--small">¥18,000</div>
					</div>
				</figcaption>
			</figure>
			<div class="blog-side-menu-campaign__button">
				<a href="campaign.html" class="button">View more<span></span></a>
			</div>
		</div>

		<!-- blog-side-menu-archive -->
		<div class="blog-side-menu__wrap blog-side-menu-archive">
			<h3 class="blog-side-menu-archive__title side-">アーカイブ</h3>
			<ul class="blog-side-menu-archive__list">
				<?php
				$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
				foreach ($years as $year) : ?>
					<li class="blog-side-menu-archive__list-item js-blog-side-menu-archive-list-item">
						<div class="blog-side-menu-archive__year js-archive-accordion"><?php echo $year; ?></div>
						<ul class="blog-side-menu-archive__month-wrap js-blog-side-menu-archive-month-wrap">
							<?php
							$months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '" . $year . "' ORDER BY post_date DESC");
							foreach ($months as $month) :
								$month_name = date_i18n('F', mktime(0, 0, 0, $month));
							?>
								<li class="blog-side-menu-archive__month">
									<a href="<?php echo get_month_link($year, $month); ?>"><?php echo $month_name; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</aside>