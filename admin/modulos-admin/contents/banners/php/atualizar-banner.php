<?php

// pegando dados do do form
$novoBannerDesktop = $_FILES['desktop']; // arquivo para upload
$novoBannerMobile = $_FILES['mobile']; // arquivo para upload
$refBannerDesktop = $_POST['refBannerDesktop']; //coluna do banco
$refBannerMobile = $_POST['refBannerMobile']; //coluna do banco
$nomeBannerDesktop = $_POST['nomeBannerDesktop']; // nome do arquivo para remover
$nomeBannerMobile = $_POST['nomeBannerMobile']; // nome do arquivo para remover


print_r($novoBannerDesktop);
echo '<br>';
print_r($novoBannerMobile);
echo '<br>';
print_r($refBannerDesktop);
echo '<br>';
print_r($refBannerMobile);
echo '<br>';
print_r($nomeBannerDesktop);
echo '<br>';
print_r($nomeBannerMobile);
echo '<br>';





