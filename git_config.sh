#!/bin/bash

git config --global user.name "Theusu"
git config --global user.email "poligonos11@yahoo.com"


sudo apt-get -y install samba samba-common-bin
sudo bash -c 'cat samba.txt >> /etc/samba/smb.conf'
sudo smbpasswd -s -a fatec<<EOF
fatec
fatec
EOF
sudo /etc/init.d/smbd restart
sudo /etc/init.d/nmbd restart
