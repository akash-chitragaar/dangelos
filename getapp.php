<?php
/**
 * Get App Page - D'Angelo's Pizzeria & Restaurant
 * Mobile-optimized app download page with auto-detection
 */

// Load configuration
$config = json_decode(file_get_contents('config.json'), true);
$restaurant = $config['restaurant'];

// Set page configuration for SEO
$page_title = "Download App - D'Angelo's Pizzeria & Restaurant | Order Food";
$page_description = "Download the official D'Angelo's Pizzeria mobile app. Order ahead, earn loyalty points, and enjoy exclusive deals. Available on iOS App Store and Google Play Store.";
$page_keywords = "dangelos pizza app, pizzeria mobile app, order pizza app bronx, food delivery app, pizza app download, ios app, android app";
$page_image = "https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png";
$page_url = "http://dangelosgunhill.com/getapp";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title><?php echo $page_title; ?></title>
    <meta name="title" content="<?php echo $page_title; ?>">
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $page_url; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $page_url; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="<?php echo $page_image; ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $page_url; ?>">
    <meta property="twitter:title" content="<?php echo $page_title; ?>">
    <meta property="twitter:description" content="<?php echo $page_description; ?>">
    <meta property="twitter:image" content="<?php echo $page_image; ?>">
    
    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "http://dangelosgunhill.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Get App",
          "item": "http://dangelosgunhill.com/getapp"
        }
      ]
    }
    </script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #c41e3a, #1a1a1a);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .app-download-card {
            background: white;
            border-radius: 24px;
            padding: 40px 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        
        .app-logo {
            margin-bottom: 2rem;
        }
        
        .app-logo img {
            max-width: 80px;
            max-height: 80px;
            width: auto;
            height: auto;
            object-fit: contain;
        }
        
        .app-download-title {
            color: #1a1a1a;
            font-size: 1.8rem;
            font-weight: 700;
            font-family: 'Playfair Display', serif;
            margin-bottom: 1rem;
        }
        
        .app-download-description {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        
        .app-store-buttons {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 30px;
        }
        
        .app-store-link img {
            width: 100%;
            max-width: 280px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .app-store-link:hover img {
            transform: translateY(-3px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.25);
        }
        
        .app-features {
            text-align: left;
            padding: 20px;
            background: #faf8f3;
            border-radius: 16px;
            margin-top: 2rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 1rem;
        }
        
        .feature-item:last-child {
            margin-bottom: 0;
        }
        
        .feature-item i {
            color: #28a745;
            font-size: 1.2rem;
        }
        
        .feature-item span {
            color: #333;
            font-size: 0.95rem;
        }
        
        .back-link {
            margin-top: 1.5rem;
        }
        
        .back-link a {
            color: #c41e3a;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .back-link a:hover {
            color: #1a1a1a;
        }
        
        @media (max-width: 768px) {
            .app-download-card {
                padding: 25px 15px;
                border-radius: 16px;
            }
            
            .app-download-title {
                font-size: 1.3rem;
            }
            
            .app-download-description {
                font-size: 0.9rem;
            }
            
            .app-logo img {
                max-width: 80px;
            }
            
            .app-store-buttons {
                gap: 12px;
            }
            
            .app-store-link img {
                max-width: 220px;
            }
            
            .app-features {
                padding: 12px;
                margin-top: 20px;
            }
            
            .feature-item span {
                font-size: 0.85rem;
            }
        }
        
        @media (max-width: 480px) {
            .app-download-card {
                padding: 20px 15px;
            }
            
            .app-download-title {
                font-size: 1.2rem;
            }
            
            .app-download-description {
                font-size: 0.85rem;
            }
            
            .app-store-link img {
                max-width: 200px;
            }
        }
    </style>
</head>
<body>

<script>
// Auto-detect device and redirect to appropriate app store
(function() {
    const userAgent = navigator.userAgent || navigator.vendor || window.opera;
    
    // iOS detection
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        console.log('iOS device detected - redirecting to App Store');
        window.location.href = '<?php echo $restaurant['appLinks']['ios']; ?>';
        return;
    }
    
    // Android detection
    if (/android/i.test(userAgent)) {
        console.log('Android device detected - redirecting to Google Play');
        window.location.href = '<?php echo $restaurant['appLinks']['android']; ?>';
        return;
    }
    
    // Desktop or undetected device - stay on page
    console.log('Desktop or undetected device - showing app download page');
})();
</script>

<div class="app-download-card">
    <!-- Logo -->
    <div class="app-logo">
        <img src="https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png" alt="D'Angelo's Pizzeria & Restaurant">
    </div>
    
    <!-- Title -->
    <h1 class="app-download-title">
        Get The D'Angelo's App
    </h1>
    
    <!-- Description -->
    <p class="app-download-description">
        Order ahead, earn rewards, and enjoy exclusive deals. Download our app now!
    </p>
    
    <!-- App Store Buttons -->
    <div class="app-store-buttons">
        <!-- Apple App Store Button -->
        <a href="<?php echo $restaurant['appLinks']['ios']; ?>" target="_blank" rel="noopener noreferrer" class="app-store-link">
            <img src="assets/images/appstore.webp" alt="Download on the App Store">
        </a>
        
        <!-- Google Play Store Button -->
        <a href="<?php echo $restaurant['appLinks']['android']; ?>" target="_blank" rel="noopener noreferrer" class="app-store-link">
            <img src="assets/images/playstore.webp" alt="Get it on Google Play">
        </a>
    </div>
    
    <!-- Features List -->
    <div class="app-features">
        <div class="feature-item">
            <i class="fas fa-check-circle"></i>
            <span>Order ahead & skip the line</span>
        </div>
        <div class="feature-item">
            <i class="fas fa-check-circle"></i>
            <span>Earn loyalty points on every purchase</span>
        </div>
        <div class="feature-item">
            <i class="fas fa-check-circle"></i>
            <span>Exclusive app-only deals & discounts</span>
        </div>
        <div class="feature-item">
            <i class="fas fa-check-circle"></i>
            <span>Easy reordering of your favorites</span>
        </div>
    </div>
    
    <!-- Back to Website Link -->
    <div class="back-link">
        <a href="http://dangelosgunhill.com/">
            Visit us at dangelosgunhill.com
        </a>
    </div>
</div>

</body>
</html>

