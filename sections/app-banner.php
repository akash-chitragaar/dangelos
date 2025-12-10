<!-- App Download Banner Section -->
<section id="app" class="app-banner-section py-5" style="background: linear-gradient(135deg, <?php echo $restaurant['colors']['primary']; ?>, <?php echo $restaurant['colors']['dark']; ?>); position: relative; overflow: hidden;">
    <div class="container" style="max-width: 1200px;">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="app-title mb-3 text-white">Get The D'Angelo's App</h2>
                <p class="app-description lead mb-4 text-white">
                    Order directly from your phone, save on every purchase, and earn loyalty points with each visit. Download our app today and never wait in line again!
                </p>
                <div class="app-features mb-4">
                    <div class="feature-item mb-2" style="display: flex; align-items: center; gap: 10px; padding: 8px 12px; border-radius: 8px;">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <span class="text-white">Order ahead & skip the line</span>
                    </div>
                    <div class="feature-item mb-2" style="display: flex; align-items: center; gap: 10px; padding: 8px 12px; border-radius: 8px;">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <span class="text-white">Earn loyalty points on every purchase</span>
                    </div>
                    <div class="feature-item mb-2" style="display: flex; align-items: center; gap: 10px; padding: 8px 12px; border-radius: 8px;">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <span class="text-white">Exclusive app-only deals & discounts</span>
                    </div>
                    <div class="feature-item mb-2" style="display: flex; align-items: center; gap: 10px; padding: 8px 12px; border-radius: 8px;">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <span class="text-white">Easy reordering of your favorites</span>
                    </div>
                </div>
                <div class="app-buttons">
                    <a href="<?php echo $restaurant['appLinks']['ios']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-light btn-lg me-2 mb-2" style="box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 14px 32px; font-size: 1.1rem;">
                        <i class="bi bi-apple"></i> App Store
                    </a>
                    <a href="<?php echo $restaurant['appLinks']['android']; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-light btn-lg mb-2" style="box-shadow: 0 2px 8px rgba(0,0,0,0.1); padding: 14px 32px; font-size: 1.1rem;">
                        <i class="bi bi-google-play"></i> Google Play
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center app-image-col" style="position: relative; align-self: flex-end; margin-bottom: -50px; z-index: 1;">
                <div class="app-mockup" style="display: flex; align-items: flex-end; justify-content: center; margin-bottom: 0;">
                    <img src="https://assets2.ser.vi/brand/alluseuvenue/screenshot/Dangelos-screen2.png" alt="D'Angelo's Mobile App" class="phone-mockup-img" style="max-width: 55%; height: auto; display: block; margin-bottom: 0; transform: scale(1.05); filter: drop-shadow(0 10px 30px rgba(0,0,0,0.3));">
                </div>
            </div>
        </div>
    </div>
</section>

