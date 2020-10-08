<!-- FOOTER -->
<footer>
    <section class="cta">
        <h3>Do You NEED A Visual Translator for you Project?</h3>
        <svg viewBox="0 0 402 42" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M397 23.5002H0V18.5002H397V23.5002Z" />
            <path d="M398.506 17.6775L401.335 20.5059L380.828 41.012L378 38.1836L398.506 17.6775Z" />
            <path d="M401.335 20.5059L398.506 23.3345L378 2.82843L380.828 0L401.335 20.5059Z" />
        </svg>
        <div class="buttons">
            <a href="#fffModal" category="header-navigation" action="home" label="consultation-modal" rel="modal:open">
                <button class="btn-large consultation">HIT ME UP</button>
            </a>
        </div>
    </section>
    <section id="mobile">
        <article class="information">
            <div class="row-1">
                <strong><p><?= date('Y') ?></p></strong>
            </div>
            <div class="row-2">
                <a><p>Develop</p></a>
                <a><p>Shady Tawfik</p></a>
                <p>All Rights Reserved©</p>
            </div>
        </article>
        <article class="information-1">
            <div class="row-1">
                <strong><p>Follow Me</p></strong>
            </div>
            <div class="row-2">
            <?php foreach ($site->social()->toStructure() as $profile): ?>
                <a href="<?= $profile->link() ?>"><p><?= $profile->platform() ?></p></a>
            <?php endforeach ?>
            </div>
        </article>
        <article class="information-2">
            <div class="row-1">
                <strong> <p>Work with Me</p> </strong>
            </div>
            <div class="row-2">
                <a> <p><?= Html::email($site->email()) ?></p></a>
            </div>
        </article>
        <article class="information-3">
            <div class="row-1">
                <strong> <p>Write about me</p></strong>
            </div>
            <div class="row-2">
                <a><p><?= Html::email($site->emailPress()) ?></p></a>
            </div>
        </article>
        <article class="information-4">
            <div class="row-1">
                <strong><p>Legal</p></strong>
            </div>
            <div class="row-2">
              <a><p>Datenschutz</p></a>
              <a><p>Impressum</p></a>
              <a><p><?= $site->title() ?></p></a>
            </div>
        </article>
    </section>
    <section id="desktop">
        <article class="information">
            <div class="row-1">
                <strong><p><?= date('Y') ?></p></strong>
            </div>
            <div class="row-2">
                <a><p>Develop</p></a>
                <a><p>Shady Tawfik</p></a>
                <p>All Rights Reserved©</p>
            </div>
        </article>
        <article class="information-1">
            <div class="row-1">
                <strong><p>Follow me</p></strong>
            </div>
            <div class="row-2">
              <?php foreach ($site->social()->toStructure() as $profile): ?>
                  <a href="<?= $profile->link() ?>" target="_blank"><p><?= $profile->platform() ?></p></a>
              <?php endforeach ?>
            </div>
            <br>
            <strong>
                <p>Legal</p>
            </strong>
            </div>
            <div class="row-2">
              <a><p>Datenschutz</p></a>
              <a><p>Impressum</p></a>
            </div>
        </article>
        <article class="information-2">
            <div class="row-1">
                <strong> <p class="medium">Work With Me</p> </strong>
            </div>
            <div class="row-2">
              <a><p><?= Html::email($site->email()) ?></p></a>
              <a><p><?= Html::tel($site->phone()) ?></p></a>
            </div>
            <br>
            <strong>
                <p class="medium">Write About Me</p>
            </strong>
            </div>
            <div class="row-2">
              <a><p><?= Html::email($site->emailPress()) ?></p></a>
            </div>
        </article>
    </section>
</footer>
<!-- Canvas Cursor -->
<div id="cursor" class="cursor-container">
    <p class="cursor-text"></p>
