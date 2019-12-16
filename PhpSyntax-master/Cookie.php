<?php

$v_c = 1 + ($_COOKIE['view_count'] ?? 0);

// setcookie(name, value, expire, path, domain, secure, httponly, options);

setcookie('viewCount', $v_c);

print "<p> The number of times you have viewed the page: $v_c .</p>";