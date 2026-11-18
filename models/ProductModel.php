<?php 
// Có class chứa các function thực thi tương tác với cơ sở dữ liệu 
class ProductModel 
{
    public $conn;
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Viết truy vấn danh sách sản phẩm 
    public function getAllProduct()
    {
        
    }
    public function create($name,$image,$price){
        $sql = "INSERT INTO products (name,image,price) VALUES (:name,:image,:price)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(
            'name'=>$name,
            'image'=>$image,
            'price'=>$price
        ));
        return $this->conn->lastInsertId();
    }
}
