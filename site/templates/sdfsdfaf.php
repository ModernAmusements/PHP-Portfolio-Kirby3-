<?php if($success): ?>
        <div id="confirmModal" class="modal show">
            <img src="/2019/img/skeumins/letter.svg" alt="">
            <h4>Vielen Dank!</h4>
            <p><?= $success ?></p>
            <p>Deine E-Mail-Adresse wurde<br>erfolgreich bestätigt.</p>
            <a href="<?= $site->url() ?>" rel="modal:close" class="btn center">Fenster schließen</a>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <div class="modal-wrapper">
            <div id="fffModal" class="modal">
                <a href="" class="close" rel="modal:close"></a>
                <div class="list">
                </div>
                <div class="form-img">
                <img src="content/img/fff-c-modal.png" />
              </div>
                <div class="form">
                    <form action="<?= $site->url() ?>" method="post" data-consultation="sales" data-parsley-validate>
                    <div class="honeypot">
                        <label for="website">Website <abbr title="required">*</abbr></label>
                        <input type="website" id="website" name="website">
                    </div>
                        <div class="form-parsley firstname">
                            <label>Vorname*</label>
                            <input <?= $data['firstName'] ?? '' ?> name="firstName" type="text" class="form-field" data-parsley-trigger="change"
                                autocomplete="off" data-parsley-pattern="^[a-zA-z\s\-\.\üÜäÄöÖß]*$"
                                data-parsley-pattern-message="Ungültig (0-9,+,-,() nicht erlaubt)." required="">
                        </div>
                        <div class="form-parsley lastname">
                            <label>Nachname*</label>
                            <input name="lastName" type="text" class="form-field" data-parsley-trigger="change"
                                autocomplete="off" data-parsley-pattern="^[a-zA-z\s\-\.\üÜäÄöÖß]*$"
                                data-parsley-pattern-message="Ungültig (0-9,+,-,() nicht erlaubt)." required="">
                        </div>
                        <div class="form-parsley email">
                            <label>E-Mail Adresse*</label>
                            <input name="email" type="email" class="form-field" data-parsley-trigger="change"
                                required="">
                        </div>
                        <div class="form-parsley phone">
                            <label>Telefonnummer*</label>
                            <input name="phoneNumber" type="tel" class="form-field" data-parsley-trigger="change"
                                data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
                                data-parsley-pattern-message="Ungültig (0-9,+,-,() sind erlaubt)." required="">
                        </div>
                        <div class="form-parsley birthday">
                            <label>Geburtsdatum*</label>
                            <input name="birthday" type="text" class="form-field birthdayMask" placeholder="TT.MM.JJJJ"
                                data-parsley-valid-date required="">
                        </div>
                        <div class="form-parsley reason">
                            <label>Grund*</label>
                            <div class="form-select">
                                <select name="interests">
                                    <option value="">Bitte wählen...</option>
                                    <option value="Auftrag: Film">Film</option>
                                    <option value="Auftrag: Typografie">Typografie</option>
                                    <option value="Auftrag: Motion">Motion</option>
                                    <option value="Auftrag: Animation">Animation</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-parsley interest">
                        <label>Ich interessiere mich für*</label>
                            <div class="form-parsley">
                            <p><textarea cols="25" wrap="physical" id="msg" name="text"></textarea></p>
                            </div>
                        </div>
                        <small>Mit dem Abschicken meiner Daten erkläre ich meine
                            <a href="#disclaimerModal" rel="modal:open">Einwilligung</a> zur Kontaktaufnahme durch Shady
                            Tawfik.
                        </small>
                        <button class="btn-1 consultation-modal" name="submit" value="validate" type="submit">
                            HIT ME UP
                        </button>
                    </form>
                </div>
            </div>
            <div id="disclaimerModal" class="modal">
                <a href="" class="close" rel="modal:close"></a>
                <h4>Einwilligungserklärung</h4>
                <p>Mit der Eingabe deiner Daten erklärst du dich damit einverstanden,
                    dass wir dich per Telefon und E-Mailkontaktieren dürfen.
                    <br>
                    Wir geben deine Daten nicht an Dritte weiter. Wir verwenden deine Daten ausschließlich zur Kontaktaufnahme verwenden.
                    Du kannst der Kontaktaufnahme jederzeit widersprechen. Am besten per Mail an info@fffcorp.de.
                    Weitere Informationen zum Datenschutz findest du in unserer Datenschutzerklärung.       
                </p>
                <a href="" rel="modal:close" class="btn">Close</a>
            </div>
        </div> 
        <?php endif ?>





            'firstName'  => get('firstName'),
            'lastName'   => get('lastName'),
            'email'      => get('email'),
            'phoneNumber'=> get('phoneNumber'),
            'birthday'   => get('birthday'),
            'subject'    => get('subject'),
            'text'       => get('text')









        <?php if($success): ?>
        <div class="alert success">
            <p><?= $success ?></p>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form method="post" action="<?= $page->url() ?>">
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="website" id="website" name="website">
            </div>
            <div class="field">
                <label for="name">
                    Name <abbr title="required">*</abbr>
                </label>
                <input type="text" id="name" name="name" value="<?= $data['name'] ?? '' ?>" required>
            </div>
            <div class="field">
                <label for="email">
                    Email <abbr title="required">*</abbr>
                </label>
                <input type="email" id="email" name="email" value="<?= $data['email'] ?? '' ?>" required>
                <?= isset($alert['email']) ? '<span class="alert error">' . html($alert['email']) . '</span>' : '' ?>
            </div>
            <div class="field">
                <label for="text">
                    Text <abbr title="required">*</abbr>
                </label>
                <textarea id="text" name="text" required>
                    <?= $data['text']?? '' ?>
                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . html($alert['text']) . '</span>' : '' ?>
            </div>
            <div class="form-parsley phone">
                <label for="phoneNumber">Telefonnummer*</label>
                <input value="<?= $data['phoneNumber'] ?? '' ?>"  name="phoneNumber" type="tel" class="form-field" data-parsley-trigger="change"
                    data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
                    data-parsley-pattern-message="Ungültig (0-9,+,-,() sind erlaubt)." required="">
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php endif ?>