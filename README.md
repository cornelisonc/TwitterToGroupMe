TwitterToGroupMe
================

A script which can be used to auto-post tweets to a GroupMe bot

###Documentation
I have this script running on a Ubuntu (Precise) server with the following cronjob:

 */5   *     *   *   *     php path/to/TwitterToGroupme/GetTweets.php

You will need to complete the Variables.php file with your specific variables, for things like:
*Your GroupMe Bot's information
*The information regarding the twitter account you would like to crosspost
*Your Twitter API keys

Many thanks to [j7mbo](https://github.com/J7mbo "j7mbo") for his [twitter api wrapper for php](https://github.com/J7mbo/twitter-api-php "Twitter API wrapper for PHP), which made this entire thing worlds easier :)
