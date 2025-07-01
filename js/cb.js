document.addEventListener('DOMContentLoaded', () => {
  const banner = document.getElementById('cookie-banner');
  const acceptBtn = document.getElementById('cookie-accept');
  const declineBtn = document.getElementById('cookie-decline');

  const consent = localStorage.getItem('cookie-consent');

  // Mostra banner se consenso non presente
  if (!consent) {
    banner.classList.remove('hidden');
  }

  acceptBtn.addEventListener('click', () => {
    localStorage.setItem('cookie-consent', 'accepted');
    banner.classList.add('hidden');
  });

  declineBtn.addEventListener('click', () => {
    localStorage.setItem('cookie-consent', 'declined');
    banner.classList.add('hidden');
  });
});
