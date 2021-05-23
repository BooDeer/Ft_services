minikube delete
minikube start --driver=virtualbox
minikube addons enable metallb
eval $(minikube docker-env)

docker build -t nginx srcs/nginx
docker build -t wordpress srcs/wordpress
docker build -t phpmyadmin srcs/phpmyadmin
docker build -t mysql srcs/mysql
docker build -t ftps srcs/ftps
docker build -t influxdb srcs/influxdb
docker build -t grafana srcs/grafana

kubectl apply -f srcs/yamls
minikube dashboard