<html>
<head>
<style>
table,th,td
{
border:1px solid black;
}
table
{
width:50%;
}
th
{
height:30px;
}
</style>
</head>
<body>
<h1><center>Rock Paper Scissors Game</center></h1>
<?php
for($i=1;$i<=50;$i++)
{
echo"<h3><center>Round $i</h3></center>";
$n12=$n21=$n13=$n31=$n14=$n41=$n23=$n32=$n24=$n42=$n34=$n43=0;
$n1=rand(1,3);
$n2=rand(1,3);
$n3=rand(1,3);
$n4=rand(1,3);
switch($n1)
{
	case 1:$n1choice="rock";
	break;
	case 2:$n1choice="paper";
	break;
	case 3:$n1choice="scissors";
	break;
}
switch($n2)
{
	case 1:$n2choice="rock";
	break;
	case 2:$n2choice="paper";
	break;
	case 3:$n2choice="scissors";
	break;
}
switch($n3)
{
	case 1:$n3choice="rock";
	break;
	case 2:$n3choice="paper";
	break;
	case 3:$n3choice="scissors";
	break;
}
switch($n4)
{
	case 1:$n4choice="rock";
	break;
	case 2:$n4choice="paper";
	break;
	case 3:$n4choice="scissors";
	break;
}
echo"<table>";
echo"<tr>";
echo"<th>player1</th>";
echo"<th>player2</th>";
echo"<th>player3</th>";
echo"<th>player4</th>";
echo"</tr>";
echo"<tr>";
echo"<td>$n1choice</td>";
echo"<td>$n2choice</td>";
echo"<td>$n3choice</td>";
echo"<td>$n4choice</td>";
echo"</tr>";
echo"</table>";
if($n1==1){
        if($n2==2)
            $n21+=1;
        if($n3==2)
            $n31+=1;
        if($n4==2)
            $n41+=1;
        if($n2==3)
            $n12+=1;
        if($n3==3)
            $n13+=1;
        if($n4==3)
            $n14+=1;
	}
    if($n1==2){
        if($n2==1)
            $n12+=1;
        if($n3==1)
            $n13+=1;
        if($n4==1)
            $n14+=1;
        if($n2==3)
            $n21+=1;
        if($n3==3)
            $n31+=1;
        if($n4==3)
            $n41+=1;
	}
    if($n1==3){
        if($n2==2)
            $n12+=1;
        if($n3==2)
            $n13+=1;
        if($n4==2)
            $n14+=1;
        if($n2==1)
            $n21+=1;
        if($n3==1)
            $n31+=1;
        if($n4==1)
            $n41+=1;
	}
    if($n2==1){
        if($n3==2)
            $n32+=1;
        if($n4==2)
            $n42+=1;
        if($n3==3)
            $n23+=1;
        if($n4==3)
            $n24+=1;
	}
    if($n2==2){
        if($n3==1)
            $n23+=1;
        if($n4==1)
            $n24+=1;
        if($n3==3)
            $n32+=1;
        if($n4==3)
            $n42+=1;
	}
    if($n2==3){ 
        if($n3==2)
            $n23+=1;
        if($n4==2)
            $n24+=1;
        if($n3==1)
            $n32+=1;
        if($n4==1)
            $n42+=1;
	}
    if($n3==1){
        if($n4==2)
            $n43+=1;
        if($n4==3)
            $n34+=1;
	}
    if($n3==2){
        if($n4==1)
            $n34+=1;
        if($n4==3)
            $n43+=1;
	}
    if($n3==3){ 
        if($n4==2)
            $n34+=1;
        if($n4==1)
            $n43+=1;
	}
echo"<table>";
echo"<tr>";
echo"<th>Total</th>";
echo"<th></th>";
echo"<th colspan='4'>Against</th>";
echo"</tr>";
echo"<tr>";
echo"<td></td>";
echo"<td></td>";
echo"<td>player1</td>";
echo"<td>player2</td>";
echo"<td>player3</td>";
echo"<td>player4</td>";
echo"</tr>";
echo"<tr>";
echo"<th rowspan='4'>Player wins</th>";
echo"<td>player1</td>";
echo"<td>-</td>";
echo"<td>$n12</td>";
echo"<td>$n13</td>";
echo"<td>$n14</td>";
echo"</tr>";
echo"<tr>";
echo"<td>player2</td>";
echo"<td>$n21</td>";
echo"<td>-</td>";
echo"<td>$n23</td>";
echo"<td>$n24</td>";
echo"</tr>";
echo"<tr>";
echo"<td>player3</td>";
echo"<td>$n31</td>";
echo"<td>$n32</td>";
echo"<td>-</td>";
echo"<td>$n34</td>";
echo"</tr>";
echo"<tr>";
echo"<td>player4</td>";
echo"<td>$n41</td>";
echo"<td>$n42</td>";
echo"<td>$n43</td>";
echo"<td>-</td>";
echo"</tr>";
echo"</table>";
}
?>
</body>
</html>