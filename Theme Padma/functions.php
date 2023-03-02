<?php
wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_sidebar(array(
    'name'=>'BD Logo',
    'id'=>'bdlogo',
    'before_widget'=>'',
    'after_widget'=>'',
));

register_nav_menus(array(
    'primary_menu'=>'Primary Menu',
    'footer_menu'=>'Footer Menu',
));

register_sidebar(array(
    'name'=>'Hero Title',
    'id'=>'herotitle',
    'before_widget'=>'',
    'after_widget'=>'',
));


register_sidebar(array(
    'name'=>'Hero Card-1',
    'id'=>'herocard1',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Hero Card-2',
    'id'=>'herocard2',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Hero Card-3',
    'id'=>'herocard3',
    'before_widget'=>'',
    'after_widget'=>'',
));


register_sidebar(array(
    'name'=>'Line Left',
    'id'=>'lineleft',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Photo Title',
    'id'=>'phototitle',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Line Right',
    'id'=>'lineright',
    'before_widget'=>'',
    'after_widget'=>'',
));


register_sidebar(array(
    'name'=>'Photo Card-1',
    'id'=>'photocard1',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Photo Card-2',
    'id'=>'photocard2',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Photo Card-3',
    'id'=>'photocard3',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Photo Card-4',
    'id'=>'photocard4',
    'before_widget'=>'',
    'after_widget'=>'',
));


register_sidebar(array(
    'name'=>'News Title',
    'id'=>'newstitle',
    'before_widget'=>'',
    'after_widget'=>'',
));


register_sidebar(array(
    'name'=>'Footer Top Left',
    'id'=>'ftleft',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Footer Top Right',
    'id'=>'ftright',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Footer bottom left',
    'id'=>'fbleft',
    'before_widget'=>'',
    'after_widget'=>'',
));
register_sidebar(array(
    'name'=>'Footer bottom Right',
    'id'=>'fbright',
    'before_widget'=>'',
    'after_widget'=>'',
));
?>