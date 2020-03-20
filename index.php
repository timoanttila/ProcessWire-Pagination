<?php
$item = $page->children("limit=5, sort=-created");
echo $pag = "<div class='mb-4'>". $item->renderPager() ."</div>";
echo "<div id='articles'>";
foreach($item as $item) echo "<div class='article'><h2>$item->title</h2>$item->body</div>";
echo "</div>$pag";
?>
