<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script>
        // Dark mode başlangıç durumu kontrolü
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }

        // Tailwind dark mode konfigürasyonu
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            100: '#1E293B',
                            200: '#334155',
                            300: '#475569',
                            400: '#64748B',
                            500: '#94A3B8'
                        }
                    }
                }
            }
        }
    </script>
    @yield('styles')
</head>

<body class="animated-gradient text-gray-900 dark:text-gray-100 min-h-screen flex flex-col">

    @include('layouts.navbar')

    <main class="flex-1 container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('layouts.footer')
    @yield('scripts')

    <script>
        // Mobil menü toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button')
        const mobileMenu = document.getElementById('mobile-menu')

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden')
            })
        }

        // Dark mode fonksiyonları
        function updateTheme() {
            const isDark = localStorage.theme === 'dark' || 
                (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)

            document.documentElement.classList.toggle('dark', isDark)
            
            // Light/dark ikonlarını güncelle
            const lightIcon = document.getElementById('theme-toggle-light-icon')
            const darkIcon = document.getElementById('theme-toggle-dark-icon')
            
            if (lightIcon && darkIcon) {
                if (isDark) {
                    lightIcon.classList.remove('hidden')
                    darkIcon.classList.add('hidden')
                } else {
                    lightIcon.classList.add('hidden')
                    darkIcon.classList.remove('hidden')
                }
            }
        }

        function toggleTheme() {
            if (localStorage.theme === 'dark') {
                localStorage.theme = 'light'
            } else {
                localStorage.theme = 'dark'
            }
            updateTheme()
        }

        // Event listener'ları ekle
        const themeToggleButton = document.getElementById('theme-toggle')
        const mobileThemeToggleButton = document.getElementById('mobile-theme-toggle')

        if (themeToggleButton) {
            themeToggleButton.addEventListener('click', toggleTheme)
        }
        if (mobileThemeToggleButton) {
            mobileThemeToggleButton.addEventListener('click', toggleTheme)
        }

        // Sayfa yüklendiğinde tema durumunu güncelle
        updateTheme()
    </script>
</body>

</html>
