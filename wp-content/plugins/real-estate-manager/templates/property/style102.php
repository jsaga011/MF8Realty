<div class="landz-box-property box-home propery-style-2">
    <?php do_action( 'rem_property_ribbon', $property_id ); ?>
	<a target="<?php echo esc_attr($target); ?>" class="hover-effect image image-fill" href="<?php echo get_permalink($property_id); ?>">
		<span class="cover"></span>
		<?php do_action( 'rem_property_picture', $property_id ); ?>
		<h3 class="title"><?php echo get_the_title($property_id); ?></h3>
	</a>
	<span class="price">
		<?php if (get_post_meta( $property_id, 'rem_property_price', true ) != '') { ?>
			<?php echo rem_display_property_sale_price($property_id); ?>
		<?php } ?>
	</span>
	<span class="address"><i class="fa fa-map-marker-alt"></i> <?php echo esc_attr($address); ?></span>
	
	<?php do_action( 'rem_property_details_icons', $property_id ); ?>

	<div class="footer">
		<div class="footer-buttons">
            <?php 
                do_action('rem_listing_footer', $property_id, $style , $target);
             ?>
        </div>
	</div>
</div>