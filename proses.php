<?php
//including the database connection file
include_once("config.php");



//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM tb_statlog ORDER BY id ASC"); // using mysqli_query instead
$jumlahdata = mysqli_query($mysqli, "SELECT COUNT(ID) as JUMLAH FROM `tb_statlog`");
$jumlahdata_ = mysqli_fetch_array($jumlahdata);

$jumlahdatalabel1 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Label = 1");
$jumlahdatalabel1_ = mysqli_fetch_array($jumlahdatalabel1);
$jumlahdatalabel2 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Label = 2");
$jumlahdatalabel2_ = mysqli_fetch_array($jumlahdatalabel2);

$jumlahdataage11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age <= 40 AND Label = 1");
$jumlahdataage11_ = mysqli_fetch_array($jumlahdataage11);
$jumlahdataage12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age <= 40 AND Label = 2");
$jumlahdataage12_ = mysqli_fetch_array($jumlahdataage12);
$jumlahdataage21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 41 AND Age <= 50) AND Label = 1");
$jumlahdataage21_ = mysqli_fetch_array($jumlahdataage21);
$jumlahdataage22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 41 AND Age <= 50) AND Label = 2");
$jumlahdataage22_ = mysqli_fetch_array($jumlahdataage22);
$jumlahdataage31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 51 AND Age <= 60) AND Label = 1");
$jumlahdataage31_ = mysqli_fetch_array($jumlahdataage31);
$jumlahdataage32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 51 AND Age <= 60) AND Label = 2");
$jumlahdataage32_ = mysqli_fetch_array($jumlahdataage32);
$jumlahdataage41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 61 AND Age <= 70) AND Label = 1");
$jumlahdataage41_ = mysqli_fetch_array($jumlahdataage41);
$jumlahdataage42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Age >= 61 AND Age <= 70) AND Label = 2");
$jumlahdataage42_ = mysqli_fetch_array($jumlahdataage42);
$jumlahdataage51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age >= 71 AND Label = 1");
$jumlahdataage51_ = mysqli_fetch_array($jumlahdataage51);
$jumlahdataage52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Age >= 71 AND Label = 2");
$jumlahdataage52_ = mysqli_fetch_array($jumlahdataage52);

$jumlahdatasex01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 0 AND Label = 1");
$jumlahdatasex01_ = mysqli_fetch_array($jumlahdatasex01);
$jumlahdatasex02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 0 AND Label = 2");
$jumlahdatasex02_ = mysqli_fetch_array($jumlahdatasex02);
$jumlahdatasex11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 1 AND Label = 1");
$jumlahdatasex11_ = mysqli_fetch_array($jumlahdatasex11);
$jumlahdatasex12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Sex = 1 AND Label = 2");
$jumlahdatasex12_ = mysqli_fetch_array($jumlahdatasex12);


$jumlahdatacpt11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 1 AND Label = 1");
$jumlahdatacpt11_ = mysqli_fetch_array($jumlahdatacpt11);
$jumlahdatacpt12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 1 AND Label = 2");
$jumlahdatacpt12_ = mysqli_fetch_array($jumlahdatacpt12);
$jumlahdatacpt21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 2 AND Label = 1");
$jumlahdatacpt21_ = mysqli_fetch_array($jumlahdatacpt21);
$jumlahdatacpt22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 2 AND Label = 2");
$jumlahdatacpt22_ = mysqli_fetch_array($jumlahdatacpt22);
$jumlahdatacpt31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 3 AND Label = 1");
$jumlahdatacpt31_ = mysqli_fetch_array($jumlahdatacpt31);
$jumlahdatacpt32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 3 AND Label = 2");
$jumlahdatacpt32_ = mysqli_fetch_array($jumlahdatacpt32);
$jumlahdatacpt41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 4 AND Label = 1");
$jumlahdatacpt41_ = mysqli_fetch_array($jumlahdatacpt41);
$jumlahdatacpt42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE CPT = 4 AND Label = 2");
$jumlahdatacpt42_ = mysqli_fetch_array($jumlahdatacpt42);

