<?php get_header();?>
<div class="nav" id="nv" style="z-index: 1;">
      <a href="<?php echo site_url('/home');?>">Home</a>
      <a href="<?php echo site_url('/project');?>">Projects</a>
      <a href="<?php echo site_url('/contact');?>">Contact Us</a>
      <a href="<?php echo site_url('/about');?>">About</a>
</div>
<div style="height:100px;"></div>
    <?php 
        while (have_posts($post_id  )){
            the_post(  );
        }
        ?>
        <div class="container">
            <h1 class="header text-center"><?php the_title();?></h1>
            <img class="img-fluid mt-5" src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>" >
        </div>
        <div class="container">
            <p><?php the_content( );?></p>
           <?php $meta = get_post_meta( $post->ID, 'your_fields', true );?>
           <h5> <?php echo $meta['select']; ?></h5>
            <h5>  <strong>  Delviery Date : </strong> <?php echo $meta['delviery_date'];?></h5>
            <h5 class="float-right"><?php echo $meta['text']; ?></h5>
        </div>
            
<?php get_footer();?>
