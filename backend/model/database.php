<?php
/*
	- Lớp Database thực hiện việc kết nối cơ sở dữ liệu MySQL.
	- Lớp cung cấp một số phương thức cơ bản để thao tác với CSDL như:
		+ Kết nối cơ sở dữ liệu
		+ Tạo truy vấn, thực hiện truy vấn
		+ Lấy dữ liệu và trả dữ liệu về dưới dạng mảng hoặc đối tượng

*/
class Database
{
    var $conn = "";		//Biến để lưu đối tượng PDO sau khi đã kết nối đến csdl
    var $sql = "";		//Biến lưu trữ câu truy vấn thao tác với csdl
    var $preStm = "";	 //PreparedStatement Object

    var $rowCount = 0;
    var $pageSize = 0;	//Thiết lập số dòng tối đa trong một trang(0 là không phân trang)
    var $pageCount = 1;  //Cho biết Số trang dữ liệu

    //var $row_start = 0;
    /*
        - Mô tả: Phương thức khởi tạo, thực hiện kết nối đến csdl
        - Tham số:
            + $hostname: nhận tên hoặc địa chỉ IP của máy chủ csdl MySQL. Giá trị mặc định là localhost
            + $dbname: Tên cơ sở dữ liệu cần làm việc. Giá trị mặc định là csdl test có sãn trong MySQL
            + $user: chứa tên đăng nhập của tài khoản để truy cập vào MySQL
            + $pass: mật khẩu của tài khoản
    */
    public function __construct($hostname="localhost", $dbname="fastfood", $user="root",$pass=""){
        try		{
            $this->conn = new PDO("mysql:host=$hostname; dbname=$dbname; charset=utf8","$user","$pass");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            exit("Không kết nối được với csdl !");
            //echo $e->getMessage();
        }
    }
    /*
    public static function getInstance() {
      if (!isset($this->conn)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $this->conn = new PDO('mysql:host=localhost;dbname=php_mvc', 'root', '', $pdo_options);
      }
      return $this->conn;
    }
    */
    /*
        - Phương thức setQuery()
        - Mô tả: Phương thức nhận vào một câu lệnh truy vấn để thực thi qua tham số, và lưu câu truy vấn vào biến $this->$sql
        - Tham số:
            + $sql: nhận vào một chuỗi lệnh truy vấn SQL
    */
    public function setQuery($sql){
        $this->sql = $sql;
    }

    /*
        - Phương thức execute()
        - Mô tả: Phương thức dùng để thực hiện câu lệnh truy vấn trong biến $this->sql
        - Tham số:
            + $options: Tham số nhận vào một mảng giá trị. Các giá trị trong mảng này được dùng để truyền cho các vị trí tham số trong câu truy vấn
        - Trả về: Phương thức trả về một đối tượng PDOStatement là cusor chứa dữ liệu
    */
    public function execute($options = array()){
        $this->rowCount = 0;

        try	{
            $this->preStm = $this->conn->prepare($this->sql);
            $this->preStm->execute($options);
            return $this->preStm;
        }
        catch(PDOException $e){
            //echo $e->getMessage();
            return false;//trả về false nếu có lỗi xảy ra
            //
        }
    }

    /*
        - Phương thức loadAllRows()
        - Mô tả: Phương thức dùng để lấy tất cả các dòng có trong bảng
        - Tham số:
            + $options: Tham số nhận vào một mảng giá trị. Các giá trị trong mảng này được dùng để truyền cho các vị trí tham số trong câu truy vấn

        - Trả về: Phương thức trả về một mảng chứa dữ liệu dưới dạng đối tượng
    */
    public function loadAllRows($options = array()){
        if(!$options){
            if (!$preStm = $this->execute())
                return false;
        }
        else {
            if (!$preStm = $this->execute($options))
                return false;
        }
        $result = $preStm->fetchAll(PDO::FETCH_OBJ);
        $this->rowCount = count($result); //Lưu tổng số dòng lấy được
        return $result;
    }
    /*
        - Phương thức loadRow()
        - Mô tả: Phương thức dùng để lấy một dòng trong bảng thỏa mãn điều kiện
        - Tham số:
            + $options: Tham số nhận vào một mảng giá trị. Các giá trị trong mảng này được dùng để truyền cho các vị trí tham số trong câu truy vấn
        - Trả về: Phương thức trả về một dòng dữ liệu dưới dạng đối tượng
    */
    public function loadRow($options = array()){
        if(!$options){
            if (!$result = $this->execute())
                return false;
        }
        else {
            if (!$result = $this->execute($options))
                return false;
        }
        $result = $this->preStm->fetch(PDO::FETCH_OBJ);
        $this->rowCount = count($result);	//Lưu tổng số dòng lấy được
        return $result;
    }

    /*
        - Phương thức getLastId()
        - Mô tả: Phương thức dùng để lấy id ở cột Auto Increment được cấp pháp cho dòng khi thực hiện Insert
        - Trả về: Trả về ID được lấy từ csdl
    */
    public function getLastId()	{
        return $this->getLastId();
    }
}

?>