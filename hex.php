
<?php

echo "
  _  _              Author : MarsHall            
 | || |_____ __     Team   : Xai Syndicate        
 | __ / -_) \ /     Github : https://github.com/X-MarsHall            
 |_||_\___/_\_\            _    
  / __|___ _ ___ _____ _ _| |_  
 | (__/ _ \ ' \ V / -_) '_|  _| 
  \___\___/_||_\_/\___|_|  \__| 
                                
";
echo "1. Text to Hex\n";
echo "2. Hex to Text\n";
echo "Nomor : ";
$no = trim(fgets(STDIN));

 if($no == '1'){

echo "Text : ";
$str = trim(fgets(STDIN));
echo "Hex ==> ".bin2hex($str)."\n\n";
exit();

} if($no == '2'){

echo "Hex : ";
$strr = trim(fgets(STDIN));
echo "Text ==> ".hex2bin($strr)."\n\n";
exit();

} else {
    echo "Tidak Ada Pilihan\n";
}
?>