$jumlahdatarbp11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP <= 110 AND Label = 1");
$jumlahdatarbp11_ = mysqli_fetch_array($jumlahdatarbp11);
$jumlahdatarbp12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP <= 110 AND Label = 2");
$jumlahdatarbp12_ = mysqli_fetch_array($jumlahdatarbp12);
$jumlahdatarbp21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 111 AND RBP <= 140) AND Label = 1");
$jumlahdatarbp21_ = mysqli_fetch_array($jumlahdatarbp21);
$jumlahdatarbp22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 111 AND RBP <= 140) AND Label = 2");
$jumlahdatarbp22_ = mysqli_fetch_array($jumlahdatarbp22);
$jumlahdatarbp31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 141 AND RBP <= 160) AND Label = 1");
$jumlahdatarbp31_ = mysqli_fetch_array($jumlahdatarbp31);
$jumlahdatarbp32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (RBP >= 141 AND RBP <= 160) AND Label = 2");
$jumlahdatarbp32_ = mysqli_fetch_array($jumlahdatarbp32);
$jumlahdatarbp41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP >= 161 AND Label = 1");
$jumlahdatarbp41_ = mysqli_fetch_array($jumlahdatarbp41);
$jumlahdatarbp42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RBP >= 161 AND Label = 2");
$jumlahdatarbp42_ = mysqli_fetch_array($jumlahdatarbp42);

$jumlahdatasc11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC <= 220 AND Label = 1");
$jumlahdatasc11_ = mysqli_fetch_array($jumlahdatasc11);
$jumlahdatasc12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC <= 220 AND Label = 2");
$jumlahdatasc12_ = mysqli_fetch_array($jumlahdatasc12);
$jumlahdatasc21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 221 AND SC <= 320) AND Label = 1");
$jumlahdatasc21_ = mysqli_fetch_array($jumlahdatasc21);
$jumlahdatasc22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 221 AND SC <= 320) AND Label = 2");
$jumlahdatasc22_ = mysqli_fetch_array($jumlahdatasc22);
$jumlahdatasc31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 321 AND SC <= 420) AND Label = 1");
$jumlahdatasc31_ = mysqli_fetch_array($jumlahdatasc31);
$jumlahdatasc32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 321 AND SC <= 420) AND Label = 2");
$jumlahdatasc32_ = mysqli_fetch_array($jumlahdatasc32);
$jumlahdatasc41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 421 AND SC <= 520) AND Label = 1");
$jumlahdatasc41_ = mysqli_fetch_array($jumlahdatasc41);
$jumlahdatasc42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (SC >= 421 AND SC <= 520) AND Label = 2");
$jumlahdatasc42_ = mysqli_fetch_array($jumlahdatasc42);
$jumlahdatasc51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC >= 521 AND Label = 1");
$jumlahdatasc51_ = mysqli_fetch_array($jumlahdatasc51);
$jumlahdatasc52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE SC >= 521 AND Label = 2");
$jumlahdatasc52_ = mysqli_fetch_array($jumlahdatasc52);

$jumlahdatafbs01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 0 AND Label = 1");
$jumlahdatafbs01_ = mysqli_fetch_array($jumlahdatafbs01);
$jumlahdatafbs02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 0 AND Label = 2");
$jumlahdatafbs02_ = mysqli_fetch_array($jumlahdatafbs02);
$jumlahdatafbs11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 1 AND Label = 1");
$jumlahdatafbs11_ = mysqli_fetch_array($jumlahdatafbs11);
$jumlahdatafbs12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE FBS = 1 AND Label = 2");
$jumlahdatafbs12_ = mysqli_fetch_array($jumlahdatafbs12);

$jumlahdatarer01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 0 AND Label = 1");
$jumlahdatarer01_ = mysqli_fetch_array($jumlahdatarer01);
$jumlahdatarer02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 0 AND Label = 2");
$jumlahdatarer02_ = mysqli_fetch_array($jumlahdatarer02);
$jumlahdatarer11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 1 AND Label = 1");
$jumlahdatarer11_ = mysqli_fetch_array($jumlahdatarer11);
$jumlahdatarer12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 1 AND Label = 2");
$jumlahdatarer12_ = mysqli_fetch_array($jumlahdatarer12);
$jumlahdatarer21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 2 AND Label = 1");
$jumlahdatarer21_ = mysqli_fetch_array($jumlahdatarer21);
$jumlahdatarer22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE RER = 2 AND Label = 2");
$jumlahdatarer22_ = mysqli_fetch_array($jumlahdatarer22);

