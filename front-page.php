<?php get_header(); ?>
    <div class="headContainer" id="head">
      <ul id="scene">

        <li class="layer" data-depth="0.5">
          <img style="opacity: 0.3;" src="<?php echo get_template_directory_uri(  );?>/img/logo2.png" />
        </li>
        </li>
        <li class="layer text-center" data-depth="-1" id="logohead">
              <h1 class="header"style="opacity:1;color:white;">Pharaoh</h1>
        </li>
      </ul>
    </div>

    <div id="navbar">
      <a class="active" href="<?php echo site_url('/home');?>">Home</a>
      <a href="<?php echo site_url('contact');?>">Contact Us</a>
      <a href="<?php echo site_url('about');?>">About</a>
      <a href="<?php echo site_url('project');?>">Projects</a>
    </div>

      <div class="container section">
        <h3 class="mt-5 text-center header">Recent News</h3>
        <div class="card-deck mt-5">
        <?php 
            $args = array(
                'post_type' => 'new'
                ,'posts_per_page' => 3
            );
            $blogpost = new WP_Query($args);
            while($blogpost->have_posts()){ ?>
            <div class="card col-md-3 rounded" id="news">
                <div class="card-body"> 
                <h5 class="card-title"><?php $blogpost ->the_post();?></h5>
                <a href="<?php the_permalink();?>">
                    <h3><?php the_title();?></h3>
                </a>
                <p class="card-text">
                    <?php the_excerpt();?>
                </p>
                <p class="card-text">
                    <small class="text-muted"><?php the_time( 'F jS,Y' );?></small>
                </p>
              </div>
          </div>
        <?php 
                      } 
      wp_reset_query();?>
          </div>

            <div class=" mt-5 text-center">
          <!-- IMage with Text Paragraph -->
          </div>
          <?php 
                $args = array(
                    'post_type'=> 'project',
                    'posts_per_page' => 5,
                    'meta_key' => 'featured-checkbox',
                    'meta_value' => 'yes'
                          );
                    $featured = new WP_Query($args);?>
                    <h1 class="text-center mt-5 header">Featured Projects</h1>
                    <div class="container sectionpy" style="height: 500px;">
                        <div class="row mt-5">
                            <?php
                                if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post();
                                    $meta = get_post_meta( $post->ID, 'your_fields', true );?>
                        <div class="col-lg-4">
                          <div class="box">
                              <img class="image"  src="<?php echo get_the_post_thumbnail_url( $post->ID)?>" class="img-thumbnail img-fluid" />
                              <div class="overlay">
                                <div class="text">
                                  <a id="link"href="<?php the_permalink()?>">  
                                        <h3><?php the_title();?></h3>
                                </a>

                                    </div>
                                  </div>
                          </div>
                          </div>
                                  <?php endwhile; else: ?>      
                                  <?php endif;?>
                  </div>
</div>
<?php wp_reset_query();?>
</div>



    <?php get_footer(  );?>