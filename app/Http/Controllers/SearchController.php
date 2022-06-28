<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request){
        
        if(isset($_GET['query']) <> null){
            
            $search_text = $_GET['query'];
            $pizzas = DB::table('pizzas')->where('name','LIKE','%'.$search_text.'%')->paginate(3);
            $pizzas->appends($request->all());
            return view('search',['pizzas'=>$pizzas]);

        } else{
          
            return view('search');
        }
    }

    public function show(){
        
    // select * from pizzas;
    $pizzas = Pizza::all(); 

    return view('search', ['pizzas' => $pizzas]);
}
    
}


