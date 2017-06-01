<?php 
 class Index {
     public function display($output) {
         // ob_start();
         //echo $output;
		  
		 $temp = $_POST['temp'];
		 $jarr=array('total'=>$temp,'row'=>array(
           array('code'=>'001','name'=>'中国','addr'=>'Address 11','col4'=>'col4 data'),
           array('code'=>'002','name'=>'Name 2','addr'=>'Address 12','col4'=>'col4 data'),
                                     )
           );
		   
		   echo $str=json_encode($jarr);
     }
 }
?>
