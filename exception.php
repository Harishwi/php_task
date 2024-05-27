<?php

function divide($a,$b){
if($b==0){
    throw new Exception("Divide By Zero");
}
else{
    echo "result=".($a/$b);
}
}
try{
    divide(2,3);
}
catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message.";
}
finally {
    echo "Process complete.";
  }

?>

