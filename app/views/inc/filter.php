
    <div class="flex items-center justify-center">
        <div x-data="{ dropdownOpen: true }" class="m-3">
            <button @click="dropdownOpen = !dropdownOpen" class="bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                <span class="mr-2">Filter</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentcolor" d="M6 2v6h.01L6 8.01 10 12l-4 4 .01.01H6V22h12v-5.99h-.01L18 16l-4-4 4-3.99-.01-.01H18V2H6zm10 14.5V20H8v-3.5l4-4 4 4zm-4-5l-4-4V4h8v3.5l-4 4z"></path>
                </svg>
            </button>
            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
            <div x-show="dropdownOpen" class="w-48 bg-white rounded-md shadow-xl z-20">
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Tagas
                </a>
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Category
                </a>
            </div>
        </div>

        <div x-data="{ dropdownOpen: true }" class="m-3">
            <button @click="dropdownOpen = !dropdownOpen" class="bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                <span class="mr-2">Close</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentcolor" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" />
                </svg>
            </button>
            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
            <div x-show="dropdownOpen" class="w-48 bg-white rounded-md shadow-xl z-20">
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Tagas
                </a>
                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Category
                </a>
            </div>
        </div>
    </div>