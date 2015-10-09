<?php

    include "top.php";

    $file = fopen("q06.sql","r") or die("Error");
    
    //now print out each record
    $query = fread($file, filesize("q06.sql"));
    $info2 = $thisDatabaseReader->select($query, "", 0, 0, 0, 1, false, false);
    $span = count($info2);
    
    print '<p> Query: ' . $query . '<br><br>';
    print '<p> Record Total: ' . $span;
    
    print "<table>";
    print "<thead><tr><th>First Name</th><th>Phone</th><th>Salary</th></tr><thead>";

    $columns= 3;
    
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

