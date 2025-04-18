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
          $employees = Employee::all();

          if($employees->isEmpty()){
               return response()->json([
                    "status" => false,
                    "message" => "No data found",
               ]);
          }

          return response()->json([
               "status" => true,
               "message" => "Employees found",
               "data" => $employees
          ]);
    }

    /**
     * Single Employee Details (GET)
     */
    public function getSingleEmployee($employeeId){
          $employee = Employee::find($employeeId);

          if(!$employee){
               return response()->json([
                    "status" => false,
                    "message" => "No employee with given ID"
               ]);
          }

          return response()->json([
               "status" => true,
               "message" => "Employee data found",
               "data" => $employee
          ]);
    }

    /**
     * Update Employee PUT
     */
    public function updateEmployee(Request $request, $employeeId){
          $employee = Employee::find($employeeId);
          
          // Validation incoming request
          // $request->validate([
          //      "name" => "required|string|max:255",
          //      "email" => "required|email|unique:employees,email",
          //      "age" => "required|integer|min:18|max:100",
          //      'phone_number' => 'required|string',
          //      "gender" => "required|in:male,female,other"
          // ]);

          if($employee){
                $employee->name = !empty($request->name) ? $request->name: $employee->name;
                $employee->email = !empty($request->name) ? $request->email: $employee->email;
                $employee->phone_number = !empty($request->phone_number) ? $employee->phone_number: $request->phone_number;
                $employee->age = !empty($request->age) ? $request->age: $$employee->age;
                $employee->gender = !empty($request->gender) ? $request->gender: $employee->gender;
                $employee->update();

                return response()->json([
                    "status" => true,
                    "message" => "Employee data updated successfully!",
               ]);
          }

          return response()->json([
               "status" => false,
               "message" => "Employee not found!",
          ]);
         
    }

    /**
     * Delete Employee
     */
    public function deleteEmployee($employeeId){

    }
}
