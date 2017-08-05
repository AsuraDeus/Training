<?php
const pathLog = 'path.log';
$result = '<table class="table">';
$result .= '<thead><tr><th>Дата</th><th>Url</th><th>Referrer</th></tr></thead>';
foreach (file(pathLog) as $log) {
    [$time, $url, $referrer] = explode('|', $log);
    $result .= '<tr>';
    $result .= '<td>' .
        date('d-m-Y H:i:s', $time) .
        '</td><td>'
        . $url
        . '</td><td>'
        . $referrer
        . "</td>";
    $result .= '</tr>';
}
$result .= '</table>';
?>

<section class="section">
    <div class="container">
        <a href="?page=main">На главную</a><br>
        <?= $result ?>
    </div>
</section>
