<x-guest-layout>
    <div class="px-3 md:px-6 py-8">
        <div class="flex flex-wrap justify-between max-w-7xl mx-auto">
            <div class="w-full lg:w-8/12">
                <article class="bg-white shadow-md rounded-lg px-4 py-4 mx-auto" itemid="#" itemscope="" itemtype="http://schema.org/BlogPosting">
                    <div class="w-full mx-auto mb-12 text-left md:w-3/4">
                        <img src="https://kutty.netlify.app/brand/og.png" class="object-cover w-full h-64 bg-center rounded-lg" alt="Kutty">
                        <p class="mt-6 mb-2 text-xs font-semibold tracking-wider uppercase text-primary">Development</p>
                        <h1 class="mb-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline" title="Rise of Tailwind - A Utility First CSS Framework">
                            Rise of Tailwind - A Utility First CSS Framework
                        </h1>
                        <div class="flex mb-6 space-x-2">
                            <a class="text-gray-900 bg-gray-100 badge hover:bg-gray-200 p-1 rounded-md" href="#">CSS</a>
                            <a class="text-gray-900 bg-gray-100 badge hover:bg-gray-200 p-1 rounded-md" href="#">Tailwind</a>
                            <a class="text-gray-900 bg-gray-100 badge hover:bg-gray-200 p-1 rounded-md" href="#">AlpineJS</a>
                        </div>
                        <a class="flex items-center text-gray-700" href="#">
                            <div class="avatar w-10">
                                <img class="rounded-md" src="https://kutty.netlify.app/placeholder.jpg" alt="Photo of Praveen Juge">
                            </div>
                            <div class="ml-2">
                                <p class="text-sm font-semibold text-gray-800">Praveen Juge</p>
                                <p class="text-sm text-gray-500">Jan 02 2021</p>
                            </div>
                        </a>
                    </div>

                    <div class="w-full mx-auto prose md:w-3/4">
                        <p>
                            What if there is an easy way to achieve responsive UI without using any UI kit? Can we create new and fresh designs for every project with a CSS framework? Enter Tailwind CSS, will this be the
                            perfect CSS framework, well let’s find out.
                        </p>
                        <p>Tailwind is a utility-first CSS framework, the keyword being ‘utility’. It is basically a set of classes that you can use in your HTML.</p>
                        <pre>.bg-purple-700 {
  background-color: #6b46c1;
}