$jumlahdatamhra11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA <= 115 AND Label = 1");
$jumlahdatamhra11_ = mysqli_fetch_array($jumlahdatamhra11);
$jumlahdatamhra12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA <= 115 AND Label = 2");
$jumlahdatamhra12_ = mysqli_fetch_array($jumlahdatamhra12);
$jumlahdatamhra21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 116 AND MHRA <= 135) AND Label = 1");
$jumlahdatamhra21_ = mysqli_fetch_array($jumlahdatamhra21);
$jumlahdatamhra22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 116 AND MHRA <= 135) AND Label = 2");
$jumlahdatamhra22_ = mysqli_fetch_array($jumlahdatamhra22);
$jumlahdatamhra31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 136 AND MHRA <= 155) AND Label = 1");
$jumlahdatamhra31_ = mysqli_fetch_array($jumlahdatamhra31);
$jumlahdatamhra32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 136 AND MHRA <= 155) AND Label = 2");
$jumlahdatamhra32_ = mysqli_fetch_array($jumlahdatamhra32);
$jumlahdatamhra41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 156 AND MHRA <= 175) AND Label = 1");
$jumlahdatamhra41_ = mysqli_fetch_array($jumlahdatamhra41);
$jumlahdatamhra42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (MHRA >= 156 AND MHRA <= 175) AND Label = 2");
$jumlahdatamhra42_ = mysqli_fetch_array($jumlahdatamhra42);
$jumlahdatamhra51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA >= 176 AND Label = 1");
$jumlahdatamhra51_ = mysqli_fetch_array($jumlahdatamhra51);
$jumlahdatamhra52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE MHRA >= 176 AND Label = 2");
$jumlahdatamhra52_ = mysqli_fetch_array($jumlahdatamhra52);

$jumlahdataeia01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 0 AND Label = 1");
$jumlahdataeia01_ = mysqli_fetch_array($jumlahdataeia01);
$jumlahdataeia02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 0 AND Label = 2");
$jumlahdataeia02_ = mysqli_fetch_array($jumlahdataeia02);
$jumlahdataeia11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 1 AND Label = 1");
$jumlahdataeia11_ = mysqli_fetch_array($jumlahdataeia11);
$jumlahdataeia12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE EIA = 1 AND Label = 2");
$jumlahdataeia12_ = mysqli_fetch_array($jumlahdataeia12);

$jumlahdataoldpeak11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Oldpeak <= 1 AND Label = 1");
$jumlahdataoldpeak11_ = mysqli_fetch_array($jumlahdataoldpeak11);
$jumlahdataoldpeak12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Oldpeak <= 1 AND Label = 2");
$jumlahdataoldpeak12_ = mysqli_fetch_array($jumlahdataoldpeak12);
$jumlahdataoldpeak21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Oldpeak >= 1.1 AND Oldpeak <= 2) AND Label = 1");
$jumlahdataoldpeak21_ = mysqli_fetch_array($jumlahdataoldpeak21);
$jumlahdataoldpeak22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Oldpeak >= 1.1 AND Oldpeak <= 2) AND Label = 2");
$jumlahdataoldpeak22_ = mysqli_fetch_array($jumlahdataoldpeak22);
$jumlahdataoldpeak31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Oldpeak >= 2.2 AND Oldpeak <= 3) AND Label = 1");
$jumlahdataoldpeak31_ = mysqli_fetch_array($jumlahdataoldpeak31);
$jumlahdataoldpeak32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Oldpeak >= 2.2 AND Oldpeak <= 3) AND Label = 2");
$jumlahdataoldpeak32_ = mysqli_fetch_array($jumlahdataoldpeak32);
$jumlahdataoldpeak41 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Oldpeak >= 3.3 AND Oldpeak <= 4) AND Label = 1");
$jumlahdataoldpeak41_ = mysqli_fetch_array($jumlahdataoldpeak41);
$jumlahdataoldpeak42 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE (Oldpeak >= 3.3 AND Oldpeak <= 4) AND Label = 2");
$jumlahdataoldpeak42_ = mysqli_fetch_array($jumlahdataoldpeak42);
$jumlahdataoldpeak51 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Oldpeak >= 4.1 AND Label = 1");
$jumlahdataoldpeak51_ = mysqli_fetch_array($jumlahdataoldpeak51);
$jumlahdataoldpeak52 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Oldpeak >= 4.1 AND Label = 2");
$jumlahdataoldpeak52_ = mysqli_fetch_array($jumlahdataoldpeak52);

$jumlahdatats11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSofTPESTS = 1 AND Label = 1");
$jumlahdatats11_ = mysqli_fetch_array($jumlahdatats11);
$jumlahdatats12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSofTPESTS = 1 AND Label = 2");
$jumlahdatats12_ = mysqli_fetch_array($jumlahdatats12);
$jumlahdatats21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSofTPESTS = 2 AND Label = 1");
$jumlahdatats21_ = mysqli_fetch_array($jumlahdatats21);
$jumlahdatats22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSofTPESTS = 2 AND Label = 2");
$jumlahdatats22_ = mysqli_fetch_array($jumlahdatats22);
$jumlahdatats31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSofTPESTS = 3 AND Label = 1");
$jumlahdatats31_ = mysqli_fetch_array($jumlahdatats31);
$jumlahdatats32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE TSofTPESTS = 3 AND Label = 2");
$jumlahdatats32_ = mysqli_fetch_array($jumlahdatats32);

