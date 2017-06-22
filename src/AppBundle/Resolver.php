<?php

namespace AppBundle;


class Resolver
{
    public function resolveVideo($root, $args)
    {
        return ['id' => $args['id'], 'title' => 'A video'];
    }

    public function resolveShow($root, $args)
    {
        return ['id' => $args['id'], 'title' => '10 vor 10'];
    }
    public function resolveEpisode($root, $args)
    {
        return ['id' => $args['id'], 'title' => '10 vor 10 von 12. Juni 2017'];
    }

    public function resolveEpisodes($root, $args)
    {
        $mode = $args['mode'] ? $args['mode'] : 'latest';
        return [
            ['id' => $mode . '-episode-1', 'title' => 'Show episode 1'],
            ['id' => $mode . '-episode-2', 'title' => 'Show episode 2'],
        ];
    }

    public function resolveVideos($root, $args)
    {
        return [
            ['id' => 'episode-video-1-of-episode-' . $root['id'], 'title' => 'Episode video 1'],
            ['id' => 'episode-video-2-of-episode-' . $root['id'], 'title' => 'Episode video 2'],
        ];
    }
}