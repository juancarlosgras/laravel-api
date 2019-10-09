<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Api Project

Create a laravel application (with repo) that has laravel passport as authentication, can register and login via an API, has a middleware in the api.php file where functions can be added that require authentication. Also:

- Use common sense in case you have any questions. Be prepared to explain why you project was done that way. 
- Extra credit is welcome to show off your skills.
- Send the test back in however method you see fit.

## Api Routes

The prefix **v1** was used to differentiate the possible versions of the functionalities. For this project the following api routes were created:
#### api/v1/register
#### api/v1/login
#### api/v1/getUsers/{status?}
#### api/v1/deleteUser
#### api/v1/logout

## Testing on Postman

Registering a new user and getting the token:

<img src="https://i.ibb.co/8z1cY3x/Screen-Shot-2019-10-08-at-6-48-39-PM.png">

Logging in and getting the token:

<img src="https://i.ibb.co/wdZR3gP/Screen-Shot-2019-10-08-at-6-49-40-PM.png">

Getting all users using the autentication token generated:

<img src="https://i.ibb.co/K2DmKGJ/Screen-Shot-2019-10-09-at-10-23-03-AM.png">

Deleting a user:

<img src="https://i.ibb.co/Nrbm6jF/Screen-Shot-2019-10-09-at-10-24-10-AM.png">
