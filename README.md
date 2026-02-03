# My Portfolio - WordPress Theme

A high-performance WordPress theme converted from Next.js, maintaining pixel-perfect design and optimized for event management portfolios.

## Overview

This theme is a direct conversion of a Next.js portfolio application into WordPress, preserving the exact design, layout, and user experience while making content fully editable through WordPress and Advanced Custom Fields (ACF).

## Features

- ✅ Pixel-perfect conversion from Next.js to WordPress
- ✅ Single-page portfolio with smooth scrolling
- ✅ Sticky navigation with scroll detection
- ✅ Advanced Custom Fields (ACF) ready for dynamic content
- ✅ Fully responsive design
- ✅ SEO optimized
- ✅ Performance optimized (compiled CSS/JS from Next.js)
- ✅ Accessibility compliant
- ✅ Dark theme with yellow accents
- ✅ Intersection Observer animations
- ✅ Testimonial carousel with autoplay

## Requirements

- WordPress 6.0 or higher
- PHP 8.0 or higher
- Advanced Custom Fields Pro (recommended) or ACF Free
- Modern browser with ES6 support

## Installation

1. **Upload Theme**
   ```bash
   # Copy the entire my-portfolio folder to:
   wp-content/themes/my-portfolio
   ```

2. **Activate Theme**
   - Go to WordPress Admin → Appearance → Themes
   - Activate "My Portfolio"

3. **Install Required Plugins**
   - Install Advanced Custom Fields (ACF) Pro or Free
   - Activate the plugin

4. **Set Up ACF Fields** (see ACF Setup section below)

5. **Import Assets** (see Migration Guide section)

## File Structure

```
my-portfolio/
├── style.css                      # Theme header
├── functions.php                  # Theme functions and setup
├── header.php                     # HTML head and navbar
├── footer.php                     # Footer and closing tags
├── front-page.php                 # Home page template
├── page.php                       # Default page template
├── single.php                     # Single post template
├── index.php                      # Blog archive template
├── assets/
│   ├── css/
│   │   ├── compiled-nextjs.css   # Compiled CSS from Next.js
│   │   └── custom.css            # WordPress-specific styles
│   ├── js/
│   │   └── main.js               # Converted React functionality
│   └── images/                   # Theme images
└── template-parts/
    ├── navbar.php                # Sticky navigation component
    └── sections/
        ├── hero.php              # Hero section
        ├── timeline.php          # Timeline section
        ├── portfolio.php         # Portfolio projects
        ├── strengths.php         # Core strengths
        ├── services.php          # Services offered
        ├── gallery.php           # Image gallery
        ├── testimonials.php      # Testimonials carousel
        └── cta.php               # Call-to-action section
```

## ACF Setup

### Required Field Groups

Create these field groups in ACF (apply to "Front Page"):

#### 1. Hero Section
- `hero_title` (Text) - Default: "Aryan Lohia"
- `hero_role` (Text) - Default: "Event Management & Operations Lead"
- `hero_subtitle` (Textarea) - Hero tagline
- `hero_description` (Textarea) - Intro paragraph
- `hero_image` (Image) - Hero portrait

#### 2. Portfolio Projects
- `portfolio_projects` (Repeater)
  - `project_title` (Text)
  - `project_role` (Text)
  - `project_stats` (Repeater)
    - `stat` (Text)
  - `project_image` (Image)
  - `project_link` (URL)

#### 3. Timeline Events
- `timeline_events` (Repeater)
  - `event_title` (Text)
  - `event_role` (Text)
  - `event_impact` (Textarea)
  - `event_image` (Image)
  - `event_year` (Text)

#### 4. Strengths
- `strengths` (Repeater)
  - `strength_number` (Text) - e.g., "01"
  - `strength_title` (Text)
  - `strength_description` (Textarea)

#### 5. Services
- `services` (Repeater)
  - `service_title` (Text)
  - `service_description` (Textarea)
  - `service_icon` (Text) - Emoji

#### 6. Testimonials
- `testimonials` (Repeater)
  - `testimonial_name` (Text)
  - `testimonial_role` (Text)
  - `testimonial_company` (Text)
  - `testimonial_quote` (Textarea)

#### 7. Gallery
- `gallery_images` (Gallery)

#### 8. CTA Section
- `cta_headline` (Text)
- `cta_description` (Textarea)
- `cta_whatsapp_number` (Text) - e.g., "917864955155"
- `cta_email` (Email)
- `cta_phone` (Text)

## Extracting CSS from Next.js Build

To ensure 100% identical styling:

1. **Build Next.js Project**
   ```bash
   cd v0-portfolio-website-build
   npm run build
   ```

2. **Find Compiled CSS**
   ```bash
   # CSS files are in:
   .next/static/css/*.css
   ```

3. **Copy to Theme**
   ```bash
   # Concatenate all CSS files into one:
   cat .next/static/css/*.css > ../wordpress-theme/my-portfolio/assets/css/compiled-nextjs.css
   ```

## Migration Checklist

See `MIGRATION-GUIDE.md` for detailed step-by-step instructions.

## Customization

### Changing Colors
Edit CSS variables in `assets/css/compiled-nextjs.css` or `assets/css/custom.css`

### Modifying Sections
Edit template parts in `template-parts/sections/`

### Adding New Pages
Create page templates like `page-about.php` for custom layouts

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance

- Minified CSS/JS (from Next.js build)
- Lazy loading images
- Optimized animations with CSS transitions
- Intersection Observer for scroll effects
- No jQuery dependency

## Credits

- Original Design: Next.js + Tailwind CSS
- Theme Conversion: WordPress + ACF
- Icons: Embedded SVG
- Fonts: System fonts

## Support

For issues or questions:
- Email: aryanlohia2346@gmail.com
- Phone: +91 786 495 5155

## License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

## Changelog

### Version 1.0.0
- Initial release
- Complete Next.js to WordPress conversion
- ACF integration
- All sections implemented
- Mobile responsive
- SEO optimized

# my-portfolio-theme
# my-portfolio-theme
