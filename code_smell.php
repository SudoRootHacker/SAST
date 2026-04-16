<?php

function badFunction($a,$b,$c,$d,$e){

$unused = "test";

if($a==1){
if($b==2){
if($c==3){
if($d==4){
if($e==5){

echo "Deep nesting";

}
}
}
}
}

}

badFunction(1,2,3,4,5);

?>
