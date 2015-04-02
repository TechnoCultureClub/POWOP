<?php if(!defined('KIRBY')) exit ?>

title: Trustee
pages: false 
files: true
fields:
  title:
    label: Name
    type:  text
  boite:
    label: Company
    type: text
    width:1/2
  Website:
    label: Link (http://)
    type: Url
    width:1/2
  linkedin:
    label: LinkedIn
    type: Url
  short: 
    label: In a few words
    type: text
    validate: 
      min:4
      max:120
  datestart:
    label: Date start
    type: date
  datestop:
    label: Date stop 
    type: date 
  text:
    label: Text
    type:  textarea