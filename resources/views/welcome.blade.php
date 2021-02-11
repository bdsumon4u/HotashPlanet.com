<x-guest-layout>
    <div class="overflow-hidden bg-gray-900 bg-pattern">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between xl:flex-row">
                <div class="w-full max-w-xl mb-12 xl:pr-16 xl:mb-0 xl:w-7/12">
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                        The quick, brown fox <br class="hidden md:block">
                        jumps over a <span class="text-pink-400">lazy dog</span>
                    </h2>
                    <p class="max-w-xl mb-4 text-base text-gray-400 md:text-lg">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan, totam rem aperiam, eaque ipsa quae.
                    </p>
                    <a href="/" aria-label="" class="inline-flex items-center font-semibold tracking-wider transition-colors duration-200 text-pink-400 hover:text-pink-700">
                        Learn more
                        <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                            <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                        </svg>
                    </a>
                </div>
                <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
                    <div class="relative">
                        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute bottom-0 right-0 z-0 hidden w-32 -mb-8 -mr-20 text-pink-400 lg:w-32 lg:-mr-16 sm:block">
                            <defs>
                                <pattern id="766323e1-e594-4ffd-a688-e7275079d540" x="0" y="0" width=".135" height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#766323e1-e594-4ffd-a688-e7275079d540)" width="52" height="24"></rect>
                        </svg>
                        <div class="relative bg-white rounded shadow-2xl p-7 sm:p-10">
                            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                Sign up for updates
                            </h3>
                            <form>
                                <div class="mb-1 sm:mb-2">
                                    <label for="name" class="inline-block mb-1 font-medium">Name</label>
                                    <input placeholder="John Doe" required="" type="text" class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" id="name" name="name">
                                </div>
                                <div class="mb-1 sm:mb-2">
                                    <label for="email" class="inline-block mb-1 font-medium">E-mail</label>
                                    <input placeholder="john.doe@example.org" required="" type="text" class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline" id="email" name="email">
                                </div>
                                <div class="mt-4 mb-2 sm:mb-4">
                                    <button type="submit" class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-400 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                                        Subscribe
                                    </button>
                                </div>
                                <p class="text-xs text-gray-600 sm:text-sm">
                                    We respect your privacy. Unsubscribe at any time.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-6 py-8">
        <div class="flex flex-wrap justify-between container mx-auto">
            <div class="w-full lg:w-8/12">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Post</h1>
                    <div>
                        <select class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option>Latest</option>
                            <option>Last Week</option>
                        </select>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="w-full lg:flex px-6 py-6 bg-white rounded-lg shadow-md">
                        <div class="h-60 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden">
                            <img src="https://tailwindcss.com/img/card-left.jpg" alt="Can coffee make you a better developer">
                        </div>
                        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r md:pl-4 pt-4 lg:pt-0 flex flex-col justify-between leading-normal">
                            <div class="mb-5">
                                <p class="text-sm text-grey-dark flex items-center">
                                    <svg class="text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"></path>
                                    </svg>
                                    Members only <a class="ml-2 px-1 bg-gray-300 hover:bg-gray-200 rounded-sm" href="">Login</a>
                                </p>
                                <div class="text-black font-bold text-xl mb-2">
                                    <a class="hover:underline" href="">Can coffee make you a better developer?</a>
                                </div>
                                <a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Design</a>
                                <a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Design</a>
                                <a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Design</a>
                                <p class="text-grey-darker text-base mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                            </div>
                            <div class="flex items-center flex-wrap">
                                <img class="w-10 h-10 rounded-md mr-4" src="https://pbs.twimg.com/profile_images/885868801232961537/b1F6H4KC_400x400.jpg" alt="Avatar of Jonathan Reinink">
                                <div class="text-sm mr-4">
                                    <p class="text-black leading-none">
                                        <a href="" class="hover:underline">Jonathan Reinink</a>
                                    </p>
                                    <p class="text-grey-dark">Aug 18</p>
                                </div>
                                <div class="flex-1 items-center mt-3 sm:mt-0">
                                    <div class="flex space-x-4 justify-end">
                                        <a href="/" aria-label="Likes" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
                                            <div class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700">
                                                    <polyline points="6 23 1 23 1 12 6 12" fill="none" stroke-miterlimit="10"></polyline>
                                                    <path d="M6,12,9,1H9a3,3,0,0,1,3,3v6h7.5a3,3,0,0,1,2.965,3.456l-1.077,7A3,3,0,0,1,18.426,23H6Z" fill="none" stroke="currentColor" stroke-miterlimit="10"></path>
                                                </svg>
                                            </div>
                                            <p class="font-semibold">7.4K</p>
                                        </a>
                                        <a href="/" aria-label="Comments" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
                                            <div class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700">
                                                    <polyline points="23 5 23 18 19 18 19 22 13 18 12 18" fill="none" stroke-miterlimit="10"></polyline>
                                                    <polygon points="19 2 1 2 1 14 5 14 5 19 12 14 19 14 19 2" fill="none" stroke="currentColor" stroke-miterlimit="10"></polygon>
                                                </svg>
                                            </div>
                                            <p class="font-semibold">81</p>
                                        </a>
                                        <a href="/" aria-label="shares" class="flex items-start text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700 group">
                                            <div class="mr-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none" stroke="currentColor" class="w-5 h-5 text-gray-600 transition-colors duration-200 group-hover:text-deep-purple-accent-700">
                                                    <circle cx="18" cy="5" r="3"></circle>
                                                    <circle cx="6" cy="12" r="3"></circle>
                                                    <circle cx="18" cy="19" r="3"></circle>
                                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                                </svg>
                                            </div>
                                            <p class="font-semibold">22</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center"><span class="font-light text-gray-600">mar 4,
                                2019</span><a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Design</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Accessibility tools for
                                designers and developers</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex justify-between items-center mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-md hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Jane Doe</h1>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center"><span class="font-light text-gray-600">Feb 14,
                                2019</span><a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">PHP</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">PHP:
                                Array to Map</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex justify-between items-center mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-md hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Lisa Way</h1>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center"><span class="font-light text-gray-600">Dec 23,
                                2018</span><a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Django</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Django
                                Dashboard - Learn by Coding</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex justify-between items-center mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-md hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Steve Matt</h1>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                        <div class="flex justify-between items-center"><span class="font-light text-gray-600">Mar 10,
                                2018</span><a href="#" class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Testing</a>
                        </div>
                        <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">TDD
                                Frist</a>
                            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                        </div>
                        <div class="flex justify-between items-center mt-4"><a href="#" class="text-blue-500 hover:underline">Read more</a>
                            <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80" alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-md hidden sm:block">
                                    <h1 class="text-gray-700 font-bold hover:underline">Khatab Wedaa</h1>
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <div class="flex">
                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-500 font-medium rounded-md cursor-not-allowed">
                            previous
                        </a>

                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            1
                        </a>

                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            2
                        </a>

                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            3
                        </a>

                        <a href="#" class="mx-1 px-3 py-2 bg-white text-gray-700 font-medium hover:bg-blue-500 hover:text-white rounded-md">
                            Next
                        </a>
                    </div>
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
    <div class="pt-8 px-6 bg-black text-white">
        <div class="w-full border-gray-300 lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto">
            <div class="container mx-auto pt-6">
                <div class="grid gap-8 row-gap-5 mb-8 lg:grid-cols-6">
                    <div class="md:max-w-md lg:col-span-2">
                        <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                            <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                                <rect x="3" y="1" width="7" height="12"></rect>
                                <rect x="3" y="17" width="7" height="6"></rect>
                                <rect x="14" y="1" width="7" height="6"></rect>
                                <rect x="14" y="11" width="7" height="12"></rect>
                            </svg>
                            <span class="ml-2 text-xl font-bold tracking-wide text-gray-200 uppercase">Company</span>
                        </a>
                        <div class="mt-4 lg:max-w-sm">
                            <p class="text-sm text-gray-200">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                            </p>
                            <p class="mt-4 text-sm text-gray-200">
                                Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-5 row-gap-4 lg:col-span-4 md:grid-cols-4">
                        <div>
                            <p class="font-semibold tracking-wide text-gray-200">Category</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="text-gray-300 transition-colors duration-300 hover:text-gray-200">News</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">World</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Games</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">References</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p class="font-semibold tracking-wide text-gray-800">Business</p>
                            <ul class="mt-2 space-y-2">
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Web</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">eCommerce</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Business</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Entertainment</a>
                                </li>
                                <li>
                                    <a href="/" class="text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Portfolio</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-span-2 border p-5 rounded-md shadow-md">
                            <div class="flex mb-5 align-center">
                                <svg class="w-10 h-10 text-gray-300 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" width="512" height="512.002" viewBox="0 0 512 512.002">
                                    <g transform="translate(0 0.002)">
                                        <path d="M64,257.6,227.9,376a47.72,47.72,0,0,0,56.2,0L448,257.6V96a32,32,0,0,0-32-32H96A32,32,0,0,0,64,96ZM160,160a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Zm0,80a16,16,0,0,1,16-16H336a16,16,0,0,1,16,16v16a16,16,0,0,1-16,16H176a16,16,0,0,1-16-16Z" opacity="0.4"></path><path d="M352,160a16,16,0,0,0-16-16H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16Zm-16,64H176a16,16,0,0,0-16,16v16a16,16,0,0,0,16,16H336a16,16,0,0,0,16-16V240A16,16,0,0,0,336,224ZM329.4,41.4C312.6,29.2,279.2-.3,256,0c-23.2-.3-56.6,29.2-73.4,41.4L152,64H360ZM64,129c-23.9,17.7-42.7,31.6-45.6,34A48,48,0,0,0,0,200.7v10.7l64,46.2Zm429.6,34c-2.9-2.3-21.7-16.3-45.6-33.9V257.6l64-46.2V200.7A48,48,0,0,0,493.6,163ZM256,417.1a79.989,79.989,0,0,1-46.888-15.192L0,250.9V464a48,48,0,0,0,48,48H464a48,48,0,0,0,48-48V250.9l-209.1,151A80,80,0,0,1,256,417.1Z"></path>
                                    </g>
                                </svg>
                                <h1 class="text-xl md:text-2xl font-bold leading-tight text-gray-100">Stay in the loop</h1>
                            </div>

                            <div class="card-text">
                                <p class="text-base md:text-lg text-gray-300 mt-3 ">Join 4k+ happy subscribers!</p>
                            </div>

                            <div class="card-mail mt-3">
                                <div class="bg-white rounded-lg shadow-sm border">
                                    <div class="flex flex-wrap justify-between md:flex-row">
                                        <input type="email" class="m-1 p-2 appearance-none text-gray-700 text-sm focus:outline-none border-none rounded-md flex-1" placeholder="Enter your email">
                                        <button class="w-full m-1 p-2 text-sm bg-gray-800 hover:bg-gray-600 text-gray-200 rounded-lg font-semibold uppercase lg:w-auto">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between py-5 border-t sm:flex-row">
                    <p class="text-sm text-gray-400 text-center">
                        © Copyright 2020 Lorem Inc. All rights reserved.
                    </p>
                    <div class="flex items-center justify-center space-x-4 sm:mt-0 mt-3">
                        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-gray-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                            </svg>
                        </a>
                        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"></path>
                            </svg>
                        </a>
                        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
