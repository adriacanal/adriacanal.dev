<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0">
    <div class="p-2 bg-green-100">
        <div class="flex items-center justify-between flex-wrap">
            <div class="flex-1 items-center md:inline">
                <p class="ml-3 text-green-800 cookie-consent__message">
                    {!! trans('cookie-consent::texts.message') !!}
                </p>
            </div>
            <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                <a class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-white bg-green-800 hover:bg-green-700">
                    {{ trans('cookie-consent::texts.agree') }}
                </a>
            </div>
        </div>
    </div>
</div>
