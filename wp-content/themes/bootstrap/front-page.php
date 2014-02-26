<?php get_header(); ?>



<div class="container">


<div class="row page-content">
	<div class="span12">
		<h1 class="logo">Siri og Jarl-Håvard gifter seg</h1>
	</div>
</div>
	     
	   <?php   $pages = get_pages(array( 'sort_column' => 'menu_order', 'sort_order' => 'asc' )); 
		foreach ($pages as $page_data) {
			?>

			<div id="<?php echo $page_data->post_name; ?>-content" class="page-content <?php echo $page_data->post_name; ?>-content" data-stellar-background-ratio='0.5' data='<?php echo $page_data->post_name; ?>'>
			 
 			

			 <?php

		    $content = apply_filters('the_content', $page_data->post_content); 
		    $title = $page_data->post_title; 
		     echo "<h2>" . $title . "</h2>";
		    echo $content; 

		    echo "</div>";

	    
		   echo "<div class='container-stellar' id='";  echo $page_data->post_name;  echo "-stellar' data-stellar-background-ratio='0.5' ></div>";


		    
		}

?>

	        </div>


        
        <?php get_footer(); ?>