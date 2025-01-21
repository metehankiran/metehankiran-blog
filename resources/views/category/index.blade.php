@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <div class="text-center space-y-4" style="opacity: 1; transform: none;">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-primary to-purple-500 bg-clip-text text-transparent">
                Kategoriler</h1>
            <p class="text-muted-foreground max-w-2xl mx-auto">Tüm blog yazılarımın kategorilere göre listesi</p>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">similique qui</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">similique qui</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Placeat quibusdam autem illum dolorum.
                            Voluptatum neque accusantium quo molestias et velit. Omnis ut consectetur iure qui ea molestiae
                            odio.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>34 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/similique-qui"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">at corporis</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">at corporis</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Consequatur iste culpa tenetur maiores
                            iste officiis qui. Voluptate quod eum ea est. Dolor omnis temporibus et corporis. Porro iusto
                            aliquid rerum vel et dolore repellat voluptas. Dolor nihil necessitatibus quis rerum.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>40 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/at-corporis"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">excepturi fugit</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">excepturi fugit</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Ut blanditiis magni quidem sit. Sed
                            cumque ullam adipisci. Laboriosam et qui voluptates sit nulla iste voluptatibus. Sit ea maiores
                            sed unde.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>47 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/excepturi-fugit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">est ut</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">est ut</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Quibusdam repellat dolorum quisquam.
                            Iste vel et eum. Tempora vero optio sit autem quasi hic dolorum.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>32 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/est-ut"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">itaque incidunt</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">itaque incidunt</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Eligendi consectetur assumenda
                            inventore nisi quibusdam. Quia eos qui omnis expedita provident similique aut. Sequi molestiae
                            sit dolore odit necessitatibus deserunt reiciendis dolore. At voluptatem qui id deserunt
                            officia.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>34 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/itaque-incidunt"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">voluptatibus nulla</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">voluptatibus nulla</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Asperiores totam at delectus est modi
                            enim. Nemo corporis perferendis dolorum iste quia vel. Culpa ratione quam ipsam iure quidem
                            architecto.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>52 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/voluptatibus-nulla"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">aperiam sit</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">aperiam sit</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Fuga quasi autem necessitatibus est
                            dignissimos occaecati consectetur iste. Ut quae sunt sed enim nam eum. Ex expedita quo eveniet
                            vitae. Quis itaque rem repellendus atque et.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>27 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/aperiam-sit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[300px] flex flex-col">
                    <div
                        class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                        <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">numquam et</p>
                    </div>
                    <div class="relative h-40">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/10"></div>
                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="font-semibold text-lg text-white line-clamp-1">numquam et</h3>
                        </div>
                    </div>
                    <div class="p-4 flex flex-col flex-1">
                        <p class="text-sm text-muted-foreground line-clamp-2 flex-1">Officia omnis velit dolores cum
                            voluptas dolores nulla. Libero fuga similique natus iusto consequatur aspernatur. Cupiditate
                            accusamus ut quis animi.</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center text-sm text-muted-foreground"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-file-text w-4 h-4 mr-1">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg><span>38 yazı</span></div><a
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs gap-2"
                                href="/category/numquam-et"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-external-link w-4 h-4">
                                    <path d="M15 3h6v6"></path>
                                    <path d="M10 14 21 3"></path>
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                </svg>Görüntüle<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-right w-4 h-4">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
