import 'jquery';

const CONFIG = {
  ELEM: '[data-scroll-down]',
}

const smoothScroll = {
  init() {
    console.log('init');
    const { ELEM } = CONFIG;
    this.$elem = document.querySelector(ELEM);

    if (this.$elem) {
      this.addEvents();
    }
  },

  addEvents() {
    this.$elem.addEventListener('click', () => {
      console.log('test');
      const position = $('#cowork').offset().top;
      // use jquery magic to get there ;) <br />
      $('HTML, BODY').animate({ scrollTop: position }, 600);
    });
  },
}

export default smoothScroll;
