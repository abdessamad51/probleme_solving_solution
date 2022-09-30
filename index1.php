<?php
  
 




$arr=explode(" ",$str);

$res=strlen($arr[0]);

for($i=1;$i<count($arr);$i++) {
  if( strlen($arr[$i])>$res) {
     
    $res=strlen($arr[$i]);
    $j=$arr[$i];
  }
}
return $j;



 




function hy($var) {
  return $var=="good";
}
var_dump(hy("good")) ;


function sort_string($str) {
  $stringParts = str_split($str);
  sort($stringParts);
  return implode($stringParts); // abc
}
function groupAnagrams($strs) {
      $arr_pranc=[];
      $arr_final=[];
      $arr_pranc_copy=[];
      for($i=0;$i<count($strs);$i++) {
          $arr_pranc[]=sort_string($strs[$i]);
          //arrpranc=[aet,eat,ant,eat,ant,abt]
      }
      for($i=0;$i<count($arr_pranc);$i++) {
          // print_r($strs);    
          $arr_final=[];
          $arr_final[]=$strs[0];
          echo $strs[0].'</b>';

          for($j=1;$j<count($arr_pranc);$j++) {
            if($arr_pranc[$i]==$arr_pranc[$j] ) {
                 echo $strs[$j].'<br>';
                $arr_final[]=$strs[$j];//[eat,tea,ate]
                array_splice($arr_pranc,$j , 1); 
                array_splice($strs,$j , 1);  
            } 
          }
          array_splice($arr_pranc,0 , 1); 
          array_splice($strs,0 , 1);   
          $arr_pranc_copy[]=$arr_final;//[eat,tea,ate],
      }
      echo '<pre>';
       print_r($arr_pranc_copy);
     echo '</pre>';
        
        
      
          
}
echo groupAnagrams(["eat","tea","tan","ate","nat","bat","abx"]);

mkdir("Data Strucure linked list");

$handle=fopen('osma.php','a+');
echo fread($handle,10000);
fwrite($handle,'=hshhhshhhhdhdh waw');


 

//$arr=file('C:\Users\abdessamad\Documents\cv.pdf');
//print_r($arr);
//echo count($arr);
// foreach($arr as $ar) {
//   echo $ar.'<br>';
// }

// $arr=file('osma.php');
// $hand=fopen('osma.php','w');
// foreach($arr as $ar) {
//   if(trim($ar)=="othman") {
//     fwrite($hand,"abdessamad\r\n");
//     continue;
//   }
//   fwrite($hand,$ar); 
// }
// fclose($hand);
// fwrite($handle,'Iam her guys');
// ftell($handle);
// fclose($handle);

function da($arr) {
  echo '<pre>';
  var_dump($arr);
  echo '</pre>';
}
//da([1,2,3,4,5,5);
//da(glob("*.*"));
//@unlink('osma.php');  

//file_get_contents("https://google.com");


//echo filter_input(INPUT_GET,"name");
 

//Best way to Detect Page Refresh. or Not ?(Ctrl+F5,F5,Ctrl+R, Enter)

// if(isset($_GET['name']))
// {
//   $GLOBALS['a'].=filter_input(INPUT_GET,"name");
//   echo $a;
// } else {
//  global $a;
// }

// $pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&($_SERVER['HTTP_CACHE_CONTROL'] === 'maxage=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'nocache'); 
// if($pageRefreshed == 1){
// //     $arr[]=filter_input(INPUT_GET,"name");
// //     echo "<table style='margintop:10px' border='1'>  ";
// // echo "<th>Name</th>";
// // foreach($arr as $ar) {
// //    echo "<tr>";
// //    echo "<td> $ar </td>";
// //    echo "</tr>";
// // }
//     echo "Yes page Refreshed";
// }else{
//     $arr=[];
// }
 
?>
<! <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF8">
  <meta httpequiv="XUACompatible" content="IE=edge">
  <meta name="viewport" content="width=devicewidth, initialscale=1.0">
  <title>Document</title>
</head>
<body>
        <form action="" method="get">
          <input type="text" name="name" placehoder="give your name" style="marginbottom:10px"> <br>
          <input type="submit" value="add">
        </form>
        
</body>
</html> >
<?php

// function Buggy($arr) {
//   $arr1=array_map( fn($str)=>preg_match_all("/[AZ]/", $str),$arr);
//   return array_reduce($arr1,fn($p,$n)=>$p+$n); 
// }
// echo  Buggy(["SOLO", "hello", "Tea", "wHat"]);

// funct9ion splitCode($str) {
//   return [substr($str, 0,strpos($str,filter_var($str,FILTER_SANITIZE_NUMBER_INT))),(int)filter_var($str,FILTER_SANITIZE_NUMBER_INT)];
//  // return [preg_replace('/\d+/', '', $item), (int) preg_replace('/[AZ]+/', '', $item)];
  
// }
// da(splitCode("TEWA8392"));

// $A=3000000000000000000;
// if(is_int($A))var_dump(intval($A));


// $ar =[ 
//     "abdessamad"=>"rami",
//     "Fati"=>"Raki",
//     "idrissi"=>"hajr"
// ];

// echo $ar["abdessamad"];
// $callback = function()
// {
// echo "callback achieved";
// };
// $callback();


// function reverse($s) {
// 	$i=strlen($s)1;
// 	$res="";
// 	while(!empty($s[$i])) {
// 		$res.=$s[$i];
// 		$i;
// 	}
// 	return $res;
// }
// echo reverse("rami");

// function searchFrom($str) {
//   var_dump(x);
//   echo strlen("from module_name import object");
 
// }
// echo searchFrom("import object from module_name");

// <! if(filter_var('asbess@gmail.com',FILTER_VALIDATE_EMAIL)) {
//   echo 'good';
// }
 
// echo str_random(8); >
//  function func($arg)  {
//   $result = 0;
//   for($i=0; $i<$arg; $i++) {
//     $result = $result + $i;
//   }
//   return $result;
// }
// echo func(5);

// $a = array(1, 2);
// $b = array(4, 5, 6);
 


// array_map(function () { return 'a'}, $ar1, $arr2);
//var_dump(arg([1, 2], [4, 5, 6], 5)); 
     
// $t=in_array(8,array_map(function () { return array_sum(func_get_args());}, $a, $b)); 
//  var_dump($t);
//  in_array($v,array_map(function () { return array_sum(func_get_args());}, $a, $b));

// function arg($arr) {
//   $result = true;
    
//   foreach ($arr as $i => $v) {
//       if ($i%2 !== $v%2) {
//           $result = false;
//       }
//   }
//   return $result;   
 //return  count(array_filter( $arr,function($r) {return   $r%2==0;}))==count($arr)count(array_filter( $arr,function($r) {return   $r%2==0;}));
// }
//   echo '<pre>';
//  var_dump(arg([2,4,3,9])) ;
//   echo '</pre>';
 

function pair($arr,$n) {
       array_reduce($arr,function($p,$n)  {
              $t=$p+$n;
              // if($t==$n) {
              //   return $t;
                
              // }
              return $n;
       });
}


// ECHO pair(3,3);


function hy($arr) {
$soccer1=0;
$soccer2=0;
$i=0;
$j=count($arr[0])1;
foreach($arr as $ar) {
    $soccer1+=$ar[$i];
    $soccer2+=$ar[$j$i];
    $i++;   
}
$res=abs($soccer1$soccer2);

return $res;
}

echo hy([[1,2,3],[4,5,6],[9,8,9]]);

