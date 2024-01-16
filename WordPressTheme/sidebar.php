<!-- blog-side-menu -->
<aside class="blog__side-menu blog-side-menu">
	<div class="blog-side-menu__inner">
		<!-- 人気記事セクション -->
		<div class="blog-side-menu__wrap blog-side-menu-popular">
			<h2 class="blog-side-menu-popular__title side-menu-title">人気記事</h2>
			<?php
			$popular_posts       = new WP_Query(array(
				'posts_per_page' => 3, // 表示したい記事の数
				'meta_key' 		 => 'post_views_count', // 閲覧数を保存しているメタキー
				'orderby' 		 => 'meta_value_num', // メタキーの数値で並び替え
				'order'			 => 'DESC' // 降順
			));

			if ($popular_posts->have_posts()) :
				while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
					<figure class="blog-side-menu-popular__link popular-link">
						<a href="<?php the_permalink(); ?>">
							<div class="popular-link__image">
								<?php if (has_post_thumbnail()) : ?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="121" height="90" loading="lazy" />
								<?php else : ?>
									<img class="noimage" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.webp" alt="noimage" width="121" height="90" loading="lazy" />
								<?php endif; ?>
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
			<h2 class="blog-side-menu-review__title side-menu-title">口コミ</h2>
			<?php
			$latest_reviews      = new WP_Query(array(
				'post_type' 	 => 'voice', // カスタム投稿タイプ
				'posts_per_page' => 1         // 投稿数を設定
			));

			if ($latest_reviews->have_posts()) :
				while ($latest_reviews->have_posts()) : $latest_reviews->the_post();
					$voiceCustomer = get_field('voice_customer');
			?>
					<figure class="blog-side-menu-review__image">
						<?php if (has_post_thumbnail()) : ?>
							<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="294" height="218" loading="lazy" />
						<?php endif; ?>
						<figcaption class="blog-side-menu-review__content">
							<?php if ($voiceCustomer) : ?>
								<p class="blog-side-menu-review__sub-head"><?php echo $voiceCustomer['voice_age']; ?>(<?php echo $voiceCustomer['voice_gender']; ?>)</p>
							<?php endif; ?>
							<p class="blog-side-menu-review__text"><?php the_title(); ?></p>
						</figcaption>
					</figure>
					<div class="blog-side-menu-review__button">
						<a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button">View more<span></span></a>
					</div>
			<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</div>

		<!-- blog-side-menu-campaign -->
		<div class="blog-side-menu__wrap blog-side-menu-campaign">
			<h2 class="blog-side-menu-campaign__title side-menu-title">キャンペーン</h2>
			<?php
			$latest_campaigns    = new WP_Query(array(
				'post_type'	     => 'campaign', // カスタム投稿タイプを指定
				'posts_per_page' => 2 			// 投稿数を設定
			));

			// クエリが投稿を持っている場合の処理
			if ($latest_campaigns->have_posts()) :
				// 投稿をループ処理で表示
				while ($latest_campaigns->have_posts()) : $latest_campaigns->the_post();
					// カスタムフィールドからキャンペーン価格情報を取得
					$campaignPrice = get_field('campaign_price_list');
			?>
					<figure class="blog-side-menu-campaign__card blog-side-menu-card">
						<div class="blog-side-menu-card__image">
							<?php if (has_post_thumbnail()) : ?>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="280" height="188" loading="lazy" />
							<?php endif; ?>
						</div>
						<figcaption class="blog-side-menu-card__body">
							<p class="blog-side-menu-card__title"><?php the_title(); ?></p>
							<?php if ($campaignPrice) : ?>
								<p class="blog-side-menu-card__text"><?php echo $campaignPrice['campaign_text']; ?></p>
								<div class="blog-side-menu-card__price-wrap">
									<div class="blog-side-menu-card__price-sub"><span><?php echo $campaignPrice['normal_price']; ?></span></div>
									<div class="blog-side-menu-card__price-main"><?php echo $campaignPrice['campaign_price']; ?></div>
								</div>
							<?php endif; ?>
						</figcaption>
					</figure>
			<?php endwhile;
				wp_reset_postdata();
			endif; ?>
			<div class="blog-side-menu-campaign__button">
				<a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="button">View more<span></span></a>
			</div>
		</div>


		<!-- blog-side-menu-archive -->
		<div class="blog-side-menu__wrap blog-side-menu-archive">
			<h2 class="blog-side-menu-archive__title side-menu-title">アーカイブ</h2>
			<ul class="blog-side-menu-archive__list">
				<?php
				// データベースから公開されている投稿の年を取得
				$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
				foreach ($years as $year) : ?>
					<li class="blog-side-menu-archive__list-item js-blog-side-menu-archive-list-item">
						<!-- 各年を表示 -->
						<div class="blog-side-menu-archive__year js-archive-accordion"><?php echo $year; ?></div>
						<ul class="blog-side-menu-archive__month-wrap js-blog-side-menu-archive-month-wrap">
							<?php
							// 選択した年の月を取得
							$months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '" . $year . "' ORDER BY post_date DESC");
							foreach ($months as $month) :
								// 月の名前を取得（例：January, February, ...）
								$month_name = date_i18n('F', mktime(0, 0, 0, $month));
							?>
								<li class="blog-side-menu-archive__month">
									<!-- 各月へのリンクを表示 -->
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