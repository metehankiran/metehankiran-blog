@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <div class="text-center space-y-4" style="opacity: 1; transform: none;">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-primary to-purple-500 bg-clip-text text-transparent">
                Projelerim</h1>
            <p class="text-muted-foreground max-w-2xl mx-auto">Son çalışmalarım ve kişisel projelerim.</p>
        </div>
        <div class="relative max-w-sm mx-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                class="lucide lucide-search absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground h-4 w-4">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg><input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-9"
                placeholder="Projelerde ara..." value=""></div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[400px] flex flex-col">
                    <a href="/project/asperiores-architecto-molestias">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">asperiores architecto
                                    molestias</p>
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
            <div style="opacity: 1; transform: none;">
                <div
                    class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden group h-[400px] flex flex-col">
                    <a href="/project/odio-temporibus-nostrum">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">odio temporibus
                                    nostrum</p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <h2 class="text-xl font-semibold line-clamp-2">odio temporibus nostrum</h2>
                            <p class="text-muted-foreground line-clamp-2">Provident pariatur illum quo quia.</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    mollitia</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    assumenda</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    veniam</div>
                            </div>
                        </div>
                        <div class="flex justify-between"><a
                                href="http://www.senger.com/adipisci-amet-quod-non-veritatis-reprehenderit.html"
                                target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>Kod</a><a href="http://www.bahringer.info/odit-ipsum-nesciunt-voluptas-quia-possimus"
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
                                class="w-full h-48 bg-neutral-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-neutral-600 text-center font-medium line-clamp-3 text-lg">totam facilis
                                    maxime</p>
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
                    <a href="/project/sunt-repellendus-officia">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">sunt repellendus
                                    officia</p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <h2 class="text-xl font-semibold line-clamp-2">sunt repellendus officia</h2>
                            <p class="text-muted-foreground line-clamp-2">Repellendus ad repellendus aliquam beatae.</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    quia</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    rem</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    numquam</div>
                            </div>
                        </div>
                        <div class="flex justify-between"><a href="http://www.bauch.biz/" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>Kod</a><a
                                href="http://hessel.com/officiis-eos-quibusdam-qui-quo-tempora-aliquam.html"
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
                    <a href="/project/dolore-et-occaecati">
                        <div class="relative">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">dolore et occaecati
                                </p>
                            </div>
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </a>
                    <div class="p-4 space-y-3 flex flex-col flex-1">
                        <div class="space-y-3 flex-1">
                            <h2 class="text-xl font-semibold line-clamp-2">dolore et occaecati</h2>
                            <p class="text-muted-foreground line-clamp-2">Laudantium vel necessitatibus aut fugiat dolores
                                quis.</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    dolorum</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    veritatis</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    vel</div>
                            </div>
                        </div>
                        <div class="flex justify-between"><a
                                href="http://schiller.net/praesentium-facilis-eos-ad-magni-temporibus" target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-8 rounded-md px-3 text-xs"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-github mr-2 h-4 w-4">
                                    <path
                                        d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4">
                                    </path>
                                    <path d="M9 18c-4.51 2-5-2-7-2"></path>
                                </svg>Kod</a><a href="https://hermann.biz/ut-accusantium-consectetur-earum-ut.html"
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
        <nav role="navigation" aria-label="pagination" class="mx-auto flex w-full justify-center mt-8">
            <ul class="flex flex-row items-center gap-1">
                <li class=""><a
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 gap-1 pl-2.5 pointer-events-none opacity-50"
                        aria-label="Go to previous page"><svg width="15" height="15" viewBox="0 0 15 15"
                            fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                            <path
                                d="M8.84182 3.13514C9.04327 3.32401 9.05348 3.64042 8.86462 3.84188L5.43521 7.49991L8.86462 11.1579C9.05348 11.3594 9.04327 11.6758 8.84182 11.8647C8.64036 12.0535 8.32394 12.0433 8.13508 11.8419L4.38508 7.84188C4.20477 7.64955 4.20477 7.35027 4.38508 7.15794L8.13508 3.15794C8.32394 2.95648 8.64036 2.94628 8.84182 3.13514Z"
                                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg><span>Previous</span></a></li>
                <li class=""><a aria-current="page"
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-accent hover:text-accent-foreground h-9 w-9">1</a>
                </li>
                <li class=""><a
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9">2</a>
                </li>
                <li class=""><span class="px-4 py-2">...</span></li>
                <li class=""><a
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9">18</a>
                </li>
                <li class=""><a
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 px-4 py-2 gap-1 pr-2.5"
                        aria-label="Go to next page"><span>Next</span><svg width="15" height="15"
                            viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                            <path
                                d="M6.1584 3.13508C6.35985 2.94621 6.67627 2.95642 6.86514 3.15788L10.6151 7.15788C10.7954 7.3502 10.7954 7.64949 10.6151 7.84182L6.86514 11.8418C6.67627 12.0433 6.35985 12.0535 6.1584 11.8646C5.95694 11.6757 5.94673 11.3593 6.1356 11.1579L9.565 7.49985L6.1356 3.84182C5.94673 3.64036 5.95694 3.32394 6.1584 3.13508Z"
                                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg></a></li>
            </ul>
        </nav>
    </div>
@endsection
