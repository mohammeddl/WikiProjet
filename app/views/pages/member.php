<?php require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/navbar.php';
?>

<!-- <section class="relative py-2 bg-yellow-400">
    <div class="flex items-center justify-between h-14 px-8 mx-auto max-w-7xl">

        <a href="#_" class="relative z-10 flex items-center w-auto text-2xl font-black leading-none text-gray-900 select-none">Wiki.</a>

        <nav class="items-center justify-center hidden space-x-5 text-gray-200 md:flex lg:space-x-8">

            <div class="relative flex items-center w-full h-11 px-2 rounded-lg focus-within:shadow-lg bg-white overflow-hidden">
                <div class="grid place-items-center h-full w-12 text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <input class="peer h-full w-full outline-none text-sm text-gray-700 pr-2" type="text" id="search" placeholder="Search something.." />
            </div>
            <a href="#_" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false" class="relative inline-block px-1 text-base font-bold text-gray-700 uppercase transition duration-150 ease hover:text-gray-900">
                <span class="block">Home</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-2 -mb-2 overflow-hidden">
                    <span x-show="!hover" class="absolute inset-0 inline-block w-full h-full transform translate-x-0 bg-yellow-400" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
                    <svg class="w-auto h-full text-gray-900 fill-current" viewBox="0 0 84 6" xmlns="http://www.w3.org/2000/svg">
                        <g stroke="none" stroke-width="1" fill-rule="evenodd">
                            <g transform="translate(-8)" fill-rule="nonzero">
                                <path d="M90.3.9c-1.8 0-2.8.7-3.6 1.4-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9s-1.7-.4-2.4-.9c-.8-.6-1.8-1.4-3.6-1.4s-2.8.7-3.6 1.4c-.7.5-1.2.9-2.4.9-1.1 0-1.7-.4-2.4-.9-.8-.6-1.9 1-1.2 1.5.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9 1.1 0 1.7.4 2.4.9.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9s1.7.4 2.4.9c.8.6 1.8 1.4 3.6 1.4s2.8-.7 3.6-1.4c.7-.5 1.2-.9 2.4-.9.6 0 1-.4 1-1s-.5-1-1-1z"></path>
                            </g>
                        </g>
                    </svg>
                </span>
            </a>
            <a href="#" class="relative  h-6 group">
                <span class="relative z-10 px-5 py-2 font-bold leading-tight text-black bg-white border-4 border-gray-900 rounded-lg group-hover:bg-yellow-100">LogOut</span>
                <span class="absolute top-0 right-0 w-full h-10 -mr-1 bg-black rounded-lg"></span>
            </a>

        </nav>

        <div class="flex items-center justify-center h-full text-black md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
            </svg>
        </div>

    </div>
</section> -->

<h4 class="px-24 py-6 w-[40%] text-3xl my-6 font-semibold leading-snug">Welcome To Daali</h4>
<?php require APPROOT . '/views/inc/filter.php'; ?>

<div class="max-w-lg mx-auto">
    <button type="button" class="relative block w-full border-2 border-yellow-200 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        <svg class="mx-auto h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
            <path fill="#edd864" d="M168 80c-13.3 0-24 10.7-24 24V408c0 8.4-1.4 16.5-4.1 24H440c13.3 0 24-10.7 24-24V104c0-13.3-10.7-24-24-24H168zM72 480c-39.8 0-72-32.2-72-72V112C0 98.7 10.7 88 24 88s24 10.7 24 24V408c0 13.3 10.7 24 24 24s24-10.7 24-24V104c0-39.8 32.2-72 72-72H440c39.8 0 72 32.2 72 72V408c0 39.8-32.2 72-72 72H72zM176 136c0-13.3 10.7-24 24-24h96c13.3 0 24 10.7 24 24v80c0 13.3-10.7 24-24 24H200c-13.3 0-24-10.7-24-24V136zm200-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
        </svg>
        <span class="mt-2 block text-sm font-medium text-gray-900">
            Create a new Wiki
        </span>
    </button>

</div>
</div>
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                    <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">traveling</a>
                    <span class="text-gray-600">— 28 Dec 2020</span>
                </p>
                <a href="/" aria-label="Category" title="Visit the East" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Visit the East</a>
                <p class="mb-2 text-gray-700">
                    Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                </p>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
            </div>
        </div>
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="https://images.pexels.com/photos/447592/pexels-photo-447592.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                    <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">traveling</a>
                    <span class="text-gray-600">— 28 Dec 2020</span>
                </p>
                <a href="/" aria-label="Category" title="Simple is better" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Simple is better</a>
                <p class="mb-2 text-gray-700">
                    Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                </p>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
            </div>
        </div>
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="https://images.pexels.com/photos/139829/pexels-photo-139829.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-64" alt="" />
            <div class="p-5 border border-t-0">
                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                    <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">traveling</a>
                    <span class="text-gray-600">— 28 Dec 2020</span>
                </p>
                <a href="/" aria-label="Category" title="Film It!" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Film It!</a>
                <p class="mb-2 text-gray-700">
                    Sed ut perspiciatis unde omnis iste natus error sit sed quia consequuntur magni voluptatem doloremque.
                </p>
                <div class="flex justify-evenly gap-7">
                    <a href="/" aria-label="" class="w-[60%] inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                    <div class="flex items-center justify-center flex-1 h-full p-2 border border-yellow-400 text-white cursor-pointer shadow rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-800 " viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-center flex-1 h-full p-2 border border-yellow-400 text-white shadow rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-3 cursor-pointer text-blue-800" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#304e82" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require APPROOT . '/views/inc/linkFooter.php';
require APPROOT . '/views/inc/footer.php';
