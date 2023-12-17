# User Data API with WebSocket

 This project demonstrates a simple user data API with WebSocket functionality. The application generates a dataset of 20,000 users using the Faker library, exposes it through a JWT-protected API, and broadcasts the dataset over WebSocket using the BeyondCode Laravel WebSocket package.

## Setup Instructions
* Clone the project and install dependencies  
``
composer install
``

* Generate User Data      
  ``
  php artisan migrate --seed
  ``
* Configure Environment
  Copy the .env.example file to .env and configure your database and WebSocket settings.
* Run the Laravel WebSocket Server
  * Visit http://your-app-url/laravel-websocket and hit connect to initialize the WebSocket server.
* Run the Laravel Queue Worker  
``
  php artisan queue:work
``
* Run the Laravel Development Server          
``
  php artisan serve
``

## Usage
Access the API to retrieve the entire user dataset:     
``
GET http://your-app-url/api/users
``

Access the url down below and goto browser->inspect->console, you will be able to see the data:     
``
GET http://your-app-url/get-users
``
