# 🛍️ EthniCart

**EthniCart** is a Laravel-based e-commerce web application designed to promote and sell traditional and ethnic products. It features a clean, simple, and functional layout for managing users, sellers, and items rooted in cultural heritage. Ideal for supporting local artisans and promoting ethnic diversity.

---

## 🚀 Installation & Setup Guide

Follow the steps below to run EthniCart on your local development environment.

### 1. Clone the Repository

```bash
git clone https://github.com/mehedi-hridoy/EthniCart.git
```

### 2. Navigate into the Project Directory

```bash
cd EthniCart
```

### 3. Open the Project in Your Code Editor

If you use **VS Code**, run:

```bash
code .
```

Or open it manually in any IDE you use.

### 4. Start XAMPP Server

- Open **XAMPP**.
- Start both **Apache** and **MySQL** modules.

### 5. Install Dependencies Using Composer

```bash
composer update
```
⚠️ Troubleshooting composer update Issues
If you face an error while running composer update, do the following:

Go to your C Drive → xampp → php look for the php.ini file.

Open php.ini in a text editor.

Search for the line:        
;extension=gd

Remove the ; at the beginning to enable the GD extension:
### 6. Copy the `.env` File

```bash
cp .env.example .env
```

### 7. Configure Your Environment Variables

Open the `.env` file and update the following lines:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=
```

> Replace `your_database_name` with the name of your MySQL database.

---

### 8. Set Admin Credentials

Add the following to your `.env` file:

```env
ADMIN_USERNAME=your_username
ADMIN_PASSWORD_HASH=your_hashed_password
```

To generate the hashed password:

- Visit: https://bcrypt.online/
- Enter your desired password.
- Copy the hashed output and paste it as `ADMIN_PASSWORD_HASH`.

---

### 9. Generate the Application Key

```bash
php artisan key:generate
```

### 10. Run Database Migrations

```bash
php artisan migrate
```

### 11. Create Storage Symlink

```bash
php artisan storage:link
```

### 12. Start the Development Server

```bash
php artisan serve
```

---

Now, visit your local server in a browser:

```
http://127.0.0.1:8000
```

---

## 🎯 Features

- Admin login with hashed credentials
- Product and seller management
- Laravel MVC architecture
- Clean user interface
- Secure environment-based settings

---

## 🙋‍♂️ Author

Developed by [Mehedi Hasan Hridoy](https://github.com/mehedi-hridoy)
Developed by [Umme Salma Lamyea](https://github.com/lamyea-salma016)

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).
