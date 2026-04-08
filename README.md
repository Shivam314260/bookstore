CICDPipeline/
Build Steps

1st Build

docker build --no-cache -t cicd-image .

2nd Build

docker rm -f cicd-container || exit 0
docker run -d -p 8081:80 --name cicd-container cicd-image

---------------------------------------------------------------------------------
Jenkins/
Build Steps

1st Build 

docker build --no-cache -t jenkins-image .

2nd Build

docker rm -f jenkins-container || exit 0
docker run -d -p 8082:80 --name jenkins-container jenkins-image

----------------------------------------------------------------------------------
ThankYou/
Build Steps

1st Build

docker build --no-cache -t thankyou-image .

2nd Build

docker rm -f thankyou-container || exit 0
docker run -d -p 8083:80 --name thankyou-container thankyou-image




cd remove123
git rm demo.html
git commit -m "file removed"
git push

git clone --mirror<repository-url>remove123.git
java -jar bfg.jar --delete-files demo.html --no-blob-protection remove123.git
cd remove123.git
git reflog expire --expire=now --all git gc --prune=now --aggressive
git push --force
git log --all -- demo.html
