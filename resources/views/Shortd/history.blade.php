<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shortd.link - Shortening History</title>
    <meta name="description" content="View your shortening history with Shortd.link.">
    <meta name="keywords" content="URL shortener, history, Shortd.link, link management">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-indigo-700 text-white py-5 sticky top-0 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-extrabold"><a href="/">Shortd.Link</a></h1>
            <nav class="hidden md:flex">
                <ul class="flex space-x-8">
                    <li><a href="/" class="hover:text-indigo-200 transition">Home</a></li>
                    <li><a href="/#features" class="hover:text-indigo-200 transition">Features</a></li>
                    <li><a href="/#about" class="hover:text-indigo-200 transition">About</a></li>
                    <li><a href="/#contact" class="hover:text-indigo-200 transition">Contact</a></li>
                </ul>
            </nav>
            <!-- Hamburger Menu Button for Mobile -->
            <button id="menu-toggle" class="md:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                    </path>
                </svg>
            </button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu"
        class="md:hidden fixed inset-0 bg-indigo-700 bg-opacity-95 z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
        <div class="flex justify-end p-4">
            <button id="close-menu" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <nav class="flex flex-col items-center space-y-6 pt-10">
            <a href="/" class="text-white text-lg hover:text-indigo-200 transition">Home</a>
            <a href="/#features" class="text-white text-lg hover:text-indigo-200 transition">Features</a>
            <a href="/#about" class="text-white text-lg hover:text-indigo-200 transition">About</a>
            <a href="/#contact" class="text-white text-lg hover:text-indigo-200 transition">Contact</a>
        </nav>
    </div>

    <!-- Main Content -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-gray-800 text-center mb-10">Your Shortening History</h2>
            @if ($history->isEmpty())
                <p class="text-center text-gray-600">No history available.</p>
            @else
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                        <thead>
                            <tr class="bg-indigo-700 text-white">
                                <th class="py-3 px-4 text-left font-semibold">S No.</th>
                                <th class="py-3 px-4 text-left font-semibold">IP Address</th>
                                <th class="py-3 px-4 text-left font-semibold">Browser</th>
                                <th class="py-3 px-4 text-left font-semibold">Device</th>
                                <th class="py-3 px-4 text-left font-semibold">OS</th>
                                <th class="py-3 px-4 text-left font-semibold">Original URL</th>
                                <th class="py-3 px-4 text-left font-semibold">Short Code</th>
                                <th class="py-3 px-4 text-left font-semibold">Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($history as $entry)
                                <tr class="hover:bg-gray-100 transition-colors">
                                    <td class="py-3 px-4 border-b">{{ $loop->iteration }}</td>
                                    <td class="py-3 px-4 border-b">{{ $entry->ip_address }}</td>
                                    <td class="py-3 px-4 border-b">{{ $entry->browser }}</td>
                                    <td class="py-3 px-4 border-b">{{ $entry->device }}</td>
                                    <td class="py-3 px-4 border-b">{{ $entry->os }}</td>
                                    <td class="py-3 px-4 border-b"><a href="{{ $entry->original_url }}" target="_blank"
                                            class="text-indigo-600 hover:underline">{{ $entry->original_url }}</a></td>
                                    <td class="py-3 px-4 border-b">{{ $entry->short_code }}</td>
                                    <td class="py-3 px-4 border-b">{{ $entry->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Pagination -->
                <div class="mt-6 flex justify-center">
                    {{ $history->links() }}
                </div>
            @endif
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-700 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm">© 2025 ShortdLink. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.remove('translate-x-full');
            document.getElementById('mobile-menu').classList.add('translate-x-0');
        });

        document.getElementById('close-menu').addEventListener('click', () => {
            document.getElementById('mobile-menu').classList.remove('translate-x-0');
            document.getElementById('mobile-menu').classList.add('translate-x-full');
        });
    </script>
</body>

</html>