<?php snippet('header') ?>
<?= js('assets/js/jquery.js') ?>
<main>
  <article class="pageContent">
    <section class="homeSvg">
      <svg
        viewBox="0 0 1250 640"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M.47,472V179.61H638.31V80.83h-86V.47h697.18V527.11H1109.09V477H756.33V639.53H238.61V558.72h29.92V472Z"
        />
      </svg>
    </section>
    <section class="credentialsName">
      <h1 class="displayText">
        Florian Nagel
        <br />
        Graphic Design
      </h1>
    </section>
    <section class="credentialsTime">
      <h1 class="displayText">
        2017-
        <br />
        2020
      </h1>
    </section>
    <section class="credentialsDate">
      <h1 class="displayText">
        Archiv+
        <br />
        Visual Diary
      </h1>
    </section>
    <section class="cta">
      <h3>Do You NEED A Visual Translator for you Project?</h3>
      <svg
        width="402"
        height="42"
        viewBox="0 0 402 42"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M397 23.5002H0V18.5002H397V23.5002Z"
        />
        <path
          d="M398.506 17.6775L401.335 20.5059L380.828 41.012L378 38.1836L398.506 17.6775Z"
        />
        <path
          d="M401.335 20.5059L398.506 23.3345L378 2.82843L380.828 0L401.335 20.5059Z"
        />
      </svg>
      <div class="buttons">
        <a
          href="#fffModal"
          category="header-navigation"
          action="home"
          label="consultation-modal"
          rel="modal:open"
          class="btn consultation"
        >
          HIT ME UP
        </a>
      </div>
    </section>
  </article>

  <?php if($success): ?>
  <div class="overlay">
  <div id="confirmModal" class="modal show">
    <img src="/2019/img/skeumins/letter.svg" alt="" />
    <h4>Vielen Dank!</h4>
    <p><?= $success ?></p>
    <p>Deine E-Mail-Adresse wurde<br />erfolgreich bestätigt.</p>
    <a href="<?= $site->url() ?>" rel="modal:close" class="btn center"
      >Fenster schließen</a
    >
  </div>
  </div>
  
  <?php else: ?>

  <?php if (isset($alert['error'])): ?>
  <div><?= $alert['error'] ?></div>

  <?php endif ?>
  <div class="modal-wrapper">
    <div id="fffModal" class="modal">
      <a href="" class="close" rel="modal:close"></a>
      <div class="list"></div>
      <div class="form-img">
        <img src="content/img/fff-c-modal.png" />
      </div>
      <div class="form">
        <form
          action="<?= $site->url() ?>"
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
            <a href="#disclaimerModal" rel="modal:open">Einwilligung</a> zur
            Kontaktaufnahme durch Shady Tawfik.
          </small>
          <button
            class="btn-1 consultation-modal"
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
      <h4>Einwilligungserklärung</h4>
      <p>
        Mit der Eingabe deiner Daten erklärst du dich damit einverstanden, dass
        wir dich per Telefon und E-Mailkontaktieren dürfen.
        <br />
        Wir geben deine Daten nicht an Dritte weiter. Wir verwenden deine Daten
        ausschließlich zur Kontaktaufnahme verwenden. Du kannst der
        Kontaktaufnahme jederzeit widersprechen. Am besten per Mail an
        info@fffcorp.de. Weitere Informationen zum Datenschutz findest du in
        unserer Datenschutzerklärung.
      </p>
      <a href="" rel="modal:close" class="btn">Close</a>
    </div>
  </div>
  <?php endif ?>
</main>
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
<?php snippet('footer') ?>
