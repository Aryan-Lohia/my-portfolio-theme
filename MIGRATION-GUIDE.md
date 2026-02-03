# Migration Guide: Next.js to WordPress Theme

Complete step-by-step guide to migrate your Next.js portfolio to WordPress.

## Prerequisites

- WordPress installed and running
- SSH/FTP access to server
- WP-CLI installed (optional but recommended)
- Advanced Custom Fields plugin
- Original Next.js project built and ready

---

## Phase 1: Theme Installation

### Step 1: Build Next.js Project

```bash
cd v0-portfolio-website-build
npm run build
```

### Step 2: Extract Compiled CSS

```bash
# Navigate to the build output
cd .next/static/css

# Combine all CSS files
cat *.css > ~/Desktop/portfolio/wordpress-theme/my-portfolio/assets/css/compiled-nextjs.css

# Go back to project root
cd ../../../
```

### Step 3: Copy Public Assets

```bash
# Copy all images from Next.js public folder to WordPress theme
cp -r public/* ~/Desktop/portfolio/wordpress-theme/my-portfolio/assets/images/
```

### Step 4: Upload Theme to WordPress

```bash
# Zip the theme
cd ~/Desktop/portfolio/wordpress-theme
zip -r my-portfolio.zip my-portfolio

# Upload via WP Admin → Appearance → Themes → Add New → Upload
# OR via SSH:
scp my-portfolio.zip user@yourserver.com:/path/to/wp-content/themes/
ssh user@yourserver.com
cd /path/to/wp-content/themes/
unzip my-portfolio.zip
```

### Step 5: Activate Theme

```bash
# Via WP-CLI:
wp theme activate my-portfolio

# OR via Admin:
# Go to Appearance → Themes → Activate "My Portfolio"
```

---

## Phase 2: Plugin Installation

### Install Advanced Custom Fields

```bash
# Via WP-CLI:
wp plugin install advanced-custom-fields --activate

# For ACF Pro (if you have license):
# Download from ACF website and upload via Admin
```

---

## Phase 3: Content Setup

### Step 1: Create Front Page

```bash
# Via WP-CLI:
wp post create --post_type=page --post_title='Home' --post_status=publish --post_name=home

# Set as front page:
wp option update show_on_front 'page'
wp option update page_on_front $(wp post list --post_type=page --name=home --format=ids)
```

**OR via Admin:**
1. Go to Pages → Add New
2. Title: "Home"
3. Publish
4. Go to Settings → Reading
5. Set "Your homepage displays" to "A static page"
6. Select "Home" as Homepage

### Step 2: Create Blog Page (Optional)

```bash
# Via WP-CLI:
wp post create --post_type=page --post_title='Blog' --post_status=publish --post_name=blog
wp option update page_for_posts $(wp post list --post_type=page --name=blog --format=ids)
```

---

## Phase 4: ACF Field Setup

### Option A: Manual Setup (Recommended for Learning)

1. Go to **ACF → Field Groups → Add New**
2. Create field groups as documented in README.md
3. Set location rules to show on "Front Page"

### Option B: Import from JSON (Faster)

Create a file `acf-export.json` with this structure:

```json
{
  "key": "group_hero_section",
  "title": "Hero Section",
  "fields": [
    {
      "key": "field_hero_title",
      "label": "Hero Title",
      "name": "hero_title",
      "type": "text",
      "default_value": "Aryan Lohia"
    },
    {
      "key": "field_hero_role",
      "label": "Hero Role",
      "name": "hero_role",
      "type": "text",
      "default_value": "Event Management & Operations Lead"
    }
    // ... Add all other fields
  ],
  "location": [
    [
      {
        "param": "page_type",
        "operator": "==",
        "value": "front_page"
      }
    ]
  ]
}
```

Import via: **ACF → Tools → Import Field Groups**

---

## Phase 5: Content Migration

### Import Images to Media Library

```bash
# Via WP-CLI:
wp media import assets/images/*.jpg --post_id=0 --title="Event Photo" --featured_image

# OR batch import all:
for file in assets/images/*.jpg; do
  wp media import "$file"
done
```

**OR via Admin:**
1. Go to Media → Add New
2. Upload all images from `v0-portfolio-website-build/public/`

### Populate ACF Fields

#### Via Admin (Manual):
1. Go to **Pages → Home → Edit**
2. Scroll down to ACF field groups
3. Fill in all fields with content from Next.js components

#### Example Content Mapping:

**Hero Section:**
- Title: "Aryan Lohia"
- Role: "Event Management & Operations Lead"
- Subtitle: "The behind-the-scenes force who makes your event look effortless."
- Description: "With 4+ years in event operations..."
- Image: Upload professional-event-manager-portrait.jpg

**Portfolio Projects (Repeater):**

