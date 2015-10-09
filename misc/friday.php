<?php

    include "top.php";
    
    $file = fopen("friday.sql","r") or die("Error");
    
    //now print out each record
    $query = fread($file, filesize("friday.sql"));
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 0, false, false);
    $span = count($info2);
    
    print '<p> Query: ' . $query;
    print '<p> Record Total: ' . $span;
    
    print "<table class = 'one'>";
    
    $columns = 2;    
    
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
    
include "footer.php";
?>