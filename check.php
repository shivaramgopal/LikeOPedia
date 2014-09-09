<?php
             if (isset($_COOKIE["signed"]))
  {
  
echo '<script type="text/javascript">

<!--
window.location = "finalui.php"
//-->
</script>';
  
  }
  else
  {
  echo '<script type="text/javascript">

<!--
window.location = "homepage.php"
//-->
</script>';
  
  }
  ?>
