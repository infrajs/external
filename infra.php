<?php
namespace infrajs\external;
use infrajs\Event;

Event::listeng('layer.oninit', function (&$layer) {
	//external
	External::check($layer);
	Event::fire($layer, 'layer.oninit.external');
});