<style>
.date {font-size: 25px;font-weight: 700;}
.price {font-size: 45px;font-weight: 700;color: #d65050;float: left;margin-right: 20px;}
.tag {font-size: small; float: left;}
.featured-past img{width: 200px;height: 200px;margin-left: 0;border: 7px solid #fff;border-radius: 100%;text-align: center;vertical-align: middle;}
.featured-past {text-align: -webkit-center;margin-top: 5%;}
</style>


<div class="post hentry ivycat-post">
    <div class="col-sm-12 col-md-12" style="margin-bottom:100px;">
    <div class="col-sm-12 col-md-4" style="border-right: 1px solid #fff;"><?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb featured-past" style="">
			<?php the_post_thumbnail('sydney-large-thumb'); ?>
		</div>
	<?php endif; ?></div>
    
     <div class="col-sm-12 col-md-8" style="padding-left:50px;">
   
	<!-- This is the output of the post TITLE -->
	<h2 class="entry-title" style="margin-bottom: 0;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
    <!--Featured Image-->
    

    
    
	<!-- This is the output of the EXCERPT -->
	<div class="entry-summary" style="font-size: 18px;line-height: 1.5;float: left;">
		<?php the_excerpt(); ?>
	</div>

	<!-- This is the output of the META information -->
	<div class="entry-utility">
        
        <img src="wp-content/uploads/2016/09/pst-e1475272526648.png" style="float:left;width:450px;">
        
		 
	</div>
</div>
    </div>
</div>
