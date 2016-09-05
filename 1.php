 <?php
 echo 881;die;
              function bubble_sort($array) {
                  for($i = 0; $i < count($array) - 1; $i++) {    //$i为已经排过序的元素个数
                      for($j = 0; $j < count($array) - 1 - $i; $j++) {    //$j为需要排序的元素个数,用总长减去$i
                          if($array[$j] > $array[$j + 1]) {    //按升序排序
                              $temp = $array[$j];
                              $array[$j] = $array[$j + 1];
                             $array[$j + 1] = $temp;
                         }
                     }
                 }
                 return $array;123;
             }
             
             $array = array(5, 1, 4, 7, 7, 9, 0, 11);
             var_dump(bubble_sort($array));
         ?>
