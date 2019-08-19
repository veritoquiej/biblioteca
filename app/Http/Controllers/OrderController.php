<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $books = Book::all();
       //  session(['books'=>'hello']);
        return view('order.create', compact('books')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

      public function add(Request $request){
        //eliminar mi sesion
        //session()->forget('books');
          $id =  $request->book_id;

        // $request->session()->put('books', array(1, 2));

        if($request->session()->exists('books')){
            $books = $request->session()->get('books');
            //dd($books);
            array_push($books, ($id));
           // $request->session()->forget('books');
            $books->push
            
            $request->session()->put('books', $books);
        }else{
            $books = coollect([$id]);   
          $request->session()->put('books', ($books);

        }
        dd($request->session()->get('books'));

       $book = Book::all();
       return view('order.create', compact('book'));

   }

         //y si existe isset
          // dd(isset($books));
         //para ver si esta vacio es empty
          // dd(empty($books));

        // session(['books'=>$books]);
 
        // $book = Book::all();
        //return view('order.create', compact('books')); 
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
