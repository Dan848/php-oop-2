<?php
class Toy extends Product{
    public
    $type = "Giochi",
    $material;
    
    public function __construct($id, $name, $price, $image, $category, $type, $material)
    {
        Product::__construct($id, $name, $price, $image, $category);
        $this->type = $type;
        $this->material = $material;
    }

    public function getType() {
        return "<div>$this->type</div>";
    }

    public function getInfo() {
        return "<div class='fs-5'>$this->material</div>";
    }
}