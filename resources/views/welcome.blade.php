<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkSnap - Shorten Your URLs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-indigo-700 text-white py-5 sticky top-0 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-3xl font-extrabold">LinkSnap</h1>
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="#home" class="hover:text-indigo-200 transition">Home</a></li>
                    <li><a href="#features" class="hover:text-indigo-200 transition">Features</a></li>
                    <li><a href="#about" class="hover:text-indigo-200 transition">About</a></li>
                    <li><a href="#contact" class="hover:text-indigo-200 transition">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="py-24 bg-gradient-to-r from-indigo-50 to-blue-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-5xl font-bold text-gray-800 mb-6">Shorten. Share. Track.</h2>
            <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto">Transform long URLs into short, powerful links with
                LinkSnap. Easy to use, secure, and packed with features.</p>
            <div class="max-w-lg mx-auto">
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-3">
                    <input id="urlInput" type="text" placeholder="Paste your long URL here"
                        class="w-full px-5 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                    <button onclick="shortenLink()"
                        class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-800 transition">Snap
                        It!</button>
                </div>
                <div id="result" class="mt-6 text-lg text-gray-800 hidden">
                    <p>Your shortened link: <a id="shortenedLink" href="#"
                            class="text-indigo-600 underline font-semibold"></a></p>
                    <button onclick="copyLink()" class="mt-2 text-sm text-indigo-600 hover:underline">Copy to
                        Clipboard</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">What Makes LinkSnap Special?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-indigo-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-3">Lightning Fast</h3>
                    <p class="text-gray-600">Generate short links in milliseconds with our optimized platform.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-indigo-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-3">Customizable</h3>
                    <p class="text-gray-600">Personalize your links with custom aliases for better branding.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-xl shadow-lg hover:shadow-xl transition text-center">
                    <svg class="w-12 h-12 mx-auto mb-4 text-indigo-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-3">Link Analytics</h3>
                    <p class="text-gray-600">Monitor clicks, locations, and more with our detailed analytics dashboard.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">About LinkSnap</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">LinkSnap is your go-to solution for creating concise,
                shareable links. Built with simplicity and performance in mind, we empower users to manage their links
                effortlessly while providing insights to optimize their reach.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Contact Us</h2>
            <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">Got questions or feedback? We’d love to hear from
                you!</p>
            <div class="max-w-lg mx-auto">
                <input type="text" placeholder="Your name"
                    class="w-full px-5 py-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                <input type="email" placeholder="Your email"
                    class="w-full px-5 py-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                <textarea placeholder="Your message"
                    class="w-full px-5 py-3 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition"
                    rows="5"></textarea>
                <button class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-800 transition">Send
                    Message</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-700 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p class="text-sm">© 2025 LinkSnap. All rights reserved.</p>
        </div>
    </footer>

    <!-- Toast Container -->
    <div id="toastContainer" class="fixed bottom-4 right-4 z-50"></div>

    <script>
        function showToast(message, type = 'success') {
            const toastContainer = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            toast.className = `p-4 rounded-lg shadow-lg text-white animate-fade-in-out max-w-xs ${type === 'success' ? 'bg-green-500' : 'bg-red-500'
                }`;
            toast.textContent = message;
            toastContainer.appendChild(toast);

            // Auto-remove toast after 3 seconds
            setTimeout(() => {
                toast.classList.add('opacity-0');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        function shortenLink() {
            const urlInput = document.getElementById('urlInput').value;
            const resultDiv = document.getElementById('result');
            const shortenedLink = document.getElementById('shortenedLink');

            if (urlInput && isValidURL(urlInput)) {
                // Mock URL shortening (replace with backend API in production)
                const mockShortLink = `https://linksnap.to/${Math.random().toString(36).substring(2, 9)}`;
                shortenedLink.href = mockShortLink;
                shortenedLink.textContent = mockShortLink;
                resultDiv.classList.remove('hidden');
            } else {
                showToast('Please enter a valid URL (e.g., https://example.com)', 'error');
            }
        }

        function isValidURL(url) {
            try {
                new URL(url);
                return true;
            } catch {
                return false;
            }
        }

        function copyLink() {
            const shortenedLink = document.getElementById('shortenedLink').textContent;
            navigator.clipboard.writeText(shortenedLink).then(() => {
                showToast('Link copied to clipboard!', 'success');
            });
        }
    </script>

    <style>
        /* Custom animation for toast */
        @keyframes fade-in-out {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            10% {
                opacity: 1;
                transform: translateY(0);
            }

            90% {
                opacity: 1;
                transform: translateY(0);
            }

            100% {
                opacity: 0;
                transform: translateY(20px);
            }
        }

        .animate-fade-in-out {
            animation: fade-in-out 3.3s ease-in-out;
        }
    </style>
</body>

</html>