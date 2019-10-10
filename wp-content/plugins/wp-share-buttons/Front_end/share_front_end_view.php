<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function front_end_share_buttons($social_buttons, $param_values, $rowsposts, $shareifrows, $haveshortcode)
{
ob_start();
	if(!(get_post_type( get_the_ID()) == 'page' || get_post_type( get_the_ID()) == 'post'))
		return;
	if(isset($rowsposts) && count($rowsposts) > 0){
	$size=$rowsposts[0]->share_size;
	}
	else
	{
	$size=$param_values['huge_it_share_size'];
	}
	if(!function_exists('url_origin')) {
		function url_origin( $s, $use_forwarded_host = false )
		{
			$ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
			$sp       = strtolower( $s['SERVER_PROTOCOL'] );
			$protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
			$port     = $s['SERVER_PORT'];
			$port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
			$host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
			$host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
			return $protocol . '://' . $host;
		}
	}
	if(!function_exists('full_url')) {

		function full_url( $s, $use_forwarded_host = false )
		{
			return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
		}
	}

	$linkthispage = full_url( $_SERVER );

	if(!(get_post_type( get_the_ID()) == 'page' || get_post_type( get_the_ID()) == 'post'))
		return;
	if(count($rowsposts) > 0 && !empty($rowsposts)){
		$size = $rowsposts[0]->share_size;
	}
	else
	{
		$size = $param_values['huge_it_share_size'];
	}
	$linkthispage = full_url( $_SERVER );	$path_site = plugins_url("/../images", __FILE__);
	$share_active = true;
	if(!empty($rowsposts)) {
		if($rowsposts[0]->share_active == 'off') $share_active = false;
	}
	if (($share_active == true) || ($share_active == false &&  $haveshortcode == "on")){
	$id = get_the_ID();
?>
							<style>
							<?php 								
								$style = $param_values['share_button_icons_style'];		
	
								if(empty($rowsposts)) {	
									$position = explode('-',$param_values['huge_it_share_button_position_post']);
								}
								else {
									$rowsposts = json_decode(json_encode($rowsposts),true);
									$position = explode('-',$rowsposts[0]['share_position']);
									//print_r($rowsposts); die;	
								}
							?>
							.huge-it-share-buttons {
								border:<?php echo $param_values['share_button_block_border_size']; ?>px solid #<?php echo $param_values['share_button_block_border_color']; ?>;
								border-radius:<?php echo $param_values['share_button_block_border_radius']; ?>px;
								
								
								<?php if($position[0]=="left"){?> text-align:left; <?php }?>
								<?php if($position[0]=="right"){?> text-align:right; <?php }?>
								<?php if($position[0]=="center"){?> text-align:center; <?php }?>
							}
							
							#huge-it-share-buttons-top {margin-bottom:<?php echo $param_values['share_button_margin_from_content']; ?>px;}
							#huge-it-share-buttons-bottom {margin-top:<?php echo $param_values['share_button_margin_from_content']; ?>px;}
							
							.huge-it-share-buttons h3 {
								font-size:<?php echo $param_values['share_button_title_font_size'];?>px ;
								font-family:<?php echo $param_values['share_button_title_font_style_family']; ?>;
								color:#<?php echo $param_values['share_button_title_color'];?>;
								
								<?php
									if($param_values['share_button_title_position'] == 'left'){ echo 'float:left;';} 
									else if($param_values['share_button_title_position'] == 'right'){ echo 'float:right;';}
									else {echo 'display:block;';}
								?>
								line-height:<?php echo $param_values['share_button_title_font_size'];?>px ;
								
								<?php if($position[0]=="left"){?> text-align:left; <?php }?>
								<?php if($position[0]=="right"){?> text-align:right; <?php }?>
								<?php if($position[0]=="center"){?> text-align:center; <?php }?>
							}
							
							
							.huge-it-share-buttons ul {	
								<?php if($position[0]=="left"){?> float:left; <?php }?>
								<?php if($position[0]=="right"){?> float:right; <?php }?>
								<?php if($position[0]=="center"){?> margin:0px auto !important;text-align:center; <?php }?>
							}
							
							.huge-it-share-buttons ul li {
								margin-left:<?php echo $param_values['share_button_margin_between_buttons']; ?>px !important;
								margin-right:<?php echo $param_values['share_button_margin_between_buttons']; ?>px !important;
								padding:<?php echo $param_values['share_button_buttons_background_padding']; ?>px;
								border:<?php echo $param_values['share_button_buttons_border_size']; ?>px <?php echo $param_values['share_button_buttons_border_style']; ?> #<?php echo $param_values['share_button_buttons_border_color']; ?>;
								border-radius:<?php echo $param_values['share_button_buttons_border_radius']; ?>px;
								background-color:#<?php echo $param_values['share_button_buttons_background_color']; ?>;
								width:auto !important;
							}
							
							.huge-it-share-buttons ul li #backforunical<?php echo $id; ?> {
							    border-bottom: 0;	
								background-image:url('<?php echo $path_site;?>/buttons.<?php echo $size;?>.png');
								width:<?php echo $size;?>px;
								height:<?php echo $size;?>px;
							}
						</style>
						<?php if(isset($post)) { if (has_post_thumbnail( $post->ID ) ){ ?>
						<?php $pintimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<?php } 
						}else { 
						$pintimage[0] = $path_site.'/noimage.png';
						}
												?>
						<div id="huge-it-share-buttons-top" class="huge-it-share-buttons <?php if($param_values['share_button_block_has_background'] != 'on'){echo 'nobackground'; } ?>">
							<h3><?php echo $param_values['share_button_title_text']; ?></h3>
							<ul class="huge-it-share-buttons-list">		
								
								<?php
								$k=1;$i = 0;
								foreach($social_buttons as $keys=>$socials){
								$k++;
								?>
									<li class="<?php if($socials!='on'){echo 'none';} ?> <?php if($param_values['share_button_buttons_has_background'] != 'on'){echo 'nobackground'; } ?>" >
									
										<?php
											$str=get_the_title();
											switch($keys){
											case 'share_facebook_button':
												$link='https://www.facebook.com/sharer/sharer.php?m2w&u='.$linkthispage;
												break;
											case 'share_twitter_button':
												$link= 'https://twitter.com/share?status='.$linkthispage.'&text='.$str;
												break;
											case 'share_google_plus_button':
												$link= 'https://plus.google.com/share?url='.$linkthispage;
												break;
											case 'share_linkedin_button':
												$link= 'https://www.linkedin.com/shareArticle?title='.$str.'&mini=true&url='.$linkthispage;
												break;
											case 'share_pinterest_button':
												$link= 'http://www.pinterest.com/pin/create/button/?url='.$linkthispage.'&media='.$pintimage[0].'&description='.$str.'';
												break;
											case 'share_tumblr_button':
												$link= 'https://www.tumblr.com/share/link?url='.$linkthispage.'&name='.$str;
												break;
											case 'share_digg_button':
												$link= 'http://digg.com/submit?phase=2&url='.$linkthispage.'&title='.$str;
												break;
											case 'share_stumbleupon_button':
												$link= 'http://www.stumbleupon.com/submit?url='.$linkthispage.'&title='.$str;
												break;
											case 'share_myspace_button':
												$link= 'https://myspace.com/post?l=3&u='.$linkthispage;
												break;
											case 'share_vkontakte_button':
												$link= 'http://vk.com/share.php?url='.$linkthispage.'&title='.$str;
												break;
											case 'share_reddit_button':
												$link= 'http://www.reddit.com/submit?url='.$linkthispage.'&title='.$str;
												break;
											case 'share_bebo_button':
												$link= 'http://www.bebo.com/c/share?Url='.$linkthispage;
												break;
											case 'share_delicious_button':
												$link= 'https://delicious.com/save?v=5&noui&jump=close&url='.$linkthispage.'&title='.$str;
												break;
											case 'share_odnoklassniki_button':
												$link= 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=2&st.noresize=on&st._surl='.$linkthispage;
												break;
											case 'share_qzone_button':
												$link= 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url='.$linkthispage.'&title='.$str;
												break;
											case 'share_sina_weibo_button':
												$link= 'http://service.weibo.com/share/share.php?url='.$linkthispage.'&appkey=&title='.$str.'&pic=&ralateUid=&';
												break;
											case 'share_renren_button':
												$link= 'https://www.facebook.com/sharer/sharer.php?u='.$linkthispage;
												$link= 'http://widget.renren.com/dialog/share?resourceUrl='.$linkthispage.'&srcUrl='.$linkthispage.'&title='.$str;
												break;
											case 'share_n4g_button':
												$link= 'http://n4g.com/tips?url='.$linkthispage.'&title='.$str;
												break;
											}

											?>
											<a id="backforunical<?php echo $id; ?>" href="<?php echo $link;?>"  onclick="javascript:void window.open('<?php echo $link; ?>','1410949501326','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;" style="background-position: -<?php echo $size*$i; ?>px -<?php echo $size*$style;?>px "></a>
									</li>
								<?php  $i++; } ?>
							</ul>
						
							<div class="clear"></div>
						</div>

	<?php
	}

return ob_get_clean();
}
