<?php
class Car {
    private $make_model;
    private $price;
    private $mileage;
    private $image_path;

    function __construct($make_model, $price, $mileage, $image_path) {
        $this->make_model = $make_model;
        $this->price = $price;
        $this->mileage = $mileage;
        $this->image_path = $image_path;
    }

    $porsche = new Car("2014 Porsche 911", 114991, 7864, "image");
    $ford = new Car("2011 Ford F450", 55995, 14241, "image");
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "image");
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "image");

    $cars = array($porsche, $ford, $lexus, $mercedes);

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Car Dealership</title>
        <link rel="stylesheet"
            href="https://maxcdn.bootstrap.cdn/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>

    </body>
</html>
