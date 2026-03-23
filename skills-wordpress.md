# WordPress Implementation Skills

## Theme

- Use original theme: themes/yaotemp

---

## PHP Usage

- PHP is allowed only for:
  - URLs
  - Image paths
- Adding custom logic is strictly forbidden

---

## URL Rules

- All internal links must use the following format:
  <?php bloginfo('url'); ?>/works/

---

## Image Path

- Always use the following format:
  <?php bloginfo('template_url');?>/img/xxx.jpg

- Absolute paths are strictly forbidden

---

## Image Rules

- Write alt text in Japanese with a concise description
- Make the description clearly convey the content

---

## File Structure

- img directory must be single-level only
- Creating subdirectories is forbidden

---

## Naming

- Image filenames must include the page slug as a prefix
  Example: price-feature.jpg

---

## Breadcrumb

- Must be placed on all pages
- Do not modify the template structure

---

## Reuse

- Reference home.php and other lower-level pages
- Prioritize reusing the same structure and classes

---

## Output Quality

- Code must work as-is when placed directly into WordPress
- Placeholder or incomplete code is forbidden
