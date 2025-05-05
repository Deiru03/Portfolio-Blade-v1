<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Personal portfolio website showcasing my skills and projects">

        <title>Dale Decain - Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js', 
                                'resources/css/welcome.css', 'resources/js/welcome.js'
                                ])
        @else
            <style>
                /* Your existing CSS */
            </style>
        @endif
    </head>
    <style>

    </style>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen">
        <!-- Navigation -->
        <header class="w-full max-w-7xl mx-auto px-6 py-4">
            <nav class="flex items-center justify-between">
                <div class="font-medium text-xl">
                    <a href="#" class="dark:text-[#EDEDEC] text-[#1b1b18]">Portfolio</a>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#about" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">About</a>
                    <a href="#skills" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Skills</a>
                    <a href="#projects" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Projects</a>
                    <a href="#contact" class="dark:text-[#EDEDEC] text-[#1b1b18] hover:text-[#f53003] dark:hover:text-[#FF4433] transition-colors">Contact</a>
                </div>
            </nav>
        </header>
        
        <main>
            <!-- Hero Section -->
            <section class="w-full max-w-7xl mx-auto py-16 px-6 flex flex-col lg:flex-row items-center justify-between relative overflow-hidden">
                <!-- Animated background elements -->
                <div class="absolute inset-0 opacity-10 dark:opacity-20 overflow-hidden pointer-events-none">
                    <div class="absolute w-64 h-64 rounded-full bg-gradient-to-r from-[#ff6347] to-[#f53003] blur-3xl animate-pulse -top-20 -left-20"></div>
                    <div class="absolute w-80 h-80 rounded-full bg-gradient-to-r from-[#ff8066] to-[#ff4433] blur-3xl animate-pulse delay-700 bottom-0 right-0"></div>
                </div>
                
                <div class="lg:w-1/2 mb-8 lg:mb-0 z-10">
                    <p class="text-sm uppercase tracking-wider text-[#f53003] dark:text-[#FF4433] mb-2 animate-fadeIn">Welcome to my portfolio</p>
                    <h1 class="text-5xl font-medium mb-4 dark:text-[#EDEDEC] relative">
                        Hi, I'm <span class="relative">
                            <span class="text-[#f53003] dark:text-[#FF4433] inline-block animate-float">Dale C. Decain</span>
                            <span class="absolute -bottom-1 left-0 w-full h-1 bg-[#f53003] dark:bg-[#FF4433] transform scale-x-0 transition-transform duration-300 origin-left group-hover:scale-x-100 animate-pulse"></span>
                        </span>
                    </h1>
                    <p class="text-xl mb-6 dark:text-[#A1A09A] animate-fadeIn animation-delay-300 flex items-center">
                        <span class="relative overflow-hidden inline-block pr-3">Web Developer</span> 
                        <span class="inline-block w-2 h-2 rounded-full bg-[#f53003] dark:bg-[#FF4433] mx-2"></span> 
                        <span class="relative overflow-hidden inline-block pl-1">Designer</span>
                    </p>
                    <p class="mb-8 dark:text-[#EDEDEC] animate-fadeIn animation-delay-600 max-w-xl leading-relaxed">I create engaging web experiences with clean, efficient code. Passionate about building applications that make a difference.</p>
                    <div class="flex gap-4 animate-fadeIn animation-delay-900">
                        <a href="#contact" class="group px-8 py-3 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-md hover:bg-[#333] dark:hover:bg-white transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <span class="flex items-center">
                                Get in touch
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </a>
                        <a href="#projects" class="group px-8 py-3 border border-[#1b1b18] dark:border-[#EDEDEC] rounded-md dark:text-[#EDEDEC] hover:bg-[#f5f5f5] dark:hover:bg-[#222] transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            <span class="flex items-center">
                                View Projects
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="lg:w-1/2 flex justify-center z-10">
                    <div class="relative group">
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-[#ff6347] to-[#f53003] rounded-full opacity-75 blur-md animate-spin-slow group-hover:opacity-100 transition duration-1000"></div>
                        <div class="relative w-72 h-72 bg-[#fff2f2] dark:bg-[#1D0002] rounded-full overflow-hidden shadow-2xl animate-float">
                            <div class="absolute inset-1.5 bg-[#fff2f2] dark:bg-[#1D0002] rounded-full overflow-hidden">
                                <img src="{{ asset('images/Profile-Picture.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover scale-105 transition-transform duration-700 group-hover:scale-110">
                                
                                <!-- Decorative elements -->
                                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-[rgba(245,48,3,0.2)] dark:to-[rgba(255,68,51,0.3)] opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Decorative tech icons floating around -->
                    <div class="absolute top-1/4 right-1/4 animate-float animation-delay-1000 opacity-50 hidden lg:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#f53003] dark:text-[#FF4433]" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-24.4 5.2-35.6-.1-11.2-4.3-19.8-13.7-23.4-25.5-12.3-40.4-3.1-90.4 26.3-142.1 3.7-6.5 7.6-12.9 11.7-19.1 22.2 4.8 45.3 8.1 69.3 9.8 13.3 18.7 27.9 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"/>
                        </svg>
                    </div>
                    <div class="absolute bottom-1/3 left-1/3 animate-float animation-delay-700 opacity-50 hidden lg:block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f53003] dark:text-[#FF4433]" viewBox="0 0 384 512">
                            <path fill="currentColor" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/>
                        </svg>
                    </div>
                </div>
            </section>
            
            <!-- About Section -->
            <section id="about" class="w-full bg-white dark:bg-[#161615] py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <h2 class="text-3xl font-medium mb-8 dark:text-[#EDEDEC] relative overflow-hidden">
                        About Me
                        <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
                    </h2>
                    <div class="flex flex-col lg:flex-row gap-8">
                        <div class="lg:w-2/3 dark:text-[#A1A09A]">
                            <p class="mb-4 animate-fadeIn">
                                A dedicated BSIT student specializing in web development with expertise in the Laravel Framework. Seeking opportunities to apply technical skills and contribute to innovative projects while continuously enhancing my proficiency in modern web technologies.
                            </p>
                            <p class="mb-4 animate-fadeIn animation-delay-300">
                                Committed to delivering efficient, user-focused solutions in a collaborative environment.
                            </p>
                            <p class="animate-fadeIn animation-delay-600">
                                When I'm not coding, you'll find me hiking, reading, or exploring new coffee shops.
                            </p>
                            
                            <div class="mt-8 flex gap-4">
                                <div class="h-3 w-3 rounded-full bg-[#f53003] dark:bg-[#FF4433] animate-ping"></div>
                                <div class="h-3 w-3 rounded-full bg-[#f53003] dark:bg-[#FF4433] animate-ping animation-delay-150"></div>
                                <div class="h-3 w-3 rounded-full bg-[#f53003] dark:bg-[#FF4433] animate-ping animation-delay-300"></div>
                            </div>
                        </div>
                        <div class="lg:w-1/3 bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] animate-float">
                            <h3 class="text-xl font-medium mb-4 dark:text-[#EDEDEC]">Details</h3>
                            <ul class="space-y-2 dark:text-[#A1A09A]">
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 mr-2 text-[#f53003] dark:text-[#FF4433] animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </span>
                                    <strong class="font-medium dark:text-[#EDEDEC]">Name:</strong> Dale C. Decain
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 mr-2 text-[#f53003] dark:text-[#FF4433] animate-pulse animation-delay-150">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <strong class="font-medium dark:text-[#EDEDEC]">Experience:</strong> 5 years
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 mr-2 text-[#f53003] dark:text-[#FF4433] animate-pulse animation-delay-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </span>
                                    <strong class="font-medium dark:text-[#EDEDEC]">Location:</strong> San Jose Occidental Mindoro, Philippines
                                </li>
                                <li class="flex items-center">
                                    <span class="inline-block w-5 h-5 mr-2 text-[#f53003] dark:text-[#FF4433] animate-pulse animation-delay-450">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </span>
                                    <strong class="font-medium dark:text-[#EDEDEC]">Email:</strong> dale.decain0313@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Skills Section -->
            <section id="skills" class="w-full py-16 px-6 relative overflow-hidden">
                <!-- Animated background elements -->
                <div class="absolute inset-0 opacity-5 dark:opacity-10 overflow-hidden pointer-events-none">
                    <div class="absolute w-64 h-64 rounded-full bg-gradient-to-r from-[#ff6347] to-[#f53003] blur-3xl animate-pulse top-1/4 -right-20"></div>
                    <div class="absolute w-80 h-80 rounded-full bg-gradient-to-r from-[#ff8066] to-[#ff4433] blur-3xl animate-pulse delay-700 -bottom-40 -left-20"></div>
                </div>
                
                <div class="max-w-7xl mx-auto relative z-10">
                    <h2 class="text-3xl font-medium mb-8 dark:text-[#EDEDEC] relative overflow-hidden">
                        My Technical Skills
                        <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Laravel & PHP Card -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0px_8px_30px_rgba(245,48,3,0.12)]">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-medium dark:text-[#EDEDEC]">Laravel Framework</h3>
                                <span class="text-[#f53003] dark:text-[#FF4433] animate-pulse">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 512 512">
                                        <path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54,8.4,8.4,0,0,0,.94.31,9.91,9.91,0,0,0,1.93.31,10.44,10.44,0,0,0,1.94-.31,9.74,9.74,0,0,0,.94-.31,9,9,0,0,0,1.33-.54L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39Z"/>
                                    </svg>
                                </span>
                            </div>
                            <p class="mb-6 dark:text-[#A1A09A]">Specialized in building robust web applications with Laravel, focusing on MVC architecture, Eloquent ORM, and Blade templating.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Laravel 11+</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">PHP 8</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Blade</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Eloquent</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">MVC</span>
                            </div>
                            <!-- Skill level indicator -->
                            <div class="mt-6">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm dark:text-[#EDEDEC]">Proficiency</span>
                                    <span class="text-sm dark:text-[#EDEDEC]">95%</span>
                                </div>
                                <div class="w-full bg-[#f5f5f5] dark:bg-[#222] rounded-full h-2">
                                    <div class="bg-gradient-to-r from-[#ff6347] to-[#f53003] h-2 rounded-full animate-pulse" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Database & Backend Technologies -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0px_8px_30px_rgba(245,48,3,0.12)]">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-medium dark:text-[#EDEDEC]">Database & Backend</h3>
                                <span class="text-[#f53003] dark:text-[#FF4433] animate-pulse animation-delay-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M4.318 2.687C5.023 2.35 5.883 2.013 8 2.013s2.977.337 3.682.674c.706.338 1.247.809 1.247 1.313 0 .504-.54.975-1.247 1.312-.705.338-1.565.675-3.682.675s-2.977-.337-3.682-.675C3.541 4.978 3 4.507 3 4c0-.504.54-.975 1.318-1.313ZM16 6.5h-1.5c0 .203-.042.403-.119.59-.086.205-.214.4-.377.568-.463.476-1.199.865-2.162 1.104-.963.24-2.08.356-3.342.356s-2.379-.117-3.342-.356c-.963-.24-1.697-.628-2.162-1.104-.163-.168-.29-.362-.377-.568-.077-.187-.119-.388-.119-.59H1c0 .327.068.643.195.936.214.488.607.907 1.112 1.227.505.32 1.112.573 1.79.747C5.033 9.786 6.949 10 8 10s2.967-.214 4.902-.59c.678-.174 1.285-.426 1.79-.747.505-.32.898-.739 1.113-1.227.127-.293.194-.61.195-.936V6.5Zm-8.5 4v1h.501a7.03 7.03 0 0 0 2.306-.247c.343-.091.664-.217.926-.373.262-.156.464-.34.608-.542.146-.207.21-.421.211-.633V9.5h-1.5c0 .073-.008.146-.023.217-.023.097-.059.188-.107.26-.104.153-.328.32-.793.44-.465.121-1.103.199-1.873.199s-1.408-.078-1.873-.199c-.465-.121-.689-.287-.793-.44a1.99 1.99 0 0 1-.107-.26.733.733 0 0 1-.022-.217H3c0 .212.065.426.21.633.146.203.347.386.61.542.26.156.582.282.925.373.343.131.757.213 1.193.247a16.5 16.5 0 0 0 1.112.041v-1h-.501Zm0 1v1h.501c.964 0 1.88-.214 2.806-.59.463-.187.85-.426 1.124-.707.296-.302.466-.64.465-.936V10.5h-1.5c0 .112-.036.218-.098.312-.085.13-.217.236-.375.309-.266.123-.633.184-1.166.184s-.9-.06-1.166-.184a1.05 1.05 0 0 1-.375-.309.617.617 0 0 1-.098-.312H3c0 .296.17.634.465.936.275.28.661.52 1.125.707.925.375 1.842.59 2.805.59h.501v-1h-.501c-.395 0-.788-.04-1.162-.116a5.063 5.063 0 0 1-.163-.034 4.81 4.81 0 0 1-.175-.051 1.03 1.03 0 0 1-.225-.1h3.251a1.031 1.031 0 0 1-.225.1 4.829 4.829 0 0 1-.175.051 5.118 5.118 0 0 1-.162.034c-.376.077-.77.116-1.163.116h-.501Z"/>
                                    </svg>
                                </span>
                            </div>
                            <p class="mb-6 dark:text-[#A1A09A]">Experienced in database design, optimization, and backend server management for web applications.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">MySQL</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">PHP</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">APIs</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Authentication</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Google Authentication</span>
                            </div>
                            <!-- Skill level indicator -->
                            <div class="mt-6">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm dark:text-[#EDEDEC]">Proficiency</span>
                                    <span class="text-sm dark:text-[#EDEDEC]">90%</span>
                                </div>
                                <div class="w-full bg-[#f5f5f5] dark:bg-[#222] rounded-full h-2">
                                    <div class="bg-gradient-to-r from-[#ff6347] to-[#f53003] h-2 rounded-full animate-pulse" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Developer Tools & Platforms -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0px_8px_30px_rgba(245,48,3,0.12)]">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-medium dark:text-[#EDEDEC]">Tools & Platforms</h3>
                                <span class="text-[#f53003] dark:text-[#FF4433] animate-pulse animation-delay-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                    </svg>
                                </span>
                            </div>
                            <p class="mb-6 dark:text-[#A1A09A]">Proficient with version control, deployment platforms, and development tools for efficient workflows.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">GitHub</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Git</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Hostinger</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">VS Code</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Laravel Cloud</span>
                            </div>
                            <!-- Skill level indicator -->
                            <div class="mt-6">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm dark:text-[#EDEDEC]">Proficiency</span>
                                    <span class="text-sm dark:text-[#EDEDEC]">85%</span>
                                </div>
                                <div class="w-full bg-[#f5f5f5] dark:bg-[#222] rounded-full h-2">
                                    <div class="bg-gradient-to-r from-[#ff6347] to-[#f53003] h-2 rounded-full animate-pulse" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Additional Programming Languages -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_4px_20px_rgba(0,0,0,0.05)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transform transition-all duration-300 hover:-translate-y-2 hover:shadow-[0px_8px_30px_rgba(245,48,3,0.12)]">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-xl font-medium dark:text-[#EDEDEC]">Other Languages</h3>
                                <span class="text-[#f53003] dark:text-[#FF4433] animate-pulse animation-delay-450">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M2.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Zm7.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Zm1.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM9.5 1a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0ZM9 4H7.5a.5.5 0 0 0 0 1H9a.5.5 0 0 0 0-1Z"/>
                                        <path d="M9 5a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM6.5 5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM1.423 10.254a.75.75 0 0 1 .926-.527l6.511 1.83a.75.75 0 0 1 .527.926.75.75 0 0 1-.926.527l-6.511-1.83a.75.75 0 0 1-.527-.926Z"/>
                                        <path d="M1.5 7.5A2.5 2.5 0 0 1 4 5h3.5a.5.5 0 0 1 0 1H4a1.5 1.5 0 0 0 0 3h8a1.5 1.5 0 0 0 0-3H9.5a.5.5 0 0 1 0-1H12a2.5 2.5 0 0 1 0 5H4a2.5 2.5 0 0 1-2.5-2.5Z"/>
                                    </svg>
                                </span>
                            </div>
                            <p class="mb-6 dark:text-[#A1A09A]">Additional programming languages I'm familiar with for developing various applications.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Java</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">Visual Basic</span>
                                <span class="px-3 py-1 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] rounded-full text-sm font-medium transition-transform hover:scale-105">JavaScript</span>
                            </div>
                            <!-- Skill level indicator -->
                            <div class="mt-6">
                                <div class="flex justify-between mb-1">
                                    <span class="text-sm dark:text-[#EDEDEC]">Proficiency</span>
                                    <span class="text-sm dark:text-[#EDEDEC]">75%</span>
                                </div>
                                <div class="w-full bg-[#f5f5f5] dark:bg-[#222] rounded-full h-2">
                                    <div class="bg-gradient-to-r from-[#ff6347] to-[#f53003] h-2 rounded-full animate-pulse" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Skill level legend -->
                    <div class="mt-12 flex flex-wrap justify-center items-center gap-8">
                        <div class="flex flex-col items-center group">
                            <div class="flex items-center justify-center w-24 h-24 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] border-4 border-[#f53003] dark:border-[#FF4433] mb-3 relative overflow-hidden transition-all duration-500 hover:scale-110 hover:shadow-[0_0_20px_rgba(245,48,3,0.4)]">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[rgba(245,48,3,0.1)] to-transparent animate-shimmer"></div>
                                <span class="text-2xl font-bold text-[#f53003] dark:text-[#FF4433] counter-value" data-target="{{ date('Y') - 2022 }}" data-suffix="+">0+</span>
                                <span class="absolute -top-2 -right-2 flex h-6 w-6 items-center justify-center">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#f53003] dark:bg-[#FF4433] opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-4 w-4 bg-[#f53003] dark:bg-[#FF4433]"></span>
                                </span>
                                <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100">
                                    <circle class="text-[rgba(245,48,3,0.1)] dark:text-[rgba(255,68,51,0.1)]" stroke-width="4" stroke="currentColor" fill="none" r="45" cx="50" cy="50" />
                                    <circle class="text-[#f53003] dark:text-[#FF4433] transform origin-center rotate-90" stroke-width="4" stroke="currentColor" fill="none" r="45" cx="50" cy="50" stroke-dasharray="282.7" stroke-dashoffset="282.7" pathLength="282.7">
                                        <animate attributeName="stroke-dashoffset" from="282.7" to="0" dur="2s" fill="freeze" />
                                    </circle>
                                </svg>
                            </div>
                            <span class="text-center dark:text-[#EDEDEC] font-medium">Years<br>Experience</span>
                        </div>
                        
                        <div class="flex flex-col items-center group">
                            <div class="flex items-center justify-center w-24 h-24 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] border-4 border-[#f53003] dark:border-[#FF4433] mb-3 relative overflow-hidden transition-all duration-500 hover:scale-110 hover:shadow-[0_0_20px_rgba(245,48,3,0.4)]">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[rgba(245,48,3,0.1)] to-transparent animate-shimmer"></div>
                                <span class="text-2xl font-bold text-[#f53003] dark:text-[#FF4433] counter-value" data-target="4" data-suffix="+">0+</span>
                                <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100">
                                    <circle class="text-[rgba(245,48,3,0.1)] dark:text-[rgba(255,68,51,0.1)]" stroke-width="4" stroke="currentColor" fill="none" r="45" cx="50" cy="50" />
                                    <circle class="text-[#f53003] dark:text-[#FF4433] transform origin-center rotate-90" stroke-width="4" stroke="currentColor" fill="none" r="45" cx="50" cy="50" stroke-dasharray="282.7" stroke-dashoffset="70.7" pathLength="282.7">
                                        <animate attributeName="stroke-dashoffset" from="282.7" to="70.7" dur="2s" fill="freeze" />
                                    </circle>
                                </svg>
                            </div>
                            <span class="text-center dark:text-[#EDEDEC] font-medium">Projects<br>Completed</span>
                        </div>
                        
                        <div class="flex flex-col items-center group">
                            <div class="flex items-center justify-center w-24 h-24 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] border-4 border-[#f53003] dark:border-[#FF4433] mb-3 relative overflow-hidden transition-all duration-500 hover:scale-110 hover:shadow-[0_0_20px_rgba(245,48,3,0.4)]">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-[rgba(245,48,3,0.1)] to-transparent animate-shimmer"></div>
                                <span class="text-2xl font-bold text-[#f53003] dark:text-[#FF4433] counter-value" data-target="99.9" data-suffix="%">0%</span>
                                <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100">
                                    <circle class="text-[rgba(245,48,3,0.1)] dark:text-[rgba(255,68,51,0.1)]" stroke-width="4" stroke="currentColor" fill="none" r="45" cx="50" cy="50" />
                                    <circle class="text-[#f53003] dark:text-[#FF4433] transform origin-center rotate-90" stroke-width="4" stroke="currentColor" fill="none" r="45" cx="50" cy="50" stroke-dasharray="282.7" stroke-dashoffset="2.8" pathLength="282.7">
                                        <animate attributeName="stroke-dashoffset" from="282.7" to="2.8" dur="2s" fill="freeze" />
                                    </circle>
                                </svg>
                            </div>
                            <span class="text-center dark:text-[#EDEDEC] font-medium">Client<br>Satisfaction</span>
                        </div>
                    </div>

                </div>
            </section>
            
            <!-- Projects Section -->
            <section id="projects" class="w-full bg-white dark:bg-[#161615] py-16 px-6">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-3xl font-medium mb-8 dark:text-[#EDEDEC]">My Projects</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Project Card 1 -->
                        <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg overflow-hidden shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transition-transform hover:-translate-y-1">
                            <div class="h-48 bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center">
                                <!-- Replace with project image -->
                                <span class="text-[#f53003] dark:text-[#FF4433] text-xl">Project Image</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-medium mb-2 dark:text-[#EDEDEC]">Project One</h3>
                                <p class="mb-4 dark:text-[#A1A09A]">A brief description of the project, its features, and technologies used.</p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-[#f53003] dark:text-[#FF4433] hover:underline">View Demo</a>
                                    <a href="#" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Source Code</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Card 2 -->
                        <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg overflow-hidden shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transition-transform hover:-translate-y-1">
                            <div class="h-48 bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center">
                                <!-- Replace with project image -->
                                <span class="text-[#f53003] dark:text-[#FF4433] text-xl">Project Image</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-medium mb-2 dark:text-[#EDEDEC]">Project Two</h3>
                                <p class="mb-4 dark:text-[#A1A09A]">A brief description of the project, its features, and technologies used.</p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-[#f53003] dark:text-[#FF4433] hover:underline">View Demo</a>
                                    <a href="#" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Source Code</a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Project Card 3 -->
                        <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg overflow-hidden shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] transition-transform hover:-translate-y-1">
                            <div class="h-48 bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center">
                                <!-- Replace with project image -->
                                <span class="text-[#f53003] dark:text-[#FF4433] text-xl">Project Image</span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-medium mb-2 dark:text-[#EDEDEC]">Project Three</h3>
                                <p class="mb-4 dark:text-[#A1A09A]">A brief description of the project, its features, and technologies used.</p>
                                <div class="flex gap-4">
                                    <a href="#" class="text-[#f53003] dark:text-[#FF4433] hover:underline">View Demo</a>
                                    <a href="#" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Source Code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Contact Section -->
            <section id="contact" class="w-full py-16 px-6">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-3xl font-medium mb-8 text-center dark:text-[#EDEDEC]">Get In Touch</h2>
                    <div class="bg-white dark:bg-[#161615] p-8 rounded-lg shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                        <form>
                            <div class="mb-6">
                                <label for="name" class="block mb-2 font-medium dark:text-[#EDEDEC]">Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md bg-[#FDFDFC] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block mb-2 font-medium dark:text-[#EDEDEC]">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md bg-[#FDFDFC] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block mb-2 font-medium dark:text-[#EDEDEC]">Message</label>
                                <textarea id="message" rows="5" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-md bg-[#FDFDFC] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]"></textarea>
                            </div>
                            <button type="submit" class="w-full px-6 py-3 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-md hover:bg-[#333] dark:hover:bg-white transition-colors">Send Message</button>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- Footer -->
        <footer class="w-full bg-white dark:bg-[#161615] py-8 px-6">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="dark:text-[#EDEDEC]">&copy; 2023 Your Name. All rights reserved.</p>
                </div>
                <div class="flex gap-6">
                    <!-- Social Media Icons -->
                    <a href="#" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#f53003] dark:hover:text-[#FF4433]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#f53003] dark:hover:text-[#FF4433]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#f53003] dark:hover:text-[#FF4433]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-[#706f6c] dark:text-[#A1A09A] hover:text-[#f53003] dark:hover:text-[#FF4433]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Counter animation
                const counters = document.querySelectorAll('.counter-value');
                const animationDuration = 2000; // 2 seconds
                const frameDuration = 1000/60; // 60fps
                
                counters.forEach(counter => {
                    const target = parseFloat(counter.getAttribute('data-target'));
                    const suffix = counter.getAttribute('data-suffix');
                    const frames = Math.round(animationDuration / frameDuration);
                    const increment = target / frames;
                    
                    let current = 0;
                    const counterAnimation = setInterval(() => {
                        current += increment;
                        if (current >= target) {
                            counter.textContent = target.toString() + suffix;
                            clearInterval(counterAnimation);
                        } else {
                            // For percentages, show one decimal place
                            if (suffix === '%') {
                                counter.textContent = current.toFixed(1) + suffix;
                            } else {
                                counter.textContent = Math.floor(current) + suffix;
                            }
                        }
                    }, frameDuration);
                });
                
                // Add parallax effect on mouse move
                const stats = document.querySelectorAll('.group');
                document.addEventListener('mousemove', function(e) {
                    stats.forEach(stat => {
                        const speed = 0.04;
                        const x = (window.innerWidth / 2 - e.pageX) * speed;
                        const y = (window.innerHeight / 2 - e.pageY) * speed;
                        stat.style.transform = `translateX(${x}px) translateY(${y}px)`;
                    });
                });
                
                // Add on-scroll reveal animation
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };
                
                const observer = new IntersectionObserver(function(entries) {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-fadeIn');
                            observer.unobserve(entry.target);
                        }
                    });
                }, observerOptions);
                
                stats.forEach(stat => {
                    observer.observe(stat);
                });
            });
        </script>
    </body>
</html>
