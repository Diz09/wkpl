<?php
//mengimport 1 libariry PHPUnit\Framework\TestCase yang ada pada composer
use PHPUnit\Framework\TestCase;

//memuat/memanggil file dari wordcount.php
require_once "wordcount.php";

//class untuk melakukan testing
//simpltest merupakan turunan/extends dari testcase
class SimpleTest extends TestCase {

    public function test() {
        //membuat objek baru yang mengimplementasikan wordcount
        $wc = new wordcount();
        
        //pertanyaan
        //masukkan parameter 4 kata (true) atau lebih (false), berdasarkan nanti pada $this
        $TestSentence = "aku orang kaya dan genius";
        //membuat objek baru ($Wordcount)
        //didalamnya dijalankan fungsi countword yang dipanggil dari objek $wc yang berfungsi untuk melihat jumlah kata dan menghitungnya
        $Wordcount = $wc -> countwords($TestSentence);

        //jawaban
        //pesan jika gagal
        //$this berupa penunjuk untuk objek yang sedang memakai method
        //assertEquals digunakan untuk membandingkan nilai yang diharapkan(5 kata) dengan nilai yang ada(wordcount)
        $this -> assertEquals(5, $Wordcount);
    }
}
?>