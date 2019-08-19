@php
  $coworkers = [
    [
      'name'=>'Sopocka szkoła wyższa',
      'src'=>'SSW-logo.jpg'
    ],
    [
      'name'=>'Neo dentist',
      'src'=>'neodentis_logo.png'
    ],
    [
      'name'=>'Moderna',
      'src'=>'moderna_superior_living_logo-1.jpg'
    ],
    [
      'name'=>'Piekarnia-cukiernia Rogalik',
      'src'=>'piekarnia_rogalik_logo.jpg'
    ],
    [
      'name'=>'Manufaktura komiksów',
      'src'=>'logo_manufaktura_kominków.png'
    ],
    [
      'name'=>'Constraco',
      'src'=>'constraco_logo.png'
    ],
    [
      'name'=>'Jmmuno zdrowie',
      'src'=>'immunozdrowie_logo.jpg'
    ],
    [
      'name'=>'Pas Com',
      'src'=>'pascom_logo.jpg'
    ],
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
          <img class="cowork__logo" src="@asset('images/coworkers/'. $item['src'])" alt="{{ $item['name'] }}">
        </li>
      @endforeach
    </ul>
  </div>
</section>
