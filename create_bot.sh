#!/usr/bin/env bash
source private_vars.sh

START=''"'"'{"bot":{"name":"@CoMoNSCoder","group_id":"'
MIDDLE='"}}'"'"' https://api.groupme.com/v3/bots?token='
echo curl -X POST -d $START$GroupID$MIDDLE$AccessToken
