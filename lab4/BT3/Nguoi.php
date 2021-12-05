<?php


class Nguoi
{
    protected $hoten;
    protected $gioitinh;
    protected $tuoi;


    public function __construct()
    {
    }

    public function Nhap($hoten, $gioitinh, $tuoi)
    {
        $this->hoten = $hoten;
        $this->gioitinh = $gioitinh;
        $this->tuoi = $tuoi;
    }

    public function Xuat()
    {
        return 'Họ tên: ' . $this->hoten . '</br>Giới Tính: ' . $this->gioitinh . '</br>Tuổi: ' . $this->tuoi;
    }
}