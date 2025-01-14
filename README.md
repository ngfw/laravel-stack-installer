
# Laravel Stack Installer

Laravel Stack Installer is a powerful command-line tool to set up Laravel with different stacks quickly. 
It simplifies the installation process for developers by automating the setup of popular Laravel configurations.

## Features

- Interactive menu for easy selection of stacks.
- Install Laravel with a variety of pre-configured stacks:
  - ▲   Next.js + Breeze
  - ⚛   React + Tailwind Stack
  - ✧   Vue + Inertia.js + Tailwind Stack
  - τ   TALL Stack
  - ◉   Livewire + Tailwind Stack
  - ◯   API-Only Stack
  - ⬡   GraphQL Stack

---

## Installation

Laravel Stack Installer is distributed as a Composer package and can be installed globally.

### Install via Composer
Run the following command to install the tool globally using Composer:
```bash
composer global require ngfw/laravel-stack -W
```

Make sure the composer path (e.g., `~/.composer/vendor/bin` or `~/.config/composer/vendor/bin`) is added to your system's PATH. 

Or add it with command:

- On Linux or macOS:
  ```bash
  export PATH=$PATH:~/.composer/vendor/bin
  ```
  Add the above line to your shell configuration file (e.g., `~/.bashrc` or `~/.zshrc`).

- On Windows:
  Add the global `composer\vendor\bin` directory to your system's environment variables.

---

## Usage

![demo](./docs/images/install.gif)

### Running the Installer
Once installed, you can use the tool directly from the command line. Run the following command to start the interactive menu:
```bash
laravel-stack
```

To skip the menu and run a specific installer directly, use the following command format:
```bash
laravel-stack --project="<YOUR_PROJECT_NAME>" --db.host="<DB_HOST>" --db.user="<DB_USER>" --db.password="<DB_PASSWORD>"
```
For example:
```bash
laravel-stack --project="myFirstStack" --db.host="127.0.0.1" --db.user="root" --db.password="password"
```


### **IMPORTANT!**
**_The installer currently supports only MySQL as the database option. A new MySQL database will be created and named after your project. If you require a different database engine, you will need to update the configuration manually after installation._**

---

## Available Installers
The following installers are available in Laravel Stack Installer. Each provides a tailored setup for a specific development stack.

| Installer                      | Description                                                                 |
|--------------------------------|-----------------------------------------------------------------------------|
| **Next.js + Breeze**           | Next.js + Laravel API + Breeze: A seamless setup for modern web apps using Next.js as the frontend and Laravel as the backend. |
| **React + Tailwind Stack**     | React + Tailwind CSS: A stack for building modern frontend interfaces with React and styling with Tailwind CSS. |
| **TALL Stack**  | TALL Stack: Combines TailwindCSS, AlpineJS, Laravel, and FilamentPHP for a clean and productive UI/UX workflow. |
| **Livewire + Tailwind Stack**  | Livewire + Tailwind CSS: A powerful stack for dynamic and real-time UIs with Livewire and Tailwind CSS. |
| **API-Only Stack**             | API-Only Stack: A lightweight Laravel setup for purely API-driven applications.|
| **GraphQL Stack**              | GraphQL Stack: Integrates GraphQL with Laravel for flexible API queries.|

---

## Starting the Development Environment

![demo](./docs/images/devServer.gif)

After installing your stack, a `devServer.sh` script is included in your project directory. This script simplifies the process of setting up and running your development environment.

### Usage Instructions

#### **Navigate to Your Project Directory**  
   Move into the directory where your new stack is installed. For example, if your project is named `MyFirstStack`,  than run:

   ```bash
   cd MyFirstStack/
   ```

#### **Run the Dev Server Script**
Execute the devServer.sh script to start the development environment

  ```bash 
  ./devServer.sh
  ```
 
The behavior of this script depends on the stack you’ve chosen. It typically manages multiple processes, such as:

  - Running the Laravel backend server (php artisan serve).
  - Launching frontend development servers (e.g., Next.js or Inertia.js).
  - And last tailing logs for real-time updates.

#### Example Stack Behaviors
|              **Laravel Default Stack**          |               **Example Laravel + Next.js Stack**           |
|---|---|
| For most stacks, the `devServer.sh` script starts the Laravel development server, and the application can be accessed at: | For stacks like Next.js, the development process involves multiple servers. When you run the `devServer.sh` script, three terminal panels may open: |
|`http://127.0.0.1:8000`| - Laravel Backend Server Runs on `http://127.0.0.1:8000`. |
|| - Next.js Development Server Runs on `http://127.0.0.1:3000`. |
|The first log message will confirm this:| Log message: |
|`[INFO] Laravel Installation Successfully`|`[INFO] Laravel Installation Successfully`|
|`[INFO] Your application is running on http://127.0.0.1:8000/`|`[INFO] Your Next.JS application is running on http://127.0.0.1:3000/` |
||`[INFO] Your Laravel API is running on http://127.0.0.1:8000/` |



## Development Progress
Below is the current status of all supported installers:

- [x] **Next.js + Breeze**
- [x] **React + Tailwind Stack**
- [x] **Vue + Inertia.js + Tailwind Stack**
- [x] **TALL Stack**
- [x] **Livewire + Tailwind Stack**
- [x] **API-Only Stack** 
- [x] **GraphQL Stack** 

---

## Contributing
Contributions are welcome! If you’d like to add new stacks or features, please submit a pull request or open an issue on the repository.

---

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.

