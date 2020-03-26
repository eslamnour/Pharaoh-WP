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
<div style="height:90px;"></div>
<h1 class="text-center mt-5 header">About Us</h1>
    <div class="container">
         <div class="text-center">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          </div>
          <div class="row mt-5 ">
              <div class="col-md-6">
                <img class="img-responsive "  src=<?php echo get_template_directory_uri(  );?>/img/py3.png" alt="logo"width="350px">
              </div>
              <div class="col-md-6">
                <h3>We Believe <br>The Simple Design</h3>
                <p>Trusted comes with tons of custom widgets, color options, font control and 
                  much more.</p>
                  <p class="about__content-paragraph"">We aim to eliminate the task of dividing your project between different agency, corporate and business template. We are a company that offers services for our clients to solve problems and planing strategies for humanity all over the world.</p>
                </div>
              </div>
              <div class="row mt-5">
              <div class="col-md-6 text-center">
                <h3>We Believe <br>The Simple Design</h3>
                <p>Trusted comes with tons of custom widgets, color options, font control and 
                  much more.</p>
                  <p>We aim to eliminate the task of dividing your project between different agency, corporate and business template. We are a company that offers services for our clients to solve problems and planing strategies for humanity all over the world.</p>
                </div>
                <div class="col-md-6">
                <img class="img-responsive" id="logo" src="<?php echo get_template_directory_uri(  );?>/img/logo3.png" alt="logo"width="250px">
              </div>
              </div>
            </div>
          </div>
          <h1 class="header text-center mt-5">Our Creative team</h1>
          <div class="container">
              <div class="row mt-5">
                  <div class="card border-0 col-md-4 mx-auto" style="width: 15rem;">
                      <img src="<?php echo get_template_directory_uri(  );?>/img/placeholder-man.png" class="card-img-top rounded-circle" alt="...">
                      <div class="card-body">
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>        
                      </div>
                  </div>
                  <div class="card border-0 col-md-4 mx-auto" style="width: 15rem;">
                      <img src="<?php echo get_template_directory_uri(  );?>/img/placeholder-man.png" class="card-img-top rounded-circle" alt="...">
                      <div class="card-body">
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>        
                      </div>
                  </div>
                  <div class="card border-0 col-md-4 mx-auto" style="width: 15rem;">
                      <img src="<?php echo get_template_directory_uri(  );?>/img/placeholder-man.png" class="card-img-top rounded-circle" alt="...">
                      <div class="card-body bg-light">
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>        
                      </div>
                  </div>
               </div>
            </div>
     </div>

<?php get_footer(); ?>
