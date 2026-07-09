<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body x-data="{ test: 'Blog', nama: 'Fadhil Aditya' }" class="h-full">
    <div class="min-h-full">
        <x-navbar />

        <x-header />

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <!-- Your content -->
                <div class="flex">
                    @for ($i = 1; $i <= 10; $i++)
                        @if ($i % 2 !== 0)
                            <div class="p-3 bg-teal-300 me-1 text-slate-800 text-center">{{ $i }}</div>
                        @endif
                    @endfor
                </div>
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
