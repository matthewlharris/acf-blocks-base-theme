# acf blocks base theme

you'll see 3 block types registered in the functions.php file:
- header-1
- footer-1
- full-width-image

the front end stylesheet is enqueued in the dashboard so you can see preview styles for your custom acf blocks.

import the acf-export.json file under acf > tools, to get the starter fields for the example acf blocks. from the import you'll see:

one options page:
- theme options

4 field groups:
- full width image
- theme options
- header 1
- footer 1

2 post types:
- headers
- footers

the header and footer field groups go with the header/footer registered blocks. these blocks are then added to new "posts" of the header and footer types, allowing you to design different headers and footers.

on the theme options page you'll see custom fields for header and footer which will let you change to any header or footer within your header/footer post types.


