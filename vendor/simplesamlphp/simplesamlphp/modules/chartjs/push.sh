#!/bin/sh

setup_git() {
  git config --global user.email "travis@travis-ci.org"
  git config --global user.name "Travis CI"
}

commit_website_files() {
  git add *
  TAG_NAME=$(curl -s 'https://api.github.com/repos/chartjs/Chart.js/releases/latest' | python -c "import sys, json; print json.load(sys.stdin)['tag_name']")
  git commit --message "[skip travis] Travis build: $TRAVIS_BUILD_NUMBER" && git tag $TAG_NAME
}

upload_files() {
  git remote add orig https://${GH_TOKEN}@github.com/melanger/simplesamlphp-module-chartjs.git > /dev/null 2>&1
  git push --quiet --set-upstream orig master
  git push --quiet --tags
}

setup_git
commit_website_files
upload_files
