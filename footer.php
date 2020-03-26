
<!-- Footer -->
<footer class="page-footer container-fluid  font-small pt-4 mt-5">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-8 mt-md-0 mt-3">
        <img src="<?php echo get_template_directory_uri(  );?>/img/logo2.png" width="100px">
        <h5 class="text-uppercase">Pharaoh</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-3">
      <div class="col-md-4 mb-md-0 mb-3 float-right">
        <h5 class="text-uppercase">Links</h5>
        <ul class="list-unstyled">
          <li>
            <a href="<?php echo site_url('/home');?>">Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('project');?>">Projects</a>
          </li>
          <li>
            <a href="<?php echo site_url('contact');?>">Contact Us</a>
          </li>
          <li>
            <a href="<?php echo site_url('about');?>">About</a>
          </li>
        </ul>
      </div>
</div>
</div>


</footer>
<div class="footer-copyright container-fluid text-center py-3">© 2020 Copyright
    <h6> Made with ❤️ For <a href="http://www.mitchdesigns.com" target="_blank">Mitch Desgins</a></h6>
</div>

<!-- Footer -->
<script>
      var scene = document.getElementById("scene");
      var parallax = new Parallax(scene);
    </script>
    <script src="/js/index.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
  </body>
</html>

<?php 
    wp_footer();
?>
