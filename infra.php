<?php
namespace infrajs\external;
use infrajs\event\Event;
use infrajs\path\Path;

Path::req('*controller/infra.php');

Event::listeng('layer.oninit', function (&$layer) {
	External::check($layer);
});