<?php get_header(); ?>
<main>
	<!-- sub-mv -->
	<section class="sub-mv">
		<div class="sub-mv__inner">
			<picture class="sub-mv__picture">
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-pc.webp" media="(min-width: 768px)" type="image/webp" />
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv-sp.webp" alt="海中を漂う熱帯魚" />
			</picture>
			<h1 class="sub-mv__title">campaign</h1>
		</div>
	</section>

	<!-- breadcrumbs -->
	<?php get_template_part('parts/breadcrumbs') ?>

	<!-- tag -->
	<div class="tag layout-tag">
		<div class="tag__inner inner">
			<ul class="tag__list tag-list">
				<li class="tag-list__item tag-item <?php if (!is_tax('campaign_category')) echo 'is-color'; ?>">
					<a href="<?php echo get_post_type_archive_link('campaign') ?>">ALL</a>
				</li>
				<!-- キャンペーンカテゴリーのターム（項目）を取得 -->
				<?php $campaign_terms = get_terms('campaign_category', array('hide_empty' => false)); ?>
				<!-- 取得した各タームに対して繰り返し処理 -->
				<?php foreach ($campaign_terms as $campaign_term) : ?>
					<!-- タームごとのリストアイテム -->
					<li class="tag-list__item tag-item <?php if (is_tax('campaign_category', $campaign_term->term_id)) echo 'is-color'; ?>">
						<!-- タームに対応するリンク -->
						<a href="<?php echo get_term_link($campaign_term, 'campaign_category') ?>">
							<!-- ターム名の表示 -->
							<?php echo $campaign_term->name; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<!-- campaign-card-contents -->
	<section class="campaign-card-contents layout-campaign-card-contents">
		<div class="campaign-card-contents__inner">
			<ul class="campaign-card-contents__list campaign-card-list">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li class="campaign-card-list__item campaign-card">
							<figure class="campaign-card__image">
								<?php if (has_post_thumbnail()) : ?>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="280" height="188" loading="lazy" />
								<?php endif; ?>
							</figure>
							<div class="campaign-card__body-wrap">
								<div class="campaign-card__body campaign-card__body--small-space">
									<!-- キャンペーンカテゴリを表示 -->
									<p class="campaign-card__tag">
										<span><?php the_terms(get_the_ID(), 'campaign_category'); ?></span>
									</p>
									<!-- キャンペーンのタイトルを表示 -->
									<h2 class="campaign-card__title campaign-card__title--large"><?php the_title(); ?></h2>

									<!-- カスタムフィールド 'campaign_price_list' のデータを取得 -->
									<?php $campaignPrice = get_field('campaign_price_list');
									if ($campaignPrice) : ?>
										<!-- キャンペーン価格のテキストを表示 -->
										<p class="campaign-card__text campaign-card__text--large-space">
											<?php echo $campaignPrice['campaign_text']; ?>
										</p>
										<!-- 価格情報を表示 -->
										<div class="campaign-card__price-wrap">
											<div class="campaign-card__price-sub">
												<span><?php echo $campaignPrice['normal_price']; ?></span>
											</div>
											<div class="campaign-card__price-main campaign-card__price-main--large-space">
												<?php echo $campaignPrice['campaign_price']; ?>
											</div>
										</div>
									<?php endif; ?>

									<!-- カスタムフィールド 'campaign_description' のデータを取得 -->
									<?php $campaignDescription = get_field('campaign_description');
									if ($campaignDescription) : ?>
										<!-- キャンペーンの説明を表示 -->
										<p class="campaign-card__content u-desktop">
											<?php echo $campaignDescription['campaign_content']; ?>
										</p>
								</div>
								<div class="campaign-card__guide u-desktop">

									<!-- キャンペーンの期間を表示 -->
									<?php $campaignTime = $campaignDescription['campaign_time'];
										if ($campaignTime) : ?>
										<p class="campaign-card__date">
											<?php echo $campaignTime['campaign_start_time']; ?>-<?php echo $campaignTime['campaign_end_time']; ?>
										</p>
									<?php endif; ?>
									<!-- 問い合わせを表示 -->
									<p class="campaign-card__reserved">
										<?php the_field('campaign_info'); ?>
									</p>
								<?php endif; ?>
								<!-- コンタクトリンクを表示 -->
								<div class="campaign-card__button">
									<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button">Contact us<span></span></a>
								</div>
								</div>
							</div>
						</li>
				<?php endwhile;
				endif; ?>
			</ul>

			<!-- wp-pagenavi -->
			<div class="campaign-card-contents__wp-pagenavi wp-pagenavi">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>