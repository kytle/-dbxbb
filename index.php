<?php

include('./include/common.php');
include('./include/header.php');

?>
<script type="text/javascript">
    $('#nav-index').addClass('active');
</script>
<div class="table-responsive">
    <table class="table">
        <tr>
            <th>检测功能</th><th>1 天</th><th>7 天</th><th>30 天</th><th>全部</th>
        </tr>
        <tr>
            <td>隧道</td>
            <td><?php echo mysqli_get_val('select count(*) from tunnel where timestampdiff(second, ts, now()) <= 86400;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from tunnel where timestampdiff(second, ts, now()) <= 604800;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from tunnel where timestampdiff(second, ts, now()) <= 2592000;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from tunnel;');?></td>
        </tr>
        <tr>
            <td>Fast-Flux</td>
            <td><?php echo mysqli_get_val('select count(*) from fastflux where timestampdiff(second, ts, now()) <= 86400;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from fastflux where timestampdiff(second, ts, now()) <= 604800;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from fastflux where timestampdiff(second, ts, now()) <= 2592000;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from fastflux;');?></td>
        </tr>
        <tr>
            <td>DGA</td>
            <td><?php echo mysqli_get_val('select count(*) from dga where timestampdiff(second, ts, now()) <= 86400;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from dga where timestampdiff(second, ts, now()) <= 604800;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from dga where timestampdiff(second, ts, now()) <= 2592000;');?></td>
            <td><?php echo mysqli_get_val('select count(*) from dga;');?></td>
        </tr>
    </table>
</div>
<?php

include('./include/footer.php');
include('./include/cleanup.php');

?>
