<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="#" class="text-2xl font-bold text-blue-600">MDC</a>
            </div>

            <!-- Menu Items -->
            <div class="hidden md:flex md:items-center space-x-5">
                <div class="group relative">
                    <a href="#" class="px-1 py-2 text-gray-600 font-medium hover:text-gray-700">Home</a>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </div>
                <div class="w-1 h-1 bg-red-400 rounded-full"></div>
                <div class="group relative">
                    <a href="#" class="px-1 py-2 text-gray-700 font-medium hover:text-gray-700">Health Forum</a>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                    <!-- Dropdown -->
                    <div class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Forum Topic 1</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Forum Topic 2</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Forum Topic 3</a>
                    </div>
                </div>
                <div class="w-1 h-1 bg-red-400 rounded-full"></div>
                <div class="group relative">
                    <a href="#" class="px-1 py-2 text-gray-700 font-medium hover:text-gray-700">Pharmacy & Store</a>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </div>
                <div class="w-1 h-1 bg-red-400 rounded-full"></div>
                <div class="group relative">
                    <a href="#" class="px-1 py-2 text-gray-700 font-medium hover:text-gray-700">How It Works</a>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </div>
                <div class="w-1 h-1 bg-red-400 rounded-full"></div>
                <div class="group relative">
                    <a href="#" class="px-1 py-2 text-gray-700 font-medium hover:text-gray-700">Pages</a>
                    <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-600 transition-all group-hover:w-full"></span>
                </div>
            </div>

            <!-- User Actions -->
            <div class="flex items-center space-x-4">
                <!-- Profile Image Circle -->
                <div class="w-10 h-10 bg-gray-300 rounded-full">
                    <img src="{{asset('assets/images/user.png')}}" alt="Profile" class="w-full h-full object-cover rounded-full">
                </div>
                <a href="#" class="text-gray-700 font-poppins font-semibold hover:text-gray-700">Login</a>
                <a href="#" class="px-6 py-2 border border-[#3fabf3] text-blue-600 rounded hover:bg-[#3fabf3] hover:text-white duration-300 hover:shadow-[#b1dffd] hover:shadow-[0_4px_6px_rgba(0,0,0,0.10)] transition-shadow">Join Now</a>
            </div>
        </div>
    </div>
</nav>
