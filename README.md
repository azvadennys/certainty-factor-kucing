# Website Certainty Factor Cat

*Last modified: 10/11/2024*

## Requirement
- XAMPP version 8.0 or higher
- Composser

### Outline

- [1. Clone the Project from GitHub repository](#1-clone-this-repository)
- [2. Installation](#2-installation)
  - [A. Change Working Directory](#a-change-working-directory)
  - [B. Setting Up the Project](#b-setting-up-the-project)
  - [C. Run the Program](#c-run-the-program)

----

### [1. Clone this repository](#outline)

To download the code from the repository to your local machine, use the following git clone command:
```
$ git clone https://github.com/azvadennys/certainty-factor-kucing.git
```
This command will create a copy of the repository on your local machine, allowing you to access and modify the code.

### [2. Installation](#outline)

#### [A. Change Working Directory](#outline)

After successfully cloning the repository, change the working directory. You can use the following command in the command line. 
```
$ cd certainty-factor-kucing
```

#### [B. Setting Up the Project](#outline)

Install project dependencies using Composer :

```
$ composer install
```

Configure your environment variables by copying the .env.example file to .env :

```
$ cp .env.example .env
```

Generate the application key :

```
$ php artisan key:generate

```

Execute the following command to create the database schema. Make sure you have created a new database in MySQL. Please adjust the .env file with your database details. 

```
$ php artisan migrate:fresh
```

To link your public folder with storage, run:

```
$ php artisan storage:link
```

#### [C. Run the Program](#outline)

Once everything is ready, run the main program in the project directory. In your terminal, you can type the following command:
```
$ php artisan serve
```
Ensure that you are in the correct directory (usually the root directory of the project) and that all dependencies re properly set up before executing this command.

