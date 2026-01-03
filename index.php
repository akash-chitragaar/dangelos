<?php
// SEO Headers - Allow search engines to index and follow
header('X-Robots-Tag: index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1');

// Load configuration
$config = json_decode(file_get_contents('config.json'), true);
$restaurant = $config['restaurant'];
$hero = $config['hero'];
$about = $config['about'];
$specialties = $config['specialties'];
$menuHighlights = array_filter($config['menuHighlights'], function ($item) {
    return isset($item['featured']) && $item['featured'] === true;
});
$testimonials = $config['testimonials'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G8N63S3MTT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-G8N63S3MTT');
    </script>

    <!-- Ahrefs Analytics -->
    <script>
      var ahrefs_analytics_script = document.createElement('script');
      ahrefs_analytics_script.async = true;
      ahrefs_analytics_script.src = 'https://analytics.ahrefs.com/analytics.js';
      ahrefs_analytics_script.setAttribute('data-key', 'kVmiQdLRoh7SWzFaTFGAtA');
      document.getElementsByTagName('head')[0].appendChild(ahrefs_analytics_script);
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>D'Angelo's Pizzeria & Restaurant | Best Pizza in Bronx | Order Now</title>
    <meta name="title" content="D'Angelo's Pizzeria & Restaurant | Best Pizza in Bronx | Order Now">
    <meta name="description"
        content="Authentic Italian pizza & restaurant in Bronx. Fresh ingredients, family recipes. Dine-in, takeout & delivery. Order online!">

    <!-- Primary keywords + local pack boosters -->
    <meta name="keywords"
        content="Best Pizza Bronx NY, D'Angelo's Pizzeria, Italian Restaurant Bronx, Pizza Delivery Bronx, Pizza near me Bronx, Fresh Pizza Bronx, Italian Food Bronx, Pizza 10469, D'Angelo's Pizza, pizzeria Bronx NY, best pizza Bronx, Italian restaurant Bronx, pasta Bronx, takeout Bronx">

    <!-- Canonical URL -->
    <link rel="canonical" href="http://dangelosgunhill.com/">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="restaurant">
    <meta property="og:url" content="http://dangelosgunhill.com/">
    <meta property="og:title" content="D'Angelo's Pizzeria & Restaurant | Best Pizza in Bronx | Order Now">
    <meta property="og:description"
        content="Authentic Italian pizza & restaurant. Fresh ingredients, family recipes. Order online for pickup & delivery!">
    <meta property="og:image"
        content="https://assets2.ser.vi/brand/alluseuvenue/og_image/og-image.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="D'Angelo's Pizzeria & Restaurant - Authentic Italian Pizza in Bronx">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="D'Angelo's Pizzeria & Restaurant">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://dangelosgunhill.com/">
    <meta property="twitter:title" content="D'Angelo's Pizzeria & Restaurant | Best Pizza in Bronx | Order Now">
    <meta property="twitter:description"
        content="Authentic Italian pizza & restaurant. Fresh ingredients, family recipes. Order online now!">
    <meta property="twitter:image" content="https://assets2.ser.vi/brand/alluseuvenue/og_image/og-image.webp">
    <meta property="twitter:image:alt" content="D'Angelo's Pizzeria & Restaurant - Authentic Italian Pizza in Bronx">
    
    <!-- Local Business Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "@id": "http://dangelosgunhill.com/",
        "name": "D'Angelo's Pizzeria & Restaurant",
        "image": "https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png",
        "url": "http://dangelosgunhill.com/",
        "telephone": "<?php echo $restaurant['phone']; ?>",
        "priceRange": "$$",
        "servesCuisine": ["Italian", "Pizza", "Pasta", "American"],
        "acceptsReservations": "False",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo $restaurant['address']['street']; ?>",
            "addressLocality": "<?php echo $restaurant['address']['city']; ?>",
            "addressRegion": "<?php echo $restaurant['address']['state']; ?>",
            "postalCode": "<?php echo $restaurant['address']['zip']; ?>",
            "addressCountry": "US"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": <?php echo $restaurant['geo']['latitude']; ?>,
            "longitude": <?php echo $restaurant['geo']['longitude']; ?>
        },
        "openingHoursSpecification": [
            <?php
            $daysMap = [
                'monday' => 'Monday',
                'tuesday' => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday' => 'Thursday',
                'friday' => 'Friday',
                'saturday' => 'Saturday',
                'sunday' => 'Sunday'
            ];
            $hoursArray = [];
            foreach ($restaurant['hours'] as $day => $hours) {
                $times = explode(' - ', $hours);
                $hoursArray[] = json_encode([
                    "@type" => "OpeningHoursSpecification",
                    "dayOfWeek" => $daysMap[$day],
                    "opens" => date('H:i', strtotime($times[0])),
                    "closes" => date('H:i', strtotime($times[1]))
                ], JSON_UNESCAPED_SLASHES);
            }
            echo implode(',', $hoursArray);
            ?>
        ],
        "sameAs": [
            "<?php echo $restaurant['social']['Google']; ?>"
        ],
        "menu": "https://ser.vi/dangelosgunhill?source=website&campaign=mainsite",
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "reviewCount": "200"
        }
    }
    </script>

    <!-- Geo tags for Google's AI/local pack -->
    <meta name="geo.position" content="<?php echo $restaurant['geo']['latitude']; ?>;<?php echo $restaurant['geo']['longitude']; ?>">
    <meta name="geo.placename" content="Gun Hill, Bronx, NY">
    <meta name="geo.region" content="US-NY">
    <meta name="ICBM" content="<?php echo $restaurant['geo']['latitude']; ?>, <?php echo $restaurant['geo']['longitude']; ?>">

    <!-- Robots Meta -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">

    <!-- Language -->
    <meta http-equiv="content-language" content="en-US">

    <!-- Mobile Optimization -->
    <meta name="theme-color" content="#b83232">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="D'Angelo's Pizza">
    <meta name="format-detection" content="telephone=yes">
    <meta name="HandheldFriendly" content="true">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://images.unsplash.com" crossorigin>
    <link rel="dns-prefetch" href="https://images.unsplash.com">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
</head>

<body>

    <!-- Navigation -->
    <?php include 'sections/navbar.php'; ?>

    <!-- Hero Section -->
    <?php include 'sections/hero.php'; ?>

    <!-- About Section -->
    <?php include 'sections/about.php'; ?>

    <!-- Testimonials Section -->
    <?php include 'sections/testimonials.php'; ?>

    <!-- Location & Hours Section -->
    <?php include 'sections/location.php'; ?>

    <!-- App Download Section -->
    <?php include 'sections/app-banner.php'; ?>

    <!-- Footer -->
    <?php include 'sections/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>

