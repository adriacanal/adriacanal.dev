<nav class="hidden md:flex space-x-10">

    <a href="{{ route('page', 'about-me') }}" title="About me" class="text-base font-medium text-gray-500 hover:text-sky-800 dark:text-slate-400 dark:hover:text-sky-400">
        About me
    </a>
    {{--TODO: This page is work in progress, disabled from menu for now --}}
    {{--<a href="{{ route('page', 'uses') }}" class="text-base font-medium text-gray-500 hover:text-sky-800">
        Uses
    </a>--}}
    <a href="{{ route('contact') }}" title="Contact" class="text-base font-medium text-gray-500 hover:text-sky-800 dark:text-slate-400 dark:hover:text-sky-400">
        Contact
    </a>
</nav>
