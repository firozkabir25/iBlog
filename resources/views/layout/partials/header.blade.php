<header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <a href="{{route('home')}}" class="flex items-center space-x-2">
                    <i class="fas fa-blog text-2xl text-blue-600"></i>
                    <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
                </a>
            </div>
            
            @include('layout.partials.navbar')
            @if(url()->current() == url('profile/1'))
                <div class="flex items-center space-x-4">
                    <button class="md:hidden text-gray-600" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <div class="relative">
                        <button id="userMenuButton" class="flex items-center space-x-2 focus:outline-none">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
                            <span class="hidden md:inline text-gray-700">John Doe</span>
                            <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
                        </button>
                        <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Saved Articles</a>
                            <div class="border-t border-gray-200"></div>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex items-center space-x-4">
                    <button class="md:hidden text-gray-600" id="mobile-menu-button">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <a href="{{route('login')}}" class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">
                        Login
                    </a>
                </div>
            @endif
        </div>
        
        @include('layout.partials.mobile_nav')
    </header>