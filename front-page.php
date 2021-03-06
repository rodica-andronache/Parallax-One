<?php 

get_header(); 

?>
<?php
	include_once get_template_directory() . "/sections/parallax_one_header_section.php";
?>
	</div>
	<!-- /END COLOR OVER IMAGE -->
</header>
<!-- /END HOME / HEADER  -->

<div class="content-wrap">

<?php
	
	$sections_array = array('parallax_one_our_services_section','parallax_one_our_story_section','parallax_one_our_team_section','parallax_one_happy_customers_section','parallax_one_ribbon_section','parallax_one_latest_news_section','parallax_one_contact_info_section');
	
	if(!empty($sections_array)){
		foreach($sections_array as $section){
			include_once get_template_directory() . "/sections/". $section.".php";
		}
	}
?>

</div><!-- .content-wrap -->

<?php 

get_footer();

?>