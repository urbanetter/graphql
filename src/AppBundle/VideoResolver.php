<?php

namespace AppBundle;


class VideoResolver
{
    public function resolveVideo($root, $args)
    {
        return ['id' => $args['id'], 'title' => 'A test'];
    }
}