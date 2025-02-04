<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-6/12  h-80 shadow-md mx-auto">
        <h2 class="text-center text-2xl font-bold p-5 font-roboto">Add Product Category</h2>
        <form action="{{route('product-category.store')}}" method="post" enctype="multipart/form-data" class="px-10">
        @csrf
            <label for="" class="font-roboto">Image:</label><br>
            <input type="file" name="image" class="w-full"><br><br>
            <label for="" class="font-roboto">Category Title:</label><br>
            <input type="text" name="category_title" class="w-full"><br><br>
            <input type="submit" value="Save" class="bg-blue-800 text-white rounded px-5 py-2 w-full">
        </form>
    </div>
</body>
</html>