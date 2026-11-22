  <!-- Footer Starts -->
  <footer class="section-padding position-relative pb-0">
    <div class="overlay"></div>
    <div class="container position-relative">
      <div class="footer-inner white text-center text-lg-start">
        <div class="footer-top pb-6 border-bottom border-1 border-light20">
          <div class="row gx-md-5 gy-5">
            <div class="col-lg-3">
              <div class="footer-info">
                <div class="footer-logo">
                  <a href="{{ route('home') }}"><img src="{{ asset('landing/images/logo-w.png') }}" alt="logo" style="width: 240px;" class="mb-4"></a>
                </div>
                <div class="footer-info-inner"> 
                  <p class="mb-4">RoyalHeart adalah organisasi nirlaba yang berdedikasi untuk membantu anak-anak, keluarga miskin, dan komunitas yang membutuhkan di seluruh dunia.</p>
                  <ul class="d-flex social-links list-unstyled gap-2 justify-content-center justify-content-lg-start">
                    <li><a href="#"><i class="fab fa-facebook text-center text-white rounded-circle bg-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter text-center text-white rounded-circle bg-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube text-center text-white rounded-circle bg-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram text-center text-white rounded-circle bg-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6">
              <div class="footer-links">
                <h4 class="white mb-4">Quick Links</h4>
                <ul class="list-unstyled">
                  <li class="mb-3"><a href="{{ route('causes.index') }}">Our Causes</a></li>
                  <li class="mb-3"><a href="{{ route('about') }}">About Us</a></li>
                  <li class="mb-3"><a href="{{ route('events.index') }}">Latest Events</a></li>
                  <li class="mb-3"><a href="{{ route('contact') }}">Contact</a></li>
                  <li><a href="{{ route('donate') }}">Donate Now</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="footer-contact">
                <h4 class="white mb-4">Find Us</h4>
                <ul class="list-unstyled">
                  <li class="mb-3"><i class="fas fa-map-marker-alt me-2 primary"></i>3435 Railroad Street, Sault Sainte Marie, MI 49783</li>
                  <li class="mb-3"><i class="far fa-envelope me-2 primary"></i>needhelp@royalheart.com</li>
                  <li><i class="fas fa-phone me-2 primary"></i>+1 (514) 312-5678</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer-newsletter">
                <h4 class="white mb-4">Weekly Newsletter</h4>
                <form action="#" method="POST">
                  @csrf
                  <input type="text" placeholder="Your Name" class="mb-3 w-100 p-2" required>
                  <input type="email" placeholder="Your Email" class="mb-3 w-100 p-2" required>
                  <button type="submit" class="btn-primary w-100 border-0 py-2">Subscribe</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-copyright py-3">
          <p class="mb-0 text-center">© {{ date('Y') }} RoyalHeart. All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Ends -->
