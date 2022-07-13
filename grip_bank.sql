
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`id`, `name`, `email`, `balance`) VALUES
(1, 'GAUTAM', 'gautamb@gmail.com', 60000),
(2, 'SIRISH', 'siri@gmail.com', 700000),
(3, 'GARRY', 'garryj@gmail.com', 345000),
(4, 'NAVIN', 'navin@gmail.com', 23000),
(5, 'VRATIKA','vratika@gmail.com', 80000),
(6, 'RAJ', 'raj@gmail.com', 650000),
(7, 'RAVI', 'ravi@gmail.com', 90000),
(8, 'SNEHA', 'sneha@gmail.com', 12000),
(9, 'ASTITVA', 'astitva@gmail.com', 980000),
(10, 'ARJUN', 'arjun@gmail.com', 560000);


ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

