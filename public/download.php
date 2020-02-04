<?php
  // <html>
  // <body>
  //     <img src="secret-image.png" alt="Simply Easy Learning" width="200"
  //        height="80">
  //  </body>
  //  </html>
// <?php

$path= 'secret-image.png';
  if (file_exists($path)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($path));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($path));
    ob_clean();
    flush();
    readfile($path);
    exit;
}
