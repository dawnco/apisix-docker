
mkdir -p          /data/apisix_dashboard_log
chmod 777         /data/apisix_dashboard_log
mkdir -p          /data/etcd_data
chmod 777         /data/etcd_data
mkdir -p          /data/prometheus_data
chmod 777         /data/prometheus_data
mkdir -p          /data/alertmanager_data
chmod 777         /data/alertmanager_data

docker-compose -p apisix up -d
