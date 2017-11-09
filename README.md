# Laravel Activetrail

## Installation

> Laravel Activetrail requires Laravel 5.5 or higher, and PHP 7.0+.

You may use Composer to install Laravel Activetrail into your Laravel project:

    composer require yehudafh/laravel-activetrail

### Configuration

After installing the Laravel Activetrail, publish its config, using the `vendor:publish` Artisan command:

    php artisan vendor:publish --provider="Yehudafh\ActiveTrail\ActiveTrailServiceProvider"

### Basic Usage

Add or Update user in activetrail:

```php
ActiveTrail::email('test@example.com')
    # Optional ->
    // ->sms('+972000000000')
    // ->status()
    // ->email()
    // ->sms()
    // ->fullname('test test') #or  ->firstName()->lastName()
    // ->street()
    // ->zipCode()
    // ->city()
    // ->phone1()
    // ->phone2()
    // ->fax()
    // ->birthday()
    // ->anniversary()
    // ->isDoNotMail()
    // ->isDeleted()
    ->update();
```
Update user groups:

```php
ActiveTrail::email('test@example.com')
    ->addToGroup(1234);

ActiveTrail::email('test@example.com')
    ->addToGroups([1234, 45678]);

ActiveTrail::email('test@example.com')
    ->removeFromGroups([1234, 45678]);

```
Update user email

```php
ActiveTrail::updateEmail('test@example.com', 'new@example.com');
```
Unsubscribed User:

```php
ActiveTrail::email('test@example.com')->unsubscribed();
```

For more info found in the [ActiveTrail Documentation](https://webapi.mymarketing.co.il/api/docs).

## Contributing

Thank you for considering contributing to the Activetrail.

## License

Laravel Activetrail is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
