<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function Home()
    {
        $products = $this->modelProduct->getAllProduct();
        require_once './views/client/trangchu.php';
    }
    public function Products(){
        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $image = $_POST['image'];
            $price = $_POST['price'];
            $id = $this->modelProduct->create($name,$image,$price);
            echo "Thêm mới thành công, id là: $id";
        }
        else {
        require_once './views/admin/products.php';
        }
    }
}
