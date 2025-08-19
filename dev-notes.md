## Build Docker image targeting amd64:
docker build --platform linux/amd64 -t my-wordpress-sqlite .

## Running locally
docker run -p 8080:8080 \
  -v $(pwd)/wordpress:/var/www/html \
  my-wordpress-sqlite

## Re-tag and push:
docker tag my-wordpress-sqlite rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:19-aug-2025__13.53.26 && docker push --max-concurrent-uploads=1 rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:19-aug-2025__13.53.26

docker buildx build --platform linux/amd64 -t rg.fr-par.scw.cloud/namespace-youthful-engelbart/my-wordpress-sqlite:19-aug-2025__14.02.34 --push .
