<?php
class Equimp extends Product{
    public
    $type = "Indossabili",
    $quality;
    
    public function __construct($id, $name, $price, $image, $category, $type, $quality)
    {
        Product::__construct($id, $name, $price, $image, $category);
        $this->type = $type;
        $this->quality = $quality;
    }

    public function getType() {
        return "<div>$this->type</div>";
    }

    public function getInfo() {
        return "<div class='fs-5'>$this->quality</div>";
    }
}