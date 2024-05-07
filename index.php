<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html, body {
            height: 100%;
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
        }
        .content {
            flex: 1; 
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="wrapper">

        <nav class="bg-gray-800 text-white p-4">
            <div class="flex items-center">
                <img src="dummy-photo.jpg" class="w-10 h-10 rounded-full" alt="Logo">
                <ul class="ml-4 flex space-x-4">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="add-recipe.php">Add Recipe</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>


        <header class="text-center my-8">
            <h1 class="text-4xl font-bold">Welcome to Our Recipe Website</h1>
            <p class="mt-4 text-lg">Find delicious recipes and share your own!</p>
        </header>

        <main class="container mx-auto px-4 content">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="recipe1.jpg" alt="Recipe 1" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Delicious Recipe 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="block mt-2 text-blue-500">Read More</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="recipe2.jpg" alt="Recipe 2" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Tasty Recipe 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="block mt-2 text-blue-500">Read More</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="recipe3.jpg" alt="Recipe 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">Yummy Recipe 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="block mt-2 text-blue-500">Read More</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-4 text-center">
        <p>&copy; 2024 Recipes. All rights reserved.</p>
    </footer>
</body>
</html>
