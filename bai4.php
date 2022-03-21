<?php
class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity,$categoryId)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->categoryId = $categoryId;
    }
}

class Category
{
    public $categoryID;


    public function __construct($categoryID)
    {
        $this->categoryID = $categoryID;

    }
}
$listProduct = array(
    new Product('CPU','5000',5,1),
    new Product('VGA','5000',10),1,
    new Product('Main','15000',20,2),
    new Product('Case','15000',40,2),
);

$listCategory = array(
    new Category('1','Computer'),
    new Category('2','Computer1'),
);
//bai 4
$nameProduct = 'CPU';
function findProduct($nameProduct,$listProduct){
    foreach($listProduct as $key => $val){
        if($val -> name == $nameProduct){
            echo $val->name;
            echo $val ->price;
            echo $val ->quantity;
        }
        //echo $val->name;
    }
    return null;
}
findProduct($nameProduct,$listProduct);

//bai 6
$namePrice = '15000';
function findProductByPrice($namePrice,$listProduct){
    foreach($listProduct as $key => $val){
        if($val -> price == $nameProduct){
            echo $val->name;
            echo $val ->price;
            echo $val ->quantity;
        }
        //echo $val->name;
    }
    return null;
}
findProductByPrice($namePrice,$listProduct);
//bai5
$nameCategoryId = '1';
function findProductByCategoriId($nameProduct,$listProduct){
    foreach($listProduct as $key => $val){
        if($val -> categoryId == $nameProduct){
            echo $val->name;
            echo $val ->price;
            echo $val ->quantity;
        }
        //echo $val->name;
    }
    return null;
}
findProductByCategoriId($nameCategoryId,$listProduct);

?>