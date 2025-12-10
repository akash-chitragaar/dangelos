<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#home">
            <img src="https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png" alt="<?php echo $restaurant['name']; ?>" style="height: 45px; width: auto; max-width: 50px; object-fit: contain;" class="me-2">
            <span class="brand-text">D'Angelo's Pizzeria & Restaurant</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reviews">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#location">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="getapp.php">Get App</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $restaurant['orderLink']; ?>" class="btn btn-order ms-lg-3" target="_blank" rel="noopener">
                        <i class="bi bi-bag-check me-1"></i>Order Now
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

