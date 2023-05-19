<?php
class Food extends Product{
    use Quantity;
    public
    $type;
    
    public function __construct($id, $name, $price, $image, $category, $type, $quantity, $measure_un)
    {
        Product::__construct($id, $name, $price, $image, $category);
        $this->type = $type;
        try {
            $this->setQuantity($quantity, $measure_un);
        } catch (Exception $e) {
           $nd = $e->getMessage();
        }
    }

    public function getType() {
        return "<div>$this->type</div>";
    }

    public function getInfo() {
        try {
            if ($this->quantity) {
                return "<div class='fs-5'>$this->quantity</div>";
            } else {
                throw new Exception("ND");
            }
        } catch (Exception $e) {
            return "<div class='fs-5'>".$e->getMessage()."</div>";
        }
    }
    
}