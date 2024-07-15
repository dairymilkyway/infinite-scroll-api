<!-- resources/views/products.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Scroll</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mx-auto mt-8">
        <div id="product-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"></div>
        <div id="loading" class="text-center my-4 hidden">
            <span>Loading...</span>
        </div>
    </div>

    <script src="{{ asset('js/infinite-scroll.js') }}"></script>
</body>
</html>
