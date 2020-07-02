<?php

class NotePage extends Page
{
    public function cover()
    {
        return $this->images()->findBy('template', 'note-cover') ?? $this->image();
    }
}
