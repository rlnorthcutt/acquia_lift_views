# acquia_lift_views
Provides an integration between Acquia Lift and Drupal Views. The strategy is to store the current user's segments in a cookie. Then, we can use the views_cookie module to allow that cookie to be used as a default arguement in views. 

This gets the user's segment(s) into Views. From here, we need to add a relationship between the segment name and another entity (user, node, term) so Views can actually filter the argument. Keep in mind that often there isn't a 1:1 relationship between segments and taxonomy... so we need *some* type of connection.

This approach also gives us the ability to target segments to virtually any entity in Drupal.

## Components

### Lift Segment Field
This provides a field that lists the segments that are currently available. This field is added to terms (or any other entity) so the author can select which segment(s) are applicable to this entity. A few notes:
- this is updated via a queue worker set by cron
- this can be manually updated via the admin form
- when segments are deleted, the field is changed to "--DELETED--"
- there is a View that shows all entities with a DELETED segment for housekeeping

### Lift Segment Cookie
This is some very simple JS code that creates the cookie for the segments on the current user. It might also create additional cookies based on future additions.

## Future state
Add some additional options to set cookies for geolocation by zip code & region, time of day, device type, etc. In other words - extend some of the anonymous profiling functionality of Lift into Views.
