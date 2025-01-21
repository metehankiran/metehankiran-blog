@extends('layouts.app')

@section('content')
    <section class="py-20">
        <div class="text-center space-y-6" style="opacity: 1; transform: none;">
            <div class="flex justify-center" style="opacity: 1; transform: none;">
                <div
                    class="inline-flex items-center rounded-md border text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 px-4 py-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-sparkles w-4 h-4 mr-2">
                        <path
                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                        </path>
                        <path d="M20 3v4"></path>
                        <path d="M22 5h-4"></path>
                        <path d="M4 17v2"></path>
                        <path d="M5 18H3"></path>
                    </svg>Yazılım Geliştirici &amp; AI Enthusiast
                </div>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold"><span
                    class="bg-gradient-to-r from-primary to-purple-500 bg-clip-text text-transparent">Merhaba, Ben John
                    Doe</span></h1>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">Modern web teknolojileri, yapay zeka ve yazılım
                geliştirme üzerine içerikler üretiyorum. Deneyimlerimi ve öğrendiklerimi paylaşmaktan keyif alıyorum.
            </p>
            <div class="flex justify-center gap-4"><a
                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground shadow hover:bg-primary/90 h-10 rounded-md px-8"
                    href="/posts"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-file-text mr-2 h-5 w-5">
                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path d="M10 9H8"></path>
                        <path d="M16 13H8"></path>
                        <path d="M16 17H8"></path>
                    </svg>Blog Yazıları</a><a href="https://github.com/yourusername" target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-10 rounded-md px-8"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-github mr-2 h-5 w-5">
                        <path
                            d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                        </path>
                        <path d="M9 18c-4.51 2-5-2-7-2"></path>
                    </svg>GitHub Profilim</a></div>
        </div>
    </section>
    <section class="py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Neler Paylaşıyorum?</h2>
            <p class="text-muted-foreground">Blogumda bulabileceğiniz içerikler</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow p-6 space-y-4 hover:shadow-lg transition-shadow">
                    <div class="p-3 w-fit rounded-full bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-code w-10 h-10 text-purple-500">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg></div>
                    <h3 class="text-xl font-semibold">Modern Teknolojiler</h3>
                    <p class="text-muted-foreground">React, TypeScript ve modern web teknolojileri hakkında detaylı
                        yazılar</p>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow p-6 space-y-4 hover:shadow-lg transition-shadow">
                    <div class="p-3 w-fit rounded-full bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-brain w-10 h-10 text-blue-500">
                            <path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z">
                            </path>
                            <path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z">
                            </path>
                            <path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"></path>
                            <path d="M17.599 6.5a3 3 0 0 0 .399-1.375"></path>
                            <path d="M6.003 5.125A3 3 0 0 0 6.401 6.5"></path>
                            <path d="M3.477 10.896a4 4 0 0 1 .585-.396"></path>
                            <path d="M19.938 10.5a4 4 0 0 1 .585.396"></path>
                            <path d="M6 18a4 4 0 0 1-1.967-.516"></path>
                            <path d="M19.967 17.484A4 4 0 0 1 18 18"></path>
                        </svg></div>
                    <h3 class="text-xl font-semibold">Yapay Zeka</h3>
                    <p class="text-muted-foreground">AI ve makine öğrenimi alanındaki son gelişmeler ve uygulamalar</p>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow p-6 space-y-4 hover:shadow-lg transition-shadow">
                    <div class="p-3 w-fit rounded-full bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-graduation-cap w-10 h-10 text-green-500">
                            <path
                                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                            </path>
                            <path d="M22 10v6"></path>
                            <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                        </svg></div>
                    <h3 class="text-xl font-semibold">Eğitim İçerikleri</h3>
                    <p class="text-muted-foreground">Yazılım geliştirme ve best practice'ler hakkında öğretici içerikler
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="text-center space-y-4" style="opacity: 1; transform: none;">
            <h2 class="text-3xl font-bold">Kategoriler</h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">İlgilendiğiniz konuya göre yazıları filtreleyebilirsiniz
            </p>
        </div>
        <div class="mt-8 mb-16">
            <div class="relative">
                <div class="relative w-full" role="region" aria-roledescription="carousel">
                    <div class="overflow-hidden">
                        <div class="flex -ml-2 md:-ml-4" style="transform: translate3d(-1504px, 0px, 0px);">
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4"
                                style="transform: translate3d(0px, 0px, 0px);">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">
                                            similique qui</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">similique qui
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Placeat quibusdam
                                            autem illum dolorum. Voluptatum neque accusantium quo molestias et velit.
                                            Omnis ut consectetur iure qui ea molestiae odio.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>34 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/similique-qui"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4"
                                style="transform: translate3d(0px, 0px, 0px);">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">at
                                            corporis</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">at corporis</h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Consequatur iste
                                            culpa tenetur maiores iste officiis qui. Voluptate quod eum ea est. Dolor
                                            omnis temporibus et corporis. Porro iusto aliquid rerum vel et dolore
                                            repellat voluptas. Dolor nihil necessitatibus quis rerum.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>40 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/at-corporis"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">excepturi
                                            fugit</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">excepturi fugit
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Ut blanditiis
                                            magni quidem sit. Sed cumque ullam adipisci. Laboriosam et qui voluptates
                                            sit nulla iste voluptatibus. Sit ea maiores sed unde.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>47 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/excepturi-fugit"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-neutral-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-neutral-600 text-center font-medium line-clamp-3 text-lg">est ut
                                        </p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">est ut</h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Quibusdam repellat
                                            dolorum quisquam. Iste vel et eum. Tempora vero optio sit autem quasi hic
                                            dolorum.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>32 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/est-ut"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">itaque
                                            incidunt</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">itaque incidunt
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Eligendi
                                            consectetur assumenda inventore nisi quibusdam. Quia eos qui omnis expedita
                                            provident similique aut. Sequi molestiae sit dolore odit necessitatibus
                                            deserunt reiciendis dolore. At voluptatem qui id deserunt officia.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>34 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/itaque-incidunt"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">
                                            voluptatibus nulla</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">voluptatibus
                                                nulla</h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Asperiores totam
                                            at delectus est modi enim. Nemo corporis perferendis dolorum iste quia vel.
                                            Culpa ratione quam ipsam iure quidem architecto.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>52 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/voluptatibus-nulla"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">aperiam
                                            sit</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">aperiam sit</h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Fuga quasi autem
                                            necessitatibus est dignissimos occaecati consectetur iste. Ut quae sunt sed
                                            enim nam eum. Ex expedita quo eveniet vitae. Quis itaque rem repellendus
                                            atque et.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>27 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/aperiam-sit"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="group" aria-roledescription="slide"
                                class="min-w-0 shrink-0 grow-0 pl-2 md:pl-4 basis-full md:basis-1/2 lg:basis-1/4">
                                <div
                                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                                    <div
                                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">numquam
                                            et</p>
                                    </div>
                                    <div class="relative h-40">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                                        </div>
                                        <div class="absolute bottom-0 left-0 right-0 p-4">
                                            <h3 class="font-semibold text-lg text-white line-clamp-1">numquam et</h3>
                                        </div>
                                    </div>
                                    <div class="p-4 flex flex-col flex-1">
                                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Officia omnis
                                            velit dolores cum voluptas dolores nulla. Libero fuga similique natus iusto
                                            consequatur aspernatur. Cupiditate accusamus ut quis animi.</p>
                                        <div class="flex items-center justify-between mt-2">
                                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-file-text w-4 h-4 mr-1">
                                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z">
                                                    </path>
                                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                                    <path d="M10 9H8"></path>
                                                    <path d="M16 13H8"></path>
                                                    <path d="M16 17H8"></path>
                                                </svg><span>38 yazı</span></div><a
                                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                                href="/category/numquam-et"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                                    <path d="M15 3h6v6"></path>
                                                    <path d="M10 14 21 3"></path>
                                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
                                                    </path>
                                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" class="lucide lucide-arrow-right w-4 h-4">
                                                    <path d="M5 12h14"></path>
                                                    <path d="m12 5 7 7-7 7"></path>
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block"><button
                            class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-8 w-8 rounded-full top-1/2 -translate-y-1/2 absolute -left-12"><svg
                                width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                <path
                                    d="M6.85355 3.14645C7.04882 3.34171 7.04882 3.65829 6.85355 3.85355L3.70711 7H12.5C12.7761 7 13 7.22386 13 7.5C13 7.77614 12.7761 8 12.5 8H3.70711L6.85355 11.1464C7.04882 11.3417 7.04882 11.6583 6.85355 11.8536C6.65829 12.0488 6.34171 12.0488 6.14645 11.8536L2.14645 7.85355C1.95118 7.65829 1.95118 7.34171 2.14645 7.14645L6.14645 3.14645C6.34171 2.95118 6.65829 2.95118 6.85355 3.14645Z"
                                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg><span class="sr-only">Previous slide</span></button><button
                            class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-8 w-8 rounded-full top-1/2 -translate-y-1/2 absolute -right-12"><svg
                                width="15" height="15" viewBox="0 0 15 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                <path
                                    d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                                    fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg><span class="sr-only">Next slide</span></button></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20">
        <div class="text-center space-y-4 mb-12" style="opacity: 1; transform: none;">
            <h2 class="text-3xl font-bold">Son Yazılar</h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">En son yayınlanan blog yazılarım</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div style="opacity: 1; transform: none;"><a
                    href="/post/dolores-qui-dignissimos-minus-nihil-neque-ab-quas-dignissimos">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Dolores qui
                                    dignissimos minus nihil neque ab quas dignissimos.</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    ut</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    dolorem</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    enim</div>
                            </div>
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Dolores qui dignissimos minus nihil
                                neque ab quas dignissimos.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">At quas earum quasi unde error ut sequi.
                                Dicta corrupti culpa deleniti voluptates veniam doloribus. Est atque repudiandae et
                                soluta quas maxime aut. Consequuntur nulla aspernatur dignissimos quam occaecati
                                repudiandae.</p>
                            <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar mr-2 h-4 w-4">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>20 Oca 2025</div>
                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-eye mr-1 h-4 w-4">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                        </path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>427</div>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div style="opacity: 1; transform: none;"><a href="/post/quam-magnam-ut-voluptatem-sint">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">Quam magnam ut
                                    voluptatem sint.</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    tenetur</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    iste</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    perspiciatis</div>
                            </div>
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Quam magnam ut voluptatem sint.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">Alias dolorem ipsum aperiam quia iure.
                                Enim qui in accusamus ipsam in. Ab aut voluptatem porro animi nulla architecto. Eum est
                                corrupti qui aut quisquam autem ut.</p>
                            <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar mr-2 h-4 w-4">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>20 Oca 2025</div>
                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-eye mr-1 h-4 w-4">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                        </path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>279</div>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div style="opacity: 1; transform: none;"><a href="/post/et-aliquam-rerum-id-dicta-non">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-neutral-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-neutral-600 text-center font-medium line-clamp-3 text-lg">Et aliquam
                                    rerum id dicta non.</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    a</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    dolor</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    omnis</div>
                            </div>
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Et aliquam rerum id dicta non.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">Minus minus reiciendis quia. Et dolorum
                                ut magnam soluta. Consectetur saepe et ut sit fuga reiciendis rerum.</p>
                            <div class="flex justify-between items-center text-sm text-muted-foreground mt-auto">
                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-calendar mr-2 h-4 w-4">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>20 Oca 2025</div>
                                <div class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-eye mr-1 h-4 w-4">
                                        <path
                                            d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
                                        </path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>390</div>
                            </div>
                        </div>
                    </div>
                </a></div>
        </div>
    </section>
    <section class="py-20">
        <div class="text-center space-y-4 mb-12" style="opacity: 1; transform: none;">
            <h2 class="text-3xl font-bold">Son Projeler</h2>
            <p class="text-muted-foreground max-w-2xl mx-auto">Üzerinde çalıştığım son projeler</p>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[400px] flex flex-col">
                    <a href="/project/repellendus-ex-laborum">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">repellendus ex
                                    laborum</p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <h2 class="text-xl font-semibold line-clamp-2">repellendus ex laborum</h2>
                            <p class="text-muted-foreground line-clamp-2">Est necessitatibus debitis occaecati quam magni
                                eos non.</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    vel</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    quam</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    corporis</div>
                            </div>
                        </div>
                        <div class="flex justify-between"><a
                                href="https://www.ledner.com/repellat-voluptate-enim-omnis-suscipit-vero-sit-in-saepe"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>Kod</a><a
                                href="http://www.dietrich.com/quae-laudantium-dolores-dolorem-qui-sit-dolor-aut"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-external-link mr-2 h-4 w-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Demo</a></div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[400px] flex flex-col">
                    <a href="/project/totam-facilis-maxime">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">totam facilis maxime
                                </p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <h2 class="text-xl font-semibold line-clamp-2">totam facilis maxime</h2>
                            <p class="text-muted-foreground line-clamp-2">Dolor nisi et asperiores consequuntur veniam
                                doloremque sint.</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    ut</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    dicta</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    quod</div>
                            </div>
                        </div>
                        <div class="flex justify-between"><a
                                href="https://www.abbott.com/iusto-aut-officia-dolores-odit-sed-facere" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>Kod</a><a href="http://www.oberbrunner.info/" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-external-link mr-2 h-4 w-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Demo</a></div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[400px] flex flex-col">
                    <a href="/project/asperiores-architecto-molestias">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-neutral-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-neutral-600 text-center font-medium line-clamp-3 text-lg">asperiores
                                    architecto molestias</p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <h2 class="text-xl font-semibold line-clamp-2">asperiores architecto molestias</h2>
                            <p class="text-muted-foreground line-clamp-2">Repellat cupiditate et quidem et eos tempore
                                ducimus eos.</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    eum</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    asperiores</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    consequatur</div>
                            </div>
                        </div>
                        <div class="flex justify-between"><a
                                href="https://leuschke.org/similique-dolores-illo-doloribus-sed-omnis-quia-sequi.html"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>Kod</a><a
                                href="http://rodriguez.com/vero-quod-consequatur-est-eum-deleniti-est-ab-molestiae"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-external-link mr-2 h-4 w-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Demo</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css">
    <style>
        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none;
        }

        * {
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }
    </style>
@endsection

@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".categorySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
                1280: {
                    slidesPerView: 3,
                }
            },
            grabCursor: true
        });
    </script>
@endsection
