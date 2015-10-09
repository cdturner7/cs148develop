<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "select") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="select.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "friday") {
            print '<li class="activePage">Friday Assignment</li>';
        } else {
            print '<li><a href="friday.php">Friday Assignment</a></li>';
        }
        
        /*if ($path_parts['filename'] == "populate-table.php") {
            print '<li class="activePage">Populate Tables</li>';
        } else {
            print '<li><a href="populate-table.php">Populate Tables</a></li>';
        }*/
        
        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->