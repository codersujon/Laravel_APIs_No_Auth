<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class ApiController extends Controller
{
    /**
     * Add Employee POST
     */
    public function addEmployee(Request $request){

       // Validation incoming request
       $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:employees,email",
            "age" => "required|integer|min:18|max:100",
            "gender" => "required|in:male,female,other"
       ]);

       $employeeObject = new Employee();
       $employeeObject->name = $request->name;
       $employeeObject->email = $request->email;
       $employeeObject->phone_number = $request->phone_number;
       $employeeObject->age = $request->age;
       $employeeObject->gender = $request->gender;
       $employeeObject->save();

       return response()->json([
            "status" => true,
            "message" => "Employee saved successfully!"
       ]);

    }

    /**
     * List Employee GET
     */
    public function listEmployee(){

    }

    /**
     * Single Employee Details (GET)
     */
    public function getSingleEmployee($employeeId){

    }

    /**
     * Update Employee PUT
     */
    public function updateEmployee($employeeId){

    }

    /**
     * Delete Employee
     */
    public function deleteEmployee($employeeId){

    }
}
