<?php
$id = $block['id'];
$classes = 'block block-footer-1';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}

$footer = get_field('footer_1');
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
    <div id="footer-1-inner-wrapper">
        <?php
        if ( have_rows('footer_1') ) {
            while ( have_rows('footer_1') ) {
                the_row();

                $menus_count = 0;
                $menus = get_sub_field('footer_menus');
                if (is_array($menus)) {
                    $menus_count = count($menus);
                }
                ?>
                <style>
                    @media (min-width: 768px) {
                        #<?php echo esc_attr($id); ?> #footer-menus {
                            grid-template-columns: repeat(<?php echo $menus_count; ?>, 1fr);
                        }
                    }
                </style>
                
                <div id="footer-menus">
                    <?php
                    if ( have_rows('footer_menus') ) {
                        while ( have_rows('footer_menus') ) {
                            the_row();
                            $menu_column_title = get_sub_field('menu_column_title');
                            ?>
                            <div>
                                <p class="menu-column-title">
                                    <?php echo $menu_column_title; ?>
                                </p>
                
                                <ul>
                                    <?php                                    
                                    if ( have_rows('menu_links') ) {
                                        while ( have_rows('menu_links') ) {
                                            the_row();
                                            $link_text = get_sub_field('link_text');
                                            $link = get_sub_field('link');
                                            ?>
                                            <li>
                                                <?php
                                                if ( $link ) {
                                                    ?>
                                                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
                                                        <?php echo $link_text; ?>
                                                    </a>
                                                    <?php
                                                } else {
                                                    echo $link_text;
                                                }
                                                ?>
                                            </li>
                                            <?php
                                        } // end while ( have_rows('menu_links') )
                                    } // end if ( have_rows('menu_links') )
                                    ?>
                                </ul>
                
                            </div>
                            <?php
                        } // end while ( have_rows('footer_menus') )
                    } // end if ( have_rows('footer_menus') )
                    ?>
                </div><!-- end #footer-menus -->

                <div id="footer-about">
                    <div id="footer-about-text">
                        Hi! I'm the footer about text!
                    </div>

                    <div id="footer-social-desktop">
                        social desktop!
                    </div>
                </div>

                <div id="footer-social-mobile">
                    social mobile!
                </div>
                <?php
            } // end while ( have_rows('footer_1') )
        } // end if ( have_rows('footer_1') ) 
        ?>
    </div><!-- end #footer-1-inner-wrapper -->
</div>