#!/bin/sh

sudo apt-get update
sudo apt-get -y install samba samba-common-bin
sudo bash -c 'cat samba.txt >> /etc/samba/smb.conf'
sudo smbpasswd -s -a fatec<<EOF
fatec
fatec
EOF
sudo /etc/init.d/smbd restart
sudo /etc/init.d/nmbd restart
