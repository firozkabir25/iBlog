<header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="{{route('home')}}" class="flex items-center space-x-2">
                    <i class="fas fa-blog text-2xl text-blue-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
                </a>
            </div>
            
            @include('layout.partials.navbar')
            
            <div class="flex items-center space-x-4">
                <button class="md:hidden text-gray-600" id="mobile-menu-button">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <a href="{{route('login')}}" class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                    Login
                </a>
            </div>
        </div>
        
        @include('layout.partials.mobile_nav')
    </header>