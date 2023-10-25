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
        
        //loop property animals
        foreach($this->animals as $animal)
        echo "- $animal <br>";
    }

    public function store(request $request){
        echo "# Add Animals <br><br>";
        array_push($this->animals, $request->animal);

        //panggil method index
        $this->index();
    }

    public function update($id, Request $request){
        echo "# Update Animal (id:$id). <br><br>";

        // update data di property animals
        $this->animals[$id] = $request->animal;

        // panggil method index
        $this->index();
    }

    public function destroy($id){
        echo "# Delete Animal (id:$id). <br><br>";

        unset($this->animals[$id]);

        $this->index();
    }

    // public $animals = [
    //     ["animal #1" => "wolf"],
    //     ["animal #2" => "black cat"],
    //     ["animal #3" => "butterfly"],
    //     ["animal #4" => "puppy"]
    // ];

    /**
     * Method index - menampilkan data animal.
     */
    // public function index()
    // {
    //     foreach ($this->animals as $animal) {
    //         // echo "Menampilkan data Hewan";
    //         echo "Nama Hewan: $animal[name] <br>";
    //     }
    // }

    // /**
    //  * Method create - membuat hewan baru
    //  */
    // // public function create()
    // // {
        
    // // }

    // /**
    //  * Method store - menambahkan hewan baru
    //  */
    // public function store(Request $request)
    // {
    //     $animal = $request->all();
    //     // echo "Menambahkan data Hewan";
    //     array_push($this->animals, $animal);
    //     $this->index();
    // }

    // /**
    //  * Method show - menampilkan semua data hewan
    //  */
    // // public function show(string $id)
    // // {
        
    // // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // // public function edit(string $id)
    // // {
    // //     //
    // // }

    // /**
    //  * Method update - mengupdate data hewan
    //  */
    // public function update(Request $request, string $id)
    // {
    //     $animal = $request->all();
    //     // echo "Mengupdate data Hewan";
    //     $this->animals[$id] = $animal;
    //     $this->index();
    // }

    // /**
    //  * Method destroy - menghapus data hewan
    //  */
    // public function destroy(string $id)
    // {
    //     // echo "Menghapus data Hewan";
    //     unset($this->animals[$id]);
    //     $this->index();
    // }
}