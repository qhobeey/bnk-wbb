<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags  -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

        <title>Error</title>
        <link rel="icon" type="image/png" href="images/favicon.png" />

        <!-- CSS Assets -->
        <link rel="stylesheet" href="/assets/css/app.css" />

        <!-- Javascript Assets -->
        <script src="/assets/js/app.js" defer></script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
        <script>
            /**
             * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
             */
            localStorage.getItem("_x_darkMode_on") === "true" && document.documentElement.classList.add("dark");
        </script>
    </head>
    <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
        <!-- App preloader-->
        <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
            <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
        </div>

        <!-- Page Wrapper -->
        <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
            <main class="grid w-full grow grid-cols-1 place-items-center">
                <div class="max-w-md p-6 text-center">
                    <div class="w-full">
                        <img class="w-full" x-show="!$store.global.isDarkModeEnabled" src="/assets/images/illustrations/error-429.svg" alt="image" />
                        <img class="w-full" x-show="$store.global.isDarkModeEnabled" src="/assets/images/illustrations/error-429-dark.svg" alt="image" />
                    </div>
                    <p class="pt-4 text-7xl font-bold text-primary dark:text-accent">
                        429
                    </p>
                    <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
                        Error in transfering funds
                    </p>
                    <p class="pt-2 text-slate-500 dark:text-navy-200">
                        Sorry, unable to transfer funds at this moment. Please contact support at
                        <a style="color: blue;" href="mailto:support@g-american.com">support@g-american.com</a>
                    </p>
                    <div>
                        <div class="mt-1 flex items-center space-x-2" style="justify-content: center;    margin-top: 20px;">
                            <a href="{{route('admin.dashboard')}}"
                                class="btn bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90" style="background: #4e46e5; color:aliceblue;">
                                Back to dashboard
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <!-- 
        This is a place for Alpine.js Teleport feature 
        @see https://alpinejs.dev/directives/teleport
      -->
        <div id="x-teleport-target"></div>
        <script>
            window.addEventListener("DOMContentLoaded", () => Alpine.start());
        </script>
    </body>
</html>
