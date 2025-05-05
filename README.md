A scalable Laravel backend which supports

 Predictions via WebSockets

Secure and validated user predictions

 Reward distribution

APIs for match data

Leaderboard tracking

 Error handling and logging


TECH STACK
Laravel 10+
 Laravel WebSockets
MySQL
Sanctum 

FEATURES
✅Secure predictions with validation

✅ Scheduled reward calculation

✅ Custom leagues and leaderboard APIs

✅ Error handling


 PROJECT SETUP
 1. Clone the Repository
 git clone https://github.com/Mirie88/football_predictions.git
 cd football_predictions

2. Install Dependencies
composer install
npm install && npm run dev


3. Setup Environment

bash
Copy

cp .env.example .env
Then edit .env:

Edit .env

APP_NAME=FootballPredictions
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=football_predictions
DB_USERNAME=root
DB_PASSWORD



GENERATE KEY
php artisan key:generate


4. Set Up Database
Create your database in MySQL

php artisan migrate --seed


5. Start the Server
php artisan serve
By default: http://localhost:8000

6. WebSocket Server
 using Laravel WebSockets:
php artisan websockets:serve
Clients connect via: ws://localhost:6001/app/your_key

 Authentication
Use Laravel Sanctum for API token authentication.

To login/register, use:

POST /api/register

POST /api/login

Add the token to headers:
Authorization: Bearer <token>


🔌 API Reference
Method	Endpoint	Description
GET	/api/matches/upcoming	List upcoming matches
GET	/api/matches/history	List past matches
POST	/api/predictions	Submit a prediction
GET	/api/leaderboards/{league_id}	Get leaderboard
POST	/api/leagues	Create custom league




p


