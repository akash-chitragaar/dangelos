<!-- Footer -->
<footer class="footer-section">
    <div class="container">
        <!-- Main Footer Content -->
        <div class="row g-4 pb-4">
            <!-- About Column -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <img src="https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png" alt="<?php echo $restaurant['name']; ?>" style="height: 55px; width: auto; max-width: 75px; object-fit: contain;" class="mb-3">
                    <h5 class="text-white mb-3"><?php echo $restaurant['name']; ?></h5>
                    <p class="text-light-gray mb-3">
                        Authentic Italian pizza and cuisine in the Bronx. Family recipes, fresh ingredients, made with love.
                    </p>
                    <!-- Social Links -->
                    <div class="social-links">
                        <?php if (!empty($restaurant['social']['Google'])): ?>
                        <a href="<?php echo $restaurant['social']['Google']; ?>" target="_blank" rel="noopener" class="social-link" title="Google Maps">
                            <i class="bi bi-google"></i>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($restaurant['social']['instagram'])): ?>
                        <a href="<?php echo $restaurant['social']['instagram']; ?>" target="_blank" rel="noopener" class="social-link" title="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($restaurant['social']['yelp'])): ?>
                        <a href="<?php echo $restaurant['social']['yelp']; ?>" target="_blank" rel="noopener" class="social-link" title="Yelp">
                            <i class="bi bi-yelp"></i>
                        </a>
                        <?php endif; ?>
                        <?php if (!empty($restaurant['social']['facebook'])): ?>
                        <a href="<?php echo $restaurant['social']['facebook']; ?>" target="_blank" rel="noopener" class="social-link" title="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-3">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#reviews">Reviews</a></li>
                        <li><a href="#location">Location</a></li>
                        <li><a href="#app">Get App</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Column -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-3">Contact Us</h5>
                    <ul class="footer-contact">
                        <li>
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            <span>
                                <?php echo $restaurant['address']['street']; ?><br>
                                <?php echo $restaurant['address']['city']; ?>, <?php echo $restaurant['address']['state']; ?> <?php echo $restaurant['address']['zip']; ?>
                            </span>
                        </li>
                        <li>
                            <i class="bi bi-telephone-fill me-2"></i>
                            <a href="tel:<?php echo $restaurant['phone']; ?>"><?php echo $restaurant['phone']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Hours Column -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h5 class="text-white mb-3">Business Hours</h5>
                    <ul class="footer-hours">
                        <li>
                            <span>Mon - Thu:</span>
                            <span>11 AM - 10 PM</span>
                        </li>
                        <li>
                            <span>Fri - Sat:</span>
                            <span>11 AM - 11 PM</span>
                        </li>
                        <li>
                            <span>Sunday:</span>
                            <span>12 PM - 10 PM</span>
                        </li>
                    </ul>
                    <a href="<?php echo $restaurant['orderLink']; ?>" class="btn btn-sm btn-outline-light mt-3" target="_blank" rel="noopener">
                        Order Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <p class="mb-0 text-light-gray small">
                        &copy; <?php echo date('Y'); ?> <?php echo $restaurant['name']; ?>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 text-light-gray small">
                        Powered by <a href="https://get.ser.vi/" target="_blank" rel="noopener" class="footer-link">Ser.vi</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="back-to-top" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </button>
</footer>

