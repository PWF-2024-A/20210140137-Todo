<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="post" action="{{ route('todo.store') }}" class="">
                        @csrf
                        @method('post')

                        <div class="mb-6">
                            <x-input-label for="title" :value="_('Title')" />
                            <x-input id="title" name="title" type="text" class="block w-full mt-1" required autofocus autocomplete="title"/>
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                            <a href="{{ route('todo.index') }}"
                               class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest
                                      text-gray-700 uppercase transition duration-150 ease-in-out
                                      bg-white border border-gray rounded-md shadow-sm dark:bg-gray800
                                      dark:border-gray500 dark:text-gray300 hover:bggray50
                                      dark:hover:bggray700 focus:outline-none focus:ring2
                                      focus:ring-indigo500 focus:ring-offset2
                                      dark:focus:ring-offsetgray800 disabled:opacity25">
                                {{ __('Cancel') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>