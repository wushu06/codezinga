<?php $url = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>

<div class="social">
  <h6 class="text-light-grey text-uppercase letter-spacing-2 mb-4">Share this</h6>
  <ul class="list-unstyled d-flex flex-row">
    <li class="mr-3"><a class="text-decoration-none" href="https://twitter.com/share?url=<?=$url?>"><i class="fab fa-twitter fa-lg text-pink"></i></a></li>
    <li class="mr-3"><a class="text-decoration-none" href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$url?>"><i class="fab fa-linkedin-in fa-lg text-pink"></i></a></li>
    <li><a class="text-decoration-none" href="http://www.facebook.com/sharer/sharer.php?u=<?=$url?>"><i class="fab fa-facebook-f fa-lg text-pink"></i></a></li>
  </ul>
</div>