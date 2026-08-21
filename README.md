<div align="center">

  <img src="https://knecht.works/styleguide/favicon/favicon.svg" alt="Knecht" width="112" height="112">

# test-laravel

<p>
  <img src="https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white" alt="Laravel 13">
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?logo=php&logoColor=white" alt="PHP 8.4">
  <img src="https://img.shields.io/badge/DDEV-nginx--fpm-02A8E2?logo=docker&logoColor=white" alt="DDEV · nginx-fpm">
  <img src="https://img.shields.io/badge/Knecht-e2e%20fixture-b7f8a2?labelColor=09090b" alt="Knecht e2e fixture">
  <img src="https://img.shields.io/badge/license-MIT-blue" alt="MIT License">
</p>

</div>

A [DDEV](https://ddev.com)-based Laravel 13 project used as an end-to-end test fixture for [Knecht](https://knecht.works). It runs against the DDEV MySQL database with front-end assets built via [Vite](https://vitejs.dev) and [Tailwind CSS](https://tailwindcss.com), so Knecht can boot the environment, hit the site, and assert against real framework behavior (rendered views, database queries, the `/up` health check).

## Setup

Requires [DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/) and a Docker provider (Docker, OrbStack, or Colima).

```bash
ddev start                      # boot the containers
ddev composer install           # install PHP dependencies
cp .env.example .env
ddev artisan key:generate       # set APP_KEY
ddev artisan migrate            # create the database tables
ddev npm install
ddev npm run dev                # start the Vite dev server, or `npm run build`
```

## URLs

`ddev launch` opens the site in your browser.

| Role         | URL                                   |
| ------------ | ------------------------------------- |
| Site         | `https://test-laravel.ddev.site`      |
| Health check | `https://test-laravel.ddev.site/up`   |
