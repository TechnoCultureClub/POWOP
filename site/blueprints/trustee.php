<?php if(!defined('KIRBY')) exit ?>

title: Trustee
pages:
  template: trustee
files: true
fields:
  name:
    label: Name
    type:  text
  short: 
    label: In a few words
    type: text
    validate: 
      min:4
      max:120
  link:
    label: Link (http://)
    type: Url
  datestart:
    label: Date start
    type: date
  datestop:
    label: Date stop 
    type: date 
  text:
    label: Text
    type:  textarea