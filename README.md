# Short Story Submission App

# Project Prerequisites
Ensure the following are installed on your system before proceeding:
1. PHP (or Xampp)
2. Composer
3. MySQL

# Getting Started
Follow these steps to set up and run the project locally.
## 1. Clone the Repository
```bash
git clone https://github.com/jaaaaayy/short-story-submission-app.git
```

Then move into the project directory:
```bash
cd short-story-submission-app
```

## 2. Install Dependencies
```bash
composer install
npm install && npm run build
```

## 3. Set Up Environment Configuration
Copy the example .env file:

```bash
cp .env.example .env
```
Then generate the application key:
```bash
php artisan key:generate
```

## 4. Configure Database
Open your .env file and update the database credentials:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password

```
## 5. Run Migrations
```bash
php artisan migrate
```

## 6. Create Storage Symlink
```bash
php artisan storage:link
```
This command links public/storage to storage/app/public, allowing uploaded files to be publicly accessible.

## 7. Start the Development Server
You can start the local server with:
```bash
composer run dev
```
Once the server is running, open your browser and navigate to http://localhost:8000.

---

By following these steps, you will have the Laravel project up and running on your local machine.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
