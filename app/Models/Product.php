<?php

namespace App\Models;

class Product
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "name" => "Smartphone XYZ",
                "description" => "Smartphone XYZ dengan fitur canggih dan kamera 48MP.",
                "price" => 599.99,
                "category" => "Smartphones",
                "stock" => 150,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 2,
                "name" => "Laptop ABC",
                "description" => "Laptop ABC dengan prosesor Intel i7 dan 16GB RAM.",
                "price" => 999.99,
                "category" => "Laptops",
                "stock" => 80,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 3,
                "name" => "Headphones DEF",
                "description" => "Headphones DEF dengan kualitas suara tinggi dan noise cancellation.",
                "price" => 199.99,
                "category" => "Audio",
                "stock" => 200,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 4,
                "name" => "Tablet GHI",
                "description" => "Tablet GHI dengan layar 10 inci dan penyimpanan 128GB.",
                "price" => 299.99,
                "category" => "Tablets",
                "stock" => 120,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 5,
                "name" => "Smartwatch JKL",
                "description" => "Smartwatch JKL dengan fitur kesehatan dan pelacakan GPS.",
                "price" => 149.99,
                "category" => "Wearables",
                "stock" => 60,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 6,
                "name" => "Camera MNO",
                "description" => "Camera MNO dengan resolusi 24MP dan kemampuan video 4K.",
                "price" => 749.99,
                "category" => "Cameras",
                "stock" => 45,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 7,
                "name" => "Speaker PQR",
                "description" => "Speaker PQR dengan suara jernih dan bass mendalam.",
                "price" => 299.99,
                "category" => "Audio",
                "stock" => 120,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 8,
                "name" => "Monitor STU",
                "description" => "Monitor STU dengan resolusi 4K dan refresh rate 144Hz.",
                "price" => 499.99,
                "category" => "Monitors",
                "stock" => 75,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 9,
                "name" => "Keyboard VWX",
                "description" => "Keyboard VWX dengan switch mekanik dan lampu RGB.",
                "price" => 129.99,
                "category" => "Accessories",
                "stock" => 200,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 10,
                "name" => "Mouse YZA",
                "description" => "Mouse YZA dengan DPI tinggi dan desain ergonomis.",
                "price" => 49.99,
                "category" => "Accessories",
                "stock" => 300,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 11,
                "name" => "Printer BCD",
                "description" => "Printer BCD dengan kecepatan cetak tinggi dan fitur wireless.",
                "price" => 199.99,
                "category" => "Printers",
                "stock" => 50,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 12,
                "name" => "Router EFG",
                "description" => "Router EFG dengan jangkauan luas dan kecepatan tinggi.",
                "price" => 89.99,
                "category" => "Networking",
                "stock" => 150,
                "image_url" => "https://picsum.photos/200/300"
            ],
            [
                "id" => 13,
                "name" => "Smart TV HIJ",
                "description" => "Smart TV HIJ dengan resolusi 4K dan fitur streaming.",
                "price" => 999.99,
                "category" => "Televisions",
                "stock" => 40,
                "image_url" => "https://picsum.photos/200/300"
            ]
        ];
    }
}
