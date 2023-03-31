<?php

  $submit_url = "http://bit.ly/serreshack-submit-project";

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $submit_url);
  exit();
