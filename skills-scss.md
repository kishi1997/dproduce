# SCSS / CSS Skills

## File

- Write styles in css/design.scss
- After adding code to SCSS, save the file (Ctrl+S) to compile it

---

## Architecture

- Class design based on FLOCSS
- Use prefixes appropriately:
  - p- (project)
  - c- (component)
  - u- (utility)

---

## Structure

- Keep structure flat
- Avoid deep nesting

---

## Page Scope

- Lower-level pages must always be wrapped with a slug class

Example:
.p-price {
  // Write all styles inside here
}

- Global selectors that affect other pages are forbidden

## Naming

- Add a page-specific prefix to class names
  Example: p-price-xxx

---

## Reuse

- Reuse existing classes whenever possible
- Do not define the same styles multiple times

---

## Responsive

- Layout must not break at any screen width
- Content must not overflow
- Adjust font sizes and spacing accordingly

---

## Units

- Use px for font sizes
- Use % or vw for layout where appropriate

---

## Layout

- Use Flex / Grid appropriately
- Forced position adjustments are forbidden

---

## Spacing

- Design spacing with consistent values
- Apply spacing rules at the section level

---

## Visual Styling

- Add appropriate spacing, shadows, and borders to boxes
- Overly simple decoration is forbidden

---

## Anti-Patterns (Forbidden)

- Random excessive margins
- Overly deep nesting
- Duplicate style definitions
- Missing responsive support
