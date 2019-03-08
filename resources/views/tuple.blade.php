<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/tuple.css') }}" rel="stylesheet">
</head>

<body class="bg-indigo-dark font-sans antialiased">
    <div class="border-t-8 border-indigo-dark" style="background-image: linear-gradient(-180deg, #FFFFFF 0%, #F4F6F9 100%);">
        <div class="container mx-auto px-6 pt-12 pb-20">
            <svg class="mb-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 52" width="140" height="52">
                <g>
                    <path fill="#1F2E41" d="M57.2 36V21.93h-4.68v-4.52h15.31v4.52h-4.7V36H57.2zm22.1.34c-5.43 0-8.5-2.7-8.5-8.01V17.41h5.88V28.1c0 2.41.52 3.61 2.63 3.61 2.08 0 2.6-1.2 2.6-3.64V17.41h5.93v10.87c0 5.59-3.33 8.06-8.53 8.06zM91.96 36V17.41h7.41c5.36 0 7.65 2.4 7.65 6.37v.1c0 3.88-2.58 6.06-7.39 6.06h-1.8V36h-5.87zm5.88-10.01h1.22c1.56 0 2.37-.7 2.37-2.08v-.1c0-1.43-.8-2-2.34-2h-1.25v4.18zM110.08 36V17.41h5.9v14.04h6.77V36h-12.67zm16 0V17.41h13.21v4.52h-7.33v2.63h5.82v4.13h-5.82v2.79h7.75V36h-13.63z"></path>
                    <polygon fill="#BFC6F1" points="8 18 32 10 32 52 8 44"></polygon>
                    <polygon fill="#4652AF" points="0 8 24 0 24 42 0 34"></polygon>
                </g>
            </svg>
            <div class="w-full lg:w-5/6">
                <div class="mb-8">
                    <h1 class="font-black text-black text-4xl md:text-5xl lg:text-6xl mb-4">
                        Remember when Slack stole<br> Screenhero from us?
                    </h1>

                    <p class="text-grey-darkest text-xl md:text-2xl lg:text-3xl leading-tight">
                        We do too, and it made us 😢.<br>
                        That's why we're on a mission to replace it.
                    </p>
                </div>
                <div class="text-grey-darkest text-base md:text-xl lg:text-xxl leading-normal mb-8">
                    {{-- <span class="block float-left w-10 h-10  md:w-12 mr-1 md:h-12 md:mr-2 mt-2 lg:mt-3" style="text-indent: -9000px; background: url('/images/tuple/drop-w.svg') 0 0 no-repeat;">W</span> --}}
                    {{--background: bg-image position bg-repeat;  --}}
                    <p class="mb-4 lg:mb-6">
                        <span class="block float-left w-10 md:w-12 h-10 md:h-12 mt-1 md:mt-2 mr-1 md:mr-2" style="background: url('/images/tuple/drop-w.svg') 0 0 no-repeat;"></span>
                        <span class="text-black uppercase font-semibold text-xs md:text-sm lg:text-base tracking-wide">HEN SLACK BOUGHT SCREENHERO,</span> we were sure someone new would come along to make a tool specifically for pair programming.
                    </p>

                    <p class="mb-4 lg:mb-6">But <span class="italic">four years</span> later, no one has.</p>

                    <p class="mb-4 lg:mb-6">That sucks, because the remaining tools like Skype and Hangouts don't give both people full keyboard and mouse control.</p>

                    <p class="mb-4 lg:mb-6">Have you ever tried to dictate some code for your pair to write? Or narrated a set of vim commands? <span class="italic">Not fun.</spn></p>

                    <p class="mb-4 lg:mb-6">Another problem: if you're going to type on a remote machine, the connection has to be super low-latency. This is the sort of thing that videoconferencing tools just don't care much about.</p>

                    <p class="mb-4 lg:mb-6">Since no one has built anything as close to as good as Screenhero was, we're building its spiritual successor.</p>

                    <p class="mb-4 lg:mb-6 text-black font-bold text-2xl tracking-normal">If you're sick of pairing over Skype or Hangouts, drop us your email and we’ll let you know when Tuple is ready.</p>

                    <form action="#" method="get" class="">
                        <div class="max-w-md md:flex items-center md:shadow-lg rounded-lg">
                            <input type="email" class="bg-white text-xl px-4 py-4 rounded-lg md:rounded-none md:rounded-l-lg w-full mb-4 md:mb-0 shadow-lg md:shadow-none" placeholder="dissatisfied-pair-programmer@slack.com">
                            <button class="w-full md:w-auto bg-indigo-dark uppercase text-white font-bold text-xl px-4 py-4 rounded-lg md:rounded-none md:rounded-r-lg flex-no-shrink mb-4 md:mb-0 shadow-lg md:shadow-none">stay in the loop</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto py-12">
        <div class="font-bold text-3xl text-white px-8 md:px-0 py-6 mb-2">Details we're sweating</div>
        <div class="md:flex md:-mx-8 mb-6">
            <div class="w-full md:w-1/2 flex mb-4 px-8">
                <svg class="mr-6 flex-no-shrink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54" width="54" height="54">
                    <g fill="none" stroke="#FFFFFF" stroke-linejoin="round" stroke-width="2" transform="translate(9 2)">
                        <path stroke-linecap="round" d="M2.81 27.96A18.12 18.12 0 0 1 6.46 4.4a18.67 18.67 0 0 1 24.12.03A18.12 18.12 0 0 1 34.16 28"></path>
                        <path d="M13.81 16.84a2.82 2.82 0 0 1 2.8-2.84c1.55 0 2.8 1.27 2.8 2.84v13.51l11 3.33A3.65 3.65 0 0 1 32.9 38s-2.1 11.36-2.39 13H13.36L4.78 37.96c-3.4-5.28 5.15-7.11 9.02 1.67l.01-22.79z"></path>
                    </g>
                </svg>
                <div>
                    <div class="text-white text-xl font-semibold mb-2">Full-time control for two</div>
                    <p class="text-blue-lighter text-lg leading-normal">Seamless mouse and keyboard control for both parties (not easy, but essential).</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex mb-4 px-8">
                <svg class="mr-6 flex-no-shrink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54" width="54" height="54">
                    <g fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(4 9)">
                        <rect width="6" height="12" y="24" rx=".5"></rect>
                        <rect width="6" height="18" x="10" y="18" rx=".5"></rect>
                        <rect width="6" height="24" x="20" y="12" rx=".5"></rect>
                        <rect width="6" height="30" x="30" y="6" rx=".5"></rect>
                        <rect width="6" height="36" x="40" rx=".5"></rect>
                    </g>
                </svg>
                <div>
                    <div class="text-white text-xl font-semibold">Snappy interactions</div>
                    <p class="text-blue-lighter text-lg leading-normal">An obsession with ridiculously low latency (extra not easy, extra-extra essential).</p>
                </div>
            </div>
        </div>
        <div class="md:flex md:-mx-8">
            <div class="w-full md:w-1/2 flex mb-4 px-8">
                <svg class="mr-6 flex-no-shrink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54" width="54" height="54">
                    <g fill="none" transform="translate(4 7)">
                        <rect width="46" height="40" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" rx="2"></rect>
                        <path stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M0 10h46"></path>
                        <path fill="#FFFFFF" fill-rule="nonzero" d="M6.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm6 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm6 0a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path>
                        <polyline stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="10 20 15 25 10 30"></polyline>
                        <path stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 26h8"></path>
                    </g>
                </svg>
                <div>
                    <div class="text-white text-xl font-semibold mb-2">Command-line friendly</div>
                    <p class="text-blue-lighter text-lg leading-normal">A proper command-line interface (lol if your pairing tool isn't command-line driven).</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex mb-4 px-8">
                <svg class="mr-6 flex-no-shrink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 54" width="54" height="54">
                    <g fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(3 7)">
                        <ellipse cx="24" cy="15" rx="6" ry="3"></ellipse>
                        <ellipse cx="24" cy="3" rx="6" ry="3"></ellipse>
                        <ellipse cx="38" cy="9" rx="6" ry="3"></ellipse>
                        <ellipse cx="11" cy="9" rx="6" ry="3"></ellipse>
                        <path d="M19.47 4.97l-4.3 1.87m18.22.24l-4.87-2.11m-22.37 5.8l-3.95 1.7A2 2 0 0 0 1 14.32v13.4a2 2 0 0 0 1.17 1.82l20.03 9.11a2 2 0 0 0 1.6.03l21.97-9.16A2 2 0 0 0 47 27.67V14.3a2 2 0 0 0-1.2-1.83L42.4 11M23 23v15.82m23.63-25.67L23 23m0 0L1.36 13.16"></path>
                    </g>
                </svg>
                <div>
                    <div class="text-white text-xl font-semibold">Pluginability</div>
                    <p class="text-blue-lighter text-lg leading-normal">A plugin system to let you customize your experience.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-black">
        <div class="container mx-auto py-12 text-white">
            <div class="px-8 md:px-0">
                <h1 class="font-semibold md:font-extrabold mb-8">Frequently asked questions</h1>
                <div class="md:flex text-lg py-8 border-t-2 border-grey-darkest leading-normal">
                    <p class="w-full md:w-2/5 font-semibold mb-2 md:mb-0">What exactly are you making?</p>
                    <p class="w-full md:w-3/5 text-blue-lighter">A tool for programmers to pair on the same machine regardless of how far apart they are. Both people will have full control
                    of the machine with their own mouse and keyboard. We also plan to spend a ridiculous amount of effort on making things super
                    low-latency. That's the sort of thing Skype will never care about, but makes an enormous difference when trying to type on
                    a remote machine.</p>
                </div>
                <div class="md:flex text-lg py-8 border-t-2 border-grey-darkest leading-normal">
                    <p class="w-full md:w-2/5 font-semibold mb-2 md:mb-0">And who are you guys?</p>
                    <p class="w-full md:w-3/5 text-blue-lighter">
                        <a href="#" class="text-white font-semibold">Ben</a>, 
                        <a href="#" class="text-white font-semibold">Joel</a>, and 
                        <a href="#" class="text-white font-semibold">Spencer</a>;
                        three programmers who aren't happy with the options for remote pairing out there.</p>
                </div>
                <div class="md:flex text-lg py-8 border-t-2 border-grey-darkest leading-normal">
                    <p class="w-full md:w-2/5 font-semibold mb-2 md:mb-0">What do you guys look like?</p>
                    <div class="w-full md:w-3/5">
                        <img src="/images/tuple/image.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>