<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-\latihan.htmlscale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">\
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    center: true,
                    padding: '30px',
                },
                extend: {
                    screens: {
                        '2xl': '1320px',
                    },
                }
            }
        }
    </script>
    <script>
        import {
            Tab,
            initTWE,
        } from "tw-elements";

        initTWE({
            Tab
        });
    </script>

    <style>
        .hamburger-active>span:nth-child(1) {
            transform: rotate(45deg);
        }

        .hamburger-active>span:nth-child(3) {
            transform: rotate(-45deg);
        }

        .hamburger-active>span:nth-child(2) {
            transform: scale(0);
        }

        .nav-blur {
            backdrop-filter: blur(5px);
            box-shadow: inset 0 -1px 0 0 rgba(0, 0, 0, 0.1);

        }

        ::-webkit-scrollbar {
            width: 7px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(79 70 229);
            border-radius: 10px;
        }

        .wrapper {
            display: flex;
        }

        .wrapper .text {
            font-weight: 400;
        }

        .wrapper .dynamic-text {
            margin-left: 10px;
            height: 90px;
            margin-top: -26px;
            line-height: 90px;
            overflow: hidden;
        }

        .dynamic-text li {
            list-style: none;
            position: relative;
            top: 0;
            animation: slide 12s steps(4) infinite;
        }

        @keyframes slide {
            100% {
                top: -360px;
            }
        }

        .dynamic-text li span {
            position: relative;
            margin: 5px 0;
            line-height: 90px;
        }

        .dynamic-text li span::after {
            content: '';
            position: absolute;
            left: 0;
            top: 2px;
            height: 40px;
            width: 100%;
            background-color: white;
            border-left: 2px solid blue;
            animation: typing 3s steps(14) infinite;
        }

        @keyframes typing {

            40%,
            60% {
                left: calc(100%);
            }

            100% {
                left: 0;
            }
        }
    </style>

</head>

