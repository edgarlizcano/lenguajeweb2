# lenguajeweb2

…or create a new repository on the command line

echo "# proyecto-evadocente" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:edgarlizcano/lenguajeweb2.git
git push -u origin master

…or push an existing repository from the command line

git remote add origin git@github.com:edgarlizcano/lenguajeweb2.git
git push -u origin master

Commit

git add .
git status
git commit -m "mensaje"
git push origin master