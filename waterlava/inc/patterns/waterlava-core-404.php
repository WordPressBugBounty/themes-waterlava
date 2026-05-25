<?php
/**
 * Pattern content.
 */
return array(
	'title'      => __( '404', 'waterlava' ),
	'categories' => array( 'waterlava-core' ),
	'content'    => '<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"80px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"wideSize":"","contentSize":""}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-bottom:80px"><!-- wp:cover {"url":"' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/nature-plant-leaf-flower-petal-glass-612874-pxhere.com_.webp","id":202,"dimRatio":80,"overlayColor":"black","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.54},"contentPosition":"center center","style":{"spacing":{"padding":{"right":"20px","left":"20px"}}}} -->
<div class="wp-block-cover" style="padding-right:20px;padding-left:20px"><img class="wp-block-cover__image-background wp-image-202" alt="" src="' . esc_url( trailingslashit( get_template_directory_uri() ) ) . 'assets/img/nature-plant-leaf-flower-petal-glass-612874-pxhere.com_.webp" style="object-position:50% 54%" data-object-fit="cover" data-object-position="50% 54%"/><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"260px","bottom":"260px"}}},"layout":{"wideSize":"1140px"}} -->
<main class="wp-block-group" style="padding-top:260px;padding-bottom:260px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"10px"}},"typography":{"fontSize":"48px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:10px;font-size:48px">Page Not Found</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"fontFamily":"mulish"} -->
<p class="has-text-align-center has-mulish-font-family" style="font-size:14px">It looks like nothing was found at this location. Maybe try a search?</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search...","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"gv-color-secondary","textColor":"white","fontFamily":"mulish","borderColor":"fifth"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></main>
<!-- /wp:group -->',
	'is_sync' => false,
);
