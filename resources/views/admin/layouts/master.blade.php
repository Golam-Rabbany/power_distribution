<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @yield('data_table_css')
</head>

<body>
    <div class="min-h-screen w-full bg-slate-300 relative" x-data="{ sidebarOpen: false }" x-init="sidebarOpen = window.innerWidth > 1024">
        <div class="z-20 sticky top-0 flex w-full bg-sky-500 text-white">
            <div class="
            flex
            cursor-pointer
            items-center
            self-stretch
            p-3
            hover:bg-sky-600
            lg:order-2
          "
                x-on:click="sidebarOpen = !sidebarOpen">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div>
            <div class="flex flex-grow justify-center lg:order-1 lg:flex-grow-0">
                <div class="max-w-56 p-2 text-center lg:w-56 lg:max-w-56">
                    Laravel
                </div>
            </div>
            <div
                class="
            relative
            flex
            cursor-pointer
            items-center
            justify-end
            lg:order-3 lg:flex-grow
          ">
                <div class="flex items-center self-stretch px-4 hover:bg-sky-600 peer">
                    <div class="mr-1">
                        <span class="font-semibold">{{ Auth::user()->name }}</span>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="mt-1 h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>
                <div
                    class="
              absolute
              top-full
              hidden
              w-48
              rounded-b
              bg-gray-300
              text-blue-400
              hover:block
              peer-hover:block
            ">
                    <a class="block p-2 font-semibold hover:bg-slate-100" href="#">Profile</a>
                    <div class="w-full border-t"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" class="font-semibold text-red-500"
                            onclick="event.preventDefault();
                                  this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>

                </div>
            </div>
        </div>
        <div class="flex w-full z-10">
            <div class="
            fixed
            h-full
            w-56
            overflow-y-auto
            bg-sky-800
            text-white
            transition-[margin]
          "
                x-cloak x-bind:class="sidebarOpen ? '' : '-ml-56'">
                <div class="w-full font-semibold">
                    <a href="" class="flex items-center p-[.7rem] hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </div>
                <div class="w-full font-semibold">
                    <a href="{{route('area.index')}}" class="flex items-center p-[.7rem] hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Area</span>
                    </a>
                </div>
                <div class="w-full font-semibold">
                    <a href="{{route('owner.index')}}" class="flex items-center p-[.7rem] hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Owner</span>
                    </a>
                </div>
                <div class="w-full font-semibold">
                    <a href="{{route('meter.index')}}" class="flex items-center p-[.7rem] hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Meter</span>
                    </a>
                </div>
                <div class="w-full font-semibold">
                    <a href="{{route('reading.index')}}" class="flex items-center p-[.7rem] hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Reading</span>
                    </a>
                </div>
                <div class="w-full font-semibold" x-data="{ submenuOpen: false }" x-on:active="submenuOpen = true"
                    x-on:click.outside="submenuOpen = false">
                    <a href="#" x-on:click.prevent="submenuOpen = !submenuOpen"
                        class="flex w-full items-center p-[.7rem] hover:text-sky-500">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="mr-1 h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="flex-grow">Dashboard</div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="h-5 w-5 transition-[transform]" x-bind:class="submenuOpen ? 'rotate-90' : ''">
                            <path fill-rule="evenodd"
                                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <div class="w-full overflow-hidden bg-gray-100" x-bind:class="submenuOpen ? 'h-auto' : 'h-0'">
                        <a class="pl-8 block w-full cursor-pointer p-2 hover:text-sky-500">Submenu 1</a>
                        <a class="pl-8 block w-full cursor-pointer p-2 hover:text-sky-500">Submenu 2</a>
                        <a class="pl-8 block w-full cursor-pointer p-2 hover:text-sky-500">Submenu 3</a>
                    </div>
                </div>

            </div>
            <div class="flex-grow transition-[margin] w-full overflow-auto" x-cloak
                x-bind:class="sidebarOpen ? 'ml-56 overflow-hidden' : ''">
                <div class="w-full bg-white h-screen">

                    @yield('dashboard')

                </div>
            </div>
        </div>
    </div>

    @yield('data_table_js')


    @yield('jquery')
</body>

</html>
