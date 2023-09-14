User Health Information Web App

Preview: https://codepen.io/spandan-kumar/pen/GRPEpjm

Overview

This web app allows users to submit their health info, including name, age, weight, email, and a PDF health report. The data is stored in a MySQL database, and users can retrieve their reports using their email.

Setup
Clone Repo: Clone this repository to your local machine:

Database: Set up a MySQL database and update insert.php and retrieve.php with your database details.

Web Server: Use a web server like Apache, Nginx, or a local development environment (e.g., XAMPP).

File Upload: Create an "uploads" directory in the project root for PDF reports.

Testing: Access the app via http://localhost/user-health-information/index.html.

Usage
Submit Info: Fill the form, upload a PDF report, and click "Submit."

Retrieve Reports: Enter your email and click "Retrieve Report" to view PDF reports.

File Structure
index.html: Main page.
style.css: Styles.
script.js: Form handling.
insert.php: Inserts data into the database.
retrieve.php: Retrieves PDFs based on email.
