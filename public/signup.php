<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./styles.css">    
    <title>Sign Up</title>
</head>
<body class="font-Poppins">
    <div class="flex w-full mt-4 md:mt-6 lg:mt-12 flex-1 justify-center">
        <div class="w-full max-w-md">
            <form class="bg-white shadow-2xl  rounded px-8 pt-6 pb-8 mb-4" action="./singConnect.php" method="post">
                <div class="flex flex-col mt-2 mb-4">
                    <h1 class="text-2xl text-lightPurple text-center font-semibold">Ngakan Yuk</h1><br>
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Username
                    </label>
                    <input class="shadow-md border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
                </div>
                <div class=" flex flex-col mt-2 mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                    </label>
                    <input class="shadow-md border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="ngakanyuk@domain.com">
                </div>            
                <div class=" flex flex-col mt-2 mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                    </label>
                    <input class="shadow-md border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic">Please choose a password.</p>
                </div>
                <div class=" flex flex-col mt-2 mb-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="conpassword">
                    Confirm password
                    </label>
                    <input class="shadow-md border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="conpassword" name="conpassword" type="password" placeholder="******************">
                    <p class="text-red-500 text-xs italic">Password doesn't match.</p>
                </div>            
                <div class="flex flex-1 items-center justify-center">
                    <button type="submit" class="btn btn-purple w-2/4 rounded-lg border-2 hover:bg-white hover:text-lightPurple hover:border-lightPurple">Sign Up</button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
            &copy;2022 Ngakan Yuk Corp. All rights reserved.
            </p>
        </div>
    </div>    
</body>
</html>