<li class=”<?php
/* Only use the authcomment class from style.css if the user_id is 1 (admin) */
if (1 == $comment->user_id)
$oddcomment = “authcomment”;
echo $oddcomment;
?>” id=”comment…