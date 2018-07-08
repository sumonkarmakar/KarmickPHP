<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php      

$matrix=array();

$matrix2=array();

function check_col($rows,$x)

{

    for ($i=0;$i<(count($rows)-1);$i++)

        {

            $o="".($i+1)."";

            $currentcols=explode(" ",$rows[$i]);

            $nextcols=explode(" ",$rows[$o]);

            if(count($currentcols)!=count($nextcols))

            {

                echo "The number of columns must be the same in every row. Try again.

                The error lies on row $o and ".($o+1)." in matrix $x. <a href='test.php'>Try again?</a>";

                die();

            }

            else

            {

                echo "The number of columns is the same in the following two rows in matrix $x.                Rows $o and ".($o+1).". <br />";

            }

            if ($i==(count($rows)-2))

            {

                echo "Second test completed on matrix $x. There are an equal number of columns in every row. <Br />";

            }

        }

}

function check_int($rows,$x)

{

    for ($i=0;$i<count($rows);$i++)

        {

            $colentries=explode(" ",$rows[$i]);

            for ($o=0;$o<count($colentries);$o++)

            {

                if ($x==1)

                {

                     global $matrix;

                     $matrix[$i][$o]=$colentries[$o];

                }

                else if ($x==2)

                {

                     global $matrix2;

                     $matrix2[$i][$o]=$colentries[$o];

                }

                    

                if (!(is_numeric($colentries[$o])))

                {

                    

                    echo "All entries must be integers. More than likely you have a trailin space which is causing this error. Hit the back button on your browser and edit your entries.";

                    die();

                }

                    

            }

        }

         echo " Third test passed. All entries in matrix $x are numeric.<br />";   

}

if (isset($_GET['process']))

{

    if ($_GET['process']=="yes")

    {

        $mat1=$_POST['mat1'];

        $mat2=$_POST['mat2'];

        $rows1=explode(";",$mat1);

        $rows2=explode(";",$mat2);

        $columns1=explode(" ",$rows1['0']);

        $columns2=explode(" ",$rows2['0']);

        if (count($rows2)!=count($columns1))

        {

            echo " The number of rows in matrix 2 must be equal to the number of columns in matrix 1. <a href='test.php'>Try again?</a>";

            die();

        }

        else

        {

            echo "First test passed. The number of rows in matrix two does equal the number of columns in matrix one.<br />";

        }

        check_col($rows1,1);

        check_col($rows2,2);

        check_int($rows1,1);

        check_int($rows2,2);

        echo "The resulting matrix will be a ".count($rows1)." by ".count($columns2)." matrix. <br /> Here is the resulting matrix :<br />";

        

        global $matrix,$matrix2;

        $array1=array();

        for ($x=0;$x<count($rows1);$x++)

        {

                  for ($y=0;$y<count($columns2);$y++)

                  {

                        for ($z=0;$z<count($rows2);$z++)

                          {

                            $array1[]=$matrix[$x][$z]*$matrix2[$z][$y];                     

                          }  

                  }

                }

                $entry=0;

                $actualentry=1;

                for ($w=0; $w<count($array1);$w++)

                {

                  if ((($w % count($columns1))==0) && ($w != 0))

                  {

                    echo "Entry ".$actualentry.":";

                    echo "$entry <Br />";

                    $actualentry++;

                    $entry=0;

                  }

                        $entry+=$array1[$w];

                }

                echo "Entry ".$actualentry.":";

                echo $entry;  

    }

}

else

{

 echo " Seperate rows with a ; and columns are seperated using spaces. Pretty intuitive,ain't it? Please remember to not put a space between rows. I.E. '2 4 6 7;2 4 6 8' is correct. However, '2 3 4 5; 3 2 3 3' is not correct.

        <form action='test.php?process=yes' method='POST'>

        Matrix 1:<input type='text' length='70' name='mat1'></input><br />

        Matrix 2:<input type='text' length='70' name='mat2'></input><br />

        <input type='submit'></input>

        </form>";

}

      

?> 

</body>
</html>