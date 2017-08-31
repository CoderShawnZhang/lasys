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

if( ! function_exists('list_to_tree')){
    /**
     * 把返回的数据集转换成Tree
     *
     * @param array  $list
     * @param string $pk
     * @param string $pid
     * @param string $child
     * @param int    $root
     *
     * @return array
     */
    function list_to_tree(array $list, $pk = 'id', $pid = 'parent_id', $child = 'child', $root = 0)
    {
        // 创建Tree
        $tree = [];
        if(is_array($list)){
            // 创建基于主键的数组引用
            $refer = [];
            foreach ($list as $key => $data) {
                $refer[ $data[ $pk ] ] =& $list[ $key ];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId = $data[ $pid ];
                if($root == $parentId){
                    $tree[] =& $list[ $key ];
                } else {
                    if(isset($refer[ $parentId ])){
                        $parent =& $refer[ $parentId ];
                        $parent[ $child ][] =& $list[ $key ];
                    }
                }
            }
        }

        return $tree;
    }
}


if( ! function_exists('two_dimensional_array_sort')){

    /**
     * 二维数组排序
     *
     * @param  $array
     * @param  $on
     * @param  $order
     *
     * @return array
     */
    function two_dimensional_array_sort($array, $on, $order = SORT_ASC)
    {
        $new_array = [];
        $sortable_array = [];
        $on = (string)$on;
        if(count($array) > 0){
            foreach ($array as $k => $v) {
                if(is_array($v)){
                    foreach ($v as $k2 => $v2) {
                        if($k2 == $on){
                            $sortable_array[ $k ] = $v2;
                        }
                    }
                } else {
                    $sortable_array[ $k ] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[ $k ] = $array[ $k ];
            }
        }

        return $new_array;
    }
}
