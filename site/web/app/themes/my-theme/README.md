# WP Hyperland

A modern multilingual WordPress application built with the complete **Roots Stack** featuring Docker containerization, Polylang multilingual support, and a custom Sage theme.

## Tech Stack

### Roots Ecosystem
- **[Bedrock](https://roots.io/bedrock/)** - WordPress boilerplate with Composer dependency management
- **[Sage](https://roots.io/sage/)** - Advanced WordPress starter theme with Laravel Blade templating
- **[Acorn](https://github.com/roots/acorn)** - Laravel framework integration for WordPress

### Additional Technologies
- **Docker** - Containerized development environment (nginx, PHP 8.2+, MariaDB)
- **Polylang** - Multilingual plugin for Finnish and English (AU) support
- **Vite** - Modern frontend build tool with hot module replacement
- **Tailwind CSS** - Utility-first CSS framework
- **Laravel Blade** - PHP templating engine

## Prerequisites

Before installation, ensure you have:

- [Docker](https://www.docker.com/get-started) and Docker Compose
- [Node.js](https://nodejs.org/) (version 20.0.0 or higher)
- [Composer](https://getcomposer.org/) (optional, for local development)
- Git
- **Database export file** (should be provided separately)

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/Joonasjoonasjoonas/wp-hyperland.git
cd wp-hyperland
```

### 2. Environment Configuration

Create environment file:

```bash
cd site
cp .env.example .env
```

Configure your `.env` file:

```env
DB_NAME='wordpress'
DB_USER='wordpress'
DB_PASSWORD='wordpress'
DB_HOST='db'

WP_ENV='development'
WP_HOME='http://localhost:8080'
WP_SITEURL="${WP_HOME}/wp"

# Generate your keys here: https://roots.io/salts.html
AUTH_KEY='your-unique-key-here'
SECURE_AUTH_KEY='your-unique-key-here'
LOGGED_IN_KEY='your-unique-key-here'
NONCE_KEY='your-unique-key-here'
AUTH_SALT='your-unique-salt-here'
SECURE_AUTH_SALT='your-unique-salt-here'
LOGGED_IN_SALT='your-unique-salt-here'
NONCE_SALT='your-unique-salt-here'
```

### 3. Install PHP Dependencies

```bash
# From the site directory
composer install
```

### 4. Install Theme Dependencies

```bash
# Navigate to the Sage theme directory
cd web/app/themes/my-theme
composer install
npm install
```

### 5. Build Frontend Assets

```bash
# Development build with file watching
npm run dev

# OR for production build
npm run build
```

### 6. Start Docker Environment

```bash
# From the project root directory
cd ../../../../
docker-compose up -d
```

### 7. Import Database

**⚠️ Important: A database export file should be provided with this project.**

Import the database using one of these methods:

#### Option A: Using Docker command line
```bash
# Copy your database file to the project root, then:
docker-compose exec db mysql -u wordpress -p wordpress < your-database-file.sql
```

#### Option B: Using phpMyAdmin or database client
- Connect to `localhost:3306`
- Username: `wordpress`
- Password: `wordpress`
- Database: `wordpress`
- Import the provided SQL file

### 8. Install and Configure Polylang

1. **Download Polylang Plugin**:
   - Go to http://localhost:8080/wp/wp-admin
   - Navigate to Plugins → Add New
   - Search for "Polylang"
   - Install and activate the plugin

2. **Configure Languages**:
   - Go to Languages → Languages
   - Add languages in this order:
     - **Finnish (fi)** - Set as default language
     - **English (en_US)**

3. **Configure Language Settings**:
   - Go to Languages → Settings
   - Set URL modifications to "Different domains" or "The language is set from the directory name in pretty permalinks"
   - Configure other settings as needed

### 9. Verify String Translations

The theme includes pre-registered strings for Polylang translation:

- Hero section strings (title, description, buttons)
- Navigation elements
- Button texts
- Alt text descriptions

These can be translated via:
**Languages → String translations**

## Development

### Frontend Development

Start the Vite development server for hot reloading:

```bash
# From the theme directory (web/app/themes/my-theme)
npm run dev
```

Features:
- Hot module replacement
- Tailwind CSS compilation
- Blade template compilation
- Asset optimization

### Available Commands

#### Theme Development
```bash
# Development with hot reload
npm run dev

# Production build
npm run build

# Translation management
npm run translate        # Generate and update translation files
npm run translate:compile # Compile .po files to .mo and .json
```

#### Code Quality
```bash
# PHP code formatting (from site directory)
composer lint
composer lint:fix
```

### Docker Services

The application runs three services:

- **nginx** (port 8080) - Web server
- **php** - PHP-FPM 8.2+ with Composer and Acorn
- **db** (MariaDB) - Database server

#### Useful Docker Commands

```bash
# View logs
docker-compose logs -f

# Access PHP container (for WP-CLI, Acorn commands)
docker-compose exec php bash

# Access database
docker-compose exec db mysql -u wordpress -p wordpress

# Restart services
docker-compose restart

# Rebuild containers
docker-compose up --build
```

### WordPress CLI (WP-CLI)

Access WP-CLI through Docker:

```bash
docker-compose exec php wp --path=/var/www/html/web --info
```

### Laravel Acorn Commands

The theme uses Acorn for Laravel integration:

```bash
# Access PHP container first
docker-compose exec php bash

# Then run Acorn commands
cd web/app/themes/my-theme
wp acorn vendor:publish
wp acorn view:clear
```

## Project Structure
