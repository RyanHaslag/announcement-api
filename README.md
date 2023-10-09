# announcements project

The app has been ported into Laravel 10 and is now serving announcements through an API. In order to seed the initial announcement data, migrations can be run and a seeder will load in temporary data.
## Backend API Setup

```sh
php artisan serve
```

```sh
php artisan migrate
```

## Frontend View

```sh
npm run dev
```

### Optional cache busting
This will require modifications to the app.blade.php file to pull in versioned assets

```sh
npm run build
```
