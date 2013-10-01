<?php
if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

function get_goods_form_catId( $id = '' , $order_by='' , $limit = '' )
{
	$r = '';
	if(strlen($id)>0)
	{
		$sql = "SELECT * FROM ". $GLOBALS['ecs']->table('goods') . "WHERE `cat_id` = '".$id."' AND `is_real` = '1' AND `is_on_sale` = '1' ";
		$sql .= strlen($order_by) ? 'ORDER BY '.$order_by.' ' : '';
		$sql .= strlen($limit) ? 'LIMIT '.$limit : '';
		$res = $GLOBALS['db']->getAll($sql);
		if( count($res)>0 )
		{
			foreach( $res as $k=>$v )
			{
				$res[$k]['url'] = build_uri('goods', array('gid' => $v['goods_id']), $v['goods_name']);
			}
			$r = $res;
		}
	}
	return $r;
}
?>