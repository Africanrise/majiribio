<?php
   if(isset($_POST['submit'])){
     $name        = $_POST['name'];
     $living      = $_POST['living'];
     $delivering  = $_POST['delivering'];
     $phoneNumber = $_POST['phoneNumber'];
     $order       = $_POST['order'];
     $savio       = $_POST['savio'];
     header("location:https://api.whatsapp.com/send?phone="savio&text=Name:%20$name%20%0DPlaceOfLiving:%20$living%20%0DPlaceOfDelivery:%20$delivering%20%0DphoneNumber:%20$phoneNumber%20%0Dorder:%20$order");
   } else{
     echo "
          <script>
            window.location=history.go(-1);
          </script>
     ";
   }
 ?>
