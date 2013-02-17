<?php

$user = $argv[1];
$rep = $argv[2];

if (!empty($user) && !empty($rep)):
   `mkdir $rep`;
   `cp gitignore.txt README.md LICENSE LICENSES $rep/`;
   `cd $rep`;
   `git init`;
   `git remote add origin ssh://git@bitbucket.org/$user/$rep.git`;
   `mv gitignore.txt .gitignore`;
   `git add .gitignore`;
   `git add README.md`;
   `git add LICENSE`;
   `git add LICENSES`;
   `git commit -m "Staging repository."`;
   `git push -u origin master`;
else:
   echo "Must pass in user and repository name. Uses SSH.\n\n";
endif;

?>
