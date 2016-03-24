<?php


namespace App\Queries\Photo;

use App\Photo;
use Illuminate\Support\Facades\DB;


class Store
{
    private $photo;
    private $translation;

    public function __construct($inputs)
    {
        //TODO make photo required
        $this->photo = $inputs['photo'];
        $this->translation = $inputs['translation'];

    }

    public function run()
    {

        DB::beginTransaction();

        $photo = new Photo();
        $photo->save();

        $this->savePhoto($photo, $this->photo);

        $photo->translation()->create([
            'lang' => $this->translation['lang'],
            'name' => $this->translation['name'],
            'description' => $this->translation['description'],
        ]);

        DB::commit();
    }

    private function savePhoto($photo, $file)
    {
//        $fileName = str_replace(' ', '-', $file->getClientOriginalName());
//        $file->move(public_path() . '/photos/', $fileName);
//        $photo->images()->create([
//            'path' => $fileName,
//            'type' => 'big'
//        ]);
    }
}