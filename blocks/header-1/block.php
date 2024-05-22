<?php
$id = $block['id'];
$classes = 'block block-header-1';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}

$header = get_field('header_1');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div id="header-1-inner-wrapper">
        <?php
        if ( have_rows('header_1') ) {
            while ( have_rows('header_1') ) {
                the_row();
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                ?>
                <div id="header-logo">
                    <div class="logo-title"><?php echo $title; ?></div>
                    <div class="logo-subtitle"><?php echo $subtitle; ?></div>
                </div><!-- end #header-logo -->
                <?php
            } // end while ( have_rows('header_1') )
        } // end if ( have_rows('header_1') ) 
        ?>
    </div><!-- end #header-1-inner-wrapper -->
</div>