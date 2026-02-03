# Changelog

All notable changes to the My Portfolio WordPress theme.

---

## [1.1.0] - 2025-11-15

### ✨ Added
- **Social Media Links Integration**
  - LinkedIn icon in hero section (top-right corner)
  - Instagram icon in hero section
  - Twitter/X icon support (optional)
  - Facebook icon support (optional)
  - Social media icons in CTA section (footer area)
  - New ACF field group "Social Media Links" with 4 URL fields
  - Floating icon design with glassmorphism effect
  - Yellow hover effects matching site theme
  - Scale animations on hover (1.1x)
  - Mobile-responsive positioning

### 📝 Changed
- Updated `template-parts/sections/hero.php` - Added floating social icons
- Updated `template-parts/sections/cta.php` - Added social links below contact info
- Updated `acf-fields-template.json` - Added 9th field group for social media
- Updated `functions.php` - Documented new ACF fields
- CTA contact info margin adjusted for better spacing

### 🔒 Security
- All social URLs sanitized with `esc_url()`
- `noopener noreferrer` attributes on all external links
- Proper ARIA labels for accessibility

### 📱 Responsive
- Icons visible on all screen sizes
- Touch-friendly 48px size on hero
- Proper spacing maintained on mobile
- No layout breaks on small screens

---

## [1.0.0] - 2025-11-15

### 🎉 Initial Release
- Complete Next.js to WordPress conversion
- 8 ACF field groups covering all sections
- Hero, Timeline, Portfolio, Strengths, Services, Gallery, Testimonials, CTA sections
- Sticky navigation with scroll detection
- Smooth scrolling animations
- Testimonial carousel with autoplay
- Mobile-responsive design
- SEO-optimized structure
- Performance-optimized assets
- Complete documentation (README, Migration Guide, Deployment Checklist)
- 20+ PHP template files
- Vanilla JavaScript (no jQuery)
- Tailwind CSS compilation support
- 20+ images included

---

## Default Values

### Social Media
- LinkedIn: `https://www.linkedin.com/in/aryan-lohia`
- Instagram: `https://www.instagram.com/kaalrav/?hl=en`
- Twitter: Empty (hidden)
- Facebook: Empty (hidden)

### Contact Info
- Phone: `+917864955155`
- Email: `aryanlohia2346@gmail.com`
- WhatsApp: `917864955155`

---

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile Safari (iOS 12+)
- Chrome Mobile (Android 8+)

---

## Known Issues

### Version 1.1.0
- None

### Version 1.0.0
- Screenshot.png needs to be created manually (see screenshot.txt)

---

## Upgrade Guide

### From 1.0.0 to 1.1.0

1. **Backup your site** (database + files)

2. **Update theme files:**
   ```bash
   # Replace these files:
   - template-parts/sections/hero.php
   - template-parts/sections/cta.php
   - acf-fields-template.json
   - functions.php
   ```

3. **Import updated ACF fields:**
   - Go to ACF → Tools → Export
   - Export existing field groups (backup)
   - Go to ACF → Tools → Import
   - Upload new `acf-fields-template.json`

4. **Set social media URLs:**
   - Go to Pages → Home → Edit
   - Find "Social Media Links" field group
   - URLs are pre-filled with defaults
   - Update if needed

5. **Test:**
   - Visit homepage
   - Verify social icons appear in hero (top-right)
   - Scroll to CTA section
   - Verify social icons appear below contact info
   - Click icons to test links

6. **Clear cache:**
   ```bash
   wp cache flush
   # Or via plugin (WP Super Cache, etc.)
   ```

---

## Roadmap

### Planned for 1.2.0
- [ ] Additional social networks (GitHub, YouTube, TikTok)
- [ ] Social share buttons for blog posts
- [ ] Open Graph tags optimization
- [ ] Twitter Card integration

### Planned for 1.3.0
- [ ] Contact form integration (Contact Form 7 support)
- [ ] Newsletter signup form
- [ ] Google Analytics integration helper
- [ ] Schema.org markup enhancement

### Planned for 2.0.0
- [ ] Gutenberg block support
- [ ] Theme customizer options
- [ ] Multiple color scheme options
- [ ] Font selector
- [ ] Layout variants

---

## Contributing

Found a bug? Have a feature request?

**Contact:**
- Email: aryanlohia2346@gmail.com
- Phone: +91 786 495 5155
- LinkedIn: https://www.linkedin.com/in/aryan-lohia

---

## Credits

**Original Design:** Next.js + Tailwind CSS  
**WordPress Conversion:** Aryan Lohia  
**Framework:** WordPress 6.0+  
**Dependencies:** Advanced Custom Fields  

**Icons:** SVG icons from respective social media brands  
**Fonts:** System fonts (no external dependencies)  
**Animations:** CSS transitions (no animation libraries)

---

## License

GNU General Public License v2 or later  
http://www.gnu.org/licenses/gpl-2.0.html

---

**Last Updated:** November 15, 2025  
**Current Version:** 1.1.0  
**Stability:** Stable ✅

