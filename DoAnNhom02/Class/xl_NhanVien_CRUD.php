<?php 
    Class NhanVien{
 
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "dtb_ban_sach_3";
        private $conn;
 
        public function __construct(){
            try {
                 
                $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
            } catch (Exception $e) {
                echo "connection failed" . $e->getMessage();
            }
        }
 		
		public function fetch(){
            $data = null;
 
            $query = "SELECT * FROM nhanvien";
            if ($sql = $this->conn->query($query)) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }
		
        public function insert(){
 
            if (isset($_POST['submit'])) {
                if (isset($_POST['tennv']) && isset($_POST['gtinh']) && isset($_POST['sdt']) && isset($_POST['tendn'])) {
                    if (!empty($_POST['tennv']) && !empty($_POST['gtinh']) && !empty($_POST['sdt']) && !empty($_POST['tendn']) ) {
                         
                        $name = $_POST['tennv'];
                        $gtinh = $_POST['gtinh'];
                        $sdt = $_POST['sdt'];
                        $tendn = $_POST['tendn'];
 
                        $query = "INSERT INTO nhanvien(TENNV, GIOITINH, SDT, TENDN) VALUES ('$name','$gtinh','$sdt', '$tendn')";
                        if ($sql = $this->conn->query($query)) {
                            echo "<script>alert('Thêm nhân viên thành công');</script>";
                            echo "<script>window.location.href = 'Linh_NhanVien_2.php';</script>";
                        }else{
                            echo "<script>alert('Thêm thất bại');</script>";
                            echo "<script>window.location.href = 'Linh_NhanVien_2.php';</script>";
                        }
 
                    }else{
                        echo "<script>alert('thất bại');</script>";
                        echo "<script>window.location.href = 'Linh_NhanVien_2.php';</script>";
                    }
                }
            }
        }
		
		public function edit($id){
 
            $data = null;
 
            $query = "SELECT * FROM nhanvien WHERE MANV= '$id'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
		
		public function Timkiem($id){
 
            $data = null;
 
            $query = "SELECT * FROM nhanvien WHERE TENNV= '$txt_timkiem'";
            if ($sql = $this->conn->query($query)) {
                while($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }
		
		public function update($data){
 
            $query = "UPDATE nhanvien SET TENNV='$data[name]', GIOITINH='$data[email]', SDT='$data[mobile]', TENDN='$data[tendn]' WHERE MANV='$data[id] '";
 
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
		
		public function delete($id){
 
            $query = "DELETE FROM nhanvien where MANV = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
		
	}