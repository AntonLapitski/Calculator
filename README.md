# Calculator
Simple application which implements work of a calculator with some unit tests. Application includes psr-4 autoloading and testing framework is phpunit.
    
    To run the app follow next steps:
      1. git clone the app to your directory
      2. cd to your folder with project
      3. run composer install command
      4. to run tests run vendor/bin/phpunit commmand
      5  to run tests with coverage report run vendor/bin/phpunit --coverage-html coverage
      6. to analyze code with static analyzer psalm run vendor/bin/psalm --init and then run vendor/bin/psalm src tests
      7. to analyze code with static analyzer phpstan run vendor/bin/phpstan analyse
      