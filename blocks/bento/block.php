<?php
$id = $block['id'];
$classes = 'block block-bento';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}

$bg_color = get_field('background_color');


if (!empty($bg_color)) {
    ?>
    <style>
        #page-wrapper>div#<?php echo $id; ?> {
            padding-top: 20px;
            padding-bottom: 20px;
            margin-bottom: 5vh;
        }

        #<?php echo $id; ?> .bento-grid-inner-wrapper {
            width: calc(100% - 40px);
        }

        @media (min-width: 768px) {
            #page-wrapper>div#<?php echo $id; ?> {
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #<?php echo $id; ?> .bento-grid-inner-wrapper {
                width: calc(100% - 60px);
            }
        }
    </style>
    <?php
}


if( !function_exists('bento_grid') ) {
    function bento_grid($column_number = '1', $grid_number = '1') {
        $grid = get_field('column_' . $column_number . '_grid_' . $grid_number);
    
        $background_color = $grid ? $grid['background_color'] : '#eee';
        
        $link = $grid && $grid['link'] ? $grid['link'] : false;
        $link_url = $link ? $link['url'] : '';
        $link_target = $link ? $link['target'] : '';
        
        $image = $grid && $grid['image'] ? $grid['image'] : false;
        $image_url = $image ? $image['url'] : '';
        $image_alt = $image ? $image['alt'] : '';
        ?>
        <div 
            style="background-color: <?php echo $background_color; ?>;"
            class="grid-column-<?php echo $column_number; ?>-grid-<?php echo $grid_number; ?>"
        >
            <?php
            if ($link) {
                ?>
                <a 
                    href="<?php echo $link_url; ?>" 
                    target="<?php echo $link_target; ?>"
                >
                <?php
            }
    
            if ($image) {
                ?>
                <img 
                    class="grid-bg-image" 
                    src="<?php echo $image_url; ?>"
                    alt="<?php echo $image_alt; ?>" 
                />
                <?php
            }
    
            if ($link) {
                ?>
                </a>
                <?php
            }
            ?>
        </div>
        <?php
    } // end function bento_grid
  }
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>"
    style="background-color: <?php echo $bg_color; ?>;">

    <div class="bento-grid-inner-wrapper">

        <!-- mobile -->
        <div class="bento-grid-mobile">
            <div class="hu-column">
                <?php echo bento_grid('2', '3'); ?>

                <div class="hu-column two-column">
                    <?php echo bento_grid('1', '1'); ?>
                    <?php echo bento_grid('2', '1'); ?>
                    <?php echo bento_grid('2', '2'); ?>
                    <?php echo bento_grid('3', '2'); ?>
                </div>

                <?php echo bento_grid('2', '4'); ?>

                <div class="hu-column two-column">
                    <?php echo bento_grid('1', '2'); ?>
                    <?php echo bento_grid('3', '1'); ?>
                </div> 
            </div>
        </div>



        <!-- desktop -->
        <div class="bento-grid-desktop">
            <!-- column 1 -->
            <!-- =================== -->
            <div class="hu-column">
                <!-- col 1 grid 1 -->
                <?php echo bento_grid('1', '1'); ?>

                <!-- col 1 grid 2 -->
                <?php echo bento_grid('1', '2'); ?>
            </div>
            <!-- end column 1 -->



            <!-- column 2 -->
            <!-- =================== -->
            <div class="hu-column">
                <div class="hu-column">
                    <!-- col 2 grid 1 -->
                    <?php echo bento_grid('2', '1'); ?>

                    <!-- col 2 grid 2 -->
                    <?php echo bento_grid('2', '2'); ?>
                </div>

                <!-- col 2 grid 3 -->
                <?php echo bento_grid('2', '3'); ?>

                <!-- col 2 grid 4 -->
                <?php echo bento_grid('2', '4'); ?>
            </div>
            <!-- end column 2 -->



            <!-- column 3 -->
            <!-- =================== -->
            <div class="hu-column">
                <!-- col 3 grid 1 -->
                <?php echo bento_grid('3', '1'); ?>

                <!-- col 3 grid 2 -->
                <?php echo bento_grid('3', '2'); ?>
            </div>
            <!-- end column 3 -->

        </div>
        
    </div>
</div>