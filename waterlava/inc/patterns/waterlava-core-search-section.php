<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( 'Search Section', 'waterlava' ),
	'categories' => array( 'waterlava-core' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"wideSize":"","contentSize":""}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/nature-plant-leaf-flower-petal-glass-612874-pxhere.com_.webp","id":16,"dimRatio":70,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":"0.53","y":"0.85"},"contentPosition":"center center"} -->
<div class="wp-block-cover"><img class="wp-block-cover__image-background wp-image-16" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/nature-plant-leaf-flower-petal-glass-612874-pxhere.com_.webp" style="object-position:53% 85%" data-object-fit="cover" data-object-position="53% 85%"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"layout":{"wideSize":"1140px"}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query-title {"type":"search","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"48px"}},"textColor":"white","fontFamily":"eb-garamond"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
	'is_sync' => false,
);
