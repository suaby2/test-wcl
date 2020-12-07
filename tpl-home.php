<?php 
/*
* Template Name: Home Page
 */

get_header(); ?>
<div class="hero">
	<div class="hero__wrap">		
		<div class="parallax" style="background-image: url(<?php echo get_template_directory_uri(). '/assets/images/hero.png'; ?>);">
			<?php if(get_field('hero_heading')): ?>
				<h2><?php the_field('hero_heading'); ?></h2>
			<?php else: ?>
				<h2>Tax investigation insurance</h2>
			<?php endif; ?>
		</div>

	</div>
</div>
<?php if(have_rows('page_content')): ?>
	<?php while(have_rows('page_content')): the_row(); ?>
		<section class="tax-content">
			<div class="container">
				<div class="tax-content__wrap tax-content--border-bottom">
					<div class="row">
						<?php if(have_rows('description_column')): ?>
							<?php while(have_rows('description_column')): the_row(); ?>						
								<div class="col-9">
									<article class="tax-content__description">
										<header>
											<?php if(get_sub_field('heading')): ?>
												<h2><?php the_sub_field('heading'); ?></h2>
											<?php endif; ?>
										</header>
										
										<div class="description">
											<?php the_sub_field('description'); ?>
										</div>
									</article>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if(have_rows('description_column')): ?>
							<?php while(have_rows('description_column')): the_row(); ?>
								<div class="col-3">
									<aside class="tax-content__sidebar">
										<div class="box box--border-bottom">

											<img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card.png'; ?>" alt="">
										</div>
									</aside>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>						
					</div>
				</div>
			</div>			
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<section class="tax-content">
	<div class="container">
		<div class="tax-content__wrap ">
			<div class="row">
				<div class="col-9">
					<article class="tax-content__description">
						<header>
							<h2>Members tax investigation insurance</h2>
						</header>
						
						<div class="description">
							<p>Free tax investigation cover, should you need it HM Revenue & Customs (HMRC) routinely check a proportion of tax returns to make sure they are correct. They may also decide to conduct an extensive examination of all areas of your tax affairs including an in-depth review of your tax return records.</p>

							<p>These enquiries take time and money to resolve. Tax Investigation Insurance is designed to remove the burden should you be subject to an investigation. The policy indemnifies you for professional costs whilst you are being represented. Terms and conditions apply.</p>
						</div>
					</article>
				</div>
			</div>
		</div>
		<?php if(have_rows('member_section')): ?>
		<?php while(have_rows('member_section')): the_row(); ?>
			<article class="tax-content__member-box" >
				<div class="member-box" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/hero.png' ?>);">
					<div class="member-box__content" >
						<header>
							<h2><?php the_sub_field('heading'); ?></h2>
							<p><?php the_sub_field('short_description'); ?></p>
						</header>
						<?php if(get_sub_field('join_now_button_-_url') != ''): ?>
							<a href="<?php the_sub_field('join_now_button_-_url');?>" class="btn btn__join-now" target="_blank">Join now</a>
						<?php else: ?>
							<a href="#" class="btn btn__join-now">Join now</a>
						<?php endif; ?>
						<div class="member-box__login">Already a member? <a href="#">Log in</a></div>
					</div>
				</div>			
			</article>
		<?php endwhile; ?>
		<?php endif; ?>
		
	</div>			
</section>
<section class="popular-links">
	<div class="container">		
		<header>
			<h2>Popular links</h2>
		</header>
		<ul class="popular-links__items">
			<li class="item">
				<a href="#">
					<h3>Join Ukala <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png'; ?>" alt=""></h3>
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/icon-hand.png'; ?>" alt="">
					</figure>
				</a>
			</li>
			<li class="item">
				<a href="#">
					<h3>Search for a <br>UKALA agent <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png'; ?>" alt=""></h3>
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/icon-hand.png'; ?>" alt="">
					</figure>
				</a>
			</li>
			<li class="item">
				<a href="#">
					<h3>Join Ukala <img src="<?php echo get_template_directory_uri() . '/assets/images/right-arrow.png'; ?>" alt=""></h3>
					<figure>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/icon-hand.png'; ?>" alt="">
					</figure>
				</a>
			</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>