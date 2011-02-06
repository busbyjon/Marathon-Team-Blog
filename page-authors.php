<?php get_header(); ?>

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
					</p><a href="<?php echo $curauth->user_url ?>"><img src="<?php bloginfo('template_directory'); ?>/images/btn_donate.gif" width="65" height="25" /></a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		

		<?php get_footer(); ?>
		