<?php

include 'Nguoi.php';
include 'VeMayBay.php';


class HanhKhach extends Nguoi
{

    private $ve;
    private $soluong;

    public function __construct($obj)
    {
        $this->ve = $obj;
    }

    public function NhapSL($soluong)
    {
        $this->soluong = $soluong;
    }

    public function GetSoLuong()
    {
        return $this->soluong;
    }

    public function TongTien()
    {
        return $this->ve->getGiaVe() * $this->soluong;
    }

    public function GetThongTin()
    {
        return $arr = [
            'tenchuyen' => $this->ve->tenchuyen,
            'giave' => $this->ve->giave,
            'ngaybay' => $this->ve->ngaybay,
            'hoten' => $this->hoten,
            'tuoi' => $this->tuoi,
            'gioitinh' => $this->gioitinh,
            'soluong' => $this->GetSoLuong(),
            'tongtien'=>$this->TongTien()
        ];
    }

}

//$ve = new VeMayBay();
//$ve->Nhap('Chuyen 1', '21-07-2021', 450000);
//
//$hanhkhach = new HanhKhach($ve);
//$hanhkhach->NhapSL(5);
//echo $hanhkhach->TongTien();