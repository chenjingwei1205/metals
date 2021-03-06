<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_rank`;");
E_C("CREATE TABLE `ecs_user_rank` (
  `rank_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `rank_name` varchar(30) NOT NULL DEFAULT '',
  `min_points` int(10) unsigned NOT NULL DEFAULT '0',
  `max_points` int(10) unsigned NOT NULL DEFAULT '0',
  `discount` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `show_price` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `special_rank` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_recomm` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_rank` values('1','普通会员','0','999','100','0','0','0');");
E_D("replace into `ecs_user_rank` values('2','铜牌会员','1000','5999','95','1','0','0');");
E_D("replace into `ecs_user_rank` values('3','金牌会员','6000','9999','90','1','0','0');");
E_D("replace into `ecs_user_rank` values('4','钻石会员','10000','2147483647','85','1','0','0');");
E_D("replace into `ecs_user_rank` values('5','QQ','0','0','100','0','1','0');");

require("../../inc/footer.php");
?>