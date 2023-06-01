@extends('layout.master', [
    'titre' => 'Nous embauchons',
])

@section('content')
    <main class="flex-1 mb-24 lg:mb-36">
        <header class="banner overflow-hidden relative bg-gradient-to-t from-gray-900 via-transparent to-transparent">
            <div data-gatsby-image-wrapper=""
                class="gatsby-image-wrapper gatsby-image-wrapper-constrained absolute pointer-events-none object-cover w-full h-full opacity-40 -z-10">
                <div style="max-width:3840px;display:block"><img alt="" role="presentation" aria-hidden="true"
                        src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;2160.64&#x27; width=&#x27;3840&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                        style="max-width:100%;display:block;position:static" /></div><img aria-hidden="true"
                    data-placeholder-image="" style="opacity:1;transition:opacity 500ms linear" decoding="async"
                    src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAALABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAEDBP/EABUBAQEAAAAAAAAAAAAAAAAAAAAB/9oADAMBAAIQAxAAAAFasjlkQD//xAAZEAEAAwEBAAAAAAAAAAAAAAABAAIhAxH/2gAIAQEAAQUC5VInom1lllnf/8QAFBEBAAAAAAAAAAAAAAAAAAAAEP/aAAgBAwEBPwE//8QAFBEBAAAAAAAAAAAAAAAAAAAAEP/aAAgBAgEBPwE//8QAFBABAAAAAAAAAAAAAAAAAAAAIP/aAAgBAQAGPwJf/8QAGhAAAgIDAAAAAAAAAAAAAAAAAAEhkRARQf/aAAgBAQABPyGgxUDVmrDEljOj/9oADAMBAAIAAwAAABB7L//EABcRAAMBAAAAAAAAAAAAAAAAAAABETH/2gAIAQMBAT8QUekP/8QAFREBAQAAAAAAAAAAAAAAAAAAERD/2gAIAQIBAT8QSf/EAB0QAQADAAEFAAAAAAAAAAAAAAEAESExQVFxkfD/2gAIAQEAAT8QA22AoGfcxbdrHshuY+WNQtit+6dWcT//2Q=="
                    alt="" />
                <picture>
                    <source type="image/webp"
                        srcSet="/static/9d371d67feba328c64d5ea7bfd62ed52/a66aa/candid-1.webp 750w,/static/9d371d67feba328c64d5ea7bfd62ed52/05b18/candid-1.webp 1500w,/static/9d371d67feba328c64d5ea7bfd62ed52/b3724/candid-1.webp 3000w"
                        sizes="(min-width: 3000px) 3000px, 100vw" /><img data-gatsby-image-ssr="" data-main-image=""
                        style="opacity:0" sizes="(min-width: 3000px) 3000px, 100vw" decoding="async" loading="eager"
                        src="static/9d371d67feba328c64d5ea7bfd62ed52/cd020/candid-1.jpg"
                        srcSet="static/9d371d67feba328c64d5ea7bfd62ed52/37bba/candid-1.jpg 750w,static/9d371d67feba328c64d5ea7bfd62ed52/f6d78/candid-1.jpg 1500w,static/9d371d67feba328c64d5ea7bfd62ed52/cd020/candid-1.jpg 3000w"
                        alt="Dev Chap team" />
                </picture><noscript>
                    <picture>
                        <source type="image/webp"
                            srcSet="/static/9d371d67feba328c64d5ea7bfd62ed52/a66aa/candid-1.webp 750w,/static/9d371d67feba328c64d5ea7bfd62ed52/05b18/candid-1.webp 1500w,/static/9d371d67feba328c64d5ea7bfd62ed52/b3724/candid-1.webp 3000w"
                            sizes="(min-width: 3000px) 3000px, 100vw" /><img data-gatsby-image-ssr="" data-main-image=""
                            style="opacity:0" sizes="(min-width: 3000px) 3000px, 100vw" decoding="async" loading="eager"
                            src="static/9d371d67feba328c64d5ea7bfd62ed52/cd020/candid-1.jpg"
                            srcSet="static/9d371d67feba328c64d5ea7bfd62ed52/37bba/candid-1.jpg 750w,static/9d371d67feba328c64d5ea7bfd62ed52/f6d78/candid-1.jpg 1500w,static/9d371d67feba328c64d5ea7bfd62ed52/cd020/candid-1.jpg 3000w"
                            alt="Dev Chap team" />
                    </picture>
                </noscript>
                <script type="module">const t="undefined"!=typeof HTMLImageElement&&"loading"in HTMLImageElement.prototype;if(t){const t=document.querySelectorAll("img[data-main-image]");for(let e of t){e.dataset.src&&(e.setAttribute("src",e.dataset.src),e.removeAttribute("data-src")),e.dataset.srcset&&(e.setAttribute("srcset",e.dataset.srcset),e.removeAttribute("data-srcset"));const t=e.parentNode.querySelectorAll("source[data-srcset]");for(let e of t)e.setAttribute("srcset",e.dataset.srcset),e.removeAttribute("data-srcset");e.complete&&(e.style.opacity=1)}}</script>
            </div>
            <div class="container mx-auto px-4 max-w-6xl flex items-center z-10 relative py-16 lg:min-h-[35vh]">
                <div class="lg:max-w-[65ch]">
                    <h1 class="text-4xl lg:text-5xl font-bold mb-6 text-gray-100">Emplois</h1>
                    <p class="text-xl lg:text-2xl font-medium text-gray-300">Dev Chap investit dans nos clients et nos
                        employés. Si vous êtes une personne désireuse d'apprendre, de collaborer avec les autres et de
                        produire d'excellents résultats, alors postulez dès aujourd'hui pour rejoindre notre équipe en
                        pleine croissance !</p>
                </div>
            </div>
        </header>
        <div class="container mx-auto px-4 max-w-6xl ">
            <div class="p-4 lg:p-8 rounded-lg bg-gradient-to-t from-gray-800 border border-gray-800 to-gray-900 ">
                <h2
                    class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-gray-100">
                    Développeur</h2>
                <p class="text-base mb-4">
                    En tant que nouveau membre de notre équipe, vous aiderez à créer les interfaces, les comportements,
                    l'architecture et la qualité du code des applications Web et mobiles premium. Vous suivrez les projets
                    de clients nouveaux et existants du début à la fin tout en travaillant en étroite collaboration avec ces
                    clients ainsi qu'avec votre équipe. Chez Dev Chap, la programmation mob est une grande partie de nos
                    processus et de notre façon de travailler. Vous travaillerez quotidiennement avec d'autres développeurs
                    de notre équipe pour produire du code propre avec efficacité et finesse.
                </p>
                {{-- <p class="text-base mb-8 italic">Nous n'embauchons actuellement que des candidats qui résident en Ontario, Canada.</p> --}}
                <a class="w-full lg:w-auto min-w-[125px] rounded-lg bg-gradient-to-t from-brand to-brand-light px-4 py-3 font-semibold inline-flex cursor-pointer justify-center text-white uppercase tracking-wider text-sm transition-all shadow-brand/50 shadow-sm hover:shadow-lg hover:shadow-brand/25 border border-brand-light focus:ring focus:outline-none "
                    href="{{ url('developer') }}">Afficher le poste</a>
            </div>
        </div>
    </main>
@endsection
