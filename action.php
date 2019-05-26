<?php
    if (isset($_GET['number'])) 
    {
        if ($_GET['number']=="one") 
        {
            $equation = 'F(X) = X<sup>2</sup> - X - 6';
            function func($x) 
            {
                $f = ($x * $x) - ($x) - 6 ;
                return $f;
            }
            
        }
        elseif ($_GET['number']=="two") 
        {
            $equation = 'F(X) = X<sup>3</sup> - X - 6';
            function func($x) 
            {
                $f = ($x * $x *$x) - ($x) - 6 ;
                return $f;
            }

        }
        elseif ($_GET['number']=="three") 
        {
            $equation = 'F(X) = X<sup>2,5</sup> - X - 6';
            function func($x) 
            {
                $value_number   = $x;
                $value_rank     = 5;
                $rank           = pow($value_number, $value_rank);
                $root           = sqrt($rank);
                $f = $root - ($value_number) - 6;
                return $f;
            }
        }
        elseif ($_GET['number']=="four") 
        {
            $equation = 'F(X) = X<sup>2,5</sup> - X - 65';
            function func($x) 
            {
                $value_number   = $x;
                $value_rank     = 5;
                $rank           = pow($value_number, $value_rank);
                $root           = sqrt($rank);
                $f = $root - ($value_number) - 65 ;
                return $f;
            }
        }

        $value_a                = $_POST['value_a'];
        $value_b                = $_POST['value_b'];
        $value_t                = $_POST['value_t'];
        $value_c                = ($value_a + $value_b) / 2;
        $f_a                    = func($value_a);
        $f_b                    = func($value_b);
        $f_c                    = func($value_c);
        $iterasi                = 1;
        $y                      = $value_t;

    }
?>

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
    
   <?php if(($f_a * $f_b) >= 0 || $f_a >= 0 || $f_b <= 0) { ?>

        <?php if(($f_a * $f_b) >= 0) { ?>  
            <div class='alert alert-danger mt-3'>
                <h3 class='text-center'>Nilai F(a) . F(b) > 0, Silakan lakukan penginputan Ulang</h3>
            </div>
        <?php } ?>

        <?php  if ($f_a >= 0) { ?>
            <div class='alert alert-danger mt-3'>
                <h3 class='text-center'>Nilai F(a) Harus Lebih Kecil Dari 0</h3>
            </div>
        <?php } ?>

        <?php if ($f_b <= 0) { ?>
            <div class='alert alert-danger mt-3'>
                <h3 class='text-center'>Nilai F(b) Harus Lebih Besar Dari 0</h3>
            </div>
        <?php } ?>

    <?php } else { ?>

        <div class='container mt-5'>
            <div class='row'>
                <table class='table table-bordered'>
                    <thead>
                        <tr class='table-primary'>
                            <th colspan=2 class='text-center'>Kesimpulan dari <?php echo $equation; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nilai a</td>
                            <td><?php echo $value_a; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai b</td>
                            <td><?php echo $value_b; ?></td>
                        </tr>
                        <tr>
                            <td>Nilai c</td>
                            <td><?php echo $value_c; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

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

                    <?php while(abs($y) >= $value_t) { ?>

                        <?php    
                            $value_c = ($value_a + $value_b) / 2;
                            $f_a = func($value_a);
                            $f_b = func($value_b);
                            $f_c = func($value_c);
                            $y      =$f_c;

                        ?>
                
                        <tbody>
                            <tr>
                                <td><?php echo $iterasi; ?></td>
                                <td><?php echo $value_a; ?></td>
                                <td><?php echo $value_b; ?></td>
                                <td><?php echo $value_c; ?></td>
                                <td><?php echo $f_a; ?></td>
                                <td><?php echo $f_b; ?></td>
                                <td><?php echo $f_c; ?></td>
                            </tr>
                        </tbody>

                        <?php
                            $iterasi++;

                            if($f_a * $f_c >= 0) 
                            {
                                $value_a = $value_c;
                            }
                            else
                            {
                                $value_b = $value_c;
                            }
                        ?>

                    <?php } ?>   

                </table>
            </div>
        </div>
            
    <?php } ?>

</body>
</html>
