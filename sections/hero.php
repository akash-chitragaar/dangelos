<!-- Hero Section -->
<section id="home" class="hero-section" style="background-image: url('https://assets2.ser.vi/brand/alluseuvenue/feature_image/d-angelos-venue.png');">
    <div class="hero-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 col-xl-8 mx-auto text-center hero-content">
                <div class="hero-badge">
                    Brick Oven Pizza • Dine-in • Takeout • Delivery
                </div>
                <h1 class="hero-title"><?php echo $hero['title']; ?></h1>
                <p class="hero-subtitle"><?php echo $hero['subtitle']; ?></p>
                <p class="hero-description"><?php echo $hero['description']; ?></p>
                <div class="hero-buttons">
                    <a href="<?php echo $restaurant['orderLink']; ?>" class="btn btn-primary btn-lg" target="_blank" rel="noopener">
                        <i class="bi bi-bag-check me-2"></i><?php echo $hero['ctaText']; ?>
                    </a>
                </div>
                <div class="hero-contact mt-4">
                    <a href="tel:<?php echo $restaurant['phone']; ?>" class="hero-phone-link">
                        <i class="bi bi-telephone-fill me-2"></i><?php echo $restaurant['phone']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Scroll Down Indicator -->
    <div class="scroll-indicator">
        <a href="#about">
            <i class="bi bi-chevron-down"></i>
        </a>
    </div>
</section>

