Simple PHP Photo Gallery
========================

Version 1.5    
2026    
www.raffia.ch, hjke   
PHP-Version >= 5.3     

MIT License   

This Script
-----------

Reads and displays image file types: jpg, png, gif, webp, svg.
The gallery imports and uses jQuery and two type of lightboxes (lightbox classic and fancybox).
Select the type you prefer in the php script top config line.

Installation
------------

Upload the gallery folder and its content onto your webspace.
Open the corresponding URI (www.yoursite.net/gallery/) in your webbrowser.
Images will be read from the given directory images/.

Integration In Your Website
---------------------------

The PHP variable _$gallery_ contains all HTML image items, each embedded in a link.
It may be printed inside the HTML context of your existing website.
See the the HTML-template file as an example.
