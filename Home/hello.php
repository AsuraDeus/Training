

<!--<pre>
    <?php
/*print_r($GLOBALS);
    */?>
</pre>-->

<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
    <input type="hidden" name="know[PHP]" value="0">
    <input type="checkbox" name="know[PHP]" value="1">PHP<br />
    <input type="hidden" name="know[Perl]" value="0">
    <input type="checkbox" name="know[Perl]" value="1">Perl<br />
    <input type="submit" name="doGo" value="Go!">
</form>
<pre>
<?php
print_r($_REQUEST['know']);
?>
</pre>