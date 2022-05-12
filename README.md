<p align="center">

  <p align="center">
    <a href="">
        <img src="public/images/favicon.png" alt="Logo" width="200" height="200">
    </a>
   </p>
  
  <h3 align="center">Owly Courses</h3>

  <p align="center">
    This is a project I developed using Laravel and MySQL. Owly is a fictional startup whose aim is to make complementary paths to primary learning, developing cross-functional courses that can involve multiple subjects, thus thriving the curiosity of the little ones.
    The application allows CRUD methods.
  </p>

  <br>
  <br>

  <h3 align="center">Preview</h3>

  <a href="">
    <img src="public/screenshots/" alt="">
  </a>

  <a href="">
    <img src="public/screenshots/" alt="">
  </a>

  <a href="">
    <img src="public/screenshots/" alt="">
  </a>

</p>

<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#links-contacts">Links & Contacts</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

## About The Project

User can perform various actions:


### Built With

-   [Laravel](https://laravel.com/)
-   [MySQL](https://www.mysql.com/)
-   [Tailwind CSS](https://tailwindcss.com/)

## Getting Started

### Prerequisites

Please check the official laravel installation guide for requirements before you start. [Official Documentation](https://laravel.com/docs/9.x/installation)

### Installation

1. Clone the repository locally with the git command:

    ```sh
    git clone 
    ```

2. Switch to the project folder:

    ```sh
    cd owly
    ```

3. Install composer dependencies:

    ```sh
    composer install
    ```

4. Copy the example env file and make the required configuration changes in the .env file:

```sh
 cp .env.example .env
```

6.  Generate an app encryption key:

```sh
 php artisan key:generate
```

7.  Create an empty database for our application with your preferred tools (ex. phpMyAdmin or MySQL Workbench)


8.  In the .env file, add database information to allow Laravel to connect to the database

    In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.


9.  Migrate the database

```sh
 php artisan migrate
```

10. Seed the database with dummy data to test the app faster (optional):

```sh
 php artisan db:seed
```

11. Start the local development server:

```sh
   php artisan serve
```

You can now access the server at http://localhost:8000

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Links & Contacts

[@Davide Lombardo](https://www.linkedin.com/in/davide-lombardo-profile/) 

Project Repository: [owly](https://github.com/Auro-93/bonny-state-bonuses-laravel)

Project Website: []()

Portfolio: [personal-portfolio](https://personal-portfolio-8073c.web.app/)

## Acknowledgements

-   [Best-README-Template](https://github.com/othneildrew/Best-README-Template)
-   [Awesome README](https://github.com/matiassingers/awesome-readme)
-   [Laravel](https://laravel.com/)
