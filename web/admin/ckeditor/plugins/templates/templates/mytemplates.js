CKEDITOR.addTemplates("default", {
    imagesPath: CKEDITOR.getUrl(CKEDITOR.plugins.getPath("templates") + "templates/images/"),
    templates: [
        {
            title: "Проект арди|Факты",
            image: "1.png",
            description: "h5",
            html: `<div class="content__block">
                    <div class="container">
                      <div class="content__facts content__narrow">
                        <div class="facts">
                          <ul>
                            <li>
                              <h5>330 000 000 тенге</h5>
                              <p>на открытие Центра</p>
                            </li>
                            <li>
                              <h5>300 детей</h5>
                              <p>с диганозом ДЦП от 0 до 14 лет занимаются в Центре</p>
                            </li>
                          </ul>
                        </div>
                      </div> <!-- .content__facts -->
                    </div><!-- .container -->
                  </div>`
        },
        {
            title: "Проект арди|Цель проекта",
            image: "2.png",
            description: "h4. ID:#target",
            html: `<div class="content__block" id="target">
                    <div class="container">
                      <h4 class="content__title content__title--close">Цель проекта</h4>
                      <article class="article content__slim">
                        <p> Центр был создан, чтобы&nbsp;аккумулировать лучшие отечественные и мировые методики, проводить непрерывную интенсивную реабилитацию и Occupation-терапию. Особое внимание уделяется проекту «Раннее вмешательство». </p>
                        <p> Задача национальной важности — подготовка квалифицированных специалистов. Поэтому&nbsp;на&nbsp;базе центра&nbsp;создается&nbsp; ресурсно-образовательный центр для обучения специалистов со всего Казахстана лучшим мировым практикам в области реабилитации детей с ДЦП. </p>
                      </article>
                    </div>
                  </div>`
        },
        {
            title: "Проект арди|Контакты",
            image: "3.png",
            description: "h4",
            html: `<div class="content__block">
                    <div class="container">
                      <h4 class="content__title content__title--close">Контакты АРДИ для записи в центр</h4>
                      <article class="article content__slim">
                        <p>+7&nbsp;(727)&nbsp;292 48 99,&nbsp;292 41 49</p>
                        <p><a href="mailto:support@ardi.kz">support@ardi.kz</a></p>
                      </article>
                    </div>
                  </div>`
        },
        {
            title: "Проект арди|Факты с названием",
            image: "4.png",
            description: "h5",
            html: `<div class="content__block">
                    <div class="container">
                      <div class="content__facts content__narrow">
                        <div class="facts">
                          <h5 class="facts__title">Факты о ДЦП в Казахстане</h5>
                          <ul>
                            <li>
                              <h5>14 000 детей с ДЦП</h5>
                              <p>официально зарегистрировано в Казахстане</p>
                            </li>
                            <li>
                              <h5>каждые 84 из 100 000 детей</h5>
                              <p>имеют этот диагноз</p>
                            </li>
                          </ul>
                        </div>
                      </div> <!-- .content__facts -->
                    </div>
                  </div>`
        },
        {
            title: "Проект арди|Параграф",
            image: "5.png",
            description: "p",
            html: `<div class="content__block">
                    <div class="container">
                      <article class="article content__slim">
                        <p>Алматы и Астана — города с максимальным уровнем заболеваемости ДЦП: 150 и 120 человек соответственно на 100 000 населения до 14 лет.</p>
                        <p>Среди регионов по этому показателю лидируют Атырауская и Жамбылская области: 108,3 и 107 человек соответственно на 100 000 населения до 14 лет.</p>
                      </article>
                    </div>
                  </div>`
        },
        {
            title: "Проект арди|Слайдер с задним фоном изображение",
            image: "6.png",
            description: "div",
            html: `<div class="content__block content__slider" data-scroll>
        <div class="content__slider-back">
          <img src="/images/projects/ardi-slider-bg.png" alt="Фон">
        </div>
        <div class="container">
          <div class="slider slider--full slider--shadow">
            <div class="swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- просто для loop -->
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="/swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
                <figure class="swiper-slide">
                  <img src="/pics/projects/ardi/gal1.jpg" alt="Описание" class="partner__logo">
                </figure>
              </div>
            </div>
            <div class="slider__controls slider__controls--center">
              <button type="button" class="button button--arrow button--prev">
                <svg class="svg-icon svg-icon-arrow">
                  <use xlink:href="/images/sprite.svg#svg-icon-arrow"></use>
                </svg>
              </button>
              <div class="slider__counter">
                <span class="_current">1</span> / <span class="_all">1</span>
              </div>
              <button type="button" class="button button--arrow button--next">
                <svg class="svg-icon svg-icon-arrow">
                  <use xlink:href="/images/sprite.svg#svg-icon-arrow"></use>
                </svg>
              </button>
            </div><!-- .slider__controls -->
          </div><!-- .container -->
        </div>
      </div>`
        },
        {
            title: "АУТИЗМ|Факты",
            image: "7.png",
            description: "h5",
            html: `<div class="content__block">
        <div class="container">
          <div class="content__facts">
            <div class="facts facts--4">
              <ul>
                <li>
                  <h5>6483</h5>
                  <p>детей записано в «Асыл Мирас»</p>
                </li>
                <li>
                  <h5>70%</h5>
                  <p>записанных детей прошли диагностическую службу «Асыл Мирас»</p>
                </li>
                <li>
                  <h5>74%</h5>
                  <p>детей, у которых подтвердился РАС, получили помощь в программах интервенции</p>
                </li>
                <li>
                  <h5>В 2 раза</h5>
                  <p>в среднем улучшился навык у детей в программах интервенции</p>
                </li>
              </ul>
            </div>
          </div> <!-- .content__facts -->
        </div>
      </div>`
        },
        {
            title: "АУТИЗМ|КАК РАБОТАЕТ",
            image: "8.png",
            description: "h4",
            html: `<div class="content__block">
                    <div class="container">
                      <div class="project-autism__chart content__chart">
                        <h4 class="content__title content__title--center ">Как работает аутизм центр «АСЫЛ МИРАС»?</h4>
                        <figure class="chart chart--image">
                          <img src="/images/projects/autism/chart-arrows.png" srcset="images/projects/autism/chart-arrows@2x.png 2x" alt="Диаграмма Аутизм центр «АСЫЛ МИРАС»">
                        </figure>
                      </div>
                    </div><!-- .container -->
                  </div>`
        },
        {
            title: "АУТИЗМ|Центры",
            image: "9.png",
            description: "h4",
            html: `<div class="content__block">
        <div class="container">
          <h4 class="content__title content__title--center content__title--close">Центры для детей с аутизмом</h4>
          <div class="content__tabs contacts__tabs" data-tab-component="">
            <nav class="nav nav--tabs" data-tabs="">
              <ul>
                <li><a href="#city1" data-tab="" data-geo="43.224144, 76.931011" class="nav__link js-map-toggle">Алматы</a></li>
                <li><a href="#city2" data-tab="" data-geo="49.948759, 82.628459" class="nav__link js-map-toggle">Усть-Каменогорск</a></li>
                <li><a href="#city3" data-tab="" data-geo="51.128207, 71.430411" class="nav__link js-map-toggle">Астана</a></li>
                <li><a href="#city4" data-tab="" data-geo="44.842557, 65.502545" class="nav__link js-map-toggle">Кызылорда</a></li>
                <li class="active"><a href="#city5" data-tab="" data-geo="51.203980, 51.370375" class="nav__link js-map-toggle active">Уральск</a></li>
                <li><a href="#city6" data-tab="" data-geo="" class="nav__link js-map-toggle">Актобе</a></li>
              </ul>
            </nav>
            <div class="contacts__info">
              <figure class="contacts__image">
                <img src="/images/projects/autism/autism-contact.jpg" alt="Описание">
              </figure>
              <div class="tab-panels contacts__city contacts__city--centers" data-tabs-content="">
                <div class="tab-panels__item" data-tabs-pane="" id="city1">
                  <ul>
                    <li>
                      <h6>Руководитель:</h6>
                      <p>Елена Кузембаева</p>
                    </li>
                    <li>
                      <h6>Адрес:</h6>
                      <p>г. Алматы, Республика Казахстан, 050013 ул. Попова, 27</p>
                    </li>
                    <li>
                      <h6>Электронная почта:</h6>
                      <p><a href="mailto:rehab@utemuratovfund.org">rehab@utemuratovfund.org</a></p>
                    </li>
                    <li>
                      <h6>Контакты:</h6>
                      <p>+7 (727) 321-04-62 (14)</p>
                    </li>
                  </ul>
                </div>
                <div class="tab-panels__item" data-tabs-pane="" id="city2">
                  <ul>
                    <li>
                      <h6>Руководитель:</h6>
                      <p>Имя руководителя в Усть-Каменогорск</p>
                    </li>
                    <li>
                      <h6>Адрес:</h6>
                      <p>Республика Казахстан, г. Усть-Каменогорск, ул.Кунаева, 77, БЦ Park View</p>
                    </li>
                    <li>
                      <h6>Электронная почта:</h6>
                      <p><a href="mailto:rehab@utemuratovfund.org">rehab@utemuratovfund.org</a></p>
                    </li>
                    <li>
                      <h6>Контакты:</h6>
                      <p>+7 (727) 321-04-62 (14)</p>
                    </li>
                  </ul>
                </div>
                <div class="tab-panels__item" data-tabs-pane="" id="city3">
                  <ul>
                    <li>
                      <h6>Руководитель:</h6>
                      <p>Имя руководителя в Астана</p>
                    </li>
                    <li>
                      <h6>Адрес:</h6>
                      <p>Республика Казахстан, г. Астана, ул.Кунаева, 77, БЦ Park View</p>
                    </li>
                    <li>
                      <h6>Электронная почта:</h6>
                      <p><a href="mailto:rehab@utemuratovfund.org">rehab@utemuratovfund.org</a></p>
                    </li>
                    <li>
                      <h6>Контакты:</h6>
                      <p>+7 (727) 321-04-62 (14)</p>
                    </li>
                  </ul>
                </div>
                <div class="tab-panels__item" data-tabs-pane="" id="city4">
                  <ul>
                    <li>
                      <h6>Руководитель:</h6>
                      <p>Имя руководителя в Кызылорда</p>
                    </li>
                    <li>
                      <h6>Адрес:</h6>
                      <p>Республика Казахстан, г. Кызылорда, ул.Кунаева, 77, БЦ Park View</p>
                    </li>
                    <li>
                      <h6>Электронная почта:</h6>
                      <p><a href="mailto:rehab@utemuratovfund.org">rehab@utemuratovfund.org</a></p>
                    </li>
                    <li>
                      <h6>Контакты:</h6>
                      <p>+7 (727) 321-04-62 (14)</p>
                    </li>
                  </ul>
                </div>
                <div class="tab-panels__item active" data-tabs-pane="" id="city5" tabindex="-1" data-tab-focused="true">
                  <ul>
                    <li>
                      <h6>Руководитель:</h6>
                      <p>Имя руководителя в Уральск</p>
                    </li>
                    <li>
                      <h6>Адрес:</h6>
                      <p>Республика Казахстан, г. Уральск, ул.Кунаева, 77, БЦ Park View</p>
                    </li>
                    <li>
                      <h6>Электронная почта:</h6>
                      <p><a href="mailto:rehab@utemuratovfund.org">rehab@utemuratovfund.org</a></p>
                    </li>
                    <li>
                      <h6>Контакты:</h6>
                      <p>+7 (727) 321-04-62 (14)</p>
                    </li>
                  </ul>
                </div>
                <div class="tab-panels__item" data-tabs-pane="" id="city6">
                  <ul>
                    <li>
                      <h6>Руководитель:</h6>
                      <p>Имя руководителя в Актобе</p>
                    </li>
                    <li>
                      <h6>Адрес:</h6>
                      <p>Республика Казахстан, г. Актобе, ул.Кунаева, 77, БЦ Park View</p>
                    </li>
                    <li>
                      <h6>Электронная почта:</h6>
                      <p><a href="mailto:rehab@utemuratovfund.org">rehab@utemuratovfund.org</a></p>
                    </li>
                    <li>
                      <h6>Контакты:</h6>
                      <p>+7 (727) 321-04-62 (14)</p>
                    </li>
                  </ul>
                </div>
              </div><!-- .contacts__city -->
            </div><!-- .contacts__info -->
          </div>
        </div>
      </div>`
        },
        {
            title: "АУТИЗМ|M-CHAT",
            image: "10.png",
            description: "h4",
            html: `<div class="content__block">
                <div class="container">
                  <h4 class="content__title content__title--close vis-hidden">M-CHAT</h4>
                  <div class="project__mchat mchat" data-scroll="in" style="--viewport-y:0.1282; --visible-y:1;">
                    <article class="mchat__intro">
                      <p>Модифицированный чеклист M-CHAT-R/F (Robins, Fein, Barton, 2009) – это двухэтапный наблюдательный инструмент для родителей, созданный с целью оценки риска расстройств аутистического спектра (РАС) для детей в возрасте от 16 до 30 месяцев.</p>
                    </article>
                    <div class="mchat__action">
                      <a href="project-autism-mchat.html" class="button button--hollow button--light">Пройти</a>
                    </div>
                  </div>
                </div>
              </div>`
        },
        {
            title: "АУТИЗМ|M-CHAT Развернуто",
            image: "25.png",
            description: "Страница с M-CHAT",
            html: `<div class="content__block" >
      <div class="container">
        <div class="project__mchat mchat mchat--quest" data-scroll>
          <div data-mchat>
            <template>
              <form class="mchat__form" v-on:submit.prevent="nextStep">
                <div class="mchat__wrapper" ref="wrapper">
              
                  <transition name="fade" mode="out-in">
                    <div v-if="!result" class="mchat__test" :key="currentQuestion.id">
                      <h4 class="content__title mchat__title">№ {{currentQuestion.id}}</h4>
                      <article class="mchat__question" v-html="currentQuestionText"></article>
                      <ul class="mchat__answer" is="answers" :variants="currentVariants" v-model="answers[step]"></ul>
                    </div>
                    <div v-else class="mchat__test mchat__test--results">
                      <h4 class="content__title mchat__title">{{result.title}}</h4>
                      <article class="mchat__result" v-html="result.description"></article>
                    </div>
                  </transition>
              
              
                </div>
              
                <div class="mchat__action">
                  <transition-group name="list-complete" tag="div">
                    <button key="prev" v-if="hasPrevStep" v-on:click="prevStep" type="button"
                      class="button button--hollow button--white list-complete-item">Назад</button>
                    <button key="next" type="submit" :disabled="!canGoNext"
                      class="button button--hollow button--light list-complete-item">{{result ? 'Пройти снова' : 'Далее'}}</button>
                  </transition-group>
              
              
                </div>
              </form>
            </template>
          </div>
        </div>
      </div>
    </div> <!-- .content__block -->`

        },
        {
            title: "АУТИЗМ|Страницы",
            image: "11.png",
            description: "h4, ID:#takePart",
            html: `<div class="content__block" id="takePart">
                    <div class="container">
                      <h4 class="content__title content__title--close">Международная конференция <br> «АУТИЗМ. Мир один для всех»</h4>
                      <div class="project__grid">
                        <div class="project__item">
                          <div class="card card--big card--bg">
                            <figure class="card__image">
                              <a href="#" class="overlay">Третья международная конференция «Аутизм. Мир возможностей»</a>
                              <img src="/images/projects/autism/project-1.jpg" alt="Третья международная конференция «Аутизм. Мир возможностей»">
                            </figure><!-- .card__image -->
                            <div class="card__body ">
                              <h5 class="card__title">
                                <a href="#" class="">Третья международная конференция «Аутизм. Мир возможностей»</a>
                              </h5>
                              <p class="card__desc">— это возможность улучшить знания по вопросам расстройств аутистического спектра (РАС) и поделиться...</p>
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div>
                        <div class="project__item">
                          <div class="card">
                            <figure class="card__image">
                              <a href="#" class="overlay">Наименование какой-то конференции. которая пройдёт в будущем</a>
                              <img src="/images/projects/autism/project-2.jpg" alt="Наименование какой-то конференции. которая пройдёт в будущем">
                            </figure><!-- .card__image -->
                            <div class="card__body ">
                              <h5 class="card__title">
                                <a href="#" class="">Наименование какой-то конференции. которая пройдёт в будущем</a>
                              </h5>
                              <p class="card__desc">Конференция предназначена для широкого круга лиц и исследователей, формирующих и принимающих решения...</p>
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div>
                      </div>
                    </div>
                  </div>`
        },
        {
            title: "АУТИЗМ|Изображение",
            image: "12.png",
            description: "h4",
            html: `<div class="content__block">
        <div class="container">
          <h4 class="content__title content__title--center ">Шесть программ интервенции</h4>
          <figure class="chart chart--image">
            <img src="/images/projects/autism/chart-intervention.png" srcset="/images/projects/autism/chart-intervention@2x.png 2x" alt="Диаграмма Аутизм центр «АСЫЛ МИРАС»">
          </figure>
        </div><!-- .container -->
      </div>`
        },
        {
            title: "YouTube",
            image: "13.png",
            description: "",
            html: `<div class="content__block">
                <div class="container">
                  <figure class="content__video">
                    <div class="video video--16-9">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/_391GlBGMy4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                  </figure>
                </div>
              </div>`
        },
        {
            title: "Burabike|Факты",
            image: "12.png",
            description: "h5",
            html: `<div class="content__block">
                <div class="container">
                    <div class="content__facts">
                        <div class="facts facts--4">
                          <ul>
                            <li>
                              <h5>205 млн. тенге</h5>
                              <p>собрано в 2018 году</p>
                            </li>
                            <li>
                              <h5>2 345</h5>
                              <p>участников в 2018 году</p>
                            </li>
                            <li>
                              <h5>30 км.</h5>
                              <p>протяженность трассы</p>
                            </li>
                            <li>
                              <h5>5</h5>
                              <p>больниц получили медицинское оборудование в 2018&nbsp;г.</p>
                            </li>
                          </ul>
                        </div>
                      </div>
                </div>
            </div>`
        },
        {
            title: "Burabike|Регистрация",
            image: "15.png",
            description: "h4, ID:takePart",
            html: `<div class="content__block" id="takePart">
                    <div class="container">
                      <h4 class="content__title content__title--close theme-color vis-hidden">Регистрация</h4>
                      <div class="project-burabike__signup">
                        <ul>
                          <li>
                            <figure>
                              <img src="/images/projects/burabike-icons/burabike_icon_laptop.png" alt="laptop icon">
                            </figure>
                            <p>Зарегистрироваться на сайте <a href="http://burabike.kz" target="_blank">burabike.kz</a></p>
                          </li>
                          <li>
                            <figure>
                              <img src="/images/projects/burabike-icons/burabike_icon_payment.png" alt="payment icon">
                            </figure>
                            <p>Оплатить регистрационный взнос</p>
                          </li>
                          <li>
                            <figure>
                              <img src="/images/projects/burabike-icons/burabike_icon_bike.png" alt="bike icon">
                            </figure>
                            <p>Взять велосипед с собой или взять в прокат в Rixos Borovoe</p>
                          </li>
                        </ul>
                        <a href="#" class="button button--default">Принять участие</a>
                      </div>
                    </div>
                  </div>`
        },
        {
            title: "Burabike|Таблица",
            image: "16.png",
            description: "table",
            html: `<div class="content__block">
        <div class="container">
          <h4 class="content__title content__title--close theme-color">Результаты благотворительного велопробега</h4>
          <div class="project-burabike__results">
            <table>
              <thead>
                <tr>
                  <th width="10%"></th>
                  <th width="50%">Бенефициары</th>
                  <th width="150px">Количество участников</th>
                  <th width="20%">Собранные средства</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2017</td>
                  <td> Детская областная больница КГУ “Управление здравоохранения акимата Северо-Казахстанской области” г. Петропавловск<br><br> Областная Детская клиническая Больница г. Актобе<br><br> Областной Перинатальный Центр ГУ Управление Здравоохранения Алматинской области г. Талдыкорган<br><br> Областная детская многопрофильная больница г. Уральск<br><br> Западно-Казахстанское областное общественное объединение детей инвалидов Байтерек г. Уральск </td>
                  <td>1085</td>
                  <td>168 429 885 ₸</td>
                </tr>
                <tr>
                  <td>2016</td>
                  <td> ГКП на ПХВ Акмолинская областная детская больница г. Кызылорда, пр. Абая, 27 Управление Здравоохранения Кызылординской области<br><br> 3 Детских дома Акмолинской области<br><br> Фонд развития и поддержки спорта (А. Винокуров) </td>
                  <td>501</td>
                  <td>100 401 063 ₸</td>
                </tr>
                <tr>
                  <td>2015</td>
                  <td> ГУ Медико-социальное Учреждение для детей с инвалидностью ГУ “Дукинский дом ребёнка”<br><br> Областной реабилитационный центр для детей №2 г. Кызылорда<br><br> Областная Инфекционная больница г.Кызылорда </td>
                  <td>307</td>
                  <td>104 006 220 ₸</td>
                </tr>
                <tr>
                  <td>2014</td>
                  <td> Областной Перинатальный Центр г. Кокшетау<br><br> Областной Перинатальный Центр Кызылординской области </td>
                  <td>178</td>
                  <td>87 281 054 ₸</td>
                </tr>
                <tr>
                  <td>2013</td>
                  <td> Областной Перинатальный Центр г. Кокшетау </td>
                  <td>130</td>
                  <td>11 500 000 ₸</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>`
        },
        {
            title: "Батыр|Факты",
            image: "17.png",
            description: "h5",
            html: `<div class="content__block">
                        <div class="container">
                            <div class="content__facts">
                                <div class="facts facts--4">
                                  <ul>
                                    <li>
                                      <h5>70 000 000 тенге</h5>
                                      <p>Сумма гранта</p>
                                    </li>
                                    <li>
                                      <h5>2 000</h5>
                                      <p>Тираж CD x DVD- издания всех сольных альбомов Батыра</p>
                                    </li>
                                    <li>
                                      <h5>5</h5>
                                      <p>стипендиатов ежегодно</p>
                                    </li>
                                    <li>
                                      <h5>500 000 тенге</h5>
                                      <p>сумма стипендии на год</p>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                        </div>
                    </div>`
        },
        {
            title: "Батыр|Проекты",
            image: "18.png",
            description: "h4",
            html: `<div class="content__block" id="projects">
                    <div class="container">
                      <h4 class="content__title content__title--close theme-color">Проекты</h4>
                      <div class="project__grid">
                        <div class="project__item">
                          <div class="card card--big card--bg">
                            <figure class="card__image">
                              <a href="project-batyr-1.html" class="overlay">Стипендии для талантливых музыкантов</a>
                              <img src="/images/projects/batyr/projects-batyr-1.jpg" alt="Стипендии для талантливых музыкантов">
                            </figure><!-- .card__image -->
                            <div class="card__body ">
                              <h5 class="card__title">
                                <a href="project-batyr-1.html" class="">Стипендии для талантливых музыкантов</a>
                              </h5>
                              <p class="card__desc">Для нас важна преемственность. Самые талантливые музыканты – последователи Батыра в исполнительском...</p>
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div>
                        <div class="project__item">
                          <div class="card">
                            <figure class="card__image">
                              <a href="project-batyr-2.html" class="overlay">Нотное издание песен Батыра на казахском языке</a>
                              <img src="/images/projects/batyr/projects-batyr-2.jpg" alt="Нотное издание песен Батыра на казахском языке">
                            </figure><!-- .card__image -->
                            <div class="card__body ">
                              <h5 class="card__title">
                                <a href="project-batyr-2.html" class="">Нотное издание песен Батыра на казахском языке</a>
                              </h5>
                              <p class="card__desc">В нем собраны произведения из альбомов артиста, которые впервые</p>
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div>
                        <div class="project__item">
                          <div class="card">
                            <figure class="card__image">
                              <a href="project-batyr-3.html" class="overlay">I Республиканский конкурс исполнителей на деревянных духовых инструментах имени Батырхана Шукенова</a>
                              <img src="/images/projects/batyr/projects-batyr-3.jpg" alt="I Республиканский конкурс исполнителей на деревянных духовых инструментах имени Батырхана Шукенова">
                            </figure><!-- .card__image -->
                            <div class="card__body ">
                              <h5 class="card__title">
                                <a href="project-batyr-3.html" class="">I Республиканский конкурс исполнителей на деревянных духовых инструментах имени Батырхана Шукенова</a>
                              </h5>
                              <p class="card__desc">Возраст участников -&nbsp;от 16 до 32 лет включительно. Конкурс будет состоять из III туров : двух сольных разделов и финального выступления...</p>
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div>
                        <div class="project__item">
                          <div class="card">
                            <figure class="card__image">
                              <a href="project-batyr-4.html" class="overlay">Издание подарочного CD x DVD- издания всех сольных альбомов Батыра</a>
                              <img src="/images/projects/batyr/projects-batyr-4.jpg" alt="Издание подарочного CD x DVD- издания всех сольных
                        альбомов Батыра">
                            </figure><!-- .card__image -->
                            <div class="card__body ">
                              <h5 class="card__title">
                                <a href="project-batyr-4.html" class="">Издание подарочного CD x DVD- издания всех сольных альбомов Батыра</a>
                              </h5>
                              <p class="card__desc">Планируется один тираж в 2000 экземпляров для распространения на территории Казахстана и онлайн.</p>
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div>
                      </div>
                    </div>
                  </div>`
        },
        {
            title: "Батыр|Стипендия",
            image: "19.png",
            description: "h1",
            html: `  <div class="content__block" id="">
        <div class="container">
          <h4 class="content__title content__title--close vis-hidden">Стипендиаты</h4>
          <article class="article">
            <p>Именная стипендия Батырхана Шукенова учреждена для поддержки талантливых студентов, обучающихся по классу духовых инструментов. Грант выдается при поддержке Фонда Булата Утемуратова и составляет 500 000 тенге на человека.</p>
          </article>
          <div class="project-batyr__holders">
            <div class="project-batyr__holder">
              <div class="holder">
                <figure class=" holder__photo">
                  <a href="https://www.youtube.com/watch?v=GpBcRpItLNk" data-fancybox="serik" class="overlay holder__link">&nbsp;</a>
                  <img src="/images/projects/batyr/holders/serik.jpg" alt="Аргимберде Серик">
                </figure>
                <h6 class="holder__name">Аргимберде Серик</h6>
                <p class="holder__instrument">флейта</p>
                <article class="holder__desc">
                  <p>Серик учится на втором курсе бакалавриата и верит в особое предназначение всех музыкантов-классиков.</p>
                </article>
              </div>
            </div>
            <div class="project-batyr__holder">
              <div class="holder">
                <figure class=" holder__photo">
                  <a href="https://www.youtube.com/watch?v=GpBcRpItLNk" data-fancybox="artur" class="overlay holder__link">&nbsp;</a>
                  <img src="/images/projects/batyr/holders/artur.jpg" alt="Бемм Артур">
                </figure>
                <h6 class="holder__name">Бемм Артур</h6>
                <p class="holder__instrument">cаксофон</p>
                <article class="holder__desc">
                  <p>После окончания школы Артур планировал стать энергетиком, но понял, что его призвание – в музыке.</p>
                </article>
              </div>
            </div>
            <div class="project-batyr__holder">
              <div class="holder">
                <figure class=" holder__photo">
                  <a href="https://www.youtube.com/watch?v=GpBcRpItLNk" data-fancybox="anna" class="overlay holder__link">&nbsp;</a>
                  <img src="/images/projects/batyr/holders/anna.jpg" alt="Данильченко Анна">
                </figure>
                <h6 class="holder__name">Данильченко Анна</h6>
                <p class="holder__instrument">Кларнет</p>
                <article class="holder__desc">
                  <p>Уже второй год Аня обучается в консерватории по классу кларнета и не видит себя на другом пути.</p>
                </article>
              </div>
            </div>
            <div class="project-batyr__holder">
              <div class="holder">
                <figure class=" holder__photo">
                  <a href="https://www.youtube.com/watch?v=GpBcRpItLNk" data-fancybox="madi" class="overlay holder__link">&nbsp;</a>
                  <img src="/images/projects/batyr/holders/madi.jpg" alt="Мадениетов Мади">
                </figure>
                <h6 class="holder__name">Мадениетов Мади</h6>
                <p class="holder__instrument">cаксофон</p>
                <article class="holder__desc">
                  <p>Мади, тоже второкурсник, еще в детстве полюбил звучание саксофона, слушая игру отца.</p>
                </article>
              </div>
            </div>
            <div class="project-batyr__holder">
              <div class="holder">
                <figure class=" holder__photo">
                  <a href="https://www.youtube.com/watch?v=GpBcRpItLNk" data-fancybox="elvira" class="overlay holder__link">&nbsp;</a>
                  <img src="/images/projects/batyr/holders/elvira.jpg" alt="Ропперт Эльвира">
                </figure>
                <h6 class="holder__name">Ропперт Эльвира</h6>
                <p class="holder__instrument">саксофон</p>
                <article class="holder__desc">
                  <p>Оканчивая бакалавриат, Эльвира выступает в составе группы «Sax jam», много работает и хочет учиться в магистратуре.</p>
                </article>
              </div>
            </div>
          </div>
        </div><!-- .container -->
      </div> <!-- .content__block -->`
        },
        {
            title: "Batyr|V2",
            image: "19.png",
            description: "h1",
            html: `<div class="content__block" id="">
                    <div class="container">
                      <div class="content__slim">
                        <h4 class="content__title content__title--close">Нотное издание песен Батыра на казахском языке</h4>
                        <article class="article  content__intro">
                          <p> В нем собраны произведения из альбомов артиста, которые впервые аранжированы и укомплектованы в одном сборнике. Издание выпущено при поддержке Фонда Булата Утемуратова.</p>
                          <p> Планируется рассылка издания по музыкальным образовательным учреждениям страны, а также открытая публикация на веб-сайте к концу октября. </p>
                        </article>
                      </div>
                    </div><!-- .container -->
                  </div>`
        },
        {
            title: "Batyr|Скачать блок",
            image: "19.png",
            description: "h1",
            html: `  <div class="content__block content__slider" data-scroll>
        <div class="container">
          <div class="project-batyr__notes-shop">
            <h6>Нотное издание можно приобрести в сети магазинов "Меломан"</h6>
            <a class="button button--default">Скачать нотное издание</a>
          </div>
        </div>
      </div>`
        },
        {
            title: "Batyr|V4",
            image: "19.png",
            description: "h1",
            html: `<div class="content__block" id="">
        <div class="container">
          <article class="article content__slim">
            <p> Конкурс станет первой масштабной площадкой для состязания между исполнителями духовых инструментов: </p>
            <ul>
              <li> Гобой </li>
              <li> Кларнет </li>
              <li> Саксофон </li>
              <li> Фагот </li>
              <li> Флейта </li>
            </ul>
          </article>
        </div><!-- .container -->
      </div> <!-- .content__block -->`
        },
        {
            title: "Batyr|V5",
            image: "19.png",
            description: "h1",
            html: ` <div class="content__block">
        <div class="container">
          <h4 class="content__title vis-hidden">Анкеты</h4>
          <div class="project-batyr__form">
            <div class="project-batyr__form-item">
              <img src="/images/icons/sheet--orange.png" alt="">
              <p>
                <a href="#">Анкета соискателя стипендии имени Батырхана Шукенова для студентов кафедры духовых и ударных инструментов Казахской национальной консерватории (КНК) имени Курмангазы (Алматы, Казахстан)</a>
              </p>
            </div>
            <div class="project-batyr__form-item">
              <img src="/images/icons/sheet--orange.png" alt="">
              <p>
                <a href="#">Анкета соискателя стипендии имени Батырхана Шукенова для студентов кафедры духовых и ударных инструментов Казахской национальной консерватории (КНК) имени Курмангазы (Алматы, Казахстан)</a>
              </p>
            </div>
            <div class="project-batyr__form-link">
              <a href="#" class="theme-color">Узнать об условиях конкурса</a>
            </div>
          </div>
        </div>
      </div> <!-- .content__block -->`
        },
        {
            title: "Сад|Факты",
            image: "19.png",
            description: "h1",
            html: `<div class="content__block">
                        <div class="container">
                        <div class="content__facts">
            <div class="facts facts--4">
              <ul>
                <li>
                  <h5>17,7<small>га</small></h5>
                  <p>общественная Зона реализации</p>
                </li>
                <li>
                  <h5>103<small>га</small></h5>
                  <p>восстановление системы орошения</p>
                </li>
                <li>
                  <h5>15 <small>мес</small></h5>
                  <p>Сроки реализации</p>
                </li>
                <li>
                  <h5>4 000</h5>
                  <p>зеленых насаждений</p>
                </li>
                <li class="facts__item--wide">
                  <h5><small>до</small> 15 000 000<small>$</small></h5>
                  <p>Бюджет</p>
                </li>
              </ul>
            </div>
          </div>
                        </div>
                    </div>`
        },
        {
            title: "Сад|Принципы реконструкции",
            image: "20.png",
            description: "h4, ID:#principles",
            html: `<div class="content__block" id="principles">
                    <div class="container">
                      <h4 class="content__title theme-color content__title--close">Принципы реконструкции</h4>
                      <div class="project__steps project__steps--principles ">
                        <ul>
                          <li>
                            <img src="/images/projects/botsad-icons/principle_1.jpg" srcset="/images/projects/botsad-icons/principle_1@2x.jpg 2x" alt="Не навредить Ботаническому саду ">
                            <h5>Не навредить Ботаническому саду </h5>
                            <p>Бережное отношение – главный принцип реконструкции. Мы стремимся максимально сохранить и приумножить биоразнообразие.</p>
                          </li>
                          <li>
                            <img src="/images/projects/botsad-icons/principle_2.jpg" srcset="/images/projects/botsad-icons/principle_2@2x.jpg 2x" alt="Сохранение самобытности и целостности">
                            <h5>Сохранение самобытности и целостности</h5>
                            <p> Мы осознаем уникальность ботсада и алматинских ландшафтов, ответственно подходим к выбору каждого растения, регулярно консультируясь с дендрологами Института ботаники и фитоинтродукции.</p>
                          </li>
                          <li>
                            <img src="/images/projects/botsad-icons/principle_3.jpg" srcset="/images/projects/botsad-icons/principle_3@2x.jpg 2x" alt="Обеспечение устойчивого развития">
                            <h5>Обеспечение устойчивого развития</h5>
                            <p>Мы выступаем за системный подход, предусматривающий создание прозрачной системы билетирования, сувенирных магазинов, обучающих зон и общественного огорода.</p>
                          </li>
                          <li>
                            <img src="/images/projects/botsad-icons/principle_4.jpg" srcset="/images/projects/botsad-icons/principle_4@2x.jpg 2x" alt="Долгосрочность">
                            <h5>Долгосрочность</h5>
                            <p>Современные материалы и технологии с длительным сроком службы и высокой износостойкостью, а также зеленые насаждения, не требующие кропотливого ухода.</p>
                          </li>
                          <li>
                            <img src="/images/projects/botsad-icons/principle_5.jpg" srcset="/images/projects/botsad-icons/principle_5@2x.jpg 2x" alt="Применение новых технологий">
                            <h5>Применение новых технологий</h5>
                            <p>Современное и экологичное освещение, покрытие троп и дорожек, инновационные природные материалы для строительства павильонов.</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>`
        },
        {
            title: "Сад|Предпосылки проекта",
            image: "21.png",
            description: "h4, ID:#background",
            html: `<div class="content__block " id="background">
        <img src="/images/projects/botsad-tree.png" alt="Иллюстрация" class="project__tree">
        <div class="container">
          <h4 class="content__title theme-color">Предпосылки проекта</h4>
          <div class="project__steps project__steps--background ">
            <ul>
              <li>
                <img src="/images/projects/botsad-icons/bg_1.jpg" srcset="/images/projects/botsad-icons/bg_1@2x.jpg 2x" alt="">
                <p>Недостаток источников водоснабжения и ветхие инженерные сети</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_2.jpg" srcset="/images/projects/botsad-icons/bg_2@2x.jpg 2x" alt="">
                <p>Повреждённые дорожки и тропы</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_3.jpg" srcset="/images/projects/botsad-icons/bg_3@2x.jpg 2x" alt="">
                <p>Устаревшие и частично разрушенные ограждения</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_4.jpg" srcset="/images/projects/botsad-icons/bg_4@2x.jpg 2x" alt="">
                <p>Устаревшая сопутствующая инфраструктура (билетные кассы, сувенирные магазины, санузлы)</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_5.jpg" srcset="/images/projects/botsad-icons/bg_5@2x.jpg 2x" alt="">
                <p>Неинформативное обозначение экспозиций и отсутствие образовательной составляющей</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_6.jpg" srcset="/images/projects/botsad-icons/bg_6@2x.jpg 2x" alt="">
                <p>Отсутствие удобных подъездных путей со стороны ул. Тимирязева, проспекта Аль-Фараби и Атакента</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_7.jpg" srcset="/images/projects/botsad-icons/bg_7@2x.jpg 2x" alt="">
                <p>Недостаточное либо отсутствующее освещение и видеонаблюдение на территории</p>
              </li>
              <li>
                <img src="/images/projects/botsad-icons/bg_8.jpg" srcset="/images/projects/botsad-icons/bg_8@2x.jpg 2x" alt="">
                <p>Один слабо контролируемый вход со стороны ул. Тимирязева</p>
              </li>
            </ul>
          </div>
        </div>
      </div>`
        },
        {
            title: "Сад:Общая информация",
            image: "22.png",
            description: "h4, ID:#overall",
            html: `<div class="content__block" id="overall">
        <div class="container">
          <h4 class="content__title content__title--close theme-color">Общая информация о реконструкции</h4>
        </div>
        <div class="project__info project__info--botsad">
          <div class="container">
            <ol>
              <li>
                <h5>Вода</h5>
                <p>Строительство системы подачи, полива и орошения</p>
              </li>
              <li>
                <h5>Доступность</h5>
                <p>Три входных группы (ул. Тимирязева, проспект Аль-Фараби, ВК “Атакент”)</p>
              </li>
              <li>
                <h5>Безопасность</h5>
                <p>Единое ограждение, системы освещения и видеонаблюдения</p>
              </li>
              <li>
                <h5>Экологичность</h5>
                <p>Сохранение и пополнение зеленого фонда</p>
              </li>
              <li>
                <h5>Развитие</h5>
                <p>Приумножение научных коллекций</p>
              </li>
              <li>
                <h5>Комфорт и удобство</h5>
                <p>Экскурсионная инфраструктура с учетом потребностей всех категорий посетителей</p>
              </li>
              <li>
                <h5>Новые технологии</h5>
                <p>Цифровая навигация, электронное билетирование</p>
              </li>
              <li>
                <h5>Открытость</h5>
                <p>Консультации с общественностью</p>
              </li>
            </ol>
            <div class="project__feedback">
              <button class="button button--default">Написать нам</button>
            </div>
          </div>
        </div>
      </div>`
        },
        {
            title: "Поддержка красного полумесяца|Факты",
            image: "23.png",
            description: "h5",
            html: `<div class="content__block">
                        <div class="container">
                        <div class="content__facts">
                            <div class="facts facts--3">
                              <ul>
                                <li>
                                  <h5>99 000 000 тенге</h5>
                                  <p>Сумма выделенных средств</p>
                                </li>
                                <li>
                                  <h5>863 семьи</h5>
                                  <p>Получили помощь</p>
                                </li>
                                <li>
                                  <h5>2723 человека</h5>
                                  <p>Получили карты помощи</p>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                    </div>`
        },
        {
            title: "Поддержка красного полумесяца|Карта",
            image: "24.png",
            description: "h4, ID:#map",
            html: `<div class="content__block" id="map">
                        <div class="container">
                          <h4 class="content__title content__title--close  theme-color">Карта пострадавших регионов</h4>
                          <figure class="project__red-map">
                            <img src="/images/projects/red-map.png" alt="Карта пострадавших регионов">
                          </figure>
                        </div>
                      </div>`
        },
        {
            title: "Поддержка красного полумесяца|Карта",
            image: "24.png",
            description: "h4, ID:#map",
            html: `<div class="content__block " id="news">
                <div class="container">
                  <div class="slider slider--news">
                    <div class="content__title-wrap">
                      <h4 class="content__title content__title--close">Новости проекта</h4>
                      <div class="slider__controls">
                        <button type="button" class="button button--icon button--prev">
                          <svg class="svg-icon svg-icon-arrow">
                            <use xlink:href="/images/sprite.svg#svg-icon-arrow"></use>
                          </svg>
                        </button>
                        <button type="button" class="button button--icon button--next">
                          <svg class="svg-icon svg-icon-arrow">
                            <use xlink:href="/images/sprite.svg#svg-icon-arrow"></use>
                          </svg>
                        </button>
                      </div><!-- .slider__controls -->
                    </div><!-- .content__title-wrap -->
                    <div class="swiper-container">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                        <div class="swiper-slide news-grid__slide">
                          <div class="card card--bg ">
                            <a href="news-post.html" class="overlay">Стипендия имени Батырхана Шукенова учреждена для талантливых студентов</a>
                            <figure class="card__image card__image--bg">
                              <img src="/pics/news-thumb1.jpg" alt="Стипендия имени Батырхана Шукенова учреждена для талантливых студентов">
                            </figure><!-- .card__image -->
                            <div class="card__body card__body--bg card__body--square">
                              <span class="card__date date">01.01.2019</span>
                              <h6 class="card__title">Стипендия имени Батырхана Шукенова учреждена для талантливых студентов</h6><!-- .card__title -->
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div><!-- .news-grid__item -->
                        <div class="swiper-slide news-grid__slide">
                          <div class="card card--bg ">
                            <a href="news-post.html" class="overlay">Итоги шестого благотворительного велопробега Burabike 2018</a>
                            <figure class="card__image card__image--bg">
                              <img src="/pics/news-thumb1.jpg" alt="Итоги шестого благотворительного велопробега Burabike 2018">
                            </figure><!-- .card__image -->
                            <div class="card__body card__body--bg card__body--square">
                              <span class="card__date date">02.01.2019</span>
                              <h6 class="card__title">Итоги шестого благотворительного велопробега Burabike 2018</h6><!-- .card__title -->
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div><!-- .news-grid__item -->
                        <div class="swiper-slide news-grid__slide">
                          <div class="card card--bg ">
                            <a href="news-post.html" class="overlay">Стипендия имени Батырхана Шукенова учреждена для талантливых студентов</a>
                            <figure class="card__image card__image--bg">
                              <img src="/pics/news-thumb1.jpg" alt="Стипендия имени Батырхана Шукенова учреждена для талантливых студентов">
                            </figure><!-- .card__image -->
                            <div class="card__body card__body--bg card__body--square">
                              <span class="card__date date">03.01.2019</span>
                              <h6 class="card__title">Стипендия имени Батырхана Шукенова учреждена для талантливых студентов</h6><!-- .card__title -->
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div><!-- .news-grid__item -->
                        <div class="swiper-slide news-grid__slide">
                          <div class="card card--bg ">
                            <a href="news-post.html" class="overlay">Итоги шестого благотворительного велопробега Burabike 2018</a>
                            <figure class="card__image card__image--bg">
                              <img src="/pics/news-thumb1.jpg" alt="Итоги шестого благотворительного велопробега Burabike 2018">
                            </figure><!-- .card__image -->
                            <div class="card__body card__body--bg card__body--square">
                              <span class="card__date date">04.01.2019</span>
                              <h6 class="card__title">Итоги шестого благотворительного велопробега Burabike 2018</h6><!-- .card__title -->
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div><!-- .news-grid__item -->
                        <div class="swiper-slide news-grid__slide">
                          <div class="card card--bg ">
                            <a href="news-post.html" class="overlay">Стипендия имени Батырхана Шукенова учреждена для талантливых студентов</a>
                            <figure class="card__image card__image--bg">
                              <img src="/pics/news-thumb1.jpg" alt="Стипендия имени Батырхана Шукенова учреждена для талантливых студентов">
                            </figure><!-- .card__image -->
                            <div class="card__body card__body--bg card__body--square">
                              <span class="card__date date">05.01.2019</span>
                              <h6 class="card__title">Стипендия имени Батырхана Шукенова учреждена для талантливых студентов</h6><!-- .card__title -->
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div><!-- .news-grid__item -->
                        <div class="swiper-slide news-grid__slide">
                          <div class="card card--bg ">
                            <a href="news-post.html" class="overlay">Итоги шестого благотворительного велопробега Burabike 2018</a>
                            <figure class="card__image card__image--bg">
                              <img src="/pics/news-thumb1.jpg" alt="Итоги шестого благотворительного велопробега Burabike 2018">
                            </figure><!-- .card__image -->
                            <div class="card__body card__body--bg card__body--square">
                              <span class="card__date date">06.01.2019</span>
                              <h6 class="card__title">Итоги шестого благотворительного велопробега Burabike 2018</h6><!-- .card__title -->
                            </div><!-- .card__body -->
                          </div><!-- .card card--image -->
                        </div><!-- .news-grid__item -->
                      </div>
                    </div>
                  </div><!-- .slider -->
                </div>
              </div> <!-- .content__block -->`
        },

    ]
});