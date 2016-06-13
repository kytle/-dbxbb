<?php

include('./include/common.php');
include('./include/header.php');

?>
<script type="text/javascript">
    $('#nav-fastflux').addClass('active');
</script>
<p><form method="get" action="">
    <div class="btn-group">
        域名
    </div>
    <div class="btn-group">
        <input type="text" class="form-control" name="domain" style="width: 200px;" maxlength="255" pattern="^[a-zA-Z0-9\-\_\.%]*$" value="<?php echo $_GET['domain']; ?>" />
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
        <th>域名</th><th>概览</th><th>检测时间</th>
    </tr>
<?php

$where = '';
if ($_GET['domain']) {
    $where = 'where domain like "' . $_GET['domain'] . '"';
}

$query = $mysqli->prepare('select id, domain, ts, details from fastflux ' . $where . ' order by ts desc limit 10000;');
if ($query) {
    $query->execute();
    $query->bind_result($id, $domain, $ts, $details);
    while ($query->fetch()) {
        echo '<tr>';
        echo '<td>' . $domain . '</td>';
        echo '<td><a href="./details.php?type=fastflux&amp;id=' . $id. '">' . (substr_count($details, ',') + 1) . ' 个 IP 地址</a></td>';
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