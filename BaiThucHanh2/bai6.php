<?php
$col = "";
$row = "";
$table = "";
if (isset($_POST['submit'])) {
    $col = $_POST['col'] ?? '';
    $row = $_POST['row'] ?? '';
    $array = create2DArray($row, $col);
    for ($i=0; $i< $row; $i++) { // for each row
        $table .= '<tr>';
        for ($j=0; $j<$col; $j++ ) { // for each clm
            $table .= '<td> <input type="text" value="'.$array[$i][$j].'"></td>';
        }
            $table .= "</tr>";
        }
}
if (isset($_POST['reset'])) {
    $col = "";
    $row = "";
    $table = "";
}
function create2DArray($rows, $columns)
{
    $array = [[]];
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            if ($j <= $i) {
                $array[$i][$j] = $j + 1;
            } else {
                $array[$i][$j] = 0;
            }
        }
    }
    return $array;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bai1</title>
    <style>
        input {
            width: 50px;
        }

        div {
            margin: 5px;
        }
    </style>
</head>
<body>
<h1>
    Draw Table
</h1>
<br>
<label>Form vẽ bảng </label><br>
<form id="form" method="post">
    <div><label>Số dòng: </label> <input type="text" name="row" value="<?php echo $row ?>"/></div>
    <div><label>Số cột: </label> <input type="text" name="col" value="<?php echo $col ?>"/></div>
    <br>
    <input style="width: 50px;" type="submit" name="reset" value ="Xoá">
    <input style="width: 50px;" type="submit" name="submit">

</form>
<table id="tb_result">
    <?php echo $table ?>
</table>
<!--<script>
    let form;
    function onSubmit() {
        form = document.getElementById("form");
        let table = document.getElementById("tb_result");
        let row = form.querySelector("input[name='row']").value;
        let col = form.querySelector("input[name='col']").value;
        let matrix = create2DArray(row,col);
        console.log(matrix);
        for(let i =0; i<row;i++){
            for(let j=0; j<col;j++)
            {
                if(i>=j){
                    matrix[i][j]=j+1;
                }
                else{
                    matrix[i][j]=0;

                }
            }
        }
        var sOut="";
        for (var y=0; y<matrix.length; y++ ) { // for each row
            sOut += "<tr>";
            for (var x=0; x<matrix[y].length; x++ ) { // for each clm
                sOut += "<td> <input type='text' value='"+matrix[y][x]+"'>" + "</td>";
            }
            sOut += "</tr>";
        }
        table.innerHTML=sOut;
    }
    function onReset() {
        let table = document.getElementById("tb_result");
        let row = form.querySelector("input[name='row']");
        let col = form.querySelector("input[name='col']");
        row.value="";
        col.value="";
        table.innerHTML="";
    }
    function create2DArray(rows,columns) {
        let x = new Array(rows);
        for (let i = 0; i < rows; i++) {
            x[i] = new Array(columns);
        }
        return x;
    }
</script>-->
</body>
</html>