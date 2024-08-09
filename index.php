<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Olympic Paris 2024</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- slider section started -->
    <section class="mt-20">


        <div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[100%] overflow-hidden rounded-lg ">
                <!-- Item 1 -->
                <div class="hidden duration-700 w-full  ease-in-out" data-carousel-item>
                    <img class="w-[100%]" src="assets/images/slide2.png" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img class="w-[100%]" src="assets/images/slide1.png" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/images/slide3.png" alt="...">
                </div>
                <!-- Item 4 -->
                

            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </section>
    <!-- slider section end  -->


    <section class="py-10 bg-gradient-to-r from-yellow-600 to-green-700 dark:bg-gray-900  ">
        <div class="py-12 px-6 mx-auto max-w-screen-xl text-center lg:py-20 z-10 relative">
            <a href="about.php" class="inline-flex justify-between items-center py-2 px-4 mb-8 text-lg text-white bg-gradient-to-r from-yellow-300 to-green-400 rounded-full dark:bg-gradient-to-r dark:from-yellow-900 dark:to-green-400 dark:text-yellow-300 hover:bg-gradient-to-r hover:from-green-500 hover:to-yellow-600 dark:hover:from-yellow-800 dark:hover:to-green-500"">
                <span class="text-xs bg-yellow-600 rounded-full text-white px-3 py-1.5 me-3">Exciting</span>
                <span class="text-lg font-medium">Explore the Thrills of Olympic Paris 2024</span>
                <svg class="w-4 h-4 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
            </a>
            <h1 class="mb-6 text-5xl font-bold tracking-tighter leading-none bg-gradient-to-r from-yellow-300 to-green-400 text-transparent bg-clip-text md:text-6xl lg:text-7xl">Unlocking the World's Potential</h1>

            <p class="mb-10 text-xl font-normal bg-gradient-to-r from-yellow-400 to-green-500 text-transparent bg-clip-text lg:text-2xl sm:px-12 lg:px-36">Join us on an exhilarating journey where technology, innovation, and capital converge to shape the future of global sports and entertainment.</p>

            <a href="signup.php">
               <button class="text-white w-64 max-w-md mx-auto bg-gradient-to-r from-yellow-300 to-green-400 hover:from-green-500 hover:to-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-lg px-6 py-3 dark:bg-gradient-to-r dark:from-yellow-900 dark:to-green-400 dark:hover:from-yellow-800 dark:hover:to-green-500 dark:focus:ring-yellow-800">Start Your Adventure</button>
            </a>
        </div>
        <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
    </section>

    <!-- Games section started -->


    <section class=" mt-0 bg-cover bg-no-repeat bg-[url('https://visaguide.world/news/wp-content/uploads/2024/01/Olympic-Games-Paris-France.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-2 mx-auto max-w-screen-xl max-h-screen-xl text-center py-24 lg:py-20">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none bg-gradient-to-r from-blue-500 to-green-500 text-transparent bg-clip-text md:text-5xl lg:text-6xl">Explore Olympic Games</h1>

            <div class=" mt-6 h-full games flex flex-row gap-10 overflow-x-auto pb-4" style="-ms-overflow-style: none; scrollbar-width:3px;">
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="https://olympic.ca/wp-content/uploads/2021/07/Team-Canada-Steaphanie-Barrett-Archery-Tokyo-2020-e1651260901654.jpg?quality=100" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">Archery olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal  dark:text-gray-400">Discover the anticipation and excitement surrounding archery at the Paris 2024 Olympic Games, where precision meets athleticism in a showcase of skill and determination.</p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="https://img.olympics.com/images/image/private/t_16-9_640/f_auto/v1538355600/primary/qx3ozypuiekzctt2xj1e" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">Badmintion olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal  dark:text-gray-400">Experience the speed and agility of badminton at the Paris 2024 Olympic Games, where players from around the world compete in fast-paced matches filled with skill and strategy.</p>

                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="https://cdn.nba.com/manage/2021/08/GettyImages-1332434276-1.jpg" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Basketball olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal  dark:text-gray-400">Witness the thrill of basketball at the Paris 2024 Olympic Games, where athletes showcase their talent and teamwork in intense matches that captivate fans worldwide.</p>

                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="https://cloudfront-us-east-2.images.arcpublishing.com/reuters/5WBLI2IEPBK2PNH337WBDL3GN4.jpg" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Fencing olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal  dark:text-gray-400">Experience the grace and precision of fencing at the Paris 2024 Olympic Games, where competitors engage in strategic duels of skill and agility.</p>

                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="data:image/jpeg;base64,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" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">Taekwondo olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal dark:text-gray-400">Feel the power and discipline of taekwondo at the Paris 2024 Olympic Games, where athletes demonstrate strength, technique, and respect in exhilarating bouts.<< /p>

                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="https://img.olympics.com/images/image/private/t_16-9_640/f_auto/v1538355600/primary/bnktb0sx8joftwb6lplk" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Swimming olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal  dark:text-gray-400">Dive into the excitement of swimming at the Paris 2024 Olympic Games, where world-class athletes push the limits in the water, striving for glory with each stroke.</p>

                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                    <a href="#">
                        <img class="rounded-t-lg h-64" src="https://img.kyodonews.net/english/public/images/posts/c607050318365b902fedc446112afd6e/photo_l.jpg" alt="" />
                    </a>
                    <div class="p-5 w-96 text-white bg-gradient-to-r from-blue-800 to-green-300 ">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">Table Tennis olympic paris 2024</h5>
                        </a>
                        <p class="mb-3 font-normal dark:text-gray-400">Experience the speed and skill of table tennis at the Paris 2024 Olympic Games, where players showcase lightning-fast reflexes and precision in thrilling matches.</p>

                    </div>
                </div>
                <button type="button" class="absolute end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                    <span class="relative bottom-48  inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4  h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>

                    </span>
                </button>
            </div>

        </div>
    </section>




    <?php
    include "footer.php";
    ?>
</body>

</html>