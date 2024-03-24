# misfits

git clone <repository_url> <folder_name>
Install Composer Dependencies
composer install

Generate an application key.
php artisan key:generate

Duplicate the .env.example file and rename it to .env.
Open the .env file and set your database connection details.
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Run database migrations to create tables.
php artisan migrate

Seed the Database (Optional)
php artisan db:seed

Install Node.js Dependencies (Optional)
npm install
# or
yarn install

Compile Assets (Optional)
npm run dev
# or
yarn dev

Start the Development Server
php artisan serve

Setting up an existing Laravel project from Git may seem daunting at first, but by following these step-by-step instructions, you can quickly get the project up and running in your local development environment. Whether you’re a newcomer to the project or an experienced Laravel developer, these steps will ensure a smooth onboarding process.
