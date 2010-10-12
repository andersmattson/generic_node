<?php 

if($node->mimetype == 1)
	drupal_set_header('Content-Type: text/html; charset=utf-8');
else if($node->mimetype == 2)
	drupal_set_header('Content-Type: text/css; charset=utf-8');
else if($node->mimetype == 3)
	drupal_set_header('Content-Type: text/javascript; charset=utf-8');
else if($node->mimetype == 4)
	drupal_set_header('Content-Type: text/xml; charset=utf-8');
else if($node->mimetype == 5)
	drupal_set_header('Content-Type: text/plain; charset=utf-8');

print $node->body;
?>