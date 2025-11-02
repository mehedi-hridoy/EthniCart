# EthniCart - E-Commerce Platform

![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)
![License](https://img.shields.io/badge/License-MIT-green.svg)

**From Earth to You** - Connecting authentic, farm-fresh products from trusted producers directly to consumers.

---

## 📑 Table of Contents

1. [Overview](#overview)
2. [Features](#features)
3. [System Requirements](#system-requirements)
4. [Quick Start Installation](#quick-start-installation)
5. [Detailed Configuration](#detailed-configuration)
6. [Project Structure](#project-structure)
7. [Database Schema](#database-schema)
8. [API Documentation](#api-documentation)
9. [User Roles & Permissions](#user-roles--permissions)
10. [Payment Integration](#payment-integration)
11. [Deployment Guide](#deployment-guide)
12. [Testing](#testing)
13. [Troubleshooting](#troubleshooting)
14. [Contributing](#contributing)
15. [License](#license)

---

## 🎯 Overview

EthniCart is a modern, full-featured e-commerce platform built with Laravel that connects local producers with consumers. The platform emphasizes authenticity, quality, and direct-from-source products including organic foods, traditional crafts, beauty products, and more.

### Key Highlights
- 🏪 **Multi-vendor marketplace** for producers/sellers
- 💳 **Secure payment processing** with SSL Commerce
- 🔐 **Google OAuth integration** for seamless authentication
- 📱 **Fully responsive design** optimized for all devices
- 🔍 **Real-time search** with autocomplete suggestions
- 📊 **Comprehensive analytics** for sellers and admins
- 🛒 **Advanced cart management** with session persistence
- ⭐ **Product reviews** and rating system

### Technology Stack
- **Backend**: Laravel 10.x (PHP 8.1+)
- **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
- **Database**: MySQL 8.0+ / MariaDB
- **Authentication**: Laravel Sanctum + Google OAuth (Socialite)
- **Payment Gateway**: SSL Commerce (Bangladesh)
- **Storage**: Local / S3 Compatible
- **Build Tools**: Vite
- **Image Processing**: Intervention Image

---

## ✨ Features

### 👤 Customer Features
- ✅ User registration and login (Email/Google OAuth)
- ✅ Browse products by 12+ categories
- ✅ Advanced search with live autocomplete
- ✅ Shopping cart with real-time updates
- ✅ Secure checkout with multiple payment methods
- ✅ Order tracking and history
- ✅ User profile management
- ✅ Wishlist functionality
- ✅ Product reviews and ratings
- ✅ Email notifications

### 🏬 Seller Features
- ✅ Seller registration and verification
- ✅ Shop profile customization
- ✅ Product management (CRUD)
- ✅ Inventory tracking
- ✅ Order management dashboard
- ✅ Sales analytics and reports
- ✅ Order fulfillment workflow
- ✅ Revenue tracking
- ✅ Customer management

### 👨‍� Admin Features
- ✅ Complete platform oversight
- ✅ User and seller approval/management
- ✅ Product moderation
- ✅ Category management
- ✅ Order monitoring
- ✅ Analytics dashboard
- ✅ System configuration
- ✅ Content management

### 📦 Product Categories
1. 🍎 Farm Fresh Fruits & Vegetables
2. 🐟 Fish & Meat
3. 🌶️ Homemade Masala & Spices
4. 🥒 Pickles & Condiments
5. 🌿 Organic Roots
6. 💄 Beauty & Personal Care
7. 👗 Traditional Clothing & Apparels
8. 🎨 Handcrafted Goods
9. 🏠 Home & Kitchen Items
10. 💐 Flowers & Gifts
11. 🧼 Eco-Friendly Cleaning Products

---

## 💻 System Requirements

### Minimum Requirements
```
✓ PHP >= 8.1
✓ MySQL >= 8.0 or MariaDB >= 10.3
✓ Composer >= 2.0
✓ Node.js >= 16.x
✓ NPM >= 8.x
✓ 2GB RAM
✓ 10GB Storage
```

### Required PHP Extensions
```
✓ OpenSSL, PDO, Mbstring, Tokenizer, XML
✓ Ctype, JSON, BCMath, Fileinfo
✓ GD (for image processing)
```

---

## 🚀 Quick Start Installation

### Option 1: Standard Installation

### Option 1: Standard Installation

```bash
# 1. Clone the repository
git clone https://github.com/mehedi-hridoy/EthniCart.git
cd EthniCart

# 2. Install PHP dependencies
composer install

# 3. Install Node.js dependencies
npm install

# 4. Create environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 6. Configure database (Edit .env file)
DB_DATABASE=ethnicart_db
DB_USERNAME=root
DB_PASSWORD=your_password

# 7. Run migrations
php artisan migrate

# 8. Seed database (optional)
php artisan db:seed

# 9. Create storage symlink
php artisan storage:link

# 10. Build frontend assets
npm run dev

# 11. Start development server
php artisan serve
```

**Visit**: `http://127.0.0.1:8000`

### Option 2: Quick XAMPP Setup

### Option 2: Quick XAMPP Setup

```bash
# 1. Clone and navigate
git clone https://github.com/mehedi-hridoy/EthniCart.git
cd EthniCart

# 2. Start XAMPP (Apache + MySQL)

# 3. Install dependencies
composer update
npm install

# 4. Setup environment
cp .env.example .env
php artisan key:generate

# 5. Configure database in .env
# DB_DATABASE=ethnicart_db
# DB_USERNAME=root
# DB_PASSWORD=

# 6. Run migrations
php artisan migrate
php artisan storage:link

# 7. Build assets
npm run dev

# 8. Start server
php artisan serve
```

---

## ⚙️ Detailed Configuration

### Environment Setup

#### 1. Database Configuration
Create your database first:
```sql
CREATE DATABASE ethnicart_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Update `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ethnicart_db
DB_USERNAME=root
DB_PASSWORD=
```

#### 2. Admin Setup
Add to `.env`:
```env
ADMIN_EMAIL=admin@ethnicart.com
ADMIN_PASSWORD=SecurePassword123!
```

Create admin user:
```bash
# Method 1: Using Seeder
php artisan db:seed --class=AdminUserSeeder

# Method 2: Using Tinker
php artisan tinker
>>> use App\Models\User; use Illuminate\Support\Facades\Hash;
>>> User::create(['name' => 'Admin', 'email' => 'admin@ethnicart.com', 'password' => Hash::make('SecurePassword123!'), 'email_verified_at' => now(), 'role' => 'admin']);
>>> exit
```

#### 3. Google OAuth Setup
1. Create project at [Google Cloud Console](https://console.cloud.google.com/)
2. Enable Google+ API
3. Create OAuth 2.0 credentials
4. Add redirect URI: `http://localhost:8000/auth/google/callback`
5. Update `.env`:

```env
GOOGLE_CLIENT_ID=your-client-id.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

📖 **Detailed OAuth Guide**: See [GOOGLE_AUTH_SETUP.md](GOOGLE_AUTH_SETUP.md)

#### 4. SSL Commerce Payment Setup
```env
SSLCOMMERZ_STORE_ID=your_store_id
SSLCOMMERZ_STORE_PASSWORD=your_password
SSLCOMMERZ_SANDBOX=true
```

#### 5. Email Configuration (Optional)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@ethnicart.com
MAIL_FROM_NAME="EthniCart"
```

---

## 📁 Project Structure

```
EthniCart/
├── app/
│   ├── Console/Commands/      # Custom Artisan commands
│   ├── Exceptions/            # Exception handling
│   ├── Helpers/               # Helper functions
│   ├── Http/
│   │   ├── Controllers/       # Application controllers
│   │   │   ├── Admin/         # Admin panel controllers
│   │   │   ├── Auth/          # Authentication
│   │   │   ├── Seller/        # Seller dashboard
│   │   │   └── ...            # Customer controllers
│   │   └── Middleware/        # Custom middleware
│   ├── Library/SslCommerz/    # Payment integration
│   ├── Models/                # Eloquent models
│   └── Services/              # Business logic services
│
├── database/
│   ├── migrations/            # Database migrations
│   └── seeders/               # Data seeders
│
├── public/
│   ├── assets/                # Compiled assets
│   ├── images/                # Static images
│   └── storage/               # Uploaded files (symlink)
│
├── resources/
│   ├── views/                 # Blade templates
│   │   ├── admin/             # Admin views
│   │   ├── seller/            # Seller views
│   │   ├── auth/              # Auth pages
│   │   └── ...                # Customer views
│   └── lang/                  # Language files
│
├── routes/
│   ├── web.php                # Web routes
│   ├── api.php                # API routes
│   └── console.php            # Console commands
│
├── storage/
│   ├── app/public/            # User uploads
│   └── logs/                  # Application logs
│
├── tests/                     # Automated tests
├── .env.example               # Environment template
├── composer.json              # PHP dependencies
├── package.json               # Node dependencies
└── README.md                  # This file
```

---

## 🗄️ Database Schema

### Core Models & Relationships

```
User ──┬── (1:n) Orders
       ├── (1:1) Seller Profile
       └── (1:n) Cart Items

Seller ──┬── (1:n) Products
         └── (1:n) Orders

Product ──┬── (n:1) Category
          ├── (n:1) Seller
          ├── (1:n) Product Images
          └── (n:n) Order Items

Order ──┬── (n:1) User
        ├── (n:1) Seller
        └── (1:n) Order Items

Category ──── (1:n) Sub-Categories (self-referencing)
```

### Key Tables

**users**: User accounts (customers, sellers, admins)  
**sellers**: Seller profiles and shop information  
**products**: Product catalog  
**categories**: Product categories hierarchy  
**ethni_orders**: Order records  
**order_items**: Order line items  
**product_images**: Product image gallery  
**seller_order_stats**: Seller statistics  

---

## 🔌 API Documentation

### Authentication Endpoints

**Login**
```http
POST /api/login
Content-Type: application/json

{
  "email": "user@example.com",
  "password": "password"
}

Response: 200 OK
{
  "token": "1|abc123...",
  "user": { ... }
}
```

**Register**
```http
POST /api/register
Content-Type: application/json

{
  "name": "John Doe",
  "email": "user@example.com",
  "password": "password",
  "password_confirmation": "password"
}
```

### Product Endpoints

**Get Products**
```http
GET /api/products?page=1&category=foods&sort=price_asc

Response: 200 OK
{
  "data": [ ... ],
  "meta": {
    "current_page": 1,
    "total": 150
  }
}
```

**Search Products**
```http
GET /api/search-suggestions?query=tomato

Response: 200 OK
{
  "products": [ ... ]
}
```

**Product Details**
```http
GET /api/products/{id}

Response: 200 OK
{
  "id": 1,
  "name": "Organic Tomatoes",
  "price": 50.00,
  "stock": 100,
  ...
}
```

### Cart Endpoints

**Add to Cart**
```http
POST /api/cart/add/{product_id}
Authorization: Bearer {token}

Response: 200 OK
{
  "success": true,
  "cart_count": 3
}
```

**Get Cart**
```http
GET /api/cart
Authorization: Bearer {token}

Response: 200 OK
{
  "items": [ ... ],
  "total": 550.00
}
```

---

## 👥 User Roles & Permissions

### Customer Role
- Browse and search products
- Manage cart and place orders
- Track order status
- Write product reviews
- Manage profile and wishlist

### Seller Role
- All customer permissions
- Create and manage products
- Process orders
- View sales analytics
- Manage shop profile
- Handle inventory

### Admin Role
- All seller permissions
- Manage users and sellers
- Approve/reject registrations
- Moderate products
- System configuration
- Platform analytics

### Route Protection

```php
// Customer routes
Route::middleware(['auth'])->group(function () {
    // Customer-only routes
});

// Seller routes
Route::middleware(['auth', 'seller'])->prefix('seller')->group(function () {
    // Seller dashboard and management
});

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Admin panel
});
```

---

## 💳 Payment Integration

### SSL Commerce (Bangladesh)

#### Setup Steps
1. Register at [SSL Commerce](https://sslcommerz.com/)
2. Get Store ID and Password
3. Configure in `.env`:

```env
SSLCOMMERZ_STORE_ID=test123
SSLCOMMERZ_STORE_PASSWORD=test123
SSLCOMMERZ_SANDBOX=true  # false for production
```

#### Payment Flow
1. Customer places order → Order created (status: pending)
2. Redirect to SSL Commerce payment page
3. Customer completes payment
4. Callback to `/payment/success` or `/payment/fail`
5. Order status updated
6. Confirmation email sent

#### Supported Methods
- Credit/Debit Cards (Visa, MasterCard, Amex)
- Mobile Banking (bKash, Nagad, Rocket)
- Internet Banking
- Digital Wallets

---

## 🚀 Deployment Guide

### Production Checklist

```bash
# 1. Environment
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# 2. Database backup strategy
# 3. SSL certificate (HTTPS)
# 4. File permissions
chmod -R 775 storage bootstrap/cache

# 5. Optimize
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# 6. Queue workers (optional)
php artisan queue:work --daemon

# 7. Monitoring & logging
```

### Server Configuration

**Apache (.htaccess)**
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

**Nginx**
```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```

### Using Forge/Envoyer
- Connect your server
- Configure environment variables
- Set deployment script
- Auto-deploy on push

---

## 🧪 Testing

```bash
# Run all tests
php artisan test

# With coverage
php artisan test --coverage

# Specific suite
php artisan test --testsuite=Feature

# Specific test
php artisan test tests/Feature/ProductTest.php
```

### Writing Tests

```php
// tests/Feature/ProductTest.php
public function test_user_can_view_products()
{
    $response = $this->get('/products');
    
    $response->assertStatus(200)
             ->assertViewIs('products.index')
             ->assertSee('Products');
}
```

---

## 🔧 Troubleshooting

### Common Issues

**1. Blank Page / 500 Error**
```bash
# Check logs
tail -f storage/logs/laravel.log

# Clear all caches
php artisan optimize:clear
```

**2. Permission Errors**
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

**3. Database Connection Failed**
```bash
# Test connection
php artisan tinker
>>> DB::connection()->getPdo();

# Verify .env database credentials
```

**4. Assets Not Loading**
```bash
# Rebuild assets
npm run build

# Check public directory permissions
```

**5. Google OAuth Not Working**
- Verify redirect URI matches exactly
- Check Google Console credentials
- Clear config: `php artisan config:clear`

**6. Images Not Uploading**
```bash
# Recreate storage link
php artisan storage:link

# Check storage permissions
chmod -R 775 storage/app/public
```

### Debug Mode

```env
# Development only!
APP_DEBUG=true
LOG_LEVEL=debug
```

---

## 🤝 Contributing

We welcome contributions! Please follow these steps:

1. Fork the repository
2. Create feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open Pull Request

### Coding Standards
- Follow PSR-12
- Write meaningful commits
- Add tests for new features
- Update documentation

---

## 🔒 Security

**Reporting Vulnerabilities**: Email mehedi.hridoy101@gmail.com

**Best Practices**:
- Keep dependencies updated
- Use HTTPS in production
- Implement rate limiting
- Sanitize all inputs
- Regular security audits

---

## 📊 Performance Tips

- Enable caching (Redis recommended for production)
- Optimize images (WebP format)
- Use CDN for static assets
- Implement lazy loading
- Add database indexes
- Use eager loading to prevent N+1 queries

---

## 📞 Support & Resources

### Documentation
- [Laravel Docs](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
- [SSL Commerce API](https://developer.sslcommerz.com/)

### Community
- **Issues**: [GitHub Issues](https://github.com/mehedi-hridoy/EthniCart/issues)
- **Discussions**: [GitHub Discussions](https://github.com/mehedi-hridoy/EthniCart/discussions)
- **Email**: mehedi.hridoy101@gmail.com

---

## �‍💻 Authors

- **Mehedi Hasan Hridoy** - [GitHub](https://github.com/mehedi-hridoy)
- **Umme Salma Lamyea** - [GitHub](https://github.com/lamyea-salma016)

---

## 📄 License

This project is licensed under the MIT License - see [LICENSE](LICENSE) file for details.

---

## 🙏 Acknowledgments

- Laravel Framework Team
- Tailwind CSS Team
- Open Source Community
- All Contributors

---

## 📝 Changelog

### Version 1.0.0 (November 2, 2025)
- ✨ Initial release
- 🏪 Multi-vendor marketplace
- 🔐 Google OAuth integration
- 💳 SSL Commerce payment
- 📱 Responsive design
- 📊 Analytics dashboard
- 🛒 Cart system
- ⭐ Review system

---

**Made with ❤️ for local producers and authentic products**

*Last Updated: November 2, 2025*
