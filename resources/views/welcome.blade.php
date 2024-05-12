<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="antialiased">

    @livewire('banner')
    @livewire('featured-news')
    @livewire('latest-videos')
    @livewire('latest-news')
    @livewire('latest-gallery')
    <div class="bg-[#FACA21] py-5">


        <div class="lg:px-0 px-10 mx-auto max-w-5xl">
            <div class="py-2 px-6 sm:flex sm:justify-between items-center">
                <!-- 1/3 Section (Quick Links) -->
                <div class="sm:w-1/4">
                    <h2 class="text-3xl font-bold tracking-tight lg:pb-0 pb-5 text-[#163466] sm:text-4xl">Quick Links
                    </h2>
                </div>

                <!-- 2/3 Section (Navigation with Icons) -->
                <nav class="sm:w-3/4 flex flex-col sm:flex-row sm:justify-between sm:items-center">

                    <a href="#" class="flex items-center text-gray-800 hover:text-gray-600 py-2 px-3">
                        <img src="/badge.svg" class="w-12 h-12 mr-3" alt="">
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center text-gray-800 hover:text-gray-600 py-2 px-3">
                        <img src="/badge.svg" class="w-12 h-12 mr-3" alt="">
                        Messages
                    </a>
                    <a href="#" class="flex items-center text-gray-800 hover:text-gray-600 py-2 px-3">
                        <img src="/badge.svg" class="w-12 h-12 mr-3" alt="">
                        Notifications
                    </a>
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-[#163466]">
        <div class="mx-auto lg:px-0 px-20  max-w-6xl p-6">
            <div class="grid grid-cols-2 mx-auto text-center sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-5">
                
                
                <a href="https://www.facebook.com/coopbankenya/" class="flex items-center">
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.5 10.9751C20.5 5.4551 16.02 0.975098 10.5 0.975098C4.98 0.975098 0.5 5.4551 0.5 10.9751C0.5 15.8151 3.94 19.8451 8.5 20.7751V13.9751H6.5V10.9751H8.5V8.4751C8.5 6.5451 10.07 4.9751 12 4.9751H14.5V7.9751H12.5C11.95 7.9751 11.5 8.4251 11.5 8.9751V10.9751H14.5V13.9751H11.5V20.9251C16.55 20.4251 20.5 16.1651 20.5 10.9751Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">Facebook</span>
                </a>

                <a href="https://www.instagram.com/coopbankenya/?hl=en" class="flex items-center">
                    <svg width="19" height="18" class="text-[#FACA21]" viewBox="0 0 19 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.625 0.0375977H5.375C4.09906 0.0389625 2.87578 0.546431 1.97356 1.44865C1.07133 2.35088 0.563865 3.57416 0.5625 4.8501V13.1001C0.563865 14.376 1.07133 15.5993 1.97356 16.5015C2.87578 17.4038 4.09906 17.9112 5.375 17.9126H13.625C14.9009 17.9112 16.1242 17.4038 17.0264 16.5015C17.9287 15.5993 18.4361 14.376 18.4375 13.1001V4.8501C18.4361 3.57416 17.9287 2.35088 17.0264 1.44865C16.1242 0.546431 14.9009 0.0389625 13.625 0.0375977ZM9.5 13.1001C8.68415 13.1001 7.88663 12.8582 7.20827 12.4049C6.52992 11.9516 6.00121 11.3074 5.689 10.5537C5.37679 9.79992 5.2951 8.97052 5.45426 8.17035C5.61343 7.37018 6.00629 6.63517 6.58318 6.05828C7.16008 5.48139 7.89508 5.08852 8.69525 4.92936C9.49542 4.77019 10.3248 4.85188 11.0786 5.16409C11.8323 5.47631 12.4766 6.00502 12.9298 6.68337C13.3831 7.36172 13.625 8.15925 13.625 8.9751C13.6239 10.0688 13.1889 11.1173 12.4156 11.8907C11.6422 12.664 10.5937 13.099 9.5 13.1001ZM14.6562 4.8501C14.4523 4.8501 14.2529 4.78962 14.0833 4.6763C13.9137 4.56299 13.7816 4.40193 13.7035 4.21349C13.6254 4.02505 13.605 3.8177 13.6448 3.61766C13.6846 3.41762 13.7828 3.23387 13.927 3.08964C14.0713 2.94542 14.255 2.8472 14.4551 2.80741C14.6551 2.76762 14.8625 2.78804 15.0509 2.8661C15.2393 2.94415 15.4004 3.07633 15.5137 3.24592C15.627 3.4155 15.6875 3.61489 15.6875 3.81885C15.6875 4.09235 15.5788 4.35465 15.3855 4.54805C15.1921 4.74145 14.9298 4.8501 14.6562 4.8501ZM12.25 8.9751C12.25 9.519 12.0887 10.0507 11.7865 10.5029C11.4844 10.9552 11.0549 11.3076 10.5524 11.5158C10.0499 11.7239 9.49695 11.7784 8.9635 11.6723C8.43005 11.5661 7.94005 11.3042 7.55546 10.9196C7.17086 10.535 6.90895 10.045 6.80284 9.5116C6.69673 8.97815 6.75119 8.42521 6.95933 7.92272C7.16747 7.42022 7.51995 6.99073 7.97218 6.68856C8.42442 6.38638 8.9561 6.2251 9.5 6.2251C10.2293 6.2251 10.9288 6.51483 11.4445 7.03055C11.9603 7.54628 12.25 8.24575 12.25 8.9751Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">Instagram</span>
                </a>
                <a href="https://www.linkedin.com/company/co-operative-bank-of-kenya/" class="flex items-center">
                    <svg width="17" height="18" viewBox="0 0 17 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9167 0.725098C15.4029 0.725098 15.8692 0.918252 16.213 1.26207C16.5568 1.60589 16.75 2.0722 16.75 2.55843V15.3918C16.75 15.878 16.5568 16.3443 16.213 16.6881C15.8692 17.0319 15.4029 17.2251 14.9167 17.2251H2.08333C1.5971 17.2251 1.13079 17.0319 0.786971 16.6881C0.443154 16.3443 0.25 15.878 0.25 15.3918V2.55843C0.25 2.0722 0.443154 1.60589 0.786971 1.26207C1.13079 0.918252 1.5971 0.725098 2.08333 0.725098H14.9167ZM14.4583 14.9334V10.0751C14.4583 9.28254 14.1435 8.52245 13.5831 7.96203C13.0226 7.40161 12.2626 7.08676 11.47 7.08676C10.6908 7.08676 9.78333 7.56343 9.34333 8.27843V7.26093H6.78583V14.9334H9.34333V10.4143C9.34333 9.70843 9.91167 9.13093 10.6175 9.13093C10.9579 9.13093 11.2843 9.26614 11.525 9.50681C11.7656 9.74748 11.9008 10.0739 11.9008 10.4143V14.9334H14.4583ZM3.80667 5.82176C4.2151 5.82176 4.60681 5.65952 4.89561 5.37071C5.18442 5.0819 5.34667 4.6902 5.34667 4.28176C5.34667 3.42926 4.65917 2.7326 3.80667 2.7326C3.3958 2.7326 3.00177 2.89581 2.71124 3.18634C2.42072 3.47686 2.2575 3.8709 2.2575 4.28176C2.2575 5.13426 2.95417 5.82176 3.80667 5.82176ZM5.08083 14.9334V7.26093H2.54167V14.9334H5.08083Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">LinkedIn</span>
                </a>
                <a href="https://www.youtube.com/channel/UC_tyHII-be9BxsGHHMnePMw" class="flex items-center">
                    <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.8 11.9751L14.509 8.6751L8.8 5.3751V11.9751ZM21.516 3.3621C21.659 3.8791 21.758 4.5721 21.824 5.4521C21.901 6.3321 21.934 7.0911 21.934 7.7511L22 8.6751C22 11.0841 21.824 12.8551 21.516 13.9881C21.241 14.9781 20.603 15.6161 19.613 15.8911C19.096 16.0341 18.15 16.1331 16.698 16.1991C15.268 16.2761 13.959 16.3091 12.749 16.3091L11 16.3751C6.391 16.3751 3.52 16.1991 2.387 15.8911C1.397 15.6161 0.759 14.9781 0.484 13.9881C0.341 13.4711 0.242 12.7781 0.176 11.8981C0.0990001 11.0181 0.0659999 10.2591 0.0659999 9.5991L0 8.6751C0 6.2661 0.176 4.4951 0.484 3.3621C0.759 2.3721 1.397 1.7341 2.387 1.4591C2.904 1.3161 3.85 1.2171 5.302 1.1511C6.732 1.0741 8.041 1.0411 9.251 1.0411L11 0.975098C15.609 0.975098 18.48 1.1511 19.613 1.4591C20.603 1.7341 21.241 2.3721 21.516 3.3621Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">YouTube</span>
                </a>
                <a href="https://api.whatsapp.com/send/?phone=254736690101&amp;text&amp;type=phone_number&amp;app_absent=0"
                    class="flex items-center">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.001 0.975098C15.524 0.975098 20.001 5.4521 20.001 10.9751C20.001 16.4981 15.524 20.9751 10.001 20.9751C8.23377 20.9779 6.49765 20.5103 4.97099 19.6201L0.00499063 20.9751L1.35699 16.0071C0.466084 14.48 -0.00196181 12.7431 0.000990443 10.9751C0.000990443 5.4521 4.47799 0.975098 10.001 0.975098ZM6.59299 6.2751L6.39299 6.2831C6.26351 6.29098 6.13697 6.325 6.02099 6.3831C5.91251 6.44453 5.81349 6.52132 5.72699 6.6111C5.60699 6.7241 5.53899 6.8221 5.46599 6.9171C5.09611 7.398 4.89696 7.98841 4.89999 8.5951C4.90199 9.0851 5.02999 9.5621 5.22999 10.0081C5.63899 10.9101 6.31199 11.8651 7.19999 12.7501C7.41399 12.9631 7.62399 13.1771 7.84999 13.3761C8.95338 14.3476 10.2682 15.0481 11.69 15.4221L12.258 15.5091C12.443 15.5191 12.628 15.5051 12.814 15.4961C13.1052 15.4811 13.3896 15.4022 13.647 15.2651C13.7779 15.1976 13.9057 15.1242 14.03 15.0451C14.03 15.0451 14.073 15.0171 14.155 14.9551C14.29 14.8551 14.373 14.7841 14.485 14.6671C14.568 14.5811 14.64 14.4801 14.695 14.3651C14.773 14.2021 14.851 13.8911 14.883 13.6321C14.907 13.4341 14.9 13.3261 14.897 13.2591C14.893 13.1521 14.804 13.0411 14.707 12.9941L14.125 12.7331C14.125 12.7331 13.255 12.3541 12.723 12.1121C12.6673 12.0878 12.6077 12.0739 12.547 12.0711C12.4786 12.0641 12.4094 12.0718 12.3442 12.0937C12.279 12.1156 12.2193 12.1512 12.169 12.1981C12.164 12.1961 12.097 12.2531 11.374 13.1291C11.3325 13.1849 11.2753 13.227 11.2098 13.2502C11.1443 13.2733 11.0733 13.2764 11.006 13.2591C10.9408 13.2416 10.877 13.2196 10.815 13.1931C10.691 13.1411 10.648 13.1211 10.563 13.0851C9.98906 12.8346 9.45768 12.4962 8.98799 12.0821C8.86199 11.9721 8.74499 11.8521 8.62499 11.7361C8.23158 11.3593 7.88871 10.9331 7.60499 10.4681L7.54599 10.3731C7.50361 10.3093 7.46935 10.2404 7.44399 10.1681C7.40599 10.0211 7.50499 9.9031 7.50499 9.9031C7.50499 9.9031 7.74799 9.6371 7.86099 9.4931C7.97099 9.3531 8.06399 9.2171 8.12399 9.1201C8.24199 8.9301 8.27899 8.7351 8.21699 8.5841C7.93699 7.9001 7.64699 7.2191 7.34899 6.5431C7.28999 6.4091 7.11499 6.3131 6.95599 6.2941C6.90199 6.2881 6.84799 6.2821 6.79399 6.2781C6.6597 6.27143 6.52513 6.27276 6.39099 6.2821L6.59199 6.2741L6.59299 6.2751Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">WhatsApp</span>
                </a>
                <a href="https://twitter.com/Coopbankenya" class="flex items-center">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 0.51642H6.41516L11.8827 7.87074L18.6884 0.3479L20.3055 0.375987L12.6889 8.92871L20.5 19.4335H14.5872L9.42665 12.5801L3.12245 19.6021H1.53117L8.6439 11.5783L0.5 0.51642ZM5.8574 1.60248H2.73342L15.2317 18.3194H18.2994L5.8574 1.60248Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">X(Twitter)</span>
                </a>
                <a href="https://www.tiktok.com/@coopbankenya" class="flex items-center">
                    <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5999 3.7951C11.9163 3.01472 11.5396 2.01253 11.5399 0.975098H8.44991V13.3751C8.42608 14.0461 8.14278 14.6817 7.65968 15.148C7.17657 15.6144 6.53136 15.875 5.85991 15.8751C4.43991 15.8751 3.25991 14.7151 3.25991 13.2751C3.25991 11.5551 4.91991 10.2651 6.62991 10.7951V7.6351C3.17991 7.1751 0.159912 9.8551 0.159912 13.2751C0.159912 16.6051 2.91991 18.9751 5.84991 18.9751C8.98991 18.9751 11.5399 16.4251 11.5399 13.2751V6.9851C12.7929 7.88495 14.2973 8.36774 15.8399 8.3651V5.2751C15.8399 5.2751 13.9599 5.3651 12.5999 3.7951Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">TikTok</span>
                </a>
                <a href="https://www.flickr.com/photos/zug55/52434528386" class="flex items-center">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 0.475098C5.225 0.475098 0.5 5.2001 0.5 10.9751C0.5 16.7501 5.225 21.4751 11 21.4751C16.775 21.4751 21.5 16.7501 21.5 10.9751C21.5 5.2001 16.775 0.475098 11 0.475098ZM7.14875 13.6001C6.62262 13.6171 6.10352 13.4756 5.65886 13.1938C5.21421 12.912 4.86453 12.5031 4.65525 12.0201C4.44596 11.5371 4.38674 11.0023 4.48526 10.4852C4.58377 9.96808 4.83549 9.49254 5.20772 9.12032C5.57994 8.74809 6.05549 8.49637 6.57259 8.39785C7.0897 8.29933 7.62448 8.35856 8.1075 8.56785C8.59052 8.77713 8.99945 9.1268 9.28121 9.57146C9.56296 10.0161 9.70452 10.5352 9.6875 11.0613C9.66594 11.7278 9.39154 12.3611 8.92003 12.8326C8.44851 13.3041 7.81522 13.5785 7.14875 13.6001ZM15.0238 13.6001C14.4976 13.6171 13.9785 13.4756 13.5339 13.1938C13.0892 12.912 12.7395 12.5031 12.5302 12.0201C12.321 11.5371 12.2617 11.0023 12.3603 10.4852C12.4588 9.96808 12.7105 9.49254 13.0827 9.12032C13.4549 8.74809 13.9305 8.49637 14.4476 8.39785C14.9647 8.29933 15.4995 8.35856 15.9825 8.56785C16.4655 8.77713 16.8745 9.1268 17.1562 9.57146C17.438 10.0161 17.5795 10.5352 17.5625 11.0613C17.5409 11.7278 17.2665 12.3611 16.795 12.8326C16.3235 13.3041 15.6902 13.5785 15.0238 13.6001Z"
                            fill="#FACA21"></path>
                    </svg>
                    <span class="ml-2 text-base text-white">Flickr</span>
                </a>
                <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
    <div class="mx-auto max-w-6xl lg:px-0 px-10 py-6">
        <div class="flex flex-row justify-center">
            <!-- Left Column -->
            <div class="w-full sm:w-1/2 px-4">
                <h3 class="text-lg font-semibold mb-4">Column 1</h3>
                <nav class="flex flex-col sm:flex-row">
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 1</a>
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 2</a>
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 3</a>
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 4</a>
                </nav>
            </div>
    
            <!-- Right Column -->
            <div class="w-full sm:w-1/2 px-4 sm:mt-0">
                <h3 class="text-lg font-semibold mb-4">Column 2</h3>
                <nav class="flex flex-col sm:flex-row">
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 1</a>
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 2</a>
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 3</a>
                    <a href="#" class="text-gray-800 hover:text-blue-600 px-2 py-1">Nav Item 4</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="mx-auto lg:px-0 px-10 max-w-6xl border rounded border-blue-200 ">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Column 1 -->
            <div class="flex items-start text-left p-4">
                <img src="/rep.svg" alt="Icon 1" class="w-12 h-12 mr-4">
                <div>
                    <h3 class="text-sm  font-semibold mb-1">USSD</h3>
                    <p class="text-sm text-[#163466]">*997#</p>
                </div>
            </div>
    
            <!-- Column 2 -->
            <div class="flex items-start text-left p-4">
                <img src="/rep.svg" alt="Icon 1" class="w-12 h-12 mr-4">
                <div>
                    <h3 class="text-sm  font-semibold mb-1">USSD</h3>
                    <p class="text-sm text-[#163466]">*997#</p>
                </div>
            </div>
    
            <!-- Column 3 -->
            <div class="flex items-start text-left p-4">
                <img src="/rep.svg" alt="Icon 1" class="w-12 h-12 mr-4">
                <div>
                    <h3 class="text-sm  font-semibold mb-1">USSD</h3>
                    <p class="text-sm text-[#163466]">*997#</p>
                </div>
            </div>
    
            <!-- Column 4 -->
            <div class="flex items-start text-left p-4">
                <img src="/rep.svg" alt="Icon 1" class="w-12 h-12 mr-4">
                <div>
                    <h3 class="text-sm  font-semibold mb-1">USSD</h3>
                    <p class="text-sm text-[#163466]">*997#</p>
                </div>
            </div>
    
            <!-- Column 5 -->
            <div class="flex items-start text-left p-4">
                <img src="/rep.svg" alt="Icon 1" class="w-12 h-12 mr-4">
                <div>
                    <h3 class="text-sm  font-semibold mb-1">USSD</h3>
                    <p class="text-sm text-[#163466]">*997#</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center py-4 text-gray-600">
        <p>&copy; {{ \Carbon\Carbon::now()->format('Y') }} - All Rights Reserved</p>
    </div>
    





</body>

<style>
    * {
        font-family: "Lexend Deca", sans-serif;
    }

    .testy {

        background-image: url("bg.png");
    }
</style>

</html>
