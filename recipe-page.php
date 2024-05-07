<?php 
include "conn.php";

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $recipe_id = $_GET['id'];

    $sql = "SELECT * FROM recipes WHERE id = $recipe_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $recipe = $result->fetch_assoc();
        $recipeTitle = $recipe["title"];
        $recipeDescription = $recipe["description"];
        $preparationTime = $recipe["preparation_time"];
        $cookTime = $recipe["cook_time"];
        $totalTime = $recipe["preparation_time"] + $recipe["cook_time"];
        $imgUrl = $recipe["image_url"];
    } else {
        echo "Recipe not found";
    }

    // Fetch ingredients
    $ingredients = [];
    $sql = "SELECT * FROM ingredients WHERE recipe_id = $recipe_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ingredients[] = $row["ingredient_name"];
        }
    } else {
        echo "Ingredients not found";
    }

    // Fetch directions
    $directions = [];
    $sql = "SELECT * FROM directions WHERE recipe_id = $recipe_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $directions[] = $row["instruction"];
        }
    } else {
        echo "Directions not found";
    }
} else {
    echo "Recipe ID not provided";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
    <style>
    .custom-bullet::before {
        content: "\2022"; 
        color: #7B3F00;
        margin-right: 1rem; 
        font-size: 1rem; 
    }
    html,
    body{
        font-family: "Young Serif", sans-serif;
    }
</style>
</head>
<body>
    <div class="bg-white p-6 flex flex-col justify-center items-center w-[30%] rounded my-8">
        <div>
            <img src="<?php echo $imgUrl; ?>" alt="" class="w-full h-auto object-cover rounded">
            <div class="py-8">
                <h1 class="text-3xl pb-8 text-center"><?php echo $recipeTitle; ?></h1>
                <p class="text-[grey] text-center"><?php echo $recipeDescription; ?></p>
            </div>
        </div>
        <div>
            <div class="bg-[#FFF7FC] rounded">
                <h2 class="p-4 text-[#b55ee3] font-bold text-lg">Preparation time</h2>
                <ul class="px-8 pb-8">
                    <li class="pb-2"><span class="font-bold custom-bullet">Prep</span>: Approximately <?php echo $preparationTime; ?> minutes</li>
                    <li class="pb-2"><span class="font-bold custom-bullet">Cook</span>: Approximately <?php echo $cookTime; ?> minutes</li>
                    <li class="pb-2"><span class="font-bold custom-bullet">Total</span>: Approximately <?php echo $totalTime; ?> minutes</li>
                </ul>
            </div>
            <br>
            <hr>
            <div class="py-8">
                <h2 class="text-[#7B3F00] font-bold text-xl pb-4">Ingredients</h2>
                <ul class="px-8">
                    <?php foreach ($ingredients as $ingredient): ?>
                        <li class="custom-bullet"><?php echo $ingredient; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <hr>
            <div class="py-8">
                <h2 class="text-[#7B3F00] font-bold text-xl pb-4">Directions</h2>
                <ul>
                    <?php foreach ($directions as $key => $direction): ?>
                        <li><span class="text-[#7B3F00] font-bold pr-2"><?php echo ($key + 1); ?>. <span class="text-[#36454F] ml-4"> <?php echo $direction; ?> </span></span></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>