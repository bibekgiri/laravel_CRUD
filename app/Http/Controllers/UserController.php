<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserController extends Controller
{
    public function index()
    {
        // Fetch data from the 'students' table
        $students = DB::table('students')->get();
        
        // Pass the fetched data to the view
        return view('welcome', ['students' => $students]);
    }

public function insertdatas()
{
    $students = DB::table('students')->get();
    return view('insertData',['students'=> $students]);
}
 
        public function insertData(Request $request)
        {
            // Validate the incoming request data
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
            ]);
    
            // Insert data into the 'students' table using query builder
         DB::table('students')->insert([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ]);
            return "Data inserted successfully!";  
        }

       
       
       
        public function updatedatas()
        {
            $students = DB::table('students')->get();
            return view('updateData',['students'=> $students]);
        }

    
       public function updatedata(Request $request ,$id)
        {
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
            ]);
        

            DB::table('students')->where('id', $id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            
            ]);
           return back();
           } }
    

           

    

 

