<title>.:: Mata Kuliah Metode Numerik ::.</title>
<center><b>METODE BISECTION</b><br>Created by Ferdian Rahabista</center><hr size="2" color="#0000CC">

Bentuk Fungsinya = <b>f(x) =3*x^3*4*x-7</b><br>
Nilai Toleransi = <b><?=$_POST['tol']?></b><br><br>

<table width="626" border="0" cellpadding="3" cellspacing="1" bgcolor="#CC0000">

    <tr align="center" bgcolor="#FF8C8C">   
        <td width="32"><strong>iter</strong></td>
        <td width="112" bgcolor="#FF8C8C"><strong>a</strong></td>
        <td width="100"><strong>b</strong></td>
        <td width="125"><strong>f(a)</strong></td>
        <td width="137"><strong>f(b)</strong></td>
        <td width="149"><strong>c</strong></td> <td width="133"><strong>f(c)</strong></td>
    </tr>

        <?php
            $a=$_POST['a'];
            $b=$_POST['b'];
            $tol=$_POST['tol'];
            $h=0.01;
            $iter=0;
            $y=$tol;

            while(abs($y)>=$tol)
            {
                $c=($a+$b)/2;
                $fungsi_a=3*($a*$a*$a)+4*$a-7; 
                $fungsi_b=3*($b*$b*$b)+4*$b-7;
                $fungsi_c=3*($c*$c*$c)+4*$c-7; 
                $y=$fungsi_c;
                echo "<tr align='left' bgcolor='#FFC6C6'>
                <td align='center'>$iter</td> <td>$a</td> <td>$b</td> <td>$fungsi_a</td> <td>$fungsi_b</td> <td>$c</td><td>$fungsi_c</td></tr>";
                $iter=$iter+1;
                if($fungsi_a*$fungsi_c>=0) {
                    $a=$c;
                }
                else 
                {
                    $b=$c;
                }
            }
        ?>

</table><br><hr size="2" color="#0000CC">

Nilai Akar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= <b><?=$fungsi_c?></b><br>

Pada X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= <b><?=$c?></b><br>Jumlah Iterasi = <b><?=$iter?></b><br><center>[ <a href="input.php">COBA KEMBALI</a> ]</center>

SHARE FACEBOOK SHARE TWITTER SHARE GOOGLE+ SHARE IN