<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function store(Request $request){

        $validated = $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
        ]);
        
            $save = Student::create([
                'firstname'  => $request->FirstName,
                'lastname'   => $request->LastName,
                'middlename' => $request->MiddleName,
                'suffix'     => $request->Suffix,
                'gender'     => $request->Gender,
                'birthdate'  => $request->BirthDate,
                
                              
        ]);

                        if($save){
                            echo 'student has been save successfully';
                        }else{
                            echo 'virus';
                        }
        
        
                                                 
    }
} 
