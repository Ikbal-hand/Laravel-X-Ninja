<x-layouts.app>
    <div class="text-[25px] text-center text-[#03824f] font-extrabold mb-2 m-5">
        <h1>Mahasiswa Help</h1>
    </div>
    <div class="container text-xs space-y-5 mx-auto text-center mb-4">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam totam corporis vitae illum nulla, eaque explicabo saepe ab libero, ipsa quaerat obcaecati inventore ratione nihil laboriosam ducimus impedit debitis? Praesentium?</p>
    </div>
    <!-- search component -->
    <div class="relative mx-auto max-w-xl">
        <input type="search" name="search" placeholder="Search" 
            class="w-full h-10 px-4 pr-12 rounded-lg border-2 border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm" />
        <button type="submit" class="absolute right-0 top-0 mt-2 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-5 w-5 text-gray-600">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 18l6-6m0 0a8 8 0 10-8 8 8 8 0 008-8z" />
            </svg>
        </button>
    </div>  
    <!-- Search Results Text dan Konten -->
    <div class="container space-y-4 mx-auto text-left mb-4">
        <div class="p-6 space-y-2">
            <h2 class="text-lg font-semibold border-b-2 border-gray-200 pb-3">Search Results</h2>
            <div class="space-y-4">
                <div class="border-b-2 border-gray-200 pb-3">
                    <a href="#" class="text-md font-medium text-blue-600 hover:underline">Result 1: Example Result Title</a>
                    <p class="text-sm text-gray-600">This is a description of the first result that matches the search term. It's just a sample content.</p>
                </div>

                <div class="border-b-2 border-gray-200 pb-3">
                    <a href="#" class="text-md font-medium text-blue-600 hover:underline">Result 2: Another Example</a>
                    <p class="text-sm text-gray-600">Here's another example of a result. It provides more details about the second match.</p>
                </div>

                <div class="border-b-2 border-gray-200 pb-3">
                    <a href="#" class="text-md font-medium text-blue-600 hover:underline">Result 3: Third Item</a>
                    <p class="text-sm text-gray-600">This is the third search result with a short description of the content that fits the query.</p>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>