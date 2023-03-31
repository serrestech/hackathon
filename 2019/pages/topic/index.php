<?php

  $topic_url = "https://github.com/serrestech/hackathon/tree/topic";

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $topic_url);
  exit();
