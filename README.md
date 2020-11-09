# cme-ga4yt
 Google Analytics for YouTube Tracking

---

Set the your user ID custom dimension index by using the cme_user_id_custom_dimension_index filter hook.

```php
add_filter( 'cme_user_id_custom_dimension_index', function($custom_dimension_index) {
	return '5'; // Change this to match your CD index number that's set in GA.
} );

```
