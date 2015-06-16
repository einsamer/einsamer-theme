<?php
/*
 * define const: THEME_URL and CORE
 * path for functions
 */
define ("THEME_URL", get_stylesheet_directory());
define ("CORE", THEME_URL . "/core");

/*
 * embed /core/init
 */

require_once CORE . '/init.php';


/*
 * set width
 */

if ( !isset($content_width) ) {
	$content_width = 620;
}

/*
 * theme functionalities
 */

if ( !function_exists('main_theme_setup')) {
	function main_theme_setup () {
		
		//textdomain setting
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain('Einsamer', $language_folder);
		
		// automatically generate RSS
		add_theme_support ('automatic-feed-links');
		
		//add post_thumbnails functionality
		add_theme_support ('post-thumbnails');
		
		//add post-formating functionality
		$_formatArr = array('image', 'video',
							'gallery', 'quote',
							'link'	);
		add_theme_support( 'post-formats', $_formatArr);
		
		// add title-tag
		add_theme_support( 'title-tag', 'main_theme_setup' );
		
		//customize background-color;
		$bgColor = array(
				'default-color'=>"#0f0f0f"
		);
		
		add_theme_support ("custom-background", $bgColor);
		
		//menu
		register_nav_menu ( 'primary-menu', __('Primary Menu', 'Einsamer') );
		register_nav_menu ( 'secondary-menu', __('Secondary Menu', 'Einsamer') );
		
		
		//sidebar modify
		
		$sidebar = array (
				'name' => __('Main Sidebar', 'Einsamer'),
				'id' => 'main-sidebar',
				'description' => __('Default Sidebar', 'Einsamer'),
		);
		
		register_sidebar ( $sidebar );
		
		/*($bottom_sidebar = array (
				'name' => __('Bottom Sidebar', 'Einsamer'),
				'id' => 'bottom-sidebar',
				'description' => __('Bottom Sidebar', 'Einsamer'),
				'class' => 'bottom-sidebar',
				'before_title' => '<h3 class = "widgettitle"> ',
				'after-title' => '</h3>'				
		);
		
		register_sidebar ( $bottom_sidebar );*/
		
	}
		
	add_action ( 'init', 'main_theme_setup');
}



/*
 * load header
 */

 	if ( !function_exists("load_main_header")) {
 		function load_main_header() {
 			?>
 			<div class = "site-name">
					<?php 
							?>
							<h1>
								<img alt="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png">
								<p class = "logoText">NEWS PAGE</p>
								<div class = "clear"></div>
							</h1>
				</div>
 			<?php 
 			
 		}
 	}

 	
 	
 	/*
 	 * menu configuration
 	 */
 	
 	if ( !function_exists("setMenu")) {
 		
 		function setMenu($menu, $menuClass = "nav nav-tabs") {
 			$list = array(
 					'theme_location' => $menu,
 					'container' => 'nav',
 					'container_class' => $menu,
 					'menu_class'=> $menuClass
 			);
 			
 			wp_nav_menu( $list );
 			
 			
 		}
 		
 	}

 	
 	
 	/**
 	 @ Tạo hàm phân trang cho index, archive.
 	 @ Hàm này sẽ hiển thị liên kết phân trang theo dạng chữ: Newer Posts & Older Posts
 	 @ thachpham_pagination()
 	 **/
 	if ( ! function_exists( 'theme_pagination' ) ) {
 		function theme_pagination() {
 			/*
 			 * Không hiển thị phân trang nếu trang đó có ít hơn 2 trang
 			 */
 			if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
 				return '';
 			}
 			?>
 	 
 	  <nav class="pagination" role="navigation">
 	    <?php if ( get_next_post_link() ) : ?>
 	      <div class="prev"><?php next_posts_link( __('Older Posts', 'thachpham') ); ?></div>
 	    <?php endif; ?>
 	 
 	    <?php if ( get_previous_post_link() ) : ?>
 	      <div class="next"><?php previous_posts_link( __('Newer Posts', 'thachpham') ); ?></div>
 	    <?php endif; ?>
 	 
 	  </nav><?php
 	  }
 	}
 					
	if ( ! function_exists('getLatestPost')) {
		
		function getLatestPost($num){
			
			$args = array(
					'numberposts' => $num,
					'offset' => 0,
					'category' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'suppress_filters' => true );
			
					$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
					echo count($recent_posts);
		}
	}		
 					
 					
 	if ( !function_exists('doShortFormatPost') ) {
 		function doShortFormatPost( $content , $len=50, $id ) {
 			
 			
 			$content = strip_tags($content);
 			

 			
 			if (strlen($content) < $len ) {
 				$content.= "...";
 			} else {
 				$content = substr($content, 0, $len)."...";
 			}
 			
 			$link = post_permalink($id);
 			
 			$content .= "<a href = '{$link}' >Read more</a>";
 			//echo ">>".$id."<<";
 			return $content;
 		}
 		
 	}			
 					
 	if ( !function_exists('doInsertNoImage')) {
 		function doInsertNoImage() {
 			?>
 			<div><img src = '<?php echo esc_url( get_template_directory_uri() ); ?>/noimage.jpg' />
 			</div>
 			<?php 
 			
 		}
 		
 	}	

 	if ( !function_exists('showImage')) {
 		function showImage() {
 			echo "<div>";
 			the_post_thumbnail();
 			echo "</div>";
 	 			
 	 		}
 	 		
 	 	}	
 	 	
 	 	if ( !function_exists('formatTitle')) {
 	 		function formatTitle($title) {
				
 	 			$title = "<h3>".$title."</h3>";
 	 			return $title;
 	 		}
 	 		 
 	 	}
 					
 					
 					
 					
 					
 					
?>

