<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="<?= Url('/') ?>" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">Home</a>
                        <a href="<?= Url('/about') ?>" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">About</a>
                        <a href="<?= Url('/notes') ?>" class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Notes</a>
                        <a href="<?= Url('/contact') ?>" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <svg class="size-6 text-gray-300 rounded-md text-sm font-medium text-gray-300 hover:text-white hover:cursor-pointer" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path class="mx-3" stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>

                    <div class="relative ml-3">
                        <div>
                            <?php if ($_SESSION['user'] ?? false) { ?>
                                <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <?php } else { ?>
                                <a href="<?= Url('/register') ?>" class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a>
                                <a href="<?= Url('/login') ?>" class="text-gray-300 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Log In</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>