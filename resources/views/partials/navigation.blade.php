<!-- filepath: c:\xampp\htdocs\Portfolio\portfolio-blade-v1\resources\views\partials\navigation.blade.php -->
<header class="w-full fixed top-0 bg-[#FDFDFC] dark:bg-[#0a0a0a] z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4">
        <nav class="flex items-center justify-between">
            <!-- Logo -->
            <div class="font-medium text-xl">
                <a href="{{ url('/') }}" class="dark:text-[#EDEDEC] text-[#1b1b18]">Portfolio</a>
            </div>
            
            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden flex items-center text-[#1b1b18] dark:text-[#EDEDEC] hover:text-[#f53003] dark:hover:text-[#FF4433]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Desktop navigation -->
            <div class="hidden md:flex items-center gap-6">
                <a href="{{ url('/') }}#about" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">About</a>
                <a href="{{ url('/') }}#skills" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Skills</a>
                <a href="{{ url('/') }}#projects" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Projects</a>
                <a href="{{ url('/') }}#contact" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
                
                <!-- E-Portfolio Dropdown (Desktop) -->
                <div class="relative group" style="z-index: 100;">
                    <button class="flex items-center dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">
                        E-Portfolio
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transform group-hover:rotate-180 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="absolute right-0 mt-2 w-48 bg-white dark:bg-[#161615] rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 transform origin-top scale-95 group-hover:scale-100">
                        <a href="#table-of-contents" class="block px-4 py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] hover:text-[#f53003] dark:hover:text-[#FF4433]">Table of Contents</a>
                        <a href="#chapter-1" class="block px-4 py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 1</a>
                        <a href="#chapter-2" class="block px-4 py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 2</a>
                        <a href="#chapter-3" class="block px-4 py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 3</a>
                        <a href="#chapter-4" class="block px-4 py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 4</a>
                        <a href="#appendices" class="block px-4 py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] hover:text-[#f53003] dark:hover:text-[#FF4433]">Appendices</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="md:hidden hidden bg-white dark:bg-[#161615] border-t border-[#e3e3e0] dark:border-[#3E3E3A]">
        <div class="px-4 py-2">
            <a href="{{ url('/') }}#about" class="block py-3 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">About</a>
            <a href="{{ url('/') }}#skills" class="block py-3 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Skills</a>
            <a href="{{ url('/') }}#projects" class="block py-3 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Projects</a>
            <a href="{{ url('/') }}#contact" class="block py-3 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
            
            <!-- E-Portfolio Dropdown (Mobile) -->
            <div class="py-3">
                <button id="mobile-dropdown-button" class="flex items-center justify-between w-full dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">
                    E-Portfolio
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 transition-transform duration-200" id="mobile-dropdown-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div id="mobile-dropdown-menu" class="hidden pl-4 mt-2 border-l-2 border-[#f5f5f5] dark:border-[#222]">
                    <a href="#table-of-contents" class="block py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433]">Table of Contents</a>
                    <a href="#chapter-1" class="block py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 1</a>
                    <a href="#chapter-2" class="block py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 2</a>
                    <a href="#chapter-3" class="block py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 3</a>
                    <a href="#chapter-4" class="block py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433]">Chapter 4</a>
                    <a href="#appendices" class="block py-2 dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433]">Appendices</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    // Mobile Menu Toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        
        // Mobile dropdown
        const mobileDropdownButton = document.getElementById('mobile-dropdown-button');
        const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
        const mobileDropdownIcon = document.getElementById('mobile-dropdown-icon');
        
        // Toggle main mobile menu
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
        
        // Toggle E-Portfolio dropdown on mobile
        mobileDropdownButton.addEventListener('click', function() {
            mobileDropdownMenu.classList.toggle('hidden');
            mobileDropdownIcon.classList.toggle('rotate-180');
        });
        
        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });
    });
</script>