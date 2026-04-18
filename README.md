<h1 align="center">Laravel Practice - Property Booking API</h1>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white" alt="Postman">
</p>

<p align="center">
  🏠 <b>Laravel Property Booking API</b> — RESTful API for managing properties, bookings, guests, and locations.<br>
  Built with Laravel 10, featuring authentication, database relationships, and CRUD operations.
</p>

---

<h2>📸 Screenshots</h2>

<div>
  <h3>Database Schema</h3>

  <img src="https://github.com/user-attachments/assets/03a15ff2-170a-4a80-b14d-05a39126e56b" alt="Database schema in phpMyAdmin" width="800"  style="max-width:100%; height:auto; border-radius:8px; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
</div>

<div>
  <h3>API Testing in Postman</h3>
  
  <img width="624" height="241" alt="Post запрос к country (Postman)" src="https://github.com/user-attachments/assets/0fa02a9f-1b72-476b-88bd-bb0d010ab0e2" />
  <h4 align="center">Post request to country (Postman)</h4>
  
  <img width="652" height="561" alt="GET запрос к country(Postman)" src="https://github.com/user-attachments/assets/8fee4d3e-6f36-4f29-a13c-80b1e4c610a9" />
  <h4 align="center">GET request to country (Postman)</h4>
  
  <img width="610" height="290" alt="Post запрос к city (Postman)" src="https://github.com/user-attachments/assets/47bd84b9-a561-493c-841c-0088b8b64d36" />
  <h4 align="center">Post request to city (Postman)</h4>
  
  <img width="624" height="532" alt="GET запрос к city (Postman)" src="https://github.com/user-attachments/assets/519656ba-5f48-4481-b760-ffcb5b33f515" />
  <h4 align="center">GET request to city (Postman)</h4>
</div>

<h3>Database Tables</h3>
<img width="1920" height="930" alt="database table" src="https://github.com/user-attachments/assets/69ccafc0-dfd3-43fe-93b5-add14e36b072" />

<h2>🛠️ Technologies Used</h2>

<ul>
  <li><b>PHP 8.2+</b> - Backend language</li>
  <li><b>Laravel 10.x</b> - PHP framework</li>
  <li><b>MySQL 8.0</b> - Database</li>
  <li><b>Laravel Sanctum</b> - API authentication</li>
  <li><b>Eloquent ORM</b> - Database relationships</li>
  <li><b>Form Requests</b> - Validation</li>
  <li><b>API Resources</b> - JSON transformation</li>
  <li><b>Postman</b> - API testing</li>
  <li><b>phpMyAdmin</b> - Database management</li>
</ul>

<h2>🔧 Features & Endpoints</h2>

<h3>Countries API</h3>
<ul>
  <li><code>POST /api/country</code> - Create a new country</li>
  <li><code>GET /api/country</code> - Retrieve all countries</li>
  <li><code>GET /api/country/{id}</code> - Get specific country</li>
  <li><code>PUT /api/country/{id}</code> - Update country</li>
  <li><code>DELETE /api/country/{id}</code> - Delete country</li>
</ul>

<h3>Cities API</h3>
<ul>
  <li><code>POST /api/city</code> - Create a new city</li>
  <li><code>GET /api/city</code> - Retrieve all cities</li>
  <li><code>GET /api/city/{id}</code> - Get specific city with country relation</li>
  <li><code>PUT /api/city/{id}</code> - Update city</li>
  <li><code>DELETE /api/city/{id}</code> - Delete city</li>
</ul>

<h3>Properties API</h3>
<ul>
  <li><code>POST /api/property</code> - Create a new property</li>
  <li><code>GET /api/property</code> - Retrieve all properties</li>
  <li><code>GET /api/property/{id}</code> - Get specific property with relations</li>
  <li><code>PUT /api/property/{id}</code> - Update property</li>
  <li><code>DELETE /api/property/{id}</code> - Delete property</li>
</ul>

<h3>Bookings API</h3>
<ul>
  <li><code>POST /api/booking</code> - Create a new booking</li>
  <li><code>GET /api/booking</code> - Retrieve all bookings</li>
  <li><code>GET /api/booking/{id}</code> - Get specific booking</li>
  <li><code>PUT /api/booking/{id}</code> - Update booking status</li>
  <li><code>DELETE /api/booking/{id}</code> - Cancel booking</li>
</ul>

<h3>Authentication</h3>
<ul>
  <li><code>POST /api/register</code> - Register new user</li>
  <li><code>POST /api/login</code> - Login and receive token</li>
  <li><code>POST /api/logout</code> - Logout (revoke token)</li>
  <li><code>GET /api/user</code> - Get authenticated user</li>
</ul>

<h2>🚀 Quick Start</h2>

<h3>Testing with Postman</h3>
<p>
  1. Import the Postman collection from <code>postman/</code> folder<br>
  2. Set base URL to <code>http://127.0.0.1:8000/api</code><br>
  3. Register a new user to get authentication token<br>
  4. Add token to Authorization header (Bearer Token)<br>
  5. Start making requests to endpoints
</p>

<h3>Example Requests</h3>

<h4>Create Country</h4>
<pre style="background:#f6f8fa; padding:15px; border-radius:8px;"><code>POST http://127.0.0.1:8000/api/country
Content-Type: application/json

{
  "name": "Чехия",
  "code": "CZ"
}</code></pre>

<h4>Create City</h4>
<pre style="background:#f6f8fa; padding:15px; border-radius:8px;"><code>POST http://127.0.0.1:8000/api/city
Content-Type: application/json
Authorization: Bearer {token}

{
  "name": "Вена",
  "country_id": 4
}</code></pre>

<h4>Get All Countries</h4>
<pre style="background:#f6f8fa; padding:15px; border-radius:8px;"><code>GET http://127.0.0.1:8000/api/country

Response:
[
  {
    "id": 1,
    "name": "Россия",
    "code": "RU",
    "created_at": "2026-03-18T14:07:34.000000Z",
    "updated_at": "2026-03-18T14:07:34.000000Z"
  },
  {
    "id": 2,
    "name": "Германия",
    "code": "DE",
    ...
  }
]</code></pre>

<h2>⚙️ Installation</h2>

<pre style="background:#f6f8fa; padding:15px; border-radius:8px;"><code># 1. Clone the repository
git clone https://github.com/B1llyWL/Laravel-practice.git
cd Laravel-practice

# 2. Install dependencies
composer install

# 3. Copy environment file
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Configure database in .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_practice
DB_USERNAME=root
DB_PASSWORD=

# 6. Run migrations
php artisan migrate

# 7. Install Sanctum for API authentication
php artisan install:api

# 8. Start development server
php artisan serve</code></pre>








