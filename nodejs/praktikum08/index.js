// membuat Variable
let name = "Maryam Hasnaa' Syamila";

// memanggil & menampilkan isi variable
console.log(name);

// membuat Array
let angka = [1, 2, 3, 4, 5];
console.log(angka[0]);
console.log(angka.length);

// membuat Object
let mahasiswa = {
  // key: value
  nama: "Hasna",
  nim: "0110222067",
  jurusan: "TI",
};
console.log(mahasiswa.nama);
console.log(mahasiswa.nim);
console.log(mahasiswa.jurusan);

// membuat Object Array
let listMahasiswa = [
  {
    nama: "Hasna",
    nim: "0110222067",
    jurusan: "TI",
  },
  {
    nama: "Karina",
    nim: "0123456789",
    jurusan: "TI",
  },
  {
    nama: "Yeri",
    nim: "0987654321",
    jurusan: "TI",
  },
];
console.log(listMahasiswa[1].nama);
console.log(listMahasiswa[2]);


// membuat If Else
let nilai = 90;
if (nilai >= 80) {
  console.log("Lulus");
} else {
  console.log("Tidak Lulus");
}

// membuat Looping 1-10
for (let i = 1; i <= 10; i++) {
  console.log(i);
}

// membuat Fungsi
function tambah(angka1, angka2) {
  return angka1 + angka2;
}
console.log(tambah(5, 7));
