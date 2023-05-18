<?php
class Food extends Product{
    public
    $type = "Cibo",
    $quantity;
    
    public function __construct($id, $name, $price, $image, $category, $type, $quantity)
    {
        Product::__construct($id, $name, $price, $image, $category);
        $this->type = $type;
        $this->quantity = $quantity;
    }

    public function getType() {
        return "<div>$this->type</div>";
    }

    public function getInfo() {
        return "<div class='fs-5'>$this->quantity</div>";
    }
}