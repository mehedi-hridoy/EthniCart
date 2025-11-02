# EthniCart - cPanel Deployment Guide

## 📋 Table of Contents
1. [Pre-Deployment Checklist](#pre-deployment-checklist)
2. [cPanel Requirements](#cpanel-requirements)
3. [Deployment Steps](#deployment-steps)
4. [Domain Configuration](#domain-configuration)
5. [Database Setup](#database-setup)
6. [File Upload Methods](#file-upload-methods)
7. [Environment Configuration](#environment-configuration)
8. [SSL Certificate Setup](#ssl-certificate-setup)
9. [Post-Deployment Tasks](#post-deployment-tasks)
10. [Troubleshooting](#troubleshooting)
11. [Maintenance & Updates](#maintenance--updates)

---

## ✅ Pre-Deployment Checklist

Before deploying to cPanel, ensure you have:

- [ ] cPanel hosting account with SSH access (recommended)
- [ ] Domain name configured and pointing to your hosting
- [ ] PHP 8.1+ available on your hosting
- [ ] MySQL database access
- [ ] Composer installed on server (or ability to upload vendor folder)
- [ ] SSL certificate (Let's Encrypt free SSL recommended)
- [ ] Backup of your local database
- [ ] All environment variables ready
- [ ] Payment gateway credentials (SSL Commerce)
- [ ] Google OAuth credentials configured for production domain

### Important Notes:
- ⚠️ Shared hosting may have limitations (memory, execution time)
- ⚠️ Some hosts don't allow `composer install` - you'll upload vendor folder
- ⚠️ Check if your host supports Laravel requirements
- ⚠️ Ensure PHP version is 8.1 or higher

---

## 🖥️ cPanel Requirements

### Minimum Hosting Specifications
```
✓ PHP Version: 8.1 or higher
✓ MySQL Version: 5.7+ or MariaDB 10.3+
✓ Disk Space: 5GB minimum (10GB recommended)
✓ RAM: 512MB minimum (1GB recommended)
✓ PHP Extensions: See below
```

### Required PHP Extensions
```
✓ BCMath, Ctype, Fileinfo, JSON, Mbstring
✓ OpenSSL, PDO, Tokenizer, XML
✓ GD or Imagick (for image processing)
✓ Zip, cURL
```

### How to Check PHP Version in cPanel
1. Login to cPanel
2. Go to **MultiPHP Manager** or **Select PHP Version**
3. Select PHP 8.1 or higher for your domain
4. Enable required extensions

---

## 🚀 Deployment Steps

### Method 1: Using Git (Recommended)

#### Step 1: Enable Git Version Control in cPanel

1. Login to your cPanel
2. Navigate to **Git™ Version Control**
3. Click **Create**
4. Fill in the details:
   - **Clone URL**: `https://github.com/mehedi-hridoy/EthniCart.git`
   - **Repository Path**: `repositories/EthniCart` (or any path)
   - **Repository Name**: `EthniCart`
5. Click **Create**

#### Step 2: Setup Document Root

The correct structure should be:
```
/home/yourusername/
├── public_html/              # Your domain's document root
│   └── (Laravel public folder contents will go here)
├── ethnicart/                # Your Laravel application
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── database/
│   ├── public/              # This folder's contents go to public_html
│   ├── resources/
│   ├── routes/
│   ├── storage/
│   ├── vendor/
│   └── ...
└── repositories/            # Git repository location
```

#### Step 3: Clone Repository via Terminal (SSH)

If SSH access is available:

```bash
# Connect via SSH
ssh yourusername@yourserver.com

# Navigate to home directory
cd ~

# Clone the repository
git clone https://github.com/mehedi-hridoy/EthniCart.git ethnicart

# Navigate to project
cd ethnicart

# Checkout your branch
git checkout development
```

### Method 2: Upload via File Manager (No Git)

#### Step 1: Prepare Local Files

On your local machine:

```bash
# Navigate to project
cd /home/hridoy/Videos/EthniCart

# Install dependencies with production flag
composer install --optimize-autoloader --no-dev

# Build assets for production
npm run build

# Create a zip file (exclude unnecessary files)
zip -r ethnicart.zip . -x "*.git*" "node_modules/*" ".env" "storage/logs/*"
```

#### Step 2: Upload to cPanel

1. Login to cPanel
2. Open **File Manager**
3. Navigate to home directory (not public_html yet)
4. Create folder named `ethnicart`
5. Upload `ethnicart.zip`
6. Right-click → **Extract**
7. Delete zip file after extraction

### Method 3: Upload via FTP

```bash
# Using FileZilla or any FTP client
Host: ftp.yourdomain.com
Username: your_cpanel_username
Password: your_cpanel_password
Port: 21

# Upload entire project to /home/yourusername/ethnicart/
```

---

## 🌐 Domain Configuration

### Step 1: Configure Document Root

**IMPORTANT**: Laravel's entry point is the `public` folder, not the root.

#### Option A: Primary Domain
1. Go to cPanel → **File Manager**
2. Move all contents from `ethnicart/public/` to `public_html/`
3. Update `public_html/index.php`:

```php
// Before (Line 16-17)
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';

// After (Update paths)
require __DIR__.'/../ethnicart/vendor/autoload.php';
$app = require_once __DIR__.'/../ethnicart/bootstrap/app.php';
```

#### Option B: Subdomain
1. Go to cPanel → **Subdomains**
2. Create subdomain: `shop.yourdomain.com`
3. Set document root: `/home/username/ethnicart/public`

#### Option C: Addon Domain
1. Go to cPanel → **Addon Domains**
2. Add your domain
3. Set document root: `/home/username/ethnicart/public`

### Step 2: Update .htaccess (if needed)

Create/update `public_html/.htaccess`:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    
    # Redirect to HTTPS
    RewriteCond %{HTTPS} off
    RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
    
    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
    
    # Redirect Trailing Slashes If Not A Folder
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]
    
    # Send Requests To Front Controller
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

# Disable directory browsing
Options -Indexes

# Prevent access to .env file
<Files .env>
    Order allow,deny
    Deny from all
</Files>
```

---

## 🗄️ Database Setup

### Step 1: Create Database in cPanel

1. Login to cPanel
2. Go to **MySQL® Databases**
3. Create a new database:
   - Database Name: `username_ethnicart` (cPanel adds prefix automatically)
4. Create a database user:
   - Username: `username_ethnicart_user`
   - Password: Use strong password (save it)
5. Add user to database:
   - User: `username_ethnicart_user`
   - Database: `username_ethnicart`
   - Privileges: **ALL PRIVILEGES**

### Step 2: Import Database

#### Method A: Using phpMyAdmin
1. Go to cPanel → **phpMyAdmin**
2. Select your database
3. Click **Import** tab
4. Choose your SQL file (exported from local)
5. Click **Go**

#### Method B: Export Local Database First

On your local machine:

```bash
# Export your local database
php artisan tinker
>>> DB::statement('SET FOREIGN_KEY_CHECKS=0;');
>>> exit

# Using mysqldump
mysqldump -u root -p ethnicart_db > ethnicart_backup.sql

# Or export via phpMyAdmin
```

Then import to cPanel as shown above.

### Step 3: Update Database Credentials

Note your database details:
```
DB_HOST: localhost (usually)
DB_PORT: 3306
DB_DATABASE: username_ethnicart
DB_USERNAME: username_ethnicart_user
DB_PASSWORD: your_password
```

---

## 📤 File Upload Methods

### Using File Manager (Easiest)

1. **Upload Project Files**
   - Go to cPanel → File Manager
   - Navigate to home directory
   - Create `ethnicart` folder
   - Upload all files (except node_modules, .git)

2. **Upload Vendor Folder** (if composer not available)
   - Zip vendor folder locally: `zip -r vendor.zip vendor/`
   - Upload and extract in cPanel

3. **Set Permissions**
   ```
   storage/ → 775
   bootstrap/cache/ → 775
   ```

### Using SSH (Faster for Large Projects)

```bash
# Connect to server
ssh username@yourserver.com

# Navigate to project
cd ~/ethnicart

# Install composer dependencies (if composer available)
composer install --optimize-autoloader --no-dev

# Set permissions
chmod -R 775 storage bootstrap/cache
```

---

## ⚙️ Environment Configuration

### Step 1: Create .env File

1. Go to cPanel → File Manager
2. Navigate to `/home/username/ethnicart/`
3. Click **+ File** → Create `.env`
4. Edit the file with your production settings:

```env
# --- Application Settings ---
APP_NAME="EthniCart"
APP_ENV=production
APP_KEY=                           # Will generate
APP_DEBUG=false                    # MUST be false in production
APP_URL=https://yourdomain.com     # Your actual domain

# --- Database Configuration ---
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=username_ethnicart
DB_USERNAME=username_ethnicart_user
DB_PASSWORD=your_strong_password

# --- Session & Cache ---
SESSION_DRIVER=file
SESSION_LIFETIME=120
CACHE_DRIVER=file
QUEUE_CONNECTION=sync

# --- Mail Configuration ---
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com           # Or your hosting's SMTP
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"

# --- Google OAuth (Production) ---
GOOGLE_CLIENT_ID=your-client-id.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=your-client-secret
GOOGLE_REDIRECT_URI=https://yourdomain.com/auth/google/callback

# --- SSL Commerce (Production) ---
SSLCOMMERZ_STORE_ID=your_store_id
SSLCOMMERZ_STORE_PASSWORD=your_password
SSLCOMMERZ_SANDBOX=false           # false for production

# --- Admin Setup ---
ADMIN_EMAIL=admin@yourdomain.com
ADMIN_PASSWORD=SecurePassword123!
```

### Step 2: Generate Application Key

#### Via Terminal SSH:
```bash
cd ~/ethnicart
php artisan key:generate
```

#### Via Artisan Tinker (if SSH not available):
1. Create a PHP file in public_html: `generate-key.php`
```php
<?php
require __DIR__.'/../ethnicart/vendor/autoload.php';
$app = require_once __DIR__.'/../ethnicart/bootstrap/app.php';

$key = 'base64:'.base64_encode(random_bytes(32));
echo "Copy this key to your .env file:\n";
echo "APP_KEY=" . $key;

// Update .env file
$envFile = __DIR__.'/../ethnicart/.env';
$envContent = file_get_contents($envFile);
$envContent = preg_replace('/APP_KEY=.*/', 'APP_KEY='.$key, $envContent);
file_put_contents($envFile, $envContent);

echo "\n\nKey has been set in .env file!";
?>
```

2. Visit: `https://yourdomain.com/generate-key.php`
3. Delete the file after use!

### Step 3: Run Migrations

#### Via SSH:
```bash
cd ~/ethnicart
php artisan migrate --force
```

#### Via Custom Script (if no SSH):
Create `public_html/migrate.php`:
```php
<?php
require __DIR__.'/../ethnicart/vendor/autoload.php';
$app = require_once __DIR__.'/../ethnicart/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->call('migrate', ['--force' => true]);
echo "Migrations completed!";
?>
```

Visit: `https://yourdomain.com/migrate.php` then delete it!

### Step 4: Create Storage Link

#### Via SSH:
```bash
cd ~/ethnicart
php artisan storage:link
```

#### Manually in File Manager:
1. Navigate to `public_html/`
2. Create symbolic link named `storage` pointing to `../ethnicart/storage/app/public`

Or create a PHP script `public_html/link-storage.php`:
```php
<?php
$target = __DIR__.'/../ethnicart/storage/app/public';
$link = __DIR__.'/storage';

if (file_exists($link)) {
    unlink($link);
}

symlink($target, $link);
echo "Storage link created!";
?>
```

Visit and then delete!

### Step 5: Optimize for Production

Via SSH:
```bash
cd ~/ethnicart

# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer dump-autoload --optimize
```

---

## 🔒 SSL Certificate Setup

### Option 1: Free Let's Encrypt SSL (Recommended)

1. Login to cPanel
2. Go to **SSL/TLS Status**
3. Find your domain
4. Click **Run AutoSSL**
5. Wait for installation (usually 2-5 minutes)
6. SSL will auto-renew every 90 days

### Option 2: Manual SSL Certificate

1. Go to cPanel → **SSL/TLS**
2. Click **Manage SSL Sites**
3. Select your domain
4. Paste your SSL certificate, private key, and CA bundle
5. Click **Install Certificate**

### Force HTTPS

Add to your `.htaccess` (already included in config above):
```apache
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

---

## ✅ Post-Deployment Tasks

### 1. Update Google OAuth Redirect URI

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Select your project
3. Go to **Credentials**
4. Edit your OAuth 2.0 Client
5. Add authorized redirect URI:
   ```
   https://yourdomain.com/auth/google/callback
   ```
6. Save changes

### 2. Update SSL Commerce Settings

1. Login to [SSL Commerce](https://sslcommerz.com/)
2. Update your store settings
3. Set production URLs:
   - Success URL: `https://yourdomain.com/payment/success`
   - Fail URL: `https://yourdomain.com/payment/fail`
   - Cancel URL: `https://yourdomain.com/payment/cancel`
   - IPN URL: `https://yourdomain.com/payment/ipn`

### 3. Create Admin User

Via SSH:
```bash
cd ~/ethnicart
php artisan tinker

# Create admin
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin',
    'email' => 'admin@yourdomain.com',
    'password' => Hash::make('YourSecurePassword123!'),
    'email_verified_at' => now(),
    'role' => 'admin'
]);

exit
```

### 4. Set File Permissions

```bash
# Via SSH
cd ~/ethnicart
chmod -R 775 storage bootstrap/cache
chmod -R 755 public

# Via File Manager
# Right-click folders → Change Permissions
storage/ → 775
bootstrap/cache/ → 775
public/ → 755
```

### 5. Test Website

- [ ] Homepage loads correctly
- [ ] CSS and JS working
- [ ] Images loading
- [ ] Product pages working
- [ ] Search functionality
- [ ] Cart operations
- [ ] Login/Register
- [ ] Google OAuth
- [ ] Admin panel access
- [ ] Seller dashboard
- [ ] Payment gateway (test mode first)

### 6. Setup Cron Jobs (for scheduled tasks)

1. Go to cPanel → **Cron Jobs**
2. Add new cron job:
   ```
   * * * * * cd /home/username/ethnicart && php artisan schedule:run >> /dev/null 2>&1
   ```

### 7. Configure Email

Test email functionality:
```bash
php artisan tinker

# Send test email
Mail::raw('Test email from EthniCart', function($message) {
    $message->to('your-email@gmail.com')
            ->subject('Test Email');
});
```

---

## 🔍 Troubleshooting

### Issue 1: 500 Internal Server Error

**Solution:**
```bash
# Check error logs
# cPanel → Errors → Error Log

# Common fixes:
1. Check .htaccess file exists in public_html/
2. Verify file permissions (755 for folders, 644 for files)
3. Check .env file exists and has correct values
4. Clear cache: php artisan cache:clear
5. Check storage/logs/laravel.log for detailed errors
```

### Issue 2: Page Not Found (404) for all routes

**Solution:**
```apache
# Add to .htaccess
Options +FollowSymLinks -MultiViews
RewriteEngine On
RewriteBase /

# Also check mod_rewrite is enabled in Apache
```

### Issue 3: CSS/JS Not Loading

**Solution:**
1. Check if files exist in `public_html/` folder
2. Run `npm run build` locally and re-upload
3. Clear browser cache
4. Check .htaccess allows access to CSS/JS files

### Issue 4: Images Not Uploading

**Solution:**
```bash
# Check storage permissions
chmod -R 775 storage/app/public

# Verify storage link exists
ls -la public_html/storage

# Recreate if needed
php artisan storage:link
```

### Issue 5: Database Connection Error

**Solution:**
1. Verify database name, username, password in .env
2. Check if database user has all privileges
3. Test connection via phpMyAdmin
4. Ensure DB_HOST is 'localhost' or correct server

### Issue 6: Composer Dependencies Missing

**Solution:**
```bash
# If composer available on server
composer install --no-dev --optimize-autoloader

# Otherwise, upload vendor folder from local:
# 1. Zip vendor folder locally
# 2. Upload to server
# 3. Extract in project root
```

### Issue 7: Google OAuth Not Working

**Solution:**
1. Update redirect URI in Google Console
2. Change from `localhost` to `yourdomain.com`
3. Clear config cache: `php artisan config:clear`
4. Verify credentials in .env

### Issue 8: Payment Gateway Errors

**Solution:**
1. Switch from sandbox to production mode
2. Update SSL Commerce dashboard with production URLs
3. Verify store credentials
4. Check SSL certificate is working (HTTPS required)

### Issue 9: Session/Cart Not Persisting

**Solution:**
```env
# Update .env
SESSION_DRIVER=file
SESSION_DOMAIN=.yourdomain.com

# Clear sessions
php artisan session:flush
```

### Issue 10: Slow Performance

**Solution:**
```bash
# Enable caching
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Enable OPcache in PHP settings (cPanel)
# Enable compression in .htaccess
```

---

## 🔄 Maintenance & Updates

### Regular Updates

```bash
# Connect via SSH
ssh username@yourserver.com
cd ~/ethnicart

# Pull latest changes
git pull origin main

# Update dependencies
composer install --no-dev --optimize-autoloader

# Run migrations
php artisan migrate --force

# Clear and recache
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Database Backup

#### Via cPanel
1. Go to **phpMyAdmin**
2. Select database
3. Click **Export**
4. Choose **Quick** method
5. Download SQL file

#### Via Command Line
```bash
# Backup database
mysqldump -u username -p database_name > backup_$(date +%Y%m%d).sql

# Schedule automated backups via Cron Job
```

### File Backup

1. Go to cPanel → **Backup Wizard**
2. Click **Backup** → **Full Backup**
3. Download to local computer
4. Schedule regular backups

---

## 📝 Quick Deployment Checklist

- [ ] Upload project files to server
- [ ] Set up database in cPanel
- [ ] Import database tables
- [ ] Configure .env file with production settings
- [ ] Generate application key
- [ ] Run migrations
- [ ] Create storage symlink
- [ ] Set file permissions (775 for storage)
- [ ] Configure document root to public folder
- [ ] Install SSL certificate
- [ ] Update Google OAuth redirect URI
- [ ] Configure SSL Commerce for production
- [ ] Create admin user
- [ ] Cache configuration (config, route, view)
- [ ] Test all functionality
- [ ] Set up cron jobs
- [ ] Configure backups

---

## 🆘 Need Help?

### Common Commands Quick Reference

```bash
# Navigate to project
cd ~/ethnicart

# Generate key
php artisan key:generate

# Run migrations
php artisan migrate --force

# Create storage link
php artisan storage:link

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Cache for production
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Check logs
tail -f storage/logs/laravel.log
```

### Getting Support

- Check cPanel documentation
- Contact your hosting provider for:
  - SSH access
  - PHP version upgrade
  - Extension installation
  - Server configuration

---

## 🎉 Success!

If everything is working:
- ✅ Site loads at `https://yourdomain.com`
- ✅ SSL certificate shows padlock icon
- ✅ All pages load correctly
- ✅ Database connected successfully
- ✅ Images and assets display properly
- ✅ Authentication working
- ✅ Payment gateway functional

**Congratulations! Your EthniCart is now live! 🚀**

---

*Last Updated: November 2, 2025*
*Version: 1.0*
