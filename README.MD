# Tests Framework

## Tested framework

- Atoum (https://github.com/atoum/atoum) / Unit testing
- EnhancePHP (https://github.com/Enhance-PHP/Enhance-PHP) / Unit testing
- PHPUnit (https://phpunit.de/) / Unit testing, Functional testing
- Behat (https://docs.behat.org/en/v2.5/) / Behaviour-driven
- PHPSpec (http://www.phpspec.net/en/latest/) / Behaviour-driven
- Selenium (https://www.selenium.dev/) / Acceptance testing 

## Atoum

Target : 
- unit testing

Usage : 
* vendor/bin/atoum -d tests/units/src/


- installation : easy
- documentation : detailed
- learning : medium
- features : 
    - mocks
    - database
    - debug mode
    - loop mode
    - code coverage
    

## EnhancePHP

Target : 
- unit testing

Usage :
* php tests/enhance/HelloWorldTest.php
* php tests/enhance/MathsTest.php

- installation : easy
- documentation : poor
- learning : easy
- features :
    - mocks
    - code coverage


## PHPUnit

Target : 
- unit testing
- functional testing

Usage :
* vendor/bin/phpunit tests/phpunit/

- installation : easy
- documentation : detailed
- learning : easy
- features :
    - mocks
    - database
    - debug mode
    - code coverage


## Behat

Target :
- behaviour driven

Usage : 
* vendor/bin/behat

- installation : easy
- documentation : detailed
- learning : hard
- features :
    - use gerkin syntax
