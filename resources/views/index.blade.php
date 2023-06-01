@extends('layout.master', [
    'titre' => 'Accueil',
])
@section('content')
<main class="flex-1">
    <header
        class="py-12 h-[75vh] relative mb-24 overflow-hidden border-b-2 border-gray-800 flex items-center justify-center">
        <div class="relative z-10 max-w-[75ch] text-center p-4">
            <h1 class="flex flex-col font-bold mb-10">
                <span class="text-3xl lg:text-4xl mb-4 text-gray-400">Nous construisons
                    <span class="text-brand">d'exception</span></span><span
                    class="text-5xl lg:text-7xl text-gray-200">Applications Web & Mobile</span>
            </h1>
            <a class="w-full lg:w-auto min-w-[125px] rounded-lg bg-gradient-to-t from-brand to-brand-light px-4 py-3 font-semibold inline-flex cursor-pointer justify-center text-white uppercase tracking-wider text-sm transition-all shadow-brand/50 shadow-sm hover:shadow-lg hover:shadow-brand/25 border border-brand-light focus:ring focus:outline-none"
                href="{{ url('contact') }}">Travaillons ensemble</a>
        </div>
        <div class="absolute inset-0 opacity-40">
            <div data-gatsby-image-wrapper=""
                class="gatsby-image-wrapper gatsby-image-wrapper-constrained h-full w-full object-cover object-left">
                <div
                    style="
                            max-width: 3000px;
                            display: block;
                        ">
                    <img alt="" role="presentation" aria-hidden="true"
                        src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;2001.9999999999998&#x27; width=&#x27;3000&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                        style="
                                max-width: 100%;
                                display: block;
                                position: static;
                            " />
                </div>
                <img aria-hidden="true" data-placeholder-image=""
                    style="
                            opacity: 1;
                            transition: opacity 500ms linear;
                        "
                    decoding="async"
                    src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAANABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAIEA//EABUBAQEAAAAAAAAAAAAAAAAAAAIB/9oADAMBAAIQAxAAAAGJcUipJgr/xAAZEAADAQEBAAAAAAAAAAAAAAAAAQISESL/2gAIAQEAAQUCdemp71M2VWjJ/8QAFxEBAAMAAAAAAAAAAAAAAAAAAAEREv/aAAgBAwEBPwG5bf/EABcRAQADAAAAAAAAAAAAAAAAAAABERL/2gAIAQIBAT8BqGX/xAAaEAACAwEBAAAAAAAAAAAAAAAAARESYRAx/9oACAEBAAY/Anha+88EogR//8QAGhAAAgMBAQAAAAAAAAAAAAAAAREAITFR8f/aAAgBAQABPyETCgygWhnxDeBqUfVm5mADFMWOT//aAAwDAQACAAMAAAAQJM//xAAWEQEBAQAAAAAAAAAAAAAAAAAAIXH/2gAIAQMBAT8QhWH/xAAVEQEBAAAAAAAAAAAAAAAAAAAQIf/aAAgBAgEBPxCg/8QAGxABAQACAwEAAAAAAAAAAAAAAREAITFBUWH/2gAIAQEAAT8QLMyK1E90ZVAtKMDsDi/PcUmNwhDBW8cQDB0LcQ6j4z//2Q=="
                    alt="" />
                <picture>
                    <source type="image/webp"
                        srcset="
                                /static/d2809d09f657ed9ed57d4397c28a4cae/57584/candid-4.webp  750w,
                                /static/d2809d09f657ed9ed57d4397c28a4cae/87439/candid-4.webp 1500w,
                                /static/d2809d09f657ed9ed57d4397c28a4cae/49b14/candid-4.webp 3000w
                            "
                        sizes="(min-width: 3000px) 3000px, 100vw" />
                    <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                        sizes="(min-width: 3000px) 3000px, 100vw" decoding="async" loading="eager"
                        src="static/d2809d09f657ed9ed57d4397c28a4cae/bf376/candid-4.jpg"
                        srcset="
                                static/d2809d09f657ed9ed57d4397c28a4cae/7284f/candid-4.jpg  750w,
                                static/d2809d09f657ed9ed57d4397c28a4cae/ac0ec/candid-4.jpg 1500w,
                                static/d2809d09f657ed9ed57d4397c28a4cae/bf376/candid-4.jpg 3000w
                            "
                        alt="Vehikl team" />
                </picture>
                <noscript>
                    <picture>
                        <source type="image/webp"
                            srcset="
                                    /static/d2809d09f657ed9ed57d4397c28a4cae/57584/candid-4.webp  750w,
                                    /static/d2809d09f657ed9ed57d4397c28a4cae/87439/candid-4.webp 1500w,
                                    /static/d2809d09f657ed9ed57d4397c28a4cae/49b14/candid-4.webp 3000w
                                "
                            sizes="(min-width: 3000px) 3000px, 100vw" />
                        <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                            sizes="(min-width: 3000px) 3000px, 100vw" decoding="async"
                            loading="eager"
                            src="static/d2809d09f657ed9ed57d4397c28a4cae/bf376/candid-4.jpg"
                            srcset="
                                    static/d2809d09f657ed9ed57d4397c28a4cae/7284f/candid-4.jpg  750w,
                                    static/d2809d09f657ed9ed57d4397c28a4cae/ac0ec/candid-4.jpg 1500w,
                                    static/d2809d09f657ed9ed57d4397c28a4cae/bf376/candid-4.jpg 3000w
                                "
                            alt="Vehikl team" />
                    </picture>
                </noscript>
                <script type="module">
                        const t =
                            "undefined" !=
                                typeof HTMLImageElement &&
                            "loading" in
                                HTMLImageElement.prototype;
                        if (t) {
                            const t = document.querySelectorAll(
                                "img[data-main-image]"
                            );
                            for (let e of t) {
                                e.dataset.src &&
                                    (e.setAttribute(
                                        "src",
                                        e.dataset.src
                                    ),
                                    e.removeAttribute(
                                        "data-src"
                                    )),
                                    e.dataset.srcset &&
                                        (e.setAttribute(
                                            "srcset",
                                            e.dataset.srcset
                                        ),
                                        e.removeAttribute(
                                            "data-srcset"
                                        ));
                                const t =
                                    e.parentNode.querySelectorAll(
                                        "source[data-srcset]"
                                    );
                                for (let e of t)
                                    e.setAttribute(
                                        "srcset",
                                        e.dataset.srcset
                                    ),
                                        e.removeAttribute(
                                            "data-srcset"
                                        );
                                e.complete &&
                                    (e.style.opacity = 1);
                            }
                        }
                    </script>
            </div>
        </div>
    </header>
    <section>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-[75ch] mx-auto false">
                <h2
                    class="after:left-[50%] after:translate-x-[-50%] text-center font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-3xl lg:text-4xl mb-8 after:-bottom-4 text-gray-100">
                    Ce que nous faisons
                </h2>
                <p class="text-xl lg:text-2xl">
                    Nous sommes une société de conseil en logiciels spécialisée en DART, PHP et JavaScript.
                    Nous créons des applications Web & Mobile de premier ordre écrites avec des frameworks
                    populaires tels que Laravel, Express, NestJS, Vue, Flutter. <br><br> <b style="color: white">Considérez-nous comme
                        une extension de votre équipe</b>.
                </p>
            </div>
        </div>
        <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="grid gap-4 lg:gap-8 lg:grid-cols-2 content-center">
                    <div class="flex flex-col justify-center">
                        <h1
                            class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-gray-100">
                            Développement d'applications
                        </h1>
                        <p class="text-lg">
                            Nous sommes fiers d'être des développeurs axés sur les tests qui se concentrent sur l'écriture
                            de code propre et maintenable. Nos développeurs apprennent constamment de nouvelles
                            techniques et de nouveaux concepts qui leur donnent une longueur d'avance, et peuvent
                            aider à partager ces connaissances avec votre équipe. Pairing et Mobbing sont des pratiques
                            que nous utilisons quotidiennement car nous sommes fiers de notre travail,
                        </p>
                    </div>
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained mb-4 lg:mb-0 max-w-[275px] mx-auto lg:max-w-full order-first lg:order-1">
                        <div
                            style="
                                    max-width: 1335px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;850&#x27; width=&#x27;1335&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAANCAYAAACpUE5eAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEGUlEQVQ4yyWSeUyTdxzGv4DC2IETt3HMlh60QPu2tO/7Uo6KA0WHHL3o24sOOZRrCKgIhKHwtn2p0E0gxmjYYHNTjswxcHMgY6sMcCNZgoDFaf+ZM2iyzSVLjCBHfgvsSZ5/P3ny5APC9AaQZpwCuY4OxLT0G6D86jUIehTQlJsZFE7m+gXD/zlRVe+LEILNPlp67Lv0+AnszWvzA4jfJtXZX5Vq7UGYxvYKyHQ0JOpPb4/R2IXxqjMyR1VG5uXGROPZijystJp5M/HSmj9CyKe15SN4vryc/MfSk845j/eWs+tbZSBZzSlo6FYKM5tixGpaJNHapLAjoxN2ZXYEUJYywqo/pphiWI23mZ1P8bT8QU5iUZ9gT+GAcE/Rl7vj8i4frnL9e6Sm3fP95OwXEzMLw59fG3N8Nz413jNwsxYEpRzSwGAA8dMA+6+CVEPzjMYSZf7RusgiS3pXVIIZRRBmxCFNiIWbkUBhRCHRWWi33Lj84/Ss+7PBSeuVwXHb8OjEUHf/SD2I3+cSFCMFkcYOEq0NMI3dPzq7WcTP6wvnJh/7gEeakDDe9DwmwbTKJU1rPIJa5eE5iKewPHNeHCz/5ubEyOAN99XugdF6P1klT653SCVaGwukOjvgejsQejvIsmpfVhR2hUSnFJ+JVFhQZJxphYNTa1yCWmUT5vVQuQXtFOkfDo24h8YmZnqvj013jE/84t6RVCuQ5TiE6SWdvpBScA5IQwuw0xogMyvXR2K9FIwdqCzmKywvWHIDCpcZEZvMRaFy60bk5kLCsJKcXfF30sHC+/J38h7ID5Z/zXq3ORLX20OkOQ7YAsbq7Fs64BTjL1LRApxiouWZNWlRqeWmYOXx/eFxBf25h9JRdyG27tCLUSyRsRYh0yOuTItCpNQibnJFiVXNb8soJ4DyPdcWLFZnDxCpaK5cz4hIisGAWxEGezvCep11hv6m0rkbtAXda8TWfygL3tDuS10JizW+YMtyEIuwLEip1khMQ2+qEwjW+h6fTSFFKlqoMDkloSl1QuAXcBvPD1mG205ed7ceQT+3l6GPa/LQcXUCKjigWBOTqg0erlvmy7WIRZi9MqOLj6npKInGxgal1bVNrKYFuJ6JhV1mtrbyAjk5s3Dtp5l5NNr/KXK3FaNbH5Y9M1FFnmDM9DsLt/wVQRifCuKoJT5pWOImHL6Cm1xckaqJLdHa2JBaeA7izWdDXk88yb3YO57/69xvf84vetGcx4vct2fRcM+FHttRq0SgdnDw7FMiIusELk6vSYg6VJ8kUZ+OwylGJNbYojENzZNobW8BQBIAZGz9eOfug/Pzi957cx7vP3Me78M7d+9/ggCgz3UaIKIEOKnVwE8uBgA/0DunfGWWzu0xKjoQp5iXSEOL/77CdvgPLcWg9+nvhFYAAAAASUVORK5CYII="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/c9967c6c155341090e9e9a7e9542fc74/2a1fa/app_development.webp 334w,/static/c9967c6c155341090e9e9a7e9542fc74/e94f1/app_development.webp 668w,/static/c9967c6c155341090e9e9a7e9542fc74/473f0/app_development.webp 1335w"
                                sizes="(min-width: 1335px) 1335px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 1335px) 1335px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/c9967c6c155341090e9e9a7e9542fc74/50d13/app_development.png"
                                data-srcset="/static/c9967c6c155341090e9e9a7e9542fc74/9e339/app_development.png 334w,/static/c9967c6c155341090e9e9a7e9542fc74/5e476/app_development.png 668w,/static/c9967c6c155341090e9e9a7e9542fc74/50d13/app_development.png 1335w"
                                alt="App development" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/c9967c6c155341090e9e9a7e9542fc74/2a1fa/app_development.webp  334w,
                                            /static/c9967c6c155341090e9e9a7e9542fc74/e94f1/app_development.webp  668w,
                                            /static/c9967c6c155341090e9e9a7e9542fc74/473f0/app_development.webp 1335w
                                        "
                                    sizes="(min-width: 1335px) 1335px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 1335px) 1335px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/c9967c6c155341090e9e9a7e9542fc74/50d13/app_development.png"
                                    srcset="
                                            static/c9967c6c155341090e9e9a7e9542fc74/9e339/app_development.png  334w,
                                            static/c9967c6c155341090e9e9a7e9542fc74/5e476/app_development.png  668w,
                                            static/c9967c6c155341090e9e9a7e9542fc74/50d13/app_development.png 1335w
                                        "
                                    alt="App development" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="grid gap-4 lg:gap-8 lg:grid-cols-2 content-center">
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained mb-4 lg:mb-0 max-w-[275px] mx-auto lg:max-w-full">
                        <div
                            style="
                                    max-width: 1364px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;872&#x27; width=&#x27;1364&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAANCAYAAACpUE5eAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEAElEQVQ4yzWTW0ybdRyGfxQVqCTgxgAdpXJqU9pCgTLKCmOcWtba7ys90gNQoP16hKXQwuhK26/0QKHAnMCIW+LcvJjRxambgAQoJF6YGGPM9MZolnjlzYxTsxECfwPqxZvn7slz8wKv0w6V3TEo8PwCFN0WNOJjFC42lcGUXKUC4BSzwwenpIuAEAC6AxknVEPaMQd0Q1AqiwEHJ4EtDwNDdxOALbqcJhK2pNXik1QGFilk4dPFbJyk16qjJUrHnBAbDEtUBpeGK/bjd/31ngehWtt9szwHAIFIOQr50nngyklgKpLAwUMAra04pQKL5pZjMWaj0scVKq5wzmLXCsS6iXluq/mgTNC3XyIwIXazAW2TeWgnWox6TeYunjRAFWlHcnU9phyZykHNlr8PLCwMUC4NZtV1B9h9ekIw0tcrJIwDzRbzKEOIu1fKBUZU2mB8WnJO/7ywuud3+aWmp5eN5w8LWwIKhmaB/nLnKgOE3xTBpQ9Kq/AgoxInqVAmJXMECl+1f0DTEh5SCb16eW2X2n22Te0NMYX9iNlk2i+u6zl6g6c5ymXrDwqrNIjT6bRipkTZpr0o+rUrd2VeL5SVYTEOD58qhW7lEIUmjRf1GmwCs1pdvTTh7LsX95o4mN/0v5DGN+znczV/FvP1z4rq9E/YbVb9kkvT8ng487snVkA/EtRtvirMZWJhGvCxcVj02KGmO3gGhAvF6wnnV1uz1ucrfveksCekPCdza63e2ffGAtc+bNf52i9oA/wGVYgt1o3XfG/L2vvBnLV3m2g2iLXjvNPiGSpwZX749h172nW/BzbnR+i78/Zna5Eh9GXcjB7NDC8D71aBK7Ta5yTftb8kWSqH3OU8uHCDPqg1NNzVlgx36nwcmW6sulRC5ow2nQGo7zDB42Ub5acbFtictSt2k1a0FjH/9Tk5gDbi1t8SXrdx0ePA7wXt3vsR1/WPIsPJ+LhHAo1xGl89zSqTxVjlUjI/v/czKMGTADyRHSZstnS0aYEv4nbu5ozlj9QsgTZi5qP1qPlwa4ZA27PW/0agvaQVpZK2g5sBtxP4Sdp51VQVD/ef4squAhcPAtR0WIDT4UifNPenQ8Vqttfpbn8wTXyylSD+3p0j0LF8O0GgrYQFpeash6mk7cXuv9IXobHxtzIvRiua1FP51fIAcLAgnNwmk6UBerOdIlD6X3+1LU6HhgXasG20607AvroWt/36KEr8/DFJ7KzHiJP61Jx1/7h0LeHYeeVi/M1W9SQV6kngYFMAFcbbUNMdAJbIDWJjCDDDlcyOHt9rUPV2NsB6Rp3cl8eTek8DIMqtSULykOzfX48MHksPUnM29GnMdeFh3AkbCQelUhGHfwCDhI8zD/BM3QAAAABJRU5ErkJggg=="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/25c41525706d29b9e5380e0b70a3365b/44daa/technical_leadership.webp 341w,/static/25c41525706d29b9e5380e0b70a3365b/7b684/technical_leadership.webp 682w,/static/25c41525706d29b9e5380e0b70a3365b/13b3e/technical_leadership.webp 1364w"
                                sizes="(min-width: 1364px) 1364px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 1364px) 1364px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/25c41525706d29b9e5380e0b70a3365b/3ee46/technical_leadership.png"
                                data-srcset="/static/25c41525706d29b9e5380e0b70a3365b/b19e0/technical_leadership.png 341w,/static/25c41525706d29b9e5380e0b70a3365b/82f3b/technical_leadership.png 682w,/static/25c41525706d29b9e5380e0b70a3365b/3ee46/technical_leadership.png 1364w"
                                alt="Technical leadership" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/25c41525706d29b9e5380e0b70a3365b/44daa/technical_leadership.webp  341w,
                                            /static/25c41525706d29b9e5380e0b70a3365b/7b684/technical_leadership.webp  682w,
                                            /static/25c41525706d29b9e5380e0b70a3365b/13b3e/technical_leadership.webp 1364w
                                        "
                                    sizes="(min-width: 1364px) 1364px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 1364px) 1364px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/25c41525706d29b9e5380e0b70a3365b/3ee46/technical_leadership.png"
                                    srcset="
                                            static/25c41525706d29b9e5380e0b70a3365b/b19e0/technical_leadership.png  341w,
                                            static/25c41525706d29b9e5380e0b70a3365b/82f3b/technical_leadership.png  682w,
                                            static/25c41525706d29b9e5380e0b70a3365b/3ee46/technical_leadership.png 1364w
                                        "
                                    alt="Technical leadership" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                    <div class="flex flex-col justify-center">
                        <h1
                            class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-gray-100">
                            Direction technique
                        </h1>
                        <p class="text-lg">
                            Nous sommes fiers de fournir un code exceptionnel, et nous facilitons cela lorsque nous travaillons avec nos clients. Notre équipe est composée d'experts qui vous aideront à guider votre équipe dans la construction de produits dont vous pouvez être fier.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
            <div class="container mx-auto px-4 max-w-6xl">
                <div class="grid gap-4 lg:gap-8 lg:grid-cols-2 content-center">
                    <div class="flex flex-col justify-center">
                        <h1
                            class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-gray-100">
                            La conception des produits
                        </h1>
                        <p class="text-lg">
                            Nous pratiquons la conception centrée sur l'utilisateur. Pendant que nous planifions, concevons et construisons, nous nous efforçons de résoudre d'abord le problème de l'utilisateur, afin que vos objectifs commerciaux soient atteints. En conséquence, vos utilisateurs découvriront un logiciel à la fois intuitif et beau.
                            <!-- -->
                        </p>
                    </div>
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained mb-4 lg:mb-0 max-w-[275px] mx-auto lg:max-w-full order-first lg:order-1">
                        <div
                            style="
                                    max-width: 1391px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;772&#x27; width=&#x27;1391&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAALCAYAAAB/Ca1DAAAACXBIWXMAAAsTAAALEwEAmpwYAAADhklEQVQozwF7A4T8ADNWhgMyVYUbIEd8IiFGeSRIZY0uSWWLJ1FsjyJHYoglV3KWHlp0lhlOZ4gdT2eHITxfkyFrcncxe3RfNkV6ziclQGEeKUp3HzFVhxI9XIgCADZYhxEfRnwnUm6TMrvBycO/xMvcw8jP2cHGzdvCx8/cub/I3LzCy9rBx8/bwsfN3sHM3drOolXq2ooA7dK4geK6yuSwE0eUHi9OeBQ+YZIGAERjjg0AGWASeYylS8DEyv+/w8r/w8fO/8PHzv/Y29//wsXK/8zP1P/c3+L/3d/k/9rc3//Smzv/038A/92fMf/OuZT5oYJHPwACrwhbaXgHAFpzlwgAI2oWipuwOdbY3Pzc3+P93N/i/M7S1/2ZorH9jJiq/Y2Yq/2Ml6n9hpKl/aOruPra18/93c2x/d+oR/neiAD/0IwRggAP/xCZdTIGAENXeABQZIMiPVFzsmRzjP9cbIf+UmOA/khYdP8kOV7+FyxS/x0wU/4dL1T+ESZN/yg8YP+FkKT+iZ28/ZSXmP+ekHnzYmNhcgtBkRf//wAAAGJoeQB3eoYvMj9b/xktUv8iMVH+HCxO/x8xU/4vQGL+LDpa/jpAVv4vOVT+JDRV/hwxV/4TLVf/fEkp/19GQP4KLGP/IDZe8zdTejggV58FAE5ddwBSZIEnOENe+C07Wv83Plb+JjRT/ig4WP47RF3/Gy1Q/x8rSf8aKkv+FSpR/xsyWP4iOV/+YUtG/kZASv0TLVf/HTNZ3jFRfjgtUoYbAB5HgA48W4U6MUJi+RoqTf8RJkz6FyhL/B8xUvw7R2D7UWN/+1pxkPtjcYn8UWB7/CMxT/wlL0r8FihM/BgnSfkaKUr/HjRZ2zRWhS4sUIIpAC1Rgx4qT4EmTl98hpCXpf+cpLH/oqq3/6etuP+utL7/0byx/+K9pf/Y0tH/uL7G/3F7jv9ndIr/b3iL/2t1if9XY3z/KDpclypShygvUoIoADtciQgiSX4aR2qYHLrDzZDEytGqyM3TteLj5tHf5uy6ypp9qtaZc77a2tvN2NzhyGyEpMlTb5TCs7vFqcrQ2Ku8x9R2JU+HIjBThCQxVIUOAD1digBBYIsDI0d5EgAAGg8AAAAOABFWHC5RgioAADAXAAB9EwBf5xQoW5cXHUN5FAAhWxMAADYQAAAACwAAAAoAABsNKk1+FC9SgwU1WIcARkqomPJws2wAAAAASUVORK5CYII="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/6afc9b8cd04f8df613d98ac4510850c7/1326d/product_design.webp 348w,/static/6afc9b8cd04f8df613d98ac4510850c7/d221e/product_design.webp 696w,/static/6afc9b8cd04f8df613d98ac4510850c7/e382c/product_design.webp 1391w"
                                sizes="(min-width: 1391px) 1391px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 1391px) 1391px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/6afc9b8cd04f8df613d98ac4510850c7/a4ea4/product_design.png"
                                data-srcset="/static/6afc9b8cd04f8df613d98ac4510850c7/dfee2/product_design.png 348w,/static/6afc9b8cd04f8df613d98ac4510850c7/6a270/product_design.png 696w,/static/6afc9b8cd04f8df613d98ac4510850c7/a4ea4/product_design.png 1391w"
                                alt="Product design" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/6afc9b8cd04f8df613d98ac4510850c7/1326d/product_design.webp  348w,
                                            /static/6afc9b8cd04f8df613d98ac4510850c7/d221e/product_design.webp  696w,
                                            /static/6afc9b8cd04f8df613d98ac4510850c7/e382c/product_design.webp 1391w
                                        "
                                    sizes="(min-width: 1391px) 1391px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 1391px) 1391px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/6afc9b8cd04f8df613d98ac4510850c7/a4ea4/product_design.png"
                                    srcset="
                                            static/6afc9b8cd04f8df613d98ac4510850c7/dfee2/product_design.png  348w,
                                            static/6afc9b8cd04f8df613d98ac4510850c7/6a270/product_design.png  696w,
                                            static/6afc9b8cd04f8df613d98ac4510850c7/a4ea4/product_design.png 1391w
                                        "
                                    alt="Product design" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-[75ch] mx-auto mb-12 lg:mb-20">
                <h2
                    class="after:left-[50%] after:translate-x-[-50%] text-center font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-3xl lg:text-4xl mb-8 after:-bottom-4 text-gray-100">
                    Nos clients
                </h2>
                <p class="text-xl lg:text-2xl">
                    Nous avons travaillé avec des clients de toutes tailles : de la startup à l'entreprise, et tout le reste. Voici quelques-uns des projets passionnants sur lesquels nous avons travaillé récemment.
                </p>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="p-4 lg:p-8 rounded-lg border border-gray-800 flex items-center justify-center">
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained opacity-60 brightness-0 invert max-w-[150px]">
                        <div
                            style="
                                    max-width: 400px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;400&#x27; width=&#x27;400&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAABq0lEQVQ4y+2SMWsXQRDF7y6kEGIjweRNYaGCsTDzjBoRtFILeU/U9EklikVQEIOglUEEQbBKIRZ2ghgLsfAL+C38MLJ7d3/PzjJFBpbbm933m9mZaZpDO3gWVBvppiykmqAb1KXh6xajL/0/wAFUoPQEOIHmDF41k/O/wYazAjg2Ac4F3SHdRQ87AvrMsC/iDqm23qHnxqBFh1S3sn6nRNM+6KdBz/cZFvgss0XQbwZRffK/ZfFpUAvjK89evlvT/xb0B6Qi6C1QW0hdR/pB0BuRfgH6WtBXQd9H6kLQj4O+Cepj0QR9C6mN1Sv3UKJ+AbUT9GekNoPeDvoXqGeg90D/Dmo7Uo9AF9/boAVqL1Kvo///idT+ibXbF0vtfgS1Wy+mdvon+ntQ50G9D+pr0C9BvQK9EvRDpJ5HH+wJqE2kPgX9bim1XOpxKbIUvjZlHak1pJYjvQA6kD4a1HHQp5AqdZ5H6gbok0EvBlUauYLUuaVVNUMTKqwdizt2vY7NtAl1r9kYjU3EMHLFXzZdgQ3CFlnHo+2B1d9GPzLtRNjNEugTakfGoR1A+wMkS45qvBG3sAAAAABJRU5ErkJggg=="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/1af3232308df3ae8bd6a6349485eee77/18188/bankrate.webp 75w,/static/1af3232308df3ae8bd6a6349485eee77/c65bc/bankrate.webp 150w,/static/1af3232308df3ae8bd6a6349485eee77/078c3/bankrate.webp 300w"
                                sizes="(min-width: 300px) 300px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/1af3232308df3ae8bd6a6349485eee77/30cdc/bankrate.png"
                                data-srcset="/static/1af3232308df3ae8bd6a6349485eee77/7458e/bankrate.png 75w,/static/1af3232308df3ae8bd6a6349485eee77/de3a1/bankrate.png 150w,/static/1af3232308df3ae8bd6a6349485eee77/30cdc/bankrate.png 300w"
                                alt="Bankrate" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/1af3232308df3ae8bd6a6349485eee77/18188/bankrate.webp  75w,
                                            /static/1af3232308df3ae8bd6a6349485eee77/c65bc/bankrate.webp 150w,
                                            /static/1af3232308df3ae8bd6a6349485eee77/078c3/bankrate.webp 300w
                                        "
                                    sizes="(min-width: 300px) 300px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/1af3232308df3ae8bd6a6349485eee77/30cdc/bankrate.png"
                                    srcset="
                                            static/1af3232308df3ae8bd6a6349485eee77/7458e/bankrate.png  75w,
                                            static/1af3232308df3ae8bd6a6349485eee77/de3a1/bankrate.png 150w,
                                            static/1af3232308df3ae8bd6a6349485eee77/30cdc/bankrate.png 300w
                                        "
                                    alt="Bankrate" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                </div>
                <div
                    class="p-4 lg:p-8 rounded-lg border border-gray-800 flex items-center justify-center">
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained opacity-60 brightness-0 invert max-w-[150px]">
                        <div
                            style="
                                    max-width: 400px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;400&#x27; width=&#x27;400&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAA4ElEQVQ4y+3SQSuEURQG4Of7ZmM5UiJTNpqULIilZpRhZ285S1mYxdQs2FpIYkFs+AVWIhullDR+h5/gB+irQzcNK1PSvPV2znvO6b33ni4D/FtkfXXPE2ZJzL7ppSwwgonfvGkTl2lhDfNYQhULWMEyVkPXMI1FNFAPvY4zHGIqfBzjBl0c4B4X2Izha7xgH0/oYA9vOMEOHsN0qDAs4w4tnIfRFWYxilts4xRbOMIuXtHGBp7xEPnnYksYDl0Pw49eHgcXmIvVjMUzJzGOCmb69r+yLzHvUUtnf+IAfw3vqLMeO4WUS4QAAAAASUVORK5CYII="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/b00ea39bed70ac02c33de3cb41494fa2/18188/we-work.webp 75w,/static/b00ea39bed70ac02c33de3cb41494fa2/c65bc/we-work.webp 150w,/static/b00ea39bed70ac02c33de3cb41494fa2/078c3/we-work.webp 300w"
                                sizes="(min-width: 300px) 300px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/b00ea39bed70ac02c33de3cb41494fa2/30cdc/we-work.png"
                                data-srcset="/static/b00ea39bed70ac02c33de3cb41494fa2/7458e/we-work.png 75w,/static/b00ea39bed70ac02c33de3cb41494fa2/de3a1/we-work.png 150w,/static/b00ea39bed70ac02c33de3cb41494fa2/30cdc/we-work.png 300w"
                                alt="WeWork" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/b00ea39bed70ac02c33de3cb41494fa2/18188/we-work.webp  75w,
                                            /static/b00ea39bed70ac02c33de3cb41494fa2/c65bc/we-work.webp 150w,
                                            /static/b00ea39bed70ac02c33de3cb41494fa2/078c3/we-work.webp 300w
                                        "
                                    sizes="(min-width: 300px) 300px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/b00ea39bed70ac02c33de3cb41494fa2/30cdc/we-work.png"
                                    srcset="
                                            static/b00ea39bed70ac02c33de3cb41494fa2/7458e/we-work.png  75w,
                                            static/b00ea39bed70ac02c33de3cb41494fa2/de3a1/we-work.png 150w,
                                            static/b00ea39bed70ac02c33de3cb41494fa2/30cdc/we-work.png 300w
                                        "
                                    alt="WeWork" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-[75ch] mx-auto mb-12 lg:mb-20">
                <h2
                    class="after:left-[50%] after:translate-x-[-50%] text-center font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-3xl lg:text-4xl mb-8 after:-bottom-4 text-gray-100">
                    Communauté
                </h2>
                <p class="text-xl lg:text-2xl">
                    Nous aimons l'open source et contribuons activement à la communauté. Nous pensons que la participation active aux communautés de conception et de développement rend tout le monde meilleur.
                </p>
            </div>
            <div class="grid lg:grid-cols-3">
                <div>
                    <span class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Connect
                        Tech 2022</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        Online Summer 2022</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">VueConf
                        US 2022</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        Online Winter 2022</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        Online Summer 2021</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">VueConf
                        US 2021</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        Online Winter 2021</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Connect
                        Tech 2020</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        Online Summer 2020</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">VueConf
                        US 2020</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Fluxible
                        2019</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Connect
                        Tech 2019</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">VueConf
                        US 2019</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        US NYC 2019</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">VueConf
                        US 2018</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Fluxible
                        2018</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        US 2018</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        EU 2017</span>
                </div>
                <div>
                    <span class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        US 2017</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Erie Day
                        of Code 2017</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        Online 2017</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Waterloo
                        Tech Leadership Conference
                        2017</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Communitech
                        Tech Jam 2017</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">True
                        North PHP 2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        EU 2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        US 2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Dutch PHP
                        2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Erie Day
                        of Code 2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Waterloo
                        Tech Leadership Conference
                        2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Codemash
                        2016</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">CanUX
                        Conf 2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">True
                        North PHP 2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Fluxible
                        2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">TechCrunch
                        Disrupt 2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Waterloo
                        Tech Leadership Conference
                        2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        EU 2015</span>
                </div>
                <div>
                    <span class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        US 2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Erie Day
                        of Code 2015</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">PHP World
                        2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">True
                        North PHP 2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        EU 2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Google IO
                        Extended 2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Laracon
                        US 2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Fluxible
                        2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Codemash
                        2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Agile
                        Open Toronto 2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Agile
                        Coach Camp Canada 2014</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">True
                        North PHP 2013</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">TEDx
                        Waterloo 2013</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Fluxible
                        2013</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">Agile
                        Open Toronto 2013</span><span
                        class="flex items-center justify-center gap-2 p-1 lg:p-2 text-center">True
                        North PHP 2012</span>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-[75ch] mx-auto mb-12 lg:mb-20">
                <h2
                    class="after:left-[50%] after:translate-x-[-50%] text-center font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-3xl lg:text-4xl mb-8 after:-bottom-4 text-gray-100">
                    Conseillers
                </h2>
                <p class="text-xl lg:text-2xl">
                    En tant que partisans de longue date de Laravel, nous avons établi de solides relations avec le créateur du framework et ses principaux dirigeants communautaires.
                </p>
            </div>
            <div class="grid lg:grid-cols-2 gap-4 lg:gap-8">
                <div
                    class="p-4 lg:p-8 rounded-lg border border-gray-800 flex flex-col items-center justify-center">
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained mb-6 rounded max-w-[240px]">
                        <div
                            style="
                                    max-width: 400px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;400&#x27; width=&#x27;400&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAUABQDASIAAhEBAxEB/8QAGAABAQEBAQAAAAAAAAAAAAAAAAUEAgb/xAAVAQEBAAAAAAAAAAAAAAAAAAACA//aAAwDAQACEAMQAAABmWZ9GdfMu1JatIHKDH//xAAbEAABBQEBAAAAAAAAAAAAAAABAgMEERIhAP/aAAgBAQABBQKM2HFvRkFv0TNXxVaZ4NFQPD//xAAYEQACAwAAAAAAAAAAAAAAAAABEAIhMf/aAAgBAwEBPwGIpDF//8QAFhEAAwAAAAAAAAAAAAAAAAAAARAx/9oACAECAQE/ATUav//EABsQAAIDAAMAAAAAAAAAAAAAAAABESExEBJR/9oACAEBAAY/ArxFKHw/S5HGHZaQxn//xAAcEAEAAwACAwAAAAAAAAAAAAABABEhQVEQMWH/2gAIAQEAAT8h5z4InrAxPCoN8muoClBRkf1WQ7lKDzY+6hpdM//aAAwDAQACAAMAAAAQm898/8QAFREBAQAAAAAAAAAAAAAAAAAAASD/2gAIAQMBAT8QCF//xAAVEQEBAAAAAAAAAAAAAAAAAAABIP/aAAgBAgEBPxBsL//EAB4QAQEAAgICAwAAAAAAAAAAAAERACExUWFxgaHB/9oACAEBAAE/EFQYBe2Fl+AkcSO8bGC1bjifeNUZWnU89mIXkfwus2goL0ZEAcCSjr9wAbEC+8//2Q=="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/ef6d0c83ab178313956398be9a6457ba/18188/taylor-otwell.webp 75w,/static/ef6d0c83ab178313956398be9a6457ba/c65bc/taylor-otwell.webp 150w,/static/ef6d0c83ab178313956398be9a6457ba/078c3/taylor-otwell.webp 300w"
                                sizes="(min-width: 300px) 300px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/ef6d0c83ab178313956398be9a6457ba/0fdf4/taylor-otwell.jpg"
                                data-srcset="/static/ef6d0c83ab178313956398be9a6457ba/91a6d/taylor-otwell.jpg 75w,/static/ef6d0c83ab178313956398be9a6457ba/96deb/taylor-otwell.jpg 150w,/static/ef6d0c83ab178313956398be9a6457ba/0fdf4/taylor-otwell.jpg 300w"
                                alt="Taylor Otwell" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/ef6d0c83ab178313956398be9a6457ba/18188/taylor-otwell.webp  75w,
                                            /static/ef6d0c83ab178313956398be9a6457ba/c65bc/taylor-otwell.webp 150w,
                                            /static/ef6d0c83ab178313956398be9a6457ba/078c3/taylor-otwell.webp 300w
                                        "
                                    sizes="(min-width: 300px) 300px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/ef6d0c83ab178313956398be9a6457ba/0fdf4/taylor-otwell.jpg"
                                    srcset="
                                            static/ef6d0c83ab178313956398be9a6457ba/91a6d/taylor-otwell.jpg  75w,
                                            static/ef6d0c83ab178313956398be9a6457ba/96deb/taylor-otwell.jpg 150w,
                                            static/ef6d0c83ab178313956398be9a6457ba/0fdf4/taylor-otwell.jpg 300w
                                        "
                                    alt="Taylor Otwell" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                    <span class="font-medium mb-1">Taylor Otwell</span><span
                        class="text-xs uppercase tracking-wider mb-2">Founder &amp; Creator of
                        Laravel</span>
                    <div class="flex gap-4">
                        <a href="https://github.com/taylorotwell" target="_blank" rel="noopener"
                            class="text-brand hover:underline">Github</a><a
                            href="https://twitter.com/taylorotwell" target="_blank" rel="noopener"
                            class="text-brand hover:underline">Twitter</a>
                    </div>
                </div>
                <div
                    class="p-4 lg:p-8 rounded-lg border border-gray-800 flex flex-col items-center justify-center">
                    <div data-gatsby-image-wrapper=""
                        class="gatsby-image-wrapper gatsby-image-wrapper-constrained mb-6 rounded max-w-[240px]">
                        <div
                            style="
                                    max-width: 400px;
                                    display: block;
                                ">
                            <img alt="" role="presentation" aria-hidden="true"
                                src="data:image/svg+xml;charset=utf-8,%3Csvg height=&#x27;400&#x27; width=&#x27;400&#x27; xmlns=&#x27;http://www.w3.org/2000/svg&#x27; version=&#x27;1.1&#x27;%3E%3C/svg%3E"
                                style="
                                        max-width: 100%;
                                        display: block;
                                        position: static;
                                    " />
                        </div>
                        <img aria-hidden="true" data-placeholder-image=""
                            style="
                                    opacity: 1;
                                    transition: opacity 500ms
                                        linear;
                                "
                            decoding="async"
                            src="data:image/jpeg;base64,/9j/2wBDABALDA4MChAODQ4SERATGCgaGBYWGDEjJR0oOjM9PDkzODdASFxOQERXRTc4UG1RV19iZ2hnPk1xeXBkeFxlZ2P/2wBDARESEhgVGC8aGi9jQjhCY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2P/wgARCAAUABQDASIAAhEBAxEB/8QAGAABAAMBAAAAAAAAAAAAAAAAAAMEBQL/xAAWAQEBAQAAAAAAAAAAAAAAAAABAgD/2gAMAwEAAhADEAAAAa6zBNGixFllHQH/xAAdEAEAAgEFAQAAAAAAAAAAAAABAgMABBIUISIy/9oACAEBAAEFAvhsq98OzIqw1D2WykD6DdcSY5//xAAVEQEBAAAAAAAAAAAAAAAAAAABEP/aAAgBAwEBPwEhP//EABgRAAIDAAAAAAAAAAAAAAAAAAAQERIh/9oACAECAQE/Adks/wD/xAAdEAEAAgICAwAAAAAAAAAAAAABABECMRASISJR/9oACAEBAAY/AvXcxMVV+8dqqW6g4vjgxdXEGi5//8QAGxABAAIDAQEAAAAAAAAAAAAAAQARITFBYXH/2gAIAQEAAT8ho314GobsZz8Ja1lXBSg+exG4jhFX6QdAUqLJAsE//9oADAMBAAIAAwAAABBgEEP/xAAZEQADAAMAAAAAAAAAAAAAAAAAAREQIWH/2gAIAQMBAT8QZTZO4Q//xAAWEQADAAAAAAAAAAAAAAAAAAAAEBH/2gAIAQIBAT8QYh//xAAcEAEBAQEBAQADAAAAAAAAAAABESEAUTFBYaH/2gAIAQEAAT8QFlpCLtgQ/W8lNNibu7PHvD+uIT7NCw28j5iVtVpjxMQ4Ev5+8cUMc8s6uaQBgHnFvQPgb3//2Q=="
                            alt="" />
                        <picture>
                            <source type="image/webp"
                                data-srcset="/static/5747dedcdaf90a14ea78a06e58e53e3b/18188/shawn-mccool.webp 75w,/static/5747dedcdaf90a14ea78a06e58e53e3b/c65bc/shawn-mccool.webp 150w,/static/5747dedcdaf90a14ea78a06e58e53e3b/078c3/shawn-mccool.webp 300w"
                                sizes="(min-width: 300px) 300px, 100vw" />
                            <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                loading="lazy"
                                data-src="/static/5747dedcdaf90a14ea78a06e58e53e3b/0fdf4/shawn-mccool.jpg"
                                data-srcset="/static/5747dedcdaf90a14ea78a06e58e53e3b/91a6d/shawn-mccool.jpg 75w,/static/5747dedcdaf90a14ea78a06e58e53e3b/96deb/shawn-mccool.jpg 150w,/static/5747dedcdaf90a14ea78a06e58e53e3b/0fdf4/shawn-mccool.jpg 300w"
                                alt="Shawn McCool" />
                        </picture><noscript>
                            <picture>
                                <source type="image/webp"
                                    srcset="
                                            /static/5747dedcdaf90a14ea78a06e58e53e3b/18188/shawn-mccool.webp  75w,
                                            /static/5747dedcdaf90a14ea78a06e58e53e3b/c65bc/shawn-mccool.webp 150w,
                                            /static/5747dedcdaf90a14ea78a06e58e53e3b/078c3/shawn-mccool.webp 300w
                                        "
                                    sizes="(min-width: 300px) 300px, 100vw" />
                                <img data-gatsby-image-ssr="" data-main-image="" style="opacity: 0"
                                    sizes="(min-width: 300px) 300px, 100vw" decoding="async"
                                    loading="lazy"
                                    src="static/5747dedcdaf90a14ea78a06e58e53e3b/0fdf4/shawn-mccool.jpg"
                                    srcset="
                                            static/5747dedcdaf90a14ea78a06e58e53e3b/91a6d/shawn-mccool.jpg  75w,
                                            static/5747dedcdaf90a14ea78a06e58e53e3b/96deb/shawn-mccool.jpg 150w,
                                            static/5747dedcdaf90a14ea78a06e58e53e3b/0fdf4/shawn-mccool.jpg 300w
                                        "
                                    alt="Shawn McCool" />
                            </picture>
                        </noscript>
                        <script type="module">
                                const t =
                                    "undefined" !=
                                        typeof HTMLImageElement &&
                                    "loading" in
                                        HTMLImageElement.prototype;
                                if (t) {
                                    const t =
                                        document.querySelectorAll(
                                            "img[data-main-image]"
                                        );
                                    for (let e of t) {
                                        e.dataset.src &&
                                            (e.setAttribute(
                                                "src",
                                                e.dataset.src
                                            ),
                                            e.removeAttribute(
                                                "data-src"
                                            )),
                                            e.dataset.srcset &&
                                                (e.setAttribute(
                                                    "srcset",
                                                    e.dataset
                                                        .srcset
                                                ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                ));
                                        const t =
                                            e.parentNode.querySelectorAll(
                                                "source[data-srcset]"
                                            );
                                        for (let e of t)
                                            e.setAttribute(
                                                "srcset",
                                                e.dataset.srcset
                                            ),
                                                e.removeAttribute(
                                                    "data-srcset"
                                                );
                                        e.complete &&
                                            (e.style.opacity = 1);
                                    }
                                }
                            </script>
                    </div>
                    <span class="font-medium mb-1">Shawn McCool</span><span
                        class="text-xs uppercase tracking-wider mb-2">Laravel Advocate &amp;
                        Developer</span>
                    <div class="flex gap-4">
                        <a href="https://github.com/ShawnMcCool" target="_blank" rel="noopener"
                            class="text-brand hover:underline">Github</a><a
                            href="https://twitter.com/shawnmccool" target="_blank" rel="noopener"
                            class="text-brand hover:underline">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-24 lg:py-32 bg-gradient-to-t from-gray-800/25 to-gray-900">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center max-w-[75ch] mx-auto mb-12 lg:mb-20">
                <h2
                    class="after:left-[50%] after:translate-x-[-50%] text-center font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-3xl lg:text-4xl mb-8 after:-bottom-4 text-gray-100">
                    Meetups que nous organisons
                </h2>
                <p class="text-xl lg:text-2xl">
                    Dev Chap parraine, assiste et participe à des conférences à la fois localement et dans le monde. Nous organisons même des rencontres locales. Rejoignez-nous!
                </p>
            </div>
            <div class="grid lg:grid-cols-3 gap-4 lg:gap-8">
                <div class="p-4 lg:p-8 rounded-lg border border-gray-800 flex flex-1 flex-col">
                    <div class="h-48 flex items-center justify-center mb-6 bg-gray-800 p-4 rounded">
                        <img src="static/32e919f037ffb196b2d80e82c1e6b3fd/gpug.svg"
                            class="w-32 max-h-24" alt="GPUG" />
                    </div>
                    <h1
                        class="after:left-0 font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-2xl lg:text-3xl mb-8 after:-bottom-3 text-gray-100">
                        GPUG
                    </h1>
                    <p class="text-base mb-8">
                        For all PHP developers who want to
                        dig a bit deeper into modern day
                        code, join us for discussions about
                        increasing your PHP skills in a
                        relaxed environment, supplied with
                        drinks, food, and fun!
                    </p>
                    <a href="#" target="_blank" rel="noopener"
                        class="text-brand hover:underline mt-auto">Voir</a>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="py-12 bg-gradient-to-tr from-gray-800/50 to-gray-900 border-t-2 border-gray-800">
    <div class="container mx-auto px-4 max-w-6xl text-center">
        <div class="text-center max-w-[75ch] mx-auto false mb-8">
            <h2
                class="after:left-[50%] after:translate-x-[-50%] text-center font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12, font-semibold relative after:content[&quot;&quot;] after:h-1 after:rounded-full after:bg-brand after:absolute after:w-12 text-3xl lg:text-4xl mb-8 after:-bottom-4 text-gray-100">
                A l'air intéressant?
            </h2>
            <p class="text-xl lg:text-2xl">
                Dev Chap embauche activement des développeurs à distance qui vivent en Europe, Afrique. Rejoignez-nous pour un appel de bienvenue aujourd'hui !
            </p>
        </div>
        <a class="w-full lg:w-auto min-w-[125px] rounded-lg bg-gradient-to-t from-brand to-brand-light px-4 py-3 font-semibold inline-flex cursor-pointer justify-center text-white uppercase tracking-wider text-sm transition-all shadow-brand/50 shadow-sm hover:shadow-lg hover:shadow-brand/25 border border-brand-light focus:ring focus:outline-none"
            href="{{ url('developer') }}">Travaille avec nous</a>
    </div>
</section>
@endsection
