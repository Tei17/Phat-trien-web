<?php

include "Model/DBconfig.php";

$db = new Database;
$db->connect();

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
} else {
    $controller = "";
}


if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}


switch ($action) {
    case 'add': {
            if (isset($_POST['add_employees'])) {
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $phone = $_POST['sodienthoai'];
                if ($db->InsertData($hoten, $email, $phone)) {
                    echo "<script>alert('Thêm thành công');</script>";
                } else {
                    echo "<script>alert('Thêm thất bại');</script>";
                }
            }
            require_once 'View/add_employees.php';
            break;
        }
    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $tblTable = "employees";
            $dataID = $db->getDataID($tblTable, $id);
            if (isset($_POST['edit_employees'])) {

                // Lấy dữ liệu từ View
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $phone = $_POST['sodienthoai'];

                // truyền dữ liệu lấy từ view sang model:
                if ($db->UpdateData($id, $hoten, $email, $phone)) {
                    header('location: index.php?controller=employees&action=detail');
                } else {
                    echo "<script>alert('Thêm thất bại');</script>";
                }
            }
        } {
            require_once 'View/edit_employees.php';
            break;
        }
    case 'delete': {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $tblTable = "employees";

                if ($db->DeleteData($id, $tblTable)) {
                    header('location: index.php?controller=employees&action=detail');
                } else {
                    header('location: index.php?controller=employees&action=detail');
                }
            }
            // require_once 'View/delete_employees.php';
            break;
        }
    case 'detail':
        $tblTable = "employees";
        $data = $db->getAllData($tblTable); {
            require_once 'View/detail_employees.php';
            break;
        }
    default: {
            require_once 'View/detail_employees.php';
            break;
        }
}

class employeeController
{
    // trả về trang chính
    public function run($action)
    {
        switch ($action) {
            case "index":
                $this->index();
                break;
        }
    }

    public function index()
    {
        header('location: index.php?controller=employees&action=detail');
    }
}
