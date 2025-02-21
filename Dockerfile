# Use Ubuntu as base image
FROM ubuntu:latest

# Set noninteractive mode for silent installation
ENV DEBIAN_FRONTEND=noninteractive

# Install dependencies and download XAMPP
RUN apt update && apt install -y wget curl unzip && \
    wget https://www.apachefriends.org/xampp-files/8.2.4/xampp-linux-x64-8.2.4-0-installer.run && \
    chmod +x xampp-linux-x64-8.2.4-0-installer.run && \
    ./xampp-linux-x64-8.2.4-0-installer.run --mode unattended && \
    rm xampp-linux-x64-8.2.4-0-installer.run

# Set up XAMPP paths
ENV PATH="/opt/lampp/bin:$PATH"

# Copy PHP project to htdocs
COPY ./php-project /opt/lampp/htdocs/

# Expose ports (Apache: 80, MySQL: 3306)
EXPOSE 80 3306

# Start Apache and MySQL on container startup
CMD ["/opt/lampp/lampp", "start"]
