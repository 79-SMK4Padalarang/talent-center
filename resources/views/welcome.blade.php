<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project</title>
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Observer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EaselPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/PixiPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    <!-- Register Need -->
    <link rel="stylesheet" href="{{ asset('assets/CSS/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/JS/main.js') }}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira Sans" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('node_modules\flatpickr\dist\flatpickr.css') }}"">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="{{ asset('node_modules\flatpickr\dist\flatpickr.min.js') }}"></script>

    <!-- RoughEase, ExpoScaleEase and SlowMo are all included in the EasePack file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CustomEase.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
    <style>
        .hide {
            display: none;
        }

        .show {
            display: block;
        }

        .popup {
            transition: all 5s ease-in-out;
            position: relative;
        }

        .txt {
            display: none;
        }

        br {
            display: block;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <!--Header Start-->
    <header class="fixed left-0 top-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="flex gap-2">
                    <img src="/img/logo79favicon.png" alt="logo 79" srcset=""
                        class="flex w-[70px] h-[50px] rounded" />
                    <a href="#home" class="text-white block py-3 text-lg font-bold">TALENT CENTER 79</a>
                </div>
                <div class="flex items-center px-4">
                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden w-full rounded-lg py-5 lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a class="text-white group-hover:text-grey2 mx-8 flex py-2 text-base" onclick= "my_modal_2.showModal()">Register</a>
                            </li>
                            <li class="group">
                                <button
                                    class="button text-white flex rounded-full bg-transparent px-8 py-2 text-base transition duration-300 ease-in-out hover:opacity-80  border border-white hover:border-black hover:text-black hover:bg-white"
                                    onclick= "my_modal_1.showModal()">Sign In</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->

    <!--Hero section start--->
    <section id="home" class="relative sm:max">
        <div class="bg-cover bg-center">
            <img src="/img/annie-spratt-hCb3lIB8L8E-unsplash 1.png">
        </div>
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="absolute bottom-60 w-full pb-32">

            <dialog id="my_modal_2" class="modal rounded-lg z-50">
            @if (session('success'))
                <div style="position:absolute; top: 3px; left: 67px; width: 75%; height: 6%; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background: #30A952; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; gap: 50px; display: inline-flex">
                <div class="center" style="color: #FDFDFD; font-size: 15px; font-family: Inter; font-weight: 700; word-wrap: break-word">{{ session('success') }}</div>
                </div>
            @elseif (session('email_error'))
                <div style="position:absolute; top: 3px; left: 67px; width: 75%; height: 6%; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background: #CF1D1D; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; gap: 50px; display: inline-flex">
                <div class="center" style="color: #FDFDFD; font-size: 15px; font-family: Inter; font-weight: 700; word-wrap: break-word">{{ session('email_error') }}</div>
                </div>
            @elseif (session('other_error'))
                <div style="position:absolute; top: 3px; left: 67px; width: 75%; height: 6%; padding-left: 20px; padding-right: 20px; padding-top: 10px; padding-bottom: 10px; background: #CF1D1D; border-radius: 5px; overflow: hidden; justify-content: center; align-items: center; gap: 50px; display: inline-flex">
                <div class="center" style="color: #FDFDFD; font-size: 15px; font-family: Inter; font-weight: 700; word-wrap: break-word">{{ session('other_error') }}</div>
                </div>
            @endif
            <p></p>
            <div class="modal-box">
                <!-- Register container -->
                <form name="registerForm" id="registerForm" method="POST" action="api/user-management/users/register" class="center">
                @csrf
                <div class="flex justify-center bg-white p-5">
                    <div class="relative">
                    <div class="unit">
                        <div class="unit-a">
                        <div class="unit-b">
                            <button class="popup-close absolute right-2.5 top-3 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900" aria-label="Close">
                            <svg aria-hidden="true" class="h-5 w-5" fill="#000000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" cliprule="evenodd"></path>
                            </svg>
                            </button>
                        </div>
                        </div>
                    </div>
                    <p></p>
                    <!-- form -->
                    <div class="center top">
                        <div class="top-1">
                            <div class="regis">Register</div>
                            <div class="regis-1">Register so you can choose and request our talent</div>
                        </div>
                        <div class="regis-2">
                            <div class="regis-3">
                                <div class="regis-4">
                                    <div class="regis-5">
                                    <input id="first_name" name="first_name" class="name" placeholder="First Name" value="{{ old('first_name') }}" required="required">
                                    </div>
                                    <div class="regis-5">
                                    <input id="last_name" name="last_name" value="{{ old('last_name') }}" class="name-last" placeholder="Last Name" required="required">
                                    </div>
                                </div>
                                <div class="form">
                                <input id="email" name="email" value="{{ old('email') }}" class="email-style" type="email" placeholder="Email" required="required">
                                </div>
                                <div class="form-1">
                                    <div class="form-p">
                                    <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-dup" type="password" placeholder="Password" required="required">
                                        <span id="passwordDisplay"></span>
                                        <div onclick="changeIcon(this)" onclick="togglePasswordVisibility()" id="myBtn">
                                            <i id="faPlus" class="far fa-eye icon fa-regular fa-eye fa-sm" style="position: absolute; left: 430px; top: 257px; color: #848484;"></i>
                                        </div>
                                    </div>
                                    <span></span>
                                    <div class="pw-again">
                                        <div class="password-validate">
                                            <div class="form-7">
                                                <div class="form-6">
                                                    <i id="icon1" class="fa-solid fa-times fa-sm invalid" style="position: relative; left: 2px; top: 5px;"></i>
                                                </div>
                                            </div>
                                            <div id="length" class="checkbox invalid" style="position: relative; left: 0px; top: 7px;">Password is at least 8 characters long</div>
                                        </div>
                                        <div class="password-validate">
                                            <div class="form-4">
                                                <div class="form-5">
                                                    <i id="icon2" class="fa-solid fa-times fa-sm invalid" style="position: relative; left: 2px; top: -3px;"></i>
                                                </div>
                                            </div>
                                            <div id="letterNumber" class="checkbox invalid" style="position: relative; left: 0px; top: -1px;">Password contains at least one letter and one number</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-1">
                                    <div class="form-p">
                                    <input id="passwordAgain" name="passwordAgain" class="form-dup" type="password" value="{{ old('passwordAgain') }}" oninput="maskPassword()" autocomplete="off"  placeholder="Type in your password again" required="required">
                                        <div onclick="changeIcon2(this)" id="myBtn">
                                            <i id="faPlus" class="fa-regular fa-eye fa-sm" style="position: absolute; left: 430px; top: 377px; height: 10px; color: #848484;"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="gender-b">
                                    <div class="gender-a">
                                        <div class="gender">Gender</div>
                                        <div class="gender">
                                        <div class="bch">
                                                <div class="bch-a">
                                                    <input id="sex" name="sex" class="bch-b" type="radio" name="gender" value="Male" checked>
                                                </div>
                                                <div style="color: #848484; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word; padding-top: 0px">Male</div>
                                            </div>
                                            <div class="bch">
                                                <div class="bch-a">
                                                    <input id="sex" name="sex" class="bch-b" type="radio" name="gender" value="female">
                                                </div>
                                                <div style="color: #848484; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word; padding-top: 0px;">Female</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="back-box">
                                <input type="text" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" class="box" placeholder="Date of birth" required="required">
                                    <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        flatpickr("#birth_date", {
                                            appendTo: document.querySelector("#birth_date").parentNode,
                                            allowInput: true,
                                            dateFormat: "d/m/Y",
                                            onReady: function(selectedDates, dateStr, instance) {
                                            adjustPosition(instance);
                                            },
                                            onChange: function(selectedDates, dateStr, instance) {
                                            adjustPosition(instance);
                                            },
                                        });
    
                                        function adjustPosition(instance) {
                                            const inputRect = birthDateInput.getBoundingClientRect();
                                            const datePickerRect = instance.calendarContainer.getBoundingClientRect();
                                            const windowHeight = window.innerHeight;
    
                                            if (windowHeight - inputRect.bottom > datePickerRect.height) {
                                            instance.set("position", "below");
                                            } else {
                                            instance.set("position", "above");
                                            }
                                        }
                                    });
                                    </script>
                                    <div style="width: 15px; height: 14px; position: absolute; left: 429px; top: 513px;">
                                        <div style="">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="select-position">
                                    <label class="select-position-a">
                                    <select id="client_position_id" name="client_position_id" value="{{ old('client_position_id') }}" class="select-position-b" style="flex: 1 1 0; font-size: 14px; font-family: Inter; font-weight: 450; word-wrap: break-word;" required="required">
                                            <option value="" disabled="disabled" selected="selected">Client Position</option>
                                            <div style="align-self: stretch; height: 412px; padding-top: 8px; padding-bottom: 8px; background: white; border-radius: 8px; border: 1px #848484 solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 4px; display: flex">
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="492b126d-3ab1-4fe3-a962-adc4331768c9">HRD (Human Resources Director)</option>
                                            </div>
                                            {{-- <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="2">Manager</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="3">Supervisor</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="4">Staff</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="5">Executive</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="6">Consultant</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="7">Accountant</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="8">Marketing</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="9">Analyst</option>
                                            </span>
                                            <span>
                                                <option style="color: #212121; font-size: 16px; font-family: Fira Sans; font-weight: 400; line-height: 20px; word-wrap: break-word" value="10">Employee</option>
                                            </span>--}}
                                        </select>
                                        <svg>
                                            <use xlink:href="#select-arrow-down"></use>
                                        </svg>
                                        <!-- SVG Sprites-->
                                        <svg class="">
                                            <symbol id="select-arrow-down" viewbox="0 0 10 6">
                                                <polyline points="1 1 5 5 9 1"></polyline>
                                            </symbol>
                                        </svg>
                                    </label>
                                </div>
                                <div class="agency-n">
                                <input id="agency_name" name="agency_name" class="email-style" placeholder="Agency Name" value="{{ old('agency_name') }}" required="required">
                                </div>
                                <div class="agency-a">
                                <textarea id="agency_address" name="agency_address" value="{{ old('agency_address') }}" class="agency-o" placeholder="Agency Address" required="required"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="bg-button">
                        <div class="bg-button-a">
                            <button class="button-regis" type="submit">
                                <div class="regis-style">Register</div>
                            </button>
                        </div>
                        <div class="under-regis"></div>
                        <div style="align-self: center; width: 445px; height: 40px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 15px; display: flex">
                            <div style="align-self: stretch; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex">
                                <a style="flex: 1 1 0; height: 45px; padding-left: 16px; padding-right: 16px; padding-top: 8px; padding-bottom: 8px; border-radius: 5px; overflow: hidden; border: 1px #848484 solid; justify-content: center; align-items: center; gap: 7px; display: flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="13px" viewBox="0 0 488 512"><style>svg{fill:#848484}</style><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                                    <div style="color: #848484; font-size: 14px; font-family: Inter; font-weight: 600; word-wrap: break-word">Continue with Google</div>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div style="align-self: center; padding-top: 45px; justify-content: center; align-items: flex-end; gap: 5px; display: inline-flex; position: absolute; left: 120px; top: 1010px; padding-bottom: 30px;">
                        <div style="text-align: center; color: #212121; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">Already have an Account?</div>
                        <a href="#" onclick="showModal()" style="text-align: center; color: #2C8AD3; font-size: 14px; font-family: Inter; font-weight: 400; word-wrap: break-word">Sign In Here</a>
                    </div>
                </div>
                </form>
            </dialog>
        
            <dialog id="my_modal_1" class="modal rounded-lg z-50">
                <div class="modal-box">
                    <!-- login container -->
                    <form method="post" action="api/user-management/users/sign-in">
                        <div class="flex justify-center bg-white p-5">
                            <div class="relative">
                                <button
                                    class="popup-close absolute right-2.5 top-3 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="#000000" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            cliprule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close popup</span>
                                </button>
                                <!-- form -->
                                <div class="p-9">
                                    <h2 class="text-center text-2xl font-bold text-black">Welcome Back</h2>
                                    <p class="text-gray-400 mt-4 text-xs">Please sign in first to explore futher on our
                                        website</p>
                                    <input class="w-full mt-5 rounded-xl border p-2 mb-3" type="email" name="email"
                                        placeholder="Email" />
                                    <div class="relative">
                                        <input class="w-full rounded-xl border p-2" type="password" name="password"
                                            id="password" placeholder="Password" />
                                        <div
                                            id="toggle-password-button"class="absolute right-3 top-1/2 -translate-y-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="gray" viewBox="0 0 16 16" id="closed-eye">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="gray" viewBox="0 0 16 16" id="open-eye" class="hide">
                                                <path
                                                    d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486z" />
                                                <path
                                                    d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829" />
                                                <path
                                                    d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708" />
                                            </svg>
                                        </div>
                                    </div>
                                    @if (session('error'))
                                        <p style="color:red; font-family: calibri;">{{ session('error') }}</p>
                                    @endif

                                    <button class="w-full rounded-xl bg-blue3 py-2 mt-4 text-white">Login</button>

                                    <div class="mt-6 w-full grid-cols-3 items-center text-gray-400">
                                        <hr class="border-gray-400" />
                                        <hr class="border-gray-400" />
                                    </div>

                                    <button
                                        class="mt-5 flex w-full items-center justify-center rounded-xl border-2 bg-white py-2 text-sm text-grey3">
                                        <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                            width="25px" fill="#848484">
                                            <path fill="#FFC107"
                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                                            <path fill="#FF3D00"
                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                                            <path fill="#4CAF50"
                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                                            <path fill="#1976D2"
                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                                        </svg>
                                        Login with Google
                                    </button>
                                    <div class="mt-3 flex items-center justify-center text-xs">
                                        <p>Don't have an Account? <a href=""
                                                class="text-blue text-right">Register Here</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </dialog>
            <div class="sm:max absolute bottom-20 w-full pb-17 lg:bg-transparent mb-10">
                <h3 class="txt mb-10 text-center font-sans text-3xl font-bold text-white sm:text-4xl lg:text-5xl">
                    Welcome to 79 <br class="mb-5">Talent Center</h3>
                <h3 class="txt mb-10 text-center font-sans text-3xl font-bold text-white sm:text-4xl lg:text-5xl">Find a
                    Talent <br class="mb-5" />That Suits Your Requirements</h3>
                <h3 class="txt mb-10 text-center font-sans text-3xl font-bold text-white sm:text-4xl lg:text-5xl">Build
                    the Perfect Team <br class="mb-5" />For the Brighter Future</h3>


                <div class="flex justify-center mb-3">
                    <form id="updateForm" action="{{ route('update.search') }}" method="POST"
                        method="get"class="w-1/2 appearance-none rounded-full border px-8 leading-tight text-gray-700 shadow focus:outline-none bg-white">
                        @csrf
                        @method('PUT')
                        <input class="w-3/4 py-4 focus:outline-none focus-visible:outline-none" id="search-bar"
                            name = "search-bar" type="text" id="title box" type="text"
                            placeholder="Try 'ReactJS'" />
                        <button class=" border-none float-right" type="submit">
                            <div class="grid place-items-center h-full w-12 text-grey3 p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </button>
                        <div id="autocomplete-results"></div>
                    </form>
                </div>
                <div class="flex justify-center gap-2" id="button-container">
                    <p class="py-2 px-4 rounded text-white">Popular</p>
                </div>

                <!-- Register -->

                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script type="text/javascript" src="JS/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

                <script>
                const flatpickrCalendar = document.querySelector(".flatpickr-calendar");

                flatpickrCalendar.style.left = "100px";
                flatpickrCalendar.style.top = "220px";
                </script>

                <script>
                function showModal() {
                    var previousModal = document.querySelector('dialog[open]');
                    if (previousModal) {
                    previousModal.close();
                    }
                
                    var newModal = document.getElementById('my_modal_1');
                    if (newModal) {
                    newModal.showModal();
                    }
                }
                </script>

                <script>
                $( "#registerForm" ).validate({
                    rules:{
                        first_name:{
                            maxlength:100,
                        },
                        last_name:{
                            maxlength:100
                        },
                        email:{
                            email:true,
                            maxlength: 100
                        },
                        password:{
                            minlength: 8,
                            maxlength: 50
                        },
                        passwordAgain:{
                            equalTo: "#password",
                            minlength: 8,
                            maxlength: 50
                        },
                        birth_date:{
                            required: true
                        },
                        client_position_id:{
                            required: true
                        },
                        agency_name:{
                            maxlength: 100
                        },
                        agency_address:{
                            maxlength: 255
                        },
                    },
                    messages: {
                        first_name:{
                            required: "kolom nama tidak boleh kosong",
                            maxlength: "Panjang kolom tidak boleh lebih dari 100",
                        },
                        last_name:{
                            required: "kolom nama tidak boleh kosong",
                            maxlength: "Panjang kolom tidak boleh lebih dari 100"
                        },
                        email:{
                            required: "kolom email tidak boleh kosong",
                            email: "Format kolom email tidak sesuai",
                            maxlength: "Panjang kolom email tidak boleh lebih dari 100"
                        },
                        password:{
                            required: "kolom password tidak boleh kosong",
                            minlength: "Password tidak memenuhi kriteria minimal",
                            maxlength: "Password tidak memenuhi kriteria maksimal"
                        },
                        passwordAgain:{
                            required: "kolom password ulang tidak boleh kosong",
                            equalTo: "kolom tidak sama sesuai",
                            minlength: "Password tidak memenuhi kriteria minimal",
                            maxlength: "Password tidak memenuhi kriteria maksimal"
                        },
                        birth_date: {
                            required: "kolom tanggal lahir tidak boleh kosong",
                        },
                        client_position_id: {
                            required: "kolom posisi tidak boleh kosong",
                        },
                        agency_name: {
                            required: "kolom nama agensi tidak boleh kosong",
                            maxlength: "Panjang kolom nama agensi tidak boleh lebih dari 100"
                        },
                        agency_address: {
                            required: "kolom alamat agensi tidak boleh kosong",
                            maxlength: "Panjang kolom nama agensi tidak boleh lebih dari 100"
                        },
                    },
                    submitHandler: function(registerForm) {
                    var enteredEmail = $("#emailInput").val();
                    if (enteredEmail.endsWith(".com")) {
                        // Email valid dan berakhir dengan .com
                        // Lakukan tindakan yang diinginkan, misalnya submit formulir
                        form.submit();
                    } else {
                        // Email tidak berakhir dengan .com
                        alert("Alamat email harus berakhir dengan '.com'.");
                        // Atau lakukan tindakan lain, misalnya berikan pesan kepada pengguna
                    }
                    },
                });
                </script>

                <script>
                    function changeIcon(anchor) {
                        var icon = anchor.querySelector("i");
                        icon.classList.toggle('fa-eye');
                        icon.classList.toggle('fa-eye-slash');

                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>

                <script>
                    function changeIcon2(anchor) {
                        var icon = anchor.querySelector("i");
                        icon.classList.toggle('fa-eye');
                        icon.classList.toggle('fa-eye-slash');

                        var y = document.getElementById("passwordAgain");
                        if (y.type === "password") {
                            y.type = "text";
                        } else {
                            y.type = "password";
                        }
                    }
                </script>

                <script>
                    function togglePasswordVisibility() {
                        var x = document.getElementById("myInput");
                        var displayElement = document.getElementById("passwordDisplay");

                        // Toggle the password input type
                        if (x.type === "password") {
                            x.type = "text";
                            displayElement.textContent = x.value;
                        } else {
                            x.type = "password";
                            displayElement.textContent = '';
                        }
                    }
                </script>

                <script>
                    const passwordInput = document.getElementById('password');
                    const icon1 = document.getElementById('icon1');
                    const icon2 = document.getElementById('icon2');

                    passwordInput.addEventListener('input', function() {
                        const password = this.value;

                        const containsLetter = /[a-zA-Z]/.test(password);
                        const containsNumber = /\d/.test(password);

                        // Misalnya, validasi sederhana: jika panjang password lebih dari 8 karakter
                        if (password.length >= 8) {
                            // Ganti kelas ikon Font Awesome jika password dianggap benar
                            icon1.classList.remove('fa-times');
                            icon1.classList.add('fa-check');
                            icon1.classList.remove("invalids");
                            icon1.classList.add("valids");
                        } else {
                            // Jika tidak memenuhi syarat, tampilkan ikon default
                            icon1.classList.remove('fa-check');
                            icon1.classList.add('fa-times');
                            icon1.classList.remove("valids");
                            icon1.classList.add("invalids");
                        }

                        if (containsLetter && containsNumber) {
                            // Ganti kelas ikon Font Awesome jika password dianggap benar
                            icon2.classList.remove('fa-times');
                            icon2.classList.add('fa-check');
                            icon2.classList.remove("invalids");
                            icon2.classList.add("valids");
                        } else {
                            // Jika tidak memenuhi syarat, tampilkan ikon default
                            icon2.classList.remove('fa-check');
                            icon2.classList.add('fa-times');
                            icon2.classList.remove("valids");
                            icon2.classList.add("invalids");
                        }
                    });
                </script>
            
                <script>
                    var myInput = document.getElementById("password");
                    var letterNumber = document.getElementById("letterNumber");
                    var length = document.getElementById("length");

                    // When the user starts to type something inside the password field
                    myInput.onkeyup = function() {

                        // Validate lowercase letters
                        var lowerCaseLetters = /[a-z]/g;
                        if(myInput.value.match(lowerCaseLetters)) {
                            letterNumber.classList.remove("invalids");
                            letterNumber.classList.add("valids");
                        } else {
                            letterNumber.classList.remove("valids");
                            letterNumber.classList.add("invalids");
                        }
                        // Validate numbers
                        var numbers = /[0-9]/g;
                        if(myInput.value.match(numbers)) {
                            letterNumber.classList.remove("invalids");
                            letterNumber.classList.add("valids");
                        } else {
                            letterNumber.classList.remove("valids");
                            letterNumber.classList.add("invalids");
                        }
                        
                        // Validate length
                        if(myInput.value.length >= 8) {
                            length.classList.remove("invalids");
                            length.classList.add("valids");
                        } else {
                            length.classList.remove("valids");
                            length.classList.add("invalids");
                        }
                    }
                </script>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
                <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
                <script src="{{ asset('js/jquery.js') }}" defer></script>
                <script>
                    //Login Pop-Up
                    const toggleButton = document.querySelector('#toggle-password-button');
                    const passwordField = document.querySelector('#password');
                    const closedEye = document.querySelector('#closed-eye');
                    const openEye = document.querySelector('#open-eye');
                    let isPasswordHidden = true;
                    toggleButton.addEventListener('click', function() {
                        if (isPasswordHidden) {
                            passwordField.type = 'text';
                            openEye.classList.remove('hide');
                            openEye.classList.add('show');
                            closedEye.classList.add('hide');
                            closedEye.classList.remove('show');
                        } else {
                            passwordField.type = 'password';
                            closedEye.classList.remove('hide');
                            closedEye.classList.add('show');
                            openEye.classList.add('hide');
                            openEye.classList.remove('show');
                        }
                        isPasswordHidden = !isPasswordHidden;
                    });
                    //Animation Text
                    $(document).ready(function() {
                        var lines = $(".txt");
                        var i = -1;

                        function showNext() {
                            ++i;
                            lines.eq(i % lines.length)
                                .fadeIn(200)
                                .delay(3000)
                                .fadeOut(200, showNext);
                        }

                        showNext();
                    });
                    const errorMessage = @json(session('error'));
                    if (errorMessage) {
                        my_modal_1.showModal();
                    }
                    const successMessage = @json(session('success'));
                    if (successMessage) {
                        my_modal_2.showModal();
                    }
                    const emailErrorMessage = @json(session('email_error'));
                    if (emailErrorMessage) {
                        my_modal_2.showModal();
                    }
                    const otherErrorMessage = @json(session('other_error'));
                    if (otherErrorMessage) {
                        my_modal_2.showModal();
                    }
                </script>

                <script>
                    // Function to fetch data from the API and create toggleable buttons
                    function fetchDataAndCreateButtons() {
                        fetch('http://127.0.0.1:8000/api/tags-management/popular-tags-option-lists')
                            .then(response => response.json())
                            .then(data => {
                                const buttonContainer = document.getElementById('button-container');
                                const searchBar = document.getElementById('search-bar');

                                data.forEach(item => {
                                    const button = document.createElement('button');
                                    button.textContent = item.skillset_name;

                                    // Add classes to the button
                                    button.className = 'bg-white hover:bg-gray-400 text-gray-800 py-2 px-4 rounded';

                                    // Add click event to toggle class and update search bar
                                    button.onclick = function() {
                                        button.classList.toggle('selected');

                                        // Update search bar based on button's selection state
                                        if (button.classList.contains('selected')) {
                                            searchBar.value += (searchBar.value === '' ? '' : ', ') + item
                                                .skillset_name;
                                        } else {
                                            const valueArray = searchBar.value.split(', ');
                                            const index = valueArray.indexOf(item.skillset_name);
                                            if (index !== -1) {
                                                valueArray.splice(index, 1);
                                                searchBar.value = valueArray.join(', ');
                                            }
                                        }
                                    };

                                    buttonContainer.appendChild(button);
                                });
                            })
                            .catch(error => console.error('Error fetching data:', error));
                    }

                    // Call the function when the page is loaded
                    fetchDataAndCreateButtons();
                </script>
    </section>
    <!---Hero section end--->
    <!--Footer Start-->
    <footer id="contact" class="bg-blue pt-24 pb-12 sm:max">
        <div class="container">
            <div class="flex flex-warp">
                <div class="w-full px-10 mb-12 text-slate-300 font-medium md:w-1/2">
                    <h4 class="font-bold text-2xl text-white mb-6 underline-offset-8 underline decoration-orange-700">
                        Useful Link</h4>
                    <p class="mb-2">Home</p>
                    <p class="mb-2">Our Technologies</p>
                    <p class="mb-2">Why Choose Us</p>
                    <p class="mb-2">Testimonial</p>
                    <p class="mb-2">Contact</p>
                </div>
                <div class="w-full px-10 mb-12 md:w-1/2 ">
                    <h3 class="font-bold text-2xl text-white mb-6 underline-offset-8 underline decoration-orange-700">
                        Contact Us</h3>
                    <ul class="text-slate-300">
                        <li>
                            <h6>
                                <h6 class="inline-block text-base"><span class="font-bold">Adress : </span>Kompleks
                                    Terasana No.6A<h6>
                        </li>
                        <li>
                            <p class="inline-block text-base">Jalan Cihampelas (Bawah)</p>
                        </li>
                        <li>
                            <p class="inline-block mb-4 text-base">Bandung 40171</p>
                        </li>
                        <li>
                            <h6 class="font-bold">Phone :<h6>
                                    <h6 class="inline-block text-base mb-4">(022) 20505455<h6>
                        </li>
                        <li>
                            <h6 class="font-bold">Follow Us On :<h6>
                                    <div class="flex justify-start gap-2 mt-4 mb-7">
                                        <a href="https://www.facebook.com/padepokantujuhsembilan">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22 16.19C22 19.83 19.83 22 16.19 22H15C14.45 22 14 21.55 14 21V15.23C14 14.96 14.22 14.73 14.49 14.73L16.25 14.7C16.39 14.69 16.51 14.59 16.54 14.45L16.89 12.54C16.92 12.36 16.78 12.19 16.59 12.19L14.46 12.22C14.18 12.22 13.96 12 13.95 11.73L13.91 9.28C13.91 9.12 14.04 8.98001 14.21 8.98001L16.61 8.94C16.78 8.94 16.91 8.81001 16.91 8.64001L16.87 6.23999C16.87 6.06999 16.74 5.94 16.57 5.94L13.87 5.98001C12.21 6.01001 10.89 7.37 10.92 9.03L10.97 11.78C10.98 12.06 10.76 12.28 10.48 12.29L9.28 12.31C9.11 12.31 8.98001 12.44 8.98001 12.61L9.01001 14.51C9.01001 14.68 9.14 14.81 9.31 14.81L10.51 14.79C10.79 14.79 11.01 15.01 11.02 15.28L11.11 20.98C11.12 21.54 10.67 22 10.11 22H7.81C4.17 22 2 19.83 2 16.18V7.81C2 4.17 4.17 2 7.81 2H16.19C19.83 2 22 4.17 22 7.81V16.19Z"
                                                    fill="#FDFDFD" />
                                            </svg>
                                        </a>
                                        <a href="https://www.instagram.com/padepokantujuhsembilan">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM12 15.88C9.86 15.88 8.12 14.14 8.12 12C8.12 9.86 9.86 8.12 12 8.12C14.14 8.12 15.88 9.86 15.88 12C15.88 14.14 14.14 15.88 12 15.88ZM17.92 6.88C17.87 7 17.8 7.11 17.71 7.21C17.61 7.3 17.5 7.37 17.38 7.42C17.26 7.47 17.13 7.5 17 7.5C16.73 7.5 16.48 7.4 16.29 7.21C16.2 7.11 16.13 7 16.08 6.88C16.03 6.76 16 6.63 16 6.5C16 6.37 16.03 6.24 16.08 6.12C16.13 5.99 16.2 5.89 16.29 5.79C16.52 5.56 16.87 5.45 17.19 5.52C17.26 5.53 17.32 5.55 17.38 5.58C17.44 5.6 17.5 5.63 17.56 5.67C17.61 5.7 17.66 5.75 17.71 5.79C17.8 5.89 17.87 5.99 17.92 6.12C17.97 6.24 18 6.37 18 6.5C18 6.63 17.97 6.76 17.92 6.88Z"
                                                    fill="#FDFDFD" />
                                            </svg>
                                        </a>
                                        <a href="https://www.youtube.com/@tujuhsembilantv5555">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17 4H7C4 4 2 6 2 9V15C2 18 4 20 7 20H17C20 20 22 18 22 15V9C22 6 20 4 17 4ZM13.89 13.03L11.42 14.51C10.42 15.11 9.59998 14.65 9.59998 13.48V10.51C9.59998 9.34001 10.42 8.88001 11.42 9.48001L13.89 10.96C14.84 11.54 14.84 12.46 13.89 13.03Z"
                                                    fill="#FDFDFD" />
                                            </svg>
                                        </a>

                                    </div>
                                    <img src="/img/logotujuhsembilan 2.png" alt="">

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    </footer>
    <footer id="contact" class="bg-blue2 pt-24 pb-12 sm:max">
        <div>
            <p class="font-bold text-sm text-white text-center"> © Copyright 2020</p>
            <p class="font-meduim text-sm text-white text-center"> Privacy Policy Desain</p>
            <p class="font-meduim text-sm text-white text-center">By Tujuh Sembilan</p>
        </div>
    </footer>
    <!--Footer End-->
</body>
