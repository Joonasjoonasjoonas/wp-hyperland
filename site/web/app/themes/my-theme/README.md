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
- **Database export file** (included as `wp-hyperland-database.sql`)

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

### 3. Start Docker Environment

```bash
# From the project root directory
docker-compose up -d
```

### 4. Rebuild Docker Environment (First Time Only)

```bash
# Rebuild containers to include Composer and MariaDB client tools
docker-compose down
docker-compose up -d --build
```

### 5. Install PHP Dependencies

```bash
# Install Bedrock dependencies
docker-compose exec php composer install

# Install theme dependencies  
docker-compose exec php composer install --working-dir=web/app/themes/my-theme
```

### 6. Install Theme Frontend Dependencies

```bash
# Navigate to the theme directory on your host machine
cd site/web/app/themes/my-theme
npm install
```

### 7. Build Frontend Assets

```bash
# Development build with file watching
npm run dev

# OR for production build
npm run build
```

### 8. Import Database

**⚠️ Important: The database file `wp-hyperland-database.sql` is included with this project.**

```bash
# Import directly from your project root directory
cat wp-hyperland-database.sql | docker-compose exec -T db mariadb -u wordpress -pwordpress wordpress
```

#### Verify Import Success
- Visit **http://localhost:8080** - you should see the Hyperland website (not WordPress installation)
- If you still see the installation page, check Docker logs: `docker-compose logs db`

### 9. Install and Configure Polylang

1. **Download Polylang Plugin**:
   - Go to http://localhost:8080/wp/wp-admin 
   - Navigate to Plugins → Add New
   - Search for "Polylang"
   - Install and activate the plugin

2. **Configure Languages**:
   - Go to Languages → Languages
   - Add languages in this order:
     - **Finnish (fi)** - Set as default language
     - **English (en_AU)**

3. **Configure Language Settings**:
   - Go to Languages → Settings
   - Set URL modifications to "Different domains" or "The language is set from the directory name in pretty permalinks"
   - Configure other settings as needed

### 10. Verify String Translations

The theme includes pre-registered strings for Polylang translation:

- Hero section strings (title, description, buttons)
- Navigation elements
- Button texts
- Alt text descriptions

These can be translated via:
**Languages → String translations**

