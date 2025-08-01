<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke()
    {
       $jobs = Job::where('title', 'LIKE', '%'.request('search').'%')->get();

       return view('results',['jobs' => $jobs]);

    }

}
