<nav>
    <div class="bg-gray-100 text-black text-sm w-full items-center h-8 hidden md:flex justify-between ">
        <div class="flex gap-5 mx-4">
            <p>+977 9840151590</p>
            <p>Natole, Lalitpur</p>
        </div>
        <div>
            <ul class="flex gap-2 mx-4">
                <li><a href="">facebook</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">twiiter</a></li>
            </ul>
        </div>
    </div>
    <div class="border border-slate-200 bg-white w-full h-16 transition-all text-slate-600" id="navbar">
        <div class="flex justify-around">
            <div>
                <h2 class="text-3xl p-2 font-bold text-blue-800">Wings Tech</h2>
            </div>
            <div class="p-2 hidden md:block">
                <form action="">
                    <input type="text" placeholder="Search" class="w-72 rounded">
                    <input type="submit" class="bg-blue-800 p-2 text-white rounded cursor-pointer" value="Search">
                </form>
            </div>
            <div class="p-4 px-2 hidden md:block">
                <ul class="flex gap-5">
                    @auth
                    <li><a href="">
                            <i class="fas fa-shopping-cart text-blue-800 px-2"></i>
                            Cart
                        </a></li>
                    <li><a href="">
                    <i class="fas fa-heart text-blue-800 px-2"></i>Wishlist</a></li>
                    <li><a href="">Welcome! {{Auth::user()->name}}</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"><i class="fas fa-sign-out-alt text-blue-800"></i></button>
                        </form>
                    </li>
                    @else
                    <li><a href="{{route('login')}}"><i class="fas fa-shopping-cart text-blue-800 px-2"></i>Cart</a></li>
                    <li><a href="{{route('login')}}"><i class="fas fa-heart text-blue-800 px-2"></i>Wishlist</a></li>
                    <li><a href="{{route('login')}}">Login</a></li>
                    @endauth

                </ul>
            </div>
            <div class="md:hidden">
                <i class="fas fa-bars text-2xl pt-3" onclick="toggle()" id="bars"></i>
            </div>
        </div>
        <div class="p-4 px-2 md:hidden">
            <ul class="hidden transition-all mx-8" id="nav-items">
                @auth
                <li class="my-2"><a href="">Cart</a></li>
                <li class="my-2"><a href="">Wishlist</a></li>
                <li class="my-2"><a href="">Welcome! {{Auth::user()->name}}</a></li>
                @else
                <li class="my-2"><a href="{{route('login')}}">Cart</a></li>
                <li class="my-2"><a href="{{route('login')}}">Wishlist</a></li>
                <li class="my-2"><a href="{{route('login')}}">Login</a></li>
                @endauth
                <li class="my-4">
                    <form action="">
                        <input type="text" placeholder="Search" class="w-3/4 rounded">
                        <input type="submit" class="bg-blue-800 p-2 text-white rounded" value="Search">
                    </form>
                </li>

            </ul>
        </div>
    </div>
</nav>

<script>
    let active_nav = false;

    function toggle() {
        let navbar = document.getElementById('navbar');
        let nav_items = document.getElementById('nav-items')
        if (active_nav) {
            navbar.classList.remove('h-16');
            navbar.classList.add('h-72');
            nav_items.classList.remove('hidden')
        } else {
            navbar.classList.remove('h-72');
            navbar.classList.add('h-16');
            nav_items.classList.add('hidden')
        }
        active_nav = !active_nav;
    }
</script>