$jumlahdatanomv01 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 0 AND Label = 1");
$jumlahdatanomv01_ = mysqli_fetch_array($jumlahdatanomv01);
$jumlahdatanomv02 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 0 AND Label = 2");
$jumlahdatanomv02_ = mysqli_fetch_array($jumlahdatanomv02);
$jumlahdatanomv11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 1 AND Label = 1");
$jumlahdatanomv11_ = mysqli_fetch_array($jumlahdatanomv11);
$jumlahdatanomv12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 1 AND Label = 2");
$jumlahdatanomv12_ = mysqli_fetch_array($jumlahdatanomv12);
$jumlahdatanomv21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 2 AND Label = 1");
$jumlahdatanomv21_ = mysqli_fetch_array($jumlahdatanomv21);
$jumlahdatanomv22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 2 AND Label = 2");
$jumlahdatanomv22_ = mysqli_fetch_array($jumlahdatanomv22);
$jumlahdatanomv31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 3 AND Label = 1");
$jumlahdatanomv31_ = mysqli_fetch_array($jumlahdatanomv31);
$jumlahdatanomv32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE NoMV = 3 AND Label = 2");
$jumlahdatanomv32_ = mysqli_fetch_array($jumlahdatanomv32);

$jumlahdatathal11 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 3 AND Label = 1");
$jumlahdatathal11_ = mysqli_fetch_array($jumlahdatathal11);
$jumlahdatathal12 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 3 AND Label = 2");
$jumlahdatathal12_ = mysqli_fetch_array($jumlahdatathal12);
$jumlahdatathal21 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 6 AND Label = 1");
$jumlahdatathal21_ = mysqli_fetch_array($jumlahdatathal21);
$jumlahdatathal22 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 6 AND Label = 2");
$jumlahdatathal22_ = mysqli_fetch_array($jumlahdatathal22);
$jumlahdatathal31 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 7 AND Label = 1");
$jumlahdatathal31_ = mysqli_fetch_array($jumlahdatathal31);
$jumlahdatathal32 = mysqli_query($mysqli, "SELECT COUNT(Label) AS JUMLAH FROM tb_statlog WHERE Thal = 7 AND Label = 2");
$jumlahdatathal32_ = mysqli_fetch_array($jumlahdatathal32);

$jumlahdata_["JUMLAH"];
$jumlahdatalabel1_["JUMLAH"];
$jumlahdatalabel2_["JUMLAH"]; 


$age11 = $jumlahdataage11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$age12 = $jumlahdataage12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$age21 = $jumlahdataage21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$age22 = $jumlahdataage22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$age31 = $jumlahdataage31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$age32 = $jumlahdataage32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$age41 = $jumlahdataage41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$age42 = $jumlahdataage42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$age51 = $jumlahdataage51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$age52 = $jumlahdataage52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$sex01 = $jumlahdatasex01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$sex02 = $jumlahdatasex02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$sex11 = $jumlahdatasex11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$sex12 = $jumlahdatasex12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$cpt11 = $jumlahdatacpt11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$cpt12 = $jumlahdatacpt12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$cpt21 = $jumlahdatacpt21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$cpt22 = $jumlahdatacpt22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$cpt31 = $jumlahdatacpt31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$cpt32 = $jumlahdatacpt32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$cpt41 = $jumlahdatacpt41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$cpt42 = $jumlahdatacpt42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$rbp11 = $jumlahdatarbp11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$rbp12 = $jumlahdatarbp12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$rbp21 = $jumlahdatarbp21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$rbp22 = $jumlahdatarbp22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$rbp31 = $jumlahdatarbp31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$rbp32 = $jumlahdatarbp32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$rbp41 = $jumlahdatarbp41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$rbp42 = $jumlahdatarbp42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$sc11 = $jumlahdatasc11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$sc12 = $jumlahdatasc12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$sc21 = $jumlahdatasc21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$sc22 = $jumlahdatasc22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$sc31 = $jumlahdatasc31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$sc32 = $jumlahdatasc32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$sc41 = $jumlahdatasc41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$sc42 = $jumlahdatasc42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$sc51 = $jumlahdatasc51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$sc52 = $jumlahdatasc52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
       
