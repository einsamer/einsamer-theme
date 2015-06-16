

<?php 
	if ( is_active_sidebar('main-sidebar') ) {
		?>
		<div class = "sidebarContainer" role="complementary">
			<div class = "widget-area">
				<?php
					dynamic_sidebar('main-sidebar');
				?>
			</div>
		</div>
		<?php 
		
	} else {
		echo "that is what?";
	}
?>



