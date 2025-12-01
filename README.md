# AutoPartsX - E-Commerce Platform for Auto Parts

A modern e-commerce platform built with Laravel for selling auto parts online. Features a client-facing storefront where customers can browse products, view details, add to cart, and complete purchases.

## Features

- **Client-Facing Storefront**
  - Product browsing with filters (category, condition, price)
  - Product detail pages with images and specifications
  - Shopping cart functionality
  - Checkout process with shipping and payment options
  - Company/brand information display on products

- **Homepage Features**
  - Jumia-inspired hero section with category sidebar
  - Main banner carousel
  - Today's Deals section
  - Best Sellers section
  - New Arrivals section
  - Customer recommendations
  - Frequently Bought Together section

- **Product Features**
  - Product cards with ratings and reviews
  - Company logos and names
  - Discount badges
  - Stock indicators
  - Category-based organization

## Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Templates, Tailwind CSS
- **Icons**: Font Awesome 6.4.0

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd apxSellers
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install Node dependencies:
```bash
npm install
```

4. Copy environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Run migrations:
```bash
php artisan migrate
```

7. Build assets:
```bash
npm run build
```

8. Start the development server:
```bash
php artisan serve
```

## Project Structure

```
apxSellers/
├── app/                    # Application logic
├── resources/
│   ├── views/
│   │   ├── components/     # Reusable Blade components
│   │   │   ├── client-layout.blade.php
│   │   │   ├── client-navbar.blade.php
│   │   │   ├── client-footer.blade.php
│   │   │   └── product-card.blade.php
│   │   ├── cart/           # Shopping cart views
│   │   ├── checkout/       # Checkout views
│   │   ├── products/       # Product listing and detail views
│   │   └── home.blade.php  # Homepage
│   ├── css/               # Stylesheets
│   └── js/                # JavaScript files
├── routes/
│   └── web.php            # Web routes
└── public/                # Public assets
```

## Routes

- `/` - Homepage
- `/products` - Product listing page
- `/products/{id}` - Product detail page
- `/cart` - Shopping cart
- `/checkout` - Checkout page

## Design Inspiration

The project design is inspired by:
- **Jumia**: Hero section layout with category sidebar
- **Amazon**: Product sections with horizontal scrolling
- **AliExpress**: Flash sales and discount badges

## Color Scheme

- **Primary**: Muted blue gradient (`slate-400` → `blue-400` → `slate-500`)
- **Product Cards**: Emerald/Green accents
- **Background**: White and slate tones

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
