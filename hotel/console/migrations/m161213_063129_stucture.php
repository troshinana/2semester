<?php

use yii\db\Migration;

class m161213_063129_stucture extends Migration
{
    public function up()
    {
		$this->execute("
--
-- ��������� ������� `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(12) NOT NULL,
  `full_name` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `residential_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `code_room` int(10) NOT NULL,
  `arrival_date` date NOT NULL,
  `date_of_departure` date NOT NULL,
  `status_application` tinyint(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `application`
--

INSERT INTO `application` (`id`, `full_name`, `date_of_birth`, `residential_address`, `phone_number`, `code_room`, `arrival_date`, `date_of_departure`, `status_application`) VALUES
(11, '������� ������� ���������', '1995-07-06', '�.�����������, ���������� "������� ���", �.1, ��.1', '89137617137', 1, '2016-12-21', '2016-12-14', 1),
(12, '������ ���� ��������', '1996-09-13', '�.�����������, ��.������������, �.10, ��.167', '89137617137', 1, '2016-12-17', '2016-12-23', 1),
(14, '�������� ���� ���������', '1996-05-18', '�.�����������, ��.���������, �.1, ��.5', '89138766545', 1, '2016-12-01', '2016-12-08', 1),
(15, '����������� �������� ����������', '1996-04-18', '�.�����������, ��. ������, �.12, ��.312', '89139876456', 1, '2016-12-01', '2016-12-15', 1),
(20, '�������� ������� ���������', '1972-02-23', '�.�����������, ��.������������, �.10, ��.167', '89137617137', 3, '2016-12-22', '2016-12-29', 1),
(21, '������� ������� ���������', '1995-07-06', '�.�����������, ��. ������, �.12, ��.312', '89137617137', 2, '2016-12-10', '2016-12-23', 1),
(22, '���������� ��������� ��������', '1972-02-23', '�.�����������, ���������� "������� ���", �.1, ��.1', '89138766545', 1, '2016-12-13', '2016-12-27', 0),
(23, '������� ������� ���������', '1996-04-18', '�.�����������, ��.���������, �.1, ��.5', '89138766545', 5, '2016-12-13', '2016-12-27', 1),
(24, '������� ������� ���������', '1972-02-23', '�.�����������, ��.������������, �.10, ��.167', '89137617137', 5, '2016-12-13', '2016-12-27', 2);

-- --------------------------------------------------------

--
-- ��������� ������� `booking_room`
--

CREATE TABLE IF NOT EXISTS `booking_room` (
  `code_booking` int(4) NOT NULL,
  `id` int(12) NOT NULL,
  `status` tinyint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `booking_room`
--

INSERT INTO `booking_room` (`code_booking`, `id`, `status`) VALUES
(26, 11, 1),
(27, 14, 1),
(28, 12, 1),
(29, 15, 1),
(30, 20, 1),
(31, 21, 1),
(32, 23, 1);

-- --------------------------------------------------------

--
-- ��������� ������� `Client`
--

CREATE TABLE IF NOT EXISTS `Client` (
  `code_client` int(4) NOT NULL,
  `full_name_client` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `residential_address` text NOT NULL,
  `phone_number` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `Client`
--

INSERT INTO `Client` (`code_client`, `full_name_client`, `date_of_birth`, `residential_address`, `phone_number`) VALUES
(1, '���������� ����� �����������', '1975-02-23', '�.������, ��.��������, �.16, ��.2', '89137617137'),
(2, '�������� ������� ���������', '1973-11-06', '�.�����������, ��.������������, �.5, ��.7', '89145677687'),
(3, '������ ���� ��������', '1986-01-18', '�.�����������, ��.����������, �.9, ��.325', '89185678765'),
(4, '������ ���� ��������', '1985-07-08', '�.�����������, ��.���������, �.8, ��.90', '89234568767'),
(5, '�������� ������ ��������', '1995-08-12', '�.�����������, ��.���������, �.8, ��.70', '89134565434'),
(6, '������ ������ �������������', '2016-06-24', '�.�����������, ��.���������,�.46, ��.189', '89136543423'),
(7, '���������� ����� ����������', '1995-08-12', '��������', '89136543423'),
(8, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(9, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(10, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(11, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(12, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(13, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(14, '������ ������ �������������', '1995-08-12', '�.�����������, ��.������������, �.5, ��.7', '89136543423'),
(15, 'nhj', '0000-00-00', 'erta', 'ata'),
(16, 'hghf', '0000-00-00', 'ahah', 'ahah'),
(17, 'har', '0000-00-00', 'yayey', 'ayay'),
(18, 'gaga', '0000-00-00', 'gasg', 'agag'),
(19, 'sfhz', '0000-00-00', 'sgsdg', 'HHfdh'),
(20, 'zshzdf', '0000-00-00', 'sfhzdf', 'hzsfhzh'),
(21, 'dhbzdfh', '0000-00-00', 'dfhdzfh', 'zdfhzd'),
(22, 'gasdg', '0000-00-00', 'DgSDg', 'SDgsd'),
(23, 'fzsf', '0000-00-00', 'sgsd', 'GHdfh'),
(24, 'dgs', '0000-00-00', 'Gd', 'GG'),
(25, 'etE', '0000-00-00', 'etqtq', 'qtqtq'),
(26, 'fdhdfh', '0000-00-00', 'fhf', 'Hzfhzdf');

-- --------------------------------------------------------

--
-- ��������� ������� `Cooperator`
--

CREATE TABLE IF NOT EXISTS `Cooperator` (
  `code_cooperator` int(4) NOT NULL,
  `position` text NOT NULL,
  `full_name_cooperator` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `Cooperator`
--

INSERT INTO `Cooperator` (`code_cooperator`, `position`, `full_name_cooperator`, `status`) VALUES
(1, '�������������', '������� ������� ���������', 1);

-- --------------------------------------------------------

--
-- ��������� ������� `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1480342678),
('m130524_201442_init', 1480342683);

-- --------------------------------------------------------

--
-- ��������� ������� `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `code_room` int(10) NOT NULL,
  `nomer_room` int(100) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `type` text NOT NULL,
  `�haracteristic` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- ���� ������ ������� `room`
--

INSERT INTO `room` (`code_room`, `nomer_room`, `cost`, `type`, `�haracteristic`) VALUES
(1, 1, '0.00', '�����������', '������ ������������� �����. ������� ������ - 23,6 ��.�.� ������:���� ����������� ��� ��� ������������ �������,����� �������,��������,������������� ����,������� (� �.�. � ������ �������),��������� (���������� � ����������� ����������� ������),�����������, Wi-Fi ������ � �������� (� 01.04.2013 ���������),c������ ������������ �����������������'),
(2, 2, '3740.00', '���������� ������������', '������������� �����, ���������� ����������� ������� �������. ��������� ����������� �������� ������� ��������� ���� � �������� ��� ������������ ������ ��� ���������� ������. ������� ������ � 23,6 ��.�.� ������:���� ����������� ��� ��� ������������ ������� (�������������� ������),������ �������,��������,������������� ����,������� (� �.�. � ������ �������),\r\n��������� �� (���������� � ����������� ����������� ������),�����������,Wi-Fi ����������� � �������� (� 01.04.2013 ���������),������� ������������ �����������������,����� ��� ����'),
(3, 3, '4900.00', '������', '�� ���� ����� �������� ������ ������-������, ����������� ����������� ������� �������, ����������� ���������� ��� �� �����. ��������� ����������� �������� ������� ��������� ���� � �������� ��� ������������ ������ ��� ���������� ������.� ����� ������� � ��������� � ������� �������, ����������� � �����������. ����������� ������ ������� �������������� ����� � ����������� ��������-�������������� ����������������.'),
(4, 4, '7140.00', '��������-�����-������', '���������� �����-������ ������� �� ���� ��� - �������� � �������. ������� ������ � 37,6 ��.�. � ��������� ������ �������� ����������� ������� "����������������� ��������", ������� ����������� � ��������� "������� ������" �� 25 �����. ������ �������� � ���� ������� � ���� � ������� "�������� ����", �������������� ������ � ������� 24 ����� � �����, ����� � ���������� �������.����� � ��������� ������ �������� ����������� ������� ������-������ "������".'),
(5, 5, '7990.00', '����', '����� "����" ������� �� ���� ���������� ������ - �������� � �������, ������ ������� � ��������� �������. ������� ������ � 45,5 ��.�. � ��������� ������ �������� ����������� ������� "����������������� ��������", ������� ����������� � ��������� "������� ������" �� 25 �����. ������ �������� � ���� ������� � ���� � ������� "�������� ����", �������������� ������ � ������� 24 ����� � �����, ����� � ���������� �������.����� � ��������� ������ �������� ����������� ������� ������-������ "������".'),
(6, 6, '9690.00', '���� �����', '��������� ����������� ��������������� ������������� ����� ������� �� ��������, �������, ������ ������� � ��������� �������. ������������ ������ ��������� ���������� ������ ������, �������������� � ������ ������������. ������� ������ � 61,2 ��.�. � ��������� ������ �������� ����������� ������� "����������������� ��������", ������� ����������� � ��������� "������� ������" �� 25 �����. ������ �������� � ���� ������� � ���� � ������� "�������� ����", �������������� ������ � ������� 24 ����� � �����, ����� � ���������� �������.����� � ��������� ������ �������� ����������� ������� ������-������ "������".');

-- --------------------------------------------------------

--
-- ��������� ������� `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- ���� ������ ������� `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Natalia', '27mON42FcrRpJDkany1zMemzQd3Bqfnz', '$2y$13$Wqmv.iTTxTv0OmpDYbByIeJThKK.XROPfB8dK3fDa/wG1jljCZvia', NULL, 'troshns@mail.ru', 10, 1480930942, 1480930942);

--
-- ������� ���������� ������
--

--
-- ������� ������� `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_room` (`code_room`);

--
-- ������� ������� `booking_room`
--
ALTER TABLE `booking_room`
  ADD PRIMARY KEY (`code_booking`),
  ADD KEY `id` (`id`);

--
-- ������� ������� `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`code_client`),
  ADD KEY `code_client` (`code_client`);

--
-- ������� ������� `Cooperator`
--
ALTER TABLE `Cooperator`
  ADD PRIMARY KEY (`code_cooperator`),
  ADD KEY `code_cooperator` (`code_cooperator`);

--
-- ������� ������� `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- ������� ������� `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`code_room`),
  ADD KEY `code_room` (`code_room`);

--
-- ������� ������� `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT ��� ���������� ������
--

--
-- AUTO_INCREMENT ��� ������� `application`
--
ALTER TABLE `application`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT ��� ������� `booking_room`
--
ALTER TABLE `booking_room`
  MODIFY `code_booking` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT ��� ������� `Client`
--
ALTER TABLE `Client`
  MODIFY `code_client` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT ��� ������� `Cooperator`
--
ALTER TABLE `Cooperator`
  MODIFY `code_cooperator` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT ��� ������� `room`
--
ALTER TABLE `room`
  MODIFY `code_room` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT ��� ������� `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- ����������� �������� ����� ����������� ������
--

--
-- ����������� �������� ����� ������� `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`code_room`) REFERENCES `room` (`code_room`);

--
-- ����������� �������� ����� ������� `booking_room`
--
ALTER TABLE `booking_room`
  ADD CONSTRAINT `booking_room_ibfk_1` FOREIGN KEY (`id`) REFERENCES `application` (`id`);
")
    }

    public function down()
    {
        echo "m161213_063129_stucture cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
