<html>
<body>

<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";

$dic = array (
    'voyelles' => "aeiouyO",
    'consonnes' => "bcdfghjklmnpqrstvwxz")
;

$nbvoyelles = 0;
$nbconsonnes = 0;

for ($i=0; isset($str[$i]) ; $i++) {

    for ($x=0; isset($dic['voyelles'][$x]) ; $x++) {
        if ( $str[$i] == $dic['voyelles'][$x] ) 
            $nbvoyelles++;
        }
    }

// echo "$nbvoyelles"."<br />";

for ($i=0; isset($str[$i]) ; $i++) {

    for ($y=0; isset($dic['consonnes'][$y]) ; $y++) {
        if ( $str[$i] == $dic['consonnes'][$y] ) 
            $nbconsonnes++;
        }
}

// echo "$nbconsonnes" . "<br />";

?>


<table>
<thead>
    <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td><?php echo $nbvoyelles ?> </td>
        <td><?php echo $nbconsonnes ?></td>
    </tr>
</tbody>
</table>
</body>
</html>
