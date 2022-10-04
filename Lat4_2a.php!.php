<?php
Class mahasiswa{
public $nama;
public $nim;
function __construct($a,$b){
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
$this->nama=$a;
$this->nim=$b;
echo "Kelas telah dibuat<br/><br/>";
}
function cetak(){
echo $this->nama."<br/>".$this->nim."<br/><br/>";
}
function __destruct(){
echo "Kelas telah dihancurkan";
}
}
?>
