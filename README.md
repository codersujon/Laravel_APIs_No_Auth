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

- **Success Response:**
```json
