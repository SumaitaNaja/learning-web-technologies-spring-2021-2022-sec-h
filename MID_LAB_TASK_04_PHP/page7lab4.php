<?php

for($i=1;$i<=3;$i++)
{
  for($j=1;$j<=$i;$j++)
{
	echo " * ";
  }
  echo '</br>';
}

for($i=3;$i>=1;$i--)
{
  for($j=1;$j<=$i;$j++)
{
	echo " $j ";
  }
  echo '</br>';
}

$str="ABCDEF";
$count=strlen($str);
for($i=0;$i<$count;$i++)
{
	for($j=0;$j<=$i;$j++)
{
		echo " $str[$j] ";
	}
	echo '</br>';
}

	



?>