</div>
<!-- POP-UP MODAL -->
<?php if($success): ?>
  <div class="overlay">
    <div id="confirmModal" class="modal show">
      <img class="confirm-img" src="content/2_works/20190906_nike-techpack/b1-960x640.jpg" alt="" />
      <h3>Thank You!</h3>
      <p><?= $success ?></br>Deine E-Mail-Adresse wurde erfolgreich bestätigt.</p>
      <a href="<?= $page->url() ?>" rel="modal:close">close</a>
    </div>
  </div>
  <?php else: ?>
  <?php if (isset($alert['error'])): ?>
  <div><?= $alert['error'] ?></div>
  <?php endif ?>
  <div class="modal-wrapper">
    <div id="fffModal" class="modal">
      <a href="" class="close" rel="modal:close"></a>
      <div class="list">
      <h3>WORK WITH ME</h3>
        <ul class="checklist">
            <li>
                <svg>
                    <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
                </svg>
                Entwicklung von Kommunikationskonzepten
            </li>
            <li>
                <svg>
                    <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
                </svg>
                Multidisziplinäre Arbeitsweise
            </li>
            <li>
                <svg>
                    <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
                </svg>
                Erhalte Antworten auf alle deine Fragen
            </li>
        </ul>
      </div>
      <div class="form-img">
      <?php if ($popUpImage = $site->popUpImage()->toFile()->resize(600)): ?>
        <img class="lazy" data-src="<?= $popUpImage->url() ?>" />
      <?php endif ?>
      </div>
      <div class="form">
        <form
          action="<?= $page->url() ?>"
          method="post"
          data-consultation="sales"
          data-parsley-validate
        >
          <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="website" id="website" name="website" />
          </div>
          <div class="form-parsley firstname">
            <label for="firstName">Vorname*</label>
            <input
            <?= $data['firstName'] ?? '' ?>
            name="firstName" type="text" class="form-field"
            data-parsley-trigger="change" autocomplete="off"
            data-parsley-pattern="^[a-zA-z\s\-\.\üÜäÄöÖß]*$"
            data-parsley-pattern-message="Ungültig (0-9,+,-,() nicht erlaubt)."
            value="<?= $data['firstName'] ?? '' ?>" required="">
          </div>
          <div class="form-parsley lastname">
            <label for="lastName">Nachname*</label>
            <input
              name="lastName"
              type="text"
              class="form-field"
              data-parsley-trigger="change"
              autocomplete="off"
              data-parsley-pattern="^[a-zA-z\s\-\.\üÜäÄöÖß]*$"
              data-parsley-pattern-message="Ungültig (0-9,+,-,() nicht erlaubt)."
              value="<?= $data['lastName'] ?? '' ?>"
              required=""
            />
          </div>
          <div class="form-parsley email">
            <label for="email">E-Mail Adresse*</label>
            <input
              name="email"
              type="email"
              class="form-field"
              data-parsley-trigger="change"
              required=""
              value="<?= $data['email'] ?? '' ?>"
            />
          </div>
          <div class="form-parsley phone">
            <label for="phoneNumber">Telefonnummer*</label>
            <input
              name="phoneNumber"
              type="tel"
              class="form-field"
              data-parsley-trigger="change"
              data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
              data-parsley-pattern-message="Ungültig (0-9,+,-,() sind erlaubt)."
              required=""
              value="<?= $data['phoneNumber'] ?? '' ?>"
            />
          </div>
          <div class="form-parsley birthday">
            <label for="birthday">Geburtsdatum*</label>
            <input
              name="birthday"
              type="text"
              class="form-field birthdayMask"
              placeholder="TT.MM.JJJJ"
              data-parsley-valid-date
              required=""
              value="<?= $data['birthday'] ?? '' ?>"
            />
          </div>
          <div class="form-parsley reason">
            <label for="interests">Grund*</label>
            <div class="form-select">
              <select name="interests" value="<?= $data['interests'] ?? '' ?>">
                <option value="">Bitte wählen...</option>
                <option value="Auftrag: Film">Film</option>
                <option value="Auftrag: Typografie">Typografie</option>
                <option value="Auftrag: Motion">Motion</option>
                <option value="Auftrag: Animation">Animation</option>
              </select>
            </div>
          </div>
          <div class="form-parsley interest">
            <label for="text">Ich interessiere mich für*</label>
            <div class="form-parsley"><p><textarea cols="25" wrap="physical" id="msg" name="text"><?= $data['text']?? '' ?></textarea></p>
            </div>
          </div>
          <small
            >Mit dem Abschicken meiner Daten erkläre ich meine
            <a class="accept" href="#disclaimerModal" rel="modal:open">Einwilligung</a> zur
            Kontaktaufnahme durch Florian Nagel.
          </small>
          <button
            class="btn-large consultation-modal"
            name="submit"
            value="validate"
            type="submit"
          >
            HIT ME UP
          </button>
        </form>
      </div>
    </div>
    <div id="disclaimerModal" class="modal">
      <a href="" class="close" rel="modal:close"></a>
      <h2>Einwilligungserklärung</h2>
      <ul class="checklist">
        <li>
            <svg>
                <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
            </svg>
            Wir geben deine Daten nicht an Dritte weiter.
        </li>
        <li>
            <svg>
                <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
            </svg>
            Wir verwenden deine Daten ausschließlich zu Beratungs- und Informationszwecken über eine Zusammenarbeit mit FFF-Corp.
        </li>
        <li>
            <svg>
                <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
            </svg>
            Du kannst der Kontaktaufnahme jederzeit widersprechen. Am besten per Mail an <a class="accept" href="mailto:support@ottonova.de">info@fff-corp.de</a>.
        </li>
        <li>
            <svg>
                <use xlink:href="images/icons/icons.svg#iconCheckmark"></use>
            </svg>
            Weitere Informationen zum Datenschutz findest du in unserer <a class="accept" href="/datenschutz" target="_blank">Datenschutzerklärung</a>.
        </li>
    </ul>
      <a href="" rel="modal:close" class="btn-normal">Ok</a>
    </div>
  </div>
  <?php endif ?>
