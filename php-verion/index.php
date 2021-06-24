<?php
//Edit Your Domain
$sitedomain = "www.chokunplayz.dev";

// DONT TOUCH THE CODE BELOW THIS LINE
// -----------------------------------------------------------------

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}

function getRandomString() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < 16; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}

$ray = getRandomString();

?>

<!DOCTYPE html>
<html class="no-js" lang="en-US"><!--<![endif]--><head>


<title>Error 555 April Fools | Created by ChokunPlayZ</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" id="cf_styles-css" href="style.css" type="text/css" media="screen,projection">


</head>
<body data-new-gr-c-s-check-loaded="8.872.0" data-gr-ext-installed="">
<div id="cf-wrapper">



    <div id="cf-error-details" class="p-0">
        <header class="mx-auto pt-10 lg:pt-6 lg:px-8 w-240 lg:w-full mb-8">
            <h1 class="inline-block sm:block sm:mb-2 font-light text-60 lg:text-4xl text-black-dark leading-tight mr-2">

              <span class="cf-error-type">Error</span>
              <span class="cf-error-code">555</span>
            </h1>
            <span class="inline-block sm:block font-mono text-15 lg:text-sm lg:leading-relaxed">Ray ID: <?php echo $ray; ?> •</span>
            <span class="inline-block sm:block font-mono text-15 lg:text-sm lg:leading-relaxed"><?php echo date("Y-m-d H:i:s"); ?></span>
            <h2 class="text-gray-600 leading-1.3 text-3xl font-light">Invalid April fools certificate</h2>
        </header>

        <div class="my-8 bg-gradient-gray">
            <div class="w-240 lg:w-full mx-auto">
                <div class="clearfix md:px-8">

<div id="cf-browser-status" class=" relative w-1/3 md:w-full py-15 md:p-0 md:py-8 md:text-left md:border-solid md:border-0 md:border-b md:border-gray-400 overflow-hidden float-left md:float-none text-center">
  <div class="relative mb-10 md:m-0">
    <span class="cf-icon-browser block md:hidden h-20 bg-center bg-no-repeat"></span>
    <span class="cf-icon-error w-12 h-12 absolute left-1/2 md:left-auto md:right-0 md:top-0 -ml-6 -bottom-4"></span>
  </div>
  <span class="md:block w-full truncate">You</span>
  <h3 class="md:inline-block mt-3 md:mt-0 text-2xl text-gray-600 font-light leading-1.3">Browser</h3>
  <span class="leading-1.3 text-2xl text-red-error">Error</span>
</div>

<div id="cf-cloudflare-status" class=" relative w-1/3 md:w-full py-15 md:p-0 md:py-8 md:text-left md:border-solid md:border-0 md:border-b md:border-gray-400 overflow-hidden float-left md:float-none text-center">
  <div class="relative mb-10 md:m-0">
    <span class="cf-icon-cloud block md:hidden h-20 bg-center bg-no-repeat"></span>
    <span class="cf-icon-ok w-12 h-12 absolute left-1/2 md:left-auto md:right-0 md:top-0 -ml-6 -bottom-4"></span>
  </div>
  <span class="md:block w-full truncate">Mars</span>
  <h3 class="md:inline-block mt-3 md:mt-0 text-2xl text-gray-600 font-light leading-1.3">Solarflare</h3>
  <span class="leading-1.3 text-2xl text-green-success">Working</span>
</div>

<div id="cf-host-status" class="cf-error-source relative w-1/3 md:w-full py-15 md:p-0 md:py-8 md:text-left md:border-solid md:border-0 md:border-b md:border-gray-400 overflow-hidden float-left md:float-none text-center">
  <div class="relative mb-10 md:m-0">
    <span class="cf-icon-server block md:hidden h-20 bg-center bg-no-repeat"></span>
    <span class="cf-icon-ok w-12 h-12 absolute left-1/2 md:left-auto md:right-0 md:top-0 -ml-6 -bottom-4"></span>
  </div>
  <span class="md:block w-full truncate"><?php echo $sitedomain; ?></span>
  <h3 class="md:inline-block mt-3 md:mt-0 text-2xl text-gray-600 font-light leading-1.3">Host</h3>
  <span class="leading-1.3 text-2xl text-green-success">Working</span>
</div>

                </div>

            </div>
        </div>

        <div class="w-240 lg:w-full mx-auto mb-8 lg:px-8">
            <div class="clearfix">
                <div class="w-1/2 md:w-full float-left pr-6 md:pb-10 md:pr-0 leading-relaxed">
                    <h2 class="text-3xl font-normal leading-1.3 mb-4">What happened?</h2>
                    <p>The origin Solar system does not have correct April Fools Certificate.</p>
                </div>

                <div class="w-1/2 md:w-full float-left leading-relaxed">
                    <h2 class="text-3xl font-normal leading-1.3 mb-4">What can I do?</h2>
                          <h3 class="text-15 font-semibold mb-2">If you're a visitor of this website:</h3>
      <p class="mb-6">Please try again in a few light years.</p>

      <h3 class="text-15 font-semibold mb-2">If you're the owner of this website:</h3>
      <p><span>The April fools certificate presented by the server did not pass
      validation. This could indicate an expired April Fools certificate or a
      certificate that does not include the requested domain name.
      </span> <a rel="noopener noreferrer" href="https://www.chokunplayz.com/aprilfools">Created By ChokunPlayZ</a></p>
                </div>
            </div>

        </div>

        <div class="cf-error-footer cf-wrapper w-240 lg:w-full py-10 sm:py-4 sm:px-8 mx-auto text-center sm:text-left border-solid border-0 border-t border-gray-300">
  <p class="text-13">
    <span class="cf-footer-item sm:block sm:mb-1">Solarflare Ray ID: <strong class="font-semibold"><?php echo $ray; ?></strong></span>
    <span class="cf-footer-separator sm:hidden">•</span>
    <span class="cf-footer-item sm:block sm:mb-1"><span>Your IP</span>: <?php echo $_SERVER["HTTP_CF_CONNECTING_IP"]; ?></span>
    <span class="cf-footer-separator sm:hidden">•</span>
    <span class="cf-footer-item sm:block sm:mb-1"><span>Performance &amp; security by</span> <a rel="noopener noreferrer" href="https://www.chokunplayz.com/aprilfools" id="brand_link" target="_blank">Solarflare</a></span>

  </p>
</div><!-- /.error-footer -->


    </div>
</div>



</body></html>
