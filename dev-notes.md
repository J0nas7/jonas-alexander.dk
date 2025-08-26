## Build Docker image targeting amd64:
docker build --platform linux/amd64 -t my-wordpress-sqlite .

## Running bash script (.sh)
Make it executable: chmod +x deploy-wordpress.sh
Run it: ./deploy-wordpress.sh

## Running locally
docker run -p 8080:8080 \
  -v $(pwd)/wordpress:/var/www/html \
  my-wordpress-sqlite

## Re-tag and push:
docker tag my-wordpress-sqlite rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:25-aug-2025__23.04.33 && docker push rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:25-aug-2025__23.04.33

docker buildx build --platform linux/amd64 -t rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:25-aug-2025__23.06.04 --push .


docker buildx build --no-cache --platform linux/amd64 -t rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:25-aug-2025__23.12.12 --push .

