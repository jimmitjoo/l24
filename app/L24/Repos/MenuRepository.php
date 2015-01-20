<?php
/**
 * Created by PhpStorm.
 * User: jimmitjoo
 * Date: 15-01-20
 * Time: 14:45
 */

namespace L24\Repos;

use DB;

class MenuRepository {

    public function regionMenu()
    {
        $towns = DB::table('regions')->orderBy('name')->join('towns', 'towns.region_id', '=', 'regions.id')->orderBy('town')->get();

        $regions = [];
        foreach ($towns as $town) {
            if (!isset($regions[$town->name])) {
                $regions[$town->name] = [];
            }

            $regions[$town->name][] = [$town->slug, $town->town];
        }

        return $regions;
    }

}