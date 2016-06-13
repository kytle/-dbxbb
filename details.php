<?php

include('./include/common.php');
include('./include/header.php');

?>
<script type="text/javascript">
    $('#nav-<?php echo $_GET['type'];?>').addClass('active');
</script>

<div class="panel panel-default" style="margin-top: 20px;">
    <div class="panel-heading">
        <h4 class="panel-title">详细信息</h4>
    </div>
    <div class="panel-body">
    <?php
        $details = mysqli_get_val('select details from ' . $_GET['type'] . ' where id = ' . $_GET['id']);
        echo '<pre>';
        echo str_replace(',', "\n", str_replace(' ', '', $details));
        echo '</pre>';
    ?>
    </div>
</div>
<?php

include('./include/footer.php');
include('./include/cleanup.php');

?>