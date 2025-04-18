# 👨‍💼 Laravel Employee API

A simple RESTful API built with Laravel to manage employee records.

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
```

- **Success Response:**
```json
{
  "status": true,
  "message": "Employee saved successfully!"
}
```


### 📋 2. List All Employees

- **URL:** `/list-employee`  
- **Method:** `GET`

- **Response:**
```json
{
  "status": true,
  "message": "Employees found",
   "data": []
}
```

### 🔍 3. Get Single Employee

- **URL:** `/single-employee/{id}`  
- **Method:** `GET`
- **Example:** `/single-employee/3`

- **Response:**
```json
{
  "status": true,
  "message": "Employee data found",
   "data": []
}
```

### ✏️ 4. Update Employee

- **URL:** `/update-employee/{id}`  
- **Method:** `PUT`
- **Example:** `/update-employee/3`
- **Body (JSON):**

```json
{
  "name": "Test",
  "email": "test@gmail.com",
  "phone_number": "01680366446",
  "age": 25,
  "gender": "male"
}
```

- **Response:**
```json
{
  "status": true,
  "message": "Employee updated successfully",
  "data": {  }
}
```

### ❌ 5. Delete Employee

- **URL:** `/delete-employee/{id}`  
- **Method:** `DELETE`
- **Example:** `/delete-employee/3`

- **Success Response:**
```json
{
  "status": true,
  "message": "Employee deleted!",
}
```

### 🛡️ Authentication
❌ No authentication required. (Public API)

### ⚙️ Built With
- **Laravel 12+**
- **PHP 8.2+**
- **MySQL**
- **Postman (for testing)**



### 👨‍💻 Developed By

<p align="left">
  <a href="https://github.com/codersujon/" target="_blank">
    <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"/>
  </a>
  <a href="https://www.linkedin.com/in/codersujon/" target="_blank">
    <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white" alt="LinkedIn"/>
  </a>
  <a href="mailto:csesujon155@email.com" target="_blank">
    <img src="https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white" alt="Email"/>
  </a>
</p>

<p>
  Developed with ❤️ by <strong>MD SUJAN AHMED</strong>
</p>







