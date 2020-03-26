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
<div class="container sectionpy" style="height:600px" >
    <h2 class="header text-center" style="font-size:40px">Feel Free to Contact with The Pharohs</h2>
    <div><h1>Contact Us</h1></div>
    <br />
    <div class="row">
        <div class="col-md-12">
            <div id="googlemap" style="width:250px;">
                <iframe 
                    width="950" 
                    height="350" 
                    id="gmap_canvas" 
                    src="https://maps.google.com/maps?q=cairo&t=&z=11&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0" 
                    scrolling="no" 
                    marginheight="0" 
                    marginwidth="0">
                </iframe>
            </div>

        </div>
        </div>
        <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
            <form class="my-form">
                <div class="form-group">
                    <label for="form-name">Name</label>
                    <input type="email" class="form-control" id="form-name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="form-email">Email Address</label>
                    <input type="email" class="form-control" id="form-email" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <label for="form-subject">Telephone</label>
                    <input type="number" class="form-control" id="form-subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="form-message">Email your Message</label>
                    <textarea class="form-control" id="form-message" placeholder="Message"></textarea>
                </div>
                <button class="btn btn-default" type="submit">Contact Us</button>                
            </form>
        </div>
        <div class="col-lg-6 border-left pl-5">
        
        <i class="far fa-envelope-open"> Email :</i>
        <h6>info@pharoh.com</h6>
        <i class="fas fa-mobile-alt"> Mobile :</i>
        <h6>010-150-362-20</h6>
        <i class="fas fa-map-marker-alt"> Address : </i>
        <h6>15 Nasr Street,Cairo,Egypt</h6>
        </div>
    </div>
    </div>
</div>
<div class="row" style="height:500px"></div>
<script src="https://maps.googleapis.com/maps/api/js"></script>

</div>
<?php get_footer(); ?>
