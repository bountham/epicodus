<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Car Search Form!</title>
        <link rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Car Search</h1>
            <p>Enter search parameters</p>

            <div>
                <form action="car_index.php">
                    <div class="form-group">
                        <label for="price">Maximum price:</label>
                        <input id="price" name="price" class="form-control"
                        type="number">
                    </div>
                    <div class="form-group">
                        <label for="mileage">Maximum mileage:</label>
                        <input id="mileage" name="mileage" class="form-control"
                        type="number">
                    </div>
                    <button type="submit" class="btn-success">Let's rock</button>
                </form>
            </div>
        </div>


    </body>
</html>
