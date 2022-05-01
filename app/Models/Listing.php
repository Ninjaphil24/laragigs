<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id'=>1,
                    'title'=>'Listing One',
                    'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quidem at quasi fuga dicta aperiam nobis illo totam sint voluptate, laudantium cum dignissimos tenetur eligendi ipsam repellat a molestias quas.
                    '
                ],
                [
                    'id'=>2,
                    'title'=>'Listing Two',
                    'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident quidem at quasi fuga dicta aperiam nobis illo totam sint voluptate, laudantium cum dignissimos tenetur eligendi ipsam repellat a molestias quas.
                    '
                ],
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id']==$id) {
                    return $listing;
                }
            }
        }
    }