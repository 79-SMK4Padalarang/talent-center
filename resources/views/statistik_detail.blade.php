<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <!-- Styles -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<style>
    @import url(https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css);

    /**
 * tailwind.config.js
 * module.exports = {
 *   variants: {
 *     extend: {
 *       backgroundColor: ['active'],
 *     }
 *   },
 * }
 */
    .active\:bg-gray-50:active {
        --tw-bg-opacity: 1;
        background-color: rgba(249, 250, 251, var(--tw-bg-opacity));
    }

    [x-cloak] {
        display: none;
    }
</style>

<body class="">



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




    {{-- KEMBALI --}}
    <div class="w-[93%] ml-[100px] ">
        <a href="admin.blade.php" class="ml-[220px] font-bold mb-10 text-xm "> Kembali</h1>
    </div>
    </a href>


    <div>
        <div class="ml-[320px] text-xl font-bold">Detail Talent</div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <form>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div class="flex ml-[300px]">
                <div class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="pl-0">
                        <div
                            class="w-96 h-60 px-6 pt-6 bg-white rounded-xl flex-col justify-start items-start inline-flex">
                            <div
                                class="Frame678 self-stretch pb-5 border-b border-gray-100 justify-between items-start inline-flex">
                                <div class="Frame673 justify-start items-center gap-10 flex">
                                    <div class="Frame156 justify-end items-end gap-2.5 flex">
                                        <div class="flex-col justify-center items-center gap-1 inline-flex">
                                            <img class="w-24 h-24 rounded-xl flex-col justify-center items-center gap-2.5 flex"
                                                src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
                                            <div
                                                class="MediumButtonsAndStates justify-center items-center inline-flex">
                                                <div
                                                    class="flex items-center p-5 px-12 py-2 border-gray-200 rounded-lg dark:border-gray-600">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-col justify-start items-start gap-5 inline-flex">
                                        <div class="justify-start items-center gap-5 inline-flex">
                                            <div class="text-gray-700 text-2xl font-bold">Jude belligham</div>
                                            <div class="justify-start items-start gap-5 flex">
                                                <div class="h-6 justify-start items-start gap-52 flex">
                                                    <div
                                                        class="w-20 px-5 py-2 bg-green-600 rounded-full justify-center items-center gap-2 flex">
                                                        <div class="text-white font-semibold text-xs">
                                                            Active</div>
                                                    </div>
                                                </div>
                                                <div class="h-6 justify-start items-start gap-52 flex">
                                                    <div
                                                        class="w-20 px-5 py-2 bg-slate-500 rounded-full justify-center items-center gap-2 flex">
                                                        <div class="text-white text-xs font-semibold">
                                                            On Site</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex ml-[350px]">
                                    <div class="justify-center items-center flex">
                                        <div
                                            class="flex items-center p-5 px-2.5 py-2 border-gray-200 rounded-lg dark:border-gray-600">
                                           <a href ="tambah_data.blade.php" class=" text-xm font-semibold ml-20 mt-1 px-6 py-2 bg-white text-blue-600 border border-blue-600 rounded cursor-pointer"> <i class=" fas fa-pen"> </i>
                                                edit profil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-start items-start gap-14 inline-flex">
                                <div class="justify-start items-start flex">
                                    <div
                                        class="py-1 justify-center items-center gap-5 flex">
                                        <a href="detail_talent.blade.php" class="text-slate-500 text-base font-medium">Profile
                                        </a>
                                    </div>
                                </div>
                                <div class="justify-start items-start flex">
                                    <div class="py-1 border-b-2 border-blue-500 justify-center items-center gap-5 flex">
                                        <a href="statistik_detail.blade.php" class="text-blue-500 text-base font-medium">
                                            Statistik</a>
                                    </div>
                                </div>
                            </div>
<div class="flex justify-beetwen">
<div class ="block">
<div> 

<div class=" mt-8 AnalyticsTopCard w-96 h-24 px-6 py-4 bg-slate-200 rounded-xl shadow justify-between items-start inline-flex">
  <div class="Frame12 flex-col justify-start items-start gap-2 inline-flex">
    <div class="font-semibold text-gray-600 flex items-center justify-center">Total Requested</div>
    <div class="Frame11 flex-col justify-start items-start gap-2 flex">
    <div class="font-semibold text-xl Frame11 flex-col justify-start items-start gap">140</div>
      <div class="Frame10"></div>
    </div>
  </div>
  <i class="text-xl rounded-md fas fa-solid fa-envelope"></i>
</div>



<div class="ml-[10vh] AnalyticsTopCard w-96 h-24 px-6 py-4 bg-slate-200 rounded-xl shadow justify-between items-start inline-flex">
  <div class="Frame12 flex-col justify-start items-start gap-2 inline-flex">
    <div class="font-semibold text-gray-600 flex items-center justify-center">Project Completed</div>
    <div class="Frame11 flex-col justify-start items-start gap-2 flex">
    <div class="font-semibold text-xl Frame11 flex-col justify-start items-start gap ">70</div>
      <div class="Frame10"></div>
    </div>
  </div>
  <i class=" text-xl rounded-md fas fa-solid fa-thumbs-up"></i></a>
</div>



</form>
       
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

        <script>
            
           
          
        </script>
