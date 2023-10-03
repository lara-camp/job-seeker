<section class="px-2 py-32 md:px-0">
    <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
            <div class="w-full md:w-1/2 md:px-3">
                <div
                    class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                    <h1
                        class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-5xl lg:text-6xl xl:text-7xl">
                        <span class="block xl:inline">Let's Get Your</span>
                        <span
                            class="block text-transparent bg-clip-text bg-gradient-to-r from-primary-500 via-primary-400 to-tertiary-500 xl:inline">
                            Dream Jobs </span>
                        <span>With Us.</span>
                    </h1>
                    <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-md md:max-w-3xl">Find your dream job with our site. There are lot of trusted company advertise their for employees.
                    </p>
                    <form method="GET">
                        <div class="relative rounded-full shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-5">
                                <span class="text-gray-500 sm:text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-briefcase" width="22" height="22"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <path d="M12 12l0 .01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" name="price" id="price"
                                class="block w-full rounded-full border-0 py-3.5 pl-12 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary-600 sm:text-sm sm:leading-6"
                                placeholder="Job Title">
                            <div class="absolute inset-y-0 right-32 flex items-center divide-x-2 divide-gray-300">
                                <label for="currency" class="sr-only">Currency</label>
                                <select id="currency" name="currency"
                                    class="h-auto min-w-md rounded-ee-full border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:outline-none focus:ring-0 sm:text-sm">
                                    <option value="0" disabled selected>Choose Region</option>
                                    @foreach ($regions as $region)
                                        <option>{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-primary-button name="Find Now"
                                class="rounded-full absolute bottom-[5px] right-2"></x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                    <img
                        src="https://images.unsplash.com/photo-1498049860654-af1a5c566876?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
                </div>
            </div>
        </div>
    </div>
</section>
