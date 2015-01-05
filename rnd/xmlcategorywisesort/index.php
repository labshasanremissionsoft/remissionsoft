<?php
$file = simplexml_load_file("category-rss.xml");
$result =array();
foreach ($file->children() as $child) {
    foreach ($child as $key => $value) {

        if(!empty($value)){
            $i = 3;
            foreach ($value->category as $key => $value) {
                $result["$value"] = $i;
                $i--;
            }
        }

    }
}
echo '<pre>';
print_r($result);
echo '</pre>';

?>