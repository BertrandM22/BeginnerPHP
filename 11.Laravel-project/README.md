# Laravel Project (Extra challenge)

- Repository: `laravel-project`
- Type of Challenge: `Consolidation challenge`
- Duration: `1 week`
- Deployment strategy : `n/a`
- Team challenge : `groups of 2-3`

## Before we start

Make sure you know/can use the following concepts:

- **Start a Laravel Application**
- **Routing**
  - Named routes
  - Route-Model Binding
  - REST-full naming conventions for URI's and controller methods
  - Middlewares on routes
- **MVC**
- **CRUD**
- **Models**
  - Eloquent relations
- **Laravel Migrations**
  - Build a whole database structure with migration files

## The Project

Something that recruiters like a lot in the web dev job sector, is programming algorithms and projects that reflect actual business cases.

Building a **Todo App** is a classic exercise used when learning a new programming language, _but it's just that.. an exercise_, and recruiters often see it as such instead looking at it as experience.

So to catch their attention, we will make a project that is a little more "actual" in the job sector.

Let's build a **Reservation tool for a restaurant**!

It is a perfect project to showcase both the "Guest/client" side and the "Employee" side of the platform.

> A guest can visit the restaurant page and click on "book now", which will lead to a form where the guest can book their slot at the restaurant.
>
> The employees will have an overview of their calendar which include their tables.
> There they will be able to update reservations

### Teamwork

Working in a team means to communicate well.

- Set a timeline (using Trello for example)
- List all the tings you need to do. and assign them to someone in the group
- Make sure to do a team briefing at least once a day! Sit together and discuss who will be doing what for that day.
- Discuss your Git strategy. (git branching?)

### 🌱 Must Have's

- The restaurant has a fixed amount of tables with a fixed amount of seats. Each table has an ID.

- The Guest can visit a menu page containing all menu items, drinks, etc...

- The form guests will have to fill in to book has to contain fields to
  - select a date and a time
  - give a name
  - give an email
  - select an available table (includes the amount of seats in the info)
  - Special notes
- The employee's page will contain a timeline (**tip:** use [FullCalendar.io](https://fullcalendar.io/)). On this calendar, the employee can click on the booked time slots and open a detail page on that reservation.
- The employee can "cancel" a reservation manually

### 🌳 Nice to have's

- The employee platform should have the option to update the reservation data.
- When opening the detail page of a reservation as an employee, it should have the form field to add orders made during the reservation.

## Tips and Tricks

### A suggestion to build your structure:

Make a landing page with 2 options:

- Look around as Guest
- Look around as Employee

If the person chooses "Guest", they will be redirected to the standard website where they can find the menu the about and standard information any restaurant website would have

If the person chooses "Employee" they will be redirected towards a dashboard page, which is a route protected by authentication. So they are send to the login page first.

The login page will already be filled in by default so they don't have to create an account or log in.

Then they are send back to the dashboard

### A suggestion for the Database Structure:

- employees
  - name
  - email
  - password
- tables
  - seats
- products
  - category
  - name
  - price
  - has_alcohol
  - allergies
- reservations
  - name
  - email
  - timestamp
  - table_id
  - notes
- orders
  - table_id
  - product_id
  - employee_id

Use relations between tables whenever you can. (See the suggestions above to have an idea on which tables can be related to each other.)
