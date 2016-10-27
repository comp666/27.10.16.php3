
<?php
interface A
{
    public function sum($a, $b);
}
interface B
{
    public function out();
}
interface C extends A, B
{
    public function mz();
}
class PreBase implements C {
    public $res;
    public function sum($a, $b)
    {
        $this->res=$a+$b;
    }
    public function out()
    {
        return $this->res;
    }
    public function mz()
    {
        $this->res=222;
        return $this->res;
    }
}
$sum=new PreBase();
$sum->sum(55,56);
echo $sum->out();
echo "</br>";
echo $sum->mz();
?>