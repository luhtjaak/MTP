<!-- PhotoBlocks for WordPress v<?php 
echo  PHOTOBLOCKS_V . " " . PHOTOBLOCKS_PLAN ;
?> -->
<style>
    #photoblocks-<?php 
echo  $data['id'] ;
?> {<?php 
echo  $this->css( $data['id'], 'width', 'width' ) ;
?>}
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block {<?php 
echo  $this->css(
    $data['id'],
    'border-width',
    'border_size',
    'px'
) ;
echo  $this->css( $data['id'], 'border-color', 'border_color' ) ;
?>}
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-title {<?php 
echo  $this->css( $data['id'], 'color', 'caption_title_color' ) ;
echo  $this->css(
    $data['id'],
    'font-size',
    'caption_title_size',
    'px'
) ;
echo  $this->css( $data['id'], 'font-family', 'caption_title_font' ) ;
?>}
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-description {<?php 
echo  $this->css( $data['id'], 'color', 'caption_description_color' ) ;
echo  $this->css(
    $data['id'],
    'font-size',
    'caption_description_size',
    'px'
) ;
echo  $this->css( $data['id'], 'font-family', 'caption_description_font' ) ;
?>}
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block.pb-type-text .pb-overlay {<?php 
echo  $this->css( $data['id'], 'background-color', 'block_text_background_color' ) ;
?>}
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block.pb-type-text .pb-title,
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block.pb-type-text .pb-description {<?php 
echo  $this->css( $data['id'], 'color', 'block_text_color' ) ;
?>} 
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block.pb-type-text .pb-title {<?php 
echo  $this->css(
    $data['id'],
    'font-size',
    'block_text_title_size',
    'px'
) ;
?>}
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block.pb-type-text .pb-description {<?php 
echo  $this->css(
    $data['id'],
    'font-size',
    'block_text_description_size',
    'px'
) ;
?>}
    <?php 

if ( $gallery["caption_effect"] == "sticky" ) {
    ?>
    #photoblocks-<?php 
    echo  $data['id'] ;
    ?> .pb-overlay { background: transparent; }
    #photoblocks-<?php 
    echo  $data['id'] ;
    ?>.pb-effect-sticky .pb-block.pb-type-image .pb-overlay .pb-caption-bottom {<?php 
    echo  $this->css( $data['id'], 'background', 'caption_background_color' ) ;
    ?>}
    <?php 
} else {
    ?>
    #photoblocks-<?php 
    echo  $data['id'] ;
    ?> .pb-overlay {<?php 
    echo  $this->css( $data['id'], 'background', 'caption_background_color' ) ;
    ?>}    
    <?php 
}

?>    
    #photoblocks-<?php 
echo  $data['id'] ;
?>.pb-lift.show-empty-overlay .pb-block.pb-type-image:hover,
    #photoblocks-<?php 
echo  $data['id'] ;
?>.pb-lift .pb-block.pb-type-image.with-text:hover {
        box-shadow: <?php 
echo  $this->settings->get( $this->values[$data['id']], "caption_background_color" ) ;
?> 0 0 20px;
    }    
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block {
        <?php 
echo  $this->css(
    $data['id'],
    'border-radius',
    'border_radius',
    'px'
) ;
?>
        <?php 
echo  $this->css( $data['id'], 'background-color', 'block_background_color' ) ;
?>
    }
    #photoblocks-<?php 
echo  $data['id'] ;
?> .pb-block .pb-social button {<?php 
echo  $this->css( $data['id'], 'color', 'caption_title_color' ) ;
echo  $this->css(
    $data['id'],
    'font-size',
    'social_icon_size',
    'px'
) ;
?>}
    <?php 
?>
    <?php 
echo  $this->settings->get( $this->values[$data['id']], "custom_css" ) ;
?>    
</style>
<div class="photoblocks-gallery <?php 
echo  $this->hover_options_classes( $data['id'] ) ;
?> <?php 
echo  $this->css_classes( $data['id'] ) ;
?> pb-effect-<?php 
echo  $this->caption_effect( $data['id'] ) ;
?>" data-anim="<?php 
echo  $this->loading_effect( $data['id'] ) ;
?>" id="photoblocks-<?php 
echo  $data['id'] ;
?>">
    <?php 
?>
    <div class="pb-blocks">
        <?php 
