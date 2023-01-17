<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BangunDatar {
    public $a = 0;
    abstract public function area();
    abstract public function circumference();
    abstract public function enlarge($scale);
    abstract public function shrink($scale);
}
class lingkaran extends BangunDatar{
    public $a = 0;
    public function set_a($a){
          $this->a = $a;
    }

    public function area(){
        $rumus = 3.14*$this->a*$this->a;
        echo $rumus . PHP_EOL;
    }
    public function circumference(){
        $rumus = 2*3.14*$this->a;
        echo $rumus . PHP_EOL;
    }
    public function enlarge($scale){
        $this->a *= $scale;
        echo '<br><br>=================';
        echo '<br>enlarge berhasil';
        echo '<br>=================';

    }
    public function shrink($scale){
        $this->a /= $scale;
        echo '<br><br>=================';
        echo '<br>shrink berhasil';
        echo '<br>=================';
    }
}

class persegi extends BangunDatar{
    public $a = 0;
    public function set_a($a){
          $this->a = $a;
    }

    public function area(){
        $rumus = $this->a*$this->a;
        echo $rumus . PHP_EOL;
    }
    public function circumference(){
        $rumus = 4*$this->a;
        echo  $rumus . PHP_EOL;
    }
    public function enlarge($scale){
        $this->a *= $scale;
        echo '<br><br>=================';
        echo '<br>enlarge berhasil';
        echo '<br>=================';

    }
    public function shrink($scale){
        $this->a /= $scale;
        echo '<br><br>=================';
        echo '<br>shrink berhasil';
        echo '<br>=================';
    }
}

class persegiPanjang extends BangunDatar{
    public $a = 0;
    public $b = 0;
    public function set_ab($a,$b){
          $this->a = $a;
          $this->b = $b;
    }

    public function area(){
        $rumus = $this->a*$this->b;
        echo $rumus . PHP_EOL;
    }
    public function circumference(){
        $rumus = 2*$this->a + 2*$this->b;
        echo $rumus . PHP_EOL;
    }
    public function enlarge($scale){
        $this->a *= $scale;
        $this->b *= $scale;
        echo '<br><br>=================';
        echo '<br>enlarge berhasil';
        echo '<br>=================';

    }
    public function shrink($scale){
        $this->a /= $scale;
        $this->b /= $scale;
        echo '<br><br>=================';
        echo '<br>shrink berhasil';
        echo '<br>=================';
    }    
}

class Descriptor{
    public static function desc($jenis){
        $l = new lingkaran();
        $p = new persegi();
        $pl = new persegiPanjang();
        $l->set_a(4);
        $p->set_a(4);
        $pl->set_ab(4,5);

        if($jenis === "lingkaran"){
            echo 'Bangun datar ini adalah lingkaran yang memiliki luas :';
            $l->area();
            echo ' dan keliling : ';
            $l->circumference();
        }else if($jenis === "persegi"){
            echo 'Bangun datar ini adalah persegi yang memiliki luas :';
            $p->area();
            echo ' dan keliling : ';
            $p->circumference();
        }else if($jenis === "persegi panjang"){
            echo 'Bangun datar ini adalah persegi panjang yang memiliki luas :';
            $pl->area();
            echo ' dan keliling : ';
            $pl->circumference();
        }else{
            echo 'halo';
        }

     }
}
class BangunDatarController extends Controller
{
    public function lingkaran(){
        $ling = new lingkaran();
        $des = new Descriptor();
        $ling->set_a(4);
        $ling->area();
        echo '<br>';
        $ling->circumference();
        echo '<br>';
        $des->desc("lingkaran");
        echo '<br>';
        $des->desc("persegi");
        echo '<br>';
        $des->desc("persegi panjang");

        //$ling->enlarge(10);
        //$ling->area();
        //$ling->circumference();
        //$ling->shrink(10);
        //$ling->area();
        //$ling->circumference();

    }

    public function persegi(){
        $per = new persegi();
        $per->set_a(4);
        $per->area();
        $per->circumference();
        $per->enlarge(10);
        $per->area();
        $per->circumference();
        $per->shrink(10);
        $per->area();
        $per->circumference();

    }

    public function persegiPanjang(){
        $perpa = new persegiPanjang();
        $des = new Descriptor();
        $perpa->set_ab(4,6);
        $perpa->area();
        $perpa->circumference();
        $perpa->enlarge(10);
        $perpa->area();
        $perpa->circumference();
        $perpa->shrink(10);
        $perpa->area();
        $perpa->circumference();

    }
}
