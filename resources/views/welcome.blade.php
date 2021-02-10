<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="bg-gray-100 overflow-x-hidden">
        <nav class="bg-white px-6 py-4 shadow">
            <div class="flex flex-col container mx-auto md:flex-row md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div>
                        <a href="#" class="text-gray-800 text-xl font-bold md:text-2xl">Brand</a>
                    </div>
                    <div>
                        <button type="button" class="block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden">
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="md:flex flex-col md:flex-row md:-mx-4 hidden">
                    <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Home</a>
                    <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">Blog</a>
                    <a href="#" class="my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0">About us</a>
                </div>
            </div>
        </nav>

        <div class="px-6 py-8">
            <div class="flex justify-between container mx-auto">
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
                        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                            <div class="flex justify-between items-center"><span class="font-light text-gray-600">Jun 1,
                                2020</span><a href="#"
                                              class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Laravel</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Build
                                    Your New Idea with Laravel Freamwork.</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                   class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                            alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                        <h1 class="text-gray-700 font-bold hover:underline">Alex John</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                            <div class="flex justify-between items-center"><span class="font-light text-gray-600">mar 4,
                                2019</span><a href="#"
                                              class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Design</a>
                            </div>
                            <div class="mt-2"><a href="#"
                                                 class="text-2xl text-gray-700 font-bold hover:underline">Accessibility tools for
                                    designers and developers</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                   class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                            alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                        <h1 class="text-gray-700 font-bold hover:underline">Jane Doe</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                            <div class="flex justify-between items-center"><span class="font-light text-gray-600">Feb 14,
                                2019</span><a href="#"
                                              class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">PHP</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">PHP:
                                    Array to Map</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                   class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                            alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                        <h1 class="text-gray-700 font-bold hover:underline">Lisa Way</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                            <div class="flex justify-between items-center"><span class="font-light text-gray-600">Dec 23,
                                2018</span><a href="#"
                                              class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Django</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">Django
                                    Dashboard - Learn by Coding</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                   class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                            alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
                                        <h1 class="text-gray-700 font-bold hover:underline">Steve Matt</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="max-w-4xl px-10 py-6 bg-white rounded-lg shadow-md">
                            <div class="flex justify-between items-center"><span class="font-light text-gray-600">Mar 10,
                                2018</span><a href="#"
                                              class="px-2 py-1 bg-gray-600 text-gray-100 font-bold rounded hover:bg-gray-500">Testing</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl text-gray-700 font-bold hover:underline">TDD
                                    Frist</a>
                                <p class="mt-2 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex justify-between items-center mt-4"><a href="#"
                                                                                   class="text-blue-500 hover:underline">Read more</a>
                                <div><a href="#" class="flex items-center"><img
                                            src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                            alt="avatar" class="mx-4 w-10 h-10 object-cover rounded-full hidden sm:block">
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
                <div class="-mx-8 w-4/12 hidden lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
                        <div class="flex flex-col bg-white max-w-sm px-6 py-4 mx-auto rounded-lg shadow-md">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Alex John</a><span
                                            class="text-gray-700 text-sm font-light">Created 23 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80"
                                        alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Jane Doe</a><span
                                            class="text-gray-700 text-sm font-light">Created 52 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80"
                                        alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Lisa Way</a><span
                                            class="text-gray-700 text-sm font-light">Created 73 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80"
                                        alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Steve Matt</a><span
                                            class="text-gray-700 text-sm font-light">Created 245 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img
                                        src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80"
                                        alt="avatar" class="w-10 h-10 object-cover rounded-full mx-4">
                                    <p><a href="#" class="text-gray-700 font-bold mx-1 hover:underline">Khatab
                                            Wedaa</a><span class="text-gray-700 text-sm font-light">Created 332 Posts</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10 px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                        <div class="flex flex-col bg-white px-4 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                            <ul>
                                <li><a href="#" class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                        AWS</a></li>
                                <li class="mt-2"><a href="#"
                                                    class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                        Laravel</a></li>
                                <li class="mt-2"><a href="#"
                                                    class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- Vue</a>
                                </li>
                                <li class="mt-2"><a href="#"
                                                    class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                        Design</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                                                      class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">-
                                        Django</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                                                      class="text-gray-700 font-bold mx-1 hover:text-gray-600 hover:underline">- PHP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-10 px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
                        <div class="flex flex-col bg-white px-8 py-6 max-w-sm mx-auto rounded-lg shadow-md">
                            <div class="flex justify-center items-center"><a href="#"
                                                                             class="px-2 py-1 bg-gray-600 text-sm text-green-100 rounded hover:bg-gray-500">Laravel</a>
                            </div>
                            <div class="mt-4"><a href="#" class="text-lg text-gray-700 font-medium hover:underline">Build
                                    Your New Idea with Laravel Freamwork.</a></div>
                            <div class="flex justify-between items-center mt-4">
                                <div class="flex items-center"><img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="w-8 h-8 object-cover rounded-full"><a href="#"
                                                                                                  class="text-gray-700 text-sm mx-3 hover:underline">Alex John</a></div><span
                                    class="font-light text-sm text-gray-600">Jun 1, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-12 px-6">
            <div class="w-full border-gray-300 border-t lg:w-11/12 md:w-11/12 lg:mx-auto md:mx-auto">
                <div class="container mx-auto pt-12">
                    <div class="xl:flex lg:flex md:flex pt-6">
                        <div class="w-11/12 xl:w-3/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0">
                            <div class="flex items-center mb-6 xl:mb-0 lg:mb-0">
                                <svg class="w-12 h-12" id="logo" enable-background="new 0 0 300 300" height="44" viewBox="0 0 300 300" width="43" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g>
                                        <path
                                            fill="#4c51bf"
                                            d="m234.735 35.532c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16zm0 24c-4.412 0-8-3.588-8-8s3.588-8 8-8 8 3.588 8 8-3.588 8-8 8zm-62.529-14c0-2.502 2.028-4.53 4.53-4.53s4.53 2.028 4.53 4.53c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.027-4.53-4.529zm89.059 60c0 2.501-2.028 4.529-4.53 4.529s-4.53-2.028-4.53-4.529c0-2.502 2.028-4.53 4.53-4.53s4.53 2.029 4.53 4.53zm-40.522-5.459-88-51.064c-1.242-.723-2.773-.723-4.016 0l-88 51.064c-1.232.715-1.992 2.033-1.992 3.459v104c0 1.404.736 2.705 1.938 3.428l88 52.936c.635.381 1.35.572 2.062.572s1.428-.191 2.062-.572l88-52.936c1.201-.723 1.938-2.023 1.938-3.428v-104c0-1.426-.76-2.744-1.992-3.459zm-90.008-42.98 80.085 46.47-52.95 31.289-23.135-13.607v-21.713c0-2.209-1.791-4-4-4s-4 1.791-4 4v21.713l-26.027 15.309c-1.223.719-1.973 2.029-1.973 3.447v29.795l-52 30.727v-94.688zm0 198.707-80.189-48.237 51.467-30.412 24.723 14.539v19.842c0 2.209 1.791 4 4 4s4-1.791 4-4v-19.842l26.027-15.307c1.223-.719 1.973-2.029 1.973-3.447v-31.667l52-30.728v94.729z"
                                        />
                                    </g>
                                </svg>
                                <p class="ml-3 font-bold text-xl">The North</p>
                            </div>
                        </div>
                        <div class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-end pl-3 sm:pl-0">
                            <ul>
                                <li class="text-gray-800 font-bold text-xl mb-6">Community</li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">About Us</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Guidelines and how to</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Quote from the best</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">How to start a blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-end pl-3 sm:pl-0">
                            <ul>
                                <li class="text-gray-800 font-bold text-xl mb-6">Getting Started</li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">About Us</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Guidelines and how to</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Quote from the best</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">How to start a blog</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Quote from the best</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Guidelines and how to</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-11/12 xl:w-1/6 lg:w-2/5 mx-auto lg:mx-0 xl:mx-0 pt-3 xl:flex xl:justify-end pl-3 sm:pl-0">
                            <ul>
                                <li class="text-gray-800 font-bold text-xl mb-6">Resources</li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Accessibility</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Usability</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Marketplace</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Design & Dev</a>
                                </li>
                                <li class="text-base text-gray-600 hover:text-gray-700 mb-5">
                                    <a href="javascript:void(0)">Marketplace</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="xl:flex flex-wrap justify-between xl:mt-24 mt-16 pb-6 pl-3 sm:pl-0">
                        <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 xl:mb-0">
                            <p class="text-gray-800 text-base">2020 The North. All Rights Reserved</p>
                        </div>
                        <div class="w-11/12 xl:w-2/6 mx-auto lg:mx-0 xl:mx-0 mb-6 lg:mb-0 xl:mb-0">
                            <ul class="xl:flex lg:flex md:flex sm:flex justify-between">
                                <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a href="javascript:void(0)">Terms of service</a>
                                </li>
                                <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a href="javascript:void(0)">Privacy Policy</a>
                                </li>
                                <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a href="javascript:void(0)">Security</a>
                                </li>
                                <li class="text-gray-800 hover:text-gray-900 text-base mb-4 sm:mb-0">
                                    <a href="javascript:void(0)">Sitemap</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-11/12 xl:w-1/6 lg:w-1/6 sm:w-11/12 mx-auto lg:mx-0 xl:mx-0">
                            <div class="flex justify-start sm:justify-start xl:justify-end space-x-6 pr-2 xl:pr-0 lg:pr-0 md:pr-0 sm:pr-0">
                                <div>
                                    <a href="javascript:void(0)">
                                        <svg aria-label="Twitter" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter">
                                            <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <svg aria-label="Instagram" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram">
                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <svg aria-label="Dribble" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-dribbble" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#718096" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="M9 3.6c5 6 7 10.5 7.5 16.2" />
                                            <path d="M6.4 19c3.5-3.5 6-6.5 14.5-6.4" />
                                            <path d="M3.1 10.75c5 0 9.814-.38 15.314-5" />
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <svg aria-label="Github" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                            <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </body>
</html>
