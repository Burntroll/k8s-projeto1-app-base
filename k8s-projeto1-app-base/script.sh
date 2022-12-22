#!/bin/bash

echo "Creating images..."

docker build -t burntroll/backend-project:1.0 backend/.
docker build -t burntroll/database:1.0 database/.

echo "Pushing images..."

docker push burntroll/back-end-project:1.0
docker push burntroll/database:1.0

echo "Creating services in Kubernetes Cluster..."

kubectl apply -f ./services.yml

echo "Executing deployment..."

kubectl apply -f ./deployment.yml
