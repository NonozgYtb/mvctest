# AltoRouter / NonozgYtb's Fork  [![Github Version](https://img.shields.io/github/v/release/nonozgytb/altorouter.svg)](https://github.com/NonozgYtb/AltoRouter/releases) [![License](https://img.shields.io/github/license/nonozgytb/altorouter.svg)](https://github.com/NonozgYtb/AltoRouter/blob/master/LICENSE.md) [![Php Version](https://img.shields.io/packagist/php-v/nonozgytb/altorouter.svg)](https://packagist.org/packages/nonozgytb/altorouter) [![PAckagist Version](https://img.shields.io/packagist/v/nonozgytb/altorouter.svg)](https://packagist.org/packages/nonozgytb/altorouter)

#### **This README is not complete, some functions/links/examples, either on this file or on the original documentation may not work. This Fork is for private use only, it is not intended for public production.**

AltoRouter is a small but powerful routing class, heavily inspired by [klein.php](https://github.com/chriso/klein.php/).
```php
$router = new \NonozgYtb\AltoRouter();

// map homepage
$router->map('GET', '/', function() {
    require __DIR__ . '/views/home.php';
});
// OR : 
$router->get('/', function() {
    require __DIR__ . '/views/home.php';
});

// dynamic named route
$router->map('GET|POST', '/users/[i:id]/', function($id) {
  $user = .....
  require __DIR__ . '/views/user/details.php';
}, 'user-details');

// echo URL to user-details page for ID 5
echo $router->generate('user-details', ['id' => 5]); // Output: "/users/5"
```

## Features

* Can be used with all HTTP Methods
* Dynamic routing with named route parameters
* Reversed routing
* Flexible regular expression routing (inspired by [Sinatra](http://www.sinatrarb.com/))
* Custom regexes

## Getting started

You need PHP >= 5.6 to use AltoRouter, although we highly recommend you [use an officially supported PHP version](https://secure.php.net/supported-versions.php) that is not EOL.

#### Instruction of the original version (not forked). The mechanics of the functions have not changed but the way of using them and the namespace have changed. Several functions have also been added.

- [*Install AltoRouter*](http://altorouter.com/usage/install.html)
- [*Rewrite all requests to AltoRouter*](http://altorouter.com/usage/rewrite-requests.html)
- [*Map your routes*](http://altorouter.com/usage/mapping-routes.html)
- [*Match requests*](http://altorouter.com/usage/matching-requests.html)
- [*Process the request your preferred way*](http://altorouter.com/usage/processing-requests.html)

## Contributors
- [NonozgYtb](https://github.com/nonozgytb)
- [Danny van Kooten](https://github.com/dannyvankooten)
- [Koen Punt](https://github.com/koenpunt)
- [John Long](https://github.com/adduc)
- [Niahoo Osef](https://github.com/niahoo)

## License

MIT License

Copyright (c) 2020 NonozgYtb

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.