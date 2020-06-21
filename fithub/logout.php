<!-- CDN Links to use Fomantic ui framework -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.4/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.8.4/dist/semantic.min.js"></script>

<!-- Our CSS style sheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- 'Loader' from Fomantic UI
https://fomantic-ui.com/elements/loader.html -->
<div id="a1" class="ui segment">
  <div id="a2" class="ui active dimmer">
    <div id="a3" class="ui massive text loader">
      <?php
       session_start();
       // unset session variable
       unset($_SESSION["user"]);

       // display logout message
       echo 'Logging out...';

       // redirect user, prevent page caching.
       header('Refresh: 2; URL = index.php');
      ?>
    </div>
  </div>
</div>
