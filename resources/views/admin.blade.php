<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

</head>

<body class="bg-bg">



    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-7 py-4 bg-gray-50 dark:bg-gray-100 absolute">
            <ul class="space-y-2 font-medium">



                <li class="mb-10 p-3 pt-10">
                    <a href="#"
                        class="flex items-center p-2 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-200 group">
                        <img src="https://seeklogo.com/images/P/padepokan-79-logo-5794F3FD14-seeklogo.com.png"
                            alt="" width="100%" />
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg  hover:text-blue-700 dark:hover:bg-sky-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg  hover:text-blue-700 dark:hover:bg-sky-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Daftar Talent</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg  hover:text-blue-700 dark:hover:bg-sky-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Daftar Client</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg  hover:text-blue-700 dark:hover:bg-sky-700 group">
                        <svg class="w-6 h-6  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Daftar Persetujuan Talent</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-400 rounded-lg  hover:text-blue-700 dark:hover:bg-bg-700 group">
                        <svg class="w-6 h-6  text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Kelola User</span>
                        <svg class="w-3 h-3 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </aside>




    <nav class="mt-[70px] bg-bg border-gray-200 dark:bg-gray-200 dark:border-gray-40">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">

            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">


                </ul>
            </div>
        </div>
    </nav>





    <div class="w-[93%] ml-[100px]">

        <h1 class="ml-[220px] font-bold mb-10 text-2xl "> Daftar Talent</h1>


        <div class="flex ml-[180px]">
            <!-- search-->
            <div class="mt-10 p-4 m-2"> <label for="table-search" class="sr-only">Search</label>
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg><Var></Var>
                    </div>
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-blue-500 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required>

                </div>
            </div>

            <!-- Action -->
            <div class="p-4 m-2">

                <select id="countries"
                    class="mt-10 bg-gray-50 text-base font-semibold border border-blue-500 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Filter Level</option>
                    <option class="text-base font-semibold" value="US">Junior</option>
                    <option class="text-base font-semibold" value="CA">Midlle</option>
                    <option class="text-base font-semibold" value="FR">Senior</option>
                    <option class="text-base font-semibold" value="DE">Lead Engineer</option>
                    <option class="text-base font-semibold" value="DE">Principai</option>
                </select>

            </div>

            <div class="p-4 m-2">

                <select id="countries"
                    class="mt-10 bg-gray-50 text-base font-semibold border border-blue-500 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Filter Pengalaman</option>
                    <option class="text-base font-semibold" value="US">0-1 Tahun</option>
                    <option class="text-base font-semibold" value="CA">2-4 Tahun</option>
                    <option class="text-base font-semibold" value="FR">5+ Tahun</option>

                </select>

            </div>

            <div class="p-4 m-2">

                <select id="countries"
                    class="mt-10 bg-gray-50 text-base font-semibold border border-blue-500 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Filter Status</option>
                    <option class="text-base font-semibold" value="US">On Site</option>
                    <option class="text-base font-semibold" value="CA">Non Onsite</option>

                </select>

            </div>

            <div class="p-4 m-2">

                <select id="countries"
                    class="mt-10 text-base font-semibold bg-gray-50 border border-blue-500 text-gray-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Filter Kepegawaian</option>
                    <option class="text-base font-semibold"value="us">Active</option>
                    <option class="text-base font-semibold"value="CA">Non Active</option>

                </select>



            </div>

            <div class="p-4 m-2">

                <select id="countries"
                    class="mt-10 text-base font-semibold bg-gray-50 border border-blue-500 text-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Urutkan</option>
                    <option  class="text-base font-semibold "value=>A-Z</option>
                    <option class="text-base font-semibold "value="CA">Z-A</option>
                    <option class="text-base font-semibold "value="FR">Level+</option>
                    <option class="text-base font-semibold "value="FR">Level-</option>
                    <option class="text-base font-semibold "value="DE">Pengalaman+ </option>
                    <option class="text-base font-semibold "value="DE">Pengalaman- </option>
                    <option class="text-base font-semibold "value="DE">Status On Site</option>
                    <option class="text-base font-semibold "value="DE">Status Non Onsite</option>
                    <option class="text-base font-semibold "value="DE">Kepegawaian Active</option>
                    <option class="text-base font-semibold "value="DE">Kepegawaian Non Active</option>
                </select>


                {{-- TAMBAH TALENT --}}
                <a href="edit.blade.php"
                    class="w-full p-2.5 h-13 relative bottom-24 right-30 left-30 mb-0 bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-9 border border-blue-500 rounded-xl p-4">
                    + Tambah Talent
                </a href>

            </div>


        </div>


        <label for="table-search" class="sr-only">Search</label>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[85%] ml-[200px]">
            <div class="mt-40flex items-center justify-between py-4 bg-white dark:bg-gray-800">



                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>

                            <th scope="col" class="p-4">
                                <div class="flex items-center">

                                </div>
                            </th>
                            <th scope="col" class="font-semibold text-gray-400 px-5 py-3 ">
                                Talent
                            </th>
                            <th scope="col" class="text-gray-400 px-7 py-3 ">
                                Level
                            </th>
                            <th scope="col" class="text-gray-400 px-6 py-3 ">
                                Pengalaman
                            </th>
                            <th scope="col" class="text-gray-400 px-6 py-3 ">
                                Status
                            </th>
                            <th scope="col" class="text-gray-400 px-6 py-3 ">
                                Kepagawaian
                            </th>
                            <th scope="col" class="text-gray-400 px-10 py-3 ">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>



                        {{-- ini --}}




                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">

                                </div>
                            </td>
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                {{-- foto avatar --}}
                                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">Jude Belligham</div>
                            </th>
                            <td class="text-base text-gray-600 font-semibold px-6 py-4">
                                Senior
                            </td>
                            <td class="text-base text-gray-600 font-semibold px-6 py-4">
                                4 Tahun
                            </td>
                            <td class="px-6 py-4">
                                <div
                                    class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-gray-500 mr-2">
                                    On Site
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div
                                        class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-green-600 mr-2">
                                        Active
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <!-- Modal toggle -->
                                <a href="detail_talent.blade.php"><i class=" text-2xl fas fa-eye"></i></a>
                                <a href="tambah_data.blade.php"><i
                                        class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
                            </td>
                        </tr>

                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">

                                </div>

            </div>
            </td>
            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                {{-- foto avatar --}}
                <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                    src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                    alt="">
                <div class="pl-3">
                    <div class="text-base font-semibold">Josellu</div>
            </th>
            <td class="text-base text-gray-600 font-semibold px-6 py-4">
                Senior
            </td>
            <td class="text-base text-gray-600 font-semibold px-6 py-4">
                4 Tahun
            </td>
            <td class="px-6 py-4">
                <div
                    class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-gray-500 mr-2">
                    On Site</div>
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center">
                    <div
                        class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-green-600 mr-2">
                        Active</div>
                </div>
            </td>
            <td class="px-6 py-4">
                <!-- Modal toggle -->
                <a href=""><i class=" text-2xl fas fa-eye"></i></a>
                <a href=""><i class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
            </td>
            </tr>

            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">

                    </div>


                </td>
                <th scope="row"
                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- foto avatar --}}
                    <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="pl-3">
                        <div class="text-base font-semibold">Irsyad Junior</div>
                </th>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    Senior
                </td>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    4 Tahun
                </td>
                <td class="px-6 py-4">
                    <div
                        class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-gray-500 mr-2">
                        On Site</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div
                            class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-green-600 mr-2">
                            Active</div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href=""><i class=" text-2xl fas fa-eye"></i></a>
                    <a href=""><i class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
                </td>
            </tr>

            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-2">
                    <div class="flex items-center">

                    </div>



                </td>
                <th scope="row"
                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- foto avatar --}}
                    <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="pl-3">
                        <div class="text-base font-semibold">Luca Modric</div>
                </th>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    Junior
                </td>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    3 Tahun
                </td>
                <td class="px-6 py-4">
                    <div
                        class="text-gray font-semibold flex items-center justify-center h-7 w-32 rounded-full bg-gray-200 mr-2">
                        Non Onsite</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div
                            class="text-white font-semibold flex items-center justify-center h-7 w-32 rounded-full bg-red-600 mr-2">
                            Non Active</div>
                    </div>
                </td>
                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href=""><i class=" text-2xl fas fa-eye"></i></a>
                    <a href=""><i class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
                </td>
            </tr>

            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-2">
                    <div class="flex items-center">

                    </div>


                </td>
                <th scope="row"
                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- foto avatar --}}
                    <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="pl-3">
                        <div class="text-base font-semibold">Rodrigo Dos Santos</div>
                </th>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    Midlle
                </td>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    4 Tahun
                </td>
                <td class="px-6 py-4">
                    <div
                        class="text-gray font-semibold flex items-center justify-center h-7 w-32 rounded-full bg-gray-200 mr-2">
                        Non Onsite</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div
                            class="text-white font-semibold flex items-center justify-center h-7 w-32 rounded-full bg-red-600 mr-2">
                            Non Active</div>
                    </div>
                </td>


                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href=""><i class=" text-2xl fas fa-eye"></i></a>
                    <a href=""><i class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
                </td>
            </tr>

            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">

                    </div>
                </td>
                <th scope="row"
                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- foto avatar --}}
                    <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="pl-3">
                        <div class="text-base font-semibold">Federico</div>
                </th>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    Senior
                </td>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    4 Tahun
                </td>
                <td class="px-6 py-4">
                    <div
                        class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-gray-500 mr-2">
                        On Site</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div
                            class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-green-600 mr-2">
                            Active</div>
                    </div>

                </td>
                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href=""><i class=" text-2xl fas fa-eye"></i></a>
                    <a href=""><i class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
                </td>
            </tr>

            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">

                    </div>
                </td>
                <th scope="row"
                    class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    {{-- foto avatar --}}
                    <img class="inline-block h-10 w-10 rounded-full ring-2 ring-white"
                        src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="pl-3">
                        <div class="text-base font-semibold">Eduardo Camavinga</div>
                </th>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    Senior
                </td>
                <td class="text-base text-gray-600 font-semibold px-6 py-4">
                    4 Tahun
                </td>
                <td class="px-6 py-4">
                    <div
                        class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-gray-500 mr-2">
                        On Site</div>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div
                            class="text-white font-semibold flex items-center justify-center h-7 w-20 rounded-full bg-green-600 mr-2">
                            Active</div>
                    </div>

                <td class="px-6 py-4">
                    <!-- Modal toggle -->
                    <a href=""><i class=" text-2xl fas fa-eye"></i></a>
                    <a href=""><i class="ml-4 text-xl text-blue-500 fas fa-pen"></i></a>
                </td>
            </tr>
        </div>

        </tbody>
        </table>
        <!-- Edit user modal -->
        <div id="editUserModal" tabindex="-1" aria-hidden="true"
            class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <form action="#" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit user
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="editUserModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                                    Name</label>
                                <input type="text" name="first-name" id="first-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Bonnie" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                    Name</label>
                                <input type="text" name="last-name" id="last-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Green" required="">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone-number"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone
                                    Number</label>
                                <input type="number" name="phone-number" id="phone-number"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="e.g. +(12)3456 789" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="department"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
                                <input type="text" name="department" id="department"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Development" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                                <input type="number" name="company" id="company"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="123456" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="current-password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Current
                                    Password</label>
                                <input type="password" name="current-password" id="current-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="••••••••" required="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new-password"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                    Password</label>
                                <input type="password" name="new-password" id="new-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="••••••••" required="">
                            </div>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                            all</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <nav aria-label="Page navigation example">
        <ul class="inline-flex -space-x-px text-sm">
            <li>
                <a href="#"
                    class="text-xl flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-blue rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Entries</a>
            </li>
            <li>
                <a href="#"
                    class="text-xl flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-blue hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">10</a>
            </li>
            <li>
                <a href="#"
                    class="text-xl flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-blue  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">20</a>
            </li>
            <li>
                <a href="#"
                    class="text-xl flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-blue  hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">50</a>
            </li>
            <li>

        </ul>
    </nav>



    </div>




</body>

</html>
