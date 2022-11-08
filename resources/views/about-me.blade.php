<x-app-layout>
    <main class="min-h-full bg-cover bg-top sm:bg-top"
          style="background-image: url('https://images.unsplash.com/photo-1581373449483-37449f962b6c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2069&q=80')">
        <div class="px-4 py-16 lg:px-8 lg:pt-24">
            <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">About Me</h1>
            <div class="h-96 my-12 text-white text-2xl bg-gray-300 bg-opacity-20 py-4 rounded-lg">
                <ul class="space-y-6 ml-24 list-disc">
                    @foreach ($about as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6 mx-auto text-center">
                <a href="{{ route('welcome') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">Home</a>

                <a href="{{ route('about-me') }}"
                   class="inline-flex items-center rounded-md border bg-gray-300 px-4 py-2 text-sm font-medium text-black">About Me</a>

                <a href="{{ route('about-shift') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Laravel Shift</a>

                <a href="{{ route('about-workbench') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Workbench</a>



            </div>
        </div>
    </main>
</x-app-layout>
