<?php
$text = <<<EOT
{
  "reservations": [
    {
      "reservationID": "555555555",
      "totalAmount": 506.99,
      "currency": "USD",
      "checkInDate": "2020-05-10",
      "checkOutDate": "2020-05-13",
      "dailyRate": 142.01,
      "pointsUsed": 0,
      "propertyName": "The Royal Islander",
      "numberOfAdults": "1",
      "numberOfChildren": "0",
      "numberOfRooms": "1",
      "crsId": "490817540",
      "bookingEngine": {
        "modifyLink": "https://reservations-p1.travelclick.com/86182?confirmid=490817540&languageid=en",
        "Id": "86182"
      },
      "confidentialRate": false
    },
    {
      "reservationID": "44444444",
      "totalAmount": 506.99,
      "currency": "USD",
      "checkInDate": "2020-05-12",
      "checkOutDate": "2020-05-15",
      "dailyRate": 142.01,
      "pointsUsed": 0,
      "propertyName": "The Royal Islander",
      "numberOfAdults": "2",
      "numberOfChildren": "0",
      "numberOfRooms": "1",
      "crsId": "490812164",
      "bookingEngine": {
        "modifyLink": "https://reservations-p1.travelclick.com/86182?confirmid=490812164&languageid=en",
        "Id": "86182"
      },
      "confidentialRate": false
    }
  ]
}
EOT;

return $text;