<div class="w-full py-20 px-6 relative overflow-hidden bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <div class="max-w-6xl mx-auto">
        <div class="relative mb-12 overflow-hidden">
            <!-- Laravel-inspired decorative elements -->
            <div class="absolute -top-16 right-0 w-64 h-64 opacity-5 dark:opacity-10">
            <div class="w-full h-full relative">
                <div class="absolute w-32 h-32 rounded-lg border-4 border-[#f53003] dark:border-[#FF4433] rotate-12 top-10 right-10"></div>
                <div class="absolute w-24 h-24 rounded-lg bg-[#f53003] dark:bg-[#FF4433] opacity-20 -rotate-12 top-16 right-20"></div>
            </div>
            </div>
            
            <div class="text-center relative z-10">
            <!-- Laravel-style badge -->
            <div class="inline-block mb-4">
                <span class="bg-[#f53003]/10 dark:bg-[#FF4433]/20 text-[#f53003] dark:text-[#FF4433] text-xs font-mono py-1 px-3 rounded-full border border-[#f53003]/20 dark:border-[#FF4433]/30">
                experience:document
                </span>
            </div>
            
            <h2 class="text-3xl md:text-5xl font-bold mb-3 dark:text-[#EDEDEC] leading-tight">
                <span class="text-[#f53003] dark:text-[#FF4433]">Chapter</span> <span class="font-light">Three</span>
                <div class="h-1 w-24 md:w-32 bg-gradient-to-r from-[#f53003] to-transparent dark:from-[#FF4433] mx-auto mt-2"></div>
            </h2>
            
            <h3 class="text-xl md:text-2xl font-normal dark:text-[#EDEDEC] mb-4 font-mono">
                Work Experiences
            </h3>
            
            <p class="max-w-xl mx-auto text-gray-600 dark:text-[#A1A09A] text-sm mb-6">
                Documenting my professional journey at DevOps Outsourcing Inc. and Mobbiz Solutions through weekly reports, time records, and reflective analysis.
            </p>
            
            <!-- Code-like element -->
            <div class="inline-block text-left bg-gray-100 dark:bg-gray-900 p-2 rounded-md font-mono text-xs text-gray-700 dark:text-gray-300 mb-5">
                <div><span class="text-blue-600 dark:text-blue-400">const</span> <span class="text-purple-600 dark:text-purple-400">workExperience</span> = <span class="text-purple-600 dark:text-purple-400">internship</span>.<span class="text-blue-600 dark:text-blue-400">document</span>();</div>
                <div><span class="text-orange-600 dark:text-orange-400">DevOps</span>.<span class="text-blue-600 dark:text-blue-400">analyze</span>(<span class="text-green-600 dark:text-green-400">'professional growth'</span>);</div>
            </div>
            
            <!-- Company logos -->
            <div class="flex justify-center space-x-4 mb-5">
                <img src="{{ asset('images/logo/devops.png') }}" alt="DevOps Logo" class="h-10 opacity-90 hover:opacity-100 transition-opacity">
                <img src="{{ asset('images/logo/mobbiz-whitebg.png') }}" alt="Mobbiz Solutions Logo" class="h-10 opacity-90 hover:opacity-100 transition-opacity">
            </div>
            
            <!-- Animated scroll indicator -->
            <div class="flex justify-center mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#f53003] dark:text-[#FF4433] animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
            </div>
        </div>
        <!-- Introduction -->
        <div class="bg-white dark:bg-[#161615] p-6 rounded-xl shadow-md mb-12">
            <h3 class="text-2xl font-medium mb-6 dark:text-[#EDEDEC] relative overflow-hidden">
                Introduction
                <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
            </h3>
            <div class="prose prose-sm dark:prose-invert max-w-none">
                <p class="dark:text-[#A1A09A] mb-4">
                    This chapter documents my professional journey during my internship at DevOps Outsourcing Inc. and Mobbiz Solutions. 
                    Through weekly accomplishment reports, daily time records, progress reports, and analysis, this chapter provides a 
                    comprehensive view of my work experiences, skills developed, and professional growth achieved during this period.
                </p>
                <p class="dark:text-[#A1A09A]">
                    The documentation presented here reflects not only the tasks completed but also the learning process, challenges 
                    overcome, and the progressive development of my technical and soft skills in a professional environment.
                </p>
            </div>
        </div>

        <!-- Section 1: Weekly Accomplishment Report -->
        <div class="bg-white dark:bg-[#161615] p-6 rounded-xl shadow-md mb-12">
            <h3 class="text-2xl font-medium mb-6 dark:text-[#EDEDEC] relative overflow-hidden">
                I. Weekly Accomplishment Report
                <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
            </h3>

            <section id="chapter-3-weekly" class="pt-16">
                @include('e-portfolio.sections.chapter3-weekly')
            </section>
        </div>

        <!-- Section 2: Daily Time Record -->
        <div class="bg-white dark:bg-[#161615] p-6 rounded-xl shadow-md mb-12">
            <h3 class="text-2xl font-medium mb-6 dark:text-[#EDEDEC] relative overflow-hidden">
                II. Daily Time Record
                <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
            </h3>
            
            <div class="prose prose-sm dark:prose-invert max-w-none">
                <p class="dark:text-[#A1A09A] mb-4">
                    Daily Time Records (DTRs) were maintained throughout my internship to track working hours and ensure I was meeting the 
                    required internship hours. These records were validated by my company supervisor and submitted to my university's OJT coordinator.
                </p>
                
                <!-- DTR Sample -->
                <div class="my-8">
                    <h4 class="text-xl font-medium mb-4 dark:text-[#EDEDEC]">Sample Timesheet Entries</h4>
                    
                    <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg p-4 border border-gray-100 dark:border-gray-800 mb-4">
                        <div class="overflow-x-auto">
                            <table class="min-w-full border border-gray-200 dark:border-gray-800 text-sm">
                                <thead class="bg-[#f8f8f8] dark:bg-[#1a1a19]">
                                    <tr>
                                        <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-800 text-left">Date</th>
                                        <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-800 text-left">Time In</th>
                                        <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-800 text-left">Time Out</th>
                                        <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-800 text-left">Regular Hours</th>
                                        <th class="py-2 px-4 border-b border-gray-200 dark:border-gray-800 text-left">Activities</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                    <tr class="bg-white dark:bg-[#0a0a0a]">
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Jan 20, 2025</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8:00 AM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">5:00 PM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">HR orientation and initial training</td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-[#0d0d0d]">
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Jan 21, 2025</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8:00 AM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">5:00 PM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Introduction to Mobbiz Apps testing</td>
                                    </tr>
                                    <tr class="bg-white dark:bg-[#0a0a0a]">
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Jan 22, 2025</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8:30 AM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">5:30 PM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Exploring business processes and data table functionalities</td>
                                    </tr>
                                    <tr class="bg-gray-50 dark:bg-[#0d0d0d]">
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Jan 23, 2025</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8:00 AM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">5:00 PM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Guided sessions on portal features</td>
                                    </tr>
                                    <tr class="bg-white dark:bg-[#0a0a0a]">
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Jan 24, 2025</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8:00 AM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">5:00 PM</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">8</td>
                                        <td class="py-2 px-4 dark:text-[#A1A09A]">Enhancing business processes and exploring portal features</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-[#f8f8f8] dark:bg-[#1a1a19]">
                                    <tr>
                                        <td colspan="3" class="py-2 px-4 font-medium text-right">Weekly Total:</td>
                                        <td class="py-2 px-4 font-medium dark:text-[#EDEDEC]">40</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h5 class="text-lg font-medium mb-3 dark:text-[#EDEDEC]">Weekly Hour Summary</h5>
                            <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg p-4 border border-gray-100 dark:border-gray-800">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full text-sm">
                                        <thead class="bg-[#f8f8f8] dark:bg-[#1a1a19]">
                                            <tr>
                                                <th class="py-2 px-4 text-left">Week</th>
                                                <th class="py-2 px-4 text-left">Hours Completed</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                            <tr>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">Week 1 (Jan 20-24)</td>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">40</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">Week 2 (Jan 27-31)</td>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">40</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">Week 3 (Feb 3-7)</td>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">40</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">Week 4 (Feb 10-14)</td>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">40</td>
                                            </tr>
                                            <tr>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">Week 5 (Feb 17-21)</td>
                                                <td class="py-2 px-4 dark:text-[#A1A09A]">40</td>
                                            </tr>
                                        </tbody>
                                        <tfoot class="bg-[#f8f8f8] dark:bg-[#1a1a19]">
                                            <tr>
                                                <td class="py-2 px-4 font-medium">Current Total:</td>
                                                <td class="py-2 px-4 font-medium dark:text-[#EDEDEC]">200 / 489</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h5 class="text-lg font-medium mb-3 dark:text-[#EDEDEC]">Attendance Overview</h5>
                            <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg p-4 h-full border border-gray-100 dark:border-gray-800">
                                <div class="flex flex-col h-full">
                                    <div class="flex-1">
                                        <div class="mb-4">
                                            <div class="text-sm mb-1 dark:text-[#A1A09A]">Internship Completion</div>
                                            <div class="w-full bg-gray-200 dark:bg-gray-800 rounded-full h-4">
                                                <div class="bg-[#f53003] dark:bg-[#FF4433] h-4 rounded-full text-xs text-white text-center" style="width: 41%">41%</div>
                                            </div>
                                        </div>
                                        
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <div class="text-sm mb-1 dark:text-[#A1A09A]">Hours Completed</div>
                                                <div class="text-xl font-medium dark:text-[#EDEDEC]">200</div>
                                            </div>
                                            <div>
                                                <div class="text-sm mb-1 dark:text-[#A1A09A]">Hours Required</div>
                                                <div class="text-xl font-medium dark:text-[#EDEDEC]">489</div>
                                            </div>
                                            <div>
                                                <div class="text-sm mb-1 dark:text-[#A1A09A]">Days Present</div>
                                                <div class="text-xl font-medium dark:text-[#EDEDEC]">25</div>
                                            </div>
                                            <div>
                                                <div class="text-sm mb-1 dark:text-[#A1A09A]">Remaining Days</div>
                                                <div class="text-xl font-medium dark:text-[#EDEDEC]">36</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="border-t border-gray-200 dark:border-gray-800 mt-4 pt-4">
                                        <div class="text-sm dark:text-[#A1A09A]">
                                            <span class="font-medium">Note:</span> All timesheet entries are validated and signed by the authorized company supervisor.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- DTR Image -->
                    <div class="mt-6">
                        <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg overflow-hidden border border-gray-100 dark:border-gray-800">
                            <div class="p-4 border-b border-gray-100 dark:border-gray-800">
                                <h5 class="font-medium dark:text-[#EDEDEC]">Sample Daily Time Record</h5>
                            </div>
                            <div class="p-4">
                                <img src="{{ asset('images/chapter3/timesheet.jpg') }}" alt="Daily Time Record" class="w-full rounded-lg">
                                <p class="text-sm text-center text-gray-500 dark:text-gray-400 mt-2 italic">Official Daily Time Record (DTR) sample from internship period</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Section 3: Internship Progress Report -->
        <div class="bg-white dark:bg-[#161615] p-6 rounded-xl shadow-md mb-12">
            <h3 class="text-2xl font-medium mb-6 dark:text-[#EDEDEC] relative overflow-hidden">
                III. Internship Progress Report
                <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] animate-pulse"></span>
            </h3>
            
            <div class="prose prose-sm dark:prose-invert max-w-none">
                <p class="dark:text-[#A1A09A] mb-6">
                    The Internship Progress Report documents the activities completed during my internship, objectives achieved, and skills developed.
                    This comprehensive record serves as evidence of my professional growth and contributions during the internship period.
                </p>
                
                <!-- Basic Information Card -->
                <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg border border-gray-100 dark:border-gray-800 p-6 mb-8">
                    <h4 class="text-xl font-medium mb-4 text-[#f53003] dark:text-[#FF4433]">Internship Details</h4>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div class="flex flex-col">
                            <div class="flex mb-2">
                                <span class="font-medium w-32 dark:text-[#EDEDEC]">Name:</span> 
                                <span class="dark:text-[#A1A09A]">Decain, Dale C.</span>
                            </div>
                            <div class="flex mb-2">
                                <span class="font-medium w-32 dark:text-[#EDEDEC]">Course:</span> 
                                <span class="dark:text-[#A1A09A]">Bachelor of Science in Information Technology</span>
                            </div>
                            <div class="flex mb-2">
                                <span class="font-medium w-32 dark:text-[#EDEDEC]">Agency:</span> 
                                <span class="dark:text-[#A1A09A]">DevOps Outsourcing Inc. Mobbiz Solutions</span>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex mb-2">
                                <span class="font-medium w-32 dark:text-[#EDEDEC]">Period Covered:</span> 
                                <span class="dark:text-[#A1A09A]">January 20, 2025 to April 25, 2025</span>
                            </div>
                            <div class="flex mb-2">
                                <span class="font-medium w-32 dark:text-[#EDEDEC]">Total Hours:</span> 
                                <span class="dark:text-[#A1A09A]">486 hours</span>
                            </div>
                            <div class="flex mb-2">
                                <span class="font-medium w-32 dark:text-[#EDEDEC]">Platform:</span> 
                                <span class="dark:text-[#A1A09A]">Online</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Objectives and Accomplishments -->
                <h4 class="text-xl font-medium mb-4 dark:text-[#EDEDEC]">Objectives and Work Status</h4>
                
                <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg border border-gray-100 dark:border-gray-800 mb-8 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead class="bg-[#f9f9f9] dark:bg-[#161615]">
                                <tr>
                                    <th class="py-3 px-4 text-left font-medium dark:text-[#EDEDEC] border-b border-gray-200 dark:border-gray-800">Objectives</th>
                                    <th class="py-3 px-4 text-left font-medium dark:text-[#EDEDEC] border-b border-gray-200 dark:border-gray-800">Work Status</th>
                                    <th class="py-3 px-4 text-left font-medium dark:text-[#EDEDEC] border-b border-gray-200 dark:border-gray-800">Problems Met</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Know the workarounds in Mobbiz</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Regression Testing</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Making of EJS-PDFs</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Handling Clients</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Have a meeting with the directors</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Communicate with the HR</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Bug Hunting</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                                <tr class="border-b border-gray-100 dark:border-gray-800">
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">Polish Configurations</td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">
                                        <span class="px-2 py-1 bg-green-50 dark:bg-green-900/20 text-green-600 dark:text-green-400 rounded-md text-xs">
                                            Accomplished
                                        </span>
                                    </td>
                                    <td class="py-2 px-4 dark:text-[#A1A09A]">None</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Certification and Approval -->
                <div class="bg-[#fff2f2] dark:bg-[#1D0002] rounded-lg border border-[#f53003]/20 dark:border-[#FF4433]/30 p-6 mb-6">
                    <p class="dark:text-[#A1A09A] mb-6 text-sm">
                        The following report accurately describes the internship activities completed to date:
                    </p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <div class="mb-1 font-medium dark:text-[#EDEDEC]">Intern:</div>
                            <div class="mb-4 dark:text-[#A1A09A]">Dale C. Decain</div>
                            <div class="mb-1 dark:text-[#EDEDEC]">Date:</div>
                            <div class="dark:text-[#A1A09A]">April 25, 2025</div>
                        </div>
                        <div>
                            <div class="mb-1 dark:text-[#EDEDEC]">I have read the attached report and concur with its content:</div>
                            <div class="mb-1 font-medium dark:text-[#EDEDEC]">Supervisor:</div>
                            <div class="mb-4 dark:text-[#A1A09A]">Rechel Cataluna-Punsalan</div>
                            <div class="mb-1 dark:text-[#EDEDEC]">Date:</div>
                            <div class="dark:text-[#A1A09A]">April 25, 2025</div>
                        </div>
                    </div>
                </div>
                
                {{-- <!-- Document Image -->
                <div class="mt-6">
                    <div class="bg-[#FDFDFC] dark:bg-[#0a0a0a] rounded-lg overflow-hidden border border-gray-100 dark:border-gray-800">
                        <div class="p-4 border-b border-gray-100 dark:border-gray-800">
                            <h5 class="font-medium dark:text-[#EDEDEC]">Weekly Accomplishment Report Sample</h5>
                        </div>
                        <div class="p-4">
                            <img src="{{ asset('images/chapter3/weekly-report.jpg') }}" alt="Weekly Accomplishment Report" class="w-full rounded-lg">
                            <p class="text-sm text-center text-gray-500 dark:text-gray-400 mt-2 italic">Official Weekly Accomplishment Report sample from internship period</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- Section 4: Internship Analysis Report -->
        <div class="bg-white dark:bg-[#161615] p-6 rounded-xl shadow-md mb-12">
            <h3 class="text-2xl font-medium mb-8 dark:text-[#EDEDEC] relative overflow-hidden group">
                <span class="relative z-10 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    IV. Internship Analysis Report
                </span>
                <span class="absolute bottom-0 left-0 w-1/4 h-[3px] bg-[#f53003] dark:bg-[#FF4433] group-hover:w-1/3 transition-all duration-300 ease-in-out"></span>
            </h3>
            
            <div class="prose prose-sm dark:prose-invert max-w-none">
                <p class="dark:text-[#A1A09A] mb-8 text-base leading-relaxed">
                    This analysis report provides a reflective assessment of my internship experience, highlighting key aspects
                    of the work environment, supervision received, and personal growth achieved during the internship period.
                </p>
                
                <!-- Internship Information Card -->
                <div class="bg-gradient-to-r from-white to-[#f9f9f8] dark:from-[#0a0a0a] dark:to-[#121211] rounded-xl border border-gray-100 dark:border-gray-800 p-6 mb-10 shadow-sm">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                        <div class="space-y-3">
                            <div class="flex items-center">
                                <span class="font-medium w-32 dark:text-[#EDEDEC] text-base">Name:</span> 
                                <span class="dark:text-[#A1A09A] text-base">Dale C. Decain</span>
                            </div>
                            <div class="flex items-center">
                                <span class="font-medium w-32 dark:text-[#EDEDEC] text-base">Agency:</span> 
                                <span class="dark:text-[#A1A09A] text-base">DevOps Outsourcing Inc. Mobbiz Solutions</span>
                            </div>
                            <div class="flex items-center">
                                <span class="font-medium w-32 dark:text-[#EDEDEC] text-base">Date:</span> 
                                <span class="dark:text-[#A1A09A] text-base">April 25, 2025</span>
                            </div>
                        </div>
                        <div class="hidden md:block h-20 w-20 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                </div>
                
                <!-- Analysis Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <!-- Setting Section -->
                    <div class="group bg-white dark:bg-[#161615] rounded-xl border border-gray-100 dark:border-gray-800 p-6 shadow-sm transition-all duration-300 hover:shadow-md hover:border-gray-200 dark:hover:border-gray-700">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium dark:text-[#EDEDEC]">Setting</h4>
                        </div>
                        <p class="text-sm dark:text-[#A1A09A] leading-relaxed">
                            I feel that Mobbiz offers a remarkably flexible work environment, even though we primarily connect
                            and conduct our activities through online meetings on Meet. Despite the entirely virtual setting, the
                            learning experience is truly enriching and definitely adds value to our day-to-day work.
                        </p>
                    </div>
                    
                    <!-- Supervisor Section -->
                    <div class="group bg-white dark:bg-[#161615] rounded-xl border border-gray-100 dark:border-gray-800 p-6 shadow-sm transition-all duration-300 hover:shadow-md hover:border-gray-200 dark:hover:border-gray-700">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium dark:text-[#EDEDEC]">Supervisor</h4>
                        </div>
                        <p class="text-sm dark:text-[#A1A09A] leading-relaxed">
                            Our supervisor guided us not only through the internal processes at Mobbiz but also shared valuable
                            insights into the key aspects of a real-world working environment that professionals need to
                            understand and consider.
                        </p>
                    </div>
                    
                    <!-- Environmental Conditions Section -->
                    <div class="group bg-white dark:bg-[#161615] rounded-xl border border-gray-100 dark:border-gray-800 p-6 shadow-sm transition-all duration-300 hover:shadow-md hover:border-gray-200 dark:hover:border-gray-700">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium dark:text-[#EDEDEC]">Environmental Conditions</h4>
                        </div>
                        <p class="text-sm dark:text-[#A1A09A] leading-relaxed">
                            The work environment is refreshingly balanced—it's relaxed and open, so we never feel stifled;
                            instead, we're encouraged to ask questions freely and learn continuously. Despite the light
                            atmosphere, professionalism remains at the forefront, making it an enriching and accommodating
                            space to grow.
                        </p>
                    </div>
                    
                    <!-- Self-assessment Section -->
                    <div class="group bg-white dark:bg-[#161615] rounded-xl border border-gray-100 dark:border-gray-800 p-6 shadow-sm transition-all duration-300 hover:shadow-md hover:border-gray-200 dark:hover:border-gray-700">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <h4 class="text-lg font-medium dark:text-[#EDEDEC]">Self-assessment</h4>
                        </div>
                        <p class="text-sm dark:text-[#A1A09A] leading-relaxed">
                            Throughout this experience, I honed my multitasking skills by effectively balancing the concurrent
                            demands of my capstone project and internship responsibilities. Despite facing various challenges, I
                            optimized my time management to consistently deliver outstanding, high-quality results.
                        </p>
                    </div>
                </div>
                
                <!-- General Section - Full Width -->
                <div class="bg-gradient-to-r from-[#FDFDFC] to-white dark:from-[#0a0a0a] dark:to-[#161615] rounded-xl border border-gray-100 dark:border-gray-800 p-6 mb-8 shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-[#fff2f2] dark:bg-[#1D0002] flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#f53003] dark:text-[#FF4433]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-lg font-medium dark:text-[#EDEDEC]">General Assessment</h4>
                    </div>
                    <p class="text-base dark:text-[#A1A09A] leading-relaxed">
                        Through this internship, I worked in a dynamic yet supportive environment that honed my technical
                        and interpersonal skills. With expert guidance and real-world tasks, I built the confidence to
                        transition seamlessly into professional roles.
                    </p>
                </div>
                
                <!-- Reflection Notes with Quote Style -->
                <div class="relative bg-[#fff2f2] dark:bg-[#1D0002] rounded-xl border-l-4 border-[#f53003] dark:border-[#FF4433] p-8 mb-6 shadow-sm">
                    <svg class="absolute top-4 left-4 h-8 w-8 text-[#f53003]/20 dark:text-[#FF4433]/20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h1m0 0h-1m1 0v4m-1-4h-1m1 0h1m-1 0v4m-1-4h-1m1 0h1m-1 0v4m-1-4h-1m1 0h1m-1 0v4m-2.5 3.5a2.5 2.5 0 11-.001-5.001A2.5 2.5 0 0112.5 19zM12.5 16a2.5 2.5 0 100-5A2.5 2.5 0 0012.5 16zM12.5 19a2.5 2.5 0 110-5A2.5 2.5 0 0112.5 19z" />
                    </svg>
                    <p class="text-sm dark:text-[#A1A09A]">
                        "The internship experience has been a transformative journey, equipping me with invaluable skills and insights. 
                        I am grateful for the opportunity to learn and grow in such a supportive environment."
                    </p>
                    <div class="text-right mt-4">
                        <span class="font-medium dark:text-[#EDEDEC]">Dale C. Decain</span>
                    </div>
                </div>
            </div>            
        </div>
        <!-- Chapter navigation -->
        <div class="flex justify-between mt-16">
            <a href="#chapter-2" class="group px-6 py-3 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] border border-[#f53003] dark:border-[#FF4433] rounded-md hover:bg-[#f53003] hover:text-white dark:hover:bg-[#FF4433] dark:hover:text-[#1D0002] transition-all duration-300 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span>Previous: Chapter 2</span>
            </a>
            <a href="#chapter-4" class="group px-6 py-3 bg-[#fff2f2] dark:bg-[#1D0002] text-[#f53003] dark:text-[#FF4433] border border-[#f53003] dark:border-[#FF4433] rounded-md hover:bg-[#f53003] hover:text-white dark:hover:bg-[#FF4433] dark:hover:text-[#1D0002] transition-all duration-300 flex items-center justify-center">
                <span>Next: Chapter 4</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
        </div>
    </div>
</div>