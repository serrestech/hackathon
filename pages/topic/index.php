<?php

  $topic_url = "bit.ly/serreshack-topic";

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $topic_url);
  exit();