Row 1:
- Title: "TEDx SMIT 2023"
- Role: "Licensee & Main Organizer"
- Stats (sub-repeater):
  - "300 paid attendees"
  - "Celebrities & ISRO Deputy Chief"
  - "Mazitar, Sikkim"
- Image: tedx-conference-event.jpg
- Link: https://www.ted.com/tedx/events/55864

(Repeat for other projects...)

**Timeline Events (Repeater):**
- Follow the same pattern from timeline-section.tsx

**Testimonials (Repeater):**
- Name: "Prof. Dr. G L Sharma"
- Role: "Director"
- Company: "Sikkim Manipal Institute of Technology"
- Quote: "Aryan's vision transformed TEDx..."

(Repeat for all testimonials...)

---

## Phase 6: Configure WordPress Settings

### General Settings

```bash
# Via WP-CLI:
wp option update blogname 'Aryan Lohia - Event Management'
wp option update blogdescription 'Professional Event Management & Operations'
wp option update timezone_string 'Asia/Kolkata'
```

### Permalink Settings

```bash
# Set pretty permalinks:
wp rewrite structure '/%postname%/'
wp rewrite flush
```

### Navigation Menus

```bash
# Create primary menu:
wp menu create "Primary Menu"
wp menu location assign primary-menu primary

# Add menu items:
wp menu item add-custom primary-menu "Portfolio" "#portfolio"
wp menu item add-custom primary-menu "Experience" "#timeline"
wp menu item add-custom primary-menu "Contact" "#cta"
```

