<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Inertia\Response;

class ProductController extends Controller
{
    private $products = [ 
        ['id' => 1,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Laptop',  
        'description' => 'High-performance laptop',  
        'price' => 1500], 
        ['id' => 2,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Smartphone',  
        'description' => 'Latest smartphone with great features',  
        'price' => 800], 
        ['id' => 3,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Tablet',  
        'description' => 'Portable tablet for everyday use',  
        'price' => 500],
        ['id' => 4,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Smartwatch',  
        'description' => 'Wearable device with multiple features',  
        'price' => 200],
        ['id' => 5,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Headphones',  
        'description' => 'Noise-cancelling over-ear headphones',  
        'price' => 300],
        ['id' => 6,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Camera',  
        'description' => 'High-resolution digital camera',  
        'price' => 1200],
        ['id' => 7,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Printer',  
        'description' => 'All-in-one wireless printer',  
        'price' => 150],
        ['id' => 8,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Monitor',  
        'description' => '4K Ultra HD monitor',  
        'price' => 400],
        ['id' => 9,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Keyboard',  
        'description' => 'Mechanical keyboard with RGB lighting',  
        'price' => 100],
        ['id' => 10,'img'=>'https://th.bing.com/th?id=OIF.9v0S%2fOa0PJLRAbgKN50WvQ&rs=1&pid=ImgDetMain', 'name' => 'Mouse',  
        'description' => 'Wireless ergonomic mouse',  
        'price' => 50]
    ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            return Inertia::render('Product/Index', ['products' => $this->products]);

       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id) 
    { 
        $product = collect($this->products)->firstWhere('id', $id); 
 
        if (!$product) { 
            abort(404, 'Product not found'); 
        } 
        return Inertia::render('Product/Show', ['product' => $product]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
