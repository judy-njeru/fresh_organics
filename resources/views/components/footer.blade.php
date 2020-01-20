<footer class="footer-area footer--light" id="footer">
  <div class="footer-big">
    <!-- start .container -->
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="footer-widget">
            <div class="widget-about">
              <img src="{{asset('images/logo-white.png') }}" alt="logo" class="img-fluid">
              <p>Healthy homemade meals made with a touch of love!</p>
              <ul class="contact-details">
                <li>
                  <span class="icon-earphones"></span> Call Us:
                  <a href="tel:344-755-111">71-13-74612</a>
                </li>
                <li>
                  <span class="icon-envelope-open"></span>
                  <a href="mailto:support@aazztech.com">support@freshorganics.com</a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-4 -->
        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
            <div class="footer-menu footer-menu--1">
              <ul>
                <li>
                  <a href="/recipes">Recipes</a>
                </li>
                <li>
                  <a href="/meal-boxes">Meal Boxes</a>
                </li>
                <li>
                  <a href="#">Our foods</a>
                </li>
                <li>
                  <a href="#">About Us</a>
                </li>
                <li>
                  <a href="#">Be In Touch</a>
                </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-md-3 -->

        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
            <div class="footer-menu">
              <h4 class="footer-widget-title">Working Hours</h4>
              <h6 class="footer-widget-sp-title">Delivery Hours:</h6>
              <ul>
                <li>
                  Mondays: 15:30 - 20:00
                </li>
                <li>
                  Tue & Wed: 15:00 - 20:00
                </li>
              </ul>


              <h6 class="footer-widget-sp-title">Phones:</h6>
              <ul>
                <li>
                  Monday - Thursday 10:00 - 20:00
                </li>
                <li>
                  Friday: 10:00 - 17:00
                </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- end /.col-lg-3 -->

        <div class="col-md-3 col-sm-4">
          <div class="footer-widget">
            <div class="footer-menu no-padding">
              <h4 class="footer-widget-title">Be In Touch</h4>
              <h6 class="footer-widget-sp-title">Address:</h6>
              <ul>
                <li>
                  Skolevej 44, 1868 Frederiksberg
                </li>
              </ul>
              <h6 class="footer-widget-sp-title">Phone:</h6>
              <ul>
                <li>
                  71-13-74612
                </li>
              </ul>
              <h6 class="footer-widget-sp-title">Email:</h6>
              <ul>
                <li>
                  support@freshorganics.com
                </li>
              </ul>
            </div>
            <!-- end /.footer-menu -->
          </div>
          <!-- Ends: .footer-widget -->
        </div>
        <!-- Ends: .col-lg-3 -->

      </div>
      <!-- end /.row -->
    </div>
    <!-- end /.container -->
  </div>
  <!-- end /.footer-big -->

  <div class="mini-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>© <?php echo date('Y'); ?>
              <a href="#">Fresh Organics Co.</a>
            </p>
          </div>

          <div class="go_top">
            <span class="icon-arrow-up"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  @yield('extra-js')
  <script src="{{ asset('js/app.js') }}"></script>

</footer>
</body>

</html>