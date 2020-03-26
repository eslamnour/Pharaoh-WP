<?php get_header(); ?>
<?php 
   $args = array(
    'post_type'=> 'project',
    'posts_per_page' => 5,
    'meta_key' => 'featured-checkbox',
    'meta_value' => 'yes'
);

$featured = new WP_Query($args);
if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();
    $meta = get_post_meta( $post->ID, 'your_fields', true );
    
    the_title();
    the_content();
    ?>
    <h3>Delviery Date</h3>
    <?php echo $meta['delviery_date'];?>
    <h1>Text Input</h1>
    <?php echo $meta['text']; ?>
    <h1>Select Menu</h1>
<p>The actual value selected.</p>
<?php echo $meta['select']; ?>


    <?php
endwhile; else:

endif;
?>
<?php 
    $args = array(
        'post_type' => 'new'
    );
    $blogpost = new WP_Query($args);

    while($blogpost->have_posts()){
        $blogpost ->the_post();
    ?>
    <a href="<?php the_permalink();?>">
        <h3><?php the_title();?></h3>
    </a>
    <?php the_time( 'F jS,Y' );?>
    <?php the_excerpt();?>
<?php
}
?>
<?php get_footer(); ?>
