<?php 
// the query
global $wpdb;
$result = $wpdb->get_results( "SELECT ID, post_name, post_title, 'guid'  from wp_posts WHERE post_type='post' ORDER by ID DESC Limit 5");

$id;

echo "<div class=\"content-wrap content-idx\"> 
<h2><i class=\"fa fa-graduation-cap\"></i> Tin mới</h2><div id=\"pagin\"><ul id=\"paginWrap\">";

echo "<div class=\"swPage\" style=\"float: left; width: 270px;\">";

        foreach ($result as $row) {    
            echo " <li> <i class=\"fa fa-angle-right\"></i>";
            echo " <a href=\"http://localhost/WordPress/$row->post_name/\">$row->post_title</a>  ";
            echo " <img src=\"http://localhost/WordPress/wp-content/uploads/2022/02/icon_new.gif\">";
            $id = $row->ID;
            echo "</li> ";
         }
echo "</div>";

echo " $id";
$result2 = $wpdb->get_results( "SELECT post_name, post_title, 'guid'  from wp_posts WHERE post_type='post' and ID <$id ORDER by ID DESC Limit 5");

echo "<div class=\"swPage\" style=\"float: left; width: 270px;\">";

        foreach ($result2 as $row) {  
            echo " <li> <i class=\"fa fa-angle-right\"></i>";  
            echo " <a href=\"http://localhost/WordPress/$row->post_name/\">$row->post_title</a>  ";
            echo " <img src=\"http://localhost/WordPress/wp-content/uploads/2022/02/icon_new.gif\">";

            echo "</li> ";
         }
echo "</div>";

 echo "</ul>
 <div class=\"swControls\" style=\"left: 50%; margin-left: -16px;\"><a href=\"\" class=\"swShowPage\">1</a><a href=\"\" 
 class=\"swShowPage active\">2</a></div>
    </div>
</div>";



?>