<!-- POP-UP SCRIPT -->
<script>
  (function() {
    if (window.localStorage && window.sessionStorage) {
      var a = window.sessionStorage.getItem('sst');
      null == a && (a = 0);
      a = parseInt(a);
      0 === a && ((a = Date.now()), window.sessionStorage.setItem('sst', a));
      window.timeOnSiteTimer ||
        (window.timeOnSiteTimer = window.setInterval(function() {
          var b = Date.now() - a;
          90000 <= b &&
            110000 >= b &&
            window.dataLayer.push({
              event: 'util-session-length',
              eventValue: b,
            });
        }, 2000));
    }
  })();
  $(document).ready(function() {
    console.log('Validate Ready');
    $('form').each(function() {
      const e = $(this);
      let a = e.parsley();
      e.find('input, select').on('change keyup', () => {
        e.toggleClass('valid', a.isValid());
      });
    }),
      $(':input').inputmask();
    var e = new Date();
    var a =
      ('0' + e.getDate()).slice(-2) +
      '.' +
      ('0' + (e.getMonth() + 1)).slice(-2) +
      '.' +
      e.getFullYear();
    e.setFullYear(e.getFullYear() - 16);
    var i =
      ('0' + e.getDate()).slice(-2) +
      '.' +
      ('0' + (e.getMonth() + 1)).slice(-2) +
      '.' +
      e.getFullYear();
    e.setFullYear(e.getFullYear() - 84);
    var n =
      ('0' + e.getDate()).slice(-2) +
      '.' +
      ('0' + (e.getMonth() + 1)).slice(-2) +
      '.' +
      e.getFullYear();
    window.Parsley.addValidator('validDate', {
      validateString: t => !t.match(/[a-z]/i),
      messages: { de: 'Kein gültiges Datum', en: 'Invalid date' },
    }),
      window.Parsley.addValidator('fullAge', {
        validateString: t => parseInt(t) >= 18,
        messages: {
          de: 'Du musst mindestens 18 Jahre alt sein.',
          en: 'You have to be at least 18 years old.',
        },
      }),
      window.Parsley.addValidator('curDe', {
        validateString: function(t) {
          return (function validateCurDE(t) {
            return parseFloat(t.replace(/\./g, '')) >= 62550;
          })(t);
        },
        messages: {
          de:
            'Dein Gehalt ist leider zu niedrig, um dich privat zu versichern.',
        },
      }),
      $('.birthdayMask').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'TT.MM.JJJJ',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: n,
        max: a,
      }),
      $('.birthdayMask16').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'TT.MM.JJJJ',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: n,
        max: i,
      }),
      $('.birthdayMaskEn').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'DD.MM.YYYY',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: n,
        max: a,
      }),
      $('.dateMaskNow').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'TT.MM.JJJJ',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: a,
      }),
      $('select')
        .on('change', function(t) {
          $(this).toggleClass('empty', $(this).val() === '');
        })
        .trigger('change');
    var s = { modal: null, phone: null };
  });
</script>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js', ['async' => false, 'defer' => true ]) ?>
</body>
</html>