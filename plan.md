# WordPress Migration Plan: Nature Positive Roadmap

## Overview
Convert the 3 static HTML pages into a WordPress custom theme (`nature-roadmap-theme`) that can be dropped into any WordPress installation's `wp-content/themes/` directory.

## Theme Structure

```
nature-roadmap-theme/
├── style.css              # Theme metadata + all CSS (extracted from inline styles)
├── functions.php          # Theme setup, script/style enqueuing
├── header.php             # Shared <head>, navbar, progress bar
├── footer.php             # Shared footer, back-to-top, closing scripts
├── page-home.php          # Template: Homepage (index.html content)
├── page-option-a.php      # Template: Option A variant
├── page-option-b.php      # Template: Option B variant
├── js/
│   ├── main.js            # Shared JS (scroll animations, nav, accordion, tabs, etc.)
│   ├── roadmap.js         # Interactive roadmap panel data + functions
│   └── action-network.js  # SVG action network diagram
├── images/                # All 70+ images copied as-is
│   └── (all existing images)
├── assets/
│   └── Nature Positive Roadmap for New Developments.pdf
└── screenshot.png         # Theme preview screenshot (generated from site)
```

## Implementation Steps

### Step 1: Create theme directory and `style.css`
- Create the theme folder structure
- Extract the shared CSS from `index.html` into `style.css` with WordPress theme header comment
- CSS custom properties and all styles transfer directly - no changes needed to the CSS itself

### Step 2: Create `functions.php`
- Register nav menus, theme supports (title-tag, post-thumbnails, html5)
- Enqueue `style.css`, `main.js`, `roadmap.js`, `action-network.js`
- Register the 3 page templates

### Step 3: Create `header.php`
- Extract the shared `<head>`, Google Fonts links, navbar HTML, and progress bar
- Use `wp_head()`, `wp_body_open()`, `body_class()` WordPress functions
- Dynamic active navigation using WordPress conditionals

### Step 4: Create `footer.php`
- Extract the shared footer HTML, back-to-top button
- Use `wp_footer()` for script enqueuing

### Step 5: Create page templates
- `page-home.php`: Extract the body content from `index.html` between header and footer
- `page-option-a.php`: Same for `option-a.html`
- `page-option-b.php`: Same for `option-b.html`
- Each template uses `get_header()` and `get_footer()`

### Step 6: Extract JavaScript
- `main.js`: Scroll observer, navbar scroll effect, progress bar, accordion, tabs, mobile menu, challenge cards, timeline toggle, back-to-top, download handler
- `roadmap.js`: The `panelData` object + `openPanel()`/`closePanel()`/`toggleActions()` functions
- `action-network.js`: The IIFE containing PHASES, PRINCIPLES, ACTIONS data + SVG rendering

### Step 7: Copy assets
- Copy all images to theme `images/` directory
- Copy PDF to theme `assets/` directory
- Update all `src="images/..."` paths to use `<?php echo get_template_directory_uri(); ?>/images/...`
- Update PDF download path similarly

## Notes
- All interactive components (roadmap panels, SVG network diagram, accordions, tabs, etc.) will work exactly as they do now - just moved from inline `<script>` to enqueued JS files
- The CSS transfers 1:1 since it uses standard properties and modern CSS
- No plugins required - everything is self-contained in the theme
- Content stays in the templates (not in the WordPress editor) since it's highly structured with custom HTML/CSS classes - this matches how the original site works
