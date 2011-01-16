

<?php if (!is_single()):?>
<div id='main-content' class="span-16 colborder">
	<div class="main_content">
		<?php while ( have_posts() ) : the_post(); ?>
		<img src="<?php bloginfo('template_directory'); ?>/images/blog1.gif" width="505" height="230" />
		<h1>
			<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
		</h1>
		<p>
			<?php the_excerpt(); ?>
		</p>
		<p>
			&nbsp;
		</p>
		<div>
			<div style="float:left">
				<h1>
					<a class='read-more' href='<?php the_permalink(); ?>'>more... </a>
				</h1>
			</div>
			<div style="float:right">
				<a href='<?php the_author_meta('user_url'); ?> '><img src="<?php bloginfo('template_directory'); ?>/images/btn_donate.gif" width="65" height="25" /></a>
			</div>
			<div style="clear:both"></div>
		</div>
		<hr />
		<?php endwhile; ?>
	</div>
</div>
<?php else:?>
	<div id='main-content' class="span-16 colborder">
		<div class="main_content">
			<?php while ( have_posts() ) : the_post(); ?>
			<img src="<?php bloginfo('template_directory'); ?>/images/blog1.gif" width="505" height="230" />
			<h1>
				<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
			</h1>
			<p>
				<?php the_content(); ?>
			</p>
			<p>
				&nbsp;
			</p>

			<hr />
			<?php endwhile; ?>
		</div>
	</div>	

<?php endif; ?>