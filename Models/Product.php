<?php

class Product{
    public 
    $id, $name, $price, $image, $category; 

    public function __construct($id, $name, $price, $image, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function getCoverImage() {
        return "<img class='img-fluid' src='$this->image' alt='$this->name'>";
    }
    public function getName() {
        return "<h4>$this->name</h4>";
    }
    public function getPrice() {
        return "<div>$this->price €</div>";
    }

    public function getCategory() {
        if ($this->category == "dog"){
        return "<div><i class='fa-solid fa-dog fs-4'></i></div>";
        }
        else {
            return "<div><i class='fa-solid fa-cat fs-4'></i></div>";
        }
    }
}