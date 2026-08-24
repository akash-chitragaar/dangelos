# D'Angelo's Pizzeria & Restaurant - Website

Official website for D'Angelo's Pizzeria & Restaurant located at 902 E Gun Hill Rd, Bronx, NY.

## Features

- **JSON-Controlled Content**: All website content managed through a single `config.json` file
- **Mobile-responsive design**: Optimized for all devices
- **SEO optimized**: Complete meta tags, schema markup, and structured data
- **Google Maps integration**: Interactive location map
- **App download page**: Dedicated page with auto-detection for iOS/Android
- **Clean URL structure**: .htaccess rewrite rules for SEO-friendly URLs
- **Modern Italian-inspired UI**: Red, taupe, gold and cream color scheme
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

- **Main Domain**: https://dangelosgunhill.com → redirects to index.php
- **Home Page**: https://dangelosgunhill.com/home
- **Get App Page**: https://dangelosgunhill.com/getapp

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
│   │   └── playstore.webp         # Google Play button
│   └── js/
│       ├── main.js                # Main JavaScript
│       └── reviews.js             # Legacy - not loaded by any page
├── api/
│   └── reviews-api-wrapper.php    # Server-side Reviews API proxy
├── includes/
│   ├── header.php                 # Unused - both pages inline their own head
│   └── footer.php                 # Unused
├── sections/
│   ├── navbar.php                 # Navigation bar
│   ├── hero.php                   # Hero section
│   ├── about.php                  # About section
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
  "primary": "#b83232",      // D'Angelo's red
  "secondary": "#8b7355",    // Warm taupe
  "accent": "#d4af37",       // Gold
  "light": "#f5f0e8",        // Cream
  "dark": "#2c1810",         // Deep brown
  "gray": "#6c757d"
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
6. Enforce HTTPS at the Cloudflare edge - never in .htaccess (see Hosting & Deployment)
7. Update Google Maps embed URL in `config.json`

## Google Maps Setup

1. Go to [Google Maps](https://www.google.com/maps)
2. Search for your restaurant
3. Click "Share" → "Embed a map"
4. Copy the iframe URL
5. Paste it into `config.json` under `locations.mapEmbed`

## Hosting & Deployment

The site is served through **Cloudflare** - TLS terminates at the Cloudflare
edge, and Cloudflare may reach the origin over plain HTTP.

### Never force HTTPS in .htaccess

Because Cloudflare can talk to the origin over HTTP, `%{HTTPS}` is `off` on
the origin for **every** request. This rule therefore redirects every URL to
itself forever and takes the entire site down:

```apache
# NEVER enable this on this site - it caused a full outage
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

Adding an `X-Forwarded-Proto` guard does **not** reliably prevent it - that was
tried and the loop still happened. Enforce HTTPS at the edge instead:

- Cloudflare -> SSL/TLS -> Edge Certificates -> **Always Use HTTPS**, or
- Cloudflare -> SSL/TLS -> set mode to **Full**

The `Force HTTPS` block in `.htaccess` is intentionally commented out. Leave it
that way.

### If the site ever 301s to itself

1. cPanel -> File Manager -> enable **Show Hidden Files**
2. Rename `.htaccess` to `.htaccess.bak` - the site returns immediately
   (only the `/home` and `/getapp` clean URLs stop working)
3. Restore a known-good `.htaccess`, with the HTTPS block commented out

### Deploying

Pushing to `main` does **not** by itself update the live site - the server does
not pull automatically. A deploy has to be run for changes to appear.

### Testing .htaccess changes first

Rewrite changes must be exercised against real Apache over **plain HTTP**,
since that is how Cloudflare reaches the origin:

```bash
curl -sI -L --max-redirs 5 http://127.0.0.1:8899/
```

A healthy root request returns `200` with **zero** redirects. Note the stock
`.htaccess` uses Apache 2.2 `Order`/`Deny` directives, so a local test server
needs `mod_access_compat` loaded or it will return 500.

## Technologies Used

- PHP 7.4+
- HTML5
- CSS3 (Custom styling with Italian theme)
- JavaScript (Vanilla)
- Bootstrap 5.3.2
- Bootstrap Icons 1.11.1
- Google Fonts (Playfair Display & Roboto)
- Reviews API (via apireviews.restaurant.ink)

## Google Reviews Integration

The website displays live Google reviews fetched from the centralized Reviews API:

### Features:
- **Live Reviews**: Displays 4 and 5-star reviews from Google
- **Automatic Caching**: 24-hour cache reduces API costs by 99%
- **Fallback System**: Static reviews shown if API unavailable
- **Secure**: API keys never exposed to frontend
- **Fast Loading**: Cached responses for instant page loads

### How It Works:
1. The inline script in `sections/testimonials.php` calls `api/reviews-api-wrapper.php` same-origin
2. The wrapper adds the private API key and calls the Reviews API server-side
3. Reviews API fetches from Google Places API; the response is cached for 24 hours
4. Ratings below 2 stars are filtered out server-side, then rendered in the testimonials section

### Configuration:
Reviews API settings in `config.json`:
```json
// config.json -> restaurant.api
"api": {
  "restaurantId": "dangelospizzeria",
  "googlePlaceId": "ChIJL_5Er0DzwokRNy6jM7_DyGY",
  "reviewsApiUrl": "https://apireviews.restaurant.ink",
  "apiKey": "da_live_pk_xxxxxxxxxxxxxxxx"   // real key lives in config.json, not in docs
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
- **Colors**: D'Angelo's red with taupe, gold and cream accents
- **Typography**: Playfair Display (headings) + Roboto (body)
- **Style**: Elegant, warm, family-friendly
- **Imagery**: Focus on food photography and brick oven authenticity

## Developer

Developed by Ser.vi Worldwide LLC

## Support

For support or customization requests, contact: sal@ser.vi

## License

© 2025 D'Angelo's Pizzeria & Restaurant. All Rights Reserved.

