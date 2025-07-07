<x-guest-layout>
    <div class="max-w-xl mx-auto mt-10 space-y-8">
        <div class="text-center">
            <x-application-logo class="w-20 h-20 mx-auto text-gray-500" />
            <h1 class="text-3xl font-bold mt-4">Welcome</h1>
        </div>

        <div>
            <x-nav-link href="#" :active="false">Nav Link</x-nav-link>
            <x-responsive-nav-link href="#" :active="false" class="mt-2">Responsive Nav Link</x-responsive-nav-link>
        </div>

        <form class="bg-gray-50 p-6 rounded shadow" method="POST" action="#">
            @csrf
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" name="email" type="email" class="mt-1 w-full" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" value="Password" />
                <x-text-input id="password" name="password" type="password" class="mt-1 w-full" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4 flex space-x-2">
                <x-primary-button>Save</x-primary-button>
                <x-secondary-button type="button">Cancel</x-secondary-button>
                <x-danger-button type="button">Delete</x-danger-button>
            </div>
        </form>

        <div>
            <x-dropdown align="left" width="48">
                <x-slot name="trigger">
                    <x-secondary-button>Dropdown</x-secondary-button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link href="#">First</x-dropdown-link>
                    <x-dropdown-link href="#">Second</x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </div>

        <div>
            <x-primary-button x-on:click="$dispatch('open-modal', 'example-modal')">Open Modal</x-primary-button>
            <x-modal name="example-modal" focusable>
                <div class="p-6">
                    <h2 class="text-lg font-medium">Example Modal</h2>
                    <p class="mt-2 text-sm text-gray-600">Demo modal content.</p>
                    <div class="mt-4 text-right">
                        <x-secondary-button x-on:click="$dispatch('close')">Close</x-secondary-button>
                    </div>
                </div>
            </x-modal>
        </div>
    </div>
</x-guest-layout>
