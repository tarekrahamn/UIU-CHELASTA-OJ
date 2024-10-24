
  

# UIU CHELASTA OJ - Online Judge Platform

  


  

UIU CHELASTA OJ is an advanced online judge platform designed to enhance competitive programming at United International University (UIU). The platform allows students and faculty to participate in coding contests, submit solutions, and receive real-time feedback on their code submissions. It is optimized for use in academic settings, promoting the integration of coding competitions into university curricula.

  

## Features

  

-  **Automated Code Evaluation**: Submissions are automatically compiled and tested against predefined test cases with instant verdicts.

-  **Contest Hosting**: Create, manage, and participate in programming contests.

-  **User Profiles**: View submission history, problem statistics, and ranking on user profile pages.

-  **Real-time Feedback**: Provides immediate results on submissions such as Accepted, Wrong Answer, Compilation Error, Time Limit Exceeded, etc.

-  **Problem Library**: A collection of programming problems categorized by difficulty and topic.

-  **Admin Controls**: Administrators can manage users, contests, and monitor platform activity.

-  **Email Notifications**: Integration with PHPMailer for notifications on contest updates and results.

-  **Responsive Design**: Mobile-friendly interface for seamless use across different devices.

  



  

## Technology Stack

  

-  **Front-end**: HTML, CSS, JavaScript, Bootstrap

-  **Back-end**: PHP, MySQL

-  **Additional Libraries**:

- PHPMailer for email integration

- Moment.js for time display

- Session-based user management

  

## Setup Instructions

  

### Prerequisites:

- XAMPP, MAMP, or a similar local development environment

- MySQL database



  

### Installation Steps:

  

1.  **Clone the Repository:**

```bash

git clone https://github.com/yourusername/UIU-CHELASTA-OJ.git

```

2.  **Set Up Local Server:**

Start your local server (XAMPP, MAMP, etc.) and ensure Apache and MySQL services are running.

  

3.  **Database Setup:**

- Import the SQL file into your MySQL database.

- The SQL file is located in the `/database` folder of the repository.

- Use phpMyAdmin or a MySQL client to execute the script.

  

4.  **Update Configuration:**

- Open the `config.php` file in the root directory.

- Update the database connection details (host, username, password, and database name).

```php

$dbHost =  'localhost';

$dbUser =  'root';

$dbPass =  'your_password';

$dbName =  'your_database_name';

```

  

5.  **Access the Platform:**

- Open your browser and navigate to `http://localhost/UIU-CHELASTA-OJ`.


## Set Up Conncection
- If you are using localhost then change configuration of config.php to

- $host="localhost";
- $user="root";
- $pass="";
- $db="main_uiuoj";

## Usage

  

-  **Students and Faculty**: Register, log in, and participate in contests by submitting solutions to programming problems.

-  **Admins**: Access the admin panel to manage contests, users, and problem libraries.


## Request
-  This online judge project is for learning purpose. Do not use it for commercial purpose. If you modify credits of footer, then add this github repository link to footer.
  

## Contributing

  

Contributions are welcome! To contribute:

1. Fork the repository.

2. Create a new feature branch: `git checkout -b feature-name`.

3. Commit your changes: `git commit -m 'Add new feature'`.

4. Push to the branch: `git push origin feature-name`.

5. Open a pull request.

  

## License

  

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

  

## Contact

  

For any questions or support, please contact [tarekrahamn01@gmail.com](mailto:your-email@example.com).
