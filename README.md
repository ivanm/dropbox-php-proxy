dropbox-php-proxy
==================

This little tool allows you to serve files directly from your Dropbox account (or a subdirectory of it) to your PHP server. 

For example, you can have a file in your dropbox named 'profile.jpg' that is linked directly to your page at mycoolwebsite.com/images/profile.jpg. To change it you only need to sync the file on your computer. That's it.

You can even host full sites using .html files. Or full directories, or whatever you want.

This can also be accomplished using public folders on Dropbox, but this solution is transparent for the user.

Requirements:
- PHP 5.3
- Curl
- Apache
