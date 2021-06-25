# Mysql
- Check script.sql in backend folder.
- Open terminal on your macbook and type command: PATH=$PATH:/usr/local/mysql/bin and press "enter"
- Then type command: mysql -u root -p and press "enter"
- If it asked for password, you should type password and press "enter"
- Make sure that your password for username should be match from MYSQL server
- type command: source source /Users/ikemefunachukwunyerenwa/Desktop/Angular-PHP-MYSQL/angular-9-php-app/backend/api/script.sql and press "enter"
- type command: show databases; and press "enter"
- Make sure that database name called hfr should be existed in database system.
- leaving the mysql running......


# Backend
- Open Visual Code studio (VS)
- Upload or drag your project(backend) into VS
- Click Terminal at top bar 
- Type command: php -S 127.0.0.1:8080 -t /Users/ikemefunachukwunyerenwa/Desktop/Angular-PHP-MYSQL/angular-9-php-app/backend and press "enter"
- You should see the running in the output: PHP 7.3.11 Development Server started at Thu Jun 24 12:50:51 2021
Listening on http://127.0.0.1:8080
- Check the internet at: http://127.0.0.1:8080/api/read.php
- leaving the php running......


# Frontend 
- Open another Visual Code studio (VS)
- Upload or drag your project(frontend) into VS
- Click Terminal at top bar 
- Type command: ng serve and press "enter"
- You should see the running in the output: ** Angular Live Development Server is listening on localhost:4200, open your browser on http://localhost:4200/ **
: Compiled successfully.
- Check the internet at: http://localhost:4200/
- After the internet displaying, you can record number and amount then click "createORupdate" button.
- You should see new record. Also, you should see new record in table in mysql. 





<!-- Just this information -->
<!-- # Frontend

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 9.0.7.

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.

## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `--prod` flag for a production build.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md). -->



