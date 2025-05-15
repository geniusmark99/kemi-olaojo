<nav class="relative flex items-center justify-between p-4 lg:px-6">


    <div class="flex">

        <ul class="hidden gap-6 text-sm lg:flex md:items-center">
            <li><a class="text-gray-700 underline-offset-4 hover:text-black hover:underline" href="/search">Mugs</a>
            </li>
            <li><a class="text-gray-700 underline-offset-4 hover:text-black hover:underline"
                    href="/search/shirts">Shirts</a></li>
            <li><a class="text-gray-700 underline-offset-4 hover:text-black hover:underline"
                    href="/search/stickers">Stickers</a></li>
        </ul>


        <div class="block flex-none md:hidden">
            <button aria-label="Open mobile menu"
                class="flex h-11 w-11 items-center justify-center rounded-md border border-neutral-200 
            text-black transition-colors md:hidden "><svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon" class="h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                    </path>
                </svg>
            </button>
        </div>

    </div>
    {{-- 
    <div>
        <a class="flex w-full items-center justify-center" href="/">
            <div
                class="flex flex-none items-center justify-center border border-neutral-200 bg-white 
                 size-[40px] rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" aria-label="Acme Store logo" viewBox="0 0 32 28"
                    class=" fill-black size-[16px]">
                    <path d="M21.5758 9.75769L16 0L0 28H11.6255L21.5758 9.75769Z"></path>
                    <path d="M26.2381 17.9167L20.7382 28H32L26.2381 17.9167Z"></path>
                </svg>
            </div>
            <div class="ml-2 flex-none text-sm font-medium uppercase md:hidden lg:block">Favour Online</div>
        </a>
    </div> --}}

    <button aria-label="Open cart">
        <div
            class="relative flex h-11 w-11 items-center justify-center rounded-md border 
                border-neutral-200 text-black transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true" data-slot="icon"
                class="h-4 transition-all ease-in-out hover:scale-110">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z">
                </path>
            </svg>
        </div>
    </button>
</nav>
