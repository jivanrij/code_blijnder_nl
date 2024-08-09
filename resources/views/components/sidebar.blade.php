<div class="flex items-center shrink-0 px-2">
    <a href="https://blijnder.nl">
        <img class="w-full dark:hidden" src="https://blijnder.nl/images/blijnder/orange_transparent_primary.png" alt="Blijnder Logo" />
        <img class="w-full hidden dark:inline" src="https://blijnder.nl/images/blijnder/orange_transparent_primary.png" alt="Blijnder Logo" />
    </a>
</div>

{!! $errors->first('code', '<p class="mt-4 text-red-600 font-medium text-center">:message</p>') !!}

<nav class="mt-4" aria-label="Sidebar">
    <div class="space-y-1">
        {!! $slot !!}
    </div>
</nav>

<p class="mt-4 text-sm text-gray-500 text-center">
    Please note that all data is publicly available.
</p>

<div class="grow"></div>

<div class="mt-4 text-center">
    <button
        type="button" aria-pressed="false"
        class="darkModeToggle bg-gray-300 dark:bg-gray-500 relative inline-flex shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
    >
        <span class="sr-only">Use setting</span>

        <span class="translate-x-0 dark:translate-x-5 relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200">
            <span class="dark:hidden opacity-100 ease-in duration-200 dark:opacity-0 dark:ease-out dark:duration-100 absolute inset-0 h-full w-full flex items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-sun class="h-3 w-3 text-gray-400" />
            </span>

            <span class="hidden dark:flex opacity-0 ease-out duration-100 dark:opacity-100 dark:ease-in dark:duration-200 absolute inset-0 h-full w-full items-center justify-center transition-opacity" aria-hidden="true">
                <x-heroicon-s-moon class="h-3 w-3 text-gray-600" />
            </span>
        </span>
    </button>
</div>
