<?php

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}

$modules['02_cat_and_goods']['01_goods_buy_list']       = 'goods.php?act=list&supplier_status=1';         // 商品列表

$modules['02_cat_and_goods']['03_goods_gobuy']			  = 'goods.php?act=add';          // 添加商品
$modules['02_cat_and_goods']['03_goods_readybuy']			  = 'goods.php?act=readybuy';          // 已购商品


$modules['02_cat_and_goods']['05_comment_manage']		  = 'comment_manage.php?act=list'; //评论
$modules['02_cat_and_goods']['05_shaidan_manage']   = 'shaidan.php?act=list';
$modules['02_cat_and_goods']['04_category_list']		  = 'category.php?act=list';
//代码增加  评论详情
$modules['02_cat_and_goods']['05_order_comment']   = 'order_comment.php?act=list';


$modules['03_promotion']['04_bonustype_list']       = 'bonus.php?act=list';
//$modules['03_promotion']['08_group_buy']            = 'group_buy.php?act=list';
$modules['03_promotion']['10_auction']              = 'auction.php?act=list';
$modules['03_promotion']['12_favourable']           = 'favourable.php?act=list';
$modules['03_promotion']['13_pre_sale']           = 'pre_sale.php?act=list';//预售活动

$modules['04_order']['01_order_list']               = 'order.php?act=list';
$modules['04_order']['03_order_query']              = 'order.php?act=order_query';
$modules['04_order']['04_merge_order']              = 'order.php?act=merge';
$modules['04_order']['05_edit_order_print']         = 'order.php?act=templates';
$modules['04_order']['06_undispose_booking']        = 'goods_booking.php?act=list_all';
$modules['04_order']['09_delivery_order']           = 'order.php?act=delivery_list';
//$modules['04_order']['10_back_order']               = 'order.php?act=back_list';
$modules['04_order']['10_back_order']               = 'back.php?act=back_list';  //代码修改 By www.68ecshop.com
$modules['04_order']['12_order_excel']              = 'excel.php?act=order_excel';
/* 代码增加 by www.68ecshop.com start */
$modules['04_order']['12_invoice_list']                 = 'order.php?act=invoice_list';


$modules['02_rebate_manage']['03_rebate_nopay']       = 'supplier_rebate.php?act=list&is_pay_ok=0'; 
$modules['02_rebate_manage']['03_rebate_pay']       = 'supplier_rebate.php?act=list&is_pay_ok=1';


$modules['05_rent']['05_rent_nopay']       = 'supplier_rent.php?act=list&is_pay_ok=0'; 

$modules['06_loan']['06_loan_apply']       = 'loan.php?act=list'; 


$modules['18_virtual']['virtual_goods_s']   = 'virtual_goods.php?act=list&extension_code=virtual_good'; //虚拟商品列表
$modules['18_virtual']['virtual_goods_add']    = 'virtual_goods.php?act=add&extension_code=virtual_good';  //添加虚拟商品
$modules['18_virtual']['virtual_validate']   = 'virtual_goods_card.php?act=verification_info';
$modules['18_virtual']['virtual_card_list']   = 'virtual_goods_card.php?act=all_card';

/* 代码增加 by www.68ecshop.com end */
$modules['05_dianpu_manage']['01_base']               	= 	'shop_config.php?act=list_edit';
$modules['05_dianpu_manage']['02_menu']               	= 	'navigator.php?act=list';
$modules['05_dianpu_manage']['03_guanggao']             = 	'flashplay.php?act=list';
$modules['05_dianpu_manage']['04_article']              = 	'article.php?act=list';
$modules['05_dianpu_manage']['06_templates']            = 	'template.php?act=list';
$modules['05_dianpu_manage']['07_street']				= 	'street.php?act=info';
$modules['05_dianpu_manage']['08_shipping_list']           = 'shipping.php?act=list';

$modules['06_pickup_point_manage']['pickup_point_list']       = 'pickup_point.php?act=list';
$modules['06_pickup_point_manage']['pickup_point_add']        = 'pickup_point.php?act=add';
$modules['06_pickup_point_manage']['pickup_point_batch_add']  = 'pickup_point.php?act=batch_add';

//$modules['10_priv_admin']['admin_logs']             = 'admin_logs.php?act=list';
$modules['10_priv_admin']['admin_list']             = 'privilege.php?act=list';
//$modules['10_priv_admin']['admin_role']             = 'role.php?act=list';

$modules['20_chat']['customer']       = 'customer.php?act=list';         // 客服管理
?>