$fbs01 = $jumlahdatafbs01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$fbs02 = $jumlahdatafbs02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$fbs11 = $jumlahdatafbs11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$fbs12 = $jumlahdatafbs12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
   
$rer01 = $jumlahdatarer01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$rer02 = $jumlahdatarer02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$rer11 = $jumlahdatarer11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$rer12 = $jumlahdatarer12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$rer21 = $jumlahdatarer21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$rer22 = $jumlahdatarer22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$mhra11 = $jumlahdatamhra11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$mhra12 = $jumlahdatamhra12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$mhra21 = $jumlahdatamhra21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$mhra22 = $jumlahdatamhra22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$mhra31 = $jumlahdatamhra31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$mhra32 = $jumlahdatamhra32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$mhra41 = $jumlahdatamhra41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$mhra42 = $jumlahdatamhra42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$mhra51 = $jumlahdatamhra51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$mhra52 = $jumlahdatamhra52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$oldpeak11 = $jumlahdataoldpeak11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$oldpeak12 = $jumlahdataoldpeak12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$oldpeak21 = $jumlahdataoldpeak21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$oldpeak22 = $jumlahdataoldpeak22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$oldpeak31 = $jumlahdataoldpeak31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$oldpeak32 = $jumlahdataoldpeak32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$oldpeak41 = $jumlahdataoldpeak41_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$oldpeak42 = $jumlahdataoldpeak42_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$oldpeak51 = $jumlahdataoldpeak51_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$oldpeak52 = $jumlahdataoldpeak52_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

$eia01 = $jumlahdataeia01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$eia02 = $jumlahdataeia02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$eia11 = $jumlahdataeia11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$eia12 = $jumlahdataeia12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$ts11 = $jumlahdatats11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"];
$ts12 = $jumlahdatats12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$ts21 = $jumlahdatats21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$ts22 = $jumlahdatats22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$ts31 = $jumlahdatats31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$ts32 = $jumlahdatats32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$nomv01 = $jumlahdatanomv01_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$nomv02 = $jumlahdatanomv02_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];
$nomv11 = $jumlahdatanomv11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$nomv12 = $jumlahdatanomv12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$nomv21 = $jumlahdatanomv21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$nomv22 = $jumlahdatanomv22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$nomv31 = $jumlahdatanomv31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$nomv32 = $jumlahdatanomv32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 

$thal11 = $jumlahdatathal11_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$thal12 = $jumlahdatathal12_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$thal21 = $jumlahdatathal21_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$thal22 = $jumlahdatathal22_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"]; 
$thal31 = $jumlahdatathal31_["JUMLAH"] / $jumlahdatalabel1_["JUMLAH"]; 
$thal32 = $jumlahdatathal32_["JUMLAH"] / $jumlahdatalabel2_["JUMLAH"];

if(isset($_POST['Submit'])) {	
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $sex = mysqli_real_escape_string($mysqli, $_POST['sex']);
    $cpt = mysqli_real_escape_string($mysqli, $_POST['cpt']);
    $rbp = mysqli_real_escape_string($mysqli, $_POST['rbp']);
    $sc = mysqli_real_escape_string($mysqli, $_POST['sc']);
	$fbs = mysqli_real_escape_string($mysqli, $_POST['fbs']);
    $rer = mysqli_real_escape_string($mysqli, $_POST['rer']);
    $mhra = mysqli_real_escape_string($mysqli, $_POST['mhra']);
	$eia = mysqli_real_escape_string($mysqli, $_POST['eia']);
    $oldpeak = mysqli_real_escape_string($mysqli, $_POST['oldpeak']);
    $tsoftpests = mysqli_real_escape_string($mysqli, $_POST['tsoftpests']);
	$nomv = mysqli_real_escape_string($mysqli, $_POST['nomv']);
	$thal = mysqli_real_escape_string($mysqli, $_POST['thal']);
	
	$result = mysqli_query($mysqli, "INSERT INTO `tb_input` 
    (`Age`, `Sex`, `CPT`, `RBP`, `SC`, `FBS`, `RER`, `MHRA`, `EIA`, `Oldpeak`, `TSofTPESTS`, `NoMV`, `Thal`) 
    VALUES 
    ('$age', '$sex', '$cpt', '$rbp', '$sc', '$fbs', '$rer', '$mhra', '$eia', '$oldpeak', '$tsoftpests', '$nomv', '$thal')"
    );
}
?>

