# SimplePOS

SimplePOS is a small CodeIgniter 4 point-of-sale foundation. Customer and staff
records are stored in a relational database and displayed through the public
website.

## Pages

- `/` - landing page
- `/about` - project information
- `/customers` - customer records loaded from the database
- `/users` - staff records loaded from the database
- `/health` - application and database health check

## Public deployment on Render

The included `render.yaml` creates both resources needed by the application:

- a public Docker web service with an HTTPS `onrender.com` address
- a managed PostgreSQL database on Render's private network

The database password is passed to the application through `DATABASE_URL`; it
is never committed to Git. Database tables and the initial records are created
automatically by the migration in `app/Database/Migrations` whenever the app
starts on a new database.

1. Commit and push this project to GitHub.
2. Sign in to [Render](https://dashboard.render.com/).
3. Choose **New > Blueprint** and connect this GitHub repository.
4. Confirm that Render detected `render.yaml`, then choose **Deploy Blueprint**.
5. Wait for both `simplepos-database` and `simplepos-brillantes` to become
   available. Open the web service's `onrender.com` URL.
6. Open `/health` on that URL. A successful deployment returns:

   ```json
   {"status":"ok","database":"connected"}
   ```

The database is intentionally not exposed directly to the public internet.
Anyone can see the application and the data it displays, while only the web
service can use the database credentials.

### Free-plan limitation

The Blueprint uses Render's free plans for a student/demo deployment. The free
web service sleeps after inactivity, and a free Render PostgreSQL database
expires after 30 days. Upgrade the database in Render before that deadline for
a permanent deployment, or set `DATABASE_URL` to a persistent hosted PostgreSQL
provider. The application accepts standard `postgres://` and `postgresql://`
connection URLs, including SSL query options.

## Local setup with XAMPP/MySQL

Requirements:

- PHP 8.1 or newer
- Composer
- MySQL or MariaDB
- PHP extensions `intl`, `mbstring`, and `mysqli`

1. Create an empty MySQL database named `simplepos`.
2. Copy `env` to `.env` if `.env` is missing.
3. Add these values to `.env` (adjust the username and password if needed):

   ```dotenv
   CI_ENVIRONMENT = development
   app.baseURL = 'http://localhost/Brillantes/IT0049/TFA1/'
   app.indexPage = ''

   database.default.hostname = localhost
   database.default.database = simplepos
   database.default.username = root
   database.default.password =
   database.default.DBDriver = MySQLi
   database.default.port = 3306
   ```

4. Install dependencies and create the tables:

   ```powershell
   composer install
   C:\xampp\php\php.exe spark migrate --all
   ```

5. Open `http://localhost/Brillantes/IT0049/TFA1/` through Apache, or run
   `C:\xampp\php\php.exe spark serve` and use the URL printed by the command.

Local `.env` values are ignored by Git. Production gets its URL and database
connection from Render, so it does not depend on XAMPP, `localhost`, or this PC.

## Project structure

- `app/Config/Routes.php` defines public routes.
- `app/Controllers` handles pages and the health check.
- `app/Models` reads customer and staff data from the database.
- `app/Database/Migrations` creates and initially populates the tables.
- `app/Views` contains the page templates.
- `public/css/style.css` contains the shared page design.
- `Dockerfile` builds the PHP/Apache production container.
- `render.yaml` defines the public service and hosted PostgreSQL database.
