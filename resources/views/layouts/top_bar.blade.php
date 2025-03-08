<header>


    <nav class="bg-gray-800 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-800 shadow-xl shadow-gray-900/60">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="#">
                    <button type="button" class="cursor-pointer text-white bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 font-semibold">Logout</button>
                </a>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="home" class="block py-2 px-3 text-white bg-purple-700 rounded-sm md:bg-transparent md:text-purple-700 md:p-0 md:dark:text-purple-500 uppercase" aria-current="page">Contacts List</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-700 md:p-0 md:dark:hover:text-purple-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 transition-colors duration-100 uppercase">{{ session('user.username') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>