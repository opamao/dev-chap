<header class="bg-gray-900 sticky top-0 z-40 shadow-xl border-b-2 border-gray-800 text-gray-300">
    <div class="container mx-auto px-4 max-w-6xl">
        <nav class="flex items-center h-20 font-semibold">
            <a aria-current="page" class="focus:ring mr-auto" aria-label="Home"
                href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 931.42 235.11" class="h-10">
                    <path
                        d="M39.43 235.11C17.32 235.11 0 217.3 0 194.56v-154C0 17.81 17.32 0 39.43 0a39.7 39.7 0 0 1 4.48.25L169.7 14c18.17 2 32.4 19.72 32.4 40.38v126.39c0 20.66-14.23 38.39-32.4 40.37L43.91 234.86a39.7 39.7 0 0 1-4.48.25zm0-215.87c-11.51 0-20.19 9.16-20.19 21.31v154c0 12.15 8.68 21.31 20.19 21.31a21.57 21.57 0 0 0 2.4-.13L167.61 202c8.27-.9 15.25-10.63 15.25-21.25V54.34c0-10.62-7-20.35-15.25-21.25L41.83 19.37a21.7 21.7 0 0 0-2.4-.13z"
                        style="fill: #e26700"></path>
                    <path
                        d="M154.54 70c-1.28-7.18-6.74-14-14-15.54-6.8-1.4-13.89 2.32-17.07 9.3-3.84 8.42-1.35 19.2 5.73 24.79a2.4 2.4 0 0 1 1 2.38c-.13 1.42-.15 2.87-.29 4.29-.89 8.65-4.63 15.16-11.69 19.08a77.63 77.63 0 0 1-8.86 4.15c-5.52 2.22-11.17 4.26-16.86 6.45-1.14.43-2.23 1-3.44 1.58 0-.49-.06-.82-.06-1.15V75.91A2 2 0 0 1 90.06 74c7.56-5.21 10.21-15.87 6.26-24.9-4.07-9.33-13.86-14.66-22.84-12-7.41 2.22-12 7.59-12.91 16A21.28 21.28 0 0 0 68.92 73a2.67 2.67 0 0 1 1.22 2.37q-.06 42.15 0 84.3a2.64 2.64 0 0 1-1.14 2.41c-7.72 5.82-10.76 16.84-7 25.5 3.83 8.9 13.16 13.17 22 10 7.4-2.63 12.14-8.14 13.73-16.2s-.61-14.71-6.5-19.4c-2-1.56-2.3-3.13-2.2-5.46.24-5.3 2.4-9.2 6.87-11.44 3-1.5 6-3 9.05-4.22 6.84-2.76 13.69-5.13 20-8.74a40.38 40.38 0 0 0 17.74-19.79A56.71 56.71 0 0 0 146.75 92c0-1.08 0-2 1-2.76 5.49-4.04 8.13-11.69 6.79-19.24zM79.73 188.36c-5.26.44-9.6-3.85-9.59-9.53s4.25-10.35 9.49-10.67 9.3 4 9.32 9.45-4.1 10.33-9.22 10.75zm0-121.4c-5.28-.26-9.58-5.07-9.57-10.77s4.27-9.8 9.5-9.44S89 51.92 89 57.41s-4.18 9.81-9.29 9.59zm58.8 15.79c-4.58-.24-8.3-4.67-8.29-9.94s3.77-9.29 8.35-9 8.19 4.68 8.2 9.84-3.73 9.35-8.28 9.1z"
                        style="fill: #e26700"></path>
                    <path style="fill: #fff"
                        d="M299 192.29l-63.34-151h43.74l30.23 84.49q.4 1.33 1.7 6.45t3.34 13.77q1.65-6.91 3.1-12.48t2.16-7.74l30-84.49h43.74l-63.34 151zM393.89 192.29v-151h92.53v33.1H434v26.2h52.42V133H434v25.48h52.4v33.83zM498.06 192.29v-151h41.16V100h54.87V41.27h41.27v151h-41.27v-61.46h-54.87v61.48zM647.34 192.29v-151h41.57v151zM701 192.29v-151h40.75v68.6l47.76-68.6h48l-55.81 73.66 57.64 77.36h-51.41l-46.18-67.77v67.77z">
                    </path>
                    <path style="fill: #fff" d="M839.1 192.29v-151h41.16V157h51.16v35.27z"></path>
                </svg>
            </a>
            <a aria-current="page"
                class="after:transition-all uppercase p-2 tracking-wider text-sm transition-all relative mr-2 last-of-type:mr-0 hover:text-brand {{ Request::is('/') ? 'after:content-[&#x27;&#x27;] after:h-[2px] after:w-full after:bg-brand after:absolute after:bottom-[-24px] after:left-0 after:right:0 after:rounded after:opacity-1 text-brand' : '' }}"
                href="{{ url('/') }}">Accueil</a>
                <a
                class="after:transition-all uppercase p-2 tracking-wider text-sm transition-all relative mr-2 last-of-type:mr-0 hover:text-brand {{ Request::is('comment') ? 'after:content-[&#x27;&#x27;] after:h-[2px] after:w-full after:bg-brand after:absolute after:bottom-[-24px] after:left-0 after:right:0 after:rounded after:opacity-1 text-brand' : '' }}"
                href="{{ url('comment') }}">Comment nous travaillons</a>
                <a
                class="after:transition-all uppercase p-2 tracking-wider text-sm transition-all relative mr-2 last-of-type:mr-0 hover:text-brand {{ Request::is('equipe') ? 'after:content-[&#x27;&#x27;] after:h-[2px] after:w-full after:bg-brand after:absolute after:bottom-[-24px] after:left-0 after:right:0 after:rounded after:opacity-1 text-brand' : '' }}"
                href="{{ url('equipe') }}">Équipe</a>
                <a
                class="after:transition-all uppercase p-2 tracking-wider text-sm transition-all relative mr-2 last-of-type:mr-0 hover:text-brand {{ Request::is('embauche') ? 'after:content-[&#x27;&#x27;] after:h-[2px] after:w-full after:bg-brand after:absolute after:bottom-[-24px] after:left-0 after:right:0 after:rounded after:opacity-1 text-brand' : '' }}{{ Request::is('developer') ? 'after:content-[&#x27;&#x27;] after:h-[2px] after:w-full after:bg-brand after:absolute after:bottom-[-24px] after:left-0 after:right:0 after:rounded after:opacity-1 text-brand' : '' }}"
                href="{{ url('embauche') }}">Nous embauchons!</a>
            <a class="ml-2 uppercase p-2 px-3 tracking-wider text-sm background-transparent transition-all relative mr-2 last-of-type:mr-0 border border-gray-800 rounded flex items-center hover:border-brand {{ Request::is('contact') ? 'text-white border-brand' : '' }}"
                href="{{ url('contact') }}">Contact<svg xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    aria-hidden="true" class="w-4 h-4 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </nav>
    </div>
</header>
