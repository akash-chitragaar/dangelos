# App Store Buttons Guide

## Where to Get Official Buttons

### Apple App Store
**Official Guidelines**: https://developer.apple.com/app-store/marketing/guidelines/

**Download Badge**:
1. Visit: https://developer.apple.com/app-store/marketing/guidelines/#downloadOnAppstore
2. Select your language/region
3. Download the "Download on the App Store" badge
4. Save as `appstore.webp` (or convert PNG to WebP)

**Specifications**:
- Minimum height: 40px
- Maintain aspect ratio
- Don't modify colors or design
- Use black badge on light backgrounds

### Google Play Store
**Official Guidelines**: https://play.google.com/intl/en_us/badges/

**Download Badge**:
1. Visit: https://play.google.com/intl/en_us/badges/
2. Select your language
3. Download the "Get it on Google Play" badge
4. Save as `playstore.webp` (or convert PNG to WebP)

**Specifications**:
- Minimum height: 40px
- Maintain aspect ratio
- Don't modify colors or design
- Use standard badge (not custom)

## Quick Download Links

### Apple App Store Badge
- **English**: https://developer.apple.com/app-store/marketing/guidelines/images/badge-download-on-the-app-store.svg
- Convert SVG to WebP using: https://cloudconvert.com/svg-to-webp

### Google Play Badge
- **English**: https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png
- Convert PNG to WebP using: https://squoosh.app/

## Image Conversion

### Recommended Tools
1. **Squoosh** (Online): https://squoosh.app/
   - Upload PNG/SVG
   - Select WebP format
   - Adjust quality (80-90%)
   - Download

2. **CloudConvert** (Online): https://cloudconvert.com/
   - Supports SVG to WebP
   - Batch conversion
   - Free tier available

3. **ImageMagick** (Command Line):
```bash
# Convert PNG to WebP
convert appstore.png -quality 90 appstore.webp

# Convert SVG to WebP
convert -density 300 appstore.svg -quality 90 appstore.webp
```

## Current Implementation

The website expects these files:
- `assets/images/appstore.webp` - Apple App Store badge
- `assets/images/playstore.webp` - Google Play Store badge

**Dimensions Used**:
- Desktop: max-width 280px
- Mobile: max-width 220px
- Height: 50px (auto-scaled)

## Alternative: Use PNG

If WebP conversion is difficult, you can use PNG:
1. Download official badges as PNG
2. Rename to `appstore.png` and `playstore.png`
3. Update references in:
   - `sections/app-banner.php`
   - `getapp.php`

Change:
```html
<img src="assets/images/appstore.webp" alt="...">
```

To:
```html
<img src="assets/images/appstore.png" alt="...">
```

## Optimization Tips

### File Size Targets
- App Store badge: < 50KB
- Play Store badge: < 50KB

### Optimization Tools
- **TinyPNG**: https://tinypng.com/
- **Squoosh**: https://squoosh.app/
- **ImageOptim** (Mac): https://imageoptim.com/

### WebP Benefits
- 25-35% smaller than PNG
- Better compression
- Supported by all modern browsers
- Faster page load times

## Legal Requirements

### Apple App Store
✅ **Must**:
- Use official badge
- Maintain aspect ratio
- Keep minimum size (40px height)
- Link to your app's App Store page

❌ **Don't**:
- Modify badge design
- Change colors
- Add effects or shadows
- Use outdated badges

### Google Play Store
✅ **Must**:
- Use official badge
- Maintain aspect ratio
- Keep minimum size (40px height)
- Link to your app's Play Store page

❌ **Don't**:
- Modify badge design
- Change colors
- Add text to badge
- Use custom badges

## Testing

After adding badges:
1. Check desktop view (280px width)
2. Check mobile view (220px width)
3. Verify hover effects work
4. Test links to app stores
5. Verify images load quickly

## Fallback

If you can't get official badges immediately, you can use these temporary alternatives:

### Temporary Buttons (CSS-only)
Replace image with styled button:
```html
<a href="..." class="temp-app-button">
  <i class="bi bi-apple"></i> Download on App Store
</a>
```

**Note**: Replace with official badges before launch!

## Questions?

For official badge usage questions:
- **Apple**: https://developer.apple.com/contact/
- **Google**: https://support.google.com/googleplay/android-developer/

For website implementation:
- **Developer**: sal@ser.vi

