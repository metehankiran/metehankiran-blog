@extends('layouts.app')

@section('content')
    <div class="space-y-8">
        <div class="text-center space-y-4">
            <h1 class="text-4xl font-bold bg-gradient-to-r from-primary to-purple-500 bg-clip-text text-transparent leading-loose">Blog
                Yazıları</h1>
            <p class="text-muted-foreground max-w-2xl mx-auto">Yazılım, teknoloji ve güncel konular hakkında yazılar.</p>
        </div>
        <div class="relative max-w-sm mx-auto"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"
                class="lucide lucide-search absolute left-3 top-1/2 -translate-y-1/2 text-muted-foreground h-4 w-4">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg><input
                class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 pl-9"
                placeholder="Yazılarda ara..." value=""></div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <div><a
                    href="/post/architecto-nulla-sed-assumenda-fugiat-architecto-enim-eius-eaque">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">Architecto nulla sed
                                    assumenda fugiat architecto enim eius eaque.</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    ut</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    placeat</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    aut</div>
                            </div>
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Architecto nulla sed assumenda fugiat
                                architecto enim eius eaque.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">Doloribus delectus temporibus reiciendis
                                soluta maiores. Sapiente necessitatibus vel et autem consequatur voluptas in. Sit impedit et
                                sunt dignissimos.</p>
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
                                    </svg>623</div>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div><a
                    href="/post/molestias-et-distinctio-voluptas-explicabo-voluptate-vel">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Molestias et
                                    distinctio voluptas explicabo voluptate vel.</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    et</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    perferendis</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    in</div>
                            </div>
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Molestias et distinctio voluptas explicabo
                                voluptate vel.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">Qui illo molestiae autem tenetur occaecati.
                                Adipisci cumque est quaerat rerum aut temporibus est nam. Rerum eos nam neque facilis ad.
                                Cumque dolores cupiditate error. Earum voluptatem possimus exercitationem voluptatibus.</p>
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
                                    </svg>672</div>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div><a
                    href="/post/dolores-qui-dignissimos-minus-nihil-neque-ab-quas-dignissimos">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">Dolores qui
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
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Dolores qui dignissimos minus nihil neque
                                ab quas dignissimos.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">At quas earum quasi unde error ut sequi.
                                Dicta corrupti culpa deleniti voluptates veniam doloribus. Est atque repudiandae et soluta
                                quas maxime aut. Consequuntur nulla aspernatur dignissimos quam occaecati repudiandae.</p>
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
            <div><a href="/post/et-aliquam-rerum-id-dicta-non">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-zinc-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-zinc-600 text-center font-medium line-clamp-3 text-lg">Et aliquam rerum id
                                    dicta non.</p>
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
                            <p class="text-muted-foreground line-clamp-3 mb-4">Minus minus reiciendis quia. Et dolorum ut
                                magnam soluta. Consectetur saepe et ut sit fuga reiciendis rerum.</p>
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
            <div><a href="/post/quam-magnam-ut-voluptatem-sint">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-stone-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-stone-600 text-center font-medium line-clamp-3 text-lg">Quam magnam ut
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
                            <p class="text-muted-foreground line-clamp-3 mb-4">Alias dolorem ipsum aperiam quia iure. Enim
                                qui in accusamus ipsam in. Ab aut voluptatem porro animi nulla architecto. Eum est corrupti
                                qui aut quisquam autem ut.</p>
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
            <div><a href="/post/ipsa-dolor-qui-quaerat-quam-et">
                    <div
                        class="rounded-xl border bg-card text-card-foreground shadow overflow-hidden h-[450px] flex flex-col hover:shadow-lg transition-shadow">
                        <div class="h-48">
                            <div
                                class="w-full h-48 bg-slate-100 flex items-center justify-center p-4 transition-colors duration-200">
                                <p class="text-slate-600 text-center font-medium line-clamp-3 text-lg">Ipsa dolor qui
                                    quaerat quam et.</p>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col h-[calc(450px-192px)]">
                            <div class="flex flex-wrap gap-2 mb-4">
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    id</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    incidunt</div>
                                <div
                                    class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80">
                                    nihil</div>
                            </div>
                            <h2 class="text-xl font-semibold mb-2 line-clamp-2">Ipsa dolor qui quaerat quam et.</h2>
                            <p class="text-muted-foreground line-clamp-3 mb-4">Quia minima dolore molestiae voluptatem ut
                                nihil laudantium. Numquam cupiditate est sit repudiandae doloribus. Beatae iusto deserunt
                                nemo voluptates minus atque. Quae recusandae voluptate ut ut.</p>
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
                                    </svg>797</div>
                            </div>
                        </div>
                    </div>
                </a></div>
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
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 w-9">111</a>
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
