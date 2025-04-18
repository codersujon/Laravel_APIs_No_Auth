# 👨‍💼 Laravel Employee API

A simple Laravel REST API to manage employees — add, view, update, and delete.

---

## 🔗 Base URL
http://localhost:8000/api/

---

## 📌 API Endpoints

### 📥 1. Add Employee

- **URL:** `/add-employee`
- **Method:** `POST`
- **Body (JSON):**

```json
{
  "name": "Jamal Uddin",
  "email": "jamal@gmail.com",
  "phone_number": "017xxxxxxxx",
  "age": 35,
  "gender": "male"
}


```json
{
  "status": true,
  "message": "Employee saved successfully!",
}

📋 2. List All Employees
URL: /list-employee

Method: GET

Response:
{
    "status":true,
    "message": "Employees found",
    "data": [...]
}
