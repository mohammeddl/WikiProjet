<?php require APPROOT . '/views/inc/header.php';
require APPROOT . '/views/inc/navadmin.php';
?>


<div class="h-0 min-h-[768px] bg-white">

    <div x-data="{ open: false }" @keydown.window.escape="open = false" class="h-full flex">

        <div x-show="open" class="fixed inset-0 flex z-40 lg:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

            <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
            </div>

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex-1 flex flex-col max-w-xs w-full bg-white focus:outline-none">

                <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = false">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>

                </div>

                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                    <nav aria-label="Sidebar" class="mt-5">
                        <div class="px-2 space-y-1">

                            <a href="<?php echo URLROOT; ?>wikis/displayWikisArchiv" class=" text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                    <path fill="#727274" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                </svg>
                                Dashboard
                            </a>

                            <a href="<?php echo URLROOT; ?>pages/categorie" class="bg-gray-100 text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                    <path fill="#7e7f81" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                </svg>
                                Categories
                            </a>

                            <a href="<?php echo URLROOT; ?>tags/displayTags" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                <svg class="text-gray-400 group-hover:text-gray-500 mr-4 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                    <path fill="#6b6b6b" d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
                                </svg>
                                Tags
                        </div>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                    <a href="#" class="flex-shrink-0 group block">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-base font-medium text-gray-700 group-hover:text-gray-900">
                                    Whitney Francis
                                </p>
                                <p class="text-sm font-medium text-gray-500 group-hover:text-gray-700">
                                    View profile
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Force sidebar to shrink to fit close icon -->
            </div>
        </div>


        <!-- Static sidebar for desktop -->
        <div class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex-1 flex flex-col  border-r border-gray-200 bg-gray-100">
                    <div class="flex-1 flex flex-col pb-4 overflow-y-auto">
                        <nav class=" flex-1 bg-yellow-400" aria-label="Sidebar">
                            <div class="p-4 ">

                                <a href="<?php echo URLROOT; ?>wikis/displayWikisArchiv" class=" text-gray-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-200 text-gray-900&quot;, Default: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path fill="#727274" d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                    </svg>
                                    Dashboard
                                </a>

                                <a href="<?php echo URLROOT; ?>pages/categorie" class="bg-gray-200 text-gray-900 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-200 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                    <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path fill="#7e7f81" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                    Categories

                                    <a href="<?php echo URLROOT; ?>tags/displayTags" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-gray-200 text-gray-900&quot;, undefined: &quot;text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
                                        <svg class="text-gray-400 group-hover:text-gray-500 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                                            <path fill="#6b6b6b" d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
                                        </svg>
                                        Tags
                                    </a>
                            </div>
                        </nav>
                        <div class="flex-shrink-0 flex border-t border-gray-200 ">
                            <a href="#" class=" w-full group block">
                                <div>
                                    <img class="inline-block h-9 w-9 rounded-full" src="<?= URLROOT ?>/img/<?= $_SESSION['img']; ?>" alt="profile">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-gray-700 group-hover:text-gray-900">
                                        <?= $_SESSION['name']; ?>
                                    </p>
                                    <p class="text-xs font-medium text-gray-500 group-hover:text-gray-700">
                                        <?= $_SESSION['role']; ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col min-w-0 flex-1 ">
            <div class="lg:hidden">
                <div class="flex items-center justify-between bg-gray-50 border-b border-gray-200 px-4 py-1.5">
                    <div>
                    </div>
                    <div>
                        <button type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="open = true">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <section class="max-w-4xl p-14 mx-auto my-16 bg-yellow-50 rounded-md shadow-md dark:bg-gray-800">
                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Add Category</h2>

                <form action="<?php echo URLROOT; ?>categorys/categorie" method="post">
                    <div class="grid grid-cols-1 gap-6 mt-4">
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

                        <div>
                            <label class="text-gray-700 dark:text-gray-200">Name</label>
                            <input id="name" type="text" name="name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
                    </div>
                </form>
            </section>
            <div class="p-14 ">
                <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Categorys</h2>
                <ul role="list" class="mt-3 grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <?php foreach ($data as $category) { ?>
                        <li class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <img class="object-cover w-full h-56" id="img<?= $category->categoryId ?>" src="<?= URLROOT ?>/img/<?= $category->categoryImg; ?>" alt="avatar">
                            <div class="py-5 text-center">
                                <p class="block text-xl font-bold text-gray-800 dark:text-white" id="name<?= $category->categoryId; ?>"><?= $category->categoryName ?></p>
                                <input type="hidden" id="category<?= $category->categoryId; ?>" value="<?= $category->categoryId; ?>">
                                <button onclick="clickHiddenTag(<?= $category->categoryId ?>)"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path fill="#FFD43B" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                    </svg></button>
                                <a href="<?= URLROOT ?>categorys/deleteCategorys/<?= $category->categoryId; ?>"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                                        <path fill="#FFD43B" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                    </svg></a>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>


            <div class="text-center">
                <div>
                    <div class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="formHidden" style="display: none;">
                        <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                            <form action="<?= URLROOT ?>categorys/modifyCategoty" method="POST">
                                <div class="mb-4">
                                    <span onclick="hidePopupEdit()" class="float-right cursor-pointer">&times;</span>
                                    <h2 class="text-2xl font-bold">Modify Category</h2>
                                </div>
                                <div>
                                    <label for="dropzone-file" class="flex flex-col items-center w-full max-w-lg p-5 mx-auto mt-2 text-center bg-white border-2 border-gray-300 border-dashed cursor-pointer dark:bg-gray-900 dark:border-gray-700 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500 dark:text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                        </svg>
                                        <img id="imgPreview" class="object-cover w-full h-56">
                                        <h2 class="mt-1 font-medium tracking-wide text-gray-700 dark:text-gray-200">img </h2>
                                        <p class="mt-2 text-xs tracking-wide text-gray-500 dark:text-gray-400">Upload or darg & drop your file SVG, PNG, JPG or GIF. </p>
                                        <input name="imgCategory" id="img2" type="file" class="" />
                                    </label>
                                </div>
                                <input id="id2" type="hidden" name="idTag" value="">

                                <label class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text" id="tagName2" name="newTagName" value="" class="mt-1 p-2 border border-gray-300 rounded-md">

                                <button type="submit" name="modifyTag" class="mt-4 inline-flex bg-yellow-400 items-center px-4 py-2 hover:bg-yellow-600 text-white text-sm font-medium rounded-md">
                                    modify
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function clickHiddenTag(id) {
                        formHidden = document.getElementById("formHidden");
                        if (formHidden.style.display === 'none') {
                            formHidden.style.display = "block";
                        }

                        let idCategory = document.getElementById('category' + id).value;
                        let imgSrc = document.getElementById('img' + id).src;
                        let nameTag = document.getElementById('name' + id).innerText;

                        document.getElementById('id2').value = idCategory;
                        document.getElementById('imgPreview').src = imgSrc;
                        document.getElementById('tagName2').value = nameTag;
                    }

                    function hidePopupEdit() {
                        formHidden = document.getElementById("formHidden");
                        if (formHidden.style.display === 'block') {
                            formHidden.style.display = "none";
                        }
                    }
                </script>

                <?php require APPROOT . '/views/inc/footer.php'; ?>