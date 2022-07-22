@slot('title', $page->title . ' - ' . config('app.name'))

@if(isset($page->meta_description))
    @slot('description', $page->meta_description)
@endif

<div class="lg:relative py-16 bg-white dark:bg-slate-900 overflow-hidden">
    <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
        <div class="lg:relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
            <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-600" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
            </svg>
            <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-600" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute bottom-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                <defs>
                    <pattern id="d3eb07ae-5182-43e6-857d-35c643af9034" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-600" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="384" fill="url(#d3eb07ae-5182-43e6-857d-35c643af9034)" />
            </svg>
        </div>
    </div>
    <div class="lg:relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-sky-800 dark:text-sky-400 font-semibold tracking-wide uppercase">Updated {{ $page->updated_at->diffForHumans() }}</span>
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">{{ $page->title }}</span>
            </h1>
        </div>
        <div class="mt-6 prose prose-green prose-lg dark:prose-invert text-gray-500 dark:text-slate-400 mx-auto">
            {!! $content !!}

        @if ($page->id === 3)
            <iframe style="border: 0; height: 200px; width: 600px;"
                src="https://matomo.adriacanal.dev/index.php?module=CoreAdminHome&action=optOut&language=en&fontColor=6b7280&fontSize=1.125rem&fontFamily=ui-sans-serif"
            ></iframe>
        @endif
        </div>
    </div>
</div>
