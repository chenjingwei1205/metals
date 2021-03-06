<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  `supplier_id` mediumint(8) NOT NULL DEFAULT '0' COMMENT '店铺标识',
  `act_count` mediumint(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','新机头三星 Galaxy S6 edge（G9250）32G版 铂光金','夺宝岛编号：10637018\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：成都\r\n\r\n附件清单：主机 × 1，充电器 × 1，数据线 × 1，耳机 × 1，卡针× 1、快速指南× 1、保修卡 × 1 仅机头为新！\r\n','2','155','35','三星 Galaxy S6 edge（G9250）32G版 铂光金 移动联通电信4G手机','1437552000','1451462400','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:500;s:9:\"end_price\";d:5088;s:9:\"amplitude\";d:100;s:6:\"no_top\";i:0;}','0','1');");
E_D("replace into `ecs_goods_activity` values('2','海尔HGS-2164手持蒸汽挂烫机家用挂式电熨斗熨烫机正品全国联保','夺宝岛编号：10639920\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：上海\r\n\r\n附件清单：主机x1\r\n','2','86','0','海尔HGS-2164手持蒸汽挂烫机家用挂式电熨斗熨烫机正品全国联保','1437552000','1451462400','0','a:5:{s:7:\"deposit\";d:10;s:11:\"start_price\";d:50;s:9:\"end_price\";d:408;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}','0','1');");
E_D("replace into `ecs_goods_activity` values('3','婴儿超值大礼包','宝宝舒心，妈妈放心，给包包一个安全舒适的成长环境！','4','0','0','','1437588420','1534990020','0','a:1:{s:13:\"package_price\";s:3:\"399\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('4','数码超值搭配套餐','数码超值搭配套餐','4','0','0','','1437589440','1598149440','0','a:1:{s:13:\"package_price\";s:4:\"2600\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('5','诺优能(Nutrilon) 幼儿配方奶粉 3段(12-24个月幼儿适用) ','夺宝岛编号：10639440\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：上海\r\n\r\n附件清单：主机 × 1\r\n','2','148','0','诺优能(Nutrilon) 幼儿配方奶粉 3段(12-24个月幼儿适用) ','1437552000','1451462400','0','a:5:{s:7:\"deposit\";d:15;s:11:\"start_price\";d:20;s:9:\"end_price\";d:128;s:9:\"amplitude\";d:5;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('6','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','商品名称：高端2015夏装新款修身淑坊女女装蕾丝短袖复古森女连衣裙装\r\n\r\n商品编号：ECS000038   品牌：伊芙丽   上架时间：2015-07-22\r\n\r\n商品毛重：0克    库存： 1587   风格：优雅   闭合方式：套筒\r\n\r\n袖长：短袖   制作工艺：缝制鞋   腰型：宽松腰   图案：纯色   裙型：百褶裙\r\n','2','51','24','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:19.89999999999999857891452847979962825775146484375;s:9:\"end_price\";d:169;s:9:\"amplitude\";d:5;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('7','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','商品名称：高端2015夏装新款修身淑坊女女装蕾丝短袖复古森女连衣裙装\r\n\r\n商品编号：ECS000038   品牌：伊芙丽   上架时间：2015-07-22\r\n\r\n商品毛重：0克    库存： 1587   风格：优雅   闭合方式：套筒\r\n\r\n袖长：短袖   制作工艺：缝制鞋   腰型：宽松腰   图案：纯色   裙型：百褶裙\r\n\r\n','2','51','24','高端2015夏装新款修身淑坊女女装蕾丝短袖复女连衣裙装','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:18;s:9:\"end_price\";d:138;s:9:\"amplitude\";d:5;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('8','家用电器超值礼包','家用电器超值礼包，疯抢进行时','4','0','0','','1437589800','1598149800','0','a:1:{s:13:\"package_price\";s:5:\"10009\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('9','雪奈儿 金属边框手机壳套保护壳新款 适用于苹果iPhone6/Plus 4.7英寸 利剑i6土豪金5.5','夺宝岛编号：10637018\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：成都\r\n\r\n附件清单：主机 × 1，充电器 × 1，数据线 × 1，耳机 × 1，卡针× 1、快速指南× 1、保修卡 × 1 仅机头为新！','2','191','0','雪奈儿 金属边框手机壳套保护壳新款 适用于苹果iPhone6/Plus 4.7英寸 利剑i6土豪金5.5','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:1;s:9:\"end_price\";d:60;s:9:\"amplitude\";d:1;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('10','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','夺宝岛编号：10637018\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：成都\r\n\r\n附件清单：主机 × 1，充电器 × 1，数据线 × 1，耳机 × 1，卡针× 1、快速指南× 1、保修卡 × 1 仅机头为新！','2','100','26','苹果（Apple）iPhone 6 (A1586) 16GB 金色 移动联通电信4G手机','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:500;s:9:\"end_price\";d:4888;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('11','朵唯 懂小姐美颜自拍女性机 (C9) 薄荷绿 移动4G手机','夺宝岛编号：10637018\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：成都\r\n\r\n附件清单：主机 × 1，充电器 × 1，数据线 × 1，耳机 × 1，卡针× 1、快速指南× 1、保修卡 × 1 仅机头为新！','2','168','0','朵唯 懂小姐美颜自拍女性机 (C9) 薄荷绿 移动4G手机','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:1;s:9:\"end_price\";d:769;s:9:\"amplitude\";d:1;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('12','汽车玩具白色','夺宝岛编号：10637018\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：成都\r\n\r\n附件清单：主机 × 1，充电器 × 1，数据线 × 1，耳机 × 1，卡针× 1、快速指南× 1、保修卡 × 1 仅机头为新！','2','188','0','SENBOWE 安卓系统遥控摄像视频间谍汽车玩具 白色','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:1;s:9:\"end_price\";d:300;s:9:\"amplitude\";d:1;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('13','厨房电器优惠套餐','厨房电器优惠套餐','4','0','0','','1437590760','1598150760','0','a:1:{s:13:\"package_price\";s:3:\"699\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('14','家庭精美厨具套餐','家庭精美厨具套餐','4','0','0','','1437591600','1440298800','0','a:1:{s:13:\"package_price\";s:3:\"699\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('15','雅诚德Arst餐具套装56头套装中式碗碟套装陶瓷碗碟套装釉上彩','夺宝岛编号：10639440\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：上海\r\n\r\n附件清单：主机 × 1','2','227','0','雅诚德Arst餐具套装56头套装中式碗碟套装陶瓷碗碟套装釉上彩','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:15;s:9:\"end_price\";d:389;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}','0','0');");
E_D("replace into `ecs_goods_activity` values('20','进口 新鲜水果 车厘子1000g','夺宝岛编号：10639440\r\n\r\n包装外观：商品外观良好，外包装良好\r\n\r\n商品所在地：上海\r\n\r\n附件清单：主机 × 1 ','2','23','0','进口 新鲜水果 车厘子1000g','1437552000','1501401600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:1;s:9:\"end_price\";d:168;s:9:\"amplitude\";d:1;s:6:\"no_top\";i:0;}','1','0');");
E_D("replace into `ecs_goods_activity` values('21','佳沛新西兰绿奇异果36个（原装）进口Zespri猕猴桃 新鲜水果准妈妈爱吃','','2','1','0','佳沛新西兰绿奇异果36个（原装）进口Zespri猕猴桃 新鲜水果准妈妈爱吃','1437552000','1501401600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:14.800000000000000710542735760100185871124267578125;s:9:\"end_price\";d:130;s:9:\"amplitude\";d:2;s:6:\"no_top\";i:0;}','1','1');");
E_D("replace into `ecs_goods_activity` values('22','迪奥真我香水50ml','','2','135','0','迪奥真我香水50ml','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:100;s:9:\"end_price\";d:853;s:9:\"amplitude\";d:1;s:6:\"no_top\";i:0;}','6','1');");
E_D("replace into `ecs_goods_activity` values('24','Dior迪奥 限量版彩妆盘 眼影 粉饼 睫毛膏 腮红 唇彩','','2','152','0','Dior迪奥 限量版彩妆盘 眼影 粉饼 睫毛膏 腮红 唇彩','1437552000','1469865600','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:50;s:9:\"end_price\";d:469;s:9:\"amplitude\";d:10;s:6:\"no_top\";i:0;}','6','0');");
E_D("replace into `ecs_goods_activity` values('25','嘉云糖 300g玻璃罐装 水果硬糖 喜糖 德国进口','','5','55','0','嘉云糖 300g玻璃罐装 水果硬糖 喜糖 德国进口','1437638400','1469520000','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1469562180;s:13:\"retainage_end\";i:1501443780;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:3;s:5:\"price\";d:12;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:12;s:7:\"deposit\";d:66;s:13:\"deliver_goods\";s:62:\"1.预计2016-08-5 24时前发货。2.付款后5天内发货。\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('26','卡姿兰','','2','149','0','卡姿兰彩妆套装 睫毛膏粉饼眉粉眉笔 专柜初学者化妆套装','1437552000','1469865600','1','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:49;s:9:\"end_price\";d:460;s:9:\"amplitude\";d:1;s:6:\"no_top\";i:0;}','6','2');");
E_D("replace into `ecs_goods_activity` values('27','澳大利亚 进口牛奶 德运（Devondale） 全脂牛奶 1L*10 整箱装','','5','62','0','澳大利亚 进口牛奶 德运（Devondale） 全脂牛奶 1L*10 整箱装','1437638400','1469520000','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1469648700;s:13:\"retainage_end\";i:1469907900;s:12:\"price_ladder\";a:3:{i:0;a:2:{s:6:\"amount\";i:5;s:5:\"price\";d:48;}i:1;a:2:{s:6:\"amount\";i:8;s:5:\"price\";d:45;}i:2;a:2:{s:6:\"amount\";i:12;s:5:\"price\";d:42;}}s:15:\"restrict_amount\";i:200;s:13:\"gift_integral\";i:66;s:7:\"deposit\";d:66;s:13:\"deliver_goods\";s:62:\"1.预计2016-08-5 24时前发货。2.付款后5天内发货。\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('28','一米画纱桑蚕丝吊带睡裙女夏季纯色真丝睡衣 ','','5','67','0','一米画纱桑蚕丝吊带睡裙女夏季纯色真丝睡衣 ','1437638400','1469520000','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1469562420;s:13:\"retainage_end\";i:1469908020;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:6;s:5:\"price\";d:88;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:100;s:13:\"deliver_goods\";s:63:\"1.预计2016-08-5 24时前发货。2.付款后10天内发货。\";}','0','0');");
E_D("replace into `ecs_goods_activity` values('31','坚果炒货零食特产扁桃仁235gx2袋','','5','50','0','坚果炒货零食特产扁桃仁235gx2袋','1437638400','1437897600','0','a:8:{s:10:\"sale_price\";d:0;s:15:\"retainage_start\";i:1469563200;s:13:\"retainage_end\";i:1469822400;s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:2;s:5:\"price\";d:55;}}s:15:\"restrict_amount\";i:100;s:13:\"gift_integral\";i:55;s:7:\"deposit\";d:55;s:13:\"deliver_goods\";s:62:\"1.预计2016-08-5 24时前发货。2.付款后5天内发货。\";}','0','0');");

require("../../inc/footer.php");
?>