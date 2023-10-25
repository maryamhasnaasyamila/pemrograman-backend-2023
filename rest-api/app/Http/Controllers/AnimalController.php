<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = 
    ['Wolf', 'Dinosaur', 'Butterfly', 'Shark'];
    
    public function index(){ 
        echo "Show All Data <br>";
        
        //perulangan property animals
        foreach($this->animals as $animal)
        echo "- $animal <br>";
    }

    public function store(request $request){
        echo "# Add Animals <br><br>";

        // menambahkan data di animals
        array_push($this->animals, $request->animal);

        // memanggil method index
        $this->index();
    }

    public function update($id, Request $request){
        echo "# Update Animal (id:$id). <br><br>";

        // update data di animals
        $this->animals[$id] = $request->animal;

        // memanggil method index
        $this->index();
    }

    public function destroy($id){
        echo "# Delete Animal (id:$id). <br><br>";

        // menghapus data di animals
        unset($this->animals[$id]);

        // memanggil method index
        $this->index();
    }
}