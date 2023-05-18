<?php
include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/Equipm.php';
include __DIR__ . '/../Models/Food.php';
include __DIR__ . '/../Models/Toy.php';

$products = [
    new Food(
        1,
        "Croccantini",
        "33,00",
        "https://i.pinimg.com/originals/8f/88/a5/8f88a50f12ea6ef4e116dc74b9643e12.jpg",
        "dog",
        "Cibo",
        "3KG"
    ),
    new Equimp(
        2,
        "Collare Fico",
        "12,75",
        "https://i.pinimg.com/originals/8f/88/a5/8f88a50f12ea6ef4e116dc74b9643e12.jpg",
        "dog",
        "Indossabili",
        "Standard"
    ),
    new Toy(
        3,
        "Finto Gomitolo",
        "8,00",
        "https://i.pinimg.com/originals/8f/88/a5/8f88a50f12ea6ef4e116dc74b9643e12.jpg",
        "cat",
        "Giochi",
        "Tessuto"
    ),
    new Equimp(
        4,
        "Collare Miao",
        "40,38",
        "https://i.pinimg.com/originals/8f/88/a5/8f88a50f12ea6ef4e116dc74b9643e12.jpg",
        "cat",
        "Indossabili",
        "Premium"
    ),
    new Food(
        5,
        "Latte Micio Micio",
        "5,00",
        "https://i.pinimg.com/originals/8f/88/a5/8f88a50f12ea6ef4e116dc74b9643e12.jpg",
        "cat",
        "Cibo",
        "7L"
    ),
    new Toy(
        6,
        "Frisbee Free",
        "13,12",
        "https://i.pinimg.com/originals/8f/88/a5/8f88a50f12ea6ef4e116dc74b9643e12.jpg",
        "dog",
        "Giochi",
        "Plastica"
    ),
];