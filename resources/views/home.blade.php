
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three First Names & Associates - CTV Advertising Consulting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'smoky-black': '#100B00',
                        'indigo': '#440381',
                        'blue-violet': '#8338EC',
                        'sapphire': '#0056BF',
                        'sapphire-dark': '#00449E',
                    },
                    fontFamily: {
                        'sans': ['Open Sans', 'sans-serif'],
                        'rubik': ['Rubik', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Rubik:wght@400;500;700&display=swap');
    </style>
</head>
<body class="h-full bg-white dark:bg-smoky-black text-smoky-black dark:text-white font-sans" x-data="{ darkMode: false }" :class="{ 'dark': darkMode }">
<button @click="darkMode = !darkMode" class="fixed top-4 right-4 z-50 p-2 bg-gray-200 dark:bg-gray-800 rounded-full">
    <svg x-show="!darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
    </svg>
    <svg x-show="darkMode" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
    </svg>
</button>

<header class="bg-gray-100 dark:bg-gray-800 py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-rubik font-bold text-indigo dark:text-blue-violet text-center">Three First Names & Associates</h1>
        <p class="text-blue-violet dark:text-sapphire text-center mt-2">Navigating the Future of Connected TV Advertising</p>
    </div>
</header>

<main class="container mx-auto px-4 py-8">
    <section class="mb-8">
        <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">About Us</h2>
        <p>With nearly a decade of experience in media & advertising, Three First Names & Associates is a consulting firm dedicated to helping the ad industry excel in Connected TV (CTV). Our unique perspective spans traditional TV ad sales, distribution, media rights, and the technical intricacies of programmatic advertising for CTV.</p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Why Choose Us?</h2>
        <p>As CTV ad spend is projected to reach $44.3 billion by 2028, partnering with experts who understand both traditional TV and CTV is crucial. We help companies navigate the fragmented TV landscape, optimize their ad spend, and gain a competitive edge in the rapidly evolving world of CTV advertising.</p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-indigo dark:text-blue-violet mb-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
                <h3 class="text-xl font-rubik font-semibold mb-2">CTV Media Optimization</h3>
                <p>Maximize ROI with full-funnel, data-driven insights</p>
            </div>
            <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-indigo dark:text-blue-violet mb-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                </svg>
                <h3 class="text-xl font-rubik font-semibold mb-2">Technical Program Management</h3>
                <p>Get hands-on technical support, from troubleshooting coordination to API data integrations</p>
            </div>
            <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-indigo dark:text-blue-violet mb-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
                <h3 class="text-xl font-rubik font-semibold mb-2">Data Privacy Compliance</h3>
                <p>Stay ahead of privacy regulations and ensure compliant data strategies</p>
            </div>
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">Partnerships</h2>
        <p>We're proud to partner with Le Moyne Consulting for technical resources and ComplySAM for secure and compliant data handling.</p>
    </section>

    <section class="mb-8">
        <h2 class="text-2xl font-rubik font-semibold text-indigo dark:text-blue-violet mb-4">TFN Music Services</h2>
        <p>We're building a network to connect independent artists with music licensing opportunities, enhancing CTV ad experiences through personalized, context-matching music.</p>
    </section>

    <section class="text-center mt-8">
        <a href="#contact" class="inline-block bg-sapphire hover:bg-sapphire-dark dark:bg-blue-violet dark:hover:bg-indigo text-white font-rubik py-2 px-6 rounded transition duration-300">Contact Us</a>
    </section>
</main>

<footer class="bg-gray-100 dark:bg-gray-800 py-6 mt-12">
    <div class="container mx-auto px-4 text-center">
        <p>&copy; 2024 Three First Names & Associates. All rights reserved.</p>
    </div>
</footer>
</body>
</html><script>
    (function() {
        var ws = new WebSocket('ws://' + window.location.host +
            '/jb-server-page?reloadMode=RELOAD_ON_SAVE&'+
            'referrer=' + encodeURIComponent(window.location.pathname));
        ws.onmessage = function (msg) {
            if (msg.data === 'reload') {
                window.location.reload();
            }
            if (msg.data.startsWith('update-css ')) {
                var messageId = msg.data.substring(11);
                var links = document.getElementsByTagName('link');
                for (var i = 0; i < links.length; i++) {
                    var link = links[i];
                    if (link.rel !== 'stylesheet') continue;
                    var clonedLink = link.cloneNode(true);
                    var newHref = link.href.replace(/(&|\?)jbUpdateLinksId=\d+/, "$1jbUpdateLinksId=" + messageId);
                    if (newHref !== link.href) {
                        clonedLink.href = newHref;
                    }
                    else {
                        var indexOfQuest = newHref.indexOf('?');
                        if (indexOfQuest >= 0) {
                            // to support ?foo#hash
                            clonedLink.href = newHref.substring(0, indexOfQuest + 1) + 'jbUpdateLinksId=' + messageId + '&' +
                                newHref.substring(indexOfQuest + 1);
                        }
                        else {
                            clonedLink.href += '?' + 'jbUpdateLinksId=' + messageId;
                        }
                    }
                    link.replaceWith(clonedLink);
                }
            }
        };
    })();
</script>
