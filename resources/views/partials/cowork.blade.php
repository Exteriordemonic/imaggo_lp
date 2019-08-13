@php
  $coworkers = [
    'Sopocka szkoła wyższa',
    'Neo dentist',
    'Moderna',
    'Piekarnia-cukiernia Rogalik',
    'Manufaktura komiksów',
    'Constraco',
    'Jmmuno zdrowie',
    'Pas Com',
  ];
@endphp

<section class="cowork section" id="cowork">
  <div class="container container--clear-right ">
    <header class="section__header">
      <h2 class="section-title title rellax" data-rellax-speed="0.4">
        <span class="section-title__label section-title__label--special text">
          Klienci
        </span>
        Wciąż nam ufają
      </h2>
    </header>
    <ul class="cowork__list">
      @foreach ($coworkers as $item)
        <li class="cowork__elem">
          <img class="cowork__logo" src="@asset('images/coworkers/'. $loop->index .'.png')" alt="{{ $item }}">
        </li>
      @endforeach
    </ul>
  </div>
</section>
