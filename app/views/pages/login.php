<?php require APPROOT .'/views/inc/header.php' ;
require APPROOT .'/views/inc/navbar.php';
?>
<section class="w-full flex items-center h-[90vh] px-8 py-16 bg-gray-100 xl:px-8 bg-yellow-50">
    <div class="max-w-5xl mx-auto">
        <div class="flex flex-col items-center md:flex-row">

            <div class="w-full space-y-5 md:w-3/5 md:pr-16">
                <h2 class="text-2xl font-extrabold leading-none text-black sm:text-3xl md:text-5xl">
                Welcome to our Wiki platform
                </h2>
                <img src="https://cdn.devdojo.com/images/september2020/grow-together.png" alt="img">
            </div>

            <div class="w-full mt-16 md:mt-0 md:w-2/5">
                <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                    <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
                    <input type="text" name="email" class="block w-full px-4 py-3 mb-4 border border-2  border-yellow-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email address">
                    <input type="password" name="password" class="block w-full px-4 py-3 mb-4 border border-2  border-yellow-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password">
                    <div class="block">
                        <button class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-yellow-400 rounded-lg hover:bg-yellow-300 ease">Log In</button>
                    </div>
                    <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_" class="text-yellow-400 underline">Sign up here</a></p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require APPROOT . '/views/inc/footer.php'; 