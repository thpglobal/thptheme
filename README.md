# thptheme

### Theme for THP websites starting in 2021

This is based on untheme, and further stripped down to get rid of comments and sidebar.
Additions include: 
* drop down menus css3
* responsive hamburger menu
* action bar in footer
* 4 footer responsive widget areas
* change the sidebar in posts to be in a 30% column using standard wordpress classes
* 1 footer full-page-width header below that for validations
* countup class - cf https://jshakespeare.com/simple-count-up-number-animation-javascript-react/
* sticky header
* make sure style.css is not cached in enqueue function
* integrate all css in the default style.css

Removals include:
* don't show title (anyway to make this a customization option?)

## Installation

* download the zip file
* upload it as the theme
* when updating, just upload again and it will ask whether you mean to replace the old one (yes, you do!)

## Settings

For optimized WordPress settings, follow these steps.

1. In "Settings -> Permalinks" click "Post name" and save.
1. In "Settings -> Media" uncheck "Organize my uploads into month- and year-based folders" and save.
1. In "Appearance -> Menus" click "Save Menu" and check "Display location - Primary Menu".
1. In "Appearance -> Widgets" drag a widget to any of the widget areas to view them in action.

# Give now box custom html in widget area
```	<a href="/give-now">
```	<svg class="vanish" height="125" width="125">
```	<g><rect x="0" y="0" width="125" height="125" fill="#0000aa"></rect>
```	<text x=60 y="65" dominant-baseline="middle" text-anchor="middle" font-family="Unna" font-size="20" font-weight="bold" fill="white">Give Now</text>
```</g></svg></a>
