<x-guest-layout>
    <div class="py-6 mt-1 bg-gray">
        <div class="container mx-auto">
            <h2 class="mb-6 text-2xl font-bold text-center">{{ $topic->name }}</h2>

            <div class="inline-flex flex-wrap w-full gap-10 mx-auto max-w-7xl single-feature">
                @foreach ($courses as $course)
                @include('components.course-box', ['course' => $course])
                @endforeach
            </div>

            <div class="mt-4">
                {{ $courses->links() }}
            </div>

        </div>
    </div>
</x-guest-layout>
