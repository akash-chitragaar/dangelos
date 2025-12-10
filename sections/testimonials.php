<!-- Testimonials Section -->
<section id="reviews" class="testimonials-section section-padding">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle text-primary">Real Reviews from Real Customers</p>
            <div class="rating-display mt-3">
                <div class="stars">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-half text-warning"></i>
                </div>
                <p class="mt-2 text-muted">Based on <span id="review-count">200+</span> Google Reviews</p>
            </div>
        </div>

        <!-- Reviews Grid -->
        <div class="row g-4" id="reviews-container">
            <!-- Reviews will be loaded here by JavaScript -->
            <!-- Fallback static reviews if API fails -->
            <div class="col-md-6 col-lg-4">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="review-date">2 weeks ago</span>
                    </div>
                    <p class="review-text">"Best pizza in the Bronx! The crust is perfect and the sauce is amazing. Been coming here for years!"</p>
                    <div class="review-author">
                        <strong>Maria R.</strong>
                        <span class="text-muted">• Local Guide</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="review-date">1 month ago</span>
                    </div>
                    <p class="review-text">"Authentic Italian food! The chicken parm is incredible and the pasta is always fresh. Highly recommend!"</p>
                    <div class="review-author">
                        <strong>John D.</strong>
                        <span class="text-muted">• Regular Customer</span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="review-date">3 weeks ago</span>
                    </div>
                    <p class="review-text">"Family-owned and it shows! Great service, delicious food, and reasonable prices. Our go-to spot!"</p>
                    <div class="review-author">
                        <strong>Sarah L.</strong>
                        <span class="text-muted">• Google Reviewer</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Reviews Link -->
        <div class="text-center mt-5">
            <a href="<?php echo $restaurant['social']['Google']; ?>" class="btn btn-outline-primary" target="_blank" rel="noopener">
                <i class="bi bi-google me-2"></i>Read More Reviews on Google
            </a>
        </div>
    </div>
</section>

