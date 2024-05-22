</div><!-- end #page-wrapper -->

<footer>
  <?php
  $footer_id = get_field('footer', 'option');
  $footer_content = '';
  if ($footer_id) {
    $footer_content = apply_filters( 'the_content', get_post_field( 'post_content', $footer_id ) );
  }
  echo $footer_content;
  ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>