foreach ( $blocks as $block ) {
    ?>
            <?php 
    if ( $block->type == "empty" ) {
        continue;
    }
    ?>
        <div class="pb-block
            <?php 
    echo  ( $block->has_captions() ? "with-text" : "" ) ;
    ?>
            <?php 
    echo  ( $block->has_any_social() ? "with-social" : "" ) ;
    ?>
            <?php 
    echo  ( $block->has_captions_or_social() ? "with-social-or-text" : "" ) ;
    ?>  
            pb-type-<?php 
    echo  $block->type ;
    ?>
            <?php 
    echo  ( $block->type == "post" ? "pb-type-image" : "" ) ;
    ?>
            "
            style="<?php 
    echo  $block->style() ;
    ?>"
            <?php 
    ?> 
                data-colspan="<?php 
    echo  $block->colspan() ;
    ?>" 
                data-rowspan="<?php 
    echo  $block->rowspan() ;
    ?>" 
                data-col="<?php 
    echo  $block->col() ;
    ?>" 
                data-row="<?php 
    echo  $block->row() ;
    ?>" 
                <?php 
    
    if ( $block->type == "image" || $block->type == "post" ) {
        ?>
                data-valign="<?php 
        echo  $block->valign() ;
        ?>" 
                data-halign="<?php 
        echo  $block->halign() ;
        ?>" 
                <?php 
    }
    
    ?>
                data-type="<?php 
    echo  $block->type ;
    ?>"
                data-ratio="<?php 
    echo  $block->ratio() ;
    ?>">
            
            <?php 
    
    if ( $block->type == "image" || $block->type == "post" ) {
        ?>
                <img 
                    class="pb-image skip-lazy <?php 
        echo  $block->get_image_class() ;
        ?>" 
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==" 
                    data-pb-source="<?php 
        echo  $block->get_image_url() ;
        ?>" 
                    alt="<?php 
        echo  $block->get_alt() ;
        ?>">
                <noscript><img src="<?php 
        echo  $block->image->url ;
        ?>" alt="<?php 
        echo  $block->get_alt() ;
        ?>"></noscript>
            <?php 
    }
    
    ?>
            <?php 
    
    if ( $block->has_link_or_lightbox() ) {
        ?>
                <a class="pb-link <?php 
        echo  $block->mfp_iframe_class() ;
        ?> 
                <?php 
        echo  $block->get_link_class() ;
        ?>" 
                <?php 
        echo  $block->get_lightbox_attrs() ;
        ?> 
                data-caption="<?php 
        echo  $block->get_lightbox_caption() ;
        ?>" 
                rel="<?php 
        echo  $block->click->rel ;
        ?>" 
                <?php 
        
        if ( $block->has_link_or_lightbox() ) {
            ?>
                    target="<?php 
            echo  $block->click->target ;
            ?>"
                <?php 
        }
        
        ?> 
                    href="<?php 
        echo  $block->get_link() ;
        ?>">
            <?php 
    }
    
    ?>
                <?php 
    
    if ( $block->has_captions() || $block->show_empty_overlay() ) {
        ?>
                <div class="pb-overlay" style="<?php 
        
        if ( $block->has_custom_overlay() ) {
            ?>background-color: <?php 
            echo  $block->get_overlay_bg() ;
        }
        
        ?>">
                    <?php 
        foreach ( array( 'top', 'middle', 'bottom' ) as $position ) {
            ?>
                        <?php 
            
            if ( $block->has_captions_or_social( $position ) ) {
                ?>
                        <div class="pb-caption-<?php 
                echo  $position ;
                ?>">
                            <?php 
                
                if ( $block->has_title( $position ) ) {
                    ?>
                            <span class="pb-title pb-caption-<?php 
                    echo  $block->caption_position( 'title', 'h' ) ;
                    ?>" style="<?php 
                    echo  $block->custom_styles( 'title' ) ;
                    ?>"><?php 
                    echo  $block->caption->title->text ;
                    ?></span>
                            <?php 
                }
                
                ?>
                            <?php 
                
                if ( $block->has_description( $position ) ) {
                    ?>
                            <span class="pb-description pb-caption-<?php 
                    echo  $block->caption_position( 'description', 'h' ) ;
                    ?>" style="<?php 
                    echo  $block->custom_styles( 'description' ) ;
                    ?>"><?php 
                    echo  $block->caption->description->text ;
                    ?></span>
                            <?php 
                }
                
                ?>
                            <?php 
                
                if ( ($block->type == "image" || $block->type == "post") && $block->has_any_social_here( $position ) ) {
                    ?>
                            <span class="pb-social pb-social-<?php 
                    echo  $gallery['social_position_h'] ;
                    ?>">
                                <?php 
                    foreach ( $block->list_social() as $item ) {
                        ?>
                                <button data-social="<?php 
                        echo  $item ;
                        ?>"><i class="pb-icon-<?php 
                        echo  $item ;
                        ?>"></i></button>
                                <?php 
                    }
                    ?>
                            </span>
                            <?php 
                }
                
                ?>
                        </div>
                        <?php 
            }
            
            ?>
                    <?php 
        }
        ?>
                </div>
            <?php 
    }
    
    ?>
            <?php 
    if ( $block->has_link_or_lightbox() ) {
        ?></a><?php 
    }
    ?>            
        </div>
        <?php 
}
?>
    </div>
