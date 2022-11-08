<x-app-layout>
    <main class="min-h-full bg-cover bg-top sm:bg-top"
          style="background-image: url('https://images.unsplash.com/photo-1613206485381-b028e578e791?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80')">
        <div class="px-4 py-16 lg:px-8 lg:pt-24">
            <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">About Shift</h1>
            <div class="h-96 my-12 text-white text-2xl bg-gray-300 bg-opacity-20 py-4 rounded-lg pl-12 space-y-12">
                <p>Laravel shift is an online tool that allows you to run automated updates on your Laravel app.</p>
                <p>Shift is best known as a tool to upgrade from one version of Laravel to the next, but its toolkit includes a whole lot more.</p>
                <p>It is owned by Jason McCreary (JMac), whom you should follow on Twitter at @GoneDark</p>
                <p>{{ $about }}</p>
            </div>

            <div class="mt-6 mx-auto text-center">
                <a href="{{ route('welcome') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">Home</a>

                <a href="{{ route('about-me') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Me</a>

                <a href="{{ route('about-shift') }}"
                   class="inline-flex items-center rounded-md border bg-gray-300 px-4 py-2 text-sm font-medium text-black">About Laravel Shift</a>

                <a href="{{ route('about-workbench') }}"
                   class="inline-flex items-center rounded-md border bg-white px-4 py-2 text-sm font-medium text-black">About Workbench</a>



            </div>
        </div>
    </main>
</x-app-layout>
