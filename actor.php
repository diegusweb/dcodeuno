<?php

require 'functions.php';
connect();
//BRACNH LOCAL TH BRACNH LOCAL TH dddddddddd  sdf fsd fsdf sd OTRO
$info = get_actor_info( $_GET['actor_id'] );

include 'views/actor.tmpl.php';