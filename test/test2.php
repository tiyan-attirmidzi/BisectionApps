<?php
    $xupper=$_POST['xupper'];
    $xlower=$_POST['xlower'];
    $x1=$xupper;
    $x2=$xlower;
    //fungsi yang akan dicari akarnya
    function f1($x){
    $f1=-0.9*$x*$x+1.7*$x+2.5 ;
    return $f1;
    }
    echo"<h1><center>Pencarian akar dengan Metode Bisection</h1>";
    echo"Nilai penaksiran Xlower : $xlower <br>";
    echo"Nilai penaksiran Xupper : $xupper <hr>";
    //Pengecekan langkah 1
    $a=f1($xlower);
    $b=f1($xupper);
    $c=$a * $b;
    if($c>0){
        echo" $a dan $b <br>";
        echo"Nilai f(Xlower) . f(Xupper) > 0<br>Silakan lakukan penginputan Ulang";
    }
    else{
        $k=1;
        $xr=($xlower+$xupper)/2;

        $t1=f1($xlower);
        $t2=f1($xr);
        $hasil=$t1*$t2;
    
        if($hasil==0){
        $akar=$xr;
        echo"hasil akar adalah $akar";
        }
        else{
        //header tabel
        echo"
        <table border=1 width=100% id=table1 style=border-width: 0px>
        <tr>
        <td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
        <b><font size=2 face=Verdana>No</font></b></td>
        <td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
        <b><font size=2 face=Verdana>Xlower</font></b></td>
        <td width=199 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
        <b><font size=2 face=Verdana>Xupper</font></b></td>
        <td width=185 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
        <b><font size=2 face=Verdana>Xr</font></b></td>
        <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
        <b><font size=2 face=Verdana>F(xlower)</font></b></td>
        <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
        <b><font size=2 face=Verdana>F(xupper)</font></b></td>
        </tr>

    ";
        while($hasil<>0){
        //langkah 2 :bagi dua 
        $xr=($xlower+$xupper)/2;
        //langkah 3 pengecekan 
        $t1=f1($xlower);
        $t2=f1($xr);
        $hasil=$t1*$t2;
        
        if($hasil<0){
        $xupper=$xr;
            }
            else{
        $xlower=$xr;
            }
        
            echo"
            <tr>
        <td width=35 style=border-style: none; border-width: medium>
        <font face=Verdana size=2>$k</font></td>
        <td width=141 style=border-style: none; border-width: medium>
        <font face=Verdana size=2>$xlower</font></td>
        <td width=199 style=border-style: none; border-width: medium>
        <font face=Verdana size=2>$xupper</font></td>
        <td width=185 style=border-style: none; border-width: medium>
        <font face=Verdana size=2>$xr</font></td>
        <td style=border-style: none; border-width: medium>
        <font face=Verdana size=2>$t1</font></td>
        <td style=border-style: none; border-width: medium>
        <font face=Verdana size=2>$t2</font></td>
        </tr>

        ";
        $k++;  
        }
        echo"</table>";
        }
    }
//Kesimpulan hasil iterasi
$k1=$k-1;
echo"
<table border=1 width=100% id=table1 cellspacing=0 height=166>
 <tr>
  <td colspan=2 align=center height=33 bgcolor=#00FF00><b>
  <font face=Verdana size=6>Kesimpulan Metode Bisection</font></b></td>
 </tr>
 <tr>
  <td width=34%><font face=Verdana>Nilai Taksiran Atas</font></td>
  <td width=64%><font face=Verdana>&nbsp;$x1</font></td>
 </tr>
 <tr>
  <td width=34%><font face=Verdana>Nilai Taksiran Bawah</font></td>
  <td width=64%><font face=Verdana>&nbsp;$x2</font></td>
 </tr>
 <tr>
  <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
  <td width=64%><font face=Verdana>&nbsp;$k1</font></td>
 </tr>
 <tr>
  <td width=34%><font face=Verdana>Nilai Akar yang ditemukan</font></td>
  <td width=64%><font face=Verdana>&nbsp;$xr</font></td>
 </tr>
</table>
";
?>