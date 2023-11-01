<?php
error_reporting (1);
extract ($_GET);
extract ($_POST);
include "konek_201751101.php";
?>
<html>
<head>
<title>
Pranestya Gaung W - 201751101
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
body,td,th {
	color: #FFF;
}
body {
	background-color: #000;
	background-image: url(BackGrOund%20(31)
.jpg);
	background-image: url(bg.jpg);
}
</style>
</head>
<body>
<table width="643" border ="1" align="center" cellspacing="10">
<tr>
<td width="99">Kode PMB</td>
<td width="191">Time Series</td>
<td width="84" align="right">Jumlah PMB</td>
<td width="31" align="right">X</td>
<td width="31"align="right">Y</td>
<td width="67"align="right">XX</td>
<td width="30"align="right">XY</td>
</tr>
<?php
$total_x=0;
$total_y=0;
$total_xx=0;
$total_xy=0;
$x = -1;
$no = 0;
$sql = ("SELECT * fROM pmb_201751101 ORDER BY kode_pmb ASC");
$qr = mysqli_query ( $con, $sql);
while ($hs=mysqli_fetch_array ($qr))
{
$no++;
$x++;
$tahun = $hs[1];
$jumlah = $hs[2];
$xx = $x * $x;
$xy = $x * $jumlah;
$total_x = $total_x + $x;
$total_y = $total_y + $jumlah;
$total_xx = $total_xx + $xx;
$total_xy = $total_xy + $xy;
?>
<tr>
<td><?php echo "$no"; ?>
</td>
<td><?php echo "periode ke $tahun"; ?>
</td>
<td align="right"><?php echo "$jumlah"; ?></td>
<td align="right"><?php echo "$x"; ?></td>
<td align="right"><?php echo "$jumlah"; ?></td>
<td align="right"><?php echo "$xx"; ?></td>
<td align="right"><?php echo "$xy"; ?></td>
</tr>
<?php
}
?>
<tr>
<td colspan="3">Jumlah</td>
<td align="right"><?php echo "$total_x"; ?></td>
<td align="right"><?php echo "$total_y"; ?></td>
<td align="right"><?php echo "$total_xx"; ?></td>
<td align="right"><?php echo "$total_xy"; ?></td>
</tr>
<tr>
<td colspan="3">Rata-rata</td>
<td align="right"><?php echo $total_x/$no; ?></td>
<td align="right"><?php echo $total_y/$no; ?></td>
<td></td>
<td></td>
</tr>
</table>
<p>
  <?php
#Regresi linier
$b1 = (($total_xy - (($total_x * $total_y)/$no))/(($total_xx - (($total_x * $total_x)/$no))));
$b0 = ($total_y/$no) - ($b1 * ($total_x/$no));
echo "Rumus regresi linier<br>";
echo "y = $b0 + $b1 x<br>";
?>
  <?php
if ($prediksi) {
	$x = $x + $list_pilihan;
	$y = $b0 + $b1 * $x;
	
	echo "prediksi jumlah PMB untuk $list_pilihan minggu berikutnya adalah $y";
}
?>
</p>
<table width="436" border="0" align="center">
  <tr>
    <td width="430" height="21" bgcolor="#FFFFFF"><blockquote>
      <blockquote>
        <blockquote>
          <blockquote>
            <p><a href="index.php">Halaman Utama </a></p>
          </blockquote>
        </blockquote>
      </blockquote>
    </blockquote></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>