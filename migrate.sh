#!/bin/bash

# Menjalankan migrasi
sudo docker exec donordarah_container php artisan migrate

# Menjalankan seeding untuk RoleSeeder
sudo docker exec donordarah_container php artisan db:seed --class=RoleSeeder

# Menjalankan seeding untuk UserSeeder
sudo docker exec donordarah_container php artisan db:seed --class=UserSeeder
