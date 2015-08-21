<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-61014858-1', 'auto');
ga('send', 'pageview');

</script>

<script>
/**
* Function that tracks a click on an outbound link in Google Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label.
*/
var trackOutboundLink = function(url) {
  ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
  function () {
    document.location = url;
  }
});
}
</script>

<script>
/**
Sjekker om cookie eksisterer, redirecter hvis, eller setter ønsked redirect hvis ikke
*/

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return unescape(dc.substring(begin + prefix.length, end));
}

function doSomething() {
    var semester = getCookie("semester");

    if (semester == 1) {
        // Redirect bruker til 1. semester osv
        window.location.href = '/1semester.php';
    }
    else if (semester == 2) {
        window.location.href = '/2semester.php';
    }
    else if (semester == 3) {
        window.location.href = '/3semester.php';
    }
    else if (semester == 4) {
        window.location.href = '/4semester.php';
    }
    else if (semester == 5) {
        window.location.href = '/5semester.php';
    }
    else if (semester == 6) {
        window.location.href = '/6semester.php';
    }
    else (semester == null) {
        // Få bruker til å velge foretrukket semester;
        do{
          var semester = parseInt(window.prompt("Vennlighst velg ditt semester (1-6)", ""), 10);
        }while(isNaN(selection) || selection > 6 || selection < 1);
        document.cookie="semester=" + semester;
    }
}

</script>

</head>

<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5JDJTS"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JDJTS');</script>
<!-- End Google Tag Manager -->
