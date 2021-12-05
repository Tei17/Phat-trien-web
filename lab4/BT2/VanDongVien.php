<?php


class VanDongVien
{
    private $hoten;
    private $tuoi;
    private $monthidau;
    private $cannang;
    private $chieucao;

    public function __construct()
    {
    }

    public function Nhap($hoten, $tuoi, $monthidau, $cannang, $chieucao)
    {
        $this->hoten = $hoten;
        $this->tuoi = $tuoi;
        $this->monthidau = $monthidau;
        $this->cannang = $cannang;
        $this->chieucao = $chieucao;
    }

    public function Xuat()
    {
        return 'Tên: ' . $this->hoten . '<br/>' .
            'Tuổi: ' . $this->tuoi . '<br/>' .
            'Môn thi đấu: ' . $this->monthidau . '<br/>' .
            'Cân nặng: ' . $this->cannang . '<br/>' .
            'Chiều cao: ' . $this->chieucao . '<br/>';
    }

    public function SoSanh($obj1, $obj2)
    {
        if ($obj1->chieucao > $obj2->chieucao) {
            return 'Vận động viên: ' . $obj1->hoten . ' có chiều cao: ' . $obj1->chieucao . ' lớn hơn vận động viên: ' . $obj2->hoten . ' có chiều cao: ' . $obj2->chieucao;
        } elseif ($obj1->chieucao < $obj2->chieucao) {
            return 'Vận động viên: ' . $obj1->hoten . ' có chiều cao: ' . $obj1->chieucao . ' nhỏ hơn vận động viên: ' . $obj2->hoten . ' có chiều cao: ' . $obj2->chieucao;
        } else {
            if ($obj1->cannang > $obj2->cannang) {
                return 'Vận động viên: ' . $obj1->hoten . ' có chiều cao: ' . $obj1->chieucao . ' và cân nặng: ' . $obj1->cannang . ' lớn hơn vận động viên: ' . $obj2->hoten . ' có chiều cao: ' . $obj2->chieucao . ' và cân nặng: ' . $obj2->cannang;
            } elseif ($obj1->cannang < $obj2->cannang) {
                return 'Vận động viên: ' . $obj1->hoten . ' có chiều cao: ' . $obj1->chieucao . ' và cân nặng: ' . $obj1->cannang . ' nhỏ hơn vận động viên: ' . $obj2->hoten . ' có chiều cao: ' . $obj2->chieucao . ' và cân nặng: ' . $obj2->cannang;
            } else {
                return '2 vận động viên bằng nhau về cân nặng và chiều cao';
            }

        }

    }
}

//$obj1 = new VanDongVien();
//$obj1->Nhap('Nguyễn Văn A', 21, 'Điền kinh', 68, 173);
//$obj2 = new VanDongVien();
//$obj2->Nhap('Nguyễn Văn B', 21, 'Bơi lội', 56, 173);
//
//echo $obj1->Xuat();
//echo '--------------------------------</br>';
//echo $obj2->Xuat();
//echo '--------------------------------</br>';
//echo $obj1->SoSanh($obj1, $obj2);
