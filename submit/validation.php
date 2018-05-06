<?php

  $validation_url_2018 = "https://docs.google.com/forms/d/e/1FAIpQLScDJe4EKbseadQW66-8JyUcz8tzNjcZ4qVhdxOrHsuyRcToXw/viewform";

  header("HTTP/1.1 301 Moved Permanently");
  header("Location: " . $validation_url_2018);
  exit();
