<?php

class Album
{
    public function createAlbum($album_name, $album_descr = null)
    {
        $db = Database::getInstance()->getConnection();
    }
}
