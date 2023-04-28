<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Image;
use App\models\Student;
use App\models\Teacher;
use App\models\subjects;
use App\models\classes;
use App\Models\subject;
use app\models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function studentHome()
    {
        $user = Auth::user();
        $student = Student::with('user')->findOrFail($user->student->id);
        return view('home.student',compact('student'))  ;
    }

    public function teacherHome()
    {
        $user = Auth::user();
        // dd($user->teacher);
        // $teacher = Teacher::with(['user','subjects','classes','students'])->withCount('subjects','classes')->findOrFail($user->Teacher->id);
        $teacher = Teacher::with(['period'])->findOrFail($user->teacher->id);  
        // dd($teacher->period);
        return view('home.teacher',compact('teacher'));
    }

    public function mentorHome()
    {
        return view('home.mentor',['images'=>Image::get()]);  
    }

    public function destroy($id){
        DB::table('images')->delete($id);
        return redirect(route('home.mentor'));
    }
}
