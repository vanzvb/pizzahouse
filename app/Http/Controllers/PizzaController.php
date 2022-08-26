<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class PizzaController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
            //get data from db
    // $pizzas = [
    //     ['type' => 'Hawaiian', 'base' => 'garlic crust'], 
    //     ['type' => 'volcano', 'base' => 'cheesy crust'],
    //     ['type' => 'veg supreme', 'base' => 'thin & crispy crust']
    // ];
        
        // select * from pizzas;
        $pizzas = Pizza::all(); 

        //$pizzas = Pizza::orderBy('name','desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        //$pizzas = Pizza::latest()->get();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){
        //Pizza::find($id);
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['testid'=>$pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log($pizza);

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();
        
        return redirect('/')->with('mssg','Thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        
        return redirect('/pizzas');
    }

    public function find()
    {
        return view('find');
    }

    public function autocomplete(Request $request)
    {
        $datas = Pizza::select("name")
        ->where("name", "LIKE", "%{$request->terms}%")
        ->get();
        $datamodified = array();

        foreach ($datas as $data)
        {
            $datamodified[] = $data->name;
        }
        return response()->json($datamodified);
    }
}
