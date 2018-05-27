# Modules/Mtest

Laravel Mest module demonstrate the db relationship using inbuilt methods. Use of facades class.

# Table of Contents
* [Team Members](#team-members)
* [Requirements](#requirements)
* [Getting Started](#getting-started)
* [Documentation](#documentation)
* [Roadmap](#roadmap)


# <a name="team-members"></a>Team Members

* Vinod Pawar <vpawar9091@gmail.com>

# <a name="requirements"></a>Requirements

* This package requires following things 
* PHP 5.5+
* MySQL 5.5+
* Laravel 5.2

# <a name="getting-started"></a>Getting Started

1. Get the clone in your local directory.

2. There is module called 'Mtest' into "Modules" folder.

3. Require the package in your 'composer.json' and update your dependency with 'composer update':
```php
	"psr-4": {
            "Modules\\Mtest\\": "modules/Mtest/src/"
        }
```
4. Add the package to your application service providers in 'config/app.php'.
```php
	'providers' => [
		Modules\Mtest\MtestServiceProvider::class,
	],
```
5. Publish the package migrations to your application and run these with `php artisan migrate.
	$ php artisan vendor:publish --provider="Modules\Mtest\MtestServiceProvider"
```	
# <a name="documentation"></a>Documentation
```
# <a name="roadmap"></a>Roadmap

Here's the TODO list for the next release (**2.0**).

* [ ] Refactoring the source code.
* [ ] Correct all issues.
