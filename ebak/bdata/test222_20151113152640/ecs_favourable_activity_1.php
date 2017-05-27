<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_favourable_activity`;");
E_C("CREATE TABLE `ecs_favourable_activity` (
  `act_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `act_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `user_rank` varchar(255) NOT NULL,
  `act_range` tinyint(3) unsigned NOT NULL,
  `act_range_ext` varchar(255) NOT NULL,
  `min_amount` decimal(10,2) unsigned NOT NULL,
  `max_amount` decimal(10,2) unsigned NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `act_type_ext` decimal(10,2) unsigned NOT NULL,
  `gift` text NOT NULL,
  `sort_order` tinyint(3) unsigned NOT NULL DEFAULT '50',
  `supplier_id` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '店铺id',
  `logo` varchar(255) NOT NULL COMMENT '活动代表图',
  PRIMARY KEY (`act_id`),
  KEY `act_name` (`act_name`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_favourable_activity` values('1','[自营商品]热卖手机满10000减2000','1437552000','1501401600','0,1,2,3,4','1','144','10000.00','0.00','1','2000.00','a:0:{}','50','0','/data/favourable_action_pic/supplier0/original0_1_580x260.jpg');");
E_D("replace into `ecs_favourable_activity` values('2','[自营商品]热卖手机满2000送手机配件','1437552000','1501401600','0,1,2,3,4','1','144','2000.00','5999.00','0','1.00','a:4:{i:0;a:3:{s:2:\"id\";s:3:\"185\";s:4:\"name\";s:76:\"赛鲸 常青藤懒人手机支架 床上床头支架 万向调节 太空蓝\";s:5:\"price\";s:1:\"0\";}i:1;a:3:{s:2:\"id\";s:3:\"183\";s:4:\"name\";s:122:\"幻响（i-mu）百变羊 创意指环扣 手机支架 双指环 360度旋转 防止手机滑落 金属材质 强力粘胶\";s:5:\"price\";s:1:\"0\";}i:2;a:3:{s:2:\"id\";s:3:\"191\";s:4:\"name\";s:108:\"雪奈儿 金属边框手机壳套保护壳新款 适用于苹果iPhone6/Plus 4.7英寸 利剑i6土豪金5.5\";s:5:\"price\";s:1:\"0\";}i:3;a:3:{s:2:\"id\";s:3:\"197\";s:4:\"name\";s:77:\"一丁（EADING） EA-CZB 一丁魔盒超级智能插座 手机APP控制 B款\";s:5:\"price\";s:1:\"0\";}}','50','0','/data/favourable_action_pic/supplier0/original0_2_580x260.jpg');");
E_D("replace into `ecs_favourable_activity` values('3','[自营商品]热卖手机满6000打9折,嗨翻全场','1437552000','1501401600','0,1,2,3,4','1','144','6000.00','9999.00','2','90.00','a:0:{}','50','0','/data/favourable_action_pic/supplier0/original0_3_580x260.jpg');");
E_D("replace into `ecs_favourable_activity` values('4','[天天果园]全场满500元减100元','1437552000','1469865600','0,1,2,3,4','0','','500.00','0.00','1','100.00','a:0:{}','50','1','/data/favourable_action_pic/supplier1/original1_4_580x260.jpg');");
E_D("replace into `ecs_favourable_activity` values('5','加价购','1435651200','1498809600','0,1,2,3,4','0','','100.00','0.00','0','0.00','a:1:{i:0;a:3:{s:2:\"id\";s:2:\"26\";s:4:\"name\";s:60:\"韩国进口X-5花生夹心巧克力棒盒装（24根）864g\";s:5:\"price\";s:2:\"10\";}}','50','0','/data/favourable_action_pic/supplier0/original0_5_580x260.jpg');");
E_D("replace into `ecs_favourable_activity` values('6','满80减10','1443340800','1444377600','0,1,2,3,4','0','','80.00','0.00','1','10.00','a:0:{}','50','0','/data/favourable_action_pic/supplier0/original0_6_580x260.jpg');");
E_D("replace into `ecs_favourable_activity` values('7','满50件5元','1443340800','1443686400','0,1,2,4','0','','50.00','0.00','1','5.00','a:0:{}','50','6','/data/favourable_action_pic/supplier6/original6_7_580x260.jpg');");

require("../../inc/footer.php");
?>