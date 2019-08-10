@php
  $points = [
    array(
      'title'=>'Jesteśmy <br> skuteczni',
      'dsc'=>'90% klientów współpracuje
z nami od ponad roku, stale odnosząc korzyści
z prowadzonych przez nas kampanii.',
    ),
    array(
      'title'=>'Co dwie głowy to nie jedna',
      'dsc'=>'nad Twoją kampanią, oprócz Twojego opiekuna pracuje również analityk, co zapewni Ci dokładniejszą optymalizację kosztów.',
    ),
    array(
      'title'=>'Test to stan permanentny',
      'dsc'=>'trendy na rynku ulegają ciągłym zmianom - nie pozostajemy bierni, Testy
i poszukiwanie nowych form oraz fraz to stały element każdej naszej kampanii.
',
    ),
    array(
      'title'=>'100% <br> analityki',
      'dsc'=>'każda kampania ma określony cel - dokładnie mierzymy koszty osiągnięcia tych celów, analizujemy ruch na stronie
i zachowanie użytkowników.',
    ),
  ];
@endphp

<section class="about section">
  <img src="@asset('images/special.png')" alt="donat" class="about__donat donat">
  <div class="container container--clear-left ">
    <header class="section__header">
      <h2 class="section-title title rellax" data-rellax-speed="0.4">
        <span class="section-title__label section-title__label--special text">
          Dowiedz się
        </span>
        Dlaczego my
      </h2>
    </header>
    <ul class="about__list">
      @foreach ($points as $item)
        <li class="about__elem rellax" data-rellax-speed="-0.2">
          <span class="about__num">
            <img src="@asset('images/special.png')" alt="donat" class="about__num-donat donat">
            <span class="about__num-single">
              {{ $loop->index + 1 }}
            </span>
          </span>
          <h3 class="about__subtitle subtitle">
            {!! $item['title'] !!}
          </h3>
          <p class="text">
            {!! $item['dsc'] !!}
          </p>
        </li>
      @endforeach
    </ul>
  </div>
</section>
