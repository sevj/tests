# Tests

Préambule : 
* php -S 0.0.0.0:7777 -t public

## Framework PHP

- Atoum (https://github.com/atoum/atoum)
- EnhancePHP (https://github.com/Enhance-PHP/Enhance-PHP)
- PHPUnit (https://phpunit.de/)
- Behat (https://docs.behat.org/en/v2.5/)
- PHPSpec (http://www.phpspec.net/en/latest/)
- Codeception (https://codeception.com/)
- Selenium (https://www.selenium.dev/ - https://packagist.org/packages/phpunit/phpunit-selenium)

### Atoum

Objectifs :
- tests unitaires

Utilisation : 
* vendor/bin/atoum -d tests/units/src/

Description : 
Framework de test unitaire, il est rapide d'installation. Je l'ai trouvé un peu difficile à prendre en main, mais la doc a l'air fournie 
et on peut faire pas mal de chose avec visiblement.
Gère les mocks, les databases, possède un debug et loop mode et permet de générer du code coverage.


### EnhancePHP

Objectifs :
- tests unitaires

Utilisation :
* php tests/enhance/HelloWorldTest.php
* php tests/enhance/MathsTest.php

Description : 
Petit framework sympa, rapide à installer et facile à apprendre. Le problème est qu'il n'a pas l'air très maintenu et la doc est un peu light.
Gère les mocks et permet de générer du code coverage.


### PHPUnit

Objectifs : 
- tests unitaires
- tests fonctionnels

Utilisation :
* vendor/bin/phpunit tests/phpunit/

Description : 
On le présente plus, PHPUnit fait partie des standard du testing en PHP. La gestion des tests unitaire est très avancée et malgré une doc pas très conséquente,
il contient beaucoup de fonctionnalités.
Gère les mocks, les databases, possède un debug mode, génère du code coverage.
La suite possède des modules qui peuvent ajouter d'autres fonctionnalités.


### Behat

Objectifs :
- BDD, TDD

Utilisation : 
* vendor/bin/behat

Description : 
Permet de mettre en place assez facilement des test fonctionnels ou de pratiquer du TDD.
La documentation est très complète mais la prise en main n'est pas forcement aisée.
Utilise la syntaxe Gerkin.


### PHPSpec

Objectifs :
- BDD, TDD

Utilisation :
* vendor/bin/phpspec run

Description : 
Un concurrent de Behat qui a l'air pas mal aussi. Je le trouve plus facile à prendre en main, mais je ne suis pas sur qu'il permette autant de choses que Behat.
    
    
### Codeception

Objectifs : 
- tests unitaires
- tests fonctionnels
- tests REST API

Utilisation : 
* php vendor/bin/codecept run

Description : 
Un outil très connu et bien maintenu qui permet toute sorte de type de test en PHP. L'outil est puissant et simple à prendre en main, cela reste un incontournable pour moi.

### Selenium

Objectifs :
- tests fonctionnels

Installation : 
- chromeDriver : https://chromedriver.chromium.org/

Utilisation :
* java -jar selenium-server-standalone-3.141.59.jar

Description : 
Permet d'automatiser des tests fonctionnels d'une application. Doc complète, beaucoup de fonctionnalités.


## Framework JS

- Jest (https://jestjs.io/)


### Jest

Objectifs :
- Unit test, BDD, TDD

Utilisation :
* npm test

Description :
Un outil de test multi framework js, permet visiblement de faire pas mal de chose. Facile à prendre en main même pour quelqu'un qui ne pratique que peu le JS.


