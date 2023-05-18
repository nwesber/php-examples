<?php

interface OpenerInterface {
    public function open() : void;
}
class Door implements OpenerInterface {
    public function open() : void {
        // opens the door
    }
}
class Window implements OpenerInterface {
    public function open() : void {
        // opens the window
    }
}


class SmartOpener implements OpenerInterface  {
    
    private $opener;
    public function __construct(OpenerInterface $opener) {
        $this->opener = $opener;
    }
    
    public function open() : void {
        $this->opener->open();
        $this->temperature();
    }
}

//Usage
$door = new Door();
$window = new Window();
$smartDoor = new SmartOpener($door);
$smartWindow = new SmartOpener($window);
