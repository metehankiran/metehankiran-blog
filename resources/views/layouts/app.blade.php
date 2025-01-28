<!DOCTYPE html>
<html lang="tr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Metehan Kıran - Personal Website">
    <title>Metehan Kıran</title>
    @vite(['resources/css/app.css'])
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @stack('styles')
</head>

<body>
    <div class="min-h-screen flex flex-col animated-gradient">
        @include('layouts.navbar')

    <main class="flex-1 container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('layouts.footer')

    </div>
    @vite(['resources/js/app.js'])
    @stack('scripts')
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button')
        const mobileMenu = document.getElementById('mobile-menu')

        function closeMobileMenu() {
            mobileMenu.classList.add('hidden')
            document.body.style.overflow = ''
        }

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('hidden')) {
                    closeMobileMenu()
                    return
                }

                mobileMenu.classList.remove('hidden')
                document.body.style.overflow = 'hidden'
            })
        }

        document.addEventListener('click', (event) => {
            if (!mobileMenu.classList.contains('hidden') &&
                !mobileMenuButton.contains(event.target) &&
                !mobileMenu.contains(event.target)) {
                closeMobileMenu()
            }
        })

        function updateTheme() {
            requestAnimationFrame(() => {
                const isDark = localStorage.theme === 'dark' || 
                    (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)

                document.documentElement.classList.toggle('dark', isDark)
                
                const lightIcons = document.querySelectorAll('.theme-toggle-light-icon')
                const darkIcons = document.querySelectorAll('.theme-toggle-dark-icon')
                
                if (lightIcons && darkIcons) {
                    lightIcons.forEach(icon => icon.classList.toggle('hidden', !isDark))
                    darkIcons.forEach(icon => icon.classList.toggle('hidden', isDark))
                }
            })
        }

        function toggleTheme() {
            if (localStorage.theme === 'dark') {
                localStorage.theme = 'light'
            } else {
                localStorage.theme = 'dark'
            }
            updateTheme()
        }

        const themeToggleButtons = document.querySelectorAll('.theme-toggle')
        
        if (themeToggleButtons) {
            themeToggleButtons.forEach(button => {
                button.addEventListener('click', toggleTheme)
            })
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateTheme()
        })
    </script>
</body>

</html>
