<?php
use Aqua\View;

View::setBasePath(__DIR__);

echo View::render('sections.dashboard', ['title' => 'Template']);