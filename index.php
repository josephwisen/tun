<?php

function feedback404()
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1><strong>404 Not Found</strong></h1>";
    echo "HASTALAVISTA ~";
}

if (isset($_GET['tunnel'])) {
    $filename = "list.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['tunnel']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    exit();
}


?>

<!-- Script Landing Page -->
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="theme-color" content="">
  <link rel="amphtml" href="https://nasigorengbuntut.pages.dev/?tunnel=<?php echo $BRANDS ?>" />
  <link rel="canonical" href="<?php echo $urlPath ?>">
  <link rel="preconnect" href="https://fonts.shopifycdn.com/" crossorigin>
  <title><?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia</title>
  <meta name="keywords" content="<?php echo $BRANDS ?>"/>
  <meta name="author" content="<?php echo $BRANDS ?>">
  <meta name="distribution" content="<?php echo $BRANDS ?>">
  <meta name="publisher" content="<?php echo $BRANDS ?>">
  <meta name="description" content="<?php echo $BRANDS ?> termasuk kedalam situs link slot gacor nomor 1 di indonesia, dan banyak juga yang bertanya emang boleh hadir di indonesia. daftar dan login link terbaru sekarang juga">
  <meta property="og:site_name" content="<?php echo $BRANDS ?>">
  <meta property="og:url" content="<?php echo $urlPath ?>">
  <meta property="og:title" content="<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia">
  <meta property="og:type" content="product">
  <meta property="og:description" content="<?php echo $BRANDS ?> termasuk kedalam situs link slot gacor nomor 1 di indonesia, dan banyak juga yang bertanya emang boleh hadir di indonesia. daftar dan login link terbaru sekarang juga">
  <meta property="og:image" content="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg">
  <meta property="og:image:secure_url" content="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="800">
  <meta property="og:price:amount" content="10.000">
  <meta property="og:price:currency" content="IDR">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia">
  <meta name="twitter:description" content="<?php echo $BRANDS ?> termasuk kedalam situs link slot gacor nomor 1 di indonesia, dan banyak juga yang bertanya emang boleh hadir di indonesia. daftar dan login link terbaru sekarang juga">


  <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/constants.js?v=58251544750838685771705119265" defer="defer"></script>
  <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/pubsub.js?v=158357773527763999511705119266" defer="defer"></script>
  <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/global.js?v=113367515774722599301705119266" defer="defer"></script>
  <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/animations.js?v=88693664871331136111705119264" defer="defer"></script>
  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
  <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/85569831231/digital_wallets/dialog">
  <link rel="alternate" type="application/json+oembed" href="https://milklshakegacor.myshopify.com/products/slot-maxwin.oembed">
  <script async="async" src="https://pakesiska.perhubungan.jatengprov.go.id/checkouts/internal/preloads.js?permanent-domain=54a542.myshopify.com&amp;locale=en-ID"></script>
  <script id="shopify-features" type="application/json">{"accessToken":"ea832c2fd0e5c061db691cb55802637c","betas":["rich-media-storefront-analytics"],"domain":"milklshakegacor.myshopify.com","predictiveSearch":true,"shopId":85569831231,"smart_payment_buttons_url":"https:\/\/milklshakegacor.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/milklshakegacor.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js","locale":"en","optimusEnabled":true,"optimusHidden":false,"betterDynamicCheckoutRecommendationVariant":"control","shopPromisePDPV3Enabled":true}</script>
  <script>var Shopify = Shopify || {};
    Shopify.shop = "54a542.myshopify.com";
    Shopify.locale = "en";
    Shopify.currency = { "active": "IDR", "rate": "1.0" };
    Shopify.country = "ID";
    Shopify.theme = { "name": "Spotlight", "id": 164574363967, "theme_store_id": 1891, "role": "main" };
    Shopify.theme.handle = "null";
    Shopify.theme.style = { "id": null, "handle": null };
    Shopify.cdnHost = "milklshakegacor.myshopify.com/cdn";
    Shopify.routes = Shopify.routes || {};
    Shopify.routes.root = "/";</script>
  <script type="module">!function (o) { (o.Shopify = o.Shopify || {}).modules = !0 }(window);</script>
  <script>!function (o) { function n() { var o = []; function n() { o.push(Array.prototype.slice.apply(arguments)) } return n.q = o, n } var t = o.Shopify = o.Shopify || {}; t.loadFeatures = n(), t.autoloadFeatures = n() }(window);</script>
  <script id="__st">var __st = { "a": 85569831231, "offset": 25200, "reqid": "f3b9ce71-fcae-4312-b52f-2c2b0d229c80", "pageurl": "milklshakegacor.myshopify.com<?php echo $urlPath ?>", "u": "57ac0a78ca28", "p": "product", "rtyp": "product", "rid": 9101266125119 };</script>
  <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
  <script>!function (o) { o.addEventListener("DOMContentLoaded", function () { window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || { siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9" }; var t = ['form[action*="/contact"] input[name="form_type"][value="contact"]', 'form[action*="/comments"] input[name="form_type"][value="new_comment"]', 'form[action*="/account"] input[name="form_type"][value="customer_login"]', 'form[action*="/account"] input[name="form_type"][value="recover_customer_password"]', 'form[action*="/account"] input[name="form_type"][value="create_customer"]', 'form[action*="/contact"] input[name="form_type"][value="customer"]'].join(","); function n(e) { e = e.target; null == e || null != (e = function e(t, n) { if (null == t.parentElement) return null; if ("FORM" != t.parentElement.tagName) return e(t.parentElement, n); for (var o = t.parentElement.action, r = 0; r < n.length; r++)if (-1 !== o.indexOf(n[r])) return t.parentElement; return null }(e, ["/contact", "/comments", "/account"])) && null != e.querySelector(t) && ((e = o.createElement("script")).setAttribute("src", "https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"), o.body.appendChild(e), o.removeEventListener("focus", n, !0), o.removeEventListener("change", n, !0), o.removeEventListener("click", n, !0)) } o.addEventListener("click", n, !0), o.addEventListener("change", n, !0), o.addEventListener("focus", n, !0) }) }(document);</script>
  <script integrity="" data-source-attribution="shopify.loadfeatures" defer="defer" src="https://milklshakegacor.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js" crossorigin="anonymous"></script>
  <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">var Shopify = Shopify || {}; Shopify.PaymentButton = Shopify.PaymentButton || { isStorefrontPortableWallets: !0, init: function () { window.Shopify.PaymentButton.init = function () { }; var t = document.createElement("script"); t.src = "https://milklshakegacor.myshopify.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t.type = "module", document.head.appendChild(t) } };
  </script>
  <script integrity="" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="https://milklshakegacor.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js" crossorigin="anonymous"></script>
  <script id="sections-script" data-sections="header" defer="defer" src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/compiled_assets/scripts.js?7"></script>

  <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>


  <style data-shopify>
    @font-face {
      font-family: Inter;
      font-weight: 400;
      font-style: normal;
      font-display: swap;
      src: url("https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff2?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&hmac=a5600b3b1a429f02ba2a7bfb9696b2ba5e411aed798e7bd59694bf681753bc65") format("woff2"),
        url("https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n4.5a356a4c1877691cd26008ee4a5c7ada675c80ce.woff?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&hmac=c830cdeb10edbf22dcb5101b2dad6e9c927f96d6e48ee6752f998059e936169e") format("woff");
    }

    @font-face {
      font-family: Inter;
      font-weight: 700;
      font-style: normal;
      font-display: swap;
      src: url("https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n7.50ef4139896edec0637fde057914fbf7e3a8d56e.woff2?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&hmac=cf510de0780ae8692a7f2bdb0d72cbd54b6c695b50cd57fe2cd142c4f7715b27") format("woff2"),
        url("https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n7.194c3d3f64efd8e4c82bbbe83dc84f5893fd9087.woff?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&hmac=93c871e7cf03f76cbabe0aa6a6cd8a88c03520a54919feaf9f59851ec81ca83b") format("woff");
    }



    @font-face {
      font-family: Inter;
      font-weight: 400;
      font-style: normal;
      font-display: swap;
      src: url("https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff2?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&hmac=a5600b3b1a429f02ba2a7bfb9696b2ba5e411aed798e7bd59694bf681753bc65") format("woff2"),
        url("https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n4.5a356a4c1877691cd26008ee4a5c7ada675c80ce.woff?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&hmac=c830cdeb10edbf22dcb5101b2dad6e9c927f96d6e48ee6752f998059e936169e") format("woff");
    }



    :root,
    .color-background-1 {
      --color-background: 255, 255, 255;

      --gradient-background: #ffffff;




      --color-foreground: 18, 18, 18;
      --color-background-contrast: 191, 191, 191;
      --color-shadow: 18, 18, 18;
      --color-button: 252, 228, 119;
      --color-button-text: 18, 18, 18;
      --color-secondary-button: 255, 255, 255;
      --color-secondary-button-text: 18, 18, 18;
      --color-link: 18, 18, 18;
      --color-badge-foreground: 18, 18, 18;
      --color-badge-background: 255, 255, 255;
      --color-badge-border: 18, 18, 18;
      --payment-terms-background-color: rgb(255 255 255);
    }


    .color-background-2 {
      --color-background: 243, 243, 243;

      --gradient-background: #f3f3f3;




      --color-foreground: 18, 18, 18;
      --color-background-contrast: 179, 179, 179;
      --color-shadow: 18, 18, 18;
      --color-button: 18, 18, 18;
      --color-button-text: 243, 243, 243;
      --color-secondary-button: 243, 243, 243;
      --color-secondary-button-text: 18, 18, 18;
      --color-link: 18, 18, 18;
      --color-badge-foreground: 18, 18, 18;
      --color-badge-background: 243, 243, 243;
      --color-badge-border: 18, 18, 18;
      --payment-terms-background-color: rgb(243 243 243);
    }


    .color-inverse {
      --color-background: 36, 40, 51;

      --gradient-background: #242833;




      --color-foreground: 255, 255, 255;
      --color-background-contrast: 47, 52, 66;
      --color-shadow: 18, 18, 18;
      --color-button: 255, 255, 255;
      --color-button-text: 18, 18, 18;
      --color-secondary-button: 36, 40, 51;
      --color-secondary-button-text: 255, 255, 255;
      --color-link: 255, 255, 255;
      --color-badge-foreground: 255, 255, 255;
      --color-badge-background: 36, 40, 51;
      --color-badge-border: 255, 255, 255;
      --payment-terms-background-color: rgb(36 40 51);
    }


    .color-accent-1 {
      --color-background: 18, 18, 18;

      --gradient-background: #121212;




      --color-foreground: 255, 255, 255;
      --color-background-contrast: 146, 146, 146;
      --color-shadow: 18, 18, 18;
      --color-button: 255, 255, 255;
      --color-button-text: 18, 18, 18;
      --color-secondary-button: 18, 18, 18;
      --color-secondary-button-text: 255, 255, 255;
      --color-link: 255, 255, 255;
      --color-badge-foreground: 255, 255, 255;
      --color-badge-background: 18, 18, 18;
      --color-badge-border: 255, 255, 255;
      --payment-terms-background-color: rgb(18 18 18);
    }


    .color-accent-2 {
      --color-background: 185, 0, 0;

      --gradient-background: #b90000;




      --color-foreground: 255, 255, 255;
      --color-background-contrast: 211, 0, 0;
      --color-shadow: 18, 18, 18;
      --color-button: 255, 255, 255;
      --color-button-text: 185, 0, 0;
      --color-secondary-button: 185, 0, 0;
      --color-secondary-button-text: 255, 255, 255;
      --color-link: 255, 255, 255;
      --color-badge-foreground: 255, 255, 255;
      --color-badge-background: 185, 0, 0;
      --color-badge-border: 255, 255, 255;
      --payment-terms-background-color: rgb(185 0 0);
    }


    body,
    .color-background-1,
    .color-background-2,
    .color-inverse,
    .color-accent-1,
    .color-accent-2 {
      color: rgba(var(--color-foreground), 0.75);
      background-color: rgb(var(--color-background));
    }

    :root {
      --font-body-family: Inter, sans-serif;
      --font-body-style: normal;
      --font-body-weight: 400;
      --font-body-weight-bold: 700;

      --font-heading-family: Inter, sans-serif;
      --font-heading-style: normal;
      --font-heading-weight: 400;

      --font-body-scale: 1.0;
      --font-heading-scale: 1.0;

      --media-padding: px;
      --media-border-opacity: 0.0;
      --media-border-width: 0px;
      --media-radius: 4px;
      --media-shadow-opacity: 0.0;
      --media-shadow-horizontal-offset: 0px;
      --media-shadow-vertical-offset: 4px;
      --media-shadow-blur-radius: 5px;
      --media-shadow-visible: 0;

      --page-width: 120rem;
      --page-width-margin: 0rem;

      --product-card-image-padding: 0.0rem;
      --product-card-corner-radius: 1.6rem;
      --product-card-text-alignment: left;
      --product-card-border-width: 0.0rem;
      --product-card-border-opacity: 0.1;
      --product-card-shadow-opacity: 0.0;
      --product-card-shadow-visible: 0;
      --product-card-shadow-horizontal-offset: 0.0rem;
      --product-card-shadow-vertical-offset: 0.4rem;
      --product-card-shadow-blur-radius: 0.5rem;

      --collection-card-image-padding: 0.0rem;
      --collection-card-corner-radius: 1.6rem;
      --collection-card-text-alignment: left;
      --collection-card-border-width: 0.0rem;
      --collection-card-border-opacity: 0.1;
      --collection-card-shadow-opacity: 0.0;
      --collection-card-shadow-visible: 0;
      --collection-card-shadow-horizontal-offset: 0.0rem;
      --collection-card-shadow-vertical-offset: 0.4rem;
      --collection-card-shadow-blur-radius: 0.5rem;

      --blog-card-image-padding: 0.0rem;
      --blog-card-corner-radius: 1.6rem;
      --blog-card-text-alignment: left;
      --blog-card-border-width: 0.0rem;
      --blog-card-border-opacity: 0.1;
      --blog-card-shadow-opacity: 0.0;
      --blog-card-shadow-visible: 0;
      --blog-card-shadow-horizontal-offset: 0.0rem;
      --blog-card-shadow-vertical-offset: 0.4rem;
      --blog-card-shadow-blur-radius: 0.5rem;

      --badge-corner-radius: 0.4rem;

      --popup-border-width: 1px;
      --popup-border-opacity: 1.0;
      --popup-corner-radius: 4px;
      --popup-shadow-opacity: 0.0;
      --popup-shadow-horizontal-offset: 0px;
      --popup-shadow-vertical-offset: 4px;
      --popup-shadow-blur-radius: 5px;

      --drawer-border-width: 1px;
      --drawer-border-opacity: 0.1;
      --drawer-shadow-opacity: 0.0;
      --drawer-shadow-horizontal-offset: 0px;
      --drawer-shadow-vertical-offset: 4px;
      --drawer-shadow-blur-radius: 5px;

      --spacing-sections-desktop: 0px;
      --spacing-sections-mobile: 0px;

      --grid-desktop-vertical-spacing: 16px;
      --grid-desktop-horizontal-spacing: 16px;
      --grid-mobile-vertical-spacing: 8px;
      --grid-mobile-horizontal-spacing: 8px;

      --text-boxes-border-opacity: 0.1;
      --text-boxes-border-width: 0px;
      --text-boxes-radius: 0px;
      --text-boxes-shadow-opacity: 0.0;
      --text-boxes-shadow-visible: 0;
      --text-boxes-shadow-horizontal-offset: 0px;
      --text-boxes-shadow-vertical-offset: 4px;
      --text-boxes-shadow-blur-radius: 5px;

      --buttons-radius: 4px;
      --buttons-radius-outset: 5px;
      --buttons-border-width: 1px;
      --buttons-border-opacity: 1.0;
      --buttons-shadow-opacity: 0.0;
      --buttons-shadow-visible: 0;
      --buttons-shadow-horizontal-offset: 0px;
      --buttons-shadow-vertical-offset: 4px;
      --buttons-shadow-blur-radius: 5px;
      --buttons-border-offset: 0.3px;

      --inputs-radius: 4px;
      --inputs-border-width: 1px;
      --inputs-border-opacity: 1.0;
      --inputs-shadow-opacity: 0.0;
      --inputs-shadow-horizontal-offset: 0px;
      --inputs-margin-offset: 0px;
      --inputs-shadow-vertical-offset: 4px;
      --inputs-shadow-blur-radius: 5px;
      --inputs-radius-outset: 5px;

      --variant-pills-radius: 40px;
      --variant-pills-border-width: 1px;
      --variant-pills-border-opacity: 0.55;
      --variant-pills-shadow-opacity: 0.0;
      --variant-pills-shadow-horizontal-offset: 0px;
      --variant-pills-shadow-vertical-offset: 4px;
      --variant-pills-shadow-blur-radius: 5px;
    }

    *,
    *::before,
    *::after {
      box-sizing: inherit;
    }

    html {
      box-sizing: border-box;
      font-size: calc(var(--font-body-scale) * 62.5%);
      height: 100%;
    }

    body {
      display: grid;
      grid-template-rows: auto auto 1fr auto;
      grid-template-columns: 100%;
      min-height: 100%;
      margin: 0;
      font-size: 1.5rem;
      letter-spacing: 0.06rem;
      line-height: calc(1 + 0.8 / var(--font-body-scale));
      font-family: var(--font-body-family);
      font-style: var(--font-body-style);
      font-weight: var(--font-body-weight);
    }

    @media screen and (min-width: 750px) {
      body {
        font-size: 1.6rem;
      }
    }
  </style>

  <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/base.css?v=74665255914139625521705119264" rel="stylesheet" type="text/css" media="all"/>
  <link rel="preload" as="font" href="https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff2?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&amp;hmac=a5600b3b1a429f02ba2a7bfb9696b2ba5e411aed798e7bd59694bf681753bc65" type="font/woff2" crossorigin>
  <link rel="preload" as="font" href="https://milklshakegacor.myshopify.com/cdn/fonts/inter/inter_n4.481bd4d19704ca98fb1d3abd50c668b6962860a2.woff2?h1=NTRhNTQyLmFjY291bnQubXlzaG9waWZ5LmNvbQ&amp;h2=bWlsa2xzaGFrZWdhY29yLm15c2hvcGlmeS5jb20&amp;hmac=a5600b3b1a429f02ba2a7bfb9696b2ba5e411aed798e7bd59694bf681753bc65" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-predictive-search.css?v=118923337488134913561705119265" media="print" onload="this.media='all'">
  <script>
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    if (Shopify.designMode) {
      document.documentElement.classList.add('shopify-design-mode');
    }
  </script>
  <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
  <script>(function () { if ("sendBeacon" in navigator && "performance" in window) { var session_token = document.cookie.match(/_shopify_s=([^;]*)/); function handle_abandonment_event(e) { var entries = performance.getEntries().filter(function (entry) { return /monorail-edge.shopifysvc.com/.test(entry.name); }); if (!window.abandonment_tracked && entries.length === 0) { window.abandonment_tracked = true; var currentMs = Date.now(); var navigation_start = performance.timing.navigationStart; var payload = { shop_id: 85569831231, url: window.location.href, navigation_start, duration: currentMs - navigation_start, session_token: session_token && session_token.length === 2 ? session_token[1] : "", page_type: "product" }; window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({ schema_id: "online_store_buyer_site_abandonment/1.1", payload: payload, metadata: { event_created_at_ms: currentMs, event_sent_at_ms: currentMs } })); } } window.addEventListener('pagehide', handle_abandonment_event); } }());</script>
  <script id="web-pixels-manager-setup">(function e(e, n, a, t, o, r, i) { var s = null !== e, l = ("function" == typeof BigInt && BigInt.toString().indexOf("[native code]") ? "modern" : "legacy").substring(0, 1), c = t.substring(0, 1); if (s) { window.Shopify = window.Shopify || {}; var d = window.Shopify; d.analytics = d.analytics || {}; var u = d.analytics; u.replayQueue = [], u.publish = function (e, n, a) { u.replayQueue.push([e, n, a]) }; try { self.performance.mark("wpm:start") } catch (e) { } } var p, f, y, h, v, m, w, g, b, _ = [a, "/wpm", "/", c, r, l, ".js"].join(""); f = (p = { src: _, async: !0, onload: function () { if (e) { var a = window.webPixelsManager.init(e); null == n || n(a); var t = window.Shopify.analytics; t.replayQueue.forEach((function (e) { var n = e[0], t = e[1], o = e[2]; a.publishCustomEvent(n, t, o) })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor } }, onerror: function () { var n = (null == e ? void 0 : e.storefrontBaseUrl) ? e.storefrontBaseUrl.replace(/\/$/, "") : self.location.origin, a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"), t = JSON.stringify({ metadata: { event_sent_at_ms: (new Date).getTime() }, events: [{ schema_id: "web_pixels_manager_load/2.0", payload: { version: o || "latest", page_url: self.location.href, status: "failed", error_msg: "".concat(_, " has failed to load") }, metadata: { event_created_at_ms: (new Date).getTime() } }] }); try { if (self.navigator.sendBeacon.bind(self.navigator)(a, t)) return !0 } catch (e) { } var r = new XMLHttpRequest; try { return r.open("POST", a, !0), r.setRequestHeader("Content-Type", "text/plain"), r.send(t), !0 } catch (e) { console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.") } return !1 } }).src, y = p.async, h = void 0 === y || y, v = p.onload, m = p.onerror, w = document.createElement("script"), g = document.head, b = document.body, w.async = h, w.src = f, v && w.addEventListener("load", v), m && w.addEventListener("error", m), g ? g.appendChild(w) : b ? b.appendChild(w) : console.error("Did not find a head or body element to append the script") })({ shopId: 85569831231, storefrontBaseUrl: "https://milklshakegacor.myshopify.com", cdnBaseUrl: "https://milklshakegacor.myshopify.com/cdn", surface: "storefront-renderer", enabledBetaFlags: ["web_pixels_async_pixel_refactor", "web_pixels_manager_performance_improvement"], webPixelsConfigList: [{ "id": "shopify-app-pixel", "configuration": "{}", "eventPayloadVersion": "v1", "runtimeContext": "STRICT", "scriptVersion": "0570", "apiClientId": "shopify-pixel", "type": "APP" }, { "id": "shopify-custom-pixel", "eventPayloadVersion": "v1", "runtimeContext": "LAX", "scriptVersion": "0570", "apiClientId": "shopify-pixel", "type": "CUSTOM" }], initData: { "cart": null, "checkout": null, "customer": null, "productVariants": [{ "id": "47556382392639", "image": { "src": "https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg" }, "price": { "amount": 150.0, "currencyCode": "IDR" }, "product": { "id": "9101266125119", "title": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "untranslatedTitle": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "url": "<?php echo $urlPath ?>", "vendor": "Slot Gacor", "type": "" }, "sku": "", "title": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "untranslatedTitle": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia" }] }, }, function pageEvents(webPixelsManagerAPI) { webPixelsManagerAPI.publish("page_viewed"); webPixelsManagerAPI.publish("product_viewed", { "productVariant": { "id": "47556382392639", "image": { "src": "https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg" }, "price": { "amount": 150.0, "currencyCode": "IDR" }, "product": { "id": "9101266125119", "title": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "untranslatedTitle": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "url": "<?php echo $urlPath ?>", "vendor": "Slot Gacor", "type": "" }, "sku": "", "title": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "untranslatedTitle": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia" } }); }, "https://milklshakegacor.myshopify.com/cdn", "browser", "0.0.415", "08d9d536wbc499b5ep9e0ec6b9m18e2802a", ["web_pixels_async_pixel_refactor", "web_pixels_manager_performance_improvement"]);</script>
  <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
    window.ShopifyAnalytics.meta.currency = 'IDR';
    var meta = { "product": { "id": 9101266125119, "gid": "gid:\/\/shopify\/Product\/9101266125119", "vendor": "Slot Gacor", "type": "", "variants": [{ "id": 47556382392639, "price": 15000, "name": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "public_title": null, "sku": "" }] }, "page": { "pageType": "product", "resourceType": "product", "resourceId": 9101266125119 } };
    for (var attr in meta) {
      window.ShopifyAnalytics.meta[attr] = meta[attr];
    }</script>
  <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

    };
  </script>
  <script class="analytics">(function () {
      var customDocumentWrite = function (content) {
        var jquery = null;

        if (window.jQuery) {
          jquery = window.jQuery;
        } else if (window.Checkout && window.Checkout.$) {
          jquery = window.Checkout.$;
        }

        if (jquery) {
          jquery('body').append(content);
        }
      };

      var hasLoggedConversion = function (token) {
        if (token) {
          return document.cookie.indexOf('loggedConversion=' + token) !== -1;
        }
        return false;
      }

      var setCookieIfConversion = function (token) {
        if (token) {
          var twoMonthsFromNow = new Date(Date.now());
          twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

          document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
        }
      }

      var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
      if (trekkie.integrations) {
        return;
      }
      trekkie.methods = [
        'identify',
        'page',
        'ready',
        'track',
        'trackForm',
        'trackLink'
      ];
      trekkie.factory = function (method) {
        return function () {
          var args = Array.prototype.slice.call(arguments);
          args.unshift(method);
          trekkie.push(args);
          return trekkie;
        };
      };
      for (var i = 0; i < trekkie.methods.length; i++) {
        var key = trekkie.methods[i];
        trekkie[key] = trekkie.factory(key);
      }
      trekkie.load = function (config) {
        trekkie.config = config || {};
        trekkie.config.initialDocumentCookie = document.cookie;
        var first = document.getElementsByTagName('script')[0];
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.onerror = function (e) {
          var scriptFallback = document.createElement('script');
          scriptFallback.type = 'text/javascript';
          scriptFallback.onerror = function (error) {
            var Monorail = {
              produce: function produce(monorailDomain, schemaId, payload) {
                var currentMs = new Date().getTime();
                var event = {
                  schema_id: schemaId,
                  payload: payload,
                  metadata: {
                    event_created_at_ms: currentMs,
                    event_sent_at_ms: currentMs
                  }
                };
                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
              },
              sendRequest: function sendRequest(endpointUrl, payload) {
                // Try the sendBeacon API
                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                  var blobData = new window.Blob([payload], {
                    type: 'text/plain'
                  });

                  if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                    return true;
                  } // sendBeacon was not successful

                } // XHR beacon

                var xhr = new XMLHttpRequest();

                try {
                  xhr.open('POST', endpointUrl);
                  xhr.setRequestHeader('Content-Type', 'text/plain');
                  xhr.send(payload);
                } catch (e) {
                  console.log(e);
                }

                return false;
              },
              isIos12: function isIos12() {
                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
              }
            };
            Monorail.produce('monorail-edge.shopifysvc.com',
              'trekkie_storefront_load_errors/1.1',
              {
                shop_id: 85569831231,
                theme_id: 164574363967,
                app_name: "storefront",
                context_url: window.location.href,
                source_url: "https://milklshakegacor.myshopify.com/cdn/s/trekkie.storefront.f2da2901761ed691d459433ada0e4d90e085713c.min.js"
              });

          };
          scriptFallback.async = true;
          scriptFallback.src = 'https://milklshakegacor.myshopify.com/cdn/s/trekkie.storefront.f2da2901761ed691d459433ada0e4d90e085713c.min.js';
          first.parentNode.insertBefore(scriptFallback, first);
        };
        script.async = true;
        script.src = 'https://milklshakegacor.myshopify.com/cdn/s/trekkie.storefront.f2da2901761ed691d459433ada0e4d90e085713c.min.js';
        first.parentNode.insertBefore(script, first);
      };
      trekkie.load(
        { "Trekkie": { "appName": "storefront", "development": false, "defaultAttributes": { "shopId": 85569831231, "isMerchantRequest": null, "themeId": 164574363967, "themeCityHash": "2171645615669078393", "contentLanguage": "en", "currency": "IDR" }, "isServerSideCookieWritingEnabled": true, "monorailRegion": "shop_domain" }, "Session Attribution": {}, "S2S": { "facebookCapiEnabled": false, "source": "trekkie-storefront-renderer" } }
      );

      var loaded = false;
      trekkie.ready(function () {
        if (loaded) return;
        loaded = true;

        window.ShopifyAnalytics.lib = window.trekkie;


        var originalDocumentWrite = document.write;
        document.write = customDocumentWrite;
        try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch (error) { };
        document.write = originalDocumentWrite;

        window.ShopifyAnalytics.lib.page(null, { "pageType": "product", "resourceType": "product", "resourceId": 9101266125119 });

        var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
        var token = match ? match[1] : undefined;
        if (!hasLoggedConversion(token)) {
          setCookieIfConversion(token);
          window.ShopifyAnalytics.lib.track("Viewed Product", { "currency": "IDR", "variantId": 47556382392639, "productId": 9101266125119, "productGid": "gid:\/\/shopify\/Product\/9101266125119", "name": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "price": "150.00", "sku": "", "brand": "Slot Gacor", "variant": null, "category": "", "nonInteraction": true });
          window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1", { "currency": "IDR", "variantId": 47556382392639, "productId": 9101266125119, "productGid": "gid:\/\/shopify\/Product\/9101266125119", "name": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia", "price": "150.00", "sku": "", "brand": "Slot Gacor", "variant": null, "category": "", "nonInteraction": true, "referer": "<?php echo $urlPath ?>" });
        }
      });


      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "https://milklshakegacor.myshopify.com/cdn/shopifycloud/shopify/assets/shop_events_listener-a7c63dba65ccddc484f77541dc8ca437e60e1e9e297fe1c3faebf6523a0ede9b.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

    })();</script>
  <script class="boomerang">
    (function () {
      if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
        return;
      }
      window.BOOMR = window.BOOMR || {};
      window.BOOMR.snippetStart = new Date().getTime();
      window.BOOMR.snippetExecuted = true;
      window.BOOMR.snippetVersion = 12;
      window.BOOMR.application = "storefront-renderer";
      window.BOOMR.themeName = "Spotlight";
      window.BOOMR.themeVersion = "12.0.0";
      window.BOOMR.shopId = 85569831231;
      window.BOOMR.themeId = 164574363967;
      window.BOOMR.renderRegion = "gcp-us-central1";
      window.BOOMR.url =
        "https://milklshakegacor.myshopify.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
      var where = document.currentScript || document.getElementsByTagName("script")[0];
      var parentNode = where.parentNode;
      var promoted = false;
      var LOADER_TIMEOUT = 3000;
      function promote() {
        if (promoted) {
          return;
        }
        var script = document.createElement("script");
        script.id = "boomr-scr-as";
        script.src = window.BOOMR.url;
        script.async = true;
        parentNode.appendChild(script);
        promoted = true;
      }
      function iframeLoader(wasFallback) {
        promoted = true;
        var dom, bootstrap, iframe, iframeStyle;
        var doc = document;
        var win = window;
        window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
        bootstrap = function (parent, scriptId) {
          var script = doc.createElement("script");
          script.id = scriptId || "boomr-if-as";
          script.src = window.BOOMR.url;
          BOOMR_lstart = new Date().getTime();
          parent = parent || doc.body;
          parent.appendChild(script);
        };
        if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
          window.BOOMR.snippetMethod = "s";
          bootstrap(parentNode, "boomr-async");
          return;
        }
        iframe = document.createElement("IFRAME");
        iframe.src = "about:blank";
        iframe.title = "";
        iframe.role = "presentation";
        iframe.loading = "eager";
        iframeStyle = (iframe.frameElement || iframe).style;
        iframeStyle.width = 0;
        iframeStyle.height = 0;
        iframeStyle.border = 0;
        iframeStyle.display = "none";
        parentNode.appendChild(iframe);
        try {
          win = iframe.contentWindow;
          doc = win.document.open();
        } catch (e) {
          dom = document.domain;
          iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
          win = iframe.contentWindow;
          doc = win.document.open();
        }
        if (dom) {
          doc._boomrl = function () {
            this.domain = dom;
            bootstrap();
          };
          doc.write("<body onload='document._boomrl();'>");
        } else {
          win._boomrl = function () {
            bootstrap();
          };
          if (win.addEventListener) {
            win.addEventListener("load", win._boomrl, false);
          } else if (win.attachEvent) {
            win.attachEvent("onload", win._boomrl);
          }
        }
        doc.close();
      }
      var link = document.createElement("link");
      if (link.relList &&
        typeof link.relList.supports === "function" &&
        link.relList.supports("preload") &&
        ("as" in link)) {
        window.BOOMR.snippetMethod = "p";
        link.href = window.BOOMR.url;
        link.rel = "preload";
        link.as = "script";
        link.addEventListener("load", promote);
        link.addEventListener("error", function () {
          iframeLoader(true);
        });
        setTimeout(function () {
          if (!promoted) {
            iframeLoader(true);
          }
        }, LOADER_TIMEOUT);
        BOOMR_lstart = new Date().getTime();
        parentNode.appendChild(link);
      } else {
        iframeLoader(false);
      }
      function boomerangSaveLoadTime(e) {
        window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
      }
      if (window.addEventListener) {
        window.addEventListener("load", boomerangSaveLoadTime, false);
      } else if (window.attachEvent) {
        window.attachEvent("onload", boomerangSaveLoadTime);
      }
      if (document.addEventListener) {
        document.addEventListener("onBoomerangLoaded", function (e) {
          e.detail.BOOMR.init({
            ResourceTiming: {
              enabled: true,
              trackedResourceTypes: ["script", "img", "css"]
            },
          });
          e.detail.BOOMR.t_end = new Date().getTime();
        });
      } else if (document.attachEvent) {
        document.attachEvent("onpropertychange", function (e) {
          if (!e) e = event;
          if (e.propertyName === "onBoomerangLoaded") {
            e.detail.BOOMR.init({
              ResourceTiming: {
                enabled: true,
                trackedResourceTypes: ["script", "img", "css"]
              },
            });
            e.detail.BOOMR.t_end = new Date().getTime();
          }
        });
      }
    })();</script>
