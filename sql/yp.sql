
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `pwd` varchar(255) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='管理员';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('2', 'admin', 'admin');

-- ----------------------------
-- Table structure for dingdan
-- ----------------------------
DROP TABLE IF EXISTS `dingdan`;
CREATE TABLE `dingdan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `danhao` varchar(255) DEFAULT NULL COMMENT '订单号',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `xingming` varchar(255) DEFAULT NULL COMMENT '收货人姓名',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `tel` varchar(255) DEFAULT NULL COMMENT '联系人电话',
  `code` varchar(255) DEFAULT NULL COMMENT '邮编',
  `zt` varchar(255) DEFAULT NULL COMMENT '待发货',
  `kuaidi` varchar(255) DEFAULT NULL COMMENT '快递',
  `kdanhao` varchar(255) DEFAULT NULL COMMENT '快递单号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='订单信息';

-- ----------------------------
-- Records of dingdan
-- ----------------------------
INSERT INTO `dingdan` VALUES ('1', '2021030403884', 'gzf', '老郭', '和平路101', '15176086060', '056600', '已发货', '圆通', '123456');

-- ----------------------------
-- Table structure for gouwuche
-- ----------------------------
DROP TABLE IF EXISTS `gouwuche`;
CREATE TABLE `gouwuche` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `bid` varchar(255) DEFAULT NULL COMMENT '商品名称',
  `shijian` varchar(255) DEFAULT NULL COMMENT '时间',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `memo` varchar(255) DEFAULT NULL COMMENT '备注',
  `shuliang` varchar(255) DEFAULT NULL COMMENT '数量',
  `zt` varchar(255) DEFAULT NULL COMMENT '状态',
  `danhao` varchar(255) DEFAULT NULL COMMENT '订单号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='购物车信息';

-- ----------------------------
-- Records of gouwuche
-- ----------------------------
INSERT INTO `gouwuche` VALUES ('1', '10', '2021/03/04', 'gzf', '', '1', '已支付', '2021030403884');
INSERT INTO `gouwuche` VALUES ('2', '5', '2021/03/04', 'gzf', '', '1', '已支付', '2021030403884');
INSERT INTO `gouwuche` VALUES ('3', '4', '2021/03/04', 'gzf', '', '1', '未支付', null);

-- ----------------------------
-- Table structure for leixing
-- ----------------------------
DROP TABLE IF EXISTS `leixing`;
CREATE TABLE `leixing` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `leixing` varchar(255) DEFAULT NULL COMMENT '类型名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='类型信息';

-- ----------------------------
-- Records of leixing
-- ----------------------------
INSERT INTO `leixing` VALUES ('1', '中西药品');
INSERT INTO `leixing` VALUES ('2', '医疗器械');
INSERT INTO `leixing` VALUES ('3', '养生保健');
INSERT INTO `leixing` VALUES ('4', '计生用品');
INSERT INTO `leixing` VALUES ('5', '中药饮片');
INSERT INTO `leixing` VALUES ('6', '美容护肤');

-- ----------------------------
-- Table structure for lianxi
-- ----------------------------
DROP TABLE IF EXISTS `lianxi`;
CREATE TABLE `lianxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `jieshao` text COMMENT '联系我们',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='联系我们';

-- ----------------------------
-- Records of lianxi
-- ----------------------------
INSERT INTO `lianxi` VALUES ('3', '<p>\r\n	在网站使用过程中遇到任何问题都可以联系我们\r\n</p>\r\n<p>\r\n	QQ：<span style=\"white-space:nowrap;\">414201944</span>\r\n</p>\r\n<p>\r\n	TEl：15176086060\r\n</p>');

-- ----------------------------
-- Table structure for shangping
-- ----------------------------
DROP TABLE IF EXISTS `shangping`;
CREATE TABLE `shangping` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `bianhao` varchar(255) DEFAULT NULL COMMENT '编号',
  `mingcheng` varchar(255) DEFAULT NULL COMMENT '名称',
  `leibie` varchar(255) DEFAULT NULL COMMENT '类别',
  `shuliang` int(255) DEFAULT NULL COMMENT '数量',
  `danjia` int(255) DEFAULT NULL COMMENT '单价',
  `pic` varchar(255) DEFAULT NULL COMMENT '图片',
  `jieshao` text COMMENT '介绍',
  `xiaoliang` int(11) DEFAULT '0' COMMENT '销量',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='商品信息';

-- ----------------------------
-- Records of shangping
-- ----------------------------
INSERT INTO `shangping` VALUES ('1', '0001', 'YE655D型·臂式电子血压计', '医疗器械', '1000', '300', 'upimages/2.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('2', '0002', '小型医用制氧机', '医疗器械', '1000', '3280', 'upimages/3.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('3', '0003', '手动轮椅车 ', '医疗器械', '1000', '1299', 'upimages/4.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('4', '0004', '金嗓子喉片', '中西药品', '1000', '8', 'upimages/5.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('5', '0005', '阿司匹林肠溶片 ', '中西药品', '1000', '12', 'upimages/6.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('6', '0006', '盐酸氟桂利嗪胶囊 ', '中西药品', '1000', '18', 'upimages/7.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('7', '0007', '护肝片', '中西药品', '1000', '22', 'upimages/9.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('9', '0008', '连花清瘟胶囊  ', '中西药品', '1000', '12', 'upimages/8.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('10', '0009', '西洋参粉 ', '中药饮片', '1000', '160', 'upimages/10.png', '祝您健康每一天，早日康复', '0');
INSERT INTO `shangping` VALUES ('11', '0010', ' 铁皮石斛   ', '中药饮片', '1000', '12', 'upimages/11.png', '祝您健康每一天，早日康复', '0');

-- ----------------------------
-- Table structure for tliuyan
-- ----------------------------
DROP TABLE IF EXISTS `tliuyan`;
CREATE TABLE `tliuyan` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(255) NOT NULL COMMENT '留言人',
  `lneirong` varchar(255) NOT NULL COMMENT '留言内容',
  `lshijian` varchar(255) NOT NULL COMMENT '留言时间',
  `huifu` varchar(255) NOT NULL COMMENT '回复内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='留言信息';

-- ----------------------------
-- Records of tliuyan
-- ----------------------------
INSERT INTO `tliuyan` VALUES ('33', 'gzf', '111', '2021-03-3', '');
INSERT INTO `tliuyan` VALUES ('34', 'gzf', '2432', '2021-03-3', '');

-- ----------------------------
-- Table structure for userinfo
-- ----------------------------
DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `xingming` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  `dizhi` varchar(255) DEFAULT NULL,
  `pic` varchar(255) NOT NULL COMMENT '头像',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userinfo
-- ----------------------------
INSERT INTO `userinfo` VALUES ('8', 'gzf', 'gzf', '蝈蝈', '男', '15176080101', '860234001', '和平路108', 'upimages/1.jpg');

-- ----------------------------
-- View structure for v_dd
-- ----------------------------
DROP VIEW IF EXISTS `v_dd`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_dd` AS select `gouwuche`.`id` AS `id`,`gouwuche`.`bid` AS `bid`,`gouwuche`.`shijian` AS `shijian`,`gouwuche`.`username` AS `username`,`gouwuche`.`memo` AS `memo`,`gouwuche`.`shuliang` AS `shuliang`,`gouwuche`.`zt` AS `zt`,`shangping`.`mingcheng` AS `mingcheng`,`shangping`.`danjia` AS `danjia`,`gouwuche`.`danhao` AS `danhao` from (`gouwuche` join `shangping`) where (`gouwuche`.`bid` = `shangping`.`Id`) ;
