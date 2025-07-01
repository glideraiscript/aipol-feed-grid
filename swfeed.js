'use strict';

// Cache name for version control
const CACHE_NAME = '[Cache Name]';

// Resources to pre-cache
const STATIC_ASSETS = [
  '/',
  'AiPolFeed.php',
  'offline.html',
  'indexfeed.js',
  'manifestfeed.json',
  'swfeed.js',
  'app.min.js',
  '/js/cookie-banner.js',
  '/css/feed.css',
  'favicon.ico',
  'android-chrome-192x192.png',
  'android-chrome-512x512.png',
  'apple-touch-icon.png',
  'favicon-16x16.png',
  'favicon-32x32.png',
  'ico.png',
  'ms-icon-144x144.png',
  'ms-icon-150x150.png'
];

// Install event - cache static assets
self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => cache.addAll(STATIC_ASSETS))
            .catch(error => console.error('Cache addAll failed:', error))
    );
});

// Fetch event - network-first strategy with improved error handling
self.addEventListener('fetch', function(event) {
  const url = new URL(event.request.url);

  // ❌ Ignora richieste a Pollinations
  if (url.hostname === 'image.pollinations.ai') return;


  // ✅ Gestione normale per il resto
  if (event.request.method !== 'GET') return;

  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});


// Network-first function with cache fallback
async function networkFirst(request) {
    try {
        const isRangeRequest = request.headers.has('range');
        if (isRangeRequest) {
            return fetch(request);
        }

        const response = await fetch(request);

        const url = new URL(request.url);
        if (
            response.ok &&
            response.type === 'basic' &&
            (url.protocol === 'http:' || url.protocol === 'https:')
        ) {
            try {
                const cache = await caches.open(CACHE_NAME);
                await cache.put(request, response.clone());
            } catch (error) {
                // console.error('Cache put failed:', error);
            }
        }

        return response;
    } catch (error) {
        const cachedResponse = await caches.match(request);
        if (cachedResponse) {
            return cachedResponse;
        }

        throw error;
    }
}


// Clean up old caches
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys()
            .then(cacheNames => {
                return Promise.all(
                    cacheNames.map(cacheName => {
                        if (cacheName !== CACHE_NAME) {
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
    );
});