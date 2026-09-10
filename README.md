# SimplePOS

SimplePOS is a small four-page Point-of-Sale foundation made with CodeIgniter 4. It demonstrates basic MVC routing and passes temporary PHP array data from controllers to views. No database is used in this activity.

## Pages

- `/` - landing page
- `/about` - project information
- `/customers` - five customer records with full name, email, and phone
- `/users` - five staff records with username, full name, and role

## Requirements

- PHP 8.1 or newer
- Composer
- PHP extensions: `intl` and `mbstring`

## Setup

1. Clone or download the project.
2. Open a terminal in the project folder.
3. Run `composer install` if the `vendor` folder is not present.
4. Copy `env` to `.env` if `.env` is missing.
5. Set `app.baseURL` in `.env` to the address used by your local server. The included value is `http://localhost:8080/`.
6. Start the development server:

   ```bash
   php spark serve
   ```

   If XAMPP PHP is not added to the Windows PATH, use:

   ```powershell
   C:\xampp\php\php.exe spark serve
   ```

7. Open `http://localhost:8080` in a browser.

## Project structure

- `app/Config/Routes.php` contains the four routes.
- `app/Controllers/Pages.php` handles the home and about pages.
- `app/Controllers/Customers.php` contains temporary customer records.
- `app/Controllers/Users.php` contains temporary staff records.
- `app/Views` contains the page templates.
- `public/css/style.css` contains the shared page design.

## Data note

This version intentionally uses static PHP arrays, as required by the activity. Because there is no database, there is no database export for this version.

## Submission links

- GitHub repository: add your repository link here
- Hosted application: add your hosted link here
