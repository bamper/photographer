<?php

class Album
{
    protected $album_id;

    protected $album_name;

    protected $date_create;

    protected $date_update;

    protected $photos = [
        'photo_name' => '',
        'photo_tag' => '',
        'photo_data' => []
    ];

    public function __construct()
    {

    }

    public function newAlbum()
    {

    }
}
