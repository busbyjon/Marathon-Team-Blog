<?php get_header(); ?>
		<div class="span-1">&nbsp;</div>
		<?php $blogusers = get_users_of_blog();
		foreach ($blogusers as $usr):?>
		<?php 	$curauth = get_userdata(intval($usr->user_id));
		?>
		<div class="span-4">
			<div class="people">
				<?php 
			   echo get_avatar( $usr->user_id, 140, $default = '<path_to_url>' ); ?>

				<div class="people_content">
					<h1>
						<?php echo $curauth->first_name ?> <?php echo $curauth->last_name ?>
					</h1>
					<p>
						<?php echo $curauth->description ?>
					</p>
					<p>
						&nbsp;
					</p>
				</div>
				<a href="<?php echo $curauth->user_url ?>"><img src="<?php bloginfo('template_directory'); ?>/images/btn_donate.gif" width="65" height="25" /></a>
			</div>
		</div>
		<?php endforeach; ?>
				<div class="span-1 last">&nbsp;</div>
		<?php get_footer(); ?>
		