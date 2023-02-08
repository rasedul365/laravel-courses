<x-guest-layout>
    <div class="container mx-auto">
        <!--Hero Section-->
        <div>
            <form action="" class="mt-20">
                <div class="w-full relative max-w-[860px] mx-auto px-5 pb-[138px] pt-24">
                    <div class="flex flex-col items-center justify-center w-full mx-auto">
                        <h1 class="w-full mx-auto mb-3 text-center heading-primary"> The best Courses and Books on the <span class="text-orange">Laravel</span> ecosystem </h1>
                        <p class="w-full my-4 mb-10 text-lg text-center text-secoundery-color"> Find the right books and courses on the Laravel framework and related topics to suite your level of expertise. Know how good a course is through your peers review and share your own too. </p>

                        <!--Search Form-->
                        <div class="flex w-[700px] gap-x-6">
                            <input type="search" name="keyword" placeholder="Enter keywords to search courses" class="w-4/5 bg-white h-12 border input-focus border-orange rounded-lg px-3.5 outline-none" required>
                            <button type="submit" class="w-1/5 text-white btn-primary"> Search </button>
                        </div>
                    </div>
                    <!--hero icon-->
                    <img src="https://laravel-courses.com/img/left-top-angle.png" alt="angle" class="absolute pointer-events-none top-[150px] -left-28">
                    <img src="https://laravel-courses.com/img/left-bottom-angle.png" alt="angle" class="absolute  pointer-events-none top-[370px] -left-12">
                    <img src="https://laravel-courses.com/img/right-angle.png" alt="angle" class="absolute pointer-events-none top-[70px] -right-6">
                    <img src="https://laravel-courses.com/img/right-bottom-angle.png" alt="angle" class="absolute   pointer-events-none top-[360px] -right-24">
                </div>
            </form>
            <img src="https://laravel-courses.com/img/right-center-angle.png" alt="angle" class="absolute object-contain w-auto h-auto -translate-y-1/2 pointer-events-none top-1/2 right-10">
        </div>



        <!--Brand Logo Section-->
        <div>
            <ul class="flex items-center justify-between gap-3 flex-nowrap gap-y-7">
                @foreach ($series as $item)
                <li class="w-full lg:max-w-[165px]">
                    <a href="" class="flex items-center justify-center w-full h-12 mx-auto bg-white border rounded-lg border-orange box-shadow md:h-16">
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
                 @include('components.course-box')
               @endforeach
            </div>
            <div class="flex justify-center mt-12 mb-12">
                <a href="">
                    <button class="w-32 text-white btn-primary h-14"> Browse all </button>
                </a>
            </div>
        </section>
    </div>

     <!--Subscribe Form-->
     {{-- @include('components.subscribe-form') --}}
 </x-guest-layout>