</div>
<div id="photoblocks-fancybox-<?php 
echo  $data['id'] ;
?>"></div>
<script>
<?php 

if ( $this->fonts_to_load( $data['id'] ) ) {
    ?>
  (function () {
    var head = document.head;
    var link = document.createElement("link");

    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = "<?php 
    echo  $this->fonts_to_load( $data['id'] ) ;
    ?>";

    head.appendChild(link);
  })();
<?php 
}

?>
jQuery(function () {
	var p = new PhotoBlocks({
        selector: "#photoblocks-<?php 
echo  $data['id'] ;
?>",
        columns: <?php 
echo  $gallery['columns'] ;
?>,
        padding: <?php 
echo  $gallery['padding'] ;
?>,
        resizer: "<?php 
echo  $this->resizer_url( $data['id'] ) ;
?>",
        image_quality: <?php 
echo  $this->settings->get( $this->values[$data['id']], "image_quality" ) ;
?>,
        disable_below: <?php 
echo  $gallery['disable_below'] ;
?>,
        imageFactor: <?php 
echo  $this->settings->get( $this->values[$data['id']], "image_factor" ) ;
?>,
        on: {
            before: function () { <?php 
echo  $gallery['custom_event_before'] ;
?> },
            after: function () { <?php 
echo  $gallery['custom_event_after'] ;
?> },
            refresh: function () { <?php 
echo  $gallery['custom_event_refresh'] ;
?> }
        },
		debug: <?php 
echo  ( isset( $_GET["debug"] ) && $_GET["debug"] == "1" ? "true" : "false" ) ;
?>
    });
    <?php 

if ( $this->lightbox( $data['id'] ) == 'fancybox' ) {
    ?>
    jQuery("#photoblocks-<?php 
    echo  $data['id'] ;
    ?> [data-fancybox]").fancybox({
        <?php 
    if ( $gallery['fancybox_thumbnails'] == "1" ) {
        ?>
        thumbs : {
            autoStart : true,   
            hideOnClose : false     
        },
        <?php 
    }
    ?>
        loop: <?php 
    echo  $this->show_toggle( $data['id'], 'fancybox_loop' ) ;
    ?>,
        keyboard: <?php 
    echo  $this->show_toggle( $data['id'], 'fancybox_keyboard' ) ;
    ?>,
        arrows: <?php 
    echo  $this->show_toggle( $data['id'], 'fancybox_arrows' ) ;
    ?>,
        gutter : 50,
        infobar : <?php 
    echo  $this->show_toggle( $data['id'], 'fancybox_infobar' ) ;
    ?>,
        toolbar : <?php 
    echo  $this->show_toggle( $data['id'], 'fancybox_toolbar' ) ;
    ?>,
        buttons : [ <?php 
    echo  $this->fancybox_buttons( $data['id'] ) ;
    ?>],        
        transitionEffect: "<?php 
    echo  $gallery['fancybox_transition'] ;
    ?>",
        animationEffect : "<?php 
    echo  $gallery['fancybox_animation'] ;
    ?>",        
        baseClass: "photoblocks-fancybox-<?php 
    echo  $data['id'] ;
    ?>",
        protect: <?php 
    echo  $this->show_toggle( $data['id'], 'fancybox_protect' ) ;
    ?>,
        <?php 
    /*
            share : {
    			tpl :
    				'<div class="fancybox-share">' +
    					'<h1>{{SHARE}}</h1>' +
    					'<p class="fancybox-share__links">' +
    						'<a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}">' +
    							'<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg>' +
    						'</a>' +
    						'<a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}">' +
    							'<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg>' +
    						'</a>' +
    						'<a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}">' +
    							'<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg>' +
    						'</a>' +
    					'</p>' +
    					'<p><input class="fancybox-share__input" type="text" value="{{url_raw}}" /></p>' +
                    '</div>'        
    		}*/
    ?>
    });
    <?php 
}

?>
    <?php 

if ( $this->lightbox( $data['id'] ) == 'magnific' ) {
    ?>
    jQuery("#photoblocks-<?php 
    echo  $data['id'] ;
    ?>").magnificPopup({
        delegate: ".pb-block:not(.pb-filtered) [data-magnific]",
        type: "image",
        gallery: {
            enabled: true,
            preload: [0,2]
        },
        image: {
            titleSrc: 'data-caption'
        },
        mainClass: "mfp-<?php 
    echo  $data['id'] ;
    ?>"
    });
    <?php 
}

?>
});
</script>