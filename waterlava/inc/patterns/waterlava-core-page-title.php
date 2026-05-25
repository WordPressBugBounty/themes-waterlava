<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Page Title', 'waterlava' ),
	'categories' => array( 'waterlava-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/StockSnap_5A5JLDXM4R.webp","id":183,"dimRatio":80,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":"0.48","y":"0.51"},"minHeight":430,"minHeightUnit":"px","contentPosition":"center center"} -->
<div class="wp-block-cover" style="min-height:430px"><img class="wp-block-cover__image-background wp-image-183" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/StockSnap_5A5JLDXM4R.webp" style="object-position:48% 51%" data-object-fit="cover" data-object-position="48% 51%"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"wideSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontSize":"48px"}},"textColor":"white","fontFamily":"eb-garamond"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