.px-4 {
  padding-top: 1rem;
  padding-bottom: 1rem;
}</pre>
                        <p>
                            Therefore, we don’t have to write any custom CSS to get this button. This can be heavily extended to build whole web applications without the need for any other styles apart from a tailwind.
                        </p>
                        <p>...</p>
                    </div>
                </article>
                <!-- component -->
                <div x-data="{ open1: false, open2: false }">
                    <div class="mt-5">
                        <div class="bg-white w-full h-auto shadow-md rounded-lg px-4 py-4 flex flex-col space-y-2">

                            <div class="flex items-center space-x-2">
                                <div class="group relative flex flex-shrink-0 self-start cursor-pointer">
                                    <img x-on:mouseover="open1 = true" x-on:mouseleave="open1 = false" src="https://images.unsplash.com/photo-1507965613665-5fbb4cbb8399?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDQzfHRvd0paRnNrcEdnfHxlbnwwfHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" class="h-8 w-8 object-fill rounded-md">
                                    <div x-show.transition.origin.bottom="open1" x-on:mouseover="open1 = true" x-on:mouseleave="open1 = false" class="absolute mt-8 bg-white px-4 py-4 w-72 shadow rounded cursor-default z-10" style="display: none;">
                                        <div class="flex space-x-3">
                                            <div class="flex flex-shrink-0">
                                                <img src="https://images.unsplash.com/photo-1507965613665-5fbb4cbb8399?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDQzfHRvd0paRnNrcEdnfHxlbnwwfHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" class="h-16 w-16 object-fill rounded-md">
                                            </div>
                                            <div class="flex flex-col space-y-2">
                                                <div class="font-semibold">
                                                    <a href="#" class="hover:underline">
                                                        Ganendra
                                                    </a>
                                                </div>
                                                <div class="flex justify-start items-center space-x-2">
                                                    <div>
                                                        <svg class="w-4 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                                    </div>
                                                    <div class="w-auto text-sm leading-none">
                                                        <small>
                                                            1 mutual friends including: <a href="#" class="font-semibold hover:underline">Mulyadi</a>
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="flex justify-start items-center space-x-2">
                                                    <div>
                                                        <svg class="w-4 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                                                    </div>
                                                    <div class="w-auto text-sm leading-none">
                                                        <small>
                                                            From <a href="#" class="font-semibold">Bandung</a>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex space-x-1 mt-2">
                                            <div class="w-1/2">
                                                <a href="#" class="text-xs text-blue-600 hover:bg-opacity-60 font-semibold flex items-center justify-center px-3 py-2 bg-blue-300 bg-opacity-50 rounded-lg">
                                                    <div class="mr-1">
                                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                                                    </div>
                                                    Add
                                                </a>
                                            </div>
                                            <div class="w-auto">
                                                <a href="#" class="text-xs text-gray-800 hover:bg-gray-300 font-semibold flex items-center justify-center px-3 py-2 bg-gray-200 rounded-lg">
                                                    <div class="mr-1">
                                                        <svg viewBox="0 0 28 28" alt="" class="h-4 w-4" height="20" width="20"><path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path></svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="w-auto">
                                                <a href="#" class="text-xs text-gray-800 hover:bg-gray-300 font-semibold flex items-center justify-center px-3 py-2 bg-gray-200 rounded-lg">
                                                    <div class="mr-1">
                                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="w-auto">
                                                <a href="#" class="text-xs text-gray-800 hover:bg-gray-300 font-semibold flex items-center justify-center px-3 py-2 bg-gray-200 rounded-lg">
                                                    <div class="mr-1">
                                                        <svg class="w-4 h-4" fill="currentcolor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-center space-x-2">
                                    <div class="block">
                                        <div class="flex justify-center items-center space-x-2">
                                            <div class="bg-gray-100 w-auto rounded-xl px-2 pb-2">
                                                <div class="font-medium">
                                                    <a href="#" class="hover:underline text-sm">
                                                        <small>Ganendra</small>
                                                    </a>
                                                </div>
                                                <div class="text-sm">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, maiores!
                                                </div>
                                            </div>
                                            <div class="self-stretch flex justify-center items-center transform transition-opacity duration-200 opacity-0 hover:opacity-100">
                                                <a href="#" class="">
                                                    <div class="text-xs cursor-pointer flex h-6 w-6 transform transition-colors duration-200 hover:bg-gray-100 rounded-md items-center justify-center">
                                                        <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                                    </div>

                                                </a>
                                            </div>
                                        </div>
                                        <div class="flex justify-start items-center text-xs w-full">
                                            <div class="font-semibold text-gray-700 px-2 flex items-center justify-center space-x-1">
                                                <a href="#" class="hover:underline">
                                                    <small>Like</small>
                                                </a>
                                                <small class="self-center">.</small>
                                                <a href="#" class="hover:underline">
                                                    <small>Reply</small>
                                                </a>
                                                <small class="self-center">.</small>
                                                <a href="#" class="hover:underline">
                                                    <small>15 hour</small>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- Subcomment Sample -->
                                        <div class="flex items-center space-x-2 space-y-2">
                                            <div class="group relative flex flex-shrink-0 self-start cursor-pointer pt-2">
                                                <img x-on:mouseover="open2 = true" x-on:mouseleave="open2 = false" src="https://images.unsplash.com/photo-1610156830615-2eb9732de349?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDExfHJuU0tESHd3WVVrfHxlbnwwfHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" class="h-8 w-8 object-fill rounded-md">
                                                <div x-show.transition.origin.bottom="open2" x-on:mouseover="open2 = true" x-on:mouseleave="open2 = false" class="absolute mt-8 bg-white px-4 py-4 w-72 shadow rounded cursor-default z-10" style="display: none;">
                                                    <div class="flex space-x-3">
                                                        <div class="flex flex-shrink-0">
                                                            <img src="https://images.unsplash.com/photo-1610156830615-2eb9732de349?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDExfHJuU0tESHd3WVVrfHxlbnwwfHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" class="h-16 w-16 object-fill rounded-md">
                                                        </div>
                                                        <div class="flex flex-col space-y-2">
                                                            <div class="font-semibold">
                                                                <a href="#" class="hover:underline">
                                                                    Hasan Muhammad
                                                                </a>
                                                            </div>
                                                            <div class="flex justify-start items-center space-x-2">
                                                                <div>
                                                                    <svg class="w-4 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path></svg>
                                                                </div>
                                                                <div class="w-auto text-sm leading-none">
                                                                    <small>
                                                                        347 mutual friends including: <a href="#" class="font-semibold hover:underline">Ujang</a> and <a href="#" class="font-semibold hover:underline">Maman</a>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-start items-center space-x-2">
                                                                <div>
                                                                    <svg class="w-4 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path></svg>
                                                                </div>
                                                                <div class="w-auto text-sm leading-none">
                                                                    <small>
                                                                        Went to SMK Assalaam Bandung
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex space-x-1 mt-2">
                                                        <div class="w-1/2">
                                                            <a href="#" class="text-xs text-blue-600 hover:bg-opacity-60 font-semibold flex items-center justify-center px-3 py-2 bg-blue-300 bg-opacity-50 rounded-lg">
                                                                <div class="mr-1">
                                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                                                                </div>
                                                                Tambah
                                                            </a>
                                                        </div>
                                                        <div class="w-auto">
                                                            <a href="#" class="text-xs text-gray-800 hover:bg-gray-300 font-semibold flex items-center justify-center px-3 py-2 bg-gray-200 rounded-lg">
                                                                <div class="mr-1">
                                                                    <svg viewBox="0 0 28 28" alt="" class="h-4 w-4" height="20" width="20"><path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path></svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="w-auto">
                                                            <a href="#" class="text-xs text-gray-800 hover:bg-gray-300 font-semibold flex items-center justify-center px-3 py-2 bg-gray-200 rounded-lg">
                                                                <div class="mr-1">
                                                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="w-auto">
                                                            <a href="#" class="text-xs text-gray-800 hover:bg-gray-300 font-semibold flex items-center justify-center px-3 py-2 bg-gray-200 rounded-lg">
                                                                <div class="mr-1">
                                                                    <svg class="w-4 h-4" fill="currentcolor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex items-center justify-center space-x-2">
                                                <div class="block">
                                                    <div class="bg-gray-100 w-auto rounded-xl px-2 pb-2">
                                                        <div class="font-medium">
                                                            <a href="#" class="hover:underline text-sm">
                                                                <small>Hasan Muhammad</small>
                                                            </a>
                                                        </div>
                                                        <div class="text-sm">
                                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, maiores!
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-start items-center text-xs w-full">
                                                        <div class="font-semibold text-gray-700 px-2 flex items-center justify-center space-x-1">
                                                            <a href="#" class="hover:underline">
                                                                <small>Like</small>
                                                            </a>
                                                            <small class="self-center">.</small>
                                                            <a href="#" class="hover:underline">
                                                                <small>Reply</small>
                                                            </a>
                                                            <small class="self-center">.</small>
                                                            <a href="#" class="hover:underline">
                                                                <small>15 hour</small>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="self-stretch flex justify-center items-center transform transition-opacity duration-200 opacity-0 translate -translate-y-2 hover:opacity-100">
                                                <a href="#" class="">
                                                    <div class="text-xs cursor-pointer flex h-6 w-6 transform transition-colors duration-200 hover:bg-gray-100 rounded-md items-center justify-center">
                                                        <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                                    </div>

                                                </a>
                                            </div>

                                        </div>

                                        <!-- New Subcomment Paste Here !! -->

                                    </div>
                                </div>

                            </div>

                            <div class="flex items-center space-x-2">
                                <div class="flex flex-shrink-0 self-start cursor-pointer">
                                    <img src="https://images.unsplash.com/photo-1551122089-4e3e72477432?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8cnVieXxlbnwwfHwwfA%3D%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" class="h-8 w-8 object-fill rounded-md">
                                </div>

                                <div class="flex items-center justify-center space-x-2">
                                    <div class="block">
                                        <div class="bg-gray-100 w-auto rounded-xl px-2 pb-2">
                                            <div class="font-medium">
                                                <a href="#" class="hover:underline text-sm">
                                                    <small>Nirmala</small>
                                                </a>
                                            </div>
                                            <div class="text-sm">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, maiores!
                                            </div>
                                        </div>
                                        <div class="flex justify-start items-center text-xs w-full">
                                            <div class="font-semibold text-gray-700 px-2 flex items-center justify-center space-x-1">
                                                <a href="#" class="hover:underline">
                                                    <small>Like</small>
                                                </a>
                                                <small class="self-center">.</small>
                                                <a href="#" class="hover:underline">
                                                    <small>Reply</small>
                                                </a>
                                                <small class="self-center">.</small>
                                                <a href="#" class="hover:underline">
                                                    <small>15 hour</small>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="self-stretch flex justify-center items-center transform transition-opacity duration-200 opacity-0 translate -translate-y-2 hover:opacity-100">
                                    <a href="#" class="">
                                        <div class="text-xs cursor-pointer flex h-6 w-6 transform transition-colors duration-200 hover:bg-gray-100 rounded-md items-center justify-center">
                                            <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                        </div>

                                    </a>
                                </div>

                            </div>

                            <div class="flex items-center space-x-2">
                                <div class="flex flex-shrink-0 self-start cursor-pointer">
                                    <img src="https://images.unsplash.com/photo-1609349744982-0de6526d978b?ixid=MXwxMjA3fDB8MHx0b3BpYy1mZWVkfDU5fHRvd0paRnNrcEdnfHxlbnwwfHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt="" class="h-8 w-8 object-cover rounded-md">
                                </div>

                                <div class="flex items-center justify-center space-x-2">
                                    <div class="block">
                                        <div class="bg-gray-100 w-auto rounded-xl px-2 pb-2">
                                            <div class="font-medium">
                                                <a href="#" class="hover:underline text-sm">
                                                    <small>Arkadewi</small>
                                                </a>
                                            </div>
                                            <div class="text-sm">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, maiores!
                                            </div>
                                        </div>
                                        <div class="flex justify-start items-center text-xs w-full">
                                            <div class="font-semibold text-gray-700 px-2 flex items-center justify-center space-x-1">
                                                <a href="#" class="hover:underline">
                                                    <small>Like</small>
                                                </a>
                                                <small class="self-center">.</small>
                                                <a href="#" class="hover:underline">
                                                    <small>Reply</small>
                                                </a>
                                                <small class="self-center">.</small>
                                                <a href="#" class="hover:underline">
                                                    <small>15 hour</small>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="self-stretch flex justify-center items-center transform transition-opacity duration-200 opacity-0 translate -translate-y-2 hover:opacity-100">
                                    <a href="#" class="">
                                        <div class="text-xs cursor-pointer flex h-6 w-6 transform transition-colors duration-200 hover:bg-gray-100 rounded-md items-center justify-center">
                                            <svg class="w-4 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                                        </div>

                                    </a>
                                </div>

                            </div>

                            <!-- New Comment Paste Here -->

                        </div>

                    </div>
                </div>
                <!-- comment form -->
                <div class="flex shadow-md bg-white rounded-lg mt-5 mb-4 px-4">
                    <form class="w-full">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder="Type Your Comment" required=""></textarea>
                            </div>
                            <div class="w-full md:w-full flex items-start md:w-full px-3">
                                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
                                </div>
                                <div class="-mr-1">
                                    <input type="submit" class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value="Post Comment">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="-mx-8 flex-1 lg:flex-none lg:w-4/12">
                <div class="mt-10 lg:mt-0 px-8">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
                    <div class="flex flex-col bg-white px-6 py-4 mx-auto rounded-lg shadow-md">
                        <ul class="-mx-4">
                            <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-md mx-4">
                                <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Alex John</a><span class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-md mx-4">
                                <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Jane Doe</a><span class="text-gray-700 text-sm font-light">Created 52 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-md mx-4">
                                <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Lisa Way</a><span class="text-gray-700 text-sm font-light">Created 73 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-md mx-4">
                                <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Steve Matt</a><span class="text-gray-700 text-sm font-light">Created 245 Posts</span></p>
                            </li>
                            <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80" alt="avatar" class="w-10 h-10 object-cover rounded-md mx-4">
                                <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Khatab
                                        Wedaa</a><span class="text-gray-700 text-sm font-light">Created 332 Posts</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 px-8">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                    <div class="flex flex-col bg-white px-4 py-6 mx-auto rounded-lg shadow-md">
                        <ul>
                            <li><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    AWS</a></li>
                            <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Laravel</a></li>
                            <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- Vue</a>
                            </li>
                            <li class="mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Design</a></li>
                            <li class="flex items-center mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                    Django</a></li>
                            <li class="flex items-center mt-2"><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- PHP</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-10 px-8">
                    <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                    <div class="flex flex-col bg-white px-8 py-6 mx-auto rounded-lg shadow-md">
                        <div class="flex justify-center items-center"><a href="#" class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded hover:bg-gray-500">Laravel</a>
                        </div>
                        <div class="mt-4"><a href="#" class="text-lg text-gray-700 font-medium hover:underline">Build
                                Your New Idea with Laravel Freamwork.</a></div>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="w-8 h-8 object-cover rounded-md"><a href="#" class="text-gray-700 text-sm mx-3 hover:underline">Alex John</a></div><span class="font-light text-sm text-gray-600">Jun 1, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
