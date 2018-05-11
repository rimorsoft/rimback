# RimBack CMS

_CMS base for the community of web programmers Rimorsoft Online._

## Starting

_Get a copy, fork and give us a super star. I want you to be aware of [this playlist](https://www.youtube.com/watch?v=SRpYm5K__hQ&list=PLhCiuvlix-rQXtJOYDEpjn41TLsFSaM49) They are videos in Spanish, but the YouTube translator helps a lot_ this is `rimback::create()`

# Installation Steps

## 1. Require the Package

After creating your new Laravel application, you must create the simple login system: `php artisan make:auth`

## 2. Add the database credentials

Remember that all this is done from the `.env` file:

**Example**

```json
    DB_HOST=127.0.0.1
    DB_DATABASE=rimback
    DB_USERNAME=root
    DB_PASSWORD=root
```

## 3. Run the installer

We achieved it with the command: `composer require rimorsoft/rimback dev-master`

## 4. Next, add your new provider 

We must do it in the file to the providers array of `config/app.php`:

```php
    'providers' => [
        
        // ...

        Rimorsoft\Rimback\Providers\RimbackServiceProvider::class,
    ],
```

## 4. Decompress public files

This step is necessary to access the theme, driver, some views, configuration file, etc: `php artisan vendor:publish --force`

## 5. Install the tables in the database

Create the tables with the command: `php artisan migrate:refresh`

## 6. Last step

> Get clients and be very successful

---

## Build in

_Thank you very much_

* [Laravel](https://www.laravel.com/) - used framework

## You want to contribute?

Please see [here](https://rimorsoft.com/rimback) to see our code of conduct, and the process of sending a pull requests.

## Authors

_You can be here_

* **Italo Morales** - *Founder of the project* - [italomoralesf](https://github.com/italomoralesf)
* **your name here**

_You can help with documentation, creation of themes, package incorporation, etc_

## License

This project is under license (MIT).

## Gratitude - Our heroes

_Our community of web programmers **Rimorsoft Online**_

* *[Rimorsoft Online](https://rimorsoft.com/)*

---
_file v1.1_