**OR via Admin:**
1. Go to Appearance → Menus
2. Create "Primary Menu"
3. Add Custom Links with anchors (#portfolio, #timeline, #cta)
4. Assign to "Primary Menu" location

---

## Phase 7: Performance Optimization

### Enable Caching

```bash
# Install a caching plugin:
wp plugin install wp-super-cache --activate
wp super-cache enable
```

### Optimize Images

```bash
# Install image optimization plugin:
wp plugin install ewww-image-optimizer --activate
```

### Minify Assets (Optional)

```bash
# Install Autoptimize:
wp plugin install autoptimize --activate
```

**Configuration:**
1. Go to Settings → Autoptimize
2. Check "Optimize JavaScript Code"
3. Check "Optimize CSS Code"
4. Save

---

## Phase 8: SEO Setup

### Install Yoast SEO

```bash
wp plugin install wordpress-seo --activate
```

### Configure SEO Settings

```bash
# Set site title and description:
wp option update blogname 'Aryan Lohia | Event Management Expert'
wp option update blogdescription 'Professional event management and operations with 4+ years of experience. Specializing in TEDx, corporate events, and large-scale productions.'
```

**Manual Configuration:**
1. Go to SEO → General
2. Fill in Organization info
3. Add social profiles
4. Configure XML sitemaps

---

## Phase 9: Database Search & Replace (If Migrating Domains)

If you're moving from a staging site to production:

```bash
# Backup first!
wp db export backup.sql

# Search and replace URLs:
wp search-replace 'http://staging.example.com' 'https://production.com' --all-tables

# Flush cache:
wp cache flush
wp rewrite flush
```

---

## Phase 10: Testing & Quality Assurance

### Test Checklist

- [ ] All sections visible on homepage
- [ ] Sticky navbar appears on scroll
- [ ] Smooth scrolling works
- [ ] Portfolio project links open correctly
- [ ] Timeline animations trigger on scroll
- [ ] Testimonial carousel auto-rotates
- [ ] Gallery images load properly
- [ ] CTA buttons link to WhatsApp/email/phone
- [ ] Mobile responsive design works
- [ ] All images load correctly
- [ ] Forms work (if any)
- [ ] SEO meta tags present

### Performance Testing

```bash
# Test site speed:
# Use Google PageSpeed Insights: https://pagespeed.web.dev/
# Use GTmetrix: https://gtmetrix.com/

# Check for broken links:
wp plugin install broken-link-checker --activate
```

### Browser Testing

Test in:
- Chrome (Desktop & Mobile)
- Firefox
- Safari (Desktop & iOS)
- Edge
- Samsung Internet

---

## Phase 11: Security Hardening

### Security Plugins

```bash
# Install Wordfence:
wp plugin install wordfence --activate

# Install Limit Login Attempts:
wp plugin install limit-login-attempts-reloaded --activate
```

### File Permissions

```bash
# Set correct permissions:
find /path/to/wordpress -type d -exec chmod 755 {} \;
find /path/to/wordpress -type f -exec chmod 644 {} \;
chmod 600 wp-config.php
```

### Hide WordPress Version

```bash
# Already handled in functions.php with:
# remove_action('wp_head', 'wp_generator');
```

---

## Phase 12: Backup Strategy

### Install Backup Plugin

```bash
wp plugin install updraftplus --activate
```

**Configuration:**
1. Go to Settings → UpdraftPlus Backups
2. Set schedule (daily recommended)
3. Choose remote storage (Google Drive, Dropbox, etc.)

### Manual Backup Commands

```bash
# Database backup:
wp db export backup-$(date +%Y%m%d).sql

# Files backup:
tar -czf wordpress-files-$(date +%Y%m%d).tar.gz /path/to/wordpress

# Theme-only backup:
cd wp-content/themes
tar -czf my-portfolio-backup.tar.gz my-portfolio/
```

---

## Phase 13: Go Live Checklist

- [ ] All ACF fields populated
- [ ] All images uploaded to Media Library
- [ ] Menu configured
- [ ] Permalinks set to pretty URLs
- [ ] SSL certificate installed (HTTPS)
- [ ] Google Analytics added
- [ ] Search Console verified
- [ ] Social media links updated
- [ ] Contact information correct
- [ ] 404 page styled
- [ ] Favicon set (wp-admin → Appearance → Customize → Site Identity)
- [ ] Privacy Policy page created
- [ ] Cookie consent added (if EU visitors)

---

## Troubleshooting

### Issue: Styles Not Loading

```bash
# Regenerate CSS:
wp rewrite flush
wp cache flush

# Check file permissions:
ls -la wp-content/themes/my-portfolio/assets/css/
```

### Issue: Images Not Showing

```bash
# Regenerate thumbnails:
wp plugin install regenerate-thumbnails --activate
wp media regenerate --yes
```

### Issue: ACF Fields Not Saving

```bash
# Check memory limit:
wp config get WP_MEMORY_LIMIT

# Increase if needed:
wp config set WP_MEMORY_LIMIT 256M
```

### Issue: 500 Error After Activation

```bash
# Check error logs:
tail -f /var/log/apache2/error.log  # Apache
tail -f /var/log/nginx/error.log    # Nginx

# Enable WordPress debugging:
wp config set WP_DEBUG true
wp config set WP_DEBUG_LOG true
```

---

## Git Workflow

### Files to Commit

```bash
git add style.css
git add functions.php
git add *.php
git add template-parts/
git add assets/js/
git add assets/css/custom.css
git add README.md
git add MIGRATION-GUIDE.md
git add .gitignore
```

### Files to Ignore

Already in `.gitignore`:
- `node_modules/`
- `assets/css/compiled-nextjs.css` (optional - can be generated)
- IDE config files
- Log files

---

## Post-Migration Maintenance

### Regular Updates

```bash
# Update WordPress core:
wp core update

# Update plugins:
wp plugin update --all

# Update themes:
wp theme update --all
```

### Monitor Performance

- Weekly: Check Google Search Console for errors
- Monthly: Run PageSpeed Insights
- Quarterly: Review analytics and optimize content

---

## Support Resources

- **WordPress Codex:** https://codex.wordpress.org/
- **ACF Documentation:** https://www.advancedcustomfields.com/resources/
- **WP-CLI Documentation:** https://wp-cli.org/
- **Tailwind CSS:** https://tailwindcss.com/docs

---

## Summary: Quick Command Reference

```bash
# Complete migration in one script:

# 1. Build Next.js
cd v0-portfolio-website-build && npm run build

# 2. Extract CSS
cat .next/static/css/*.css > ../wordpress-theme/my-portfolio/assets/css/compiled-nextjs.css

# 3. Copy images
cp -r public/* ../wordpress-theme/my-portfolio/assets/images/

# 4. Upload theme
cd ../wordpress-theme
zip -r my-portfolio.zip my-portfolio
# Upload via FTP or WP Admin

# 5. Activate via WP-CLI
wp theme activate my-portfolio

# 6. Install plugins
wp plugin install advanced-custom-fields --activate
wp plugin install wordpress-seo --activate

# 7. Create pages
wp post create --post_type=page --post_title='Home' --post_status=publish
wp option update show_on_front 'page'
wp option update page_on_front $(wp post list --post_type=page --name=home --format=ids)

# 8. Import images
for file in assets/images/*.jpg; do wp media import "$file"; done

# 9. Set permalinks
wp rewrite structure '/%postname%/'
wp rewrite flush

# 10. Test!
```

---

## Conclusion

Your Next.js portfolio is now running on WordPress with:
- ✅ Identical design and layout
- ✅ Fully editable content via WordPress
- ✅ ACF-powered dynamic sections
- ✅ Optimized performance
- ✅ SEO-friendly structure
- ✅ Mobile responsive
- ✅ Production-ready

**Next Steps:**
1. Populate all ACF fields with your content
2. Upload high-quality images
3. Configure analytics tracking
4. Set up regular backups
5. Monitor performance and SEO
6. Keep WordPress and plugins updated

**Need help?** Contact aryanlohia2346@gmail.com

