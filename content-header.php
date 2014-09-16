<?php if(!is_front_page() && has_post_thumbnail()) :

    $thumb_id = get_post_thumbnail_id();	
	
    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
    $url= $thumb_url[0];
    
    if(strstr($url, 'default.png')) : 
    	$url = get_bloginfo('stylesheet_directory') . '/imgs/default.jpg';
    endif; 

    if(is_home('')) : $url=get_bloginfo('stylesheet_directory') . '/imgs/company-news.jpg'; endif;

?>
<div class="section" id="headerFeaturedImage" style="background-image: url(<?php echo $url; ?>); background-size: cover; background-repeat: no-repeat; ">
     <a id="startContent">  </a> 
</div>
<?php elseif(is_single()) : 

    $thumb_id = get_post_thumbnail_id('16');	
	
    $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
    $url= $thumb_url[0];
    
    if(strstr($url, 'default.png')) : 
    	$url = get_bloginfo('stylesheet_directory') . '/imgs/default.jpg';
    endif; 

    if(is_home('')) : $url=get_bloginfo('stylesheet_directory') . '/imgs/company-news.jpg'; endif;

?>
<div class="section" id="headerFeaturedImage" style="background-image: url(<?php echo $url; ?>); background-size: cover; background-repeat: no-repeat; ">
     <a id="startContent">  </a> 
</div>

<?php endif; ?>


