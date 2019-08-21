# WordPress Branded Login Page

This is a project companion to [the tutorial]() available from [WP Updoot's Youtube Channel](https://www.wpupdoot.com/yt), covering how to set up a custom-branded WordPress login page. This tutorial / snippet covers
 
* How to style `wp-login.php`
* How to add a custom logo to `wp-login.php`

### Usage

**Placing your logo file**

1. Create a new directory in your child theme, `./assets/img` (or similar)
1. Place your logo in the new folder (no larger than 320px x 80px)

**Praparing the custom style**

1. Download / copy the `login.css` file to your child theme directory
1. Adjust the background colour in the `body.login` rule, to match your branding
1. Change the background widths in the `body.login div#login h1 a` to match your logo

**Injecting the login styles**

1. Copy the contents of `snippet.php` to your child theme's `functions.php` file

**Testing**

1. Using *Incognito* or *Private* mode, visit your site's WP Dashboard login page (typically found at `/wp-login.php`)

### Find this helpful?

*WP Updoot* provides resources for Budding / Junior Developers, Senior WordPress Developers, and Hobbyists / Small Business Owners trying their hand at self-builds. This, along with dozens more tutorials can be found at [WP Updoot's Youtube Channel](https://www.wpupdoot.com/yt).

Consider supporting WP Updoot by:

* Subscribing to the official [Youtube Channel](https://www.wpupdoot.com/yt)
* Supporting WP Updoot on [Patreon](https://www.patreon.com/wpupdoot)
* Hitting WP Updoot up on [Twitter](https://twitter.com/wpUpdoot)
* Following WP Updoot on [Facebook](https://www.facebook.com/WP-Updoot-103509467684804/)
* Finding WP Updoot on [WordPress.org](https://profiles.wordpress.org/wpupdoot/)
* Viewing WP Updoot's contributions on [StackOverflow](https://stackoverflow.com/users/11942572/wp-updoot)
* Checking out WP Updoot on [GitHub](https://github.com/wpupdoot) (pun intended)

...and if you are in need of hosting, plugins or themes, [consider using a WP Updoot Partner](https://www.wpupdoot.com/partners) (WP Updoot receive a small kick-back for anything purchased using their partners' affiliate links).

