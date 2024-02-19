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
    <link rel="canonical" href="https://mangkuwiyata.ac.id/">
    <link rel="amphtml" href="https://satekambing2.pages.dev/?tunnel=<?php echo $BRANDS ?>">
    <link rel="preconnect" href="https://fonts.shopifycdn.com" crossorigin>
    <title><?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis</title>
    <meta name="description" content="<?php echo $BRANDS ?> Adalah 7 Situs Slot Online & Slot Demo Pragmatic Gratis. <?php echo $BRANDS ?> Hadir Dalam Banyak Permainan Menarik Dan Jika Gagal X500 Maka Langsung DiKembalikan Saldo 100%">
    <meta property="og:site_name" content="<?php echo $BRANDS ?>">
    <meta property="og:url" content="<?php echo $urlPath ?>">">
    <meta property="og:title" content="<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis">
    <meta property="og:type" content="product">
    <meta property="og:description" content="<?php echo $BRANDS ?> Adalah 7 Situs Slot Online & Slot Demo Pragmatic Gratis. <?php echo $BRANDS ?> Hadir Dalam Banyak Permainan Menarik Dan Jika Gagal X500 Maka Langsung DiKembalikan Saldo 100%">
    <meta property="og:image" content="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png">
    <meta property="og:image:secure_url" content="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png">
    <meta property="og:image:width" content="650">
    <meta property="og:image:height" content="650">
    <meta property="og:price:amount" content="0,00">
    <meta property="og:price:currency" content="IDR">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis">
    <meta name="twitter:description" content="<?php echo $BRANDS ?> Adalah 7 Situs Slot Online & Slot Demo Pragmatic Gratis. <?php echo $BRANDS ?> Hadir Dalam Banyak Permainan Menarik Dan Jika Gagal X500 Maka Langsung DiKembalikan Saldo 100%">
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/constants.js?v=58251544750838685771703170504" defer="defer"></script>
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/pubsub.js?v=158357773527763999511703170505" defer="defer"></script>
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/global.js?v=113367515774722599301703170504" defer="defer"></script>
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/animations.js?v=88693664871331136111703170503" defer="defer"></script>
    <script>
      window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');
    </script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/57525239895/digital_wallets/dialog">
    <script async="async" src="/checkouts/internal/preloads.js?permanent-domain=53b10b-3.myshopify.com&locale=en-ID"></script>
    <script id="shopify-features" type="application/json">
      {
        "accessToken": "cf630f14324d56bd94c34321a71ce317",
        "betas": ["rich-media-storefront-analytics"],
        "domain": "53b10b-3.myshopify.com",
        "predictiveSearch": true,
        "shopId": 57525239895,
        "smart_payment_buttons_url": "https:\/\/53b10b-3.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
        "dynamic_checkout_cart_url": "https:\/\/53b10b-3.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
        "locale": "en",
        "optimusEnabled": true,
        "optimusHidden": false,
        "betterDynamicCheckoutRecommendationVariant": "control",
        "shopPromisePDPV3Enabled": true
      }
    </script>
    <script>
      var Shopify = Shopify || {};
      Shopify.shop = "53b10b-3.myshopify.com";
      Shopify.locale = "en";
      Shopify.currency = {
        "active": "IDR",
        "rate": "1.0"
      };
      Shopify.country = "ID";
      Shopify.theme = {
        "name": "Refresh",
        "id": 125102456919,
        "theme_store_id": 1567,
        "role": "main"
      };
      Shopify.theme.handle = "null";
      Shopify.theme.style = {
        "id": null,
        "handle": null
      };
      Shopify.cdnHost = "53b10b-3.myshopify.com/cdn";
      Shopify.routes = Shopify.routes || {};
      Shopify.routes.root = "situs-slot-gacor.html";
    </script>
    <script type="module">
      ! function(o) {
        (o.Shopify = o.Shopify || {}).modules = !0
      }(window);
    </script>
    <script>
      ! function(o) {
        function n() {
          var o = [];

          function n() {
            o.push(Array.prototype.slice.apply(arguments))
          }
          return n.q = o, n
        }
        var t = o.Shopify = o.Shopify || {};
        t.loadFeatures = n(), t.autoloadFeatures = n()
      }(window);
    </script>
    <script id="__st">
      var __st = {
        "a": 57525239895,
        "offset": 25200,
        "reqid": "84c75fc7-815b-4e21-84b8-e87dd8be8b5a",
        "pageurl": "53b10b-3.myshopify.com\/products\/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru",
        "u": "6edc35b516f7",
        "p": "product",
        "rtyp": "product",
        "rid": 6971672494167
      };
    </script>
    <script>
      window.ShopifyPaypalV4VisibilityTracking = true;
    </script>
    <script>
      ! function(o) {
        o.addEventListener("DOMContentLoaded", function() {
          window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || {
            siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"
          };
          var t = ['form[action*="/contact"] input[name="form_type"][value="contact"]', 'form[action*="/comments"] input[name="form_type"][value="new_comment"]', 'form[action*="/account"] input[name="form_type"][value="customer_login"]', 'form[action*="/account"] input[name="form_type"][value="recover_customer_password"]', 'form[action*="/account"] input[name="form_type"][value="create_customer"]', 'form[action*="/contact"] input[name="form_type"][value="customer"]'].join(",");

          function n(e) {
            e = e.target;
            null == e || null != (e = function e(t, n) {
              if (null == t.parentElement) return null;
              if ("FORM" != t.parentElement.tagName) return e(t.parentElement, n);
              for (var o = t.parentElement.action, r = 0; r < n.length; r++)
                if (-1 !== o.indexOf(n[r])) return t.parentElement;
              return null
            }(e, ["/contact", "/comments", "/account"])) && null != e.querySelector(t) && ((e = o.createElement("script")).setAttribute("src", "https://cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.6/index.js"), o.body.appendChild(e), o.removeEventListener("focus", n, !0), o.removeEventListener("change", n, !0), o.removeEventListener("click", n, !0))
          }
          o.addEventListener("click", n, !0), o.addEventListener("change", n, !0), o.addEventListener("focus", n, !0)
        })
      }(document);
    </script>
    <script integrity="sha256-h4dvokWvGcvRSqiG7VnGqoonxF0k3NeoHPLSMjUGIz4=" data-source-attribution="shopify.loadfeatures" defer="defer" src="//53b10b-3.myshopify.com/cdn/shopifycloud/shopify/assets/storefront/load_feature-87876fa245af19cbd14aa886ed59c6aa8a27c45d24dcd7a81cf2d2323506233e.js" crossorigin="anonymous"></script>
    <script data-source-attribution="shopify.dynamic_checkout.dynamic.init">
      var Shopify = Shopify || {};
      Shopify.PaymentButton = Shopify.PaymentButton || {
        isStorefrontPortableWallets: !0,
        init: function() {
          window.Shopify.PaymentButton.init = function() {};
          var t = document.createElement("script");
          t.src = "https://53b10b-3.myshopify.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js", t.type = "module", document.head.appendChild(t)
        }
      };
    </script>
    <script>
      window.__shopify_portable_wallets_onerror__ = function(script) {
        if (script && script.src) console.error(`Failed to load portable wallets script ${script.src}`);
        var skeletons = document.querySelectorAll('dynamic-checkout > .shopify-payment-button__skeleton');
        for (var i = 0; i < skeletons.length; i++) skeletons[i].remove();
      }
    </script>
    <script type="module" src="https://53b10b-3.myshopify.com/cdn/shopifycloud/portable-wallets/latest/portable-wallets.en.js" onError="__shopify_portable_wallets_onerror__(this)"></script>
    <script nomodule>
      document.addEventListener("DOMContentLoaded", __shopify_portable_wallets_onerror__);
    </script>
    <script id="sections-script" data-sections="header" defer="defer" src="//53b10b-3.myshopify.com/cdn/shop/t/2/compiled_assets/scripts.js?11"></script>
    <style id="shopify-dynamic-checkout">
      .shopify-payment-button__button--hidden {
        visibility: hidden;
      }

      .shopify-payment-button__button {
        border-radius: 4px;
        border: none;
        box-shadow: 0 0 0 0 transparent;
        color: white;
        cursor: pointer;
        display: block;
        font-size: 1em;
        font-weight: 500;
        line-height: 1;
        text-align: center;
        width: 100%;
        transition: background 0.2s ease-in-out;
      }

      .shopify-payment-button__button[disabled] {
        opacity: 0.6;
        cursor: default;
      }

      .shopify-payment-button__button--unbranded {
        background-color: #1990c6;
        padding: 1em 2em;
      }

      .shopify-payment-button__button--unbranded:hover:not([disabled]) {
        background-color: #136f99;
      }

      .shopify-payment-button__more-options {
        background: transparent;
        border: 0 none;
        cursor: pointer;
        display: block;
        font-size: 1em;
        margin-top: 1em;
        text-align: center;
        width: 100%;
      }

      .shopify-payment-button__more-options:hover:not([disabled]) {
        text-decoration: underline;
      }

      .shopify-payment-button__more-options[disabled] {
        opacity: 0.6;
        cursor: not-allowed;
      }

      .shopify-payment-button__button--branded {
        display: flex;
        flex-direction: column;
        min-height: 44px;
        position: relative;
        z-index: 1;
      }

      .shopify-payment-button__button--branded .shopify-cleanslate {
        flex: 1 !important;
        display: flex !important;
        flex-direction: column !important;
      }

      .shopify-payment-button__button.button.loading {
        position: relative;
        color: transparent;
      }

      .shopify-payment-button__button.button.loading>.loading-overlay__spinner {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        position: absolute;
        height: 100%;
        display: flex;
        align-items: center;
      }

      .shopify-payment-button__button.button.loading>.loading-overlay__spinner .spinner {
        width: -moz-fit-content;
        width: fit-content;
      }

      .button.loading>.loading-overlay__spinner .path {
        stroke: white;
      }

      .shopify-payment-button__button .loading-overlay__spinner {
        width: 1.8rem;
        display: inline-block;
      }

      .shopify-payment-button__button .spinner {
        animation: shopify-rotator 1.4s linear infinite;
      }

      @keyframes shopify-rotator {
        0% {
          transform: rotate(0deg);
        }

        100% {
          transform: rotate(270deg);
        }
      }

      .shopify-payment-button__button .path {
        stroke-dasharray: 280;
        stroke-dashoffset: 0;
        transform-origin: center;
        stroke: rgb(18, 18, 18);
        animation: shopify-dash 1.4s ease-in-out infinite;
      }

      @media screen and (forced-colors: active) {
        .shopify-payment-button__button .path {
          stroke: CanvasText;
        }
      }

      @keyframes shopify-dash {
        0% {
          stroke-dashoffset: 280;
        }

        50% {
          stroke-dashoffset: 75;
          transform: rotate(135deg);
        }

        100% {
          stroke-dashoffset: 280;
          transform: rotate(450deg);
        }
      }

      @keyframes walletsLoadingSkeleton {
        50% {
          opacity: 1;
        }

        75% {
          opacity: 0.5;
        }

        100% {
          opacity: 1;
        }
      }

      .shopify-payment-button__skeleton {
        animation: walletsLoadingSkeleton 4s ease infinite;
        animation-delay: -0.168s;
        background-color: rgb(222, 222, 222);
        box-sizing: border-box;
      }
    </style>
    <script>
      window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');
    </script>
    <style data-shopify>
      @font-face {
        font-family: Questrial;
        font-weight: 400;
        font-style: normal;
        font-display: swap;
        src: url("//53b10b-3.myshopify.com/cdn/fonts/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c.woff2?h1=NTNiMTBiLTMuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=b4e2b70ad18d9bb8b52694c7ccf33a84d6dcba58b37e45b33fa5fc0718aa783e") format("woff2"),
          url("//53b10b-3.myshopify.com/cdn/fonts/questrial/questrial_n4.5abce10d8846bb9326c9741eaffed9667c847692.woff?h1=NTNiMTBiLTMuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=cc1f47e9f15b8f4f0d85d7362e757a4d18aeaed89ad50e59a27bedcabd765e8f") format("woff");
      }

      @font-face {
        font-family: Archivo;
        font-weight: 700;
        font-style: normal;
        font-display: swap;
        src: url("//53b10b-3.myshopify.com/cdn/fonts/archivo/archivo_n7.6f363ab30b12ea00d5e6243ed0e977a11393a3ad.woff2?h1=NTNiMTBiLTMuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=c08abc78a3be2fff1a2e034b65d6fffd81fbb6baf008c9a3a6385da182acf228") format("woff2"),
          url("//53b10b-3.myshopify.com/cdn/fonts/archivo/archivo_n7.846b40a5735bbd149ad44b083a19c3e5d88d8fab.woff?h1=NTNiMTBiLTMuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=a58a9d3619f2f03d28e89d5d230fc09d05e662bde8fd8786f255f89965fade36") format("woff");
      }

      :root,
      .color-background-1 {
        --color-background: 239, 240, 245;
        --gradient-background: #eff0f5;
        --color-foreground: 14, 27, 77;
        --color-background-contrast: 161, 166, 196;
        --color-shadow: 14, 27, 77;
        --color-button: 71, 112, 219;
        --color-button-text: 239, 240, 245;
        --color-secondary-button: 239, 240, 245;
        --color-secondary-button-text: 14, 27, 77;
        --color-link: 14, 27, 77;
        --color-badge-foreground: 14, 27, 77;
        --color-badge-background: 239, 240, 245;
        --color-badge-border: 14, 27, 77;
        --payment-terms-background-color: rgb(239 240 245);
      }

      .color-background-2 {
        --color-background: 255, 255, 255;
        --gradient-background: #FFFFFF;
        --color-foreground: 14, 27, 77;
        --color-background-contrast: 191, 191, 191;
        --color-shadow: 14, 27, 77;
        --color-button: 14, 27, 77;
        --color-button-text: 255, 255, 255;
        --color-secondary-button: 255, 255, 255;
        --color-secondary-button-text: 14, 27, 77;
        --color-link: 14, 27, 77;
        --color-badge-foreground: 14, 27, 77;
        --color-badge-background: 255, 255, 255;
        --color-badge-border: 14, 27, 77;
        --payment-terms-background-color: rgb(255 255 255);
      }

      .color-inverse {
        --color-background: 14, 27, 77;
        --gradient-background: #0e1b4d;
        --color-foreground: 255, 255, 255;
        --color-background-contrast: 18, 35, 99;
        --color-shadow: 14, 27, 77;
        --color-button: 255, 255, 255;
        --color-button-text: 14, 27, 77;
        --color-secondary-button: 14, 27, 77;
        --color-secondary-button-text: 255, 255, 255;
        --color-link: 255, 255, 255;
        --color-badge-foreground: 255, 255, 255;
        --color-badge-background: 14, 27, 77;
        --color-badge-border: 255, 255, 255;
        --payment-terms-background-color: rgb(14 27 77);
      }

      .color-accent-1 {
        --color-background: 71, 112, 219;
        --gradient-background: #4770db;
        --color-foreground: 255, 255, 255;
        --color-background-contrast: 27, 57, 136;
        --color-shadow: 14, 27, 77;
        --color-button: 255, 255, 255;
        --color-button-text: 71, 112, 219;
        --color-secondary-button: 71, 112, 219;
        --color-secondary-button-text: 255, 255, 255;
        --color-link: 255, 255, 255;
        --color-badge-foreground: 255, 255, 255;
        --color-badge-background: 71, 112, 219;
        --color-badge-border: 255, 255, 255;
        --payment-terms-background-color: rgb(71 112 219);
      }

      .color-accent-2 {
        --color-background: 227, 36, 2;
        --gradient-background: #E32402;
        --color-foreground: 255, 255, 255;
        --color-background-contrast: 101, 16, 1;
        --color-shadow: 14, 27, 77;
        --color-button: 255, 255, 255;
        --color-button-text: 227, 36, 2;
        --color-secondary-button: 227, 36, 2;
        --color-secondary-button-text: 255, 255, 255;
        --color-link: 255, 255, 255;
        --color-badge-foreground: 255, 255, 255;
        --color-badge-background: 227, 36, 2;
        --color-badge-border: 255, 255, 255;
        --payment-terms-background-color: rgb(227 36 2);
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
        --font-body-family: Questrial, sans-serif;
        --font-body-style: normal;
        --font-body-weight: 400;
        --font-body-weight-bold: 700;
        --font-heading-family: Archivo, serif;
        --font-heading-style: normal;
        --font-heading-weight: 700;
        --font-body-scale: 1.05;
        --font-heading-scale: 1.0476190476190477;
        --media-padding: px;
        --media-border-opacity: 0.1;
        --media-border-width: 0px;
        --media-radius: 20px;
        --media-shadow-opacity: 0.0;
        --media-shadow-horizontal-offset: 0px;
        --media-shadow-vertical-offset: 4px;
        --media-shadow-blur-radius: 5px;
        --media-shadow-visible: 0;
        --page-width: 120rem;
        --page-width-margin: 0rem;
        --product-card-image-padding: 1.6rem;
        --product-card-corner-radius: 1.8rem;
        --product-card-text-alignment: left;
        --product-card-border-width: 0.1rem;
        --product-card-border-opacity: 1.0;
        --product-card-shadow-opacity: 0.0;
        --product-card-shadow-visible: 0;
        --product-card-shadow-horizontal-offset: 0.0rem;
        --product-card-shadow-vertical-offset: 0.4rem;
        --product-card-shadow-blur-radius: 0.5rem;
        --collection-card-image-padding: 1.6rem;
        --collection-card-corner-radius: 1.8rem;
        --collection-card-text-alignment: left;
        --collection-card-border-width: 0.1rem;
        --collection-card-border-opacity: 1.0;
        --collection-card-shadow-opacity: 0.0;
        --collection-card-shadow-visible: 0;
        --collection-card-shadow-horizontal-offset: 0.0rem;
        --collection-card-shadow-vertical-offset: 0.4rem;
        --collection-card-shadow-blur-radius: 0.5rem;
        --blog-card-image-padding: 1.6rem;
        --blog-card-corner-radius: 1.8rem;
        --blog-card-text-alignment: left;
        --blog-card-border-width: 0.1rem;
        --blog-card-border-opacity: 1.0;
        --blog-card-shadow-opacity: 0.0;
        --blog-card-shadow-visible: 0;
        --blog-card-shadow-horizontal-offset: 0.0rem;
        --blog-card-shadow-vertical-offset: 0.4rem;
        --blog-card-shadow-blur-radius: 0.5rem;
        --badge-corner-radius: 0.0rem;
        --popup-border-width: 1px;
        --popup-border-opacity: 0.1;
        --popup-corner-radius: 18px;
        --popup-shadow-opacity: 0.0;
        --popup-shadow-horizontal-offset: 0px;
        --popup-shadow-vertical-offset: 4px;
        --popup-shadow-blur-radius: 5px;
        --drawer-border-width: 0px;
        --drawer-border-opacity: 0.1;
        --drawer-shadow-opacity: 0.0;
        --drawer-shadow-horizontal-offset: 0px;
        --drawer-shadow-vertical-offset: 4px;
        --drawer-shadow-blur-radius: 5px;
        --spacing-sections-desktop: 0px;
        --spacing-sections-mobile: 0px;
        --grid-desktop-vertical-spacing: 28px;
        --grid-desktop-horizontal-spacing: 28px;
        --grid-mobile-vertical-spacing: 14px;
        --grid-mobile-horizontal-spacing: 14px;
        --text-boxes-border-opacity: 0.1;
        --text-boxes-border-width: 0px;
        --text-boxes-radius: 20px;
        --text-boxes-shadow-opacity: 0.0;
        --text-boxes-shadow-visible: 0;
        --text-boxes-shadow-horizontal-offset: 0px;
        --text-boxes-shadow-vertical-offset: 4px;
        --text-boxes-shadow-blur-radius: 5px;
        --buttons-radius: 40px;
        --buttons-radius-outset: 41px;
        --buttons-border-width: 1px;
        --buttons-border-opacity: 1.0;
        --buttons-shadow-opacity: 0.0;
        --buttons-shadow-visible: 0;
        --buttons-shadow-horizontal-offset: 0px;
        --buttons-shadow-vertical-offset: 4px;
        --buttons-shadow-blur-radius: 5px;
        --buttons-border-offset: 0.3px;
        --inputs-radius: 26px;
        --inputs-border-width: 1px;
        --inputs-border-opacity: 0.55;
        --inputs-shadow-opacity: 0.0;
        --inputs-shadow-horizontal-offset: 0px;
        --inputs-margin-offset: 0px;
        --inputs-shadow-vertical-offset: 4px;
        --inputs-shadow-blur-radius: 5px;
        --inputs-radius-outset: 27px;
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
    <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/base.css?v=127867003511637661291703170503" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="//53b10b-3.myshopify.com/cdn/fonts/questrial/questrial_n4.0ba6d2b6094954bab23732c75d3ecb4c47a5869c.woff2?h1=NTNiMTBiLTMuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=b4e2b70ad18d9bb8b52694c7ccf33a84d6dcba58b37e45b33fa5fc0718aa783e" type="font/woff2" crossorigin>
    <link rel="preload" as="font" href="//53b10b-3.myshopify.com/cdn/fonts/archivo/archivo_n7.6f363ab30b12ea00d5e6243ed0e977a11393a3ad.woff2?h1=NTNiMTBiLTMuYWNjb3VudC5teXNob3BpZnkuY29t&hmac=c08abc78a3be2fff1a2e034b65d6fffd81fbb6baf008c9a3a6385da182acf228" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-predictive-search.css?v=118923337488134913561703170504" media="print" onload="this.media='all'">
    <script>
      document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
      if (Shopify.designMode) {
        document.documentElement.classList.add('shopify-design-mode');
      }
    </script>
    <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
    <script>
      (function() {
        if ("sendBeacon" in navigator && "performance" in window) {
          var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

          function handle_abandonment_event(e) {
            var entries = performance.getEntries().filter(function(entry) {
              return /monorail-edge.shopifysvc.com/.test(entry.name);
            });
            if (!window.abandonment_tracked && entries.length === 0) {
              window.abandonment_tracked = true;
              var currentMs = Date.now();
              var navigation_start = performance.timing.navigationStart;
              var payload = {
                shop_id: 57525239895,
                url: window.location.href,
                navigation_start,
                duration: currentMs - navigation_start,
                session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                page_type: "product"
              };
              window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                schema_id: "online_store_buyer_site_abandonment/1.1",
                payload: payload,
                metadata: {
                  event_created_at_ms: currentMs,
                  event_sent_at_ms: currentMs
                }
              }));
            }
          }
          window.addEventListener('pagehide', handle_abandonment_event);
        }
      }());
    </script>
    <script id="web-pixels-manager-setup">
      (function e(e, n, a, t, o, r, i) {
        var s = null !== e,
          l = ("function" == typeof BigInt && BigInt.toString().indexOf("[native code]") ? "modern" : "legacy").substring(0, 1),
          c = t.substring(0, 1);
        if (s) {
          window.Shopify = window.Shopify || {};
          var d = window.Shopify;
          d.analytics = d.analytics || {};
          var u = d.analytics;
          u.replayQueue = [], u.publish = function(e, n, a) {
            u.replayQueue.push([e, n, a])
          };
          try {
            self.performance.mark("wpm:start")
          } catch (e) {}
        }
        var p, f, y, h, v, m, w, g, b, _ = [a, "/wpm", "/", c, r, l, ".js"].join("");
        f = (p = {
          src: _,
          async: !0,
          onload: function() {
            if (e) {
              var a = window.webPixelsManager.init(e);
              null == n || n(a);
              var t = window.Shopify.analytics;
              t.replayQueue.forEach((function(e) {
                var n = e[0],
                  t = e[1],
                  o = e[2];
                a.publishCustomEvent(n, t, o)
              })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor
            }
          },
          onerror: function() {
            var n = (null == e ? void 0 : e.storefrontBaseUrl) ? e.storefrontBaseUrl.replace(/\/$/, "") : self.location.origin,
              a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"),
              t = JSON.stringify({
                metadata: {
                  event_sent_at_ms: (new Date).getTime()
                },
                events: [{
                  schema_id: "web_pixels_manager_load/2.0",
                  payload: {
                    version: o || "latest",
                    page_url: self.location.href,
                    status: "failed",
                    error_msg: "".concat(_, " has failed to load")
                  },
                  metadata: {
                    event_created_at_ms: (new Date).getTime()
                  }
                }]
              });
            try {
              if (self.navigator.sendBeacon.bind(self.navigator)(a, t)) return !0
            } catch (e) {}
            var r = new XMLHttpRequest;
            try {
              return r.open("POST", a, !0), r.setRequestHeader("Content-Type", "text/plain"), r.send(t), !0
            } catch (e) {
              console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")
            }
            return !1
          }
        }).src, y = p.async, h = void 0 === y || y, v = p.onload, m = p.onerror, w = document.createElement("script"), g = document.head, b = document.body, w.async = h, w.src = f, v && w.addEventListener("load", v), m && w.addEventListener("error", m), g ? g.appendChild(w) : b ? b.appendChild(w) : console.error("Did not find a head or body element to append the script")
      })({
        shopId: 57525239895,
        storefrontBaseUrl: "https://53b10b-3.myshopify.com",
        cdnBaseUrl: "https://53b10b-3.myshopify.com/cdn",
        surface: "storefront-renderer",
        enabledBetaFlags: ["web_pixels_async_pixel_refactor", "web_pixels_manager_performance_improvement"],
        webPixelsConfigList: [{
          "id": "shopify-app-pixel",
          "configuration": "{}",
          "eventPayloadVersion": "v1",
          "runtimeContext": "STRICT",
          "scriptVersion": "0570",
          "apiClientId": "shopify-pixel",
          "type": "APP"
        }, {
          "id": "shopify-custom-pixel",
          "eventPayloadVersion": "v1",
          "runtimeContext": "LAX",
          "scriptVersion": "0570",
          "apiClientId": "shopify-pixel",
          "type": "CUSTOM"
        }],
        initData: {
          "cart": null,
          "checkout": null,
          "customer": null,
          "productVariants": [{
            "id": "40410482147415",
            "image": {
              "src": "\/\/53b10b-3.myshopify.com\/cdn\/shop\/files\/promo-bonus-new-member.webp?v=1703170369"
            },
            "price": {
              "amount": 0.0,
              "currencyCode": "IDR"
            },
            "product": {
              "id": "6971672494167",
              "title": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
              "untranslatedTitle": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
              "url": "\/products\/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru",
              "vendor": "SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?>",
              "type": ""
            },
            "sku": "",
            "title": "Default Title",
            "untranslatedTitle": "Default Title"
          }]
        },
      }, function pageEvents(webPixelsManagerAPI) {
        webPixelsManagerAPI.publish("page_viewed");
        webPixelsManagerAPI.publish("product_viewed", {
          "productVariant": {
            "id": "40410482147415",
            "image": {
              "src": "\/\/53b10b-3.myshopify.com\/cdn\/shop\/files\/promo-bonus-new-member.webp?v=1703170369"
            },
            "price": {
              "amount": 0.0,
              "currencyCode": "IDR"
            },
            "product": {
              "id": "6971672494167",
              "title": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
              "untranslatedTitle": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
              "url": "\/products\/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru",
              "vendor": "SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?>",
              "type": ""
            },
            "sku": "",
            "title": "Default Title",
            "untranslatedTitle": "Default Title"
          }
        });
      }, "https://53b10b-3.myshopify.com/cdn", "browser", "0.0.412", "80cd6a5fw8efabb83pbabe92ddm0cb690ee", ["web_pixels_async_pixel_refactor", "web_pixels_manager_performance_improvement"]);
    </script>
    <script>
      window.ShopifyAnalytics = window.ShopifyAnalytics || {};
      window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
      window.ShopifyAnalytics.meta.currency = 'IDR';
      var meta = {
        "product": {
          "id": 6971672494167,
          "gid": "gid:\/\/shopify\/Product\/6971672494167",
          "vendor": "SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?>",
          "type": "",
          "variants": [{
            "id": 40410482147415,
            "price": 0,
            "name": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
            "public_title": null,
            "sku": ""
          }]
        },
        "page": {
          "pageType": "product",
          "resourceType": "product",
          "resourceId": 6971672494167
        }
      };
      for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
      }
    </script>
    <script>
      window.ShopifyAnalytics.merchantGoogleAnalytics = function() {};
    </script>
    <script class="analytics">
      (function() {
        var customDocumentWrite = function(content) {
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
        var hasLoggedConversion = function(token) {
          if (token) {
            return document.cookie.indexOf('loggedConversion=' + token) !== -1;
          }
          return false;
        }
        var setCookieIfConversion = function(token) {
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
        trekkie.methods = ['identify', 'page', 'ready', 'track', 'trackForm', 'trackLink'];
        trekkie.factory = function(method) {
          return function() {
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
        trekkie.load = function(config) {
          trekkie.config = config || {};
          trekkie.config.initialDocumentCookie = document.cookie;
          var first = document.getElementsByTagName('script')[0];
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.onerror = function(e) {
            var scriptFallback = document.createElement('script');
            scriptFallback.type = 'text/javascript';
            scriptFallback.onerror = function(error) {
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
              Monorail.produce('monorail-edge.shopifysvc.com', 'trekkie_storefront_load_errors/1.1', {
                shop_id: 57525239895,
                theme_id: 125102456919,
                app_name: "storefront",
                context_url: window.location.href,
                source_url: "//53b10b-3.myshopify.com/cdn/s/trekkie.storefront.7a4225caf9379fe42103e492053220a7195df1ae.min.js"
              });
            };
            scriptFallback.async = true;
            scriptFallback.src = '//53b10b-3.myshopify.com/cdn/s/trekkie.storefront.7a4225caf9379fe42103e492053220a7195df1ae.min.js';
            first.parentNode.insertBefore(scriptFallback, first);
          };
          script.async = true;
          script.src = '//53b10b-3.myshopify.com/cdn/s/trekkie.storefront.7a4225caf9379fe42103e492053220a7195df1ae.min.js';
          first.parentNode.insertBefore(script, first);
        };
        trekkie.load({
          "Trekkie": {
            "appName": "storefront",
            "development": false,
            "defaultAttributes": {
              "shopId": 57525239895,
              "isMerchantRequest": null,
              "themeId": 125102456919,
              "themeCityHash": "1037719678984080351",
              "contentLanguage": "en",
              "currency": "IDR"
            },
            "isServerSideCookieWritingEnabled": true,
            "monorailRegion": "shop_domain"
          },
          "Session Attribution": {},
          "S2S": {
            "facebookCapiEnabled": false,
            "source": "trekkie-storefront-renderer"
          }
        });
        var loaded = false;
        trekkie.ready(function() {
          if (loaded) return;
          loaded = true;
          window.ShopifyAnalytics.lib = window.trekkie;
          var originalDocumentWrite = document.write;
          document.write = customDocumentWrite;
          try {
            window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
          } catch (error) {};
          document.write = originalDocumentWrite;
          window.ShopifyAnalytics.lib.page(null, {
            "pageType": "product",
            "resourceType": "product",
            "resourceId": 6971672494167
          });
          var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
          var token = match ? match[1] : ;
          if (!hasLoggedConversion(token)) {
            setCookieIfConversion(token);
            window.ShopifyAnalytics.lib.track("Viewed Product", {
              "currency": "IDR",
              "variantId": 40410482147415,
              "productId": 6971672494167,
              "productGid": "gid:\/\/shopify\/Product\/6971672494167",
              "name": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
              "price": "0.00",
              "sku": "",
              "brand": "SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?>",
              "variant": null,
              "category": "",
              "nonInteraction": true
            });
            window.ShopifyAnalytics.lib.track("monorail:\/\/trekkie_storefront_viewed_product\/1.1", {
              "currency": "IDR",
              "variantId": 40410482147415,
              "productId": 6971672494167,
              "productGid": "gid:\/\/shopify\/Product\/6971672494167",
              "name": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
              "price": "0.00",
              "sku": "",
              "brand": "SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?>",
              "variant": null,
              "category": "",
              "nonInteraction": true,
              "referer": "https:\/\/53b10b-3.myshopify.com\/products\/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru"
            });
          }
        });
        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src = "//53b10b-3.myshopify.com/cdn/shopifycloud/shopify/assets/shop_events_listener-a7c63dba65ccddc484f77541dc8ca437e60e1e9e297fe1c3faebf6523a0ede9b.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
      })();
    </script>
    <script class="boomerang">
      (function() {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.application = "storefront-renderer";
        window.BOOMR.themeName = "Refresh";
        window.BOOMR.themeVersion = "12.0.0";
        window.BOOMR.shopId = 57525239895;
        window.BOOMR.themeId = 125102456919;
        window.BOOMR.renderRegion = "gcp-asia-southeast1";
        window.BOOMR.url = "https://53b10b-3.myshopify.com/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
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
          bootstrap = function(parent, scriptId) {
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
            doc._boomrl = function() {
              this.domain = dom;
              bootstrap();
            };
            doc.write("<body onload='document._boomrl();'>");
          } else {
            win._boomrl = function() {
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
        if (link.relList && typeof link.relList.supports === "function" && link.relList.supports("preload") && ("as" in link)) {
          window.BOOMR.snippetMethod = "p";
          link.href = window.BOOMR.url;
          link.rel = "preload";
          link.as = "script";
          link.addEventListener("load", promote);
          link.addEventListener("error", function() {
            iframeLoader(true);
          });
          setTimeout(function() {
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
          document.addEventListener("onBoomerangLoaded", function(e) {
            e.detail.BOOMR.init({
              ResourceTiming: {
                enabled: true,
                trackedResourceTypes: ["script", "img", "css"]
              },
            });
            e.detail.BOOMR.t_end = new Date().getTime();
          });
        } else if (document.attachEvent) {
          document.attachEvent("onpropertychange", function(e) {
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
      })();
    </script>
  </head>
  <body class="gradient"><a class="skip-to-content-link button visually-hidden" href="#MainContent"> Skip to content </a>
    <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/quantity-popover.css?v=153075665213740339621703170505" rel="stylesheet" type="text/css" media="all" />
    <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-card.css?v=47260860684073105921703170503" rel="stylesheet" type="text/css" media="all" />
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/cart.js?v=56933888273975671431703170503" defer="defer"></script>
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/quantity-popover.js?v=19455713230017000861703170505" defer="defer"></script>
    <style>
      .drawer {
        visibility: hidden;
      }
    </style>
    <cart-drawer class="drawer is-empty">
      <div id="CartDrawer" class="cart-drawer">
        <div id="CartDrawer-Overlay" class="cart-drawer__overlay"></div>
        <div class="drawer__inner gradient color-background-1" role="dialog" aria-modal="true" aria-label="Your cart" tabindex="-1">
          <div class="drawer__inner-empty">
            <div class="cart-drawer__warnings center">
              <div class="cart-drawer__empty-content">
                <h2 class="cart__empty-text">Your cart is empty</h2><button class="drawer__close" type="button" onclick="this.closest('cart-drawer').close()" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close" fill="none" viewBox="0 0 18 17">
                    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
                  </svg></button><a href="/collections/all" class="button"> Continue shopping </a>
              </div>
            </div>
          </div>
          <div class="drawer__header">
            <h2 class="drawer__heading">Your cart</h2><button class="drawer__close" type="button" onclick="this.closest('cart-drawer').close()" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close" fill="none" viewBox="0 0 18 17">
                <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
              </svg></button>
          </div>
          <cart-drawer-items class=" is-empty">
            <form action="/cart" id="CartDrawer-Form" class="cart__contents cart-drawer__form" method="post">
              <div id="CartDrawer-CartItems" class="drawer__contents js-contents">
                <p id="CartDrawer-LiveRegionText" class="visually-hidden" role="status"></p>
                <p id="CartDrawer-LineItemStatus" class="visually-hidden" aria-hidden="true" role="status"> Loading... </p>
              </div>
              <div id="CartDrawer-CartErrors" role="alert"></div>
            </form>
          </cart-drawer-items>
          <div class="drawer__footer">
            <!-- Start blocks -->
            <!-- Subtotals -->
            <div class="cart-drawer__footer">
              <div></div>
              <div class="totals" role="status">
                <h2 class="totals__total">Estimated total</h2>
                <p class="totals__total-value">Rp 20,000 IDR</p>
              </div>
              <small class="tax-note caption-large rte">Taxes, discounts and shipping calculated at checkout </small>
            </div>
            <!-- CTAs -->
            <div class="cart__ctas">
              <noscript>
                <button type="submit" class="cart__update-button button button--secondary" form="CartDrawer-Form"> Update </button>
              </noscript>
              <button type="submit" id="CartDrawer-Checkout" class="cart__checkout-button button" name="checkout" form="CartDrawer-Form" disabled> Check out </button>
            </div>
          </div>
        </div>
      </div>
    </cart-drawer><script>
      document.addEventListener('DOMContentLoaded', function() {
        function isIE() {
          const ua = window.navigator.userAgent;
          const msie = ua.indexOf('MSIE ');
          const trident = ua.indexOf('Trident/');
          return msie > 0 || trident > 0;
        }
        if (!isIE()) return;
        const cartSubmitInput = document.createElement('input');
        cartSubmitInput.setAttribute('name', 'checkout');
        cartSubmitInput.setAttribute('type', 'hidden');
        document.querySelector('#cart').appendChild(cartSubmitInput);
        document.querySelector('#checkout').addEventListener('click', function(event) {
          document.querySelector('#cart').submit();
        });
      });
    </script>
    <!-- BEGIN sections: header-group --><div id="shopify-section-sections--15110094225495__announcement-bar" class="shopify-section shopify-section-group-header-group announcement-bar-section">
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-slideshow.css?v=107725913939919748051703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-slider.css?v=142503135496229589681703170504" rel="stylesheet" type="text/css" media="all" /><div class="utility-bar color-accent-1 gradient utility-bar--bottom-border"><div class="page-width utility-bar__grid"><div class="announcement-bar" role="region" aria-label="Announcement">
            <p class="announcement-bar__message h5">
              <span>WELCOME TO <?php echo $BRANDS ?> SITUS BONUS GARANSI KEKALAHAN</span>
            </p>
          </div><div class="localization-wrapper"></div></div></div>
    </div><div id="shopify-section-sections--15110094225495__header" class="shopify-section shopify-section-group-header-group section-header">
      <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991703170504" media="print" onload="this.media='all'">
      <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851703170504" media="print" onload="this.media='all'">
      <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271703170504" media="print" onload="this.media='all'">
      <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221703170504" media="print" onload="this.media='all'">
      <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771703170504" media="print" onload="this.media='all'">
      <link rel="stylesheet" href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101703170504" media="print" onload="this.media='all'">
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-cart-drawer.css?v=11376100058507027511703170503" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-cart.css?v=181291337967238571831703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-totals.css?v=15906652033866631521703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-discounts.css?v=152760482443307489271703170504" rel="stylesheet" type="text/css" media="all" />
      <noscript>
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991703170504" rel="stylesheet" type="text/css" media="all" />
      </noscript>
      <noscript>
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-search.css?v=165164710990765432851703170504" rel="stylesheet" type="text/css" media="all" />
      </noscript>
      <noscript>
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-menu-drawer.css?v=31331429079022630271703170504" rel="stylesheet" type="text/css" media="all" />
      </noscript>
      <noscript>
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-cart-notification.css?v=54116361853792938221703170504" rel="stylesheet" type="text/css" media="all" />
      </noscript>
      <noscript>
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-cart-items.css?v=145340746371385151771703170504" rel="stylesheet" type="text/css" media="all" />
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
          padding: 10px 3rem 10px 3rem;
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
            padding-top: 20px;
            padding-bottom: 20px;
          }
        }
      </style>
      <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/details-disclosure.js?v=13653116266235556501703170504" defer="defer"></script>
      <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/details-modal.js?v=25581673532751508451703170504" defer="defer"></script>
      <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/cart-notification.js?v=133508293167896966491703170503" defer="defer"></script>
      <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/search-form.js?v=133129549252120666541703170505" defer="defer"></script>
      <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/cart-drawer.js?v=105077087914686398511703170503" defer="defer"></script>
      <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
        <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z" fill="currentColor" />
        </symbol>
        <symbol id="icon-reset" class="icon icon-close" fill="none" viewBox="0 0 18 18" stroke="currentColor">
          <circle r="8.5" cy="9" cx="9" stroke-opacity="0.2" />
          <path d="M6.82972 6.82915L1.17193 1.17097" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)" />
          <path d="M1.22896 6.88502L6.77288 1.11523" stroke-linecap="round" stroke-linejoin="round" transform="translate(5 5)" />
        </symbol>
        <symbol id="icon-close" class="icon icon-close" fill="none" viewBox="0 0 18 17">
          <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
        </symbol>
      </svg>
      <sticky-header data-sticky-type="on-scroll-up" class="header-wrapper color-inverse gradient">
        <header class="header header--top-center header--mobile-center page-width header--has-menu">
          <header-drawer data-breakpoint="tablet">
            <details id="Details-menu-drawer-container" class="menu-drawer-container">
              <summary class="header__icon header__icon--menu header__icon--summary link focus-inset" aria-label="Menu">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-hamburger" fill="none" viewBox="0 0 18 16">
                    <path d="M1 .5a.5.5 0 100 1h15.71a.5.5 0 000-1H1zM.5 8a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1A.5.5 0 01.5 8zm0 7a.5.5 0 01.5-.5h15.71a.5.5 0 010 1H1a.5.5 0 01-.5-.5z" fill="currentColor">
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close" fill="none" viewBox="0 0 18 17">
                    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
                  </svg>
                </span>
              </summary>
              <div id="menu-drawer" class="gradient menu-drawer motion-reduce color-inverse">
                <div class="menu-drawer__inner-container">
                  <div class="menu-drawer__navigation-container">
                    <nav class="menu-drawer__navigation">
                    </nav>
                    <div class="menu-drawer__utility-links">
                      <div class="menu-drawer__localization header-localization"></div>
                      <ul class="list list-social list-unstyled" role="list"></ul>
                    </div>
                  </div>
                </div>
              </div>
            </details>
          </header-drawer>
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
                <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                  <predictive-search class="search-modal__form" data-loading-text="Loading...">
                    <form action="/search" method="get" role="search" class="search search-modal__form">
                      <div class="field">
                        <input class="search__input field__input" id="Search-In-Modal-1" type="search" name="q" value="" placeholder="Search" role="combobox" aria-expanded="false" aria-owns="predictive-search-results" aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false">
                        <label class="field__label" for="Search-In-Modal-1">Search</label>
                        <input type="hidden" name="options[prefix]" value="last">
                        <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                          <svg class="icon icon-close" aria-hidden="true" focusable="false">
                            <use xlink:href="#icon-reset">
                          </svg>
                        </button>
                        <button class="search__button field__button" aria-label="Search">
                          <svg class="icon icon-search" aria-hidden="true" focusable="false">
                            <use href="#icon-search">
                          </svg>
                        </button>
                      </div>
                      <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703170504" rel="stylesheet" type="text/css" media="all" />
                        <div class="predictive-search__loading-state">
                          <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                          </svg>
                        </div>
                      </div>
                      <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                    </form>
                  </predictive-search>
                  <button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                    <svg class="icon icon-close" aria-hidden="true" focusable="false">
                      <use href="#icon-close">
                    </svg>
                  </button>
                </div>
              </div>
            </details>
          </details-modal>
          <a href="/" class="header__heading-link link link--text focus-inset">
            <span class="h2">Situs Slot Gacor <?php echo $BRANDS ?></span>
          </a>
          <nav class="header__inline-menu">
          </nav>
          <div class="header__icons header__icons--localization header-localization">
            <div class="desktop-localization-wrapper"></div>
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
                  <div class="search-modal__content search-modal__content-bottom" tabindex="-1">
                    <predictive-search class="search-modal__form" data-loading-text="Loading...">
                      <form action="/search" method="get" role="search" class="search search-modal__form">
                        <div class="field">
                          <input class="search__input field__input" id="Search-In-Modal" type="search" name="q" value="" placeholder="Search" role="combobox" aria-expanded="false" aria-owns="predictive-search-results" aria-controls="predictive-search-results" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false">
                          <label class="field__label" for="Search-In-Modal">Search</label>
                          <input type="hidden" name="options[prefix]" value="last">
                          <button type="reset" class="reset__button field__button hidden" aria-label="Clear search term">
                            <svg class="icon icon-close" aria-hidden="true" focusable="false">
                              <use xlink:href="#icon-reset">
                            </svg>
                          </button>
                          <button class="search__button field__button" aria-label="Search">
                            <svg class="icon icon-search" aria-hidden="true" focusable="false">
                              <use href="#icon-search">
                            </svg>
                          </button>
                        </div>
                        <div class="predictive-search predictive-search--header" tabindex="-1" data-predictive-search>
                          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703170504" rel="stylesheet" type="text/css" media="all" />
                          <div class="predictive-search__loading-state">
                            <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                              <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                            </svg>
                          </div>
                        </div>
                        <span class="predictive-search-status visually-hidden" role="status" aria-hidden="true"></span>
                      </form>
                    </predictive-search>
                    <button type="button" class="search-modal__close-button modal__close-button link link--text focus-inset" aria-label="Close">
                      <svg class="icon icon-close" aria-hidden="true" focusable="false">
                        <use href="#icon-close">
                      </svg>
                    </button>
                  </div>
                </div>
              </details>
            </details-modal>
            <a href="/cart" class="header__icon header__icon--cart link focus-inset" id="cart-icon-bubble">
              <svg class="icon icon-cart-empty" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none">
                <path d="m15.75 11.8h-3.16l-.77 11.6a5 5 0 0 0 4.99 5.34h7.38a5 5 0 0 0 4.99-5.33l-.78-11.61zm0 1h-2.22l-.71 10.67a4 4 0 0 0 3.99 4.27h7.38a4 4 0 0 0 4-4.27l-.72-10.67h-2.22v.63a4.75 4.75 0 1 1 -9.5 0zm8.5 0h-7.5v.63a3.75 3.75 0 1 0 7.5 0z" fill="currentColor" fill-rule="evenodd" />
              </svg>
              <span class="visually-hidden">Cart</span>
            </a>
          </div>
        </header>
      </sticky-header>
      <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "Situs Slot Gacor <?php echo $BRANDS ?>",
          "sameAs": ["", "", "", "", "", "", "", "", ""],
          "url": "https:\/\/53b10b-3.myshopify.com"
        }
      </script>
    </div>
    <!-- END sections: header-group -->
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--15110093635671__main" class="shopify-section section">
        <section id="MainProduct-template--15110093635671__main" class="section-template--15110093635671__main-padding gradient color-background-1" data-section="template--15110093635671__main">
          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/section-main-product.css?v=141059467971401676601703170505" rel="stylesheet" type="text/css" media="all" />
          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-accordion.css?v=180964204318874863811703170503" rel="stylesheet" type="text/css" media="all" />
          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101703170504" rel="stylesheet" type="text/css" media="all" />
          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-slider.css?v=142503135496229589681703170504" rel="stylesheet" type="text/css" media="all" />
          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-rating.css?v=157771854592137137841703170504" rel="stylesheet" type="text/css" media="all" />
          <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-deferred-media.css?v=14096082462203297471703170504" rel="stylesheet" type="text/css" media="all" />
          <style data-shopify>
            .section-template--15110093635671__main-padding {
              padding-top: 45px;
              padding-bottom: 45px;
            }

            @media screen and (min-width: 750px) {
              .section-template--15110093635671__main-padding {
                padding-top: 60px;
                padding-bottom: 60px;
              }
            }
          </style>
          <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/product-info.js?v=81873523020508815201703170505" defer="defer"></script>
          <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/product-form.js?v=133081758708377679181703170505" defer="defer"></script>
          <div class="page-width">
            <div class="product product--small product--left product--thumbnail_slider product--mobile-hide grid grid--1-col grid--2-col-tablet">
              <div class="grid__item product__media-wrapper">
                <media-gallery id="MediaGallery-template--15110093635671__main" role="region" class="product__column-sticky" aria-label="Gallery Viewer" data-desktop-layout="thumbnail_slider">
                  <div id="GalleryStatus-template--15110093635671__main" class="visually-hidden" role="status"></div>
                  <slider-component id="GalleryViewer-template--15110093635671__main" class="slider-mobile-gutter">
                    <a class="skip-to-content-link button visually-hidden quick-add-hidden" href="#ProductInfo-template--15110093635671__main"> Skip to product information </a>
                    <ul id="Slider-Gallery-template--15110093635671__main" class="product__media-list contains-media grid grid--peek list-unstyled slider slider--mobile" role="list">
                      <li id="Slide-template--15110093635671__main-23471859597399" class="product__media-item grid__item slider__slide is-active scroll-trigger animate--fade-in" data-media-id="template--15110093635671__main-23471859597399">
                        <div class="product-media-container media-type-image media-fit-contain global-media-settings gradient constrain-height" style="--ratio: 1.0; --preview-ratio: 1.0;">
                          <noscript>
                            <div class="product__media media">
                              <img src="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1946" alt="" srcset="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=246 246w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=493 493w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=600 600w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=713 713w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=823 823w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=990 990w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1100 1100w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1206 1206w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1346 1346w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1426 1426w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1646 1646w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1946 1946w" width="1946" height="1946" sizes="(min-width: 1200px) 495px, (min-width: 990px) calc(45.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                            </div>
                          </noscript>
                          <modal-opener class="product__modal-opener product__modal-opener--image no-js-hidden" data-modal="#ProductModal-template--15110093635671__main">
                            <span class="product__media-icon motion-reduce quick-add-hidden product__media-icon--lightbox" aria-hidden="true">
                              <svg aria-hidden="true" focusable="false" class="icon icon-plus" width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.66724 7.93978C4.66655 7.66364 4.88984 7.43922 5.16598 7.43853L10.6996 7.42464C10.9758 7.42395 11.2002 7.64724 11.2009 7.92339C11.2016 8.19953 10.9783 8.42395 10.7021 8.42464L5.16849 8.43852C4.89235 8.43922 4.66793 8.21592 4.66724 7.93978Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.92576 4.66463C8.2019 4.66394 8.42632 4.88723 8.42702 5.16337L8.4409 10.697C8.44159 10.9732 8.2183 11.1976 7.94215 11.1983C7.66601 11.199 7.44159 10.9757 7.4409 10.6995L7.42702 5.16588C7.42633 4.88974 7.64962 4.66532 7.92576 4.66463Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8324 3.03011C10.1255 0.323296 5.73693 0.323296 3.03011 3.03011C0.323296 5.73693 0.323296 10.1256 3.03011 12.8324C5.73693 15.5392 10.1255 15.5392 12.8324 12.8324C15.5392 10.1256 15.5392 5.73693 12.8324 3.03011ZM2.32301 2.32301C5.42035 -0.774336 10.4421 -0.774336 13.5395 2.32301C16.6101 5.39361 16.6366 10.3556 13.619 13.4588L18.2473 18.0871C18.4426 18.2824 18.4426 18.599 18.2473 18.7943C18.0521 18.9895 17.7355 18.9895 17.5402 18.7943L12.8778 14.1318C9.76383 16.6223 5.20839 16.4249 2.32301 13.5395C-0.774335 10.4421 -0.774335 5.42035 2.32301 2.32301Z" fill="currentColor" />
                              </svg>
                            </span>
                            <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703170504" rel="stylesheet" type="text/css" media="all" />
                            <div class="loading__spinner hidden">
                              <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                              </svg>
                            </div>
                            <div class="product__media media media--transparent">
                              <img src="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1946" alt="" srcset="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=246 246w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=493 493w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=600 600w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=713 713w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=823 823w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=990 990w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1100 1100w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1206 1206w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1346 1346w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1426 1426w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1646 1646w, https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&amp;width=1946 1946w" width="1946" height="1946" class="image-magnify-lightbox" sizes="(min-width: 1200px) 495px, (min-width: 990px) calc(45.0vw - 10rem), (min-width: 750px) calc((100vw - 11.5rem) / 2), calc(100vw / 1 - 4rem)">
                            </div>
                            <button class="product__media-toggle quick-add-hidden product__media-zoom-lightbox" type="button" aria-haspopup="dialog" data-media-id="23471859597399">
                              <span class="visually-hidden"> Open media 1 in modal </span>
                            </button>
                          </modal-opener>
                        </div>
                      </li>
                    </ul>
                    <div class="slider-buttons no-js-hidden quick-add-hidden small-hide">
                      <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
                        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
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
                        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
                        </svg>
                      </button>
                    </div>
                  </slider-component>
                </media-gallery>
              </div>
              <div class="product__info-wrapper grid__item scroll-trigger animate--slide-in">
                <product-info id="ProductInfo-template--15110093635671__main" data-section="template--15110093635671__main" data-url="/products/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru" class="product__info-container product__column-sticky">
                  <p class="product__text inline-richtext">SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?></p>
                  <div class="product__title">
                    <h1><?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis</h1>
                    <a href="/products/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru" class="product__title">
                      <h2 class="h1"> <?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis </h2>
                    </a>
                  </div>
                  <div class="no-js-hidden" id="price-template--15110093635671__main" role="status">
                    <div class="
    price price--large price--sold-out price--show-badge">
                      <div class="price__container">
                        <div class="price__regular">
                          <span class="visually-hidden visually-hidden--inline">Regular price</span>
                          <span class="price-item price-item--regular"> Rp 20,000 </span>
                        </div>
                        <div class="price__sale">
                          <span class="visually-hidden visually-hidden--inline">Regular price</span>
                          <span>
                            <s class="price-item price-item--regular"></s>
                          </span>
                          <span class="visually-hidden visually-hidden--inline">Sale price</span>
                          <span class="price-item price-item--sale price-item--last"> Rp 20,000 </span>
                        </div>
                        <small class="unit-price caption hidden">
                          <span class="visually-hidden">Unit price</span>
                          <span class="price-item price-item--last">
                            <span></span>
                            <span aria-hidden="true">/</span>
                            <span class="visually-hidden">&nbsp;per&nbsp;</span>
                            <span></span>
                          </span>
                        </small>
                      </div>
                      <span class="badge price__badge-sale color-accent-1"> Sale </span>
                      <span class="badge price__badge-sold-out color-background-1"> Sold out </span>
                    </div>
                  </div>
                  <div class="product__tax caption rte"></div>
                  <div>
                    <form method="post" action="/cart/add" id="product-form-installment-template--15110093635671__main" accept-charset="UTF-8" class="installment caption-large" enctype="multipart/form-data">
                      <input type="hidden" name="form_type" value="product" />
                      <input type="hidden" name="utf8" value="✓" />
                      <input type="hidden" name="id" value="40410482147415">
                      <input type="hidden" name="product-id" value="6971672494167" />
                    </form>
                  </div>
                  <noscript class="product-form__noscript-wrapper-template--15110093635671__main">
                    <div class="product-form__input hidden">
                      <label class="form__label" for="Variants-template--15110093635671__main">Product variants</label>
                      <div class="select">
                        <select name="id" id="Variants-template--15110093635671__main" class="select__select" form="product-form-template--15110093635671__main">
                          <option selected="selected" disabled value="40410482147415">Default Title - Rp 20,000 - Sold out</option>
                        </select>
                        <svg aria-hidden="true" focusable="false" class="icon icon-caret" viewBox="0 0 10 6">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor">
                        </svg>
                      </div>
                    </div>
                  </noscript>
                  <div id="Quantity-Form-template--15110093635671__main" class="product-form__input product-form__quantity">
                    <label class="quantity__label form__label" for="Quantity-template--15110093635671__main"> Quantity <span class="quantity__rules-cart no-js-hidden hidden">
                        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703170504" rel="stylesheet" type="text/css" media="all" />
                        <div class="loading__spinner hidden">
                          <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                            <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                          </svg>
                        </div>
                        <span>( <span class="quantity-cart">0</span> in cart) </span>
                      </span>
                    </label>
                    <div class="price-per-item__container">
                      <quantity-input class="quantity" data-url="/products/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru" data-section="template--15110093635671__main">
                        <button class="quantity__button no-js-hidden" name="minus" type="button">
                          <span class="visually-hidden">Decrease quantity for <?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis</span>
                          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-minus" fill="none" viewBox="0 0 10 2">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M.5 1C.5.7.7.5 1 .5h8a.5.5 0 110 1H1A.5.5 0 01.5 1z" fill="currentColor">
                          </svg>
                        </button>
                        <input class="quantity__input" type="number" name="quantity" id="Quantity-template--15110093635671__main" data-cart-quantity="0" data-min="1" min="1" step="1" value="1" form="product-form-template--15110093635671__main" />
                        <button class="quantity__button no-js-hidden" name="plus" type="button">
                          <span class="visually-hidden">Increase quantity for <?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis</span>
                          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-plus" fill="none" viewBox="0 0 10 10">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.51a.5.5 0 000 1h3.5l.01 3.5a.5.5 0 001-.01V5.5l3.5-.01a.5.5 0 00-.01-1H5.5L5.49.99a.5.5 0 00-1 .01v3.5l-3.5.01H1z" fill="currentColor">
                          </svg>
                        </button>
                      </quantity-input>
                    </div>
                    <div class="quantity__rules caption no-js-hidden" id="Quantity-Rules-template--15110093635671__main"></div>
                  </div>
                  <div>
                    <product-form class="product-form" data-hide-errors="false" data-section-id="template--15110093635671__main">
                      <div class="product-form__error-message-wrapper" role="alert" hidden>
                        <svg aria-hidden="true" focusable="false" class="icon icon-error" viewBox="0 0 13 13">
                          <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2" />
                          <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7" />
                          <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white" />
                          <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                        </svg>
                        <span class="product-form__error-message"></span>
                      </div>
                      <form method="post" action="/cart/add" id="product-form-template--15110093635671__main" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form">
                        <input type="hidden" name="form_type" value="product" />
                        <input type="hidden" name="utf8" value="✓" />
                        <input type="hidden" name="id" value="40410482147415" disabled class="product-variant-id">
                        <div class="product-form__buttons">
                          <button id="ProductSubmitButton-template--15110093635671__main" type="submit" name="add" class="product-form__submit button button--full-width button--secondary" disabled>
                            <span>Sold out </span>
                            <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-loading-spinner.css?v=116724955567955766481703170504" rel="stylesheet" type="text/css" media="all" />
                            <div class="loading__spinner hidden">
                              <svg aria-hidden="true" focusable="false" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle>
                              </svg>
                            </div>
                          </button>
                          <div data-shopify="payment-button" class="shopify-payment-button">
                            <dynamic-checkout wallet-configs="[]" access-token="cf630f14324d56bd94c34321a71ce317" buyer-country="ID" buyer-locale="en" buyer-currency="IDR" shop-id="57525239895" disabled>
                              <div class="shopify-payment-button__button shopify-payment-button__skeleton" role="button" disabled aria-hidden="true">&nbsp;</div>
                            </dynamic-checkout>
                          </div>
                        </div>
                        <input type="hidden" name="product-id" value="6971672494167" />
                      </form>
                    </product-form>
                    <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-pickup-availability.css?v=34645222959864780961703170504" rel="stylesheet" type="text/css" media="all" />
                    <pickup-availability class="product__pickup-availabilities no-js-hidden quick-add-hidden" data-root-url="situs-slot-gacor.html" data-variant-id="40410482147415" data-has-only-default-variant="true" data-product-page-color-scheme="gradient color-background-1">
                      <template>
                        <pickup-availability-preview class="pickup-availability-preview">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true" focusable="false" class="icon icon-unavailable" fill="none" viewBox="0 0 20 20">
                            <path fill="#DE3618" stroke="#fff" d="M13.94 3.94L10 7.878l-3.94-3.94A1.499 1.499 0 103.94 6.06L7.88 10l-3.94 3.94a1.499 1.499 0 102.12 2.12L10 12.12l3.94 3.94a1.497 1.497 0 002.12 0 1.499 1.499 0 000-2.12L12.122 10l3.94-3.94a1.499 1.499 0 10-2.121-2.12z" />
                          </svg>
                          <div class="pickup-availability-info">
                            <p class="caption-large">Couldn&#39;t load pickup availability</p>
                            <button class="pickup-availability-button link link--text underlined-link"> Refresh </button>
                          </div>
                        </pickup-availability-preview>
                      </template>
                    </pickup-availability>
                    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/pickup-availability.js?v=66138958121968076331703170504" defer="defer"></script>
                  </div>
                  <div class="product__description rte quick-add-hidden">
                    <p>
                      <a href="https://satekambing2.pages.dev/" target="_blank" title="slot-bonus" rel="noopener noreferrer nofollow">
                        <img alt="link-slot-bonus-new-member" src="https://i.ibb.co/kB4yYX9/daftar-gif.gif" alt="Daftar">
                      </a>
                    </p>
<p><?php echo $BRANDS ?> : Situs Slot Online Terpercaya <a href="./" title="server thailand">Server Thailand</a> yang dapat memberikan kemenangan Maxwin Kepada Member dengan berkali-kali. <?php echo $BRANDS ?> juga memberikan bonus new member yang banyak dan tentu saja WD dengan jumlah TO X3 saja. Tunggu apalagi bosku gaskan lah kapan mau JP kalau gak hari ini !!</p>
<ul>
<li><a href="./" title="slot server thailand">Slot Server Thailand</a> - Situs Slot Gacor <?php echo $BRANDS ?></li>
</ul>
                  </div>
                  <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/share.js?v=13024540447964430191703170505" defer="defer"></script>
                  <a href="/products/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru" class="link product__view-details animate-arrow"> View full details <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
                    </svg>
                  </a>
                </product-info>
              </div>
            </div>
            <product-modal id="ProductModal-template--15110093635671__main" class="product-media-modal media-modal">
              <div class="product-media-modal__dialog color-background-1 gradient" role="dialog" aria-label="Media gallery" aria-modal="true" tabindex="-1">
                <button id="ModalClose-template--15110093635671__main" type="button" class="product-media-modal__toggle" aria-label="Close">
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" class="icon icon-close" fill="none" viewBox="0 0 18 17">
                    <path d="M.865 15.978a.5.5 0 00.707.707l7.433-7.431 7.579 7.282a.501.501 0 00.846-.37.5.5 0 00-.153-.351L9.712 8.546l7.417-7.416a.5.5 0 10-.707-.708L8.991 7.853 1.413.573a.5.5 0 10-.693.72l7.563 7.268-7.418 7.417z" fill="currentColor">
                  </svg>
                </button>
                <div class="product-media-modal__content color-background-1 gradient" role="document" aria-label="Media gallery" tabindex="0">
                  <img class="global-media-settings global-media-settings--no-shadow" srcset="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&width=550 550w,https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369 650w" sizes="(min-width: 750px) calc(100vw - 22rem), 1100px" src="https://i.ibb.co/WsSnC4y/slot-server-thailand-1.png?v=1703170369&width=1445" alt="<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis" loading="lazy" width="1100" height="1100" data-media-id="23471859597399">
                </div>
              </div>
            </product-modal>
            <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/product-modal.js?v=116616134454508949461703170505" defer="defer"></script>
            <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/media-gallery.js?v=96661908581229995091703170504" defer="defer"></script>
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                function isIE() {
                  const ua = window.navigator.userAgent;
                  const msie = ua.indexOf('MSIE ');
                  const trident = ua.indexOf('Trident/');
                  return msie > 0 || trident > 0;
                }
                if (!isIE()) return;
                const hiddenInput = document.querySelector('#product-form-template--15110093635671__main input[name="id"]');
                const noScriptInputWrapper = document.createElement('div');
                const variantSwitcher = document.querySelector('variant-radios[data-section="template--15110093635671__main"]') || document.querySelector('variant-selects[data-section="template--15110093635671__main"]');
                noScriptInputWrapper.innerHTML = document.querySelector('.product-form__noscript-wrapper-template--15110093635671__main').textContent;
                variantSwitcher.outerHTML = noScriptInputWrapper.outerHTML;
                document.querySelector('#Variants-template--15110093635671__main').addEventListener('change', function(event) {
                  hiddenInput.value = event.currentTarget.value;
                });
              });
            </script>
            <script type="application/ld+json">
              {
                "@context": "http://schema.org/",
                "@type": "Product",
                "name": "<?php echo $BRANDS ?> | 7 Situs Slot Online & Slot Demo Pragmatic Gratis",
                "url": "https:\/\/53b10b-3.myshopify.com\/products\/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru",
                "image": ["https:\/\/53b10b-3.myshopify.com\/cdn\/shop\/files\/promo-bonus-new-member.webp?v=1703170369\u0026width=1920"],
                "description": "\n<?php echo $BRANDS ?> Adalah 7 Situs Slot Online & Slot Demo Pragmatic Gratis. <?php echo $BRANDS ?> Hadir Dalam Banyak Permainan Menarik Dan Jika Gagal X500 Maka Langsung DiKembalikan Saldo 100%",
                "brand": {
                  "@type": "Brand",
                  "name": "SLOT GARANSI KEKALAHAN <?php echo $BRANDS ?>"
                },
                "offers": [{
                  "@type": "Offer",
                  "availability": "http://schema.org/OutOfStock",
                  "price": 0.0,
                  "priceCurrency": "IDR",
                  "url": "https:\/\/53b10b-3.myshopify.com\/products\/ggdewa-link-situs-slot-bonus-new-member-100-di-awal-to-5x-kecil-terbaru?variant=40410482147415"
                }]
              }
            </script>
          </div>
        </section>
      </section>
      <section id="shopify-section-template--15110093635671__related-products" class="shopify-section section">
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-card.css?v=47260860684073105921703170503" rel="stylesheet" type="text/css" media="all" />
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-price.css?v=70172745017360139101703170504" rel="stylesheet" type="text/css" media="all" />
        <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/section-related-products.css?v=80324771040738084201703170505" rel="stylesheet" type="text/css" media="all" />
        <style data-shopify>
          .section-template--15110093635671__related-products-padding {
            padding-top: 0px;
            padding-bottom: 45px;
          }

          @media screen and (min-width: 750px) {
            .section-template--15110093635671__related-products-padding {
              padding-top: 0px;
              padding-bottom: 60px;
            }
          }
        </style>
        <div class="color-background-1 gradient no-js-hidden">
          <product-recommendations class="related-products page-width section-template--15110093635671__related-products-padding isolate scroll-trigger animate--slide-in" data-url="/recommendations/products?section_id=template--15110093635671__related-products&product_id=6971672494167&limit=4"></product-recommendations>
        </div>
      </section>
    </main>
    <!-- BEGIN sections: footer-group -->
    <section id="shopify-section-sections--15110094159959__newsletter" class="shopify-section shopify-section-group-footer-group section">
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/newsletter-section.css?v=62410470717655853621703170504" rel="stylesheet" type="text/css" media="all" />
      <style data-shopify>
        .section-sections--15110094159959__newsletter-padding {
          padding-top: 21px;
          padding-bottom: 0px;
        }

        @media screen and (min-width: 750px) {
          .section-sections--15110094159959__newsletter-padding {
            padding-top: 28px;
            padding-bottom: 0px;
          }
        }
      </style>
      <div class="newsletter center ">
        <div class="newsletter__wrapper color-inverse gradient content-container isolate content-container--full-width section-sections--15110094159959__newsletter-padding">
          <h2 class="inline-richtext h1 scroll-trigger animate--slide-in" data-cascade style="--animation-order: 1;"> Subscribe to our Channel </h2>
          <div>
            <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="newsletter-form">
              <input type="hidden" name="form_type" value="customer" />
              <input type="hidden" name="utf8" value="✓" />
              <input type="hidden" name="contact[tags]" value="newsletter">
              <div class="newsletter-form__field-wrapper scroll-trigger animate--slide-in" data-cascade style="--animation-order: 2;">
                <div class="field">
                  <input id="NewsletterForm--sections--15110094159959__newsletter" type="email" name="contact[email]" class="field__input" value="" aria-required="true" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email" required>
                  <label class="field__label" for="NewsletterForm--sections--15110094159959__newsletter"> Slot Gacor <?php echo $BRANDS ?> </label>
                  <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe" aria-label="Subscribe">
                    <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
                    </svg>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div id="shopify-section-sections--15110094159959__footer" class="shopify-section shopify-section-group-footer-group">
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/section-footer.css?v=125160298726032154631703170505" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-newsletter.css?v=4727253280200485261703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-list-menu.css?v=151968516119678728991703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-list-payment.css?v=69253961410771838501703170504" rel="stylesheet" type="text/css" media="all" />
      <link href="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/component-list-social.css?v=35792976012981934991703170504" rel="stylesheet" type="text/css" media="all" />
      <style data-shopify>
        .footer {
          margin-top: 0px;
        }

        .section-sections--15110094159959__footer-padding {
          padding-top: 33px;
          padding-bottom: 45px;
        }

        @media screen and (min-width: 750px) {
          .footer {
            margin-top: 0px;
          }

          .section-sections--15110094159959__footer-padding {
            padding-top: 44px;
            padding-bottom: 60px;
          }
        }
      </style>
      <footer class="footer color-inverse gradient section-sections--15110094159959__footer-padding">
        <div class="footer__content-top page-width">
          <div class="footer-block--newsletter scroll-trigger animate--slide-in" data-cascade></div>
        </div>
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
              <small class="copyright__content">&copy; 2023, <a href="situs-slot-gacor-<?php echo $BRANDS ?>.html" title="">Situs Slot Gacor <?php echo $BRANDS ?></a>
              </small>
              <small class="copyright__content">
                <a target="_blank" rel="nofollow" href="situs-slot-gacor.html">Powered by Slot Gacor <?php echo $BRANDS ?></a>
              </small>
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
      window.shopUrl = 'https://53b10b-3.myshopify.com';
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
    <script src="//53b10b-3.myshopify.com/cdn/shop/t/2/assets/predictive-search.js?v=162273246065392412141703170504" defer="defer"></script>
  </body>
</html>
