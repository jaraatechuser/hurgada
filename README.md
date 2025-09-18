<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Hurgada

Hurgada is a Laravel-powered web application for managing and publishing tourism content for Hurghada. It provides CRUD and interactive experiences around domain entities such as Attractions, Events, Blogs, Galleries, and user Favorites. The UI is rendered with Blade and progressively enhanced with Livewire for reactive, server-driven interactivity (e.g., favorites toggling and comments). Authentication and session flows are scaffolded with Laravel Breeze. Eloquent models, factories, and seeders back the data layer, with SQLite used by default for local development and easy switching to other RDBMS engines via environment configuration.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Technologies Used

This project is a modern Laravel application leveraging a full-stack toolchain optimized for DX, performance, and maintainability.

- **Runtime & Language**
  - **PHP**: Modern PHP features (typed properties, enums, attributes) via PHP 8.x.
  - **Composer**: Dependency management with PSR-4 autoloading.

- **Framework & Core Libraries**
  - **Laravel Framework**: HTTP routing, IoC container, middleware, validation, events, and job queues. Key components in use:
    - **Eloquent ORM**: ActiveRecord-style models with factories/seeders (`database/factories`, `database/seeders`).
    - **Migrations**: Schema management via timestamped migration classes in `database/migrations`.
    - **Queues**: Config-driven queue abstraction; jobs table scaffolded for async workloads.
    - **Caching & Session**: PSR-16 cache and session drivers configurable via `config/cache.php` and `config/session.php`.
    - **Filesystem**: Flysystem v3 adapter with local disks for `public` and private storage (`config/filesystems.php`).

- **Frontend Build & Styling**
  - **Vite**: ESM-based bundling with hot module replacement; manifest-driven asset resolution in `public/build`.
  - **Node Tooling**: `npm` scripts for dev/build; `resources/js` as the entrypoint.
  - **Tailwind CSS**: Utility-first styling with `tailwind.config.js` and PostCSS pipeline (`postcss.config.js`).
  - **PostCSS**: Autoprefixer and Tailwind processing for CSS output.

- **Reactive UI**
  - **Livewire**: Server-driven reactive components for dynamic UI without bespoke SPA code. Components under `app/Livewire` with corresponding Blade views in `resources/views/livewire`.
  - **Blade**: Templating system with components in `resources/views/components` and page templates in `resources/views/pages`.

- **Authentication & Scaffolding**
  - **Laravel Breeze**: Minimal, modern auth scaffolding using Blade. Routes under `routes/auth.php`, views under `resources/views/auth` and `resources/views/layouts`.

- **Database**
  - **SQLite (development)**: File-backed database `database/database.sqlite` for zero-config local development.
  - Easily switchable to MySQL/PostgreSQL via `config/database.php` and environment variables.

- **Email & Notifications**
  - **Mail**: Transport-agnostic mailer configured in `config/mail.php`.
  - **Notifications**: Channel-based notifications (mail, database, etc.) available per Laravel core.

- **Testing**
  - **PHPUnit**: Feature and unit tests under `tests/Feature` and `tests/Unit`; configuration in `phpunit.xml`.
  - **Model Factories**: Deterministic data generation for tests and seeders.

- **Logging & Observability**
  - **Monolog** via Laravel logging channels defined in `config/logging.php` with daily rotation and stack channels.

- **Security**
  - **CSRF Protection**: Middleware-enforced token validation on state-changing requests.
  - **Validation**: Form request validation classes in `app/Http/Requests` and inline validation rules.
  - **Encryption & Hashing**: OpenSSL-based encrypter and bcrypt/argon hashing via Laravel `Hash` facade.

- **Dev Experience**
  - **Artisan**: Task automation (migrations, seeding, queue workers, tinker).
  - **Tinker**: REPL for runtime inspection and prototyping.
  - **Pint**: Opinionated PHP code style fixer available via Composer bin.

- **Deployment Considerations**
  - **Config/Route Caching**: `artisan config:cache` and `artisan route:cache` compatible for reduced bootstrap overhead.
  - **Optimized Autoloading**: Composer optimized classmaps for production builds.
  - **Asset Versioning**: Vite manifest-based cache-busting in production.

Reference documentation:

- [Laravel Documentation](https://laravel.com/docs)
- [Livewire Documentation](https://livewire.laravel.com/docs)
- [Vite Guide](https://vitejs.dev/guide/)
- [Tailwind CSS Docs](https://tailwindcss.com/docs)
