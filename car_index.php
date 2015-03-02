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

    $porsche = new Car("2014 Porsche 911", 114991, 7864, "img/porsche_911.jpg");
    $ford = new Car("2011 Ford F450", 55995, 14241, "img/ford_truck.jpg");
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "img/lexus_2013.jpg");
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "img/mercedes_cls550.jpg");

    $cars = array($porsche, $ford, $lexus, $mercedes);

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Car Dealership</title>
        <link rel="stylesheet"
            href="https://maxcdn.bootstrap.cdn/bootstrap/3.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/car_style.css">
    </head>
    <body>

    </body>
</html>
