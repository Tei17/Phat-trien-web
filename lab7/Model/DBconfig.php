<?php

class Database
{
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $dbname = 'demo_mvc';

    private $conn = null;
    private $result = null;

    public function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
        if (!$this->conn) {
            echo "Kết nối thất bại";
            exit();
        } else {
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }
    // thực thi truy vấn
    public function execute($sql)
    {
        $this->result = $this->conn->query($sql);
        return $this->result;
    }



    // phương thức lấy dữ liệu
    public function getData()
    {

        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }
    // Phương thức lấy tất cả dữ liệu
    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if ($this->num_row() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    //Thêm dữ liệu
    public function InsertData($Name, $email, $phone)
    {
        $sql = "INSERT INTO employees(id, Name, email, phone) VALUES (null, '$Name', '$email', '$phone')";
        return $this->execute($sql);
    }

    // Sửa dữ liệu
    public function UpdateData($id, $Name, $email, $phone)
    {
        $sql = "UPDATE employees SET Name = '$Name', email = '$email', phone = '$phone' WHERE id = '$id'";
        return $this->execute($sql);
    }
    // Xoá dữ liệu
    public function DeleteData($id, $table)
    {
        $sql = "DELETE from $table where id = '$id' ";
        return $this->execute($sql);
    }

    // Phương thức đếm số bản ghi
    public function num_row()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    // Lấy dữ liệu cần sửa theo ID 
    public function getDataID($table, $id)
    {
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $this->execute($sql);
        if ($this->num_row() != 0) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }
}
