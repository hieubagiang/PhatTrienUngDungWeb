<?php
$a = "";
$b = "";

if (isset ( $_POST ['a'] )) {
    $a = $_POST ['a'];
}
if (isset ( $_POST ['b'] )) {
    $b = $_POST ['b'];
}
function giaiPTB1($a, $b)
{
    if ($a === 0) {
        if ($b === 0)
            $nghiem = "Phương trình có vô số nghiệm";
        if ($b !== 0)
            $nghiem = "Phương trình vô nghiệm";
    } else {
        $x = -($b / $a);
        $x = round($x, 2);
        $nghiem = "x= $x";
    }
    echo $nghiem;
}

?>
    <form action="#" method="post">
        <table>

            <tr>
                <td>Hệ số bậc 1, a</td>
                <td><input type="text" name="a" value="<?=$a?>" /></td>
            </tr>
            <tr>
                <td>Hệ số tự do, b</td>
                <td><input type="text" name="b" value="<?=$b?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Kết quả"></td>
            </tr>
        </table>
    </form>
    <br>
<?php
if (is_numeric ( $GLOBALS ['a'] )
    && is_numeric ($GLOBALS ['b'])) {
    giaiPTB1 (  $GLOBALS ['a'], $GLOBALS ['b'] );
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>