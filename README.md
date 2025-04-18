# 👨‍💼 Laravel Employee Management API

A simple RESTful API built with Laravel to manage employee records (CRUD).

---

## 🌐 Base URL
http://localhost:8000/api/


---

## 📚 API Endpoints

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

📋 2. List All Employees
URL: /list-employee

Method: GET

 3. Get Single Employee
URL: /single-employee/{id}

Method: GET

Example: /single-employee/3


4. Update Employee
URL: /update-employee/{id}

Method: PUT

Example: /update-employee/3

Body (JSON):

json
Copy
Edit


{
  "name": "Updated Name",
  "email": "updated@gmail.com",
  "phone_number": "018xxxxxxxx",
  "age": 30,
  "gender": "female"
}


🔐 Authentication
❌ No authentication required. (Public API)