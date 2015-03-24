go_to_splash = "http://example.com/splash.php";
 
// number of days cookie lives for - in this case, 1 day
num_days = 1;
function ged(noDays){
    var today = new Date();
    var expr = new Date(today.getTime() + noDays*24*60*60*1000);
    return  expr.toGMTString();
}
 
function readCookie(cookieName){
    var start = document.cookie.indexOf(cookieName);
    if (start == -1){
                // a cookie will be added and the page redirects to splash.php
                document.cookie = "seenit=yes; expires=" + ged(num_days);
        window.location = go_to_splash;
    } else {
               // if a cookie still exists, there will be no redirect
    }
}
 
readCookie("seenit");