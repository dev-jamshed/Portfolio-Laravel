<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>VisaBuzz</title>
    <link rel="icon" type="image/png" href="/assets/admin/images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="/assets/admin/css/app.css" />

    <!-- Javascript Assets -->
    <script src="/assets/admin/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>

  @yield('style')

</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
        <div class="app-preloader-inner relative inline-block size-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
       
      
      <!-- Sidebar -->
        <div class="sidebar print:hidden">
            <!-- Main Sidebar -->
            <div class="main-sidebar">
                <div
                    class="flex h-full w-full flex-col items-center border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-800">
                    <!-- Application Logo -->
                    <div class="flex pt-4">
                        <a href="index.html">
                            <img class="size-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]"
                                src="/assets/admin/images/app-logo.svg" alt="logo" />
                        </a>
                    </div>

                    <!-- Main Sections Links -->
                    <div class="is-scrollbar-hidden flex grow flex-col space-y-4 overflow-y-auto pt-6">
                        <!-- Dashobards -->
                        <a href="dashboards-crm-analytics.html"
                            class="flex size-11 items-center justify-center rounded-lg bg-primary/10 text-primary outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
                            x-tooltip.placement.right="'Dashboards'">
                            <svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor" fill-opacity=".3"
                                    d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z" />
                                <path fill="currentColor"
                                    d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z" />
                                <path fill="currentColor"
                                    d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z" />
                                <path fill="currentColor"
                                    d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z" />
                            </svg>
                        </a>

                        <!-- Apps -->
                        <a href="apps-list.html"
                            class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            x-tooltip.placement.right="'Applications'">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 8H19V16C19 17.8856 19 18.8284 18.4142 19.4142C17.8284 20 16.8856 20 15 20H9C7.11438 20 6.17157 20 5.58579 19.4142C5 18.8284 5 17.8856 5 16V8Z"
                                    fill="currentColor" fill-opacity="0.3" />
                                <path
                                    d="M12 8L11.7608 5.84709C11.6123 4.51089 10.4672 3.5 9.12282 3.5V3.5C7.68381 3.5 6.5 4.66655 6.5 6.10555V6.10555C6.5 6.97673 6.93539 7.79026 7.66025 8.2735L9.5 9.5"
                                    stroke="currentColor" stroke-linecap="round" />
                                <path
                                    d="M12 8L12.2392 5.84709C12.3877 4.51089 13.5328 3.5 14.8772 3.5V3.5C16.3162 3.5 17.5 4.66655 17.5 6.10555V6.10555C17.5 6.97673 17.0646 7.79026 16.3397 8.2735L14.5 9.5"
                                    stroke="currentColor" stroke-linecap="round" />
                                <rect x="4" y="8" width="16" height="3" rx="1" fill="currentColor" />
                                <path d="M12 11V15" stroke="currentColor" stroke-linecap="round" />
                            </svg>
                        </a>

                        <!-- Pages And Layouts -->
                        <a href="pages-card-user-1.html"
                            class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            x-tooltip.placement.right="'Pages & Layouts'">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.85714 3H4.14286C3.51167 3 3 3.51167 3 4.14286V9.85714C3 10.4883 3.51167 11 4.14286 11H9.85714C10.4883 11 11 10.4883 11 9.85714V4.14286C11 3.51167 10.4883 3 9.85714 3Z"
                                    fill="currentColor" />
                                <path
                                    d="M9.85714 12.8999H4.14286C3.51167 12.8999 3 13.4116 3 14.0428V19.757C3 20.3882 3.51167 20.8999 4.14286 20.8999H9.85714C10.4883 20.8999 11 20.3882 11 19.757V14.0428C11 13.4116 10.4883 12.8999 9.85714 12.8999Z"
                                    fill="currentColor" fill-opacity="0.3" />
                                <path
                                    d="M19.757 3H14.0428C13.4116 3 12.8999 3.51167 12.8999 4.14286V9.85714C12.8999 10.4883 13.4116 11 14.0428 11H19.757C20.3882 11 20.8999 10.4883 20.8999 9.85714V4.14286C20.8999 3.51167 20.3882 3 19.757 3Z"
                                    fill="currentColor" fill-opacity="0.3" />
                                <path
                                    d="M19.757 12.8999H14.0428C13.4116 12.8999 12.8999 13.4116 12.8999 14.0428V19.757C12.8999 20.3882 13.4116 20.8999 14.0428 20.8999H19.757C20.3882 20.8999 20.8999 20.3882 20.8999 19.757V14.0428C20.8999 13.4116 20.3882 12.8999 19.757 12.8999Z"
                                    fill="currentColor" fill-opacity="0.3" />
                            </svg>
                        </a>

                        <!-- Forms -->
                        <a href="form-input-text.html"
                            class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            x-tooltip.placement.right="'Forms'">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-opacity="0.25"
                                    d="M21.0001 16.05V18.75C21.0001 20.1 20.1001 21 18.7501 21H6.6001C6.9691 21 7.3471 20.946 7.6981 20.829C7.7971 20.793 7.89609 20.757 7.99509 20.712C8.31009 20.586 8.61611 20.406 8.88611 20.172C8.96711 20.109 9.05711 20.028 9.13811 19.947L9.17409 19.911L15.2941 13.8H18.7501C20.1001 13.8 21.0001 14.7 21.0001 16.05Z"
                                    fill="currentColor" />
                                <path fill-opacity="0.5"
                                    d="M17.7324 11.361L15.2934 13.8L9.17334 19.9111C9.80333 19.2631 10.1993 18.372 10.1993 17.4V8.70601L12.6384 6.26701C13.5924 5.31301 14.8704 5.31301 15.8244 6.26701L17.7324 8.17501C18.6864 9.12901 18.6864 10.407 17.7324 11.361Z"
                                    fill="currentColor" />
                                <path
                                    d="M7.95 3H5.25C3.9 3 3 3.9 3 5.25V17.4C3 17.643 3.02699 17.886 3.07199 18.12C3.09899 18.237 3.12599 18.354 3.16199 18.471C3.20699 18.606 3.252 18.741 3.306 18.867C3.315 18.876 3.31501 18.885 3.31501 18.885C3.32401 18.885 3.32401 18.885 3.31501 18.894C3.44101 19.146 3.585 19.389 3.756 19.614C3.855 19.731 3.95401 19.839 4.05301 19.947C4.15201 20.055 4.26 20.145 4.377 20.235L4.38601 20.244C4.61101 20.415 4.854 20.559 5.106 20.685C5.115 20.676 5.11501 20.676 5.11501 20.685C5.25001 20.748 5.385 20.793 5.529 20.838C5.646 20.874 5.76301 20.901 5.88001 20.928C6.11401 20.973 6.357 21 6.6 21C6.969 21 7.347 20.946 7.698 20.829C7.797 20.793 7.89599 20.757 7.99499 20.712C8.30999 20.586 8.61601 20.406 8.88601 20.172C8.96701 20.109 9.05701 20.028 9.13801 19.947L9.17399 19.911C9.80399 19.263 10.2 18.372 10.2 17.4V5.25C10.2 3.9 9.3 3 7.95 3ZM6.6 18.75C5.853 18.75 5.25 18.147 5.25 17.4C5.25 16.653 5.853 16.05 6.6 16.05C7.347 16.05 7.95 16.653 7.95 17.4C7.95 18.147 7.347 18.75 6.6 18.75Z"
                                    fill="currentColor" />
                            </svg>
                        </a>

                        <!-- Components -->
                        <a href="components-accordion.html"
                            class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            x-tooltip.placement.right="'Components'">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-opacity="0.5"
                                    d="M14.2498 16C14.2498 17.5487 13.576 18.9487 12.4998 19.9025C11.5723 20.7425 10.3473 21.25 8.99976 21.25C6.10351 21.25 3.74976 18.8962 3.74976 16C3.74976 13.585 5.39476 11.5375 7.61726 10.9337C8.22101 12.4562 9.51601 13.6287 11.1173 14.0662C11.5548 14.1887 12.0185 14.25 12.4998 14.25C12.981 14.25 13.4448 14.1887 13.8823 14.0662C14.1185 14.6612 14.2498 15.3175 14.2498 16Z"
                                    fill="currentColor" />
                                <path
                                    d="M17.75 9.00012C17.75 9.68262 17.6187 10.3389 17.3825 10.9339C16.7787 12.4564 15.4837 13.6289 13.8825 14.0664C13.445 14.1889 12.9813 14.2501 12.5 14.2501C12.0187 14.2501 11.555 14.1889 11.1175 14.0664C9.51625 13.6289 8.22125 12.4564 7.6175 10.9339C7.38125 10.3389 7.25 9.68262 7.25 9.00012C7.25 6.10387 9.60375 3.75012 12.5 3.75012C15.3962 3.75012 17.75 6.10387 17.75 9.00012Z"
                                    fill="currentColor" />
                                <path fill-opacity="0.3"
                                    d="M21.25 16C21.25 18.8962 18.8962 21.25 16 21.25C14.6525 21.25 13.4275 20.7425 12.5 19.9025C13.5763 18.9487 14.25 17.5487 14.25 16C14.25 15.3175 14.1187 14.6612 13.8825 14.0662C15.4837 13.6287 16.7787 12.4562 17.3825 10.9337C19.605 11.5375 21.25 13.585 21.25 16Z"
                                    fill="currentColor" />
                            </svg>
                        </a>

                        <!-- Elements -->
                        <a href="elements-avatar.html"
                            class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                            x-tooltip.placement.right="'Elements'">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.3111 14.75H5.03356C3.36523 14.75 2.30189 12.9625 3.10856 11.4958L5.24439 7.60911L7.24273 3.96995C8.07689 2.45745 10.2586 2.45745 11.0927 3.96995L13.1002 7.60911L14.0627 9.35995L15.2361 11.4958C16.0427 12.9625 14.9794 14.75 13.3111 14.75Z"
                                    fill="currentColor" />
                                <path fill-opacity="0.3"
                                    d="M21.1667 15.2083C21.1667 18.4992 18.4992 21.1667 15.2083 21.1667C11.9175 21.1667 9.25 18.4992 9.25 15.2083C9.25 15.0525 9.25917 14.9058 9.26833 14.75H13.3108C14.9792 14.75 16.0425 12.9625 15.2358 11.4958L14.0625 9.36C14.4292 9.28666 14.8142 9.25 15.2083 9.25C18.4992 9.25 21.1667 11.9175 21.1667 15.2083Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>

                    <!-- Bottom Links -->
                    <div class="flex flex-col items-center space-y-3 py-3">
                        <!-- Settings -->
                        <a href="form-layout-5.html"
                            class="flex size-11 items-center justify-center rounded-lg outline-none transition-colors duration-200 hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg class="size-7" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-opacity="0.3" fill="currentColor"
                                    d="M2 12.947v-1.771c0-1.047.85-1.913 1.899-1.913 1.81 0 2.549-1.288 1.64-2.868a1.919 1.919 0 0 1 .699-2.607l1.729-.996c.79-.474 1.81-.192 2.279.603l.11.192c.9 1.58 2.379 1.58 3.288 0l.11-.192c.47-.795 1.49-1.077 2.279-.603l1.73.996a1.92 1.92 0 0 1 .699 2.607c-.91 1.58-.17 2.868 1.639 2.868 1.04 0 1.899.856 1.899 1.912v1.772c0 1.047-.85 1.912-1.9 1.912-1.808 0-2.548 1.288-1.638 2.869.52.915.21 2.083-.7 2.606l-1.729.997c-.79.473-1.81.191-2.279-.604l-.11-.191c-.9-1.58-2.379-1.58-3.288 0l-.11.19c-.47.796-1.49 1.078-2.279.605l-1.73-.997a1.919 1.919 0 0 1-.699-2.606c.91-1.58.17-2.869-1.639-2.869A1.911 1.911 0 0 1 2 12.947Z" />
                                <path fill="currentColor"
                                    d="M11.995 15.332c1.794 0 3.248-1.464 3.248-3.27 0-1.807-1.454-3.272-3.248-3.272-1.794 0-3.248 1.465-3.248 3.271 0 1.807 1.454 3.271 3.248 3.271Z" />
                            </svg>
                        </a>

                        <!-- Profile -->
                        <div x-data="usePopper({ placement: 'right-end', offset: 12 })" @click.outside="isShowPopper && (isShowPopper = false)"
                            class="flex">
                            <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar size-12">
                                <img class="rounded-full" src="/assets/admin/images/avatar/avatar-12.jpg"
                                    alt="avatar" />
                                <span
                                    class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                            </button>

                            <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                                <div
                                    class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
                                    <div
                                        class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800">
                                        <div class="avatar size-14">
                                            <img class="rounded-full" src="/assets/admin/images/avatar/avatar-12.jpg"
                                                alt="avatar" />
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                                Travis Fuller
                                            </a>
                                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                                Product Designer
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col pt-2 pb-5">
                                        <a href="#"
                                            class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div
                                                class="flex size-8 items-center justify-center rounded-lg bg-warning text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2
                                                    class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Profile
                                                </h2>
                                                <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    Your profile setting
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div
                                                class="flex size-8 items-center justify-center rounded-lg bg-info text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2
                                                    class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Messages
                                                </h2>
                                                <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    Your messages and tasks
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div
                                                class="flex size-8 items-center justify-center rounded-lg bg-secondary text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2
                                                    class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Team
                                                </h2>
                                                <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    Your team activity
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div
                                                class="flex size-8 items-center justify-center rounded-lg bg-error text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2
                                                    class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Activity
                                                </h2>
                                                <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    Your activity and events
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#"
                                            class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div
                                                class="flex size-8 items-center justify-center rounded-lg bg-success text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>

                                            <div>
                                                <h2
                                                    class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Settings
                                                </h2>
                                                <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    Webapp settings
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-3 px-4">
                                            <button
                                                class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                                <span>Logout</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Panel -->
            <div class="sidebar-panel">
                <div class="flex h-full grow flex-col bg-white pl-[var(--main-sidebar-width)] dark:bg-navy-750">
                    <!-- Sidebar Panel Header -->
                    <div class="flex h-18 w-full items-center justify-between pl-4 pr-1">
                        <p class="text-base tracking-wider text-slate-800 dark:text-navy-100">
                            Dashboards
                        </p>
                        <button @click="$store.global.isSidebarExpanded = false"
                            class="btn size-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                    </div>

                    <!-- Sidebar Panel Body -->
                    <div x-data="{ expandedItem: null }" class="h-[calc(100%-4.5rem)] overflow-x-hidden pb-6"
                        x-init="$el._x_simplebar = new SimpleBar($el);">
                        <ul class="flex flex-1 flex-col px-4 font-inter">
                            <li>
                                <a x-data="navLink" href="dashboards-crm-analytics.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    CRM Analytics
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-orders.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Orders
                                </a>
                            </li>
                        </ul>
                        <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                        <ul class="flex flex-1 flex-col px-4 font-inter">
                            <li x-data="accordionItem('menu-item-1')">
                                <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' :
                                    'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                                    @click="expanded = !expanded"
                                    class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                                    href="javascript:void(0);">
                                    <span>Cryptocurrency</span>
                                    <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <ul x-collapse x-show="expanded">
                                    <li>
                                        <a x-data="navLink" href="dashboards-crypto-1.html"
                                            :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                                'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                            class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                            <div class="flex items-center space-x-2">
                                                <div class="size-1.5 rounded-full border border-current opacity-40">
                                                </div>
                                                <span>Cryptocurrency v1</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a x-data="navLink" href="dashboards-crypto-2.html"
                                            :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                                'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                            class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                            <div class="flex items-center space-x-2">
                                                <div class="size-1.5 rounded-full border border-current opacity-40">
                                                </div>
                                                <span>Cryptocurrency v2</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li x-data="accordionItem('menu-item-2')">
                                <a :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' :
                                    'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
                                    @click="expanded = !expanded"
                                    class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
                                    href="javascript:void(0);">
                                    <span>Banking</span>
                                    <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg"
                                        class="size-4 text-slate-400 transition-transform ease-in-out" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                                <ul x-collapse x-show="expanded">
                                    <li>
                                        <a x-data="navLink" href="dashboards-banking-1.html"
                                            :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                                'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                            class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                            <div class="flex items-center space-x-2">
                                                <div class="size-1.5 rounded-full border border-current opacity-40">
                                                </div>
                                                <span>Banking v1</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a x-data="navLink" href="dashboards-banking-2.html"
                                            :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                                'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                            class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                            <div class="flex items-center space-x-2">
                                                <div class="size-1.5 rounded-full border border-current opacity-40">
                                                </div>
                                                <span>Banking v2</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-personal.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Personal
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-cms-analytics.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    CMS Analytics
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-influencer.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Influencer
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-travel.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Travel
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-teacher.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Teacher
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-education.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Education
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-authors.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Authors
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-doctor.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Doctors
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-employees.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Employees
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-workspace.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Workspaces
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-meeting.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Meetings
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-project-boards.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Project Boards
                                </a>
                            </li>
                        </ul>
                        <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>
                        <ul class="flex flex-1 flex-col px-4 font-inter">
                            <li>
                                <a x-data="navLink" href="dashboards-widget-ui.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Widget UI
                                </a>
                            </li>
                            <li>
                                <a x-data="navLink" href="dashboards-widget-contacts.html"
                                    :class="isActive ? 'font-medium text-primary dark:text-accent-light' :
                                        'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
                                    class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out">
                                    Widget Contacts
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- App Header Wrapper-->
        <nav class="header before:bg-white dark:before:bg-navy-750 print:hidden">
            <!-- App Header  -->
            <div class="header-container relative flex w-full bg-white dark:bg-navy-750 print:hidden">
                <!-- Header Items -->
                <div class="flex w-full items-center justify-between">
                    <!-- Left: Sidebar Toggle Button -->
                    <div class="size-7">
                        <button
                            class="menu-toggle ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80"
                            :class="$store.global.isSidebarExpanded && 'active'"
                            @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <!-- Right: Header buttons -->
                    <div class="-mr-1.5 flex items-center space-x-2">
                        <!-- Mobile Search Toggle -->
                        <button @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive"
                            class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500 dark:text-navy-100"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>

                        <!-- Main Searchbar -->
                        <template x-if="$store.breakpoints.smAndUp">
                            <div class="flex" x-data="usePopper({ placement: 'bottom-end', offset: 12 })"
                                @click.outside="isShowPopper && (isShowPopper = false)">
                                <div class="relative mr-4 flex h-8">
                                    <input placeholder="Search here..."
                                        class="form-input peer h-full rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:text-navy-100 dark:placeholder-navy-300 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                        :class="isShowPopper ? 'w-80' : 'w-60'" @focus="isShowPopper= true"
                                        type="text" x-ref="popperRef" />
                                    <div
                                        class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="size-4.5 transition-colors duration-200" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                        </svg>
                                    </div>
                                </div>
                                <div :class="isShowPopper && 'show'" class="popper-root" x-ref="popperRoot">
                                    <div
                                        class="popper-box flex max-h-[calc(100vh-6rem)] w-80 flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark">
                                        <div x-data="{ activeTab: 'tabAll' }"
                                            class="is-scrollbar-hidden flex shrink-0 overflow-x-auto rounded-t-lg bg-slate-100 px-2 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                                            <button @click="activeTab = 'tabAll'"
                                                :class="activeTab === 'tabAll' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                All
                                            </button>
                                            <button @click="activeTab = 'tabFiles'"
                                                :class="activeTab === 'tabFiles' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                Files
                                            </button>
                                            <button @click="activeTab = 'tabChats'"
                                                :class="activeTab === 'tabChats' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                Chats
                                            </button>
                                            <button @click="activeTab = 'tabEmails'"
                                                :class="activeTab === 'tabEmails' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                Emails
                                            </button>
                                            <button @click="activeTab = 'tabProjects'"
                                                :class="activeTab === 'tabProjects' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                Projects
                                            </button>
                                            <button @click="activeTab = 'tabTasks'"
                                                :class="activeTab === 'tabTasks' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                Tasks
                                            </button>
                                        </div>

                                        <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">
                                            <div class="is-scrollbar-hidden mt-3 flex space-x-4 overflow-x-auto px-3">
                                                <a href="apps-kanban.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-success text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Kanban
                                                    </p>
                                                </a>
                                                <a href="dashboards-crm-analytics.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-secondary text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Analytics
                                                    </p>
                                                </a>
                                                <a href="apps-chat.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-info text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Chat
                                                    </p>
                                                </a>
                                                <a href="apps-filemanager.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-error text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Files
                                                    </p>
                                                </a>
                                                <a href="dashboards-crypto-1.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-secondary text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Crypto
                                                    </p>
                                                </a>
                                                <a href="dashboards-banking-1.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div
                                                            class="is-initial rounded-full bg-primary text-white dark:bg-accent">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Banking
                                                    </p>
                                                </a>
                                                <a href="apps-todo.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-info text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path d="M12.5293 18L20.9999 8.40002"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                <path d="M3 13.2L7.23529 18L17.8235 6"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Todo
                                                    </p>
                                                </a>
                                                <a href="dashboards-crm-analytics.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-secondary text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Analytics
                                                    </p>
                                                </a>
                                                <a href="dashboards-orders.html" class="w-14 text-center">
                                                    <div class="avatar size-12">
                                                        <div class="is-initial rounded-full bg-warning text-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5"
                                                                fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p
                                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                                        Orders
                                                    </p>
                                                </a>
                                            </div>

                                            <div
                                                class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3 dark:bg-navy-800">
                                                <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                                                    Recent
                                                </p>
                                                <a href="#"
                                                    class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                                                    View All
                                                </a>
                                            </div>

                                            <div class="mt-1 font-inter font-medium">
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="apps-chat.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                    </svg>
                                                    <span>Chat App</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="apps-filemanager.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                                    </svg>
                                                    <span>File Manager App</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="apps-mail.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                    </svg>
                                                    <span>Email App</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="apps-kanban.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                                    </svg>
                                                    <span>Kanban Board</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="apps-todo.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    <span>Todo App</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="dashboards-crypto-2.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>

                                                    <span>Crypto Dashboard</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="dashboards-banking-2.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                                    </svg>

                                                    <span>Banking Dashboard</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="dashboards-crm-analytics.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                                    </svg>

                                                    <span>Analytics Dashboard</span>
                                                </a>
                                                <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                                                    href="dashboards-influencer.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>

                                                    <span>Influencer Dashboard</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <!-- Dark Mode Toggle -->
                        <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                            class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg x-show="$store.global.isDarkModeEnabled"
                                x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                                class="size-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" x-show="!$store.global.isDarkModeEnabled"
                                x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                                class="size-6 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Monochrome Mode Toggle -->
                        <button @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled"
                            class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <i
                                class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"></i>
                        </button>

                        <!-- Notification-->
                        <div x-effect="if($store.global.isSearchbarActive) isShowPopper = false"
                            x-data="usePopper({ placement: 'bottom-end', offset: 12 })" @click.outside="isShowPopper && (isShowPopper = false)"
                            class="flex">
                            <button @click="isShowPopper = !isShowPopper" x-ref="popperRef"
                                class="btn relative size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 text-slate-500 dark:text-navy-100" stroke="currentColor"
                                    fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15.375 17.556h-6.75m6.75 0H21l-1.58-1.562a2.254 2.254 0 01-.67-1.596v-3.51a6.612 6.612 0 00-1.238-3.85 6.744 6.744 0 00-3.262-2.437v-.379c0-.59-.237-1.154-.659-1.571A2.265 2.265 0 0012 2c-.597 0-1.169.234-1.591.65a2.208 2.208 0 00-.659 1.572v.38c-2.621.915-4.5 3.385-4.5 6.287v3.51c0 .598-.24 1.172-.67 1.595L3 17.556h12.375zm0 0v1.11c0 .885-.356 1.733-.989 2.358A3.397 3.397 0 0112 22a3.397 3.397 0 01-2.386-.976 3.313 3.313 0 01-.989-2.357v-1.111h6.75z" />
                                </svg>

                                <span class="absolute -top-px -right-px flex size-3 items-center justify-center">
                                    <span
                                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-secondary opacity-80"></span>
                                    <span class="inline-flex size-2 rounded-full bg-secondary"></span>
                                </span>
                            </button>
                            <div :class="isShowPopper && 'show'" class="popper-root" x-ref="popperRoot">
                                <div x-data="{ activeTab: 'tabAll' }"
                                    class="popper-box mx-4 mt-1 flex max-h-[calc(100vh-6rem)] w-[calc(100vw-2rem)] flex-col rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-800 dark:bg-navy-700 dark:shadow-soft-dark sm:m-0 sm:w-80">
                                    <div
                                        class="rounded-t-lg bg-slate-100 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                                        <div class="flex items-center justify-between px-4 pt-2">
                                            <div class="flex items-center space-x-2">
                                                <h3 class="font-medium text-slate-700 dark:text-navy-100">
                                                    Notifications
                                                </h3>
                                                <div
                                                    class="badge h-5 rounded-full bg-primary/10 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                                    26
                                                </div>
                                            </div>

                                            <button
                                                class="btn -mr-1.5 size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="1.5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="is-scrollbar-hidden flex shrink-0 overflow-x-auto px-3">
                                            <button @click="activeTab = 'tabAll'"
                                                :class="activeTab === 'tabAll' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                <span>All</span>
                                            </button>
                                            <button @click="activeTab = 'tabAlerts'"
                                                :class="activeTab === 'tabAlerts' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                <span>Alerts</span>
                                            </button>
                                            <button @click="activeTab = 'tabEvents'"
                                                :class="activeTab === 'tabEvents' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                <span>Events</span>
                                            </button>
                                            <button @click="activeTab = 'tabLogs'"
                                                :class="activeTab === 'tabLogs' ?
                                                    'border-primary dark:border-accent text-primary dark:text-accent-light' :
                                                    'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                                                class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                                                <span>Logs</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="tab-content flex flex-col overflow-hidden">
                                        <div x-show="activeTab === 'tabAll'"
                                            x-transition:enter="transition-all duration-300 easy-in-out"
                                            x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                            class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 dark:bg-secondary-light/15">
                                                    <i
                                                        class="fa fa-user-edit text-secondary dark:text-secondary-light"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        User Photo Changed
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        John Doe changed his avatar photo
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Mon, June 14, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">08:00 - 09:00</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>

                                                        <span class="line-clamp-1">Frontend Conf</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-accent-light/15">
                                                    <i
                                                        class="fa-solid fa-image text-primary dark:text-accent-light"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Images Added
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        Mores Clarke added new image gallery
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10 dark:bg-success/15">
                                                    <i class="fa fa-leaf text-success"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Design Completed
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        Robert Nolan completed the design of the CRM
                                                        application
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Wed, June 21, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">16:00 - 20:00</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>

                                                        <span class="line-clamp-1">UI/UX Conf</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                                                    <i class="fa fa-project-diagram text-warning"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        ER Diagram
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        Team completed the ER diagram app
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-5 text-warning" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        THU, May 11, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">10:00 - 11:30</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>
                                                        <span class="line-clamp-1">Interview, Konnor Guzman
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10 dark:bg-error/15">
                                                    <i class="fa fa-history text-error"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Weekly Report
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        The weekly report was uploaded
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="activeTab === 'tabAlerts'"
                                            x-transition:enter="transition-all duration-300 easy-in-out"
                                            x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                            class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-secondary/10 dark:bg-secondary-light/15">
                                                    <i
                                                        class="fa fa-user-edit text-secondary dark:text-secondary-light"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        User Photo Changed
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        John Doe changed his avatar photo
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 dark:bg-accent-light/15">
                                                    <i
                                                        class="fa-solid fa-image text-primary dark:text-accent-light"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Images Added
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        Mores Clarke added new image gallery
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-success/10 dark:bg-success/15">
                                                    <i class="fa fa-leaf text-success"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Design Completed
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        Robert Nolan completed the design of the CRM
                                                        application
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                                                    <i class="fa fa-project-diagram text-warning"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        ER Diagram
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        Team completed the ER diagram app
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-error/10 dark:bg-error/15">
                                                    <i class="fa fa-history text-error"></i>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Weekly Report
                                                    </p>
                                                    <div
                                                        class="mt-1 text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        The weekly report was uploaded
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="activeTab === 'tabEvents'"
                                            x-transition:enter="transition-all duration-300 easy-in-out"
                                            x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                            class="is-scrollbar-hidden space-y-4 overflow-y-auto px-4 py-4">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Mon, June 14, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">08:00 - 09:00</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>

                                                        <span class="line-clamp-1">Frontend Conf</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Wed, June 21, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">16:00 - 20:00</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>

                                                        <span class="line-clamp-1">UI/UX Conf</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-5 text-warning" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        THU, May 11, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">10:00 - 11:30</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>
                                                        <span class="line-clamp-1">Interview, Konnor Guzman
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-info/10 dark:bg-info/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-info"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Mon, Jul 16, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">06:00 - 16:00</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>

                                                        <span class="line-clamp-1">Laravel Conf</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-warning/10 dark:bg-warning/15">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="size-5 text-warning" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-slate-600 dark:text-navy-100">
                                                        Wed, Jun 16, 2021
                                                    </p>
                                                    <div class="mt-1 flex text-xs text-slate-400 dark:text-navy-300">
                                                        <span class="shrink-0">15:30 - 11:30</span>
                                                        <div class="mx-2 my-1 w-px bg-slate-200 dark:bg-navy-500">
                                                        </div>
                                                        <span class="line-clamp-1">Interview, Jonh Doe
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="activeTab === 'tabLogs'"
                                            x-transition:enter="transition-all duration-300 easy-in-out"
                                            x-transition:enter-start="opacity-0 [transform:translate3d(1rem,0,0)]"
                                            x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                                            class="is-scrollbar-hidden overflow-y-auto px-4">
                                            <div class="mt-8 pb-8 text-center">
                                                <img class="mx-auto w-36"
                                                    src="/assets/admin/images/illustrations/empty-girl-box.svg"
                                                    alt="image" />
                                                <div class="mt-5">
                                                    <p
                                                        class="text-base font-semibold text-slate-700 dark:text-navy-100">
                                                        No any logs
                                                    </p>
                                                    <p class="text-slate-400 dark:text-navy-300">
                                                        There are no unread logs yet
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Sidebar Toggle -->
                        <button @click="$store.global.isRightSidebarExpanded = true"
                            class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-slate-500 dark:text-navy-100"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile Searchbar -->
        <div x-show="$store.breakpoints.isXs && $store.global.isSearchbarActive"
            x-transition:enter="easy-out transition-all" x-transition:enter-start="opacity-0 scale-105"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in transition-all"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-[100] flex flex-col bg-white dark:bg-navy-700 sm:hidden">
            <div class="flex items-center space-x-2 bg-slate-100 px-3 pt-2 dark:bg-navy-800">
                <button
                    class="btn -ml-1.5 size-7 shrink-0 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25"
                    @click="$store.global.isSearchbarActive = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" stroke-width="1.5"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <input x-effect="$store.global.isSearchbarActive && $nextTick(() => $el.focus() );"
                    class="form-input h-8 w-full bg-transparent placeholder-slate-400 dark:placeholder-navy-300"
                    type="text" placeholder="Search here..." />
            </div>

            <div x-data="{ activeTab: 'tabAll' }"
                class="is-scrollbar-hidden flex shrink-0 overflow-x-auto bg-slate-100 px-2 text-slate-600 dark:bg-navy-800 dark:text-navy-200">
                <button @click="activeTab = 'tabAll'"
                    :class="activeTab === 'tabAll' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    All
                </button>
                <button @click="activeTab = 'tabFiles'"
                    :class="activeTab === 'tabFiles' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Files
                </button>
                <button @click="activeTab = 'tabChats'"
                    :class="activeTab === 'tabChats' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Chats
                </button>
                <button @click="activeTab = 'tabEmails'"
                    :class="activeTab === 'tabEmails' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Emails
                </button>
                <button @click="activeTab = 'tabProjects'"
                    :class="activeTab === 'tabProjects' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Projects
                </button>
                <button @click="activeTab = 'tabTasks'"
                    :class="activeTab === 'tabTasks' ?
                        'border-primary dark:border-accent text-primary dark:text-accent-light' :
                        'border-transparent hover:text-slate-800 focus:text-slate-800 dark:hover:text-navy-100 dark:focus:text-navy-100'"
                    class="btn shrink-0 rounded-none border-b-2 px-3.5 py-2.5">
                    Tasks
                </button>
            </div>

            <div class="is-scrollbar-hidden overflow-y-auto overscroll-contain pb-2">
                <div class="is-scrollbar-hidden mt-3 flex space-x-4 overflow-x-auto px-3">
                    <a href="apps-kanban.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-success text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Kanban
                        </p>
                    </a>
                    <a href="dashboards-crm-analytics.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Analytics
                        </p>
                    </a>
                    <a href="apps-chat.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Chat
                        </p>
                    </a>
                    <a href="apps-filemanager.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-error text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Files
                        </p>
                    </a>
                    <a href="dashboards-crypto-1.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-secondary text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Crypto
                        </p>
                    </a>
                    <a href="dashboards-banking-1.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-primary text-white dark:bg-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Banking
                        </p>
                    </a>
                    <a href="apps-todo.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-info text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Todo
                        </p>
                    </a>

                    <a href="dashboards-orders.html" class="w-14 text-center">
                        <div class="avatar size-12">
                            <div class="is-initial rounded-full bg-warning text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>
                        <p
                            class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                            Orders
                        </p>
                    </a>
                </div>

                <div class="mt-3 flex items-center justify-between bg-slate-100 py-1.5 px-3 dark:bg-navy-800">
                    <p class="text-xs uppercase text-slate-400 dark:text-navy-300">
                        Recent
                    </p>
                    <a href="#"
                        class="text-tiny+ font-medium uppercase text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">
                        View All
                    </a>
                </div>

                <div class="mt-1 font-inter font-medium">
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-chat.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                        <span>Chat App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-filemanager.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                        <span>File Manager App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-mail.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Email App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-kanban.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                        <span>Kanban Board</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="apps-todo.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Todo App</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-crypto-2.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span>Crypto Dashboard</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-banking-2.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>

                        <span>Banking Dashboard</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-crm-analytics.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>

                        <span>Analytics Dashboard</span>
                    </a>
                    <a class="group flex items-center space-x-2 px-2.5 py-2 tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                        href="dashboards-influencer.html">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="size-4.5 text-slate-400 transition-colors group-hover:text-slate-500 group-focus:text-slate-500 dark:text-navy-300 dark:group-hover:text-navy-200 dark:group-focus:text-navy-200"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>

                        <span>Influencer Dashboard</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div x-show="$store.global.isRightSidebarExpanded"
            @keydown.window.escape="$store.global.isRightSidebarExpanded = false">
            <div class="fixed inset-0 z-[150] bg-slate-900/60 transition-opacity duration-200"
                @click="$store.global.isRightSidebarExpanded = false" x-show="$store.global.isRightSidebarExpanded"
                x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
            <div class="fixed right-0 top-0 z-[151] h-full w-full sm:w-80">
                <div x-data="{ activeTab: 'tabHome' }"
                    class="relative flex h-full w-full transform-gpu flex-col bg-white transition-transform duration-200 dark:bg-navy-750"
                    x-show="$store.global.isRightSidebarExpanded" x-transition:enter="ease-out"
                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="ease-in" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full">
                    <div class="flex items-center justify-between py-2 px-4">
                        <p x-show="activeTab === 'tabHome'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="text-xs">25 May, 2022</span>
                        </p>
                        <p x-show="activeTab === 'tabProjects'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                            <span class="text-xs">Projects</span>
                        </p>
                        <p x-show="activeTab === 'tabActivity'" class="flex shrink-0 items-center space-x-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-xs">Activity</span>
                        </p>

                        <button @click="$store.global.isRightSidebarExpanded=false"
                            class="btn -mr-1 size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div x-show="activeTab === 'tabHome'"
                        x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                        <label class="relative flex px-3">
                            <input
                                class="form-input peer h-8 w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 text-xs+ ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Search here..." type="text" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="size-4.5 transition-colors duration-200" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z" />
                                </svg>
                            </span>
                        </label>
                        <div class="mt-3">
                            <h2
                                class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Banking cards
                            </h2>
                            <div class="swiper mt-3 px-3" x-init="$nextTick(() => new Swiper($el, { slidesPerView: 'auto', spaceBetween: 16 }))">
                                <div class="swiper-wrapper">
                                    <div
                                        class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 p-3">
                                        <div class="grow">
                                            <img class="h-3"
                                                src="/assets/admin/images/payments/cc-visa-white.svg"
                                                alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div
                                            class="mask is-reuleaux-triangle absolute top-0 right-0 -m-3 size-16 bg-white/20">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 p-3">
                                        <div class="grow">
                                            <img class="h-3"
                                                src="/assets/admin/images/payments/cc-visa-white.svg"
                                                alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div
                                            class="mask is-diamond absolute bottom-0 right-0 -m-3 size-16 bg-white/20">
                                        </div>
                                    </div>
                                    <div
                                        class="swiper-slide relative flex h-28 w-48 flex-col overflow-hidden rounded-xl bg-gradient-to-br from-info to-info-focus p-3">
                                        <div class="grow">
                                            <img class="h-3"
                                                src="/assets/admin/images/payments/cc-visa-white.svg"
                                                alt="image" />
                                        </div>
                                        <div class="text-white">
                                            <p class="text-lg font-semibold tracking-wide">
                                                $2,139.22
                                            </p>
                                            <p class="mt-1 text-xs font-medium">
                                                **** **** **** 8945
                                            </p>
                                        </div>
                                        <div
                                            class="mask is-hexagon-2 absolute top-0 right-0 -m-3 size-16 bg-white/20">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 px-3">
                            <h2
                                class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Pinned Apps
                            </h2>
                            <div class="mt-3 flex space-x-3">
                                <a href="apps-kanban.html" class="w-12 text-center">
                                    <div class="avatar size-10">
                                        <div class="is-initial mask is-squircle bg-success text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Kanban
                                    </p>
                                </a>
                                <a href="dashboards-crm-analytics.html" class="w-12 text-center">
                                    <div class="avatar size-10">
                                        <div class="is-initial mask is-squircle bg-warning text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Analytics
                                    </p>
                                </a>
                                <a href="apps-chat.html" class="w-12 text-center">
                                    <div class="avatar size-10">
                                        <div class="is-initial mask is-squircle bg-info text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Chat
                                    </p>
                                </a>
                                <a href="apps-filemanager.html" class="w-12 text-center">
                                    <div class="avatar size-10">
                                        <div class="is-initial mask is-squircle bg-error text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Files
                                    </p>
                                </a>
                                <a href="dashboards-banking-1.html" class="w-12 text-center">
                                    <div class="avatar size-10">
                                        <div class="is-initial mask is-squircle bg-secondary text-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p
                                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                                        Banking
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="grid grid-cols-2 gap-3 px-3">
                                <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                                    <div class="flex items-center justify-between space-x-1">
                                        <p>
                                            <span
                                                class="text-lg font-medium text-slate-700 dark:text-navy-100">11.3</span>
                                            <span class="text-xs">hr</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="size-4.5 text-secondary dark:text-secondary-light"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-0.5 text-tiny+ uppercase">Working Hours</p>

                                    <div class="progress mt-3 h-1.5 bg-secondary/15 dark:bg-secondary-light/25">
                                        <div
                                            class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light">
                                        </div>
                                    </div>

                                    <div
                                        class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                                        <button
                                            class="btn -ml-1 size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>
                                        <span> 71%</span>
                                    </div>
                                </div>
                                <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                                    <div class="flex items-center justify-between space-x-1">
                                        <p>
                                            <span
                                                class="text-lg font-medium text-slate-700 dark:text-navy-100">13</span>
                                            <span class="text-xs">/22</span>
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-success"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <p class="mt-0.5 text-tiny+ uppercase">Completed tasks</p>

                                    <div class="progress mt-3 h-1.5 bg-success/15 dark:bg-success/25">
                                        <div class="relative w-6/12 overflow-hidden rounded-full bg-success"></div>
                                    </div>

                                    <div
                                        class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                                        <button
                                            class="btn -ml-1 size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </button>
                                        <span> 49%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2
                                class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Stock Market
                            </h2>
                            <div class="mt-3 grid grid-cols-2 gap-3 px-3">
                                <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                                    <div class="flex items-center space-x-2">
                                        <img class="size-10" src="/assets/admin/images/logos/bitcoin.svg"
                                            alt="image" />
                                        <div>
                                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                                BTC
                                            </h2>
                                            <p class="text-xs">Bitcoin</p>
                                        </div>
                                    </div>

                                    <div class="ax-transparent-gridline">
                                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el, pages.charts.stockMarket1);
                                            $el._x_chart.render() });"></div>
                                    </div>

                                    <div class="mt-2 flex items-center justify-between">
                                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            60.33$
                                        </p>
                                        <p class="text-xs font-medium tracking-wide text-success">
                                            +3.3%
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                                    <div class="flex items-center space-x-2">
                                        <img class="size-10" src="/assets/admin/images/logos/solana.svg"
                                            alt="image" />
                                        <div>
                                            <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                                SOL
                                            </h2>
                                            <p class="text-xs">Solana</p>
                                        </div>
                                    </div>

                                    <div class="ax-transparent-gridline">
                                        <div x-init="$nextTick(() => { $el._x_chart = new ApexCharts($el, pages.charts.stockMarket2);
                                            $el._x_chart.render() });"></div>
                                    </div>

                                    <div class="mt-2 flex items-center justify-between">
                                        <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                                            20.56$
                                        </p>
                                        <p class="text-xs font-medium tracking-wide text-success">
                                            +4.11%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2
                                class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Latest News
                            </h2>
                            <div class="mt-3 space-y-3 px-2">
                                <div
                                    class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#"
                                                class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">What
                                                is Tailwind CSS?</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar size-7">
                                                    <img class="rounded-full"
                                                        src="/assets/admin/images/avatar/avatar-20.jpg"
                                                        alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="text-xs font-medium line-clamp-1">
                                                        John D.
                                                    </p>
                                                    <p
                                                        class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        2 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/assets/admin/images/object/object-18.jpg"
                                        class="size-20 rounded-lg object-cover object-center" alt="image" />
                                </div>

                                <div
                                    class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#"
                                                class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Tailwind
                                                CSS Card Example</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar size-7">
                                                    <img class="rounded-full"
                                                        src="/assets/admin/images/avatar/avatar-19.jpg"
                                                        alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="text-xs font-medium line-clamp-1">
                                                        Travis F.
                                                    </p>
                                                    <p
                                                        class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        5 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/assets/admin/images/object/object-2.jpg"
                                        class="size-20 rounded-lg object-cover object-center" alt="image" />
                                </div>

                                <div
                                    class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                                    <div class="flex flex-1 flex-col justify-between">
                                        <div class="line-clamp-2">
                                            <a href="#"
                                                class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">10
                                                Tips for Making a Good Camera Even Better</a>
                                        </div>
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                <div class="avatar size-7">
                                                    <img class="rounded-full"
                                                        src="/assets/admin/images/avatar/avatar-18.jpg"
                                                        alt="avatar" />
                                                </div>
                                                <div>
                                                    <p class="text-xs font-medium line-clamp-1">
                                                        Alfredo E .
                                                    </p>
                                                    <p
                                                        class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                                        4 min read
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="flex">
                                                <button
                                                    class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                                    </svg>
                                                </button>
                                                <button
                                                    class="btn size-7 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                        stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="/assets/admin/images/object/object-1.jpg"
                                        class="size-20 rounded-lg object-cover object-center" alt="image" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 px-3">
                            <h2
                                class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                                Settings
                            </h2>
                            <div class="mt-2 flex flex-col space-y-2">
                                <label class="inline-flex items-center space-x-2">
                                    <input x-model="$store.global.isDarkModeEnabled"
                                        class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                                        type="checkbox" />
                                    <span>Dark Mode</span>
                                </label>
                                <label class="inline-flex items-center space-x-2">
                                    <input x-model="$store.global.isMonochromeModeEnabled"
                                        class="form-switch h-5 w-10 rounded-lg bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                                        type="checkbox" />
                                    <span>Monochrome Mode</span>
                                </label>
                            </div>
                        </div>

                        <div class="mt-3 px-3">
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex items-center justify-between">
                                    <p>
                                        <span class="font-medium text-slate-600 dark:text-navy-100">35GB</span>
                                        of 1TB
                                    </p>
                                    <a href="#"
                                        class="text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Upgrade</a>
                                </div>

                                <div class="progress mt-2 h-2 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-7/12 rounded-full bg-info"></div>
                                </div>
                            </div>
                        </div>
                        <div class="h-18"></div>
                    </div>

                    <div x-show="activeTab === 'tabProjects'"
                        x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        class="is-scrollbar-hidden overflow-y-auto overscroll-contain px-3 pt-1">
                        <div class="grid grid-cols-2 gap-3">
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between space-x-1">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        14
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" stroke-width="1.5"
                                        class="size-5 text-primary dark:text-accent" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-xs+">Pending</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        36
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-success"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>
                                <p class="mt-1 text-xs+">Completed</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        143
                                    </p>

                                    <i class="fa fa-spinner text-base text-warning"></i>
                                </div>
                                <p class="mt-1 text-xs+">In Progress</p>
                            </div>
                            <div class="rounded-lg bg-slate-100 p-3 dark:bg-navy-600">
                                <div class="flex justify-between">
                                    <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                        279
                                    </p>

                                    <i class="fa-solid fa-list-check text-base text-info"></i>
                                </div>
                                <p class="mt-1 text-xs+">Total</p>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="size-10 rounded-lg object-cover object-center"
                                    src="/assets/admin/images/illustrations/lms-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        LMS App Design
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 7 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-4/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    25%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-16.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            jd
                                        </div>
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-20.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="size-10 rounded-lg object-cover object-center"
                                    src="/assets/admin/images/illustrations/store-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        Store Dashboard
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 11 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-6/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    49%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-17.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-warning text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            dv
                                        </div>
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-19.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="size-10 rounded-lg object-cover object-center"
                                    src="/assets/admin/images/illustrations/chat-ui.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        Chat Mobile App
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 19 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-2/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    13%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-5.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-error text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            gt
                                        </div>
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-11.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mt-4 rounded-lg border border-slate-150 p-3 dark:border-navy-600">
                            <div class="flex items-center space-x-3">
                                <img class="size-10 rounded-lg object-cover object-center"
                                    src="/assets/admin/images/illustrations/nft.svg" alt="image" />
                                <div>
                                    <p class="font-medium leading-snug text-slate-700 dark:text-navy-100">
                                        NFT Marketplace App
                                    </p>
                                    <p class="text-xs text-slate-400 dark:text-navy-300">
                                        Updated at 5 Sep
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="progress h-1.5 bg-slate-150 dark:bg-navy-500">
                                    <div class="w-9/12 rounded-full bg-primary dark:bg-accent"></div>
                                </div>
                                <p class="mt-2 text-right text-xs+ font-medium text-primary dark:text-accent-light">
                                    78%
                                </p>
                            </div>

                            <div class="mt-3 flex items-center justify-between space-x-2">
                                <div class="flex -space-x-3">
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-8.jpg" alt="avatar" />
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <div
                                            class="is-initial rounded-full bg-success text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                            jd
                                        </div>
                                    </div>
                                    <div class="avatar size-7 hover:z-10">
                                        <img class="rounded-full ring ring-white dark:ring-navy-700"
                                            src="/assets/admin/images/avatar/avatar-12.jpg" alt="avatar" />
                                    </div>
                                </div>
                                <button
                                    class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="h-18"></div>
                    </div>

                    <div x-show="activeTab === 'tabActivity'"
                        x-transition:enter="transition-all duration-500 easy-in-out"
                        x-transition:enter-start="opacity-0 [transform:translate3d(0,1rem,0)]"
                        x-transition:enter-end="opacity-100 [transform:translate3d(0,0,0)]"
                        class="is-scrollbar-hidden overflow-y-auto overscroll-contain pt-1">
                        <div
                            class="mx-3 flex flex-col items-center rounded-lg bg-slate-100 py-3 px-8 dark:bg-navy-600">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="size-8 text-secondary dark:text-secondary-light" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <p class="mt-2 text-xs">Today</p>

                            <p class="text-lg font-medium text-slate-700 dark:text-navy-100">
                                6hr 22m
                            </p>

                            <div class="progress mt-3 h-2 bg-secondary/15 dark:bg-secondary-light/25">
                                <div
                                    class="is-active relative w-8/12 overflow-hidden rounded-full bg-secondary dark:bg-secondary-light">
                                </div>
                            </div>

                            <button
                                class="btn mt-5 space-x-2 rounded-full border border-slate-300 px-3 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="size-4.5 text-slate-400 dark:text-navy-300" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                                </svg>
                                <span> Download Report</span>
                            </button>
                        </div>

                        <ol class="timeline line-space mt-5 px-4 [--size:1.5rem]">
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-secondary dark:bg-navy-700 dark:text-secondary-light">
                                    <i class="fa fa-user-edit text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            User Photo Changed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">12 minute ago</span>
                                    </div>
                                    <p class="py-1">John Doe changed his avatar photo</p>
                                    <div class="avatar mt-2 size-20">
                                        <img class="mask is-squircle"
                                            src="/assets/admin/images/avatar/avatar-19.jpg" alt="avatar" />
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-primary dark:bg-navy-700 dark:text-accent">
                                    <i class="fa-solid fa-image text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Images Added
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">1 hour ago</span>
                                    </div>
                                    <p class="py-1">Mores Clarke added new image gallery</p>
                                    <div class="mt-4 grid grid-cols-3 gap-3">
                                        <img class="rounded-lg" src="/assets/admin/images/object/object-1.jpg"
                                            alt="image" />
                                        <img class="rounded-lg" src="/assets/admin/images/object/object-2.jpg"
                                            alt="image" />
                                        <img class="rounded-lg" src="/assets/admin/images/object/object-3.jpg"
                                            alt="image" />
                                        <img class="rounded-lg" src="/assets/admin/images/object/object-4.jpg"
                                            alt="image" />
                                        <img class="rounded-lg" src="/assets/admin/images/object/object-5.jpg"
                                            alt="image" />
                                        <img class="rounded-lg" src="/assets/admin/images/object/object-6.jpg"
                                            alt="image" />
                                    </div>
                                    <div class="mt-4">
                                        <span class="font-medium text-slate-600 dark:text-navy-100">
                                            Category:
                                        </span>

                                        <a href="#"
                                            class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                            #Tag
                                        </a>

                                        <a href="#"
                                            class="text-xs text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">
                                            #Category
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-success dark:bg-navy-700">
                                    <i class="fa fa-leaf text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Design Completed
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">3 hours ago</span>
                                    </div>
                                    <p class="py-1">
                                        Robert Nolan completed the design of the CRM application
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center space-x-1 pt-2 text-slate-600 transition-colors hover:text-primary dark:text-navy-100 dark:hover:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                        <span>File_final.fig</span>
                                    </a>
                                    <div class="pt-2">
                                        <a href="#"
                                            class="tag rounded-full border border-secondary/30 bg-secondary/10 text-secondary hover:bg-secondary/20 focus:bg-secondary/20 active:bg-secondary/25 dark:border-secondary-light/30 dark:bg-secondary-light/10 dark:text-secondary-light dark:hover:bg-secondary-light/20 dark:focus:bg-secondary-light/20 dark:active:bg-secondary-light/25">
                                            UI/UX
                                        </a>

                                        <a href="#"
                                            class="tag rounded-full border border-info/30 bg-info/10 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                                            CRM
                                        </a>

                                        <a href="#"
                                            class="tag rounded-full border border-success/30 bg-success/10 text-success hover:bg-success/20 focus:bg-success/20 active:bg-success/25">
                                            Dashboard
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-warning dark:bg-navy-700">
                                    <i class="fa fa-project-diagram text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            ER Diagram
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">Team completed the ER diagram app</p>
                                    <div>
                                        <p class="text-xs text-slate-400 dark:text-navy-300">
                                            Members:
                                        </p>
                                        <div class="mt-2 flex justify-between">
                                            <div class="flex flex-wrap -space-x-2">
                                                <div class="avatar size-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="/assets/admin/images/avatar/avatar-16.jpg"
                                                        alt="avatar" />
                                                </div>

                                                <div class="avatar size-7 hover:z-10">
                                                    <div
                                                        class="is-initial rounded-full bg-info text-xs+ uppercase text-white ring ring-white dark:ring-navy-700">
                                                        jd
                                                    </div>
                                                </div>

                                                <div class="avatar size-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="/assets/admin/images/avatar/avatar-20.jpg"
                                                        alt="avatar" />
                                                </div>

                                                <div class="avatar size-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="/assets/admin/images/avatar/avatar-8.jpg"
                                                        alt="avatar" />
                                                </div>

                                                <div class="avatar size-7 hover:z-10">
                                                    <img class="rounded-full ring ring-white dark:ring-navy-700"
                                                        src="/assets/admin/images/avatar/avatar-5.jpg"
                                                        alt="avatar" />
                                                </div>
                                            </div>
                                            <button
                                                class="btn size-7 rounded-full bg-slate-150 p-0 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-45"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-item">
                                <div
                                    class="timeline-item-point rounded-full border border-current bg-white text-error dark:bg-navy-700">
                                    <i class="fa fa-history text-tiny"></i>
                                </div>
                                <div class="timeline-item-content flex-1 pl-4">
                                    <div class="flex flex-col justify-between pb-2 sm:flex-row sm:pb-0">
                                        <p
                                            class="pb-2 font-medium leading-none text-slate-600 dark:text-navy-100 sm:pb-0">
                                            Weekly Report
                                        </p>
                                        <span class="text-xs text-slate-400 dark:text-navy-300">a day ago</span>
                                    </div>
                                    <p class="py-1">The weekly report was uploaded</p>
                                </div>
                            </li>
                        </ol>
                        <div class="h-18"></div>
                    </div>

                    <div class="pointer-events-none absolute bottom-4 flex w-full justify-center">
                        <div
                            class="pointer-events-auto mx-auto flex space-x-1 rounded-full border border-slate-150 bg-white px-4 py-0.5 shadow-lg dark:border-navy-700 dark:bg-navy-900">
                            <button @click="activeTab = 'tabHome'"
                                :class="activeTab === 'tabHome' && 'text-primary dark:text-accent'"
                                class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab === 'tabHome'" xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <svg x-show="activeTab !== 'tabHome'" xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </button>
                            <button @click="activeTab = 'tabProjects'"
                                :class="activeTab === 'tabProjects' && 'text-primary dark:text-accent'"
                                class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab === 'tabProjects'" xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>

                                <svg x-show="activeTab !== 'tabProjects'" xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                </svg>
                            </button>
                            <button @click="activeTab = 'tabActivity'"
                                :class="activeTab === 'tabActivity' && 'text-primary dark:text-accent'"
                                class="btn h-9 rounded-full py-0 px-4 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25">
                                <svg x-show="activeTab ===  'tabActivity'" xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg x-show="activeTab !==  'tabActivity'" xmlns="http://www.w3.org/2000/svg"
                                    class="size-5 shrink-0" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      

        @yield('main_content')
 
    </div> <!-- Page Wrapper end-->
    
    <div id="x-teleport-target"></div>
    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>

    @yield('script')
    
</body>
 
</html>
