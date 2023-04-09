<?php

// // ----- Ex. 1 ----- 
// $n1 = 12;
// $n2 = 30;

// if($n1 > $n2) {
//     echo "Variabila 1 este mai mare decat variabila 2";
// } elseif ($n2 > $n1) {
//     echo "Variabila 2 este mai mare decat variabila 1";
// } else {
//     echo "Variabila 1 si variabila 2 sunt egale";
// }

// // ----- Ex. 2 -----  
// $n1 = 15;
// $n2 = 20;
// $n3 = 25;

// if ($n1 >= $n2 && $n1 >= $n3) {
//     echo "Cel mai mare numar din $n1, $n2, $n3 este $n1";
// } elseif ($n2 >= $n1 && $n2 >= $n3) {
//     echo "Cel mai mare numar din $n1, $n2, $n3 este $n2";
// } else {
//     echo "Cel mai mare numar din $n1, $n2, $n3 este $n3";
// }

// ----- Ex. 3 ----- 

// // // FOR
// for($i = 0; $i < 5; $i++) {
//     echo "Exercitiul 3"."<br>";
// }

// // // WHILE
// $i = 1;
// while ($i <= 5){
//     echo "Exercitiul 3"."<br>";
//     $i++;
// }

// // FOREACH
// $array = array(1,2,3,4,5);
// foreach ($array as $i) {
//     echo "Exercitiul 3"."<br>";
// }

// // SWITCH
// $i = 1;
// while ($i <= 5) {
//     switch ($i) {
//         case 1:
//             echo "Exercitiul 3"."<br>";
//             break;
//         case 2:
//             echo "Exercitiul 3"."<br>";
//             break;
//         case 3:
//             echo "Exercitiul 3"."<br>";
//             break;
//         case 4:
//             echo "Exercitiul 3"."<br>";
//             break;
//         case 5:
//             echo "Exercitiul 3"."<br>";
//             break;
//         default:
//             break;
//     }
//     $i++;
// }

// // ----- Ex. 4 ----- 
// // FOR
// for($i = 1; $i < 26; $i++) {
//     echo $i."<br>";
// }

// // WHILE
// $i = 25;
// while ($i <= 50){
//     echo $i."<br>";
//     $i++;
// }

// // FOREACH
// foreach (range(51, 75) as $number) {
//     echo $number."<br>";
// }

// // SWITCH
// for ($i = 76; $i <= 100; $i++) {
//     switch ($i) {
//         case ($i >= 76 && $i <= 100):
//             echo $i . "<br>";
//             break;
//         default:
//             break;
//     }
// }

// // ----- Ex. 5 ----- 
// function afisare_numere($N) {
//     for ($i = 0; $i <= $N; $i++) {
//         if ($i % 2 == 0) {
//             echo $i . " este par<br>";
//         } else {
//             echo $i . " este impar<br>";
//         }
//     }
// }

// afisare_numere(10);

// // ----- Ex. 6 ----- 
// // Prima imagine 5 x *
// for($i = 0; $i < 5; $i++){
//     echo "*";

//     for($j = 0; $j < 4; $j++){
//         echo "*"; 
//     }
//     echo "<br>";
        
// }

// A doua imagine
// for ($i = 0; $i < 5; $i++) {
//     for ($j = 0; $j < 5; $j++) {
//         if ($j <= $i) {
//             if ($i == 0) {
//                 echo "*2345";
//             } elseif ($i == 1 && $j == 1) {
//                 echo "*345";
//             } elseif ($i == 2 && $j == 2) {
//                 echo "*45";
//             } elseif ($i == 3 && $j == 3) {
//                 echo "*5";
//             } else {
//                 echo "*";
//             }
//         } else {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }

// // A treia imagine
// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 1; $j <= $i; $j++) {
//         echo "*";
//         if ($i == 1 && $j == 1) {
//             echo "23";
//         } 
//     }
//     if ($i == 2) {
//         echo "3";
//     }
//     echo "<br>";
// }

// // ----- Ex. 7 ----- 
// function verifica_triunghi($a, $b, $c) {
//     if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
//         return "Se poate construi un triunghi <br>";
//     } else {
//         return "Nu se poate construi un triunghi<br>";
//     }
// }

// // Exemple de apelare a functiei
// echo verifica_triunghi(3, 4, 5); // Output: Se poate construi un triunghi
// echo verifica_triunghi(1, 2, 3); // Output: Nu se poate construi un triunghi
// echo verifica_triunghi(5, 12, 13); // Output: Se poate construi un triunghi

// // ----- Ex. 8 Extra imagine Slack ----- 
// for ($i = 0; $i < 5; $i++) {
//     for ($j = 0; $j < 5; $j++) {
//         if ($j <= $i) {
//             if ($i == 0) {
//                 echo "*2345";
//             } elseif ($i == 1 && $j == 1) {
//                 echo "*345";
//             } elseif ($i == 2 && $j == 2) {
//                 echo "*45";
//             } elseif ($i == 3 && $j == 3) {
//                 echo "*5";
//             } else {
//                 echo "*";
//             }
//         } else {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }
// for($i = 0; $i < 5; $i++) {
//     echo "*";
// }
// for($i = 0; $i < 5; $i++) {
//     for ($j = 0; $j < 5; $j++){
//         if ($j <= $i) {
//             if ($i == 0 && $j == 0){
//                 echo "<br>****5";
//             }
//             if ($i == 1 && $j == 1) {
//                 echo "***45";
//             } elseif ($i == 2 && $j == 2) {
//                 echo "**345";
//             } elseif ($i == 3 && $j == 3) {
//                 echo "*2345";
//             }
//         } else {
//             echo " ";
//         }
//     }
//     echo "<br>";
// }
