<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="./styles.css">    
    <title>Login</title>
</head>
<body class="font-Poppins">
    <div class="flex w-full mt-6 md:mt-12 lg:mt-36 flex-1 justify-center">
        <div class="w-full max-w-md">
            <form class="bg-white shadow-2xl  rounded px-8 pt-6 pb-8 mb-4" action="./login.php" method="post">
            <div class="flex flex-col mt-2 mb-4">
                <h1 class="text-2xl text-lightPurple text-center font-semibold">Ngakan Yuk</h1><br>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Username
                </label>
                <input class="shadow-md border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" placeholder="Username">
            </div>
            <div class=" flex flex-col mt-2 mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Password
                </label>
                <input class="shadow-md border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
                <p class="text-red-500 text-xs italic">
                    <?php
                        if($_GET['message'] == 'error'){
                            echo "Incorrect Password";
                        }
                    ?>
                </p>
            </div>
            <div class="flex flex-1 items-center justify-between">
                <button type="submit" value="login" class="btn btn-purple hover:bg-white hover:text-lightPurple border-2 hover:border-lightPurple">Login</button>
                <a class="inline-block align-baseline font-bold text-sm transition duration-300 text-darkGrey hover:text-lightPurple" href="#">
                Forgot Password?
                </a>
            </div>
            <hr class="mt-4 border-b border-lightGray">            
            <div class="mt-6 mb-2 flex flex-1 flex-row justify-center">
                <p class="text-sm text-darkBlack">Not register yet?</p>
                <a class="text-sm ml-2 text-lightPurple font-semibold" href="#"> Create account</a>
            </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
            &copy;2022 Ngakan Yuk Corp. All rights reserved.
            </p>
        </div>
    </div>    
</body>
</html>