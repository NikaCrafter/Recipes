<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-[#F3E5D8] flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 flex flex-col justify-center items-center w-[30%] rounded my-8 ">
          <div>
            <img src="picture.jpg" alt="" class="w-full h-auto object-cover rounded">
            <div class="py-8">
            <h1 class="text-3xl pb-8 text-center">Simple Omlette Recipe</h1>
            <p class="text-[grey] text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam possimus ea, a dolore laudantium eum fuga iste est tempore quo unde vero quod, aliquam quas repellat doloribus incidunt repellendus mollitia?</p>
           </div>
         </div>
        <div> 
        <div class="bg-[#FFF7FC] rounded">
    <h2 class="p-4 text-[#b55ee3] font-bold text-lg">Preparation time</h2>
    <ul class=" px-8 pb-8">
        <li class="pb-2"><span class="font-bold custom-bullet">Prep</span>: Approximately 5 minutes</li>
        <li class="pb-2"><span class="font-bold custom-bullet">Cook</span>: Approximately 5 minutes</li>
        <li class="pb-2"><span class="font-bold custom-bullet ">Total</span>: Approximately 10 minutes</li>
    </ul>
</div>
<br>
<hr>
<div class="py-8">
    <h2 class="text-[#7B3F00] font-bold text-xl pb-4">Ingredients</h2>
    <ul class=" px-8 ">
        <li class="custom-bullet">2 tablespoons olive oil</li>
        <li class="custom-bullet">1 onion, chopped</li>
        <li class="custom-bullet">2 cloves garlic, minced</li>
        <li class="custom-bullet">1 cup water</li>
        <li class="custom-bullet">1 teaspoon salt</li>
    </ul>
</div>
<hr>
            <div class="py-8">
                <h2 class="text-[#7B3F00] font-bold text-xl pb-4">Directions</h2>
                <ul>
                    <li><span class="text-[#7B3F00] font-bold pr-2">1. <span class="text-[#36454F] ml-4">Heat up oil : </span></span>Heat oil in a large skillet over medium heat.</li>
                    <li><span class="text-[#7B3F00] font-bold pr-2">2. <span class="text-[#36454F] ml-4">Add onion and garlic : </span></span>Add onion and garlic to the oil.</li>
                    <li><span class="text-[#7B3F00] font-bold pr-2">3. <span class="text-[#36454F] ml-4">Add water and salt : </span></span>Add water and salt to the skillet.</li>
                    <li><span class="text-[#7B3F00] font-bold pr-2">4. <span class="text-[#36454F] ml-4">Cook : </span></span>Cook for 5 to 6 minutes until the onion becomes translucent.</li>
                    <li><span class="text-[#7B3F00] font-bold pr-2">5. <span class="text-[#36454F] ml-4">Serve : </span></span>Serve immediately with some green salad.</li>

                </ul>
            </div>
        </div>
    </div>
</body>
</html>
