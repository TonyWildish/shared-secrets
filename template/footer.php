<?php

  # prevent direct access
  if (!defined("SYS11_SECRETS")) { die(""); }

  # prevents cache hits with wrong CSS
  $cache_value = md5_file(__FILE__);

?>
      <!-- footer -->
    </div>

    <script src="/vendors/jquery/jquery.min.js?<?php print($cache_value); ?>" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" type="text/javascript"></script>
    <script src="/vendors/bootstrap/js/bootstrap.min.js?<?php print($cache_value); ?>" integrity="sha256-nuL8/2cJ5NDSSwnKD8VqreErSWHtnEP9E7AySL+1ev4=" type="text/javascript"></script>
  </body>
</html>
