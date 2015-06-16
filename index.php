<?php get_header(); ?>

	<div class = "row main-content">
		<div class = "col-xs-3">
			<div class = "tabs-wrapper">
				<ul class = "nav nav-tabs"> 
					<?php dynamic_sidebar('main-sidebar');?>
				</ul>
			</div>
		</div>
		<div class = "col-xs-7">
			<?php 
			
				while ( have_posts()) {
					the_post();
					?>
					<div class = "col-xs-6">
						<div class = "panel panel-success post-container">
							<div class = "panel-heading">
								<h3 class = "panel-title">
									<?php 
										$id = get_the_ID();
										echo doShortFormatPost(get_the_title(),15, $id);
									?>
								</h3>
							</div>
							<div class = "panel-body">
								<p>
								<?php 
									echo doShortFormatPost(get_the_content(), 250, $id);
									//echo get_the_content();
									
								?>
								</p>
							</div>
						</div>
					</div>
					<?php 
				}
			?>
		</div>
		
		<div class = "col-xs-2">
			right content
		</div>
	</div>
<?php get_footer(); ?>
