<?php require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/navbar.php';

?>

<h4 class="px-24 py-6 w-[40%] text-3xl my-6 font-semibold leading-snug">Welcome To Daali</h4>

<div class="max-w-lg mx-auto">
    <button type="button" onclick="clickHiddenProject()" class="relative block w-full border-2 border-yellow-200 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
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
        <?php foreach($data as $wiki) { ?>
        <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
            <img src="<?= URLROOT ?>/img/<?= $wiki->imgWiki?>" alt="img" />
            <div class="p-5 border border-t-0">
                <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
                    <a href="/" class="transition-colors duration-200 text-blue-gray-900 hover:text-deep-purple-accent-700" aria-label="Category" title="traveling">traveling</a>
                    <span class="text-gray-600">— <?= $wiki->wikiDate ?></span>
                </p>
                <a href="/" aria-label="Category" title="Visit the East" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">Visit the East</a>
                <p class="mb-2 text-gray-700">
                <?= $wiki->content ?>
                </p>
                <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="relative bg-[#E7E8EA] pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
</div>
<div class="text-center">
    <div>
        <div class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="fromHidden" style="display: none;">
            <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                <form action="<?= URLROOT ?>users/wikis" method="POST">
                    <div class="mb-4">
                        <span onclick="hidePopupEdit()" class="float-right cursor-pointer">&times;</span>
                        <h2 class="text-2xl font-bold">Add Wiki</h2>
                    </div>
                    <input type="text" id="id" type="hidden" name="id">
                    <div>
                            <label for="dropzone-file" class="flex flex-col items-center w-full max-w-lg p-5 mx-auto mt-2 text-center bg-white border-2 border-gray-300 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>

                                <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">img </h2>

                                <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg & drop your file SVG, PNG, JPG or GIF. </p>

                                <input id="dropzone-file" name="img" type="file" class="hidden" />
                            </label>
                        </div>
                    <label class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" id="wikiName" name="title" class="mt-1 p-2 border border-gray-300 rounded-md">

                    <label class="block mt-4 text-sm font-medium text-gray-700">Description</label>
                    <textarea id="Description" name="description" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md"></textarea>

                    <label for="date" class="block mt-4 text-sm font-medium text-gray-700">Date</label>
                    <input type="date" id="start_date" name="date" class="mt-1 p-2 border border-gray-300 rounded-md">

                    <button type="submit" name="submitWiki" class="mt-4 inline-flex bg-yellow-400 items-center px-4 py-2 hover:bg-yellow-600 text-white text-sm font-medium rounded-md">
                        Add Wiki
                    </button>
                </form>
            </div>
        </div>
    </div>


    <?php
    require APPROOT . '/views/inc/linkFooter.php';
    require APPROOT . '/views/inc/footer.php';
