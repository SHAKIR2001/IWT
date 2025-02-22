# Hotel Management System

A web-based hotel management system developed as a first-year, second-semester project for the IWT module by a team of five members. Each member was responsible for a different module. This repository integrates all modules into one complete system.

## Table of Contents

- [Overview](#overview)
- [Modules](#modules)
  - [Register](#register)
  - [Booking](#booking)
  - [Dining](#dining)
  - [Events](#events)
  - [Contact](#contact)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation & Setup](#installation--setup)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [Acknowledgements](#acknowledgements)
- [License](#license)

## Overview

The Hotel Management System is a full-stack web application that streamlines hotel operations by integrating several modules such as user registration, booking, dining reservations, event management, and contact support. It is built using HTML, CSS, JavaScript, PHP, and MySQL, and is designed to run on XAMPP.

You can find the repository on GitHub: [Hotel Management System](https://github.com/R-Tharanka/hotel-management-system.git)

## Modules

### Register

- **Purpose:** Handles user authentication including registration, login, and navigation to the home page.
- **Key Files:** `Home.html`, `login.html`, `Register.html`
- **Details:**  
  The register module provides a clean, user-friendly interface for new users to sign up and for existing users to log in. It also serves as the entry point to the system.

### Booking

- **Purpose:** Facilitates room reservations and event hall bookings.
- **Key Features:**
  - **Check Availability:** Users can select check-in and check-out dates and specify the number of guests.
  - **Reservation:** Displays available rooms, suites, and event halls complete with images, descriptions, and pricing.
  - **Guest Information & Payment:** Collects guest details and payment information, with extensive client-side validations.
  - **Review & Confirm:** Provides a final review screen where users can confirm their booking.
- **Key Files:** `booking.php`, `checking.php`, `reservation.php`, `guest_info.php`, `payment.php`, and related CSS/JS assets.

### Dining

- **Purpose:** Showcases the dining options available at the hotel.
- **Details:**  
  The dining module includes pages that highlight the hotel’s restaurant services, including menus, ambiance, and reservation options. It is designed to enhance the guest experience by providing detailed dining information.

### Events

- **Purpose:** Manages event reservations and details.
- **Details:**  
  This module allows users to view and book event halls for various occasions such as meetings, weddings, and other celebrations. It provides detailed information about event spaces along with images and pricing.

### Contact

- **Purpose:** Provides contact information and a communication interface.
- **Details:**  
  The contact module includes a form for inquiries and displays the hotel’s contact details. This ensures that potential guests or clients can easily reach out for support or additional information.

## Features

- **Multi-Module Architecture:**  
  The system is divided into distinct modules for registration, booking, dining, events, and contact.
- **User-Friendly Interface:**  
  A responsive design ensures the application works well on various devices.
- **Form Validations:**  
  Extensive use of JavaScript validations ensures data accuracy and a smooth user experience.
- **Database Integration:**  
  PHP and MySQL are used for efficient data storage and retrieval.
- **Dynamic Content:**  
  The booking module dynamically displays available options based on user input.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (with XAMPP as the local server environment)  
- **Development Environment:** Visual Studio Code  

## Installation & Setup

1. **Clone the Repository:**
   
   ```bash
   git clone https://github.com/R-Tharanka/hotel-management-system.git
   ```

2. **Open the Project**
   
   Open the project in your preferred IDE (e.g., Visual Studio Code).

3. **Setup XAMPP**
   
   - Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
   - Start the Apache and MySQL services via the XAMPP Control Panel.

## Database Setup

- **Database Name:** `project1`
- **Default Credentials:**
  - **Host:** `localhost`
  - **Username:** `root`
  - **Password:** *(empty)*
- **Configuration:**  
  Ensure that the `config.php` file in the project (found in the `/booking/php/` folder and possibly other module folders) has the correct database credentials. Update the credentials if necessary.

## Usage

### Register Module

Navigate to the `/register` folder to access the registration and login pages.

### Booking Module

Open `booking.php` from the `/booking` folder to start the booking process.  
Follow the steps:
- **Check Availability:** Select check-in and check-out dates and specify the number of guests.
- **Reservation:** Choose from the available rooms, suites, or event halls.
- **Guest Information & Payment:** Fill in your personal details and payment information.
- **Review & Confirm:** Review your booking details before confirming.

### Dining Module

Explore the dining pages to view restaurant details and make reservations.

### Events Module

Browse through event details and book event halls for your occasions.

### Contact Module

Use the contact form to send inquiries or messages directly to the hotel management.

## Contributing

Contributions are welcome! To contribute:

1. **Fork the Repository.**

2. **Create a Feature Branch:**
   
   ```bash
   git checkout -b feature/your-feature
   ```

3. **Commit Your Changes:**
   
   ```bash
   git commit -m "Add new feature"
   ```

4. **Push to Your Branch:**
   
   ```bash
   git push origin feature/your-feature
   ```

5. **Open a Pull Request for Review.**

## Acknowledgements

Special thanks to all team members for their contributions.  
Thanks to our instructors and mentors for their guidance.  
Appreciation to all who have inspired and supported this project.

## License

This project is licensed under the MIT License.
