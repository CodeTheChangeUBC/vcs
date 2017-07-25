# WP Boilerplate

Barebones wordpress boilerplate with useful files and tools to get started on a standard website, forked from Underscores.

## Installation

### 1. Move Directory

Add this directory to your `wp-content/themes` directory.

### 2. Rename the `wp-boilerplate` directory

Rename to your own theme name.

### 3. Install the dev dependencies

Navigate to **this directory** from your command line and run `npm install` to install the node modules.

### 4. Update the proxy in `gulpfile.js`

Be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (line 60).

### 5. Replace placeholders with your theme name

Do a Search and Replace for:
- `VCS` *first letter capital* eg. My Theme
- `VCS` *first letter capital. underscores* eg. My_Theme
- `vcs` *all lower case. underscores* eg. my_theme
- `vcs` *all lower case. hyphens* eg. my-theme

### 6. Update Information

Update information in style.scss.

### 7. Replace screenshot.png

Replace the image that will be shown on the theme selection page with your own 1200 x 900 image

### 8. Rewrite Readme

Rewrite this readme for your theme.