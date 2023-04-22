

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(1) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `wallet_address` varchar(35) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `secret_Quest` varchar(200) NOT NULL,
  `secret_answer` varchar(200) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
