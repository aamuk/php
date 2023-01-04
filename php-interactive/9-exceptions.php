<?php  

// try 
// {
//     echo 2 / 0;
// }
// catch (Exception $e) 
// {
//     echo "Exception caught.";
// }


try {
    echo 4/0;
  } catch (Exception $e) {
    echo "Divided by zero!";
  } finally {
    echo "This will be outputed even if exception will happen!";
  }