</head>

<body>
  <a class="skip-to-content-link button visually-hidden" href="#MainContent">
    Skip to content
  </a><!-- BEGIN sections: header-group -->
  <div id="shopify-section-sections--21917908730175__header" class="shopify-section shopify-section-group-header-group section-header">
    <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991705119265" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851705119265" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271705119265" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221705119265" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771705119265" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101705119265" media="print" onload="this.media='all'"><noscript>
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991705119265" rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851705119265" rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271705119265" rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript><link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221705119265" rel="stylesheet" type="text/css" media="all"/>
    </noscript>
    <noscript>
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771705119265" rel="stylesheet" type="text/css" media="all"/>
    </noscript>

    <style>
      header-drawer {
        justify-self: start;
        margin-left: -1.2rem;
      }

      @media screen and (min-width: 990px) {
        header-drawer {
          display: none;
        }
      }

      .menu-drawer-container {
        display: flex;
      }

      .list-menu {
        list-style: none;
        padding: 0;
        margin: 0;
      }

      .list-menu--inline {
        display: inline-flex;
        flex-wrap: wrap;
      }

      summary.list-menu__item {
        padding-right: 2.7rem;
      }

      .list-menu__item {
        display: flex;
        align-items: center;
        line-height: calc(1 + 0.3 / var(--font-body-scale));
      }

      .list-menu__item--link {
        text-decoration: none;
        padding-bottom: 1rem;
        padding-top: 1rem;
        line-height: calc(1 + 0.8 / var(--font-body-scale));
      }

      @media screen and (min-width: 750px) {
        .list-menu__item--link {
          padding-bottom: 0.5rem;
          padding-top: 0.5rem;
        }
      }
    </style>
    <style data-shopify>
      .header {
        padding: 18px 3rem 6px 3rem;
      }

      .section-header {
        position: sticky;
        /* This is for fixing a Safari z-index issue. PR #2147 */
        margin-bottom: 0px;
      }

      @media screen and (min-width: 750px) {
        .section-header {
          margin-bottom: 0px;
        }
      }

      @media screen and (min-width: 990px) {
        .header {
          padding-top: 36px;
          padding-bottom: 12px;
        }
      }
    </style>
    <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/details-disclosure.js?v=13653116266235556501705119266" defer="defer"></script>
    <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/details-modal.js?v=25581673532751508451705119266" defer="defer"></script>
    <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/cart-notification.js?v=133508293167896966491705119264" defer="defer"></script>
    <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/search-form.js?v=133129549252120666541705119266" defer="defer"></script><svg xmlns="http://www.w3.org/2000/svg" class="hidden">
      <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor"/>
      </symbol>

      <symbol id="icon-reset" class="icon icon-close" fill="none" viewbox="0 0 18 18" stroke="currentColor">
        <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2"/>
        <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
        <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)"/>
      </symbol>

      <symbol id="icon-close" class="icon icon-close" fill="none" viewbox="0 0 18 17">
        <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
      </symbol>
    </svg><sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-background-1 gradient">
      <header class="header header--middle-left header--mobile-center page-width">

        <details-modal class="header__search">
          <details>
            <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
              <span>
                <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
                  <use href="#icon-search">
                </svg>
                <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
                  <use href="#icon-close">
                </svg>
              </span>
            </summary>
            <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
              <div class="modal-overlay"></div>
              <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><predictive-search class="search-modal__form" data-loading-text="Loading...">
                  <form action="pakesiska.perhubungan.jatengprov.go.id/search" method="get" role="search" class="search search-modal__form">
                    <div class="field">
                      <input class="search__input field__input" id="Search-In-Modal-1" type="search" name="q" value="" placeholder="Search" role="combobox" aria-expanded="false" aria-owns="predictive-search-results" aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false">
                      <label class="field__label" for="Search-In-Modal-1">Search</label>
                      <input type="hidden" name="options[prefix]" value="last">
                      <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                        <svg class="icon icon-close" aria-hidden="true" focusable="false">
                          <use xlink:href="<?php echo $urlPath ?>#icon-reset">
                        </svg>
                      </button>
                      <button class="search__button field__button" aria-label="Search">
                        <svg class="icon icon-search" aria-hidden="true" focusable="false">
                          <use href="#icon-search">
                        </svg>
                      </button>
                    </div>
                    <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

                      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481705119265" rel="stylesheet" type="text/css" media="all"/>

                      <div class="predictive-search__loading-state">
                        <svg aria-hidden="true" focusable="false" class="spinner" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                          <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                        </svg>
                      </div>
                    </div>

                    <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                  </form>
                </predictive-search><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                  <svg class="icon icon-close" aria-hidden="true" focusable="false">
                    <use href="#icon-close">
                  </svg>
                </button>
              </div>
            </div>
          </details>
        </details-modal>
        <a href="pakesiska.perhubungan.jatengprov.go.id/" class="header__heading-link link link--text focus-inset">
          <div class="header__heading-logo-wrapper">

            <img src="https://a.top4top.io/p_2546u9jeo1.png?v=1705119590&amp;width=600" alt="Slot Gacor" srcset="https://a.top4top.io/p_2546u9jeo1.png?v=1705119590&amp;width=300 300w, https://a.top4top.io/p_2546u9jeo1.png?v=1705119590&amp;width=450 450w, https://a.top4top.io/p_2546u9jeo1.png?v=1705119590&amp;width=600 600w" width="300" height="87.0" loading="eager" class="header__heading-logo motion-reduce" sizes="(max-width: 600px) 50vw, 300px">
          </div>
        </a>
        <div class="header__icons header__icons--localization header-localization">
          <div class="desktop-localization-wrapper">
          </div>


          <details-modal class="header__search">
            <details>
              <summary class="header__icon header__icon--search header__icon--summary link focus-inset modal__toggle" aria-haspopup="dialog" aria-label="Search">
                <span>
                  <svg class="modal__toggle-open icon icon-search" aria-hidden="true" focusable="false">
                    <use href="#icon-search">
                  </svg>
                  <svg class="modal__toggle-close icon icon-close" aria-hidden="true" focusable="false">
                    <use href="#icon-close">
                  </svg>
                </span>
              </summary>
              <div class="search-modal modal__content gradient" role="dialog" aria-modal="true" aria-label="Search">
                <div class="modal-overlay"></div>
                <div class="search-modal__content search-modal__content-bottom" tabindex="-1"><predictive-search class="search-modal__form" data-loading-text="Loading...">
                    <form action="pakesiska.perhubungan.jatengprov.go.id/search" method="get" role="search" class="search search-modal__form">
                      <div class="field">
                        <input class="search__input field__input" id="Search-In-Modal" type="search" name="q" value="" placeholder="Search" role="combobox" aria-expanded="false" aria-owns="predictive-search-results" aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false">
                        <label class="field__label" for="Search-In-Modal">Search</label>
                        <input type="hidden" name="options[prefix]" value="last">
                        <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                          <svg class="icon icon-close" aria-hidden="true" focusable="false">
                            <use xlink:href="<?php echo $urlPath ?>#icon-reset">
                          </svg>
                        </button>
                        <button class="search__button field__button" aria-label="Search">
                          <svg class="icon icon-search" aria-hidden="true" focusable="false">
                            <use href="#icon-search">
                          </svg>
                        </button>
                      </div>
                      <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>

                        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481705119265" rel="stylesheet" type="text/css" media="all"/>

                        <div class="predictive-search__loading-state">
                          <svg aria-hidden="true" focusable="false" class="spinner" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                          </svg>
                        </div>
                      </div>

                      <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                    </form>
                  </predictive-search><button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                    <svg class="icon icon-close" aria-hidden="true" focusable="false">
                      <use href="#icon-close">
                    </svg>
                  </button>
                </div>
              </div>
            </details>
          </details-modal>

          <a href="pakesiska.perhubungan.jatengprov.go.id/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble"><svg class="icon icon-cart-empty" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 40 40" fill="none">
              <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd"/>
            </svg>
            <span class="visually-hidden">Cart</span></a>
        </div>
      </header>
    </sticky-header>

    <cart-notification>
      <div class="cart-notification-wrapper page-width">
        <div id="cart-notification" class="cart-notification focus-inset color-background-1 gradient" aria-modal="true" aria-label="Item added to your cart" role="dialog" tabindex="-1">
          <div class="cart-notification__header">
            <h2 class="cart-notification__heading caption-large text-body"><svg class="icon icon-checkmark" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 12 9" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.35.643a.5.5 0 01.006.707l-6.77 6.886a.5.5 0 01-.719-.006L.638 4.845a.5.5 0 11.724-.69l2.872 3.011 6.41-6.517a.5.5 0 01.707-.006h-.001z" fill="currentColor"/>
              </svg>
              Item added to your cart
            </h2>
            <button type="button" class="cart-notification__close modal__close-button link link--text focus-inset" aria-label="Close">
              <svg class="icon icon-close" aria-hidden="true" focusable="false">
                <use href="#icon-close">
              </svg>
            </button>
          </div>
          <div id="cart-notification-product" class="cart-notification-product"></div>
          <div class="cart-notification__links">
            <a href="pakesiska.perhubungan.jatengprov.go.id/cart" id="cart-notification-button" class="button button--secondary button--full-width">View
              cart</a>
            <form action="pakesiska.perhubungan.jatengprov.go.id/cart" method="post" id="cart-notification-form">
              <button class="button button--primary button--full-width" name="checkout">
                Check out
              </button>
            </form>
            <button type="button" class="link button-label">Continue shopping</button>
          </div>
        </div>
      </div>
    </cart-notification>
    <style data-shopify>
      .cart-notification {
        display: none;
      }
    </style>


    <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Slot Gacor",
    
      "logo": "https:\/\/milklshakegacor.myshopify.com\/cdn\/shop\/files\/milkshake-gerage.webp?v=1705119590\u0026width=500",
    
    "sameAs": [
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      ""
    ],
    "url": "https:\/\/milklshakegacor.myshopify.com"
  }
