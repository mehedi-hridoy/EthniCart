# EthniCart - Complete Setup Guide

## Table of Contents
1. [Database Setup](#database-setup)
2. [Environment Configuration](#environment-configuration)
3. [Admin Setup](#admin-setup)
4. [Google OAuth Setup](#google-oauth-setup)
5. [Running the Application](#running-the-application)

---

## 1. Database Setup

### Step 1: Create Database
Create a new MySQL/MariaDB database for your EthniCart application.

```sql
-- Open MySQL/MariaDB client
mysql -u root -p

-- Create database
CREATE DATABASE ethnicart_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

-- Create a dedicated user (recommended for production)
CREATE USER 'ethnicart_user'@'localhost' IDENTIFIED BY 'your_secure_password';

-- Grant privileges
GRANT ALL PRIVILEGES ON ethnicart_db.* TO 'ethnicart_user'@'localhost';
FLUSH PRIVILEGES;

-- Exit
EXIT;
```

### Step 2: Database Naming Conventions
- **Development**: `ethnicart_dev` or `ethnicart_local`
- **Staging**: `ethnicart_staging`
- **Production**: `ethnicart_production` or `ethnicart_db`

---

## 2. Environment Configuration

### Step 1: Copy Environment File
```bash
cp .env.example .env
```

### Step 2: Configure Basic Settings

#### Application Settings
```env
APP_NAME="EthniCart"
APP_ENV=local                    # local, staging, production
APP_KEY=                         # Will be generated
APP_DEBUG=true                   # Set to false in production
APP_URL=http://localhost:8000    # Your application URL
```

#### Database Configuration
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ethnicart_db         # Database name you created
DB_USERNAME=ethnicart_user       # Database user
DB_PASSWORD=your_secure_password # Database password
```

#### Session & Cache Configuration
```env
SESSION_DRIVER=file
SESSION_LIFETIME=120
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

#### Mail Configuration (Optional - for notifications)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@ethnicart.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Step 3: Generate Application Key
```bash
php artisan key:generate
```

### Step 4: Run Migrations
```bash
# Run all migrations
php artisan migrate

# Or with fresh start (drops all tables and recreates)
php artisan migrate:fresh
```

### Step 5: Run Seeders (Optional)
```bash
# Seed all data
php artisan db:seed

# Or seed specific seeder
php artisan db:seed --class=AdminUserSeeder
```

---

## 3. Admin Setup

### Method 1: Using Database Seeder (Recommended for Development)

#### Step 1: Configure Admin Credentials in .env
```env
# --- Admin Setup (deployment helpers) ---
ADMIN_EMAIL=admin@ethnicart.com
ADMIN_PASSWORD=SecurePassword123!

# Optional: one-time token required to access /admin/register in non-local env
ADMIN_SETUP_TOKEN=your-secret-setup-token-123

# Optional: token required to access /admin/login (any environment)
# If set, add ?token=VALUE to the URL
ADMIN_LOGIN_TOKEN=your-admin-login-token-456
```

⚠️ **Important Security Notes:**
- Never commit real admin credentials to version control
- Use strong passwords (minimum 12 characters with mixed case, numbers, and symbols)
- Change default credentials immediately after first login
- For production, use environment variables or secrets management

#### Step 2: Run Admin Seeder
```bash
php artisan db:seed --class=AdminUserSeeder
```

#### Step 3: Verify Admin User
```bash
# Open tinker to verify
php artisan tinker

# Check if admin exists
>>> \App\Models\User::where('email', 'admin@ethnicart.com')->first();
>>> exit
```

### Method 2: Manual Admin Creation via Tinker

```bash
php artisan tinker
```

```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

$admin = User::create([
    'name' => 'Admin User',
    'email' => 'admin@ethnicart.com',
    'password' => Hash::make('SecurePassword123!'),
    'email_verified_at' => now(),
    'is_admin' => true, // If you have admin column
    'role' => 'admin',  // If you have role column
]);

echo "Admin created: " . $admin->email;
exit;
```

### Method 3: Using Admin Registration Route (Protected)

If your application has an admin registration route protected by a setup token:

1. Set the `ADMIN_SETUP_TOKEN` in your `.env` file
2. Navigate to: `http://localhost:8000/admin/register?token=your-secret-setup-token-123`
3. Fill in the registration form
4. After registration, remove or change the `ADMIN_SETUP_TOKEN`

### Admin Login

**Without Token Protection:**
```
http://localhost:8000/admin/login
```

**With Token Protection (if ADMIN_LOGIN_TOKEN is set):**
```
http://localhost:8000/admin/login?token=your-admin-login-token-456
```

### Changing Admin Password

```bash
php artisan tinker
```

```php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

$admin = User::where('email', 'admin@ethnicart.com')->first();
$admin->password = Hash::make('NewSecurePassword123!');
$admin->save();

echo "Password updated for: " . $admin->email;
exit;
```

---

## 4. Google OAuth Setup

### Step 1: Create Google Cloud Project

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select existing one
3. Name it: "EthniCart" or similar

### Step 2: Enable Google+ API

1. Go to **APIs & Services** > **Library**
2. Search for "Google+ API" or "Google Identity"
3. Click **Enable**

### Step 3: Create OAuth 2.0 Credentials

1. Go to **APIs & Services** > **Credentials**
2. Click **Create Credentials** > **OAuth client ID**
3. Configure consent screen if prompted:
   - User Type: External (for public) or Internal (for organization)
   - App name: EthniCart
   - User support email: your-email@domain.com
   - Developer contact: your-email@domain.com
4. Select Application type: **Web application**
5. Name: "EthniCart Web Client"
6. Add **Authorized JavaScript origins**:
   - `http://localhost:8000` (development)
   - `https://yourdomain.com` (production)
7. Add **Authorized redirect URIs**:
   - `http://localhost:8000/auth/google/callback` (development)
   - `https://yourdomain.com/auth/google/callback` (production)
8. Click **Create**
9. Copy the **Client ID** and **Client Secret**

### Step 4: Configure .env File

```env
# --- Google OAuth Configuration ---
GOOGLE_CLIENT_ID=your-google-client-id-here.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=your-google-client-secret-here
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback
```

**For Production:**
```env
GOOGLE_REDIRECT_URI=https://yourdomain.com/auth/google/callback
```

### Step 5: Install Socialite Package (if not already installed)

```bash
composer require laravel/socialite
```

### Step 6: Configure config/services.php

```php
return [
    // ... other services
    
    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI'),
    ],
];
```

### Step 7: Test Google Login

1. Start your application: `php artisan serve`
2. Navigate to: `http://localhost:8000`
3. Click on "Login with Google" button
4. You should be redirected to Google's consent screen
5. After authorization, you'll be redirected back to your application

---

## 5. Running the Application

### Development Environment

```bash
# Start the development server
php artisan serve

# The application will be available at:
# http://127.0.0.1:8000
```

### Clear Cache (if needed)

```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Storage Link (for file uploads)

```bash
# Create symbolic link from public/storage to storage/app/public
php artisan storage:link
```

### File Permissions (Linux/Mac)

```bash
# Set proper permissions
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---

## Environment Variables Summary

### Complete .env Configuration Template

```env
# --- Application ---
APP_NAME="EthniCart"
APP_ENV=local
APP_KEY=base64:YourGeneratedKeyHere
APP_DEBUG=true
APP_URL=http://localhost:8000

# --- Database ---
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ethnicart_db
DB_USERNAME=ethnicart_user
DB_PASSWORD=your_secure_password

# --- Session & Cache ---
SESSION_DRIVER=file
SESSION_LIFETIME=120
CACHE_DRIVER=file
QUEUE_CONNECTION=sync

# --- Admin Setup (deployment helpers) ---
# ⚠️ Do not commit real values to version control!
ADMIN_EMAIL=admin@ethnicart.com
ADMIN_PASSWORD=SecurePassword123!
ADMIN_SETUP_TOKEN=your-secret-setup-token-123
ADMIN_LOGIN_TOKEN=your-admin-login-token-456

# --- Google OAuth ---
GOOGLE_CLIENT_ID=your-client-id.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/google/callback

# --- Mail Configuration (Optional) ---
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@ethnicart.com
MAIL_FROM_NAME="${APP_NAME}"

# --- SSL Commerce (Optional - for payment gateway) ---
SSLCOMMERZ_STORE_ID=
SSLCOMMERZ_STORE_PASSWORD=
SSLCOMMERZ_SANDBOX=true
```

---

## Security Best Practices

### 1. Environment Variables
- ✅ Never commit `.env` file to version control
- ✅ Add `.env` to `.gitignore`
- ✅ Use different credentials for each environment
- ✅ Use strong, random passwords
- ✅ Rotate credentials regularly

### 2. Admin Access
- ✅ Change default admin credentials immediately
- ✅ Use strong passwords (12+ characters)
- ✅ Enable two-factor authentication (if available)
- ✅ Limit admin IP addresses in production
- ✅ Remove setup tokens after initial setup

### 3. Production Deployment
- ✅ Set `APP_ENV=production`
- ✅ Set `APP_DEBUG=false`
- ✅ Use HTTPS (`APP_URL=https://yourdomain.com`)
- ✅ Enable rate limiting
- ✅ Set up regular backups
- ✅ Monitor logs for suspicious activity

### 4. Database Security
- ✅ Use dedicated database user with limited privileges
- ✅ Never use root user for application
- ✅ Regular database backups
- ✅ Enable SSL for database connections in production

---

## Troubleshooting

### Common Issues

#### 1. Migration Errors
```bash
# Clear config cache
php artisan config:clear

# Check database connection
php artisan tinker
>>> DB::connection()->getPdo();
```

#### 2. Google OAuth Not Working
- Verify redirect URI matches exactly in Google Console
- Check if Google+ API is enabled
- Clear browser cache and cookies
- Verify credentials in `.env` file

#### 3. Admin Login Issues
- Verify admin user exists in database
- Check email and password
- Ensure token (if required) is correct
- Clear sessions: `php artisan session:flush`

#### 4. Storage/Upload Issues
```bash
# Recreate storage link
php artisan storage:link

# Fix permissions
chmod -R 775 storage
```

---

## Support & Documentation

- **Laravel Documentation**: https://laravel.com/docs
- **Socialite Documentation**: https://laravel.com/docs/socialite
- **Google OAuth Guide**: https://developers.google.com/identity/protocols/oauth2

---

## Quick Start Checklist

- [ ] Create database
- [ ] Copy and configure `.env` file
- [ ] Generate application key (`php artisan key:generate`)
- [ ] Run migrations (`php artisan migrate`)
- [ ] Create admin user (via seeder or tinker)
- [ ] Set up Google OAuth credentials
- [ ] Configure `.env` with Google credentials
- [ ] Create storage link (`php artisan storage:link`)
- [ ] Start development server (`php artisan serve`)
- [ ] Test admin login
- [ ] Test Google OAuth login
- [ ] Change default admin password

**Last Updated**: November 2, 2025  
**Version**: 1.0