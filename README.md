# stringtotype
A small high performance service to convert a string to its basic type based on the string contents

## Installation

Composer:

```
composer require anderswelt/stringtotype
```

## Usage

``` php
<?php

use StringToType\StringToType


$stringWhichisReallyFloat = "123.123";
$stringWhichisReallyInt = "123";
$stringWhichisReallyBool = "true";
$stringWhichLooksLikeButIsntFloat = "0123.23";

$float = StringToType::convert($stringWhichisReallyFloat);
$int = StringToType::convert($stringWhichisReallyInt);
$bool = StringToType::convert($stringWhichisReallyBool);
$string = StringToType::convert($stringWhichLooksLikeButIsntFloat);
```

The tests give a hint as how it interprets what kind of string to which type.

## About

Searched around to find a robust and high performance solution to this problem. Found nothing that was close, so I've created this one. It's also faster than most regex based versions floating around on stackoverflow.

## Requirements

Due to typed parameters being used it needs PHP 7.4 and later.

## Author

Johannes Rebhan der.waldgeist@gmail.com http://waldgeist.org