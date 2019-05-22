<?php
    if (isset($_GET['number'])) 
    {
        if ($_GET['number']=="one") 
        {
            function func($x) 
            {
                $f = ($x*$x*$x) - ($x) - 6 ;
                return $f;
            }

            $value_a = $_POST['value_a'];
            $value_b = $_POST['value_b'];
            $value_c = ($value_a * $value_b) / 2;
            $f_a = func($value_a);
            $f_b = func($value_b);
            $f_c = func($value_c);
            $iterasi = 1;
            
            if(($f_a * $f_b) > 0 || $f_a > 0 || $f_b < 0)
            {
                if(($f_a * $f_b) > 0)
                {    
                    echo" Nilai F(a) . F(b) > 0 <br> Silakan lakukan penginputan Ulang";
                }

                if ($f_a > 0) 
                {
                    echo "Nilai F(a) Harus Lebih Kecil 0";
                }

                if ($f_b < 0) 
                {
                    echo "Nilai F(b) Harus Lebih Besar 0";
                }
            }            
            else
            {
                $result = $f_a * $f_c;

                if ($result == 0) 
                {
                    echo "Hasil Akarnya Adalah <b>$f_c</b>";
                }
                else
                {
                    //header tabel
                    echo"
                        <table border=1 width=100% id=table1 style=border-width: 0px>
                            <tr>
                                <td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>Iterasi</font></b>
                                </td>
                                <td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>a</font></b>
                                </td>
                                <td width=199 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>b</font></b>
                                </td>
                                <td width=185 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>c</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(a)</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(b)</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(c)</font></b>
                                </td>
                            </tr>

                    ";

                    while($result<>0)
                    {
                        $result = $f_b * $f_c;
                            
                        if($result < 0)
                        {
                            $value_b = $value_c;
                        }
                        else
                        {
                            $value_a = $value_c;
                        }
                    
                        echo"
                            <tr>
                                <td width=35 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$iterasi</font>
                                </td>
                                <td width=141 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_a</font>
                                </td>
                                <td width=199 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_b</font>
                                </td>
                                <td width=185 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_c</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_a</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_a</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_c</font>
                                </td>
                            </tr>
                        "; $iterasi++;  
                    }
                    echo"</table>";
                }
            }
                //Kesimpulan hasil iterasi
                $iterasi1 = $iterasi-1;
                echo"
                <table border=1 width=100% id=table1 cellspacing=0 height=166>
                <tr>
                <td colspan=2 align=center height=33 bgcolor=#00FF00><b>
                <font face=Verdana size=6>Kesimpulan Metode Bisection</font></b></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Taksiran Atas</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_a</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Taksiran Bawah</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_b</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
                <td width=64%><font face=Verdana>&nbsp;$iterasi1</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Akar yang ditemukan</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_c</font></td>
                </tr>
                </table>
                ";
        }
        elseif ($_GET['number']=="number_two") 
        {
            function func($x) 
            {
                $f = ($x*$x) - ($x) - 6 ;
                return $f;
            }

            $value_a = $_POST['value_a'];
            $value_b = $_POST['value_b'];
            $value_c = ($value_a * $value_b) / 2;
            $f_a = func($value_a);
            $f_b = func($value_b);
            $f_c = func($value_c);
            $iterasi = 1;
            
            if(($f_a * $f_b) > 0 || $f_a > 0 || $f_b < 0)
            {
                if(($f_a * $f_b) > 0)
                {    
                    echo" Nilai F(a) . F(b) > 0 <br> Silakan lakukan penginputan Ulang";
                }

                if ($f_a > 0) 
                {
                    echo "Nilai F(a) Harus Lebih Kecil 0";
                }

                if ($f_b < 0) 
                {
                    echo "Nilai F(b) Harus Lebih Besar 0";
                }
            }            
            else
            {
                $result = $f_a * $f_c;

                if ($result == 0) 
                {
                    echo "Hasil Akarnya Adalah <b>$f_c</b>";
                }
                else
                {
                    //header tabel
                    echo"
                        <table border=1 width=100% id=table1 style=border-width: 0px>
                            <tr>
                                <td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>Iterasi</font></b>
                                </td>
                                <td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>a</font></b>
                                </td>
                                <td width=199 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>b</font></b>
                                </td>
                                <td width=185 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>c</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(a)</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(b)</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(c)</font></b>
                                </td>
                            </tr>

                    ";

                    while($result<>0)
                    {
                        $result = $f_b * $f_c;
                            
                        if($result < 0)
                        {
                            $value_b = $value_c;
                        }
                        else
                        {
                            $value_a = $value_c;
                        }
                    
                        echo"
                            <tr>
                                <td width=35 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$iterasi</font>
                                </td>
                                <td width=141 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_a</font>
                                </td>
                                <td width=199 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_b</font>
                                </td>
                                <td width=185 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_c</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_a</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_a</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_c</font>
                                </td>
                            </tr>
                        "; $iterasi++;  
                    }
                    echo"</table>";
                }
            }
                //Kesimpulan hasil iterasi
                $iterasi1 = $iterasi-1;
                echo"
                <table border=1 width=100% id=table1 cellspacing=0 height=166>
                <tr>
                <td colspan=2 align=center height=33 bgcolor=#00FF00><b>
                <font face=Verdana size=6>Kesimpulan Metode Bisection</font></b></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Taksiran Atas</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_a</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Taksiran Bawah</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_b</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
                <td width=64%><font face=Verdana>&nbsp;$iterasi1</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Akar yang ditemukan</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_c</font></td>
                </tr>
                </table>
                ";
        }
        elseif ($_GET['number']=="number_three") 
        {
            include 'number_three.php';
        }
        elseif ($_GET['number']=="number_four") 
        {
            function func($x) 
            {
                $f = ($x*$x) - ($x) - 6 ;
                return $f;
            }

            $value_a = $_POST['value_a'];
            $value_b = $_POST['value_b'];
            $value_c = ($value_a * $value_b) / 2;
            $f_a = func($value_a);
            $f_b = func($value_b);
            $f_c = func($value_c);
            $iterasi = 1;
            
            if(($f_a * $f_b) > 0 || $f_a > 0 || $f_b < 0)
            {
                if(($f_a * $f_b) > 0)
                {    
                    echo" Nilai F(a) . F(b) > 0 <br> Silakan lakukan penginputan Ulang";
                }

                if ($f_a > 0) 
                {
                    echo "Nilai F(a) Harus Lebih Kecil 0";
                }

                if ($f_b < 0) 
                {
                    echo "Nilai F(b) Harus Lebih Besar 0";
                }
            }            
            else
            {
                $result = $f_a * $f_c;

                if ($result == 0) 
                {
                    echo "Hasil Akarnya Adalah <b>$f_c</b>";
                }
                else
                {
                    //header tabel
                    echo"
                        <table border=1 width=100% id=table1 style=border-width: 0px>
                            <tr>
                                <td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>Iterasi</font></b>
                                </td>
                                <td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>a</font></b>
                                </td>
                                <td width=199 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>b</font></b>
                                </td>
                                <td width=185 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>c</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(a)</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(b)</font></b>
                                </td>
                                <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
                                    <b><font size=2 face=Verdana>F(c)</font></b>
                                </td>
                            </tr>

                    ";

                    while($result<>0)
                    {
                        $result = $f_b * $f_c;
                            
                        if($result < 0)
                        {
                            $value_b = $value_c;
                        }
                        else
                        {
                            $value_a = $value_c;
                        }
                    
                        echo"
                            <tr>
                                <td width=35 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$iterasi</font>
                                </td>
                                <td width=141 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_a</font>
                                </td>
                                <td width=199 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_b</font>
                                </td>
                                <td width=185 style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$value_c</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_a</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_a</font>
                                </td>
                                <td style=border-style: none; border-width: medium>
                                    <font face=Verdana size=2>$f_c</font>
                                </td>
                            </tr>
                        "; $iterasi++;  
                    }
                    echo"</table>";
                }
            }
                //Kesimpulan hasil iterasi
                $iterasi1 = $iterasi-1;
                echo"
                <table border=1 width=100% id=table1 cellspacing=0 height=166>
                <tr>
                <td colspan=2 align=center height=33 bgcolor=#00FF00><b>
                <font face=Verdana size=6>Kesimpulan Metode Bisection</font></b></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Taksiran Atas</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_a</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Taksiran Bawah</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_b</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
                <td width=64%><font face=Verdana>&nbsp;$iterasi1</font></td>
                </tr>
                <tr>
                <td width=34%><font face=Verdana>Nilai Akar yang ditemukan</font></td>
                <td width=64%><font face=Verdana>&nbsp;$value_c</font></td>
                </tr>
                </table>
                ";
        }
    }
?>