<?php

namespace App\Repositories;

class Posts
{
    private $_data = [
        'post 1',
        'post 2',
        'post 3',
        'post 4',
    ];

    public function all() : array
    {
        return $this->_data;
    }

    public function get()
    {
        Post::select()->get();
    }

    public function find(int $index) : string
    {
        return $this->_data[$index] ?? 'not found';
    }
}