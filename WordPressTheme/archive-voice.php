<?php get_header(); ?>
<main>
	<!-- sub-mv -->
	<section class="sub-mv">
		<div class="sub-mv__inner">
			<picture class="sub-mv__picture">
				<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-pc.webp" media="(min-width: 768px)" type="image/webp" />
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sp.webp" alt="ダイビングをしている様子" />
			</picture>
			<h1 class="sub-mv__title">voice</h1>
		</div>
	</section>
	<!-- breadcrumbs -->
	<?php get_template_part('parts/breadcrumbs') ?>

	<!-- tag -->
	<div class="tag layout-tag">
		<div class="tag__inner inner">
			<ul class="tag__list tag-list">
				<li class="tag-list__item tag-item is-color"><a href="">ALL</a></li>
				<li class="tag-list__item tag-item"><a href="">ライセンス講習</a></li>
				<li class="tag-list__item tag-item"><a href="">ファンダイビング</a></li>
				<li class="tag-list__item tag-item"><a href="">体験ダイビング</a></li>
			</ul>
		</div>
	</div>

	<!-- campaign-card-contents -->
	<section class="voice layout-voice">
		<div class="voice__inner inner">
			<ul class="voice__cards voice-cards">
				<?php if (have_posts()) :while (have_posts()) : the_post();?>
						<li class="voice-cards__item voice-card">
							<div class="voice-card__container">
								<div class="voice-card__wrap">
									<div class="voice-card__content">
										<p class="voice-card__customer">20代(女性)</p>
										<p class="voice-card__tag">ライセンス講習</p>
									</div>
									<h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
								</div>
								<div class="voice-card__img colorbox js-colorbox">
									<img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-card01.webp" alt="20代(女性)" width="151" height="117" loading="lazy" />
								</div>
							</div>
							<p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。</p>
						</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>

		<!-- wp-pagenavi -->
		<div class="voice__wp-pagenavi wp-pagenavi">
			<?php wp_pagenavi(); ?>
		</div>
	</section>
	<?php get_footer(); ?>