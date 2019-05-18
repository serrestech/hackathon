<?php

  $submit_url = "http://bit.ly/serreshack";

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $submit_url);
  exit();
