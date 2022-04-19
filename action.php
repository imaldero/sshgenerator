<?php
    if (isset($_POST['submit'])) {
    
      $country = strtoupper($_POST['country']);
      $state = ($_POST['state']);
      $city = ($_POST['city']);
      $org = ($_POST['org']);
      $dep= ($_POST['dep']);
      $cname = ($_POST['cname']);
      $email = ($_POST['email']);
    
    $options_arr = array("private_key_bits" => "2048", "private_key_type" => OPENSSL_KEYTYPE_RSA, "encrypt_key" => true);

    $csr_opt = array('digest_alg' => 'sha256');
    $csr_sign_opt = array("encrypt_key" => true);

    $pkey = openssl_pkey_new($options_arr);

    $dn = array(
    "countryName" => $country,
    "stateOrProvinceName" => $state,
    "localityName" => $city,
    "organizationName" => $org,
    "organizationalUnitName" => $dep,
    "commonName" => $cname,
    "emailAddress" => $email
    );

    $csr = openssl_csr_new($dn, $pkey,$csr_opt);
    if($handle = fopen("ca.crt", 'r')) {
    $ca = fread($handle, 10000);
    fclose($handle);
    }
    if($handle = fopen("capkey.key", 'r')) {
    $capkey = fread($handle, 10000);
    fclose($handle);
    }
  
    $usercert = openssl_csr_sign($csr, $ca, $capkey, 365,$csr_sign_opt);
    openssl_x509_export($usercert, $certout);
    print "<div class='result'><button class='copy-btn'>Copy to clipboard</button><span class='certout'>$certout</span></div>";
  ?>
    <script>
      const copybtn = document.querySelector(".copy-btn");
      copybtn.style.width = 100%
      copybtn.addEventListener("click", function copyText() {
      let copyText = document.querySelector(".certout").textContent;
      console.log(copyText);
      navigator.clipboard.writeText(copyText);
      });

    </script>
  <?php
    $file = fopen("newSignedCert.crt", 'w');
    fwrite($file, $certout);
    fclose($file);
    }  
  ?>
    