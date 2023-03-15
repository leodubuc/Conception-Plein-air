export default class NoScroll {
  constructor(element) {
    this.element = element;

    this.init();
  }

  init() {
    const menuButton = document.querySelector('.menu-button');
    const menu = document.querySelector('.menu');

    menuButton.addEventListener('click', () => {
      menu.classList.toggle('open');
      document.body.classList.toggle('menu-open');
    });
  }
}
