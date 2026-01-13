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

// Byline dates for SEO - Google can show dates in search results
$datePublished = '2024-01-15T00:00:00+00:00'; // Original website launch date
$dateModified = date('Y-m-d\TH:i:s\Z', filemtime(__FILE__)); // Last file modification time
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
    <title>D'Angelo's Pizza Gun Hill Road | Pizza Near Me Bronx NY</title>
    <meta name="title" content="D'Angelo's Pizza Gun Hill Road | Pizza Near Me Bronx NY">
    <meta name="description"
        content="D'Angelo's Pizza on Gun Hill Road in Bronx NY. Best pizza near me! Authentic Italian pizza. Order online for delivery & pickup!">

    <!-- Primary keywords + local pack boosters -->
    <meta name="keywords"
        content="d'angelo's pizza gun hill road, pizza near me, d'angelo's pizza, d'angelo's pizza bronx ny, angelo's pizza, dangelos, dangelos pizza, dangelos pizzeria, d'angelo pizza bronx gun hill, d angelo pizza, d'angelo, dangelo, pizza, restaurants, d'angelo's pizzeria, pizza bronx, pizza near me bronx, best pizza bronx, italian restaurant bronx, gun hill road pizza, bronx pizza delivery">

    <!-- Canonical URL -->
    <link rel="canonical" href="http://dangelosgunhill.com/">

    <!-- Byline Dates for Google Search Results -->
    <meta property="article:published_time" content="<?php echo $datePublished; ?>">
    <meta property="article:modified_time" content="<?php echo $dateModified; ?>">
    <meta name="pubdate" content="<?php echo $datePublished; ?>">
    <meta name="lastmod" content="<?php echo $dateModified; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="restaurant">
    <meta property="og:url" content="http://dangelosgunhill.com/">
    <meta property="og:title" content="D'Angelo's Pizza Gun Hill Road | Pizza Near Me Bronx NY">
    <meta property="og:description"
        content="D'Angelo's Pizza on Gun Hill Road in Bronx NY. Best pizza near me! Authentic Italian pizza. Order online for delivery & pickup!">
    <meta property="og:image"
        content="https://assets2.ser.vi/brand/alluseuvenue/og_image/og-image.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="D'Angelo's Pizzeria & Restaurant - Authentic Italian Pizza in Bronx">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="D'Angelo's Pizzeria & Restaurant">
    <meta property="article:published_time" content="<?php echo $datePublished; ?>">
    <meta property="article:modified_time" content="<?php echo $dateModified; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://dangelosgunhill.com/">
    <meta property="twitter:title" content="D'Angelo's Pizza Gun Hill Road | Pizza Near Me Bronx NY">
    <meta property="twitter:description"
        content="D'Angelo's Pizza on Gun Hill Road in Bronx NY. Best pizza near me! Authentic Italian pizza. Order online now!">
    <meta property="twitter:image" content="https://assets2.ser.vi/brand/alluseuvenue/og_image/og-image.webp">
    <meta property="twitter:image:alt" content="D'Angelo's Pizzeria & Restaurant - Authentic Italian Pizza in Bronx">
    
    <!-- Local Business Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "@id": "http://dangelosgunhill.com/",
        "name": "D'Angelo's Pizzeria & Restaurant",
        "alternateName": ["D'Angelo's Pizza", "Dangelos", "Dangelos Pizza", "Dangelos Pizzeria", "Angelo's Pizza", "D'Angelo Pizza", "D Angelo Pizza", "D'Angelo's Pizza Gun Hill Road", "D'Angelo's Pizza Bronx NY"],
        "image": "https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png",
        "url": "http://dangelosgunhill.com/",
        "telephone": "<?php echo $restaurant['phone']; ?>",
        "priceRange": "$$",
        "servesCuisine": ["Italian", "Pizza", "Pasta", "American"],
        "description": "D'Angelo's Pizza on Gun Hill Road in Bronx NY. Best pizza near me! Authentic Italian pizza, dangelos pizzeria, angelo's pizza. D'Angelo pizza Bronx Gun Hill.",
        "acceptsReservations": "False",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "902 East Gun Hill Road",
            "addressLocality": "Gun Hill, Bronx",
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

    <!-- WebPage Schema with Byline Dates -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "http://dangelosgunhill.com/#webpage",
        "url": "http://dangelosgunhill.com/",
        "name": "D'Angelo's Pizza Gun Hill Road | Pizza Near Me Bronx NY",
        "description": "D'Angelo's Pizza on Gun Hill Road in Bronx NY. Best pizza near me! Authentic Italian pizza. Order online for delivery & pickup!",
        "datePublished": "<?php echo $datePublished; ?>",
        "dateModified": "<?php echo $dateModified; ?>",
        "inLanguage": "en-US",
        "isPartOf": {
            "@type": "WebSite",
            "name": "D'Angelo's Pizzeria & Restaurant",
            "url": "http://dangelosgunhill.com/"
        },
        "about": {
            "@type": "Restaurant",
            "name": "D'Angelo's Pizzeria & Restaurant"
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

    <!-- Featured Snippet Content - Hidden from users, visible to search engines -->
    <div class="sr-only" style="position: absolute; left: -9999px; width: 1px; height: 1px; overflow: hidden;">
        <h2>Frequently Asked Questions About D'Angelo's Pizza</h2>
        
        <h3>Where is D'Angelo's Pizza located?</h3>
        <p>D'Angelo's Pizza is located at 902 East Gun Hill Road in The Bronx, New York 10469. We are in the Gun Hill neighborhood of the Bronx.</p>
        
        <h3>What are D'Angelo's Pizza hours?</h3>
        <p>D'Angelo's Pizza is open Monday through Thursday from 11:00 AM to 10:00 PM, Friday and Saturday from 11:00 AM to 11:00 PM, and Sunday from 12:00 PM to 10:00 PM.</p>
        
        <h3>Does D'Angelo's Pizza deliver?</h3>
        <p>Yes, D'Angelo's Pizza offers delivery service. You can order online for delivery or pickup. We deliver throughout the Bronx area, including zip code 10469.</p>
        
        <h3>What is D'Angelo's Pizza phone number?</h3>
        <p>D'Angelo's Pizza phone number is (718) 928-3123. You can call to place an order or ask questions.</p>
        
        <h3>What type of food does D'Angelo's Pizza serve?</h3>
        <p>D'Angelo's Pizza serves authentic Italian pizza, fresh pasta dishes, classic Italian heroes, veal entrees, and calzones. We specialize in hand-tossed pizzas made with premium mozzarella and San Marzano tomatoes.</p>
        
        <h3>How do I order from D'Angelo's Pizza?</h3>
        <p>You can order from D'Angelo's Pizza by calling (718) 928-3123, ordering online through our website, or using our mobile app available on iOS and Android. We offer dine-in, takeout, and delivery options.</p>
        
        <h3>What is the best pizza near me in Bronx NY?</h3>
        <p>D'Angelo's Pizza on Gun Hill Road is the best pizza near me in Bronx NY. We've been serving authentic Italian pizza since 2004 with family recipes, fresh ingredients, and hand-tossed dough.</p>
        
        <h3>What makes D'Angelo's Pizza special?</h3>
        <p>D'Angelo's Pizza has been a family-owned restaurant since 2004, serving authentic Italian cuisine with family recipes passed down through generations. We use premium mozzarella, San Marzano tomatoes, and fresh ingredients daily.</p>
        
        <h3>Does D'Angelo's Pizza have a mobile app?</h3>
        <p>Yes, D'Angelo's Pizza has a mobile app available for both iOS and Android devices. The app allows you to order ahead, earn loyalty points, and access exclusive deals.</p>
        
        <h3>What is D'Angelo's Pizza rating?</h3>
        <p>D'Angelo's Pizza has a 4.5-star rating based on over 200 Google reviews. Customers consistently praise our authentic Italian pizza, fresh ingredients, and friendly service.</p>
    </div>

    <!-- FAQPage Schema for Featured Snippets -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "Where is D'Angelo's Pizza located?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza is located at 902 East Gun Hill Road in The Bronx, New York 10469. We are in the Gun Hill neighborhood of the Bronx."
                }
            },
            {
                "@type": "Question",
                "name": "What are D'Angelo's Pizza hours?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza is open Monday through Thursday from 11:00 AM to 10:00 PM, Friday and Saturday from 11:00 AM to 11:00 PM, and Sunday from 12:00 PM to 10:00 PM."
                }
            },
            {
                "@type": "Question",
                "name": "Does D'Angelo's Pizza deliver?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, D'Angelo's Pizza offers delivery service. You can order online for delivery or pickup. We deliver throughout the Bronx area, including zip code 10469."
                }
            },
            {
                "@type": "Question",
                "name": "What is D'Angelo's Pizza phone number?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza phone number is (718) 928-3123. You can call to place an order or ask questions."
                }
            },
            {
                "@type": "Question",
                "name": "What type of food does D'Angelo's Pizza serve?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza serves authentic Italian pizza, fresh pasta dishes, classic Italian heroes, veal entrees, and calzones. We specialize in hand-tossed pizzas made with premium mozzarella and San Marzano tomatoes."
                }
            },
            {
                "@type": "Question",
                "name": "How do I order from D'Angelo's Pizza?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can order from D'Angelo's Pizza by calling (718) 928-3123, ordering online through our website, or using our mobile app available on iOS and Android. We offer dine-in, takeout, and delivery options."
                }
            },
            {
                "@type": "Question",
                "name": "What is the best pizza near me in Bronx NY?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza on Gun Hill Road is the best pizza near me in Bronx NY. We've been serving authentic Italian pizza since 2004 with family recipes, fresh ingredients, and hand-tossed dough."
                }
            },
            {
                "@type": "Question",
                "name": "What makes D'Angelo's Pizza special?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza has been a family-owned restaurant since 2004, serving authentic Italian cuisine with family recipes passed down through generations. We use premium mozzarella, San Marzano tomatoes, and fresh ingredients daily."
                }
            },
            {
                "@type": "Question",
                "name": "Does D'Angelo's Pizza have a mobile app?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, D'Angelo's Pizza has a mobile app available for both iOS and Android devices. The app allows you to order ahead, earn loyalty points, and access exclusive deals."
                }
            },
            {
                "@type": "Question",
                "name": "What is D'Angelo's Pizza rating?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "D'Angelo's Pizza has a 4.5-star rating based on over 200 Google reviews. Customers consistently praise our authentic Italian pizza, fresh ingredients, and friendly service."
                }
            }
        ]
    }
    </script>

    <!-- HowTo Schema for Ordering Process -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to Order from D'Angelo's Pizza",
        "description": "Step-by-step guide on how to order pizza from D'Angelo's Pizza on Gun Hill Road in Bronx NY",
        "step": [
            {
                "@type": "HowToStep",
                "position": 1,
                "name": "Choose Your Ordering Method",
                "text": "You can order from D'Angelo's Pizza by calling (718) 928-3123, visiting our website at dangelosgunhill.com, or using our mobile app available on iOS and Android."
            },
            {
                "@type": "HowToStep",
                "position": 2,
                "name": "Select Your Items",
                "text": "Browse our menu of authentic Italian pizza, fresh pasta, classic heroes, veal entrees, and calzones. Popular items include D'Angelo's Special Pizza, Margherita Pizza, and Chicken Parmigiana."
            },
            {
                "@type": "HowToStep",
                "position": 3,
                "name": "Choose Delivery or Pickup",
                "text": "Select whether you want delivery to your address in the Bronx (zip code 10469) or pickup at our location at 902 East Gun Hill Road."
            },
            {
                "@type": "HowToStep",
                "position": 4,
                "name": "Complete Your Order",
                "text": "Provide your contact information and payment details. Orders can be paid online or in person upon pickup or delivery."
            },
            {
                "@type": "HowToStep",
                "position": 5,
                "name": "Receive Your Order",
                "text": "For delivery, your order will arrive hot and fresh. For pickup, visit D'Angelo's Pizza at 902 East Gun Hill Road during our business hours."
            }
        ]
    }
    </script>

    <!-- Article Schema for Key Information -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "D'Angelo's Pizza on Gun Hill Road - Best Pizza Near Me in Bronx NY",
        "description": "D'Angelo's Pizza is an authentic Italian pizzeria located at 902 East Gun Hill Road in The Bronx, New York. Serving the best pizza near me since 2004 with family recipes and fresh ingredients.",
        "author": {
            "@type": "Organization",
            "name": "D'Angelo's Pizzeria & Restaurant"
        },
        "publisher": {
            "@type": "Organization",
            "name": "D'Angelo's Pizzeria & Restaurant",
            "logo": {
                "@type": "ImageObject",
                "url": "https://assets2.ser.vi/restaurants/dangelosmaster/venuelogo/logo-D1.png"
            }
        },
        "datePublished": "<?php echo $datePublished; ?>",
        "dateModified": "<?php echo $dateModified; ?>",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "http://dangelosgunhill.com/"
        },
        "about": {
            "@type": "Restaurant",
            "name": "D'Angelo's Pizzeria & Restaurant",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "902 East Gun Hill Road",
                "addressLocality": "The Bronx",
                "addressRegion": "NY",
                "postalCode": "10469",
                "addressCountry": "US"
            }
        }
    }
    </script>

</body>

</html>

