<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($length, $width) {
        return $length * $width;
    }

    // Call the function with specified values
    $length = 4;
    $width = 2;
    $area = calculateArea($length, $width);

    // Display the result
    echo "<b>The area of the rectangle with a width of $width and $length is $area.<b>";
    ?>
</body>
</html>
