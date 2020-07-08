<?php

/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. 
 * This home template renders content from others pages, the children of the `photography` page to display a nice gallery grid.
 * Snippets like the header and footer contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>

<?php snippet('header') ?>
<!--CONTENT-->
<div id="content">
    <div id="information-wrap">
        <div id="information-content" class="information-content-wrap">
            <div>
                <div class="small">
                    <div class="">
                        <p><strong>About</strong></p>
                        <p>WiseType is an independent digital type foundry established in 2019 by Jacob Wise as
                            a platform to distribute his own typefaces. The foundry is currently based in
                            Rotterdam, NL. From time to time, WiseType works on bespoke
                            typeface commissions as well as collaborating with other designers to expand its
                            type catalogue. So feel free to get in touch with any custom project enquiries at:
                            <a href="mailto:info@wisetype.nl" target="_blank"
                                rel="noopener noreferrer">info@wisetype.nl</a>.</p>
                        <br>
                        <p>WiseType©<br>Lambertusstraat 49b<br>3061 WD<br>Rotterdam NL</p>
                        <p><strong>Typeface Trials</strong></p>
                        <p>We currently use the web application ‘Fonts Ninja' to distribute trials safely and
                            securely. You can download a free trial to the app which allows you to instantly
                            sync the whole WiseType catalogue for use within your desktop
                            publishing software (indesign, illustrator, photoshop etc). Once the application is
                            installed and opened, search “WiseType” to locate the collection, then click
                            ‘activate’ to automatically sync to your desktop.</p>
                        <p>Please note that the trials are exclusively for testing and therefore provide a
                            limited glyph set as well as prohibiting file exports. If you encounter any issues,
                            please get in touch. Download links to the Fonts Ninja
                            web application can be found below:</p>
                        <p><br><span style="color: #999;">Mac OS:</span></p>
                        <p><a href="https://releases.fonts.ninja/FontsNinja-latest.dmg" target="_blank"
                                title="Download Fonts Ninja for Mac" rel="noopener noreferrer">Download Fonts
                                Ninja for Mac</a></p>
                        <p><span style="color: #999;">Windows (still in beta):</span></p>
                        <p><a href="https://releases.fonts.ninja/FontsNinja-latest.exe%20for%20windows"
                                title="Download Fonts Ninja for Windows">Download Fonts Ninja for Windows</a>
                        </p>
                        <p><strong>Desktop Licensing</strong></p>
                        <p class="p1">The Desktop License is the most common license purchased by customers of
                            WiseType. It includes the most familiar file formats TTF &amp; OTF for easy use on a
                            wide variety of desktop applications / software and word processors
                            including Photoshop, Illustrator, InDesign, Word etc. The Desktop License is
                            recommended for the majority of design related usage. This includes publications,
                            business cards, magazines, posters, logo’s, branding, t-shirt
                            designs, artwork, social media artworks, advertising, packing, signage,
                            broadcasting, television, movies and documentaries. The license is intended for both
                            private and commercial usage. Please check the EULA for further
                            information on the Dekstop License.</p>
                        <p class="p1"><strong>Web Licensing</strong></p>
                        <p class="p3">The Web License includes the file formats; WOFF, WOFF2 &amp; EOT and
                            permits the use of the WiseType font on one web domain via CSS rule ‘@font-face’
                            only. It is licensed depending on your websites estimated ‘page views
                            per month’. The file types for this license do not support or permit desktop
                            installation nor do they function with regular desktop applications such as
                            InDesign, Illustrator, Photoshop, and Word. <span>Please check the EULA
                                for </span><span>further</span><span> information on the Web License.</span></p>
                        <p class="p1"><strong>App Licensing</strong></p>
                        <p class="p3">The App License includes the file formats TTF &amp; OTF and grants you the
                            right to embed the WiseType font in a software application, electronic document /
                            publication (ePub) or other self-self-contained electronic file
                            that is unique in its name, content, appearance and functionality. This includes,
                            but is not limited to, application for iOS, Android, Mobile Windows, video games,
                            and e-books. The Application must be owned and controlled
                            by yourself and the font must be securely embedded so it cannot be made available
                            for extraction by third-parties.</p>
                    </div>
                </div>
            </div>
            <p>
                <strong>Site Credits</strong>
            </p>
            <p>
                Design by <a href="http://www.jacobwise.co.uk/" target="_blank" rel="noreferrer">Jacob
                    Wise</a><br> Development by <a class="glow" href="https://carlosmayo.info/" target="_blank"
                    rel="noreferrer">Carlos Mayo</a>
            </p>
        </div>
        <div id="license" class="information-content-wrap">
            <meta charset="utf-8">
            <meta charset="utf-8">
            <p><strong><em>1.2</em>Ownership and non-exclusive license</strong></p>
            <p>The WiseType End User License Agreement (“EULA”) has been split into separate parts for ease of
                use: This first section is a general license agreement which covers the fundamental terms and
                conditions of all WiseType licenses. This
                section alone does not cover the use of WiseType fonts, but enacts as a core to which the
                specific addenda of all WiseType licenses build upon. The addenda, split into the WiseType
                licenses ‘Desktop’, ‘Web’, and ‘App’, state the
                individual permissions and restrictions associated with their corresponding license. For
                instance, when you purchase a “Desktop License” you are agreeing to the general license
                agreement in conjunction with the Desktop License
                addendum.</p>
            
            <p><strong><em>1.2</em>Ownership and non-exclusive license</strong></p>
            <p>The purchase of a WiseType license does not give you ownership of the font software from
                WiseType. Upon payment you are granted a non-exclusive, revocable and limited license to use the
                WiseType fonts in accordance with the EULA. Therefore
                all WiseType font software, trademarks, electronic data, designs and names remain the exclusive
                property of WiseType. You agree that the construction, organisation and design of the characters
                within the font are the exclusive
                property of WiseType. You acknowledge that all WiseType font software is protected under
                domestic copyright and other intellectual property laws of the Netherlands as well as
                international under copyright and other intellectual
                property laws of other nations or treaties. You are not permitted to copy, redesign or modify
                any font software from WiseType and distribute it to third parties. Your licence is only for the
                benefit of the users authorised under
                this licence.</p>
            <p><strong><em>1.3</em>Responsibility, sharing and distribution</strong></p>
            <p>You must take responsibility in safeguarding the WiseType fonts from unauthorized use, access,
                duplication or distribution whether direct or indirectly. You agree not to allow the WiseType
                fonts to fall into the hands of third parties
                or the public domain. This includes, but is not limited to, uploading the fonts on file sharing
                platforms, forums, and social media.</p>
            <p>You may not share, lend, sell, split or distribute this license to a third party under any
                circumstances. You are the sole owner of the license. A third party would include, but is not
                limited to, a client, college, peer, friend, family,
                customers, business partners, vendors, suppliers, printers, freelancers, fellow student, other
                companies, organisations or legal entities.</p>
            <p><strong><em>1.4</em>Back up's</strong></p>
            <p>You are allowed to make back-up’s or archival copies of the WiseType fonts however you must keep
                track of this and ensure that the files do not get handed over to third parties, general public
                access or become available for download.</p>
            <p><strong><em>1.5</em>Modifications</strong></p>
            <p>You may not edit, convert, reformat, trace, translate, reverse engineer or hack the WiseType
                font. This would include, but is not limited to, re-exporting the font with modification or
                tracing the outlines of the font. You may expand
                the WiseType font to outline minor design adjustments if necessary. Rasterization effects such
                as 3d rendering, augmentation, blurring and bitmaps are also permitted.</p>
            <p>Any restricted modification you wish to make to the WiseType font should be discussed with
                WiseType as a custom bespoke project in itself. In this case, an additional fee will be agreed
                upon for the bespoke modification and extra licensing.
                Please contact if you wish to enquire about bespoke modifications and licensing: <a
                    href="mailto:info@wisetype.nl">info@wisetype.nl</a> . You agree not to recreate, copy, trace
                or plagiarize the character or shape of the fonts.
                Any violation of this can result in immediate termination of your license and the pursuit of
                legal action.</p>
            <p><strong><em>1.6</em>Warranty &amp; liability</strong></p>
            <p>WiseType does not hold responsibility for any operational faults of the WiseType fonts and is not
                liable for damages, losses or any expenses occurred. The WiseType fonts are provided “as-is”,
                without the guarantee that they will operate
                without fault. WiseType does not warrant that the functions contained in the fonts will meet
                your requirements, satisfaction or that the software will operate without error. Under no
                circumstances the liability of WiseType shall
                exceed the substitution or replacement costs of the WiseType font software, whichever is less,
                and at the sole discretion of WiseType. If however you do encounter errors with the WiseType
                fonts, please get in contact and WiseType
                will make reasonable attempts to help you resolve these issues with you.</p>
            <p><strong><em>1.7</em>Audit</strong></p>
            <p>WiseType may at any time, request an audit to confirm you are in accordance with this EULA. In
                the event of receiving an audit request, you must provide a statement setting out your license
                and purchases. This will include the computers,
                servers, websites, applications or other sources where the WiseType fonts may be, saved or
                accessed. You will also provide further information such as order number and dates of purchase.
                In the event you are not in accordance with
                these terms of this EULA or have been using the fonts without a valid license, you must pay all
                costs and damages put forward to you by WiseType.</p>
            <p><strong><em>1.8</em>Termination</strong></p>
            <p>This EULA is effective until terminated. WiseType can terminate the EULA with notice if it is
                evident that you have not complied with the terms of this EULA. Upon termination, you must
                destroy all written materials, the WiseType fonts
                including back up copies and modified copies if any and certify that no copy remains in your
                possession or control.</p>
            <p><strong><em>1.9</em>Entirety</strong></p>
            <p>This EULA including the applicable addendum constitutes the entire agreement between you and
                WiseType. This removes all licenses or agreements prior to it, relating to its subject matter.
                WiseType reserves the right to update and modify
                the terms of the license at any point. You are responsible for ensuring you keep up to date with
                any amendments and have read the latest EULA at your time of licensing.</p>
            <p><strong><em>1.10</em>Refunds</strong></p>
            <p>This license is non-refundable and all sales are final. Since it is impossible to prove that you
                have removed all trace of the font from your devices, refunds are not a tenable option.</p>
            <p><strong><em>1.11</em>Severability</strong></p>
            <p>When, for any reason, a part of this license is found to be null, void, or unenforceable, only
                that part of this license shall be revoked. The rest of the EULA's terms and conditions will
                remain in place.</p>
            <p><strong><em>1.12</em>Governing Law</strong></p>
            <p>This EULA is governed and construed in accordance with the laws of The Netherlands. Any dispute
                that can not be reconciled between parties, shall be submitted to the exclusive jurisdiction of
                the Rotterdam District Court.</p>
            <p><strong>2.1 Desktop License Addendum</strong></p>
            <p>This addendum (“Desktop License”) as part of the EULA permits the installation and use of certain
                WiseType fonts on a specific number of devices within your organisation as stated on your order
                confirmation.</p>
            <p>The Desktop License is the most common license purchased by customers of WiseType. It includes
                the most familiar file formats TTF &amp; OTF for easy use on a wide variety of desktop
                applications / software and word processors including
                Photoshop, Illustrator, InDesign, Word etc. The Desktop License is recommended for the majority
                of design related usage. This includes publications, business cards, magazines, posters, logo’s,
                branding, t-shirt designs, artwork,
                social media artworks, advertising, packing, signage, broadcasting, television, movies and
                documentaries. The license is intended for both private and commercial usage.</p>
            <p><strong><em>2.2</em>Grant of license</strong></p>
            <p>The basic Desktop License: “1–3 CPU’s” allows you to load the WiseType font software onto up to 3
                devises owned by a single user, or company / organisation at one geographical location. You must
                determine the number of workstations
                or devises you intend the WiseType font software to be loaded onto and select the corresponding
                license category prior to purchase. You may not share the font software between different
                companies, organisations, staff, work colleagues,
                friends, family or fellow students. It is important to remember that a license can only be owned
                and used by one identity. Misuse of the Desktop License will result in immediate termination and
                legal action (See 1.8 Termination).</p>
            <p><strong><em>2.3</em>Servers</strong></p>
            <p>The installation of WiseType fonts onto a font management server is allowed under the condition
                that you control it and third parties outside of your organisation cannot access or use the
                WiseType fonts. You must also ensure that the
                total number of computers within your organisation which have access to the server, and can
                therefore install and enable them, irrespective of whether or not they do so, must not exceed
                the maximum number of CPU’s stated in your
                order.</p>
            <p><strong><em>2.4</em>Third parties</strong></p>
            <p>You may provide a copy of the WiseType font to a commercial printer or similar service bureau for
                the purpose of printing or production of your project. This is only permitted if the service
                bureau uses the font exclusively for the
                production of your project and deletes all copies of it on completion of the job. You may not
                pass the font over to your client as part of your project deliverables. In the event that the
                font forms part of you clients visual identity
                or they require the use of the WiseType font for future application, they themselves must
                correctly license the font.  You agree to notify your client of this requirement before delivery
                of you project and are liable for any misuse
                of the WiseType font by them. You may not purchase a license on the behalf of your client and
                vice versa.</p>
            <p><strong><em>2.5</em>Embedding</strong></p>
            <p>The WiseType font may be embedded into static electronic documents such as PDFs, for internal
                use, production or client-to-client presentations. Such documents may be viewed and printed but
                may not be editable. You may not embed the
                font into software, hardware or publicly distributed electronic documents without the ‘App
                License’ (see ‘App License addendum’).</p>
            <p><strong>3.1 Web License Addendum</strong></p>
            <p>This addendum (“Web License”) as part of the EULA permits the installation and use of certain
                WiseType fonts on a single website using the CSS @font-face method, up to a maximum number of
                ‘Page Views per Month’ as stated on your Order
                Confirmation.</p>
            <p>The Web License includes the file formats; WOFF, WOFF2 &amp; EOT and permits the use of the
                WiseType font on one web domain via CSS rule ‘@font-face’ only. It is licensed depending on your
                websites estimated ‘page views per month’.
                The file types for this license do not support or permit desktop installation nor do they
                function with regular desktop applications such as InDesign, Illustrator, Photoshop, and Word.
            </p>
            <p><strong><em>3.2</em>Grant of license</strong></p>
            <p>The Web License permits the use of the WiseType font on a single website domain you own and
                control, according to the number of estimated website visitors you expect in a month. The
                payment is a one-time fee, however if your visitors
                per month exceeded the permission of the license, you must upgrade and purchase an additional
                license. This is necessary if you exceed your licensed number of page views by 30% in any three
                month period over the course of a year.
                You may not share the fonts across multiple websites using any form of server or network, or
                host the font on a third party service. WiseType does not assist the installation of the font on
                your website.</p>
            <p><strong><em>3.3</em>Third parties</strong></p>
            <p>You may provide a copy of the WiseType font to a third-party web developer, for the sole purpose
                of testing and writing the code of the website on the condition that they honour the details of
                this Web License, use the WiseType font
                exclusively for the production of your project, and to delete all copies of the WiseType font on
                completion of the job. You agree to notify the third-party web developer of this requirement
                before providing the WiseType font to
                them and are liable for any misuse of the font.</p>
            <p>Using the Web License for anything beyond the writing of your websites code is not allowed. In
                the event that your client requires the font for additional visual design purposes or producing
                materials outside of the website, the third-party
                must acquire a license of their own. You agree to notify your client of this requirement before
                providing the font to them and are liable for any misuse of the font.</p>
            <p><strong>4.1 App License Addendum</strong></p>
            <p>This addendum (“App License”) as part of the EULA permits you to embed or use certain WiseType
                fonts in a specific number of apps (software applications or digital documents), as stated on
                your order confirmation.</p>
            <p>The App License includes the file formats TTF &amp; OTF and grants you the right to embed the
                WiseType font in a software application, electronic document / publication (ePub) or other
                self-self-contained electronic file that is unique
                in its name, content, appearance and functionality. This includes, but is not limited to,
                application for iOS, Android, Mobile Windows, video games, and e-books. The Application must be
                owned and controlled by yourself and the
                font must be securely embedded so it cannot be made available for extraction by third-parties.
            </p>
            <p><strong><em>4.2</em>Grant of license</strong></p>
            <p>Each App License grants the use of the WiseType font in one app / Epub. There is no restriction
                on the number of installations, users or sales of your app or ePub and therefore it is a
                one-time payment. However each additional major
                update or sequel to your app / ePub title require an additional license to be purchased. You may
                also use the WiseType font within your regular desktop software exclusively for the purpose of
                designing your app / ePub. If you chose
                to do so, you must not share it with third-parties nor are you permitted to use it for any
                purpose outside of the design of your app / ePub.</p>
            <p>You must not use the WiseType font in an app / ePub that outputs files in formats such as PDF,
                JPG, PNG (or any other static image file types), vector images, text documents or any possible
                third-party exportable files or product.
                It must be used for text display purposes only.</p>
            <p><strong><em>4.3</em>Third parties</strong></p>
            <p>You may provide a copy of the WiseType font to a third-party app developer, for the sole purpose
                of styling text in your app / ePub. This is on the condition that they agree to this App
                License, use the font exclusively for the production
                of your project, and delete all copies of the WiseType font on completion of the job. You agree
                to notify the third-party app developer of this requirement before providing the WiseType font
                to them and are liable for any misuse
                of the font.</p>
            <p>Using the App License for anything beyond the purpose stated in this addendum is not permitted.
                In the event that your client or app developer requires the WiseType font for additional visual
                design purposes or producing materials
                outside of the app, the third-party must acquire a WiseType license of their own. You agree to
                notify your client or the third-party app developer of this requirement before providing the
                font to them and are liable for any misuse
                of the font.</p>
        </div>
    </div>
    <script>
        $('#license').find('strong').parent('p').addClass('information-section-wrap');
        $('#license').find('em').parents('p').addClass('information-section');
    </script>
</div>
<!--END CONTENT-->

</div>
<!--END CONTAINER-->


<?php snippet('footer') ?>