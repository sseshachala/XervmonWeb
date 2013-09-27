=== BNE Testimonials ===
Author URI: http://www.bluenotesentertainment.com
Contributors: bluenotes
Tags: testimonials, flexslider
Requires at least: 3.5
Tested up to: 3.6.1
Stable tag: 1.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

Adds a Custom Post Type for Testimonials. Available Shortcodes: [bne_testimonials_list] & [bne_testimonials_slider]

= BNE Tesimonial List Shortcode =

To display your testimonials on a page/post as a list, use the shortcode [bne_testimonials_list]. This shortocde also has the following parameters available:
1. post=""  (Defualt value: -1, Options: any number, Description: displays a determined amount of testimoinials)
2. order="" (Defualt value: date, Options: date & rand, Description: displays the order of the testimonials by date or random)
3. image="" (Defualt value: true, Options: true & false, Description: displays the featured image for that testimonials)
4. image_style="" (Defualt value: square, Options: square, circle, flat-square, flat-circle, Description: Styles the featured image used in the testimonial.)
5. category="" (Description: If you created categories, add the slug/name you wish to only display. Ex: If the category is "San Diego", the slug will be "san-diego")
6. class="" (Description: Allows you to add a custom class name to the main shortcode div. This way you can easily style each list/slider individually based on the class used.)

= BNE Tesimonial Slider Shortcode =

To display your testimonials on a page/post as a slider using flexslider.js, use the shortcode [bne_testimonials_slider]. This shortocde also has the following parameters available:
1. post=""  (Defualt value: -1, Options: any number, Description: displays a determined amount of testimoinials)
2. order="" (Defualt value: date, Options: date & rand, Description: displays the order of the testimonials by date or random)
3. category="" (Description: If you created categories, add the slug you wish to only display. Ex: If the category is "San Diego", the slug will be "san-diego")
3. name="" (Defualt value: true, Options: true & false, Description: displays the name/title of the testimonial)
4. image="" (Defualt value: true, Options: true & false, Description: displays the featured image for that testimonials)
5. image_style="" (Defualt value: square, Options: square, circle, flat-square, flat-circle, Description: Styles the featured image used in the testimonial.)
6. animation="" (Default: slide, Options: slide or fade, Description: the transition between each testimonial)
7. nav="" (Default: true, Options: true & false, Description: Display the pagination buttons)
8. arrows="" (Default: true, Options: true & false, Description: Display the directional arrows)
9. smooth="" (Default: true, Options: true & false, Description: Height will adjust with a smooth animation based on the amount of content)
10. pause="" (Default: true, Options: true & false, Description: If mouse cursor hovers over slider, slideshow will pause.
11. class="" (Description: Allows you to add a custom class name to the main shortcode div. This way you can easily style each list/slider individually based on the class used.)


== Installation ==

1. Upload "bne-testimonials" folder to the "/wp-content/plugins/" directory
2. Activate the plugin through the "Plugins" menu in WordPress
3. A new menu item will be added called "Testimonials."
4. Add either "[bne_testimonials_list]" or "[bne_testimonials_slider]" to a post/page or use the available widgets in a sidebar. 


== Changelog ==

= 1.3.1 (Sept 24, 2013) =
* Added an empty class shortcode parameter to target individual list/slider testimonials for easy css customizations.
* Removed an extra comma that was placed on the list shortcode markup.


= 1.3 (Sept 12, 2013) =
* Changed: The get_the_content "hack" with a better and a much simpler one that strips everything out except the following post tags: b, strong, i, em, a, br, h1, h2, h3. The prevents other plugins from throwing in their filtered items such as, social icons, onto every testimonial entry.
* Changed: The list and slider shortcodes into their own included files.
* Added: Featured Image frame styles with their corresponding shortcode/widget attributes: square (default), circle, flat-square, flat-circle.
* Updated the help page.
* Cleaned up and organized code.


= 1.2.2 (Aug 27, 2013) =
* Further Accommodate some random theme styles. 
* Allow the taxonomy to be filterable in the Show all Post Edit Screen.


= 1.2.1 (Aug 8, 2013) =
* Accommodate some random theme styles that uses flexslider.

= 1.2 (Aug 4, 2013) =
* Added Custom Taxonomies (Categories)
* Added a category="" parameter into both shortcodes and Widgets as a dropdown option.
* Adjusted the title tags to h4 for widgets and h3 for shortcodes.
* Updated help.php with new info.
* Enabled the auto update class. All future updates can be pulled using the WordPress update API.

= 1.1 (July 31, 2013) =
* Added List and Slider Widget Options.
* Corrected some typos.
* Adjusted the .bne-testimonial-slider-wrapper. Made “testimonial” singular.
* Adjusted the .bne-testimonial-list-wrapper.  Made “testimonial” singular.
* Added auto update class

= 1.0 =

* This is the first release.