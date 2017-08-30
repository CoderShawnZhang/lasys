<?php

if(!function_exists('array_random')){
    function array_random($array){
        return $array[array_rand($array)];
    }
}

/*
 * 返回层级树
 */
if(!function_exists('create_level_tree')){
    /**
     * 生成以为数组 html 层级树
     *
     * @param $data
     * @param int $parent_id
     * @param int $level
     * @param string $html
     */
    function create_level_tree($data,$parent_id = 0,$level = 0,$html = '-')
    {
        $tree = [];
        foreach ($data as $item){
            $item['html'] = str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$level);
            $item['html'] .= $level ===0 ? "" : '|';
            $item['html'] .=str_repeat($html,$level);

            if($item['parent_id'] == $parent_id){
                $tree[] = $item;
                $tree = array_merge($tree,create_level_tree($data,$item['id'],$level+1));
            }
        }

        return $tree;
    }
}