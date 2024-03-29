<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
	directory so your changes won't be overwritten when the plugin is upgraded. -->

<!-- Start of Post Wrap -->
<div class="post hentry ivycat-post">
    
    <div class="col-sm-12 col-md-4"><?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<?php the_post_thumbnail('sydney-large-thumb'); ?>
		</div>
	<?php endif; ?></div>
    
     <div class="col-sm-12 col-md-8">
   
	<!-- This is the output of the post TITLE -->
	<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
    <!--Featured Image-->
    

    
    
	<!-- This is the output of the EXCERPT -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<!-- This is the output of the META information -->
	<div class="entry-utility">
        
        <a href="<?php the_permalink(); ?>"><img src="wp-content/uploads/2016/09/pst.png"></a>
        
		<!--<?php if ( count( get_the_category() ) ) : ?>
			<span class="cat-links">
				<?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
			</span>
			<span class="meta-sep">|</span>
		<?php endif; ?>
		<?php
			$tags_list = get_the_tag_list( '', ', ' );
			if ( $tags_list ):
		?>
			<span class="tag-links">
				<?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
			</span>
			<span class="meta-sep">|</span>
		<?php endif; ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>-->
	</div>
</div>
</div>
<!-- // End of Post Wrap -->
