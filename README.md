# cme-ga4yt

 Google Analytics for YouTube Tracking
 
 Play around with the [live demo](https://caughtmyeyedev.000webhostapp.com/youtube-video-tracking).

---

## Install

1. Download the zip file from GitHub.
1. Log in to your WordPress site as an admin.
1. Navigate to Plugins > Add New.
1. Click Upload Plugin.
1. Select the zip file downloaded in step 1.
1. Click Install Now.
1. Click Activate.

Next: Write your filter hook for your user ID custom dimension index.

## PHP Filter Hook

Add a call to the cme_user_id_custom_dimension_index filter hook to your child theme’s functions.php file. Change the custom dimension index to match the user ID custom dimension index in your Google Analytics property.

Set the your user ID custom dimension index by using the cme_user_id_custom_dimension_index filter hook.

```php
add_filter( 'cme_user_id_custom_dimension_index', function($custom_dimension_index) {
	return '5'; // Change this to match your CD index number that's set in GA.
} );

```

---

## Screen Captures

**COMING SOON**
