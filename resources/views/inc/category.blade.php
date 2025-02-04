<section class="mx-10 mt-8">
    <div class="grid grid-cols-4 md:grid-cols-8 gap-2 justify-center">
        @foreach($product_categories as $categories)
        <div class="bg-white md:w-32 md:h-32 w-20 h-20 my-3 cursor-pointer rounded shadow-md p-2">
            <img src="{{asset('/' . $categories->image)}}" class="m-2 w-24 h-24" alt="">
            <p class="text-center pt-6 text-sm text-slate-400">{{$categories->category_title}}</p>
        </div>
        @endforeach
    </div>
</section>