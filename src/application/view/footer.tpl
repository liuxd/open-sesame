<footer>
    <div class="alert alert-info navbar-fixed-bottom">
        <?php echo '处理请求时间：', round(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 4);?>ms
    </div>
</footer>

<!--普通内容弹出框-->
<div class="modal" id="popup" style="display:none">
    <div class="modal-header">
        <a class="close" data-dismiss="modal">×</a>
        <h3>你要的东西在这里</h3>
    </div>

    <div class="modal-body">
        <p><span id="pop_content"></span></p>
    </div>
</div>

<div id="pop_confirm"></div>
<script language="javascript" src="<?=$host?>static/vendor/bootstrap/js/plugin/bootstrap-modal.js"></script>
<script language="javascript" src="<?=$host?>static/vendor/bootstrap/js/plugin/bootstrap-confirm.js"></script>
<script language="javascript" src="<?=$host?>static/vendor/bootstrap/js/plugin/bootstrap-dropdown.js"></script>
<script language="javascript" src="<?=$host?>static/application/js/web.js"></script>
</body>
</html>
