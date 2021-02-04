# cebulaTheme

Custom theme for Wordpress
Made especially for "Figure Out the Science" blog
Author: Karol Laskowski

# Installation

1. Paste theme files to /wp-content/themes/cebula-theme
2. In Wordpress Settings->Reading select "Latest posts" as what front page should present
3. In Appearance->Menu make sure that main menu for top navbar is called "Top Menu", as it is defined in some rules in navbar.css
4. Install Wordpress plugin Advanced Custom Fields and add new custom fields (group name doesn't matter)
   - bigger_photo_thumbnail, type of truth/false, visible only for Posts
   - show_excerpt, type of truth/false, visible only for Posts
   - drop_cap, type Choice, visible only for Posts, values to choose:
     - dc-every-paragraph : Every paragraph
     - dc-first-only : First paragraph only
     - dc-none : Nowhere
5. Open your Contact Page for edit and from dropdown "Template" choose "Custom Contact Page". Then customize contactpage.php to add some nice HTML, CSS, PHP and JS stuff by yourself.

# Other info

On front page grid smaller thumbnails can be stretched to sizes between 330px and 670px. Bigger thumbnails can be stretched to sizes between 670px to even 1005px.
