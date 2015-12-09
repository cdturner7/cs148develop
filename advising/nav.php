<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "tables") {
            print '<li class="activePage">Tables</li>';
        } else {
            print '<li><a href="tables.php">Tables</a></li>';
        }
        
        if ($path_parts['filename'] == "schemaDiagram") {
            print '<li class="activePage">Schema</li>';
        } else {
            print '<li><a href="schemaDiagram.pdf">Schema</a></li>';
        }
        
        if ($path_parts['filename'] == "ERD") {
            print '<li class="activePage">ER Diagram</li>';
        } else {
            print '<li><a href="ERD.pdf">ER Diagram</a></li>';
        }
        
        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->