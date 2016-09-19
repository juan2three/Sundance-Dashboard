Sundance Marketing Solutions' lobby dashboard
=============================================

This is my first PHP project which is currently utilized in the front lobby of Sundance Marketing Solutions' lobby

This whole project was developed in PHP and utilizing various APIs for ease of viewing. This project is not meant to be responsive even though Bootstrap was used. The reason why is because its housed in a single display. Each page redirects to the next one after a timer is up. The main purpose of this project was to make clients feel welcomed and show information while they wait in our lobby.

## Index.php

This is the main screen which uses the OpenWeather's API to acquire the current weather, condition and icon. Multiple conditional statements have been placed to sort through the condition and select its respective icon.
The time and date are simple javascript call backs.


## Birthdays.php

This is the second screen on the sequence, this page utilizes Google Calendar's API to sort through its events, find today's birthdays and print the person's name underneath the "Happy Birthday" sign. If there are no birthdays today, it will redirect to the next screen in the sequence which includes client events.

## Events.php

Much like Birthdays.php, events.php utilizes Google Calendar's API to sort through its events, find today's client event and print the client's name underneath the "Welcome" sign. If there are no events today, it will redirect to the next screen in the sequence.

## Twitter.php

This page is intended to show the 3 most recent tweets from the company. This utilizes a modified version of Jason Mayes' TwitterFetcher (http://jasonmayes.com/projects/twitterApi/), I used this route instead of using Twitters embedded sections is because of customization.

