document.addEventListener('DOMContentLoaded', () => {
  const button = document.querySelector('[data-nav-toggle]');
  const nav = document.querySelector('[data-nav]');
  if (!button || !nav) return;
  button.addEventListener('click', () => {
    const open = nav.classList.toggle('open');
    button.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
});

