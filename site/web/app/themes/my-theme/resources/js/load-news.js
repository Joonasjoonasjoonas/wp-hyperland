class LoadNews {
    constructor() {
      this.button = document.getElementById('load-more');
      this.container = document.getElementById('news-cards');
  
      if (this.button && this.container) {
        this.button.addEventListener('click', () => this.load());
      }
    }
  
    load() {
      // Show all hidden news cards
      const hiddenCards = this.container.querySelectorAll('.news-card.hidden');
      
      hiddenCards.forEach(card => {
        card.classList.remove('hidden');
      });

      // Hide the button
      this.button.classList.add('hidden');
    }
}

export default LoadNews;
  