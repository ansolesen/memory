<?php


namespace App\Contracts\Repositories;


interface GameRepository
{

    /**
     * @return mixed
     */
    public function all();

    /**
     * @param $data
     *
     * @return mixed
     */
    public function store($data = []);


}