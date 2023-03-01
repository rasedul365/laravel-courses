<x-guest-layout>
    <div class="w-full h-auto bg-gray-100 bg-no-repeat bg-cover">
        <main class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-baseline justify-between pt-10">
                <h1 class="text-lg font-bold tracking-tight text-gray-900">All Books</h1>

                <div class="flex items-center">
                    <div x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }
                this.open = true
            },
            close(focusAfter) {
                if (! this.open) {
                    return
                }
                this.open = false
            }
        }" x-on:keydown.escape.prevent.stop="close($refs.button)"
                        x-on:focusin.window="! $refs.panel.contains($event.target) &amp;&amp; close()"
                        x-id="['dropdown-button']" class="relative inline-block text-left">
                        <button x-on:click="showOffCanvasFilter = true" type="button"
                            class="sm:hidden bg-white px-3 py-1.5 rounded-sm shadow group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900">
                            Filter <svg class="flex-shrink-0 w-5 h-5 ml-1 -mr-1 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <button x-ref="button" x-on:click="toggle()" :aria-expanded="open"
                            :aria-controls="$id('dropdown-button')" type="button"
                            class="bg-white px-3 py-1.5 rounded-sm shadow group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                            aria-expanded="false" aria-controls="dropdown-button-1">
                            Sort <svg class="flex-shrink-0 w-5 h-5 ml-1 -mr-1 text-gray-400 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        <div x-ref="panel" x-show="open" x-on:click.outside="close($refs.button)"
                            :id="$id('dropdown-button')"
                            class="absolute right-0 z-10 w-40 mt-2 origin-top-right bg-white rounded-md shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                            style="display: none" id="dropdown-button-1">
                            <a x-on:click="close($refs.button)" wire:click="applySorting('latest')"
                                class="block px-4 py-2 text-sm text-gray-500 cursor-pointer hover:bg-gray-100 "
                                role="menuitem" tabindex="-1" id="menu-item-1">Recently Added</a>
                            <a x-on:click="close($refs.button)" wire:click="applySorting('popular')"
                                class="block px-4 py-2 text-sm font-medium text-gray-500 text-gray-900 cursor-pointer hover:bg-gray-100 "
                                role="menuitem" tabindex="-1" id="menu-item-1">Most Popular</a>
                            <a x-on:click="close($refs.button)" wire:click="applySorting('rated')"
                                class="block px-4 py-2 text-sm text-gray-500 cursor-pointer hover:bg-gray-100 "
                                role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                            <a x-on:click="close($refs.button)" wire:click="applySorting('updated')"
                                class="block px-4 py-2 text-sm text-gray-500 cursor-pointer hover:bg-gray-100 "
                                role="menuitem" tabindex="-1" id="menu-item-1">Recently Updated</a>
                        </div>
                    </div>
                </div>
            </div>

            <section aria-labelledby="courses-heading" class="pt-6 pb-12">
                <h2 id="courses-heading" class="sr-only">Courses</h2>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                    <!-- Filters -->

                    <form id="filter-courses" class="hidden p-4 px-6 bg-white rounded-sm shadow lg:block" method="GET">
                        <h3 class="sr-only">Filters</h3>
                        <div wire:id="IUKo0eaEa7F8uAOWvPMD" x-data="{ open: true }"
                            class="py-6 border-b border-gray-200">
                            <h3 class="flow-root -my-3">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                    class="flex items-center justify-between w-full py-3 text-sm text-gray-400 bg-white hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium font-bold text-gray-900">Search</span>
                                    <span class="flex items-center ml-6">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="! open"
                                            style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="relative mt-1 rounded-md shadow-sm">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        </div>
                                        <input name="search" value="{{ array_key_exists('search', $_GET) ? $_GET['search'] : '' }}" wire:model.debounce.500ms="keyword" type="text"
                                        class="block w-full pl-10 border-gray-300 rounded-md focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                        placeholder="Enter keywords">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:IUKo0eaEa7F8uAOWvPMD -->
                        <div wire:id="W90QdREaY4kDpQ5HMLI0" x-data="{ open: true }"
                            class="py-6 border-b border-gray-200">
                            <h3 class="flow-root -my-3">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex items-center justify-between w-full py-3 text-sm text-gray-400 bg-white hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium font-bold text-gray-900">Level</span>
                                    <span class="flex items-center ml-6">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="! open"
                                            style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']==='1') checked @endif id="filter-level-beginner" value="1"
                                            type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-level-beginner" class="ml-3 text-sm text-gray-600">
                                            Beginner
                                            <span class="text-xs text-gray-500">(3)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']==='2') checked @endif id="filter-level-intermediate" value="2"
                                            type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-level-intermediate" class="ml-3 text-sm text-gray-600">
                                            Intermediate
                                            <span class="text-xs text-gray-500">(4)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']==='3') checked @endif id="filter-level-advanced" value="3"
                                            type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-level-advanced" class="ml-3 text-sm text-gray-600">
                                            Advanced
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:W90QdREaY4kDpQ5HMLI0 -->
                        <div wire:id="qv1wRwcaBaqBKgZXMncA" x-data="{ open: true }"
                            class="py-6 border-b border-gray-200">
                            <h3 class="flow-root -my-3">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex items-center justify-between w-full py-3 text-sm text-gray-400 bg-white hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium font-bold text-gray-900">Price</span>
                                    <span class="flex items-center ml-6">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="! open"
                                            style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='free') checked @endif id="filter-price-free" value="free" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-price-free" class="ml-3 text-sm text-gray-600">
                                            Free
                                            <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='onetime') checked @endif id="filter-price-onetime" value="onetime"
                                            type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-price-onetime" class="ml-3 text-sm text-gray-600">
                                            Paid (One-time)
                                            <span class="text-xs text-gray-500">(8)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='membership') checked @endif id="filter-price-membership" value="membership"
                                            type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-price-membership" class="ml-3 text-sm text-gray-600">
                                            Paid (Membership)
                                            <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:qv1wRwcaBaqBKgZXMncA -->
                        <div wire:id="jPzBWHpLUmAwJyrpYhp6" x-data="{ open: true }"
                            class="py-6 border-b border-gray-200">
                            <h3 class="flow-root -my-3">
                                <!-- Expand/collapse section button -->
                                <button @click="open = ! open" type="button"
                                    class="flex items-center justify-between w-full py-3 text-sm text-gray-400 bg-white hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium font-bold text-gray-900">Series</span>
                                    <span class="flex items-center ml-6">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="open">
                                            <path fill-rule="evenodd"
                                                d="M3 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H3.75A.75.75 0 013 10z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" x-show="! open"
                                            style="display: none;">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </h3>

                            <!-- Filter section, show/hide based on section state. -->
                            <div x-show="open" class="pt-6">
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='laravel') checked @endif id="filter-series-1" value="laravel" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-1" class="ml-3 text-sm text-gray-600">
                                            Laravel
                                            <span class="text-xs text-gray-500">(5)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='php') checked @endif id="filter-series-2" value="php" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-2" class="ml-3 text-sm text-gray-600">
                                            PHP
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='livewire') checked @endif id="filter-series-3" value="livewire" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-3" class="ml-3 text-sm text-gray-600">
                                            Livewire
                                            <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='vue') checked @endif id="filter-series-4" value="vue" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-4" class="ml-3 text-sm text-gray-600">
                                            Vue.js
                                            <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='5') checked @endif id="filter-series-5" value="5" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-5" class="ml-3 text-sm text-gray-600">
                                            Alpine.js
                                            <span class="text-xs text-gray-500">(0)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='tailwind') checked @endif id="filter-series-6" value="tailwind" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-6" class="ml-3 text-sm text-gray-600">
                                            Tailwind CSS
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input name="level" @if(array_key_exists('level', $_GET) && $_GET['level']=='intertia') checked @endif id="filter-series-7" value="intertia" type="checkbox"
                                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 form-submit">
                                        <label for="filter-series-7" class="ml-3 text-sm text-gray-600">
                                            Intertia.js
                                            <span class="text-xs text-gray-500">(1)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Livewire Component wire-end:jPzBWHpLUmAwJyrpYhp6 -->
                    </form>

                    <script>
                        let checkbox = document.getElementsByClassName('form-submit');

                        for(let i=0; i<checkbox.length; i++) {
                            checkbox[i].addEventListener('change', function(){
                                document.getElementById('filter-courses').submit();
                            })
                        }

                        // checkbox.addEventListener('click', function() {
                        //     document.getElementsById('filter-courses').submit():
                        // });
                    </script>

                    <div class="lg:col-span-3">
                        <ul role="list" class="space-y-6">
                            @foreach ($courses as $course)
                            <li class="px-4 py-6 bg-white rounded-sm shadow">
                                <div class="flex justify-center">
                                    <div class="mx-auto min-w-fit">
                                        <img class="inline-block w-10 rounded-full"
                                            src="https://laravelcourses.com/storage/series/d373d4a4-ee30-498b-99f6-259898fba344.png"
                                            alt="Laravel Logo">
                                    </div>
                                    <div class="w-10/12">
                                        <div class="flex">
                                            <div class="flex-wrap flex-1 overflow-hidden">
                                                <h2 class="mb-1 text-xl font-bold text-gray-900">
                                                    <a href="https://laravelcourses.com/books/laravel-queues-in-action"
                                                        class="text-blue-500 hover:underline">
                                                        {{ $course->name }}
                                                    </a>
                                                </h2>
                                                <div class="flex items-center gap-3">
                                                    <div class="flex items-center space-x-px">
                                                        <svg class="w-4 h-4 text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="w-4 h-4 text-gray-300"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="text-sm text-gray-500">{{ count($course->reviews) }} Review{{ count($course->reviews) > 1 ? 's' : '' }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 space-y-1 text-sm text-gray-700 line-clamp-5">
                                            <p>{{ $course->description }}
                                            </p>

                                        </div>

                                        <div class="mt-6">
                                            <div class="flex flex-col md:flex-row sm:justify-between">
                                                <div
                                                    class="flex flex-wrap gap-2 space-x-0 md:space-x-5 justify-items-start">
                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z">
                                                            </path>
                                                        </svg>
                                                        <span>{{$course->difficulty($course->difficulty_level)}}</span>
                                                    </div>


                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25">
                                                            </path>
                                                        </svg>
                                                        <span>{{ $course->duration($course->duration) }}</span>
                                                    </div>



                                                    <div class="inline-flex items-center gap-2 text-sm text-gray-500">
                                                        <svg class="w-6 h-6 text-gray-400 shrink-0"
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                        <span>{{ $course->price ? '$' . number_format($course->price, 2) : 'Free' }}</span>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>

                                        <div class="flex justify-between hidden mt-6 space-x-8">
                                        </div>
                                    </div>
                                    <div class="justify-end hidden overflow-hidden md:flex md:w-1/12">
                                        <img class="inline-block w-8 h-8 rounded-full ring-2 ring-white"
                                            src="https://laravelcourses.com/storage/thumbnails/default/3m/g3/0zxuqps0kkc8k08owkoso.png?p=authors%2F31a436d0-f246-41fe-8097-e3546f6af15b.png&amp;s=pd&amp;smartcrop=28x28"
                                            alt="Mohamed Said">
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        <div class="mt-5">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <div wire:id="VvhkFakfKk7Avd1O9T85">
        <!-- ::::::::::::subscribe:::::::::::: -->
        <div class="w-full bg-update bg-no-repeat bg-cover lg:h-[400px] py-10 lg:py-0">
            <div
                class="max-w-[440px] sm:max-w-7xl px-4 sm:px-6 lg:px-8 w-full flex flex-col lg:flex-row justify-between items-center gap-5 mx-auto h-full">
                <div class="max-w-[579px] w-full">
                    <h2 class="heading-secondary">
                        Don’t miss any updates
                    </h2>
                    <p class="mt-3.5 text-base-primary">
                        We will be covering course reviews, comparison between the best courses, and will be
                        sharing
                        exclusive discounts with you on a monthly basis.
                    </p>

                    <div class="flex flex-col items-center w-full gap-5 mt-6 md:mt-12 sm:flex-row">
                        <input wire:model="email" type="email" placeholder="Your email address"
                            class="md:max-w-[385px] w-full h-14 bg-white border border-orange-100 rounded-lg px-3.5 text-base-primary text-[#262626] placeholder:text-current outline-none"
                            required="">
                        <button wire:click="subscribe"
                            class="bg-white w-full sm:w-[135px] shrink-0 h-14 rounded-lg flex justify-center items-center border border-orange-100 text-lg-primary font-medium text-orange-100 hover:bg-orange-100 hover:text-white transition-all duration-300">
                            Subscribe
                        </button>
                    </div>


                </div>

                <div class="justify-center hidden md:flex">
                    <img src="https://laravelcourses.com/img/letter.png" alt="letter"
                        class="object-contain w-auto h-auto">
                </div>
            </div>
        </div>
    </div>


</x-guest-layout>
