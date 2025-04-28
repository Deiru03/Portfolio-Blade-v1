<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Personal portfolio website showcasing my skills and projects">

        <title>My Portfolio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Your existing CSS */
            </style>
        @endif
    </head>
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
            <section class="w-full max-w-7xl mx-auto py-16 px-6 flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h1 class="text-5xl font-medium mb-4 dark:text-[#EDEDEC]">Hi, I'm <span class="text-[#f53003] dark:text-[#FF4433]">Dale C. Decain</span></h1>
                    <p class="text-xl mb-6 dark:text-[#A1A09A]">Web Developer & Designer</p>
                    <p class="mb-8 dark:text-[#EDEDEC]">I create engaging web experiences with clean, efficient code. Passionate about building applications that make a difference.</p>
                    <div class="flex gap-4">
                        <a href="#contact" class="px-6 py-3 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-md hover:bg-[#333] dark:hover:bg-white transition-colors">Get in touch</a>
                        <a href="#projects" class="px-6 py-3 border border-[#1b1b18] dark:border-[#EDEDEC] rounded-md dark:text-[#EDEDEC] hover:bg-[#f5f5f5] dark:hover:bg-[#222] transition-colors">View Projects</a>
                    </div>
                </div>
                <div class="lg:w-1/2 flex justify-center">
                    <div class="relative w-64 h-64 bg-[#fff2f2] dark:bg-[#1D0002] rounded-full overflow-hidden">
                        <!-- Replace with your profile image -->
                        <div class="absolute inset-0 flex items-center justify-center text-[#f53003] dark:text-[#FF4433]">
                            <!-- Placeholder text - replace with an actual image -->
                            <img src="{{ asset('images/Profile-Picture.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- About Section -->
            <section id="about" class="w-full bg-white dark:bg-[#161615] py-16">
                <div class="max-w-7xl mx-auto px-6">
                    <h2 class="text-3xl font-medium mb-8 dark:text-[#EDEDEC]">About Me</h2>
                    <div class="flex flex-col lg:flex-row gap-8">
                        <div class="lg:w-2/3 dark:text-[#A1A09A]">
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Nullam euismod, nisl eget aliquam ultricies, nunc nisl aliquet nunc, quis aliquam nisl nisl eu nisl. Nulla facilisi.</p>
                            <p class="mb-4">Morbi euismod, nisl eget aliquam ultricies, nunc nisl aliquet nunc, quis aliquam nisl nisl eu nisl. Nulla facilisi. Nullam euismod, nisl eget aliquam ultricies, nunc nisl aliquet nunc, quis aliquam nisl nisl eu nisl.</p>
                            <p>When I'm not coding, you'll find me hiking, reading, or exploring new coffee shops.</p>
                        </div>
                        <div class="lg:w-1/3">
                            <h3 class="text-xl font-medium mb-4 dark:text-[#EDEDEC]">Details</h3>
                            <ul class="space-y-2 dark:text-[#A1A09A]">
                                <li><strong class="font-medium dark:text-[#EDEDEC]">Name:</strong> Your Name</li>
                                <li><strong class="font-medium dark:text-[#EDEDEC]">Experience:</strong> 5 years</li>
                                <li><strong class="font-medium dark:text-[#EDEDEC]">Location:</strong> City, Country</li>
                                <li><strong class="font-medium dark:text-[#EDEDEC]">Email:</strong> your.email@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Skills Section -->
            <section id="skills" class="w-full py-16 px-6">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-3xl font-medium mb-8 dark:text-[#EDEDEC]">My Skills</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Skill Card 1 -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h3 class="text-xl font-medium mb-3 dark:text-[#EDEDEC]">Frontend Development</h3>
                            <p class="mb-4 dark:text-[#A1A09A]">Creating responsive and interactive user interfaces with modern frameworks.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">HTML/CSS</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">JavaScript</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">React</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Vue</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Tailwind CSS</span>
                            </div>
                        </div>
                        
                        <!-- Skill Card 2 -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h3 class="text-xl font-medium mb-3 dark:text-[#EDEDEC]">Backend Development</h3>
                            <p class="mb-4 dark:text-[#A1A09A]">Building scalable server-side applications and APIs.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">PHP</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Laravel</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Node.js</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Express</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">MySQL</span>
                            </div>
                        </div>
                        
                        <!-- Skill Card 3 -->
                        <div class="bg-white dark:bg-[#161615] p-6 rounded-lg shadow-[0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
                            <h3 class="text-xl font-medium mb-3 dark:text-[#EDEDEC]">Tools & Others</h3>
                            <p class="mb-4 dark:text-[#A1A09A]">Additional skills and tools I use in my development workflow.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Git</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Docker</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">AWS</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">Figma</span>
                                <span class="px-3 py-1 bg-[#f5f5f5] dark:bg-[#222] rounded-full text-sm dark:text-[#EDEDEC]">RESTful APIs</span>
                            </div>
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
    </body>
</html>
