<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0">
    <div class="p-2 bg-sky-200">
        <div class="flex items-center justify-between flex-wrap">
            <div class="flex-1 items-center md:inline">
                <p class="ml-3 text-sky-800 cookie-consent__message">
                    {!! trans('cookie-consent::texts.message') !!}
                </p>
            </div>
            <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-white bg-sky-800 hover:bg-sky-700">
                    {{ trans('cookie-consent::texts.agree') }}
                </button>
            </div>
        </div>
    </div>
</div>