</script>
  </div>
  <!-- END sections: header-group -->

  <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <section id="shopify-section-template--21917908042047__main" class="shopify-section section">
      <section id="MainProduct-template--21917908042047__main" class="section-template--21917908042047__main-padding gradient color-background-1" data-section="template--21917908042047__main">
        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/section-main-product.css?v=141059467971401676601705119267" rel="stylesheet" type="text/css" media="all"/>
        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-accordion.css?v=180964204318874863811705119265" rel="stylesheet" type="text/css" media="all"/>
        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101705119265" rel="stylesheet" type="text/css" media="all"/>
        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-slider.css?v=142503135496229589681705119265" rel="stylesheet" type="text/css" media="all"/>
        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-rating.css?v=157771854592137137841705119265" rel="stylesheet" type="text/css" media="all"/>
        <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-deferred-media.css?v=14096082462203297471705119265" rel="stylesheet" type="text/css" media="all"/>
        <style data-shopify>
          .section-template--21917908042047__main-padding {
            padding-top: 12px;
            padding-bottom: 0px;
          }

          @media screen and (min-width: 750px) {
            .section-template--21917908042047__main-padding {
              padding-top: 16px;
              padding-bottom: 0px;
            }
          }
        </style>
        <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/product-info.js?v=81873523020508815201705119266" defer="defer"></script>
        <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/product-form.js?v=133081758708377679181705119266" defer="defer"></script>

        <div class="page-width">
          <div class="product product--large product--left product--stacked product--mobile-hide grid grid--1-col grid--2-col-tablet">
            <div class="grid__item product__media-wrapper">

              <media-gallery id="MediaGallery-template--21917908042047__main" role="region" aria-label="Gallery Viewer" data-desktop-layout="stacked">
                <div id="GalleryStatus-template--21917908042047__main" class="visually-hidden" role="status"></div>
                <slider-component id="GalleryViewer-template--21917908042047__main" class="slider-mobile-gutter"><a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--21917908042047__main">
                    Skip to product information
                  </a>
                  <ul id="Slider-Gallery-template--21917908042047__main" class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile" role="list">
                    <li id="Slide-template--21917908042047__main-36389209342271" class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in" data-media-id="template--21917908042047__main-36389209342271">

                      <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient" style="--ratio: 1.0; --preview-ratio: 1.0;">
                        <noscript>
                          <div class="product__media media">
                            <img src="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1946" alt="Slot Gacor" srcset="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=246 246w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=493 493w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=600 600w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=713 713w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=823 823w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=990 990w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1100 1100w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1206 1206w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1346 1346w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1426 1426w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1646 1646w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1946 1946w" width="1946" height="1946" sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                          </div>
                        </noscript>

                        <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--21917908042047__main">
                          <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true"><svg aria-hidden="true" focusable="false" class="icon icon-plus" width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor"/>
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor"/>
                            </svg>
                          </span>

                          <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481705119265" rel="stylesheet" type="text/css" media="all"/>

                          <div class="loading__spinner hidden">
                            <svg aria-hidden="true" focusable="false" class="spinner" viewbox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                              <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                            </svg>
                          </div>
                          <div class="product__media media media--transparent">
                            <img src="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1946" alt="Slot Gacor" srcset="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=246 246w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=493 493w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=600 600w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=713 713w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=823 823w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=990 990w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1100 1100w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1206 1206w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1346 1346w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1426 1426w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1646 1646w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1946 1946w" width="1946" height="1946" class="image-magnify-lightbox" sizes="(min-width: 1200px) 715px, (min-width: 990px) calc(65.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                          </div>
                          <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="36389209342271">
                            <span class="visually-hidden">
                              Open media 1 in modal
                            </span>
                          </button>
                        </modal-opener>
                      </div>

                    </li>
                  </ul>
                  <div class="slider-buttons no-js-hidden quick-add-hidden small-hide">
                    <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewbox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
                      </svg>

                    </button>
                    <div class="slider-counter caption">
                      <span class="slider-counter--current">1</span>
                      <span aria-hidden="true"> / </span>
                      <span class="visually-hidden">of</span>
                      <span class="slider-counter--total">1</span>
                    </div>
                    <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
                      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewbox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
                      </svg>

                    </button>
                  </div>
                </slider-component>
              </media-gallery>

            </div>
            <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
              <product-info id="ProductInfo-template--21917908042047__main" data-section="template--21917908042047__main" data-url="<?php echo $urlPath ?>" class="product__info-container">
                <div class="product__title">
                  <h1><?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia</h1>
                  <a href="<?php echo $urlPath ?>" class="product__title">
                    <h2 class="h1"><?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia</h2>
                  </a>
                </div>
                <div class="product__description rte quick-add-hidden">
                  <p><a href="https://nasgorbetutama.shop/?ref=porsijumbo" title="<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia"><img alt="Slot Gacor" src="https://cdn.shopify.com/s/files/1/0582/7431/6378/files/daftar-sekarang-juga_480x480.gif?v=1703489942" width="364" height="141"></a></p>
                  <p><?php echo $BRANDS ?>, varian populer dari Gates of Olympus Slot Gacor Maxwin Hari Ini, dikenal sering memberikan kemenangan besar dengan pengali tinggi disetiap putaranya. Fitur unggulannya, seperti spin cepat, turbo spin, dan spin otomatis, hal ini mempercepat perputaran gulungan dan mengubah pola permainan untuk mencapai perkalian instan dengan nilai pengali tinggi  lebih cepat setiap 15 putaran. <?php echo $BRANDS ?> memiliki reputasi kemenangan yang tinggi, <?php echo $BRANDS ?> Gacor Maxine favorit bagi para pemain yang mencari keuntungan maksimal dalam setiap sesi permainan <?php echo $BRANDS ?>.</div>
                <div class="no-js-hidden" id="price-template--21917908042047__main" role="status">
                  <div class="
    price price--large price--sold-out price--show-badge">
                    <div class="price__container">
                      <div class="price__regular"><span class="visually-hidden visually-hidden--inline">Regular
                          price</span>
                        <span class="price-item price-item--regular">
                          Rp 10.000 IDR
                        </span>
                      </div>
                      <div class="price__sale">
                        <span class="visually-hidden visually-hidden--inline">Regular price</span>
                        <span>
                          <s class="price-item price-item--regular">

                            Rp 75,00 IDR

                          </s>
                        </span><span class="visually-hidden visually-hidden--inline">Sale price</span>
                        <span class="price-item price-item--sale price-item--last">
                          Rp 10.000 IDR
                        </span>
                      </div>
                      <small class="unit-price caption hidden">
                        <span class="visually-hidden">Unit price</span>
                        <span class="price-item price-item--last">
                          <span></span>
                          <span aria-hidden="true">/</span>
                          <span class="visually-hidden">&nbsp;per&nbsp;</span>
                          <span>
                          </span>
                        </span>
                      </small>
                    </div><span class="badge price__badge-sale color-accent-1">
                      Sale
                    </span>

                    <span class="badge price__badge-sold-out color-inverse">
                      Sold out
                    </span>
                  </div>
                </div>
                <div class="product__tax caption rte"></div>
                <div>
                  <form method="post" action="pakesiska.perhubungan.jatengprov.go.id/cart/add" id="product-form-installment-template--21917908042047__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data"><input type="hidden" name="form_type" value="product"/><input type="hidden" name="utf8" value="✓"/><input type="hidden" name="id" value="47556382392639">

                    <input type="hidden" name="product-id" value="9101266125119"/>
                  </form>
                </div>
                <noscript class="product-form__noscript-wrapper-template--21917908042047__main">
                  <div class="product-form__input hidden">
                    <label class="form__label" for="Variants-template--21917908042047__main">Product variants</label>
                    <div class="select">
                      <select name="id" id="Variants-template--21917908042047__main" class="select__select" form="product-form-template--21917908042047__main">
                        <option selected="selected" disabled value="47556382392639"><?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia - Rp 10.000 - Sold out
                        </option>
                      </select>
                      <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewbox="0 0 10 6">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
                      </svg>

                    </div>
                  </div>
                </noscript>



                <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/share.js?v=13024540447964430191705119267" defer="defer"></script>

                <share-button id="Share-template--21917908042047__main" class="share-button quick-add-hidden">
                  <button class="share-button__button hidden">
                    <svg width="13" height="12" viewbox="0 0 13 12" class="icon icon-share" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                      <path d="M1.625 8.125V10.2917C1.625 10.579 1.73914 10.8545 1.9423 11.0577C2.14547 11.2609 2.42102 11.375 2.70833 11.375H10.2917C10.579 11.375 10.8545 11.2609 11.0577 11.0577C11.2609 10.8545 11.375 10.579 11.375 10.2917V8.125" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.14775 1.27137C6.34301 1.0761 6.65959 1.0761 6.85485 1.27137L9.56319 3.9797C9.75845 4.17496 9.75845 4.49154 9.56319 4.6868C9.36793 4.88207 9.05135 4.88207 8.85609 4.6868L6.5013 2.33203L4.14652 4.6868C3.95126 4.88207 3.63468 4.88207 3.43942 4.6868C3.24415 4.49154 3.24415 4.17496 3.43942 3.9797L6.14775 1.27137Z" fill="currentColor"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 1.125C6.77614 1.125 7 1.34886 7 1.625V8.125C7 8.40114 6.77614 8.625 6.5 8.625C6.22386 8.625 6 8.40114 6 8.125V1.625C6 1.34886 6.22386 1.125 6.5 1.125Z" fill="currentColor"/></svg>

                    Share
                  </button>
                  <details id="Details-share-template--21917908042047__main">
                    <summary class="share-button__button">
                      <svg width="13" height="12" viewbox="0 0 13 12" class="icon icon-share" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                        <path d="M1.625 8.125V10.2917C1.625 10.579 1.73914 10.8545 1.9423 11.0577C2.14547 11.2609 2.42102 11.375 2.70833 11.375H10.2917C10.579 11.375 10.8545 11.2609 11.0577 11.0577C11.2609 10.8545 11.375 10.579 11.375 10.2917V8.125" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.14775 1.27137C6.34301 1.0761 6.65959 1.0761 6.85485 1.27137L9.56319 3.9797C9.75845 4.17496 9.75845 4.49154 9.56319 4.6868C9.36793 4.88207 9.05135 4.88207 8.85609 4.6868L6.5013 2.33203L4.14652 4.6868C3.95126 4.88207 3.63468 4.88207 3.43942 4.6868C3.24415 4.49154 3.24415 4.17496 3.43942 3.9797L6.14775 1.27137Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 1.125C6.77614 1.125 7 1.34886 7 1.625V8.125C7 8.40114 6.77614 8.625 6.5 8.625C6.22386 8.625 6 8.40114 6 8.125V1.625C6 1.34886 6.22386 1.125 6.5 1.125Z" fill="currentColor"/>
                      </svg>

                      Share
                    </summary>
                    <div class="share-button__fallback motion-reduce">
                      <div class="field">
                        <span id="ShareMessage-template--21917908042047__main" class="share-button__message hidden" role="status"> </span>
                        <input type="text" class="field__input" id="ShareUrl-template--21917908042047__main" value="<?php echo $urlPath ?>" placeholder="Link" onclick="this.select();" readonly>
                        <label class="field__label" for="ShareUrl-template--21917908042047__main">Link</label>
                      </div>
                      <button class="share-button__close hidden no-js-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close" fill="none" viewbox="0 0 18 17">
                          <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
                        </svg>

                        <span class="visually-hidden">Close share</span>
                      </button>
                      <button class="share-button__copy no-js-hidden">
                        <svg class="icon icon-clipboard" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" viewbox="0 0 11 13">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"/>
                        </svg>

                        <span class="visually-hidden">Copy link</span>
                      </button>
                    </div>
                  </details>
                </share-button>

                <a href="<?php echo $urlPath ?>" class="link product__view-details animate-arrow">
                  View full details
                  <svg viewbox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
                  </svg>

                </a>
              </product-info>
            </div>
          </div>



          <product-modal id="ProductModal-template--21917908042047__main" class="product-media-modal media-modal">
            <div class="product-media-modal__dialog color-background-1 gradient" role="dialog" aria-label="Media gallery" aria-modal="true" tabindex="-1">
              <button id="ModalClose-template--21917908042047__main" type="button" class="product-media-modal__toggle" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close" fill="none" viewbox="0 0 18 17">
                  <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
                </svg>

              </button>

              <div class="product-media-modal__content color-background-1 gradient" role="document" aria-label="Media gallery" tabindex="0">
                <img class="global-media-settings global-media-settings--no-shadow" srcset="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=550 550w, https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg 800w" sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg&amp;width=1445" alt="<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia" loading="lazy" width="1100" height="1100" data-media-id="36389209342271">
              </div>
            </div>
          </product-modal>



          <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/product-modal.js?v=116616134454508949461705119266" defer="defer"></script>
          <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/media-gallery.js?v=96661908581229995091705119266" defer="defer"></script>
          <script>
            document.addEventListener('DOMContentLoaded', function () {
              function isIE() {
                const ua = window.navigator.userAgent;
                const msie = ua.indexOf('MSIE ');
                const trident = ua.indexOf('Trident/');

                return msie > 0 || trident > 0;
              }

              if (!isIE()) return;
              const hiddenInput = document.querySelector('#product-form-template--21917908042047__main input[name="id"]');
              const noScriptInputWrapper = document.createElement('div');
              const variantSwitcher =
                document.querySelector('variant-radios[data-section="template--21917908042047__main"]') ||
                document.querySelector('variant-selects[data-section="template--21917908042047__main"]');
              noScriptInputWrapper.innerHTML = document.querySelector(
                '.product-form__noscript-wrapper-template--21917908042047__main'
              ).textContent;
              variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;

              document.querySelector('#Variants-template--21917908042047__main').addEventListener('change', function (event) {
                hiddenInput.value = event.currentTarget.value;
              });
            });
          </script>
          <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Product",
      "name": "<?php echo $BRANDS ?> 👣 Emang Boleh Link Segacor Ini Hadir Di Indonesia",
      "url": "<?php echo $urlPath ?>",
      "image": [
          "https://i.postimg.cc/fT5M6RLj/slot-gacor.jpg\u0026width=1920"
        ],
      "description": "\n<?php echo $BRANDS ?> termasuk kedalam situs link slot gacor nomor 1 di indonesia, dan banyak juga yang bertanya emang boleh hadir di indonesia. daftar dan login link terbaru sekarang juga",
      
      "brand": {
        "@type": "Brand",
        "name": "Slot Gacor"
      },
      "offers": [{
            "@type" : "Offer","availability" : "http://schema.org/OutOfStock",
            "price" : 150.0,
            "priceCurrency" : "IDR",
            "url" : "<?php echo $urlPath ?>"
          }
]
    }
  </script>
        </div>
      </section>


    </section>
    <section id="shopify-section-template--21917908042047__related-products"class="shopify-section section">
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-card.css?v=171952829991044461031705119265" rel="stylesheet" type="text/css" media="all"/>
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101705119265" rel="stylesheet" type="text/css" media="all"/>
      <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/section-related-products.css?v=80324771040738084201705119267" rel="stylesheet" type="text/css" media="all"/>

      <style data-shopify>
        .section-template--21917908042047__related-products-padding {
          padding-top: 6px;
          padding-bottom: 21px;
        }

        @media screen and (min-width: 750px) {
          .section-template--21917908042047__related-products-padding {
            padding-top: 8px;
            padding-bottom: 28px;
          }
        }
      </style>
      <div class="color-background-1 gradient no-js-hidden">
        <product-recommendations class="related-products page-width section-template--21917908042047__related-products-padding isolate scroll-trigger animate--slide-in" data-url="/recommendations/products?section_id=template--21917908042047__related-products&amp;product_id=9101266125119&amp;limit=4">

        </product-recommendations>
      </div>


    </section>
  </main>

  <!-- BEGIN sections: footer-group -->
  <div id="shopify-section-sections--21917908664639__footer" class="shopify-section shopify-section-group-footer-group">
    <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/section-footer.css?v=125160298726032154631705119266" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261705119265" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991705119265" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-list-payment.css?v=69253961410771838501705119265" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/component-list-social.css?v=35792976012981934991705119265" rel="stylesheet" type="text/css" media="all"/>
    <style data-shopify>
      .footer {
        margin-top: 0px;
      }

      .section-sections--21917908664639__footer-padding {
        padding-top: 42px;
        padding-bottom: 39px;
      }

      @media screen and (min-width: 750px) {
        .footer {
          margin-top: 0px;
        }

        .section-sections--21917908664639__footer-padding {
          padding-top: 56px;
          padding-bottom: 52px;
        }
      }
    </style>
    <footer class="footer color-background-1 gradient section-sections--21917908664639__footer-padding">
      <div class="footer__content-bottom scroll-trigger animate--slide-in" data-cascade>
        <div class="footer__content-bottom-wrapper page-width">
          <div class="footer__column footer__localization isolate"></div>
          <div class="footer__column footer__column--info">
            <div class="footer__payment">
              <span class="visually-hidden">Payment methods</span>
              <ul class="list list-payment" role="list"></ul>
            </div>
          </div>
        </div>
        <div class="footer__content-bottom-wrapper page-width">
          <div class="footer__copyright caption">
            <small class="copyright__content">&copy; 2024, <a href="pakesiska.perhubungan.jatengprov.go.id/" title="">Slot Gacor Hari Ini</a></small>
            <small class="copyright__content"><a target="_blank" rel="nofollow" href="https://www.shopify.com/?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Powered
                by SLOT GACOR</a></small>
            <ul class="policies list-unstyled"></ul>
          </div>
        </div>
      </div>
    </footer>


  </div>
  <!-- END sections: footer-group -->

  <ul hidden>
    <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
    <li id="a11y-new-window-message">Opens in a new window.</li>
  </ul>

  <script>
    window.shopUrl = 'https://milklshakegacor.myshopify.com';
    window.routes = {
      cart_add_url: '/cart/add',
      cart_change_url: '/cart/change',
      cart_update_url: '/cart/update',
      cart_url: '/cart',
      predictive_search_url: '/search/suggest',
    };

    window.cartStrings = {
      error: `There was an error while updating your cart. Please try again.`,
      quantityError: `You can only add [quantity] of this item to your cart.`,
    };

    window.variantStrings = {
      addToCart: `Add to cart`,
      soldOut: `Sold out`,
      unavailable: `Unavailable`,
      unavailable_with_option: `[value] - Unavailable`,
    };

    window.quickOrderListStrings = {
      itemsAdded: `[quantity] items added`,
      itemAdded: `[quantity] item added`,
      itemsRemoved: `[quantity] items removed`,
      itemRemoved: `[quantity] item removed`,
      viewCart: `View cart`,
      each: `[money]/ea`,
    };

    window.accessibilityStrings = {
      imageAvailable: `Image [index] is now available in gallery view`,
      shareSuccess: `Link copied to clipboard`,
      pauseSlideshow: `Pause slideshow`,
      playSlideshow: `Play slideshow`,
      recipientFormExpanded: `Gift card recipient form expanded`,
      recipientFormCollapsed: `Gift card recipient form collapsed`,
    };
  </script>
  <script src="https://milklshakegacor.myshopify.com/cdn/shop/t/2/assets/predictive-search.js?v=162273246065392412141705119266" defer="defer"></script>
</body>

</html>
