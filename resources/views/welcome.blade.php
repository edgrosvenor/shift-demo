<x-app-layout>
    <main class="min-h-full bg-cover bg-top sm:bg-top"
          style="background-image: url('https://images.unsplash.com/photo-1603978111726-42dd6fedbf67?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJlcm58ZW58MHx8MHx8&auto=format&fit=crop&w=900&q=60')">
        <div class="px-4 py-16 lg:px-8 lg:pt-24">
            <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Laravel Switzerland Meetup</h1>
            <h5 class="mt-2 text-2xl font-bold tracking-tight text-gray-200 sm:text-xl">Bern :: November 8, 2022</h5>
            <h3 class="mt-2 text-2xl font-bold tracking-tight text-gray-200 sm:text-3xl">Introducing Laravel Shift</h3>

            <div class="h-96"></div>

            <div class="mt-6 mx-auto text-center">
                <a href="{{ route('welcome') }}"
                   class="inline-flex items-center rounded-md border bg-gray-300 px-4 py-2 text-sm font-medium text-black">Home</a>

                <a href="{{ route('about-me') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Me</a>

                <a href="{{ route('about-shift') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Laravel Shift</a>

                <a href="{{ route('about-workbench') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Workbench</a>



            </div>
        </div>
    </main>
</x-app-layout>
