<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    function index()
    {
     return view('frontend.search');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('posts')
        ->where('title', 'LIKE', "%{$query}%")
        ->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative;">';
      foreach($data as $row)
      {
       $output .= '<li><a href="{{"/search"}}" >'.$row->title.'</a></li>';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
