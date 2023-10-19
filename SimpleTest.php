<?php

use PHPUnit\Framework\TestCase;

//class yang di tes
require_once "wordcount.php";

//class untuk melakukan testing
class SimpleTest extends TestCase {

    public function test() {
        //gunakan class yang ingin di tes
        $wc = new wordcount();

        //masukkan parameter 4 kata
        $TestSentence = "aku orang kaya dan genius";
        $Wordcount = $wc -> countwords($TestSentence);

        //pesan jika gagal
        $this -> assertEquals(4, $Wordcount);
    }
}