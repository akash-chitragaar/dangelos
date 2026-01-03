<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title><?php echo isset($page_title) ? $page_title : "D'Angelo's Pizzeria & Restaurant | Best Pizza in Bronx"; ?></title>
    <meta name="title" content="<?php echo isset($page_title) ? $page_title : "D'Angelo's Pizzeria & Restaurant | Best Pizza in Bronx"; ?>">
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : "Authentic Italian pizza & restaurant in Bronx. Fresh ingredients, family recipes. Order online!"; ?>">
    <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : "pizza bronx, italian restaurant, dangelos pizza"; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo isset($page_url) ? $page_url : 'http://dangelosgunhill.com/'; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo isset($page_type) ? $page_type : 'website'; ?>">
    <meta property="og:url" content="<?php echo isset($page_url) ? $page_url : 'http://dangelosgunhill.com/'; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : "D'Angelo's Pizzeria & Restaurant"; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : "Authentic Italian pizza & restaurant in Bronx"; ?>">
    <meta property="og:image" content="<?php echo isset($page_image) ? $page_image : 'http://dangelosgunhill.com/assets/images/og-image.webp'; ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo isset($page_url) ? $page_url : 'http://dangelosgunhill.com/'; ?>">
    <meta property="twitter:title" content="<?php echo isset($page_title) ? $page_title : "D'Angelo's Pizzeria & Restaurant"; ?>">
    <meta property="twitter:description" content="<?php echo isset($page_description) ? $page_description : "Authentic Italian pizza & restaurant in Bronx"; ?>">
    <meta property="twitter:image" content="<?php echo isset($page_image) ? $page_image : 'http://dangelosgunhill.com/assets/images/og-image.webp'; ?>">
    
    <?php if (isset($breadcrumb_schema)) echo $breadcrumb_schema; ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
</head>
<body>

