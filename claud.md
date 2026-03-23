# Coding Rules (Strict)

## WordPress

- Use original theme: themes/yaotemp
- Use PHP only for URLs and image paths
- Do not add custom PHP logic

---

## URL Rules

- All internal links must use:
  <?php bloginfo('url'); ?>/works/

---

## Image Path Rules

- All image paths must use:
  <?php bloginfo('template_url');?>/img/xxx.jpg
- Absolute paths are strictly forbidden

---

## Image Rules

- alt must be written in Japanese with a clear description
- Do not create subdirectories inside img/
- Keep img directory single-level only
- Image filenames must include page slug prefix
  - Example: price-feature.jpg

---

## CSS

- Use SCSS (css/design.scss)
- Follow FLOCSS naming convention
- Keep structure flat (avoid deep nesting)

---

## Page Scope (Very Important)

- Each page must be wrapped with a slug class

Example:

<div class="p-price">

- All styles must be scoped inside the page class
- Do not write global styles affecting other pages

---

## Responsive

- Layout must not break at any screen width
- No overflow or content clipping

---

## Breadcrumb

- Must exist on all pages
- Do not modify its structure

---

## PHP Rules

- Complex PHP logic is strictly forbidden
- WordPress loops (have_posts, WP_Query, etc.) are forbidden
- Do not fetch data from WordPress
- All content must be static HTML
- Reusing common parts (header/footer) is allowed

---

## Page Implementation

- This is a static/mock page
- Do not implement dynamic features
- Do not include unnecessary PHP

---

## Output Requirement

- Output must be production-ready
- No placeholders or incomplete code
- Code must work when placed directly into the theme

## Breadcrumb Rule for Mock/Static Pages

- Every mock/static page must include the following breadcrumb HTML immediately below the FV section:

```html
<!-- Breadcrumb List -->
<div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
  <div class="container">
    <?php if(function_exists('bcn_display')) { bcn_display(); } ?>
  </div>
</div>
```
