# WIRELESS HOTSPOT PHP VIDEO SCRIPT

ABOUT
=====

Video-Hotspot is a responsive php script that adds Video functionality to any pre-existing Wireless Hotspot page. 

Users are forced to watch a video, which is selected randomly from a list of videos. This can be used for advertisements.
This hotspot solution is implemented using wifiDog on open-wrt and AuthPuppy. I believe any existing hotspot solution will be suported.

The video plays automatically on all modern pc browsers but users with mobile devices will have to use the play icon located on the video.

The video player is implemented using [video.js](http://www.videojs.com)


REQUIREMENTS
============

 * Any PHP server. eg. [XAMPP](https://www.apachefriends.org)

INSTALLING
==========

Just copy the files to any folder on your web server. Now navigate to the script like this `webserver.com/[folder]`
(where `webserver.com` is the name of your webserver, can be `localhost` for local users, and `[folder]` is the folder where you extracted the script to).

Replace `http://example.com/images/test1.mp4` with the link of any .mp4 video of your choice. Do the same for the other links


---

USAGE
==========

* VIDEOS

Videos are randomly selected using the php `shuffle` function. The video urls are stored in the array, `$video_array`, which is then shuffled and stored in `$video`.

The example in the file has an array of 4 videos. You can easily add more video urls to extend the number of videos in the array.

* Hotspot

The "Accept Terms" page is controlled by the hotspot.js file which is located in the `/js` folder. This script tells the browser to call the HTML form after the video ends.

To change the form, put content of your HTML body and the accept terms form into the `var htmlform = '';`. Example: `var htmlform = 'html_body_and_form_goes_here';`

HELP
==========
For any suggestions, problems or enquiries contact me at: [EMAIL 1](mailto:kofikwarteng1@gmail.com), [EMAIL 2](mailto:kofi@artheontech.com), [EMAIL 3](mailto:kofi.kwarteng@atrams.co)
