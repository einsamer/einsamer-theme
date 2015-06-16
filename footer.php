		<footer class = "footer" id="footer">
                <div class="copyright">
					© <?php echo date('D, d-M-Y'); ?> <?php bloginfo( 'sitename' ); ?>. <?php _e('All rights reserved', 'thachpham'); ?>. <?php _e('This website is proundly to use WordPress', 'thachpham'); ?>
                </div>
                <div class = "footer-sidebar">
                	<?php dynamic_sidebar( 'bottom-sidebar' );?>
                </div>
        </footer>
<?php wp_footer(); ?>
</div><!-- mainContainer -->
</body> <!--end body-->
</html> <!--end html -->


