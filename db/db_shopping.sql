-- 
-- Table structure for table `orders`
-- 

CREATE TABLE `orders` (
  `OrderID` int(5) unsigned zerofill NOT NULL auto_increment,
  `OrderDate` datetime NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY  (`OrderID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `orders`
-- 

INSERT INTO `orders` VALUES (00001, '2012-03-15 09:59:13', 'Weerachai Nukitram', '1234 Lapharo Bangkok Thailand', '0819876107', 'is_php@hotmail.com');
INSERT INTO `orders` VALUES (00002, '2012-03-15 10:15:03', 'Weerachai Nukitram', '1234 Latpharo Bangkok Thailand', '0819876107', 'is_php@hotmail.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `orders_detail`
-- 

CREATE TABLE `orders_detail` (
  `DetailID` int(5) NOT NULL auto_increment,
  `OrderID` int(5) unsigned zerofill NOT NULL,
  `ProductID` int(4) NOT NULL,
  `Qty` int(3) NOT NULL,
  PRIMARY KEY  (`DetailID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `orders_detail`
-- 

INSERT INTO `orders_detail` VALUES (1, 00001, 4, 1);
INSERT INTO `orders_detail` VALUES (2, 00002, 3, 3);
INSERT INTO `orders_detail` VALUES (3, 00002, 1, 1);
INSERT INTO `orders_detail` VALUES (4, 00002, 4, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `product`
-- 

CREATE TABLE `product` (
  `ProductID` int(4) NOT NULL auto_increment,
  `ProductName` varchar(100) NOT NULL,
  `Price` double NOT NULL,
  `Picture` varchar(100) NOT NULL,
  PRIMARY KEY  (`ProductID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `product`
-- 

INSERT INTO `product` VALUES (1, 'Product 1', 100, '1.gif');
INSERT INTO `product` VALUES (2, 'Product 2', 200, '2.gif');
INSERT INTO `product` VALUES (3, 'Product 3', 300, '3.gif');
INSERT INTO `product` VALUES (4, 'Product 4', 400, '4.gif');