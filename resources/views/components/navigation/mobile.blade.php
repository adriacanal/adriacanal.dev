<nav class="grid gap-y-8">
    <a href="{{ route('page', 'about-me') }}" title="About me" class="-m-3 p-3 flex items-center rounded-md hover:bg-green-50">
        <svg class="flex-shrink-0 h-6 w-6 text-green-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="ml-3 text-base font-medium text-gray-900">About me</span>
    </a>

    {{--TODO: This page is work in progress, disabled from menu for now --}}
    {{--<a href="{{ route('page', 'uses') }}" class="-m-3 p-3 flex items-center rounded-md hover:bg-green-50">
        <svg class="flex-shrink-0 h-6 w-6 text-green-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
        </svg>
        <span class="ml-3 text-base font-medium text-gray-900">Uses</span>
    </a>--}}

    <a href="{{ route('contact') }}" title="Contact" class="-m-3 p-3 flex items-center rounded-md hover:bg-green-50">
        <svg class="flex-shrink-0 h-6 w-6 text-green-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
        </svg>
        <span class="ml-3 text-base font-medium text-gray-900">Contact</span>
    </a>
</nav>
