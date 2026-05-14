# AGENTS.md

## Project
- **Nusantara Mining Corporation** corporate landing page + admin CMS
- Starbucks-inspired design system (see `DESIGN.md` for full color/component specs)

## Stack
- Laravel 11 / PHP 8.2+ / **MySQL** (DB: `mining_company`, not SQLite)
- Vite + laravel-vite-plugin (inputs: `resources/css/app.css`, `resources/js/app.js`)
- Tailwind CSS 3 + Autoprefixer + PostCSS
- GSAP 3 + AOS 2.3 for scroll/parallax animations
- Inter font from fonts.bunny.net (not Figtree)
- Axios sets `X-Requested-With` header (`resources/js/bootstrap.js`)

## Dev commands
- **All-in-one**: `composer dev` — runs `php artisan serve`, queue listen, pail, and `npm run dev` via concurrently
- **Backend only**: `php artisan serve`
- **Frontend only**: `npm run dev`
- **Build frontend**: `npm run build`
- **Run all tests**: `php artisan test` or `vendor/bin/phpunit`
- **Lint (PHP)**: `./vendor/bin/pint` — uses default Laravel preset

## Project structure
- `routes/web.php` — all public routes (home, about, operations, projects, news, gallery, careers, contact, sustainability, mining-sites, sitemap.xml, apply flow) + admin prefix with 12 resource controllers
- `resources/views/` — Blade templates (`layouts/public.blade.php`, `pages/*.blade.php`, `components/navbar.blade.php`, `components/footer.blade.php`)
- `resources/views/admin/` — admin panel views (dashboard, login, CRUD for all models)
- `app/Models/` — 11 models: CompanyProfile, Project, Operation, News, Team, Gallery, Career, Contact, SustainabilityReport, JobApplication, User
- `app/Http/Controllers/` — public controllers (ContactController, ApplyController) + `Admin/` (12 controllers)
- `database/migrations/` — 13 migrations (3 Laravel core + 10 app-specific)
- `.env` uses MySQL; `.env.example` defaults to SQLite

## Admin panel
- Route prefix: `/admin`, named `admin.*`
- Auth: custom `AdminMiddleware` (no Laravel Breeze/Jetstream). Login via `LoginController`
- CRUD resources: projects, operations, news, teams, galleries, careers, contacts, reports (sustainability)
- Job applications management: index, show, status update, file download
- File uploads stored on `public` disk (`storage/app/public/applications/`)

## Key conventions
- Indent: 4 spaces, LF line endings (`.editorconfig`)
- PHP code style: Laravel Pint
- CSS: Tailwind utility classes in Blade with Starbucks palette (see `DESIGN.md`); `@tailwind base/components/utilities` in CSS entry
- Models auto-generate slugs on `creating` (Project, News)
- Scopes: `Project::active()`, `News::published()`, `Career::open()`
- Buttons: 50px full-pill radius, `scale(0.95)` active state via `active:scale-[0.95]`

## Testing quirks
- `tests/TestCase.php` extends `Illuminate\Foundation\Testing\TestCase`
- No `RefreshDatabase` trait by default
- phpunit.xml has SQLite overrides commented out; DB connection from `.env`
