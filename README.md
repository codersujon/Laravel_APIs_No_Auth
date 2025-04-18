<p align="center"><a href="https://github.com/codersujon" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



# Employee Management API (Laravel)

A Simple Restful API built with laravel to manage employee data.

## 🛠️ Base URL
http://localhost:8000/api/
---

## 📌 Endpoints

### 🔹 Get All Employees

- **URL:** `/list-employee`
- **Method:** `GET`
- **Response:**
```json
{
  "status": true,
  "message" => "Employees found"
  "data": [ ... ]
}
