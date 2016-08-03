CREATE TABLE `user`(
`user_id` VARCHAR(11) NOT NULL ,
`user_no` INT(7) UNSIGNED ZEROFILL NOT NULL ,
`user_idname` VARCHAR(20) NOT NULL ,
`user_name` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`user_sex` VARCHAR(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`user_birth` DATE NOT NULL ,
`user_phone` VARCHAR(10) NOT NULL ,
`user_addr` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL ,
`user_email` VARCHAR(50) NOT NULL ,
`user_pass` VARCHAR(50) NOT NULL ,
`user_level` INT NOT NULL ,
PRIMARY KEY (`user_id`)
) ENGINE = InnoDB;
INSERT INTO `user` (`user_id`, `user_no`, `user_idname`, `user_name`, `user_sex`, `user_birth`, `user_phone`, `user_addr`, `user_email`, `user_pass`, `user_level`) VALUES ('admin', '0', 'root', 'admin', 'F', '1991-01-01', '0912345678', 'taiwan', 'test@testmail.co', 'admin', '999');


CREATE TABLE `acc_type` (
`acc_typeid` INT(7) UNSIGNED ZEROFILL NOT NULL ,
`acc_typenote` VARCHAR(50) NOT NULL , 
`acc_timeloop` VARCHAR(20) NULL DEFAULT NULL , 
`acc_deftime` TIME NOT NULL , 
`acc_defday` DATE NOT NULL , 
`acc_planid` INT(7) UNSIGNED ZEROFILL NOT NULL ,
PRIMARY KEY (`acc_typeid`)
) ENGINE = InnoDB;


CREATE TABLE `acc_plan` (
`acc_planid` INT(7) UNSIGNED ZEROFILL NOT NULL , 
`plan_name` VARCHAR(20) NOT NULL , 
`plan_start_date` DATE NOT NULL , 
`plan_end_date` DATE NOT NULL , 
`plan_money` INT NOT NULL , 
`plan_note` VARCHAR(50) NOT NULL ,
PRIMARY KEY (`acc_planid`)
) ENGINE = InnoDB;


CREATE TABLE `acc_record` (
`acc_date` DATE NOT NULL , 
`user_id` VARCHAR(11) NOT NULL , 
`acc_typeid` INT(7) UNSIGNED ZEROFILL NOT NULL , 
`money` INT NOT NULL , 
`acc_planid` INT(7) UNSIGNED ZEROFILL NOT NULL , 
`note` VARCHAR(50) NOT NULL, 
`acc_recid` INT(7) UNSIGNED ZEROFILL NOT NULL
) ENGINE = InnoDB;