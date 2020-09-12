-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 12, 2020 at 08:57 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u912770205_hikvisionbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_Id` int(4) NOT NULL,
  `Admin_Name` varchar(250) NOT NULL,
  `Admin_UserName` varchar(250) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL,
  `Admin_Email` varchar(20) NOT NULL,
  `Admin_Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_Id`, `Admin_Name`, `Admin_UserName`, `Admin_Password`, `Admin_Email`, `Admin_Image`) VALUES
(1, 'admin', 'admin123', 'admin123', 'admin@gmail.com', 'adminimage/logo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `Customer_Id` int(5) NOT NULL,
  `Customer_Type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(4) NOT NULL,
  `Product_Category` int(4) NOT NULL,
  `Model` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Image` varchar(250) NOT NULL,
  `Sort_Description` text NOT NULL,
  `Pdf_Link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `Product_Category`, `Model`, `Name`, `Image`, `Sort_Description`, `Pdf_Link`) VALUES
(1, 32, 'DS-2AE4223TI-D', 'HD1080P Turbo IR PTZ Dome Camera', 'DS-2AE4223TI-D-camera.jpg', '• 1/2.8\'\' Progressive Scan CMOS\r\n• 1920×1080\r\n• 25X Optical Zoom\r\n• DWDR\r\n• Up to 100m IR distance\r\n• 3D intelligent positioning function\r\n• Switchable Turbo HD and CVBS outputs                                       \r\n                                        ', 'https://www.hikvision.com/uk/Products/PTZ/Turbo-HD-PTZ/1080P-Turbo-HD/IR/DS-2AE4223TI-D'),
(2, 32, 'DS-2AE4562', 'Hikvision DS-2AE4562(N)-PTZ Dome CC Camera', 'DS-2AE4562-camera.jpg', 'CCTV TypePTZSensor1.3 MP Sony SensorLens6 mm\r\nVideo Resolution1920 x 1080Day / NightNight Vision\r\nIR55m\r\nConnectivity Standard CCTV Housing Dome                                      \r\n                                        ', 'www.hikvision.com/UploadFile/image/2014041816394851129.pdf'),
(3, 32, 'DS-2AE5223TI-A', 'HD1080P Turbo IR PTZ Dome Camera', 'DS-2AE5223TI-A-camera.jpg', '• 2MP CMOS Image sensing element\r\n• 1920x1080\r\n• 23X optical zoom, 16X digital zoom\r\n• DWDR\r\n• Up to 150m IR distance\r\n• 3D intelligent positioning\r\n• Turbo HD and CVBS twin output', 'https://www.hikvision.com/uploadfile/image/20150617032858119.PDF'),
(4, 31, 'DS-2AE7023I(N)-A', 'Hikvision DS-2AE7023I(N)-A-PTZ Dome CC Camera', 'DS-2AE7023I(N)-A-camera.jpeg', 'Image Sensor: 1/3’’ CCD\r\nEffective Pixel: 976(H)×582(V)\r\nHorizontal Resolution Colour: 700 TVL\r\nMin. illumination Colour: zero.02lux/(F1.6, AGC ON),\r\nB/W: 0.002lux/(F1.6, AGC ON) zero illumination unit with IR\r\nWhite Balance: automobile / Manual / ATW / Indoor / outside\r\nAGC: automobile / Manual\r\nS / N Ratio: ? 50dB\r\nDigital Noise Reduction: 3D DNR\r\nWide Dynamic Range: Digital WDR\r\nShutter Speed: one ~1/10,000s\r\nDay & Night: IR Cut Filter\r\nDigital Zoom: 16X\r\nPrivacy Mask: eight privacy masks programmable, a most of eight \r\nzones will be disguised at the same time on a similar video screen\r\nFocus Model: automobile / Semiautomatic / Manual\r\n01 Year warrantee', 'https://www.sourcesecurity.com/hikvision-ds-2ae7023i-a-dome-camera-technical-details.html'),
(5, 18, 'DS-2CD1221-I3', 'Hikvision DS-2CD1221-I3 (2.0MP) CMOS IR IP Bullet Camera', 'DS-2CD1221-I3-camera.jpg', 'Brand	Hikvision\r\nModel	Hikvision DS-2CD1221-I3\r\nType	IP Bullet Camera\r\nImage sensor	1/2.8\" Progressive Scan CMOS\r\nLens	4mm\r\nViewing Angle	83degree (Horizontal)\r\nVideo format	H.264, MJEPG\r\nResolution	1920 x 1080\r\nProtocols	TCP/IP, ICMP, HTTP, HTTPS, FTP, DHCP,\r\n DNS, DDNS, RTP, RTSP, RTCP, NTP, UPnP, SMTP, SNMP, \r\nIGMP, 802.1X, QoS, IPv6, Bonjour\r\nDimensions	147.5 x 78.2 x 92.9mm', 'www.colombocctv.com/wp-content/uploads/.../Datasheet-of-DS-2CD1221D-I3-I5.pdf'),
(6, 23, 'DS-2CD2112F-I', '1.3 MP IP66 Network Mini Dome Camera', 'DS-2CD2112F-I-camera.jpg', 'Color: 0.028 @ ƒ/2.0, B/W: zero with IR\r\n1280x960\r\nFixed, 4 mm @ ƒ/2.0 (2.8 mm, six millimeter option)\r\n92.5° (2.8 mm), 73.1° (4 mm), 46° (6 mm)\r\nH.264/MJPEG\r\n30 independent agency (1280 × 960), (1280 x 720), (704 x 576), (640 x 480)\r\n30 meters\r\n12 VDC ± 100 percent, PoE (802.3af)', 'https://us.hikvision.com/sites/default/files/manual/20150705052356704.pdf'),
(7, 26, 'DS-2CE16C0T-IR', 'HD720P IR Bullet Camera', 'DS-2CE16C0T-IR-camera.jpg', '•    1.0 Megapixel high-performance CMOS\r\n\r\n•    Analog HD output, up to 720P resolution\r\n\r\n•    True Day/Night\r\n\r\n•    DNR, Smart IR\r\n\r\n•    Up to 20m IR distance\r\n\r\n•    IP66 weatherproof                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/DS-2CE16C0T-IR_V1.0.1_20171214.pdf'),
(8, 26, 'DS-2CE16C0T-IT3', 'HD720P EXIR Bullet Camera', 'DS-2CE16C0T-IT3-camera.gif', '•    1 Megapixel high-performance CMOS\r\n\r\n•    Analog HD output, up to 720P resolution\r\n\r\n•    True Day/Night\r\n\r\n•    DNR, Smart IR\r\n\r\n•    EXIR technology, up to 20m/40m/80m IR distance\r\n\r\n•    IP66 weatherproof                                            \r\n                                        ', 'https://www.hikvision.com/en/Products/Analog-Camera/Turbo-HD-Camera/HD720P/Fixed-Lens-Bullet/DS-2CE16C0T-IT1/IT3/IT5'),
(9, 26, 'DS-2CE16D0T-IR', 'HD1080P IR Bullet Camera', 'DS-2CE16D0T-IR-IRF-camera.jpg', '•    2 Megapixel high-performance CMOS\r\n\r\n•    Analog HD output, up to 1080P resolution\r\n\r\n•    True Day/Night\r\n\r\n•    Smart IR\r\n\r\n•    Up to 20m IR distance\r\n\r\n•    IP66 weatherproof                                            \r\n                                        ', 'https://www.hikvision.com/en/Products/Analog-Camera/Turbo-HD-Camera/HD1080P/Fixed-Lens-Bullet/DS-2CE16D0T-IR'),
(10, 26, 'DS-2CE16D0T-IRP', 'HD1080P IR Bullet Camera', 'DS-2CE16D0T-IRP-camera.jpg', '•    2.0 Megapixel high-performance CMOS\r\n\r\n•    Analog HD output, up to 1080P resolution\r\n\r\n•    True Day/Night\r\n\r\n•    Smart IR\r\n\r\n•    Up to 20m IR distance\r\n\r\n•    IP66 weatherproof                                            \r\n                                        ', 'https://www.hikvision.com/en/Products/Analog-Camera/Turbo-HD-Camera/HD1080P/Fixed-Lens-Bullet/DS-2CE16D0T-IRP'),
(11, 26, 'DS-2CE16D0T-IT3', 'Turbo HD Camera > HD1080P > Fixed Lens Bullet', 'DS-2CE16D0T-IT3-camera.jpg', '?  2 Megapixel high-performance CMOS\r\n\r\n?  Analog HD output, up to 1080P resolution\r\n\r\n?  True Day/Night, Smart IR\r\n\r\n?  EXIR technology, up to 40m IR distance\r\n\r\n  IP66 weatherproof                                          \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/510748_DTCSpecTurboHDDS2CE16D0TIT5.pdf'),
(12, 26, 'DS-2CE16D0T-IT1/IT3/IT5', 'HD1080P EXIR Bullet Camera', 'DS-2CE16D0T-IT5_IT5F-camera.jpg', '•  a pair of Megapixel superior CMOS\r\n•  Analog HD output, up to 1080P resolution\r\n• True Day/Night\r\n• sensible IR\r\n• EXIR technology, up to 20m/40m/80m IR distance\r\n• IP66 weatherproof', 'https://www.hikvision.com/en/Products/Analog-Camera/Turbo-HD-Camera/HD1080P/Fixed-Lens-Bullet/DS-2CE16D0T-IT1/IT3/IT5'),
(13, 26, 'DS-2CE16D7T-(A)IT3Z', 'HD1080P WDR Motorized VF EXIR Bullet Camera', 'DS-2CE16D7T-IT3Z-camera.jpg', '• two Megapixel superior CMOS\r\n• Analog HD output, up to 1080P resolution\r\n• 2.8-12mm motorized varifocal lens\r\n• True Day/Night\r\n• OSD menu, DNR, Smart IR\r\n• True WDR, up to 120dB\r\n• EXIR technology, up to 40m IR distance \r\n• IP66 weatherproof\r\n• Up the Coax(HIKVISION-C)', ''),
(14, 26, 'DS-2CE16F1T-IT', '3MP EXIR Bullet Camera', 'DS-2CE16F1T-IT-camera.jpg', '• three Megapixel superior CMOS\r\n• Analog HD output, up to 3MP resolution\r\n• True Day/Night\r\n• OSD menu, DNR, Smart IR\r\n• EXIR technology, up to 20m IR distance \r\n• IP66 weatherproof\r\n• Up the Coax(HIKVISION-C)', 'https://www.hikvision.com/uploadfile/image/10476_DAnalogspecF1TDS2CE16F1TIT.pdf'),
(15, 26, 'DS-2CE56C0T-IR', 'HD720P Indoor IR Turret Camera', 'DS-2CE56C0T-IR-camera.jpg', '·1.0 Megapixel superior CMOS\r\n\r\n·Analog HD output, up to 720P resolution\r\n\r\n·True Day/Night\r\n\r\n·DNR, Smart IR\r\n\r\n·Up to 20m IR distance\r\n\r\n·IP66 weatherproof', 'https://www.hikvision.com/mtsc/uploads/product/accessory/DS-2CE56C0T-IR_V1.0.1_20171214.pdf'),
(16, 26, 'DS-2CE56C0T-IRP', 'HD720P Indoor IR Turret Camera', 'DS-2CE56C0T-IRP-camera.jpg', '• 1.0 Megapixel superior CMOS\r\n• Analog HD output, up to 720P resolution\r\n• True Day/Night\r\n• DNR, Smart IR\r\n• Up to 20m IR distance', '•    1.0 Megapixel high-performance CMOS  •     Analog HD output, up to 720P resolution  •     True Day/Night  •     DNR, Smart IR  •     Up to 20m IR distance'),
(17, 26, 'DS-2CE56C0T-IT1/IT3', 'HD720P EXIR Turret Camera', 'DS-2CE56C0T-IT3-camera.jpg', '=>1.0 Megapixel superior CMOS\r\n=>Analog HD output, up to 720P resolution\r\n=>True Day/Night\r\n=>DNR, Smart IR\r\n=>EXIR technology, up to 20m/40m IR distance\r\n=>IP66 weatherproof', 'https://www.hikvision.com/en/Products/Analog-Camera/Turbo-HD-Camera/HD720P/Outdoor-Dome/DS-2CE56C0T-IT1/IT3'),
(18, 26, ' DS-2CE56D0T-IRF', 'HD1080P Outdoor IR Turret Camera', 'DS-2CE56D0T-IR_IRF-camera.jpg', '=>2.0 Megapixel superior CMOS\r\n=>Analog HD output, up to 1080P resolution\r\n=>True Day/Night\r\n=>Smart IR\r\n=>Up to 20m IR distance\r\n=>IP66 weatherproof\r\n=>Switchable TVI/AHD/CVI/CVBS                                           \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/UD10288B_Baseline_TURBO_HD_Bullet_Turret_Camera_User_manual_V2.0.0_20180504(2).pdf'),
(19, 26, 'DS-2CE56D0T-IRP', 'HD1080P Indoor IR Turret Camera', 'DS-2CE56D0T-IRP-camera.jpg', '=>2 Megapixel superior CMOS\r\n=>Analog HD output, up to 1080P resolution\r\n=>True Day/Night, Smart IR\r\n=>Up to 20m IR distance\r\n=>OSD menu \r\n=>Up the Coax(HIKVISION-C Protocol)', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-2CE56D0T-IRP_V2.0.0_20180507.pdf'),
(20, 26, 'DS-2CE56D0T-IT3', 'DS-2CE56D0T-IT1/IT3', 'DS-2CE56D0T-IT3-camera.jpg', '·2 Megapixel superior CMOS\r\n·Analog HD output, up to 1080P resolution\r\n·True Day/Night\r\n·Smart IR\r\n·EXIR technology, up to 20m/40m IR distance\r\n·IP66 weatherproof                                           \r\n                                        ', 'http://www.akatos.net/ProductPDF/DS-2CE56D0T-IT3.pdf'),
(21, 23, 'DS-2CV2Q01FD-IW', '1.0 MP Network PT Camera', 'DS-2CV2Q01FD-IW-Camera.jpg', '=>Up to one.0 megapixel high resolution,\r\n=>Two video streams\r\n=>2.8mm mounted lens\r\n=>Digital Wide Dynamic vary\r\n=>3D Digital Noise Reduction\r\n=>Build-in electro-acoustic transducer and speaker, support two-way audio\r\n=>Support on-board storage, up to 128GB\r\n=>Up to five m IR vary\r\n=>Built-in Wi-Fi\r\n=>DC 5V ± ten nothing, small USB interface                                    \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/511076_Datasheet%20of%20Spec%20of%20DS-2CV2Q01FD-IW(16G-T%2032G-T%2064G-T).PDF'),
(22, 34, 'DS-D5019QE-B ', 'LCD MONITOR SCREEN SIZE:18.5”, OUTPUT:HDMI,VGA ', 'DS-D5019QE-B-monitor.jpg', 'LED backlit technology with full HD 1920×1080\r\nWide view angle: 170°(H)/160°(V)\r\nMultiply inputs: HDMI, VGA\r\n3D comb filter, 3D De-interlace\r\n3D noise reduction\r\nVESA stand bracket                    ', 'https://www.hikvision.com/uploadfile/image/10597_CUserszhaopeng8Desktop%E5%B7%A5%E4%BD%9C%E5%9D%8A00datasheetENSpecofDSD5022QEBbuild20161231.pdf'),
(23, 35, 'DS-D5022QE-B', '22” LED Monitor', 'DS-D5022QE-B-monitor.jpg', 'LED backlit technology with full HD 1920×1080\r\nWide read angle: 170°(H)/160°(V)\r\nMultiply inputs: HDMI, VGA\r\n3D comb filter, 3D De-interlace\r\n3D noise reduction\r\nVESA stand bracket                  ', 'https://www.hikvision.com/uploadfile/image/10597_CUserszhaopeng8Desktop%E5%B7%A5%E4%BD%9C%E5%9D%8A00datasheetENSpecofDSD5022QEBbuild20161231.pdf'),
(24, 35, 'DS-D5032FC ', '32” LED Monitor', 'DS-D5032FC-hikvision-monitor.jpg', 'Support 8bit/10bit 2-ch LVDS(1920×1080) HD display;\r\nAdopt 3D digital comb filter;\r\nTrue color OSD and easy operation menu;\r\n1 channel HDMI one.3 input interface, support HDCP one.2;\r\nAdopt 3D noise reduction technology;\r\nSupport high definition JPEG decoding;\r\nProgrammable 12-bit RGB gamma correction technology;\r\nSupport package spread-spectrum technology to cut back EMI radiation;                                            \r\n                                        ', 'https://www.hikvision.com/en/Products/Transmission--Display/Monitor/DS-D5032FC'),
(25, 36, 'DS-1LN5E-S', 'UTP CAT 5E Network Cable', 'DS-1LN5E-S-E.jpg', 'Category:	\r\nU/UTP CAT5-4P-PVC-CM\r\nTest Standard:	\r\nISO/IEC11801?TIA-568-C.2 ?YD/T1019 \r\nThickness:	\r\n0.55±0.05 mm\r\nExternal O.D.:	\r\n6.2±0.4 mm\r\nSurface:	\r\nClean,Frap,Satiation\r\nMaterial:	\r\nPVC(complies RoHS),CM\r\nColor:	\r\nMultiple                                   \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/DS-1LN5E-S.pdf'),
(26, 37, 'DS-1LN6-UU', 'UTP CAT 6 Network Cable', 'DS-1LN6-UU-hikvision-cat-6-cable_.jpg', ' Category:U/UTP CAT6-4P-PVC-CM\r\nTest Standard:	ISO/IEC11801?TIA-568-C.2,YD/T1019                                           \r\nThickness:	\r\n0.55±0.05 mm\r\nExternal O.D.:	\r\n6.2±0.4 mm\r\nSurface:	\r\nClean,Frap,Satiation\r\nMaterial:	\r\nPVC(complies RoHS),CM\r\nColor:	\r\nMultiple                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/DS-1LN6-UU.pdf'),
(27, 38, 'DS-K1T200EF', 'IP-based Fingerprint Access Control Terminal', 'DS-K1T200EF_.png', 'Card Reading Frequency:	\r\nEM Card (DS-K1T200EF/EF-C): 125KHz;\r\nMifare Card (DS-K1T200MF/MF-C): 13.56MHz\r\nStorage:	256M Storage  \r\nOperation System:	windows,Linux                                          \r\n                                        ', 'http://oversea-download.hikvision.com///uploadfile/Products/Access%20Control/Terminal/Spec%20of%20DS-K1T200EF%20MF-C%20IP-based%20Fingerprint%20Access%20Control%20Terminal.pdf'),
(28, 38, 'DS-K1T200EF-C', 'IP-based Fingerprint Access Control Terminal', 'DS-K1T200EF-C-access-control.jpg', 'Card Reading Frequency:	\r\nEM Card (DS-K1T200EF/EF-C): 125KHz;\r\nMifare Card (DS-K1T200MF/MF-C): 13.56MHz\r\nDevice Interfaces\r\nAccessible Card Reader:	\r\nRS485 IC Reader\r\nCommunication Mode:	\r\nTCP/IP, Wi-Fi, RS-485, and Wigand 26/34 (under the card reader mode only)\r\nOutput Interface:	\r\nDoorbell×1, Relay×1\r\nTransmission Rate:	\r\nTCP/IP, WIFI: 10/100Mbps Self-adaptive, \r\nRS-485: 19200 bps-N-8-1                                            \r\n                                        ', 'http://bkgrupe.lt/uploads/docs/Hikvision/DS-K1T200EF%20MF-C.pdf'),
(29, 39, 'DS-7604NI-E1', '4-CHANNEL NVR (1HDD UP TO 4TB)', 'DS-7604NI-E1.jpg', 'Third Party network cameras supported\r\nmaximun 6 Mega pixels resolution recording.\r\nHDMI and VGA output at maximun  1920×1080P resolution\r\n4/8/16-ch network cameras can be connected with\r\n40M/80M/160M incoming bandwidth\r\nMaximum 2 SATA interfaces\r\nSupport network detection, including network delay,\r\npacket loss.                                       \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-7600NI-E1_Series_NVR_3.4.9_201708.pdf'),
(30, 39, 'DS-7608NI-E2', '8-CHANNEL NVR (2HDD UP TO 4TB)', 'DS-7608NI-E2_.jpg', '• Third-party network cameras supported\r\n• Up to six Megapixels resolution recording\r\n• HDMI and VGA output at up to 1920×1080P\r\nresolution\r\n• 4/8/16-ch network cameras will be connected with\r\n40M/80M/160M incoming information measure\r\n• Up to two SATA interfaces\r\n• Support network detection, together with network delay,\r\npacket loss, etc                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-7600NI-E2_Series_NVR_3.4.9_201708.pdf'),
(31, 39, 'DS-7616NI-E2', '16-CHANNEL NVR (2HDD UP TO 4TB)', 'DS-7616NI-E2.jpg', '• Third-party network cameras supported\r\n• Up to six Megapixels resolution recording\r\n• HDMI and VGA output at up to 1920×1080P\r\nresolution\r\n• 4/8/16-ch network cameras will be connected with\r\n40M/80M/160M incoming information measure\r\n• Up to two SATA interfaces\r\n• Support network detection, as well as network delay,\r\npacket loss, etc.                                            \r\n                                        ', 'DS-7616NI-E2'),
(32, 39, 'DS-7716NI-I4', '16-CHANNEL NVR (4HDD UP TO 6TB)', 'DS-7716NI-I4.jpg', '• Third-party network cameras supported\r\n• Up to twelve Megapixels resolution recording\r\n• Support 1-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840x2160)\r\nresolution\r\n\r\n• 16/32-ch network cameras will be connected with\r\n160M/256M incoming information measure\r\n• Up to four SATA interfaces\r\n• Plug & Play with up to sixteen freelance Poe network\r\ninterfaces\r\n• Support dual-os to make sure high reliablility of system\r\n\r\nrunning\r\n\r\n•Support numerous VCA detection alarm and VCA search\r\n\r\n•Support H.265/H.264/MPEG4 video formats                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-7700NI-I4_P(1).pdf'),
(33, 39, 'DS-7632NI-E2', '32-CHANNEL NVR (2HDD UP TO 6TB)', 'DS-7632NI-E2.jpg', 'Max total information measure (from all cameras): a hundred and sixty Mbps\r\nSupport for megapixel cameras up to six MP\r\nH.264+/H.264 video compression\r\nStable operation\r\nPlace for 2 SATA HDDs, every up four TB\r\nSimultaneous playback of twelve (720p) or half-dozen (1080p) channels\r\nSupport for that is, Opera, Safari\r\nSimultaneously operational HDMI, VGA outputs\r\nHDMI/VGA up to 1920x1080\r\nSearching archives by motion detection and alarm events\r\nPossibility of continuous recording with special parameters within the case of specific events (only for Hikvision cameras)\r\nMonitoring of the standing of local area network, cameras, HDDs                                            \r\n                                        ', 'https://www.dipolnet.com/ip_nvr_hikvision_ds-7632ni-e2_32ch_160mbps_2xsata_vga_hdmi__K22321.htm'),
(34, 39, 'DS-7732NI-I4', '32-CHANNEL NVR (4HDD UP TO 6TB)', 'DS-7732NI-I4.jpg', '• Third-party network cameras supported\r\n• Up to twelve Megapixels resolution recording\r\n• Support 2-ch HDMI, 1-ch VGA, HMDI at up to 4K(3840x2160) resolution\r\n\r\n• 32-ch network cameras will be connected with\r\n320M/256M incoming information measure\r\n• Up to four SATA interfaces\r\n• Plug & Play with up to twenty four freelance Edgar Allen Poe network\r\ninterfaces\r\n• Support dual-os to confirm high reliablility of system running\r\n\r\n•Support numerous VCA detection alarm and VCA search\r\n•Support H.265/H.264/MPEG4 video formats                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-7732NI-I4_24P_20180209.pdf'),
(35, 40, 'DS-8632NI-E8', '32-CHANNEL NVR (8HDD UP TO 6TB)', 'DS-8632NI-E8.jpg', 'Description\r\nHikvision DS-8632NI-E8 Bangladesh\r\nVideo / audio input\r\nVideo input	32 channels\r\nInput bandwidth	200MB / s\r\nOutput bandwidth	80MB / s\r\nTwo-way audio input	1 channel, RCA (2.0 Vp-p, 1k?)\r\nVideo / audio output\r\nHDMI / VGA outputs	1 channel. Resolution: 1920 × 1080P, 1600 × 1200, 1280 × 1024, 1280 × 720, 1024 × 768\r\nRecording / playback resolution	5MP / 3MP / 1080P / UXGA / 720P / 4CIF / VGA / DCIF / 2CIF / CIF / QCIF\r\nFrame rate / s	Main stream up to fifty Federal Protective Service, Sub-stream up to fifty Federal Protective Service\r\nAudio Output	1 channel, RCA (Linear, 1k?)\r\nSynchronous playback	16 channels @ 4CIF, twelve channels @ 720P, half dozen channels @ 1080P\r\nHDD\r\nSATA	8 SATA interface for four HDD +1 DVD-RW (default), or 8 HDD\r\nESATA (optional)	1 interface\r\nScope	Up to four TB every                                            \r\n                                        ', '#'),
(36, 43, 'DS-9632NI-I8', '32-CHANNEL NVR (8HDD UP TO 6TB)', 'DS-9632NI-I8.jpg', '• Third-party network cameras supported\r\n• Up to twelve Megapixels resolution recording\r\n• Support 2-ch HDMI, 2-ch VGA, HMDI1 at up to 4K(3840x2160)\r\nresolution\r\n• Up to sixty four information processing cameras are often connected with 320M\r\n\r\nincoming information measure\r\n• Up to eight SATA interfaces\r\n• Support HDD hot swap with RAID0,1,5,6,10 storage\r\nscheme configurable\r\n•Support varied VCA detection alarm and VCA search\r\n•Support H.265/H.264/MPEG4 video formats                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-9600NI-I8.pdf'),
(37, 43, 'DS-9632NI-I16', '32-CHANNEL NVR (16HDD UP TO 6TB)', 'DS-9664NI-I16.jpg', '• Third-party network cameras supported\r\n• Up to twelve Megapixels resolution recording\r\n• Support 2-ch HDMI, 2-ch VGA, HMDI1 at up to 4K(3840x2160)\r\n\r\nresolution\r\n• Up to sixty four information processing cameras will be connected with 320M\r\n\r\nincoming information measure\r\n• Up to sixteen SATA interfaces\r\n• Support HDD hot swap with RAID0,1,5,6,10 storage\r\nscheme configurable\r\n•Support varied VCA detection alarm and VCA search\r\n•Support H.265/H.264/MPEG4 video formats                                            \r\n                                        ', '• Third-party network cameras supported • Up to 12 Megapixels resolution recording • Support 2-ch HDMI, 2-ch VGA, HMDI1 at up to 4K(3840x2160)  resolution • Up to 64 IP cameras can be connected with 320M  incoming bandwidth • Up to 16 SATA interfaces'),
(38, 43, 'DS-9664NI-I8', '64-CHANNEL NVR (8HDD UP TO 6TB)', 'DS-9664NI-I161.jpg', '• Third-party network cameras supported\r\n• Up to twelve Megapixels resolution recording\r\n• Support 2-ch HDMI, 2-ch VGA, HMDI1 at up to 4K(3840x2160) resolution\r\n• Up to sixty four science cameras are often connected with 320M\r\n\r\nincoming information measure\r\n• Up to eight SATA interfaces\r\n• Support HDD hot swap with RAID0,1,5,6,10 storage\r\nscheme configurable\r\n•Support varied VCA detection alarm and VCA search\r\n•Support H.265/H.264/MPEG4 video formats                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-9600NI-I8.pdf'),
(39, 43, 'DS-9664NI-I16', '64-CHANNEL NVR (16HDD UP TO 6TB)', 'DS-9664NI-I162.jpg', '• Third-party network cameras supported\r\n• Up to twelve Megapixels resolution recording\r\n• Support 2-ch HDMI, 2-ch VGA, HMDI1 at up to 4K(3840x2160)\r\n\r\nresolution\r\n• Up to sixty four science cameras is connected with 320M\r\nincoming information measure\r\n• Up to sixteen SATA interfaces\r\n• Support HDD hot swap with RAID0,1,5,6,10 storage\r\nscheme configurable\r\n•Support varied VCA detection alarm and VCA search\r\n•Support H.265/H.264/MPEG4 video formats                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/Datasheet_of_DS-9600NI-I16.pdf'),
(40, 45, 'DS-1004KI', 'RS485 KEYBOARD/ PTZCONTROLLER', 'DS-1004KI.jpg', '-Key to change keyboard mode\r\n- Menu operation\r\n- PTZ management\r\n- Setting and job the predetermined, patrol and pattern\r\n- Switch the video wall show and set the video wall layout\r\n- Video switch management for the analog matrix.                                            \r\n                                        ', 'https://www.hikvision.com/UploadFile/image/2013111818161539101.pdf'),
(41, 46, 'DS-1104KI', 'Network Keyboard/ PTZ CONTROLLER', 'DS-1104KI.jpg', 'Audio Input/Output\r\nLine in 1-ch, 3.5 millimeter instrumentation (2.0 Vp-p, 1 k?)\r\nAudio out 1-ch, 3.5 millimeter instrumentation (Linear, 560 ?)\r\nExternal Interface\r\nNetwork interface one RJ45 10M/100M/1000M self-adaptive local area network interface\r\nRS-232 interface one RS-232 interface (for parameters confi guration and maintenance)\r\nRS-485 interface one RS-485 interface\r\nUSB interface one, USB2.0 (for information storage and device upgrade)\r\nGeneral\r\nLCD Resolution: 800 × 480\r\nPower offer twelve VDC\r\nPower consumption ? 15W\r\nWorking temperature -10 °C ~ +55 °C (14 °F ~ 131 °F)\r\nWorking wetness 100% ~ ninetieth\r\nDimensions (W × D × H) one hundred ten × 193 × 435 millimeter                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/20150327105209098.PDF'),
(42, 26, 'DS-2CE16F1T-IT3', '3MP, BULLET IR CAMERA', 'DS-2CE16F1T-IT3.jpg', 'Camera\r\nImage Sensor:	\r\n3MP CMOS Image detector\r\nSignal System:	\r\nPAL/NTSC\r\nEffective Pixels:	\r\n2052(H)*1536(V)\r\nMin. Illumination:	\r\n0.01 lx @ (F1.2,AGC ON), zero lx with IR\r\nShutter Time:	\r\n1/25(1/30) s to 1/50,000 s\r\nLens:	\r\n3.6mm, 6mm, 8mm, 12mm, 16mm nonobligatory \r\nAngle of View: sixty seven.8°(3.6mm), 44.6°(6mm), 31.6°(8mm), 20.2°(12mm), 15.8°(16mm)\r\nLens Mount:	\r\nM12\r\nAdjustment Range:	\r\nPan: 0° - 360°; Tilt:0° - 90°; Rotate: 0° - 360°\r\nDay& Night:	\r\nIR cut filter with motorcar switch\r\nVideo Frame Rate:	\r\n1920 ×1536@18fps\r\nHD Video Output:	\r\n1 Analog HD output\r\nSynchronization:	\r\nInternal Synchronization\r\nS/N Ratio:	\r\nMore than sixty two dB\r\nMenu\r\nD/N Mode:	\r\nColor/BW/SMART\r\nAuto White Balance:	\r\nAuto/MWB\r\nBLC:	\r\nSupport\r\nAGC:	\r\nSupport\r\nLanguage:	\r\nEnglish/Chinese\r\nFunction:	\r\nDigital noise reduction, Mirror, SMART IR\r\nGeneral\r\nOperating Conditions:	\r\n-40 °C - sixty °C (-40 °F - a hundred and forty °F)\r\nHumidity ninetieth or less (non-condensing)\r\nPower Supply:	\r\n12 VDC±15%\r\nPower Consumption:	\r\nMax. 5W\r\nWeather Proof:	\r\nIP66\r\nIR Range:	\r\nUp to 80m\r\nCommunication :	\r\nUp the coax\r\nProtocol: HIKVISION-C(Coaxitron)\r\nDimension:	\r\n86.7mm×81.6mm×226mm (3.41?×3.23?×8.67?)\r\nWeight:	\r\nApprox. 680g (1.5lb)                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10475_E%E8%B5%84%E6%96%99%E6%A8%A1%E6%8B%9F%E7%9B%B8%E6%9C%BANewtemplateDatasheetF1TADS2CE16F1TIT3.pdf'),
(43, 47, 'DS-7104HGHI-F1', '4-CH HDTVI DVR (1HDD UP TO 6TB)', 'DS-7104HGHI-F1.jpg', 'Supports 1080p nonfat  of all channels and once enabled, the image impact is analogous with 1080p\r\nVQD (Video Quality Diagnostics)\r\nUnlock pattern for device login for the admin and clear-text positive identification out there\r\nGUID file will be exported for positive identification resetting and foreign for locating the forgotten positive identification\r\nSupports PTZ management via Omnicast VMS of to protocol\r\nHik-Connect & DDNS (Dynamic name System) for simple network management\r\nOne self-adaptive 10/100 Mbps network interface\r\nOutput information measure limit configurable                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/UD04217B_Datasheet_of_DS-7100HGHI-F1_N_V3.4.81_20170124.pdf'),
(44, 47, 'DS-7104HQHI-F1', '4-CH HDTVI DVR (1HDD UP TO 6TB)', 'DS-7104HQHI-F1.jpg', '  • H.264 ,H.264+&amp; Dual-stream video compression\r\n• Support  HD-TVI, AHD and analog cameras with\r\nadaptive access\r\n\r\n• Up to three MP resolution for recording of the primary channel of DS-7104HQHI-F1/N, the primary a pair of channels of DS-7108HQHI-F1/N, and therefore the 1st four channels of DS-7116HQHI-F1/N\r\n•Support 1080P light mode enabled to comprehend the period\r\n\r\n1080P light and 720P light resolution\r\n• concurrent HDMI/VGA output at up to 1920 × 1080 resolution for DS-7104/7108HQHI-F1/N and 4K (3840 × 2160) resolution for HDMI output of DS-7116HQHI-F1/N\r\n\r\n• Long transmission distance over coax\r\n• Up  to 4/8-ch synchronous playback at 1080p resolution\r\n\r\n• Playback at up to 256X speed.                                          \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10407_DDVRspecTurboHDDVREFFNSeriesAUD03165BDatasheetofDS7100HQHIF1NV3.4.8020161024.pdf'),
(45, 47, 'DS-7108HGHI-F1', '8-CH HDTVI DVR(1HDD UP TO 6TB)', 'DS-7108HGHI-F1.jpg', 'HIKVISION 8-CH Turbo HD 720P DVR\r\nConnectable to HD-TVI & analog cameras\r\nHDMI & VGA outputs at\r\nUp to the 1920×1080P resolution\r\n1 SATA interface \r\nHDD with up to 6TB capability                                            \r\n                                        ', 'http://hikvision.com.bd/hikvision-products'),
(46, 48, 'DS-7108HQHI-F1', '8-CH HD TVI DVR (1HDD UP TO 6TB)', 'DS-7108HQHI-F1.jpg', '• H.264 ,H.264+&amp; Dual-stream video compression\r\n• Support  HD-TVI, AHD and analog cameras with\r\nadaptive access\r\n\r\n• Up to three MP resolution for the recording of the primary channel of DS-7104HQHI-F1/N, the primary two channels of DS-7108HQHI-F1/N, and therefore the 1st four channels of DS-7116HQHI-F1/N\r\n•Support 1080P light mode enabled to comprehend the period of time\r\n1080P light and 720P light resolution\r\n• synchronal HDMI/VGA output at up to 1920 × 1080 resolution for DS-7104/7108HQHI-F1/N and 4K (3840 × 2160) resolution for HDMI output of DS-7116HQHI-F1/N\r\n\r\n• Long transmission distance over coax\r\n• Up  to 4/8-ch synchronous playback at 1080p resolution\r\n\r\n• Playback at up to 256X speed.                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10407_DDVRspecTurboHDDVREFFNSeriesAUD03165BDatasheetofDS7100HQHIF1NV3.4.8020161024.pdf'),
(47, 49, 'DS-7116HWI-SH', '16-CH H264 DVR(1HDD UP TO 4TB)', 'DS-7116HWI-SH.jpg', '  Key options\r\n• H.264 & dual-stream video compression\r\n• Up to WD1(PAL:960×576, NTSC:960×480) resolution\r\nreal-time recording\r\n• synchronous  VGA and CVBS outputs\r\n• Alarm for video loss, motion detection, change of state and\r\nabnormal signal\r\n• Embedded internet server for remote access\r\n• Mobile read on 3G/Wifi enabled device (iPhone,\r\nAndroid)                                          \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/20141203030529984.PDF'),
(48, 47, 'DS-7204HGHI-F1', '4-CH HDTVIDVR (1HDD UP TO 6TB)', 'DS-7204HGHI-F1.jpg', 'Video/Audio Input\r\nAudio Input:	\r\n1-ch\r\nVideo Compression:	\r\nH.264,H.264+\r\nAnalog Video Input:	\r\n16-ch\r\nAnalog and HD-TVI video input:	\r\n1080p25, 1080p30, 720p25, 720p30\r\nIP Video Input:	\r\n2-ch\r\nIP Video Input Resolution:	\r\nUp to a pair of MP resolution\r\nAudio Compression:	\r\nG.711u\r\nTwo-way Audio:	\r\n1-ch RCA(2.0Vp-p, 1k?)\r\nVideo/Audio Output\r\nHDMI/VGA Output:	\r\n1920 × 1080 / sixty rate,1280 × 1024 / sixty rate, 1280 × 720 / sixty rate, 1024 × 768 / sixty rate\r\nEncoding resolution:	\r\nWhen 1080p fat-free mode not enabled: 720p/WD1/4CIF/VGA/CIF\r\nWhen 1080p fat-free mode enabled: 1080p lite/720p/WD1/4CIF/VGA/CIF\r\nFrame Rate:	\r\nMain stream: \r\nWhen 1080p fat-free mode not enabled:\r\nFor 720p stream access: 720p/WD1/4CIF/VGA/CIF@25fps (P)/30fps (N)\r\nWhen 1080p fat-free mode enabled:\r\n1080p lite/720p/WD1/4CIF/VGA/CIF@25fps (P)/30fps (N)\r\nSub-stream:\r\n4CIF/2CIF@6fps; \r\nCIF/QVGA/QCIF@25fps (P)/30fps (N)\r\nVideo Bit Rate:	\r\n32 Kbps ~ four Mbps\r\nStream Type:	\r\nVideo/Video&Audio\r\nAudio Output:	\r\n1-ch RCA(Linear, 1k?)\r\nAudio Bit Rate:	\r\n64kbps\r\nDual Stream:	\r\nSupport\r\nSynchronous Playback:	\r\n16-ch\r\nNetwork management\r\nRemote connections:	\r\n128\r\nNetwork protocols:	\r\nTCP/IP, PPPoE, DHCP, Hik-Connect, DNS, DDNS, NTP, SADP, SMTP, NFS, iSCSI, UPnP™, HTTPS\r\nHard Disk Driver\r\nInterface Type:	\r\n1 SATA Interface\r\nCapacity:	\r\nUp to six TB capability for every disk\r\nExternal Interface\r\nNetwork Interface:	\r\n1; 10M / 100M self-adaptive local area network interface\r\nUSB Interface:	\r\n2 USB 2.0 Interfaces                                            \r\n                                        ', 'https://www.hikvision.com/mtsc/uploads/product/accessory/DS-7200HGHI-F1_V3.4.81_20180818.pdf'),
(49, 47, 'DS-7204HUHI-F2', '4-CH TURBO HD DVR(2HDD UP TO 6TB)', 'DS-7204HUHI-F2.jpg', '• H.264 ,H.264+&amp; Dual-stream video compression\r\n• Support  HD-TVI, IPC,AHD and analog cameras with\r\nadaptive access\r\n• Support Cloud storage(One Drive, Google Drive or Drop Box)\r\n• coincidental HDMI/VGA output at up to 1920 × 1080 resolution for DS-7204HUHI-F2/N and 4K (3840 × 2160) resolution for HDMI output of DS-7208/7216HUHI-F2/N\r\n\r\n• Long transmission distance over coax\r\n• Up  to 4/8-ch synchronous playback at 1080p resolution\r\n\r\n• playback at up to 256X speed.                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10426_DDVRspecTurboHDDVREFFNSeriesAUD03169BDatasheetofDS7200HUHIF2NV3.4.8020161014.pdf'),
(50, 48, 'DS-7208HGHI-F2', '?8-CH HD TVI DVR (1HDD UP TO 6TB)', 'DS-7208HGHI-F2.jpg', '• H.264 /H.264+&amp; Dual-stream video compression\r\n\r\n• Support each HD-TVI /analog and AHD cameras with\r\nadaptive access\r\n• Full channel recording at up to 1080P light resolution\r\n\r\n• HDMI and VGA output at up to 1920×1080P resolution\r\n• Long transmission distance over cable\r\n• Support  4/8/16-ch synchronous playback at 720P\r\nresolution                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10357_DDVRspecTurboHDDVREFFNSeriesAUD03181BDatasheetofDS7200HGHIF2V3.4.8020161024.pdf'),
(51, 48, 'DS-7208HWI-E2', '4-CH H264 DVR(2HDD UP TO 4TB)', 'DS-7208HWI-E2.jpg', 'DS-7208HWI-E2 DVR\r\nKey options\r\n• H.264 & Dual-stream video compression\r\n• Full channel@WD1(PAL:960×576,NTSC:960×480)\r\nresolution period of time recording\r\n• Support VCA detection alarm (line crossing detection and\r\nintrusion detection)\r\n• HDMI and VGA output at up to 1920×1080P resolution\r\n• Support alarm push notification on mobile devices once\r\nalarm event happens.\r\n• Up to 16-ch synchronous playback                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/20141202122344359.PDF'),
(52, 49, 'DS-7216HGHI-F2', '16-CH HD TVI DVR (1HDD UP TO 6TB)', 'DS-7216HGHI-F2.jpg', 'DS-7216HGHI-F2\r\nTurbo HD DVR\r\n• H.264 /H.264+& Dual-stream video compression\r\n• Support each HD-TVI /analog and AHD cameras with\r\nadaptive access\r\n• Full channel recording at up to 1080P light resolution\r\n\r\n• HDMI and VGA output at up to 1920×1080P resolution\r\n• Long transmission distance over cable\r\n• Support  4/8/16-ch synchronous playback at 720P\r\nresolution                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10357_DDVRspecTurboHDDVREFFNSeriesAUD03181BDatasheetofDS7200HGHIF2V3.4.8020161024.pdf'),
(53, 49, 'DS-7216HQHI-F2', '16-CH HD TVI DVR(2HDD UP TO 6TB)', 'DS-7216HQHI-F2.jpg', 'DS-7216HQHI-F2\r\nTurbo HD DVR\r\n• H.264 ,H.264+& Dual-stream video compression\r\n• Support  HD-TVI, IPC,AHD and analog cameras with\r\nadaptive access\r\n\r\n• Up to three MP resolution for recording of the primary a pair of channels of DS-7208HQHI-F2/N, and also the initial four channels of DS-7216HQHI-F2/N\r\n• Support 1080P fat-free mode enabled to appreciate the period\r\n\r\n1080P fat-free and 720P fat-free resolution\r\n• concurrent HDMI/VGA output at up to 1920 × 1080 resolution for DS-7208HQHI-F2/N and 4K (3840 × 2160) resolution for HDMI output of DS-7216HQHI-F2/N\r\n\r\n• Long transmission distance over line\r\n• Up  to 4/8-ch synchronous playback at 1080p resolution\r\n\r\n• Playback at up to 256X speed.                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/10410_DDVRspecTurboHDDVREFFNSeriesAUD03167BDatasheetofDS7200HQHIF2NV3.4.8020161024.pdf'),
(54, 49, 'DS-7216HWI-E1', '16-CH H264 DVR(1HDD UP TO 6TB)', 'DS-7216HWI-E1.jpg', 'DS-7204/7208/7216HWI-E1/E2VCA DVR\r\nKey options\r\n• H.264 & Dual-stream video compression\r\n• Full channel@WD1(PAL:960×576,NTSC:960×480)\r\nresolution time period recording\r\n• Support VCA detection alarm (line crossing detection and\r\nintrusion detection)\r\n• HDMI and VGA output at up to 1920×1080P resolution\r\n• Support alarm push notification on mobile devices once\r\nalarm event happens.\r\n• Up to 16-ch synchronous playback                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/20141202122344359.PDF'),
(55, 49, 'DS-7216HWI-E2', '16-CH H264 DVR(2HDD UP TO 6TB)', 'DS-7216HWI-E2.jpg', 'DS-7216HWI-E2\r\nVCA DVR\r\nKey options\r\n• H.264 & Dual-stream video compression\r\n• Full channel@WD1(PAL:960×576,NTSC:960×480)\r\nresolution period recording\r\n• Support VCA detection alarm (line crossing detection and\r\nintrusion detection)\r\n• HDMI and VGA output at up to 1920×1080P resolution\r\n• Support alarm push notification on mobile devices once\r\nalarm event happens.\r\n• Up to 16-ch synchronous playback                                            \r\n                                        ', 'https://www.hikvision.com/uploadfile/image/20141202122344359.PDF'),
(56, 48, 'DS-7308HFI-SH', '?8-CH H264 DVR(4HDD UP TO 4TB)', 'DS-7308HFI-SH.jpg', '  DS-7308HFI-SH\r\n?8-CH H264 DVR(4HDD UP TO 4TB)\r\nKey options\r\nwww.hikvision.com\r\nDS-7304/7308/7316HFI-SH\r\nStandalone DVR\r\n• H.264 video compression\r\n• 4CIF resolution time period recording\r\n• HDMI and VGA output at up to 1920×1080P resolution\r\n• Dual-stream\r\n• Gigabit network interfaces\r\n• 4/8/16-ch synchronous playback\r\n• HDD quota and cluster management                                          \r\n                                        ', 'https://www.hikvision.com/UploadFile/image/2013032915035162442.pdf'),
(57, 49, 'DS-7316HGHI-SH', '16-CH HD TVI DVR(4HDD UP TO 6TB)', 'DS-7316HGHI-SH.jpg', '• H.264 &amp; Dual-stream video compression\r\n• Support HD-TVI/analog/IP camera triple hybrid\r\n• Support each HD-TVI and analog cameras with\r\nadaptive access\r\n• Full channel@720P resolution time period recording\r\n• HDMI and VGA output at up to 1920×1080P\r\nresolution\r\n• Long transmission distance over coax\r\n• Support up to 16-ch synchronous playback                                            \r\n                                        ', 'http://oversea-download.hikvision.com//UploadFile/doc/manual/UD.6L0202D1962A01_Baseline_User%20Manual%20of%20TVI%20DVR_V3.1.6_20150427.pdf'),
(58, 49, 'DS-8116HFI-ST', '?16-CH H264 DVR(8HDD UP TO 4TB)', 'DS-8116HFI-ST.jpg', ' • H.264 video compression\r\n• 4CIF resolution real-time recording\r\n• HDMI and VGA output at the 1920×1080P resolution\r\n• twin stream\r\n• 4/8/16-ch Synchronous Playback\r\n• good looking for the motion event once enjoying back\r\n• HDD quota management\r\n• SADP(IP Finder) ,FTP,NTP,DHCP protocols                                           \r\n                                        ', 'http://oversea-download.hikvision.com//UploadFile/doc/manual/UD.6L0202D1567A01_Baseline_User%20Manual%20of%20Embedded%20DVR_V3.1.3_20140727.pdf'),
(59, 18, 'DS-2CD2020F-I', '2 Megapixel CMOS ICR Infrared Network Bullet Camera', 'DS-2CD2020F-.jpg', 'Up to 2 megapixel (1920 × 1080) resolution\r\nStandard video compression with high compression ratio, ROI (region of interest) encoding\r\nProgressive scan CMOS, capture motion video without incised margin\r\nSupport dual stream, and the sub-stream for mobile surveillance\r\nHigh-performance and long service life Infrared LED, Approx. 20 to 30 meters IR range\r\nIR cut filter with auto switch\r\nBuilt-in Micro SD / SDHC / SDXC card slot, up to 128GB\r\nPoE (Power over Ethernet)\r\nIngress Protection level: IP67\r\nElectronic shutter for different surveillance environments\r\nOther functions: alarm, reset button, mirror, etc\r\nSupport intrusion detection and line crossing detection\r\nSupport VCA, which is compatible with NVR for the second time of video searching and analysing                  ', '#'),
(60, 18, 'DS-2CD2022WD-I', '2 Megapixel CMOS ICR Infrared Network Bullet Camera', 'DS-2CD2022WD-I.jpg', ' Up to 2 megapixel high resolution\r\nFull HD1080p video\r\nDual stream\r\n4mm/6mm fixed lens\r\n120dB Wide Dynamic Range\r\n3D Digital Noise Reduction\r\nBacklight Compensation\r\nSupport on-board storage, up to 64GB\r\nDC12V & PoE\r\nSupport H.264+\r\nUp to 30m IR range\r\n3-axis adjustment\r\nIP67 weather-proof protection\r\nMetallic housing & bracket                                           \r\n                                        ', '#'),
(61, 18, 'DS-2CD2023G0-I', '2 MP IR Fixed Bullet Network Camera', 'DS-2CD2023G0-I.jpg', '1/2.8\" Progressive Scan CMOS\r\n1920 × 1080@30fps\r\n2.8/4/6/8 mm fixed lens\r\nColor: 0.01 Lux @ (F1.2, AGC ON),0.028 Lux @ (F2.0, AGC ON), 0 Lux with IR\r\nH.265+, H.265, H.264+, H.264\r\nThree streams\r\n120dB WDR\r\n2 Behavior analyses, and face detection\r\nBLC/3D DNR/ROI\r\nIP67\r\nBuilt-in micro SD/SDHC/SDXC card slot,up to 128 GB\r\n3-Axis adjustment\r\n                                            \r\n                                        ', '#'),
(62, 18, 'DS-2CD2023G0D-IW2', '2 MP Wi-Fi Network Bullet Camera', 'DS-2CD2023G0D-IW2.jpg', '1/2.8\" Progressive Scan CMOS\r\n1920 x 1080 Resolution\r\nWi-Fi Connection\r\nH.265, H.265+\r\nBacklight Compensation\r\n3D Digital Noise Reduction\r\nRegion of Interest\r\nDigital Wide Dynamic Range\r\nIP66                                            \r\n                                        ', '#'),
(63, 18, 'DS-2CD2025FHWD-I', '2 MP Ultra-Low Light Network Bullet Camera', 'DS-2CD2025FHWD-I.jpg', 'Up to 2 megapixel high resolution\r\nMax. 1920 × 1080 @60fps\r\n2.8 mm/4 mm/6 mm/8 mm/12 mm fixed lens, optional\r\nUltra-low light\r\nH.265, H.265+, H.264+, H.264\r\n120dB Wide Dynamic Range\r\n3D Digital Noise Reduction\r\n12 VDC & PoE (802.3af)\r\nIR range: up to 30 m\r\nSupport on-board storage, up to 128 GB\r\nIP67                                            \r\n                                        ', '#'),
(64, 18, 'DS-2CD2025FWD-I', '2 MP Ultra-Low Light Network Bullet Camera', 'DS-2CD2025FWD-I.jpg', 'Up to 2 megapixel high resolution\r\nMax. 1920 × 1080 @30fps\r\n2.8 mm/4 mm/6 mm/8 mm/12 mm fixed lens, optional\r\nUltra-low light\r\nH.265, H.265+, H.264+, H.264\r\n120dB Wide Dynamic Range\r\n3D Digital Noise Reduction\r\n12 VDC & PoE (802.3af)\r\nIR range: up to 30 m\r\nSupport on-board storage, up to 128 GB\r\nIP67                                            \r\n                                        ', '#'),
(65, 18, 'DS-2CD2035FWD-I', '3 MP Ultra-Low Light Network Bullet Camera', 'DS-2CD2035FWD-I.jpg', 'Up to 3 megapixel high resolution\r\nMax. 2048 × 1536 @30fps\r\n2.8 mm/4 mm/6 mm/8 mm/12 mm fixed lens, optional\r\nUltra-low light\r\nH.265, H.265+, H.264+, H.264\r\n120dB Wide Dynamic Range\r\n3D Digital Noise Reduction\r\n12 VDC & PoE (802.3af)\r\nIR range: up to 30 m\r\nSupport on-board storage, up to 128 GB\r\nIP67                                            \r\n                                        ', '#'),
(66, 18, 'DS-2CD2042WD-I', '4MP WDR Mini Bullet Network Camera', 'DS-2CD2042WD-I.jpg', 'Up to 4 megapixel high resolution\r\nDual stream\r\n4mm/6mm fixed lens\r\n120dB Wide Dynamic Range\r\n3D Digital Noise Reduction\r\nBacklight Compensation\r\nDC12V & PoE\r\nSupport H.264+\r\nUp to 30m IR range\r\n3-axis adjustment\r\nIP67 weather-proof protection\r\nMetallic housing & bracket\r\n                                            \r\n                                        ', '#'),
(67, 18, 'DS-2CD2052-I', '5MP CMOS ICR Infrared Network Bullet Camera', 'DS-2CD2052-I.jpg', ' Up to 5 megapixel high resolution\r\nElectronic shutter\r\nDual stream\r\nDigital Wide Dynamic Range\r\n3D Digital Noise Reduction\r\n3-axis adjustment\r\nDC12V & PoE\r\nIR cut filter with auto switch\r\nUp to 30m IR range\r\nIP67 weather-proof protection\r\nMobile Monitoring via Hik-connect\r\n                                          \r\n                                        ', '#'),
(68, 18, 'DS-2CD2121G0-I', '2 MP IR Fixed Dome Network Camera&nbsp;', 'DS-2CD2121G0-I.jpg', '\r\n1/2.8\" Progressive Scan CMOS \r\n1920 × 1080@30fps \r\n2.8/4/6 mm fixed lens \r\nColor: 0.01 Lux @(F1.2, AGC ON), \r\n0.028Lux @(F2.0, AGC ON) \r\nH.265+, H.265, H.264+, H.264 \r\n120 dB WDR \r\n2 Behavior analyses \r\nBLC/3D DNR/ROI \r\nBuilt-in micro SD/micro SDHC/micro SDXC \r\ncard slot, up to 128 GB\r\n                                            \r\n                                        ', '#'),
(69, 19, 'DS-2CD4010F', '1.3MP Smart IP Box Camera', 'DS-2CD4010F.jpg', '1/3” Progressive Scan CMOS\r\n1.3MP real time\r\nUp to 25fps frame rate\r\nSlow shutter\r\nDigital WDR\r\n3D DNR\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V/PoE                                            \r\n                                        ', '#'),
(70, 19, 'DS-2CD4012F-A', '1.3 Megapixel CMOS ICR Network Box Camera', 'DS-2CD4012F-A.jpg', 'Up to 1280 x 1024 high resolution\r\nHD 720p video (up to 60fps)\r\nSmart Codec\r\nDWDR, 3D DNR\r\nTriple streams\r\nOn-board storage, up to 64GB\r\nSmart Focus: ABF (-A)\r\nSmart Facial Detection\r\nSmart Audio Detection\r\nIntrusion Detection\r\nTwo way audio, built-in Mic\r\nDefog\r\nP-Iris optional (-P)\r\nPeople Counting                                            \r\n                                        ', '#'),
(71, 18, 'DS-2CD4012FWD-A', '1.3 Megapixel CMOS WDR ICR Network Box Camera', 'DS-2CD4012FWD-A.jpg', '1/3’’ progressive scan CMOS\r\nUp to 1280 × 960 resolution\r\n120dB WDR, 3D DNR\r\nSmart Codec\r\nSmart Focus: ABF(-A)\r\nSmart VQD\r\nSmart Face Detection\r\nSmart Audio Detection\r\nIntrusion Detection\r\nTwo-way audio, built-in Mic\r\nDefog, EIS, BLC\r\nWi-Fi optional(-W)\r\nP-iris optional(-P)                                                                              ', '#'),
(72, 18, 'DS-2CD4020F', '2MP Smart IP Box Camera', 'DS-2CD4020F.jpg', '1/2.8” Progressive Scan CMOS\r\n2MP real time\r\nUp to 25fps frame rate\r\nSlow shutter\r\nDigital WDR\r\n3D DNR\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V/PoE                                            \r\n                                        ', '#'),
(73, 19, 'DS-2CD4024F-A', '2 Megapixel CMOS ICR Network Box Camera', 'DS-2CD4024F-A.jpg', '1/2.8’’ progressive scan CMOS\r\nUp to 1920 × 1080 resolution\r\nSmart Codec\r\nSmart Focus: ABF(-A)\r\nSmart VQD\r\nSmart Face Detection\r\nSmart Audio Detection\r\nIntrusion Detection\r\nTwo-way audio, built-in Mic\r\n3D DNR, DWDR\r\nDefog, EIS, BLC, HLC\r\nWi-Fi optional(-W)\r\nP-iris optional(-P)                                            \r\n                                        ', '#'),
(74, 19, 'DS-2CD4025FWD-AP', '2MP Smart IP Box Camera', 'DS-2CD4025FWD-AP.jpg', ' /2.8” Progressive Scan CMOS\r\n1080p @ 60fps frame rate\r\nHigh light environment\r\nSlow shutter\r\n140dB WDR\r\n3D DNR\r\n-A: Auto Back Focus\r\n-P: P-Iris\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V/PoE(802.3af)                                           \r\n                                        ', '#'),
(75, 19, 'DS-2CD4026EFWD', '2MP Low Light Smart Camera', 'DS-2CD4026EFWD.jpg', '1/1.8” Progressive Scan CMOS\r\nFull HD1080p video\r\nUp to 30fps frame rate\r\nUltra-low light\r\nSlow shutter\r\n120dB WDR\r\n3D DNR\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V                                            \r\n                                        ', '#'),
(76, 19, 'DS-2CD4026FWD-AP', '2 MP ANPR Low Light Box Camera', 'DS-2CD4026FWD-AP.jpg', '1/1.8? Progressive Scan CMOS\r\n1920 × 1080 @ 60fps\r\nUltra-low light\r\nAuto-iris\r\nAuto Back Focus (ABF)\r\n120dB WDR                                            \r\n                                        ', '#'),
(77, 19, 'DS-2CD4026FWD-P-IR5', '2 MP ANPR Low Light Box Camera With Housing', 'DS-2CD4026FWD-P-IR5.jpg', '1/1.8? Progressive Scan CMOS\r\n1920 × 1080 @ 60fps\r\nUltra-low light\r\nAuto-iris\r\nAuto Back Focus (ABF)\r\n120dB WDR\r\nIR control by photo resistor, and IR remote control by RS-485\r\nIP66                                            \r\n                                        ', '#'),
(78, 19, 'DS-2CD4026FWD-P-L', '2 MP ANPR Low Light Box Camera With Housing', '2-MP-ANPR-Low-Light-Box-Camera-With-Housing.jpg', '1/1.8? Progressive Scan CMOS\r\n1920 × 1080 @ 60fps\r\nUltra-low light\r\nAuto-iris\r\nAuto Back Focus (ABF)\r\n120dB WDR\r\nWhite light control by photo resistor, and white light remote control by RS-485\r\nIP66                                            \r\n                                        ', '#'),
(79, 19, 'DS-2CD4032FWD', '3 Megapixel CMOS WDR ICR Network Box Camera', 'DS-2CD4032FWD.jpg', 'Up to 3 megapixel (2048 x 1536) @ 20 fps resolution\r\nSupport H.264+\r\nBuilt-in Micro SD / SDHC / SDXC card slot, up to 128GB\r\nSupport 3D DNR\r\nSupport WDR, up to 120dB\r\nSupport Defocus Detection and alarm linkage\r\nSupport smart face detection. People face can be detected and image encoding on face area can be automatically enhanced.\r\nSupport up to 20 channels live view at the same time                                            \r\n                                        ', '#'),
(80, 19, 'DS-2CD4035F-A-P', '3MP Smart IP Box Camera', 'DS-2CD4035F-(A)(P).jpg', '1/2.8” Progressive Scan CMOS\r\n3MP @45fps frame rate\r\nSlow shutter\r\nDigital WDR\r\n3D DNR\r\n-A: Auto Back Focus\r\n-P: P-Iris\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V/PoE                                            \r\n                                        ', '#'),
(81, 20, 'DS-2CD5026G0-AP', '2 MP Smart Network Box Camera', '2-MP-Smart-Network-Box-Camera.png', '1/1.8” Progressive Scan CMOS\r\n1920 × 1080 @ 60 fps\r\nColor: 0.002 Lux @ (F1.2, AGC ON)\r\nH.265, H.265+, H.264+, H.264\r\n140dB WDR\r\nAuto iris, P-iris optional\r\nAuto back focus optional                                            \r\n                                        ', '#'),
(82, 20, 'DS-2CD5028G0-E-HI', 'DarkfighterX 2 MP Outdoor Smart Camera', 'DarkfighterX-2-MP-Outdoor-Smart-Camera.png', 'Dual-sensor, 1/2.8\" Progressive Scan CMOS\r\n1920 × 1080 @ 30fps\r\nFull-Color Image Output\r\n1 RS485, 2 Alarm Inputs/Outputs, 1 Audio Input/Output\r\nOperating Condition: -40 °C to +60 °C (-40 °F to +140 °F)\r\nH.265, H.264\r\nUp to 100 m IR range                                            \r\n                                        ', '#');
INSERT INTO `products` (`Product_Id`, `Product_Category`, `Model`, `Name`, `Image`, `Sort_Description`, `Pdf_Link`) VALUES
(83, 20, 'DS-2CD5046G0-AP', '4 MP Smart Network Box Camera', '4-MP-Smart-Network-Box-Camera.png', '1/1.8” Progressive Scan CMOS\r\n2560 × 1440 @ 30 fps, MJPEG up to 1920 × 1080 @ 30 fps\r\nColor: 0.002 Lux @ (F1.2, AGC ON)\r\nH.265, H.265+, H.264+, H.264\r\n140dB WDR\r\nAuto iris, P-iris optional\r\nAuto back focus optional                                            \r\n                                        ', '#'),
(84, 20, 'DS-2CD5085G0-AP', '8 MP Smart Network Box Camera', '8-MP-Smart-Network-Box-Camera.jpg', '1/1.8” Progressive Scan CMOS\r\n3840 × 2160 @ 30fps\r\nColor: 0.009 Lux @ (F1.2, AGC ON)\r\nH.265, H.265+, H.264+, H.264\r\n120dB WDR\r\nAuto iris, P-iris optional\r\nAuto back focus optional                                            \r\n                                        ', '#'),
(85, 20, 'DS-2CD5126G0-IZS', '2 MP VF Dome Network Camera', '2-MP-VF-Dome-Network-Camera.png', '1/1.8” Progressive Scan CMOS\r\n1920 × 1080 @ 60fps\r\n2.8 to 12 mm motor-driven lens\r\nColor: 0.002 Lux @ (F1.2, AGC ON)\r\nH.265, H.265+, H.264, H.264+\r\n140 dB WDR\r\n3D DNR\r\nIR range up to 30 m                                            \r\n                                        ', '#'),
(86, 20, 'DS-2CD5146G0-IZS', '4 MP VF Dome Network Camera', '4-MP-VF-Dome-Network-Camera.png', '1/1.8” Progressive Scan CMOS\r\n2560 × 1440 @ 30fps, MJPEG up to 1920 × 1080 @ 30fps\r\n2.8 to 12 mm motor-driven lens\r\nColor: 0.002 Lux @ (F1.2, AGC ON)\r\nH.265, H.265+, H.264, H.264+\r\n140 dB WDR\r\n3D DNR\r\nIR range up to 30 m                                            \r\n                                        ', '#'),
(87, 20, 'DS-2CD5526G0-IZS', '2 MP VF Dome Network Camera', '2-MP-VF-Dome-Network-Camera1.png', '1/1.8” Progressive Scan CMOS\r\n1920 × 1080 @ 60fps\r\n2.8 to 12 mm motor-driven lens\r\nColor: 0.002 Lux @ (F1.2, AGC ON)\r\nH.265, H.265+, H.264, H.264+\r\n140dB WDR\r\n3D DNR\r\nIR range up to 30 m                                            \r\n                                        ', '#'),
(88, 21, 'DS-2CD6026FHWD-A', '2MP Low Light Smart Camera', '2MP-Low-Light-Smart-Camera.jpg', '1/1.8” Progressive Scan CMOS\r\nFull HD1080p video\r\nUp to 60fps frame rate\r\nUltra-low light\r\nSlow shutter\r\n120dB WDR\r\n3D DNR\r\n-A: Auto Back Focus\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V/PoE                                            \r\n                                        ', '#'),
(89, 21, 'DS-2CD6126FWD-IZ', '2MP Low Light Smart Camera', '2MP-Low-Light_-Smart-Camera.jpg', '1/1.8” Progressive Scan CMOS\r\nFull HD1080p video\r\nUp to 60fps frame rate\r\nUltra-low light\r\nSlow shutter\r\n120dB WDR\r\n3D DNR\r\nUp to 30m IR range\r\nMotorized lens with Smart Focus\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/PoE                                            \r\n                                        ', '#'),
(90, 21, 'DS-2CD6226FWD-IZ', '2MP Low Light Smart Camera', '2MP-Low-Light-Smart-Camera1.jpg', '1/1.8” Progressive Scan CMOS\r\nFull HD1080p video\r\nUp to 60fps frame rate\r\nUltra-low light\r\nSlow shutter\r\n120dB WDR\r\n3D DNR\r\nUp to 30m IR range\r\nMotorized lens with Smart Focus\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/PoE\r\n”-H” series support smart heater                                            \r\n                                        ', '#'),
(91, 21, 'DS-2CD6332FWD-L', '3.0 MP Network Fisheye Camera', '3_0_MP-Network-Fisheye-Camera.jpg', '1/3” Progressive Scan CMOS\r\nMax. 2048 × 1536 @30fps\r\nUp to 15 live view display modes\r\n120dB WDR\r\nUp to 15m IR range\r\nBuilt-in microphone and speaker\r\n2 behavior analyses, 1 statistic\r\nWith – V model: IK10 for camera housing, IP66                                            \r\n                                        ', '#'),
(92, 21, 'DS-2CD6362F-I', '6 MP Network Fisheye Camera', '3_0_MP-Network-Fisheye-Camera1.jpg', '1/1.8” Progressive Scan CMOS\r\nMax. 3072 × 2048 @25fps\r\nUp to 15 live view display modes\r\nDigital WDR\r\nUp to 15m IR range\r\nBuilt-in microphone and speaker\r\n2 behavior analyses, 1 statistic\r\nWith – V model: IK10 for camera housing, IP66                                            \r\n                                        ', '#'),
(93, 21, 'IDS-2CD6026FWD-A', '2.0 MP Low Light Face Capture Network Camera', 'IDS-2CD6026FWD-A.jpg', 'Face capture\r\n1/1.8” progressive scan CMOS\r\nFull HD1080p video\r\nlow light\r\nICR\r\nAuto electronic shutter, slow shutter\r\n120dB WDR\r\n3D DNR\r\nAuto Back Focus\r\nAudio/Alarm IO\r\nSupport 128G on-board storage\r\nDC12V/AC24V/PoE                                            \r\n                                        ', '#'),
(94, 22, 'DS-2CD6986F-H', 'PanoVu Series Panoramic Dome Camera', 'PanoVu-Series-Panoramic-Dome-Camera.jpg', 'Panoramic camera\r\n1/1.8” Progressive Scan CMOS\r\n4 x 5mm fixed lens\r\n180°Horizontal View :Up to 7.3MP resolution (4096 × 1800)\r\nUltra-low light\r\n3D DNR\r\nSupport 128G on-board storage\r\nDC12V/PoE\r\nAC24V/PoE\r\nAudio/Alarm IO\r\nIP66 outdoor\r\nHeater & fan optional                                            \r\n                                        ', '#'),
(95, 22, 'DS-2DP0818Z-D', 'PanoVu Series 180°Panoramic+PTZ Camera', 'PanoVu-Series-180°Panoramic+PTZ-Camera.jpg', '1/1.9\" Progressive Scan CMOS\r\nUp to 4096 × 1800 @30fps\r\nUltra-low illumination\r\n180° View Angle\r\n36X optical zoom, 16X digital zoom\r\nWDR\r\nMultiple targets tracking\r\n36VDC power supply\r\nIP66                                            \r\n                                        ', '#'),
(96, 22, 'DS-2DP1636-D', 'PanoVu Series 360°Panoramic Camera', 'PanoVu-Series_360°Panoramic-Camera.jpg', '1/1.9\" Progressive Scan CMOS\r\n360° view angle\r\nUp to 2 × 2400 × 3840@25fps\r\nUltra-low illumination\r\n3D Operation\r\n36VDC power supply\r\nIP66                                            \r\n                                        ', '#'),
(97, 22, 'DS-2DP1636Z-D', 'PanoVu Series 360°Panoramic+PTZ Camera', 'PanoVu-Series_360°Panoramic+PTZ-Camera.jpg', '1/1.9\" Progressive Scan CMOS\r\n360° view angle\r\nUp to 2 × 4096 × 1800@30fps\r\nSupport\r\n36X optical zoom, 16X digital zoom\r\nWDR\r\n3D intelligent positioning function\r\n36VDC power supply\r\nIP66                                            \r\n                                        ', '#'),
(98, 23, 'DS-2CV2U21FD-IW', '2.0 MP Network Cube Camera', '2_0-MP-Network-Cube-Camera.jpg', 'Up to 2.0 megapixel high resolution\r\nTwo video streams\r\n2.8mm fixed lens\r\nDigital Wide Dynamic Range\r\n3D Digital Noise Reduction\r\nBuild-in microphone and speaker, support two-way audio\r\nSupport on-board storage, up to 128GB\r\nUp to 10 m IR range\r\nBuilt-in Wi-Fi\r\nDC 5V ± 15 %, micro USB interface\r\nMobile Monitoring via Hik-Connect or IVMS-4500                                            \r\n                                        ', '#'),
(99, 23, 'DS-2CV2Q21FD-IW', '2.0 MP Network PT Camera', '2_0-MP-Network-PT-Camera.jpg', 'Up to 2.0 megapixel high resolution\r\nTwo video streams\r\n2.8mm fixed lens\r\nDigital Wide Dynamic Range\r\n3D Digital Noise Reduction\r\nBuild-in microphone and speaker, support two-way audio\r\nSupport on-board storage, up to 128GB\r\nUp to 5 m IR range\r\nBuilt-in Wi-Fi\r\nDC 5V ± 10 %, micro USB interface\r\nMobile Monitoring via Hik-Connect or iVMS-4500                                            \r\n                                        ', '#'),
(100, 23, 'DS-2CV2U01FD-IW', '1.0 MP Network Cube Camera', '1_0_MP-Network-Cube-Camera.jpg', 'Up to 1.0 megapixel high resolution\r\nTwo video streams\r\n2.8mm fixed lens\r\nDigital Wide Dynamic Range\r\n3D Digital Noise Reduction\r\nBuild-in microphone and speaker, support two-way audio\r\nSupport on-board storage, up to 128GB\r\nUp to 10 m IR range\r\nBuilt-in Wi-Fi\r\nDC 5V ± 15 %, micro USB interface\r\nMobile Monitoring via Hik-Connect or IVMS-4500                                            \r\n                                        ', '#'),
(101, 24, 'DS-2DF6223-CX', '2MP Explosion-Proof Network Speed Dome', '2MP-Explosion-Proof-Network-Speed-Dome.jpg', '1/1.9’’ progressive scan CMOS\r\nUp to 1920 × 1080 resolution,23X Optical zoom\r\n120dB WDR, 3D DNR\r\nIP68\r\n304L stainless steel anti-corrosion materials design\r\nExplosion-Proof Certificate No.:TÜ V 16 ATEX 7950X, IECEx TUR 16.0050X                                            \r\n                                        ', '#'),
(102, 24, 'DS-2XE6222F-IS', '2 MP Explosion-Proof Network Bullet Camera', '2-MP-Explosion-Proof-Network-Bullet-Camera.jpg', '1/2.7” Progressive Scan CMOS\r\n1920 × 1080 @25fps frame rate\r\nHousing material: Stainless steel 304 and 316L optional\r\n120dB WDR\r\n3D DNR\r\nUp to 30m IR range\r\nSupport H.265+/H.265/H.264+/H.264\r\nSupport 128G on-board storage\r\nAC100V to 240V/PoE                                            \r\n                                        ', '#'),
(103, 24, 'DS-2XE6262F-IS', '2 MP 23× Explosion-Proof IR Zoom Bullet Camera', 'DS-2XE6262F-IS.png', '1/1.8\" progressive scan CMOS \r\nUp to 1920 × 1080 resolution \r\nMin. illumination:Color: 0.002 Lux @(F1.5, AGC ON) B/W: 0.0002 Lux @(F1.5, AGC ON) 0 Lux with IR \r\n23× optical zoom, 12× digital zoom \r\nDigital WDR, 3D DNR, HLC, BLC \r\n100 VAC to 240 VAC & PoE+ (IEEE802.3at class4) \r\nUp to 200 m IR distance \r\nSupport H.265+/H.265 video compression \r\nExplosion-proof                                            \r\n                                        ', '#'),
(104, 25, 'DS-2XC6142FWD-IS', '4 MP Anti-Corrosion Network Dome Camera', '4-MP-Anti-Corrosion-Network-Dome-Camera.jpg', 'Up to 4 megapixel high resolution\r\n120dB Wide Dynamic Range\r\nThree video streams\r\nH.265, H.265+, H.264, H.264+\r\n6 behavior analyses, 2 exception detections,1 recognition\r\nSupport on-board storage, up to 128GB\r\nIR range: 10 m\r\nDC 12V/PoE\r\nAnti-Corrosion Standard: WF-2, NEMA 4X,C5-M\r\nIP                                            \r\n                                        ', '#'),
(105, 25, 'DS-2DT6223-AELY', '2 Megapixel Anti-Corrosion Network PTZ Dome Camera', 'DS-2DT6223-AELY.jpg', 'Anti-corrosion stainless steel,effectively avoid acidic and neutral salt fog corrosion\r\n1/1.9” HD CMOS sensor\r\n2MP(1920*1080) Full HD\r\n23X Optical Zoom\r\nUltra-low illumination\r\n120dB True WDR\r\n316L stainless steel\r\nWF2, C5-M, NEMA 4X anti-corrosion standard\r\nIP67 standard\r\nSmart Tracking, Smart Detection, EIS, Defog\r\nHi-PoE / 24VAC power supply                                            \r\n                                        ', '#'),
(106, 25, 'DS-2CD6626DS-IZ', '2 MP Ultra Low-Light Anti-Corrosion Dome Camera', 'DS-2CD6626DS-IZ.jpg', '1/1.8\" progressive scan CMOS\r\nUp to 2.0 megapixel high resolution\r\n120 dB wide dynamic range\r\nOn-board storage, up to 128 GB\r\nIR distance: 10 to 30 m\r\n24 V AC/12V DC /PoE (802.3af)\r\nAnti-Corrosion Standard: WF2, C5-M,NEMA-4XMA 4X\r\nIP67\r\nIR distance: 10 to 30 m\r\n24 V AC/12V DC /PoE (802.3af)\r\nAnti-corrosion standard: WF2, C5-M, NEMA-4XMA 4X\r\nIP 67                                            \r\n                                        ', '#'),
(107, 28, 'DS-2CC1172P-N-IR1T-IR3T-IR5T', '540 TVL CCD IR Weather-Proof Bullet Camera', '540_TVL-CCD-IR_Weather-Proof-Bullet-Camera.jpg', 'Compact design\r\nnew generation CCD with high sensitivity\r\n3D-Digital Noise Reduction (3D-DNR)\r\nSmart IR mode\r\nMin. illumination: 0.001 Lux @ F1.2 (0 Lux with IR)\r\nAuto white balance,auto gain control, electronic shutter control and backlight compensation\r\nInternal Synchronization\r\nAdvanced Engineering Design, High Reliability\r\nIngress protection: IP66                                            \r\n                                        ', '#'),
(108, 28, 'DS-2CC1173P', '540 TVL CCD ICR Vari-Focal Weather-Proof Bullet Camera', '540-TVL-CCD_ICR-Vari-Focal-Weather-Proof-Bullet-Camera.jpg', 'Compact design\r\nSONY Super HAD CCD II\r\nFlickerless mode\r\nSmart IR mode\r\nIR cut filter with auto switch\r\n3D-Digital Noise Reduction (3D-DNR)\r\nExcessive High Light Compensation\r\nOSD menu\r\nAuto white balance,auto gain control, electronic shutter control and backlight compensation\r\nInternal Synchronization                                            \r\n                                        ', '#'),
(109, 29, 'DS-2CC1281P-AVFIR3', '600 TVL Vari-Focal IR Bullet Camera', '600-TVL-Vari-Focal-IR-Bullet-Camera.jpg', '1/3\" SONY CCD\r\nTrue Day/Night(DS-2CC1281P(N)-AFVIR3)\r\n2.8 – 12mm Vari-focal Lens\r\nOSD Menu, DNR, Smart IR, Digital WDR, Eclipse\r\n40m IR Distance\r\nIP66 Weatherproof                                            \r\n                                        ', '#'),
(110, 28, 'DS-2CC12A2P-IT5', '700 TVL Outdoor EXIR Bullet Camera', '700-TVL-Outdoor-EXIR-Bullet-Camera.jpg', '1/3\" CCD\r\n600 TVL Horizontal Resolution\r\nElectronic Day/Night\r\n0.001 lux /F1.2, 0.002 lux /F1.8\r\nSmart IR, high dynamic range\r\nSuperior video image output and ultra low light illumination\r\n80m IR Distance                                            \r\n                                        ', '#'),
(111, 29, 'DS-2CC52C2S-IRM', '1.3 Megapixel CMOS ICR HD-SDI Camera', '1_3-Megapixel-CMOS-ICR-HD-SDI-Camera.jpg', '1.3 Megapixel high-performance CMOS sensor\r\nClear and detailed image of up to 720P resolution\r\nLow illumination: 0.01Lux @ (F1.2,AGC ON), 0 Lux with IR\r\nIR cut filter with auto switch\r\nAdvanced Engineering Design, High Reliability\r\nIngress Protection: IP66\r\nPatent universal adjustable structure provides convenient adjustment and high reliability                                            \r\n                                        ', '#'),
(112, 29, 'DS-2CC52D5S-IT3', '2 Megapixel 1/3\" CMOS ICR HD-SDI Camera', '2-Megapixel_1_3-CMOS-ICR-HD-SDI-Camera.jpg', '2 Megapixel high-performance CMOS sensor\r\nClear and detailed image of up to 1080P resolution\r\nEXIR infrared array technology\r\nLow illumination: 0.01Lux @ (F1.2,AGC ON), 0 Lux with IR\r\nIR cut filter with auto switch\r\nAuto white balance, auto gain control, backlight compensation, and auto electronic shutter control for different surveillance environment\r\nAdvanced Engineering Design, High Reliability\r\nIngress Protection: IP66\r\nPatent universal adjustable structure provides convenient adjustment and high reliability                                            \r\n                                        ', '#'),
(113, 30, 'DS-2DF5286-AEL', '2MP Ultra-Low Temperature Network PTZ Camera', '2MP-Ultra-Low-Temperature-Network-PTZ-Camera.jpg', ' 1/2.8’’ Progressive Scan CMOS, up to 1920x1080\r\nUltra-low temperature with -40?\r\nSmart Tracking, Smart Defog\r\n3D DNR, D WDR, HLC/BLC\r\n30X Optical Zoom\r\nROI encoding\r\nIP66 rating                                           \r\n                                        ', '#'),
(114, 30, 'DS-2DF8236I5X-AEL', '2MP 36× Network Laser Speed Dome', '2MP-36-Network-Laser-Speed-Dome.jpg', '1/1.9\" progressive scan CMOS\r\nUp to 1920 × 1080 resolution\r\nMin. Illumination: Color: 0.002 Lux @(F1.5, AGC ON) B/W: 0.0002 Lux @(F1.5, AGC ON) 0 Lux with IR\r\n36× optical zoom, 16× digital zoom\r\n120dB WDR, 3D DNR, HLC, Smart IR\r\n24 VAC & Hi-PoE\r\nUp to 500 m laser distance\r\nSupport H.265+/H.265 video compression\r\nSupport rapid focus                                            \r\n                                        ', '#'),
(115, 30, 'DS-2DF8236IX-AEL', '2MP 36× Network IR Speed Dome', '2MP-36-Network-IR-Speed-Dome.jpg', '1/1.8\" progressive scan CMOS\r\nUp to 1920 × 1080 resolution\r\nMin. Illumination:\r\nColor: 0.002 Lux @(F1.5, AGC ON)\r\nB/W: 0.0002 Lux @(F1.5, AGC ON)\r\n0 Lux with IR\r\n36× optical zoom, 16× digital zoom\r\n120dB WDR, 3D DNR, HLC, Smart IR\r\n24 VAC & Hi-PoE\r\nUp to 200 m IR distance\r\nSupport H.265+/H.265 video compression\r\nSupport rapid focus\r\nDeep-learning-based target classificationalgorithm for auto-tracking 2.0 and perimeterprotection\r\nIK10, IP67                                            \r\n                                        ', '#'),
(116, 31, 'DS-2DE2106IW-DE3', '1.3 MP Network IR Mini PTZ Camera', '1_3-MP-Network-IR-Mini-PTZ-Camera.jpg', '1/3\" Progressive Scan CMOS\r\n1280 × 960@30fps Resolution\r\n6x Zoom\r\nDWDR\r\n3D positioning\r\nPoE (802.3af)\r\nHik cloud P2P\r\nUp to 30m IR distance                                            \r\n                                        ', '#'),
(117, 31, 'DS-2DE2204IW-DE3', '2.0 MP Network IR Mini PTZ Camera', '1_3-MP-Network-IR-Mini-PTZ-Camera1.jpg', '1/2.8\" Progressive Scan CMOS\r\n1920 × 1080@30fps Resolution\r\n4x Zoom\r\nDWDR\r\n3D positioning\r\nPoE (802.3af)\r\nHik cloud P2P\r\nUp to 30m IR distance                                            \r\n                                        ', '#'),
(118, 32, 'DS-2AE5123T', 'TurboHD 720P Analog PTZ Dome Camera', 'TurboHD-720P-Analog-PTZ-Dome-Camera.jpg', '1.3MP CMOS Image Sensor\r\nFull HD 720P Video Output\r\n23X optical zoom, 16X digital zoom\r\nSupport up the coax function\r\nPrivacy Masking, 3D DNR, D WDR, EIS\r\n3D intelligent positioning\r\nTrue Day&Night\r\nTurbo HD and CVBS dual output                                            \r\n                                        ', '#'),
(119, 33, 'DS-2DY3220IW-DE-DE4', '2 MP Compact Outdoor Network IR PTZ Camera', '2-MP-Compact-Outdoor-Network-IR-PTZ-Camera.jpg', '1/2.8\" Progressive Scan CMOS\r\nUp to 1920 x 1080 Resolution\r\nH.265 Video Compression\r\n20x Optical Zoom\r\nWDR\r\n3D Intelligent Positioning\r\nUp to 330 ft (100 m) IR Distance\r\nIP66\r\nPOE+ (802.3at), 12 VDC, 19 W                                            \r\n                                        ', '#'),
(120, 38, 'DS-K1T604MF', 'Face Recognition Terminal', 'Face-Recognition-Terminal.png', 'Wall mounting\r\n7-inch LCD touch screen to display operation interface, etc.\r\nScreen ratio: 16:9\r\nScreen resolution: 1280p × 600p\r\n2 MP wide-angle dual-lens\r\nWDR\r\nQR code\r\nFace recognition distance: 0.3 m to 1 m\r\nSuggested person height for recognition: 1.4 m to 1.9 m\r\nHigh performance processor with deep learning algorithm\r\nMax. 10000 face pictures\r\nMultiple authentication modes: authentication by comparing face picture, by swiping card and comparing face picture, by custom mode, etc.\r\nAccurate and fast face recognition function. The face recognition duration is no more than 0.5s per person and the face recognition accuracy rate is more than 99%\r\nApplies face picture data and card data to the device via TCP/IP or uploading them to the device via the USB flash drive\r\nStand-alone operation\r\nTransmits and saves the comparing results and the captured face pictures to the client software or others\r\nDevice management, log search, and parameter settings via the device.\r\nImports the data (face pictures) from the USB flash drive to the device or exports the data (face pictures and events) from the device to the USB flash drive\r\nConnects to one external card reader via RS-485 communication or Wiegand communication\r\nConnects to external access controller via RS-485 communication or Wiegand communication\r\nConnects to secure door control unit to avoid the door opening when the terminal is destroyed\r\nTwo-way audio\r\nVoice prompts\r\nWatchdog design for protecting the device and ensuring device running properly                                            \r\n                                        ', '#'),
(121, 38, 'DS-K1T605EF', 'Face Recognition Terminal', 'Face-Recognition-Terminal1.png', 'Wall mounting and base mounting\r\n5-inch LCD touch screen to display operation interface, etc.\r\n0.3 MP wide-angle lens\r\nFace recognition distance: 0.3m to 1m\r\nLive face detection\r\nHigh performance processor with deep learning algorithm\r\nMax. 2000 face pictures and Max. 5000 fingerprints storage (Only models with F support the fingerprint related functions)\r\nMultiple authentication modes: authentication by comparing face picture, by swiping card and comparing face picture, by custom mode, etc.\r\nAccurate and fast face recognition function. The face recognition duration is no more than 1 s per person and the face recognition accuracy rate is more than 99%\r\nApplies face picture data and card data to the device via TCP/IP or uploading them to the device via the USB flash drive\r\nStand-alone operation\r\nTransmits and saves the comparing results and the captured face pictures to the client software or others\r\nSupports TCP/IP, Wi-Fi , and EHome public network communication\r\nConnects to one external card reader via RS-485 communication and Wiegand communication\r\nConnects to external access controller via Wiegand communication\r\nConnects to secure door control unit to avoid the door opening when the terminal is destroyed\r\nWatchdog design for protecting the device and ensuring device running properly\r\nVoice prompt                                            \r\n                                        ', '#'),
(122, 38, 'DS-K1T605M', 'Face Recognition Terminal', 'Face-Recognition-Terminal2.png', 'Wall mounting and base mounting\r\n5-inch LCD touch screen to display operation interface, etc.\r\n0.3 MP wide-angle lens\r\nFace recognition distance: 0.3m to 1m\r\nLive face detection\r\nHigh performance processor with deep learning algorithm\r\nMax. 2000 face pictures and Max. 5000 fingerprints storage (Only models with F support the fingerprint related functions)\r\nMultiple authentication modes: authentication by comparing face picture, by swiping card and comparing face picture, by custom mode, etc.\r\nAccurate and fast face recognition function. The face recognition duration is no more than 1 s per person and the face recognition accuracy rate is more than 99%\r\nApplies face picture data and card data to the device via TCP/IP or uploading them to the device via the USB flash drive\r\nStand-alone operation\r\nTransmits and saves the comparing results and the captured face pictures to the client software or others\r\nSupports TCP/IP, Wi-Fi , and EHome public network communication\r\nConnects to one external card reader via RS-485 communication and Wiegand communication\r\nConnects to external access controller via Wiegand communication\r\nConnects to secure door control unit to avoid the door opening when the terminal is destroyed\r\nWatchdog design for protecting the device and ensuring device running properly\r\nVoice prompt                                            \r\n                                        ', '#'),
(123, 38, 'DS-K1T105M', 'Standalone Access Control Terminal(Mifare Card)', 'Standalone-Access-Control-Terminal(Mifare-Card).jpg', 'Doorbell ringtone settings function\r\nTouch mode and blue light display technique for keypad\r\nStand-alone settings for the terminal\r\n2.8-inch LCD display screen\r\nTransmission modes of wired network (TCP/TP) and Wi-Fi\r\nFace detection and picture capturing function implemented by built-in camera (2 MP optional, only supports DS-K1T105E/M -C)\r\nSupports multiple door opening modes (card, card + password, exit button, etc.)                                            \r\n                                        ', '#'),
(124, 38, 'DS-K1A801F', 'Fingerprint Time Attendance Terminal', 'Fingerprint-Time-Attendance-Terminal.jpg', '2.8-inch LCD screen to display time, date, week, and attendance information\r\nTransmission mode of wired network and Wi-Fi\r\n1:N mode accurate and fast fingerprint recognition (recognition duration < 1.5s)\r\nSupports Max. 3000 users, Max. 3000 fingerprints, and Max. 10,000 pieces of events records\r\nSupports two ways of attendance authentication mode: authentication by person, authentication by device\r\nSupports the stand-alone operation (supports adding persons, cards, and fingerprints locally)\r\nSupports downloading attendance reports by U-disk\r\nSupports 32 normal shifts, 32 man-hour shifts, and 32 attendance holiday schedules\r\nSupports forming reports automatically\r\nConvenient installation and easy operation                                            \r\n                                        ', '#'),
(125, 51, 'DS-1203ZJ-S', 'Pendent Mounting Bracket Indoor', 'Pendent-Mounting-Bracket-Indoor.jpg', 'Die casting aluminum\r\nUniversal control of angle\r\nMonitoring scene adjustment                                            \r\n                                        ', '#'),
(126, 51, 'DS-1212ZJ', 'Wall Mounting Bracket', 'Wall-Mounting-Bracket.jpg', 'Die casting aluminum with surface spray treatment\r\nDesign with cable entry hole\r\nSponge pat is fixed on the surface of substrate to ensure the stabilization of camera\r\nThe soleplate is rotatable for monitoring scene Adjustment                                            \r\n                                        ', '#'),
(127, 51, 'DS-1212ZJ-S', 'Wall Mounting Bracket', 'Wall-Mounting-Bracket1.jpg', 'Die casting aluminum with surface spray treatment\r\nDesign with cable entry hole\r\nSponge pat is fixed on the surface of substrate to ensure the stabilization of camera\r\nThe soleplate is rotatable for monitoring scene Adjustment                                            \r\n                                        ', '#'),
(128, 51, 'DS-1256ZJ', 'Indoor/Outdoor Wall Mount (With Wire Intake Box)', 'Indoor-Outdoor-Wall-Mount-With-Wire-Intake-Box.jpg', ' Aluminum alloy material with surface spray treatment\r\nBeautiful design with wire outlet hole\r\nBetter weather proof performance with gooseneck design\r\nSpecial bracket for DS-2CC52xxP(N)-VP, DS-2CC51xxP(N)-VP(IR)(H), DS-2CC51xxP(N)-VF and DS-2CD27XX series                                          \r\n                                        ', '#');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `Category_Id` int(4) NOT NULL,
  `Category_Name` varchar(250) NOT NULL,
  `Category_Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`Category_Id`, `Category_Name`, `Category_Image`) VALUES
(1, 'Network Camera', 'network-camera.jpg'),
(2, 'Analog Camera', 'analog-camera.jpg'),
(3, 'PTZ', 'ptz-camera.jpg'),
(5, 'NVR', 'network-video-recorder.jpg'),
(6, 'DVR', 'digital-video-recorder.jpg'),
(7, 'Hybrid Video Recorder', 'hybrid-video-recorder.jpg'),
(8, 'Access Control', 'access-control-hikvision.jpg'),
(9, 'Accessories', 'accessories-hikvision.jpg'),
(10, 'Monitor', 'hikvision-monitor.jpg'),
(11, 'UTP Cable ', 'utp-cable.jpg'),
(12, 'IP CAMERA KEYBOARD', '');

-- --------------------------------------------------------

--
-- Table structure for table `second_solution_description`
--

CREATE TABLE `second_solution_description` (
  `Description_Id` int(4) NOT NULL,
  `Description_Title_Id` int(4) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_solution_description`
--

INSERT INTO `second_solution_description` (`Description_Id`, `Description_Title_Id`, `Description`) VALUES
(1, 2, '• Ensure around-the-clock safety for customers and employees \r\n• Increase transaction safety and customer satisfaction \r\n• Collect reliable footage for post-investigation \r\n• Manage all the branches effectively and easily '),
(6, 5, 'Ensure around-a-clock safety for guests and staff\r\n·Improve vehicle access management and customer experience\r\n·Decrease CCTV intrusiveness\r\n·To have a reliable footage for post-investigation');

-- --------------------------------------------------------

--
-- Table structure for table `second_solution_description_title`
--

CREATE TABLE `second_solution_description_title` (
  `Solution_D2_Id` int(4) NOT NULL,
  `SolutionId` int(4) NOT NULL,
  `SolutionTitle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_solution_description_title`
--

INSERT INTO `second_solution_description_title` (`Solution_D2_Id`, `SolutionId`, `SolutionTitle`) VALUES
(2, 1, 'A SMART SOLUTION FOR BANK SECURITY'),
(5, 5, 'SMART SOLUTION FOR HOTEL SECURITY HIKVISION');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `Software_Id` int(4) NOT NULL,
  `Software_Type_Id` int(4) NOT NULL,
  `Software_Name` varchar(250) NOT NULL,
  `Software_Download_Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`Software_Id`, `Software_Type_Id`, `Software_Name`, `Software_Download_Link`) VALUES
(1, 1, 'VSPlayer V7.4.1', 'https://drive.google.com/drive/folders/1K9A04iCwsDiFLE-DpUURMeH-ZdsLZ8tV?usp=sharing'),
(2, 3, 'Hikvision iVMS-4200 Lite v1.0.0.4 (Windows)', 'https://drive.google.com/open?id=1nVxdmY4dgNqDsjJtHJxQrG-c_Jo_fwso'),
(3, 3, 'Hikvision iVMS-4200 V1.02.05.02 For Mac', 'https://drive.google.com/open?id=1K688YHE5brYah4btvPeJH8m1U9rHT9WK');

-- --------------------------------------------------------

--
-- Table structure for table `sofware_type`
--

CREATE TABLE `sofware_type` (
  `Software_Type_Id` int(4) NOT NULL,
  `Software_Type_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sofware_type`
--

INSERT INTO `sofware_type` (`Software_Type_Id`, `Software_Type_Name`) VALUES
(1, 'Tools'),
(2, 'SDK'),
(3, 'Client Software'),
(4, 'User Menual'),
(5, 'Brochure'),
(6, 'Regional Materials'),
(7, 'Firmware');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `Solution_Id` int(4) NOT NULL,
  `Solution_Name` varchar(250) NOT NULL,
  `Solution_Image` varchar(250) NOT NULL,
  `SortDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`Solution_Id`, `Solution_Name`, `Solution_Image`, `SortDescription`) VALUES
(1, 'Banking And Finance', 'banking-finance-solution- bangladesh.ico', 'Hikvision Digital Surveillance, Access Control by the security of bank'),
(5, 'Hotel', 'hotel_solution_icon_hikvision_com_bd.ico', 'The Hikvision Smart Solution for Hotels is a complete IP surveillance system');

-- --------------------------------------------------------

--
-- Table structure for table `solutionblog`
--

CREATE TABLE `solutionblog` (
  `SolutionBlogId` int(4) NOT NULL,
  `SolutionId` int(4) NOT NULL,
  `SolutionBlogTitle` varchar(250) NOT NULL,
  `BlogPostDescription` text NOT NULL,
  `RecommendProList` varchar(200) NOT NULL,
  `SolutionBlogImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solutionblog`
--

INSERT INTO `solutionblog` (`SolutionBlogId`, `SolutionId`, `SolutionBlogTitle`, `BlogPostDescription`, `RecommendProList`, `SolutionBlogImage`) VALUES
(1, 1, 'BENEFITS & SOLUTIONS\r\n', 'ATM ROOMS and AREAS \r\n• Covert ATM camera + ATM NVR \r\n• Support POS overlay \r\nEntryway \r\n- >Up to 4K goals camera with wide edge focal point \r\nPassage \r\n- >LightFighter Super WDR Camera obviously sees indoor conditions \r\nCOUNTER and TELLER \r\n- >Specialized double focal point teller camera approves aggregate activity records \r\nSECURITY CENTER - Centralized video administration stage - Safe and dependable information repetition - Video-divider appear', '7,1', 'bank-security-system.PNG'),
(4, 1, 'Counter & Teller\r\n', 'Double focal point Teller Camera: \r\nHikvision\'s Monovu teller camera is particularly \r\nintended for applications where top quality and two-sided quit for the day \r\nimaging are expected of people amid monetary exchanges.', '16,10,13', 'banking-security-system hikvision.com.bd .PNG'),
(7, 5, 'TOTAL IP SYSTEM', 'The Hikvision sensible resolution for Hotels may be a \r\ncomplete IP closed-circuit television for building security. the answer provides \r\naround-the-clock protection with industry-leading low-light technology, automated', '4,5', 'hikvision-hotel-security-system.png');

-- --------------------------------------------------------

--
-- Table structure for table `solution_descripition`
--

CREATE TABLE `solution_descripition` (
  `Description_Id` int(4) NOT NULL,
  `SolutionId` int(4) NOT NULL,
  `Description` text NOT NULL,
  `DownloadLink` varchar(250) NOT NULL,
  `YoutubeLink` varchar(250) NOT NULL,
  `BannerImage` varchar(250) NOT NULL,
  `ApplicationImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solution_descripition`
--

INSERT INTO `solution_descripition` (`Description_Id`, `SolutionId`, `Description`, `DownloadLink`, `YoutubeLink`, `BannerImage`, `ApplicationImage`) VALUES
(1, 1, 'Money, finance and security businesses ar at risk of constant threats. Hikvision understands the distinctive desires of those industries and provide reliable solutions that you simply will bank on! Hikvision’s good Banking police work answer boasts powerful, intelligent functionalities. These functionalities ar embedded with advanced technology to assist you integrate your monetary facilities – from branch offices to service centers to treasuries – into a centralized observance answer that\'s simple to implement, manage and integrate. Hikvision helps you conduct effective police work of bank assets, manage the protection of your shoppers and personnel, defend restricted areas, and secure ATM areas with unwavering dependability. And there’s additional – Hikvision police work solutions additionally improve responsibility, potency and client satisfaction for higher business.', 'http://oversea-download.hikvision.com/uploadfile/Leaflet/Brochure/4-Vertical%20Solution%20Brochure/Smart%20Banking%20Solution.pdf', 'https://www.youtube.com/watch?v=XE1TKAzNjyk', 'bank-security-solution-image hikvision.com.bd.jpg', 'bank-security-system  hikvision.com.bd.jpg'),
(4, 5, 'The Hikvision sensible resolution for Hotels could be a complete IP closed-circuit television for hotel security. the answer provides uninterrupted protection with industry-leading low-light technology, machine-driven vehicle access management with Hikvision’s automatic variety plate recognition (ANPR) module, and automatic event alerts with Hikvision’s sensible detection. The sensible resolution includes integrated IP product like IP cameras, NVRs, and video management computer code — serving to to make a reliable, versatile security platform for hotels.', 'https://www.hikvision.com/upload/20171013140129251.pdf', 'https://www.youtube.com/watch?v=nl0i-6LgRec', 'hikvision-hotel-security-system_hikvision_com_bd.jpg', 'hotel-security-system_hikvision_com_bd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_product_category`
--

CREATE TABLE `sub_product_category` (
  `Sub_Category_Id` int(4) NOT NULL,
  `Parent_Category_Id` int(4) NOT NULL,
  `Sub_Category_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_product_category`
--

INSERT INTO `sub_product_category` (`Sub_Category_Id`, `Parent_Category_Id`, `Sub_Category_Name`) VALUES
(18, 1, '2 Line Series'),
(19, 1, '4 Line Series'),
(20, 1, '5 Line Series'),
(21, 1, '6 Line Series'),
(22, 1, 'PanoVu Camera'),
(23, 1, 'Consumer Products'),
(24, 1, 'Anti-Explosion Proof'),
(25, 1, 'Anti-Corrosion'),
(26, 2, 'Turbo HD'),
(27, 2, 'DIS & PICADIS Camera'),
(28, 2, 'CCD Camera'),
(29, 2, 'HD-SDI Camera'),
(30, 3, 'DF Line Network PTZ'),
(31, 3, 'DE Line Network PTZ'),
(32, 3, 'AE Line Turbo HD PTZ'),
(33, 3, 'Positioning System'),
(34, 10, 'LCD Monitor'),
(35, 10, 'LED'),
(36, 11, 'CAT-5'),
(37, 11, 'CAT-6'),
(38, 8, 'Terminal'),
(39, 5, '7600 Series'),
(40, 5, '8600  Series'),
(43, 5, '9600 Series'),
(45, 12, 'RS485 KEYBOARD'),
(46, 12, 'Network Keyboard'),
(47, 6, 'Turbo HD DVR'),
(48, 6, 'Analog DVR'),
(49, 6, 'ATM DVR'),
(51, 9, 'Bracket');

-- --------------------------------------------------------

--
-- Table structure for table `troube_shooting`
--

CREATE TABLE `troube_shooting` (
  `Trouble_Shoot_Id` int(4) NOT NULL,
  `Trouble_Shoot_Name` varchar(250) NOT NULL,
  `Trouble_Shoot_Step` text NOT NULL,
  `Trouble_Shoot_Video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `troube_shooting`
--

INSERT INTO `troube_shooting` (`Trouble_Shoot_Id`, `Trouble_Shoot_Name`, `Trouble_Shoot_Step`, `Trouble_Shoot_Video`) VALUES
(1, 'Password Problem', 'If you have ever locked yourself out of a Hikvision camera or NVR\r\nby forgetting the admin password, and had to beg Hikvision or anyone else\r\nfor an unlock code, you will appreciate this. I present a small\r\ntool that lets you generate your own unlock codes\r\nwhich can be entered\r\ninto SADP to reset the admin password on any of your Hikvision cameras. This tool\r\nis written in HTML/CSS/JavaScript so it runs in any modern web browser and you can view the\r\ncomplete source code\r\neasily.', '<iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/tsWo4wQRFVA\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Backup Data', 'Solved\r\n\r\nI quit the RemoteNetBackup program and began it once more. I got a replacement error \r\nsaying \'Create Storage Error\' that indicated a tangle with the drive on the native laptop wherever\r\ni used to be making an attempt to repeat to. I checked it for any problems or issues with free area - no issues. \r\nThe only issue on the whole drive was Associate in Nursing empty folder referred to as \'RecordFile\'.\r\n\r\nBut that folder gave the impression to be the matter. I deleted it, and restarted the RemoteNetBackup program \r\nagain and that i got no error now. i attempted a Manual Backup once more and worked fine.\r\n\r\nSo the solely reason I will think about why that happened is that I create the backup schedule \r\na few days past. after I did that, I conjointly deleted everything on the laptop drive excluding that \'RecordFile\' folder.\r\nthus presumptively, after you produce a replacement backup schedule from scratch in RemoteNetBackup,\r\nit tries to make a folder referred to as RecordFile itself. and since there already was one,\r\neven supposing it had been empty, it failed?', '<iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/UMc2jlw6zmg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`Customer_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`),
  ADD KEY `Product_Category` (`Product_Category`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `second_solution_description`
--
ALTER TABLE `second_solution_description`
  ADD PRIMARY KEY (`Description_Id`),
  ADD KEY `Description_Title_Id` (`Description_Title_Id`);

--
-- Indexes for table `second_solution_description_title`
--
ALTER TABLE `second_solution_description_title`
  ADD PRIMARY KEY (`Solution_D2_Id`),
  ADD KEY `SolutionId` (`SolutionId`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`Software_Id`),
  ADD KEY `Software_Type_Id` (`Software_Type_Id`);

--
-- Indexes for table `sofware_type`
--
ALTER TABLE `sofware_type`
  ADD PRIMARY KEY (`Software_Type_Id`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`Solution_Id`);

--
-- Indexes for table `solutionblog`
--
ALTER TABLE `solutionblog`
  ADD PRIMARY KEY (`SolutionBlogId`),
  ADD KEY `SolutionId` (`SolutionId`);

--
-- Indexes for table `solution_descripition`
--
ALTER TABLE `solution_descripition`
  ADD PRIMARY KEY (`Description_Id`),
  ADD KEY `SolutionId` (`SolutionId`);

--
-- Indexes for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  ADD PRIMARY KEY (`Sub_Category_Id`),
  ADD KEY `Parent_Category_Id` (`Parent_Category_Id`);

--
-- Indexes for table `troube_shooting`
--
ALTER TABLE `troube_shooting`
  ADD PRIMARY KEY (`Trouble_Shoot_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `Customer_Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `Category_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `second_solution_description`
--
ALTER TABLE `second_solution_description`
  MODIFY `Description_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `second_solution_description_title`
--
ALTER TABLE `second_solution_description_title`
  MODIFY `Solution_D2_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `Software_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sofware_type`
--
ALTER TABLE `sofware_type`
  MODIFY `Software_Type_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `Solution_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `solutionblog`
--
ALTER TABLE `solutionblog`
  MODIFY `SolutionBlogId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `solution_descripition`
--
ALTER TABLE `solution_descripition`
  MODIFY `Description_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  MODIFY `Sub_Category_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `troube_shooting`
--
ALTER TABLE `troube_shooting`
  MODIFY `Trouble_Shoot_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Product_Category`) REFERENCES `sub_product_category` (`Sub_Category_Id`);

--
-- Constraints for table `second_solution_description`
--
ALTER TABLE `second_solution_description`
  ADD CONSTRAINT `second_solution_description_ibfk_1` FOREIGN KEY (`Description_Title_Id`) REFERENCES `second_solution_description_title` (`Solution_D2_Id`);

--
-- Constraints for table `second_solution_description_title`
--
ALTER TABLE `second_solution_description_title`
  ADD CONSTRAINT `second_solution_description_title_ibfk_1` FOREIGN KEY (`SolutionId`) REFERENCES `solution` (`Solution_Id`);

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `software_ibfk_1` FOREIGN KEY (`Software_Type_Id`) REFERENCES `sofware_type` (`Software_Type_Id`);

--
-- Constraints for table `solutionblog`
--
ALTER TABLE `solutionblog`
  ADD CONSTRAINT `solutionblog_ibfk_1` FOREIGN KEY (`SolutionId`) REFERENCES `solution` (`Solution_Id`);

--
-- Constraints for table `solution_descripition`
--
ALTER TABLE `solution_descripition`
  ADD CONSTRAINT `solution_descripition_ibfk_1` FOREIGN KEY (`SolutionId`) REFERENCES `solution` (`Solution_Id`);

--
-- Constraints for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  ADD CONSTRAINT `sub_product_category_ibfk_1` FOREIGN KEY (`Parent_Category_Id`) REFERENCES `product_category` (`Category_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
