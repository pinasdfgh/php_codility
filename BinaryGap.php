// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($N) {
    // write your code in PHP7.0
    $max=0;
    $count=0;
    $binN=0;
    $Frist=0;

    for($i=$N;$i>1;$i/=2){
        $binN=$i%2;
        //print $binN;
        if($binN==1){     
            $max=$max>$count?$max:$count;
            //print $count;
            $count=0;
            $Frist++;
        }else{
            if($Frist!=0)$count++;
        }
        
    }
    return $max;
}