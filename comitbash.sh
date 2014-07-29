#! /bin/bash

git pull origin master
echo "---Pull ended\n"

git add .
echo "Add ended\n"

git commit -m "$1"
echo "Commit ended\n"

git push origin master
echo "Push ended\n"
