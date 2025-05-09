<!-- filepath: c:\xampp\htdocs\Portfolio\portfolio-blade-v1\resources\views\e-portfolio\main.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dale Decain's E-Portfolio - Professional Development and Projects">

        <title>Dale Decain - E-Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/welcome.css'])
        @else
            <style>
                html {
                    scroll-behavior: smooth;
                    scroll-padding-top: 80px; /* Adjust based on your header height */
                }
                .modal-top {
                    z-index: 999;
                }
                
                .hero-gradient {
                    background: linear-gradient(135deg, rgba(255, 99, 71, 0.1), rgba(245, 48, 3, 0.1));
                }
                
                .animate-float {
                    animation: float 6s ease-in-out infinite;
                }
                
                @keyframes float {
                    0% { transform: translateY(0px); }
                    50% { transform: translateY(-20px); }
                    100% { transform: translateY(0px); }
                }
                
                .animate-shimmer {
                    animation: shimmer 2s infinite linear;
                    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.2) 50%, rgba(255,255,255,0) 100%);
                    background-size: 200% 100%;
                }
                
                @keyframes shimmer {
                    0% { background-position: -200% 0; }
                    100% { background-position: 200% 0; }
                }
                
                /* Smooth transitions between sections */
                section {
                    transition: opacity 0.4s ease-in-out;
                }
                
                /* Progress indicator styles */
                .progress-nav {
                    position: fixed;
                    top: 50%;
                    right: 1rem;
                    transform: translateY(-50%);
                    z-index: 50;
                }
                
                .progress-dot {
                    width: 10px;
                    height: 10px;
                    border-radius: 50%;
                    margin: 12px 0;
                    background-color: #A1A09A;
                    transition: all 0.3s ease;
                }
                
                .progress-dot.active {
                    background-color: #FF4433;
                    transform: scale(1.4);
                }
                
                .progress-label {
                    position: absolute;
                    right: 20px;
                    top: 50%;
                    transform: translateY(-50%);
                    background-color: #0a0a0a;
                    color: #EDEDEC;
                    padding: 3px 8px;
                    border-radius: 4px;
                    font-size: 12px;
                    opacity: 0;
                    transition: opacity 0.3s ease, transform 0.3s ease;
                    pointer-events: none;
                    white-space: nowrap;
                }
                
                .progress-item:hover .progress-label {
                    opacity: 1;
                    transform: translateY(-50%) translateX(-10px);
                }
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen">
        <!-- Navigation -->
        @include('partials.navigation')
        
        <!-- Add padding to the body to account for fixed header -->
        <div class="pt-20"></div>
        
        <main>
            <!-- Progress Navigation for desktop -->
            <div class="fixed bottom-8 left-1/2 transform -translate-x-1/2 z-50 hidden lg:block">
                <div class="bg-white/90 dark:bg-gray-900/90 rounded-full shadow-lg px-6 py-3 backdrop-blur-sm">
                    <div class="relative flex items-center">
                        <!-- Horizontal line connecting all dots -->
                        <div class="absolute h-0.5 bg-gray-200 dark:bg-gray-700 w-full top-1/2 -translate-y-1/2"></div>
                        
                        <!-- Introduction -->
                        <div class="relative px-4 group">
                            <a href="#intro" class="flex flex-col items-center">
                                <div id="dot-intro" class="progress-dot active w-4 h-4 rounded-full bg-[#FF4433] group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Introduction
                                </span>
                            </a>
                        </div>

                        <!-- Table of Contents -->
                        <div class="relative px-4 group">
                            <a href="#table-of-contents" class="flex flex-col items-center">
                                <div id="dot-table-of-contents" class="progress-dot active w-4 h-4 rounded-full bg-[#FF4433] group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Table of Contents
                                </span>
                            </a>
                        </div>
                        
                        <!-- Chapter 1 -->
                        <div class="relative px-4 group">
                            <a href="#chapter-1" class="flex flex-col items-center">
                                <div id="dot-chapter-1" class="progress-dot w-4 h-4 rounded-full bg-gray-400 dark:bg-gray-500 group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Chapter 1
                                </span>
                            </a>
                        </div>
                        
                        <!-- Chapter 2 -->
                        <div class="relative px-4 group">
                            <a href="#chapter-2" class="flex flex-col items-center">
                                <div id="dot-chapter-2" class="progress-dot w-4 h-4 rounded-full bg-gray-400 dark:bg-gray-500 group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Chapter 2
                                </span>
                            </a>
                        </div>
                        
                        <!-- Chapter 3 -->
                        <div class="relative px-4 group">
                            <a href="#chapter-3" class="flex flex-col items-center">
                                <div id="dot-chapter-3" class="progress-dot w-4 h-4 rounded-full bg-gray-400 dark:bg-gray-500 group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Chapter 3
                                </span>
                            </a>
                        </div>
                        
                        <!-- Chapter 4 -->
                        <div class="relative px-4 group">
                            <a href="#chapter-4" class="flex flex-col items-center">
                                <div id="dot-chapter-4" class="progress-dot w-4 h-4 rounded-full bg-gray-400 dark:bg-gray-500 group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Chapter 4
                                </span>
                            </a>
                        </div>
                        
                        <!-- Appendices -->
                        <div class="relative px-4 group">
                            <a href="#appendices" class="flex flex-col items-center">
                                <div id="dot-appendices" class="progress-dot w-4 h-4 rounded-full bg-gray-400 dark:bg-gray-500 group-hover:scale-125 transition-all duration-300 relative z-10 mb-2 shadow-md"></div>
                                <span class="opacity-0 group-hover:opacity-100 absolute -bottom-8 left-1/2 -translate-x-1/2 whitespace-nowrap bg-white dark:bg-[#2D2D2D] text-gray-800 dark:text-gray-100 text-xs font-medium px-2 py-1 rounded shadow-md transition-all duration-300">
                                    Appendices
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile swipeable chapter selector (fixed bottom) -->
            <div class="fixed bottom-0 left-0 right-0 bg-white/95 dark:bg-gray-900/95 shadow-lg py-2 px-4 lg:hidden z-50 backdrop-blur-sm border-t border-gray-200 dark:border-gray-800">
                <div class="overflow-x-auto flex items-center justify-between space-x-6 no-scrollbar pb-1">
                    <a href="#intro" class="flex flex-col items-center min-w-[60px] active-section" id="mobile-intro">
                        <div class="w-2 h-2 rounded-full bg-[#FF4433] mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Intro</span>
                    </a>
                    <a href="#table-of-contents" class="flex flex-col items-center min-w-[60px] active-section" id="mobile-table-of-contents">
                        <div class="w-2 h-2 rounded-full bg-[#FF4433] mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Table of Contents</span>
                    </a>
                    <a href="#chapter-1" class="flex flex-col items-center min-w-[60px]" id="mobile-chapter-1">
                        <div class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600 mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Chapter 1</span>
                    </a>
                    <a href="#chapter-2" class="flex flex-col items-center min-w-[60px]" id="mobile-chapter-2">
                        <div class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600 mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Chapter 2</span>
                    </a>
                    <a href="#chapter-3" class="flex flex-col items-center min-w-[60px]" id="mobile-chapter-3">
                        <div class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600 mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Chapter 3</span>
                    </a>
                    <a href="#chapter-4" class="flex flex-col items-center min-w-[60px]" id="mobile-chapter-4">
                        <div class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600 mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Chapter 4</span>
                    </a>
                    <a href="#appendices" class="flex flex-col items-center min-w-[60px]" id="mobile-appendices">
                        <div class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600 mb-2 transition-all"></div>
                        <span class="text-xs font-medium text-gray-600 dark:text-gray-300 whitespace-nowrap">Appendices</span>
                    </a>
                </div>
            </div>
            
            <!-- Introduction Section -->
            <section id="intro">
                @include('e-portfolio.introduction')
            </section>

            <!-- Table of Contents Section -->
            <section id="table-of-contents">
                <div class="container mx-auto px-4 py-16 max-w-5xl">
                    <h2 class="text-3xl font-bold mb-8 dark:text-[#EDEDEC]">Table of Contents</h2>
                    
                    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Introduction -->
                        <a href="#intro" class="p-6 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm hover:shadow-md transition-all bg-white dark:bg-gray-900 group">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-[#FF4433] dark:text-[#EDEDEC]">Introduction</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">An overview of my journey and professional development.</p>
                            <div class="flex items-center text-[#FF4433]">
                                <span class="text-sm">Read More</span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </a>
                        
                        <!-- Chapter 1 -->
                        <a href="#chapter-1" class="p-6 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm hover:shadow-md transition-all bg-white dark:bg-gray-900 group relative">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-[#FF4433] dark:text-[#EDEDEC]">Chapter 1</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Professional development and competencies.</p>
                            <div class="flex items-center text-[#FF4433]">
                                <span class="text-sm">Read More</span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                            <!-- Hover Popup for Chapter 1 -->
                            <div class="absolute left-0 top-0 transform -translate-y-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 w-64 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-4 border border-gray-200 dark:border-gray-700 mb-2">
                                <h4 class="font-semibold text-sm mb-2 text-[#FF4433]">CHAPTER I: INTRODUCTION</h4>
                                <ul class="text-xs text-gray-700 dark:text-gray-300 space-y-1">
                                    <li>• A. Importance of Internship</li>
                                    <li>• B. Objectives of Internship</li>
                                    <li>• C. Time and Place of the Internship</li>
                                </ul>
                                <div class="absolute bottom-0 left-1/2 transform translate-y-full -translate-x-1/2 w-4 h-4 rotate-45 bg-white dark:bg-gray-800 border-b border-r border-gray-200 dark:border-gray-700"></div>
                            </div>
                        </a>
                        
                        <!-- Chapter 2 -->
                        <a href="#chapter-2" class="p-6 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm hover:shadow-md transition-all bg-white dark:bg-gray-900 group relative">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-[#FF4433] dark:text-[#EDEDEC]">Chapter 2</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Key projects and technical achievements.</p>
                            <div class="flex items-center text-[#FF4433]">
                                <span class="text-sm">Read More</span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                            <!-- Hover Popup for Chapter 2 -->
                            <div class="absolute left-0 top-0 transform -translate-y-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 w-64 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-4 border border-gray-200 dark:border-gray-700 mb-2">
                                <h4 class="font-semibold text-sm mb-2 text-[#FF4433]">CHAPTER II: COMPANY PROFILE</h4>
                                <ul class="text-xs text-gray-700 dark:text-gray-300 space-y-1">
                                    <li>• 1. Nature of the Agency</li>
                                    <li>• 2. Mission/Vision/Goal Statement</li>
                                    <li>• 3. History/Background of the Agency/Office</li>
                                    <li>• 4. Organizational Structure</li>
                                </ul>
                                <div class="absolute bottom-0 left-1/2 transform translate-y-full -translate-x-1/2 w-4 h-4 rotate-45 bg-white dark:bg-gray-800 border-b border-r border-gray-200 dark:border-gray-700"></div>
                            </div>
                        </a>
                        
                        <!-- Chapter 3 -->
                        <a href="#chapter-3" class="p-6 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm hover:shadow-md transition-all bg-white dark:bg-gray-900 group relative">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-[#FF4433] dark:text-[#EDEDEC]">Chapter 3</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Industry experience and collaborations.</p>
                            <div class="flex items-center text-[#FF4433]">
                                <span class="text-sm">Read More</span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                            <!-- Hover Popup for Chapter 3 -->
                            <div class="absolute left-0 top-0 transform -translate-y-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 w-64 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-4 border border-gray-200 dark:border-gray-700 mb-2">
                                <h4 class="font-semibold text-sm mb-2 text-[#FF4433]">CHAPTER III: WORK EXPERIENCES</h4>
                                <ul class="text-xs text-gray-700 dark:text-gray-300 space-y-1">
                                    <li>• 1. Weekly accomplishment report</li>
                                    <li>• 2. Daily Time Record</li>
                                    <li>• 3. Internship Progress Report</li>
                                    <li>• 4. Internship Analysis Report</li>
                                </ul>
                                <div class="absolute bottom-0 left-1/2 transform translate-y-full -translate-x-1/2 w-4 h-4 rotate-45 bg-white dark:bg-gray-800 border-b border-r border-gray-200 dark:border-gray-700"></div>
                            </div>
                        </a>
                        
                        <!-- Chapter 4 -->
                        <a href="#chapter-4" class="p-6 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm hover:shadow-md transition-all bg-white dark:bg-gray-900 group relative">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-[#FF4433] dark:text-[#EDEDEC]">Chapter 4</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Future goals and continuous improvement.</p>
                            <div class="flex items-center text-[#FF4433]">
                                <span class="text-sm">Read More</span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                            <!-- Hover Popup for Chapter 4 -->
                            <div class="absolute left-0 top-0 transform -translate-y-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 w-64 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-4 border border-gray-200 dark:border-gray-700 mb-2">
                                <h4 class="font-semibold text-sm mb-2 text-[#FF4433]">CHAPTER IV: ASSESSMENT</h4>
                                <ul class="text-xs text-gray-700 dark:text-gray-300 space-y-1">
                                    <li>• 1. Student Internship Evaluation Form</li>
                                </ul>
                                <div class="absolute bottom-0 left-1/2 transform translate-y-full -translate-x-1/2 w-4 h-4 rotate-45 bg-white dark:bg-gray-800 border-b border-r border-gray-200 dark:border-gray-700"></div>
                            </div>
                        </a>
                        
                        <!-- Appendices -->
                        <a href="#appendices" class="p-6 border border-gray-200 dark:border-gray-800 rounded-lg shadow-sm hover:shadow-md transition-all bg-white dark:bg-gray-900 group relative">
                            <h3 class="text-xl font-semibold mb-2 group-hover:text-[#FF4433] dark:text-[#EDEDEC]">Appendices</h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4">Additional resources and supporting materials.</p>
                            <div class="flex items-center text-[#FF4433]">
                                <span class="text-sm">Read More</span>
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                            <!-- Hover Popup for Appendices -->
                            <div class="absolute left-0 top-0 transform -translate-y-full opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none z-50 w-72 bg-white dark:bg-gray-800 shadow-xl rounded-lg p-4 border border-gray-200 dark:border-gray-700 mb-2">
                                <h4 class="font-semibold text-sm mb-2 text-[#FF4433]">APPENDICES</h4>
                                <ul class="text-xs text-gray-700 dark:text-gray-300 space-y-1">
                                    <li>• Appendix A: Evaluation Form</li>
                                    <li>• Appendix B: Photocopy Registration Form</li>
                                    <li>• Appendix C: Photocopy Validated ID</li>
                                    <li>• Appendix D: Parent's Consent</li>
                                    <li>• Appendix E: Medical Certificate</li>
                                    <li>• Appendix F: Certificate of Good Moral Character</li>
                                    <li>• Appendix G: Application Letter</li>
                                    <li>• Appendix H: Endorsement Letter</li>
                                    <li>• Appendix I: Memorandum of Agreement</li>
                                    <li>• Appendix J: Daily Time Record (Time Card)</li>
                                    <li>• Appendix K: Certificate of Completion</li>
                                    <li>• Appendix L: Certificate of Clearance</li>
                                    <li>• Appendix M: Performance/Proficiency Rating Sheet</li>
                                    <li>• Appendix N: Pictures during Pre-service Seminar</li>
                                    <li>• Appendix O: Pictures during Office works</li>
                                    <li>• Appendix P: Code of Ethics for CAST Student Internship</li>
                                    <li>• Appendix Q: Curriculum Vitae</li>
                                    <li>• Appendix R: On-the-Job Training Portfolio Evaluation Form</li>
                                    <li>• Appendix S: E-Portfolio</li>
                                </ul>
                                <div class="absolute bottom-0 left-1/2 transform translate-y-full -translate-x-1/2 w-4 h-4 rotate-45 bg-white dark:bg-gray-800 border-b border-r border-gray-200 dark:border-gray-700"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            
 {{---------------- SECTIONS - Location "resources/views/e-portfolio/sections/chapter#.blade.php" -----------------}}



            <!-- Chapter 1 Section -->
            <section id="chapter-1" class="pt-16">
                @include('e-portfolio.sections.chapter1')
            </section>
            
            <!-- Chapter 2 Section -->
            <section id="chapter-2" class="pt-16">
                  @include('e-portfolio.sections.chapter2')
            </section>
            
            <!-- Chapter 3 Section -->
            <section id="chapter-3" class="pt-16">
                @include('e-portfolio.sections.chapter3')
            </section>
            
            <!-- Chapter 4 Section -->
            <section id="chapter-4" class="pt-16">
                @include('e-portfolio.sections.chapter4')
            </section>
            
            <!-- Appendices Section -->
            <section id="appendices" class="pt-16">
                <div class="w-full py-20 px-6">
                    <h2 class="text-3xl font-bold mb-8 dark:text-[#EDEDEC]">Appendices</h2>
                    <p class="text-lg dark:text-[#A1A09A]">Content coming soon...</p>
                </div>
                {{-- @include('e-portfolio.sections.appendices') --}}
            </section>
        </main>
        
        <!-- Footer -->
        @include('partials.footer')
        
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Smooth scrolling for internal links
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function(e) {
                        e.preventDefault();
                        
                        const targetId = this.getAttribute('href');
                        if(targetId === '#') return;
                        
                        const targetElement = document.querySelector(targetId);
                        if(!targetElement) return;
                        
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        
                        // Update dots when clicking navigation
                        setTimeout(() => {
                            updateActiveDot(targetId.substring(1));
                        }, 100);
                    });
                });
                // Add this at the top level (right after DOMContentLoaded)
                let currentSectionId = null; // Track current section for stability
                const sectionChangeThreshold = 0.35; // Require significant visibility to change sections
                
                function updateActiveDot(sectionId) {
                    // Your existing updateActiveDot code - no changes needed
                    // Reset all desktop dots
                    document.querySelectorAll('.progress-dot').forEach(dot => {
                        dot.classList.remove('active', 'bg-[#FF4433]');
                        dot.classList.add('bg-gray-400', 'dark:bg-gray-500');
                    });
                    
                    // Reset all mobile nav items
                    document.querySelectorAll('[id^="mobile-"]').forEach(item => {
                        item.classList.remove('active-section');
                        const dotElement = item.querySelector('div');
                        if (dotElement) {
                            dotElement.classList.remove('bg-[#FF4433]');
                            dotElement.classList.add('bg-gray-300', 'dark:bg-gray-600');
                        }
                    });
                    
                    // Activate the specific desktop dot
                    const desktopDot = document.getElementById(`dot-${sectionId}`);
                    if (desktopDot) {
                        desktopDot.classList.add('active', 'bg-[#FF4433]');
                        desktopDot.classList.remove('bg-gray-400', 'dark:bg-gray-500');
                    }
                    
                    // Activate mobile nav item
                    const mobileItemId = `mobile-${sectionId}`;
                    const mobileItem = document.getElementById(mobileItemId);
                    if (mobileItem) {
                        mobileItem.classList.add('active-section');
                        const dotElement = mobileItem.querySelector('div');
                        if (dotElement) {
                            dotElement.classList.add('bg-[#FF4433]');
                            dotElement.classList.remove('bg-gray-300', 'dark:bg-gray-600');
                        }
                        
                        // Ensure the active item is visible in the scroll area
                        mobileItem.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                    }
                    
                    // Update current section ID for continuity
                    currentSectionId = sectionId;
                }
                
                // Improved function to determine which section is most visible
                function getMostVisibleSection() {
                    const sections = document.querySelectorAll('section[id]');
                    let maxVisibleSection = null;
                    let maxVisibilityScore = 0;
                    
                    // Top and bottom boundaries check (entry/exit points)
                    const topThreshold = 150; // Pixels from top to trigger activation
                    const bottomThreshold = 100; // Pixels from bottom to trigger activation
                    
                    for (const section of sections) {
                        const rect = section.getBoundingClientRect();
                        const viewportHeight = window.innerHeight;
                        
                        // Check if section is entering the viewport from the top
                        if (rect.top >= -topThreshold && rect.top <= topThreshold * 2) {
                            return section.id; // Immediately activate when entering
                        }
                        
                        // Check if we're at the bottom of a section and about to exit
                        if (rect.bottom >= viewportHeight - bottomThreshold && 
                            rect.bottom <= viewportHeight + bottomThreshold) {
                            // Look ahead to the next section if it exists
                            const nextSection = section.nextElementSibling;
                            if (nextSection && nextSection.id) {
                                const nextRect = nextSection.getBoundingClientRect();
                                if (nextRect.top < viewportHeight) {
                                    return nextSection.id; // Activate next section slightly early
                                }
                            }
                        }
                        
                        // Calculate visible area
                        const visibleTop = Math.max(0, rect.top);
                        const visibleBottom = Math.min(viewportHeight, rect.bottom);
                        const visibleHeight = Math.max(0, visibleBottom - visibleTop);
                        
                        // Nothing visible? Skip calculation
                        if (visibleHeight <= 0) continue;
                        
                        // Calculate what percentage of the viewport this section occupies
                        const viewportPercentage = visibleHeight / viewportHeight;
                        
                        // Calculate what percentage of the section is visible
                        const sectionPercentage = visibleHeight / rect.height;
                        
                        // Calculate distance from center of viewport
                        const viewportCenter = viewportHeight / 2;
                        const sectionCenter = (visibleTop + visibleBottom) / 2;
                        const distanceFromCenter = Math.abs(viewportCenter - sectionCenter) / viewportHeight;
                        
                        // Give a continuity bonus if this is the current section
                        const continuityBonus = (section.id === currentSectionId) ? 0.2 : 0;
                        
                        // Combine factors with weighted scoring for better stability
                        const visibilityScore = (viewportPercentage * 0.4) + 
                                            (sectionPercentage * 0.3) + 
                                            ((1 - distanceFromCenter) * 0.2) +
                                            continuityBonus;
                        
                        if (visibilityScore > maxVisibilityScore) {
                            maxVisibilityScore = visibilityScore;
                            maxVisibleSection = section;
                        }
                    }
                    
                    // Only change section if we have significant visibility or no current section
                    if (maxVisibilityScore > sectionChangeThreshold || !currentSectionId) {
                        return maxVisibleSection ? maxVisibleSection.id : null;
                    } else {
                        // Otherwise maintain current section for stability
                        return currentSectionId;
                    }
                }
                
                // Optimized scroll handler with shorter throttling
                let scrollTimeout = null;
                // Replace the handleScroll function with this improved version:
                function handleScroll() {
                    if (scrollTimeout) return;
                    
                    scrollTimeout = setTimeout(() => {
                        // Special case for top of page
                        if (window.scrollY < 50) {
                            updateActiveDot('intro');
                            scrollTimeout = null;
                            return;
                        }
                        
                        // Get the most visible section using our existing calculation
                        const mostVisibleSectionId = getMostVisibleSection();
                        
                        // Special handling for Chapter 3
                        if (currentSectionId === 'chapter-3') {
                            // When we're already in Chapter 3, make it harder to exit
                            const chapter3 = document.getElementById('chapter-3');
                            const chapter3Rect = chapter3.getBoundingClientRect();
                            const chapter4 = document.getElementById('chapter-4');
                            const chapter4Rect = chapter4.getBoundingClientRect();
                            
                            // Only leave Chapter 3 if it's mostly off-screen OR Chapter 4 is clearly visible
                            if (chapter3Rect.bottom > 0 && 
                                chapter3Rect.top < window.innerHeight * 0.8 && 
                                (chapter4Rect.top > window.innerHeight || chapter4Rect.top < window.innerHeight * 0.8)) {
                                // Maintain Chapter 3 as active
                                updateActiveDot('chapter-3');
                                scrollTimeout = null;
                                return;
                            }
                        }
                        
                        // Special handling for Chapter 4
                        if (currentSectionId === 'chapter-4') {
                            // When we're already in Chapter 4, make it harder to exit
                            const chapter4 = document.getElementById('chapter-4');
                            const chapter4Rect = chapter4.getBoundingClientRect();
                            const appendices = document.getElementById('appendices');
                            const appendicesRect = appendices.getBoundingClientRect();
                            
                            // Only leave Chapter 4 if it's mostly off-screen OR Appendices is clearly visible
                            if (chapter4Rect.bottom > 0 && 
                                chapter4Rect.top < window.innerHeight * 0.8 && 
                                (appendicesRect.top > window.innerHeight || appendicesRect.top < window.innerHeight * 0.8)) {
                                // Maintain Chapter 4 as active
                                updateActiveDot('chapter-4');
                                scrollTimeout = null;
                                return;
                            }
                        }
                        
                        // Default behavior for all other sections
                        if (mostVisibleSectionId) {
                            updateActiveDot(mostVisibleSectionId);
                        }
                        
                        scrollTimeout = null;
                    }, 20); // Keep at 20ms for responsive updates
                }
                
                // Keep your existing event listeners and initial state setup
                window.addEventListener('scroll', handleScroll);
                handleScroll();
                
                // Keep your existing CSS styles
            });
        </script>
    </body>
</html>