<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


# Add Employee
Route::post("add-employee", [ApiController::class, "addEmployee"]); // localhost/api/add-employee

# List Employee
Route::get("list-employee", [ApiController::class, "listEmployee"]); 

# Single Employee Details
Route::get("single-employee/{id}", [ApiController::class, "getSingleEmployee"]); 

# Update Employee
Route::put("update-employee/{id}", [ApiController::class, "updateEmployee"]);

# Delete Employee
Route::delete("delete-employee/{id}", [ApiController::class, "updateEmployee"]);