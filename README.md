# Jobs Application

This is a simple jobs application where employers can create an account and post job listings. Each job is associated with specific tags to help categorize the job and includes a link to the official job offer or posting.

## Features

-   **Employer Account Creation**: Employers can create an account to manage their job listings.
-   **Job Posting**: Employers can post jobs with important details like title, salary, location, and a link to the job.
-   **Tags**: Each job can have associated tags to categorize it, making it easier to search and filter.
-   **Schedule Options**: Jobs can be labeled as Part-Time or Full-Time.
-   **Featured Job**: Employers can feature a job for extra visibility (additional cost).
-   **Job Listing URL**: Direct link to the job posting on an external website.

## Technologies Used

-   **Laravel**: PHP framework for the backend.
-   **Blade**: Templating engine for the frontend.
-   **Tailwind CSS**: For the styling and layout of the components.

## Installation

To set up and run this project locally:

1. Clone the repository:
    ```bash
    git clone https://github.com/kalboussiKarim/Job-Finder.git
    cd Job-Finder
    ```
2. Install PHP and JavaScript dependencies:
    ```bash
    composer install
    npm install
    ```
3. Create a .env file and configure your database settings:

    ```bash
    cp .env.example .env
    ```

4. Generate the application key:

    ```bash
    php artisan key:generate
    ```

5. Migrate the database:

    ```bash
    php artisan migrate
    ```

6. Run the development server:

    ```bash
    php artisan serve
    ```

7. Enjoy :p
