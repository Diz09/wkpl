<?php
//File : wordcount.php
class wordcount {
    //fungsi untuk menghitung kata(spasi)
    public function countwords($sentence) {
        return count(explode(" ", $sentence));
    }
}

/*
explode berfugsi untuk memecah data string dan mengubahnya menjadi data array berdasarkan delimiter/karakter(spasi)
count berfungsi untuk menghitung array dari string telah dipecah
$sentece merupakan variable yang berisi kalimat

jadi aplikasi ini akan menangkap data string/kalimat lalu memecahnya berdasarkan delimiter(spasi) dan memurahnya menjadi array 
    lalu akan dihitung banyak dari array data akan dikembalikan kepada countwords yang akan dipakai pada SimpleTest
*/

?>
