<?php
/**
 * FooGallery Image Viewer gallery template
 * This is the template that is run when a FooGallery shortcode is rendered to the frontend
 */
//the current FooGallery that is currently being rendered to the frontend
global $current_foogallery;
//the current shortcode args
global $current_foogallery_arguments;
//get our thumbnail sizing args

//get which lightbox we want to use
$lightbox = foogallery_gallery_template_setting( 'lightbox', 'unknown' );
$alignment = foogallery_gallery_template_setting( 'alignment', 'fg-center' );
$text_prev = foogallery_gallery_template_setting( 'text-prev', __('Prev', 'foogallery') );
$text_of = foogallery_gallery_template_setting( 'text-of', __('of', 'foogallery') );
$text_next = foogallery_gallery_template_setting( 'text-next', __('Next', 'foogallery') );
$link = foogallery_gallery_template_setting( 'thumbnail_link', 'image' );
$foogallery_imageviewer_classes = foogallery_build_class_attribute_safe( $current_foogallery, 'foogallery-link-' . $link, 'foogallery-lightbox-' . $lightbox, $alignment );
$foogallery_imageviewer_attributes = foogallery_build_container_attributes_safe( $current_foogallery, array( 'class' => $foogallery_imageviewer_classes ) );
?><div <?php echo $foogallery_imageviewer_attributes; ?>>
	<div class="fiv-inner">
		<div class="fiv-inner-container">
			<?php foreach ( foogallery_current_gallery_attachments_for_rendering() as $attachment ) {
				echo foogallery_attachment_html( $attachment );
			} ?>
		</div>
		<div class="fiv-ctrls">
			<div class="fiv-prev"><span><?php echo $text_prev; ?></span></div>
			<label class="fiv-count"><span class="fiv-count-current">1</span><?php echo $text_of; ?><span class="fiv-count-total"><?php echo $current_foogallery->attachment_count(); ?></span></label>
			<div class="fiv-next"><span><?php echo $text_next; ?></span></div>
		</div>
	</div>
</div>