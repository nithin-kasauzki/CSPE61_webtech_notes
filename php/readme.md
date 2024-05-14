# PHP

## What is PHP?
PHP is a popular server-side scripting language that is widely used for web development. It stands for "PHP: Hypertext Preprocessor". PHP is an open-source language, which means it is free to use and modify. It was originally created by Rasmus Lerdorf in 1994 and has since evolved into a powerful and versatile language.

## How to run PHP on Mac/Linux (peace king):
1. Navigate to the code location in your terminal.
2. Run the following command:
    ```
    php -S localhost:8080
    ```

## How to run PHP on Windows :
If you are using Windows, you can use XAMPP, a popular software package that includes PHP, Apache, MySQL, and other tools. Here's how to run PHP using XAMPP:
1. Install XAMPP on your Windows machine.
2. Start the Apache server from the XAMPP control panel.
3. Place your PHP files in the appropriate directory (usually `htdocs`).
4. Open your web browser and navigate to `http://localhost` to access your PHP application.

## Use Cases of PHP:
PHP is commonly used for:
- Building dynamic websites and web applications.
- Processing form data and handling user input.
- Interacting with databases to store and retrieve information.
- Generating dynamic content, such as generating HTML pages on the fly.
- Creating APIs and web services.
- Integrating with other technologies, such as JavaScript and CSS.


## notes
- declaration : preceeeded by $ , $name , $age etc
- no intrinsic data types for variables
- variable can assign its type based on the valuesstored/assigned
- case sensitive
- [basic control statement codes](./basics.php)
- strings:
- $name = "rahul"
- echo "my name is $name" -> its output
- is different from echo "my name is $name" -> output
- string operations, concat , strpos
- pattern matching
- meta characters \w\W\d\D\b\B etc , modifiers i,g,s,x,o,m etc
- php regex predefined classes [:alpha] etc
- posix functions
- php regex perl compatible functions , give examples
- cookies, session cookies, persistent cookies, writing/reading cookies
- form processing using php, get, post ,give example code
- database connectivity using mysql_connect - give an example code too