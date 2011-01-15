<div id='right-content' class="span-5 last">
	<div class="blog_right">
		<h2>
			Recent Posts
		</h2>
		
				<ul>
					<?php wp_get_archives( 'type=postbypost&limit=5' ); ?>
				</ul>

	</div>
	<div class="blog_right">
		<h2>
			Archive
		</h2>
		<ul>
			<?php wp_get_archives( 'type=monthly' ); ?>
		</ul>
	</div>
	<div class="blog_right">
		<h2>
			People
		</h2>
		<ul>
			<?php wp_list_authors('exclude_admin=0&hide_empty=0&show_fullname=1&optioncount=1&orderby=post_count&order=DESC&number=3' ); ?>
		</ul>
	</div>
</div>