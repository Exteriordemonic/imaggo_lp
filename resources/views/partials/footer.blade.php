<footer class="footer section rellax" data-rellax-speed="0.5">
  <div class="container">
    <div class="footer__content">
        <header class="section__header">
          <h2 class="section-title headline">
            <span class="section-title__label text">
              Zapytaj o audyt lub ofertę
            </span>
            Napisz do nas
          </h2>
        </header>
        <form action="" class="footer__form form" method="POST">
          <label for="name" class="form__label text">
            Imię
          </label>
          <input id="name" name="name" type="text" class="form__input text">

          <label for="phone" class="form__label text">
            Numer telefonu
          </label>
          <input id="phone" name="phone" type="phone" class="form__input text">

          <label for="email" class="form__label text">
            Mail
          </label>
          <input required id="email" name="email" type="email" class="form__input text">

          <label for="website" class="form__label text">
            Adres strony
          </label>
          <input id="website" name="website" type="text" class="form__input text">

          <label for="message" class="form__label text">
            Wiadomość
          </label>
          <textarea id="message" name="message" type="text" rows="1" class="form__input text"></textarea>

          <input  class="button button--primary text" name="send" type="submit" value="Wyślij">
          <p class="form__terms text">
            Klikając wyślij akceptujesz
            <a class="link" href="https://imaggo.pl/polityka-cookies/">polityką prywatności.</a>
          </p>
        </form>
        <figure class="footer__img rellax" data-rellax-speed="-0.6">
          <img src="@asset('images/white-big.png')" alt="donat" class="footer__donat donat rellax" data-rellax-speed="0.6">
          <img src="@asset('images/contact-1.jpg')" alt="Zadzwoń do nas" class="img">
          <a class="footer__phone text" href="tel:+884 908 508">
            Maciej Ciesielski
            <br>
            <img src="@asset('images/phone.png')" alt="phone" class="phone">
            884 908 508
          </a>
        </figure>
    </div>
  </div>
</footer>
