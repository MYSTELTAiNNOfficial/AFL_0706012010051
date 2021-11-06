# Perpustakaan
a new Laravel-based project, called Perpustakaan or PrivateLibra.ry

## How-to
According to [this post](https://stackoverflow.com/questions/38602321/cloning-laravel-project-from-github), all you need is:

1. Make sure you has installed Composer and Laravel before, if you didn't install it before, follow this step:
    1. Install Composer, you can read it in [this page](https://getcomposer.org/doc/00-intro.md).
Or if you have Linux/MacOS, read it in [this section](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
and if you have Windows, read it in [this section](https://getcomposer.org/doc/00-intro.md#installation-windows)
    2.  After Composer installed in your computer, next step is install Laravel. in your Command Prompt or Terminal, type:
    ```bash
    composer global require laravel/installer
    ```
    3. And Done, now you can continue to next step.
2. Clone this project
3. Now go to your folder where you clone this project. You can see there's file named ".env.example", you can copy it and rename to ".env"
4. Open you terminal with right-click > open terminal in this folder or like something. Or you can type in your terminal or cmd `cd /your_destination_folder`
5. Make sure the destination is your folder, after that type this to your:
     ```bash
    php artisan key:generate
    ```
     ```bash
    php artisan migrate
    ```
     ```bash
    php artisan serve
    ```
6. Now open your browser, and go to localhost:8000
7. If my English is wrong, please forgive me, because English is not my main language
