<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="md:col-span-1">
                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md text-center">
                        <img class="mx-auto rounded-full w-24 h-24 object-cover"
                             src="{{ Auth::user()->profile_photo_url ?? 'https://via.placeholder.com/150' }}" 
                             alt="{{ Auth::user()->name }}">
                        
                        <h3 class="mt-4 text-xl font-bold text-gray-900 dark:text-gray-100">{{ Auth::user()->name }}</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ '@' . Str::slug(Auth::user()->name) }}</p>
                        
                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                            Member Since: <b>{{ Auth::user()->created_at->format('d F Y') }}</b>
                        </p>

                        <div class="mt-6 space-y-3">
                            <button type="button" class="w-full px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-md text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none">
                                Change Photo
                            </button>
                            <button type="button" class="w-full px-4 py-2 bg-red-600 text-white rounded-md text-sm font-medium hover:bg-red-700 focus:outline-none">
                                Upload New Photo
                            </button>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-6">

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md">
                        <section>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">
                                Edit Profile
                            </h2>
                            {{-- We removed the tabs and will modify the partial below --}}
                            @include('profile.partials.update-profile-information-form')
                        </section>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md">
                        <section>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-6">
                                Update Password
                            </h2>
                            @include('profile.partials.update-password-form')
                        </section>
                    </div>

                    <div class="bg-white dark:bg-gray-800 p-8 rounded-xl shadow-md">
                        <section class="space-y-6">
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                                {{ __('Delete Account') }}
                            </h2>
                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
                            </p>
                            @include('profile.partials.delete-user-form')
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>