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
				<li class="tag-list__item tag-item <?php if (!is_tax('voice_category')) echo 'is-color'; ?>">
					<a href="<?php echo get_post_type_archive_link('voice') ?>">ALL</a>
				</li>

				<?php $voice_terms = get_terms('voice_category', array('hide_empty' => false)); ?>
				<?php foreach ($voice_terms as $voice_term) : ?>
					<li class="tag-list__item tag-item <?php if (is_tax('voice_category', $voice_term->term_id)) echo 'is-color'; ?>">
						<a href="<?php echo get_term_link($voice_term, 'voice_category') ?>">
							<?php echo $voice_term->name; ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<!-- campaign-card-contents -->
	<section class="voice layout-voice">
		<div class="voice__inner inner">
			<ul class="voice__cards voice-cards">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li class="voice-cards__item voice-card">
							<div class="voice-card__container">
								<div class="voice-card__wrap">
									<div class="voice-card__content">
										<?php $voiceCustomer = get_field('voice_customer');
										if ($voiceCustomer) : ?>
											<p class="voice-card__customer"><?php echo $voiceCustomer['voice_age']; ?>(<?php echo $voiceCustomer['voice_gender']; ?>)</p>
										<?php endif; ?>
										<p class="voice-card__tag"><?php the_terms(get_the_ID(), 'voice_category'); ?></p>
									</div>
									<h3 class="voice-card__title"><?php the_title(); ?></h3>
								</div>
								<div class="voice-card__img colorbox js-colorbox">
									<?php if (has_post_thumbnail()) : ?>
										<img src="<?php echo the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" width="151" height="117" loading="lazy" />
									<?php endif; ?>
								</div>
							</div>
							<p class="voice-card__text"><?php the_field('voice_text'); ?></p>
						</li>
				<?php endwhile;
				endif; ?>
			</ul>
		</div>

		<!-- wp-pagenavi -->
		<div class="voice__wp-pagenavi wp-pagenavi">
			<?php wp_pagenavi(); ?>
		</div>
	</section>
	<?php get_footer(); ?>