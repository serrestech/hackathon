<?php

  $topic_url = "https://github.com/serrestech/hackathon/tree/gh-pages/pages/topic";

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $topic_url);
  exit();
