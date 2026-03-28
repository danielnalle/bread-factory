<p align="center">
  <h1 align="center">🍞 Bread Factory Management System</h1>
</p>

## About The Project

The **Bread Factory Management System** is a modern, responsive web application built to streamline operations for a bakery business. This platform features both a customer-facing landing page and a comprehensive Admin Dashboard to manage users, customers, products, categories, and orders seamlessly.

Built on the robust **Laravel 11** framework, the frontend relies on **Tailwind CSS** and **Flowbite** components—compiled rapidly using **Vite** to ensure highly interactive and aesthetic user experiences.

### Key Features
- **Admin Dashboard**: A centralized hub for monitoring sales, orders, and system performance.
- **Product & Category Management**: Easily create, update, and categorize bakery products.
- **Customer & Employee Management**: Organize personnel and customer data securely.
- **Order & Payment Processing**: Manage incoming orders, check payment statuses, and track fulfillment.
- **Responsive UI/UX**: Designed to work beautifully on mobile, tablet, and desktop devices using Flowbite & Tailwind.

---

## Tech Stack

- **Backend**: [Laravel 11](https://laravel.com/) (PHP 8.2+)
- **Frontend**: Blade Templates, [TailwindCSS 3](https://tailwindcss.com/), [Flowbite 2.5](https://flowbite.com/)
- **Asset Bundling**: [Vite](https://vitejs.dev/)
- **Database**: SQLite / MySQL / PostgreSQL (Configurable)

---

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

Ensure you have the following installed on your local development machine:
- PHP version 8.2 or higher
- Composer
- Node.js (v18+) and npm
- Git

### Installation

1. **Clone the repository**
   ```sh
   git clone https://github.com/danielnalle/bread-factory.git
   cd bread-factory
   ```

2. **Install PHP Dependencies**
   ```sh
   composer install
   ```

3. **Install NPM Packages**
   ```sh
   npm install
   ```

4. **Environment Setup**
   Copy the example environment file and generate a unique application key:
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database Setup**
   By default, Laravel 11 may use SQLite. You can adjust the database connection in `.env`.
   Run the migrations to set up the database schema and seed the initial data:
   ```sh
   php artisan migrate --seed
   ```

6. **Compile Frontend Assets**
   Compile TailwindCSS and Flowbite assets via Vite for development:
   ```sh
   npm run dev
   ```

7. **Serve the Application**
   Run Laravel's built-in development server on a separate terminal:
   ```sh
   php artisan serve
   ```

8. **Access the application**
   Open your browser and visit: `http://localhost:8000`

---

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## License

Distributed under the MIT License. See `LICENSE` for more information.
