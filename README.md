# acf blocks base theme

you'll see 3 custom blocks registered in the functions.php file:
- header-1
- footer-1
- full-width-image

these blocks can be viewed as a template for creating your own custom blocks. in the blocks folder you'll see a folder named for each custom block along with one block.css and one block.php file inside of each of them. the php file path is specified when you register a new block in the functions.php file, and the css file needs to be added as an import line in the style.css file.

looking at the `full-width-image` block you'll see a very basic amount of code:

    <?php
    $id = $block['id'];
    $classes = 'block block-full-width-image';
    if ( ! empty( $block['className'] ) ) {
        $classes .= ' ' . $block['className'];
    }
    
    $image = get_field('image');
    ?>
    
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
    </div>

to add your own custom block just copy the code, remove 2 lines, and change the name of the class for your block on line 3 to something like `my-new-block-name`:

    <?php
    $id = $block['id'];
    $classes = 'block block-my-new-block-name';
    if ( ! empty( $block['className'] ) ) {
        $classes .= ' ' . $block['className'];
    }
    ?>
    
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
      // your code here
    </div>

the front end stylesheet is enqueued in the dashboard so you can see preview styles for your custom acf blocks.

import the acf-export.json file under acf > tools, to get the starter fields for the example acf blocks. from the import you'll see:

1 options page:
- theme options

4 field groups:
- full width image
- theme options
- header 1
- footer 1

2 post types:
- headers
- footers

the header and footer field groups go with the header/footer registered custom blocks. you can then use these blocks to make new "posts" of the header and footer post types, allowing you to design different headers and footers. you can edit these custom blocks and also register your own new header/footer blocks and then add new field groups to each to give you more block options when designing new headers and footers. 

on the theme options page you'll see custom fields for header and footer which will let you change to any header or footer within your header/footer post types.

I also plan to add in an option to change headers/footers on a per page basis to allow for custom landing pages with tailored headers & footers.


