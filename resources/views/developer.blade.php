@extends('layout.master', [
    'titre' => 'Nous embauchons',
])

@section('content')
    <main class="flex-1 mb-24 lg:mb-36">
        <header class="banner overflow-hidden relative bg-gradient-to-t from-gray-900 via-transparent to-transparent">
            <div data-gatsby-image-wrapper=""
                class="gatsby-image-wrapper gatsby-image-wrapper-constrained absolute pointer-events-none object-cover w-full h-full opacity-40 -z-10">
                <div style="max-width: 3840px; display: block;">
                    <img alt="" role="presentation" aria-hidden="true"
                        src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;2159.913074972836&#x27; width=&#x27;3840&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                        style="max-width: 100%; display: block; position: static;" />
                </div>
                <img aria-hidden="true" data-placeholder-image="" style="opacity: 1; transition: opacity 500ms linear;"
                    decoding="async"
                    src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAALABQDASIAAhEBAxEB/8QAFwABAQEBAAAAAAAAAAAAAAAAAwACBP/EABQBAQAAAAAAAAAAAAAAAAAAAAH/2gAMAwEAAhADEAAAAeYWEdzQ/wD/xAAbEAACAQUAAAAAAAAAAAAAAAABAgMAEhMxM//aAAgBAQABBQJgMamnQ3GNRHB1bf8A/8QAFREBAQAAAAAAAAAAAAAAAAAAABH/2gAIAQMBAT8BV//EABQRAQAAAAAAAAAAAAAAAAAAABD/2gAIAQIBAT8BP//EABcQAAMBAAAAAAAAAAAAAAAAAAEQEVH/2gAIAQEABj8Cxkx//8QAGRABAAMBAQAAAAAAAAAAAAAAAQARIUEx/9oACAEBAAE/IQJoXIbibyOaeQJEahvXBYm8/9oADAMBAAIAAwAAABBzD//EABURAQEAAAAAAAAAAAAAAAAAAAEQ/9oACAEDAQE/ECP/xAAWEQEBAQAAAAAAAAAAAAAAAAAAARH/2gAIAQIBAT8QrH//xAAZEAEAAwEBAAAAAAAAAAAAAAABABFRMSH/2gAIAQEAAT8Q1T4T1yW1tpbr2VY4uEyNxL8YQougvdnQT//Z"
                    alt="" />
                <picture>
                    <source type="image/webp"
                        srcset="/static/8089785e827d17aa64bff39560d21d50/3e09b/candid-2.webp 690w, /static/8089785e827d17aa64bff39560d21d50/04e06/candid-2.webp 1381w, /static/8089785e827d17aa64bff39560d21d50/4ea8d/candid-2.webp 2761w"
                        sizes="(min-width: 2761px) 2761px, 100vw" />
                    <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0;"
                        sizes="(min-width: 2761px) 2761px, 100vw" decoding="async" loading="eager"
                        src="../static/8089785e827d17aa64bff39560d21d50/48d6e/candid-2.jpg"
                        srcset="../static/8089785e827d17aa64bff39560d21d50/67dc2/candid-2.jpg 690w, ../static/8089785e827d17aa64bff39560d21d50/2407b/candid-2.jpg 1381w, ../static/8089785e827d17aa64bff39560d21d50/48d6e/candid-2.jpg 2761w"
                        alt="Dev Chap team" />
                </picture>
                <noscript>
                    <picture>
                        <source type="image/webp"
                            srcset="/static/8089785e827d17aa64bff39560d21d50/3e09b/candid-2.webp 690w, /static/8089785e827d17aa64bff39560d21d50/04e06/candid-2.webp 1381w, /static/8089785e827d17aa64bff39560d21d50/4ea8d/candid-2.webp 2761w"
                            sizes="(min-width: 2761px) 2761px, 100vw" />
                        <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0;"
                            sizes="(min-width: 2761px) 2761px, 100vw" decoding="async" loading="eager"
                            src="../static/8089785e827d17aa64bff39560d21d50/48d6e/candid-2.jpg"
                            srcset="../static/8089785e827d17aa64bff39560d21d50/67dc2/candid-2.jpg 690w, ../static/8089785e827d17aa64bff39560d21d50/2407b/candid-2.jpg 1381w, ../static/8089785e827d17aa64bff39560d21d50/48d6e/candid-2.jpg 2761w"
                            alt="Dev Chap team" />
                    </picture>
                </noscript>
                <script type="module">
                const t = "undefined" != typeof HTMLImageElement && "loading" in HTMLImageElement.prototype;
                if (t) {
                    const t = document.querySelectorAll("img[data-main-image]");
                    for (let e of t) {
                        e.dataset.src && (e.setAttribute("src", e.dataset.src), e.removeAttribute("data-src")), e.dataset.srcset && (e.setAttribute("srcset", e.dataset.srcset), e.removeAttribute("data-srcset"));
                        const t = e.parentNode.querySelectorAll("source[data-srcset]");
                        for (let e of t) e.setAttribute("srcset", e.dataset.srcset), e.removeAttribute("data-srcset");
                        e.complete && (e.style.opacity = 1);
                    }
                }
            </script>
            </div>
            <div class="container mx-auto px-4 max-w-6xl flex items-center z-10 relative py-16 lg:min-h-[35vh]">
                <div class="lg:max-w-[65ch]">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-100">Développeur chez Dev Chap</h1>
                    <p class="text-xl lg:text-2xl font-medium text-gray-300">
                        Dev Chap investit dans nos clients et nos employés. Si vous êtes une personne désireuse d'apprendre, de collaborer avec les autres et de produire d'excellents résultats, alors postulez dès aujourd'hui pour rejoindre notre équipe en pleine croissance !
                    </p>
                </div>
            </div>
        </header>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="max-w-3xl">
                <h2
                    class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-gray-100">
                    Développeur
                </h2>
                <p class="text-base mb-8">
                    En tant que nouveau membre de notre équipe, vous aiderez à créer les interfaces, les comportements,
                    l'architecture et la qualité du code des applications Web et mobiles premium.
                    Vous suivrez les projets de clients nouveaux et existants du début à la fin tout en travaillant
                    en étroite collaboration avec ces clients ainsi qu'avec votre équipe. Chez Dev Chap,
                    la programmation mob est une grande partie de nos processus et de notre façon de travailler.
                    Vous travaillerez quotidiennement avec d'autres développeurs de notre équipe pour produire du
                    code propre avec efficacité et finesse. En tant que cabinet de conseil spécialisé en PHP et JavaScript,
                    nous recherchons une personne ayant de l'expérience dans l'utilisation des outils,
                    langages et frameworks suivants :
                </p>
                <ul class="list-disc pl-5 text-base mb-12">
                    <li>HTML, CSS</li>
                    <li>JavaScript, TypeScript, React, Vue, Node, Nest, Express</li>
                    <li>PHP, Laravel</li>
                    <li>Redis, NoSQL, SQL</li>
                </ul>
                <h3
                    class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-xl lg:text-2xl mb-6 after:-bottom-2 text-gray-100">
                    Le quotidien d'un développeur chez Dev Chap
                </h3>
                <ul class="list-disc pl-5 text-base mb-12">
                    <li>Mettre l'accent sur la mise en œuvre du développement ; intégration continue, revue de code, programmation en binôme, programmation mob (Programmation en groupe), etc.</li>
                    <li>Développer et maintenir des applications Web et mobiles de bout en bout ; tout, de ce que l'utilisateur voit au code sur le serveur</li>
                    <li>Participez quotidiennement a un espace créatif qui favorise la croissance, l'apprentissage et le partage des connaissances</li>
                    <li>Mise en œuvre des fonctionnalités de l'application, des API RESTful et des modifications de l'interface utilisateur</li>
                    <li>Écrire du code propre et maintenable à l'aide de TDD</li>
                    <li>Compiler, comprendre et analyser les besoins de nos clients</li>
                    <li>Excellentes compétences en communication verbale et écrite avec la capacité de présenter des informations techniques complexes</li>
                    <li>Participer aux rendez-vous clients</li>
                    <li>Valider et vérifier si les applications nouvellement développées sont conformes aux intentions du projet, restent cohérentes avec le code actuel et optimisent si nécessaire</li>
                    <li>Documenter les avancées clés pour permettre un transfert de connaissances fluide entre les autres développeurs et le client afin de comprendre la nouvelle application et ses fonctionnalités</li>
                    <li>Mentorat, accompagnement et collaboration avec les développeurs</li>
                </ul>
                <h3
                    class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-xl lg:text-2xl mb-6 after:-bottom-2 text-gray-100">
                    Qualifications
                </h3>
                <ul class="list-disc pl-5 text-base mb-12">
                    <li>Connaissance approfondie des composants back-end et du développement front-end</li>
                    <li>Expérience en composition d'interfaces, gestion d'état, bon sens du design</li>
                    <li>Capacité à comprendre et à prendre en compte les besoins des utilisateurs</li>
                    <li>Débrouillardise, initiative et capacité à résoudre les problèmes grâce à des solutions élégantes et innovantes</li>
                    <li>Dévouement à produire un travail de qualité démontré tout au long du cycle de développement</li>
                    <li>Fortes compétences interpersonnelles et en communication</li>
                    <li>Capacité à travailler en équipe</li>
                    <li>Capacité à s'adapter au changement</li>
                    <li>Axé sur les résultats</li>
                </ul>
                <h3
                    class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-xl lg:text-2xl mb-6 after:-bottom-2 text-gray-100">
                    Les petits plus
                </h3>
                <ul class="list-disc pl-5 text-base mb-12">
                    <li>Expérience avec les technologies de conteneurs et l'orchestration ; Docker, Kubernetes, etc.</li>
                    <li>Compréhension des problèmes de performance et d'évolutivité dans les applications</li>
                    <li>Expérience de travail avec des systèmes distribués</li>
                    <li>Un membre actif de la communauté; défenseur des développeurs dans les communautés en ligne et locales</li>
                    <li>Capacité à diriger et à participer à des réunions avec des clients en tant que chef de projet et porte-parole de l'équipe de développement</li>
                </ul>
            </div>
            <form class="flex flex-col gap-6 max-w-2xl">
                <fieldset>
                    <legend class="uppercase text-xs tracking-wider font-medium block mb-2">EMPLACEMENT</legend>
                    <div>
                        <label class="flex items-center false">
                            <input type="radio" class="sr-only peer" value="Ontario, Canada" name="location" />
                            <div data-testid="radio-ring"
                                class="peer-focus:ring w-5 h-5 rounded-full border flex items-center justify-center transition-all border-brand">
                                <div class="w-2 h-2 rounded-full bg-brand transition-all opacity-100 scale-100"></div>
                            </div>
                            <span class="uppercase text-xs tracking-wider font-medium block undefined false ml-2">Abidjan</span>
                        </label>
                    </div>
                </fieldset>
                <div>
                    <label class="block false">
                        <span
                            class="uppercase text-xs tracking-wider font-medium block after:content-[&quot;*&quot;] after:inline after:ml-1 false mb-1">Nom</span>
                        <input placeholder="Votre nom" value="" required=""
                            class="text-base text-gray-300 p-4 border shadow-sm bg-gray-800 placeholder:text-gray-500 border-none rounded-lg focus:ring focus:outline-none transition-all block w-full resize-none" />
                    </label>
                </div>
                <div>
                    <label class="block false">
                        <span
                            class="uppercase text-xs tracking-wider font-medium block after:content-[&quot;*&quot;] after:inline after:ml-1 false mb-1">E-mail</span>
                        <input type="email" placeholder="toi@example.com" value="" required=""
                            class="text-base text-gray-300 p-4 border shadow-sm bg-gray-800 placeholder:text-gray-500 border-none rounded-lg focus:ring focus:outline-none transition-all block w-full resize-none" />
                    </label>
                </div>
                <div>
                    <label class="block false">
                        <span class="uppercase text-xs tracking-wider font-medium block false false mb-1">Github</span>
                        <input placeholder="https://github.com/name" value=""
                            class="text-base text-gray-300 p-4 border shadow-sm bg-gray-800 placeholder:text-gray-500 border-none rounded-lg focus:ring focus:outline-none transition-all block w-full resize-none" />
                    </label>
                </div>
                <div>
                    <label class="block false">
                        <span class="uppercase text-xs tracking-wider font-medium block false false mb-1">LinkedIn</span>
                        <input placeholder="https://linkedin.com/in/name" value=""
                            class="text-base text-gray-300 p-4 border shadow-sm bg-gray-800 placeholder:text-gray-500 border-none rounded-lg focus:ring focus:outline-none transition-all block w-full resize-none" />
                    </label>
                </div>
                <div class="relative undefined">
                    <div>
                        <label class="block false">
                            <span
                                class="uppercase text-xs tracking-wider font-medium block after:content-[&quot;*&quot;] after:inline after:ml-1 false mb-1">TÉLÉCHARGER CV</span>
                            <input type="file" data-testid="fileInput" required="" class="sr-only peer inset-0" />
                            <div
                                class="peer-focus:ring text-base relative p-4 border shadow-sm bg-gray-800 border-none rounded-lg focus:ring focus:outline-none transition-all block w-full cursor-pointer">
                                <span class="text-gray-400">Cliquez pour télécharger</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div>
                    <label class="block false">
                        <span class="uppercase text-xs tracking-wider font-medium block false false mb-1">Message</span>
                        <textarea
                            class="text-base text-gray-300 p-4 border shadow-sm bg-gray-800 placeholder:text-gray-500 border-none rounded-lg focus:ring focus:outline-none transition-all block w-full resize-none"></textarea>
                    </label>
                </div>
                <div>
                    <label class="flex items-center false">
                        <input type="checkbox" checked class="sr-only peer" />
                        <span data-testid="checkbox-ring" aria-hidden="true"
                            class="peer-focus:ring w-5 h-5 rounded border flex items-center justify-center transition-all border-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true"
                                class="w-4 h-4 rounded text-brand transition-all opacity-0 scale-0">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </span>
                        <span class="uppercase text-xs tracking-wider font-medium block undefined false ml-2">JE SUIS INTÉRESSÉ PAR LA COOPÉRATION</span>
                    </label>
                </div>
                <button type="submit"
                    class="w-full lg:w-auto min-w-[125px] rounded-lg bg-gradient-to-t from-brand to-brand-light px-4 py-3 font-semibold inline-flex cursor-pointer justify-center text-white uppercase tracking-wider text-sm transition-all shadow-brand/50 shadow-sm hover:shadow-lg hover:shadow-brand/25 border border-brand-light focus:ring focus:outline-none mt-6 self-start">
                    Soumettre
                </button>
            </form>
        </div>
    </main>
@endsection
