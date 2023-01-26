# libertycancer-WellnessCenter

A bootstrap for a web application in PHP and Bootstrap

About
This bootstrap will install all the basic files and settings to start a PHP web application.

This assumes you'll use Git for vcs, Composer for dependencies, PHPUnit for testing, Travis and Scrutinizer for integration servers.

Files architecture
├── public
|   ├── .htaccess
|   ├── index.php
|   └── robots.txt
├── src
|   └── Dummy.php
├── tests
|   └── DummyTest.php
├── vendor
├── .editorconfig
├── .gitattributes
├── .gitignore
├── .scrutinizer.yml
├── .travis.yml
├── composer.json
├── composer.lock
├── LICENSE
├── phpunit.xml.dist
├── README.md
└── run
"public" is the web entry point.
"src" contains all your PHP code.
"tests" contains all your PHP tests. See PHPUnit for more information.
"vendor" contains all your PHP dependencies. See Composer for more information.
