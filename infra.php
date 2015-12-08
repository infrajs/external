<?php
namespace infrajs\external;
use infrajs\event\Event;
use infrajs\path\Path;

//isAdd('check' отфильтровываются нерабочие слои

Path::reqif('*controller/infra.php');

Event::listeng('layer.oninit', function (&$layer) {
	External::check($layer);
});