<?php
?>
<hr>
<footer>
  <h3>
    <a href="<?= url() ?>"><?= $site->title() ?>
  </h3>
  <div class="text-right">
    <p><?= date('Y') ?> &copy; All Rights Reserved</p>
  </div>
  </a>
</footer>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    function delay(URL) {
        setTimeout(function () {
            window.location = URL
        }, 850);
    }
    var mq = window.matchMedia("(max-width: 991px)");
    if (mq.matches) {
    } else {
        $(document).ready(function () {
            $('#draggable,#draggable2,#draggable3,#draggable4,#draggable5,#draggable6,#draggable7,#draggable8,#draggable9')
                .draggable({
                    stack: "div"
                });
        });
        $(function () {
            $("#draggable").draggable();
            $("#draggable2").draggable();
            $("#draggable3").draggable();
            $("#draggable4").draggable();
            $("#draggable5").draggable();
            $("#draggable6").draggable();
            $("#draggable7").draggable();
            $("#draggable8").draggable();
            $("#draggable9").draggable();
            $("#draggable10").draggable();
            $("#draggable11").draggable();
            $("#draggable12").draggable();
            $("#droppable").droppable({
                drop: function (event, ui) {
                    $(this)
                }
            });
        });
    }
</script>

<script src="https://bevacqua.github.io/dragula/dist/dragula.js"></script>
<!-- <script>
    var drake = dragula({
        isContainer: function (el) {
            return el.classList.contains('dragula-container2');
        }
    });
</script> -->

<?= js('assets/js/main.js') ?>
</body>
</html>