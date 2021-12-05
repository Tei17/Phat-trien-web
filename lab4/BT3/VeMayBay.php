<?php


class VeMayBay
{
    public $tenchuyen;
    public $ngaybay;
    public $giave;

    public function __construct()
    {
    }

    public function Nhap($tenchuyen, $ngaybay, $giave)
    {
        $this->tenchuyen = $tenchuyen;
        $this->ngaybay = $ngaybay;
        $this->giave = $giave;
    }

    public function Xuat()
    {
        return '
                Tên chuyến: ' . $this->tenchuyen . ' </br>
                Ngày bay: ' . $this->ngaybay . '</br>
                Giá vé: ' . number_format($this->giave) . '</br>';
    }

    public function getGiaVe()
    {
        return $this->giave;
    }

}