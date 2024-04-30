# Bright Contact Form Package Documentation

## Introduction

-- The Bright Contact Form package is a Laravel library designed to simplify the process of creating and managing contact forms on Laravel applications. With this package, users can easily integrate a contact form into their Laravel projects, allowing visitors to send messages to the site administrator.

## Installation
-- To install the Bright Contact Form package, simply require it via Composer:

## composer require bright/contactform

## Configuration
 After installation, publish the configuration file to customize your contact form settings:

## php artisan vendor:publish --tag=bright-config
## php artisan vendor:publish --tag=bright-css

 This command will publish a bright_config.php file in your config directory. You can customize the admin email address by setting the ADMIN_EMAIL variable in your .env file.

## usage
 Routes: The contact form routes are automatically loaded from routes/web.php. Users can access the contact form at /contact.

 CSS Files: The package includes CSS files for styling the contact form. These files are published to the public/bright directory. Include these files in your HTML templates for proper styling.

 JavaScript: The contact form utilizes JavaScript to send messages without page refresh. Users don't need to manually include any JavaScript files.

## Customization
 Users can customize various aspects of the contact form:

 Admin Email: Set the admin email address in the configuration file (bright_config.php) or via the .env file.
 Eg: in your .env, just add
 ADMIN_EMAIL="youremail@yourdomain.com"
<!-- -- Views: Customize the contact form views located in the resources/views/vendor/contactform directory. -->

## Security
 The contact form includes built-in CSRF protection to prevent cross-site request forgery attacks. 

## Error Handling
 The package provides error handling for form validation errors and email sending failures

## Dependencies

 Laravel 11.x
 PHP 8.2 or higher

## License

 The Bright Contact Form package is open-source software licensed under the MIT License. See the LICENSE file for more information.

## Support and Contribution

 For support or to report issues, please visit the GitHub repository. Contributions are welcome!
