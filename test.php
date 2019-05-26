<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bisection</title>
</head>
<body>

    <center>Metode Bisection</center>

    <form action="proses.php" method="post" name="form1">
        <table width="241" border="0" align="left" cellpadding="3" cellspacing="1" bgcolor="#CC0000">
            <tr bgcolor="#FF8C8C">
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr bgcolor="#FFC6C6">
                <td width="129">Nilai A </td>
                <td width="112"><input name="a" type="text" id="a" size="5"></td>
            </tr>
            <tr bgcolor="#FFC6C6">
                <td>Nilai B </td>
                <td><input name="b" type="text" id="b" size="5"></td>
            </tr>
            <tr bgcolor="#FFC6C6">
                <td>Nilai Toleransi</td>
                <td><input name="tol" type="text" id="tol" size="5"></td>
            </tr>
            <tr bgcolor="#FF8C8C">
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penyelesaian</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <?php
        if (isset($_GET['number'])) 
        {
            if ($_GET['number']=="one") 
            {
                function func($x) 
                {
                    $f = ($x * $x) - ($x) - 6 ;
                    return $f;
                }

                $value_a                = $_POST['value_a'];
                $value_b                = $_POST['value_b'];
                $value_t                = $_POST['value_t'];
                $value_c                = ($value_a + $value_b) / 2;
                $f_a                    = func($value_a);
                $f_b                    = func($value_b);
                $f_c                    = func($value_c);
                $iterasi                = 1;
                
                if(($f_a * $f_b) >= 0 || $f_a >= 0 || $f_b <= 0)
                {
                    if(($f_a * $f_b) >= 0)
                    {    
                        echo"
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) . F(b) > 0, Silakan lakukan penginputan Ulang</h3>
                            </div>
                        ";
                    }
                    if ($f_a >= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) Harus Lebih Kecil Dari 0</h3>
                            </div>
                        ";
                    }
                    if ($f_b <= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(b) Harus Lebih Besar Dari 0</h3>
                            </div>
                        ";
                    }
                }            
                else
                { 

                    echo "
                        <div class='container mt-5'>
                            <div class='row'>
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='table-primary'>
                                            <th colspan=2 class='text-center'>Kesimpulan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nilai a</td>
                                            <td>$value_a</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai b</td>
                                            <td>$value_b</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai c</td>
                                            <td>$value_c</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";

                    echo "
                        <div class='container mt-2'>
                            <div class='row'>
                                <table class='table table-striped table-bordered'>
                                    <thead>
                                        <tr class='table-warning'>
                                            <th colspan=7 class='text-center'>Tabel</th>
                                        </tr>
                                        <tr>
                                            <th>Iterasi</th>
                                            <th>a</th>
                                            <th>b</th>
                                            <th>c</th>
                                            <th>F(a)</th>
                                            <th>F(b)</th>
                                            <th>F(c)</th>
                                        </tr>
                                    </thead>                        
                    ";

                    while(abs($value_t) >= $value_t) 
                    {
                        $value_c = ($value_a + $value_b) / 2;
                        $f_a = func($value_a);
                        $f_b = func($value_b);
                        $f_c = func($value_c);
                        
                        echo "
                            <tbody>
                                <tr>
                                    <td>$iterasi</td>
                                    <td>$value_a</td>
                                    <td>$value_b</td>
                                    <td>$value_c</td>
                                    <td>$f_a</td>
                                    <td>$f_b</td>
                                    <td>$f_c</td>
                                </tr>
                            </tbody>
                        ";

                        $iterasi++;

                        if($f_a * $f_c < 0) 
                        {
                            $value_a = $value_c;
                        }
                        if($f_b * $f_c > 0)
                        {
                            $value_b = $value_c;
                        }
                        if($f_c == 0)
                        {
                            exit;
                        }
                    }   
                    echo "
                                </table>
                            </div>
                        </div>
                    ";
                    
                }
            }
            elseif ($_GET['number']=="two") 
            {
                function func($x) 
                {
                    $f = ($x * $x *$x) - ($x) - 6 ;
                    return $f;
                }

                $value_a                = $_POST['value_a'];
                $value_b                = $_POST['value_b'];
                $value_t                = $_POST['value_t'];
                $value_c                = ($value_a + $value_b) / 2;
                $f_a                    = func($value_a);
                $f_b                    = func($value_b);
                $f_c                    = func($value_c);
                $iterasi                = 1;
                
                if(($f_a * $f_b) >= 0 || $f_a >= 0 || $f_b <= 0)
                {
                    if(($f_a * $f_b) >= 0)
                    {    
                        echo"
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) . F(b) > 0, Silakan lakukan penginputan Ulang</h3>
                            </div>
                        ";
                    }
                    if ($f_a >= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) Harus Lebih Kecil Dari 0</h3>
                            </div>
                        ";
                    }
                    if ($f_b <= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(b) Harus Lebih Besar Dari 0</h3>
                            </div>
                        ";
                    }
                }            
                else
                { 

                    echo "
                        <div class='container mt-5'>
                            <div class='row'>
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='table-primary'>
                                            <th colspan=2 class='text-center'>Kesimpulan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nilai a</td>
                                            <td>$value_a</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai b</td>
                                            <td>$value_b</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai c</td>
                                            <td>$value_c</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";

                    echo "
                        <div class='container mt-2'>
                            <div class='row'>
                                <table class='table table-striped table-bordered'>
                                    <thead>
                                        <tr class='table-warning'>
                                            <th colspan=7 class='text-center'>Tabel</th>
                                        </tr>
                                        <tr>
                                            <th>Iterasi</th>
                                            <th>a</th>
                                            <th>b</th>
                                            <th>c</th>
                                            <th>F(a)</th>
                                            <th>F(b)</th>
                                            <th>F(c)</th>
                                        </tr>
                                    </thead>                        
                    ";

                    while(abs($value_t) >= $value_t) 
                    {
                        $value_c = ($value_a + $value_b) / 2;
                        $f_a = func($value_a);
                        $f_b = func($value_b);
                        $f_c = func($value_c);
                        
                        echo "
                            <tbody>
                                <tr>
                                    <td>$iterasi</td>
                                    <td>$value_a</td>
                                    <td>$value_b</td>
                                    <td>$value_c</td>
                                    <td>$f_a</td>
                                    <td>$f_b</td>
                                    <td>$f_c</td>
                                </tr>
                            </tbody>
                        ";

                        $iterasi++;

                        if($f_a * $f_c < 0) 
                        {
                            $value_a = $value_c;
                        }
                        if($f_b * $f_c > 0)
                        {
                            $value_b = $value_c;
                        }
                        if($f_c == 0)
                        {
                            exit;
                        }
                    }   
                    echo "
                                </table>
                            </div>
                        </div>
                    ";
                    
                }
            }
            elseif ($_GET['number']=="three") 
            {
                function func($x) 
                {
                    $value_number   = $x;
                    $value_rank     = 5;
                    $rank           = pow($value_number, $value_rank);
                    $root           = sqrt($rank);
                    $f = $root - ($value_number) - 6;
                    return $f;
                }

                $value_a                = $_POST['value_a'];
                $value_b                = $_POST['value_b'];
                $value_t                = $_POST['value_t'];
                $value_c                = ($value_a + $value_b) / 2;
                $f_a                    = func($value_a);
                $f_b                    = func($value_b);
                $f_c                    = func($value_c);
                $iterasi                = 1;
                
                if(($f_a * $f_b) >= 0 || $f_a >= 0 || $f_b <= 0)
                {
                    if(($f_a * $f_b) >= 0)
                    {    
                        echo"
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) . F(b) > 0, Silakan lakukan penginputan Ulang</h3>
                            </div>
                        ";
                    }
                    if ($f_a >= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) Harus Lebih Kecil Dari 0</h3>
                            </div>
                        ";
                    }
                    if ($f_b <= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(b) Harus Lebih Besar Dari 0</h3>
                            </div>
                        ";
                    }
                }            
                else
                { 

                    echo "
                        <div class='container mt-5'>
                            <div class='row'>
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='table-primary'>
                                            <th colspan=2 class='text-center'>Kesimpulan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nilai a</td>
                                            <td>$value_a</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai b</td>
                                            <td>$value_b</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai c</td>
                                            <td>$value_c</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";

                    echo "
                        <div class='container mt-2'>
                            <div class='row'>
                                <table class='table table-striped table-bordered'>
                                    <thead>
                                        <tr class='table-warning'>
                                            <th colspan=7 class='text-center'>Tabel</th>
                                        </tr>
                                        <tr>
                                            <th>Iterasi</th>
                                            <th>a</th>
                                            <th>b</th>
                                            <th>c</th>
                                            <th>F(a)</th>
                                            <th>F(b)</th>
                                            <th>F(c)</th>
                                        </tr>
                                    </thead>                        
                    ";

                    while(abs($value_t) >= $value_t) 
                    {
                        $value_c = ($value_a + $value_b) / 2;
                        $f_a = func($value_a);
                        $f_b = func($value_b);
                        $f_c = func($value_c);
                        
                        echo "
                            <tbody>
                                <tr>
                                    <td>$iterasi</td>
                                    <td>$value_a</td>
                                    <td>$value_b</td>
                                    <td>$value_c</td>
                                    <td>$f_a</td>
                                    <td>$f_b</td>
                                    <td>$f_c</td>
                                </tr>
                            </tbody>
                        ";

                        $iterasi++;

                        if($f_a * $f_c < 0) 
                        {
                            $value_a = $value_c;
                        }
                        if($f_b * $f_c > 0)
                        {
                            $value_b = $value_c;
                        }
                        if($f_c == 0)
                        {
                            exit;
                        }
                    }   
                    echo "
                                </table>
                            </div>
                        </div>
                    ";
                    
                }
            }
            elseif ($_GET['number']=="four") 
            {
                function func($x) 
                {
                    $value_number   = $x;
                    $value_rank     = 5;
                    $rank           = pow($value_number, $value_rank);
                    $root           = sqrt($rank);
                    $f = $root - ($value_number) - 65 ;
                    return $f;
                }

                $value_a                = $_POST['value_a'];
                $value_b                = $_POST['value_b'];
                $value_t                = $_POST['value_t'];
                $value_c                = ($value_a + $value_b) / 2;
                $f_a                    = func($value_a);
                $f_b                    = func($value_b);
                $f_c                    = func($value_c);
                $iterasi                = 1;
                
                if(($f_a * $f_b) >= 0 || $f_a >= 0 || $f_b <= 0)
                {
                    if(($f_a * $f_b) >= 0)
                    {    
                        echo"
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) . F(b) > 0, Silakan lakukan penginputan Ulang</h3>
                            </div>
                        ";
                    }
                    if ($f_a >= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(a) Harus Lebih Kecil Dari 0</h3>
                            </div>
                        ";
                    }
                    if ($f_b <= 0) 
                    {
                        echo "
                            <div class='alert alert-danger mt-3'>
                                <h3 class='text-center'>Nilai F(b) Harus Lebih Besar Dari 0</h3>
                            </div>
                        ";
                    }
                }            
                else
                { 

                    echo "
                        <div class='container mt-5'>
                            <div class='row'>
                                <table class='table table-bordered'>
                                    <thead>
                                        <tr class='table-primary'>
                                            <th colspan=2 class='text-center'>Kesimpulan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nilai a</td>
                                            <td>$value_a</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai b</td>
                                            <td>$value_b</td>
                                        </tr>
                                        <tr>
                                            <td>Nilai c</td>
                                            <td>$value_c</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    ";

                    echo "
                        <div class='container mt-2'>
                            <div class='row'>
                                <table class='table table-striped table-bordered'>
                                    <thead>
                                        <tr class='table-warning'>
                                            <th colspan=7 class='text-center'>Tabel</th>
                                        </tr>
                                        <tr>
                                            <th>Iterasi</th>
                                            <th>a</th>
                                            <th>b</th>
                                            <th>c</th>
                                            <th>F(a)</th>
                                            <th>F(b)</th>
                                            <th>F(c)</th>
                                        </tr>
                                    </thead>                        
                    ";

                    while(abs($value_t) >= $value_t) 
                    {
                        $value_c = ($value_a + $value_b) / 2;
                        $f_a = func($value_a);
                        $f_b = func($value_b);
                        $f_c = func($value_c);
                        
                        echo "
                            <tbody>
                                <tr>
                                    <td>$iterasi</td>
                                    <td>$value_a</td>
                                    <td>$value_b</td>
                                    <td>$value_c</td>
                                    <td>$f_a</td>
                                    <td>$f_b</td>
                                    <td>$f_c</td>
                                </tr>
                            </tbody>
                        ";

                        $iterasi++;

                        if($f_a * $f_c < 0) 
                        {
                            $value_a = $value_c;
                        }
                        elseif($f_b * $f_c > 0)
                        {
                            $value_b = $value_c;
                        }
                        elseif($f_c == 0)
                        {
                            exit;
                        }
                    }   
                    echo "
                                </table>
                            </div>
                        </div>
                    ";
                    
                }
            }
        }
    ?>

</body>
</html>
