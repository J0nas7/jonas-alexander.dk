#!/bin/bash

# Generate timestamp for image tag
TIMESTAMP=$(date +%d-%b-%Y__%H.%M.%S)

# Define image and container variables
IMAGE="rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:$TIMESTAMP"
CONTAINER_ID="18b4eb62-9cd2-40ae-81c4-f2ad2795335b"

# Build and tag the Docker image
docker build --platform linux/amd64 -t my-wordpress-sqlite .
docker tag my-wordpress-sqlite $IMAGE

# Push the image to the registry
docker push $IMAGE

# Update the Scaleway container with the new image
scw container container update $CONTAINER_ID registry-image=$IMAGE

echo "WordPress image built, pushed, and container updated with tag: $TIMESTAMP"
