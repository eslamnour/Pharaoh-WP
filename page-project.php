<?php get_header(); ?>

<div class="nav" id="nv" style="z-index: 1;">
      <a href="<?php echo site_url('/home');?>">
        <img src="<?php echo get_template_directory_uri(  );?>/img/logo2.png" width="40">
      </a>
      <div class="float-right p-atuo">
      <a href="<?php echo site_url('/project');?>">Projects</a>
      <a href="<?php echo site_url('/contact');?>">Contact Us</a>
      <a href="<?php echo site_url('/about');?>">About</a>
      </div>
</div>
<div style="height:100px;"></div>
<h1 class="text-center mt-5 header">Projects</h1>

<?php
 $args = array(
  'post_type'=> 'project',
  'posts_per_page' => 6
);
$featured = new WP_Query($args);?>
<div class="container">
<?php
        if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();
        $meta = get_post_meta( $post->ID, 'your_fields', true );?>
    <div class="row border mt-5 bg-light">
        <div class="col-md-8 hover08 ">
            <figure>
                <a href="<?php the_permalink( );?>">
                    <img class="d-block img-fluid float-left pr-5 " src="<?php echo get_the_post_thumbnail_url( $post->ID)?>"/>
                </a>
            </figure>
        </div>

        <div class="col-md-4 pt-5 text-center">
            <h2><?php the_title();?></h2>
            <h4><?php the_content();?></h4>
            <h5> <?php echo $meta['select']; ?></h5>
            <h5>  <strong>  Delviery Date : </strong> <?php echo $meta['delviery_date'];?></h5>
            <h5><?php echo $meta['text']; ?></h5>

        </div>
    </div>






    <?php
endwhile; else:

endif; ?>
</div>


<?php wp_reset_query();?>
</div>
<?php get_footer(); ?>
