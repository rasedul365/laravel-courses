<x-guest-layout>
    <div class="container mx-auto">
        <!--Hero Section-->
        <div>
            <form action="" class="mt-20">
                <div class="w-full relative max-w-[860px] mx-auto px-5 pb-[138px] pt-24">
                    <div class="flex flex-col items-center justify-center w-full mx-auto">
                        <h1 class="w-full mx-auto mb-3 text-center heading-primary"> The best Courses and Books on the
                            <span class="text-orange">Laravel</span> ecosystem </h1>
                        <p class="w-full my-4 mb-10 text-lg text-center text-secoundery-color"> Find the right books and
                            courses on the Laravel framework and related topics to suite your level of expertise. Know
                            how good a course is through your peers review and share your own too. </p>

                        <!--Search Form-->
                        <div class="flex w-[700px] gap-x-6">
                            <input type="search" name="keyword" placeholder="Enter keywords to search courses"
                                class="w-4/5 bg-white h-12 border input-focus border-orange rounded-lg px-3.5 outline-none"
                                required>
                            <button type="submit" class="w-1/5 text-white btn-primary"> Search </button>
                        </div>
                    </div>
                    <!--hero icon-->
                    <img src="https://laravel-courses.com/img/left-top-angle.png" alt="angle"
                        class="absolute pointer-events-none top-[150px] -left-28">
                    <img src="https://laravel-courses.com/img/left-bottom-angle.png" alt="angle"
                        class="absolute  pointer-events-none top-[370px] -left-12">
                    <img src="https://laravel-courses.com/img/right-angle.png" alt="angle"
                        class="absolute pointer-events-none top-[70px] -right-6">
                    <img src="https://laravel-courses.com/img/right-bottom-angle.png" alt="angle"
                        class="absolute   pointer-events-none top-[360px] -right-24">
                </div>
            </form>
            <img src="https://laravel-courses.com/img/right-center-angle.png" alt="angle"
                class="absolute object-contain w-auto h-auto -translate-y-1/2 pointer-events-none top-1/2 right-10">
        </div>



        <!--Brand Logo Section-->
        <div>
            <ul class="flex items-center justify-between gap-3 flex-nowrap gap-y-7">
                @foreach ($series as $item)
                <li class="w-full lg:max-w-[165px]">
                    <a href=""
                        class="flex items-center justify-center w-full h-12 mx-auto bg-white border rounded-lg border-orange box-shadow md:h-16">
                        <img src="{{$item->image}}" class="object-contain w-20 h-auto md:w-auto max-h-12">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        <!--Feature Section-->
        <section class="mt-20 lg:mt-[140px]">
            <h1 class="mb-10 text-center heading-tertiory md:mb-16"> Featured Courses </h1>
            <div class="inline-flex flex-wrap w-full gap-10 mx-auto max-w-9xl single-feature">
                @foreach($courses as $course)
                @include('components.course-box', ['course' => $course])
                @endforeach
            </div>
            <div class="flex justify-center mt-12 mb-12">
                <a href="">
                    <button class="w-32 text-white btn-primary h-14"> Browse all </button>
                </a>
            </div>
        </section>
    </div>


    <!-- ::::::::::::subscribe:::::::::::: -->
    <div class="w-full bg-update bg-no-repeat bg-cover lg:h-[400px] py-10 lg:py-0">
        <div
            class="max-w-[440px] sm:max-w-7xl px-4 sm:px-6 lg:px-8 w-full flex flex-col lg:flex-row justify-between items-center gap-5 mx-auto h-full">
            <div class="max-w-[579px] w-full">
                <h2 class="heading-secondary">
                    Don’t miss any updates
                </h2>
                <p class="mt-3.5 text-base-primary">
                    We will be covering course reviews, comparison between the best courses, and will be sharing
                    exclusive discounts with you on a monthly basis.
                </p>

                <div class="mt-6 md:mt-12 w-full flex flex-col sm:flex-row items-center gap-5">
                    <input wire:model="email" type="email" placeholder="Your email address"
                        class="md:max-w-[385px] w-full h-14 bg-white border border-orange-100 rounded-lg px-3.5 text-base-primary text-[#262626] placeholder:text-current outline-none"
                        required="">
                    <button wire:click="subscribe"
                        class="bg-white w-full sm:w-[135px] shrink-0 h-14 rounded-lg flex justify-center items-center border border-orange-100 text-lg-primary font-medium text-orange-100 hover:bg-orange-100 hover:text-white transition-all duration-300">
                        Subscribe
                    </button>
                </div>


            </div>

            <div class="hidden md:flex justify-center">
                <img src="https://laravelcourses.com/img/letter.png" alt="letter" class="w-auto h-auto object-contain">
            </div>
        </div>
    </div>

    <!--Subscribe Form-->
    {{-- @include('components.subscribe-form') --}}
</x-guest-layout>
