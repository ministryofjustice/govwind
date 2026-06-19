# Govwind

A WordPress Full Site Editing (FSE) block theme by the [Ministry of Justice](https://www.gov.uk/government/organisations/ministry-of-justice), styled with a Tailwind CSS frontend.

## Overview

Govwind is a minimal block theme that combines WordPress block templates with a Tailwind/Sass build pipeline. Styles, fonts, and JavaScript are compiled into `dist/` and enqueued by `functions.php` with `filemtime()` cache busting.

## Requirements

- WordPress 5.9+
- Node.js (for the asset build)
- [Advanced Custom Fields](https://www.advancedcustomfields.com/) — used by features in `inc/acf/`

## Structure

| Path | Contents |
|------|----------|
| `templates/` | Block templates (`index`, `single`, `page`, `page-no-title`, `archive`, `search`, `404`, `home`) |
| `parts/` | Template parts — header, footer, and navigation variants |
| `patterns/` | Block patterns (CTAs, features, hero, footers, etc.) |
| `styles/` | `theme.json` style variations (e.g. `cjsm`, serif headings) |
| `assets/css/` | Sass sources (`main.scss`) and Tailwind entry (`tailwind.css`) |
| `assets/js/`, `assets/images/` | Frontend JS and image assets |
| `inc/` | PHP includes — breadcrumbs and ACF setup (custom fields, CPT settings) |
| `dist/` | Compiled CSS, JS, and fonts (build output) |
| `theme.json` | Global settings and styles |
| `functions.php` | Theme setup and asset enqueuing |

## Development

Install dependencies:

```bash
npm install
```

Watch and rebuild on change:

```bash
npm run watch
```

Build for production:

```bash
npm run build
```

The build compiles `main.scss` (Sass), generates the Tailwind stylesheet, and copies the PT Sans / Public Sans webfonts into `dist/files/`.

### Other scripts

| Script | Purpose |
|--------|---------|
| `npm run dev` | Clean `dist/` then watch |
| `npm run format` | Prettier-format JS/TS/JSX/TSX/HTML/CSS/SCSS/JSON/PHP |
| `npm run check` | Prettier check (no writes) |
| `npm run clean` | Empty `dist/` |
|  `npm run release` | Runs build and format |
## Licence

MIT
