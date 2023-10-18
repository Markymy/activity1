<?php

include 'db.php';

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuName = $_POST['menu_name'];
    $menuDescription = $_POST['menu_description'];

    if (insertMenu($menuName, $menuDescription)) {
        echo "Menu Created Successfully!<br>";
        echo "Name: " . $menuName . "<br>";
        echo "Description: " . $menuDescription;
    } else {
        echo "There was an error inserting the menu!";
    }
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Menu</title>
</head>
<body>

<div style="max-width: 500px; margin: 50px auto;">
    <h2>Rocaberte</h2>
    <div style="border: 1px solid #e0e0e0; padding: 20px; box-shadow: 2px 2px 12px #aaa;">
        <h3>Create Menu</h3>

        <form action="" method="post">
            <div style="margin-bottom: 20px;">
                <label for="menu_name">Menu Name:</label><br>
                <input type="text" id="menu_name" name="menu_name" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="menu_description">Menu Description:</label><br>
                <textarea id="menu_description" name="menu_description" rows="4" style="width: 100%; padding: 8px;"></textarea>
            </div>

            <div>
                <input type="submit" value="Submit" style="padding: 10px 20px; cursor: pointer;">
            </div>
        </form>
    </div>
</div>

</body>
</html>
