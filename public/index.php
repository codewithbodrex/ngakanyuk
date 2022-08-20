<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./styles.css">
    <title>Landing Page</title>
</head>
<body class="font-Poppins">
    <!----Header-->
    <header>
        <nav class="container flex items-center py-4 mt-4 gap-12 sm:mt-12" >
            <div class="py-1">
                <h1 class="text-xl">Ngakan Yuk</h1>
            </div>
            <ul class="hidden sm:flex flex-1 justify-center ml-24 items-center gap-12 text-darkBlack uppercase text-xs">
                <li class="cursor-pointer hover:text-lightPurple"><a href="./index.html">Home</a></li>
                <li class="cursor-pointer hover:text-lightPurple"><a href="./ngakan.html">Ngakan</a></li>
                <!-- a tag inside in li tag -->
                <li class="text-xl cursor-pointer hover:text-lightPurple fas fa-cart-shopping"></li>
                <li class="text-xl cursor-pointer hover:text-lightPurple fa-regular fa-bell"></li>            
            </ul>
            <ul class="hidden sm:flex flex-1 justify-end items-center gap-6 text-darkBlack uppercase text-xs">
                <a href="./loginpage.php?message=state"><button type="button" class="bg-lightPurple text-white rounded-md px-8 py-3 uppercase hover:bg-white hover:text-lightPurple border-2 border-lightPurple hover:border-lightPurple transition duration-300">Login</button></a>
                <a href="./signup.php"><button type="button" class="border-2 text-lightPurple border-lightPurple rounded-md px-7 py-3 uppercase hover:bg-lightPurple hover:text-white transition duration-300">Sign Up</button></a>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-xl hover:text-lightPurple fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!--Hero-->
    <section class="relative">
        <div class="container flex flex-col-reverse lg:flex-row items-center gap-12 mt-14 lg:mt-20">
            <!-- content -->
            <div class="flex flex-1 flex-col items-center lg:items-start">
                <div class="grid grid-cols-2 gap-4">
                    <h2 class="text-darkBlack text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Super Fast
                    </h2>
                    <h2 class="text-lightPurple text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Food
                    </h2>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <h2 class="text-lightPurple text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Delivery
                    </h2>
                    <h2 class="text-darkBlack text-3xl md:text-4xl lg:text-5xl text-center lg:text-left mb-6">
                        Service
                    </h2>
                </div>
                <p class="text-darkGrey text-lg text-center lg:text-left mb-6">
                    We Provide Super Fast Delivery Service. Let's Use Our Service Right Now And Get Discounts Of Up To 50%
                </p>
                <div class="flex justify-center flex-wrap gap-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple"><a href="./ngakan.php">Explore Food</a></button>
                    <button type="button" class="btn btn-white hover:bg-lightPurple hover:text-white">Download App</button>
                </div>                
            </div>
            <!-- Image -->
            <div class="flex justify-center flex-1 mb-10 md:mb-16 lg:mb-0 z-10">
                <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/salad.png" alt="">
            </div>
        </div>
        <!--Rounded rectangle-->
        <div class="hidden md:block overflow-hidden bg-darkBlack rounded-tl-full rounded-bl-full absolute h-80 w-2/4 right-0 top-16">
        </div>
    </section>

    <!--Features-->
    <section class="bg-white py-20 mt-20 lg:mt-60">
        <!--Heading-->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-lightPurple">Features</h1>
            <p class="text-center text-darkGrey mt-4">
                Our aim is to make it and quick for you to order your favorite food. With just one click you can ngakan your favorite food even though laying on your bed.
            </p>
        </div>
        <!---Features #1-->
        <div class="relative mt-20 lg:mt-24">
            <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24">
                <!--Image-->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/ieccream.png" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-lightPurple">
                        Ngakan in one click
                    </h1>
                    <p class="text-darkGrey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Click, Wait, and Ngakan. Just that's it.
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple"><a href="./ngakan.php">Let's Ngakan</a></button>
                </div>
            </div>
            <!--Rounded rectangle-->
            <div class="hidden lg:block overflow-hidden bg-darkBlack rounded-tr-full rounded-br-full absolute h-80 w-2/4 left-0 top-16">
            </div>            
        </div>
        <!---Features #2-->
        <div class="relative mt-20 lg:mt-52">
            <div class="container flex flex-col lg:flex-row-reverse items-center justify-center gap-x-24">
                <!--Image-->
                <div class="flex flex-1 justify-center z-10 mb-10 lg:mb-0">
                    <img class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full" src="./img/frenchfries.png" alt="">
                </div>
                <div class="flex flex-1 flex-col items-center lg:items-start">
                    <h1 class="text-3xl text-lightPurple">
                        Best food over the Earth
                    </h1>
                    <p class="text-darkGrey my-4 text-center lg:text-left sm:w-3/4 lg:w-full">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id sit nulla itaque officiis recusandae deleniti laboriosam consequatur porro? Necessitatibus provident cupiditate totam sapiente rem tempora consequuntur dolor saepe repudiandae sunt?
                    </p>
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple"><a href="./ngakan.php">Let's Ngakan</a></button>
                </div>
            </div>
            <!--Rounded rectangle-->
            <div class="hidden lg:block overflow-hidden bg-darkBlack rounded-tl-full rounded-bl-full absolute h-60 w-1/3 right-0 top-16">
            </div>            
        </div>        
    </section>

    <!--Download-->
    <section class="py-20 mt-20">
        <!--Heading-->
        <div class="sm:w-3/4 lg:w-5/12 mx-auto px-2">
            <h1 class="text-3xl text-center text-lightPurple">Download the app</h1>
            <p class="text-center text-darkGrey mt-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe voluptates culpa, ipsam ducimus veritatis labore delectus? Quisquam cumque ducimus quidem, nihil consectetur optio sequi porro et unde. Repellendus, reprehenderit nam.
            </p>
        </div>
        <!--Cards-->
        <div class="container grid grid-cols-1 md:grid-cols-2 max-w-screen-lg mt-16 place-items-center">
            <!--Card 1-->
            <div class="flex flex-col rounded-md shadow-xl max-w-max">
                <div class="flex flex-col items-center p-6">
                    <img class="h-1/2 w-1/2" src="./img/android.png" alt="">
                    <h3 class="mt-5 mb-2 text-lightPurple text-lg">Add to Android</h3>
                    <p class="mb-2 text-darkGrey font-light"></p>
                </div>
                <hr class="border-b border-lightGray">
                <div class="flex justify-center p-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Install now</button>
                </div>
            </div>
            <!--Card 2-->
            <div class="flex flex-col rounded-md shadow-xl max-w-max">
                <div class="flex flex-col items-center p-6">
                    <img class="h-1/2 w-1/2" src="./img/app-store.png" alt="">
                    <h3 class="mt-5 mb-2 text-lightPurple text-lg">Add to Ios</h3>
                    <p class="mb-2 text-darkGrey font-light"></p>
                </div>
                <hr class="border-b border-lightGray">
                <div class="flex justify-center p-6">
                    <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Install now</button>
                </div>
            </div>                           
        </div>
    </section>
    <!--Footer-->
    <footer class="bg-lightPurple py-8">
        <div class="container flex flex-col md:flex-row items-center">
            <div class="flex flex-1 flex-wrap  text-white items-center justify-center md:justify-start gap-12">
                <h1 class="text-xl">Ngakan Yuk</h1>
                <ul class="flex text-white uppercase gap-12 text-xs">
                    <li class="cursor-pointer ">Home</li>
                    <li class="cursor-pointer ">Ngakan</li>
                </ul>
            </div>
            <div class="flex gap-10 mt-12 md:mt-0 items-end justify-end">
                <button type="button" class="btn btn-footer hover:bg-white hover:text-lightPurple">Get Started</button>
            </div>
        </div>
    </footer>
</body>
</html>