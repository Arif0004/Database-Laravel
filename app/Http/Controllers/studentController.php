<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    function index()
    {
        // DB::table('students')->insert([
        //     [
        //         'name' => 'Arif Hossain',
        //         'vote' => 10,
        //         'address' => 'Cumilla',
        //         'is_admin' => true
        //     ],
        //     [
        //         'name' => 'Sharif Mahmud',
        //         'vote' => 15,
        //         'address' => 'Cumilla',
        //         'is_admin' => false
        //     ],
        //     [
        //         'name' => ' Omar Faruk',
        //         'vote' => 20,
        //         'address' => 'Egpt',
        //         'is_admin' => true
        //     ],
        //     [
        //         'name' => 'Khadija Akter',
        //         'vote' => 25,
        //         'address' => 'Homna',
        //         'is_admin' => false
        //     ],
        // ]);

        //return DB::table('students')->get();
        $data = null;
        // $data = DB::table('students')
        //     ->where('address', '=', 'Cumilla')
        //     ->where('vote', '>=', 10)
        //     ->get();

        // $data = DB::table('students')
        //     ->where('name', 'like', '%h%')

        //     ->get();



        // $data = DB::table('students')
        //     ->whereBetween('vote', [5, 15])

        //     ->get('vote');
        // $data = DB::table('students')
        //     ->whereIn('id', [1, 3])

        //     ->get();
        // $data = DB::table('students')
        //     ->whereNull('created_at')

        //     ->get();

        // $data = DB::table('students')->max('vote');
        // $data = DB::table('students')->distinct('address')->get();
        // $data = DB::select('select* from students where name="Arif Hossain"');

        //joinTable
        // $data = DB::table('students')
        //     ->leftJoin('subject', 'students_id', '=', 'subject.students_id')
        //     //->select('students.*', 'subject.*')
        //     ->get();
        //model_use
        $data = student::all();

        return $data;
    }
}