<body>

    <!-- header start -->
    <header class="bg-white bg-opacity-70 nav-blur fixed top-0 left-0 w-full flex items-center z-20">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#hero" class="font-bold text-xl text-indigo-600 block py-6">RichieReuben.</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" class="block absolute right-4 lg:hidden">
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-slate-800 transition duration-300 ease-in-out origin-top-left"></span>
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-slate-800 transition duration-300 ease-in-out"></span>
                        <span
                            class="w-[30px] h-[2px] my-2 block bg-slate-800 transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base text-slate-900 py-2 mx-8 group hover:text-indigo-500 flex font-semibold">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base text-slate-900 py-2 mx-8 group hover:text-indigo-500 flex font-semibold">About
                                    Me</a>
                            </li>
                            <li class="group">
                                <a href="#experience"
                                    class="text-base text-slate-900 py-2 mx-8 group hover:text-indigo-500 flex font-semibold">Experience</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base text-slate-900 py-2 mx-8 group hover:text-indigo-500 flex font-semibold">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#skill"
                                    class="text-base text-slate-900 py-2 mx-8 group hover:text-indigo-500 flex font-semibold">Skill</a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class="text-base text-slate-900 py-2 mx-8 group hover:text-indigo-500 flex font-semibold">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- hero section start-->
    <section id="home" class="pt-40">
        <div class="container">
            <div class="flex flex-wrap mx-7">
                <div class="w-full self-center px-4 md:w-1/2 pl-7" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="text-slate-500 sm:text-3xl ">Hello All 🙌, My Self <span
                            class="block font-bold text-slate-900 text-7xl mt-2 mb-2 lg:2xl">Richie <span
                                class="text-indigo-600">Reuben</span> Hermanto</span></h1>
                    <div class="wrapper">
                        <div class="text-slate-500 mb-6 text-3xl text">And I'm</div>
                        <ul class="dynamic-text font-semibold text-3xl text-indigo-600">
                            <li><span>Web Developer</span></li>
                            <li><span>UI/UX Designer</span></li>
                            <li><span>App Developer</span></li>
                            <li><span>Student</span></li>
                        </ul>
                    </div>

                    {{-- <p class="font-medium text-slate-400 mb-9 leading-relaxed lg:text-lg">I am a second-semester undergraduate student majoring in Informatics at UC Surabaya. Currently seeking to gain experience. I am highly motivated for lifelong learning, critical in improvisation, and enjoy socializing.</p> --}}
                    <a href="#"
                        class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-4 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                        Contact me
                    </a>
                </div>
                <div class="w-full self-end px-4 md:w-1/2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="mt-10 relative md:mt-9 lg:right-0">
                        <img src="{{ asset('images/x.png') }}" alt="" class="max-w-full mx-auto">
                        <span class="absolute -top-14 -z-10 left-1/2 -translate-x-44 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#4F46E5"
                                    d="M34.7,-52C45.7,-47,55.7,-38.5,65.1,-27.1C74.5,-15.6,83.2,-1.2,83.8,13.9C84.5,28.9,77,44.6,65.5,55.3C54,66.1,38.4,71.9,24,71.3C9.6,70.8,-3.6,63.9,-14.7,57.3C-25.8,50.7,-34.8,44.3,-45.1,36.7C-55.4,29.1,-67,20.2,-71.7,8.4C-76.4,-3.4,-74.2,-18.2,-65.7,-27.1C-57.1,-36.1,-42.2,-39.2,-30.2,-43.7C-18.2,-48.2,-9.1,-54,1.4,-56.2C11.9,-58.4,23.8,-56.9,34.7,-52Z"
                                    transform="translate(100 100)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us start -->
    <section class="">
        <div  class="mx-auto max-w-screen-2xl px-4 py-16 pt-44 sm:px-6 lg:px-8">
            <div id="about" class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                <div class="relative z-10 lg:py-16">
                    <div class="relative h-64 sm:h-80 lg:h-full">
                        <img alt="" src="{{ asset('images/hai.jpg') }}"
                            class="absolute inset-0 h-full w-full object-cover filter grayscale transition duration-500 hover:filter-none" />
                    </div>
                </div>

                <div class="relative flex items-center bg-slate-100">
                    <span class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-24 lg:bg-slate-100"></span>

                    <div class="p-8 sm:p-16 lg:px-14">
                        <h4 class="font-bold text-lg text-indigo-600 mb-2 uppercase">About Me</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-4 lg:text-4xl">Who Am I?</h2>

                        <p class="mt-4 text-gray-600 pb-5">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et consequatur deserunt ad soluta,
                            quaerat, ipsam, eveniet cumque porro adipisci mollitia in facilis rerum dolor quidem quia ab
                            ipsum itaque libero doloremque consectetur voluptatem iste quas. Recusandae, veritatis
                            dicta, aliquam modi sit placeat labore odio ipsum inventore laborum in magnam quaerat? Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Rem omnis iste maxime? Debitis aliquam
                            quia doloremque est sit, nam, cupiditate sequi repudiandae quibusdam ducimus laudantium ex
                            blanditiis quam ipsa. Voluptates?
                        </p>
                        <hr class="border border-slate-300 border-solid">
                        <div class="mt-4">
                            <div class="flex gap-[89px]">
                                <p>Name : Richie Reuben H.</p>
                                <p>From : Surabaya, Indonesia</p>
                            </div>
                            <div class="flex gap-[176px] mt-4">
                                <p>Age : 19 Y.O</p>
                                <p>Email : richiereubenh@gmail.com</p>
                            </div>
                        </div>
                        <a href="#"
                            class="mt-8 inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500">
                            View my CV here!
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <section id="experience" class="bg-slate-900">
            <div class="container py-32">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-10">
                        <h4 class="font-bold text-lg text-indigo-400 mb-2 uppercase">Experience</h4>
                        <h2 class="font-bold text-white text-3xl mb-4 lg:text-4xl">My Project</h2>
                    </div>
                </div>
                <div x-data="{
                    openTab: 1,
                    activeClasses: 'text-indigo-200 bg-indigo-900',
                    inactiveClasses: 'text-slate-200 hover:bg-indigo-900 transition duration-300'
                }" class="max-w-4xl mx-auto flex flex-col lg:flex-row lg:items-start">
                    <ul class="flex flex-row lg:flex-col pb-8 lg:pb-0 lg:w-32 lg:mr-4">
                        <li x-on:click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses"
                            class=" ">
                            <p class="w-full inline-block py-3 px-4 font-semibold">
                                Education
                            </p>
                        </li>
                        <li x-on:click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses"
                            class=" ">
                            <p class="w-full inline-block py-3 px-4 font-semibold">
                                Awards
                            </p>
                        </li>
                        <li x-on:click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses"
                            class=" ">
                            <p class="w-full inline-block py-3 px-4 font-semibold">
                                Education
                            </p>
                        </li>
                        <li x-on:click="openTab = 4" :class="openTab === 4 ? activeClasses : inactiveClasses"
                            class=" ">
                            <p class="w-full inline-block py-3 px-4 font-semibold">
                                Ceertification
                            </p>
                        </li>
                    </ul>
                    <div class="pl-8 w-full px-4 overflow-y-auto h-[400px] lg:w-4/5">
                        <div x-show="openTab === 1">
                            <p class="text-white text-xl font-semibold">Vice Head of Student Council Information and
                                Communication Departments <span class="text-indigo-500">@Universitas Ciputra
                                    Surabaya</span></p>
                            <p class="text-slate-300 text-lg font-light">September 2023 - Present</p>
                            <ol class="text-slate-100 mt-2 list-disc">
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis aperiam qui
                                    asperiores consequuntur quaerat perspiciatis voluptatum, corporis maiores accusamus
                                    laboriosam pariatur veniam eius ab id eveniet repudiandae quae tempora voluptate?
                                </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quia quod, animi
                                    eos alias eveniet ducimus! Non eos ducimus tempore.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sequi fugiat ea minus
                                    molestiae officiis tempore quidem, animi possimus dicta.</li>
                            </ol>
                            <p class="text-white text-xl font-semibold mt-8">Vice Head of Student Council Information
                                and Communication Departments <span class="text-indigo-500">@Universitas Ciputra
                                    Surabaya</span></p>
                            <p class="text-slate-300 text-lg font-light">September 2023 - Present</p>
                            <ol class="text-slate-100 mt-2 list-disc">
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis aperiam qui
                                    asperiores consequuntur quaerat perspiciatis voluptatum, corporis maiores accusamus
                                    laboriosam pariatur veniam eius ab id eveniet repudiandae quae tempora voluptate?
                                </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quia quod, animi
                                    eos alias eveniet ducimus! Non eos ducimus tempore.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sequi fugiat ea minus
                                    molestiae officiis tempore quidem, animi possimus dicta.</li>
                            </ol>
                            <p class="text-white text-xl font-semibold mt-8">Vice Head of Student Council Information
                                and Communication Departments <span class="text-indigo-500">@Universitas Ciputra
                                    Surabaya</span></p>
                            <p class="text-slate-300 text-lg font-light">September 2023 - Present</p>
                            <ol class="text-slate-100 mt-2 list-disc">
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis aperiam qui
                                    asperiores consequuntur quaerat perspiciatis voluptatum, corporis maiores accusamus
                                    laboriosam pariatur veniam eius ab id eveniet repudiandae quae tempora voluptate?
                                </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quia quod, animi
                                    eos alias eveniet ducimus! Non eos ducimus tempore.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sequi fugiat ea minus
                                    molestiae officiis tempore quidem, animi possimus dicta.</li>
                            </ol>
                        </div>
                        <div x-show="openTab === 2">
                            <p class="text-white text-xl font-semibold">Juara 3 Lomba Desain UI/UX Tingkat Nasional
                                <span class="text-indigo-500">@LOKreatif</span>
                            </p>
                            <p class="text-slate-300 text-lg font-light">September 2023 - Present</p>
                            <ol class="text-slate-100 mt-2 list-disc">
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis aperiam qui
                                    asperiores consequuntur quaerat perspiciatis voluptatum, corporis maiores accusamus
                                    laboriosam pariatur veniam eius ab id eveniet repudiandae quae tempora voluptate?
                                </li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quia quod, animi
                                    eos alias eveniet ducimus! Non eos ducimus tempore.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sequi fugiat ea minus
                                    molestiae officiis tempore quidem, animi possimus dicta.</li>
                            </ol>
                        </div>
                        <div x-show="openTab === 3">Tab 3 content</div>
                        <div x-show="openTab === 4">Tab 4 content</div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="pt-36 pb-32 bg-slate-100">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-5xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-lg text-indigo-600 mb-2 uppercase">Porfolio</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-4 lg:text-4xl">My Project</h2>
                        <p class="font-medium text-medium text-slate-500 md:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis</p>
                    </div>
                </div>
                <div class="w-full px-4 flex justify-center gap-8 flex-wrap">
                    <x-card-component
                        image-src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        title="Javascript Bootcamp for Absolute" duration="1:34:23" parts="3"
                        description="Javascript Bootcamp for Absolute Beginners" />
                        <x-card-component
                        image-src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        title="Javascript Bootcamp for Absolute" duration="1:34:23" parts="3"
                        description="Javascript Bootcamp for Absolute Beginners" />
                        <x-card-component
                        image-src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        title="Javascript Bootcamp for Absolute" duration="1:34:23" parts="3"
                        description="Javascript Bootcamp for Absolute Beginners" />
                        <x-card-component
                        image-src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        title="Javascript Bootcamp for Absolute" duration="1:34:23" parts="3"
                        description="Javascript Bootcamp for Absolute Beginners" />
                        <x-card-component
                        image-src="https://images.unsplash.com/photo-1541701494587-cb58502866ab?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80"
                        title="Javascript Bootcamp for Absolute" duration="1:34:23" parts="3"
                        description="Javascript Bootcamp for Absolute Beginners" />
                </div>
            </div>
        </section>
        <section id="skill">
            <div class="container mx-auto py-24">
                <div class="w-full px-4">
                    <div class="max-w-5xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-lg text-indigo-600 mb-2 uppercase">Skill</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-4 lg:text-4xl">My Tech Stack and Software</h2>
                        <p class="font-medium text-medium text-slate-500 md:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis</p>
                    </div>
                </div>
              
                <div class="flex flex-wrap gap-4 justify-center">
                    <!-- Backend -->
                    <div class="bg-gray-900 p-10 rounded-lg w-full lg:w-2/5 shadow-2xl">
                        <h3 class="text-2xl font-semibold mb-4 text-white pb-3 text-center">Web Development</h3>
                        <div class="flex flex-wrap gap-3 justify-center">
                            <x-tech-component image="{{ asset('images/techstacklogo/html.svg') }}" text="HTML"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/css.png') }}" text="CSS"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/js.svg') }}" text="Javascript"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/php.svg') }}" text="PHP"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/mysql.svg') }}" text="MySQL"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/laravel.svg') }}" text="Laravel"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/tailwind.png') }}" text="Tailwind CSS"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/cdnlogo.com_alpine.svg') }}" text="Alpine JS"></x-tech-component>
                        </div>
                    </div>
                    <div class="bg-gray-900 p-10 rounded-lg w-full lg:w-2/5 shadow-2xl">
                        <h3 class="text-2xl font-semibold mb-4 text-white pb-3 text-center">App Development</h3>
                        <div class="flex flex-wrap gap-3 justify-center">
                            <x-tech-component image="{{ asset('images/techstacklogo/java.svg') }}" text="Java"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/kotlin.svg') }}" text="Kotlin"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/jetpack.png') }}" text="Jetpack Compose"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/astudio.svg') }}" text="Android Studio"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/swift.svg') }}" text="Swift"></x-tech-component>
                        </div>
                        
                    </div>
                    <div class="bg-gray-900 p-10 rounded-lg w-full lg:w-2/5 shadow-2xl">
                        <h3 class="text-2xl font-semibold mb-4 text-white pb-3 text-center">Other Tools</h3>
                        <div class="flex flex-wrap gap-3 justify-center">
                            <x-tech-component image="{{ asset('images/techstacklogo/git.svg') }}" text="Git"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/github.svg') }}" text="Git Hub"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/vscode.svg') }}" text="VSCode"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/postman.png') }}" text="Postman"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/npm.svg') }}" text="NPM"></x-tech-component>
                            <x-tech-component image="{{ asset('images/techstacklogo/figma.svg') }}" text="Figma"></x-tech-component>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
          
        <!-- portofolio section start -->
        {{-- <section id="portfolio" class="pt-36 pb-32 bg-slate-100">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-lg text-teal-500 mb-2 uppercase">Porfolio</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-4 lg:text-4xl">My Project</h2>
                        <p class="font-medium text-medium text-slate-500 md:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis ullam
                            corrupti
                            enim consectetur. Recusandae!</p>
                    </div>
                </div>
                <div class="w-full px-4 flex flex-wrap justify-center">
                    <div
                        class="mb-12 p-4 max-w-lg md:w-1/2 hover:bg-white hover:-translate-y-3 rounded-xl transition duration-500">
                        <h3 class="font-semibold text-xl mb-5 uppercase text-slate-900">Personal Website</h3>
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="websendiril.png" alt="CSS">
                        </div>
                        <p class="font-medium text-base text-slate-500 mt-5">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellendus pariatur iste aliquid facilis quibusdam minus? Consequuntur
                            deleniti non sed beatae!</p>
                    </div>
                    <div
                        class="mb-12 p-4 max-w-lg md:w-1/2 hover:bg-white hover:-translate-y-3 rounded-xl transition duration-500">
                        <h3 class="font-semibold text-xl mb-5 uppercase text-slate-900">Student Council UC Website</h3>
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="web sc 3.png" alt="CSS">
                        </div>
                        <p class="font-medium text-base text-slate-500 mt-5">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellendus pariatur iste aliquid facilis quibusdam minus? Consequuntur
                            deleniti non sed beatae!</p>
                    </div>
                    <div
                        class="mb-12 p-4 max-w-lg md:w-1/2 hover:bg-white hover:-translate-y-3 rounded-xl transition duration-500">
                        <h3 class="font-semibold text-xl mb-5 uppercase text-slate-900">Redesign SC UC Website</h3>
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="sc redesign.png" alt="CSS">
                        </div>
                        <p class="font-medium text-base text-slate-500 mt-5">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellendus pariatur iste aliquid facilis quibusdam minus? Consequuntur
                            deleniti non sed beatae!</p>
                    </div>
                    <div
                        class="mb-12 p-4 max-w-lg md:w-1/2 hover:bg-white hover:-translate-y-3 rounded-xl transition duration-500">
                        <h3 class="font-semibold text-xl mb-5 uppercase text-slate-900">Creative Web Design</h3>
                        <div class="rounded-md shadow-md overflow-hidden">
                            <img src="ssweb.png" alt="CSS">
                        </div>
                        <p class="font-medium text-base text-slate-500 mt-5">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Repellendus pariatur iste aliquid facilis quibusdam minus? Consequuntur
                            deleniti non sed beatae!</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- portofolio section end -->
        <!-- about section start -->
        {{-- <section id="about" class="pt-56 pb-32">
            <div class="container">
                <div class="flex flex-wrap" data-aos="fade-up" data-aos-duration="2000">
                    <div class="w-full px-4 mb-10 md:w-1/2">
                        <h4 class="font-bold uppercase text-teal-500 text-lg mb-3">About Me</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-3 max-w-lg lg:text-4xl">Lorem ipsum dolor sit
                            amet
                            consectetur adipisicing.</h2>
                        <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Molestias quaerat voluptatem iure esse fuga vel sint porro
                            blanditiis temporibus! Illum!</p>
                    </div>
                    <div class="w-full px-4 md:w-1/2">
                        <h3 class="font-semibold text-slate-900 text-2xl mb-4 lg:text-3xl lg:pt-10">Get in Touch</h3>
                        <p class="font-medium text-base text-slate-500 max-w-xl mb-3 lg:text-lg">Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit. Est ipsum praesentium rem eaque quam quis commodi fugit
                            consequatur sequi suscipit.</p>
                        <div class="flex item-center">
                            <!-- IG -->
                            <a href="#" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-500 text-slate-500 hover:border-teal-500 hover:bg-teal-500 hover:text-white">
                                <svg class="fill-current" role="img" width="20" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>
                            <a href="#" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-500 text-slate-500 hover:border-teal-500 hover:bg-teal-500 hover:text-white">
                                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>LINE</title>
                                    <path
                                        d="M19.365 9.863c.349 0 .63.285.63.631 0 .345-.281.63-.63.63H17.61v1.125h1.755c.349 0 .63.283.63.63 0 .344-.281.629-.63.629h-2.386c-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63h2.386c.346 0 .627.285.627.63 0 .349-.281.63-.63.63H17.61v1.125h1.755zm-3.855 3.016c0 .27-.174.51-.432.596-.064.021-.133.031-.199.031-.211 0-.391-.09-.51-.25l-2.443-3.317v2.94c0 .344-.279.629-.631.629-.346 0-.626-.285-.626-.629V8.108c0-.27.173-.51.43-.595.06-.023.136-.033.194-.033.195 0 .375.104.495.254l2.462 3.33V8.108c0-.345.282-.63.63-.63.345 0 .63.285.63.63v4.771zm-5.741 0c0 .344-.282.629-.631.629-.345 0-.627-.285-.627-.629V8.108c0-.345.282-.63.63-.63.346 0 .628.285.628.63v4.771zm-2.466.629H4.917c-.345 0-.63-.285-.63-.629V8.108c0-.345.285-.63.63-.63.348 0 .63.285.63.63v4.141h1.756c.348 0 .629.283.629.63 0 .344-.282.629-.629.629M24 10.314C24 4.943 18.615.572 12 .572S0 4.943 0 10.314c0 4.811 4.27 8.842 10.035 9.608.391.082.923.258 1.058.59.12.301.079.766.038 1.08l-.164 1.02c-.045.301-.24 1.186 1.049.645 1.291-.539 6.916-4.078 9.436-6.975C23.176 14.393 24 12.458 24 10.314" />
                                </svg>
                            </a>
                            <a href="#" target="_blank"
                                class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-500 text-slate-500 hover:border-teal-500 hover:bg-teal-500 hover:text-white">
                                <svg width="20" class="fill-current" role="img" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>LinkedIn</title>
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- about section end -->
        {{-- <!-- client section start -->
        <section id="client" class="pt-36 pb-32 bg-slate-900">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-lg text-indigo-400 mb-2 uppercase">Clients</h4>
                        <h2 class="font-bold text-white text-3xl mb-4 lg:text-4xl">Work Together With</h2>
                        <p class="font-medium text-medium text-slate-400 md:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis ullam
                            corrupti
                            enim consectetur. Recusandae!</p>
                    </div>
                </div>
                <div class="w-full px-4">
                    <div class="flex flex-wrap item-center justify-center">
                        <a href="#"
                            class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                            <img src="gojek.svg" alt="gojek">
                        </a>
                        <a href="#"
                            class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                            <img src="tokopedia.svg" alt="gojek">
                        </a>
                        <a href="#"
                            class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                            <img src="google.svg" alt="gojek">
                        </a>
                        <a href="#"
                            class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 xl:mx-8">
                            <img src="traveloka.svg" alt="gojek">
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <!-- client section end -->
        <section id="blog" class="pt-36 pb-32 bg-slate-100">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-lg text-teal-500 mb-2 uppercase">Blog</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-4 lg:text-4xl">My Article</h2>
                        <p class="font-medium text-medium text-slate-500 md:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis ullam
                            corrupti
                            enim consectetur. Recusandae!</p>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="shadow-lg mb-10 bg-white rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/360x200?programming" alt="programming"
                                class="w-full">
                            <div class="px-8 py-6">
                                <h3>
                                    <a href=""
                                        class="block mb-3 font-semibold text-xl text-slate-800 hover:text-teal-500 transition duration-200 truncate">Programming
                                        Tips</a>
                                </h3>
                                <p class="font-medium text-base mb-4 text-slate-400">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Cumque consequatur similique tempore unde.</p>
                                <a href=""
                                    class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:bg-teal-700">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="shadow-lg mb-10 bg-white rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/360x200?keyboard" alt="programming" class="w-full">
                            <div class="px-8 py-6">
                                <h3>
                                    <a href=""
                                        class="block mb-3 font-semibold text-xl text-slate-800 hover:text-teal-500 transition duration-200 truncate">My
                                        Keyboard</a>
                                </h3>
                                <p class="font-medium text-base mb-4 text-slate-400">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Cumque consequatur similique tempore unde.</p>
                                <a href=""
                                    class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:bg-teal-700">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="shadow-lg mb-10 bg-white rounded-xl overflow-hidden">
                            <img src="https://source.unsplash.com/360x200?reactjs" alt="programming" class="w-full">
                            <div class="px-8 py-6">
                                <h3>
                                    <a href=""
                                        class="block mb-3 font-semibold text-xl text-slate-800 hover:text-teal-500 transition duration-200 truncate">My
                                        Skill Journey</a>
                                </h3>
                                <p class="font-medium text-base mb-4 text-slate-400">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Cumque consequatur similique tempore unde.</p>
                                <a href=""
                                    class="font-medium text-sm text-white bg-teal-500 py-2 px-4 rounded-lg hover:bg-teal-700">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog section start -->
        <!-- contact section start -->
        <section id="contact" class="pt-36 pb-32">
            <div class="container">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-lg text-teal-500 mb-2 uppercase">Contact</h4>
                        <h2 class="font-bold text-slate-900 text-3xl mb-4 lg:text-4xl">Contact Us</h2>
                        <p class="font-medium text-medium text-slate-500 md:text-lg">Lorem ipsum dolor sit, amet
                            consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis ullam
                            corrupti
                            enim consectetur. Recusandae!</p>
                    </div>
                </div>
                <div class="w-full px-4 mb-5 lg:max-w-xl mx-auto">
                    <form action="">
                        <label for="name" class="text-base text-teal-500 font-bold uppercase">Name</label>
                        <input type="text" id="name"
                            class="w-full bg-slate-200 text-slate-800 p-2 rounded-md focus:outline-none focus:ring-1 focus:border-teal-500 mb-5">
                        <label for="email" class="text-base text-teal-500 font-bold uppercase">Email</label>
                        <input type="text" id="email"
                            class="w-full bg-slate-200 text-slate-800 p-2 rounded-md focus:outline-none focus:ring-1 focus:border-teal-500 mb-5">
                        <label for="name" class="text-base text-teal-500 font-bold uppercase">Message</label>
                        <textarea type="text" id="name"
                            class="w-full bg-slate-200 text-slate-800 p-3 h-32 rounded-md focus:outline-none focus:ring-1 focus:border-teal-500"></textarea>
                    </form>
                </div>
                <div class="w-full px-4 lg:max-w-xl mx-auto">
                    <button
                        class="text-center bg-teal-500 text-white font-bold text-lg w-full py-1 rounded-xl hover:shadow-lg hover:bg-teal-700">SEND</button>
                </div>
            </div>
        </section>
        <!-- contact section end --> --}}
        <!-- component -->
        <section id="contact" class="body-font relative bg-gray-900 text-gray-400">

            <div class="container mx-auto px-5 py-24">
              
              <div class="w-full px-4">
                <div class="max-w-3xl mx-auto text-center mb-16">
                    <h4 class="font-bold text-lg text-indigo-600 mb-2 uppercase">Contact</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 lg:text-4xl">Contact Us</h2>
                    <p class="font-medium w-full text-medium text-slate-500 md:text-lg">Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Atque accusamus odio tenetur dolores porro facilis ullam
                        corrupti
                        enim consectetur. Recusandae!</p>
                </div>
            </div>
          
              <div class="mx-auto md:w-2/3 lg:w-1/2">
                <div class="-m-2 flex flex-wrap">
          
                  <!-- form -->
                  <div class="w-1/2 p-2">
                    <div class="relative">
                      <input type="text" id="name" name="name" class="peer w-full rounded border border-gray-700 bg-gray-900 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Name" />
                      <label for="name" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-indigo-500 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Name</label>
                    </div>
                  </div>
                  <div class="w-1/2 p-2">
                    <div class="relative">
                      <input type="email" id="email" name="email" class="peer w-full rounded border border-gray-700 bg-gray-900 bg-opacity-40 py-1 px-3 text-base leading-8 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Email" />
                      <label for="email" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-indigo-500 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Email</label>
                    </div>
                  </div>
                  <div class="mt-4 w-full p-2">
                    <div class="relative">
                      <textarea id="message" name="message" class="peer h-32 w-full resize-none rounded border border-gray-700 bg-gray-900 bg-opacity-40 py-1 px-3 text-base leading-6 text-gray-100 placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-indigo-500 focus:bg-gray-900 focus:ring-2 focus:ring-indigo-900" placeholder="Message"></textarea>
                      <label for="message" class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-indigo-500 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:bg-gray-900 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-500 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-indigo-500">Message</label>
                    </div>
                  </div>
                  <div class="w-full p-2">
                    <button class="w-full mx-auto rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-00">Button</button>
                  </div>
                  
          
          
                  <!-- footer -->
          
                </div>
              </div>
          
            </div>
            
          </section>
        <!-- footer section start -->
        <footer class="bg-gray-900">
            <div class="relative mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 lg:pt-24">
                <div class="absolute end-4 top-4 sm:end-6 sm:top-6 lg:end-8 lg:top-8 pt-14">
                    <a class="inline-block rounded-full bg-indigo-600 p-2 text-white shadow transition hover:bg-indigo-800 sm:p-3 lg:p-4"
                        href="#">
                        <span class="sr-only">Back to top</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

                <div class="lg:flex lg:items-end lg:justify-between">
                    <div>
                        <div class="flex justify-center text-indigo-600 lg:justify-start">
                            <p class="font-bold text-2xl text-indigo-600 block py-6">RichieReuben.</p>
                        </div>

                        <p class="mx-auto max-w-md text-center leading-relaxed text-gray-500 lg:text-left">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt consequuntur amet culpa
                            cum itaque neque.
                        </p>
                    </div>

                    <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:mt-0 lg:justify-end lg:gap-12">
                        <li>
                            <a class="text-gray-700 transition hover:text-indigo-500" href="#home"> Home </a>
                        </li>
                        <li>
                            <a class="text-gray-700 transition hover:text-indigo-500" href="#about"> About Me </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-indigo-500" href="#experience"> Experience </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-indigo-500" href="#portfolio"> Portfolio </a>
                        </li>

                        <li>
                            <a class="text-gray-700 transition hover:text-indigo-500" href="#skill"> Skill </a>
                        </li>
                    </ul>
                </div>

                <p class="mt-12 text-center text-sm text-gray-500 lg:text-right">
                    Copyright &copy; 2024. All rights reserved.
                </p>
            </div>
        </footer>
        <script>
            const hamburger = document.querySelector('#hamburger');
            const navMenu = document.querySelector('#nav-menu')
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('hamburger-active');
                navMenu.classList.toggle('hidden');
            });
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>
<script src="https://unpkg.com/kursor"></script>
<script>
    new kursor({
        type: 4,
        color: "#4f46e5",
        removeDefaultCursor: true,
    })
</script>

</html>
