<?php

    include "top.php";

    $file = fopen("q10.sql","r") or die("Error");
    
    //now print out each record
    $query = fread($file, filesize("q10.sql"));
    
    //now print out each record
    $info2 = $thisDatabaseReader->select($query, "", 0, 1, 2, 0, false, false);
    $span = count($info2);
    
    print '<p> Query: ' . $query;
    print '<p> Record Total: ' . $span;
    
    print "<table>";
    $columns= 2;
    
    $highlight = 0; // used to highlight alternate rows
    foreach ($info2 as $rec) {
        $highlight++;
        if ($highlight % 2 != 0) {
            $style = ' odd ';
        } else {
            $style = ' even ';
        }
        print '<tr class="' . $style . '">';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }
    // all done
    print '</table>';
    print '<p> There are a total number of 58 students in the Kalkin'
        . ' building on Wednesdays, but there are less students in the '
        . 'Kalkin building on Fridays at 43 total students. I gathered '
        . 'this information from comparing the number of students in '
        . 'Kalkin on each day by using unix commands in Terminal.</p>';
            
include "footer.php";
?>
