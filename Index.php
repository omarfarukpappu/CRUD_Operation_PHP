<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Animal Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="" method="post">
        
<?php
require_once 'Dog.php';
require_once 'Cat.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $animalType = $_POST['animal_type'];
    $animalName = $_POST['animal_name'];

    switch ($animalType) {
        case 'dog':
            $animal = new Dog($animalName, $animalType);
            break;
        case 'cat':
            $animal = new Cat($animalName, $animalType);
            break;
        default:
            echo "Invalid animal type.";
            exit;
    }
    $animal->insertDatabase();
    echo "Animal inserted successfully!";
    echo '<br>';
}
$dog = new Dog('Buddy', 'dog');
$cat = new Cat('Whiskers', 'cat');
echo  $dog->makeSound($type='cat','dog') . '<br>';

?>

        <h2>Insert Animal</h2>

        <label for="animal_type">Animal Type:</label>
        <select name="animal_type" required>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
        </select>

        <label for="animal_name">Animal Name:</label>
        <input type="text" name="animal_name" required>

        <button type="submit">Insert Animal</button>
    </form>

</body>
</html>
