<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

</head>

<body>
    <header class="sticky top-0 z-10">
        @include('inc.navbar')
    </header>
    <!-- Banner Section -->
    @include('inc.banner')
    <!-- End Banner Section -->
    <!-- Category section -->
    @include('inc.category')
    <!-- End Category -->

    <section>
        <h2 class="text-blue-800 text-2xl text-center p-10 font-semibold">Featured Products
        <i class="fas fa-arrow-right circle-icon px-2"></i>
        </h2>
        <div class="bg-white drop-shadow-lg w-full gap-1 z-0 py-3">
            <div class="product-slider flex overflow-x-auto gap-4 px-2 py-3">
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
                <div class="card border border-slate-200 w-56 h-72 mt-2 flex-shrink-0"></div>
            </div>
        </div>
    </section>


    <section>
        <h2 class="text-blue-800 text-2xl text-center p-10 font-semibold">Products For You</h2>
        <div class="bg-white drop-shadow-lg w-full grid grid-cols-2 md:grid-cols-6 gap-1 z-0 pb-16">
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>
            <div class="card  border border-slate-200 mx-1 h-72 mt-2 "></div>

        </div>
    </section>

    <footer class="mt-16">
        @include('inc.footer')
    </footer>
</body>

</html>