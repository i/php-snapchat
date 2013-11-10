<?php

require_once('/home/kaushal/projects/php-snapchat/src/snapchat.php');

// Log in:
$snapchat = new Snapchat('brosbrosbros', 'passwordhere');

// Get your feed:
$snaps = $snapchat->getSnaps();

print "here";

// Download a specific snap:
/*$data = $snapchat->getMedia('122FAST2FURIOUS334r');
file_put_contents('/home/dan/snap.jpg', $data);

// Mark the snap as viewed:
$snapchat->markSnapViewed('122FAST2FURIOUS334r');

// Screenshot!
$snapchat->markSnapShot('122FAST2FURIOUS334r');
 */

// Upload a snap and send it to me for 8 seconds:
$id = $snapchat->upload(
    Snapchat::MEDIA_IMAGE,
    file_get_contents('/home/kaushal/projects/php-snapchat/snap.jpg')
);

print "here";

$snapchat->send($id, array('brosbrosbros', 'dethskul'), 8);

// Destroy the evidence:
$snapchat->clearFeed();

// Get a list of your friends:
$friends = $snapchat->getFriends();

// Add some people as friends:
$snapchat->addFriends(array('bill', 'bob', 'bart'));

// Get a list of the people you've added:
$added = $snapchat->getAddedFriends();

// Find out who Bill and Bob snap the most:
$bests = $snapchat->getBests(array('bill', 'bob'));

// Set Bart's display name:
$snapchat->setDisplayName('bart', 'Barty');

// Block Bart:
$snapchat->block('bart');

// Unblock Bart:
$snapchat->unblock('bart');

// Delete Bart entirely:
$snapchat->deleteFriends(array('bart'));

// You only want your friends to be able to snap you:
$snapchat->updatePrivacy(Snapchat::PRIVACY_FRIENDS);

// You want to change your email:
$snapchat->updateEmail('dan@example.com');

// Log out:
$snapchat->logout();

?>
