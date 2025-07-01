if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('swfeed.js').then(function(registration) {
      //Once Service Worker (swfeed.js) is registered, nothing special is done.
    }, function(err) {
      //If Service Worker (swfeed.js) registration fails, log it to the browser.
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}