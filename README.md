# BVEC UNITE Project

## Description
The BVEC UNITE project is a social networking engine specifically designed for students of Barak Valley Engineering College. It provides a platform that enhances interaction between students and faculty members. The platform enables sharing of study materials, assignment submissions, and effective communication through a centralized interface.

## Installation Instructions
To install the BVEC UNITE project, please follow these steps:

1. **Download the Project:**
   - Clone the repository from GitHub or download the zip file from the project's official page.

2. **Extract Files:**
   - If you downloaded the zip file, extract it to your desired location on your computer.

3. **Install Dependencies:**
   - Ensure you have XAMPP installed on your system. You can download it from [XAMPP Official Website](https://www.apachefriends.org/index.html).
   - Install Apache Server, PHP 5.4, and MySQL Server 5.5 through XAMPP.
   - Optionally, install Adobe Dreamweaver CS 6.0 for code editing and debugging.

4. **Set Up the Database:**
   - Open XAMPP and start the Apache and MySQL services.
   - Open your web browser and go to `http://localhost/phpmyadmin`.
   - Create a new database named `bvec_unite`.
   - Import the provided SQL file (`bvec_unite.sql`) into the newly created database.

5. **Configure the Application:**
   - Open the project folder and navigate to the `config` directory.
   - Edit the `config.php` file to match your database credentials.

6. **Run the Installer Script:**
   - Navigate to the root directory of the project.
   - Run the installer script (`install.php`) through your web browser by going to `http://localhost/bvec_unite/install.php`.

7. **Finalize Installation:**
   - Follow the on-screen instructions to complete the installation process.

## System Requirements
- **Operating System:** Windows XP or later
- **Processor:** Intel Pentium or higher
- **RAM:** Minimum 1 GB
- **Hard Disk:** Minimum 40 GB of free space
- **Software:** 
  - XAMPP 1.8.2
  - Apache Server
  - PHP 5.4
  - MySQL Server 5.5
  - Adobe Dreamweaver CS 6.0 (optional for development)

## Functionality
The BVEC UNITE project offers the following features:

### User Roles
- **Administrator:**
  - Has full control over the website.
- **Faculty:**
  - Monitors student activity, uploads study materials, and publishes results.
- **Student:**
  - Registered users with access to study materials, quizzes, and results.

### Core Features
- **Student-Faculty Interaction:**
  - Facilitates communication between students and faculty members.
- **Assignment Uploads and Submissions:**
  - Allows students to upload assignments and faculty to review them.
- **Query and Answer Posting:**
  - Provides a platform for posting academic queries and receiving answers.
- **Publication of Timetables and Results:**
  - Enables faculty to publish academic timetables and results.

### Communication Interfaces
- **Internet Communication:**
  - Utilizes the HTTP protocol for web-based communication.
- **Intranet Communication:**
  - Employs the TCP/IP protocol suite for internal network communication.

## References
- **Books:**
  - "Software Engineering" by Pankaj Jalote
- **Online Resources:**
  - [W3Schools](https://www.w3schools.com)
  - [TutorialsPoint](https://www.tutorialspoint.com)

For further information and detailed documentation, please refer to the official project documentation provided within the repository.
