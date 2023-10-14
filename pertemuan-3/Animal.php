<?php

# membuat class Animal
class Animal
{
    # property animals
    public $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        foreach ($this->animals as $animal) {
            echo "$animal <br>";
        }
        # mengembalikan nilai object
        return $this;
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($animal)
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $animal);
        return $this;
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $animal)
    {
        # cek apakah index valid
        if (!isset($this->animals[$index])) {
            throw new Execption("Index tidak valid");
        }
        
        $this->animals[$index] = $animal;
        return $this;
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        if (!isset($this->animals[$index])) {
            throw new Execption("Index tidak valid");
        }

        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->animals[$index]);
        return $this;
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
echo "<br/> Nama: Maryam Hasnaa' Syamila <br/>";
echo "NIM: 0110222067 <br/>";
echo "Kelas: TI03 - SE02 <br/><br/>";


$animal = new Animal(["1). Cat", "2). Tiger", "3). Lion", "4). Fox", "5). Rabbit", "6). Hamster", "7). Bear"]);

echo "Index - Show All Data Hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Add Data Hewan (No. 8) <br>";
$animal->store('8). Doggie');
$animal->index();
echo "<br>";

echo "Update - Update Data  Hewan (No. 1) <br>";
$animal->update(0, '1). Dolphin');
$animal->index();
echo "<br>";

echo "Destroy - Hapus Data Hewan (No. 2) <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";