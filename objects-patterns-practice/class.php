<?php

class Dog {
    
    public function __construct(
        public $name,
        public $likes,
        public $friend
    )
    {}
        

    public function dogLikes() 
    {
        echo $this->name . " " . "likes" . " " . $this->likes;
    }

    public function dogFriend()
    {
        echo $this->name . "'s friend is " . $this->friend;
    }

}

$roxy = new Dog("Sue", "chicken", "Murf");
$roxy->dogLikes();
$roxy->dogFriend();