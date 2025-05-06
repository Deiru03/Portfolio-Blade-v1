<!-- filepath: c:\xampp\htdocs\Portfolio\portfolio-blade-v1\resources\views\e-portfolio\sections\introduction.blade.php -->
<!-- Hero Section with Portfolio Banner -->
<section class="w-full py-20 px-6 relative overflow-hidden bg-white dark:bg-[#161615]">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-10 dark:opacity-20 overflow-hidden pointer-events-none">
        <div class="absolute w-64 h-64 rounded-full bg-gradient-to-r from-[#ff6347] to-[#f53003] blur-3xl animate-pulse -top-20 -left-20"></div>
        <div class="absolute w-80 h-80 rounded-full bg-gradient-to-r from-[#ff8066] to-[#ff4433] blur-3xl animate-pulse delay-700 bottom-0 right-0"></div>
    </div>
    
    <div class="max-w-6xl mx-auto">
        <!-- Portfolio Banner -->
        <div class="relative rounded-2xl overflow-hidden shadow-2xl mb-16">
            <img src="{{ asset('images/omsc-images/omsc-front.png') }}" alt="OMSC Campus" class="w-full h-[500px] object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-[#0a0a0a]/80 to-transparent flex items-center">
                <div class="px-8 py-6 max-w-2xl">
                    <div class="flex flex-col space-y-6">
                        <!-- Institution and Company Logos -->
                        <div class="flex items-center space-x-4">
                            <img src="{{ asset('images/logo/omsc.png') }}" alt="Occidental Mindoro State College Logo" class="w-20 h-20 object-contain bg-white/10 p-1 rounded-lg">
                            <div class="h-12 w-px bg-gray-300/30"></div>
                            <img src="{{ asset('images/logo/bsit.png') }}" alt="BSIT Department Logo" class="w-20 h-20 object-contain">
                        </div>
                        
                        <!-- Header Text -->
                        <div class="text-white">
                            <h2 class="text-3xl font-bold tracking-tight">ON-THE-JOB TRAINING</h2>
                            <p class="text-lg text-[#EDEDEC]/90 font-medium">COLLEGE OF ARTS, SCIENCE, AND TECHNOLOGY</p>
                        </div>
                    </div>
                    
                    <div class="flex items-end justify-between mt-8">
                        <div>
                            <div class="text-3xl font-bold text-[#FF4433] mb-2">PORTFOLIO</div>
                            <div class="text-white">
                                <p class="mb-1">Decain, Dale C.</p>
                                <p>BSIT - 4B</p>
                            </div>
                        </div>
                        <div class="text-4xl font-bold text-white">2025</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Introduction Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Company Profiles -->
            <div class="col-span-1 bg-[#FDFDFC] dark:bg-[#0a0a0a] p-6 rounded-xl shadow-md h-220">
                <h3 class="text-xl font-medium mb-4 dark:text-[#EDEDEC] relative overflow-hidden">
                    Company Partners & Educational Institution
                    <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
                </h3>
                
                <div class="space-y-6">
                    <!-- Educational Institution -->
                    <div class="flex flex-col items-center">
                        <div class="w-48 flex items-center justify-center bg-white dark:bg-[#161615] p-4 rounded-lg">
                            <img src="{{ asset('images/logo/omsc.png') }}" alt="Occidental Mindoro State College" class="max-w-full max-h-20 object-contain">
                        </div>
                        <h4 class="font-medium dark:text-[#EDEDEC] mt-3">Occidental Mindoro State College</h4>
                        <p class="text-sm text-center dark:text-[#A1A09A]">State College in Occidental Mindoro</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-48 flex items-center justify-center bg-white dark:bg-[#161615] p-4 rounded-lg">
                            <img src="{{ asset('images/logo/bsit.png') }}" alt="BSIT Program" class="max-w-full max-h-20 object-contain">
                        </div>
                        <h4 class="font-medium dark:text-[#EDEDEC] mt-3">BS Information Technology</h4>
                        <p class="text-sm text-center dark:text-[#A1A09A]">College of Arts, Science, and Technology</p>
                    </div>
                    
                    <!-- Company Partners -->
                    <div class="flex flex-col items-center mt-8">
                        <div class="w-48 flex items-center justify-center bg-white dark:bg-[#161615] p-4 rounded-lg">
                            <img src="{{ asset('images/logo/devops.png') }}" alt="DevOps Outsourcing Inc." class="max-w-full max-h-20 object-contain">
                        </div>
                        <h4 class="font-medium dark:text-[#EDEDEC] mt-3">DevOps Outsourcing Inc.</h4>
                        <p class="text-sm text-center dark:text-[#A1A09A]">Software Development & IT Solutions</p>
                    </div>
                    
                    <div class="flex flex-col items-center">
                        <div class="w-48 flex items-center justify-center bg-white dark:bg-[#161615] p-4 rounded-lg">
                            <img src="{{ asset('images/logo/mobbiz-whitebg.png') }}" alt="Mobbiz Solutions" class="max-w-full max-h-20 object-contain">
                        </div>
                        <h4 class="font-medium dark:text-[#EDEDEC] mt-3">Mobbiz Solutions</h4>
                        <p class="text-sm text-center dark:text-[#A1A09A]">Mobile & Web Application Development</p>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-span-1 lg:col-span-2 bg-[#FDFDFC] dark:bg-[#0a0a0a] p-6 rounded-xl shadow-md">
                <h2 class="text-2xl font-medium mb-6 dark:text-[#EDEDEC] relative overflow-hidden">
                    Welcome & Overview
                    <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
                </h2>
                
                <div class="prose prose-sm dark:prose-invert max-w-none">
                    <p class="dark:text-[#A1A09A] mb-4">
                        This portfolio documents my 486-hour On-the-Job Training (OJT) program, a crucial component of the Bachelor of Science in Information Technology curriculum at Occidental Mindoro State College. The OJT program serves as a bridge between academic theory and professional practice, allowing students to apply classroom knowledge in real-world industry settings.
                    </p>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        During this internship period from January to April 2025, I worked as a Business Systems Analyst intern at DevOps Outsourcing Inc. in collaboration with Mobbiz Solutions. This experience provided comprehensive exposure to software development lifecycles, business analysis methodologies, and client interaction protocols that significantly enhanced my technical aptitude and professional competencies.
                    </p>
                    
                    <h3 class="text-xl font-medium mt-6 mb-3 dark:text-[#EDEDEC] mt-10">OJT Overview</h3>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        During my OJT period, I focused primarily on <span class="font-semibold text-[#f53003] dark:text-[#FF4433]">business analysis tasks</span> including:
                    </p>
                    <ul class="list-disc pl-5 dark:text-[#A1A09A] mb-4 space-y-2">
                        <li><span class="font-medium dark:text-[#EDEDEC]">Business Process creation</span> - Building and implementing business workflows in Mobbiz using no-code platform solutions</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">Mobbiz configurations</span> - Learning workarounds and polishing system configurations to optimize performance</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">Requirements gathering</span> - Collecting and analyzing stakeholder needs</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">Workflow analysis</span> - Optimizing business processes</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">QA testing</span> - Participating in <span class="underline decoration-[#f53003] dark:decoration-[#FF4433]">five regression testing cycles</span> and bug hunting to ensure software quality</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">Client management</span> - Handling client communications and participating in meetings with directors</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">HR coordination</span> - Communicating with human resources for project alignment</li>
                        <li><span class="font-medium dark:text-[#EDEDEC]">Custom reporting</span> - Developing PDF reporting solutions using document generation techniques</li>
                    </ul>

                    <div class="p-3 bg-[#fff2f2]/30 dark:bg-[#1D0002]/30 rounded-lg border-l-3 border-[#f53003] dark:border-[#FF4433] mb-4">
                        <p class="dark:text-[#A1A09A]">
                            This internship bridged my academic learning with practical applications in the IT field. Through <span class="font-medium dark:text-[#EDEDEC]">active collaboration</span> with developers, QA engineers, and project managers, I developed essential skills in business systems analysis, software testing methodologies, and custom reporting solutions while enhancing my professional capabilities in communication, teamwork, and time management.
                        </p>
                    </div>
                    
                    <h3 class="text-xl font-medium mt-6 mb-3 dark:text-[#EDEDEC]">Portfolio Structure</h3>
                    
                    <p class="dark:text-[#A1A09A]">This e-portfolio is organized into several chapters:</p>
                    
                    <ul class="list-disc pl-5 dark:text-[#A1A09A] mb-4">
                        <li class="mb-2"><a href="#chapter-1" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Chapter I: Introduction</a> - Importance of Internship, Objectives, Time and Place</li>
                        <li class="mb-2"><a href="#chapter-2" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Chapter II: Company Profile</a> - Nature of Agency, Mission/Vision/Goals, History/Background, Organizational Structure</li>
                        <li class="mb-2"><a href="#chapter-3" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Chapter III: Work Experiences</a> - Weekly accomplishment reports, Daily Time Records, Progress and Analysis Reports</li>
                        <li class="mb-2"><a href="#chapter-4" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Chapter IV: Assessment of the Practicum Program</a> - Student Internship Evaluation Form</li>
                        <li><a href="#appendices" class="text-[#f53003] dark:text-[#FF4433] hover:underline">Appendices</a> - Supporting documents including forms, certificates, and evidence of OJT completion</li>
                    </ul>
                    
                    <div class="mt-8 p-4 bg-[#fff2f2] dark:bg-[#1D0002] rounded-lg border-l-4 border-[#f53003] dark:border-[#FF4433]">
                        <p class="text-[#f53003] dark:text-[#FF4433] font-medium">Note:</p>
                        <p class="text-sm dark:text-[#A1A09A]">This e-portfolio serves as documentation of my learning journey and professional development during my OJT experience. It reflects not only the technical skills I've acquired but also the professional growth I've achieved.</p>
                    </div>
                </div>
                <h3 class="text-xl font-medium mt-8 mb-3 dark:text-[#EDEDEC]">Acknowledgements</h3>

                <div class="prose prose-sm dark:prose-invert max-w-none">
                    <p class="dark:text-[#A1A09A] mb-4">
                        I extend my deepest gratitude to everyone who played a role in my On-the-Job Training journey.
                    </p>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        A special thank you goes to our OJT coordinator, Ms. Marites D. Escultor, for her unwavering support, insightful guidance, and constant encouragement.
                    </p>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        I also appreciate the invaluable knowledge and mentorship shared by DevOps Outsourcing Inc., especially by Mr. Borja Hernandez, Ms. Monica Villadot, Ms. Andrea Jhay Castillo, Ms. Rechel Cataluna Punsalan, Mr. Eldrich Jonelle Guillermo, and Ms. Gretchen Failanga.
                    </p>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        My fellow interns—Ms. Mary Felle Malayas, Ms. Ranela Valencia, Mr. Julian Bernard Alavarado, and Mr. Kenji Fujita—made this experience richer with your teamwork, support, and the moments of laughter we shared.
                    </p>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        I am forever grateful to my family for their heartfelt love and steadfast encouragement throughout this journey.
                    </p>
                    
                    <p class="dark:text-[#A1A09A] mb-4">
                        Above all, I thank Almighty God for His strength, wisdom, and guidance, which have carried me through to the end of this training. I will carry these lessons and memories with me as I step forward into my future career.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Navigation Section -->
<section class="w-full py-12 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div></div> <!-- Empty div for spacing -->
            <a href="#chapter-1" class="group px-6 py-3 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] border border-[#f53003] dark:border-[#FF4433] rounded-md hover:bg-[#f53003] hover:text-white dark:hover:bg-[#FF4433] dark:hover:text-[#1D0002] transition-all duration-300 flex items-center justify-center">
                <span>Continue to Chapter 1</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</section>