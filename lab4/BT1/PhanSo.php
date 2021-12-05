<?php


class PhanSo
{
    private $tuso1;
    private $mauso1;
    private $tuso2;
    private $mauso2;

    public function __construct()
    {

    }

    public function __destruct()
    {

    }

    public function Xuat()
    {
        echo $this->tuso1 . '/' . $this->mauso1 . ' + ' . $this->tuso2 . '/' . $this->mauso2 . ' = ' . $this->Cong() . '<br/>';
        echo $this->tuso1 . '/' . $this->mauso1 . ' - ' . $this->tuso2 . '/' . $this->mauso2 . ' = ' . $this->Tru() . '<br/>';
        echo $this->tuso1 . '/' . $this->mauso1 . ' * ' . $this->tuso2 . '/' . $this->mauso2 . ' = ' . $this->Nhan() . '<br/>';
        echo $this->tuso1 . '/' . $this->mauso1 . ' / ' . $this->tuso2 . '/' . $this->mauso2 . ' = ' . $this->Chia() . '<br/>';
    }

    public function PhanSoThuNhat($tuso1, $mauso1)
    {
        $this->tuso1 = $tuso1;
        $this->mauso1 = $mauso1;
    }

    public function PhanSoThuHai($tuso2, $mauso2)
    {
        $this->tuso2 = $tuso2;
        $this->mauso2 = $mauso2;
    }

    public function Cong()
    {
        return ($this->tuso1 / $this->mauso1) + ($this->tuso2 / $this->mauso2);
    }

    public function Tru()
    {
        return ($this->tuso1 / $this->mauso1) - ($this->tuso2 / $this->mauso2);
    }

    public function Nhan()
    {
        return ($this->tuso1 / $this->mauso1) * ($this->tuso2 / $this->mauso2);
    }

    public function Chia()
    {
        return ($this->tuso1 / $this->mauso1) / ($this->tuso2 / $this->mauso2);
    }
}

$phanso = new PhanSo();
$phanso->PhanSoThuNhat(5, 5);
$phanso->PhanSoThuHai(3, 4);
$phanso->Xuat();