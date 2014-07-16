#! /bin/bash

git pull origin master
echo "Pull ended"

git add .
echo "Add ended"

git commit -m "$1"
echo "Commit ended"

git push origin master
echo "Push ended"
