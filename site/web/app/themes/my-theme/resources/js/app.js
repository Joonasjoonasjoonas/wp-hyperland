import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import LoadNews from './load-news';

document.addEventListener('DOMContentLoaded', () => {
  new LoadNews();
});
