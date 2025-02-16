<?php if(isset($_GET['search_property'])){
 $ppp = rem_get_option('properties_per_page', -1);   ?>
	<div class="ich-settings-main-wrap rem-search-results-wrap">
    <div class="row">
		<?php
        $args = rem_get_search_query($_REQUEST);
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
        $args['paged'] = $paged;
		$property_query = new WP_Query( $args );
        $layout_style = rem_get_option('search_results_style', '1');
        $layout_style = apply_filters( 'rem_search_results_box_style', $layout_style, get_the_id() );
        $layout_cols = rem_get_option('search_results_cols', 'col-sm-12');
        $target = rem_get_option('searched_properties_target', '');    
			if( $property_query->have_posts() ){
        while( $property_query->have_posts() ){ $property_query->the_post();
		 		?>
            <div id="property-<?php echo get_the_id(); ?>" class="<?php echo esc_attr($layout_cols); ?>">
                <?php do_action('rem_property_box', get_the_id(), $layout_style, $target); ?>
            </div>
        <?php

		 	}
			wp_reset_postdata();
      echo '<div class="clearfix"></div>';
      do_action( 'rem_pagination', $paged, $property_query->max_num_pages );
	} else { ?>
  <div class="clearfix"></div>
    <div class="col-md-12">
        <div class="alert with-icon alert-info" role="alert">
            <p style="margin-top: 12px;margin-left: 10px;">
            <i class="icon fa fa-info"></i> <?php $msg = rem_get_option('no_results_msg', 'Sorry! No Properties Found. Try Searching Again.'); echo apply_filters( 'no_results_msg',  stripcslashes($msg)); ?></p>
        </div>
    </div>
	<?php } ?>
  </div>
	</div>
<?php } else { echo apply_filters('the_content', $content); } ?>