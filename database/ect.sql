-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 05:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `land`
--

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(11) NOT NULL,
  `web_name` varchar(50) DEFAULT NULL COMMENT 'navbar',
  `site_name` varchar(50) DEFAULT NULL COMMENT 'footer',
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `link_twiiter` varchar(100) DEFAULT NULL,
  `link_facebook` varchar(100) DEFAULT NULL,
  `link_youtube` varchar(100) DEFAULT NULL,
  `link_line` varchar(100) DEFAULT NULL,
  `embed_map` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `web_name`, `site_name`, `email`, `tel`, `address`, `link_twiiter`, `link_facebook`, `link_youtube`, `link_line`, `embed_map`) VALUES
(1, 'ตรงนี้เปลี่ยนได้', 'ซื้อ-ขาย ที่ดิน ตรงนี้เปลี่ยนได้', 'info@example.com', '+012 345 6789', '123 Street, New York, USA ตรงนี้เปลี่ยนได้', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.youtube.com/', ' https://line.me/ti/p/~xxx', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd');

-- --------------------------------------------------------

--
-- Table structure for table `land`
--

CREATE TABLE `land` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL COMMENT 'น.ส.3/ น.ส.3 ก./ โฉนดที่ดิน',
  `for` varchar(50) DEFAULT NULL COMMENT 'ขาย / เช่า',
  `land` varchar(100) DEFAULT NULL COMMENT 'ชื่อ',
  `image` varchar(50) DEFAULT NULL COMMENT 'รูป',
  `address` varchar(255) DEFAULT NULL COMMENT 'ที่อยู่',
  `detail` text DEFAULT NULL COMMENT 'รายละเอียด',
  `rai` float DEFAULT 0 COMMENT 'ไร่',
  `ngan` float DEFAULT 0 COMMENT 'งาน',
  `square_wa` float DEFAULT 0 COMMENT 'ตารางวา',
  `price` double DEFAULT NULL COMMENT 'ราคา',
  `created_by` int(11) DEFAULT NULL COMMENT 'สร้างโดย',
  `created_date` datetime DEFAULT NULL COMMENT 'วันที่สร้าง',
  `status` varchar(10) DEFAULT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land`
--

INSERT INTO `land` (`id`, `type`, `for`, `land`, `image`, `address`, `detail`, `rai`, `ngan`, `square_wa`, `price`, `created_by`, `created_date`, `status`) VALUES
(1, 'โฉนดที่ดิน', 'ขาย', 'ขายที่ดิน XXXxxxxxYYYYyyy', 'a.jpg', 'หนองละลอก บ้านค่าย ระยอง ไทย', 'New English Acoustic Cover Love Songs 2021 💘 Today I\'m Alone 💘 Best Guitar Cover Of Popular Songs\r\nhttps://youtu.be/Gn0L3sKv_Ks\r\n#AcousticCover​ #GuitarCover​ #englishsongs​ #2021\r\n🔔 If this music makes you happy , make sure to like ,subscribe & share it with others \r\n▽ Follow \"  Acoustic Guitar Cover \" : https://tinyurl.com/yd4je4ke\r\n ▬▬▬▬▬▬▬▬▬▬▬▬▬▬ \r\n► Acoustic Songs Collection : https://tinyurl.com/y8cz62oq\r\n► Top Acoustic Cover : https://tinyurl.com/pmhszha8\r\n▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ \r\nThanks for watching!.. It\'s great to read your comment..We hope to make your days more beautiful with the music we share ! \r\n\r\n- Someone You Loved\r\n- Faded\r\n- So Far Away\r\n- Beautiful Scars \r\n- One Call Away\r\n- Dusk Till Dawn\r\n- Bag Liar\r\n- Before You Go\r\n- Attention\r\n- Lily\r\n- 2002\r\n- Umbrella\r\n- I Love You 3000\r\n- You Are The Reason \r\n- We Don\'t Talk Anymore\r\n\r\nacoustic cover, acoustic cover 2021, love songs 2021, guitar cover, acoustic songs, acoustic music, acoustic songs 2021, acoustic songs 2020, acoustic music 2020, acoustic music 2021, acoustic guitar cover, acoustic cover, guitar acoustic songs, guitar acoustic cover, best guitar cover, romantic guitar songs, new acoustic songs, ballad acoustic songs, english acoustic songs, english songs, english love songs, ballad english songs, ballad acoustic music, new english songs, love songs 2020, love songs 2021, cover of popular songs, acoustic cover of popular songs, top hits, tik tok love songs, tik tok, tik tok music, best love songs, sad love songs, chill music, chill, chill love songs, lofi, lofi love songs, love songs of all time, old love songs, acoustic old love songs, love songs 80s, love songs 90s, love songs 80s 90s, most popular love songs, love songs cover, songs cover, acoustic cover love songs, acoustic cover 2020, acoustic cover 2021, guitar cover 2021, english songs 2021, great acoustic songs, great love songs, acoustic love songs 2021, acoustic love songs, acoustic music cover, ballad acoustic cover, ballad guitar cover, beautiful love songs, new guitar cover, new acoustic cover, new acoustic love songs, top hits acoustic songs, guitar cover 2020, acoustic cover 2020, acoustic cover love songs 2020, love songs 2121, youtube, love songs tik tok, english acoustic music, english guitar songs, english ballad cover, english acoustic love songs, best acoustic songs, acoustic songs cover, new english love songs, acoustic music 2020, english guitar cover, guitar songs, acoustic guitar songs, best acoustic cover, English acoustic songs, old acoustic songs, greatest acoustic songs, best acoustic love songs, acoustic love songs 90s, love songs, best love songs cover, acoustic love songs 2020, sad acoustic songs, love songs 80s 90s lyrics, old love songs 80s 90s lyrics, classic love songs, top love songs, acoustic old love songs, greatest songs, ballad love songs, love songs playlist, acoustic guitar love songs, old love songs playlist, sweet love songs, memories love songs, best of love songs, acoustic, songs, hits, old songs, old english love songs, old beautiful love songs, old love songs with lyrics, 80s love songs, 90s love songs, nonstop love songs, romantic love songs, most love songs, greatest love songs, mellow love songs, falling in love, new love songs, acoustic cover with lyrics\r\n', 0, 4, 1, 200000, 1, '2022-04-16 16:20:17', 'ว่าง'),
(2, 'โฉนดที่ดิน', 'ขาย', 'ให้เช่าที่ดิน mmmmm', 'b.jpg', 'บางกรวย บางกรวย นนทบุรี ไทย', 'เมื่อวานมีทีมงาน Youtube  channel แห่งหนึ่งซึ่งดังมากๆ (มีคน subscribe เป็นหลักล้านคน) ติดต่อผมมา\r\nใจความสำคัญคือ อยากจะทำ content เรื่องหนึ่ง (ซึ่งเรื่องน่าสนใจ) แต่ดูเหมือนจะต้องใช้ความรู้ทาง Phonetics \r\nแต่คนเขียนบทของช่องไม่มีความรู้เรื่องนี้ จึงติดต่อมาให้ผมเขียนบทให้ และมีค่าใช้จ่ายให้เล็กน้อย\r\nฟังไม่ผิดครับ \"ติดต่อมาให้ผมเขียนบทให้\" \r\nผมจึงถามรายละเอียดเพิ่มเติมไป และถามกลับไปว่า มีการให้เครดิตผมหรือไม่ครับ ในรูปแบบใด\r\nคำตอบคือ ให้เครดิตใน description ของคลิป \r\nผมเองต้องไปเปิดดูว่า เอ๊ะ description ของ youtube นี่มันอยู่ตรงไหนนะ เพราะปกติเวลาดู youtube ผมก็ไม่เคยไปดู description \r\nและสิ่งที่ช่องแจ้งเกี่ยวกับงานที่จะให้ผมทำก็คือ \"ให้ผมเขียนอธิบายและให้ยกตัวอย่างด้วย\"  \r\nอ่านถึงตรงนี้ มันคือ ทางช่องกำลังเอาทรัพย์สินทางปัญญาของผมไปใช้ประโยชน์นะครับ เพราะผมไม่ใช่คนไปค้นคว้าเรียบเรียงมาให้ แต่เอาสติปัญญาของผมวิเคราะห์และหาตัวอย่าง \r\nผมจึงตอบกลับไปว่า ผมจะไม่รับค่าตอบแทน (เพราะเสนอมาให้ 1,200 บาท ใช่ครับ เลขศูนย์ 2 ตัว ไม่ได้ตกหล่นไป ราคานี้ผมคิดว่าทำให้ฟรีดีกว่า) แต่ขอให้ให้เครดิตอย่างชัดเจน โดยให้มีการเอ่ยชื่อและภาควิชา เพื่อที่จะได้เป็นการประชาสัมพันธ์ภาควิชาและ “สิ่งที่เขียนให้ไม่ใช่การเรียบเรียงจากการค้นคว้า แต่เป็นการวิเคราะห์และความคิดสนับสนุน ซึ่งเป็นทรัพย์สินทางปัญญา” ของผม\r\nทางทีมงานอ่านและไม่ตอบ ผมตั้งใจให้เวลา 3 ชั่วโมง หลังจากนั้นจึงส่งข้อความไปอีกว่า ขอปฏิเสธ เพราะแนวทางการทำงานแตกต่างกัน และจบท้ายว่า “หากเนื้อหาไม่ได้เขียนเองโดยทีมงาน ก็ควรให้เห็นที่มาของเนื้อหาว่ามาจากผู้รู้คือใครที่ชัดเจน” \r\nผมว่าเรื่องนี้ไม่เหมาะสมมาก ไม่ใช่เพราะแค่ช่องนี้เป็นช่องการศึกษา (แบบย่อยง่าย) เท่านั้น แต่แปลกใจว่า ทีมงานเห็นพ้องต้องกันและเห็นสมควรกับเรื่องแบบนี้ได้อย่างไร ในเมื่อทีมงานไม่ใช่คนเขียนบทเอง (เพราะไม่มีความรู้เรื่องนี้ ตามที่ช่องแจ้งมา) ก็ต้องให้เครดิต \"อย่างชัดแจ้ง\" กับคนที่เป็นเจ้าของความคิด สื่อสารให้คนดูเห็นชัดเจน ว่าตรงนี้ไปเอามาจากคนอื่น เพราะคุณไม่ได้คิดเอง  จึงเป็นที่มาที่ผมบอกไปว่า ให้เค้าเอ่ยชื่อผมและภาควิชา (ไม่ใช่ไปใส่ใน description ที่ไม่มีใครไปดู) \r\nที่ผ่านมาผมเคยทำงานกับสื่อใหญ่เล็กมา ก็จะมาขอสัมภาษณ์แล้วเอาสิ่งที่ผมพูดไปเรียบเรียง เขียนกลับมาให้ตรวจทานว่าถูกต้อง และให้เครดิตชัดเจนแบบมีชื่อมีหน้า หรือบางสื่อก็ “ไปค้นคว้าและเขียนเรียบเรียงมาเอง” และเอามาให้ผมช่วยตรวจดู ผมก็ยินดีที่จะช่วยทุกครั้ง เพราะเขาทำงานมา เราก็ให้ความช่วยเหลือทางวิชาการไป เครดิตจะขอบคุณข้างท้าย ตรงนี้ไม่มีปัญหาเพราะเค้าเขียนมาเอง แค่ให้เราตรวจ  แต่นี่สิ่งที่ช่องนี้เสนอมา คือการให้เขียนบทให้ ให้ไปวิเคราะห์มา แล้วเอาไปให้ทางช่องใช้ คนส่วนใหญ่ก็คงเข้าใจว่า youtuber วิเคราะห์เอง \r\nถ้าใครนึกไม่ออก มันก็เหมือนกับการตีพิมพ์บทความวิชาการ ที่ไม่ได้เขียนเอง ให้คนอื่นเขียนมาให้ แล้วก็ไม่ cite (ไม่อ้างอิง) ในเนื้อหาอย่างชัดเจน ไม่ให้เครดิตแต่ไปเขียนขอบคุณข้างท้าย.... ทางโลกวิชาการเรื่องนี้ร้ายแรงมาก  ทางโลกปกติ  คิดว่าใครๆก็น่าจะคิดได้ใช่มั้ยครับ ว่าอะไรที่ตัวเองไม่ได้คิดเอง ก็ต้องให้เครดิตสิ่งที่คนอื่นคิด\r\nตรงนี้อยากฝากคนที่ทำ content ต่างๆ ว่า เรื่องการให้เครดิตเป็นสิ่งสำคัญ (ซึ่งที่ผ่านมามีหลายเพจ หลายช่อง หลายสื่อติดต่อมา เค้าพูดชัดเจนตั้งแต่แรกเลยว่าจะให้เครดิตแบบใด) และถ้าใครโดยเฉพาะนิสิตของผม มีคนมาให้ทำแบบนี้ ถ้านิสิตไม่ได้เป็นทีมงานเขา แต่มีคนติดต่อมาให้นิสิตเขียน แล้วไม่ให้เครดิตอย่างชัดเจน \"อย่าไปทำครับ\" เพราะจะเป็นการส่งเสริมให้เรื่องแบบนี้เป็นเรื่องปกติในสังคม  ซึ่งไม่ได้เลย และสื่อสารเตือนสติเค้าไปว่า \"ไม่ถูกต้อง\" \r\nหวังว่าโพสต์นี้จะไปถึงช่องที่ติดต่อมานะครับ ฝากไว้ให้พิจารณา', 0, 6, 5, 200000, 1, '2022-04-16 16:21:29', 'ว่าง'),
(3, 'โฉนดที่ดิน', 'เช่า', 'กกกกกกกกกกกกก', 'c.jpg', 'eeeeeeeeeeee', '<?php\r\nheader(\"Content-type:application/json; charset=UTF-8\");        \r\nheader(\"Cache-Control: no-store, no-cache, must-revalidate\");       \r\nheader(\"Cache-Control: post-check=0, pre-check=0\", false);  \r\n// ส่วนติดต่อกับฐานข้อมูล\r\nmysql_connect(\"localhost\",\"root\",\"\") or die(\"Cannot connect the Server\");     \r\nmysql_select_db(\"test\") or die(\"Cannot select database\");     \r\nmysql_query(\"set character set utf8\");   \r\n?>\r\n<?php\r\n$q=\"SELECT * FROM province_th WHERE 1 ORDER BY province_id\";\r\n$qr=mysql_query($q);\r\nwhile($rs=mysql_fetch_array($qr)){\r\n    $json_data[]=array(\r\n        \"province_id\"=>$rs[\'province_id\'],\r\n        \"province_name\"=>$rs[\'province_name\'],\r\n        \"latitude\"=>$rs[\'province_lat\'],\r\n        \"longitude\"=>$rs[\'province_lon\'],\r\n        \"zoom\"=>$rs[\'province_zoom\']\r\n    );  \r\n}\r\n$json= json_encode($json_data);\r\necho $json;\r\n?>', 1, 0, 0, 125002, 1, '2022-04-16 22:19:55', 'ว่าง'),
(4, 'น.ส.3 ก.', 'ขาย', 'd.jpg', 'd.jpg', 'd.jpg', '<!DOCTYPE html>\r\n<html lang=\"en\">\r\n<head>\r\n    <meta charset=\"UTF-8\">\r\n    <title>Document</title>\r\n    <style type=\"text/css\">  \r\n    html { height: 100% }  \r\n    body {   \r\n        height:100%;  \r\n        margin:0;padding:0;  \r\n        font-family:tahoma, \"Microsoft Sans Serif\", sans-serif, Verdana;  \r\n        font-size:12px;  \r\n    }  \r\n    /* css กำหนดความกว้าง ความสูงของแผนที่ */ \r\n    #map_canvas {   \r\n        width:450px;  \r\n        height:500px;  \r\n        margin:auto;  \r\n        margin-top:50px;  \r\n    }  \r\n    </style>      \r\n</head>\r\n<body>\r\n   \r\n  <br>\r\n   <div style=\"margin:auto:width:80%;\">\r\n       <div id=\"map_canvas\"></div>  \r\n        \r\n   </div>   \r\n \r\n<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js\"></script>      \r\n<script type=\"text/javascript\">  \r\nvar map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้  \r\nvar GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น  \r\nvar my_Marker=[]; // สำหรับปักหมุด\r\nvar obj_marker;  // สำหรับเก็บค่าพิกัดและข้อมูลจากฐานข้อมูล\r\nvar limit_show=10; // กำหนดแสดงรายการไม่เกิน\r\nvar infowindow=[]; // กำหนดตัวแปรสำหรับเก็บตัว popup แสดงรายละเอียดสถานที่  \r\nvar infowindowTmp; // กำหนดตัวแปรสำหรับเก็บลำดับของ infowindow ที่เปิดล่าสุด      \r\nfunction initialize() { // ฟังก์ชันแสดงแผนที่  \r\n    GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM  \r\n    // กำหนดจุดเริ่มต้นของแผนที่  \r\n    var my_Latlng  = new GGM.LatLng(13.761728449950002,100.6527900695800);  \r\n    // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas  \r\n    var my_DivObj=$(\"#map_canvas\")[0];   \r\n    // กำหนด Option ของแผนที่  \r\n    var myOptions = {  \r\n        zoom: 5, // กำหนดขนาดการ zoom  \r\n        center: my_Latlng , // กำหนดจุดกึ่งกลาง  \r\n        mapTypeId:GGM.MapTypeId.ROADMAP, // กำหนดรูปแบบแผนที่  \r\n        mapTypeControlOptions:{ // การจัดรูปแบบส่วนควบคุมประเภทแผนที่  \r\n            position:GGM.ControlPosition.TOP, // จัดตำแหน่ง  \r\n            style:GGM.MapTypeControlStyle.DROPDOWN_MENU // จัดรูปแบบ style   \r\n        }  \r\n    };  \r\n    map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map  \r\n     \r\n    // ดึงข้อมูลจากฐานข้อมูลที่สร้างมาในรูปแบบไฟล์ json\r\n    $.getJSON( \"get_marker.php\", function( data ) { \r\n        obj_marker=data; // เก็บค่าไว้ในตัวแปร ไว้ใช้งาน\r\n        var m=0;\r\n         $.each(obj_marker,function(i,k){  // วนลูปแสดงการปักหมุด\r\n                 if(m<limit_show){ // ปักหมดได้ไม่เกิน limit_show\r\n                    var markerLatLng=new GGM.LatLng(obj_marker[i].latitude,obj_marker[i].longitude);  \r\n                    my_Marker[i] = new GGM.Marker({ // สร้างตัว marker  \r\n                        position:markerLatLng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  \r\n                        map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  \r\n                        title:obj_marker[i].province_name // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  \r\n                    });     \r\n                      \r\n                     // ส่วนของ infowindow สำหรับทดสอบ ดึงจากชื่อ titile\r\n                     infowindow[i] = new GGM.InfoWindow({// สร้าง infowindow ของแต่ละ marker เป็นแบบ array  \r\n                        content: my_Marker[i].getTitle() // ดึง title ในตัว marker มาแสดงใน infowindow  \r\n                    });             \r\n                      \r\n                    //  กรณีนำไปประยุกต์ ดึงข้อมูลจากฐานข้อมูลมาแสดง  \r\n//                        infowindow[i] = new GGM.InfoWindow({     \r\n//                          content:$.ajax({     \r\n//                              url:\'placeDetail.php\',//ใช้ ajax ใน jQuery ดึงข้อมูล     \r\n//                              data:\'placeID=\'+obj_marker[i].province_id,  // ส่งค่าตัวแปร ไปดึงข้อมูลจากฐานข้อมูล  \r\n//                              async:false     \r\n//                          }).responseText     \r\n//                        });                           \r\n \r\n                     // ส่วนของการกำหนด ให้เมื่อคลิกแต่ละ marker\r\n                    GGM.event.addListener(my_Marker[i],\"click\", function(){ // เมื่อคลิกตัว marker แต่ละตัว  \r\n                        if(infowindowTmp){ // ให้ตรวจสอบว่ามี infowindow ตัวไหนเปิดอยู่หรือไม่  \r\n                            infowindow[infowindowTmp].close();  // ถ้ามีให้ปิด infowindow ที่เปิดอยู่  \r\n                        }  \r\n                        infowindow[i].open(map,my_Marker[i]); // แสดง infowindow ของตัว marker ที่คลิก  \r\n                        infowindowTmp=i; // เก็บ infowindow ที่เปิดไว้อ้างอิงใช้งาน  \r\n                    });                                \r\n                    m++;\r\n                 }\r\n                 \r\n         });              \r\n    });  \r\n     \r\n \r\n    // กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom  \r\n    GGM.event.addListener(map, \'zoom_changed\', function() {  \r\n        // วนลูปล้างค่าเก่า ก่อนสร้างปักหมุดใหม่\r\n        if(my_Marker.length>0){  \r\n            for(i=0;i<my_Marker.length;i++){  \r\n                my_Marker[i].setMap(null);  \r\n            }  \r\n        }  \r\n        var m=0;\r\n        var map_zoom=map.getZoom();\r\n        // zoom เท่าไหร่ แสดงเท่าไหร่ เงื่อนไขกำหนดตามต้องการ\r\n        if(map_zoom<=6){\r\n            limit_show=10;\r\n        }else if(map_zoom<=7){\r\n            limit_show=30;\r\n        }else if(map_zoom<=8){\r\n            limit_show=40;\r\n        }else if(map_zoom<=20){\r\n            limit_show=100;\r\n        }else{\r\n            limit_show=10;\r\n        }\r\n         $.each(obj_marker,function(i,k){  // วนลูปแสดงการปักหมุด\r\n                 if(m<limit_show){ // ปักหมดได้ไม่เกิน limit_show\r\n                      \r\n                    var markerLatLng=new GGM.LatLng(obj_marker[i].latitude,obj_marker[i].longitude);  \r\n                    my_Marker[i] = new GGM.Marker({ // สร้างตัว marker  \r\n                        position:markerLatLng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง  \r\n                        map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map  \r\n                        title:obj_marker[i].province_name // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ  \r\n                    });    \r\n \r\n                    // ส่วนของ infowindow สำหรับทดสอบ ดึงจากชื่อ titile\r\n                     infowindow[i] = new GGM.InfoWindow({// สร้าง infowindow ของแต่ละ marker เป็นแบบ array  \r\n                        content: my_Marker[i].getTitle() // ดึง title ในตัว marker มาแสดงใน infowindow  \r\n                    });                             \r\n                    //  กรณีนำไปประยุกต์ ดึงข้อมูลจากฐานข้อมูลมาแสดง  \r\n//                        infowindow[i] = new GGM.InfoWindow({     \r\n//                          content:$.ajax({     \r\n//                              url:\'placeDetail.php\',//ใช้ ajax ใน jQuery ดึงข้อมูล     \r\n//                              data:\'placeID=\'+obj_marker[i].province_id,  // ส่งค่าตัวแปร ไปดึงข้อมูลจากฐานข้อมูล  \r\n//                              async:false     \r\n//                          }).responseText     \r\n//                        });                           \r\n \r\n                     // ส่วนของการกำหนด ให้เมื่อคลิกแต่ละ marker\r\n                    GGM.event.addListener(my_Marker[i],\"click\", function(){ // เมื่อคลิกตัว marker แต่ละตัว  \r\n                        if(infowindowTmp){ // ให้ตรวจสอบว่ามี infowindow ตัวไหนเปิดอยู่หรือไม่  \r\n                            infowindow[infowindowTmp].close();  // ถ้ามีให้ปิด infowindow ที่เปิดอยู่  \r\n                        }  \r\n                        infowindow[i].open(map,my_Marker[i]); // แสดง infowindow ของตัว marker ที่คลิก  \r\n                        infowindowTmp=i; // เก็บ infowindow ที่เปิดไว้อ้างอิงใช้งาน  \r\n                    });                                \r\n                    m++;\r\n                 }\r\n         });          \r\n         \r\n    });  \r\n     \r\n   \r\n}  \r\n$(function(){  \r\n    // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว  \r\n    // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api  \r\n    // v=3.2&sensor=false&language=th&callback=initialize  \r\n    //  v เวอร์ชัน่ 3.2  \r\n    //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false  \r\n    //  language ภาษา th ,en เป็นต้น  \r\n    //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize  \r\n    $(\"<script/>\", {  \r\n      \"type\": \"text/javascript\",  \r\n      src: \"//maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize\" \r\n    }).appendTo(\"body\");      \r\n});  \r\n</script>              \r\n</body>\r\n</html>', 1, 0, 0, 120000, 1, '2022-04-16 22:21:04', 'ขายแล้ว'),
(5, 'น.ส.3 ก.', 'เช่า', 'e.jpg', 'e.jpg', 'e.jpg', 'Contact Us\r\nEirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.', 0, 5, 7, 555555, 1, '2022-04-16 22:52:05', 'เช่าแล้ว'),
(6, 'โฉนดที่ดิน', 'ขาย', '5Q4WYvBdrx', '16499949331820.JPG', 'qGTfC5F3LZ', '<p><u>if ($result) {</u></p>\r\n\r\n<p><u>&nbsp; &nbsp; &nbsp; &nbsp; echo &#39;&#39;;</u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u>&nbsp; &nbsp; &nbsp; &nbsp; echo &#39;&#39;;</u></p>\r\n\r\n<p style=\"text-align:center\">&nbsp; &nbsp; } else {</p>\r\n\r\n<p style=\"text-align:center\">&nbsp; &nbsp; &nbsp; &nbsp; echo &#39;&#39;;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp; &nbsp; &nbsp; &nbsp; echo &#39;&#39;;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp; &nbsp; }</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n', 195784, 313127, 934737, 33, 1, '2022-04-17 06:29:29', 'ว่าง'),
(10, 'โฉนดที่ดิน', 'ขาย', 'xSTOxio7Gj', '16499949739764.JPG', 'O0IqFXEBuz', '<p><img alt=\"\" class=\"img-fluid\" src=\"./img/upload/source/IMG_0182.png\" /></p>\r\n', 955315, 711215, 562786, 33, 1, '2022-04-17 07:42:02', 'ว่าง'),
(13, 'น.ส.3 ก.', 'เช่า', '00000', '16499948953385.JPG', 'nmnJiiv8rD00000000', '<p><img src=\"http://localhost/land/img/about.jpg\" /></p>\r\n\r\n<h1>#1 Place To Find The Perfect Property 0000</h1>\r\n\r\n<p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>\r\n\r\n<p>Tempor erat elitr rebum at clita</p>\r\n\r\n<p>Aliqu diam amet diam et eos</p>\r\n\r\n<p>Clita duo justo magna dolore erat amet</p>\r\n\r\n<p><a href=\"http://localhost/land/about.html\">Read More</a></p>\r\n', 0, 1, 55, 3300000, 1, '2022-04-17 07:59:03', 'ว่าง'),
(14, 'โฉนดที่ดิน', 'ขาย', '7LFzjuoxZ3', '16499932473115.png', 'k7njwZiUP6', '<p style=\"text-align:center\"><img src=\"http://localhost/land/img/about.jpg\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"color:#e74c3c\"><strong>#1 Place To Find The Perfect Property</strong></span></h1>\r\n\r\n<p style=\"text-align:center\"><u>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. </u></p>\r\n\r\n<p style=\"text-align:center\"><u>Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</u></p>\r\n\r\n<p style=\"text-align:center\"><em>Tempor erat elitr rebum at clita</em></p>\r\n\r\n<p style=\"text-align:center\">Aliqu diam amet diam et eos</p>\r\n\r\n<p style=\"text-align:center\">Clita duo justo magna dolore erat amet</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"smiley\" src=\"http://localhost/land/lib/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n', 4420, 805750, 744417, 33, 1, '2022-04-17 08:17:43', 'ว่าง'),
(15, 'โฉนดที่ดิน', 'ขาย', 'GZfaPwyEeV', '16499934121269.png', '6m0QyJjx8u', '<p><img alt=\"\" src=\"http://localhost/land/img/call-to-action.jpg\" /></p>\r\n\r\n<h1>Contact With Our Certified Agent</h1>\r\n\r\n<p>Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>\r\n\r\n<p><a href=\"http://localhost/land/index.html\">Make A Call</a>&nbsp;<a href=\"http://localhost/land/index.html\">Get Appoinment</a></p>\r\n\r\n<h1>Property Agents</h1>\r\n\r\n<p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/land/img/team-1.jpg\" /></p>\r\n\r\n<h5>Full Name</h5>\r\n\r\n<p><small>Designation</small></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/land/img/team-2.jpg\" /></p>\r\n\r\n<h5>Full Name</h5>\r\n\r\n<p><small>Designation</small></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/land/img/team-3.jpg\" /></p>\r\n\r\n<h5>Full Name</h5>\r\n\r\n<p><small>Designation</small></p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/land/img/team-4.jpg\" /></p>\r\n\r\n<h5>Full Name</h5>\r\n\r\n<p><small>Designation</small></p>\r\n\r\n<h1>Our Clients Say!</h1>\r\n\r\n<p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-2.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-3.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-1.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-2.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-3.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-1.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n\r\n<p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet. Est stet ea lorem amet est kasd kasd erat eos</p>\r\n\r\n<p><img src=\"http://localhost/land/img/testimonial-2.jpg\" /></p>\r\n\r\n<h6>Client Name</h6>\r\n\r\n<p><small>Profession</small></p>\r\n', 602665, 710729, 20629, 339999, 1, '2022-04-17 08:20:27', 'ขายแล้ว'),
(16, 'โฉนดที่ดิน', 'ขาย', 'IT36MZUJU2', '16499955218922.JPG', '5uIoRNfSlO', '<p>&nbsp;</p>\r\n\r\n<p>Top Hits English Acoustic Cover Love Songs Playlist 2022 - Best Acoustic Guitar Cover Of Popular <a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=0s\">https://youtu.be/b3s7Wfqhylk</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/acousticcover\">#AcousticCover​</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/guitarcover\">#GuitarCover​</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/englishsongs\">#englishsongs​</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/2021\">#2021</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/songs2022\">#songs2022</a> <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/2022\">#2022</a> ???? If this music makes you happy , make sure to like ,subscribe &amp; share it with others ▽ Follow &quot; Acoustic Guitar Cover &quot; : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbHJPUHlqZ05YdExkR29hc2JKYVkzLU1EYWpNUXxBQ3Jtc0tsTDNOZm56V1BUNDhYSEs4N3BpS0lFYlJlX3hkbE1VNk95NGk4MmdnWmZCS0N6T2t1MUZ6d2JWazNrSm9zdDYzWklnWDRlRVo2SG1zQ2RKekE2bm1POHIzR3AzLUxGQ25KNFZBTFJreEhUblRSNmVjdw&amp;q=https%3A%2F%2Ftinyurl.com%2Fyd4je4ke\" rel=\"nofollow\" target=\"_blank\">https://tinyurl.com/yd4je4ke</a> ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ ► Best English Acoustic Love Songs Ever - Cover of popular Songs : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbWxZaTFMSFBSeUdQeDN6NEhEZGh2c25PS0lVUXxBQ3Jtc0tsOEo5WXMyeXhQakRUMDFVUTJLWF92Q1pvTHhqV2xEQVd4ZGd2enQzY0hOYTZBSVVLSllwSTJTNklkQjhHMHRleVBlUUgzcXU4MU1MaGlTdHRXZFNUXy1fM01wUU9wT1FTOEM1S0VjdWdiUTFpck5aVQ&amp;q=https%3A%2F%2Fbom.to%2FRJmTAeZMemy19\" rel=\"nofollow\" target=\"_blank\">https://bom.to/RJmTAeZMemy19</a> ► New English Acoustic Love Songs 2022 - Acoustic Guitar Cover : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbkxWOEM0Y2dpMXV0U3Myak1vRzJ2ZHhES1ZCQXxBQ3Jtc0trUm0xUkdReV81b0lnZGN6SVVZVFgzZFBsQmR6aHVnVmNJTGk1a2Y0NjlKbUd0dnh1VW1sZDI2N0RTQlpUblpkZXhyd2QtX21vYUpOUTB5TU5VdXd6Q0kzakYzWEZaVzEta3hwcl9IVGJOck9wS2ZOSQ&amp;q=https%3A%2F%2Fbom.so%2FMCDjSd\" rel=\"nofollow\" target=\"_blank\">https://bom.so/MCDjSd</a> ► Top English Acoustic Cover Love Songs : <a dir=\"auto\" href=\"https://www.youtube.com/redirect?event=video_description&amp;redir_token=QUFFLUhqbUF3M1Bmb19nbm41MDFGQ2JuZldvaTBiMlBwd3xBQ3Jtc0ttbDdZTURzTnQ4RGNublRYMW9mbmx0bmc2aFdsc2FpUWJ3dXN3SXhITndaeFRJZTlRYlEwSmJPdnlQWTRDZ1U2MDA0dDJ2Wl9ZYktxME9PVl9ObnhBOGM4ZXZ1dDhscG5RSmxIUGlyZC1kRnRlMHVuNA&amp;q=https%3A%2F%2Ftinyurl.com%2Fpmhszha8\" rel=\"nofollow\" target=\"_blank\">https://tinyurl.com/pmhszha8</a> ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬ Thanks for watching!.. It&#39;s great to read your comment..We hope to make your days more beautiful with the music we share ! [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=0s\">00:00:00</a>] - Red [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=161s\">00:02:41</a>] - La La La [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=334s\">00:05:34</a>] - abcdefu [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=471s\">00:07:51</a>] - To Die For [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=664s\">00:11:04</a>] - Willow [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=864s\">00:14:24</a>] - Solo [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=966s\">00:16:06</a>] - The Greatest [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=1175s\">00:19:35</a>] - Mood [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=1319s\">00:21:59</a>] - Be Like That [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=1508s\">00:25:08</a>] - Galway Girl [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=1679s\">00:27:59</a>] - Try [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=1899s\">00:31:39</a>] - LoveLy [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=2101s\">00:35:01</a>] - That Girl [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=2248s\">00:37:28</a>] - Memories [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=2433s\">00:40:33</a>] - Hero [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=2579s\">00:42:59</a>] - Nothing Really Matters [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=2775s\">00:46:15</a>] - Memories [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=2949s\">00:49:09</a>] - Unstoppable [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=3165s\">00:52:45</a>] - MAMIII [<a dir=\"auto\" href=\"https://www.youtube.com/watch?v=b3s7Wfqhylk&amp;t=3301s\">00:55:01</a>] - Need You Now acoustic cover, acoustic cover 2021, love songs 2021, guitar cover, acoustic songs, acoustic music, acoustic songs 2021, acoustic songs 2022, acoustic music 2022, acoustic music 2021, acoustic guitar cover, acoustic cover, guitar acoustic songs, guitar acoustic cover, best guitar cover, romantic guitar songs, new acoustic songs, ballad acoustic songs, english acoustic songs, english songs, english love songs, ballad english songs, ballad acoustic music, new english songs, love songs 2022, love songs 2021, cover of popular songs, acoustic cover of popular songs, top hits, tik tok love songs, tik tok, tik tok music, best love songs, sad love songs, chill music, chill, chill love songs, lofi, lofi love songs, love songs of all time, old love songs, acoustic old love songs, love songs 80s, love songs 90s, love songs 80s 90s, most popular love songs, love songs cover, songs cover, acoustic cover love songs, acoustic cover 2022, acoustic cover 2021, guitar cover 2021, english songs 2021, great acoustic songs, great love songs, acoustic love songs 2021, acoustic love songs, acoustic music cover, ballad acoustic cover, ballad guitar cover, beautiful love songs, new guitar cover, new acoustic cover, new acoustic love songs, top hits acoustic songs, guitar cover 2022, acoustic cover 2022, acoustic cover love songs 2022, love songs 2021, youtube, love songs tik tok, english acoustic music, english guitar songs, english ballad cover, english acoustic love songs, best acoustic songs, acoustic songs cover, new english love songs, acoustic music 2022, english guitar cover, guitar songs, acoustic guitar songs, best acoustic cover, English acoustic songs, old acoustic songs, greatest acoustic songs, best acoustic love songs, acoustic love songs 90s, love songs, best love songs cover, acoustic love songs 2022, sad acoustic songs, love songs 80s 90s lyrics, old love songs 80s 90s lyrics, classic love songs, top love songs, acoustic old love songs, greatest songs, ballad love songs, love songs playlist, acoustic guitar love songs, old love songs playlist, sweet love songs, memories love songs, best of love songs, acoustic, songs, hits, old songs, old english love songs, old beautiful love songs, old love songs with lyrics, 80s love songs, 90s love songs, nonstop love songs, romantic love songs, most love songs, greatest love songs, mellow love songs, falling in love, new love songs, acoustic cover with lyrics</p>\r\n\r\n<h2>&nbsp;</h2>\r\n', 747723, 364791, 739369, 339999, 2, '2022-04-17 08:55:37', 'ว่าง'),
(17, 'โฉนดที่ดิน', 'ขาย', 'AjI5ak3yYP', '16500011490667.JPG', 'MiaqBQPNRE', '<p><span style=\"font-size:72px\"><strong>zsdvsdvbsbsbf</strong></span></p>\r\n', 812589, 848871, 187134, 339999, 3, '2022-04-17 10:29:25', 'ว่าง');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `line` varchar(30) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `checked` varchar(3) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `tel`, `line`, `role`, `image`, `checked`, `last_login`) VALUES
(1, 'admin', '$2y$10$Kvuh6KEyAAoLTOKpuzykMemvOhGA7CrOtyyzDUezKpPuHOv2l.n7y', 'Administrator', 'admin@admin.com', '088-099-9990', 'adminJaa', 'admin', 'team-1.jpg', 'Yes', '2022-04-17 08:56:39'),
(2, 'aaa', '$2y$10$csmL1UZL6eVmbgk3g5pfXORgYl5Me9zv/QOPo25B5AvkXXvgVZExS', 'aaa', 'aa@aa.aa', '3189150602', 'aa', 'admin', NULL, NULL, '2022-04-17 08:52:25'),
(3, 'bbb', '$2y$10$nGB3a7orwm43b6MvIjoYVesMmXKLFp9Yr1TkjCPWcebeMKqifi/5K', 'bbb', 'bbb@bb.bb', '(23) 8718-9181', 'bbbb', 'user', NULL, NULL, '2022-04-17 10:28:56'),
(4, 'ccc', '$2y$10$.Zzp8ZFY./m3iokcgWhmBuk29UosnreoGEmCSoSBhqFwWaX4yvHcy', 'ccc', 'ccc@cc.com', '(01) 7905-5812', 'ccc', 'user', NULL, NULL, '2022-04-17 01:33:34');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_land`
-- (See below for the actual view)
--
CREATE TABLE `view_land` (
`id` int(11)
,`type` varchar(50)
,`for` varchar(50)
,`land` varchar(100)
,`image` varchar(50)
,`address` varchar(255)
,`detail` text
,`rai` float
,`ngan` float
,`square_wa` float
,`price` double
,`created_by` int(11)
,`created_date` datetime
,`status` varchar(10)
,`name` varchar(255)
,`email` varchar(100)
,`tel` varchar(30)
,`line` varchar(30)
,`checked` varchar(3)
,`user_id` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_land`
--
DROP TABLE IF EXISTS `view_land`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_land`  AS SELECT `a`.`id` AS `id`, `a`.`type` AS `type`, `a`.`for` AS `for`, `a`.`land` AS `land`, `a`.`image` AS `image`, `a`.`address` AS `address`, `a`.`detail` AS `detail`, `a`.`rai` AS `rai`, `a`.`ngan` AS `ngan`, `a`.`square_wa` AS `square_wa`, `a`.`price` AS `price`, `a`.`created_by` AS `created_by`, `a`.`created_date` AS `created_date`, `a`.`status` AS `status`, `b`.`name` AS `name`, `b`.`email` AS `email`, `b`.`tel` AS `tel`, `b`.`line` AS `line`, `b`.`checked` AS `checked`, `b`.`id` AS `user_id` FROM (`land` `a` left join `user` `b` on(`b`.`id` = `a`.`created_by`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `land`
--
ALTER TABLE `land`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
