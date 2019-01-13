-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-06-19 16:45:34
-- 服务器版本： 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `express`
--

-- --------------------------------------------------------

--
-- 表的结构 `company`
--

CREATE TABLE `company` (
  `number` int(11) NOT NULL COMMENT '序号',
  `name` varchar(20) NOT NULL COMMENT '公司名称',
  `inaddress` varchar(20) NOT NULL COMMENT '公司所在地',
  `inprivince` varchar(8) NOT NULL COMMENT '公司所在省份',
  `incity` varchar(10) NOT NULL COMMENT '公司所在市',
  `regaddress` varchar(20) NOT NULL COMMENT '公司注册地址',
  `regprivince` varchar(8) NOT NULL COMMENT '公司注册省份',
  `regcity` varchar(10) NOT NULL COMMENT '公司注册市',
  `phone` varchar(11) NOT NULL COMMENT '公司联系电话',
  `email` varchar(20) NOT NULL COMMENT '公司联系邮箱',
  `principal` varchar(5) NOT NULL COMMENT '公司负责人',
  `createtime` datetime NOT NULL COMMENT '公司创建时间',
  `updatetime` datetime NOT NULL COMMENT '公司信息变更时间',
  `description` text NOT NULL COMMENT '公司简介',
  `regmoney` double NOT NULL COMMENT '注册资本'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='快递公司信息表';

--
-- 转存表中的数据 `company`
--

INSERT INTO `company` (`number`, `name`, `inaddress`, `inprivince`, `incity`, `regaddress`, `regprivince`, `regcity`, `phone`, `email`, `principal`, `createtime`, `updatetime`, `description`, `regmoney`) VALUES
(1000, '速运信息服务有限公司', '辽宁省沈阳市沈北新区道义南大街37号', '辽宁省', '沈阳市', '辽宁省沈阳市沈北新区道义南大街37号', '辽宁省', '沈阳市', '17600483029', 'cncyan@suyun.com', '乔女士', '2018-04-13 00:00:00', '2018-06-03 18:54:25', '速运信息服务有限公司成立于2018年4月13日，,注册资本达1亿元人民币。    公司定位于做“专注于运营商外包业务的整体服务商”，主要从事互联网语音增值、电信代营代维、通信设备与器材销售、通信工程建设与系统集成等业务，形成了以增值业务、通信维护、物流配送三大业务为核心的业务架构，具备增值电信业务经营许可证、通信信息网络系统集成、建筑智能化工程专业承包等业务资质。国内业务覆盖整个深圳地区，并延伸到广东、广西、云南全省；国际业务已拓展到亚洲、非洲和南亚等三十多个国家和地区。     多年来，公司一贯秉承“客户为中心，市场为导向，创新为动力，技术为支撑，服务为保障，双赢为目的”的发展理念，不断改革创新、优化管理，建成具有以通信服务链为核心的主营业务和优势产业、具有综合竞争实力和通信服务品牌的现代企业。', 100000000);

-- --------------------------------------------------------

--
-- 表的结构 `employee`
--

CREATE TABLE `employee` (
  `number` int(11) NOT NULL COMMENT '员工编号',
  `loginname` varchar(15) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `phone` varchar(11) NOT NULL COMMENT '电话',
  `phonebackup` varchar(11) NOT NULL COMMENT '紧急联系人',
  `email` varchar(20) NOT NULL COMMENT '邮箱',
  `birthday` datetime NOT NULL COMMENT '出生年月日',
  `address` varchar(30) NOT NULL COMMENT '住址',
  `point` varchar(40) NOT NULL COMMENT '所在网点',
  `jointime` datetime NOT NULL COMMENT '入职时间',
  `leavetime` datetime NOT NULL COMMENT '离职时间',
  `isStay` tinyint(1) NOT NULL COMMENT '是否在职',
  `isformal` int(11) NOT NULL COMMENT '是否是正式员工',
  `role` bigint(10) NOT NULL COMMENT '角色',
  `updatetime` datetime NOT NULL COMMENT '信息修改时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `employee`
--

INSERT INTO `employee` (`number`, `loginname`, `password`, `name`, `phone`, `phonebackup`, `email`, `birthday`, `address`, `point`, `jointime`, `leavetime`, `isStay`, `isformal`, `role`, `updatetime`) VALUES
(1003, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '超级管理', '12345678', '12345612313', '123456@cyan.com', '2018-05-30 00:00:00', '上庄', '超级网点', '2018-05-08 00:00:00', '0000-00-00 00:00:00', 1, 1, 1, '2018-05-20 19:20:34'),
(1005, 'lisi', 'e10adc3949ba59abbe56e057f20f883e', '李四', '1241412', '143124123', 'lisi@suyun.com', '2018-05-10 00:00:00', '上海', '上海虹桥机场站', '2018-05-30 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-06-04 23:37:08'),
(1006, 'wangwu', 'e10adc3949ba59abbe56e057f20f883e', '王五', '234232', '234234234', 'wangwu@suyun.com', '2018-05-08 00:00:00', '沈航', '沈阳航空航天大学站', '2018-05-23 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:28:20'),
(1007, 'mafen', 'e10adc3949ba59abbe56e057f20f883e', '马奋', '325353', '23423423', 'mafen@suyun.com', '2018-05-15 00:00:00', '郑州市二七广场', '郑州二七广场站', '2018-05-30 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:29:11'),
(1008, 'niudan', 'e10adc3949ba59abbe56e057f20f883e', '牛丹', '7852375', '23423423', 'niudan@suyun.com', '2018-05-09 00:00:00', '大连科技园', '大连软件园站', '2018-05-30 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:30:28'),
(1009, 'yangmao', 'e10adc3949ba59abbe56e057f20f883e', '杨茂', '3525234', '2532523', 'yangmao@suyun.com', '2018-05-23 00:00:00', '邯郸', '邯郸永年房古街道站', '2018-05-30 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-06-04 23:37:15'),
(1010, 'jixin', 'e10adc3949ba59abbe56e057f20f883e', '纪鑫', '2354235', '34634653', 'jixin@suyun.com', '2018-05-09 00:00:00', '天津瓷房子', '天津瓷房子站', '2018-05-03 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:32:32'),
(1011, 'zhuwa', 'e10adc3949ba59abbe56e057f20f883e', '朱娃', '2223453', '234523', 'zhuwa@suyun.com', '2018-05-23 00:00:00', '呼和浩特', '呼和浩特机场站', '2018-05-08 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:33:39'),
(1012, 'xuezhiqian', 'e10adc3949ba59abbe56e057f20f883e', '薛之谦', '3243423', '2342342', 'xuezhiqian@suyun.com', '2018-05-09 00:00:00', '烟台', '烟台无厘头站', '2018-05-01 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:35:09'),
(1013, 'fanbingbing', 'e10adc3949ba59abbe56e057f20f883e', '范冰冰', '325235', '2352352', 'fanbingbing@suyun.co', '2018-05-16 00:00:00', '福田', '福田五棵松站', '2018-05-08 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-05-30 22:36:01'),
(1014, 'zhangsan', 'e10adc3949ba59abbe56e057f20f883e', '张三', '342123', '123123', 'zhangsan@suyun.com', '1212-12-12 00:00:00', '阿萨德', '北京海淀五路居店', '2018-06-12 00:00:00', '0000-00-00 00:00:00', 1, 1, 2, '2018-06-06 01:08:47'),
(1015, 'liyi', '25d55ad283aa400af464c76d713c07ad', '李毅', '123412', '1235423', 'liyi@suyun.com', '2018-06-07 00:00:00', '海淀', '邯郸永年房古街道站', '2018-06-04 21:11:18', '0000-00-00 00:00:00', 1, 1, 2, '2018-06-06 01:06:07');

-- --------------------------------------------------------

--
-- 表的结构 `express`
--

CREATE TABLE `express` (
  `number` int(11) NOT NULL COMMENT '编号',
  `expressnumber` int(11) NOT NULL COMMENT '订单编号',
  `postaddress` varchar(50) NOT NULL COMMENT '寄件人地址',
  `receiveaddress` varchar(50) NOT NULL COMMENT '收件人地址',
  `postname` varchar(20) NOT NULL COMMENT '寄件人姓名',
  `receivename` varchar(29) NOT NULL COMMENT '收件人姓名',
  `postphone` int(15) NOT NULL COMMENT '寄件人电话',
  `receivephone` int(15) NOT NULL COMMENT '收件人电话',
  `postpoint` varchar(30) NOT NULL COMMENT '寄件网点',
  `nextpoint` varchar(30) NOT NULL COMMENT '下一站网点',
  `posttime` datetime NOT NULL COMMENT '寄件时间',
  `changetime` datetime NOT NULL COMMENT '快件信息修改时间',
  `principalname` varchar(20) NOT NULL COMMENT '负责人姓名',
  `price` double NOT NULL COMMENT '快件价格',
  `status` int(2) NOT NULL COMMENT '快件状态',
  `description` text NOT NULL COMMENT '备注',
  `currentpoint` varchar(20) NOT NULL COMMENT '当前网点',
  `isproexpress` tinyint(1) NOT NULL COMMENT '是否是问题件'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='快件信息表';

--
-- 转存表中的数据 `express`
--

INSERT INTO `express` (`number`, `expressnumber`, `postaddress`, `receiveaddress`, `postname`, `receivename`, `postphone`, `receivephone`, `postpoint`, `nextpoint`, `posttime`, `changetime`, `principalname`, `price`, `status`, `description`, `currentpoint`, `isproexpress`) VALUES
(1000, 10000, '北京', '上海', '鹿晗', '关晓彤', 12341234, 3423234, '北京海淀五路居店', '-选择下一站-', '2018-06-05 23:04:13', '2018-06-05 23:27:29', 'lisi', 1314, 4, '', '上海虹桥机场站', 0),
(1001, 10001, '北京', '大连', '王宝强', '马蓉', 312312, 324324, '北京海淀五路居店', '沈阳航空航天大学站', '2018-06-05 23:41:49', '2018-06-06 00:05:12', 'zhangsan', 321, 1, '', '北京海淀五路居店', 0),
(1002, 2131212, '北京', '沈阳', '高', '乔', 12313, 12341, '北京海淀五路居店', '-选择下一站-', '2018-06-18 23:35:23', '2018-06-18 23:37:42', 'wangwu', 12, 4, '', '沈阳航空航天大学站', 0);

-- --------------------------------------------------------

--
-- 表的结构 `expresshistory`
--

CREATE TABLE `expresshistory` (
  `number` int(11) NOT NULL COMMENT '编号',
  `expressnumber` varchar(20) NOT NULL COMMENT '订单编号',
  `point` varchar(30) NOT NULL COMMENT '网点编号',
  `status` tinyint(1) NOT NULL COMMENT '快件状态',
  `changetime` datetime NOT NULL COMMENT '快件状态改变时间',
  `employee` varchar(20) NOT NULL COMMENT '操作员工id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `expresshistory`
--

INSERT INTO `expresshistory` (`number`, `expressnumber`, `point`, `status`, `changetime`, `employee`) VALUES
(1000, '10000', '北京海淀五路居店', 1, '2018-06-05 23:04:13', 'zhangsan'),
(1001, '10000', '天津瓷房子站', 1, '2018-06-05 23:13:47', 'jixin'),
(1001, '10001', '北京海淀五路居店', 1, '2018-06-05 23:41:49', 'zhangsan'),
(1002, '10000', '天津瓷房子站', 1, '2018-06-05 23:14:52', 'jixin'),
(1002, '2131212', '北京海淀五路居店', 1, '2018-06-18 23:35:23', 'zhangsan'),
(1003, '10000', '天津瓷房子站', 2, '2018-06-05 23:15:38', 'jixin'),
(1004, '10000', '天津瓷房子站', 2, '2018-06-05 23:18:42', 'jixin'),
(1005, '10000', '天津瓷房子站', 2, '2018-06-05 23:20:01', 'jixin'),
(1006, '10000', '上海虹桥机场站', 2, '2018-06-05 23:25:24', 'lisi'),
(1007, '10000', '上海虹桥机场站', 3, '2018-06-05 23:25:54', 'lisi'),
(1008, '10000', '上海虹桥机场站', 4, '2018-06-05 23:26:09', 'lisi'),
(1009, '10000', '上海虹桥机场站', 4, '2018-06-05 23:27:29', 'lisi'),
(1010, '2131212', '天津瓷房子站', 1, '2018-06-18 23:36:28', 'jixin'),
(1011, '2131212', '天津瓷房子站', 1, '2018-06-18 23:36:47', 'jixin'),
(1012, '2131212', '天津瓷房子站', 2, '2018-06-18 23:37:07', 'jixin'),
(1013, '2131212', '沈阳航空航天大学站', 2, '2018-06-18 23:37:21', 'wangwu'),
(1014, '2131212', '沈阳航空航天大学站', 3, '2018-06-18 23:37:28', 'wangwu'),
(1015, '2131212', '沈阳航空航天大学站', 4, '2018-06-18 23:37:42', 'wangwu');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `main1` varchar(20) NOT NULL COMMENT '主体1',
  `action` varchar(10) NOT NULL COMMENT '操作',
  `main2` varchar(20) NOT NULL COMMENT '主体2',
  `point` varchar(20) NOT NULL COMMENT '所属网点',
  `is_operation` bigint(20) NOT NULL COMMENT '是否需要操作',
  `is_action` tinyint(2) NOT NULL COMMENT '是否已经操作',
  `is_see_role1` tinyint(20) NOT NULL COMMENT '信息是被查看',
  `is_see_role2` tinyint(4) NOT NULL,
  `is_see_role3` tinyint(4) NOT NULL,
  `has_permission_point` bigint(20) NOT NULL COMMENT '网点负责人是否有权限',
  `has_permission_people` bigint(20) NOT NULL COMMENT '网点员工是否有权限',
  `time` datetime NOT NULL COMMENT '信息写入时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='站内信表';

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`main1`, `action`, `main2`, `point`, `is_operation`, `is_action`, `is_see_role1`, `is_see_role2`, `is_see_role3`, `has_permission_point`, `has_permission_people`, `time`) VALUES
('gyt', '注册', '', '北京海淀五路居店', 1, 1, 1, 1, 0, 1, 0, '2018-06-16 12:42:35'),
('admin', '删除', '12', '北京海淀五路居店', 0, 0, 0, 1, 0, 1, 1, '2018-06-16 12:45:36'),
('zhangsan', '增加', '2131212', '北京海淀五路居店', 0, 0, 0, 0, 0, 1, 0, '2018-06-18 23:35:22'),
('jixin', '入仓', '2131212', '北京海淀五路居店', 0, 0, 0, 0, 0, 1, 0, '2018-06-18 23:36:28'),
('wangwu', '入仓', '2131212', '天津瓷房子站', 0, 0, 0, 0, 0, 1, 0, '2018-06-18 23:37:21');

-- --------------------------------------------------------

--
-- 表的结构 `point`
--

CREATE TABLE `point` (
  `number` int(11) NOT NULL COMMENT '编号',
  `name` varchar(10) NOT NULL COMMENT '网点名字',
  `address` varchar(50) NOT NULL COMMENT '网点地址',
  `privince` varchar(10) NOT NULL COMMENT '网点所在省份',
  `city` varchar(10) NOT NULL COMMENT '网点所在市',
  `phone` varchar(11) NOT NULL COMMENT '网点电话',
  `email` varchar(20) NOT NULL COMMENT '网点邮箱',
  `principal` varchar(5) NOT NULL COMMENT '网点负责人',
  `createtime` datetime NOT NULL COMMENT '网点开通时间',
  `updatetime` datetime NOT NULL COMMENT '网点信息更新时间',
  `maxnumber` int(11) NOT NULL COMMENT '网点最大库存'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网点信息表';

--
-- 转存表中的数据 `point`
--

INSERT INTO `point` (`number`, `name`, `address`, `privince`, `city`, `phone`, `email`, `principal`, `createtime`, `updatetime`, `maxnumber`) VALUES
(10, '超级网点', '超级星球', '河南', '平顶山', '123456789', '123456789@suyun.com', '超级管理', '2018-05-20 19:20:33', '2018-05-20 19:20:33', 0),
(11, '北京海淀五路居店', '北京市海淀区五路居路23号', '北京', '海淀区', '12346789', '142@suyun.com', '选择负责人', '2018-05-21 03:00:56', '2018-06-10 23:32:08', 0),
(12, '上海虹桥机场站', '上海市虹桥区无关路78号', '上海', '黄浦', '674302864', 'shanghaihongji@suyun', '李四', '2018-05-30 22:10:07', '2018-05-30 22:10:07', 0),
(13, '郑州二七广场站', '河南省郑州市二七区', '河南', '郑州', '43534534', 'zhengzhouerqi@suyun.', '马奋', '2018-05-30 22:16:38', '2018-05-30 22:16:38', 0),
(14, '福田五棵松站', '深圳市珠光街87号', '深圳', '福田', '3523234', 'wukesong@suyun.com', '范冰冰', '2018-05-30 22:17:48', '2018-05-30 22:17:48', 0),
(15, '天津瓷房子站', '天津市瓷房子路7号', '天津', '和平', '52347342345', 'cifangzi@suyun.com', '纪鑫', '2018-05-30 22:18:53', '2018-05-30 22:18:53', 0),
(16, '大连软件园站', '大连市新华区', '辽宁', '大连', '324512221', 'dalian@suyun.com', '牛丹', '2018-05-30 22:21:39', '2018-05-30 22:21:39', 0),
(17, '沈阳航空航天大学站', '沈阳航空航天大学', '辽宁', '沈阳', '25345234', 'sheny@suyun.com', '王五', '2018-05-30 22:22:21', '2018-05-30 22:22:21', 0),
(18, '呼和浩特机场站', '呼和浩特机场', '内蒙古', '呼和浩特', '263623453', 'huhehaote@suyun.com', '朱娃', '2018-05-30 22:23:32', '2018-05-30 22:23:32', 0),
(19, '烟台无厘头站', '烟台无厘头', '山东', '烟台', '76541234', 'wulit@suyun.com', '薛之谦', '2018-05-30 22:24:25', '2018-05-30 22:24:25', 0),
(20, '邯郸永年房古街道站', '邯郸永年区房古街道站87号', '河北', '邯郸', '23542353', 'handan@suyun.com', '选择负责人', '2018-05-30 22:25:05', '2018-06-06 01:07:14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`number`,`name`),
  ADD UNIQUE KEY `编号` (`number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `number` (`number`,`loginname`,`phone`,`email`);

--
-- Indexes for table `express`
--
ALTER TABLE `express`
  ADD UNIQUE KEY `number` (`number`,`expressnumber`);

--
-- Indexes for table `expresshistory`
--
ALTER TABLE `expresshistory`
  ADD UNIQUE KEY `number` (`number`,`expressnumber`,`point`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD UNIQUE KEY `number` (`number`,`name`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `number_2` (`number`,`name`,`phone`,`email`,`principal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
