# D'Angelo's Pizzeria & Restaurant - Website

Official website for D'Angelo's Pizzeria & Restaurant located at 902 E Gun Hill Rd, Bronx, NY.

## Features

- **JSON-Controlled Content**: All website content managed through a single `config.json` file
- **Mobile-responsive design**: Optimized for all devices
- **SEO optimized**: Complete meta tags, schema markup, and structured data
- **Google Maps integration**: Interactive location map
- **App download page**: Dedicated page with auto-detection for iOS/Android
- **Clean URL structure**: .htaccess rewrite rules for SEO-friendly URLs
- **Modern Italian-inspired UI**: Red, green, and cream color scheme
- **Performance optimized**: Lazy loading, caching, and optimized assets
- **Reviews API Integration**: Live Google reviews with 24-hour caching

## Pages

1. **Home Page** (`index.php`) - Main landing page with:
   - Hero section with call-to-action
   - About section with stats
   - Menu highlights (8 featured items)
   - Customer testimonials (Google Reviews)
   - Location & hours
   - App download banner
   - Footer with contact info

2. **Get App Page** (`getapp.php`) - Mobile app download page with:
   - Auto-detection of iOS/Android devices
   - Direct links to App Store and Google Play
   - Feature highlights
   - Mobile-optimized design

## URLs

- **Main Domain**: http://dangelosgunhill.com → redirects to index.php
- **Home Page**: http://dangelosgunhill.com/home
- **Get App Page**: http://dangelosgunhill.com/getapp

## App Store Links

- **iOS App Store**: https://apps.apple.com/us/app/dangelos-pizzeria-gun-hill/id6670161824
- **Google Play Store**: https://play.google.com/store/apps/details?id=com.wnapp.id1724742264743

## File Structure

```
dangelos/
├── assets/
│   ├── css/
│   │   └── style.css              # Main stylesheet (Italian theme)
│   ├── images/
│   │   ├── appstore.webp          # App Store button
│   │   ├── playstore.webp         # Google Play button
│   │   ├── logo.png               # Restaurant logo
│   │   ├── hero-bg.jpg            # Hero background
│   │   ├── about-pizza.jpg        # About section image
│   │   ├── app-mockup.webp        # App mockup image
│   │   └── og-image.webp          # Social media preview
│   └── js/
│       ├── main.js                # Main JavaScript
│       └── reviews.js             # Google Reviews integration
├── sections/
│   ├── navbar.php                 # Navigation bar
│   ├── hero.php                   # Hero section
│   ├── about.php                  # About section
│   ├── menu.php                   # Menu highlights
│   ├── testimonials.php           # Customer reviews
│   ├── location.php               # Location & hours
│   ├── app-banner.php             # App download banner
│   └── footer.php                 # Footer section
├── config.json                    # ⭐ MAIN CONFIGURATION FILE
├── index.php                      # Main landing page
├── getapp.php                     # App download page
├── .htaccess                      # URL rewrite rules
├── robots.txt                     # Search engine directives
├── sitemap.xml                    # SEO sitemap
└── readme.md                      # Documentation
```

## Configuration

### Editing Content

All website content is controlled by `config.json`. Simply edit this file to update:

- Restaurant name, tagline, and description
- Contact information (phone, email, address)
- Business hours
- Social media links
- Brand colors (primary, secondary, accent)
- Hero section content
- About section content and stats
- Menu highlights (featured items)
- Google Maps location
- Reviews API configuration

### Brand Colors

Current colors (defined in `config.json`):
```json
"colors": {
  "primary": "#c41e3a",      // Italian red
  "secondary": "#2d5016",    // Italian green
  "accent": "#f4a460",       // Sandy brown/tan
  "light": "#faf8f3",        // Cream
  "dark": "#1a1a1a"          // Almost black
}
```

### Menu Items

To feature menu items on the homepage, set `"featured": true` in the `menuHighlights` array in `config.json`.

## Setup Instructions

1. Upload all files to your web server
2. Ensure PHP 7.4+ is enabled on your server
3. Verify .htaccess is working for clean URLs
4. Edit `config.json` to customize your content
5. Replace placeholder images in `assets/images/`
6. Configure SSL certificate for HTTPS (recommended)
7. Update Google Maps embed URL in `config.json`

## Google Maps Setup

1. Go to [Google Maps](https://www.google.com/maps)
2. Search for your restaurant
3. Click "Share" → "Embed a map"
4. Copy the iframe URL
5. Paste it into `config.json` under `locations.mapEmbed`

## Technologies Used

- PHP 7.4+
- HTML5
- CSS3 (Custom styling with Italian theme)
- JavaScript (Vanilla)
- Bootstrap 5.3.2
- Bootstrap Icons 1.11.1
- Google Fonts (Playfair Display & Roboto)
- Reviews API (via reviewsapi.restaurant.ink)

## Google Reviews Integration

The website displays live Google reviews fetched from the centralized Reviews API:

### Features:
- **Live Reviews**: Displays 4 and 5-star reviews from Google
- **Automatic Caching**: 24-hour cache reduces API costs by 99%
- **Fallback System**: Static reviews shown if API unavailable
- **Secure**: API keys never exposed to frontend
- **Fast Loading**: Cached responses for instant page loads

### How It Works:
1. Frontend (`reviews.js`) calls Reviews API
2. Reviews API fetches from Google Places API
3. Response cached for 24 hours
4. Reviews displayed in testimonials section

### Configuration:
Reviews API settings in `config.json`:
```json
"api": {
  "restaurantId": "dangelospizzeria",
  "googlePlaceId": "ChIJL_5Er0DzwokRNy6jM7_DyGY",
  "reviewsApiUrl": "https://reviewsapi.restaurant.ink",
  "apiKey": "da_live_pk_7f8e9d0a1b2c3d4e5f6a7b8c9d0e1f2a"
}
```

### Testing:
Test API integration by checking browser console for review loading messages.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Features

- Lazy loading for images
- Browser caching via .htaccess
- Optimized CSS and JavaScript
- Smooth scroll animations
- Back-to-top button
- Mobile-first responsive design
- Intersection Observer for scroll animations

## SEO Features

- Structured data (JSON-LD)
- Open Graph tags
- Twitter Card tags
- Canonical URLs
- Sitemap.xml
- Robots.txt
- Geo-location meta tags
- Local business schema
- Optimized meta descriptions
- Keyword-rich content

## Design Theme

The website features an authentic Italian-inspired design:
- **Colors**: Italian flag colors (red, green) with cream accents
- **Typography**: Playfair Display (headings) + Roboto (body)
- **Style**: Elegant, warm, family-friendly
- **Imagery**: Focus on food photography and brick oven authenticity

## Developer

Developed by Ser.vi Worldwide LLC

## Support

For support or customization requests, contact: sal@ser.vi

## License

© 2025 D'Angelo's Pizzeria & Restaurant. All Rights Reserved.

