
-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";

-- Database: `p&m health club`

-- --------------------------------------------------------

-- Table structure for table `customer details`

CREATE TABLE `customer details` (
  `customer_id` int(10) NOT NULL,
  `name` varchar(244) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(3) NOT NULL,
  `address` varchar(502) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- Table structure for table `login`

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username_a` varchar(40) NOT NULL,
  `password_a` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

-- Table structure for table `program`

CREATE TABLE `program` (
  `program_id` int(10) NOT NULL,
  `program_name` varchar(244) NOT NULL,
  `Start date` DATE,
  `End date` DATE,
  `Fees` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- Table structure for table `payment`

CREATE TABLE `Payment` (
  `Payment_id` int(10) NOT NULL,
  `Amount` int(20),
  `customer_id` int(20) NOT NULL,
  `payment_type` int(20) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

-- Table structure for table `trainer`

CREATE TABLE `trainer` (
  `trainer_id` int(10) NOT NULL,
  `trainer_name` varchar(244) NOT NULL,
  `trainer_pno` bigint(11) NOT NULL,
  `salary` int(6) NOT NULL,
  `experience` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Indexes for table `customer details`
ALTER TABLE `customer details`
  ADD PRIMARY KEY (`customer_id`);

-- Indexes for table `program`
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

-- Indexes for table `payment`
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

-- Indexes for table `trainer`
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`trainer_id`);
COMMIT;

