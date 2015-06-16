<?php get_header(); ?>

<div class = "postFullContent">
<?php 
while ( have_posts() ){

	the_post(); // Kiểm tra loop xem bài đã được loop chưa, nếu rồi thì bỏ qua và loop bài kế
	echo formatTitle(get_the_title()); //Hiển thị tiêu đề của post, sử dụng get_the_title() để return giá trị của nó.
	the_content();
	//echo doShortFormatPost(get_the_content());
	?>
	<?php 
}
?>
<div class = "clear"></div>
</div>
<?php get_footer(); ?>