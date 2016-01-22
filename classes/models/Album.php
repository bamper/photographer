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

    private $sturct;

    private $storage = 'backend/storage/';

    public function __construct()
    {

    }

    public function newAlbum($name, $photos = array())
    {
        $this->album_id = $this->generateNextId();
        $this->album_name = trim(strip_tags($name));
        $this->date_create = date("Y-m-d H:i:s");
        $this->date_update = date("Y-m-d H:i:s");
        $this->photos = $photos;
        return $this;
    }

    public function parse()
    {
        $this->sturct['album_id'] = $this->album_id;
        $this->sturct['album_name'] = $this->album_name;
        $this->sturct['date_create'] = $this->date_create;
        $this->sturct['date_update'] = $this->date_update;
        $this->sturct['photos'] = $this->photos;
        file_put_contents($this->storage.$this->album_id.'.json', json_encode($this->sturct));
        return $this;
    }

    public function show($album_id = null)
    {
        if(empty($album_id))
            $album_id = $this->album_id;
        return json_decode(file_get_contents($this->storage.$album_id.'.json'), true);
    }

    private function generateNextId()
    {
        foreach(scandir($this->storage) as $album_json)
        {
            if($album_json == '.' || $album_json == '..')
                continue;
            list($number[], $ext) = explode('.', $album_json);
        }
        return !empty($number) ? max($number) + 1 : 1;
    }
}
