<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Property;

class PropertyController extends Controller
{
    public function index()
    {
        // $properties = DB::select("SELECT * FROM properties");
        $properties = Property::all();

        return view('property.index')->with('properties', $properties);
    }

    public function show($name)
    {
        // var_dump($id);
        // $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();

        // var_dump($property);
        if(!empty($property)):
            return view('property.show')->with('property', $property);
        else:        
            return redirect()->action('PropertyController@index');
        endif;
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(Request $request)
    {
        // var_dump($request);
        // var_dump($request->title);
        // var_dump($request->description);
        // var_dump($request->rental_price);
        // var_dump($request->sale_price);

        $propertySlug = $this->setName($request->title);

        // $property = [
        //     $request->title,
        //     $propertySlug,
        //     $request->description,
        //     $request->rental_price,
        //     $request->sale_price
        // ];

        // DB::insert("INSERT INTO properties (title, name, description, rental_price, sale_price) VALUES
        //             (?, ?, ?, ?, ?)", $property);

        $property = [
            'title' => $request->title,
            'name' => $propertySlug,
            'description' => $request->description,
            'rental_price' => $request->rental_price,
            'sale_price' => $request->sale_price
        ];

        Property::create($property);

        return redirect()->action('PropertyController@index');
    }

    public function edit($name)
    {
        // var_dump($name);
        // $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();

        // var_dump($property);
        if(!empty($property)):
            return view('property.edit')->with('property', $property);
        else:        
            return redirect()->action('PropertyController@index');
        endif;
        
    }

    public function update(Request $request, $id)
    {
        // var_dump($id, $request);

        $propertySlug = $this->setName($request->title);

        // $property = [
        //     $request->title,
        //     $propertySlug,
        //     $request->description,
        //     $request->rental_price,
        //     $request->sale_price,
        //     $id
        // ];

        // DB::update("UPDATE properties SET title = ?, name = ?, description = ?, rental_price = ?, sale_price = ? WHERE id = ?", $property);

        $property = Property::find($id);

        $property->title = $request->title;
        $property->name = $propertySlug;
        $property->description = $request->description;
        $property->rental_price = $request->rental_price;
        $property->sale_price = $request->sale_price;

        $property->save();

        return redirect()->action('PropertyController@index');
        
    }

    public function destroy($name)
    {
        // var_dump($name);

        // $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();

        if(!empty($property)):
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        endif;

        return redirect()->action('PropertyController@index');
    }

    private function setName($title)
    {
        $propertySlug = str_slug($title);

        // $properties = DB::select("SELECT * FROM properties");
        $properties = Property::all();

        $aux = 0;
        foreach($properties as $property):
            if(str_slug($property->title) === $propertySlug):
                $aux++;
            endif;
        endforeach;

        if($aux > 0):
            $propertySlug = $propertySlug . '-' . $aux;
        endif;

        return $propertySlug;
    }
}
