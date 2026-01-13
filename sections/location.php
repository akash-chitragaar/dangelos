<!-- Location & Hours Section -->
<section id="location" class="location-section py-5">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-4">
            <h2 class="section-title"><?php echo $config['locations']['title']; ?></h2>
            <p class="section-subtitle text-primary"><?php echo $config['locations']['subtitle']; ?></p>
        </div>

        <div class="row g-4">
            <!-- Google Maps -->
            <div class="col-lg-8">
                <div class="map-container">
                    <iframe
                        src="<?php echo $config['locations']['mapEmbed']; ?>"
                        width="100%"
                        height="350"
                        style="border:0; border-radius: 8px;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="location-info-compact">
                    <!-- Address -->
                    <div class="info-item mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-geo-alt-fill text-primary me-2" style="font-size: 1.25rem;"></i>
                            <div>
                                <h5 class="mb-1">Address</h5>
                                <p class="mb-1 text-muted">
                                    <?php echo $restaurant['address']['street']; ?><br>
                                    <?php echo $restaurant['address']['city']; ?>, <?php echo $restaurant['address']['state']; ?> <?php echo $restaurant['address']['zip']; ?>
                                </p>
                                <a href="<?php echo $restaurant['geo']['googleMapsUrl']; ?>" target="_blank" rel="noopener" class="location-link small">
                                    Get Directions <i class="bi bi-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="info-item mb-3">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-telephone-fill text-primary me-2" style="font-size: 1.25rem;"></i>
                            <div>
                                <h5 class="mb-1">Phone</h5>
                                <a href="tel:<?php echo $restaurant['phone']; ?>" class="location-phone-compact">
                                    <?php echo $restaurant['phone']; ?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Hours -->
                    <div class="info-item">
                        <div class="d-flex align-items-start">
                            <i class="bi bi-clock-fill text-primary me-2" style="font-size: 1.25rem;"></i>
                            <div>
                                <h5 class="mb-2">Hours</h5>
                                <div class="hours-compact-list">
                                    <p class="mb-1 small"><strong>Mon - Thu:</strong> 11 AM - 10 PM</p>
                                    <p class="mb-1 small"><strong>Fri - Sat:</strong> 11 AM - 11 PM</p>
                                    <p class="mb-0 small"><strong>Sunday:</strong> 12 PM - 10 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

