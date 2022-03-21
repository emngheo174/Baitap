<?php
class Product
{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
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
    new Product('CPU','5000',5),
    new Product('VGA','5000',10),
    new Product('Main','15000',20),
    new Product('Case','15000',40),
);

$listCategory = array(
    new Category('1','Computer'),
    new Category('2','Computer1'),
);

$nameProduct = '15000';
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

$nameProduct1 = '15000';
function findProductByPrice($nameProduct,$listProduct){
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
findProduct($nameProduct1,$listProduct);

?>