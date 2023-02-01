<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class FilterController extends Controller
{
    public function index(Request $request)
{
    $students = Students::query();

    if ($request->filled('first_name')) {
        $students->where('first_name', 'like', '%'.$request->first_name.'%');
    }
    if ($request->filled('last_name')) {
        $students->where('last_name', 'like', '%'.$request->last_name.'%');
    }
    if ($request->filled('email')) {
        $students->where('email', 'like', '%'.$request->email.'%');
    }
    if ($request->filled('age')) {
        $students->where('age', $request->age);
    }

    $students = $students->simplePaginate(15);
    
    return view('students\index', compact('students'));
}
} 
