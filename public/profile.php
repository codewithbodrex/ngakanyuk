<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./styles.css">
    <title>Profile edition</title>
</head>
<body class="font-Poppins">
    <!----Header-->
    <header>
        <nav class="container flex items-center py-4 mt-4 gap-12 sm:mt-12" >
            <div class="py-1">
                <h1 class="text-xl">Ngakan Yuk</h1>
            </div>
            <ul class="hidden sm:flex flex-1 justify-center ml-24 items-center gap-12 text-darkBlack uppercase text-xs">
                <li class="cursor-pointer hover:text-lightPurple">Home</li>
                <li class="cursor-pointer hover:text-lightPurple">Ngakan</li>
                <!-- a tag inside in li tag -->
                <li class="text-xl cursor-pointer hover:text-lightPurple fas fa-cart-shopping"></li>
                <li class="text-xl cursor-pointer hover:text-lightPurple fa-regular fa-bell"></li>            
            </ul>
            <div class="flex flex-1 flex-col justify-end items-center gap-2  text-darkBlack cursor-pointer hover:text-lightPurple transition duration-300">
                <i class="text-6xl fa-solid fa-circle-user"></i>
                <p class="text-md">
                <?php
                if(isset($_GET['username'])){
                    echo $_GET['username'];
                    }  
                ?>
                </p>
            </div>
            <div class="flex sm:hidden flex-1 justify-end">
                <i class="text-xl hover:text-lightPurple fas fa-bars"></i>
            </div>
        </nav>
    </header>
    <hr class="mt-4 border-b border-lightGray">            
    <!--Hero-->
    <section class="relative">
        <div class="container flex flex-row items-center gap-12 mt-12">
            <!-- Header -->
            <div class="flex flex-1 flex-row items-center lg:items-start">
                <div class="flex gap-4 mx-auto  py-6">
                    <ul class="flex flex-1 justify-center items-center gap-12">
                        <li class="cursor-pointer hover:text-lightPurple text-darkBlack uppercase text-xs">Food</li>
                        <li class="cursor-pointer hover:text-lightPurple text-darkBlack uppercase text-xs">Drink</li>
                        <li class="cursor-pointer hover:text-lightPurple text-darkBlack uppercase text-xs">Dessert</li>
                        <li class="cursor-pointer hover:text-lightPurple text-darkBlack uppercase text-xs">Snack</li>
                        <li class="cursor-pointer hover:text-lightPurple text-darkBlack uppercase text-xs">Fresh</li>
                        <li class="cursor-pointer hover:text-lightPurple text-xl"><i class="fas fa-search"></i></li>
                        <li class="cursor-pointer hover:text-lightPurple text-xl"><i class="fa-solid fa-bag-shopping"></i></li>                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Card-->
    <section class="py-20">
        <div class="container">
            <div class="flex flex-1 flex-col w-1/5">
                <!--Header menu content-->
                <div class="flex items-start border-2 rounded-md shadow-lg hover:text-lightPurple transition duration-300 border-lightPurple py-3 px-4 cursor-pointer">
                    <span class="flex-1">All Food</span>
                    <i class=" text-xl fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class="container  mt-20 grid grid-cols-4 gap-6">
                <!--Card-->
                <div class="flex flex-col rounded-md shadow-2xl max-w-xl">
                    <div class="flex items-center p-6">
                        <img class="w-full max-w-max" src="./img/salad.png" alt="">
                    </div>
                    <div class="flex flex-col items-start ml-6">
                        <h2 class="font-semibold">Salad Segar</h2>
                        <p class="mb-2 text-darkBlack font-medium">Rp. 7.000</p>
                        <ul class="flex flex-row">
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="ml-6 text-sm text-darkGrey">(80)</li>
                        </ul>
                    </div>
                    <hr class="border-b border-lightGray">
                    <div class="flex justify-center p-6">
                        <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Add to cart</button>
                    </div>
                </div>
                <div class="flex flex-col rounded-md shadow-2xl max-w-xl">
                    <div class="flex items-center p-6">
                        <img class="w-full max-w-max" src="./img/burger.png" alt="">
                    </div>
                    <div class="flex flex-col items-start ml-6">
                        <h2 class="font-semibold">Burger Bangor</h2>
                        <p class="mb-2 text-darkBlack font-medium">Rp. 9.000</p>
                        <ul class="flex flex-row">
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="ml-6 text-sm text-darkGrey">(50)</li>
                        </ul>
                    </div>
                    <hr class="border-b border-lightGray">
                    <div class="flex justify-center p-6">
                        <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Add to cart</button>
                    </div>
                </div>
                <div class="flex flex-col rounded-md shadow-2xl max-w-xl">
                    <div class="flex items-center p-6">
                        <img class="w-full max-w-max" src="./img/frenchfries.png" alt="">
                    </div>
                    <div class="flex flex-col items-start ml-6">
                        <h2 class="font-semibold">Potato goreng</h2>
                        <p class="mb-2 text-darkBlack font-medium">Rp. 5.000</p>
                        <ul class="flex flex-row">
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star-half-stroke"></i></li>
                            <li class="ml-6 text-sm text-darkGrey">(10)</li>
                        </ul>
                    </div>
                    <hr class="border-b border-lightGray">
                    <div class="flex justify-center p-6">
                        <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Add to cart</button>
                    </div>
                </div>
                <div class="flex flex-col rounded-md shadow-2xl max-w-xl">
                    <div class="flex items-center p-6">
                        <img class="w-full max-w-max" src="./img/ieccream.png" alt="">
                    </div>
                    <div class="flex flex-col items-start ml-6">
                        <h2 class="font-semibold">Ice cream</h2>
                        <p class="mb-2 text-darkBlack font-medium">Rp. 12.000</p>
                        <ul class="flex flex-row">
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="text-xl text-lightPurple"><i class="fa-solid fa-star"></i></li>
                            <li class="ml-6 text-sm text-darkGrey">(20)</li>
                        </ul>
                    </div>
                    <hr class="border-b border-lightGray">
                    <div class="flex justify-center p-6">
                        <button type="button" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Add to cart</button>
                    </div>
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
                <h1 class="text-center text-white text-xl">&copy;Ngakan Yuk.
                </h1>
            </div>
        </div>
    </footer>
</body>
</html>