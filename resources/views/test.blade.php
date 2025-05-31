<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<!DOCTYPE html>
<html lang="en" x-data="{
    showCourseInfo: null,
    showEnrollForm: null,
    mobileMenuOpen: false
}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Lab - Digital & Language Skills Training in Nepal</title>
    <meta name="description"
        content="Practical computer and language courses in Nepal. Learn graphic design, programming, web development, English, Korean and more.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        section {
            scroll-margin-top: 100px;
        }

        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(to right, #f97316, #ef4444);
        }
    </style>
</head>

<body class="bg-white text-gray-800 font-sans antialiased">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold text-gray-900 flex items-center">
                <span class="gradient-text">Computer Lab</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="#courses" class="font-medium hover:text-orange-500 transition-colors">Courses</a>
                <a href="#about" class="font-medium hover:text-orange-500 transition-colors">About</a>
                <a href="#pricing" class="font-medium hover:text-orange-500 transition-colors">Pricing</a>
                <a href="#testimonials" class="font-medium hover:text-orange-500 transition-colors">Testimonials</a>
                <a href="#contact" class="font-medium hover:text-orange-500 transition-colors">Contact</a>
            </nav>

            <div class="flex items-center space-x-4">
                <button
                    class="hidden md:block bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full font-medium hover:shadow-lg transition-all">
                    Sign Up
                </button>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false" class="md:hidden bg-white py-4 px-4 shadow-lg"
            x-transition>
            <div class="flex flex-col space-y-4">
                <a href="#courses" class="font-medium hover:text-orange-500 transition-colors">Courses</a>
                <a href="#about" class="font-medium hover:text-orange-500 transition-colors">About</a>
                <a href="#pricing" class="font-medium hover:text-orange-500 transition-colors">Pricing</a>
                <a href="#testimonials" class="font-medium hover:text-orange-500 transition-colors">Testimonials</a>
                <a href="#contact" class="font-medium hover:text-orange-500 transition-colors">Contact</a>
                <button
                    class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full font-medium">
                    Sign Up
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-gray-50 to-white py-20 md:py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                Empowering Nepal with <span class="gradient-text">digital & language skills</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto mb-10">
                Practical, hands-on training in tech and communication skills to boost your career and personal growth.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#courses"
                    class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-3 rounded-full font-bold hover:shadow-lg transition-all">
                    Explore Courses
                </a>
                <a href="#contact"
                    class="border-2 border-orange-500 text-orange-500 px-8 py-3 rounded-full font-bold hover:bg-orange-50 transition-all">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">About <span class="gradient-text">Computer
                            Lab</span></h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto"></div>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-xl font-semibold mb-4 text-gray-900">Our Story</h3>
                        <p class="text-gray-600 mb-6">
                            Founded in 2020, Computer Lab has grown to become a leading provider of practical digital
                            and language education in Nepal. We bridge the gap between traditional education and
                            real-world job requirements.
                        </p>
                        <h3 class="text-xl font-semibold mb-4 text-gray-900">Mission</h3>
                        <p class="text-gray-600">
                            To empower Nepali youth with in-demand skills that lead to employment, entrepreneurship, and
                            personal growth.
                        </p>
                    </div>

                    <div>
                        <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                            <h3 class="text-xl font-semibold mb-4 text-gray-900">Why Choose Us?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-orange-500 mr-3" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Hands-on, practical training approach</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-orange-500 mr-3" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Industry-experienced instructors</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-orange-500 mr-3" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Affordable pricing with scholarships</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-6 w-6 text-orange-500 mr-3" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-600">Job placement assistance</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Our <span class="gradient-text">Courses</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Practical courses designed to give you job-ready skills in technology and languages.
                </p>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <template
                    x-for="(course, index) in [
          { 
            title: 'Computer Basics', 
            icon: '💻',
            topics: ['Introduction to Computers', 'Operating Systems', 'File Management', 'Internet & Email Basics'],
            duration: '4 Weeks',
            price: 'Rs. 6,500'
          },
          { 
            title: 'Graphic Design', 
            icon: '🎨',
            topics: ['Adobe Photoshop', 'Adobe Illustrator', 'Canva & Tools', 'Design Principles'],
            duration: '8 Weeks',
            price: 'Rs. 12,000'
          },
          { 
            title: 'Web Development', 
            icon: '🌐',
            topics: ['HTML, CSS, JavaScript', 'Responsive Design', 'WordPress CMS', 'Hosting & Deployment'],
            duration: '10 Weeks',
            price: 'Rs. 15,000'
          },
          { 
            title: 'Programming', 
            icon: '👨‍💻',
            topics: ['Python Basics', 'C Programming', 'Java Fundamentals', 'Logic Building'],
            duration: '12 Weeks',
            price: 'Rs. 18,000'
          },
          { 
            title: 'Video Editing', 
            icon: '🎬',
            topics: ['Premiere Pro', 'DaVinci Resolve', 'YouTube Editing', 'Motion Graphics'],
            duration: '8 Weeks',
            price: 'Rs. 12,000'
          },
          { 
            title: 'English Language', 
            icon: '🇬🇧',
            topics: ['Grammar & Vocabulary', 'Spoken English', 'Writing Skills', 'Interview Practice'],
            duration: '6 Weeks',
            price: 'Rs. 8,500'
          },
          { 
            title: 'Korean (TOPIK)', 
            icon: '🇰🇷',
            topics: ['Hangul Writing', 'Basic Grammar', 'Speaking Practice', 'TOPIK Exam Prep'],
            duration: '12 Weeks',
            price: 'Rs. 15,000'
          },
          { 
            title: 'Computer Hardware', 
            icon: '🖥️',
            topics: ['PC Components', 'Assembling PCs', 'OS Installation', 'Troubleshooting'],
            duration: '6 Weeks',
            price: 'Rs. 10,000'
          },
          { 
            title: 'Mobile Repairing', 
            icon: '📱',
            topics: ['Hardware Basics', 'Software Issues', 'Flashing ROMs', 'Repair Tools'],
            duration: '8 Weeks',
            price: 'Rs. 14,000'
          }
        ]"
                    :key="index">
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3" x-text="course.icon"></span>
                                <h3 class="text-xl font-bold text-gray-800" x-text="course.title"></h3>
                            </div>

                            <ul class="space-y-2 mb-6">
                                <template x-for="topic in course.topics">
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span x-text="topic" class="text-gray-600"></span>
                                    </li>
                                </template>
                            </ul>

                            <div class="flex justify-between items-center text-sm text-gray-500 mb-4">
                                <span x-text="course.duration"></span>
                                <span class="font-bold text-orange-500" x-text="course.price"></span>
                            </div>

                            <div class="flex space-x-3">
                                <button @click="showCourseInfo = index"
                                    class="flex-1 border border-orange-500 text-orange-500 px-4 py-2 rounded-lg hover:bg-orange-50 transition-colors">
                                    Details
                                </button>
                                <button @click="showEnrollForm = index"
                                    class="flex-1 bg-gradient-to-r from-orange-500 to-red-500 text-white px-4 py-2 rounded-lg hover:shadow-md transition-all">
                                    Enroll Now
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <!-- Course Detail Modal -->
        <div x-show="showCourseInfo !== null" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4"
            @click.away="showCourseInfo = null">
            <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto" @click.stop>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold"
                            x-text="[
              'Computer Basics', 'Graphic Design', 'Web Development', 'Programming', 
              'Video Editing', 'English Language', 'Korean (TOPIK)', 'Computer Hardware', 
              'Mobile Repairing'
            ][showCourseInfo]">
                        </h3>
                        <button @click="showCourseInfo = null" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">Course Description</h4>
                            <p class="text-gray-600">
                                This comprehensive course provides hands-on training with practical exercises and
                                real-world projects.
                                You'll gain job-ready skills from industry-experienced instructors.
                            </p>
                        </div>

                        <div>
                            <h4 class="font-semibold text-gray-900 mb-2">What You'll Learn</h4>
                            <ul class="space-y-2">
                                <template
                                    x-for="topic in [
                  { title: 'Computer Basics', items: ['Computer fundamentals', 'Using Windows/Linux', 'Managing files and folders', 'Internet safety and email'] },
                  { title: 'Graphic Design', items: ['Photo editing with Photoshop', 'Vector graphics with Illustrator', 'Social media designs with Canva', 'Building a design portfolio'] },
                  { title: 'Web Development', items: ['Building websites with HTML/CSS', 'Adding interactivity with JavaScript', 'Creating WordPress sites', 'Deploying websites online'] },
                  { title: 'Programming', items: ['Python programming basics', 'C language fundamentals', 'Java programming concepts', 'Building small projects'] },
                  { title: 'Video Editing', items: ['Professional editing with Premiere', 'Color grading with DaVinci', 'YouTube content creation', 'Basic motion graphics'] },
                  { title: 'English Language', items: ['Grammar and vocabulary', 'Conversational English', 'Business writing', 'Interview preparation'] },
                  { title: 'Korean (TOPIK)', items: ['Hangul alphabet', 'Basic grammar structures', 'Conversation practice', 'TOPIK exam preparation'] },
                  { title: 'Computer Hardware', items: ['PC components and assembly', 'Installing operating systems', 'Driver installation', 'Basic troubleshooting'] },
                  { title: 'Mobile Repairing', items: ['Mobile hardware components', 'Common software issues', 'Flashing and ROM installation', 'Using repair tools'] }
                ][showCourseInfo].items">
                                    <li class="flex items-start">
                                        <svg class="h-5 w-5 text-orange-500 mr-2 mt-0.5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span x-text="topic" class="text-gray-600"></span>
                                    </li>
                                </template>
                            </ul>
                        </div>

                        <div class="pt-4">
                            <button @click="showEnrollForm = showCourseInfo; showCourseInfo = null"
                                class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-lg font-bold hover:shadow-lg transition-all">
                                Enroll Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enrollment Form Modal -->
        <div x-show="showEnrollForm !== null" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4"
            @click.away="showEnrollForm = null">
            <div class="bg-white rounded-xl max-w-md w-full max-h-[90vh] overflow-y-auto" @click.stop>
                <div class="p-6">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h3 class="text-2xl font-bold">Enroll in <span
                                    x-text="[
                'Computer Basics', 'Graphic Design', 'Web Development', 'Programming', 
                'Video Editing', 'English Language', 'Korean (TOPIK)', 'Computer Hardware', 
                'Mobile Repairing'
              ][showEnrollForm]"></span>
                            </h3>
                            <p class="text-orange-500 font-medium"
                                x-text="[
                'Rs. 6,500', 'Rs. 12,000', 'Rs. 15,000', 'Rs. 18,000', 
                'Rs. 12,000', 'Rs. 8,500', 'Rs. 15,000', 'Rs. 10,000', 
                'Rs. 14,000'
              ][showEnrollForm]">
                            </p>
                        </div>
                        <button @click="showEnrollForm = null" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full
                                Name</label>
                            <input type="text" id="name" placeholder="Your full name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input type="email" id="email" placeholder="Your email address"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                Number</label>
                            <input type="tel" id="phone" placeholder="Your phone number"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label for="education" class="block text-sm font-medium text-gray-700 mb-1">Education
                                Level</label>
                            <select id="education"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                <option value="">Select your education level</option>
                                <option value="school">School Student</option>
                                <option value="highschool">High School</option>
                                <option value="bachelor">Bachelor's Degree</option>
                                <option value="master">Master's Degree</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-lg font-bold hover:shadow-lg transition-all">
                                Submit Enrollment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Affordable <span class="gradient-text">Pricing</span>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Quality education at accessible prices with flexible payment options.
                </p>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                    <h3 class="text-xl font-bold text-center mb-4">Basic Courses</h3>
                    <p class="text-3xl font-bold text-center mb-6">Rs. 6,500 - 10,000</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Computer Basics</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>English Language</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Computer Hardware</span>
                        </li>
                    </ul>
                    <button
                        class="w-full border border-orange-500 text-orange-500 px-6 py-2 rounded-lg font-medium hover:bg-orange-50 transition-colors">
                        Learn More
                    </button>
                </div>

                <div
                    class="bg-gradient-to-b from-orange-500 to-red-500 p-8 rounded-xl text-white transform scale-105 shadow-lg">
                    <div class="text-center mb-2">
                        <span
                            class="inline-block bg-white text-orange-500 px-3 py-1 rounded-full text-sm font-bold">POPULAR</span>
                    </div>
                    <h3 class="text-xl font-bold text-center mb-4">Professional Courses</h3>
                    <p class="text-3xl font-bold text-center mb-6">Rs. 12,000 - 18,000</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-white mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Graphic Design</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-white mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Web Development</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-white mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Programming</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-white mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Video Editing</span>
                        </li>
                    </ul>
                    <button
                        class="w-full bg-white text-orange-500 px-6 py-2 rounded-lg font-bold hover:bg-gray-100 transition-colors">
                        Enroll Now
                    </button>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl border border-gray-200">
                    <h3 class="text-xl font-bold text-center mb-4">Language Courses</h3>
                    <p class="text-3xl font-bold text-center mb-6">Rs. 8,500 - 15,000</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>English Language</span>
                        </li>
                        <li class="flex items-center">
                            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>Korean (TOPIK)</span>
                        </li>
                    </ul>
                    <button
                        class="w-full border border-orange-500 text-orange-500 px-6 py-2 rounded-lg font-medium hover:bg-orange-50 transition-colors">
                        Learn More
                    </button>
                </div>
            </div>

            <div class="mt-12 bg-orange-50 border border-orange-200 rounded-xl p-6 max-w-3xl mx-auto">
                <h3 class="text-xl font-bold text-center mb-4 text-orange-600">Scholarships & Discounts</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-orange-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4H5z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Student Discount</h4>
                            <p class="text-gray-600 text-sm">10% off for school and college students with valid ID</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-orange-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Scholarships</h4>
                            <p class="text-gray-600 text-sm">Need-based scholarships available for deserving students
                            </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-orange-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Group Discount</h4>
                            <p class="text-gray-600 text-sm">15% off for groups of 3 or more students</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="h-6 w-6 text-orange-500 mr-3 mt-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <div>
                            <h4 class="font-semibold text-gray-900">Referral Bonus</h4>
                            <p class="text-gray-600 text-sm">Get Rs. 500 credit for each successful referral</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Student <span
                        class="gradient-text">Testimonials</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Hear what our students say about their learning experience at Computer Lab.
                </p>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500 font-bold mr-4">
                            AS</div>
                        <div>
                            <h4 class="font-semibold">Anita Shrestha</h4>
                            <p class="text-sm text-gray-500">Graphic Design Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "The graphic design course transformed my skills completely. I went from zero knowledge to
                        creating professional designs in just 2 months. Now I'm freelancing and earning money!"
                    </p>
                    <div class="flex mt-4 text-orange-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500 font-bold mr-4">
                            RP</div>
                        <div>
                            <h4 class="font-semibold">Rajesh Poudel</h4>
                            <p class="text-sm text-gray-500">Web Development Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "After completing the web development course, I got hired as a junior developer at a local IT
                        company. The practical approach and portfolio projects were key to landing my first job."
                    </p>
                    <div class="flex mt-4 text-orange-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-md">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-orange-500 font-bold mr-4">
                            SK</div>
                        <div>
                            <h4 class="font-semibold">Sunita Khadka</h4>
                            <p class="text-sm text-gray-500">Korean Language Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600">
                        "I passed TOPIK Level 2 after taking the Korean course here. The teachers are very supportive
                        and the materials are excellent. Now I'm preparing to apply for jobs in Korea!"
                    </p>
                    <div class="flex mt-4 text-orange-400">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Contact <span class="gradient-text">Us</span></h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Have questions? Get in touch with our team for more information.
                </p>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto mt-4"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div>
                    <h3 class="text-xl font-semibold mb-6">Contact Information</h3>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-4 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <div>
                                <h4 class="font-medium text-gray-900">Phone</h4>
                                <a href="tel:+97798240444646"
                                    class="text-gray-600 hover:text-orange-500 transition-colors">+977 98240444646</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-4 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <div>
                                <h4 class="font-medium text-gray-900">Email</h4>
                                <a href="mailto:computerlab.p@gmail.com"
                                    class="text-gray-600 hover:text-orange-500 transition-colors">computerlab.p@gmail.com</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-4 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div>
                                <h4 class="font-medium text-gray-900">Location</h4>
                                <p class="text-gray-600">Putalisadak, Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500 mr-4 mt-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <div>
                                <h4 class="font-medium text-gray-900">Opening Hours</h4>
                                <p class="text-gray-600">Sunday-Friday: 7AM - 7PM</p>
                                <p class="text-gray-600">Saturday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h4 class="font-medium text-gray-900 mb-4">Follow Us</h4>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 hover:bg-orange-500 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 hover:bg-orange-500 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 hover:bg-orange-500 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-700 hover:bg-orange-500 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-semibold mb-6">Send Us a Message</h3>
                    <form class="space-y-4">
                        <div>
                            <label for="contact-name" class="block text-sm font-medium text-gray-700 mb-1">Your
                                Name</label>
                            <input type="text" id="contact-name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label for="contact-email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                Address</label>
                            <input type="email" id="contact-email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label for="contact-subject"
                                class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" id="contact-subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label for="contact-message"
                                class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="contact-message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500"></textarea>
                        </div>

                        <button type="submit"
                            class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-lg font-bold hover:shadow-lg transition-all">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Computer Lab</h3>
                    <p class="text-gray-400">
                        Empowering Nepal with practical digital and language skills through hands-on training and
                        career-focused education.
                    </p>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#courses" class="text-gray-400 hover:text-white transition-colors">Courses</a>
                        </li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">About Us</a>
                        </li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white transition-colors">Pricing</a>
                        </li>
                        <li><a href="#testimonials"
                                class="text-gray-400 hover:text-white transition-colors">Testimonials</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Contact</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Courses</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Computer
                                Basics</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Graphic
                                Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Web
                                Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Programming</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Korean
                                Language</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Putalisadak, Kathmandu, Nepal</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span>+977 98240444646</span>
                        </li>
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 mt-0.5" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span>computerlab.p@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">
                    &copy; 2023 Computer Lab. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Privacy
                        Policy</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Terms of
                        Service</a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors text-sm">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
