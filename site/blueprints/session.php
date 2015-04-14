<?php if(!defined('KIRBY')) exit ?>

title: Session
pages:
  template: project
files: true
fields:
  title:
    label: Title (ex. Summer 2015)
    type:  text
    width: 1/2
  eventDate: 
    label: Event date 
    type: date
    width: 1/2
  venueSettings: 
    label: Venue settings
    type: headline 
  venueName: 
    label: Venue name
    type: text
    width: 1/2
  registrationLink: 
    label: Registration Link
    type: Url
    width: 1/2
  venueAddress:
    label: Address (line 1)
    type: text
  venueAddress2:
    label: Address (line 2)
    type: text
  venuePostCode:
    label: Postcode
    type: text
    width: 1/2
  venueCity: 
    label: City
    type: text
    width: 1/2
  eventDetails: 
    label: Event details
    type: headline
  eventStartTime: 
    label: Event start time
    type: time
    width: 1/2
  eventEndTime:
    label: Event end time
    type: time
    width: 1/2
  call4Projects:
    label: Call for projects
    type: headline
  startDate: 
    label: Start date
    type: date
    width:1/2
  endDate:
    label: End date
    type: date
    width: 1/2
  text:
    label: Text
    type:  textarea
