<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ParentController extends Controller
{
public function index(){
    $parent =DB::table('parenttables')
                ->select('parenttables.*','students.name as StudentName','optedcourses.course_id as Optedcourse')
                ->leftJoin('students','students.id','parenttables.name')
                ->leftJoin('optedcourses','optedcourses.id','students.name')
                ->get();
    return view('parent',['parenttables'=>$parent]);
}
}