<html>
<head>	
	<title>NB Proses</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<br>
<div class="container">
    <h5>Proses Naive Bayes</h5>
    <div class="row">
        <div class="col">
            <br>
            <h5>Hasil Input untuk Diklasifikasi</h5>
            <table class="table table-responsive table-striped">
				<thead>
    				<tr>
						<th scope="col">A</th>
						<th scope="col">S</th>
						<th scope="col">CP</th>
						<th scope="col">RBP</th>
						<th scope="col">SC</th>
						<th scope="col">FBS</th>
						<th scope="col">RER</th>
						<th scope="col">MHRA</th>
						<th scope="col">EIA</th>
						<th scope="col">O</th>
						<th scope="col">STS</th>
						<th scope="col">NV</th>
						<th scope="col">T</th>
    				</tr>	
  				</thead>
				  <tbody>
				  	<tr>
					  <?php 
						echo "<tr>";
						echo "<td>".$age."</td>";
						echo "<td>".$sex."</td>";
						echo "<td>".$cpt."</td>";	
						echo "<td>".$rbp."</td>";
						echo "<td>".$sc."</td>";
						echo "<td>".$fbs."</td>";
						echo "<td>".$rer."</td>";
						echo "<td>".$mhra."</td>";
						echo "<td>".$eia."</td>";
						echo "<td>".$oldpeak."</td>";
						echo "<td>".$tsoftpests."</td>";
						echo "<td>".$nomv."</td>";
						echo "<td>".$thal."</td>";	
						?>
					</tr>
				  </tbody>
            </table>
            <br>
            <h5>Maka, Conditional Probabilities = </h5>
            <?php 
                if ($age <= 40) {
                    $xage = $age11;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 41 && $age <= 50 ) {
                    $xage =  $age21;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 51 && $age <= 60 ) {
                    $xage =  $age31;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 61 && $age <= 70 ) {
                    $xage =  $age41;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 71) {
                    $xage =  $age51;
                    // echo "age : ".$xage.", ";
                } 

                if ($sex == 0) {
                    $xsex = $sex01;
                    // echo "sex : ".$xsex.", ";
                } elseif ($sex == 1) {
                    $xsex =  $sex11;
                    // echo "sex : ".$xsex.", ";
                }

                if ($cpt ==  1) {
                    $xcpt = $cpt11;
                    // echo "cpt : ".$xcpt.", ";
                } elseif ($cpt == 2 ) {
                    $xcpt = $cpt21;
                    // echo "cpt : ".$xcpt.", ";
                } elseif ($cpt == 3 ) {
                    $xcpt =  $cpt31;
                    // echo "cpt : ".$xcpt.", ";
                } elseif ($cpt == 4 ) {
                    $xcpt =  $cpt41;
                    // echo "cpt : ".$xcpt.", ";
                }

                if ($rbp <= 110) {
                    $xrbp = $rbp11;
                    // echo "rbp : ".$xrbp.", ";
                } elseif ($rbp >= 111 && $rbp <= 140 ) {
                    $xrbp =  $rbp21;
                    // echo "rbp : ".$xrbp.", ";
                } elseif ($rbp >= 141 && $rbp <= 160 ) {
                    $xrbp =  $rbp31;
                    // echo "rbp : ".$xrbp.", ";
                } elseif ($rbp >= 161) {
                    $xrbp =  $rbp41;
                    // echo "rbp : ".$xrbp.", ";
                }

                if ($sc <= 220) {
                    $xsc = $sc11;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 221 && $sc <= 320 ) {
                    $xsc =  $sc21;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 321 && $sc <= 420 ) {
                    $xsc =  $sc31;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 421 && $sc <= 520 ) {
                    $xsc =  $sc41;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 521) {
                    $xsc =  $sc51;
                    // echo "sc : ".$xsc.", ";
                } 

                if ($fbs == 0) {
                    $xfbs = $fbs01;
                    // echo "fbs : ".$xfbs.", ";
                } elseif ($fbs == 1) {
                    $xfbs =  $fbs11;
                    // echo "fbs : ".$xfbs.", ";
                }

                if ($rer == 0) {
                    $xrer = $rer01;
                    // echo "rer : ".$xrer.", ";
                } elseif ($rer == 1) {
                    $xrer =  $rer11;
                    // echo "rer : ".$xrer.", ";
                } elseif ($rer == 2) {
                    $xrer =  $rer21;
                    // echo "rer : ".$xrer.", ";
                }

                if ($mhra <= 115) {
                    $xmhra = $mhra11;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 116 && $mhra <= 135 ) {
                    $xmhra =  $mhra21;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 136 && $mhra <= 155 ) {
                    $xmhra =  $mhra31;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 156 && $mhra <= 175 ) {
                    $xmhra =  $mhra41;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 176) {
                    $xmhra =  $mhra51;
                    // echo "mhra : ".$xmhra.", ";
                }  
                
                if ($eia == 0) {
                    $xeia = $eia01;
                    // echo "eia : ".$xeia.", ";
                } elseif ($eia == 1) {
                    $xeia =  $eia11;
                    // echo "eia : ".$xeia.", ";
                }

                if ($oldpeak <= 1) {
                    $xoldpeak = $oldpeak11;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 1.1 && $oldpeak <= 2 ) {
                    $xoldpeak =  $oldpeak21;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 2.2 && $oldpeak <= 3 ) {
                    $xoldpeak =  $oldpeak31;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 3.3 && $oldpeak <= 4 ) {
                    $xoldpeak =  $oldpeak41;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 4.1) {
                    $xoldpeak =  $oldpeak51;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } 

                if ($tsoftpests ==  1) {
                    $xts = $ts11;
                    // echo "ts : ".$xts.", ";
                } elseif ($tsoftpests == 2 ) {
                    $xts = $ts21;
                    // echo "ts : ".$xts.", ";
                } elseif ($tsoftpests == 3 ) {
                    $xts =  $ts31;
                    // echo "ts : ".$xts.", ";
                }

                if ($nomv ==  0) {
                    $xnomv = $nomv01;
                    // echo "nomv : ".$xnomv.", ";
                } elseif ($nomv == 1 ) {
                    $xnomv = $nomv11;
                    // echo "nomv : ".$xnomv.", ";
                } elseif ($nomv == 2 ) {
                    $xnomv = $nomv21;
                    // echo "nomv : ".$xnomv.", ";
                } elseif ($nomv == 3 ) {
                    $xnomv = $nomv31;
                    // echo "nomv : ".$xnomv.", ";
                }

                if ($thal ==  3) {
                    $xthal = $thal11;
                    // echo "thal : ".$xthal.", ";
                } elseif ($thal == 6 ) {
                    $xthal = $thal21;
                    // echo "thal : ".$xthal.", ";
                } elseif ($thal == 7 ) {
                    $xthal =  $thal31;
                    // echo "thal : ".$xthal.", ";
                }
                
                $pl1 = $xage*$xsex*$xcpt*$xrbp*$xsc*$xfbs*$xrer*$xmhra*$xeia*$xoldpeak*$xts*$xnomv*$xthal;
                echo "P (X | Group = 1) = ".$pl1."<br>";
            ?>
            <!-- menentukan group 2 -->
            <?php 
                if ($age <= 40) {
                    $xage = $age12;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 41 && $age <= 50 ) {
                    $xage =  $age22;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 51 && $age <= 60 ) {
                    $xage =  $age32;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 61 && $age <= 70 ) {
                    $xage =  $age42;
                    // echo "age : ".$xage.", ";
                } elseif ($age >= 71) {
                    $xage =  $age52;
                    // echo "age : ".$xage.", ";
                } 

                if ($sex == 0) {
                    $xsex = $sex02;
                    // echo "sex : ".$xsex.", ";
                } elseif ($sex == 1) {
                    $xsex =  $sex12;
                    // echo "sex : ".$xsex.", ";
                }

                if ($cpt ==  1) {
                    $xcpt = $cpt12;
                    // echo "cpt : ".$xcpt.", ";
                } elseif ($cpt == 2 ) {
                    $xcpt = $cpt22;
                    // echo "cpt : ".$xcpt.", ";
                } elseif ($cpt == 3 ) {
                    $xcpt =  $cpt32;
                    // echo "cpt : ".$xcpt.", ";
                } elseif ($cpt == 4 ) {
                    $xcpt =  $cpt42;
                    // echo "cpt : ".$xcpt.", ";
                }

                if ($rbp <= 110) {
                    $xrbp = $rbp12;
                    // echo "rbp : ".$xrbp.", ";
                } elseif ($rbp >= 111 && $rbp <= 140 ) {
                    $xrbp =  $rbp22;
                    // echo "rbp : ".$xrbp.", ";
                } elseif ($rbp >= 141 && $rbp <= 160 ) {
                    $xrbp =  $rbp32;
                    // echo "rbp : ".$xrbp.", ";
                } elseif ($rbp >= 161) {
                    $xrbp =  $rbp42;
                    // echo "rbp : ".$xrbp.", ";
                }

                if ($sc <= 220) {
                    $xsc = $sc12;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 221 && $sc <= 320 ) {
                    $xsc =  $sc22;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 321 && $sc <= 420 ) {
                    $xsc =  $sc32;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 421 && $sc <= 520 ) {
                    $xsc =  $sc42;
                    // echo "sc : ".$xsc.", ";
                } elseif ($sc >= 521) {
                    $xsc =  $sc52;
                    // echo "sc : ".$xsc.", ";
                } 

                if ($fbs == 0) {
                    $xfbs = $fbs02;
                    // echo "fbs : ".$xfbs.", ";
                } elseif ($fbs == 1) {
                    $xfbs =  $fbs12;
                    // echo "fbs : ".$xfbs.", ";
                }

                if ($rer == 0) {
                    $xrer = $rer02;
                    // echo "rer : ".$xrer.", ";
                } elseif ($rer == 1) {
                    $xrer =  $rer12;
                    // echo "rer : ".$xrer.", ";
                } elseif ($rer == 2) {
                    $xrer =  $rer22;
                    // echo "rer : ".$xrer.", ";
                }

                if ($mhra <= 115) {
                    $xmhra = $mhra12;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 116 && $mhra <= 135 ) {
                    $xmhra =  $mhra22;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 136 && $mhra <= 155 ) {
                    $xmhra =  $mhra32;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 156 && $mhra <= 175 ) {
                    $xmhra =  $mhra42;
                    // echo "mhra : ".$xmhra.", ";
                } elseif ($mhra >= 176) {
                    $xmhra =  $mhra52;
                    // echo "mhra : ".$xmhra.", ";
                }  
                
                if ($eia == 0) {
                    $xeia = $eia02;
                    // echo "eia : ".$xeia.", ";
                } elseif ($eia == 1) {
                    $xeia =  $eia12;
                    // echo "eia : ".$xeia.", ";
                }

                if ($oldpeak <= 1) {
                    $xoldpeak = $oldpeak12;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 1.1 && $oldpeak <= 2 ) {
                    $xoldpeak =  $oldpeak22;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 2.2 && $oldpeak <= 3 ) {
                    $xoldpeak =  $oldpeak32;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 3.3 && $oldpeak <= 4 ) {
                    $xoldpeak =  $oldpeak42;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } elseif ($oldpeak >= 4.1) {
                    $xoldpeak =  $oldpeak52;
                    // echo "oldpeak : ".$xoldpeak.", ";
                } 

                if ($tsoftpests ==  1) {
                    $xts = $ts12;
                    // echo "ts : ".$xts.", ";
                } elseif ($tsoftpests == 2 ) {
                    $xts = $ts22;
                    // echo "ts : ".$xts.", ";
                } elseif ($tsoftpests == 3 ) {
                    $xts = $ts32;
                    // echo "ts : ".$xts.", ";
                }

                if ($nomv ==  0) {
                    $xnomv = $nomv02;
                    // echo "nomv : ".$xnomv.", ";
                } elseif ($nomv == 1 ) {
                    $xnomv = $nomv12;
                    // echo "nomv : ".$xnomv.", ";
                } elseif ($nomv == 2 ) {
                    $xnomv = $nomv22;
                    // echo "nomv : ".$xnomv.", ";
                } elseif ($nomv == 3 ) {
                    $xnomv = $nomv32;
                    // echo "nomv : ".$xnomv.", ";
                }

                if ($thal ==  3) {
                    $xthal = $thal12;
                    // echo "thal : ".$xthal.", ";
                } elseif ($thal == 6 ) {
                    $xthal = $thal22;
                    // echo "thal : ".$xthal.", ";
                } elseif ($thal == 7 ) {
                    $xthal =  $thal32;
                    // echo "thal : ".$xthal.", ";
                }
               
                $pl2 = $xage*$xsex*$xcpt*$xrbp*$xsc*$xfbs*$xrer*$xmhra*$xeia*$xoldpeak*$xts*$xnomv*$xthal;
                echo "P (X | Group = 2) = ".$pl2."<br>";

                if ($pl1 > $pl2){
                    echo "<br>";
                    echo "Jadi, Pasien tidak menderita penyakit jantung";
                    echo "<br>";
                } else if ($pl1 < $pl2) {
                    echo "<br>";
                    echo "Jadi, Pasien menderita penyakit jantung";
                    echo "<br>";
                }
            ?>
            <br>
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
        <div class="w-100"></div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
