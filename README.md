# random-password

This is the simple php library for generating random password of a given length with complexity.

## Installation

This project using composer.

```
$ composer require asayed/php-random-password
```
## Arguments:
The generate function take there parameters
 - Length of the password, default 10
 - Number of digits should include in the password, default 1
 - Number of special characters should include in the password, default 1
## Usage

Generate random password.

```php
<?php
use ASayed\PasswordGenerator;

$password = PasswordGenerator::generate(20, 2, 3);

```
