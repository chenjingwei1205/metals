<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=295 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','34','18','欧美','0');");
E_D("replace into `ecs_goods_attr` values('2','34','20','后拉链','0');");
E_D("replace into `ecs_goods_attr` values('3','34','23','无袖','0');");
E_D("replace into `ecs_goods_attr` values('4','34','25','松紧腰','0');");
E_D("replace into `ecs_goods_attr` values('5','34','26','网纱','0');");
E_D("replace into `ecs_goods_attr` values('6','34','29','圆点','0');");
E_D("replace into `ecs_goods_attr` values('7','34','31','A字裙','0');");
E_D("replace into `ecs_goods_attr` values('8','34','15','米色','');");
E_D("replace into `ecs_goods_attr` values('9','34','15','棕色','');");
E_D("replace into `ecs_goods_attr` values('10','34','16','S','');");
E_D("replace into `ecs_goods_attr` values('11','34','16','M','');");
E_D("replace into `ecs_goods_attr` values('12','34','16','XL','');");
E_D("replace into `ecs_goods_attr` values('13','36','18','甜美','0');");
E_D("replace into `ecs_goods_attr` values('14','36','20','侧拉链','0');");
E_D("replace into `ecs_goods_attr` values('15','36','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('16','36','24','缝制鞋','0');");
E_D("replace into `ecs_goods_attr` values('17','36','25','高腰','0');");
E_D("replace into `ecs_goods_attr` values('18','36','29','其他','0');");
E_D("replace into `ecs_goods_attr` values('19','36','31','A字裙','0');");
E_D("replace into `ecs_goods_attr` values('20','36','15','白色','');");
E_D("replace into `ecs_goods_attr` values('21','36','15','粉色','');");
E_D("replace into `ecs_goods_attr` values('22','36','16','L','');");
E_D("replace into `ecs_goods_attr` values('23','36','16','XL','');");
E_D("replace into `ecs_goods_attr` values('24','38','18','优雅','0');");
E_D("replace into `ecs_goods_attr` values('25','38','20','套筒','0');");
E_D("replace into `ecs_goods_attr` values('26','38','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('27','38','24','缝制鞋','0');");
E_D("replace into `ecs_goods_attr` values('28','38','25','宽松腰','0');");
E_D("replace into `ecs_goods_attr` values('29','38','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('30','38','31','百褶裙','0');");
E_D("replace into `ecs_goods_attr` values('31','38','15','蓝色','');");
E_D("replace into `ecs_goods_attr` values('32','38','15','粉色','');");
E_D("replace into `ecs_goods_attr` values('33','38','16','XL','');");
E_D("replace into `ecs_goods_attr` values('34','40','18','OL','0');");
E_D("replace into `ecs_goods_attr` values('35','40','23','长袖','0');");
E_D("replace into `ecs_goods_attr` values('36','40','25','中腰','0');");
E_D("replace into `ecs_goods_attr` values('37','40','15','蓝色','');");
E_D("replace into `ecs_goods_attr` values('38','40','16','XL','');");
E_D("replace into `ecs_goods_attr` values('39','40','16','XXL','');");
E_D("replace into `ecs_goods_attr` values('40','42','18','文艺','0');");
E_D("replace into `ecs_goods_attr` values('41','42','23','七分袖','0');");
E_D("replace into `ecs_goods_attr` values('42','42','25','低腰','0');");
E_D("replace into `ecs_goods_attr` values('43','42','29','条纹','0');");
E_D("replace into `ecs_goods_attr` values('44','42','15','白色','');");
E_D("replace into `ecs_goods_attr` values('45','42','16','XL','');");
E_D("replace into `ecs_goods_attr` values('46','45','18','韩范','0');");
E_D("replace into `ecs_goods_attr` values('47','45','23','五分袖','0');");
E_D("replace into `ecs_goods_attr` values('48','45','25','超低腰','0');");
E_D("replace into `ecs_goods_attr` values('49','45','15','米色','');");
E_D("replace into `ecs_goods_attr` values('50','45','16','L','');");
E_D("replace into `ecs_goods_attr` values('51','45','16','XL','');");
E_D("replace into `ecs_goods_attr` values('52','46','18','名媛','0');");
E_D("replace into `ecs_goods_attr` values('53','46','25','高腰','0');");
E_D("replace into `ecs_goods_attr` values('54','46','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('55','46','15','玫红','');");
E_D("replace into `ecs_goods_attr` values('56','46','16','S','');");
E_D("replace into `ecs_goods_attr` values('57','46','16','M','');");
E_D("replace into `ecs_goods_attr` values('58','49','18','甜美','0');");
E_D("replace into `ecs_goods_attr` values('59','49','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('60','49','25','高腰','0');");
E_D("replace into `ecs_goods_attr` values('61','49','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('62','49','31','A字裙','0');");
E_D("replace into `ecs_goods_attr` values('63','49','15','白色','');");
E_D("replace into `ecs_goods_attr` values('64','49','15','蓝色','');");
E_D("replace into `ecs_goods_attr` values('68','48','18','淑女','0');");
E_D("replace into `ecs_goods_attr` values('66','49','16','S','');");
E_D("replace into `ecs_goods_attr` values('67','49','16','M','');");
E_D("replace into `ecs_goods_attr` values('69','48','23','长袖','0');");
E_D("replace into `ecs_goods_attr` values('70','48','25','中腰','0');");
E_D("replace into `ecs_goods_attr` values('71','48','29','纯色','0');");
E_D("replace into `ecs_goods_attr` values('72','48','31','大摆型','0');");
E_D("replace into `ecs_goods_attr` values('73','48','15','白色','');");
E_D("replace into `ecs_goods_attr` values('74','47','18','休闲','0');");
E_D("replace into `ecs_goods_attr` values('75','47','25','宽松腰','0');");
E_D("replace into `ecs_goods_attr` values('76','47','29','植物花卉','0');");
E_D("replace into `ecs_goods_attr` values('77','47','31','公主裙','0');");
E_D("replace into `ecs_goods_attr` values('78','44','18','休闲','0');");
E_D("replace into `ecs_goods_attr` values('79','44','23','无袖','0');");
E_D("replace into `ecs_goods_attr` values('80','44','25','超低腰','0');");
E_D("replace into `ecs_goods_attr` values('81','44','29','圆点','0');");
E_D("replace into `ecs_goods_attr` values('82','44','31','一步裙','0');");
E_D("replace into `ecs_goods_attr` values('83','51','18','学院','0');");
E_D("replace into `ecs_goods_attr` values('84','51','23','短袖','0');");
E_D("replace into `ecs_goods_attr` values('85','51','15','银色','');");
E_D("replace into `ecs_goods_attr` values('86','51','16','XL','');");
E_D("replace into `ecs_goods_attr` values('87','56','18','性感','0');");
E_D("replace into `ecs_goods_attr` values('88','56','24','缝制鞋','0');");
E_D("replace into `ecs_goods_attr` values('89','56','31','荷叶边裙','0');");
E_D("replace into `ecs_goods_attr` values('90','56','15','粉色','');");
E_D("replace into `ecs_goods_attr` values('91','56','16','XL','');");
E_D("replace into `ecs_goods_attr` values('125','113','11','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('124','113','10','1300万像素','0');");
E_D("replace into `ecs_goods_attr` values('123','113','9','5.5英寸','0');");
E_D("replace into `ecs_goods_attr` values('122','113','8','苹果（IOS）','0');");
E_D("replace into `ecs_goods_attr` values('121','113','7','2000万-5000万','0');");
E_D("replace into `ecs_goods_attr` values('188','113','3','上海','0');");
E_D("replace into `ecs_goods_attr` values('115','100','1','银色','100');");
E_D("replace into `ecs_goods_attr` values('114','100','1','白色','');");
E_D("replace into `ecs_goods_attr` values('126','113','12','四核','0');");
E_D("replace into `ecs_goods_attr` values('127','113','13','1.7GHz','0');");
E_D("replace into `ecs_goods_attr` values('290','113','14','1920×1080','0');");
E_D("replace into `ecs_goods_attr` values('129','113','1','金色','');");
E_D("replace into `ecs_goods_attr` values('130','113','1','银色','100');");
E_D("replace into `ecs_goods_attr` values('292','143','9','5.2英寸','0');");
E_D("replace into `ecs_goods_attr` values('149','143','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('148','143','7','1600万以上','0');");
E_D("replace into `ecs_goods_attr` values('147','143','6','3.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('146','143','3','广东','0');");
E_D("replace into `ecs_goods_attr` values('256','168','12','四核','0');");
E_D("replace into `ecs_goods_attr` values('151','143','10','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('152','143','11','500万像素','0');");
E_D("replace into `ecs_goods_attr` values('153','143','12','双核','0');");
E_D("replace into `ecs_goods_attr` values('293','143','14','1334×750','0');");
E_D("replace into `ecs_goods_attr` values('155','143','1','粉色','');");
E_D("replace into `ecs_goods_attr` values('156','143','1','黑色','300');");
E_D("replace into `ecs_goods_attr` values('254','168','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('193','100','12','四核','0');");
E_D("replace into `ecs_goods_attr` values('192','100','11','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('191','100','10','1300万像素','0');");
E_D("replace into `ecs_goods_attr` values('190','100','8','苹果（IOS）','0');");
E_D("replace into `ecs_goods_attr` values('189','100','3','深圳','0');");
E_D("replace into `ecs_goods_attr` values('179','147','3','云南','0');");
E_D("replace into `ecs_goods_attr` values('180','147','6','2.7英寸','0');");
E_D("replace into `ecs_goods_attr` values('181','147','7','1600万以上','0');");
E_D("replace into `ecs_goods_attr` values('182','147','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('183','147','9','4.7英寸','0');");
E_D("replace into `ecs_goods_attr` values('184','147','10','500万像素','0');");
E_D("replace into `ecs_goods_attr` values('185','147','11','30万像素','0');");
E_D("replace into `ecs_goods_attr` values('186','147','1','白色','');");
E_D("replace into `ecs_goods_attr` values('187','147','1','黑色','');");
E_D("replace into `ecs_goods_attr` values('221','155','1','绿色','');");
E_D("replace into `ecs_goods_attr` values('220','155','1','灰色','');");
E_D("replace into `ecs_goods_attr` values('219','155','12','八核','0');");
E_D("replace into `ecs_goods_attr` values('218','155','11','200万像素','0');");
E_D("replace into `ecs_goods_attr` values('217','155','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('216','155','3','湖南','0');");
E_D("replace into `ecs_goods_attr` values('228','162','3','北京','0');");
E_D("replace into `ecs_goods_attr` values('229','162','8','安卓（Android）','0');");
E_D("replace into `ecs_goods_attr` values('230','162','10','1300万像素','0');");
E_D("replace into `ecs_goods_attr` values('231','162','11','800万像素','0');");
E_D("replace into `ecs_goods_attr` values('232','162','12','双核','0');");
E_D("replace into `ecs_goods_attr` values('233','162','1','金色','');");
E_D("replace into `ecs_goods_attr` values('234','162','1','橙黄','');");
E_D("replace into `ecs_goods_attr` values('255','168','11','200万像素','0');");
E_D("replace into `ecs_goods_attr` values('253','168','3','新疆','0');");
E_D("replace into `ecs_goods_attr` values('275','175','2','购机入网送话费','0');");
E_D("replace into `ecs_goods_attr` values('260','179','3','福建','0');");
E_D("replace into `ecs_goods_attr` values('261','179','1','绿色','');");
E_D("replace into `ecs_goods_attr` values('262','179','1','紫色','');");
E_D("replace into `ecs_goods_attr` values('269','207','1','金色','');");
E_D("replace into `ecs_goods_attr` values('270','207','1','黑色','100');");
E_D("replace into `ecs_goods_attr` values('271','207','1','绿色','150');");
E_D("replace into `ecs_goods_attr` values('272','207','9','3.5英寸','0');");
E_D("replace into `ecs_goods_attr` values('273','207','14','480×854','0');");
E_D("replace into `ecs_goods_attr` values('274','207','2','非合约机','0');");
E_D("replace into `ecs_goods_attr` values('276','175','9','4.5英寸','0');");
E_D("replace into `ecs_goods_attr` values('277','175','14','540×960','0');");
E_D("replace into `ecs_goods_attr` values('278','168','2','联通4G版','0');");
E_D("replace into `ecs_goods_attr` values('279','168','9','4.7英寸','0');");
E_D("replace into `ecs_goods_attr` values('280','168','14','640×960','0');");
E_D("replace into `ecs_goods_attr` values('281','162','2','联通4G版','0');");
E_D("replace into `ecs_goods_attr` values('282','162','9','5.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('283','162','14','640×960','0');");
E_D("replace into `ecs_goods_attr` values('284','155','2','电信4G版','0');");
E_D("replace into `ecs_goods_attr` values('285','155','9','5.2英寸','0');");
E_D("replace into `ecs_goods_attr` values('286','155','14','1334×750','0');");
E_D("replace into `ecs_goods_attr` values('287','100','2','公开版','0');");
E_D("replace into `ecs_goods_attr` values('288','100','9','6.0英寸','0');");
E_D("replace into `ecs_goods_attr` values('289','100','14','1920×1152','0');");
E_D("replace into `ecs_goods_attr` values('291','113','2','电信4G版','0');");
E_D("replace into `ecs_goods_attr` values('294','143','2','移动4G版','0');");

require("../../inc/footer.php");
?>