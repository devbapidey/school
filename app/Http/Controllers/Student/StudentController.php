<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(/*Request $request*/)
    {
        $user_type = auth()->user()->value('user_type');
//        dd($user_type);
//        dd(auth()->user()->userType()/*->value('email')*/);
        if($user_type == 'teacher'){
            return redirect()->route('teacher');
        }elseif ($user_type == 'student'){
//            return 'Hello';
            return view('student.student');
        }
    }
}
