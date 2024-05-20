# PHP MVC Projects Repository

This repository contains two PHP projects that have been refactored to implement the MVC (Model-View-Controller) design pattern. The original projects are from [PHPGurukul](https://phpgurukul.com/) and are:

1. [Student Result Management System](https://phpgurukul.com/student-result-management-system/)
2. [Online Fire Reporting System Using PHP and MySQL](https://phpgurukul.com/online-fire-reporting-system-using-php-and-mysql/)

 
## Refactoring to MVC

Both projects have been refactored to follow the MVC design pattern. The refactored structure separates the code into:

- Models: Handling data and database interactions.
- Views: Managing the presentation layer.
- Controllers: Handling the application logic and user input.

## Getting Started

### Prerequisites

- XAMPP or any compatible local server environment.
- Web browser.
- Basic knowledge of PHP and MySQL.

### Installation

1. Download and Install XAMPP:

   - Download XAMPP from the [official website](https://www.apachefriends.org/index.html).
   - Install XAMPP and start the Apache and MySQL modules from the XAMPP Control Panel.

2. Clone the Repository:

   - Clone this repository to your local machine or download the ZIP file and extract it.
     

3. Import the Database:

   - Open phpMyAdmin by navigating to http://localhost/phpmyadmin/.
   - Create new databases named clientmsdb and gymdb.
   - Import the SQL files provided in the respective project directories (clientmsdb.sql and gymdb.sql).

4. Install Composer
   - https://getcomposer.org/download/

### Running the Projects

1. Open terminal and run this following command:

   bash
   composer install
   

   bash
   composer update
   

   bash
   php -S localhost:8000
   

2. Open http://localhost:8000 on your browser:

## Project Structure

### MVC Structure

Each project follows the MVC pattern with the following directory structure:

- models/: Contains all the model classes for database interaction.
- views/: Contains all the view files for rendering the user interface.
- controllers/: Contains all the controller classes for handling the logic and user input.
- config/: Contains configuration files, including database configuration.
- public/: Contains publicly accessible files such as index.php and assets (CSS, JS, images).

## Contributors

1. Tiara Agustin (2208107010004)
2. Nisa Rianti (2208107010018)
3. M. Agradika Ridhal Eljatin (2208107010020)
4. Rizky Yusmansyah (2208107010024)
5. Andika Pebriansyah (2208107010058)
6. Muhammad Ridho (2208107010064)

## License

This project is licensed under the MIT License. See the LICENSE file for more details.

## Acknowledgements

- Original projects by [PHPGurukul](https://phpgurukul.com/)
- MVC implementation inspired by various online PHP MVC tutorials and resources.
