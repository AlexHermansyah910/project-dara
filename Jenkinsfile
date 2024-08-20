pipeline {
    agent any

    environment {
        IMAGE_NAME = 'alexhermansyah/donordarah:latest'
        CONTAINER_NAME = 'donordarah_container'
        DB_CONTAINER_NAME = 'dbdonordarah'
        DB_NAME = 'dbdonordarah'
        DB_VOLUME_NAME = 'dbdonordarah_volume'
        DB_NETWORK_NAME = 'donordarah_network'
        PHPMYADMIN_CONTAINER_NAME = 'phpmyadmin_donordarah'
        DOCKER_USERNAME = credentials('usernamedocker')
        DOCKER_PASSWORD = credentials('passworddocker')
        EC2_HOST = '3.92.16.28'
        DBPASSWORD = credentials('dbpassword')
        SSH_KEY_ID = 'remote-ec2-ssh'

        // Port configuration
        DB_PORT_CONTAINER = '3306'
        PHPMYADMIN_PORT_HOST = '8080'
        PHPMYADMIN_PORT_CONTAINER = '80'
        APP_PORT_HOST = '80'
        APP_PORT_CONTAINER = '80'
    }

    options {
        timeout(time: 30, unit: 'MINUTES')
    }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    sh '''
                    docker build -t ${IMAGE_NAME} .
                    '''
                }
            }
        }

        stage('Push Docker Image') {
            steps {
                script {
                    sh '''
                    echo "${DOCKER_PASSWORD}" | docker login -u ${DOCKER_USERNAME} --password-stdin
                    docker push ${IMAGE_NAME}
                    '''
                }
            }
        }

        stage('Deploy Docker Container on EC2') {
            steps {
                script {
                    echo "Deploying Docker Container on EC2"
                    echo "EC2 Host: ${EC2_HOST}"
                    withCredentials([file(credentialsId: "${SSH_KEY_ID}", variable: 'SSH_KEY')]) {
                        sh '''
                        ssh -T -i ${SSH_KEY} -o StrictHostKeyChecking=no ubuntu@${EC2_HOST} <<EOF
echo "${DOCKER_PASSWORD}" | sudo docker login -u ${DOCKER_USERNAME} --password-stdin
echo "MARIADB_DATABASE=${DB_NAME}"
sudo docker stop ${CONTAINER_NAME} || true
sudo docker rm ${CONTAINER_NAME} || true
sudo docker stop ${PHPMYADMIN_CONTAINER_NAME} || true
sudo docker rm ${PHPMYADMIN_CONTAINER_NAME} || true
sudo docker stop ${DB_CONTAINER_NAME} || true
sudo docker rm ${DB_CONTAINER_NAME} || true
sudo docker volume create ${DB_VOLUME_NAME} || true
sudo docker network create ${DB_NETWORK_NAME} || true
sudo docker pull ${IMAGE_NAME}
sudo docker run -d -p ${DB_PORT_CONTAINER} --name ${DB_CONTAINER_NAME} --restart unless-stopped -e MARIADB_ROOT_PASSWORD=12345678 -e MYSQL_DATABASE=${DB_NAME} -e MARIADB_DATABASE=${DB_NAME} --network ${DB_NETWORK_NAME} -v ${DB_VOLUME_NAME}:/var/lib/mysql docker.io/mariadb
sudo docker run -d -p ${PHPMYADMIN_PORT_HOST}:${PHPMYADMIN_PORT_CONTAINER} -e PMA_HOST=${DB_CONTAINER_NAME} --name ${PHPMYADMIN_CONTAINER_NAME} --restart unless-stopped --network ${DB_NETWORK_NAME} docker.io/phpmyadmin
sudo docker run -d --name ${CONTAINER_NAME} --network ${DB_NETWORK_NAME} -p ${APP_PORT_HOST}:${APP_PORT_CONTAINER} --restart unless-stopped ${IMAGE_NAME}
sudo docker exec donordarah_container php artisan migrate
sudo docker exec donordarah_container php artisan db:seed --class=RoleSeeder
sudo docker exec donordarah_container php artisan db:seed --class=UserSeeder
EOF
                        '''
                    }
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
        success {
            echo 'Deployment succeeded!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
