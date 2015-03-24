# WIRELESS HOTSPOT PHP VIDEO SCRIPT

ABOUT
=====

Video-Hotspot is a responsive php script that adds Video functionality to any pre-existing Wireless Hotspot page. 

Users are forced to watch a video, which is selected randomly from a list of videos. This can be used for advertisements.
This hotspot solution is implemented using wifiDog on open-wrt and AuthPuppy. I believe any existing hotspot solution will be suported.

The video plays automatically on all modern pc browsers but users with mobile devices will have to use the play icon located on the video frame.

It also includes a cookie feature that redirects first time users to a Splash Page (Terms and Conditions Page). This is useful when you want your users see the "Accept Terms and Conditions" page just once in a certain period. (A similar splash concept introduced by [Forbes.com](http://forbes.com).

The video player is implemented using [video.js](http://www.videojs.com)


REQUIREMENTS
============

 * Any PHP server. eg. [XAMPP](https://www.apachefriends.org)

INSTALLING
==========

Just copy the files to any folder on your web server. Now navigate to the script like this `webserver.com/[folder]`
(where `webserver.com` is the name of your webserver, can be `localhost` for local users, and `[folder]` is the folder where you extracted the script to).

Replace `test1.mp4` in both the `index.php` and the `splash.php` (Where the `splash.php` is the page with the "Accept Terms and Conditions") with the link of any .mp4 video of your choice. Do the same for the other 6 links. You can remove some links or add more depending on your needs. More about the random video feature is explained in details in the Usage section of this document.

In the video source section, replace `http://example.com/videos/` in both the `index.php` and the `splash.php` with the path of the videos of your choice and remember to include the `/` at the end of the path.

In the `js` folder, locate `cookie.js` and replace `http://example.com/splash.php` with the url of the splash page, based on where the script is located (Following the example above, the link will be `webserver.com/[folder]/splash.php`).



---

USAGE
===========

* VIDEOS

Videos are randomly selected using the php `array_rand` function, which according to research is a better alternative to the `shuffle` function. The video urls are stored in the array, `$url`, which is then shuffled and stored in `$video`.

The example in the file has an array of 7 videos. You can easily add or remove video urls to extend or decrease the number of videos in the array.

* Accept Terms Page

This is the page loaded the first time the user visits the Hotspot Page. For first time users, a cookie is created and the `splash.php` page is called, which contains the "Terms and Conditions". The Ajax script which displays the "Accept Terms" after the video is ended can be found in the `splash.js` file which is located in the `/js` folder. This script tells the browser to call the HTML form after the video ends.

To change the content of that Ajax script, put content of your HTML body and the accept terms form into the `var htmlform = '';`. Example: `var htmlform = 'html_body_and_form_goes_here';`

* Regular Hotspot Page

This is the page loaded on a regular basis to the user after the user has visited the "Terms and Conditions". The user now has a cookie after visiting the "Terms and Conditions" page so there is no redirection. The regular page is the `index.php`. Here, you an decide to just place a simple button to tell the user to continue to browse, like I implemented in my version. You can even decide not to show video to the user again after, he/she sees the video for the first time. The Ajax script which displays the "Continue to Browse" button after the video is ended can be found in the `hotspot.js` file which is located in the `/js` folder. This script tells the browser to call the HTML form after the video ends.

To change the content of that Ajax script, put content of your HTML body and the accept terms form into the `var htmlform = '';`. Example: `var htmlform = 'html_body_and_form_goes_here';`

* Cookies

For first time users, a cookie is created and they are redirected to a splash page (which is the "Terms and Conditions" page in our example). You can change the url first time users are redirected to in the cookie.js file found in the/js folder. You can also set the validity period of the cookies in the cookie.js file found in the/js folder.

To change the splash page, locate `cookie.js` in the `/js` folder and replace `http://example.com/splash.php` to any url of your choice. Remember this is the url First time visitors will be redirected to.

To change the validity period of the cookies, locate this line `num_days = 1;` in the `cookie.js` file, where 1 is the validity period of the cookies in days (in my example, I set it to 1 day). Change the number to your desired number.

HELP
==========
For any suggestions, problems or enquiries contact me at: [EMAIL 1](mailto:kofikwarteng1@gmail.com), [EMAIL 2](mailto:kofi@artheontech.com), [EMAIL 3](mailto:kofi.kwarteng@atrams.co)
