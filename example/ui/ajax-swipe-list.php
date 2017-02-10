<?php
$offset = abs(@$_GET['offset']);
$numload = abs(@$_GET['numload']);

for($i = 0; $i< $numload; $i++)
{
	$j = $offset + $i;
	?>
    <li>
        	<div>
            <img src="../images/horticulture/anggur-hijau.jpg" width="100%">
            <div class="tools"><?php echo $j;?></div>
            </div>
    </li>
    <?php
}
?>