<footer class="main-footer">
    <strong>Copyright &copy; Maulana Bagaskara </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <span id="loadtime">
            <b>This site load&nbsp;</b>
            {{ number_format((float)(microtime(true) - LARAVEL_START), 2, '.', ''); }}
            &nbsp;seconds to render</span>
    </div>
</footer>