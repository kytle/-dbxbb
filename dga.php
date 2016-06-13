<?php

include('./include/common.php');
include('./include/header.php');

?>
<script type="text/javascript">
    $('#nav-dga').addClass('active');
</script>
<p><form method="get" action="">
    <div class="btn-group">
        IP 地址
    </div>
    <div class="btn-group">
        <input type="text" class="form-control" name="ip" style="width: 200px;" maxlength="15" pattern="^[0-9\.%]*$" value="<?php echo $_GET['ip']; ?>" />
    </div>
    <div class="btn-group">
        <button type="submit" class="btn btn-primary">搜索</button>
    </div>
    <div class="btn-group">
        <a href="?"><button type="button" class="btn btn-default">显示全部</button></a>
    </div>
</form></p>
<div class="table-responsive">
    <table class="table">
    <tr>
        <th>IP 地址</th><th>概览</th><th>检测时间</th>
    </tr>
<?php

$where = '';
#if ($_GET['ip']) {
#    $where = 'where ip like "' . $_GET['ip'] . '"';
#}

$query = $mysqli->prepare('select id, ip, ts, details from dga ' . $where . ' order by ts desc limit 10000;');
if ($query) {
    $query->execute();
    $query->bind_result($id, $ip, $ts, $details);
    while ($query->fetch()) {
        echo '<tr>';
        echo '';
        echo '<td>' . $ip . '</td>';
        echo '<td><a href="./details.php?type=dga&amp;id=' . $id. '">' . (substr_count($details, ',') + 1) . ' 个域名</a></td>';
        echo '<td>' . $ts . '</td>';
        echo '</tr>';
    }
    $query->close();
}

?>
    </table>
</div>
<?php

include('./include/footer.php');
include('./include/cleanup.php');

?>
