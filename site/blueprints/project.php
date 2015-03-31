<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
    width: 3/4
  winner: 
    label: Winner ? 
    type: checkbox
    text: check if yes
    width: 1/4
  baseline:
    label: Baseline
    type:  text
  ownerName:
    label: Name of user
    type: text
    width: 1/2
  ownerLink: 
    label: Project owner link
    type: Url
    width: 1/2
  projectUrl: 
    label: Project Url
    type: Url
  vimeoLink:
    label: Vimeo code (ex. 499276411)
    type: text
    width: 1/2
  youLink:
    label: ...Or Youtube code (gh490ae32)
    type: text
    width: 1/2
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags