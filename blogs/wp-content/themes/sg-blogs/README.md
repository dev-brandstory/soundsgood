# SG Blogs — WordPress Theme

Sounds Good Hearing Care blog theme. Same design system as main site (Inter / Inter Display, header, footer, location map, WhatsApp float). Links use extensionless main-site URLs (`/hearing-loss`, `/contact`, etc.).

## Install

1. Zip the `sg-blogs` folder (zip root must contain `sg-blogs/style.css`).
2. WP Admin → **Appearance → Themes → Add New → Upload Theme**.
3. Activate **SG Blogs**.

Or copy folder into `wp-content/themes/sg-blogs`.

### Zip (Windows)

```powershell
Compress-Archive -Path sg-blogs -DestinationPath sg-blogs.zip -Force
```

## Customizer

**Appearance → Customize → Sounds Good Contact**

- Main site URL (optional; auto-detects parent of `/blogs/`)
- Phone, hours, book URL, WhatsApp, email

## Menus

Register locations: Primary, Mobile, Footer. If empty, fallback menus link to main site pages.

## Structure

```
sg-blogs/
  style.css
  functions.php
  header.php / footer.php
  index.php, home.php, front-page.php
  single.php, page.php, search.php, archive.php
  category.php, tag.php, author.php, 404.php
  sidebar.php, comments.php, searchform.php
  inc/template-tags.php
  template-parts/*
  assets/css|js|images|fonts
```
