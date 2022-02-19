<x-slot name="title">Contact - {{ config('app.name') }}</x-slot>
<x-slot name="description">If you have any question, doubt or do you think I can help you with something, feel free to contact me. I will respond shortly!</x-slot>

<div class="bg-white py-16 px-4 overflow-hidden sm:px-6 lg:px-8 lg:py-24">
    <div class="max-w-xl mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                May I help you?
            </h2>
            <p class="mt-4 text-lg leading-6 text-gray-500">
                Get in touch with me!
            </p>

            @if($errors->isNotEmpty())
                <p class="mt-9">
                    <x-alerts.error :errors="$errors->all()" />
                </p>
            @endif
        </div>
        <div class="mt-12">
            <form wire:submit.prevent="submit" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                @csrf
                <x-honeypot />
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">First name</label>
                    <div class="mt-1">
                        <input type="text" name="name" wire:model="name" id="name" autocomplete="name" class="py-3 px-4 block w-full shadow-sm focus:ring-green-500 focus:border-green-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div>
                    <label for="surname" class="block text-sm font-medium text-gray-700">Last name</label>
                    <div class="mt-1">
                        <input type="text" name="surname" wire:model="surname" id="surname" autocomplete="surname" class="py-3 px-4 block w-full shadow-sm focus:ring-green-500 focus:border-green-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <div class="mt-1">
                        <input id="email" name="email" wire:model="email" type="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-green-500 focus:border-green-500 border-gray-300 rounded-md">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <div class="mt-1">
                        <textarea id="message" name="message" wire:model="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-green-500 focus:border-green-500 border border-gray-300 rounded-md"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-green-500 hover:bg-green-700">
                        Let's talk
                    </button>
                </div>
            </form>

            @if(session()->has('title') || session()->has('description'))
                <x-notification :title="session('title')" :description="session('description')" />
            @endif
        </div>
    </div>
</div>
